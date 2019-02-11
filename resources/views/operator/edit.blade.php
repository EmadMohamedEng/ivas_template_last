@extends('template')
@section('page_title')
    Operators
@stop
@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    @include('errors')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i>Operator</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">

                    <form action="{{url('operator/'.$operator->id)}}" method="post" class="form-horizontal form-bordered form-row-stripped" enctype="multipart/form-data">
              			     {!! csrf_field() !!}
                         <input type="hidden" name="_method" value="patch">
                         <input id="hidden_key" name="key" type="hidden" />

                         <div class="form-group">
                             <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Country</label>
                             <div class="col-sm-9 col-lg-10 controls">
                                 <select id="first_select" name="country_id" class="form-control chosen-rtl">
                                    @foreach ($countrys as $country)
                                     <option value="{{ $country->id }}" @if($country->id == $operator->country_id) selected @endif>{{ $country->title }}</option>
                                     @endforeach
                                 </select>
                             </div>
                         </div>

                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Operator Name</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="name" id="key" value="{{$operator->name}}" placeholder="operator name" class="form-control"  required>
                            </div>
                        </div>

                        <div class="form-group">
                           <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Sms Code</label>
                           <div class="col-sm-9 col-lg-10 controls">
                               <input type="number" min="0" name="rbt_sms_code" id="key" placeholder="Sms Code" value="{{$operator->rbt_sms_code}}" class="form-control" required>
                           </div>
                         </div>

                         <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Ussd Code</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="number" min="0" name="rbt_ussd_code" value="{{$operator->rbt_ussd_code}}"  id="key" placeholder="Ussd Code" class="form-control" required>
                            </div>
                          </div>

                        <div class="form-group">
                            <div class="col-sm-9 col-lg-10 controls">

                                    <div class='col-sm-9 col-lg-10 controls'>
                                        <div class='fileupload fileupload-new' data-provides='fileupload'>
                                            <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{$operator->image}}" alt="operator image" />
                                            </div>
                                            <div class='fileupload-preview fileupload-exists img-thumbnail' style='max-width: 200px; max-height: 150px; line-height: 20px;'></div>
                                            <div>
                                            <span class='btn btn-default btn-file'><span class='fileupload-new'>Select image</span>
                                            <span class='fileupload-exists'>Change</span>
                                            <input type='file' name='image' accept="image/*"></span>
                                                <a href='#' class='btn btn-default fileupload-exists' data-dismiss='fileupload'>Remove</a>
                                            </div>
                                        </div>
                                        <span class='label label-important'>NOTE!</span>
                                        <span>Only extension supported jpg, png, and jpeg</span>
                                    </div>

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
        $('#operator').addClass('active');
        $('#operator-index').addClass('active');
    </script>
@stop
