@extends('adminlte::layouts.app')

@section('contentheader_title')
    {{ trans('adminlte_lang::message.admuser') }}
@endsection

@section('contentheader_description')
    {{ trans('adminlte_lang::message.admuser_description') }}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$ads->nombre}}</h3>
                        @include('vendor.adminlte.layouts.partials.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif

                        <div class="col-md-6 col-md-offset-0">
                        {!! Form::model($ads, array('route' => array('user.update', $ads->id))) !!}
                            <div class="form-group">
                                {{ Form::label('name', 'Nombre') }}
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                            {{ Form::label('password', 'Clave de Acceso') }}
                            {{ Form::hidden('pwd', $ads->password) }}
                            {{ Form::password('password', ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('telephone', 'Teléfono') }}
                                {{ Form::text('telephone', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('contact_person', 'Persona de Contacto') }}
                                {{ Form::text('contact_person', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('role', 'Rol') }}
                                {{ Form::select('role', ['admin' => 'Administrador', 'user' => 'Usuario'], $ads->role, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('verified', 'Activo') }}
                                {{ Form::select('verified', [1 => 'Activo', 0 => 'Inactivo'], $ads->verified, ['class' => 'form-control']) }}
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