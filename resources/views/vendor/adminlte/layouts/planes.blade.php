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

    <div class="container-fluid">
        <br>
        <div style="display: block; position: relative; top: -100px;" id="quienes_somos"></div>
        <div id="quienes_somos2" class="row col-lg-12">
            <img src='{{ asset('/img/quienes_somos3.png') }}' alt="Quiénes somos" height="100%" width="100%">
        </div>
        <div style="display: block; position: relative; top: 330px;" id="beneficios_instituciones"></div>
        <div id="beneficios_instituciones2" class="row col-lg-12">
            <img src='{{ asset('/img/beneficios_instituciones4.png') }}' alt="Beneficios Instituciones" height="100%" width="100%">
        </div>
        <div style="display: block; position: relative; top: 660px;" id="beneficios_estudiantes"></div>
        <div id="beneficios_estudiantes2" class="row col-lg-12">
            <img src='{{ asset('/img/beneficios_estudiantes4.png') }}' alt="Beneficios Estudiantes" height="100%" width="100%">
        </div>
        {{--<div style="display: block; position: relative; top: 990px;" id="planes_instituciones"></div>--}}
        <div id="planes_instituciones" class="row col-lg-12">
            <br>
            <img src='{{ asset('/img/planes3.png') }}' alt="Planes" height="100%" width="100%">
        </div>
    </div>
    <div style=" width: 100%" class="container content">
            {{--<div id="faq">
                <img src='{{ asset('/img/preguntas_frecuentes.png') }}' alt="Quiénes somos" height="100%" width="91%">
            </div>--}}
            <div id="contacto">
                <div style="width: 100%; padding-right: 9%" class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-gray-light">
                            <h4 class="modal-title" id="myModalLabel">
                                <img style="padding-left: 1%; height: 70px; width: auto;"
                                     src="{{ asset('/img/expoeducar_logo115x97.png') }}" alt="ExpoEducar">
                                <strong>Proporciona tus datos para contactarnos contigo</strong></h4>
                        </div>
                        <div class="modal-body">
                            <!-- form start -->
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
                                        <input type="hidden" id="email" name="email" value="info@expoeducar.com.ec">
                                        <input type="hidden" id="tipo" name="tipo">
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
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
</script>
</body>
</html>
