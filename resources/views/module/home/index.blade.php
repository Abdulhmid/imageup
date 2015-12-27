@extends('main')

@section('style')
  	<link href="{!! asset('css/additional.css') !!} "rel="stylesheet" type="text/css"/>
    <link href="{!! asset('css/additional-post.css') !!} "rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{!! asset('plugins/jQuery-File-Upload-9.11.2/css/bootstrap.min.css') !!}">
    <link href="{!! asset('plugins/tag-it/jquery.tagit.css') !!} "rel="stylesheet" type="text/css"/>
    <link href="{!! asset('plugins/tag-it/tagit.ui-zendesk.css') !!} "rel="stylesheet" type="text/css"/>
    @include('module.home.style')
@stop

@section('content')
<div class="row">
  <div class="">
      <!--/.sidebar-->
  </div><!--/.span3-->

  <div class="span12">
    <div class="content">
      <div class="module">

        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @if(Session::has('message'))
        {!! GLobalHelpers::messages(Session::get('message')) !!}
        @endif
        <div class="module-head">
          <h3>Info Terkini</h3>
        </div>
        <div class="module-body">
          <div class="stream-composer media">
              <a href="#" class="media-avatar medium pull-left">
                <img src="images/user.png">
              </a>
              {!! Form::open(array('url'=>GLobalHelpers::indexUrl().'/status', 'method' => 'post', 'class'=>'form-horizontal','id'=>'formoid')) !!}
              <div class="media-body">
                <div class="row-fluid">
                  <textarea class="span12" id="article" style="height: 70px; resize: none;"></textarea>
                </div><br/>
                <div class="row-fluid" id="imagePost" style="display:none">
                  <div class="form-group">
          		        <div class="input-file-upload" style="margin-top: -28px;">
          			        <div class="fileUpload btn-mini" style="width:150px; text-align:center;">
          							    <span><i class="fa fa-picture-o" style="margin-right:7px"></i> Upload Gambar</span>
          							    <input id="fileImage" type="file" name="files[]" multiple class="upload form-control" >
          							</div>
          						</div>
          					    <!-- The container for the uploaded files -->
          						<div id="files" class="files-input" style="margin:0px;">
                      </div>
                  </div>
                </div>
                <div class="row-fluid">
                  <input type="text" style="display:none" placeholder="enter your hastag" class="span12" id="hastag" />
                  <input type="text" style="display:none" placeholder="enter your link" class="span12" id="link" />
                </div>
                <div class="clearfix" style="margin-top:3px;">
                  <button type="submit" id="send-btn" class="btn btn-primary pull-right">Kirim</button>
                  <a href="#" class="imageLink btn btn-small" rel="tooltip"
                    data-placement="top" data-original-title="Upload a photo">
                    <i class="icon-camera shaded"></i>
                  </a>
                  <a href="#" class="hastag btn btn-small" rel="tooltip" data-placement="top" data-original-title="Upload a video">
                    <i class="icon-screenshot shaded"></i>
                  </a>
                  <a href="#" class="link btn btn-small" rel="tooltip" data-placement="top" data-original-title="Pin your location">
                    <i class="icon-zoom-in shaded"></i>
                  </a>
                </div>
              </div>
              {!! Form::close() !!}
          </div>

          <div class="stream-list">
          <div>
            <div class="media stream new-update">
              <center><span id="loading-stream" class="glyphicon glyphicon-refresh glyphicon-spin"></span></center>
            </div>
            <!-- Additioanal Function For Action ID in Append Data -->
            <input type="text" style="display:none" id="helpUploadId">
            <input id="helpUpload" style="display:none" type="file" name="files[]" multiple class="upload form-control" >
            
            <!-- Main Function -->
            <div id="thisData">

            </div>

            <div class="media stream load-more" style="display:none">
              <a href="#">
                <i class="icon-refresh shaded"></i>
                
              </a>
            </div>
          </div>
          </div><!--/.stream-list-->
        </div><!--/.module-body-->
      </div><!--/.module-->

    </div><!--/.content-->
  </div><!--/.span9-->
</div>
@stop

@section('script')
  <script src="{{ url('plugins/jQuery/jQuery-2.1.3.min.js') }}" type="text/javascript"></script>
  <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
  <script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/vendor/jquery.ui.widget.js') !!}"></script>
  <!-- The Load Image plugin is included for the preview images and image resizing functionality -->

  <script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/load-image.all.min.js') !!}"></script>
  <script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/canvas-to-blob.min.js') !!}"></script>
  <!-- <script src="{!! asset('plugins/jQuery-File-Upload-9.11.2/js/bootstrap.min.js') !!}"></script> -->

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
  <script src="{!! asset('plugins/tag-it/tag-it.js') !!}" type="text/javascript"></script>
  @include('module.home.js')
  @include('module.home.js-post')
  <script type="text/javascript">
  $(document).ready(function(){
    var parameter = "";
    loadData(parameter);
    // Action Post
    $("#formoid").submit(function(event) {
      /* stop form from submitting normally */
      event.preventDefault();

      if ($('#article').val() == "") {
         return false;
      };

      $('#hastag').tagit({
        // showAutocompleteOnFocus : true,
        triggerKeys : ['enter', 'space', 'comma', 'tab'],
        placeholderText: "Enter Tags Here, Using Tabs To New Tags"
      });

      /* get some values from elements on the page: */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post */
      var posting = $.post( url, {

          image: $('input[name="nama_file[]"]').map(function() {
           return $(this).val(); }).get().join(),
          // image: $('[name="nama_file[]"]').val(),
          article : $('#article').val(),
          hastag  : $('#hastag').val(),
          link  : $('#link').val(),
      } );

      /* Alerts the results */
      posting.done(function( data ) {
        $(':input','#formoid')
          .removeAttr('checked')
          .removeAttr('selected')
          .not(':button, :submit, :reset, :radio, :checkbox')
          .val('');
        $("#files").children().text("");
        $("#imagePost div.content-file").remove();
        $("#hastag").tagit("removeAll");
        // $(".tagit").hide();
        var parameter = data;
        loadData(parameter);

      });
      return false;
    });

    // Submit Form Send Comment

    $('a.hastag').click(function (event){
      $("#link").hide();$("#imagePost").hide();
      $('#hastag').tagit({
        // showAutocompleteOnFocus : true,
        triggerKeys : ['enter', 'space', 'comma', 'tab'],
        placeholderText: "Enter Tags Here, Using Tabs To New Tags"
      });
      $(".tagit").show(); $(".tagit-hidden-field").hide(); });
    $('a.link').click(function (event){
      $("#hastag").hide();$("#link").show();$("#imagePost").hide();
      $(".tagit").hide(); $(".tagit-hidden-field").hide();
    });
    $('a.imageLink').click(function (event){
      $("#hastag").hide();$("#link").hide(); $("#imagePost").show();
      $(".tagit").hide(); $(".tagit-hidden-field").hide();
    });

    $('a.comment').click(function (event)
    {
        var id = $(this).data('seq');
        console.log(id+"dsdsdfdsf989997342893729");
    });

  });

  $(document).on('click', '#subOk', function (event) {
      // var $form = $( this ),
          // url = $form.attr( 'action' );
      var id = $(this).val();
      
      var url = 'comment/'+$(this).val();
      var posting = $.post( url, {
          _token: "{{ csrf_token() }}",
          image: $('input[name="nama_file_comment[]"]').map(function() {
           return $(this).val(); }).get().join(),
          comment : $(document).find('#commentPost'+id).val(),
      } );

      
      posting.done(function( data ) {
        $(document).find('#commentPost'+id).val("");
        $(document).find("#filesComment").children().text("");
        $(document).find( ".content-file-comment" ).remove();
        var commentPostUser  = data['comment'];
        var commentPostImage = data['imageComment'];
        var created_by = data['created_by'];
        var newArray = $.map( commentPostImage, function(v){
          return v === "" ? null : v;
        });
      
        // Action Prepend To Tag Div Comment
        if(newArray.length > 0) {
          var valueLoopImage = "";
          var addImage =  '<div class="stream-attachment photo">'+
                          '<div id="#" class="files-input" style="margin:0px;">'+
                          data['imageCommentContent']+'</div></div>' ;
        }else{
          var addImage = "";
        }
        // $(document).find('#postComment'+data['id'])
        // $("#imagePost div.content-file")
        $('#thisData div#postComment'+data['id']).append('<div class="stream-headline">'+
                                  '<h5 class="stream-author">'+created_by+
                                  '<small>20 Dec 2015 at 14:39</small></h5>'+
                                  '<div class="stream-text">'+commentPostUser+'</div>'+
                                  addImage+
                                  '</div>'
                                );
        // loadData();
        // return false;
      });
  });

  $(document).on('click', '#fileImageCommentar', function (event) {
    $("#helpUploadId").val($(this).val());
    $('#helpUpload').trigger('click');
  });

  function loadData(id){
    if (id == "") {
      $("#thisData").html("");
    }

    var paramId = (id == "" ?  "" : "/"+id);
    // var paramId = (id == "" ?  "" : "");
    $.get("{!! url('data-posting') !!}"+paramId, function (data) {
          if (id == "") {
            $("#thisData").append(data);
          }else{
            $("#thisData").prepend(data);
          }
      })
      .always(function () {
          $('#loading-stream').show();
      })
      .done(function () {
          $('#loading-stream').hide();
      });
  }

  </script>

@stop
