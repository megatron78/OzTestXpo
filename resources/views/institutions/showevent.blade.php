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
                        {{--<div id="carousel-example-generic" class="carousel slide">
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

                                --}}{{-- Put default pics on empty carousel --}}{{--
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
                                --}}{{-- Put default pics on empty carousel --}}{{--
                                @if(empty($event->banner_inst_picture_1)
                                && empty($event->banner_inst_picture_2)
                                && empty($event->banner_inst_picture_3)
                                && empty($event->banner_inst_picture_4)
                                && empty($event->banner_inst_picture_5))
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
                        </div>--}}
                    </div>
                </div> <!--/ .carousel -->
            </div> <!-- banner -->
            <h1 style="background-color: #1B2D4D; color: white;">{{ $event->nombre }}</h1>
            <div class="row">
                <div class="col-md-12">
                    <div style="font-size: 20px" class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Información</a></li>
                            <li><a href="#tab_5" data-toggle="tab">Galería de Imágenes</a></li>
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
                                    <dt>Información</dt>
                                    <dd>{{ $event->informacion }}</dd>
                                    <dt>Costo</dt>
                                    <dd>{{ $event->costo }}</dd>
                                    <dt>Fecha Evento</dt>
                                    <dd>{{ $event->fecha_evento }}</dd>
                                    <dt>Hora Evento</dt>
                                    <dd>{{ $event->hora_evento }}</dd>
                                    <dt>Dirección</dt>
                                    <dd>{{ $event->direccion }}</dd>
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
                                        <div class="modal-header bg-gray-light">
                                            <h4 class="modal-title" id="myModalLabel">
                                                <img style="padding-left: 1%; height: 70px; width: auto;"
                                                     src="{{ asset('/img/expoeducar_logo115x97.png') }}" alt="ExpoEducar">
                                                <strong>Proporciona tus datos para obtener más información</strong></h4>
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
                                                    <input type="hidden" id="email" name="email" value="{{ $event->email }}">
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
                                <ul style="padding:0 0 0 0; margin:0 0 0 0;" class="row">
                                    <li style="list-style: none; margin-bottom:20px;" class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                        @if(!empty($event->evento_bg_picture))
                                            <img style="cursor: pointer;" class="img-responsive" src="{{ asset($event->evento_bg_picture) }}">
                                        @else
                                            <img style="cursor: pointer;" class="img-responsive" src="{{ asset('/img/default_image.png') }}">
                                        @endif

                                    </li>
                                </ul>
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