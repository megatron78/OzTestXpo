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
                                @if(!empty($posgrado->banner_inst_picture_1))
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                @endif
                                @if(!empty($posgrado->banner_inst_picture_2))
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                @endif
                                @if(!empty($posgrado->banner_inst_picture_3))
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                @endif
                                @if(!empty($posgrado->banner_inst_picture_4))
                                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                @endif
                                @if(!empty($posgrado->banner_inst_picture_5))
                                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                @endif

                                {{-- Put default pics on empty carousel --}}
                                @if(empty($posgrado->banner_inst_picture_1)
                                && empty($posgrado->banner_inst_picture_2)
                                && empty($posgrado->banner_inst_picture_3)
                                && empty($posgrado->banner_inst_picture_4)
                                && empty($posgrado->banner_inst_picture_5))
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                @endif

                            </ol>

                            <!-- Wrapper for slides -->
                            <div style="max-height: 325px" class="carousel-inner">
                                @if(!empty($posgrado->banner_inst_picture_1))
                                    <div class="item active">
                                        <img style="width: 100%;" src="{{ asset($posgrado->banner_inst_picture_1) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($posgrado->banner_inst_picture_2))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($posgrado->banner_inst_picture_2) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($posgrado->banner_inst_picture_3))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($posgrado->banner_inst_picture_3) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($posgrado->banner_inst_picture_4))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($posgrado->banner_inst_picture_4) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($posgrado->banner_inst_picture_5))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($posgrado->banner_inst_picture_5) }}"
                                             alt="">
                                    </div>
                                @endif
                                {{-- Put default pics on empty carousel --}}
                                @if(empty($posgrado->banner_inst_picture_1)
                                && empty($posgrado->banner_inst_picture_2)
                                && empty($posgrado->banner_inst_picture_3)
                                && empty($posgrado->banner_inst_picture_4)
                                && empty($posgrado->banner_inst_picture_5))
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
            <h1 style="background-color: #1B2D4D; color: white;">{{ $posgrado->nombre }}</h1>
            <div class="row">
                <div class="col-md-12">
                    <div style="font-size: 20px" class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Información</a></li>
                            <li><a href="#tab_2" data-toggle="tab">Objetivo</a></li>
                            <li><a href="#tab_3" data-toggle="tab">Temario</a></li>
                            <li><a href="#tab_4" data-toggle="tab">Información Instructores</a></li>
                            <li><a href="#tab_5" data-toggle="tab">Incluye</a></li>
                            <li><a href="#tab_6" data-toggle="tab">Mapa de Ubicación</a></li>
                            <li><a href="#tab_7" data-toggle="tab">Documentos PDF</a></li>
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
                                            <dt>Tipo</dt>
                                            @if(!empty($posgrado->tipo))
                                                <dd>{{ $posgrado->tipo }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Campo</dt>
                                            @if(!empty($posgrado->campo))
                                                <dd>{{ $posgrado->campo }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Institución que imparte</dt>
                                            @if(!empty($posgrado->institucion))
                                                <dd>{{ $posgrado->institucion }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Costo</dt>
                                            @if(!empty($posgrado->costo))
                                                <dd>{{ $posgrado->costo }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Instructor(es)</dt>
                                            @if(!empty($posgrado->instructores))
                                                <dd>{{ $posgrado->instructores }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Modalidades</dt>
                                            @if($posgrado->presencial)
                                                <dd>Presencial</dd>
                                            @endif
                                            @if($posgrado->semipresencial)
                                                <dd>Semipresencial</dd>
                                            @endif
                                            @if($posgrado->distancia)
                                                <dd>Distancia</dd>
                                            @endif
                                            <dt>Cupos</dt>
                                            @if(!empty($posgrado->cupo))
                                                <dd>{{ $posgrado->cupo }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Fecha de Inicio</dt>
                                            @if(!empty($posgrado->fecha_inicio))
                                                <dd>{{ $posgrado->fecha_inicio }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Fecha de Finalización</dt>
                                            @if(!empty($posgrado->fecha_fin))
                                                <dd>{{ $posgrado->fecha_fin }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Duración (horas)</dt>
                                            @if(!empty($posgrado->duracion))
                                                <dd>{{ $posgrado->duracion }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Hora ingreso</dt>
                                            @if(!empty($posgrado->hora_ingreso))
                                                <dd>{{ $posgrado->hora_ingreso }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Hora salida</dt>
                                            @if(!empty($posgrado->hora_salida))
                                                <dd>{{ $posgrado->hora_salida }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Lugar</dt>
                                            @if(!empty($posgrado->lugar))
                                                <dd>{{ $posgrado->lugar }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Ubicación</dt>
                                            <dd>{{ isset($posgrado->country->printable_name) ? " / ".$posgrado->country->printable_name : "" }} </dd>
                                            <dd>{{ $posgrado->province->name }} {{ isset($posgrado->city->name) ? " / ".$posgrado->city->name : "" }} </dd>
                                            <dt>Teléfonos</dt>
                                            @if(!empty($posgrado->telefono))
                                                <dd>{{ $posgrado->telefono }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Celular</dt>
                                            @if(!empty($posgrado->celular))
                                                <dd>{{ $posgrado->celular }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Email</dt>
                                            @if(!empty($posgrado->email))
                                                <dd>{{ $posgrado->email }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Web</dt>
                                            @if(!empty($posgrado->web))
                                                <dd>{{ $posgrado->web }}</dd>
                                            @else
                                                <dd>N/D</dd>
                                            @endif
                                            <dt>Redes Sociales</dt>
                                            <dd>
                                                @if(!empty($posgrado->facebook))
                                                    <a href="{{ $posgrado->facebook }}"
                                                       class="btn btn-social-icon btn-facebook"><i
                                                                class="fa fa-facebook"></i></a>
                                                @endif
                                                @if(!empty($posgrado->twitter))
                                                    &nbsp
                                                    <a href="{{ $posgrado->twitter }}"
                                                       class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                                @endif
                                                @if(!empty($posgrado->linkedin))
                                                    &nbsp
                                                    <a href="{{ $posgrado->linkedin }}"
                                                       class="btn btn-social-icon btn-linkedin"><i
                                                                class="fa fa-linkedin"></i></a>
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
                                                    <input type="hidden" id="email" name="email" value="{{ $posgrado->email }}">
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
                                    <dl class="dl-horizontal">
                                        <dt>Objetivo</dt>
                                        @if(!empty($posgrado->objetivo))
                                            <dd>{{ $posgrado->objetivo }}</dd>
                                        @else
                                            <dd>N/D</dd>
                                        @endif
                                    </dl>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3">
                                <div class="box-body">
                                    {{--<b class="text-blue">Instalaciones</b>--}}
                                    <dl class="dl-horizontal">
                                        <dt>Temario</dt>
                                        @if(!empty($posgrado->temario))
                                            <dd>{!! $posgrado->temario !!}</dd>
                                        @else
                                            <dd>N/D</dd>
                                        @endif
                                    </dl>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_4">
                                <dl class="dl-horizontal">
                                    <dt>Instructores</dt>
                                    @if(!empty($posgrado->instructores_detalle))
                                        <dd>{!! $posgrado->instructores_detalle  !!}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <hr>
                                </dl>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_5">
                                <dt>Incluye</dt>
                                @if(!empty($posgrado->incluye))
                                    <dd>{{ $posgrado->incluye }}</dd>
                                @else
                                    <dd>N/D</dd>
                                @endif
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_6">
                                @if(isset($posgrado->mapa_url) && !empty($posgrado->mapa_url))
                                    {!! $posgrado->mapa_url !!}
                                @else
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7911908314577!2d-78.41692168566942!3d-0.21129163545664972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d5913090093377%3A0x6df39dd58f481a13!2sOV+Constructora!5e0!3m2!1ses!2sec!4v1502305609923" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                                @endif
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_7">
                                <dt>Documentos</dt>
                                @if(!empty($posgrado->documento_pdf1))
                                    <dd>{{ $posgrado->documento_pdf1 }}</dd>
                                @endif
                                @if(!empty($posgrado->documento_pdf2))
                                    <dd>{{ $posgrado->documento_pdf2 }}</dd>
                                @endif
                                @if(!empty($posgrado->documento_pdf3))
                                    <dd>{{ $posgrado->documento_pdf3 }}</dd>
                                @else
                                    <dd>N/D</dd>
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