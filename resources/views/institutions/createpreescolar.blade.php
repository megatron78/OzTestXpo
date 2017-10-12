@extends('adminlte::layouts.app')

@section('contentheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_description')
    {{ trans('adminlte_lang::message.home_description') }}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Crear Preescolar</h3>
                        @include('vendor.adminlte.layouts.partials.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif
                    </div>
                    {!! Form::open(['files' => true, 'method' => 'POST', 'route' => 'preescolar.store']) !!}
                    <div class="box-body with-border">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_11" data-toggle="tab">Información</a></li>
                                <li><a href="#tab_22" data-toggle="tab">Descripción</a></li>
                                <li><a href="#tab_33" data-toggle="tab">Detalles</a></li>
                                <li><a href="#tab_44" data-toggle="tab">Galería de Imágenes</a></li>
                                @if(auth()->user()->isAdmin())
                                    <li><a href="#tab_55" data-toggle="tab">Administración</a></li>
                                @endif
                            </ul>
                            <div style="padding: 0px" class="tab-content">
                                <div class="tab-pane active" id="tab_11">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('nombre', 'Nombre') }}
                                            {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('nombre_corto', 'Nombre corto') }}
                                            {{ Form::text('nombre_corto', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('plan', 'Plan') }}
                                            {{ Form::select('plan', ['3B' => 'Básico', '2P' => 'Platinum', '1G' => 'Gold'], null, ['class' => 'form-control select2']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('palabras_clave', 'Palabras Clave') }}
                                            {{ Form::text('palabras_clave', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('preescolar', 'Preescolar') }}
                                            {{ Form::hidden('preescolar',0)}}
                                            {{ Form::checkbox('preescolar') }}
                                            {{ Form::label('escuela', 'Escuela') }}
                                            {{ Form::hidden('escuela',0)}}
                                            {{ Form::checkbox('escuela') }}
                                            {{ Form::label('colegio', 'Colegio') }}
                                            {{ Form::hidden('colegio',0)}}
                                            {{ Form::checkbox('colegio') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('institution_bg_picture','Foto de fondo') }}
                                            {{ Form::file('institution_bg_picture') }}
                                            <p class="help-block">Las imágenes deben ser de tamaño 600x390 y 500K.</p>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('trayectoria', 'Trayectoria') }}
                                            {{ Form::text('trayectoria', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('nombre_autoridad', 'Nombre Autoridad') }}
                                            {{ Form::text('nombre_autoridad', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('direccion', 'Dirección') }}
                                            {{ Form::text('direccion', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('province_id', 'Provincia') }}
                                            {{ Form::select('province_id', [null=>'...'] + $provinces->pluck('name','id')->all(), null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('canton_id', 'Canton') }}
                                            {{ Form::select('canton_id', [null=>'...'], null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('parish_id', 'Parroquia') }}
                                            {{ Form::select('parish_id', [null=>'...'], null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('city_id', 'Ciudad') }}
                                            {{ Form::select('city_id', [null=>'...'], null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('sector_id', 'Sector') }}
                                            {{ Form::select('sector_id', [null=>'...'], null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_22">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('laico', 'Laico') }}
                                            {{ Form::hidden('laico',0)}}
                                            {{ Form::checkbox('laico') }}
                                            {{ Form::label('religioso', 'Religioso') }}
                                            {{ Form::hidden('religioso',0)}}
                                            {{ Form::checkbox('religioso') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('masculino', 'Masculino') }}
                                            {{ Form::hidden('masculino',0)}}
                                            {{ Form::checkbox('masculino') }}
                                            {{ Form::label('femenino', 'Femenino') }}
                                            {{ Form::hidden('femenino',0)}}
                                            {{ Form::checkbox('femenino') }}
                                            {{ Form::label('mixto', 'Mixto') }}
                                            {{ Form::hidden('mixto',0)}}
                                            {{ Form::checkbox('mixto') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('fiscal', 'Fiscal') }}
                                            {{ Form::hidden('fiscal',0)}}
                                            {{ Form::checkbox('fiscal') }}
                                            {{ Form::label('privado', 'Privado') }}
                                            {{ Form::hidden('privado',0)}}
                                            {{ Form::checkbox('privado') }}
                                            {{ Form::label('fiscomisional', 'Fiscomisional') }}
                                            {{ Form::hidden('fiscomisional',0)}}
                                            {{ Form::checkbox('fiscomisional') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('pago_promedio_escuela', 'Costo Promedio Pensión') }}
                                            {{ Form::number('pago_promedio_escuela', null, ['class' => 'form-control']) }}
                                        </div>
                                        {{--<div class="form-group">
                                            {{ Form::label('pago_promedio_colegio', 'Pago Promedio Colegio') }}
                                            {{ Form::number('pago_promedio_colegio', null, ['class' => 'form-control']) }}
                                        </div>--}}
                                        <div class="form-group">
                                            {{ Form::label('lenguajes', 'Lenguajes') }}
                                            {{ Form::text('lenguajes', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('telefono', 'Telefono') }}
                                            {{ Form::text('telefono', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('celular', 'Celular') }}
                                            {{ Form::text('celular', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('email', 'Email') }}
                                            {{ Form::text('email', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('web', 'Web') }}
                                            {{ Form::text('web', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('facebook', 'Facebook') }}
                                            {{ Form::text('facebook', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('twitter', 'Twitter') }}
                                            {{ Form::text('twitter', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('descripcion', 'Descripcion') }}
                                            {{ Form::text('descripcion', null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_33">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('edad_desde', 'Edad Desde') }}
                                            {{ Form::number('edad_desde', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('edad_hasta', 'Edad Hasta') }}
                                            {{ Form::number('edad_hasta', null, ['class' => 'form-control']) }}
                                        </div>
                                        {{--<div class="form-group">
                                            {{ Form::label('extracurriculares', 'Extracurriculares') }}
                                            {{ Form::hidden('extracurriculares',0)}}
                                            {{ Form::checkbox('extracurriculares') }}
                                        </div>--}}
                                        <div class="form-group">
                                            {{ Form::label('horario_extendido', 'Horario Extendido') }}
                                            {{ Form::hidden('horario_extendido',0)}}
                                            {{ Form::checkbox('horario_extendido') }}
                                        </div>
                                        {{--<div class="form-group">
                                            {{ Form::label('presencial', 'Presencial') }}
                                            {{ Form::hidden('presencial',0)}}
                                            {{ Form::checkbox('presencial') }}
                                            {{ Form::label('semipresencial', 'Semipresencial') }}
                                            {{ Form::hidden('semipresencial',0)}}
                                            {{ Form::checkbox('semipresencial') }}
                                            {{ Form::label('distancia', 'Distancia') }}
                                            {{ Form::hidden('distancia',0)}}
                                            {{ Form::checkbox('distancia') }}
                                        </div>--}}
                                        {{--<div class="form-group">
                                            {{ Form::label('matutino', 'Matutino') }}
                                            {{ Form::hidden('matutino',0)}}
                                            {{ Form::checkbox('matutino') }}
                                            {{ Form::label('vespertino', 'Vespertino') }}
                                            {{ Form::hidden('vespertino',0)}}
                                            {{ Form::checkbox('vespertino') }}
                                            {{ Form::label('nocturno', 'Nocturno') }}
                                            {{ Form::hidden('nocturno',0)}}
                                            {{ Form::checkbox('nocturno') }}
                                        </div>--}}
                                        <div class="form-group">
                                            {{ Form::label('entrada_matutino', 'Entrada Matutino') }}
                                            {{ Form::text('entrada_matutino', null, ['class' => 'form-control']) }}
                                        </div>
                                        {{--<div class="form-group">
                                            {{ Form::label('entrada_vespertino', 'Entrada Vespertino') }}
                                            {{ Form::text('entrada_vespertino', null, ['class' => 'form-control']) }}
                                        </div>--}}
                                        {{-- <div class="form-group">
                                             {{ Form::label('entrada_nocturno', 'Entrada Nocturno') }}
                                             {{ Form::text('entrada_nocturno', null, ['class' => 'form-control']) }}
                                         </div>--}}
                                        <div class="form-group">
                                            {{ Form::label('salida_matutino', 'Salida Matutino') }}
                                            {{ Form::text('salida_matutino', null, ['class' => 'form-control']) }}
                                        </div>
                                        {{--<div class="form-group">
                                            {{ Form::label('salida_vespertino', 'Salida Vespertino') }}
                                            {{ Form::text('salida_vespertino', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('salida_nocturno', 'Salida Nocturno') }}
                                            {{ Form::text('salida_nocturno', null, ['class' => 'form-control']) }}
                                        </div>--}}
                                        <div class="form-group">
                                            {{ Form::label('salida_horario_extendido', 'Salida Horario Extendido') }}
                                            {{ Form::text('salida_horario_extendido', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('alimentacion', 'Alimentación') }}
                                            {{ Form::select('alimentacion', ['S' => 'Si', 'N' => 'No', 'O' => 'Opcional'], 'N') }}
                                        </div>
                                        {{--<div class="form-group">
                                            {{ Form::label('bachillerato_internacional', 'Bachillerato Internacional') }}
                                            {{ Form::hidden('bachillerato_internacional',0)}}
                                            {{ Form::checkbox('bachillerato_internacional') }}
                                        </div>--}}
                                        {{--<div class="form-group">
                                            {{ Form::label('actividades_extracurriculares', 'Actividades Extracurriculares') }}
                                            {{ Form::textArea('actividades_extracurriculares', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('porcentaje_profesores_nativos', 'Porcentaje Profesores Nativos') }}
                                            {{ Form::number('porcentaje_profesores_nativos', null, ['class' => 'form-control']) }}
                                        </div>--}}
                                        <div class="form-group">
                                            {{ Form::label('total_estudiantes', 'Total Estudiantes') }}
                                            {{ Form::number('total_estudiantes', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('max_estudiantes_x_clase', 'Máximo Estudiantes por Clase') }}
                                            {{ Form::number('max_estudiantes_x_clase', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('area_total', 'Área Total') }}
                                            {{ Form::number('area_total', 0, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('area_deportiva', 'Área Canchas Deportivas') }}
                                            {{ Form::number('area_deportiva', 0, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('area_espacios_verdes', 'Área Espacios Verdes') }}
                                            {{ Form::number('area_espacios_verdes', 0, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('area_piscina', 'Área Piscina') }}
                                            {{ Form::number('area_piscina', 0, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('seguridad_privada', 'Seguridad Privada') }}
                                            {{ Form::hidden('seguridad_privada',0)}}
                                            {{ Form::checkbox('seguridad_privada') }}
                                            {{ Form::label('wifi_interior', 'Wifi Interior') }}
                                            {{ Form::hidden('wifi_interior',0)}}
                                            {{ Form::checkbox('wifi_interior') }}
                                            {{ Form::label('wifi_exterior', 'Wifi Exterior') }}
                                            {{ Form::hidden('wifi_exterior',0)}}
                                            {{ Form::checkbox('wifi_exterior') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('wifi_otros', 'Wifi Otros') }}
                                            {{ Form::text('wifi_otros', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('camara_ip_entrada_salida', 'Cámara IP Entrada/Salida') }}
                                            {{ Form::hidden('camara_ip_entrada_salida',0)}}
                                            {{ Form::checkbox('camara_ip_entrada_salida') }}
                                            {{ Form::label('camara_ip_aulas_espacios', 'Cámara IP Otros') }}
                                            {{ Form::hidden('camara_ip_aulas_espacios',0)}}
                                            {{ Form::checkbox('camara_ip_aulas_espacios') }}
                                        </div>
                                        {{--<div class="form-group">
                                            {{ Form::label('capacidad_restaurantes', 'Capacidad Restaurantes') }}
                                            {{ Form::number('capacidad_restaurantes', 0, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('canchas_indoor', 'Canchas de Indoor') }}
                                            {{ Form::number('canchas_indoor', 0, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('canchas_futbol', 'Canchas de Fútbol') }}
                                            {{ Form::number('canchas_futbol', 0, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('canchas_basket', 'Canchas de Básquet') }}
                                            {{ Form::number('canchas_basket', 0, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('canchas_tenis', 'Canchas de Tenis') }}
                                            <br>
                                            {{ Form::number('canchas_tenis', 0, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('mesas_tenis', 'Mesas de Tenis') }}
                                            {{ Form::number('mesas_tenis', 0, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('pista_atletica', 'Pista Atlética') }}
                                            {{ Form::hidden('pista_atletica',0)}}
                                            {{ Form::checkbox('pista_atletica') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('computadoras_para_alumnos', 'Computadoras para Alumnos') }}
                                            <br>
                                            {{ Form::number('computadoras_para_alumnos', 0, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('teatro', 'Teatro') }}
                                            {{ Form::hidden('teatro',0)}}
                                            {{ Form::checkbox('teatro') }}
                                            {{ Form::label('gimnasio', 'Gimnasio') }}
                                            {{ Form::hidden('gimnasio',0)}}
                                            {{ Form::checkbox('gimnasio') }}
                                        </div>--}}
                                        <div class="form-group">
                                            {{ Form::label('otros', 'Otras Áreas') }}
                                            {{ Form::textArea('otros', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('certificaciones_logros', 'Certificaciones y Logros') }}
                                            {{ Form::text('certificaciones_logros', null, ['class' => 'form-control']) }}
                                        </div>
                                        {{--<div class="form-group">
                                            {{ Form::label('regimen', 'Régimen') }}
                                            {{ Form::select('regimen', ['Costa' => 'Costa', 'Sierra' => 'Sierra', 'Costa y Sierra' => 'Costa y Sierra'], 'Sierra', ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('jurisdiccion', 'Jurisdicción') }}
                                            {{ Form::text('jurisdiccion', null, ['class' => 'form-control']) }}
                                        </div>--}}
                                        <div class="form-group">
                                            {{ Form::label('mapa_url', 'Mapa URL') }}
                                            {{ Form::text('mapa_url', null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_44">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('Fotos para el Banner') }}
                                            {{ Form::file('banner_inst_picture_1') }}
                                            {{ Form::file('banner_inst_picture_2') }}
                                            {{ Form::file('banner_inst_picture_3') }}
                                            <p class="help-block">Las imágenes deben ser de tamaño 1141x351 y 500K.</p>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Fotos para la Galería') }}
                                            {{ Form::file('institution_picture_1') }}
                                            {{ Form::file('institution_picture_2') }}
                                            {{ Form::file('institution_picture_3') }}
                                            {{ Form::file('institution_picture_4') }}
                                            {{ Form::file('institution_picture_5') }}
                                            {{ Form::file('institution_picture_6') }}
                                            <p class="help-block">Las imágenes deben ser de tamaño 600x390 y 500K.</p>
                                        </div>
                                    </div>
                                </div>
                                @if(auth()->user()->isAdmin())
                                    <div class="tab-pane" id="tab_55">
                                        <div class="col-md-6 col-md-offset-0">
                                            @if(auth()->user()->isAdmin())
                                                <div class="form-group">
                                                    {{ Form::label('activo', 'Activo') }}
                                                    {{ Form::hidden('activo',0)}}
                                                    {{ Form::checkbox('activo') }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('ruc_invoice', 'Ruc para Factura') }}
                                                    {{ Form::text('ruc_invoice', null, ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('razon_social_invoice', 'Razón Social para Factura') }}
                                                    {{ Form::text('razon_social_invoice', null, ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('email_invoice', 'Mail para Factura') }}
                                                    <br>
                                                    {{ Form::text('email_invoice', null, ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('telefono_invoice', 'Teléfono para Factura') }}
                                                    {{ Form::text('telefono_invoice', null, ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('direccion_invoice', 'Dirección para Factura') }}
                                                    {{ Form::text('direccion_invoice', null, ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('plan_desde', 'Plan Desde') }}
                                                    {{ Form::date('plan_desde', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('plan_hasta', 'Plan Hasta') }}
                                                    {{ Form::date('plan_hasta', null, ['class' => 'form-control']) }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        {{ trans('adminlte_lang::message.logged') }}. ExpoEducar 2017.
                    </div>
                    <!-- /.box-body -->

                    {!! Form::submit('Crear Registro', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
@endsection
