 
 @extends('template')
@section('page_title')
    Upload And Resize
@stop
@section('content')
    @include('errors')
    

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i>Upload And Resize</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div id="resizable" class="ui-widget-content" style="display:none;">
                      <img id="image" src="#" class="main_resizing"/>
                    </div><br>
                    <input id="image_file" type='file' onchange="readURL(this);" />
                    <br><br>
                    <div class="form-group" style="display: none;" id="save_btn"> 
                        <input type="submit" class="btn btn-primary" value="@lang('messages.save')" onclick="save_image()">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop

@section('script')
   <script>
    var width = 250 ; 
    var height = 300 ; 
    $('#resizable').on('resize',function(){
        width = this.style.width  ; 
        height = this.style.height  ;
    });
    function readURL(input) {
           if (input.files && input.files[0]) {
               var reader = new FileReader();

               reader.onload = function (e) {
                   $('#image')
                       .attr('src', e.target.result)
                       .width(250)
                       .height(300);
                   $('#resizable').css({
                                        'width':250,
                                        'height':300,
                                        'display':'block'
                                        }) ;  
                   $('#save_btn').css('display','block');
               };
               reader.readAsDataURL(input.files[0]);
            }
    }
    function save_image()
    { 
        var theImage = $('#image_file').prop('files')[0] ; 
        var form_data = new FormData();
        form_data.append('width',width); 
        form_data.append('height',height) ;
        form_data.append('image',theImage)
       $.ajax({
            type:"POST" , 
            url : "save_image", 
            data:  form_data , 
            cache       : false,
            contentType : false,
            processData : false,
            success : function(result){
                
                if(result=="true")
                {
                   alert('Image saved with new dimensions')    ; 
                }
                else{
                    alert('Error while saving image') ;
                }
                location.reload() ;
            }
       });
    }
    </script>
    <script>
        $('#images').addClass('active');
        $('#upload_resize').addClass('active');
    </script>
@stop 






















