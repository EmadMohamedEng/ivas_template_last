@extends('template')
@section('page_title')
    Settings
@stop
@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    @include('errors')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i>Setting</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">

                    <form action="{{url('setting/'.$setting->id.'/update')}}" method="post" class="form-horizontal form-bordered form-row-stripped" enctype="multipart/form-data">
              			{!! csrf_field() !!}
                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Key</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="key" id="key" value="{{$setting->key}}" placeholder="key" class="form-control" readonly required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Value</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                @if(file_exists($setting->value))
                                    <div class='col-sm-9 col-lg-10 controls'>
                                        <div class='fileupload fileupload-new' data-provides='fileupload'>
                                            <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{url($setting->value)}}" alt="" />
                                            </div>
                                            <div class='fileupload-preview fileupload-exists img-thumbnail' style='max-width: 200px; max-height: 150px; line-height: 20px;'></div>
                                            <div>
                                            <span class='btn btn-default btn-file'><span class='fileupload-new'>Select image</span>
                                            <span class='fileupload-exists'>Change</span>
                                            <input type='file' name='value' accept="image/*"></span>
                                                <a href='#' class='btn btn-default fileupload-exists' data-dismiss='fileupload'>Remove</a>
                                            </div>
                                        </div>
                                        <span class='label label-important'>NOTE!</span>
                                        <span>Only extension supported jpg, png, and jpeg</span>
                                    </div>
                                    <br>
                                @else
                                    @if($setting->value[0]=="<" || $setting->value[strlen($setting->value)-3]==">")
                                        <textarea name="value" name="value" placeholder="value" class="form-control col-md-12 ckeditor" required>{{$setting->value}}</textarea>
                                    @else
                                        <textarea name="value" name="value" placeholder="value" class="form-control col-md-12" required>{{$setting->value}}</textarea>
                                    @endif
                                @endif
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
        $('#setting').addClass('active');
        $('#setting-index').addClass('active');
    </script>
@stop