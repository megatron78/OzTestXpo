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
                        <h3 class="box-title">{{$institution->nombre}}</h3>
                        <br>
                        <br>
                        @include('vendor.adminlte.layouts.partials.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif

                        {!! Form::model($institution, array('files' => true, 'route' => array('preescolar.update', $institution->id))) !!}
                            <div class="form-group">
                                {{ Form::label('nombre', 'Nombre') }}
                                {{ Form::text('nombre') }}
                            <div>
                            <br>
                            {{ Form::label('nombre_corto', 'Nombre corto') }}
                            <br>
                            {{ Form::text('nombre_corto') }}
                            <br>
                            {{ Form::label('plan', 'Plan') }}
                            <br>
                            {{ Form::select('plan', ['3B' => 'Básico', '2P' => 'Platinum', '3G' => 'Gold'], $institution->plan) }}
                            <br>
                            {{ Form::label('palabras_clave', 'Palabras Clave') }}
                            <br>
                            {{ Form::text('palabras_clave') }}
                            <br>
                            {{ Form::label('preescolar', 'Preescolar') }}
                            {{ Form::hidden('preescolar',0)}}
                            {{ Form::checkbox('preescolar') }}
                            {{ Form::label('escuela', 'Escuela') }}
                        {{ Form::hidden('escuela',0)}}
                            {{ Form::checkbox('escuela') }}
                            {{ Form::label('colegio', 'Colegio') }}
                        {{ Form::hidden('colegio',0)}}
                            {{ Form::checkbox('colegio') }}
                            <br>
                            {{ Form::label('institution_bg_picture','Foto de fondo') }}
                            {{ Form::file('institution_bg_picture') }}
                            <br>
                            {{ Form::label('trayectoria', 'Trayectoria') }}
                            <br>
                            {{ Form::text('trayectoria') }}
                            <br>
                            {{ Form::label('nombre_autoridad', 'Nombre Autoridad') }}
                            <br>
                            {{ Form::text('nombre_autoridad') }}
                            <br>
                            {{ Form::label('direccion', 'Dirección') }}
                            <br>

                            {{ Form::label('province_id', 'Provincia') }}
                            {{ Form::select('province_id', $provinces->pluck('name','id')->all(), $institution->province_id, ['class' => 'form-control']) }}
                            <br>
                            {{ Form::label('canton_id', 'Canton') }}
                            {{ Form::select('canton_id', $cantons->pluck('name','id')->all(), $institution->canton_id, ['class' => 'form-control']) }}
                            <br>
                            {{ Form::label('parish_id', 'Parroquia') }}
                            {{ Form::select('parish_id', $parishes->pluck('name','id')->all(), $institution->parish_id, ['class' => 'form-control']) }}
                            <br>
                            {{ Form::label('city_id', 'Ciudad') }}
                            {{ Form::select('city_id', $cities->pluck('name','id')->all(), $institution->city_id, ['class' => 'form-control']) }}
                            <br>
                            {{ Form::label('sector_id', 'Sector') }}
                            {{ Form::select('sector_id', $sectors->pluck('nombre','id')->all(), $institution->sector_id, ['class' => 'form-control']) }}
                            <br>

                            {{ Form::text('direccion') }}
                            <br>
                            {{ Form::label('laico', 'Laico') }}
                        {{ Form::hidden('laico',0)}}
                            {{ Form::checkbox('laico') }}
                            {{ Form::label('religioso', 'Religioso') }}
                        {{ Form::hidden('religioso',0)}}
                            {{ Form::checkbox('religioso') }}
                            <br>
                            {{ Form::label('masculino', 'Masculino') }}
                        {{ Form::hidden('masculino',0)}}
                            {{ Form::checkbox('masculino') }}
                            {{ Form::label('femenino', 'Femenino') }}
                        {{ Form::hidden('femenino',0)}}
                            {{ Form::checkbox('femenino') }}
                            {{ Form::label('mixto', 'Mixto') }}
                        {{ Form::hidden('mixto',0)}}
                            {{ Form::checkbox('mixto') }}
                            <br>
                            {{ Form::label('fiscal', 'Fiscal') }}
                        {{ Form::hidden('fiscal',0)}}
                            {{ Form::checkbox('fiscal') }}
                            {{ Form::label('privado', 'Privado') }}
                        {{ Form::hidden('privado',0)}}
                            {{ Form::checkbox('privado') }}
                            {{ Form::label('fiscomisional', 'Fiscomisional') }}
                        {{ Form::hidden('fiscomisional',0)}}
                            {{ Form::checkbox('fiscomisional') }}
                            <br>
                            {{ Form::label('pago_promedio_escuela', 'Pago Promedio Escuela') }}
                            <br>
                            {{ Form::number('pago_promedio_escuela', $institution->pago_promedio_escuela) }}
                            <br>
                            {{ Form::label('pago_promedio_colegio', 'Pago Promedio Colegio') }}
                            <br>
                            {{ Form::number('pago_promedio_colegio', $institution->pago_promedio_colegio) }}
                            <br>
                            {{ Form::label('lenguajes', 'Lenguajes') }}
                            <br>
                            {{ Form::text('lenguajes') }}
                            <br>
                            {{ Form::label('telefono', 'Telefono') }}
                            <br>
                            {{ Form::text('telefono') }}
                            <br>
                            {{ Form::label('celular', 'Celular') }}
                            <br>
                            {{ Form::text('celular') }}
                            <br>
                            {{ Form::label('email', 'Email') }}
                            <br>
                            {{ Form::text('email') }}
                            <br>
                            {{ Form::label('web', 'Web') }}
                            <br>
                            {{ Form::text('web') }}
                            <br>
                            {{ Form::label('facebook', 'Facebook') }}
                            <br>
                            {{ Form::text('facebook') }}
                            <br>
                            {{ Form::label('twitter', 'Twitter') }}
                            <br>
                            {{ Form::text('twitter') }}

                            <br>
                            {{ Form::label('descripcion', 'Descripcion') }}
                            <br>
                            {{ Form::text('descripcion') }}
                            <br>
                            {{ Form::label('edad_desde', 'Edad Desde') }}
                            <br>
                            {{ Form::number('edad_desde', $institution->edad_desde) }}
                            <br>
                            {{ Form::label('edad_hasta', 'Edad Hasta') }}
                            <br>
                            {{ Form::number('edad_hasta', $institution->edad_hasta) }}
                            <br>

                            {{ Form::label('extracurriculares', 'Extracurriculares') }}
                        {{ Form::hidden('extracurriculares',0)}}
                            {{ Form::checkbox('extracurriculares') }}
                            <br>
                            {{ Form::label('horario_extendido', 'Horario Extendido') }}
                        {{ Form::hidden('horario_extendido',0)}}
                            {{ Form::checkbox('horario_extendido') }}
                            <br>
                            {{ Form::label('presencial', 'Presencial') }}
                        {{ Form::hidden('presencial',0)}}
                            {{ Form::checkbox('presencial') }}
                            {{ Form::label('semipresencial', 'Semipresencial') }}
                        {{ Form::hidden('semipresencial',0)}}
                            {{ Form::checkbox('semipresencial') }}
                            {{ Form::label('distancia', 'Distancia') }}
                        {{ Form::hidden('distancia',0)}}
                            {{ Form::checkbox('distancia') }}
                            <br>
                            {{ Form::label('matutino', 'Matutino') }}
                        {{ Form::hidden('matutino',0)}}
                            {{ Form::checkbox('matutino') }}
                            {{ Form::label('vespertino', 'Vespertino') }}
                        {{ Form::hidden('vespertino',0)}}
                            {{ Form::checkbox('vespertino') }}
                            {{ Form::label('nocturno', 'Nocturno') }}
                        {{ Form::hidden('nocturno',0)}}
                            {{ Form::checkbox('nocturno') }}
                            <br>
                            {{ Form::label('entrada_matutino', 'Entrada Matutino') }}
                            <br>
                            {{ Form::text('entrada_matutino') }}
                            <br>
                            {{ Form::label('entrada_vespertino', 'Entrada Vespertino') }}
                            <br>
                            {{ Form::text('entrada_vespertino') }}
                            <br>
                            {{ Form::label('entrada_nocturno', 'Entrada Nocturno') }}
                            <br>
                            {{ Form::text('entrada_nocturno') }}
                            <br>
                            {{ Form::label('salida_matutino', 'Salida Matutino') }}
                            <br>
                            {{ Form::text('salida_matutino') }}
                            <br>
                            {{ Form::label('salida_vespertino', 'Salida Vespertino') }}
                            <br>
                            {{ Form::text('salida_vespertino') }}
                            <br>
                            {{ Form::label('salida_nocturno', 'Salida Nocturno') }}
                            <br>
                            {{ Form::text('salida_nocturno') }}
                            <br>
                            {{ Form::label('salida_horario_extendido', 'Salida Horario Extendido') }}
                            <br>
                            {{ Form::text('salida_horario_extendido') }}
                            <br>
                            {{ Form::label('alimentacion', 'Alimentación') }}
                            <br>
                            {{ Form::select('alimentacion', ['S' => 'Si', 'N' => 'No', 'O' => 'Opcional'], $institution->alimentacion) }}
                            <br>
                            {{ Form::label('bachillerato_internacional', 'Bachillerato Internacional') }}
                        {{ Form::hidden('bachillerato_internacional',0)}}
                            {{ Form::checkbox('bachillerato_internacional') }}
                            <br>
                            {{ Form::label('actividades_extracurriculares', 'Actividades Extracurriculares') }}
                            <br>
                            {{ Form::textArea('actividades_extracurriculares') }}
                            <br>
                            {{ Form::label('porcentaje_profesores_nativos', 'Porcentaje Profesores Nativos') }}
                            <br>
                            {{ Form::number('porcentaje_profesores_nativos', $institution->porcentaje_profesores_nativos) }}
                            <br>
                            {{ Form::label('total_estudiantes', 'Total Estudiantes') }}
                            <br>
                            {{ Form::number('total_estudiantes', $institution->total_estudiantes) }}
                            <br>
                            {{ Form::label('max_estudiantes_x_clase', 'Máximo Estudiantes por Clase') }}
                            <br>
                            {{ Form::number('max_estudiantes_x_clase', $institution->max_estudiantes_x_clase) }}
                            <br>
                            {{ Form::label('area_total', 'Área Total') }}
                            <br>
                            {{ Form::number('area_total', $institution->area_total) }}
                            <br>
                            {{ Form::label('area_deportiva', 'Área Canchas Deportivas') }}
                            <br>
                            {{ Form::number('area_deportiva', $institution->area_deportiva) }}
                            <br>
                            {{ Form::label('area_espacios_verdes', 'Área Espacios Verdes') }}
                            <br>
                            {{ Form::number('area_espacios_verdes', $institution->area_espacios_verdes) }}
                            <br>
                            {{ Form::label('area_piscina', 'Área Piscina') }}
                            <br>
                            {{ Form::number('area_piscina', $institution->area_piscina) }}
                            <br>
                            {{ Form::label('seguridad_privada', 'Seguridad Privada') }}
                        {{ Form::hidden('seguridad_privada',0)}}
                            {{ Form::checkbox('seguridad_privada') }}
                            {{ Form::label('wifi_interior', 'Wifi Interior') }}
                        {{ Form::hidden('wifi_interior',0)}}
                            {{ Form::checkbox('wifi_interior') }}
                            {{ Form::label('wifi_exterior', 'Wifi Exterior') }}
                        {{ Form::hidden('wifi_exterior',0)}}
                            {{ Form::checkbox('wifi_exterior') }}
                            <br>
                            {{ Form::label('wifi_otros', 'Wifi Otros') }}
                            <br>
                            {{ Form::text('wifi_otros') }}
                            <br>
                            {{ Form::label('camara_ip_entrada_salida', 'Cámara IP Entrada/Salida') }}
                        {{ Form::hidden('camara_ip_entrada_salida',0)}}
                            {{ Form::checkbox('camara_ip_entrada_salida') }}
                            {{ Form::label('camara_ip_aulas_espacios', 'Cámara IP Otros') }}
                        {{ Form::hidden('camara_ip_aulas_espacios',0)}}
                            {{ Form::checkbox('camara_ip_aulas_espacios') }}
                            <br>
                            {{ Form::label('capacidad_restaurantes', 'Capacidad Restaurantes') }}
                            <br>
                            {{ Form::number('capacidad_restaurantes', $institution->capacidad_restaurantes) }}
                            <br>
                            {{ Form::label('canchas_indoor', 'Canchas de Indoor') }}
                            <br>
                            {{ Form::number('canchas_indoor', $institution->canchas_indoor) }}
                            <br>
                            {{ Form::label('canchas_futbol', 'Canchas de Fútbol') }}
                            <br>
                            {{ Form::number('canchas_futbol', $institution->canchas_futbol) }}
                            <br>
                            {{ Form::label('canchas_basket', 'Canchas de Básquet') }}
                            <br>
                            {{ Form::number('canchas_basket', $institution->canchas_basket) }}
                            <br>
                            {{ Form::label('canchas_tenis', 'Canchas de Tenis') }}
                            <br>
                            {{ Form::number('canchas_tenis', $institution->canchas_tenis) }}
                            <br>
                            {{ Form::label('mesas_tenis', 'Mesas de Tenis') }}
                            <br>
                            {{ Form::number('mesas_tenis', $institution->mesas_tenis) }}
                            <br>
                            {{ Form::label('pista_atletica', 'Pista Atlética') }}
                        {{ Form::hidden('pista_atletica',0)}}
                            {{ Form::checkbox('pista_atletica') }}
                            <br>
                            {{ Form::label('computadoras_para_alumnos', 'Computadoras para Alumnos') }}
                            <br>
                            {{ Form::number('computadoras_para_alumnos', $institution->computadoras_para_alumnos) }}
                            <br>
                            {{ Form::label('teatro', 'Teatro') }}
                        {{ Form::hidden('teatro',0)}}
                            {{ Form::checkbox('teatro') }}
                            {{ Form::label('gimnasio', 'Gimnasio') }}
                        {{ Form::hidden('gimnasio',0)}}
                            {{ Form::checkbox('gimnasio') }}
                            <br>
                            {{ Form::label('otros', 'Otras Áreas') }}
                            <br>
                            {{ Form::textArea('otros') }}
                            <br>
                            {{ Form::label('certificaciones_logros', 'Certificaciones y Logros') }}
                            <br>
                            {{ Form::text('certificaciones_logros') }}
                            <br>
                            {{ Form::label('regimen', 'Régimen') }}
                            <br>
                            {{ Form::select('regimen', ['Costa' => 'Costa', 'Sierra' => 'Sierra', 'Costa y Sierra' => 'Costa y Sierra'], $institution->regimen) }}
                            <br>
                            {{ Form::label('jurisdiccion', 'Jurisdicción') }}
                            <br>
                            {{ Form::text('jurisdiccion') }}
                            <br>
                            {{ Form::label('mapa_url', 'Mapa URL') }}
                            <br>
                            {{ Form::text('mapa_url') }}
                            <br>
                            {{ Form::label('ruc_invoice', 'Ruc para Factura') }}
                            <br>
                            {{ Form::text('ruc_invoice') }}
                            <br>
                            {{ Form::label('razon_social_invoice', 'Razón Social para Factura') }}
                            <br>
                            {{ Form::text('razon_social_invoice') }}
                            <br>
                            {{ Form::label('email_invoice', 'Mail para Factura') }}
                            <br>
                            {{ Form::text('email_invoice') }}
                            <br>
                            {{ Form::label('telefono_invoice', 'Teléfono para Factura') }}
                            <br>
                            {{ Form::text('telefono_invoice') }}
                            <br>
                            {{ Form::label('direccion_invoice', 'Dirección para Factura') }}
                            <br>
                            {{ Form::text('direccion_invoice') }}
                            <br>
                            {{ Form::label('plan_desde', 'Plan Desde') }}
                            <br>
                            {{ Form::date('plan_desde', \Carbon\Carbon::now()) }}
                            <br>
                            {{ Form::label('plan_hasta', 'Plan Hasta') }}
                            <br>
                            {{ Form::date('plan_hasta', \Carbon\Carbon::now()) }}
                            <br>
                            <br>
                            {{ Form::label('Fotos para el Banner') }}
                            <br>
                            {{ Form::file('banner_inst_picture_1') }}
                            {{ Form::file('banner_inst_picture_2') }}
                            {{ Form::file('banner_inst_picture_3') }}
                            <br>
                            {{ Form::label('Fotos para la Galería') }}
                            <br>
                            {{ Form::file('institution_picture_1') }}
                            {{ Form::file('institution_picture_2') }}
                            {{ Form::file('institution_picture_3') }}
                            {{ Form::file('institution_picture_4') }}
                            {{ Form::file('institution_picture_5') }}
                            {{ Form::file('institution_picture_6') }}
                            <br>
                            <br>
                            <br>
                            {!! Form::submit('Actualizar Registro', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                        {{--<div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>--}}
                    </div>
                    <div class="box-body">
                        {{ trans('adminlte_lang::message.logged') }}. ExpoEducar 2017.
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
@endsection