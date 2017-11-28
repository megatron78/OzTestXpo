@extends('adminlte::layouts.app')
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
                        <h3 class="box-title">{{$courseseminar->nombre}}</h3>
                        @include('vendor.adminlte.layouts.partials.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif
                    </div>
                    {!! Form::model($courseseminar, array('files' => true, 'route' => array('posgrados.edit', $courseseminar->id))) !!}
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
                                            {{ Form::label('nombre', 'Nombre') }}
                                            {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('nombre', 'Nombre de la Institución  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::text('nombre_corto', null, ['class' => 'form-control', 'PlaceHolder' => 'Nombre Corto de la Institución']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('tipo', 'Tipo') }}
                                            {{ Form::select('tipo', ['Curso Específico' => 'Curso Específico',
                                        'Curso por Niveles' => 'Curso por Niveles', 'Seminario' => 'Seminario',
                                        'Taller' => 'Taller'], $courseseminar->tipo, ['class' => 'form-control select2']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('campo', 'Campo') }}
                                            {{ Form::text('campo', null, ['class' => 'form-control', 'PlaceHolder' => 'Campo de Estudio']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('institucion', 'Institución') }}
                                            {{ Form::text('institucion', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('palabras_clave', 'Palabras Clave', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('palabras_clave', null, ['class' => 'form-control', 'PlaceHolder' => 'Máximo 4000 caracteres separados por espacio']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('costo', 'Costo') }}
                                            {{ Form::number('costo', $courseseminar->costo, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('instructores', 'Instructores') }}
                                            {{ Form::text('instructores', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('country_id', 'País') }}
                                            {{ Form::select('country_id', $countries->pluck('name','id')->all(), $courseseminar->country_id, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('province_id', 'Provincia') }}
                                            {{ Form::select('province_id', $provinces->pluck('name','id')->all(), $courseseminar->province_id, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('city_id', 'Ciudad') }}
                                            {{ Form::select('city_id', $cities->pluck('name','id')->all(), $courseseminar->city_id, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_22">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('telefono', 'Teléfono de Contacto') }}
                                            {{ Form::text('telefono', null, ['class' => 'form-control', 'PlaceHolder' => 'Teléfono de Contacto']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('celular', 'WhatsApp') }}
                                            {{ Form::text('celular', null, ['class' => 'form-control', 'PlaceHolder' => 'WhatsApp de Contacto']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('email', 'Email', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::text('email', null, ['class' => 'form-control', 'PlaceHolder' => 'Email de contacto']) }}
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
                                            {{ Form::label('linkedin', 'Linkedin', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('linkedin', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('presencial', 'Presencial') }}
                                            {{ Form::hidden('presencial',0)}}
                                            {{ Form::checkbox('presencial') }}
                                            {{ Form::label('semipresencial', 'Semipresencial') }}
                                            {{ Form::hidden('semipresencial',0)}}
                                            {{ Form::checkbox('semipresencial') }}
                                            {{ Form::label('distancia', 'Distancia') }}
                                            {{ Form::hidden('distancia',0)}}
                                            {{ Form::checkbox('distancia') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('cupos', 'Cupos') }}
                                            {{ Form::number('cupos', $courseseminar->cupos, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('fecha_inicio', 'Fecha Inicio') }}
                                            {{ Form::date('fecha_inicio', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('fecha_fin', 'Fecha Fin') }}
                                            {{ Form::date('fecha_fin', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('duracion', 'Duración') }}
                                            {{ Form::text('duracion', null, ['class' => 'form-control', 'PlaceHolder' => 'En horas, días, semanas o meses. Por ejemplo: "120 horas"']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('hora_ingreso', 'Hora Ingreso') }}
                                            {{ Form::text('hora_ingreso', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('hora_salida', 'Hora Salida') }}
                                            {{ Form::text('hora_salida', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('lugar', 'Lugar') }}
                                            {{ Form::text('lugar', null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_33">
                                    <div class="col-md-6 col-md-offset-0">
                                        <br>
                                        <div class="form-group">
                                            {{ Form::label('objetivo', 'Objetivo') }}
                                            {{ Form::textArea('objetivo', $courseseminar->objetivo, ['class' => 'form-control']) }}
                                        </div>
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
                                                {{ Form::textArea('temario', $courseseminar->temario, ['class' => 'form-control']) }}
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
                                                {{ Form::textArea('instructores_detalle', $courseseminar->instructores_detalle, ['class' => 'textarea']) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('incluye', 'Incluye') }}
                                            {{ Form::textArea('incluye', $courseseminar->incluye, ['class' => 'textarea']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('mapa_url', 'Mapa URL') }}
                                            {{ Form::text('mapa_url', null, ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('max_alumnos_x_nivel', 'Máximo Alumnos por Nivel') }}
                                            {{ Form::number('max_alumnos_x_nivel', $courseseminar->max_alumnos_x_nivel, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('meses_inicio', 'Meses Inicio') }}
                                            {{ Form::text('meses_inicio', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('duracion_nivel', 'Duración Nivel') }}
                                            {{ Form::text('duracion_nivel', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('horarios', 'Horarios') }}
                                            {{ Form::text('horarios', null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_44">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('Archivos PDF') }}
                                            @if(!empty($courseseminar->documento_pdf1))
                                                <br>
                                                Actual: {{ explode('/',$courseseminar->documento_pdf1)[3]}}
                                            @endif
                                            {{ Form::file('documento_pdf1', ['onchange' => 'validatePdfFiles()']) }}
                                            @if(!empty($courseseminar->documento_pdf2))
                                                <br>
                                                Actual: {{ explode('/',$courseseminar->documento_pdf2)[3]}}
                                            @endif
                                            {{ Form::file('documento_pdf2', ['onchange' => 'validatePdfFiles()']) }}
                                            @if(!empty($courseseminar->documento_pdf3))
                                                <br>
                                                Actual: {{ explode('/',$courseseminar->documento_pdf3)[3]}}
                                            @endif
                                            {{ Form::file('documento_pdf3', ['onchange' => 'validatePdfFiles()']) }}
                                            <p class="help-block">Los documentos deben ser en formato .pdf y máximo 500K.</p>
                                        </div>
                                    </div>
                                </div>
                                @if(auth()->user()->isAdmin())
                                    <div class="tab-pane" id="tab_55">
                                        <div class="col-md-6 col-md-offset-0">
                                            @if(auth()->user()->isAdmin())
                                                <div class="form-group">
                                                    {{ Form::label('user_id', 'Usuario  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                                    {{ Form::select('user_id', $users->pluck('name','id')->all(), $courseseminar->user_id, ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('plan', 'Plan') }}
                                                    {{ Form::select('plan', ['3B' => 'Básico', '2P' => 'Platinum', '1G' => 'Gold'], $courseseminar->plan, ['class' => 'form-control select2']) }}
                                                </div>
                                            @endif
                                            @if(auth()->user()->isAdmin())
                                                <div class="form-group">
                                                    {{ Form::label('activo', 'Activo') }}
                                                    {{ Form::hidden('activo',0)}}
                                                    {{ Form::checkbox('activo') }}
                                                </div>
                                            @endif
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