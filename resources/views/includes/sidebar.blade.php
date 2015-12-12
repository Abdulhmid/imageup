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
            <li class="{!! $segment == 'admin' ? 'active' : '' !!}">
                <a href="{!! url('admin') !!}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{!! $segment == 'users' ? 'active' : '' !!}">
                <a href="{!! url('users') !!}">
                    <i class="fa fa-users"></i> <span>Users</span>
                </a>
            </li>
            <li class="{!! $segment == 'groups' ? 'active' : '' !!}">
                <a href="{!! url('groups') !!}">
                    <i class="fa fa-group"></i> <span>Groups</span>
                </a>
            </li>
            <li class="{!! $segment == 'posting' ? 'active' : '' !!}" >
                <a href="{!! url('posting')!!}" >
                    <i class="fa fa-umbrella"></i><span>Posting</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
