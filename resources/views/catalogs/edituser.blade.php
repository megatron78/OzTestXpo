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
                        <h3 class="box-title">Editar Datos del Usuario</h3>
                        @include('vendor.adminlte.layouts.partials.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif
                    </div>
                    <div class="box-body with-border">
                        <div class="col-md-6 col-md-offset-0">
                            {!! Form::model($user, array('route' => array('user.update', $user->id))) !!}
                                <div class="form-group">
                                    {{ Form::label('name', 'Nombre del Usuario *', [ 'class' => 'text text-bold' ]) }}
                                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                {{ Form::label('password', 'Clave de Acceso *', [ 'class' => 'text text-bold' ]) }}
                                {{ Form::hidden('pwd', $user->password) }}
                                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'No escribir nada si desea mantener la actual.']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('telephone', 'Teléfono *', [ 'class' => 'text text-bold' ]) }}
                                    {{ Form::text('telephone', null, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('contact_person', 'Persona de Contacto *', [ 'class' => 'text text-bold' ]) }}
                                    {{ Form::text('contact_person', null, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('role', 'Rol', [ 'class' => 'text text-bold' ]) }}
                                    {{ Form::select('role', ['admin' => 'Administrador', 'user' => 'Usuario'], $user->role, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('verified', 'Activo', [ 'class' => 'text text-bold' ]) }}
                                    {{ Form::select('verified', [1 => 'Activo', 0 => 'Inactivo'], $user->verified, ['class' => 'form-control']) }}
                                </div>
                                {!! Form::submit('Actualizar Registro', ['class' => 'btn btn-success']) !!}
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
                    {{--<div class="box-footer">
                        {{ trans('adminlte_lang::message.logged') }}. ExpoEducar 2017.
                    </div>--}}
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
@endsection