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
                        <h3 class="box-title">Crear Evento</h3>
                        @include('vendor.adminlte.layouts.partials.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif
                    </div>
                    {!! Form::open(['files' => true, 'method' => 'POST', 'route' => 'eventos.store']) !!}
                    <div class="box-body with-border">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_11" data-toggle="tab">Información</a></li>
                                <li><a href="#tab_22" data-toggle="tab">Descripción</a></li>
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
                                            {{ Form::label('plan', 'Plan') }}
                                            {{ Form::select('plan', ['3B' => 'Básico', '2P' => 'Platinum', '1G' => 'Gold'], null, ['class' => 'form-control select2']) }}
                                        </div>

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
                                            <p class="help-block">Las imágenes deben ser de tamaño 400x180 y 500K.</p>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('costo', 'Costo') }}
                                            {{ Form::number('costo', 0, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('fecha_evento', 'Fecha Evento') }}
                                            {{ Form::date('fecha_evento', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_22">
                                    <div class="col-md-6 col-md-offset-0">
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
                                            @endif
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
