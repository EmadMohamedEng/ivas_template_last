<!doctype html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Resizable - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <style>
  #resizable { width: 150px; height: 150px; padding: 0.5em; }
  #resizable h3 { text-align: center; margin: 0; }
  </style>


  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#resizable" ).resizable();
  } );
  </script>
</head>
<body>
 
<div id="resizable" class="ui-widget-content" style="display:none;">
  <h3 class="ui-widget-header">Resizable</h3>
  <img id="blah" src="#" alt="your image" class="main"/>
</div>
<input type='file' onchange="readURL(this);" />
<style>
.main {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  min-width: 100%;
  min-height: 100% ; 
}
</style>
 
</body>
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
                   $('#blah')
                       .attr('src', e.target.result)
                       .width(250)
                       .height(300);
                   $('#resizable').css({
                                        'width':250,
                                        'height':300,
                                        'display':'block'
                                        }) ;    
               };
               reader.readAsDataURL(input.files[0]);
            }
    }
    </script>
</html>
























