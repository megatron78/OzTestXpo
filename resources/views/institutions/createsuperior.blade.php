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
                        <h3 class="box-title">Crear Institución Superior</h3>
                        <br>
                        <br>
                        @include('vendor.adminlte.layouts.partials.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif

                        {!! Form::open(['files' => true, 'method' => 'POST', 'route' => 'superior.store']) !!}
                            {{ Form::label('nombre', 'Nombre') }}
                            <br>
                            {{ Form::text('nombre') }}
                            <br>
                            {{ Form::label('nombre_corto', 'Nombre corto') }}
                            <br>
                            {{ Form::text('nombre_corto') }}
                            <br>
                            {{ Form::label('plan', 'Plan') }}
                            <br>
                            {{ Form::select('plan', ['3B' => 'Básico', '2P' => 'Platinum', '3G' => 'Gold'], '3B') }}
                            <br>
                            {{ Form::label('activo', 'Activo') }}
                            {{ Form::hidden('activo',0)}}
                            {{ Form::checkbox('activo', 1, true) }}
                            <br>
                            {{ Form::label('tipo', 'Tipo') }}
                            <br>
                            {{ Form::select('tipo', ['Universidad' => 'Universidad', 'Instituto' => 'Instituto', 'Academia' => 'Academia'], 'Universidad') }}
                            <br>
                            {{ Form::label('categoria', 'Categoría') }}
                            <br>
                            {{ Form::text('categoria') }}
                            <br>
                            {{ Form::label('palabras_clave', 'Palabras Clave') }}
                            <br>
                            {{ Form::text('palabras_clave') }}
                            <br>
                            {{ Form::label('pregrade_bg_picture','Foto de fondo') }}
                            {{ Form::file('pregrade_bg_picture') }}
                            <br>
                            {{ Form::label('trayectoria', 'Trayectoria') }}
                            <br>
                            {{ Form::text('trayectoria') }}
                            <br>
                            {{ Form::label('nombre_autoridad', 'Nombre Autoridad') }}
                            <br>
                            {{ Form::text('nombre_autoridad') }}
                            <br>
                            {{ Form::label('direccion', 'Dirección') }}
                            <br>
                            {{ Form::text('direccion') }}
                            <br>
                            {{ Form::label('province_id', 'Provincia') }}
                            {{ Form::select('province_id', [null=>'...'] + $provinces->pluck('name','id')->all(), ['class' => 'form-control']) }}
                            <br>
                            {{ Form::label('city_id', 'Ciudad') }}
                            {{ Form::select('city_id', [null=>'...'], ['class' => 'form-control']) }}
                            <br>
                            {{ Form::label('fiscal', 'Fiscal') }}
                            {{ Form::hidden('fiscal',0)}}
                            {{ Form::checkbox('fiscal') }}
                            {{ Form::label('privado', 'Privado') }}
                            {{ Form::hidden('privado',0)}}
                            {{ Form::checkbox('privado') }}
                            {{ Form::label('fiscomisional', 'Fiscomisional') }}
                            {{ Form::hidden('fiscomisional',0)}}
                            {{ Form::checkbox('fiscomisional') }}
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
                            {{ Form::label('email_adicional', 'Email Adicional') }}
                            <br>
                            {{ Form::text('email_adicional') }}
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
                            {{ Form::label('linkedin', 'Linkedin') }}
                            <br>
                            {{ Form::text('linkedin') }}
                            <br>
                            {{ Form::label('descripcion', 'Descripcion') }}
                            <br>
                            {{ Form::text('descripcion') }}
                            <br>
                            {{ Form::label('presencial', 'Presencial') }}
                            {{ Form::hidden('presencial',0)}}
                            {{ Form::checkbox('presencial') }}
                            {{ Form::label('semipresencial', 'Semipresencial') }}
                            {{ Form::hidden('semipresencial',0)}}
                            {{ Form::checkbox('semipresencial') }}
                            {{ Form::label('distancia', 'Distancia') }}
                            {{ Form::hidden('distancia',0)}}
                            {{ Form::checkbox('distancia') }}
                            <br>
                            {{ Form::label('matutino', 'Matutino') }}
                            {{ Form::hidden('matutino',0)}}
                            {{ Form::checkbox('matutino') }}
                            {{ Form::label('vespertino', 'Vespertino') }}
                            {{ Form::hidden('vespertino',0)}}
                            {{ Form::checkbox('vespertino') }}
                            {{ Form::label('nocturno', 'Nocturno') }}
                            {{ Form::hidden('nocturno',0)}}
                            {{ Form::checkbox('nocturno') }}
                            <br>
                            {{ Form::label('carreras_corto', 'Carreras (lista separada por comas)') }}
                            <br>
                            {{ Form::text('carreras_corto') }}
                            <br>
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
                                    {{ Form::textArea('carreras', null, ['class' => 'textarea']) }}
                                </div>
                            </div>
                            <br>
                            {{ Form::label('area_total', 'Área Total') }}
                            <br>
                            {{ Form::number('area_total') }}
                            <br>
                            {{ Form::label('area_deportiva', 'Área Canchas Deportivas') }}
                            <br>
                            {{ Form::number('area_deportiva') }}
                            <br>
                            {{ Form::label('area_espacios_verdes', 'Área Espacios Verdes') }}
                            <br>
                            {{ Form::number('area_espacios_verdes') }}
                            <br>
                            {{ Form::label('area_piscina', 'Área Piscina') }}
                            <br>
                            {{ Form::number('area_piscina') }}
                            <br>
                            {{ Form::label('seguridad_privada', 'Seguridad Privada') }}
                            {{ Form::hidden('seguridad_privada',0)}}
                            {{ Form::checkbox('seguridad_privada') }}
                            {{ Form::label('wifi_interior', 'Wifi Interior') }}
                            {{ Form::hidden('wifi_interior',0)}}
                            {{ Form::checkbox('wifi_interior') }}
                            {{ Form::label('wifi_exterior', 'Wifi Exterior') }}
                            {{ Form::hidden('wifi_exterior',0)}}
                            {{ Form::checkbox('wifi_exterior') }}
                            <br>
                            {{ Form::label('wifi_otros', 'Wifi Otros') }}
                            <br>
                            {{ Form::text('wifi_otros') }}
                            <br>
                            {{ Form::label('capacidad_restaurantes', 'Capacidad Restaurantes') }}
                            <br>
                            {{ Form::number('capacidad_restaurantes') }}
                            <br>
                            {{ Form::label('canchas_indoor', 'Canchas de Indoor') }}
                            <br>
                            {{ Form::number('canchas_indoor') }}
                            <br>
                            {{ Form::label('canchas_futbol', 'Canchas de Fútbol') }}
                            <br>
                            {{ Form::number('canchas_futbol') }}
                            <br>
                            {{ Form::label('canchas_basket', 'Canchas de Básquet') }}
                            <br>
                            {{ Form::number('canchas_basket') }}
                            <br>
                            {{ Form::label('canchas_tenis', 'Canchas de Tenis') }}
                            <br>
                            {{ Form::number('canchas_tenis') }}
                            <br>
                            {{ Form::label('mesas_tenis', 'Mesas de Tenis') }}
                            <br>
                            {{ Form::number('mesas_tenis') }}
                            <br>
                            {{ Form::label('pista_atletica', 'Pista Atlética') }}
                            {{ Form::hidden('pista_atletica',0)}}
                            {{ Form::checkbox('pista_atletica') }}
                            <br>
                            {{ Form::label('teatro', 'Teatro') }}
                            {{ Form::hidden('teatro',0)}}
                            {{ Form::checkbox('teatro') }}
                            {{ Form::label('gimnasio', 'Gimnasio') }}
                            {{ Form::hidden('gimnasio',0)}}
                            {{ Form::checkbox('gimnasio') }}
                            <br>
                            {{ Form::label('otros', 'Otras Áreas') }}
                            <br>
                            {{ Form::textArea('otros') }}
                            <br>
                            {{ Form::label('certificaciones_logros', 'Certificaciones y Logros') }}
                            <br>
                            {{ Form::text('certificaciones_logros') }}
                            <br>
                            {{ Form::label('mapa_url', 'Mapa URL') }}
                            <br>
                            {{ Form::text('mapa_url') }}
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
                            {{ Form::date('plan_desde', \Carbon\Carbon::now()) }}
                            <br>
                            {{ Form::label('plan_hasta', 'Plan Hasta') }}
                            <br>
                            {{ Form::date('plan_hasta') }}
                            <br>
                            <br>
                            {{ Form::label('Fotos para el Banner') }}
                            <br>
                            {{ Form::file('banner_inst_picture_1') }}
                            {{ Form::file('banner_inst_picture_2') }}
                            {{ Form::file('banner_inst_picture_3') }}
                            <br>
                            {{ Form::label('Fotos para la Galería') }}
                            <br>
                            {{ Form::file('institution_picture_1') }}
                            {{ Form::file('institution_picture_2') }}
                            {{ Form::file('institution_picture_3') }}
                            {{ Form::file('institution_picture_4') }}
                            {{ Form::file('institution_picture_5') }}
                            {{ Form::file('institution_picture_6') }}
                            <br>
                            <br>
                            <br>
                            {!! Form::submit('Crear Registro', ['class' => 'btn btn-primary']) !!}
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
