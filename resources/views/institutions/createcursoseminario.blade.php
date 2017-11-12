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
                        <h3 class="box-title">Crear Curso/Seminario</h3>
                        @include('vendor.adminlte.layouts.partials.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif
                    </div>
                    {!! Form::open(['files' => true, 'method' => 'POST', 'route' => 'posgrados.store']) !!}
                    <div class="box-body with-border">
                        <div class="nav-tabs-custom">
                            {!! Form::submit('Actualizar Registro', ['class' => 'btn btn-success']) !!}
                            <br>
                            <br>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_11" data-toggle="tab">Información</a></li>
                                <li><a href="#tab_22" data-toggle="tab">Descripción</a></li>
                                <li><a href="#tab_33" data-toggle="tab">Detalles</a></li>
                                <li><a href="#tab_44" data-toggle="tab">Documentos PDF</a></li>
                                @if(auth()->user()->isAdmin())
                                    <li><a href="#tab_55" data-toggle="tab">Administración</a></li>
                                @endif
                            </ul>
                            <div style="padding: 0px" class="tab-content">
                                <div class="tab-pane active" id="tab_11">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('nombre', 'Nombre *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('nombre', null, ['class' => 'form-control', 'PlaceHolder' => 'Nombre del Curso o Seminario']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('nombre', 'Nombre Corto *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('nombre_corto', null, ['class' => 'form-control', 'PlaceHolder' => 'Nombre Corto del Curso o Seminario']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('plan', 'Plan', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::select('plan', ['3B' => 'Básico', '2P' => 'Platinum', '1G' => 'Gold'], null, ['class' => 'form-control select2']) }}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('clasificacion', 'Clasificación *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::select('clasificacion', ['Cursos' => 'Cursos y Seminarios'],
                                            null, ['class' => 'form-control select2']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('tipo', 'Tipo *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::select('tipo', ['Curso Específico' => 'Curso Específico',
                                        'Curso por Niveles' => 'Curso por Niveles', 'Seminario' => 'Seminario',
                                        'Taller' => 'Taller'], null, ['class' => 'form-control select2']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('campo', 'Campo', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('campo', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('institucion', 'Institución *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('institucion', null, ['class' => 'form-control', 'PlaceHolder' => 'Nombre de la Institución que Imparte']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('palabras_clave', 'Palabras Clave', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('palabras_clave', null, ['class' => 'form-control', 'PlaceHolder' => 'Máximo 4000 caracteres']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('telefono', 'Telefono *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('telefono', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('celular', 'Celular', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('celular', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('email', 'Email', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('email', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('costo', 'Costo', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('costo', 0, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('duracion', 'Duración *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('duracion', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('instructores', 'Instructores', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('instructores', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('country_id', 'País *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::select('country_id', $countries->pluck('name','id')->all(), null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('province_id', 'Provincia *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::select('province_id', [null=>'...'] + $provinces->pluck('name','id')->all(), null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('city_id', 'Ciudad *', [ 'class' => 'text text-bold' ]) }}
                                            @if(!empty($cities))
                                                {{ Form::select('city_id', $cities->pluck('name','id')->all(), null, ['class' => 'form-control']) }}
                                            @else
                                                {{ Form::select('city_id', [null=>'...'], null, ['class' => 'form-control']) }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_22">
                                    <div class="col-md-6 col-md-offset-0">
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
                                            {{ Form::label('linkedin', 'Linkedin', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('linkedin', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('presencial', 'Presencial', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('presencial',0)}}
                                            {{ Form::checkbox('presencial') }}
                                            &nbsp;&nbsp;
                                            {{ Form::label('semipresencial', 'Semipresencial', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('semipresencial',0)}}
                                            {{ Form::checkbox('semipresencial') }}
                                            &nbsp;&nbsp;
                                            {{ Form::label('distancia', 'Distancia', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('distancia',0)}}
                                            {{ Form::checkbox('distancia') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('cupos', 'Cupos', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('cupos', 0, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('fecha_inicio', 'Fecha Inicio', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::date('fecha_inicio', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('fecha_fin', 'Fecha Fin', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::date('fecha_fin', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('hora_ingreso', 'Hora Ingreso', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('hora_ingreso', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('hora_salida', 'Hora Salida', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('hora_salida', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('lugar', 'Lugar', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('lugar', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('objetivo', 'Objetivo', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::textArea('objetivo', null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_33">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Temario
                                                    <small></small>
                                                </h3>
                                                <!-- tools box -->
                                                <div class="pull-right box-tools">
                                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse"
                                                            data-toggle="tooltip" title="Collapse">
                                                        <i class="fa fa-minus"></i></button>
                                                </div>
                                                <!-- /. tools -->
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body pad">
                                                {{ Form::textArea('temario', null, ['class' => 'textarea']) }}
                                            </div>
                                        </div>
                                        <br>
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Detalle de Instructores
                                                    <small></small>
                                                </h3>
                                                <!-- tools box -->
                                                <div class="pull-right box-tools">
                                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse"
                                                            data-toggle="tooltip" title="Collapse">
                                                        <i class="fa fa-minus"></i></button>
                                                </div>
                                                <!-- /. tools -->
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body pad">
                                                {{ Form::textArea('instructores_detalle', null, ['class' => 'textarea']) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('incluye', 'Incluye', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::textArea('incluye', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('mapa_url', 'Mapa URL', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('mapa_url', null, ['class' => 'form-control', 'PlaceHolder' => 'Pega aquí el código del mapa compartido de google map']) }}
                                        </div>
                                        <!-- Información cursos por niveles -->
                                        <div class="form-group">
                                            {{ Form::label('max_alumnos_x_nivel', 'Máximo Alumnos por Nivel', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('max_alumnos_x_nivel', 0, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('meses_inicio', 'Meses Inicio', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('meses_inicio', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('duracion_nivel', 'Duración Nivel', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('duracion_nivel', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('horarios', 'Horarios', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('horarios', null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_44">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('Archivos PDF', null, [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::file('documento_pdf1') }}
                                            {{ Form::file('documento_pdf2') }}
                                            {{ Form::file('documento_pdf3') }}
                                            <p class="help-block">Los documentos deben ser .pdf y 500K.</p>
                                        </div>
                                    </div>
                                </div>
                                @if(auth()->user()->isAdmin())
                                    <div class="tab-pane" id="tab_55">
                                        <div class="col-md-6 col-md-offset-0">
                                            @if(auth()->user()->isAdmin())
                                                <div class="form-group">
                                                    {{ Form::label('activo', 'Activo', [ 'class' => 'text text-bold' ]) }}
                                                    {{ Form::hidden('activo',0)}}
                                                    {{ Form::checkbox('activo') }}
                                                </div>
                                            @endif
                                            <!-- datos facturación -->
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
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    {{--<div class="box-footer">
                        {{ trans('adminlte_lang::message.logged') }}. ExpoEducar 2017.
                    </div>--}}
                    <!-- /.box-body -->
                    {!! Form::submit('Actualizar Registro', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
@endsection
