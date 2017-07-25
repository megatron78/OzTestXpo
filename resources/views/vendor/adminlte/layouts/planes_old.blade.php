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

    <meta property="og:title" content="Megatron Adminlte-laravel"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description"
          content="MegaAdminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}"/>
    <meta property="og:url" content="http://demo.adminlte.acacha.org/"/>
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png"/>
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png"/>
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png"/>
    <meta property="og:sitename" content="demo.adminlte.acacha.org"/>
    <meta property="og:url" content="http://demo.adminlte.acacha.org"/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@acachawiki"/>
    <meta name="twitter:creator" content="@acacha1"/>

    <title>{{ trans('adminlte_lang::message.landingdescriptionpratt') }}</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet'
          type='text/css'>
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
    <div style="background-color: #f2f2f2; border-bottom: #f2f2f2" id="navigationt"
         class="navbar navbar-default navbar-fixed-top">
        <a style="padding-top: 0" class="navbar-brand" href="{{ url('/') }}">
            <img style="padding-left: 5%; height: 52px; width: auto;"
                 src="{{ asset('/img/expoeducar_logo115x97.png') }}" alt="ExpoEducar">
        </a>
    </div>
    <!-- Fixed navbar -->
    @include('vendor.adminlte.layouts.partials.navbarexpoeducar')

    <section class="content" id="destacados">

        <div class="row plan-tarif">

            <h3 class="subtitle">Planes y Tarifas</h3>
            <div id="tabsPlanes">
                <ul>
                    <li><a href="#tabs-1">Escuelas / Institutos / Universidades</a></li>
                    <li><a href="#tabs-2">Cursos / Posgrados</a></li>
                    <li><a href="#tabs-3">Eventos</a></li>
                </ul>
                <div id="tabs-1">
                    <div id="" class="row univ-wrapper">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col1">
                            <div class="title">
                                <h2>Básico</h2><br>
                                <h3>Totalmete Gratuito</h3><br>
                                <a class="link register" href="#">Quiero este plan!</a>
                            </div>
                            <div class="content">
                                <div class="section1">
                                    <p></p>
                                </div>
                                <div class="section2">
                                    <p>Listado básico</p>
                                </div>
                                <!--                        <div class="section3">
                                                            <p></p>
                                                        </div>-->
                                <div class="section4">
                                    <p>Permite publicar una institución con información básica</p>
                                </div>
                                <div class="section5">
                                    <p> Sólo debes registrarte... GRATIS</p>
                                </div>
                                <div class="section6">
                                    <a class="link register" href="#">REGÍSTRATE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col2">
                            <div class="title">
                                <h2>Premium</h2><br>
                                <h3>Visibilidad Inmediata</h3><br>
                                <a href="#">Quiero este plan!</a>
                            </div>
                            <div class="content">
                                <div class="section1">
                                    <p>Portafolio online profesional</p>
                                </div>
                                <div class="section2">
                                    <p>Listado priorizado</p>
                                </div>
                                <!--                        <div class="section3">
                                                            <p>Más información</p>
                                                        </div>-->
                                <div class="section4">
                                    <p>Publicar gratis eventos<br>(Según el plan)</p>
                                </div>
                                <div class="section5">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>3M</td>
                                            <td>6M</td>
                                            <td>12M</td>
                                        </tr>
                                        <tr>
                                            <td>3 meses</td>
                                            <td>6 meses</td>
                                            <td>12 meses</td>
                                        </tr>
                                        <tr>
                                            <td>$150</td>
                                            <td>$270</td>
                                            <td>$500</td>
                                        </tr>
                                        <tr>
                                            <td>1 evento gratis</td>
                                            <td>3 eventos gratis</td>
                                            <td>9 eventos gratis</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="section6">
                                    <a href="#">Contratar plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col3">
                            <div class="title">
                                <h2>Gold</h2><br>
                                <h3>Enfoque profesional</h3><br>
                                <a href="#">Quiero este plan!</a>
                            </div>
                            <div class="content">
                                <div class="section1">
                                    <p>Permite aparecer en la Home</p>
                                </div>
                                <div class="section2">
                                    <p>Listado priorizado</p>
                                </div>
                                <!--                        <div class="section3">
                                                            <p>Más información</p>
                                                        </div>-->
                                <div class="section4">
                                    <p>Publicar cursos<br>(Según el plan)</p>
                                </div>
                                <div class="section5">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>3M</td>
                                            <td>6M</td>
                                            <td>12M</td>
                                        </tr>
                                        <tr>
                                            <td>3 meses</td>
                                            <td>6 meses</td>
                                            <td>12 meses</td>
                                        </tr>
                                        <tr>
                                            <td>$180</td>
                                            <td>$300</td>
                                            <td>$530</td>
                                        </tr>
                                        <tr>
                                            <td>1 evento gratis</td>
                                            <td>3 eventos gratis</td>
                                            <td>9 eventos gratis</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="section6">
                                    <a href="#">Contratar plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tabs-2">
                    <div id="" class="row pos-wrapper">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col1">
                            <div class="title">
                                <h2>Básico</h2><br>
                                <h3>Totalmete Gratuito</h3><br>
                                <a class="link register" href="#">Quiero este plan!</a>
                            </div>
                            <div class="content">
                                <div class="section1">
                                    <p></p>
                                </div>
                                <div class="section2">
                                    <p>Listado básico</p>
                                </div>
                                <!--                        <div class="section3">
                                                            <p></p>
                                                        </div>-->
                                <div class="section4">
                                    <p>Permite publicar cursos gratis por 1 mes con información básica.<br>Solo un curso
                                        cada mes.</p>
                                </div>
                                <div class="section5">
                                    <p> Sólo debes registrarte... GRATIS</p>
                                </div>
                                <div class="section6">
                                    <a class="link register" href="#">REGÍSTRATE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col2">
                            <div class="title">
                                <span>El más popular</span>
                                <h2>Premium</h2><br>
                                <h3>Visibilidad Inmediata</h3><br>
                                <a href="#">Quiero este plan!</a>
                            </div>
                            <div class="content">
                                <div class="section1">
                                    <p>Permite aparecer como destacado e información completa</p>
                                </div>
                                <div class="section2">
                                    <p>Listado priorizado</p>
                                </div>
                                <!--                        <div class="section3">
                                                            <p>Más información</p>
                                                        </div>-->
                                <div class="section4">
                                    <p>Publicar cursos<br>(Según el plan)</p>
                                </div>
                                <div class="section5">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>3M</td>
                                            <td>6M</td>
                                            <td>12M</td>
                                        </tr>
                                        <tr>
                                            <td>3 meses</td>
                                            <td>6 meses</td>
                                            <td>12 meses</td>
                                        </tr>
                                        <tr>
                                            <td>$100</td>
                                            <td>$180</td>
                                            <td>$300</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="section6">
                                    <a href="#">Contratar plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col3">
                            <div class="title">
                                <h2>Gold</h2><br>
                                <h3>Enfoque profesional</h3><br>
                                <a href="#">Quiero este plan!</a>
                            </div>
                            <div class="content">
                                <div class="section1">
                                    <p>Permite aparecer en la Home</p>
                                </div>
                                <div class="section2">
                                    <p>Listado priorizado</p>
                                </div>
                                <!--                        <div class="section3">
                                                            <p>Más información</p>
                                                        </div>-->
                                <div class="section4">
                                    <p>Publicar cursos<br>(Según el plan)</p>
                                </div>
                                <div class="section5">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>3M</td>
                                            <td>6M</td>
                                            <td>12M</td>
                                        </tr>
                                        <tr>
                                            <td>3 meses</td>
                                            <td>6 meses</td>
                                            <td>12 meses</td>
                                        </tr>
                                        <tr>
                                            <td>$100</td>
                                            <td>$300</td>
                                            <td>$530</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="section6">
                                    <a href="#">Contratar plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tabs-3">
                    <div id="tag3" class="row events-wrapper">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col1">
                            <div class="title">
                                <h2>Básico</h2><br>
                                <h3>Totalmete Gratuito</h3><br>
                                <a class="link register" href="#">Quiero este plan!</a>
                            </div>
                            <div class="content">
                                <div class="section1">
                                    <p></p>
                                </div>
                                <div class="section2">
                                    <p>Listado básico</p>
                                </div>
                                <!--                        <div class="section3">
                                                            <p></p>
                                                        </div>-->
                                <div class="section4">
                                    <p>Permite publicar eventos gratis.</p>
                                </div>
                                <div class="section5">
                                    <p> Sólo debes registrarte... GRATIS</p>
                                </div>
                                <div class="section6">
                                    <a class="link register" href="#">REGÍSTRATE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col2">
                            <div class="title">
                                <span>El más popular</span>
                                <h2>Premium</h2><br>
                                <h3>Visibilidad Inmediata</h3><br>
                                <a href="#">Quiero este plan!</a>
                            </div>
                            <div class="content">
                                <div class="section1">
                                    <p>Permite aparecer como destacado e información completa</p>
                                </div>
                                <div class="section2">
                                    <p>Listado priorizado</p>
                                </div>
                                <!--                        <div class="section3">
                                                            <p>Más información</p>
                                                        </div>-->
                                <div class="section4">
                                    <p>Publicar eventos limitados 60 días de exposición<br>(Según el plan)</p>
                                </div>
                                <div class="section5">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>3M</td>
                                            <td>6M</td>
                                            <td>12M</td>
                                        </tr>
                                        <tr>
                                            <td>3 meses</td>
                                            <td>6 meses</td>
                                            <td>12 meses</td>
                                        </tr>
                                        <tr>
                                            <td>$30</td>
                                            <td>$50</td>
                                            <td>$80</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="section6">
                                    <a href="#">Contratar plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col3">
                            <div class="title">
                                <h2>Gold</h2><br>
                                <h3>Enfoque profesional</h3><br>
                                <a href="#">Quiero este plan!</a>
                            </div>
                            <div class="content">
                                <div class="section1">
                                    <p>Permite aparecer en la Home</p>
                                </div>
                                <div class="section2">
                                    <p>Listado priorizado</p>
                                </div>
                                <!--                        <div class="section3">
                                                            <p>Más información</p>
                                                        </div>-->
                                <div class="section4">
                                    <p>Publicar eventos limitados 60 días de exposición<br>(Según el plan)</p>
                                </div>
                                <div class="section5">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>3M</td>
                                            <td>6M</td>
                                            <td>12M</td>
                                        </tr>
                                        <tr>
                                            <td>3 meses</td>
                                            <td>6 meses</td>
                                            <td>12 meses</td>
                                        </tr>
                                        <tr>
                                            <td>$50</td>
                                            <td>$70</td>
                                            <td>$100</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="section6">
                                    <a href="#">Contratar plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer>
        @include('vendor.adminlte.layouts.partials.footerexpoeducar')
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
