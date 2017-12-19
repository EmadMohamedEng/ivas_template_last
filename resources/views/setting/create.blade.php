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


                    <form action="{{url('setting')}}" method="post" class="form-horizontal form-bordered form-row-stripped" enctype="multipart/form-data"  novalidate>
              			{!! csrf_field() !!}
                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Setting type</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <select class="form-control chosen-rtl">
                                    <option value="1">Advanced Editor</option>
                                    <option value="2">Normal Editor</option>
                                    <option value="3">Image</option>
                                    <option value="4">Video</option>
                                    <option value="5">Audio</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Key *</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="key" id="key" placeholder="key" class="form-control" required>
                            </div>
                          </div>


                        <div class="form-group"  id="cktextarea">
                            <label class="col-sm-3 col-lg-2 control-label">Value *</label>
                            <div class="col-sm-9 col-lg-10 controls" >
                                <textarea class="form-control col-md-12 ckeditor" name="TxtValue1" rows="6"></textarea>
                            </div>
                        </div>

                        <div class="form-group" hidden id="normal_textarea">
                            <label class="col-sm-3 col-lg-2 control-label">Value *</label>
                            <div class="col-sm-9 col-lg-10 controls" >
                                <textarea class="form-control col-md-12" name="TxtValue2" rows="6"></textarea>
                            </div>
                        </div>


                        <div class="form-group" hidden id="image_div">
                            <label class="col-sm-3 col-lg-2 control-label">Image *</label>
                            <div class='col-sm-9 col-lg-10 controls'>
                                <div class='fileupload fileupload-new' data-provides='fileupload'>
                                    <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                    </div>
                                    <div class='fileupload-preview fileupload-exists img-thumbnail' style='max-width: 200px; max-height: 150px; line-height: 20px;'></div>
                                    <div>
                                                <span class='btn btn-default btn-file'><span class='fileupload-new'>Select image</span>
                                                <span class='fileupload-exists'>Change</span>
                                                <input type='file' name='TxtValue3' accept="image/*"></span>
                                        <a href='#' class='btn btn-default fileupload-exists' data-dismiss='fileupload'>Remove</a>
                                    </div>
                                </div>
                                <span class='label label-important'>NOTE!</span>
                                <span>Only extension supported jpg, png, and jpeg</span>
                            </div>
                        </div>
                        
                        <div class="form-group" hidden id="videocont" novalidate>
                        {!! Form::label('TxtValue4',\Lang::get('messages.video').'*',['class'=>'col-sm-3 col-lg-2 control-label']) !!}
                        <div class="col-sm-9 col-lg-10 controls">
                            {!! Form::file('TxtValue4',["accept"=>"video/*",'class'=>'default']) !!}
                             <span class='label label-important'>NOTE!</span>
                             <span>Only extension supported mp4, flv, and 3gp</span>
                        </div>
                           
                        </div>

                        <div class="form-group" hidden id="audiocont" novalidate>
                            {!! Form::label('TxtValue5',\Lang::get('messages.audio').'*',['class'=>'col-sm-3 col-lg-2 control-label']) !!}
                            <div class="col-sm-9 col-lg-10 controls">
                                {!! Form::file('TxtValue5',["accept"=>"audio/*",'class'=>'default']) !!}
                             <span class='label label-important'>NOTE!</span>
                             <span>Only extension supported mp3 and webm</span>
                            </div>
                        </div>
                        
                        <input type="hidden" name="myField" id="myField" value="1" />

                        <div class="form-group last">
                            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                               <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
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
        $('select').on('change', function() {
            if (this.value == 1) {
                $('#normal_textarea').hide('slow');
                $('#image_div').hide('slow') ;
                $('#videocont').hide('slow');
                $('#audiocont').hide('slow') ;
                $('#cktextarea').show(1000);
                document.getElementById("myField").value = this.value;
            }
            else if (this.value == 2)
            {
                $('#normal_textarea').show(1000) ;
                $('#image_div').hide('slow');
                $('#cktextarea').hide('slow');
                $('#videocont').hide('slow');
                $('#audiocont').hide('slow') ;
                document.getElementById("myField").value = this.value;
            }
            else if(this.value == 3)
            {
                $('#normal_textarea').hide('slow');
                $('#image_div').show(1000) ;
                $('#cktextarea').hide('slow');
                $('#videocont').hide('slow');
                $('#audiocont').hide('slow') ;
                document.getElementById("myField").value = this.value;
            }
            else if(this.value == 4)
            { 
                $('#normal_textarea').hide('slow');
                $('#videocont').show(1000) ;
                $('#cktextarea').hide('slow');
                $('#image_div').hide('slow');
                $('#audiocont').hide('slow') ;
                document.getElementById("myField").value = this.value;
            }
            else if (this.value == 5)
            {
                $('#normal_textarea').hide('slow');
                $('#audiocont').show(1000) ;
                $('#cktextarea').hide('slow');
                $('#image_div').hide('slow');
                $('#videocont').hide('slow') ;
                document.getElementById("myField").value = this.value;
            }
        });

        $('#setting').addClass('active');
        $('#setting-create').addClass('active');
    </script>
@stop