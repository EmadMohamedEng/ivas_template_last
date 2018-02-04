@extends('template')
@section('page_title')
	Settings
@stop
@section('content')
	@include('errors')
<!-- BEGIN Content -->
<div id="main-content">
	<div class="row">
	    <div class="col-md-12">
	        <div class="box box-black">
	            <div class="box-title">
	                <h3><i class="fa fa-table"></i> Settings Table</h3>
	                <div class="box-tool">
	                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
	                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
	                </div>
	            </div>
	            <div class="box-content">
					<div class="btn-toolbar pull-right">
						<div class="btn-group">
							<a class="btn btn-circle show-tooltip" title="" href="{{url('setting/new')}}" data-original-title="Add new record"><i class="fa fa-plus"></i></a>
							<?php 
								$table_name = "settings" ; 
								// pass table name to delete all function 
								// if the current route exists in delete all table flags it will appear in view
								// else it'll not appear
							?>
							@include('partial.delete_all') 
						</div>
					</div>
					<br><br>
					<div class="table-responsive">
						<table class="table table-advance">
						<thead>
							<tr>
								<th style="width:18px"><input type="checkbox" onclick="select_all('settings')"></th>
								<th>Key</th>
								<th>Value</th>
								<th class="visible-md visible-lg" style="width:130px">Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($settings as $setting)
							<tr class="table-flag-blue">
								<td><input class="select_all_template" type="checkbox" name="selected_rows[]" value="{{$setting->id}}" onclick="collect_selected(this)"></td>
								<td>{{$setting->key}}</td>
								<td>
									@if(file_exists($setting->value))
                                     @if($setting->type == "3")
										<img src="{{url($setting->value)}}" width="300" height="225">
                                     @elseif($setting->type == "4")
                                       <video controls="" width="300" height="225">
                                        	<source src="{{url($setting->value)}}" preload="none">
                                        </video>
                                     @elseif($setting->type == "5")
                                       <audio controls="">
                                            <source src="{{url($setting->value)}}" type="audio/mpeg" preload="none">
                                        </audio>
                                     @endif
									@else
										{!! $setting->value !!}
									@endif
								</td>
								<td class="visible-md visible-lg">
								    <div class="btn-group">
								    	<a class="btn btn-sm show-tooltip" title="" href="{{url('setting/'.$setting->id.'/edit')}}" data-original-title="Edit"><i class="fa fa-edit"></i></a>
								        <a class="btn btn-sm btn-danger show-tooltip" title="" onclick = 'return ConfirmDelete()' href="{{url('setting/'.$setting->id.'/delete')}}" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
								    </div>
								</td>
							</tr>
						@endforeach
						</tbody>
						</table>
					</div>
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