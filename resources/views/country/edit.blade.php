@extends('template')
@section('page_title')
    Countries
@stop
@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    @include('errors')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i>country</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">

                  <form action="{{url('country/'.$country->id)}}" method="post" class="form-horizontal form-bordered form-row-stripped" enctype="multipart/form-data">
            			     {!! csrf_field() !!}
                       <input type="hidden" name="_method" value="patch">
                      <div class="form-group">
                          <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Country Name</label>
                          <div class="col-sm-9 col-lg-10 controls">
                              <input type="text" name="title" id="key" value="{{$country->title}}" placeholder="country name" class="form-control"  required>
                          </div>
                      </div>

                      <div class="form-group last">
                          <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                             <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> update</button>
                          </div>
                      </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('script')
    <script>
    $('#country').addClass('active');
    $('#country-index').addClass('active');
    </script>
@stop
