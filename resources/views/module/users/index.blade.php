@extends('admin')

@section('style')
<link href="{!! asset('plugins/datatables/dataTables.bootstrap.css') !!} "rel="stylesheet" type="text/css"/>
<link href="{!! asset('plugins/sweet-alert/sweet-alert.css') !!} "rel="stylesheet" type="text/css"/>
@stop

@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					@if(Session::has('message'))
					{!! GLobalHelpers::messages(Session::get('message')) !!}
					@endif
					<div class="row">
						<div class="col-xs-6">
							<h3 class="box-title">Daftar Pengguna</h3>
						</div>
						<div class="col-xs-6">
							<div class="pull-right">
								<a href="{!! url(GLobalHelpers::lastUrl().'/create') !!}" id="sap" class="btn btn-success">
									<i class="fa fa-plus"></i> Tambah
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="box-body">
					<table id="table" class="table table-bordered table-hover listTable">
						<thead>
							<tr>
                <th>Photo</th>
                <th>Name</th>
								<th>Status</th>
								<th>Created By</th>
								<th>Created At</th>
								<th width="15%">Action</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

@stop

@section('script')
<script src="{!! asset('plugins/datatables/jquery.dataTables.js') !!}" type="text/javascript"></script>
<script src="{!! asset('plugins/datatables/dataTables.bootstrap.js') !!} " type="text/javascript"></script>
<script src="{!! asset('plugins/sweet-alert/sweet-alert.js') !!} " type="text/javascript"></script>
<script src="{!! asset('js/alert.js') !!} " type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function() {
    var oTable = $('#table').dataTable({
			"dom": '<"tableHeader"<"row"<"col-md-6"f><"col-md-6"p>>><"newProcessing"r>t<"tableFooter"<"row"<"col-md-8"li><"col-md-4"p>>>',
			"processing": true,
			"bPaginate": true,
			"bLengthChange": true,
			"bFilter": true,
			"bSort": true,
			"bInfo": true,
			"bAutoWidth": true,
			"serverSide": true,
			"ajax": "{!! url(GLobalHelpers::indexUrl().'/data') !!}",
			"columns": [
			{data: 'photo', name: 'photo'},
			{data: 'fullname', name: 'fullname'},
      {data: 'active', name: 'active'},
			{data: 'created_by', name: 'created_by'},
			{data: 'created_at', name: 'created_at'},
			{data: 'action', name: 'action', searchable : false}
			],
			fnDrawCallback: function(){
				$('[data-toggle="tooltip"]').tooltip();
			}
		});
  } );
</script>
@stop
