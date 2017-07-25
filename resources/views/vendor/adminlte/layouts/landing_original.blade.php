<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MegaAdminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Megatron Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="MegaAdminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>{{ trans('adminlte_lang::message.landingdescriptionpratt') }}</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {{--<link rel="stylesheet" href="{{ asset('/css/skins/_all-skins.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app" v-cloak>
    <div style="background-color: #f2f2f2; border-bottom: #f2f2f2" id="navigationt" class="navbar navbar-default navbar-fixed-top">
        <a style="padding-top: 0px" class="navbar-brand" href="{{ url('/') }}">
            <img style="padding-left: 5%; height: 52px; width: auto;" src="{{ asset('/img/expoeducar_logo115x97.png') }}" alt="ExpoEducar">
        </a>
    </div>
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top col-lg-offset-1">
        <div class="container">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('preescolar.all') }}" class="smoothScroll">{{ trans('adminlte_lang::message.eduinicial') }}</a></li>
                    <li><a href="#egb" class="smoothScroll">{{ trans('adminlte_lang::message.egb') }}</a></li>
                    <li><a href="#univ" class="smoothScroll">{{ trans('adminlte_lang::message.universidades') }}</a></li>
                    <li><a href="#posgrado" class="smoothScroll">{{ trans('adminlte_lang::message.posgrados') }}</a></li>
                    <li><a href="#cursos" class="smoothScroll">{{ trans('adminlte_lang::message.cursos') }}</a></li>
                    <li><a href="#eventos" class="smoothScroll">{{ trans('adminlte_lang::message.eventos') }}</a></li>
                </ul>
                <ul style="padding-right: 5%" class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><i class="fa fa-user margin-r-5"></i>{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}"><i class="fa fa-user-plus margin-r-5"></i>{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>

            </div><!--/.nav-collapse -->
        </div>
    </div>
    <section class="content" id="home" name="home">
            <div style="width: 100%;" class="container">
                <div class="row centered">
                    <div class="col-lg-12 col-lg-offset-0">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img style="width: 100%;" src="{{ asset('/img/slide-01.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img style="width: 100%;" src="{{ asset('/img/slide-02.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img style="width: 100%;" src="{{ asset('/img/slide-03.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/ .container -->
    </section>

    <section class="content" id="destacados" name="destacados">
        <!-- Modal -->
        <div class="modal fade" id="meInteresa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Contactarse con la Institución</h4>
                    </div>
                    <div class="modal-body">
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Correo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Nombre</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Nombre">
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>

            <!-- INTRO WRAP -->
            <div style="padding: 0px" id="intro">
                <div style="width: 100%;" class="container">
                    <div class="row">
                        <h1 class="centered">{{ trans('adminlte_lang::message.destacados') }}</h1>

                        <div class="col-md-4">
                            <!-- Widget: user widget style 1 -->
                            <div class="box box-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-black" style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                                    <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                                    <h5 style="color:white" class="widget-user-desc">Best High School</h5>
                                </div>
                                <div class="widget-user-image">
                                    <img class="img-circle" src="{{ asset('/img/st_charles_hs_logo.jpg') }}" alt="User Avatar">
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">Educación</h5>
                                                <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">Niveles</h5>
                                                <span class="description-text">Inicial, EGB, BGU</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">Idiomas</h5>
                                                <span class="description-text">INGLÉS, FRANCÉS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="col-sm-4">
                                        <a data-target="#meInteresa" data-toggle="modal" href="#meInteresa">
                                            <i class="fa fa-envelope"></i> Me interesa
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="fa fa-eye"></i> Más información
                                    </div>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <i class="fa fa-info"></i> Contactos...
                                    </a>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="box-body">
                                            <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                            <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                            <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                        </div>
                                        <div class="text-center">
                                            <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                            <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                            <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>

                            </div>
                            <!-- /.widget-user -->
                        </div>

                        <div class="col-md-4">
                            <!-- Widget: user widget style 1 -->
                            <div class="box box-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-black" style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                                    <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                                    <h5 style="color:white" class="widget-user-desc">Best High School</h5>
                                </div>
                                <div class="widget-user-image">
                                    <img class="img-circle" src="{{ asset('/img/st_charles_hs_logo.jpg') }}" alt="User Avatar">
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">Educación</h5>
                                                <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">Niveles</h5>
                                                <span class="description-text">Inicial, EGB, BGU</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">Idiomas</h5>
                                                <span class="description-text">INGLÉS, FRANCÉS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="col-sm-4">
                                        <a data-target="#meInteresa" data-toggle="modal" href="#meInteresa">
                                            <i class="fa fa-envelope"></i> Me interesa
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="fa fa-eye"></i> Más información
                                    </div>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        <i class="fa fa-info margin-r-5"></i>Contactos...
                                    </a>
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="box-body">
                                            <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                            <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                            <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                        </div>
                                        <div class="text-center">
                                            <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                            <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                            <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>

                            </div>
                            <!-- /.widget-user -->
                        </div>

                        <div class="col-md-4">
                            <!-- Widget: user widget style 1 -->
                            <div class="box box-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-black" style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                                    <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                                    <h5 style="color:white" class="widget-user-desc">Best High School</h5>
                                </div>
                                <div class="widget-user-image">
                                    <img class="img-circle" src="{{ asset('/img/st_charles_hs_logo.jpg') }}" alt="User Avatar">
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">Educación</h5>
                                                <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">Niveles</h5>
                                                <span class="description-text">Inicial, EGB, BGU</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">Idiomas</h5>
                                                <span class="description-text">INGLÉS, FRANCÉS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="col-sm-4">
                                        <a data-target="#meInteresa" data-toggle="modal" href="#meInteresa">
                                            <i class="fa fa-envelope"></i> Me interesa
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="fa fa-eye"></i> Más información
                                    </div>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        <i class="fa fa-info margin-r-5"></i>Contactos...
                                    </a>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="box-body">
                                            <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                            <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                            <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                        </div>
                                        <div class="text-center">
                                            <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                            <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                            <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>

                            </div>
                            <!-- /.widget-user -->
                        </div>

                        <div class="col-md-4">
                            <!-- Widget: user widget style 1 -->
                            <div class="box box-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-black" style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                                    <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                                    <h5 style="color:white" class="widget-user-desc">Best High School</h5>
                                </div>
                                <div class="widget-user-image">
                                    <img class="img-circle" src="{{ asset('/img/st_charles_hs_logo.jpg') }}" alt="User Avatar">
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">Educación</h5>
                                                <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">Niveles</h5>
                                                <span class="description-text">Inicial, EGB, BGU</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">Idiomas</h5>
                                                <span class="description-text">INGLÉS, FRANCÉS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="col-sm-4">
                                        <a data-target="#meInteresa" data-toggle="modal" href="#meInteresa">
                                            <i class="fa fa-envelope"></i> Me interesa
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="fa fa-eye"></i> Más información
                                    </div>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                        <i class="fa fa-info margin-r-5"></i>Contactos...
                                    </a>
                                    <div id="collapse4" class="panel-collapse collapse">
                                        <div class="box-body">
                                            <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                            <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                            <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                        </div>
                                        <div class="text-center">
                                            <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                            <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                            <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>

                            </div>
                            <!-- /.widget-user -->
                        </div>

                        <div class="col-md-4">
                            <!-- Widget: user widget style 1 -->
                            <div class="box box-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-black" style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                                    <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                                    <h5 style="color:white" class="widget-user-desc">Best High School</h5>
                                </div>
                                <div class="widget-user-image">
                                    <img class="img-circle" src="{{ asset('/img/st_charles_hs_logo.jpg') }}" alt="User Avatar">
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">Educación</h5>
                                                <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">Niveles</h5>
                                                <span class="description-text">Inicial, EGB, BGU</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">Idiomas</h5>
                                                <span class="description-text">INGLÉS, FRANCÉS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="col-sm-4">
                                        <a data-target="#meInteresa" data-toggle="modal" href="#meInteresa">
                                            <i class="fa fa-envelope"></i> Me interesa
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="fa fa-eye"></i> Más información
                                    </div>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                        <i class="fa fa-info margin-r-5"></i>Contactos...
                                    </a>
                                    <div id="collapse5" class="panel-collapse collapse">
                                        <div class="box-body">
                                            <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                            <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                            <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                        </div>
                                        <div class="text-center">
                                            <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                            <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                            <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>

                            </div>
                            <!-- /.widget-user -->
                        </div>

                        <div class="col-md-4">
                            <!-- Widget: user widget style 1 -->
                            <div class="box box-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-black" style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                                    <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                                    <h5 style="color:white" class="widget-user-desc">Best High School</h5>
                                </div>
                                <div class="widget-user-image">
                                    <img class="img-circle" src="{{ asset('/img/st_charles_hs_logo.jpg') }}" alt="User Avatar">
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">Educación</h5>
                                                <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">Niveles</h5>
                                                <span class="description-text">Inicial, EGB, BGU</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">Idiomas</h5>
                                                <span class="description-text">INGLÉS, FRANCÉS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="col-sm-4">
                                        <a data-target="#meInteresa" data-toggle="modal" href="#meInteresa">
                                            <i class="fa fa-envelope"></i> Me interesa
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="fa fa-eye"></i> Más información
                                    </div>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                        <i class="fa fa-info margin-r-5"></i>Contactos...
                                    </a>
                                    <div id="collapse6" class="panel-collapse collapse">
                                        <div class="box-body">
                                            <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                            <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                            <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                        </div>
                                        <div class="text-center">
                                            <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                            <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                            <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>

                            </div>
                            <!-- /.widget-user -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <br>
                </div> <!--/ .container -->
            </div><!--/ #introwrap -->
    </section>

    <section class="content" id="ini" name="ini">
        <!-- INTRO WRAP -->
        <div style="padding-top: 0px;margin-top: 60px" id="intro">
            <div style="width: 100%" class="container">
                <div class="row centered">
                    <div class="col-lg-12 col-lg-offset-0">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('/img/inicialCarousel01.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('/img/inicialCarousel02.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('/img/inicialCarousel03.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row centered">
                    <h1 class="centered">{{ trans('adminlte_lang::message.eduinicialtitle') }}</h1>

                    <div class="col-md-4">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black" style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                                <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                                <h5 style="color:white" class="widget-user-desc">Best High School</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" src="{{ asset('/img/st_charles_hs_logo.jpg') }}" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Educación</h5>
                                            <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Niveles</h5>
                                            <span class="description-text">Inicial, EGB, BGU</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">Idiomas</h5>
                                            <span class="description-text">INGLÉS, FRANCÉS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsePreDest01">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapsePreDest01" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                    <div class="text-center">
                                        <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                        <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                        <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>

                        </div>
                        <!-- /.widget-user -->
                    </div>

                    <div class="col-md-4">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black" style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                                <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                                <h5 style="color:white" class="widget-user-desc">Best High School</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" src="{{ asset('/img/st_charles_hs_logo.jpg') }}" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Educación</h5>
                                            <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Niveles</h5>
                                            <span class="description-text">Inicial, EGB, BGU</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">Idiomas</h5>
                                            <span class="description-text">INGLÉS, FRANCÉS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsePreDest02">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapsePreDest02" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                    <div class="text-center">
                                        <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                        <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                        <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>

                        </div>
                        <!-- /.widget-user -->
                    </div>

                    <div class="col-md-4">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black" style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                                <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                                <h5 style="color:white" class="widget-user-desc">Best High School</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" src="{{ asset('/img/st_charles_hs_logo.jpg') }}" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Educación</h5>
                                            <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Niveles</h5>
                                            <span class="description-text">Inicial, EGB, BGU</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">Idiomas</h5>
                                            <span class="description-text">INGLÉS, FRANCÉS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsePreDest03">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapsePreDest03" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                    <div class="text-center">
                                        <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                        <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                        <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>

                        </div>
                        <!-- /.widget-user -->
                    </div>

                    <div class="col-md-4">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black" style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                                <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                                <h5 style="color:white" class="widget-user-desc">Best High School</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" src="{{ asset('/img/st_charles_hs_logo.jpg') }}" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Educación</h5>
                                            <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Niveles</h5>
                                            <span class="description-text">Inicial, EGB, BGU</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">Idiomas</h5>
                                            <span class="description-text">INGLÉS, FRANCÉS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsePreDest04">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapsePreDest04" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                    <div class="text-center">
                                        <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                        <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                        <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>

                        </div>
                        <!-- /.widget-user -->
                    </div>

                    <div class="col-md-4">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black" style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                                <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                                <h5 style="color:white" class="widget-user-desc">Best High School</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" src="{{ asset('/img/st_charles_hs_logo.jpg') }}" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Educación</h5>
                                            <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Niveles</h5>
                                            <span class="description-text">Inicial, EGB, BGU</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">Idiomas</h5>
                                            <span class="description-text">INGLÉS, FRANCÉS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsePreDest05">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapsePreDest05" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                    <div class="text-center">
                                        <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                        <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                        <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>

                        </div>
                        <!-- /.widget-user -->
                    </div>

                    <div class="col-md-4">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black" style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                                <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                                <h5 style="color:white" class="widget-user-desc">Best High School</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" src="{{ asset('/img/st_charles_hs_logo.jpg') }}" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Educación</h5>
                                            <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Niveles</h5>
                                            <span class="description-text">Inicial, EGB, BGU</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">Idiomas</h5>
                                            <span class="description-text">INGLÉS, FRANCÉS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsePreDest06">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapsePreDest06" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                    <div class="text-center">
                                        <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                        <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                        <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>

                        </div>
                        <!-- /.widget-user -->
                    </div>
                </div>
                <div class="row centered">
                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Unidad Educativa 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEdu01">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseEdu01" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Unidad Educativa 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEdu02">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseEdu02" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Unidad Educativa 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEdu03">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseEdu03" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Unidad Educativa 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEdu04">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseEdu04" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Unidad Educativa 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEdu05">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseEdu05" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Unidad Educativa 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEdu06">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseEdu06" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Unidad Educativa 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEdu07">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseEdu07" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Unidad Educativa 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEdu08">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseEdu08" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <br>
            </div> <!--/ .container -->
        </div><!--/ #introwrap -->
    </section>

    <section class="content" id="egb" name="egb">
        <!-- INTRO WRAP -->
        <div style="padding-top: 0px;margin-top: 60px" id="intro">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12 col-lg-offset-0">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('/img/bgu01.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('/img/bgu02.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('/img/bgu03.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row centered">
                    <h1>{{ trans('adminlte_lang::message.egbtitle') }}</h1>
                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Colegio 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseCole01">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseCole01" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Colegio 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseCole02">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseCole02" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Colegio 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseCole03">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseCole03" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Colegio 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseCole04">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseCole04" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <br>
            </div> <!--/ .container -->
        </div><!--/ #introwrap -->

    </section>

    <section class="content" id="univ" name="univ">
        <!-- INTRO WRAP -->
        <div style="padding-top: 0px;margin-top: 60px" id="intro">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12 col-lg-offset-0">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('/img/univ01.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('/img/univ02.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('/img/univ03.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row centered">
                    <h1>{{ trans('adminlte_lang::message.universidadestitle') }}</h1>
                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Universidad 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseUniv01">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseUniv01" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Universidad 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseUniv02">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseUniv02" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Universidad 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseUniv03">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseUniv03" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Universidad 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseUniv04">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseUniv04" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <br>
            </div> <!--/ .container -->
        </div><!--/ #introwrap -->

    </section>

    <section class="content" id="posgrado" name="posgrado">
        <!-- INTRO WRAP -->
        <div style="padding-top: 0px;margin-top: 60px" id="intro">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12 col-lg-offset-0">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('/img/posgrado01.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('/img/posgrado02.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('/img/posgrado03.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row centered">
                    <h1>{{ trans('adminlte_lang::message.posgradostitle') }}</h1>
                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Posgrado 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsePos01">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapsePos01" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Posgrado 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsePos02">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapsePos02" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Posgrado 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsePos03">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapsePos03" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Posgrado 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsePos04">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapsePos04" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <br>
            </div> <!--/ .container -->
        </div><!--/ #introwrap -->

    </section>

    <section class="content " id="cursos" name="cursos">
        <!-- INTRO WRAP -->
        <div style="padding-top: 0px;margin-top: 60px" id="intro">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12 col-lg-offset-0">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('/img/cursos01.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('/img/cursos02.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('/img/cursos03.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row centered">
                    <h1>{{ trans('adminlte_lang::message.cursostitle') }}</h1>
                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Curso 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseCurso01">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseCurso01" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Curso 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseCurso02">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseCurso02" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Curso 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseCurso03">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseCurso03" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Curso 1</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                                <p class="text-muted">Quito, Ecuador</p>

                                <strong><i class="fa fa-dollar margin-r-5"></i> Sostenimiento</strong>

                                <p class="text-muted">
                                    Fiscal, Municipal, Fiscomisional, Particular
                                </p>

                                <strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>

                                <p>
                                    <span class="label label-default">Inicial</span>
                                    <span class="label label-primary">EGB</span>
                                    <span class="label label-success">BGU</span>
                                    <span class="label label-info">Pregrado</span>
                                    <span class="label label-warning">Posgrado</span>
                                    <span class="label label-danger">Cursos</span>
                                </p>

                                <hr>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseCurso04">
                                    <i class="fa fa-info margin-r-5"></i>Contactos...
                                </a>
                                <div id="collapseCurso04" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                        <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                        <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <br>
            </div> <!--/ .container -->
        </div><!--/ #introwrap -->

    </section>

    <section id="eventos" name="eventos">
        <!-- INTRO WRAP -->
        <div style="padding: 0px" id="intro">
            <div class="container">
                <div class="row centered">
                    <h1>{{ trans('adminlte_lang::message.eventostitle') }}</h1>
                    <br>
                    <br>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro01.png') }}" alt="">
                        <h3>{{ trans('adminlte_lang::message.community') }}</h3>
                        <p>{{ trans('adminlte_lang::message.see') }} <a href="https://github.com/acacha/adminlte-laravel">{{ trans('adminlte_lang::message.githubproject') }}</a>, {{ trans('adminlte_lang::message.post') }} <a href="https://github.com/acacha/adminlte-laravel/issues">{{ trans('adminlte_lang::message.issues') }}</a> {{ trans('adminlte_lang::message.and') }} <a href="https://github.com/acacha/adminlte-laravel/pulls">{{ trans('adminlte_lang::message.pullrequests') }}</a></p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro02.png') }}" alt="">
                        <h3>{{ trans('adminlte_lang::message.schedule') }}</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro03.png') }}" alt="">
                        <h3>{{ trans('adminlte_lang::message.monitoring') }}</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <br>
                <hr>
            </div> <!--/ .container -->
        </div><!--/ #introwrap -->

    </section>

    <footer>
        <div id="c">
            <div class="container">
                <p>
                    <a href="https://github.com/acacha/adminlte-laravel"></a><b>admin-lte-laravel</b></a>. {{ trans('adminlte_lang::message.descriptionpackage') }}.<br/>
                    <strong>Copyright &copy; 2015 <a href="http://acacha.org">Acacha.org</a>.</strong> {{ trans('adminlte_lang::message.createdby') }} <a href="http://acacha.org/sergitur">Sergi Tur Badenas</a>. {{ trans('adminlte_lang::message.seecode') }} <a href="https://github.com/acacha/adminlte-laravel">Github</a>
                    <br/>
                    AdminLTE {{ trans('adminlte_lang::message.createdby') }} Abdullah Almsaeed <a href="https://almsaeedstudio.com/">almsaeedstudio.com</a>
                    <br/>
                    Pratt Landing Page PROVA {{ trans('adminlte_lang::message.createdby') }} <a href="http://www.blacktie.co">BLACKTIE.CO</a>
                </p>

            </div>
        </div>
    </footer>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ url (mix('/js/app-landing.js')) }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
