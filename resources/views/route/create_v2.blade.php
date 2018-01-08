@extends('template')

@section('page_title')
    Create Route V:2.0
@stop

@section('content')
    @include('errors')
    
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i>@lang('messages.create-role')</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                {!! Form::open(["url"=>"routes/index_v2","class"=>"form-horizontal","method"=>"GET"]) !!}
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Select Controller</label>
                        <div class="col-sm-9 col-md-10 controls">
                            <select class="form-control chosen" name="controller_name" required>
                                <option value>Select Priority</option>
                                @foreach($controllers as $controller_name=>$item)
                                    <option value="{{$controller_name}}">{{$controller_name}}</option>
                                @endforeach
                            </select> 
                        <br/>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <input type="submit" class="btn btn-primary" value="GO">
                        </div>
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@stop

@section('script')
    <script>
        $('#role').addClass('active');
        $('#route-v2-index').addClass('active');
    </script>
@stop