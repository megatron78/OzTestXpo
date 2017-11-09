@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Registro
@endsection

@section('content')
    @include('vendor.adminlte.layouts.partials.headexpoeducar');
    <body style="background-image: url('{{ asset('/img/expoeducar_login_bg.png') }}'); background-size: contain;
            background-repeat: no-repeat; background-position: center center; margin-top: 1px"
          class="hold-transition register-page" >
    <div id="app" v-cloak>
    @include('vendor.adminlte.layouts.partials.navbarexpoeducar')
        <div class="register-box">
            {{--<div class="register-logo">
                <a href="{{ url('/home') }}"><b>Expo</b>Educar</a>
            </div>--}}
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

            <div style="background-color: rgba(255, 255, 255, 0.5); outline: solid 1px #057EA2" class="register-box-body">
                <p style="font-size: 14px" class="login-box-msg">{{ trans('adminlte_lang::message.registermember') }}</p>
                <form action="{{ url('/register') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="{{ trans('adminlte_lang::message.fullname') }}" name="name" value="{{ old('name') }}" autofocus/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    @if (config('auth.providers.users.field','email') === 'username')
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="{{ trans('adminlte_lang::message.username') }}" name="username" autofocus/>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    @endif

                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="{{ trans('adminlte_lang::message.telephone') }}" name="telephone" value="{{ old('telephone') }}" autofocus/>
                        <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="{{ trans('adminlte_lang::message.contact_person') }}" name="contact_person" value="{{ old('contact_person') }}" autofocus/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.retypepassword') }}" name="password_confirmation"/>
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-1">
                            <label>
                                <div class="checkbox_register icheck">
                                    <label>
                                        <input type="checkbox" name="terms">
                                    </label>
                                </div>
                            </label>
                        </div><!-- /.col -->
                        <div class="col-xs-6">
                            <div class="form-group">
                                {{--{{ trans('adminlte_lang::message.conditions') }}--}}
                                <button type="button" style="width: 200px" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">Acepto <u>Términos y Condiciones</u></button>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4 col-xs-push-1">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.register') }}</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                {{--@include('adminlte::auth.partials.social_login')--}}

                <a href="{{ url('/login') }}" style="font-size: 15px;" class="text-center">{{ trans('adminlte_lang::message.membreship') }}</a>
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    <footer>
        @include('vendor.adminlte.layouts.partials.footerexpoeducar')
    </footer>
    </div>
    @include('adminlte::layouts.partials.scripts_auth')
    @include('adminlte::auth.terms')
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