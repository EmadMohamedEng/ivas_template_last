<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\RouteModel ;
use App\Role ;
use App\RoleRoute ; 
use Validator;
class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    
 
    public function index()
    { 
        $routes = RouteModel::all() ;  
        return view('route.index',compact('routes')) ; 
    }

    public function index_v2()
    {
    
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $roles = Role::all() ; 
        $route = null ; 
        $controllers = $this->get_controllers() ; // in main controller  
        $methods = array() ;
        if(isset($request['role']))
        {
            $id = $request['role']; 
            $query = "SELECT * FROM routes JOIN role_route ON routes.id = role_route.route_id JOIN roles ON role_route.role_id = roles.id WHERE roles.id = $id ORDER BY routes.controller_name" ; // order by here to sort them as the file system sorting
            $methods = \DB::select($query) ;       
        } 
        return view('route.create',compact('roles','route','controllers','methods')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'method' => 'required|min:3|unique_with:routes,method,route',
            'route' => 'required|min:3|unique_with:routes,method,route',
            'controller_name' => 'required' , 
            'function_name' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        $route['method'] = $request['method'] ;
        $route['route'] = $request['route'] ; 
        $route['controller_name'] = $request['controller_name'] ;
        $route['function_name'] = $request['function_name'] ; 
        $added = RouteModel::create($route) ;
        if(isset($request['role']))
        {
            foreach($request['role'] as $item)
            {
                $role_route['role_id'] = $item ;
                $role_route['route_id'] = $added->id ; 
                RoleRoute::create($role_route) ; 
            }       
        }
 
        \Session::flash('success',\Lang::get('messages.custom-messages.created'));
        return redirect('routes') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all() ; 
        $route = RouteModel::findOrFail($id) ; 
        $controllers = $this->get_controllers() ;
        return view('route.create',compact('roles','route','controllers')) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'method' => 'required|min:3|unique_with:routes,method,route,'.$id,
            'route' => 'required|min:3|unique_with:routes,method,route,'.$id,
            'controller_name' => 'required' , 
            'function_name' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $old = RouteModel::findOrFail($id) ; 
        $old['method'] = $request['method'] ;
        $old['route'] = $request['route'] ; 
        $old['controller_name'] = $request['controller_name'] ;
        $old['function_name'] =  $request['function_name'] ; 
        $old->save()  ; 
        
        RoleRoute::where('route_id',$id)->delete() ; 
        if(isset($request['role']))
        {
            foreach($request['role'] as $item)
            {
                $role_route['role_id'] = $item ;
                $role_route['route_id'] = $id ; 
                RoleRoute::create($role_route) ; 
            }            
        } 
        \Session::flash('success',\Lang::get('messages.custom-messages.updated'));
        return redirect('routes') ;        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RouteModel::destroy($id) ;
        \Session::flash('success',\Lang::get('messages.custom-messages.deleted'));
        return redirect('routes') ;        
    }
}
