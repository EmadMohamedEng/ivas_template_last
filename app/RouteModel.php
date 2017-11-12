<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteModel extends Model
{
    protected $table = "routes" ; 
    protected $fillable = ['method','route','controller_method'] ; 
    
    public function roles_routes()
    {
        return $this->hasMany('App\RoleRoute','route_id','id') ; 
    }
}
