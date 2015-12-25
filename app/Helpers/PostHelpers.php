<?php

class PostHelpers {

    public static function htmlData($post){
      $html = "";
      foreach ($post as $key => $value) {

        // Html Image
        $image = $value['detail'];
        $htmlImage = '';
        foreach ($image as $key => $valueImage) {
          $htmlImage .= '<div class="content-file">'.
                          '<img src="'.$valueImage['image'].'" style="width:100px; height:113px">'.
                        '</div>';
        }

        // Html Comment
        $comment = $value['comments'];
        $htmlComment = '';
        foreach ($comment as $key => $valueComment) {

          // Html Image Comment
          $imageComment = $valueComment['detailcomment'];
          $htmlImageComment = '';
          if (!empty($imageComment)) {
                $htmlImageCommentTop = '<div class="stream-attachment photo"><div id="#" class="files-input" style="margin:0px;height: 125px;">';
                $htmlImageCommentContent = '';
                foreach ($imageComment as $key => $valueImageComment) {
                  $htmlImageCommentContent .= '<div class="content-file-comment-list">'.
                                              '<img src="'.$valueImageComment['image'].'" style="width:98px; height:96px">'.
                                              '</div>';
                }
                $htmlImageCommentBottom = '</div></div>';
                $htmlImageComment = $htmlImageCommentTop.$htmlImageCommentContent.$htmlImageCommentBottom;
          }

          if (!empty($comment)) {
            $htmlComment .= '<div id="postComment'.$value['id'].'" style="margin-left:21px">'.
                              '<div class="stream-headline">'.
                              '<h5 class="stream-author">'.$valueComment['created_by'].
                                '<small>'.\GLobalHelpers::formatDate($valueComment['created_at']).
                                '</small>'.
                              '</h5>'.
                              '<div class="stream-text">'. $valueComment['comment'].'</div>'.
                              $htmlImageComment.
                              '</div><!--/.stream-headline-->'.
                            '</div>';
          }
        }

        $postActionComment =  '<form method="POST" action="#" id="formpostcomment">'.
                              '<div class="row-fluid" style="margin-left:21px;width: 80%;padding-right:15px;">'.
                                '<input type="text" class="span12" id="commentPost'.$value['id'].'" style="resize: none;"></input>'.
                              '</div><br/>'.
                              '<div class="row-fluid" id="" style="margin-left:21px;width: 80%;padding-right:15px;">'.
                                '<div class="form-group">'.
                                    '<div class="input-file-upload" style="margin-top: -25px;">'.
                                      '<div class="fileUpload" style="width:63px; text-align:center;">'.
                                          '<span style="margin-left: -45px;"><i class="icon-camera shaded" style="margin-right:7px"></i></span>'.
                                          '<input id="fileImageCommentar" type="text" value="'.$value['id'].'"  name="files[]" multiple class="upload form-control" >'.
                                      '</div>'.
                                    '</div>'.
                                      '<!-- The container for the uploaded files -->'.
                                    '<div id="filesComment'.$value['id'].'" class="files-input" style="margin:0px;"></div>'.
                                    '<button type="button" id="subOk" value="'.$value['id'].'" class="btn btn-info" style="float:right;margin-top:2px;">TreKirim</button>'.
                                    // '<button type="submit" class="btn btn-info" style="float:right;margin-top:2px;">Kirim</button>'.
                                '</div>'.
                              '</div>'.'</form>';

        // Main Html
        $html .= '<div class="media stream">'.
                    '<a href="#" class="media-avatar medium pull-left"><img src="images/user.png"></a>'.
                    '<div class="media-body">'.
                      '<div class="stream-headline"><h5 class="stream-author">'.$value['created_by'].
                        '<small>'.\GLobalHelpers::formatDate($value['created_at']).'</small>'.
                      '</h5></div>'.
                      '<div class="stream-text">'.$value['article'].'</div>'.
                      '<div class="stream-attachment photo">'.
                        '<div id="#" class="files-input" style="margin:0px;">'.$htmlImage.'</div>'.
                      '</div>'.
                      '<div class="stream-options">'.
                          '<a href="#" class="comment btn btn-small" data-seq="">'.
                            '<i class="icon-reply shaded"></i>'.
                            'Komentar'.
                          '</a>'.
                      '</div><br/>'.$htmlComment.$postActionComment.
                    '</div>'.
                 '</div><!--/.media .stream-->';
      }

      return $html;

    }


}
