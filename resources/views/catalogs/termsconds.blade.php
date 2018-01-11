@extends('adminlte::layouts.app')

@section('contentheader_title')
    {{ trans('adminlte_lang::message.terms_conditions') }}
@endsection

@section('contentheader_description')
    {{ trans('adminlte_lang::message.terms_conditions_description') }}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        @include('vendor.adminlte.layouts.partials.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif

                        <div class="col-md-6 col-md-offset-0">
                            {!! Form::model($terms, array('route' => array('terms.update', $terms->id))) !!}
                            {{--<div class="form-group">
                                {{ Form::label('nombre', 'Nombre  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                            </div>--}}
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Términos y Condicines
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
                                    {{ Form::textArea('texto', $terms->texto, ['class' => 'textarea']) }}
                                </div>
                            </div>
                            {!! Form::submit('Actualizar Información', ['class' => 'btn btn-success']) !!}
                            {!! Form::close() !!}
                        </div>
                        {{--<div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>--}}
                    </div>
                {{--<div class="box-body">
                    {{ trans('adminlte_lang::message.logged') }}. ExpoEducar 2017.
                </div>--}}
                <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
@endsection