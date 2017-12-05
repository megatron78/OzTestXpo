<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="es">
@include('vendor.adminlte.layouts.partials.headexpoeducar');
<!-- bootstrap slider -->

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app" v-cloak>
    <!-- Fixed navbar -->
@include('vendor.adminlte.layouts.partials.navbarexpoeducar')

<!-- style="padding-top: 0px" -->
    <section class="content" id="ini" name="ini">
        <div style="width: 100%" class="container">
            <div class="row">
                <div class="row centered">
                    <div class="col-lg-12 col-lg-offset-0">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="hidden-xs carousel-indicators">
                                @if(!empty($institution->banner_inst_picture_1))
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                @endif
                                @if(!empty($institution->banner_inst_picture_2))
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                @endif
                                @if(!empty($institution->banner_inst_picture_3))
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                @endif
                                @if(!empty($institution->banner_inst_picture_4))
                                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                @endif
                                @if(!empty($institution->banner_inst_picture_5))
                                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                @endif

                                {{-- Put default pics on empty carousel --}}
                                @if(empty($institution->banner_inst_picture_1)
                                && empty($institution->banner_inst_picture_2)
                                && empty($institution->banner_inst_picture_3)
                                && empty($institution->banner_inst_picture_4)
                                && empty($institution->banner_inst_picture_5))
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                @endif

                            </ol>

                            <!-- Wrapper for slides -->
                            <div style="max-height: 325px" class="carousel-inner">
                                @if(!empty($institution->banner_inst_picture_1))
                                    <div class="item active">
                                        <img style="width: 100%;" src="{{ asset($institution->banner_inst_picture_1) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($institution->banner_inst_picture_2))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($institution->banner_inst_picture_2) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($institution->banner_inst_picture_3))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($institution->banner_inst_picture_3) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($institution->banner_inst_picture_4))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($institution->banner_inst_picture_4) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($institution->banner_inst_picture_5))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($institution->banner_inst_picture_5) }}"
                                             alt="">
                                    </div>
                                @endif
                                {{-- Put default pics on empty carousel --}}
                                @if(empty($institution->banner_inst_picture_1)
                                && empty($institution->banner_inst_picture_2)
                                && empty($institution->banner_inst_picture_3)
                                && empty($institution->banner_inst_picture_4)
                                && empty($institution->banner_inst_picture_5))
                                    <div class="item active">
                                        <img style="width: 100%;" src="{{ asset('/img/default_banner.png') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset('/img/default_banner.png') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset('/img/default_banner.png') }}" alt="">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> <!--/ .carousel -->
            </div> <!-- banner -->
            <h1 style="background-color: #1B2D4D; color: white;">{{ $institution->nombre }}</h1>
            <div class="row">
                <div class="col-md-12">
                    <div style="font-size: 20px;" class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Información</a></li>
                            <li><a href="#tab_2" data-toggle="tab">Descripción</a></li>
                            <li><a href="#tab_3" data-toggle="tab">Detalles</a></li>
                            <li><a href="#tab_4" data-toggle="tab">Certificaciones y Logros</a></li>
                            <li><a href="#tab_5" data-toggle="tab">Galería de Imágenes</a></li>
                            <li><a href="#tab_6" data-toggle="tab">Mapa de Ubicación</a></li>
                            {{--<li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    Acciones <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                    --}}{{--<li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>--}}{{--
                                </ul>
                            </li>--}}
                            {{--<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>--}}
                        </ul>
                        <div style="font-size: 16px" class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <div class="row">
                                    <div class="col-md-5">
                                        <dl class="dl-horizontal">
                                    <dt>Niveles</dt>
                                    @if($institution->preescolar)
                                        <dd>Inicial</dd>
                                    @elseif($institution->escuela)
                                        <dd>Educación General Básica</dd>
                                    @elseif($institution->colegio)
                                        <dd>Colegio</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Trayectoria</dt>
                                    @if(!empty($institution->trayectoria))
                                        <dd>{{ $institution->trayectoria }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Rector/Director</dt>
                                    @if(!empty($institution->nombre_autoridad))
                                        <dd>{{ $institution->nombre_autoridad }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Ubicación</dt>
                                    <dd>{{ $institution->province->name }} {{ isset($institution->city->name) ? " / ".$institution->city->name : "" }}  {{ isset($institution->sector->nombre) ? " / ".$institution->sector->nombre : "" }}</dd>
                                    <dt>Dirección</dt>
                                    <dd>{{ $institution->direccion }}</dd>
                                    <dt>Tipo Educación</dt>
                                    @if($institution->religioso)
                                        <dd>Religioso</dd>
                                    @else
                                        <dd>Laico</dd>
                                    @endif
                                    <dt>Género</dt>
                                    @if($institution->masculino)
                                        <dd>Maculino</dd>
                                    @elseif($institution->femenino)
                                        <dd>Femenino</dd>
                                    @else
                                        <dd>Mixto</dd>
                                    @endif
                                    <dt>Sostenimiento</dt>
                                    @if($institution->fiscal)
                                        <dd>Pública</dd>
                                    @elseif($institution->fiscomisional)
                                        <dd>Fiscomisional</dd>
                                    @else
                                        <dd>Privada</dd>
                                    @endif
                                    <dt>Régimen</dt>
                                    @if(isset($institution->regimen))
                                        <dd>{{ $institution->regimen }}</dd>
                                    @else
                                        <dd>Sierra</dd>
                                    @endif
                                    <dt>Pensión promedio</dt>
                                    @if(!empty($institution->pago_promedio_escuela))
                                        <dd>Escuela: ${{ $institution->pago_promedio_escuela }}</dd>
                                    @elseif(!empty($institution->pago_promedio_colegio))
                                        <dd>Colegio: ${{ $institution->pago_promedio_colegio }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Idiomas</dt>
                                    @if(!empty($institution->lenguajes))
                                        <dd>{{ $institution->lenguajes }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Teléfonos</dt>
                                    @if(!empty($institution->telefono))
                                        <dd>{{ $institution->telefono }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Celular</dt>
                                    @if(!empty($institution->celular))
                                        <dd>{{ $institution->celular }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Email</dt>
                                    @if(!empty($institution->email))
                                        <dd>{{ $institution->email }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Web</dt>
                                    @if(!empty($institution->web))
                                        <dd><a href="{{ $institution->web }}" target="_blank">{{ $institution->web }}</a></dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Redes Sociales</dt>
                                    <dd>
                                        @if(!empty($institution->facebook))
                                            <a href="{{ $institution->facebook }}" target="_blank"
                                               class="btn btn-social-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></a>
                                        @endif
                                        @if(!empty($institution->twitter))
                                            &nbsp
                                            <a href="{{ $institution->twitter }}" target="_blank"
                                               class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                        @else
                                            N/D
                                        @endif
                                    </dd>
                                </dl>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="modal-header bg-gray-light">
                                            <h4 class="modal-title" id="myModalLabel">
                                                <img style="padding-left: 1%; height: 70px; width: auto;"
                                                     src="{{ asset('/img/expoeducar_logo115x97.png') }}" alt="ExpoEducar">
                                                <strong>Proporciona tus datos para contactarnos contigo</strong></h4>
                                        </div>
                                        {!! Form::open(['method' => 'POST', 'route' => 'send.moreinfo', 'class' => 'form-horizontal']) !!}
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="nombreApellido" class="col-sm-3 control-label">Nombre y Apellido *</label>

                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="nombreApellido" name="nombreApellido"
                                                           placeholder="Nombre y Apellido" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="telefono" class="col-sm-3 control-label">Teléfono *</label>

                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="whatsapp" class="col-sm-3 control-label">Whatsapp</label>

                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="whatsapp" name="telefono" placeholder="Whatsapp">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Correo *</label>

                                                <div class="col-sm-9">
                                                    <input type="hidden" id="email" name="email" value="{{ $institution->email }}">
                                                    <input type="email" class="form-control" id="inputEmail3" name="inputEmail3" placeholder="Correo electrónico" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="interes" class="col-sm-3 control-label">Asunto</label>

                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="interes" name="interes" placeholder="Estoy interesado en...">
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                        <div class="modal-footer bg-gray-light">
                                            <button style="font-size: 16px" type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                                <div class="box-body">
                                    {{--<b class="text-blue">Instalaciones</b>--}}
                                    {{--<dl class="dl-horizontal">--}}
                                    @if(!empty($institution->descripcion))
                                        {!! $institution->descripcion !!}
                                    @else
                                        N/D
                                    @endif
                                    {{--</dl>--}}
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3">
                                <dl class="dl-horizontal">
                                    <dt>Edad desde</dt>
                                    @if(!empty($institution->edad_desde))
                                        <dd>{{ $institution->edad_desde }} años</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Edad hasta</dt>
                                    @if(!empty($institution->edad_hasta))
                                        <dd>{{ $institution->edad_hasta }} años</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Horario Extendido</dt>
                                    @if($institution->horario_extendido)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Horario Ingreso Diurno</dt>
                                    @if(!empty($institution->entrada_matutino))
                                        <dd>{{ $institution->entrada_matutino }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Horario Salida Diurno</dt>
                                    @if(!empty($institution->salida_matutino))
                                        <dd>{{ $institution->salida_matutino }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Horario Salida Extendido</dt>
                                    @if(!empty($institution->salida_horario_extendido))
                                        <dd>{{ $institution->salida_horario_extendido }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Alimentación</dt>
                                    @if(!empty($institution->alimentacion))
                                        @if($institution->alimentacion === "S")
                                            <dd>SI</dd>
                                        @elseif($institution->alimentacion === "O")
                                            <dd>OPCIONAL</dd>
                                        @else
                                            <dd>NO</dd>
                                        @endif
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Total Alumnos</dt>
                                    @if(!empty($institution->total_estudiantes))
                                        <dd>{{ $institution->total_estudiantes }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Máximo por Clase</dt>
                                    @if(!empty($institution->max_estudiantes_x_clase))
                                        <dd>{{ $institution->max_estudiantes_x_clase }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Área Total en m2</dt>
                                    @if(!empty($institution->max_estudiantes_x_clase))
                                        <dd>{{ $institution->max_estudiantes_x_clase }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Área Canchas Deportivas en m2</dt>
                                    @if(!empty($institution->area_deportiva))
                                        <dd>{{ $institution->area_deportiva }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Área Espacios Verdes en m2</dt>
                                    @if(isset($institution->area_espacios_verdes))
                                        <dd>{{ $institution->area_espacios_verdes }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Área Piscinas en m2</dt>
                                    @if(!empty($institution->area_piscina))
                                        <dd>{{ $institution->area_piscina }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Seguridad Privada</dt>
                                    @if($institution->seguridad_privada)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Wifi en aulas</dt>
                                    @if($institution->wifi_interior)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Wifi exterior</dt>
                                    @if(!empty($institution->wifi_otros))
                                        <dd>{{ $institution->wifi_otros }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Cámara IP Entrada/Salida</dt>
                                    @if($institution->wifi_interior)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Cámara IP Aulas/Espacios</dt>
                                    @if($institution->wifi_interior)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Otros</dt>
                                    @if(!empty($institution->otros))
                                        <dd>{{ $institution->otros }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <hr>
                                </dl>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_4">
                                <dt></dt>
                                @if(!empty($institution->certificaciones_logros))
                                    <dd>{!! $institution->certificaciones_logros !!}</dd>
                                @else
                                    <dd>N/D</dd>
                                @endif
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_5">
                                <ul style="padding:0 0 0 0; margin:0 0 0 0;" class="row">
                                    <li style="list-style: none; margin-bottom:20px;" class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                        @if(!empty($institution->institution_picture_1))
                                            <img style="cursor: pointer;" class="img-responsive" src="{{ asset($institution->institution_picture_1) }}">
                                        @else
                                            <img style="cursor: pointer;" class="img-responsive" src="{{ asset('/img/default_image.png') }}">
                                        @endif
                                    </li>
                                    <li style="list-style: none; margin-bottom:20px;" class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                        @if(!empty($institution->institution_picture_2))
                                            <img style="cursor: pointer;" class="img-responsive" src="{{ asset($institution->institution_picture_2) }}">
                                        @else
                                            <img style="cursor: pointer;" class="img-responsive" src="{{ asset('/img/default_image.png') }}">
                                        @endif
                                    </li>
                                    <li style="list-style: none; margin-bottom:20px;" class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                        @if(!empty($institution->institution_picture_3))
                                            <img style="cursor: pointer;" class="img-responsive" src="{{ asset($institution->institution_picture_3) }}">
                                        @else
                                            <img style="cursor: pointer;" class="img-responsive" src="{{ asset('/img/default_image.png') }}">
                                        @endif
                                    </li>
                                    <li style="list-style: none; margin-bottom:20px;" class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                        @if(!empty($institution->institution_picture_4))
                                            <img style="cursor: pointer;" class="img-responsive" src="{{ asset($institution->institution_picture_4) }}">
                                        @else
                                            <img style="cursor: pointer;" class="img-responsive" src="{{ asset('/img/default_image.png') }}">
                                        @endif
                                    </li>
                                    <li style="list-style: none; margin-bottom:20px;" class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                        @if(!empty($institution->institution_picture_5))
                                            <img style="cursor: pointer;" class="img-responsive" src="{{ asset($institution->institution_picture_5) }}">
                                        @else
                                            <img style="cursor: pointer;" class="img-responsive" src="{{ asset('/img/default_image.png') }}">
                                        @endif
                                    </li>
                                    <li style="list-style: none; margin-bottom:20px;" class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                        @if(!empty($institution->institution_picture_6))
                                            <img style="cursor: pointer;" class="img-responsive" src="{{ asset($institution->institution_picture_6) }}">
                                        @else
                                            <img style="cursor: pointer;" class="img-responsive" src="{{ asset('/img/default_image.png') }}">
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_6">
                                @if(isset($institution->mapa_url) && !empty($institution->mapa_url))
                                    {!! $institution->mapa_url !!}
                                @endif
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                </div>
            </div>
        </div> <!--/ .container -->
    </section>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div style="border-radius:0;" class="modal-content">
                <div style="padding:5px !important;" class="modal-body">
                    <div id="map-canvas"></div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <footer>
        @include('vendor.adminlte.layouts.partials.footerexpoeducar')
    </footer>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--Google Maps API-->
<script src="{{ asset('/js/app-landing.js') }}"></script>
<script src="{{ url ('/js/photo-gallery.js') }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
<style>
    .next {
        float:right;
        text-align:right;
    }
</style>
</html>