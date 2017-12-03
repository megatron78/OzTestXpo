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
                                @if(!empty($cursoseminario->banner_inst_picture_1))
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                @endif
                                @if(!empty($cursoseminario->banner_inst_picture_2))
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                @endif
                                @if(!empty($cursoseminario->banner_inst_picture_3))
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                @endif
                                @if(!empty($cursoseminario->banner_inst_picture_4))
                                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                @endif
                                @if(!empty($cursoseminario->banner_inst_picture_5))
                                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                @endif

                                {{-- Put default pics on empty carousel --}}
                                @if(empty($cursoseminario->banner_inst_picture_1)
                                && empty($cursoseminario->banner_inst_picture_2)
                                && empty($cursoseminario->banner_inst_picture_3)
                                && empty($cursoseminario->banner_inst_picture_4)
                                && empty($cursoseminario->banner_inst_picture_5))
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                @endif

                            </ol>

                            <!-- Wrapper for slides -->
                            <div style="max-height: 325px" class="carousel-inner">
                                @if(!empty($cursoseminario->banner_inst_picture_1))
                                    <div class="item active">
                                        <img style="width: 100%;" src="{{ asset($cursoseminario->banner_inst_picture_1) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($cursoseminario->banner_inst_picture_2))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($cursoseminario->banner_inst_picture_2) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($cursoseminario->banner_inst_picture_3))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($cursoseminario->banner_inst_picture_3) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($cursoseminario->banner_inst_picture_4))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($cursoseminario->banner_inst_picture_4) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($cursoseminario->banner_inst_picture_5))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($cursoseminario->banner_inst_picture_5) }}"
                                             alt="">
                                    </div>
                                @endif
                                {{-- Put default pics on empty carousel --}}
                                @if(empty($cursoseminario->banner_inst_picture_1)
                                && empty($cursoseminario->banner_inst_picture_2)
                                && empty($cursoseminario->banner_inst_picture_3)
                                && empty($cursoseminario->banner_inst_picture_4)
                                && empty($cursoseminario->banner_inst_picture_5))
                                    <div class="item active">
                                        <img style="width: 100%;" src="{{ asset('/img/default_banner.png') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset('/img/default_banner.png') }}" alt="">
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
            <h1 style="background-color: #1B2D4D; color: white;">{{ $cursoseminario->nombre }}</h1>
            <div class="row">
                <div class="col-md-12">
                    <div style="font-size: 20px" class="nav-tabs-custom">
                        @if($cursoseminario->tipo == "Curso por Niveles")
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
                                                @if(isset($cursoseminario->tipo))
                                                    <dd>{{ $cursoseminario->tipo }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Campo</dt>
                                                @if(!empty($cursoseminario->campo))
                                                    <dd>{{ $cursoseminario->campo }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Institución que imparte</dt>
                                                @if(!empty($cursoseminario->institucion))
                                                    <dd>{{ $cursoseminario->institucion }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Costo</dt>
                                                @if(!empty($cursoseminario->costo))
                                                    <dd>{{ $cursoseminario->costo }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Modalidades</dt>
                                                @if($cursoseminario->presencial)
                                                    <dd>Presencial</dd>
                                                @endif
                                                @if($cursoseminario->semipresencial)
                                                    <dd>Semipresencial</dd>
                                                @endif
                                                @if($cursoseminario->distancia)
                                                    <dd>Online</dd>
                                                @endif
                                                <dt>Duración (horas, días, etc.)</dt>
                                                @if(!empty($cursoseminario->duracion))
                                                    <dd>{{ $cursoseminario->duracion }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Meses de Inicio</dt>
                                                @if(!empty($cursoseminario->meses_inicio))
                                                    <dd>{{ $cursoseminario->meses_inicio }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Duración por Nivel</dt>
                                                @if(!empty($cursoseminario->duracion_nivel))
                                                    <dd>{{ $cursoseminario->duracion_nivel }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Horarios</dt>
                                                @if(!empty($cursoseminario->horarios))
                                                    <dd>{!! $cursoseminario->horarios !!}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Alumnos máximo por Nivel</dt>
                                                @if(!empty($cursoseminario->max_alumnos_x_nivel))
                                                    <dd>{{ $cursoseminario->max_alumnos_x_nivel }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Lugar</dt>
                                                @if(!empty($cursoseminario->lugar))
                                                    <dd>{{ $cursoseminario->lugar }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Ubicación</dt>
                                                <dd>{{ isset($cursoseminario->country->printable_name) ? " / ".$cursoseminario->country->printable_name : "" }} </dd>
                                                <dd>{{ $cursoseminario->province->name }} {{ isset($cursoseminario->city->name) ? " / ".$cursoseminario->city->name : "" }} </dd>

                                                <dt>Teléfonos</dt>
                                                @if(!empty($cursoseminario->telefono))
                                                    <dd>{{ $cursoseminario->telefono }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Celular</dt>
                                                @if(!empty($cursoseminario->celular))
                                                    <dd>{{ $cursoseminario->celular }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Email</dt>
                                                @if(!empty($cursoseminario->email))
                                                    <dd>{{ $cursoseminario->email }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Web</dt>
                                                @if(!empty($cursoseminario->web))
                                                    <dd><a href="{{ $cursoseminario->web }}" target="_blank">{{ $cursoseminario->web }}</a></dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Redes Sociales</dt>
                                                <dd>
                                                    @if(!empty($cursoseminario->facebook))
                                                        <a href="{{ $cursoseminario->facebook }}" target="_blank"
                                                           class="btn btn-social-icon btn-facebook"><i
                                                                    class="fa fa-facebook"></i></a>
                                                    @endif
                                                    @if(!empty($cursoseminario->twitter))
                                                        &nbsp
                                                        <a href="{{ $cursoseminario->twitter }}" target="_blank"
                                                           class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                                    @endif
                                                    @if(!empty($cursoseminario->linkedin))
                                                        &nbsp
                                                        <a href="{{ $cursoseminario->linkedin }}" target="_blank"
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
                                                        <input type="hidden" id="email" name="email" value="{{ $cursoseminario->email }}">
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
                                        @if(!empty($cursoseminario->objetivo))
                                            <dd>{!! $cursoseminario->objetivo !!}</dd>
                                        @else
                                            <dd>N/D</dd>
                                        @endif
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_3">
                                    <div class="box-body">
                                        {{--<b class="text-blue">Instalaciones</b>--}}
                                        @if(!empty($cursoseminario->temario))
                                            <dd>{!! $cursoseminario->temario !!}</dd>
                                        @else
                                            <dd>N/D</dd>
                                        @endif
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_4">
                                    <div class="box-body">
                                        @if(!empty($cursoseminario->instructores_detalle))
                                            <dd>{!! $cursoseminario->instructores_detalle  !!}</dd>
                                        @else
                                            <dd>N/D</dd>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_5">
                                    <div class="box-body">
                                        @if(!empty($cursoseminario->incluye))
                                            <dd>{!! $cursoseminario->incluye !!}</dd>
                                        @else
                                            <dd>N/D</dd>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_6">
                                    <div class="box-body">
                                        @if(isset($cursoseminario->mapa_url) && !empty($cursoseminario->mapa_url))
                                            {!! $cursoseminario->mapa_url !!}
                                        @else
                                            N/D
                                        @endif
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_7">
                                    <div class="box-body">
                                        @if(!empty($cursoseminario->documento_pdf1))
                                            <dd>{{ $cursoseminario->documento_pdf1 }}</dd>
                                        @endif
                                        @if(!empty($cursoseminario->documento_pdf2))
                                            <dd>{{ $cursoseminario->documento_pdf2 }}</dd>
                                        @endif
                                        @if(!empty($cursoseminario->documento_pdf3))
                                            <dd>{{ $cursoseminario->documento_pdf3 }}</dd>
                                        @else
                                            <dd>N/D</dd>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-content -->
                        @else
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
                                                @if(isset($cursoseminario->tipo))
                                                    <dd>{{ $cursoseminario->tipo }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Campo</dt>
                                                @if(!empty($cursoseminario->campo))
                                                    <dd>{{ $cursoseminario->campo }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Institución que imparte</dt>
                                                @if(!empty($cursoseminario->institucion))
                                                    <dd>{{ $cursoseminario->institucion }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Costo</dt>
                                                @if(!empty($cursoseminario->costo))
                                                    <dd>{{ $cursoseminario->costo }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Modalidades</dt>
                                                @if($cursoseminario->presencial)
                                                    <dd>Presencial</dd>
                                                @endif
                                                @if($cursoseminario->semipresencial)
                                                    <dd>Semipresencial</dd>
                                                @endif
                                                @if($cursoseminario->distancia)
                                                    <dd>Online</dd>
                                                @endif
                                                <dt>Duración (horas, días, etc.)</dt>
                                                @if(!empty($cursoseminario->duracion))
                                                    <dd>{{ $cursoseminario->duracion }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Instructor(es)</dt>
                                                @if(!empty($cursoseminario->instructores))
                                                    <dd>{{ $cursoseminario->instructores }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Modalidades</dt>
                                                @if($cursoseminario->presencial)
                                                    <dd>Presencial</dd>
                                                @endif
                                                @if($cursoseminario->semipresencial)
                                                    <dd>Semipresencial</dd>
                                                @endif
                                                @if($cursoseminario->distancia)
                                                    <dd>Online</dd>
                                                @endif
                                                <dt>Fecha de Inicio</dt>
                                                @if(!empty($cursoseminario->fecha_inicio))
                                                    <dd>{{ $cursoseminario->fecha_inicio }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Fecha de Finalización</dt>
                                                @if(!empty($cursoseminario->fecha_fin))
                                                    <dd>{{ $cursoseminario->fecha_fin }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Duración (horas, días, etc.)</dt>
                                                @if(!empty($cursoseminario->duracion))
                                                    <dd>{{ $cursoseminario->duracion }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Cupos</dt>
                                                @if(!empty($cursoseminario->cupo))
                                                    <dd>{{ $cursoseminario->cupo }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Hora ingreso</dt>
                                                @if(!empty($cursoseminario->hora_ingreso))
                                                    <dd>{{ $cursoseminario->hora_ingreso }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Hora salida</dt>
                                                @if(!empty($cursoseminario->hora_salida))
                                                    <dd>{{ $cursoseminario->hora_salida }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Lugar</dt>
                                                @if(!empty($cursoseminario->lugar))
                                                    <dd>{{ $cursoseminario->lugar }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Ubicación</dt>
                                                <dd>{{ $cursoseminario->province->name }} {{ isset($cursoseminario->city->name) ? " / ".$cursoseminario->city->name : "" }} </dd>
                                                <dt>Teléfonos</dt>
                                                @if(!empty($cursoseminario->telefono))
                                                    <dd>{{ $cursoseminario->telefono }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Celular</dt>
                                                @if(!empty($cursoseminario->celular))
                                                    <dd>{{ $cursoseminario->celular }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Email</dt>
                                                @if(!empty($cursoseminario->email))
                                                    <dd>{{ $cursoseminario->email }}</dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Web</dt>
                                                @if(!empty($cursoseminario->web))
                                                    <dd><a href="{{ $cursoseminario->web }}" target="_blank">{{ $cursoseminario->web }}</a></dd>
                                                @else
                                                    <dd>N/D</dd>
                                                @endif
                                                <dt>Redes Sociales</dt>
                                                <dd>
                                                    @if(!empty($cursoseminario->facebook))
                                                        <a href="{{ $cursoseminario->facebook }}" target="_blank"
                                                           class="btn btn-social-icon btn-facebook"><i
                                                                    class="fa fa-facebook"></i></a>
                                                    @endif
                                                    @if(!empty($cursoseminario->twitter))
                                                        &nbsp
                                                        <a href="{{ $cursoseminario->twitter }}" target="_blank"
                                                           class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                                    @endif
                                                    @if(!empty($cursoseminario->linkedin))
                                                        &nbsp
                                                        <a href="{{ $cursoseminario->linkedin }}" target="_blank"
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
                                                        <input type="hidden" id="email" name="email" value="{{ $cursoseminario->email }}">
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
                                        @if(!empty($cursoseminario->objetivo))
                                            <dd>{!! $cursoseminario->objetivo !!}</dd>
                                        @else
                                            <dd>N/D</dd>
                                        @endif
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_3">
                                    <div class="box-body">
                                        {{--<b class="text-blue">Instalaciones</b>--}}
                                        @if(!empty($cursoseminario->temario))
                                            <dd>{!! $cursoseminario->temario !!}</dd>
                                        @else
                                            <dd>N/D</dd>
                                        @endif
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_4">
                                    <div class="box-body">
                                        @if(!empty($cursoseminario->instructores_detalle))
                                            <dd>{!! $cursoseminario->instructores_detalle  !!}</dd>
                                        @else
                                            <dd>N/D</dd>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_5">
                                    <div class="box-body">
                                        @if(!empty($cursoseminario->incluye))
                                            <dd>{!! $cursoseminario->incluye !!}</dd>
                                        @else
                                            <dd>N/D</dd>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_6">
                                    <div class="box-body">
                                        @if(isset($cursoseminario->mapa_url) && !empty($cursoseminario->mapa_url))
                                            {!! $cursoseminario->mapa_url !!}
                                        @else
                                            N/D
                                        @endif
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_7">
                                    <div class="box-body">
                                        @if(!empty($cursoseminario->documento_pdf1))
                                            <dd>{{ $cursoseminario->documento_pdf1 }}</dd>
                                        @endif
                                        @if(!empty($cursoseminario->documento_pdf2))
                                            <dd>{{ $cursoseminario->documento_pdf2 }}</dd>
                                        @endif
                                        @if(!empty($cursoseminario->documento_pdf3))
                                            <dd>{{ $cursoseminario->documento_pdf3 }}</dd>
                                        @else
                                            <dd>N/D</dd>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        @endif
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