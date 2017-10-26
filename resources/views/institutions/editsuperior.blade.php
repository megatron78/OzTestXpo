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
                        <h3 class="box-title">{{$pregrade->nombre}}</h3>
                        @include('vendor.adminlte.layouts.partials.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif
                    </div>
                    {!! Form::model($pregrade, array('files' => true, 'route' => array('superior.update', $pregrade->id))) !!}
                    <div class="box-body with-border">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_11" data-toggle="tab">Información</a></li>
                                <li><a href="#tab_22" data-toggle="tab">Descripción</a></li>
                                <li><a href="#tab_33" data-toggle="tab">Detalles</a></li>
                                <li><a href="#tab_44" data-toggle="tab">Galería de Imágenes</a></li>
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
                                            {{ Form::label('nombre_corto', 'Nombre corto') }}
                                            {{ Form::text('nombre_corto', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('tipo', 'Tipo') }}
                                            {{ Form::select('tipo', ['Universidad' => 'Universidad', 'Instituto' => 'Instituto', 'Academia' => 'Academia'], $pregrade->tipo, ['class' => 'form-control select2']) }}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('palabras_clave', 'Palabras Clave') }}
                                            {{ Form::text('palabras_clave', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('trayectoria', 'Trayectoria') }}
                                            {{ Form::text('trayectoria', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('categoria', 'Categoría') }}
                                            {{ Form::text('categoria', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('pregrade_bg_picture','Foto de fondo') }}
                                            {{ Form::file('pregrade_bg_picture') }}
                                            <p class="help-block">Las imágenes deben ser de tamaño 410x180 y 500K.</p>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('nombre_autoridad', 'Nombre Autoridad') }}
                                            {{ Form::text('nombre_autoridad', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('province_id', 'Provincia') }}
                                            {{ Form::select('province_id', $provinces->pluck('name','id')->all(), $pregrade->province_id, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('city_id', 'Ciudad') }}
                                            {{ Form::select('city_id', $cities->pluck('name','id')->all(), $pregrade->city_id, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('direccion', 'Dirección') }}
                                            {{ Form::text('direccion', null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_22">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('fiscal', 'Fiscal') }}
                                            {{ Form::hidden('fiscal',0)}}
                                            {{ Form::checkbox('fiscal') }}
                                            {{ Form::label('privado', 'Privado') }}
                                            {{ Form::hidden('privado',0)}}
                                            {{ Form::checkbox('privado') }}
                                            {{ Form::label('fiscomisional', 'Fiscomisional') }}
                                            {{ Form::hidden('fiscomisional',0)}}
                                            {{ Form::checkbox('fiscomisional') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('presencial', 'Presencial') }}
                                            {{ Form::hidden('presencial',0)}}
                                            {{ Form::checkbox('presencial') }}
                                            {{ Form::label('semipresencial', 'Semipresencial') }}
                                            {{ Form::hidden('semipresencial',0)}}
                                            {{ Form::checkbox('semipresencial') }}
                                            {{ Form::label('distancia', 'Distancia') }}
                                            {{ Form::hidden('distancia',0)}}
                                            {{ Form::checkbox('distancia') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('matutino', 'Matutino') }}
                                            {{ Form::hidden('matutino',0)}}
                                            {{ Form::checkbox('matutino') }}
                                            {{ Form::label('vespertino', 'Vespertino') }}
                                            {{ Form::hidden('vespertino',0)}}
                                            {{ Form::checkbox('vespertino') }}
                                            {{ Form::label('nocturno', 'Nocturno') }}
                                            {{ Form::hidden('nocturno',0)}}
                                            {{ Form::checkbox('nocturno') }}
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
                                            {{ Form::label('email_adicional', 'Email Adicional') }}
                                            {{ Form::text('email_adicional', null, ['class' => 'form-control']) }}
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
                                        <div class="form-group">
                                            {{ Form::label('linkedin', 'Linkedin') }}
                                            {{ Form::text('linkedin', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('descripcion', 'Descripcion') }}
                                            {{ Form::text('descripcion', null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_33">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('carreras_corto', 'Carreras (lista separada por comas)') }}
                                            {{ Form::text('carreras_corto', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Carreras
                                                    <small>Facultades, Carreras</small>
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
                                                {{ Form::textArea('carreras', $pregrade->carreras, ['class' => 'textarea']) }}
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            {{ Form::label('area_total', 'Área Total') }}
                                            {{ Form::number('area_total', $pregrade->area_total, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('area_deportiva', 'Área Canchas Deportivas') }}
                                            {{ Form::number('area_deportiva', $pregrade->area_deportiva, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('area_espacios_verdes', 'Área Espacios Verdes') }}
                                            {{ Form::number('area_espacios_verdes', $pregrade->area_espacios_verdes, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('area_piscina', 'Área Piscina') }}
                                            {{ Form::number('area_piscina', $pregrade->area_piscina, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('seguridad_privada', 'Seguridad Privada') }}
                                            {{ Form::hidden('seguridad_privada',0)}}
                                            {{ Form::checkbox('seguridad_privada') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('wifi_interior', 'Wifi Interior') }}
                                            {{ Form::hidden('wifi_interior',0)}}
                                            {{ Form::checkbox('wifi_interior') }}
                                            {{ Form::label('wifi_exterior', 'Wifi Exterior') }}
                                            {{ Form::hidden('wifi_exterior',0)}}
                                            {{ Form::checkbox('wifi_exterior') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('wifi_otros', 'Wifi Otros') }}
                                            {{ Form::text('wifi_otros', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('capacidad_restaurantes', 'Capacidad Restaurantes') }}
                                            {{ Form::number('capacidad_restaurantes', $pregrade->capacidad_restaurantes, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('canchas_indoor', 'Canchas de Indoor') }}
                                            {{ Form::number('canchas_indoor', $pregrade->canchas_indoor, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('canchas_futbol', 'Canchas de Fútbol') }}
                                            {{ Form::number('canchas_futbol', $pregrade->canchas_futbol, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('canchas_basket', 'Canchas de Básquet') }}
                                            {{ Form::number('canchas_basket', $pregrade->canchas_basket, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('canchas_tenis', 'Canchas de Tenis') }}
                                            {{ Form::number('canchas_tenis', $pregrade->canchas_tenis, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('mesas_tenis', 'Mesas de Tenis') }}
                                            {{ Form::number('mesas_tenis', $pregrade->mesas_tenis, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('pista_atletica', 'Pista Atlética') }}
                                            {{ Form::hidden('pista_atletica',0)}}
                                            {{ Form::checkbox('pista_atletica') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('teatro', 'Teatro') }}
                                            {{ Form::hidden('teatro',0)}}
                                            {{ Form::checkbox('teatro') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('gimnasio', 'Gimnasio') }}
                                            {{ Form::hidden('gimnasio',0)}}
                                            {{ Form::checkbox('gimnasio') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('otros', 'Otras Áreas') }}
                                            {{ Form::textArea('otros', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('certificaciones_logros', 'Certificaciones y Logros') }}
                                            {{ Form::text('certificaciones_logros', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('mapa_url', 'Mapa URL') }}
                                            {{ Form::text('mapa_url', null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_44">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('Fotos para el Banner') }}
                                            {{ Form::file('banner_inst_picture_1') }}
                                            {{ Form::file('banner_inst_picture_2') }}
                                            {{ Form::file('banner_inst_picture_3') }}
                                            <p class="help-block">Las imágenes deben ser de tamaño 1141x351 y 500K.</p>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Fotos para la Galería') }}
                                            {{ Form::file('institution_picture_1') }}
                                            {{ Form::file('institution_picture_2') }}
                                            {{ Form::file('institution_picture_3') }}
                                            {{ Form::file('institution_picture_4') }}
                                            {{ Form::file('institution_picture_5') }}
                                            {{ Form::file('institution_picture_6') }}
                                            <p class="help-block">Las imágenes deben ser de tamaño 410x180 y 500K.</p>
                                        </div>
                                    </div>
                                </div>
                                @if(auth()->user()->isAdmin())
                                    <div class="tab-pane" id="tab_55">
                                        <div class="col-md-6 col-md-offset-0">
                                            @if(auth()->user()->isAdmin())
                                                <div class="form-group">
                                                    {{ Form::label('plan', 'Plan') }}
                                                    {{ Form::select('plan', ['3B' => 'Básico', '2P' => 'Platinum', '1G' => 'Gold'], $pregrade->plan, ['class' => 'form-control select2']) }}
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
                    <div class="box-footer">
                        {{ trans('adminlte_lang::message.logged') }}. ExpoEducar 2017.
                    </div>
                    <!-- /.box-footer -->
                </div>
                {!! Form::submit('Actualizar Registro', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
                <!-- /.box -->
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
@endsection