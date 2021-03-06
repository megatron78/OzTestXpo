@extends('adminlte::layouts.app')

@section('contentheader_title')
    {{ trans('adminlte_lang::message.publicidad') }}
@endsection

@section('contentheader_description')
    {{ trans('adminlte_lang::message.publicidad_description') }}
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
                            {!! Form::model($ads, array('route' => array('ads.update', $ads->id))) !!}
                            <div class="form-group">
                                {{ Form::label('object_id', 'Institución  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                {{ Form::select('object_id', $adsCombo->pluck('nombre_corto','id')->all(), $ads->object_id, ['class' => 'form-control select2']) }}
                                {{ Form::hidden('ads_nombre_corto', $ads->nombre_corto, array('id' => 'ads_nombre_corto')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('orden_presentacion', 'Orden Presentación  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                {{ Form::number('orden_presentacion', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('fecha_inicio', 'Fecha Inicio  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                {{ Form::date('fecha_inicio', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('fecha_fin', 'Fecha Fin  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                {{ Form::date('fecha_fin', null, ['class' => 'form-control']) }}
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
@endsection