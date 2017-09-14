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
            <h1 class="text-blue">{{ $cursoseminario->nombre }}</h1>
            <div class="row">
                <div class="col-md-12">
                    <div style="font-size: 20px" class="nav-tabs-custom">
                        @if($cursoseminario->tipo == "Curso por Niveles")
                            <ul class="nav nav-tabs">
                                <li><a href="#tab_1" data-toggle="tab">Cursos por Niveles</a></li>
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
                                                    <dd></dd>
                                                @endif
                                                <dt>Institución que imparte</dt>
                                                <dd>{{ $cursoseminario->institucion }}</dd>
                                                <dt>Modalidades</dt>
                                                @if($cursoseminario->presencial)
                                                    <dd>Presencial</dd>
                                                @endif
                                                @if($cursoseminario->semipresencial)
                                                    <dd>Semipresencial</dd>
                                                @endif
                                                @if($cursoseminario->distancia)
                                                    <dd>Distancia</dd>
                                                @endif
                                                <dt>Alumnos máximo por Nivel</dt>
                                                @if(isset($cursoseminario->max_alumnos_x_nivel))
                                                    <dd>{{ $cursoseminario->max_alumnos_x_nivel }}</dd>
                                                @else
                                                    <dd></dd>
                                                @endif
                                                <dt>Meses de Inicio</dt>
                                                @if(isset($cursoseminario->meses_inicio))
                                                    <dd>{{ $cursoseminario->meses_inicio }}</dd>
                                                @else
                                                    <dd></dd>
                                                @endif
                                                <dt>Duración por Nivel</dt>
                                                @if(isset($cursoseminario->duracion_nivel))
                                                    <dd>{{ $cursoseminario->duracion_nivel }}</dd>
                                                @else
                                                    <dd></dd>
                                                @endif
                                                <dt>Horarios</dt>
                                                @if(isset($cursoseminario->horarios))
                                                    <dd>{{ $cursoseminario->horarios }}</dd>
                                                @else
                                                    <dd></dd>
                                                @endif
                                                <dt>Lugar</dt>
                                                @if(isset($cursoseminario->lugar))
                                                    <dd>{{ $cursoseminario->lugar }}</dd>
                                                @else
                                                    <dd></dd>
                                                @endif
                                                <dt>Ubicación</dt>
                                                <dd>{{ isset($cursoseminario->country->printable_name) ? " / ".$cursoseminario->country->printable_name : "" }} </dd>
                                                <dd>{{ $cursoseminario->province->name }} {{ isset($cursoseminario->city->name) ? " / ".$cursoseminario->city->name : "" }} </dd>
                                                <dt>Teléfonos</dt>
                                                @if(isset($cursoseminario->telefono))
                                                    <dd>{{ $cursoseminario->telefono }}</dd>
                                                @else
                                                    <dd></dd>
                                                @endif
                                                <dt>Celular</dt>
                                                @if(isset($cursoseminario->celular))
                                                    <dd>{{ $cursoseminario->celular }}</dd>
                                                @else
                                                    <dd></dd>
                                                @endif
                                                <dt>Email</dt>
                                                @if(isset($cursoseminario->email))
                                                    <dd>{{ $cursoseminario->email }}</dd>
                                                @else
                                                    <dd></dd>
                                                @endif
                                                <dt>Web</dt>
                                                @if(isset($cursoseminario->web))
                                                    <dd>{{ $cursoseminario->web }}</dd>
                                                @else
                                                    <dd></dd>
                                                @endif
                                                <dt>Redes Sociales</dt>
                                                <dd>
                                                    @if(isset($cursoseminario->facebook))
                                                        <a href="{{ $cursoseminario->facebook }}"
                                                           class="btn btn-social-icon btn-facebook"><i
                                                                    class="fa fa-facebook"></i></a>
                                                    @endif
                                                    @if(isset($cursoseminario->twitter))
                                                        &nbsp
                                                        <a href="{{ $cursoseminario->twitter }}"
                                                           class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                                    @endif
                                                    @if(isset($cursoseminario->linkedin))
                                                        &nbsp
                                                        <a href="{{ $cursoseminario->linkedin }}"
                                                           class="btn btn-social-icon btn-linkedin"><i
                                                                    class="fa fa-linkedin"></i></a>
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
                                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        @else
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab">Información</a></li>
                                <li><a href="#tab_2" data-toggle="tab">Objetivo</a></li>
                                <li><a href="#tab_3" data-toggle="tab">Temario</a></li>
                                <li><a href="#tab_4" data-toggle="tab">Información Instructores</a></li>
                                <li><a href="#tab_5" data-toggle="tab">Incluye</a></li>
                                <li><a href="#tab_6" data-toggle="tab">Galería de Imágenes</a></li>
                                <li><a href="#tab_7" data-toggle="tab">Documentos PDF</a></li>
                                <li><a href="#tab_8" data-toggle="tab">Cursos por Niveles</a></li>
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
                                                    <dd></dd>
                                                @endif
                                                <dt>Campo</dt>
                                                <dd>{{ $cursoseminario->campo }}</dd>
                                                <dt>Institución que imparte</dt>
                                                <dd>{{ $cursoseminario->institucion }}</dd>
                                                <dt>Costo</dt>
                                                <dd>{{ $cursoseminario->costo }}</dd>
                                                <dt>Instructor(es)</dt>
                                                <dd>{{ $cursoseminario->instructores }}</dd>
                                                <dt>Modalidades</dt>
                                                @if($cursoseminario->presencial)
                                                    <dd>Presencial</dd>
                                                @endif
                                                @if($cursoseminario->semipresencial)
                                                    <dd>Semipresencial</dd>
                                                @endif
                                                @if($cursoseminario->distancia)
                                                    <dd>Distancia</dd>
                                                @endif
                                                <dt>Cupos</dt>
                                                <dd>{{ $cursoseminario->cupo }}</dd>
                                                <dt>Fecha de Inicio</dt>
                                                <dd>{{ $cursoseminario->fecha_inicio }}</dd>
                                                <dt>Fecha de Finalización</dt>
                                                <dd>{{ $cursoseminario->fecha_fin }}</dd>
                                                <dt>Duración (horas)</dt>
                                                <dd>{{ $cursoseminario->duracion }}</dd>
                                                <dt>Hora ingreso</dt>
                                                <dd>{{ $cursoseminario->hora_ingreso }}</dd>
                                                <dt>Hora salida</dt>
                                                <dd>{{ $cursoseminario->hora_salida }}</dd>
                                                <dt>Lugar</dt>
                                                <dd>{{ $cursoseminario->lugar }}</dd>
                                                <dt>Ubicación</dt>
                                                <dd>{{ $cursoseminario->province->name }} {{ isset($cursoseminario->city->name) ? " / ".$cursoseminario->city->name : "" }} </dd>
                                                <dt>Teléfonos</dt>
                                                @if(isset($cursoseminario->telefono))
                                                    <dd>{{ $cursoseminario->telefono }}</dd>
                                                @else
                                                    <dd></dd>
                                                @endif
                                                <dt>Celular</dt>
                                                @if(isset($cursoseminario->celular))
                                                    <dd>{{ $cursoseminario->celular }}</dd>
                                                @else
                                                    <dd></dd>
                                                @endif
                                                <dt>Email</dt>
                                                @if(isset($cursoseminario->email))
                                                    <dd>{{ $cursoseminario->email }}</dd>
                                                @else
                                                    <dd></dd>
                                                @endif
                                                <dt>Web</dt>
                                                @if(isset($cursoseminario->web))
                                                    <dd>{{ $cursoseminario->web }}</dd>
                                                @else
                                                    <dd></dd>
                                                @endif
                                                <dt>Redes Sociales</dt>
                                                <dd>
                                                    @if(isset($cursoseminario->facebook))
                                                        <a href="{{ $cursoseminario->facebook }}"
                                                           class="btn btn-social-icon btn-facebook"><i
                                                                    class="fa fa-facebook"></i></a>
                                                    @endif
                                                    @if(isset($cursoseminario->twitter))
                                                        &nbsp
                                                        <a href="{{ $cursoseminario->twitter }}"
                                                           class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                                    @endif
                                                    @if(isset($cursoseminario->linkedin))
                                                        &nbsp
                                                        <a href="{{ $cursoseminario->linkedin }}"
                                                           class="btn btn-social-icon btn-linkedin"><i
                                                                    class="fa fa-linkedin"></i></a>
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
                                                        <button type="submit" class="btn btn-primary">Enviar</button>
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
                                            <dt>Objetivo</dt>
                                            @if(isset($cursoseminario->objetivo))
                                                <dd>{{ $cursoseminario->objetivo }}</dd>
                                            @else
                                                <dd></dd>
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
                                            @if(isset($cursoseminario->temario))
                                                <dd>{!! $cursoseminario->temario !!}</dd>
                                            @else
                                                <dd></dd>
                                            @endif
                                        </dl>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_4">
                                    <dl class="dl-horizontal">
                                        <dt>Instructores</dt>
                                        @if(isset($cursoseminario->instructores_detalle))
                                            <dd>{!! $cursoseminario->instructores_detalle !!}</dd>
                                        @else
                                            <dd></dd>
                                        @endif
                                        <hr>
                                    </dl>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_5">
                                    <dt>Incluye</dt>
                                    @if(isset($cursoseminario->incluye))
                                        <dd>{{ $cursoseminario->incluye }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_6">
                                    @if(isset($cursoseminario->mapa_url) && !empty($cursoseminario->mapa_url))
                                        {!! $cursoseminario->mapa_url !!}
                                    @else
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7911908314577!2d-78.41692168566942!3d-0.21129163545664972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d5913090093377%3A0x6df39dd58f481a13!2sOV+Constructora!5e0!3m2!1ses!2sec!4v1502305609923" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    @endif
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_7">
                                    <dt>Documentos</dt>
                                    @if(isset($cursoseminario->documento_pdf1))
                                        <dd>{{ $cursoseminario->documento_pdf1 }}</dd>
                                    @endif
                                    @if(isset($cursoseminario->documento_pdf2))
                                        <dd>{{ $cursoseminario->documento_pdf2 }}</dd>
                                    @endif
                                    @if(isset($cursoseminario->documento_pdf3))
                                        <dd>{{ $cursoseminario->documento_pdf3 }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_8">
                                    <dt>Tipo</dt>
                                    @if(isset($cursoseminario->tipo))
                                        <dd>{{ $cursoseminario->tipo }}</dd>
                                    @endif
                                    @if(isset($cursoseminario->documento_pdf2))
                                        <dd>{{ $cursoseminario->documento_pdf2 }}</dd>
                                    @endif
                                    @if(isset($cursoseminario->documento_pdf3))
                                        <dd>{{ $cursoseminario->documento_pdf3 }}</dd>
                                    @else
                                        <dd></dd>
                                    @endif
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