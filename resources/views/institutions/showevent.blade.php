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
                                @if(!empty($event->banner_inst_picture_1))
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                @endif
                                @if(!empty($event->banner_inst_picture_2))
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                @endif
                                @if(!empty($event->banner_inst_picture_3))
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                @endif
                                @if(!empty($event->banner_inst_picture_4))
                                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                @endif
                                @if(!empty($event->banner_inst_picture_5))
                                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                @endif

                                {{-- Put default pics on empty carousel --}}
                                @if(empty($event->banner_inst_picture_1)
                                && empty($event->banner_inst_picture_2)
                                && empty($event->banner_inst_picture_3)
                                && empty($event->banner_inst_picture_4)
                                && empty($event->banner_inst_picture_5))
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                @endif

                            </ol>

                            <!-- Wrapper for slides -->
                            <div style="max-height: 325px" class="carousel-inner">
                                @if(!empty($event->banner_inst_picture_1))
                                    <div class="item active">
                                        <img style="width: 100%;" src="{{ asset($event->banner_inst_picture_1) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($event->banner_inst_picture_2))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($event->banner_inst_picture_2) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($event->banner_inst_picture_3))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($event->banner_inst_picture_3) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($event->banner_inst_picture_4))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($event->banner_inst_picture_4) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($event->banner_inst_picture_5))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($event->banner_inst_picture_5) }}"
                                             alt="">
                                    </div>
                                @endif
                                {{-- Put default pics on empty carousel --}}
                                @if(empty($event->banner_inst_picture_1)
                                && empty($event->banner_inst_picture_2)
                                && empty($event->banner_inst_picture_3)
                                && empty($event->banner_inst_picture_4)
                                && empty($event->banner_inst_picture_5))
                                    <div class="item active">
                                        <img style="width: 100%;" src="{{ asset('/img/slide-01.png') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset('/img/slide-02.png') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset('/img/slide-03.png') }}" alt="">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> <!--/ .carousel -->
            </div> <!-- banner -->
            <h1 style="background-color: #1B2D4D; color: white;">{{ $event->nombre }}</h1>
            <div class="row">
                <div class="col-md-12">
                    <div style="font-size: 20px" class="nav-tabs-custom">
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
                                    @if($event->preescolar)
                                        <dd>Inicial</dd>
                                    @elseif($event->escuela)
                                        <dd>Educación General Básica</dd>
                                    @elseif($event->colegio)
                                        <dd>Colegio</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Trayectoria</dt>
                                    <dd>{{ $event->trayectoria }}</dd>
                                    <dt>Rector/Director</dt>
                                    <dd>{{ $event->nombre_autoridad }}</dd>
                                    <dt>Ubicación</dt>
                                    <dd>{{ $event->province->name }} {{ isset($event->city->name) ? " / ".$event->city->name : "" }}  {{ isset($event->sector->nombre) ? " / ".$event->sector->nombre : "" }}</dd>
                                    <dt>Dirección</dt>
                                    <dd>{{ $event->direccion }}</dd>
                                    <dt>Tipo Educación</dt>
                                    @if($event->religioso)
                                        <dd>Religioso</dd>
                                    @else
                                        <dd>Laico</dd>
                                    @endif
                                    <dt>Género</dt>
                                    @if($event->masculino)
                                        <dd>Maculino</dd>
                                    @elseif($event->femenino)
                                        <dd>Femenino</dd>
                                    @else
                                        <dd>Mixto</dd>
                                    @endif
                                    <dt>Sostenimiento</dt>
                                    @if($event->fiscal)
                                        <dd>Pública</dd>
                                    @elseif($event->fiscomisional)
                                        <dd>Fiscomisional</dd>
                                    @else
                                        <dd>Privada</dd>
                                    @endif
                                    <dt>Régimen</dt>
                                    @if(isset($event->regimen))
                                        <dd>{{ $event->regimen }}</dd>
                                    @else
                                        <dd>Sierra</dd>
                                    @endif
                                    <dt>Pensión promedio</dt>
                                    @if(isset($event->pago_promedio_escuela))
                                        <dd>Escuela: ${{ $event->pago_promedio_escuela }}</dd>
                                    @elseif(isset($event->pago_promedio_colegio))
                                        <dd>Colegio: ${{ $event->pago_promedio_colegio }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Idiomas</dt>
                                    @if(isset($event->lenguajes))
                                        <dd>{{ $event->lenguajes }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Teléfonos</dt>
                                    @if(isset($event->telefono))
                                        <dd>{{ $event->telefono }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Celular</dt>
                                    @if(isset($event->celular))
                                        <dd>{{ $event->celular }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Email</dt>
                                    @if(isset($event->email))
                                        <dd>{{ $event->email }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Web</dt>
                                    @if(isset($event->web))
                                        <dd>{{ $event->web }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Redes Sociales</dt>
                                    <dd>
                                        @if(isset($event->facebook))
                                            <a href="{{ $event->facebook }}"
                                               class="btn btn-social-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></a>
                                        @elseif(isset($event->twitter))
                                            &nbsp;
                                            <a href="{{ $event->twitter }}"><i class="fa fa-twitter"></i></a>
                                        @else
                                            <dd></dd>
                                        @endif
                                    </dd>
                                </dl>
                                    </div>
                                    <div class="col-md-7">
                                        <form class="form-horizontal" action="/">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="nombreApellido" class="col-sm-3 control-label">Nombre y Apellido *</label>

                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="nombreApellido"
                                                               placeholder="Nombre y Apellido" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="telefono" class="col-sm-3 control-label">Teléfono *</label>

                                                    <div class="col-sm-6">
                                                        <input type="email" class="form-control" id="telefono" placeholder="Correo electrónico" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="whatsapp" class="col-sm-3 control-label">Whatsapp</label>

                                                    <div class="col-sm-6">
                                                        <input type="email" class="form-control" id="whatsapp" placeholder="Whatsapp">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Correo *</label>

                                                    <div class="col-sm-6">
                                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Correo electrónico" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="interes" class="col-sm-3 control-label">Interés</label>

                                                    <div class="col-sm-6">
                                                        <input type="email" class="form-control" id="interes" placeholder="Estoy interesado en...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-9" style="text-align: right;">
                                                    <button style="font-size: 16px" type="submit" class="btn btn-primary">Enviar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                                <div class="box-body">
                                    {{--<b class="text-blue">Instalaciones</b>--}}
                                    <dl class="dl-horizontal">
                                        <dt>Descripción</dt>
                                        @if(isset($event->descripcion))
                                            <dd>{{ $event->descripcion }}</dd>
                                        @else
                                            <dd></dd>
                                        @endif
                                    </dl>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3">
                                <dl class="dl-horizontal">
                                    <dt>Edad desde</dt>
                                    @if(isset($event->edad_desde))
                                        <dd>{{ $event->edad_desde }} años</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Edad hasta</dt>
                                    @if(isset($event->edad_hasta))
                                        <dd>{{ $event->edad_hasta }} años</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Horario Extendido</dt>
                                    @if($event->horario_extendido)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Horario Ingreso Diurno</dt>
                                    @if(isset($event->entrada_matutino))
                                        <dd>{{ $event->entrada_matutino }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Horario Salida Diurno</dt>
                                    @if(isset($event->salida_matutino))
                                        <dd>{{ $event->salida_matutino }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Horario Salida Extendido</dt>
                                    @if(isset($event->salida_horario_extendido))
                                        <dd>{{ $event->salida_horario_extendido }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Alimentación</dt>
                                    @if(isset($event->alimentacion))
                                        @if($event->alimentacion === "S")
                                            <dd>SI</dd>
                                        @elseif($event->alimentacion === "O")
                                            <dd>OPCIONAL</dd>
                                        @else
                                            <dd>NO</dd>
                                        @endif
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Total Alumnos</dt>
                                    @if(isset($event->total_estudiantes))
                                        <dd>{{ $event->total_estudiantes }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Máximo por Clase</dt>
                                    @if(isset($event->max_estudiantes_x_clase))
                                        <dd>{{ $event->max_estudiantes_x_clase }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Área Total</dt>
                                    @if(isset($event->max_estudiantes_x_clase))
                                        <dd>{{ $event->max_estudiantes_x_clase }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Área Canchas Deportivas</dt>
                                    @if(isset($event->area_deportiva))
                                        <dd>{{ $event->area_deportiva }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Área Espacios Verdes</dt>
                                    @if(isset($event->area_espacios_verdes))
                                        <dd>{{ $event->area_espacios_verdes }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Área Piscinas</dt>
                                    @if(isset($event->area_piscina))
                                        <dd>{{ $event->area_piscina }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Seguridad Privada</dt>
                                    @if($event->seguridad_privada)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Wifi en aulas</dt>
                                    @if($event->wifi_interior)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Wifi exterior</dt>
                                    @if(isset($event->wifi_otros))
                                        <dd>{{ $event->wifi_otros }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <dt>Cámara IP Entrada/Salida</dt>
                                    @if($event->wifi_interior)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Cámara IP Aulas/Espacios</dt>
                                    @if($event->wifi_interior)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Otros</dt>
                                    @if(isset($event->otros))
                                        <dd>{{ $event->otros }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                    <hr>
                                </dl>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_4">
                                <dt>Certificaciones y Logros</dt>
                                @if(isset($event->certificaciones_logros))
                                    <dd>{{ $event->certificaciones_logros }}</dd>
                                @else
                                    <dd></dd>
                                @endif
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_5">
                                <ul style="padding:0 0 0 0; margin:0 0 0 0;" class="row">
                                    <li style="list-style: none; margin-bottom:20px;" class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                        <img style="cursor: pointer;" class="img-responsive" src="{{ asset('/img/slide-01.png') }}">
                                    </li>
                                    <li style="list-style: none; margin-bottom:20px;" class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                        <img style="cursor: pointer;" class="img-responsive" src="{{ asset('/img/slide-01.png') }}">
                                    </li>
                                    <li style="list-style: none; margin-bottom:20px;" class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                        <img style="cursor: pointer;" class="img-responsive" src="{{ asset('/img/slide-01.png') }}">
                                    </li>
                                    <li style="list-style: none; margin-bottom:20px;" class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                        <img style="cursor: pointer;" class="img-responsive" src="{{ asset('/img/slide-01.png') }}">
                                    </li>
                                    <li style="list-style: none; margin-bottom:20px;" class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                        <img style="cursor: pointer;" class="img-responsive" src="{{ asset('/img/slide-01.png') }}">
                                    </li>
                                    <li style="list-style: none; margin-bottom:20px;" class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                        <img style="cursor: pointer;" class="img-responsive" src="{{ asset('/img/slide-01.png') }}">
                                    </li>
                                </ul>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_6">
                                @if(isset($event->mapa_url) && !empty($event->mapa_url))
                                    {!! $event->mapa_url !!}
                                @else
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7911908314577!2d-78.41692168566942!3d-0.21129163545664972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d5913090093377%3A0x6df39dd58f481a13!2sOV+Constructora!5e0!3m2!1ses!2sec!4v1502305609923" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
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
<script src="{{ url (mix('/js/app-landing.js')) }}"></script>
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