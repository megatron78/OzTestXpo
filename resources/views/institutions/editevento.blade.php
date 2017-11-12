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
                    {!! Form::model($evento, array('files' => true, 'route' => array('eventos.edit', $evento->id))) !!}
                    <div class="box-body with-border">
                        <div class="nav-tabs-custom">
                            {!! Form::submit('Actualizar Registro', ['class' => 'btn btn-success']) !!}
                            <br>
                            <br>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_11" data-toggle="tab">Información</a></li>
                                <li><a href="#tab_22" data-toggle="tab">Detalles</a></li>
                                @if(auth()->user()->isAdmin())
                                    <li><a href="#tab_55" data-toggle="tab">Administración</a></li>
                                @endif
                            </ul>
                            <div style="padding: 0px" class="tab-content">
                                <div class="tab-pane active" id="tab_11">
                                    <div class="col-md-6 col-md-offset-0">
                                        <br>
                                        <div class="form-group">
                                            {{ Form::label('nombre', 'Nombre del Evento *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('nombre', null, ['class' => 'form-control', 'PlaceHolder' => 'Nombre del Evento']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('palabras_clave', 'Palabras Clave', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('palabras_clave', null, ['class' => 'form-control', 'PlaceHolder' => 'Máximo 4000 caracteres']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('informacion', 'Información *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::textArea('informacion', null, ['class' => 'form-control', 'PlaceHolder' => 'Información sobre el evento']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('costo', 'Costo *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('costo', $evento->costo, ['class' => 'form-control', 'min' => '0', 'PlaceHolder' => 'En dólares y números enteros']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('fecha_evento', 'Fecha Evento *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::date('fecha_evento', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('hora_evento', 'Hora Evento *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('hora_evento', $evento->hora_evento, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('direccion', 'Dirección *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('direccion', $evento->direccion, ['class' => 'form-control', 'PlaceHolder' => 'Dirección del Evento']) }}
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
                                            {{ Form::label('email', 'Email *', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('email', null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_22">
                                    <div class="col-md-6 col-md-offset-0">
                                        <br>
                                        <div class="form-group">
                                            {{ Form::label('evento_bg_picture','Foto del Evento', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::file('evento_bg_picture') }}
                                            <p class="help-block">Las imágenes deben ser de tamaño 410x180 y 500K.</p>
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
                                    </div>
                                </div>
                                @if(auth()->user()->isAdmin())
                                    <div class="tab-pane" id="tab_55">
                                        <div class="col-md-6 col-md-offset-0">
                                            <br>
                                            @if(auth()->user()->isAdmin())
                                                <div class="form-group">
                                                    {{ Form::label('user_id', 'Usuario *', [ 'class' => 'text text-bold' ]) }}
                                                    {{ Form::select('user_id', $users->pluck('name','id')->all(), $evento->user_id, ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('plan', 'Plan', [ 'class' => 'text text-bold' ]) }}
                                                    {{ Form::select('plan', ['3B' => 'Básico', '2P' => 'Platinum', '1G' => 'Gold'], $evento->plan, ['class' => 'form-control select2']) }}
                                                </div>
                                            @endif
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
                                                {{ Form::date('plan_desde', $evento->plan_desde, ['class' => 'form-control']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('plan_hasta', 'Plan Hasta', [ 'class' => 'text text-bold' ]) }}
                                                {{ Form::date('plan_hasta', $evento->plan_hasta, ['class' => 'form-control']) }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    {!! Form::submit('Actualizar Registro', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
                <!-- /.box-body -->
                {{--<div class="box-footer">
                    {{ trans('adminlte_lang::message.logged') }}. ExpoEducar 2017.
                </div>--}}
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
    </div>
    </div>
@endsection