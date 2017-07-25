<!-- NavBar posterior con logo -->
<div style="background-color: #f2f2f2; border-bottom: #f2f2f2" id="navigationt"
     class="navbar navbar-default navbar-fixed-top">
    <a style="height: 80px; padding-top: 0px" class="navbar-brand" href="{{ url('/') }}">
        <img style="padding-left: 5%; height: 70px; width: auto;"
             src="{{ asset('/img/expoeducar_logo115x97.png') }}" alt="ExpoEducar">
    </a>
</div>
<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top col-lg-offset-1">
    <div class="container">
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a style="font-size: 15px" href="{{ url('/') }}"
                       class="{{ Request::is('/*') ? 'bg-orange-active' : '' }}">{{ trans('adminlte_lang::message.inicio') }}</a>
                </li>
                <li><a style="font-size: 15px" href="{{ route('preescolar.all') }}"
                       class="{{ Request::is('preescolar*') ? 'bg-orange-active' : '' }}">{{ trans('adminlte_lang::message.eduinicial') }}</a>
                </li>
                <li><a style="font-size: 15px" href="{{ route('escuela_colegio.all') }}"
                       class="{{ Request::is('escuela_colegio*') ? 'bg-orange-active' : '' }}">{{ trans('adminlte_lang::message.egb') }}</a>
                </li>
                <li><a style="font-size: 15px" href="{{ route('superior.all') }}"
                       class="{{ Request::is('superior*') ? 'bg-orange-active' : '' }}">{{ trans('adminlte_lang::message.universidades') }}</a>
                </li>
                <li><a style="font-size: 15px" href="{{ route('posgrado.all') }}"
                       class="{{ Request::is('posgrado*') ? 'bg-orange-active' : '' }}">{{ trans('adminlte_lang::message.posgrados') }}</a>
                </li>
                <li><a style="font-size: 15px" href="{{ route('cursos_seminarios.all') }}"
                       class="{{ Request::is('cursos_seminarios*') ? 'bg-orange-active' : '' }}">{{ trans('adminlte_lang::message.cursos') }}</a>
                </li>
                <li><a style="font-size: 15px" href="{{ route('eventos.all') }}"
                       class="{{ Request::is('eventos*') ? 'bg-orange-active' : '' }}">{{ trans('adminlte_lang::message.eventos') }}</a>
                </li>
            </ul>
            <ul style="padding-right: 0" class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a style="font-size: 16px" href="{{ url('/login') }}"><i
                                    class="fa fa-user margin-r-5"></i>{{ trans('adminlte_lang::message.login') }}</a>
                    </li>
                    <li><a style="font-size: 16px" href="{{ url('/register') }}"><i
                                    class="fa fa-user-plus margin-r-5"></i>{{ trans('adminlte_lang::message.register') }}
                        </a></li>
                @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
                @endif
                <li><a href="https://www.facebook.com/Expoeducar-685682501640613"
                       style="font-size: 10px; height: 30px;width: 30px" class="btn btn-social-icon btn-facebook"><i
                                class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/expoeducar" style="font-size: 10px; height: 30px;width: 30px"
                       class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/in/expo-educar-547944135"
                       style="font-size: 10px; height: 30px;width: 30px" class="btn btn-social-icon btn-linkedin"><i
                                class="fa fa-linkedin"></i></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>