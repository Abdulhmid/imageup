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
            <li class="{!! $segment == 'admin' ? 'active' : '' !!}">
                <a href="{!! url('admin') !!}">
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
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
