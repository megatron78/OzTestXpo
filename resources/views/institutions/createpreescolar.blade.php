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
                            {!! Form::submit('Crear Registro', ['class' => 'btn btn-success']) !!}
                            <br>
                            <br>
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
                                            {{ Form::label('nombre', 'Nombre de la Institución ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::text('nombre', null, ['class' => 'form-control', 'PlaceHolder' => 'Nombre de la Institución']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('nombre_corto', 'Nombre Corto  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::text('nombre_corto', null, ['class' => 'form-control', 'PlaceHolder' => 'Nombre Corto de la Institución']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('plan', 'Plan', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::select('plan', ['3B' => 'Básico', '2P' => 'Platinum', '1G' => 'Gold'], null, ['class' => 'form-control select2']) }}
                                            <u><a href="{{ url('/planes#planes_instituciones') }}" target="_blank">Revisar Planes y Tarifas</a></u>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('palabras_clave', 'Palabras Clave', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('palabras_clave', null, ['class' => 'form-control', 'PlaceHolder' => 'Máximo 4000 caracteres separados por espacio']) }}
                                        </div>
                                        <div class="form-group">
                                            {{--{{ Form::label('preescolar', 'Preescolar') }}--}}
                                            {{ Form::hidden('preescolar',1)}}
                                            {{--{{ Form::checkbox('preescolar') }}--}}
                                            {{ Form::hidden('escuela',0)}}
                                            {{ Form::hidden('colegio',0)}}
                                            {{--{{ Form::label('escuela', 'Escuela') }}
                                            {{ Form::hidden('escuela',0)}}
                                            {{ Form::checkbox('escuela') }}
                                            {{ Form::label('colegio', 'Colegio') }}
                                            {{ Form::hidden('colegio',0)}}
                                            {{ Form::checkbox('colegio') }}--}}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('institution_bg_picture','Foto de fondo', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::file('institution_bg_picture', ['onchange' => 'validateBgPicture()']) }}
                                            <p class="help-block">Las imágenes deben ser de tamaño 410x180 o múltiplo y máximo 500K, formatos: jpeg, bmp, png..</p>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('telefono', 'Teléfono de Contacto  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::text('telefono', null, ['class' => 'form-control', 'PlaceHolder' => 'Teléfono de contacto']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('celular', 'Celular', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('celular', null, ['class' => 'form-control', 'PlaceHolder' => 'Preferible WhatsApp']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('email', 'Email de Contacto  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::text('email', null, ['class' => 'form-control', 'PlaceHolder' => 'Email de contacto']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('direccion', 'Dirección  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::text('direccion', null, ['class' => 'form-control', 'PlaceHolder' => 'Dirección del Establecimiento']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('province_id', 'Provincia  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::select('province_id', [null=>'...'] + $provinces->pluck('name','id')->all(), null, ['class' => 'form-control']) }}
                                        </div>
                                        {{--<div class="form-group">
                                            {{ Form::label('canton_id', 'Canton') }}
                                            {{ Form::select('canton_id', [null=>'...'], null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('parish_id', 'Parroquia') }}
                                            {{ Form::select('parish_id', [null=>'...'], null, ['class' => 'form-control']) }}
                                        </div>--}}
                                        <div class="form-group">
                                            {{ Form::label('city_id', 'Ciudad  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            @if(!empty($cities))
                                                {{ Form::select('city_id', $cities->pluck('name','id')->all(), null, ['class' => 'form-control']) }}
                                            @else
                                                {{ Form::select('city_id', [null=>'...'], null, ['class' => 'form-control']) }}
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('sector_id', 'Sector  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            @if(!empty($sectors))
                                                {{ Form::select('sector_id', [null=>'...']+$sectors->pluck('nombre','id')->all(), null, ['class' => 'form-control']) }}
                                            @else
                                                {{ Form::select('sector_id', [null=>'...'], null, ['class' => 'form-control']) }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_22">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('laico', 'Laico', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('laico',0)}}
                                            {{ Form::checkbox('laico', 1, true, [ 'class' => 'chkclass', 'onclick' => 'SetSel(this)' ]) }}
                                            &nbsp;&nbsp;
                                            {{ Form::label('religioso', 'Religioso', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('religioso',0)}}
                                            {{ Form::checkbox('religioso', null, null, [ 'class' => 'chkclass', 'onclick' => 'SetSel(this)' ]) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('masculino', 'Masculino', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('masculino',0)}}
                                            {{ Form::checkbox('masculino', null, null, [ 'class' => 'chkclass2', 'onclick' => 'SetSel2(this)' ]) }}
                                            &nbsp;&nbsp;
                                            {{ Form::label('femenino', 'Femenino', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('femenino',0)}}
                                            {{ Form::checkbox('femenino', null, null, [ 'class' => 'chkclass2', 'onclick' => 'SetSel2(this)' ]) }}
                                            &nbsp;&nbsp;
                                            {{ Form::label('mixto', 'Mixto', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('mixto',0)}}
                                            {{ Form::checkbox('mixto', 1, true, [ 'class' => 'chkclass2', 'onclick' => 'SetSel2(this)' ]) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('fiscal', 'Fiscal', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('fiscal',0)}}
                                            {{ Form::checkbox('fiscal', null, null, [ 'class' => 'chkclass3', 'onclick' => 'SetSel3(this)' ]) }}
                                            &nbsp;&nbsp;
                                            {{ Form::label('privado', 'Privado', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('privado',0)}}
                                            {{ Form::checkbox('privado', 1, true, [ 'class' => 'chkclass3', 'onclick' => 'SetSel3(this)' ]) }}
                                            &nbsp;&nbsp;
                                            {{ Form::label('fiscomisional', 'Fiscomisional', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('fiscomisional',0)}}
                                            {{ Form::checkbox('fiscomisional', null, null, [ 'class' => 'chkclass3', 'onclick' => 'SetSel3(this)' ]) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('trayectoria', 'Trayectoria', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('trayectoria', null, ['class' => 'form-control', 'PlaceHolder' => 'Los años de experiencia como institución']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('nombre_autoridad', 'Rector o Director', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('nombre_autoridad', null, ['class' => 'form-control', 'PlaceHolder' => 'Nombre del rector, Director o Autoridad Superior']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('pago_promedio_escuela', 'Costo Promedio Pensión Preescolar', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('pago_promedio_escuela', null, ['class' => 'form-control', 'min' => '0', 'PlaceHolder' => 'En dólares y números enteros']) }}
                                        </div>
                                        {{--<div class="form-group">
                                            {{ Form::label('pago_promedio_colegio', 'Pago Promedio Colegio') }}
                                            {{ Form::number('pago_promedio_colegio', null, ['class' => 'form-control']) }}
                                        </div>--}}
                                        <div class="form-group">
                                            {{ Form::label('lenguajes', 'Idiomas de Enseñanza', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('lenguajes', null, ['class' => 'form-control', 'PlaceHolder' => 'Idiomas que se imparte en clases']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('web', 'Web', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('web', null, ['class' => 'form-control', 'PlaceHolder' => 'Página Web']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('facebook', 'Facebook', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('facebook', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('twitter', 'Twitter', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('twitter', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('descripcion', 'Descripcion', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::textarea('descripcion', null, ['class' => 'form-control', 'PlaceHolder' => 'Describa a su institución, por ejemplo sus valores, principios, etc.']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_33">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('edad_desde', 'Edad Desde en Años', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('edad_desde', null, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('edad_hasta', 'Edad Hasta en Años', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('edad_hasta', null, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('entrada_matutino', 'Hora de Ingreso Normal', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('entrada_matutino', null, ['class' => 'form-control', 'PlaceHolder' => 'Formato am / pm']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('salida_matutino', 'Hora de Salida Normal', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('salida_matutino', null, ['class' => 'form-control', 'PlaceHolder' => 'Formato am / pm']) }}
                                        </div>
                                        {{--<div class="form-group">
                                            {{ Form::label('extracurriculares', 'Extracurriculares') }}
                                            {{ Form::hidden('extracurriculares',0)}}
                                            {{ Form::checkbox('extracurriculares') }}
                                        </div>--}}
                                        <div class="form-group">
                                            {{ Form::label('horario_extendido', 'Horario Extendido', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('horario_extendido',0)}}
                                            {{ Form::checkbox('horario_extendido') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('salida_horario_extendido', 'Hora de Salida Extendido', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('salida_horario_extendido', null, ['class' => 'form-control', 'PlaceHolder' => 'Formato am / pm']) }}
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
                                        {{--<div class="form-group">
                                            {{ Form::label('entrada_vespertino', 'Entrada Vespertino') }}
                                            {{ Form::text('entrada_vespertino', null, ['class' => 'form-control']) }}
                                        </div>--}}
                                        {{-- <div class="form-group">
                                             {{ Form::label('entrada_nocturno', 'Entrada Nocturno') }}
                                             {{ Form::text('entrada_nocturno', null, ['class' => 'form-control']) }}
                                         </div>--}}
                                        {{--<div class="form-group">
                                            {{ Form::label('salida_vespertino', 'Salida Vespertino') }}
                                            {{ Form::text('salida_vespertino', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('salida_nocturno', 'Salida Nocturno') }}
                                            {{ Form::text('salida_nocturno', null, ['class' => 'form-control']) }}
                                        </div>--}}
                                        <div class="form-group">
                                            {{ Form::label('alimentacion', 'Alimentación', [ 'class' => 'text text-bold' ]) }}
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
                                            {{ Form::label('porcentaje_profesores_nativos', 'Porcentaje Profesores Nativos para Enseñanza de Lengua Extranjera') }}
                                            {{ Form::number('porcentaje_profesores_nativos', null, ['class' => 'form-control']) }}
                                        </div>--}}
                                        <div class="form-group">
                                            {{ Form::label('total_estudiantes', 'Total Estudiantes', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('total_estudiantes', null, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('max_estudiantes_x_clase', 'Máximo Estudiantes por Clase', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('max_estudiantes_x_clase', null, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('area_total', 'Área Total en m2', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('area_total', 0, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('area_deportiva', 'Área Canchas Deportivas en m2', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('area_deportiva', 0, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('area_espacios_verdes', 'Área Espacios Verdes en m2', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('area_espacios_verdes', 0, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('area_piscina', 'Área Piscinas en m2', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('area_piscina', 0, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('seguridad_privada', 'Seguridad Privada', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('seguridad_privada',0)}}
                                            {{ Form::checkbox('seguridad_privada') }}
                                            <br>
                                            {{ Form::label('wifi_interior', 'Wifi en Aulas (si/no)', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('wifi_interior',0)}}
                                            {{ Form::checkbox('wifi_interior') }}
                                            {{--{{ Form::label('wifi_exterior', 'Wifi Exterior') }}--}}
                                            {{ Form::hidden('wifi_exterior',0)}}
                                            {{--{{ Form::checkbox('wifi_exterior') }}--}}
                                            {{--<br>
                                            {{ Form::label('wifi_otros', 'Wifi Otros', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('wifi_otros', null, ['class' => 'form-control']) }}--}}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('camara_ip_entrada_salida', 'Cámara IP Entrada/Salida', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('camara_ip_entrada_salida',0)}}
                                            {{ Form::checkbox('camara_ip_entrada_salida') }}
                                            <br>
                                            {{ Form::label('camara_ip_aulas_espacios', 'Cámaras IP en Aulas', [ 'class' => 'text text-bold' ]) }}
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
                                            {{ Form::label('otros', 'Otras Áreas en m2', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::textArea('otros', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('certificaciones_logros', 'Certificaciones y Logros', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::textArea('certificaciones_logros', null, ['class' => 'form-control']) }}
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
                                            {{ Form::label('mapa_url', 'Mapa URL', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('mapa_url', null, ['class' => 'form-control', 'PlaceHolder' => 'Pegue aquí el código del mapa compartido de google map']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_44">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('Fotos para el Banner', null, [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::file('banner_inst_picture_1', ['onchange' => 'validateBannerFiles()']) }}
                                            {{ Form::file('banner_inst_picture_2', ['onchange' => 'validateBannerFiles()']) }}
                                            {{ Form::file('banner_inst_picture_3', ['onchange' => 'validateBannerFiles()']) }}
                                            <p class="help-block">Las imágenes deben ser de tamaño 1141x351 y máximo 500K.</p>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Fotos para la Galería', null, [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::file('institution_picture_1', ['onchange' => 'validateGalleryFiles()']) }}
                                            {{ Form::file('institution_picture_2', ['onchange' => 'validateGalleryFiles()']) }}
                                            {{ Form::file('institution_picture_3', ['onchange' => 'validateGalleryFiles()']) }}
                                            {{ Form::file('institution_picture_4', ['onchange' => 'validateGalleryFiles()']) }}
                                            {{ Form::file('institution_picture_5', ['onchange' => 'validateGalleryFiles()']) }}
                                            {{ Form::file('institution_picture_6', ['onchange' => 'validateGalleryFiles()']) }}
                                            <p class="help-block">Las imágenes deben ser de tamaño 410x180 o múltiplo y máximo 500K, formatos: jpeg, bmp, png..</p>
                                        </div>
                                    </div>
                                </div>
                                @if(auth()->user()->isAdmin())
                                    <div class="tab-pane" id="tab_55">
                                        <div class="col-md-6 col-md-offset-0">
                                            @if(auth()->user()->isAdmin())
                                                <div class="form-group">
                                                    {{ Form::label('activo', 'Activo', [ 'class' => 'text text-bold' ]) }}
                                                    @if(!auth()->user()->isAdmin())
                                                        {{ Form::hidden('activo',0)}}
                                                    @else
                                                        {{ Form::hidden('activo',1)}}
                                                    @endif
                                                    {{ Form::checkbox('activo') }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('ruc_invoice', 'Ruc para Factura', [ 'class' => 'text text-bold' ]) }}
                                                    {{ Form::text('ruc_invoice', null, ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('razon_social_invoice', 'Razón Social para Factura', [ 'class' => 'text text-bold' ]) }}
                                                    {{ Form::text('razon_social_invoice', null, ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('email_invoice', 'Mail para Factura', [ 'class' => 'text text-bold' ]) }}
                                                    <br>
                                                    {{ Form::text('email_invoice', null, ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('telefono_invoice', 'Teléfono para Factura', [ 'class' => 'text text-bold' ]) }}
                                                    {{ Form::text('telefono_invoice', null, ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('direccion_invoice', 'Dirección para Factura', [ 'class' => 'text text-bold' ]) }}
                                                    {{ Form::text('direccion_invoice', null, ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('plan_desde', 'Plan Desde', [ 'class' => 'text text-bold' ]) }}
                                                    {{ Form::date('plan_desde', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('plan_hasta', 'Plan Hasta', [ 'class' => 'text text-bold' ]) }}
                                                    {{ Form::date('plan_hasta', null, ['class' => 'form-control']) }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--<div class="box-footer">
                        {{ trans('adminlte_lang::message.logged') }}. ExpoEducar 2017.
                    </div>--}}
                    <!-- /.box-body -->

                    {!! Form::submit('Crear Registro', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
@endsection
