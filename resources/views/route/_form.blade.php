<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">Method *</label>
    <div class="col-sm-9 col-lg-10 controls">
        <select class="form-control chosen-rtl" name="method" required>
            <option value="get" @if($route && $route->method=='get') selected @endif >GET</option>
            <option value="post" @if($route && $route->method=='post') selected @endif  >POST</option>
            <option value="put" @if($route && $route->method=='put') selected @endif>PUT</option>
            <option value="patch" @if($route && $route->method=='patch') selected @endif>PATCH</option>
            <option value="delete" @if($route && $route->method=='delete') selected @endif>DELETE</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">Route *</label>
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::text('route',null, ['class'=>'form-control input-lg','required' => 'required']) !!}
    </div>
</div> 
<?php 
    $controller_name = null ; 
    $method_name = null ; 
    if($route)
    {
        $controller_name = explode('@',$route->controller_method)[0] ; 
        $method_name = explode('@',$route->controller_method)[1] ;     
    }
?>
<div class="form-group">
  <label class="col-sm-3 col-lg-2 control-label">Controller Name *</label>
  <div class="col-sm-9 col-lg-10 controls">
    {!! Form::text('controller_name',$controller_name, ['class'=>'form-control input-lg','required' => 'required']) !!}
  </div>
</div>

<div class="form-group">
  <label class="col-sm-3 col-lg-2 control-label">Method Name *</label>
  <div class="col-sm-9 col-lg-10 controls">
    {!! Form::text('method_name',$method_name, ['class'=>'form-control input-lg','required' => 'required']) !!}
  </div>
</div>

<div class="form-group">
  <label class="col-sm-3 col-lg-2 control-label">Choose roles (optional)</label>
  <div class="col-sm-9 col-lg-10 controls"> 
      <select name="role[]" class="form-control chosen-rtl" multiple>
          @foreach($roles as $role)
              <option value="{{$role->id}}" @if($route) @foreach($route->roles_routes as $item) @if($item->role->id==$role->id)
               selected
              @endif
              @endforeach @endif> {{$role->name}} </option>
          @endforeach
      </select>      
  </div>
</div>
<div class="form-group">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        {!! Form::button('<i class="fa fa-check"></i> Save',['type'=>'submit','class'=>'btn btn-primary']) !!}
    </div>
</div>
