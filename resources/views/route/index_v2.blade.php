@extends('template')

@section('page_title')
    {{$controller_name}}
@stop

@section('content')
    @include('errors')

    <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-title">
                                <h3><i class="fa fa-table"></i>{{$controller_name}}</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover fill-head">
                                        <thead>
                                            <tr>
                                                <th>method name</th>
                                                
                                                @foreach($roles as $role)
                                                    <th>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" onchange="check_all({{$role->id}})"/>
                                                        {{$role->name}}
                                                    </label>
                                                    </th>
                                                @endforeach 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {!! Form::open(["url"=>"routes/store_v2","class"=>"form-horizontal"]) !!}
                                            @foreach($methods as $i=>$function_name)
                                            {!! Form::hidden("controller_name",$controller_name) !!}
                                            <?php 
                                                $function_name = str_replace(' ', '', $function_name); // to remove spaces from function name
                                                $j = 0 ; 
                                            ?> 
                                                @if($function_name!="")
                                                <tr>
                                                
                                                    <td> 
                                                    <p>{{$function_name}}</p> 
                                                    {!! Form::hidden("route[$i][$j]",$function_name) !!}
                                                    <?php $j++ ; ?>
                                                    <div class="col-sm-4 col-lg-4 controls">
                                                        <input type="text" name="route[{{$i}}][{{$j++}}]" @foreach($selected_routes as $route) @if($route->function_name == $function_name) value="{{$route->route}}" @endif @endforeach placeholder="Route" class="form-control input-lg">
                                                    </div>  
                                                    <div class="form-group"> 
                                                        <div class="col-sm-3 col-lg-2 controls">
                                                            <select class="form-control chosen-rtl" name="route[{{$i}}][{{$j++}}]">
                                                                <option></option>
                                                                @foreach($method_types as $index=>$type)
                                                                    <option @foreach($selected_routes as $route) @if($route->function_name == $function_name && $route->method==$index) selected @endif @endforeach value="{{$index}}" >{{$type}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>                                                  
                                                    </td>
                                                    @foreach($roles as $index=>$role) 
                                                        <td>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" 
                                                                        name="route[{{$i}}][{{$j++}}]" 
                                                                        value="{{$role->id}}"
                                                                        class = "check_role_{{$role->id}}" 
                                                                        @foreach($selected_routes as $route) @if($route->function_name == $function_name) @foreach($route->roles_routes as $role_route) @if($role_route->role_id == $role->id) checked @endif @endforeach @endif @endforeach
                                                                        />
                                                            </label>
                                                        </td>
                                                    @endforeach 
                                                </tr>
                                                @endif
                                            @endforeach
                                            <div class="btn-group">
                                                <input type="submit" class="btn btn-primary btn-success" value="Save Changes">
                                            </div><br><br>
                                        {!! Form::close() !!}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

@stop

@section('script')
    <script>
        var checked_roles = [] ; 
        function check_all(role_id)
        {
            var index = checked_roles.indexOf(role_id) ;
            if(index!=-1)
            { 
                checked_roles.splice(index,1) ; 
                $('.check_role_'+role_id).prop('checked', false);
            }
            else{ 
                checked_roles.push(role_id) ; 
                $('.check_role_'+role_id).prop('checked', true);
            } 
        }
    </script>

    <script>
        $('#role').addClass('active');
        $('#route-v2-index').addClass('active');
    </script>
@stop