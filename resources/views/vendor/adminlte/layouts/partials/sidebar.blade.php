<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <br>
                    <br>
                    {{--<img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />--}}
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        {{--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>--}}{{--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>--}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.adm_header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ Request::is('home*') ? 'active' : '' }}"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.adm_mis_instituciones') }}</span></a></li>
            {{--<li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>--}}
            @if(auth()->user()->isAdmin())
                <li class="treeview {{ Request::is('adm*') ? 'active' : '' }}">
                    <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.adm_administracion') }}</span>
                        <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="{{ Request::is('admuser*') ? 'active' : '' }}"><a href="{{ url('admuserslist') }}">{{ trans('adminlte_lang::message.adm_usuarios') }}</a></li>
                        <li class="{{ Request::is('admads*') ? 'active' : '' }}"><a href="{{ url('admads') }}">{{ trans('adminlte_lang::message.adm_publicidad') }}</a></li>
                        <li class="{{ Request::is('admbanners*') ? 'active' : '' }}"><a href="{{ url('admbanners') }}">{{ trans('adminlte_lang::message.adm_banners') }}</a></li>
                        <li class="{{ Request::is('admactivation*') ? 'active' : '' }}"><a href="{{ url('admactivation') }}">{{ trans('adminlte_lang::message.adm_activaciones') }}</a></li>
                        <li class="{{ Request::is('*termscond*') ? 'active' : '' }}"><a href="{{ url('admtermscond') }}">{{ trans('adminlte_lang::message.adm_termsconds') }}</a></li>
                    </ul>
                </li>
            @endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
