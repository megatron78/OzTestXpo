<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="es">
@include('vendor.adminlte.layouts.partials.headexpoeducar');

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app" v-cloak>
    <!-- Fixed navbar -->
    @include('vendor.adminlte.layouts.partials.navbarexpoeducar')
    <!-- Banner -->
    @include('vendor.adminlte.layouts.partials.bannercategory')

    <section class="content" id="destacados" name="destacados">
        <!-- Modal -->
        @include('vendor.adminlte.layouts.partials.modalmeinteresa')

        <!-- INTRO WRAP -->
        <div style="width: 100%;" class="container">
            <div class="row">
                <br>
                @foreach($instituciones_view as $institucionview)
                    @if($institucionview->tipo == 1)
                        <div class="col-md-4"
                             onmouseleave="if($('#1collapse{{ $institucionview->id }}').attr('aria-expanded') === 'true'){ $('#1collapse{{ $institucionview->id }}').collapse('toggle');}">
                            <!-- Widget: user widget style 1 -->
                            <div class="box box-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <a href="{{ route('preescolar.show', [isset($institucionview->province_name) ? $institucionview->province_name : "ND", isset($institucionview->city->name) ? $institucionview->city->name : "ND", $institucionview->id, $institucionview->slug]) }}" target="_blank" >
                                    <div class="widget-user-header" style="padding: 0px; display: flex; margin: auto;">
                                         @if(!empty($institucionview->institution_bg_picture))
                                                <img style="max-height: 100%; max-width: 100%; margin: auto;"
                                                     src="{{ asset($institucionview->institution_bg_picture) }}">
                                        @else
                                                <img style="max-height: 100%; max-width: 100%; margin: auto;"
                                                     src="{{ asset('/img/default_image.png') }}">
                                        @endif
                                    </div>
                                </a>
                                <div class="box-footer" style="padding: 0px; padding-bottom: 7px; border-width: 3px; border-color: #018DB7;">
                                    <p class="box-title" style="font-size: 18px; font-weight: bold; color: #333333; background-color: #B6BBC3; overflow:hidden; white-space: nowrap;
                                        text-overflow: ellipsis;" class="widget-user-username">{{ $institucionview->nombre_corto }}</p>
                                    <div class="row">
                                        <div class="col-sm-4 border-right centered">
                                            <div class="description-block">
                                                <h5 class="description-header">Educación</h5>
                                                <span class="description-text"><i
                                                            class="fa  fa-venus-mars margin-r-5"></i>
                                                    @if($institucionview->masculino)
                                                        MASCULINO</span>
                                                @elseif($institucionview->femenino)
                                                    FEMENINO</span>
                                                @else
                                                    MIXTO</span>
                                                @endif
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 border-right centered">
                                            <div class="description-block">
                                                <h5 class="description-header">Niveles</h5>
                                                <span class="description-text">
                                                @if($institucionview->preescolar)
                                                        INICIAL</span>
                                                @endif
                                                @if($institucionview->escuela and $institucionview->preescolar)
                                                    , EGB</span>
                                                @endif
                                                @if($institucionview->escuela and !$institucionview->colegio)
                                                    EGB</span>
                                                @endif
                                                @if($institucionview->escuela and $institucionview->colegio)
                                                    EGB, </span>
                                                @endif
                                                @if($institucionview->colegio)
                                                    BGU</span>
                                                @endif
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 centered">
                                            <div class="description-block">
                                                <h5 class="description-header">Ubicación</h5>
                                                <span class="description-text">{{ str_limit(((isset($institucionview->city_name) ? $institucionview->city_name : "ND") .','.(isset($institucionview->province_name) ? $institucionview->province_name : "ND")),14) }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div style="padding: 5px;" class="col-sm-4 centered">
                                        <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal"
                                           data-email="{{ $institucionview->email }}"
                                           href="#meInteresa">
                                            Me interesa
                                        </a>
                                    </div>
                                    <div style="padding: 5px;" class="col-sm-4 centered">
                                        @if($institucionview->preescolar == 1 and $institucionview->escuela == 0 and $institucionview->colegio == 0)
                                            <a href="{{ route('preescolar.show', [isset($institucionview->province_name) ? $institucionview->province_name : "ND", isset($institucionview->city->name) ? $institucionview->city->name : "ND", $institucionview->id, $institucionview->slug]) }}" target="_blank" class="btn-sm bg-navy">
                                                Más información
                                            </a>
                                        @else
                                            <a href="{{ route('escuelacolegio.show', [isset($institucionview->province_name) ? $institucionview->province_name : "ND", isset($institucionview->city->name) ? $institucionview->city->name : "ND", $institucionview->id, $institucionview->slug]) }}" target="_blank" class="btn-sm bg-navy">
                                                Más información
                                            </a>
                                        @endif
                                    </div>
                                    <div style="padding: 5px;" class="col-sm-4 centered">
                                        <a class="btn-sm bg-orange" data-toggle="collapse" data-parent="#accordion"
                                           href="#1collapse{{ $institucionview->id }}">
                                            Contactos...
                                        </a>
                                    </div>
                                    <div id="1collapse{{ $institucionview->id }}" class="panel-collapse collapse">
                                        <br>
                                        <div class="box-body">
                                            <i class="fa  fa-map margin-r-5"></i> {{ $institucionview->direccion }}<br>
                                            <i class="fa fa-phone margin-r-5"></i> {{ $institucionview->telefono }}
                                            / {{ $institucionview->celular }} <br>
                                            <i class="fa fa-envelope margin-r-5"></i> {{ $institucionview->email }}
                                        </div>
                                        <div class="text-center">
                                            <a href="{{ $institucionview->facebook }}"
                                               class="btn btn-social-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></a>
                                            <a href="{{ $institucionview->twitter }}"
                                               class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                            {{--<a href="{{ $institucionview->instagram }}" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>--}}
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>

                            </div>
                            <!-- /.widget-user -->
                        </div>
                    @endif
                    @if($institucionview->tipo == 2)
                        <div class="col-md-4"
                                 onmouseleave="if($('#2collapse{{ $institucionview->id }}').attr('aria-expanded') === 'true'){ $('#2collapse{{ $institucionview->id }}').collapse('toggle');}">
                                <!-- Widget: user widget style 1 -->
                                <div class="box box-widget widget-user" >
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <a href="{{ route('superior.show', [isset($institucionview->province_name) ? $institucionview->province_name : "ND", isset($institucionview->city->name) ? $institucionview->city->name : "ND", $institucionview->id, $institucionview->slug]) }}" target="_blank">
                                        <div class="widget-user-header" style="padding: 0px; display: flex; margin: auto;">
                                            @if(!empty($institucionview->institution_bg_picture))
                                                    <img style="max-height: 100%; max-width: 100%; margin: auto;"
                                                         src="{{ asset($institucionview->institution_bg_picture) }}">
                                            @else
                                                    <img style="max-height: 100%; max-width: 100%; margin: auto;"
                                                         src="{{ asset('/img/default_image.png') }}">
                                            @endif
                                        </div>
                                    </a>
                                    <div class="box-footer" style="padding: 0px; padding-bottom: 10px; border-width: 3px; border-color: #018DB7;">
                                        <p class="box-title" style="font-size: 18px; font-weight: bold; color: #333333; background-color: #B6BBC3; overflow:hidden; white-space: nowrap; text-overflow: ellipsis;" class="widget-user-username"> {{ $institucionview->nombre_corto }} </p>
                                        <div class="row">
                                            <div class="centered">
                                                <div style="min-height: 15px; max-height: 15px" class="description-block">
                                                    {{--<h5 class="description-header">Carreras</h5>--}}
                                                    <span class="description-text">{{ str_limit($institucionview->carreras_corto, $limit=65, $end="...") }}</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                        </div>
                                        <br>
                                        <div style="padding: 5px;" class="col-sm-4 centered">
                                            <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal"
                                               data-email="{{ $institucionview->email }}"
                                               href="#meInteresa">
                                                Me interesa
                                            </a>
                                        </div>
                                        <div style="padding: 5px;" class="col-sm-4 centered">
                                            <a href="{{ route('superior.show', [isset($institucionview->province_name) ? $institucionview->province_name : "ND", isset($institucionview->city->name) ? $institucionview->city->name : "ND", $institucionview->id, $institucionview->slug]) }}" target="_blank" class="btn-sm bg-navy">
                                                Más información
                                            </a>
                                        </div>
                                        <div style="padding: 5px;" class="col-sm-4 centered">
                                            <a class="btn-sm bg-orange" data-toggle="collapse" data-parent="#accordion"
                                               href="#2collapse{{ $institucionview->id }}">
                                                Contactos...
                                            </a>
                                        </div>
                                        <div id="2collapse{{ $institucionview->id }}" class="panel-collapse collapse">
                                            <br>
                                            <div class="box-body">
                                                <i class="fa  fa-map margin-r-5"></i> {{ $institucionview->direccion }}<br>
                                                <i class="fa fa-phone margin-r-5"></i> {{ $institucionview->telefono }}
                                                / {{ $institucionview->celular }} <br>
                                                <i class="fa fa-envelope margin-r-5"></i> {{ $institucionview->email }}
                                            </div>
                                            <div class="text-center">
                                                <a href="{{ $institucionview->facebook }}"
                                                   class="btn btn-social-icon btn-facebook"><i
                                                            class="fa fa-facebook"></i></a>
                                                <a href="{{ $institucionview->twitter }}"
                                                   class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="{{ $institucionview->linkedin }}"
                                                   class="btn btn-social-icon btn-linkedin"><i
                                                            class="fa fa-linkedin"></i></a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                </div>
                                <!-- /.widget-user -->
                            </div>
                    @endif
                    @if($institucionview->tipo == 3)
                        @if($institucionview->clasificacion === "Posgrado")
                                <div class="col-md-4">
                                    <!-- Widget: user widget style 1 -->
                                    <div class="box box-widget widget-user-2">
                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                        <div style="padding: 1px" class="widget-user-header bg-blue-active">
                                            <!-- /.widget-user-image -->
                                            <a style="color: white" href="{{ route('posgrado.show', [isset($institucionview->province_name) ? $institucionview->province_name : "ND", isset($institucionview->city->name) ? $institucionview->city->name : "ND", $institucionview->id, $institucionview->slug]) }}" target="_blank">
                                                <p style="overflow: hidden; height: 2.3em; margin-left: 0px" class="widget-user-username">
                                                    {{ $institucionview->nombre }}
                                                </p>
                                            </a>
                                            <p style="line-height: 1.1; font-size: 18px; font-weight: 300; overflow:hidden; white-space: nowrap;
                            font-family: Source Sans Pro,sans-serif;">{{ $institucionview->institution }}</p>
                                        </div>
                                        <div class="box-footer no-padding">
                                            {{--<div style="min-height: 25px; max-height: 25px; font-size: 16px" class="description-block">
                                                {{ str_limit($institucionview->objetivo, $limit=50, $end="...") }}
                                            </div>--}}
                                            <div class="col-sm-12 centered" style="min-height: 4.5em;">
                                                <h5>{{ isset($institucionview->city_name) ? $institucionview->city_name : "ND" }} /
                                                    {{ isset($institucionview->telefono) ? $institucionview->telefono : "ND" }} /
                                                    {{ isset($institucionview->email) ? $institucionview->email : "ND" }}</h5>
                                            </div>
                                            <br>
                                            <div style="padding: 5px;" class="col-sm-6 centered">
                                                <a href="{{ route('posgrado.show', [isset($institucionview->province_name) ? $institucionview->province_name : "ND", isset($institucionview->city->name) ? $institucionview->city->name : "ND", $institucionview->id, $institucionview->slug]) }}" target="_blank" class="btn-sm bg-navy">
                                                    Más información
                                                </a>
                                            </div>
                                            <div style="padding: 5px;" class="col-sm-6 centered">
                                                <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal"
                                                   data-email="{{ $institucionview->email }}"
                                                   href="#meInteresa">
                                                    Me interesa
                                                </a>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <hr class="bg-blue-active">
                                            <div class="col-sm-6">
                                                <div class="description-block pull-left">
                                                    <i style="vertical-align: middle; font-size: 30px" class="ion ion-clock text-blue"></i>&nbsp;<span style="padding-bottom: 10px; font-size: 15px" class="description-text">&nbsp; {{ $institucionview->duracion }}</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-6">
                                                <div class="description-block pull-left">
                                                    <i style="vertical-align: middle; font-size: 30px" class="ion ion-android-calendar text-blue"></i>&nbsp;<span style="font-size: 15px;" class="description-text">&nbsp;{{ $institucionview->fecha_inicio }}</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-6">
                                                <div class="description-block pull-left">
                                                    <i style="vertical-align: middle; font-size: 30px" class="ion ion-social-usd text-blue"></i>&nbsp;<span style="font-size: 15px" class="description-text">&nbsp; {{ $institucionview->costo }}</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-6">
                                                <div class="description-block pull-left">
                                <i style="vertical-align: middle; font-size: 30px" class="ion ion-ios-people-outline text-blue"></i><span style="font-size: 15px" class="description-text">
                                @if($institucionview->presencial)
                                    Presencial</span>
                                                    @elseif($institucionview->semipresencial)
                                                        Semipresencial</span>
                                                    @elseif($institucionview->distancia)
                                                        Distancia</span>
                                                    @endif
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </div>
                                    <!-- /.widget-user -->
                                </div>
                        @else
                            <div class="col-md-4">
                                <!-- Widget: user widget style 1 -->
                                <div class="box box-widget widget-user-2">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div style="padding: 1px" class="widget-user-header bg-blue-active">
                                        <!-- /.widget-user-image -->
                                        <a style="color: white" href="{{ route('cursoseminario.show', [isset($institucionview->province_name) ? $institucionview->province_name : "ND", isset($institucionview->city->name) ? $institucionview->city->name : "ND", $institucionview->id, $institucionview->slug]) }}" target="_blank">
                                            <p style="overflow: hidden; height: 2.3em; margin-left: 0px" class="widget-user-username">
                                                {{ $institucionview->nombre }}
                                            </p>
                                        </a>
                                        <p style="line-height: 1.1; font-size: 18px; font-weight: 300; overflow:hidden; white-space: nowrap;
                            font-family: Source Sans Pro,sans-serif;">{{ $institucionview->institution }}</p>
                                    </div>
                                    <div class="box-footer no-padding">
                                        {{--<div style="font-size: 16px" class="description-block">
                                            {{$institucionview->objetivo}}
                                        </div>--}}
                                        <div class="col-sm-12 centered" style="min-height: 4.5em;">
                                            <h5>{{ isset($institucionview->city->name) ? $institucionview->city->name : "ND" }} /
                                                {{ isset($institucionview->telefono) ? $institucionview->telefono : "ND" }} /
                                                {{ isset($institucionview->email) ? $institucionview->email : "ND" }}</h5>
                                        </div>
                                        <br>
                                        <div style="padding: 5px;" class="col-sm-6 centered">
                                            <a href="{{ route('cursoseminario.show', [isset($institucionview->province_name) ? $institucionview->province_name : "ND", isset($institucionview->city->name) ? $institucionview->city->name : "ND", $institucionview->id, $institucionview->slug]) }}" target="_blank" class="btn-sm bg-navy">
                                                Más información
                                            </a>
                                        </div>
                                        <div style="padding: 5px;" class="col-sm-6 centered">
                                            <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal"
                                               data-email="{{ $institucionview->email }}"
                                               href="#meInteresa">
                                                Me interesa
                                            </a>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <hr class="bg-blue-active">
                                        <div class="col-sm-6">
                                            <div class="description-block pull-left">
                                                <i style="vertical-align: middle; font-size: 30px" class="ion ion-clock text-blue"></i>&nbsp;<span style="font-size: 15px" class="description-text"> &nbsp;{{ $institucionview->duracion }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="description-block pull-left">
                                                <i style="vertical-align: middle; font-size: 30px" class="ion ion-android-calendar text-blue"></i>&nbsp;<span style="font-size: 15px;" class="description-text"> &nbsp;{{ $institucionview->fecha_inicio }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="description-block pull-left">
                                                <i style="vertical-align: middle; font-size: 30px" class="ion ion-social-usd text-blue"></i>&nbsp;<span style="font-size: 15px" class="description-text"> &nbsp;{{ $institucionview->costo }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="description-block pull-left">
                                                <i style="vertical-align: middle; font-size: 30px" class="ion ion-ios-people-outline text-blue"></i>&nbsp;<span style="font-size: 15px" class="description-text">
                            @if($institucionview->presencial)
                                Presencial</span>
                                                @elseif($institucionview->semipresencial)
                                                    Semipresencial</span>
                                                @elseif($institucionview->distancia)
                                                    On line</span>
                                                @endif
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </div>
                                <!-- /.widget-user -->
                            </div>
                        @endif
                    @endif
                    @if($institucionview->tipo == 4)
                            <div class="col-md-4" onmouseleave="if($('#4collapse{{ $institucionview->id }}').attr('aria-expanded') === 'true'){ $('#4collapse{{ $institucionview->id }}').collapse('toggle');}">
                                <!-- Widget: user widget style 1 -->
                                <div class="box box-widget widget-user">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <a style="color: #0073B7;" href="{{ $institucionview->web }}" target="_blank">
                                        <div class="widget-user-header" style="padding: 0px; display: flex; margin: auto;">
                                             @if(!empty($institucionview->institution_bg_picture))
                                                    <img style="max-height: 100%; max-width: 100%; margin: auto;"
                                                         src="{{ asset($institucionview->institution_bg_picture) }}">
                                            @else
                                                    <img style="max-height: 100%; max-width: 100%; margin: auto;"
                                                         src="{{ asset('/img/default_image.png') }}">
                                            @endif
                                        </div>
                                    </a>

                                    <div style="padding: 0px;height: 121px" class="box-footer">
                                        <ul class="event-list">
                                            <li>
                                                <time datetime="2014-07-20 0000">
                                                    <span class="day">{{ $institucionview->dia_evento }}</span>
                                                    <span class="month">{{ $institucionview->mes_evento }}</span>
                                                    <span class="year">{{ $institucionview->year_evento }}</span>
                                                    <span class="time">{{ $institucionview->hora_evento }}</span>
                                                </time>
                                                <div class="info">
                                                    <h2 class="title">{{ str_limit($institucionview->nombre, 17) }}</h2>
                                                    <p style="font-size: 14px" class="desc">{{ $institucionview->informacion }}</p>
                                                    <ul>
                                                        <li style="width:32%;">
                                                            <a style="color: #0073B7;" href="{{ $institucionview->web }}" target="_blank"><span class="fa fa-info text-black"></span>
                                                                Ver más</a>
                                                        </li>
                                                        <li style="color: #0073B7; width:32%;"><span class="fa fa-money text-black"></span> {{ $institucionview->costo }}</li>
                                                        <li style="width:32%;">
                                                            <a style="color: #0073B7;" data-toggle="collapse" data-parent="#accordion" href="#4collapse{{ $institucionview->id }}">
                                                                <span class="fa fa-globe text-black"></span>
                                                                Contactos...
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="social">
                                                    <ul>
                                                        <li class="facebook" style="width:33%;"><a href="{{ $institucionview->facebook }}"><span
                                                                        class="fa fa-facebook"></span></a></li>
                                                        <li class="twitter" style="width:34%;"><a href="{{ $institucionview->twitter }}"><span
                                                                        class="fa fa-twitter"></span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="#4collapse{{ $institucionview->id }}" class="panel-collapse collapse">
                                        <div class="box-body">
                                            <i class="fa  fa-map margin-r-5"></i> {{ $institucionview->direccion }}<br>
                                            <i class="fa fa-phone margin-r-5"></i> {{ $institucionview->telefono }} <br>
                                            <i class="fa fa-envelope margin-r-5"></i> {{ $institucionview->email }}
                                        </div>
                                    </div>

                                </div>
                                <!-- /.widget-user -->
                            </div>
                    @endif
                @endforeach
            </div>
            <br>
        </div> <!--/ .container -->
    </section>

    <footer>
        @include('vendor.adminlte.layouts.partials.footerexpoeducar')
    </footer>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/app-landing.js') }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
    $('#meInteresa').on('show.bs.modal', function(e) {
        var $modal = $(this);
        var email = $(e.relatedTarget).attr('data-email');
        $modal.find("#email").val(email);
        $modal.find("#tipo").val("1");
    });
</script>
</body>
</html>
