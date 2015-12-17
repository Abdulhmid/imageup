@extends('main')

@section('style')
  	<link href="{!! asset('css/additional.css') !!} "rel="stylesheet" type="text/css"/>
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
        <div class="module-head">
          <h3>News Feed</h3>
        </div>
        <div class="module-body">
          <div class="stream-composer media">
              <a href="#" class="media-avatar medium pull-left">
                <img src="images/user.png">
              </a>
              <div class="media-body">
                <div class="row-fluid">
                  <textarea class="span12" id="article" style="height: 70px; resize: none;"></textarea>
                </div><br/>
                <div class="row-fluid" id="imagePost" style="display:none">
                  <div class="form-group">
          		        <div class="input-file-upload">
          			        <div class="fileUpload btn-mini" style="width:150px; text-align:center;">
          							    <span><i class="fa fa-picture-o" style="margin-right:7px"></i> Upload Gambar</span>
          							    <input id="fileImage" type="file" name="filesImage[]" multiple class="upload form-control" required="true">
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
                <div class="clearfix">
                  <button type="button" id="send-btn" class="btn btn-primary pull-right">Updated Status</button>
                  <a href="#" class="imageLink btn btn-small" rel="tooltip" data-placement="top" data-original-title="Upload a photo">
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
          </div>

          <div class="stream-list">
            <div class="media stream new-update">
              <a href="#">
                <i class="icon-refresh shaded"></i>
                11 updates
              </a>
            </div>
            <div class="media stream">
              <a href="#" class="media-avatar medium pull-left">
                <img src="images/user.png">
              </a>
              <div class="media-body">
                <div class="stream-headline">
                  <h5 class="stream-author">
                    John Donga
                    <small>08 July, 2014</small>
                  </h5>
                  <div class="stream-text">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                  </div>
                  <div class="stream-attachment photo">
                    <div class="responsive-photo">
                      <img src="images/img.jpg" />
                    </div>
                  </div>
                </div><!--/.stream-headline-->

                <div class="stream-options">
                  <a href="#" class="btn btn-small">
                    <i class="icon-reply shaded"></i>
                    Komentar
                  </a>
                  <a href="#" class="btn btn-small">
                    <i class="icon-retweet shaded"></i>
                    Bagikan
                  </a>
                </div>
              </div>
            </div><!--/.media .stream-->
            <div class="media stream">
              <a href="#" class="media-avatar medium pull-left">
                <img src="images/user.png">
              </a>
              <div class="media-body">
                <div class="stream-headline">
                  <h5 class="stream-author">
                    John Donga
                    <small>08 July, 2014</small>
                  </h5>
                  <div class="stream-text">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                  </div>
                  <div class="stream-attachment video">
                    <div class="responsive-video">


                          <iframe src="" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="">Google Car</a> from <a href="">Henk Rogers</a> on <a href="">Vimeo</a>.</p>


                    </div>
                  </div>
                </div><!--/.stream-headline-->

                  <a href="#" class="btn btn-small">
                    <i class="icon-reply shaded"></i>
                    Komentar
                  </a>
                  <a href="#" class="btn btn-small">
                    <i class="icon-retweet shaded"></i>
                    Bagikan
                  </a>
                </div>
              </div>
            </div><!--/.media .stream-->

            <div class="media stream">
              <a href="#" class="media-avatar medium pull-left">
                <img src="images/user.png">
              </a>
              <div class="media-body">
                <div class="stream-headline">
                  <h5 class="stream-author">
                    John Donga
                    <small>08 July, 2014</small>
                  </h5>
                  <div class="stream-text">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                  </div>
                </div><!--/.stream-headline-->

                <div class="stream-options">
                  <a href="#" class="btn btn-small">
                    <i class="icon-reply shaded"></i>
                    Komentar
                  </a>
                  <a href="#" class="btn btn-small">
                    <i class="icon-retweet shaded"></i>
                    Bagikan
                  </a>
                </div>
              </div>
            </div><!--/.media .stream-->

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
  @include('module.home.js')

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

    $('a.hastag').click(function (event)
    {$("#hastag").show();$("#link").hide();$("#imagePost").hide();});
    $('a.link').click(function (event)
    {$("#hastag").hide();$("#link").show();$("#imagePost").hide();});
    $('a.imageLink').click(function (event)
    { $("#hastag").hide();$("#link").hide(); $("#imagePost").show(); });

  });
  </script>

@stop
