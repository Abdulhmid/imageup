@extends('admin')

@section('style')
<link href="{!! asset('plugins/datepicker/datepicker3.css') !!} "rel="stylesheet" type="text/css"/>
@stop

@section('content')
<!-- Main content -->
<section class="content">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i style="margin-top: 23px;" class="ion ion-ios-people-outline"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Member Terdaftar <b> [ Status : Active ] </b>  </span> <br/>
          <span class="spinner-users"><i class="fa fa-spinner fa-spin"></i></span>
          <span class="dataCountUsers info-box-number"></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div><!-- /.col -->
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i style="margin-top: 23px;" class="ion ion-ios-people-outline"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Member Terdaftar <b> [ Status : Belum Active ] </b>  </span> <br/>
          <span class="spinner-users-no-active"><i class="fa fa-spinner fa-spin"></i></span>
          <span class="dataCountUsersNoActive info-box-number"></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div><!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>
  </div><!-- /.row -->

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <div class="pull-left">
            <h3 class="box-title">Grafik Postingan Member</h3>
          </div>
          <div class="pull-right">
            <div class="box-body">
              <div class="row" style="margin-top: -14px;">
                <div class="col-xs-5">
                  <select class="form-control" id="month">
                    @for ($i=1; $i <= 12 ; $i++)
                        <?php $month = strtolower(date('F', mktime(0, 0, 0, $i, 10))); ?>
                        <option value="<?= $i ?>"><?= $month ?></option>
                    @endfor
                  </select>
                </div>
                <div class="col-xs-4">
                  <input type="text" class="form-control" id="year" value="<?= date('Y') ?>">
                </div>
                <div class="col-xs-3">
                  <button class="btn btn-info" id="find">Cari</button>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="chart-responsive">
                <!-- Sales Chart Canvas -->
                <center>
                  <div id="charts" style="height=180px; margin: 0 auto;">
                    <span class="spinner-chart"><i class="fa fa-spinner fa-spin"></i></span>
                  </div>
                </center><!-- /.box-body -->
              </div><!-- /.chart-responsive -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- ./box-body -->
        <div class="box-footer">
          <div class="row">
          </div><!-- /.row -->
        </div><!-- /.box-footer -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->

</section><!-- /.content -->
@stop

@section('script')
<!-- <script src="{!! asset('plugins/jQuery/jQuery-2.1.3.min.js') !!}" type="text/javascript"></script> -->
<script src="{!! asset('plugins/highcharts/highcharts.js') !!}" type="text/javascript"></script>
<script src="{!! asset('plugins/highcharts/exporting.js') !!}" type="text/javascript"></script>
<script type="text/javascript" src="{!! asset('plugins/datepicker/bootstrap-datepicker.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/datepicker-format.js') !!}"></script>  
<script type="text/javascript">
    $(function () {
      $('#year').datepicker({
          orientation : 'top auto',
          format: "yyyy",
          viewMode: "years", 
          minViewMode: "years",
          autoclose: true,
          endDate   : '+0d'
      });
      format();
      // Status Active
      $.get("{!! url('admin/users-count/1') !!}", function (data) {
            $('.dataCountUsers').text(data+" Member");
        })
        .always(function () {
            $('.spinner-users').show();
        })
        .done(function () {
            $('.spinner-users').hide();
        });

      // Status Belum Active
      $.get("{!! url('admin/users-count/0') !!}", function (data) {
            $('.dataCountUsersNoActive').text(data+" Member");
        })
        .always(function () {
            $('.spinner-users-no-active').show();
        })
        .done(function () {
            $('.spinner-users-no-active').hide();
        });

      var chart = new Highcharts.Chart({

            title: {
                text: ''
            },chart: {
                renderTo: 'charts',
                type : 'line'
            },xAxis: {
                categories : {!! $dateList !!} ,
                title: {
                  text : 'Date'
                }
            },credits: {
                enabled: false
            },legend: {
                enabled: true
            },yAxis: {
              min: 0, 
                title: {
                    text: 'Total Posting'
                }
            },series: [{
              name: 'Total Posting',
                marker: {
                    symbol: 'square'
                },
                data : {!! $postData !!}
            }]
        });

        // Filter

        $('#find').click(function() {
            $.get("{{ url(GLobalHelpers::indexUrl().'/filter') }}/"+$("#month").val()+'/'+$("#year").val(), function(data){
                chart.xAxis[0].setCategories($.parseJSON(data['dateList']));
                chart.series[0].setData($.parseJSON(data['dataPost']));
                chart.xAxis[0].setTitle({ text: "Date" });
            }).fail(function(){
              return false;
            });
        });

    });

  </script>
@stop
