@extends('adminlte::layouts.app')

@section('contentheader_title')
    {{ trans('adminlte_lang::message.banners') }}
@endsection

@section('contentheader_description')
    {{ trans('adminlte_lang::message.banners_description') }}
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
                        {!! Form::model($banner, array('files' => true, 'route' => array('banners.update', $banner->id))) !!}
                            @if($banner->category_id == 1)
                                <div class="form-group">
                                    <h2>Página Principal</h2>
                                </div>
                            @endif
                            @if($banner->category_id == 2)
                                <div class="form-group">
                                    <h2>Preescolar</h2>
                                </div>
                            @endif
                            @if($banner->category_id == 3)
                                <div class="form-group">
                                    <h2>Escuela/Colegio</h2>
                                </div>
                            @endif
                            @if($banner->category_id == 4)
                                <div class="form-group">
                                    <h2>Educación Superior</h2>
                                </div>
                            @endif
                            @if($banner->category_id == 5)
                                <div class="form-group">
                                    <h2>Posgrados</h2>
                                </div>
                            @endif
                            @if($banner->category_id == 6)
                                <div class="form-group">
                                    <h2>Cursos y Seminarios</h2>
                                </div>
                            @endif
                            @if($banner->category_id == 7)
                                <div class="form-group">
                                    <h2>Eventos</h2>
                                </div>
                            @endif
                            <br>
                            <div class="form-group">
                                {{ Form::label('Imágenes para el banner', null, [ 'class' => 'text text-bold' ]) }}
                                @if(!empty($banner->photo1_url))
                                    <br>
                                    {{--Actual: {{ explode('/',$banner->photo1_url)[3]}}--}}
                                    <img src="{{ $banner->photo1_url }}" alt="Banner 1" width="40%" height="40%">
                                @endif
                                {{ Form::file('photo1_url', ['onchange' => 'validateAdmBanner()']) }}
                                <br>
                                {{ Form::label('web', 'Enlace Web', [ 'class' => 'text text-bold' ]) }}
                                {{ Form::text('url1', null, ['class' => 'form-control', 'PlaceHolder' => 'Enlace Banner 1']) }}
                                @if(!empty($banner->photo2_url))
                                    <br>
                                    {{--Actual: {{ explode('/',$banner->photo2_url)[3]}}--}}
                                    <img src="{{ $banner->photo2_url }}" alt="Banner 2" width="40%" height="40%">
                                @endif
                                {{ Form::file('photo2_url', ['onchange' => 'validateAdmBanner()']) }}
                                <br>
                                {{ Form::label('web', 'Enlace Web', [ 'class' => 'text text-bold' ]) }}
                                {{ Form::text('url2', null, ['class' => 'form-control', 'PlaceHolder' => 'Enlace Banner 2']) }}
                                @if(!empty($banner->photo3_url))
                                    <br>
                                    {{--Actual: {{ explode('/',$banner->photo3_url)[3]}}--}}
                                    <img src="{{ $banner->photo3_url }}" alt="Banner 3" width="40%" height="40%">
                                @endif
                                {{ Form::file('photo3_url', ['onchange' => 'validateAdmBanner()']) }}
                                <br>
                                {{ Form::label('web', 'Enlace Web', [ 'class' => 'text text-bold' ]) }}
                                {{ Form::text('url3', null, ['class' => 'form-control', 'PlaceHolder' => 'Enlace Banner 3']) }}
                                {{--{{ Form::file('photo4_url') }}--}}
                                {{--{{ Form::file('photo5_url') }}--}}

                                <p class="help-block">Las imágenes deben ser de tamaño 1141x351 y máximo 500K.</p>
                            </div>
                            <br>
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