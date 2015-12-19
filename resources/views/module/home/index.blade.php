@extends('main')

@section('style')
  	<link href="{!! asset('css/additional.css') !!} "rel="stylesheet" type="text/css"/>
    @include('module.home.style')
    <style type="">
      .glyphicon {
          top: -117px;
          right: -92px;
        }
      .content-file-comment {
          padding: 5px;
          float: left;
          background: #ffffff;
          width: 106px;
          height: 108px;
          box-shadow: 0px 0px 3px #ddd;
          margin: 10px;
          position: relative;
      }
    </style>
@stop

@section('content')
<div class="row">
  <div class="">
      <!--/.sidebar-->
  </div><!--/.span3-->

  <div class="span12">
    <div class="content">
      <div class="module">
        <div class="module-head">
          <h3>News Feed</h3>
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
                  <button type="submit" id="send-btn" class="btn btn-primary pull-right">Updated Status</button>
                  <a href="#" class="imageLink btn btn-small" rel="tooltip"
                    data-placement="top" data-original-title="Upload a photo">
                    <i class="icon-camera shaded"></i>
                  </a>
                  <a href="#" class="hastag btn btn-small" rel="tooltip" data-placement="top" data-original-title="Upload a video">
                    <i class="icon-facetime-video shaded"></i>
                  </a>
                  <a href="#" class="link btn btn-small" rel="tooltip" data-placement="top" data-original-title="Pin your location">
                    <i class="icon-map-marker shaded"></i>
                  </a>
                </div>
              </div>
              {!! Form::close() !!}
          </div>

          <div class="stream-list">
            <div class="media stream new-update">
              <a href="#">
                <i class="icon-refresh shaded"></i>
                11 updates
              </a>
            </div>
            @foreach($dataPost as $key => $value)
              <div class="media stream">
                <a href="#" class="media-avatar medium pull-left">
                  <img src="images/user.png">
                </a>
                <div class="media-body">
                  <div class="stream-headline">
                    <h5 class="stream-author">
                      {!! $value['created_by'] !!}
                      <small>{!! GLobalHelpers::formatDate($value['created_at']) !!}</small>
                    </h5>
                    <div class="stream-text">
                       {!! $value['article'] !!}
                    </div>
                    <?php $image = $value['detail']; ?>
                    <div class="stream-attachment photo">
                      <div id="#" class="files-input" style="margin:0px;">
                        @foreach($image as $key => $valueImage)
                            <div class="content-file">
                                <img src="{!! url($valueImage['image']) !!}" style="width:100px; height:113px">
                            </div>
                        @endforeach
                      </div>
                    </div>
                  </div><!--/.stream-headline-->

                  <div class="stream-options">
                    <a href="#" class="comment btn btn-small" data-seq="{!! $value['id'] !!}">
                      <i class="icon-reply shaded"></i>
                      Komentar
                    </a>
                  </div> <br/>
                  <div id="postComment" style="margin-left:21px">
                    <div class="stream-headline">
                      <h5 class="stream-author">
                        {!! $value['created_by'] !!}
                        <small>{!! GLobalHelpers::formatDate($value['created_at']) !!}</small>
                      </h5>
                      <div class="stream-text">
                         {!! $value['article'] !!}
                      </div>
                      <?php $image = $value['detail']; ?>
                      @if(!empty($image))
                      <div class="stream-attachment photo">
                        <div id="#" class="files-input" style="margin:0px;height: 125px;">
                          @foreach($image as $key => $valueImage)
                              <div class="content-file-comment">
                                  <img src="{!! url($valueImage['image']) !!}" style="width:98px; height:96px">
                              </div>
                          @endforeach
                        </div>
                      </div>
                      @endif
                    </div><!--/.stream-headline-->
                  </div>

                  {!! Form::open(array('url'=>GLobalHelpers::indexUrl().'/comment/'.$value['id'], 'method' => 'post', 'id'=>'formpostcomment')) !!}
                  <div class="row-fluid" style="margin-left:21px;width: 80%;padding-right:15px;">
                    <textarea class="span12" id="commentPost" style="height: 70px; resize: none;"></textarea>
                  </div><br/>
                  <div class="row-fluid" id="" style="margin-left:21px;width: 80%;padding-right:15px;">
                    <div class="form-group">
                        <div class="input-file-upload" style="margin-top: -25px;">
                          <div class="fileUpload btn-mini" style="width:63px; text-align:center;">
                              <span><i class="fa fa-picture-o" style="margin-right:7px"></i> Gambar</span>
                              <input id="fileImageCommentar" type="file" name="files[]" multiple class="upload form-control" >
                          </div>
                        </div>
                          <!-- The container for the uploaded files -->
                        <div id="filesComment" class="files-input" style="margin:0px;"></div>
                        <button type="submit" class="btn btn-info" style="float:right;margin-top:2px;">Kirim</button>
                    </div>
                  </div>
                  {!! Form::close() !!}

                </div>
              </div><!--/.media .stream-->
            @endforeach

            <div class="media stream load-more">
              <a href="#">
                <i class="icon-refresh shaded"></i>
                show more...
              </a>
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

  <script type="text/javascript">
  $(document).ready(function(){
    $("#formoid").submit(function(event) {

      /* stop form from submitting normally */
      event.preventDefault();

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
        $( ".content-file" ).remove();
        $("#hastag").tagit("removeAll");

      });
    });

    // Submit Form Send Comment
    $("#formpostcomment").submit(function(event) {
      event.preventDefault();

      var $form = $( this ),
          url = $form.attr( 'action' );

      var posting = $.post( url, {
          _token: "{{ csrf_token() }}",
          image: $('input[name="nama_file_comment[]"]').map(function() {
           return $(this).val(); }).get().join(),
          comment : $('#commentPost').val(),
      } );

      posting.done(function( data ) {
        $(':input','#formpostcomment')
          .removeAttr('checked')
          .removeAttr('selected')
          .not(':button, :submit, :reset, :radio, :checkbox')
          .val('');
        $("#filesComment").children().text("");
        $( ".content-file-comment" ).remove();
        var commentPostUser  = data['comment'];
        var commentPostImage = data['imageComment'];
        var newArray = $.map( commentPostImage, function(v){
          return v === "" ? null : v;
        });

        // Action Prepend To Tag Div Comment
        if(newArray.length > 0) {
          var valueLoopImage = "";
          var addImage = data['imageCommentContent'] ;
        }else{
          var addImage = "";
        }

        $("#postComment").append('<div class="stream-headline">'+
                                  '<h5 class="stream-author">anonim<small>18 Dec 2015 at 16:35</small></h5>'+
                                  '<div class="stream-text">'+commentPostUser+'</div>'+
                                  addImage+'</div>'
                                );

      });
    });

    $('a.hastag').click(function (event){
      $("#link").hide();$("#imagePost").hide();
      $('#hastag').tagit({
        showAutocompleteOnFocus : true,
        triggerKeys : ['enter', 'space', 'comma', 'tab'],
        placeholderText: "Tags"
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
        console.log(id);
    });

  });
  </script>

@stop
