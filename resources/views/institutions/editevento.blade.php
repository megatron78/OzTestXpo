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
                        <h3 class="box-title">{{$evento->nombre}}</h3>
                        <br>
                        <br>
                        @include('vendor.adminlte.layouts.partials.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif

                        {!! Form::model($evento, array('files' => true, 'route' => array('eventos.edit', $evento->id))) !!}
                            <br>
                            {{ Form::label('activo', 'Activo') }}
                            {{ Form::hidden('activo',0)}}
                            {{ Form::checkbox('activo') }}
                            <br>
                            {{ Form::label('nombre', 'Nombre') }}
                            <br>
                            {{ Form::text('nombre') }}
                            <br>
                            {{ Form::label('plan', 'Plan') }}
                            <br>
                            {{ Form::select('plan', ['3B' => 'Básico', '2P' => 'Platinum', '1G' => 'Gold'], $evento->plan) }}
                            <br>
                            {{ Form::label('informacion', 'Información') }}
                            <br>
                            {{ Form::text('informacion') }}
                            <br>
                            {{ Form::label('costo', 'Costo') }}
                            <br>
                            {{ Form::number('costo', $evento->costo) }}
                            <br>
                            {{ Form::label('fecha_evento', 'Fecha Evento') }}
                            <br>
                            {{ Form::date('fecha_evento', $evento->fecha_evento) }}
                            <br>
                            {{ Form::label('palabras_clave', 'Palabras Clave') }}
                            <br>
                            {{ Form::text('palabras_clave') }}
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
                            {{ Form::date('plan_desde', $evento->plan_desde) }}
                            <br>
                            {{ Form::label('plan_hasta', 'Plan Hasta') }}
                            <br>
                            {{ Form::date('plan_hasta', $evento->plan_hasta) }}
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