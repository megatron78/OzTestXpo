@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body style="background-image: url('{{ asset('/img/expoeducar_login_bg.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: center center;" class="hold-transition login-page">
    <div id="app" v-cloak>
        <div  class="login-box">
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

        <div style="background-color: rgba(255, 255, 255, 0.1);" class="login-box-body">
            <p style="" class="login-box-msg"> {{ trans('adminlte_lang::message.siginsession') }} </p>

            <login-form name="{{ config('auth.providers.users.field','email') }}"
                        domain="{{ config('auth.defaults.domain','') }}"></login-form>

            {{--@include('adminlte::auth.partials.social_login')--}}

            <a href="{{ url('/password/reset') }}">{{ trans('adminlte_lang::message.forgotpassword') }}</a><br>
            <a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a>

        </div>

        </div>
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
