<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{!! url('theme/ungkap') !!}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{!! url('theme/ungkap') !!}/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="{!! url('css/bootstrap-theme.min.css') !!}">
        <link rel="stylesheet" type="text/css" href="{!! url('css/startbootstrap.css') !!}">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{!! url('css/style-new-index.css') !!}">
        <link rel="stylesheet" type="text/css" href="{!! url('css/bootsnipp-navbar.css') !!}">
        
        <link rel="stylesheet" type="text/css" href="{!! url('plugins/karbonn-overlay/overlay-bootstrap.css') !!}">
        <link rel="stylesheet" type="text/css" href="{!! url('plugins/karbonn-overlay/overlay-bootstrap.min.css') !!}">

        <style type="text/css">
            .btn {
                border-radius: 0px;
            }
            input[type=text], textarea {
                border-radius: 0px;
            }
            ::-webkit-input-placeholder {
               font-style: italic;
            }
            :-moz-placeholder {
               font-style: italic;  
            }
            ::-moz-placeholder {
               font-style: italic;  
            }
            :-ms-input-placeholder {  
               font-style: italic; 
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top navbar-bootsnipp animate" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{!! url('/landing2') !!}"> <p class="create-title" >ungkap.in</p></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-nav-center center-ul">
                        <li>
                            <p class="navbar-btn">
                                <a href="#" class="atyle btn btn-default btn-top active">Terpopuler</a>
                            </p>
                        </li>
                        <li>
                            <!-- <a href="/help" title="Help with Start Bootstrap Templates &amp; Themes">Naik Daun</a> -->
                            <p class="navbar-btn">
                                <a href="#" class="atyle btn btn-default btn-top">Naik Daun</a>
                            </p>
                        </li>
                        <li>
                            <p class="navbar-btn">
                                <a href="#" class="atyle btn btn-default btn-top">Terbaru</a>
                            </p>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" id="findHastag" placeholder="Cari Hastag">
                            </div>
                        </form>

                        <li>
                            <!-- <a href="/contact" class="" title="Contact the Start Bootstrap Team">Ayo Ungkapkan</a> -->
                            <p class="navbar-btn">
                                <a data-toggle="modal" data-target="#modal-ungkapin" class="btn btn-warning">Ayo Ungkapin</a>
                            </p>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
            <div class="[ bootsnipp-search animate ]">
                <div class="[ container ]">
                    <form action="http://bootsnipp.com/search" method="GET" role="search">
                        <div class="[ input-group ]">
                            <input type="text" class="[ form-control white-input ]" name="q" placeholder="Ketik disini untuk mencari hastag">
                            <span class="[ input-group-btn ]">
                                <button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
                            </span>
                        </div>
                    </form>
                </div>
                <div>
                    <div class="[ container ]">
                        <p class="text-hastag">Hastag Terpopuler : #lorem #ipsum #color #style #freedom #amazing</p>
                    </div>
                </div>
            </div><div class="clearfiv"></div>


        </nav>
        
        <div class="clearfix"></div>
        <section>

            <div class="row color col-condensed row-eq-height">

            <?php for ($i=0; $i < 16 ; $i++) { ?>
                <div class="col-xs-18 col-sm-4 row-eq-height col-md-2 border-no-padding panel-body" id="overflay-column">
                    <div id="conten-main">
                        <?php $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum." ?>
                        <p style="background: none;"> {!! GLobalHelpers::softTrim($text, 249) !!} </p>
                        <div class="clearfix"></div>
                        <div class="row span" style="display:block">
                            <span class="btn-bottom-content" id="overflay-action"> 
                                <i class="fa fa-comment"></i> 899
                                <i class="icon-eye-open"></i> 899 
                                <i class="fa fa-link fa-rotate-45"></i> 
                            </span> 
                        </div>
                    </div>
                    <div class="panel-primary-overlay-right ">
                        <div id="content-over" > 
                            <p id="button-action-bottom">
                                <a href="#" class="btn btn-style-up btn-default btn-xs" role="button"
                                data-toggle="modal" data-target="#ungkapinDetail">Detail</a>
                            </p>
                        </div>
                    </div>
                    <div id="action-admin">

                    </div>
                </div>

                <div class="col-xs-18 col-sm-4 row-eq-height col-md-2 border-no-padding panel-body" id="overflay-column">
                    <div id="conten-main">
                        <div class="row text-center">
                            <img src="http://placehold.it/500x300" alt="" style="height: 179px;max-height: 179px" class="img-responsive center-block">
                        </div>
                        <div class="clearfix"></div>
                        <div class="row span" style="display:block" >
                            <span class="btn-bottom-content" id="overflay-action"> 
                                <i class="fa fa-comment"></i> 899
                                <i class="icon-eye-open"></i> 899 
                                <i class="fa fa-link fa-rotate-45"></i> 
                            </span> 
                        </div>
                    </div>
                    <div class="panel-primary-overlay-right">
                        <div id="content-over" >                        
                            <p id="button-action-bottom">
                                <a href="#" class="btn btn-style-up btn-default btn-xs" role="button"
                                data-toggle="modal" data-target="#ungkapinDetail" >Detail</a>
                            </p>

                            <p id="button-action-bottom">
                                <a href="#" class="btn btn-style-up btn-default btn-xs" role="button">Naik</a> <a href="#" class="btn btn-default btn-xs" role="button">Hapus</a>
                            </p>
                        </div>
                    </div>
                    <div id="action-admin">

                    </div>
                </div>
                <div class="col-xs-18 col-sm-4 row-eq-height col-md-2 border-no-padding panel-body" id="overflay-column">
                    <div id="conten-main">
                        <p style="background: none;">
                            {!! GLobalHelpers::softTrim($text, 249) !!}
                        </p>
                        <div class="clearfix"></div>
                        <div class="row span" style="display:block">
                            <span class="btn-bottom-content" id="overflay-action"> 
                                <i class="fa fa-comment"></i> 899
                                <i class="icon-eye-open"></i> 899 
                                <i class="fa fa-link fa-rotate-45"></i> 
                            </span> 
                        </div>
                    </div>
                    <div class="panel-primary-overlay-right">
                        <div id="content-over"> 
                            <p id="button-action-bottom">
                                <a href="#" class="btn btn-style-up btn-default btn-xs" role="button"
                                data-toggle="modal" data-target="#ungkapinDetail" >Detail</a>
                            </p>

                            <p id="button-action-bottom">
                                <a href="#" class="btn btn-style-up btn-default btn-xs" role="button">Naik</a> <a href="#" class="btn btn-default btn-xs" role="button">Hapus</a>
                            </p>
                        </div>
                    </div>
                    <div id="action-admin">

                    </div>
                </div>
            <?php } ?>
                
            </div>            
        </section>
        <div class="clearfix"></div><hr/>
        <section>
            <footer>
                <p><a href="http://www.startbootstrap.com">Start Bootstrap</a> is a project maintained by <a href="http://davidmiller.io">David Miller</a> at <a href="http://blackrockdigital.io">Blackrock Digital</a>.</p>
            </footer>
        </section>

        <!-- Modal Form Login & Reg -->
        <!-- Fullscreen Modal -->
        <div class="modal modal-fullscreen fade" id="modal-ungkapin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!-- Close Button -->
            <button type="button" class="closeButton"  data-dismiss="modal" style="margin-right:10%;margin-top:21px;">
                <span aria-hidden="true">&times;</span>
            </button>
          <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
              <div class="modal-body" style="">
                    <div class="row" style="background-color:none;">
                        <div class="col-md-12 text-center" style="text-align:center;padding-bottom: 24px;">
                        </div><br/>
                        <div class="col-md-5 text-center " style="text-align:center;background-color:none;">
                            <div class="" style="text-align:center;">
                                <button type="button" data-toggle="modal" 
                                        data-target="#ungkapinImage" 
                                        style="margin-right: -18%;" 
                                        class="pull-right btn btn-warning btn-circle btn-xl">Gambar</button>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <!-- <span>/</span> -->
                            <div class="vertical-line"></div>
                        </div>
                        <div class="col-md-5 text-center" style="text-align:center;background-color:none;">
                            <div class="form-group" style="text-align:center">  
                                <button type="button" 
                                        data-toggle="modal" 
                                        style="margin-left : -83px;" 
                                        data-target="#ungkapinTulisan"  
                                        class="pull-left btn btn-warning btn-circle btn-xl">Tulisan</button>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Ungkap Tulisan -->
        <div class="modal fade" id="ungkapinTulisan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!-- Content -->
            <button type="button" class="closeButton"  data-dismiss="modal" style="margin-right:10%;margin-top:21px;">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-dialog modal-dialog-center">
            <div class="modal-content" style="margin-left: -129px;margin-right: -129px;">
              <div class="modal-body" style="">
                    <div class="row" style="background-color:none;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tulisan</label>
                                <p>Masukkan tulisanmu dengan maksimal. <br/> 160 karakter.</p>
                                <textarea class="form-control" name="hastag" cols="33" rows="3"  placeholder="#positif#negatif#cinta#agama#sehat#lifestyle"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4" style="border-left: 1px solid #EBEBEB;">
                            <div class="form-group">
                                <label>Hastag</label>
                                <p>Berikan hastag yang sesuai. <br/> Maksimal 10 hastag</p>
                                <textarea class="form-control" name="hastag" cols="33" rows="3"  placeholder="#positif#negatif#cinta#agama#sehat#lifestyle"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4" style="border-left: 1px solid #EBEBEB;">
                            <div class="form-group">
                                <label>Link</label>
                                <p>Masukkan link sebagai bukti penguat. <br/> Kamu boleh tidak memberikan link.</p>
                                <textarea class="form-control" name="link" cols="33" rows="3" placeholder="Ketik atau paste link disini"></textarea>
                            </div>
                        </div>
                    </div>
              </div>
            <div class="modal-footer" style="border-top:rgba(0, 0, 0, 0.45)">
                <button type="button" data-toggle="modal" data-target="#ungkapinSucces" class="btn btn-warning btn-ungkap-success" data-dismiss="modal">Ayo Ungkapin !</button>
            </div>
            </div>
            </div>

        </div>

        <!-- Ungkap Gambar -->
        <div class="modal fade" id="ungkapinImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!-- Content -->
            <button type="button" class="closeButton"  data-dismiss="modal" style="margin-right:10%;margin-top:21px;">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-dialog modal-dialog-center">
            <div class="modal-content" style="margin-left: -129px;margin-right: -129px;">
              <div class="modal-body" style="">
                    <div class="row" style="background-color:none;">
                        <div class="col-md-4" >
                            <div class="form-group">
                                <label>Gambar</label>
                                <p>Pilih Gambar Yang Kamu Ungkapin</p><br/>
                                <input type="file" class="form-control" value="" style="display:none">
                                <button style="background: #EEA53D;color: white;font-size: 13px;" class="form-control btn btn-default btn-ungkap-upload" type="button" onclick="chooseFile()"><i class="fa fa-upload"></i> Pilih Gambar</button>
                            </div>
                        </div>
                        <div class="col-md-4" style="border-left: 1px solid #EBEBEB;">
                            <div class="form-group">
                                <label>Hastag</label>
                                <p>Berikan hastag yang sesuai. <br/> Maksimal 10 hastag</p>
                                <textarea class="form-control" name="hastag" cols="33" rows="3"  placeholder="#positif#negatif#cinta#agama#sehat#lifestyle"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4" style="border-left: 1px solid #EBEBEB;">
                            <div class="form-group">
                                <label>Link</label>
                                <p>Masukkan link sebagai bukti penguat. <br/> Kamu boleh tidak memberikan link.</p>
                                <textarea class="form-control" name="link" cols="33" rows="3" placeholder="Ketik atau paste link disini"></textarea>
                            </div>
                        </div>
                    </div>
              </div>
            <div class="modal-footer" style="border-top:rgba(0, 0, 0, 0.45)">
                <button type="button" data-toggle="modal" data-target="#ungkapinSucces" class="btn btn-warning btn-ungkap-success" data-dismiss="modal">Ayo Ungkapin !</button>
            </div>
            </div>
            </div>
        </div>

        <!-- Ungkap Detail -->
        <div class="modal fade" id="ungkapinDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!-- Content -->
            <button type="button" class="closeButton"  data-dismiss="modal" style="margin-right:10%;margin-top:21px;">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-dialog modal-dialog-center">
            <div class="modal-content" style="margin-left: -129px;margin-right: -129px;">
              <div class="modal-body" style="">
                    <div class="row" style="background-color:none;">
                        <div class="col-md-8" style="">
                            <div class="row">
                                <img src="http://placehold.it/380x600" class="img-detail img-responsive"/>
                            </div>
                        </div><br/>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="detailBox">
                                    <div class="commentBox">
                                        <p class="taskDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <span><i class="fa fa-comment">8989</i></span>
                                        <span><i class="fa fa-eye"> 8989</i></span>
                                        <span><i class="fa fa-calendar"> 11 Nov 2015</i></span>

                                        <span style="margin-left:12px"><i class="fa fa-facebook-square">Share</i></span>
                                        <span><i class="fa fa-twitter-square">Tweet</i></span>
                                    </div>
                                    <div class="actionBox">
                                        <ul class="commentList">
                                            <li>
                                                <div class="commenterImage">
                                                  <img src="http://lorempixel.com/50/50/people/6" />
                                                </div>
                                                <div class="commentText">
                                                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="commenterImage">
                                                  <img src="http://lorempixel.com/50/50/people/7" />
                                                </div>
                                                <div class="commentText">
                                                    <p class="">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span class="date sub-text">on March 5th, 2014</span>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="commenterImage">
                                                  <img src="http://lorempixel.com/50/50/people/9" />
                                                </div>
                                                <div class="commentText">
                                                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
                                                    <img src="{!! url('theme/ungkap') !!}/img/member2.jpg" >
                                                </div>
                                            </li>
                                        </ul>
                                        <form class="form-inline" role="form">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Your comments" />
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-default">Add</button>
                                            </div>
                                        </form>
                                        <div class="row"><br/>
                                            <div style=""><br/>
                                                <div class="col-md-6" style="text-align:center;"><button class="btn btn-default">Naik</button></div>
                                                <div class="col-md-6" style="text-align:center;"><button class="btn btn-default">Hapus</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls --> 
                    <a class="carousel-control left" href="#mainBanner" data-slide="prev" style="background: none;width: 0px;">
                        <span class="glyphicon glyphicon-chevron-left" style="margin-left: -30px;"></span>
                    </a>  
                    <a class="carousel-control right" href="#mainBanner" data-slide="next" style="background: none;width: 0px;">
                        <span class="glyphicon glyphicon-chevron-right" style="margin-right: -30px;"></span>
                    </a>
              </div>
            </div>
            </div>

        </div>

        <!-- Ungkap Thank You -->
        <div class="modal fade" id="ungkapinThankYou" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!-- Content -->
            <button type="button" class="closeButton"  data-dismiss="modal" style="margin-right:10%;margin-top:21px;">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-dialog modal-dialog-center">
                <div class="modal-content" style="">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12" style="text-align:center;padding-bottom: 24px;">
                                <h3 class="modal-title" id="myModalLabel">Berhasil</h3>
                                <h5 class="modal-title" id="myModalLabel">Terimakasih sudah ungkapin isi hatimu!</h5>
                            </div><br/>
                            <div class="col-md-4">
                                <div class="form-group" style="text-align:center">
                                    <button class="btn btn-default btn-ungkap">Lihat</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" style="text-align:center">
                                    <button class="btn btn-default btn-ungkap">Halaman Utama</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" style="text-align:center">
                                    <button class="btn btn-default btn-ungkap">Ungkapin Lagi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ungkap Login -->
        <div class="modal fade" id="ungkapinLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!-- Content -->
            <button type="button" class="closeButton"  data-dismiss="modal" style="margin-top:21px;">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-dialog modal-dialog-center" style=" width: 359px;">
                <div class="modal-content" style="">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12" style="text-align:center;padding-bottom: 24px;">
                                <h3 class="modal-title" id="myModalLabel">Admin Login</h3>
                                <h5 class="modal-title" id="myModalLabel"><i style="color:red;">Halaman Ini khusus untuk Admin Sistem.<br/> Yang tidak berwenang silahkan kembali <br/> Kehalaman Utama.</i></h5>
                            </div><br/>
                            <center>
                                <div class="col-md-12 center-block">
                                    <div class="form-group" style="text-align:center">
                                        <input type="text" name="username" style="" class="form-control" value="" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-md-12 center-block">
                                    <div class="form-group" style="text-align:center">
                                        <input type="text" name="password" style="" class="form-control" value="" placeholder="Password">
                                    </div>
                                </div>
                            </center>
                            <div class="col-md-12" style="border-bottom: 1px solid #EBEBEB;">
                                <div class="form-group" style="text-align:center">
                                    <button class="btn btn-warning">Masuk</button>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top:3%;">
                                <div class="form-group" style="text-align:center">
                                    <button class="btn btn-default btn-ungkap">Halaman Utama</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <p class="pull-left">Ungkapin 2015</p>
                        <p class="pull-right yellow-text">Kontak Kami</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ungkap On Show -->
        <div class="modal fade" id="ungkapinOnShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!-- Content -->
            <button type="button" class="closeButton"  data-dismiss="modal" style="">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-dialog modal-dialog-center custom-class">
                <div class="modal-content" style="heigth:545px;">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{!! url('images/default/people-mouth.png') !!}" class="img-responsive center-block">
                            </div> <br/>
                            <div class="col-md-12" style="text-align:center;padding-bottom: 24px;">
                                <h3 class="modal-title" id="myModalLabel">Ayo Ungkapin</h3>
                                <h5 class="modal-title" id="myModalLabel">Isi Hatimu!</h5>
                            </div><br/>
                            <div class="col-md-12">
                                <p class="font-ungkap-show">
                                    Ungkapin adalah tempat dimana kamu <br/> bisa mengungkapkan isi hatimu <br/> secara anonim !
                                </p>
                            </div><br/>
                            <div class="col-md-12">
                                <p class="font-ungkap-show">
                                    Engga perlu ribet bikin akun, langsung <br/> aja ungkapin! Identitasmu tidak akan
                                    <br/> diketahui siapapun. Asyik bukan?!:D
                                </p>
                            </div><br/>
                            <div class="col-md-12" style="border-bottom: 1px solid #EBEBEB;">
                                <p class="font-ungkap-show" style="color:red;"> <i> Mohon tidak mengandung SARA <br/> Admin berhak menghapus postingan apapun </i>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <p class="pull-left">Ungkapin 2015</p>
                        <p class="pull-right yellow-text" >Kontak Kami</p>
                    </div>
                </div>
            </div>
        </div>

    </body>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{!! url('js/jquery.min.js') !!}" type="text/javascript"></script>
    <script src="{!! url('js/bootstrap.min.js') !!}" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        function centerModal() {
            $(this).css('display', 'block');
            var $dialog = $(this).find(".modal-dialog");
            var offset = ($(window).height() - $dialog.height()) / 2;
            // Center modal vertically in window
            $dialog.css("margin-top", offset);
        }

        $(function() { 
            $('a[href="#toggle-search"], .navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn[type="reset"],#findHastag').on('click', function(event) {
                event.preventDefault();
                $('.navbar-bootsnipp .bootsnipp-search .input-group > input').val('');
                $('.navbar-bootsnipp .bootsnipp-search').toggleClass('open');
                $('a[href="#toggle-search"]').closest('li').toggleClass('active');

                if ($('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
                    /* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
                    setTimeout(function() { 
                        $('.navbar-bootsnipp .bootsnipp-search .form-control').focus();
                    }, 100);
                }           
            });

            $(document).on('keyup', function(event) {
                if (event.which == 27 && $('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
                    $('a[href="#toggle-search"]').trigger('click');
                }
            });
        });

        $(document).ready(function(){
            $('#ungkapinLogin').modal('show');
            $('#ungkapinTulisan,#ungkapinImage').on('shown.bs.modal', function () {
               $('#modal-ungkapin').modal('hide');
            });
        });


        $('#ungkapinOnShow').on('show.bs.modal', centerModal);
        $(window).on("resize", function () {
            $('#ungkapinOnShow:visible').each(centerModal);
        });
        $('#modal-ungkapin').on('show.bs.modal', centerModal);
        $(window).on("resize", function () {
            $('#modal-ungkapin:visible').each(centerModal);
        });
        $('#ungkapinTulisan').on('show.bs.modal', centerModal);
        $(window).on("resize", function () {
            $('#ungkapinTulisan:visible').each(centerModal);
        });
        $('#ungkapinImage').on('show.bs.modal', centerModal);
        $(window).on("resize", function () {
            $('#ungkapinImage:visible').each(centerModal);
        });
        $('#ungkapinThankYou').on('show.bs.modal', centerModal);
        $(window).on("resize", function () {
            $('#ungkapinThankYou:visible').each(centerModal);
        });
        $('#ungkapinLogin').on('show.bs.modal', centerModal);
        $(window).on("resize", function () {
            $('#ungkapinLogin:visible').each(centerModal);
        });

        $('#ungkapinDetail').on('show.bs.modal', centerModal);
        $(window).on("resize", function () {
            $('#ungkapinDetail:visible').each(centerModal);
            $('.modal-body',this).css({width:'auto',height:'auto', 'max-height':'100%'});
        });

        $('#ungkapinTulisan,#ungkapinImage').on('hidden.bs.modal', function () {
            $('#ungkapinThankYou').modal('show');
        })

    </script>

</html>
