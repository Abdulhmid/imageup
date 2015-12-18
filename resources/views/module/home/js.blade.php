<script src="{!! asset('plugins/tag-it/tag-it.js') !!}" type="text/javascript"></script>
<script>
 jQuery(document).ready(function($) {
    $(".tagit").hide();
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

            $('#fileImage').fileupload({
              url: "{{ url('/upload') }}",
              // url: '/post/store',
              dataType: 'json',
              acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
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
                   var index = data.index;
                   var progress = parseInt(data._progress.loaded / data._progress.total * 100, 10);
                   $(data.context).find('.progress-bar').css('width',progress+"%");
               }
            }).on('fileuploadadd', function (e, data) {
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

               $('.button-submit').attr('disabled','');
               var index = data.index,
                   file = data.files[index],
                   node = $(data.context.children()[index]);
                   data.context.addClass('content-file').children().
                            prepend('<span class="close-upload" id="">'+
                                    '<i class="remove glyphicon glyphicon-remove-sign glyphicon-white"></i></span>');
               if (file.preview) {
                   node
                       .prepend('<br>')
                       .prepend(file.preview);
               }else{
                   node
                       .prepend('<div class="file-preview"><i class="icon-close"></i></div>');
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
               $.each(data.result, function (index, file) {
                   if (file.url) {
                       $(data.context.children()[index]).find('.progress').fadeOut('medium',function(){
                           $(this).remove();
                       });
                       $(data.context.children()[index]).append('<input type="hidden" name="nama_file[]" value="'+file.pathPublic+'">');

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
               var fileName = this.id;
               if(confirm('Apakah anda yakin ?')){
                   $(this).parent().parent().remove();
               }
            });

});

</script>
