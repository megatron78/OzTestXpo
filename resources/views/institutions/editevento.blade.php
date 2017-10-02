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
                        @include('vendor.adminlte.layouts.partials.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif
                    </div>
                    <div class="box-body with-border">
                        <div class="col-md-6 col-md-offset-0">
                        {!! Form::model($evento, array('files' => true, 'route' => array('eventos.edit', $evento->id))) !!}
                            <div class="form-group">
                                {{ Form::label('nombre', 'Nombre') }}
                                {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                            </div>
                            @if(auth()->user()->isAdmin())
                                <div class="form-group">
                                    {{ Form::label('plan', 'Plan') }}
                                    {{ Form::select('plan', ['3B' => 'Básico', '2P' => 'Platinum', '1G' => 'Gold'], $evento->plan, ['class' => 'form-control select2']) }}
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
                                {{ Form::label('palabras_clave', 'Palabras Clave') }}
                                {{ Form::text('palabras_clave', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('informacion', 'Información') }}
                                {{ Form::text('informacion', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('evento_bg_picture','Foto del Evento') }}
                                {{ Form::file('evento_bg_picture') }}
                                <p class="help-block">Las imágenes deben ser de tamaño 600x390 y 500K.</p>
                            </div>
                            <div class="form-group">
                                {{ Form::label('costo', 'Costo') }}
                                {{ Form::number('costo', $evento->costo, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('fecha_evento', 'Fecha Evento') }}
                                {{ Form::date('fecha_evento', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
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

                            <!-- datos facturación -->
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
                                {{ Form::date('plan_desde', $evento->plan_desde, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('plan_hasta', 'Plan Hasta') }}
                                {{ Form::date('plan_hasta', $evento->plan_hasta, ['class' => 'form-control']) }}
                            </div>
                            {!! Form::submit('Actualizar Registro', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                        </div>
                        {{--<div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>--}}
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        {{ trans('adminlte_lang::message.logged') }}. ExpoEducar 2017.
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
@endsection