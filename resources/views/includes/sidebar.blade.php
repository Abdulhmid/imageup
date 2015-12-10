<?php $segment = GLobalHelpers::indexUrl(); ?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        {{--<div class="user-panel">--}}
            {{--<div class="pull-left image">--}}
                {{--<img src="{!! GLobalHelpers::checkImage(Auth::user()->photo) !!}" class="img-circle" alt="User Image" />--}}
            {{--</div>--}}
            {{--<div class="pull-left info">--}}
                {{--<p>{!! Auth::user()->name !!}</p>--}}
                {{-- <a href="#"> Last Login : {!! GLobalHelpers::formatDate(Auth::user()->last_login, 'd-M-y \a\t H:i') !!} </a> --}}
            {{--</div>--}}
        {{--</div>--}}

        <ul class="sidebar-menu">
            <li class="header" style="color: azure;">MENU</li>
            <li class="{!! $segment == 'dashboard' ? 'active' : '' !!}">
                <a href="{!! url('dashboard') !!}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{!! $segment == 'manage-admin' ? 'active' : '' !!}">
                <a href="{!! url('manage-admin') !!}">
                    <i class="fa fa-group"></i> <span>Admin</span>
                </a>
            </li>
            <li class="{!! $segment == 'vehicle-type' ? 'active' : '' !!}">
                <a href="{!! url('vehicle-type') !!}">
                    <i class="fa fa-car"></i> <span>Vehicle Type</span>
                </a>
            </li>
            <li class="{!! $segment == 'holiday' ? 'active' : '' !!}" >
                <a href="{!! url('holiday')!!}" >
                    <i class="fa fa-umbrella"></i><span>Holiday</span>
                </a>
            </li>
            <li class="{!! $segment == 'log-activity' ? 'active' : '' !!}" >
                <a href="{!! url('log-activity')!!}" >
                    <i class="fa fa-leanpub"></i><span>Log Activity</span>
                </a>
            </li>
            <li class="header" style="color: azure;">USERS</li>
            <li class="{!! $segment == 'mobile-user' ? 'active' : '' !!}">
                <a href="{!! url('mobile-user') !!}">
                    <i class="fa fa-street-view"></i> <span>Mobile Users</span>
                </a>
            </li>
            <li class="{!! $segment == 'payment-confirmation' ? 'active' : '' !!}">
                <a href="{!! url('payment-confirmation') !!}">
                    <i class="fa fa-money"></i> <span>Payment Confirmation</span>
                </a>
            </li>
            <li class="{!! $segment == 'operator' ? 'active' : '' !!}">
                <a href="{!! url('operator') !!}">
                    <i class="fa fa-user-secret"></i> <span>Operators</span>
                </a>
            </li>
            <li class="header" style="color: azure;">PLACES</li>
            <li class="{!! $segment == 'places' ? 'active' : '' !!}">
                <a href="{!! url('places') !!}">
                    <i class="fa fa-map-marker"></i> <span>Places</span>
                </a>
            </li>
            <li class="{!! $segment == 'place-service' ? 'active' : '' !!}">
                <a href="{!! url('place-service') !!}">
                    <i class="fa fa-life-ring"></i> <span>Place Services</span>
                </a>
            </li>
            <li class="header" style="color: azure;">REPORT</li>
            <li class="{!! $segment == 'summary' ? 'active' : '' !!}">
                <a href="{!! url('summary') !!}">
                    <i class="fa fa-bar-chart-o"></i> <span>Summary</span>
                </a>
            </li>
            <li class="{!! $segment == 'income' ? 'active' : '' !!}">
                <a href="{!! url('income') !!}">
                    <i class="fa fa-line-chart"></i> <span>Income</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
