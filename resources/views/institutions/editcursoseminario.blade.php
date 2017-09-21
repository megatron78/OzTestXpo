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
                        <br>
                        <br>
                        @include('vendor.adminlte.layouts.partials.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif

                        {!! Form::model($courseseminar, array('files' => true, 'route' => array('posgrados.edit', $courseseminar->id))) !!}
                            <br>
                            {{ Form::label('activo', 'Activo') }}
                            {{ Form::hidden('activo',0)}}
                            {{ Form::checkbox('activo') }}
                            <br>
                            {{ Form::label('nombre', 'Nombre') }}
                            <br>
                            {{ Form::text('nombre') }}
                            <br>
                            {{ Form::label('nombre_corto', 'Nombre corto') }}
                            <br>
                            {{ Form::text('nombre_corto') }}
                            <br>
                            {{ Form::label('clasificacion', 'Clasificación') }}
                            <br>
                            {{ Form::select('clasificacion', ['Posgrado' => 'Posgrado', 'Cursos' => 'Cursos y Seminarios'],
                            $courseseminar->clasificacion) }}
                            <br>
                            {{ Form::label('tipo', 'Tipo') }}
                            <br>
                            {{ Form::select('tipo', ['Masterado' => 'Masterado', 'Doctorado' => 'Doctorado',
                            'PHD' => 'PHD', 'Curso Específico' => 'Curso Específico',
                            'Curso por Niveles' => 'Curso por Niveles', 'Seminario' => 'Seminario',
                            'Taller' => 'Taller'], $courseseminar->tipo) }}
                            <br>
                            {{ Form::label('plan', 'Plan') }}
                            <br>
                            {{ Form::select('plan', ['3B' => 'Básico', '2P' => 'Platinum', '1G' => 'Gold'], $courseseminar->plan) }}
                            <br>
                            {{ Form::text('campo') }}
                            <br>
                            {{ Form::label('campo', 'Campo') }}
                            <br>
                            {{ Form::text('institucion') }}
                            <br>
                            {{ Form::label('institucion', 'Institución') }}
                            <br>
                            {{ Form::label('palabras_clave', 'Palabras Clave') }}
                            <br>
                            {{ Form::text('palabras_clave') }}
                            <br>
                            {{ Form::label('costo', 'Costo') }}
                            <br>
                            {{ Form::number('costo', $courseseminar->costo) }}
                            <br>
                            {{ Form::label('instructores', 'Instructores') }}
                            <br>
                            {{ Form::text('instructores') }}
                            <br>
                            {{ Form::label('instructores', 'Instructores') }}
                            <br>
                            {{ Form::label('country_id', 'País') }}
                            {{ Form::select('country_id', $countries->pluck('name','id')->all(), $courseseminar->country_id, ['class' => 'form-control']) }}
                            <br>
                            {{ Form::label('province_id', 'Provincia') }}
                            {{ Form::select('province_id', $provinces->pluck('name','id')->all(), $courseseminar->province_id, ['class' => 'form-control']) }}
                            <br>
                            {{ Form::label('city_id', 'Ciudad') }}
                            {{ Form::select('city_id', $cities->pluck('name','id')->all(), $courseseminar->city_id, ['class' => 'form-control']) }}
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
                            {{ Form::label('linkedin', 'Linkedin') }}
                            <br>
                            {{ Form::text('linkedin') }}
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
                            {{ Form::label('cupos', 'Cupos') }}
                            <br>
                            {{ Form::number('cupos', $courseseminar->cupos) }}
                            <br>
                            {{ Form::label('fecha_inicio', 'Fecha Inicio') }}
                            <br>
                            {{ Form::date('fecha_inicio', \Carbon\Carbon::now()) }}
                            <br>
                            {{ Form::label('fecha_fin', 'Fecha Fin') }}
                            <br>
                            {{ Form::date('fecha_fin') }}
                            <br>
                            {{ Form::label('duracion', 'Duración') }}
                            <br>
                            {{ Form::text('duracion') }}
                            <br>
                            {{ Form::label('hora_ingreso', 'Hora Ingreso') }}
                            <br>
                            {{ Form::text('hora_ingreso') }}
                            <br>
                            {{ Form::label('hora_salida', 'Hora Salida') }}
                            <br>
                            {{ Form::text('hora_salida') }}
                            <br>
                            {{ Form::label('lugar', 'Lugar') }}
                            <br>
                            {{ Form::text('lugar') }}
                            <br>
                            {{ Form::label('objetivo', 'Objetivo') }}
                            <br>
                            {{ Form::textArea('objetivo', $courseseminar->objetivo, ['class' => 'textarea']) }}
                            <br>
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
                                    {{ Form::textArea('temario', $courseseminar->temario, ['class' => 'textarea']) }}
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
                            <br>
                            {{ Form::label('incluye', 'Incluye') }}
                            <br>
                            {{ Form::textArea('incluye', $courseseminar->incluye, ['class' => 'textarea']) }}
                            <br>
                            {{ Form::label('mapa_url', 'Mapa URL') }}
                            <br>
                            {{ Form::text('mapa_url') }}
                            <br>
                            {{ Form::label('max_alumnos_x_nivel', 'Máximo Alumnos por Nivel') }}
                            <br>
                            {{ Form::number('max_alumnos_x_nivel', $courseseminar->max_alumnos_x_nivel) }}
                            <br>
                            {{ Form::label('meses_inicio', 'Meses Inicio') }}
                            <br>
                            {{ Form::text('meses_inicio') }}
                            <br>
                            {{ Form::label('duracion_nivel', 'Duración Nivel') }}
                            <br>
                            {{ Form::text('duracion_nivel') }}
                            <br>
                            {{ Form::label('horarios', 'Horarios') }}
                            <br>
                            {{ Form::text('horarios') }}
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
                            {{ Form::date('plan_hasta') }}
                            <br>
                            <br>
                            {{ Form::label('Archivos PDF') }}
                            <br>
                            {{ Form::file('documento_pdf1') }}
                            {{ Form::file('documento_pdf2') }}
                            {{ Form::file('documento_pdf3') }}
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