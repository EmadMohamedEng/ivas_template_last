<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

function delete_multiselect(Request $request) // select many contract from index table and delete them
{
    $selected_list =  explode(",",$request['selected_list']);
    foreach ($selected_list as $item)
    {
        DB::table($request['table_name'])->where('id',$item)->delete() ;
    }
    \Session::flash('success', \Lang::get('messages.custom-messages.deleted'));
}

function restore($table_name,$record_id)
{
    \DB::table($table_name)->where('id',$record_id)->update(['rectype_id'=>2]);
}


function get_dynamic_routes()
{
        $route = \Request::url() ;
        $request_method = strtolower(\Request::method()) ; 
        $action = "" ; 
        $url_to = \URL::to('') ;  
        $start_from = strpos($route,$url_to) ; 
        for($i=strlen($url_to)+1;$i<strlen($route);$i++) 
        {
            // ex : url = http://localhost/ivas_template_v2/users => so i want to skip all before users 
            $action .= $route[$i] ;  
        }  

        $query = "SELECT * FROM routes 
                  JOIN role_route ON routes.id = role_route.route_id           
                  JOIN roles ON role_route.role_id = roles.id
                  WHERE routes.route = '".$action."' AND routes.method='".$request_method."'" ;  
        $route_model = \DB::select($query); 
        if(count($route_model) > 0)
        {
            dynamic_routes($route_model,true) ;   
        }
        else{ 
            $query_2 = "SELECT * FROM routes  
                        WHERE routes.route = '".$action."' 
                        AND routes.method='".$request_method."'" ;
            $route_model = \DB::select($query_2);  
            dynamic_routes($route_model,false) ; 
        }    
}

function dynamic_routes($route_model,$found_roles)
{    
    $roles = "" ;

    $route = $route_model[0]->route ; 
    $controller_method = $route_model[0]->controller_method ; 
    $route_method = $route_model[0]->method ;
    if($found_roles)
    {
         for($i= 0 ; $i < count($route_model) ; $i++)
         {
            $roles .= $route_model[$i]->name ; 
            if($i < count($route_model) - 1 )
               $roles .= "|" ; 
         }
        Route::group(['middleware' =>['auth',"role:".$roles]], 
        function() use($route_model,$route_method,$route,$controller_method){
                if($route_method=="resource")
                    Route::resource($route,$controller_method) ;   
                else if($route_method=="get")
                    Route::get($route,$controller_method) ;   
                else if($route_method=="post")
                    Route::post($route,$controller_method) ; 
                else if($route_method=="put")
                    Route::put($route,$controller_method) ;
                else if($route_method=="patch")
                    Route::patch($route,$controller_method) ; 
                else if($route_method=="delete")
                    Route::delete($route,$controller_method) ; 
        }) ; 
    }
    else{
          Route::group(['middleware' =>['auth']], 
        function() use($route_model,$route_method,$route,$controller_method){
                if($route_method=="resource")
                    Route::resource($route,$controller_method) ;   
                else if($route_method=="get")
                    Route::get($route,$controller_method) ;   
                else if($route_method=="post")
                    Route::post($route,$controller_method) ; 
                else if($route_method=="put")
                    Route::put($route,$controller_method) ;
                else if($route_method=="patch")
                    Route::patch($route,$controller_method) ; 
                else if($route_method=="delete")
                    Route::delete($route,$controller_method) ; 
        }) ;       
    }  
 }