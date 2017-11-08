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
                                @if(!empty($pregrade->banner_inst_picture_1))
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                @endif
                                @if(!empty($pregrade->banner_inst_picture_2))
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                @endif
                                @if(!empty($pregrade->banner_inst_picture_3))
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                @endif
                                @if(!empty($pregrade->banner_inst_picture_4))
                                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                @endif
                                @if(!empty($pregrade->banner_inst_picture_5))
                                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                @endif

                                {{-- Put default pics on empty carousel --}}
                                @if(empty($pregrade->banner_inst_picture_1)
                                && empty($pregrade->banner_inst_picture_2)
                                && empty($pregrade->banner_inst_picture_3)
                                && empty($pregrade->banner_inst_picture_4)
                                && empty($pregrade->banner_inst_picture_5))
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                @endif

                            </ol>

                            <!-- Wrapper for slides -->
                            <div style="max-height: 325px" class="carousel-inner">
                                @if(!empty($pregrade->banner_inst_picture_1))
                                    <div class="item active">
                                        <img style="width: 100%;" src="{{ asset($pregrade->banner_inst_picture_1) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($pregrade->banner_inst_picture_2))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($pregrade->banner_inst_picture_2) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($pregrade->banner_inst_picture_3))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($pregrade->banner_inst_picture_3) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($pregrade->banner_inst_picture_4))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($pregrade->banner_inst_picture_4) }}"
                                             alt="">
                                    </div>
                                @endif
                                @if(!empty($pregrade->banner_inst_picture_5))
                                    <div class="item">
                                        <img style="width: 100%;" src="{{ asset($pregrade->banner_inst_picture_5) }}"
                                             alt="">
                                    </div>
                                @endif
                                {{-- Put default pics on empty carousel --}}
                                @if(empty($pregrade->banner_inst_picture_1)
                                && empty($pregrade->banner_inst_picture_2)
                                && empty($pregrade->banner_inst_picture_3)
                                && empty($pregrade->banner_inst_picture_4)
                                && empty($pregrade->banner_inst_picture_5))
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
            <h1 style="background-color: #1B2D4D; color: white;">{{ $pregrade->nombre }}</h1>
            <div class="row">
                <div class="col-md-12">
                    <div style="font-size: 20px" class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Información</a></li>
                            <li><a href="#tab_2" data-toggle="tab">Descripción</a></li>
                            <li><a href="#tab_3" data-toggle="tab">Carreras</a></li>
                            <li><a href="#tab_4" data-toggle="tab">Instalaciones</a></li>
                            <li><a href="#tab_5" data-toggle="tab">Certificaciones y Logros</a></li>
                            <li><a href="#tab_6" data-toggle="tab">Galería de Imágenes</a></li>
                            <li><a href="#tab_7" data-toggle="tab">Mapa de Ubicación</a></li>
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
                                    @if(!empty($pregrade->tipo))
                                        <dd>{{ $pregrade->tipo }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Trayectoria</dt>
                                    <dd>{{ $pregrade->trayectoria }}</dd>
                                    <dt>Rector/Director</dt>
                                    <dd>{{ $pregrade->nombre_autoridad }}</dd>
                                    <dt>Ubicación</dt>
                                    <dd>{{ $pregrade->province->name }} {{ isset($pregrade->city->name) ? " / ".$pregrade->city->name : "" }} </dd>
                                    <dt>Dirección</dt>
                                    <dd>{{ $pregrade->direccion }}</dd>
                                    <dt>Sostenimiento</dt>
                                    @if($pregrade->fiscal)
                                        <dd>Pública</dd>
                                    @elseif($pregrade->fiscomisional)
                                        <dd>Fiscomisional</dd>
                                    @else
                                        <dd>Privada</dd>
                                    @endif
                                    <dt>Modalidades</dt>
                                    @if($pregrade->presencial)
                                        <dd>Presencial</dd>
                                    @endif
                                    @if($pregrade->semipresencial)
                                        <dd>Semipresencial</dd>
                                    @endif
                                    @if($pregrade->distancia)
                                        <dd>Distancia</dd>
                                    @endif
                                    <dt>Horarios</dt>
                                    @if($pregrade->matutino)
                                        <dd>Matutino</dd>
                                    @endif
                                    @if($pregrade->vespertino)
                                        <dd>Vespertino</dd>
                                    @endif
                                    @if($pregrade->nocturno)
                                        <dd>Nocturno</dd>
                                    @endif
                                    <dt>Teléfonos</dt>
                                    @if(!empty($pregrade->telefono))
                                        <dd>{{ $pregrade->telefono }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Celular</dt>
                                    @if(!empty($pregrade->celular))
                                        <dd>{{ $pregrade->celular }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Email</dt>
                                    @if(!empty($pregrade->email))
                                        <dd>{{ $pregrade->email }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Web</dt>
                                    @if(!empty($pregrade->web))
                                        <dd>{{ $pregrade->web }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Redes Sociales</dt>
                                    <dd>
                                        @if(!empty($pregrade->facebook))
                                            <a href="{{ $pregrade->facebook }}"
                                               class="btn btn-social-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></a>
                                        @endif
                                        @if(!empty($pregrade->twitter))
                                            &nbsp
                                            <a href="{{ $pregrade->twitter }}"
                                               class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                        @endif
                                        @if(!empty($pregrade->linkedin))
                                            &nbsp
                                                <a href="{{ $pregrade->linkedin }}"
                                                   class="btn btn-social-icon btn-linkedin"><i
                                                            class="fa fa-linkedin"></i></a>
                                        @else
                                            <dd>N/D</dd>
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
                                                    <input type="hidden" id="email" name="email" value="{{ $pregrade->email }}">
                                                    <input type="email" class="form-control" id="inputEmail3" name="inputEmail3" placeholder="Correo electrónico" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="interes" class="col-sm-3 control-label">Interés</label>

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
                                        <dt>Descripción</dt>
                                        @if(!empty($pregrade->descripcion))
                                            <dd>{{ $pregrade->descripcion }}</dd>
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
                                        <dt>Carreras</dt>
                                        @if(!empty($pregrade->carreras))
                                            <dd>{!! $pregrade->carreras !!}</dd>
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
                                    <dt>Área Total</dt>
                                    @if(!empty($pregrade->max_estudiantes_x_clase))
                                        <dd>{{ $pregrade->max_estudiantes_x_clase }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Área Canchas Deportivas</dt>
                                    @if(!empty($pregrade->area_deportiva))
                                        <dd>{{ $pregrade->area_deportiva }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Área Espacios Verdes</dt>
                                    @if(!empty($pregrade->area_espacios_verdes))
                                        <dd>{{ $pregrade->area_espacios_verdes }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Área Piscinas</dt>
                                    @if(!empty($pregrade->area_piscina))
                                        <dd>{{ $pregrade->area_piscina }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Seguridad Privada</dt>
                                    @if($pregrade->seguridad_privada)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Wifi en aulas</dt>
                                    @if($pregrade->wifi_interior)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Wifi exterior</dt>
                                    @if(!empty($pregrade->wifi_otros))
                                        <dd>{{ $pregrade->wifi_otros }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Capacidad en Restaurantes</dt>
                                    @if(!empty($pregrade->capacidad_restaurantes))
                                        <dd>{{ $pregrade->capacidad_restaurantes }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Canchas Indoor Fútbol</dt>
                                    @if(!empty($pregrade->canchas_indoor))
                                        <dd>{{ $pregrade->canchas_indoor }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Canchas Fútbol</dt>
                                    @if(!empty($pregrade->canchas_futbol))
                                        <dd>{{ $pregrade->canchas_futbol }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Canchas Basket</dt>
                                    @if(!empty($pregrade->canchas_basket))
                                        <dd>{{ $pregrade->canchas_basket }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Canchas Tenis</dt>
                                    @if(!empty($pregrade->canchas_tenis))
                                        <dd>{{ $pregrade->canchas_tenis }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Mesas de Tenis de Mesa</dt>
                                    @if(!empty($pregrade->mesas_tenis))
                                        <dd>{{ $pregrade->mesas_tenis }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <dt>Pista de Atletismo</dt>
                                    @if($pregrade->pista_atletica)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Teatro</dt>
                                    @if($pregrade->teatro)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Gimnasio</dt>
                                    @if($pregrade->gimnasio)
                                        <dd>SI</dd>
                                    @else
                                        <dd>NO</dd>
                                    @endif
                                    <dt>Otros</dt>
                                    @if(!empty($pregrade->otros))
                                        <dd>{{ $pregrade->otros }}</dd>
                                    @else
                                        <dd>N/D</dd>
                                    @endif
                                    <hr>
                                </dl>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_5">
                                <dt></dt>
                                @if(!empty($pregrade->certificaciones_logros))
                                    <dd>{{ $pregrade->certificaciones_logros }}</dd>
                                @else
                                    <dd>N/D</dd>
                                @endif
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_6">
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
                            <div class="tab-pane" id="tab_7">
                                @if(isset($pregrade->mapa_url) && !empty($pregrade->mapa_url))
                                    {!! $pregrade->mapa_url !!}
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