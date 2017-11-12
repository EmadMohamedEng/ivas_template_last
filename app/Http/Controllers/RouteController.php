<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\RouteModel ;
use App\Role ;
use App\RoleRoute ;


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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all() ; 
        $route = null ; 
        return view('route.create',compact('roles','route')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $route['method'] = $request['method'] ;
        $route['route'] = $request['route'] ; 
        $route['controller_method'] = $request['controller_name']."@".$request['method_name'] ; 
        $added = RouteModel::create($route) ;
        
        foreach($request['role'] as $item)
        {
            $role_route['role_id'] = $item ;
            $role_route['route_id'] = $added->id ; 
            RoleRoute::create($role_route) ; 
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
        return view('route.create',compact('roles','route')) ;
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
        $old = RouteModel::findOrFail($id) ; 
        $old['method'] = $request['method'] ;
        $old['route'] = $request['route'] ; 
        $old['controller_method'] = $request['controller_name']."@".$request['method_name'] ; 
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
