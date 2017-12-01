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
                            {!! Form::submit('Actualizar Información', ['class' => 'btn btn-success']) !!}
                            <br>
                            <br>
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
                                            {{ Form::label('nombre', 'Nombre de la Institución  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::text('nombre', null, ['class' => 'form-control', 'PlaceHolder' => 'Nombre de la Institución']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('nombre', 'Nombre Corto  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::text('nombre_corto', null, ['class' => 'form-control', 'PlaceHolder' => 'Nombre Corto de la Institución']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('tipo', 'Tipo  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::select('tipo', ['Universidad' => 'Universidad', 'Instituto' => 'Instituto', 'Academia' => 'Academia'], $pregrade->tipo, ['class' => 'form-control select2']) }}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('palabras_clave', 'Palabras Clave', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('palabras_clave', null, ['class' => 'form-control', 'PlaceHolder' => 'Máximo 4000 caracteres separados por espacio']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('telefono', 'Teléfono  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::text('telefono', null, ['class' => 'form-control', 'PlaceHolder' => 'Teléfono de Contacto']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('celular', 'WhatsApp', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('celular', null, ['class' => 'form-control', 'PlaceHolder' => 'WhatsApp de Contacto']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('email', 'Email  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::text('email', null, ['class' => 'form-control', 'PlaceHolder' => 'Email de contacto']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('email_adicional', 'Email Adicional', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('email_adicional', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('pregrade_bg_picture','Foto de fondo', [ 'class' => 'text text-bold' ]) }}
                                            @if(!empty($pregrade->pregrade_bg_picture))
                                                <br>
                                                {{--Actual: {{ explode('/',$pregrade->pregrade_bg_picture)[3]}}--}}
                                                <img src="{{ $pregrade->institution_picture_1 }}" alt="Banner 1" width="40%" height="40%">
                                            @endif
                                            {{ Form::file('pregrade_bg_picture', ['onchange' => 'validateBgPicturePregrade()']) }}
                                            <p class="help-block">Las imágenes deben ser de tamaño 410x180 o múltiplo y máximo 500K, formatos: jpeg, bmp, png..</p>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('nombre_autoridad', 'Rector o Director', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('nombre_autoridad', null, ['class' => 'form-control', 'PlaceHolder' => 'Nombre del rector, Director o Autoridad Superior']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('province_id', 'Provincia  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::select('province_id', $provinces->pluck('name','id')->all(), $pregrade->province_id, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('city_id', 'Ciudad  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::select('city_id', $cities->pluck('name','id')->all(), $pregrade->city_id, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('direccion', 'Dirección  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                            {{ Form::text('direccion', null, ['class' => 'form-control', 'PlaceHolder' => 'Dirección del Establecimiento']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_22">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('fiscal', 'Fiscal', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('fiscal',0)}}
                                            {{ Form::checkbox('fiscal', $pregrade->fiscal, $pregrade->fiscal, [ 'class' => 'chkclass4', 'onclick' => 'SetSel4(this)' ]) }}
                                            &nbsp;&nbsp;
                                            {{ Form::label('privado', 'Privado', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('privado',0)}}
                                            {{ Form::checkbox('privado', $pregrade->privado, $pregrade->privado, [ 'class' => 'chkclass4', 'onclick' => 'SetSel4(this)' ]) }}
                                            &nbsp;&nbsp;
                                            {{ Form::label('fiscomisional', 'Fiscomisional', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('fiscomisional',0)}}
                                            {{ Form::checkbox('fiscomisional', $pregrade->fiscomisional, $pregrade->fiscomisional, [ 'class' => 'chkclass4', 'onclick' => 'SetSel4(this)' ]) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('presencial', 'Presencial', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('presencial',0)}}
                                            {{ Form::checkbox('presencial') }}
                                            &nbsp;&nbsp;
                                            {{ Form::label('semipresencial', 'Semipresencial', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('semipresencial',0)}}
                                            {{ Form::checkbox('semipresencial') }}
                                            &nbsp;&nbsp;
                                            {{ Form::label('distancia', 'Online', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('distancia',0)}}
                                            {{ Form::checkbox('distancia') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('matutino', 'Matutino', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('matutino',0)}}
                                            {{ Form::checkbox('matutino') }}
                                            &nbsp;&nbsp;
                                            {{ Form::label('vespertino', 'Vespertino', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('vespertino',0)}}
                                            {{ Form::checkbox('vespertino') }}
                                            &nbsp;&nbsp;
                                            {{ Form::label('nocturno', 'Nocturno', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('nocturno',0)}}
                                            {{ Form::checkbox('nocturno') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('trayectoria', 'Trayectoria', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('trayectoria', null, ['class' => 'form-control', 'PlaceHolder' => 'Los años de experiencia como institución']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('categoria', 'Categoría', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('categoria', null, ['class' => 'form-control']) }}
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
                                        <div class="form-group">
                                            {{ Form::label('linkedin', 'Linkedin', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('linkedin', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('descripcion', 'Descripcion', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('descripcion', null, ['class' => 'form-control', 'PlaceHolder' => 'Describa a su institución, por ejemplo sus valores, principios, etc.']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_33">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('carreras_corto', 'Texto Corto Visual', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('carreras_corto', null, ['class' => 'form-control', 'PlaceHolder' => 'El que aparecerá en la cuadro de inicio']) }}
                                        </div>
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Carreras y Facultades
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
                                                {{ Form::textArea('carreras', $pregrade->carreras, ['class' => 'textarea']) }}
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            {{ Form::label('area_total', 'Área Total en m2', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('area_total', $pregrade->area_total, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('area_deportiva', 'Área Canchas Deportivas en m2', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('area_deportiva', $pregrade->area_deportiva, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('area_espacios_verdes', 'Área Espacios Verdes en m2', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('area_espacios_verdes', $pregrade->area_espacios_verdes, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('area_piscina', 'Área Piscina en m2', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('area_piscina', $pregrade->area_piscina, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('seguridad_privada', 'Seguridad Privada', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('seguridad_privada',0)}}
                                            {{ Form::checkbox('seguridad_privada') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('wifi_interior', 'Wifi Interior', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('wifi_interior',0)}}
                                            {{ Form::checkbox('wifi_interior') }}
                                            {{--{{ Form::label('wifi_exterior', 'Wifi Exterior') }}--}}
                                            {{ Form::hidden('wifi_exterior',0)}}
                                            {{--{{ Form::checkbox('wifi_exterior') }}--}}
                                            {{ Form::label('wifi_otros', 'Wifi Otros') }}
                                            {{ Form::text('wifi_otros', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('canchas_indoor', 'Canchas de Indoor', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('canchas_indoor', $pregrade->canchas_indoor, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('canchas_futbol', 'Canchas de Fútbol', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('canchas_futbol', $pregrade->canchas_futbol, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('canchas_basket', 'Canchas de Básquet', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('canchas_basket', $pregrade->canchas_basket, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('canchas_tenis', 'Canchas de Tenis', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('canchas_tenis', $pregrade->canchas_tenis, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('mesas_tenis', 'Mesas de Tenis', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::number('mesas_tenis', $pregrade->mesas_tenis, ['class' => 'form-control', 'min' => '0']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('pista_atletica', 'Pista Atlética', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('pista_atletica',0)}}
                                            {{ Form::checkbox('pista_atletica') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('teatro', 'Teatro', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('teatro',0)}}
                                            {{ Form::checkbox('teatro') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('gimnasio', 'Gimnasio', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::hidden('gimnasio',0)}}
                                            {{ Form::checkbox('gimnasio') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('otros', 'Otras Áreas en m2', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::textArea('otros', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Certificaciones y Logros
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
                                                {{ Form::textArea('certificaciones_logros', null, ['class' => 'textarea']) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('mapa_url', 'Mapa URL', [ 'class' => 'text text-bold' ]) }}
                                            {{ Form::text('mapa_url', null, ['class' => 'form-control', 'PlaceHolder' => 'Pegue aquí el código del mapa compartido de google map']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_44">
                                    <div class="col-md-6 col-md-offset-0">
                                        <div class="form-group">
                                            {{ Form::label('Fotos para el Banner', null, [ 'class' => 'text text-bold' ]) }}
                                            @if(!empty($pregrade->banner_inst_picture_1))
                                                <br>
                                                Actual: {{ explode('/',$pregrade->banner_inst_picture_1)[3]}}
                                                <img src="{{ $pregrade->banner_inst_picture_1 }}" alt="Banner 1" width="40%" height="40%">
                                            @endif
                                            {{ Form::file('banner_inst_picture_1', ['onchange' => 'validateBannerFiles()']) }}
                                            @if(!empty($pregrade->banner_inst_picture_2))
                                                <br>
                                                Actual: {{ explode('/',$pregrade->banner_inst_picture_2)[3]}}
                                                <img src="{{ $pregrade->banner_inst_picture_2 }}" alt="Banner 1" width="40%" height="40%">
                                            @endif
                                            {{ Form::file('banner_inst_picture_2', ['onchange' => 'validateBannerFiles()']) }}
                                            @if(!empty($pregrade->banner_inst_picture_3))
                                                <br>
                                                Actual: {{ explode('/',$pregrade->banner_inst_picture_3)[3]}}
                                                <img src="{{ $pregrade->banner_inst_picture_3 }}" alt="Banner 1" width="40%" height="40%">
                                            @endif
                                            {{ Form::file('banner_inst_picture_3', ['onchange' => 'validateBannerFiles()']) }}
                                            <p class="help-block">Las imágenes deben ser de tamaño 1141x351 y máximo 500K.</p>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Fotos para la Galería', null, [ 'class' => 'text text-bold' ]) }}
                                            @if(!empty($pregrade->institution_picture_1))
                                                <br>
                                                {{--Actual: {{ explode('/',$pregrade->institution_picture_1)[3]}}--}}
                                                <img src="{{ $pregrade->institution_picture_1 }}" alt="Banner 1" width="40%" height="40%">
                                            @endif
                                            {{ Form::file('institution_picture_1', ['onchange' => 'validateGalleryFiles()']) }}
                                            @if(!empty($pregrade->institution_picture_2))
                                                <br>
                                                {{--Actual: {{ explode('/',$pregrade->institution_picture_2)[3]}}--}}
                                                <img src="{{ $pregrade->institution_picture_2 }}" alt="Banner 1" width="40%" height="40%">
                                            @endif
                                            {{ Form::file('institution_picture_2', ['onchange' => 'validateGalleryFiles()']) }}
                                            @if(!empty($pregrade->institution_picture_3))
                                                <br>
                                                {{--Actual: {{ explode('/',$pregrade->institution_picture_3)[3]}}--}}
                                                <img src="{{ $pregrade->institution_picture_3 }}" alt="Banner 1" width="40%" height="40%">
                                            @endif
                                            {{ Form::file('institution_picture_3', ['onchange' => 'validateGalleryFiles()']) }}
                                            @if(!empty($pregrade->institution_picture_4))
                                                <br>
                                                {{--Actual: {{ explode('/',$pregrade->institution_picture_4)[3]}}--}}
                                                <img src="{{ $pregrade->institution_picture_4 }}" alt="Banner 1" width="40%" height="40%">
                                            @endif
                                            {{ Form::file('institution_picture_4', ['onchange' => 'validateGalleryFiles()']) }}
                                            @if(!empty($pregrade->institution_picture_5))
                                                <br>
                                                {{--Actual: {{ explode('/',$pregrade->institution_picture_5)[3]}}--}}
                                                <img src="{{ $pregrade->institution_picture_5 }}" alt="Banner 1" width="40%" height="40%">
                                            @endif
                                            {{ Form::file('institution_picture_5', ['onchange' => 'validateGalleryFiles()']) }}
                                            @if(!empty($pregrade->institution_picture_6))
                                                <br>
                                                {{--Actual: {{ explode('/',$pregrade->institution_picture_6)[3]}}--}}
                                                <img src="{{ $pregrade->institution_picture_6 }}" alt="Banner 1" width="40%" height="40%">
                                            @endif
                                            {{ Form::file('institution_picture_6', ['onchange' => 'validateGalleryFiles()']) }}
                                            <p class="help-block">Las imágenes deben ser de tamaño 410x180 o múltiplo y máximo 500K, formatos: jpeg, bmp, png..</p>
                                        </div>
                                    </div>
                                </div>
                                @if(auth()->user()->isAdmin())
                                    <div class="tab-pane" id="tab_55">
                                        <div class="col-md-6 col-md-offset-0">
                                            @if(auth()->user()->isAdmin())
                                                <div class="form-group">
                                                    {{ Form::label('user_id', 'Usuario  ', [ 'class' => 'text text-bold' ]) }}&nbsp;{{ Form::label('tag', '*', [ 'class' => 'text text-bold text-red' ]) }}
                                                    {{ Form::select('user_id', $users->pluck('name','id')->all(), $pregrade->user_id, ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('plan', 'Plan', [ 'class' => 'text text-bold' ]) }}
                                                    {{ Form::select('plan', ['3B' => 'Básico', '2P' => 'Platinum', '1G' => 'Gold'], $pregrade->plan, ['class' => 'form-control select2']) }}
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
                                                    {{ Form::date('plan_desde', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('plan_hasta', 'Plan Hasta', [ 'class' => 'text text-bold' ]) }}
                                                    {{ Form::date('plan_hasta', null, ['class' => 'form-control']) }}
                                                </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--<div class="box-footer">
                        {{ trans('adminlte_lang::message.logged') }}. ExpoEducar 2017.
                    </div>--}}
                    <!-- /.box-footer -->
                    {!! Form::submit('Actualizar Información', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
@endsection