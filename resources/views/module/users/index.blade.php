@extends('admin')

@section('style')
<link href="{!! asset('scripts/datatables/dataTables.bootstrap.css') !!} "rel="stylesheet" type="text/css"/>
@stop

@section('content')
    <div class="module">
      <div class="module-head">
        <h3>DataTables</h3>
      </div>
      <div class="module-body table">
        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
          <thead>
            <tr>
              <th>Nama Lengkap</th>
              <th>Email</th>
              <th>Status</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
@stop

@section('script')
<script src="{!! asset('scripts/datatables/jquery.dataTables.js') !!}" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function() {
    var oTable = $('.datatable-1').dataTable({
			// "dom": '<"tableHeader"<"row"<"col-md-6"f><"col-md-6"p>>><"newProcessing"r>t<"tableFooter"<"row"<"col-md-8"li><"col-md-4"p>>>',
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
			{data: 'fullname', name: 'fullname'},
			{data: 'email', name: 'email'},
      {data: 'active', name: 'active'},
			{data: 'created_at', name: 'created_at'},
			{data: 'action', name: 'action', searchable : false}
			],
			fnDrawCallback: function(){
				$('[data-toggle="tooltip"]').tooltip();
			}
		});

    $('.dataTables_paginate').addClass("btn-group datatable-pagination");
    $('.dataTables_paginate > a').wrapInner('<span />');
    $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
    $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
  } );
</script>
@stop
