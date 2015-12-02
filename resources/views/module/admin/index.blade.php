@extends('admin')

@section('style')

@stop

@section('content')
    <div class="module">
        <div class="module-head">
            <h3>
                Chart - flot</h3>
        </div>
        <div class="module-body">
            <div class="chart">
                <div id="placeholder" class="graph">
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
<script src="{{ url('scripts/flot/jquery.flot.js') }}" type="text/javascript"></script>
<script src="{{ url('scripts/flot/jquery.flot.pie.js') }}" type="text/javascript"></script>
<script src="{{ url('scripts/common.js') }}" type="text/javascript"></script>
@stop
