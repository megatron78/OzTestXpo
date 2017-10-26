@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
    @include('vendor.adminlte.layouts.partials.headexpoeducar');
    <body style="background-image: url('{{ asset('/img/expoeducar_login_bg.png') }}'); background-size: contain;
            background-repeat: no-repeat; background-position: center center; margin-top: 1px"
          class="hold-transition login-page">
    <div id="app" v-cloak>
        @include('vendor.adminlte.layouts.partials.navbarexpoeducar')
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>EXPO</b>Educar</a>
            </div><!-- /.login-logo -->

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div style="background-color: rgba(255, 255, 255, 0.5); outline: solid 1px #057EA2" class="login-box-body">
                <p class="login-box-msg"> {{ trans('adminlte_lang::message.siginsession') }} </p>
                <form action="{{ url('/login') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                    <input style="outline: solid 1px #057EA2" type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email"/>
                    <span class="fa fa-envelope aria-hidden=true form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input style="outline: solid 1px #057EA2" type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                        <span class="fa fa-lock aria-hidden=true form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input style="display:none;" type="checkbox" name="remember"> {{ trans('adminlte_lang::message.remember') }}
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.buttonsign') }}</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                {{--@include('adminlte::auth.partials.social_login')--}}

                <a href="{{ url('/password/reset') }}">{{ trans('adminlte_lang::message.forgotpassword') }}</a><br>
                <a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a>

            </div><!-- /.login-box-body -->

        </div><!-- /.login-box -->
    </div>
    @include('adminlte::layouts.partials.scripts_auth')

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    </body>

@endsection