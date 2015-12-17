<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/vendor/jquery.ui.widget.js') !!}"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->

<script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/load-image.all.min.js') !!}"></script>
<script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/canvas-to-blob.min.js') !!}"></script>
<!-- <script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/bootstrap.min.js') !!}"></script> -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/jquery.iframe-transport.js') !!}"></script>
<!-- The basic File Upload plugin -->
<script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/jquery.fileupload.js') !!}"></script>
<!-- The File Upload processing plugin -->
<script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/jquery.fileupload-process.js') !!}"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/jquery.fileupload-image.js') !!}"></script>
<!-- The File Upload audio preview plugin -->
<script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/jquery.fileupload-audio.js') !!}"></script>
<!-- The File Upload video preview plugin -->
<script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/jquery.fileupload-video.js') !!}"></script>
<!-- The File Upload validation plugin -->
<script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/jquery.fileupload-validate.js') !!}"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('#send-btn').click(function(){
    $.ajax({
      url: 'post/status',
      // url: {!! url(GLobalHelpers::indexUrl().'/post/status') !!},
      type: "get",
      data: {'article':$('#article').val(),
             'tags':$('input[name=tags]').val(),
             'link':$('input[name=link]').val(),
             '_token': $('input[name=_token]').val()},
      success: function(data){
        alert(data);
      }
    });
  });

  // Link Action In Post
  $('a.hastag').click(function (event)
  {$("#hastag").show();$("#link").hide();$("#imagePost").hide();});
  $('a.link').click(function (event)
  {$("#hastag").hide();$("#link").show();$("#imagePost").hide();});
  $('a.imageLink').click(function (event)
  { $("#hastag").hide();$("#link").hide(); $("#imagePost").show(); });

});

$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : 'server/php/',
        uploadButton = $('<button/>')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });

            uploadButton = $('<button/>')
               .addClass('btn btn-primary')
               .prop('disabled', true)
               .text('Processing...')
               .on('click', function () {
                   var $this = $(this),
                       data = $this.data();
                   $this
                       .off('click')
                       .text('Abort')
                       .on('click', function () {
                           $this.remove();
                           data.abort();
                       });
                   data.submit().always(function () {
                       $this.remove();
                   });
               });

            $('#fileImage').fileupload({
              //  url: "{!! url('/post/uploads') !!}",
               url: "{{ url('/post/upload') }}",
               dataType: 'json',
               acceptFileTypes: /(\.|\/)(gif|jpe?g|png|zip|rar)$/i,
               maxFileSize: 10000000, // 5 MB
               // Enable image resizing, except for Android and Opera,
               // which actually support image resizing, but fail to
               // send Blob objects via XHR requests:
               // autoUpload: false,
               disableImageResize: /Android(?!.*Chrome)|Opera/
                   .test(window.navigator.userAgent),
               previewMaxWidth: 100,
               previewMaxHeight: 100,
               previewCrop: true,
               progress: function(e, data){
                   console.log(data);
                   var index = data.index;
                   var progress = parseInt(data._progress.loaded / data._progress.total * 100, 10);
                   $(data.context).find('.progress-bar').css('width',progress+"%");
               }
            }).on('fileuploadadd', function (e, data) {
               console.log(data);
               var acceptFileTypes = /^image\/(gif|jpe?g|png)$/i;
               data.context = $('<div/>').appendTo('#files');
               $.each(data.files, function (index, file) {
                   var node = $('<p/>')
                           .append('<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">'+
                                   '<div class="progress-bar progress-bar-success" style="width:0%;"></div>'+
                               '</div>'
                           );

                   node.appendTo(data.context);
               });
            }).on('fileuploadprocessalways', function (e, data) {
               console.log(data);
               $('.button-submit').attr('disabled','');
               var index = data.index,
                   file = data.files[index],
                   node = $(data.context.children()[index]);
                   data.context.addClass('content-file').children().prepend('<span class="close-upload"><i class="icon-close"></i></span>');
               if (file.preview) {
                   node
                       .prepend('<br>')
                       .prepend(file.preview);
               }else{
                   node
                       .prepend('<div class="file-preview"><i class="icon-file3"></i></div>');
               }
               if (file.error) {
                   node
                       .append('<br>')
                       .append($('<span class="text-danger"/>').text(file.error));
               }
               if (index + 1 === data.files.length) {
                   data.context.find('button')
                       .text('Upload')
                       .prop('disabled', !!data.files.error);
               }
            }).on('fileuploadprogressall', function (e, data) {
               var progress = parseInt(data.loaded / data.total * 100, 10);
               $(this).find('.progress .progress-bar').css(
                   'width',
                   progress + '%'
               );
            }).on('fileuploaddone', function (e, data) {
               // console.log(data);return false;
               $.each(data.result, function (index, file) {
                   if (file.url) {
                       $(data.context.children()[index]).find('.progress').fadeOut('medium',function(){
                           $(this).remove();
                       });
                       $(data.context.children()[index]).append('<input type="hidden" name="nama_file[]" value="'+file.name+'">');
                   } else if (file.error) {
                       data.context.remove();
                   }
               });
               $('.button-submit').removeAttr('disabled');
            }).on('fileuploadfail', function (e, data) {
               $.each(data.files, function (index) {
                   var error = $('<span class="text-danger"/>').text('File upload failed.');
                   $(data.context.children()[index])
                       .append('<br>')
                       .append(error);
               });
            }).prop('disabled', !$.support.fileInput)
               .parent().addClass($.support.fileInput ? undefined : 'disabled');

            $(document).on('click', '.close-upload', function(event) {
               event.preventDefault();
               if(confirm('Apakah anda yakin ?')){
                   $(this).parent().parent().remove();
               }
            });

});

</script>
