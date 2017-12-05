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
                                <div class="widget-user-header bg-black"
                                     @if(!empty($institucionview->institution_bg_picture))
                                     style="background: url('{{ asset($institucionview->institution_bg_picture) }}') center center no-repeat;">
                                    @else
                                        style="background: url('{{ asset('/img/default_image.png') }}') center center no-repeat;">
                                    @endif
                                </div>

                                <div class="box-footer">
                                    <h3 style="color:black"
                                        class="widget-user-username">{{ str_limit($institucionview->nombre_corto, $limit=24, $end="...") }}</h3>
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
                                <div class="box box-widget widget-user">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="widget-user-header bg-black"
                                        @if(!empty($institucionview->institution_bg_picture))
                                            style="background: url('{{ asset($institucionview->institution_bg_picture) }}') center center no-repeat;">
                                        @else
                                            style="background: url('{{ asset('/img/default_image.png') }}') center center no-repeat;">
                                        @endif
                                    </div>

                                    <div class="box-footer">
                                        <h3 style="color:black"
                                            class="widget-user-username">{{ str_limit($institucionview->nombre_corto, $limit=24, $end="...") }}</h3>
                                        <div class="row">
                                            <div class="centered">
                                                <div style="min-height: 15px; max-height: 15px" class="description-block">
                                                    {{--<h5 class="description-header">Carreras</h5>--}}
                                                    <span class="description-text">{{ str_limit($institucionview->carreras, $limit=24, $end="...") }}</span>
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
                                            <h2 style="color: white">{{ str_limit($institucionview->nombre, $limit=24, $end="...") }}</h2>
                                            <h4 style="color: white;margin-left: 0px" class="widget-user-desc">{{ $institucionview->institution }}</h4>
                                        </div>
                                        <div class="box-footer no-padding">
                                            <div style="min-height: 25px; max-height: 25px; font-size: 16px" class="description-block">
                                                {{ str_limit($institucionview->objetivo, $limit=50, $end="...") }}
                                            </div>
                                            <div class="col-sm-4 centered">
                                                <a href="{{ route('posgrado.show', [isset($institucionview->province_name) ? $institucionview->province_name : "ND", isset($institucionview->city->name) ? $institucionview->city->name : "ND", $institucionview->id, $institucionview->slug]) }}" target="_blank" class="btn-sm bg-navy">
                                                    Más información
                                                </a>
                                            </div>
                                            <br>
                                            <hr class="bg-blue-active">
                                            <div class="col-sm-6">
                                                <div class="description-block pull-left">
                                                    <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-clock text-blue"></i> {{ $institucionview->duracion }}</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-6">
                                                <div class="description-block pull-left">
                                                    <span style="font-size: 18px;" class="description-text"><i style="font-size: 40px" class="ion ion-android-calendar text-blue"></i> {{ $institucionview->fecha_inicio }}</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-6">
                                                <div class="description-block pull-left">
                                                    <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-social-usd text-blue"></i> {{ $institucionview->costo }}</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-6">
                                                <div class="description-block pull-left">
                            <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-ios-people-outline text-blue"></i>
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
                                        <h2 style="color: white">{{ str_limit($institucionview->nombre, $limit=24, $end="...") }}</h2>
                                        <h4 style="color: white;margin-left: 0px" class="widget-user-desc">{{ $institucionview->institucion }}</h4>
                                    </div>
                                    <div class="box-footer no-padding">
                                        <div style="font-size: 16px" class="description-block">
                                            {{$institucionview->objetivo}}
                                        </div>
                                        <div class="col-sm-4 centered">
                                            <a href="{{ route('cursoseminario.show', [isset($institucionview->province_name) ? $institucionview->province_name : "ND", isset($institucionview->city->name) ? $institucionview->city->name : "ND", $institucionview->id, $institucionview->slug]) }}" target="_blank" class="btn-sm bg-navy">
                                                Más información
                                            </a>
                                        </div>
                                        <hr class="bg-blue-active">
                                        <div class="col-sm-6">
                                            <div class="description-block pull-left">
                                                <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-clock text-blue"></i> {{ $institucionview->duracion }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="description-block pull-left">
                                                <span style="font-size: 18px;" class="description-text"><i style="font-size: 40px" class="ion ion-android-calendar text-blue"></i> {{ $institucionview->fecha_inicio }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="description-block pull-left">
                                                <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-social-usd text-blue"></i> {{ $institucionview->costo }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="description-block pull-left">
                        <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-ios-people-outline text-blue"></i>
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
                        @endif
                    @endif
                    @if($institucionview->tipo == 4)
                            <div class="col-md-4" onmouseleave="if($('#4collapse{{ $institucionview->id }}').attr('aria-expanded') === 'true'){ $('#4collapse{{ $institucionview->id }}').collapse('toggle');}">
                                <!-- Widget: user widget style 1 -->
                                <div class="box box-widget widget-user">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="widget-user-header bg-black"
                                         @if(!empty($institucionview->institution_bg_picture))
                                         style="background: url('{{ asset($institucionview->institution_bg_picture) }}') center center no-repeat;">
                                        @else
                                            style="background: url('{{ asset('/img/ucla_campus_superior_destacado.jpg') }}') center center no-repeat;">
                                        @endif
                                    </div>

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
                                                    <h2 class="title">Megatron's birthday</h2>
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
