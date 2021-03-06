<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="es">
@include('vendor.adminlte.layouts.partials.headexpoeducar');

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app" v-cloak>
    <!-- Fixed navbar -->
    @include('vendor.adminlte.layouts.partials.navbarexpoeducar')
    <!-- Banner -->
    @include('vendor.adminlte.layouts.partials.bannercategory')

    <!-- style="padding-top: 0px" -->
    <section class="content" id="egb" name="egb">
        <!-- Modal -->
        @include('vendor.adminlte.layouts.partials.modalmeinteresa')
        @include('vendor.adminlte.layouts.partials.modalcomparetable')

        <div style="width: 100%" class="container">
            <!-- Search panel -->
            @include('vendor.adminlte.layouts.partials.searchpre')

            @if(Session::has('flash_message'))
                <div class="alert alert-warning">
                    {{ Session::get('flash_message') }}
                </div>
            @endif

            {{--@each('institutionIni.nombre', $institutionIni, 'institutionIni')--}}
            <?php $countPagado = 0; ?>
            <?php $countFree = 0; ?>
            @foreach($instituciones as $institucion)
                @if($institucion->plan === "1G" || $institucion->plan === "2P")
                    @if($countPagado === 0)
                        <div class="row">
                            @endif
                            {{-- Gold y Premium --}}
                            <div class="col-md-4"
                                 onmouseleave="if($('#collapse{{ $institucion->id }}').attr('aria-expanded') === 'true'){ $('#collapse{{ $institucion->id }}').collapse('toggle');}">
                                <!-- Widget: user widget style 1 -->
                                <div class="box box-widget widget-user">
                                    <input style="transform: scale(1.5); position: absolute; bottom: 5px; right: 5px;" type="checkbox" class="checkbox"
                                           id="compare-{{ $institucion->id }}" />
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <a href="{{ $institucion->url }}" target="_blank">
                                        <div class="widget-user-header" style="padding: 0px; display: flex; margin: auto;">
                                            @if(!empty($institucion->institution_bg_picture))
                                                    <img style="max-height: 100%; max-width: 100%; margin: auto;"
                                                         src="{{ asset($institucion->institution_bg_picture) }}">
                                            @else
                                                    <img style="max-height: 100%; max-width: 100%; margin: auto;"
                                                         src="{{ asset('/img/default_image.png') }}">
                                            @endif
                                        </div>
                                    </a>

                                    <div class="box-footer" style="padding: 0px; padding-bottom: 10px; border-width: 3px; border-color: #018DB7;">
                                        <p class="box-title" style="font-size: 18px; font-weight: bold; color: #333333; background-color: #B6BBC3; overflow:hidden; white-space: nowrap;
                                        text-overflow: ellipsis;" class="widget-user-username">{{ $institucion->nombre_corto }}</p>
                                        <div class="row">
                                            <div class="col-sm-4 border-right centered" style="border-width: 2px;">
                                                <div class="description-block">
                                                    <h5 class="description-header">Educación</h5>
                                                    <span class="description-text"><i
                                                                class="fa  fa-venus-mars margin-r-5"></i>
                                                        @if($institucion->masculino)
                                                            MASCULINO</span>
                                                    @elseif($institucion->femenino)
                                                        FEMENINO</span>
                                                    @else
                                                        MIXTO</span>
                                                    @endif
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4 border-right centered" style="border-width: 2px;">
                                                <div class="description-block">
                                                    <h5 class="description-header">Niveles</h5>
                                                    <span class="description-text">
                                                    @if($institucion->preescolar)
                                                            INICIAL </span>
                                                    @endif
                                                    @if($institucion->escuela and $institucion->preescolar)
                                                         , EGB</span>
                                                    @endif
                                                    @if($institucion->escuela and !$institucion->colegio)
                                                        EGB</span>
                                                    @endif
                                                    @if($institucion->escuela and $institucion->colegio)
                                                        EGB, </span>
                                                    @endif
                                                    @if($institucion->colegio)
                                                        BGU</span>
                                                    @endif
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4 centered">
                                                <div class="description-block">
                                                    <h5 class="description-header">Ubicación</h5>
                                                    <span class="description-text">{{ str_limit(((isset($institucion->city->name) ? $institucion->city->name : "ND") .','.(isset($institucion->province->name) ? $institucion->province->name : "ND")),14) }}</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <div style="padding: 5px;" class="col-sm-4 centered">
                                            <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal"
                                               data-email="{{ $institucion->email }}"
                                               href="#meInteresa">
                                                Me interesa
                                            </a>
                                        </div>
                                        <div style="padding: 5px;" class="col-sm-4 centered">
                                            <a href="{{ $institucion->url }}" target="_blank" class="btn-sm bg-navy">
                                                Más información
                                            </a>
                                        </div>
                                        <div style="padding: 5px;" class="col-sm-4 centered">
                                            <a class="btn-sm bg-orange" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse{{ $institucion->id }}">
                                                Contactos...
                                            </a>
                                        </div>
                                        <div id="collapse{{ $institucion->id }}" class="panel-collapse collapse">
                                            <br>
                                            <div class="box-body">
                                                <i class="fa  fa-map margin-r-5"></i> {{ $institucion->direccion }}<br>
                                                <i class="fa fa-phone margin-r-5"></i> {{ $institucion->telefono }}
                                                / {{ $institucion->celular }} <br>
                                                <i class="fa fa-envelope margin-r-5"></i> {{ $institucion->email }}
                                            </div>
                                            <div class="text-center">
                                                <a href="{{ $institucion->facebook }}"
                                                   class="btn btn-social-icon btn-facebook"><i
                                                            class="fa fa-facebook"></i></a>
                                                <a href="{{ $institucion->twitter }}"
                                                   class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                                {{--<a href="{{ $institucion->instagram }}" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>--}}
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>

                                </div>
                                <!-- /.widget-user -->
                            </div>
                            <?php $countPagado += 1; ?>
                            @else
                                @if($countPagado > 0 && $countFree === 0)
                        </div>
                    @endif
                    @if($countFree === 0)
                        <div class="row centered">
                            @endif
                            <div class="col-md-3"
                                 onmouseleave="if($('#collapse{{ $institucion->id }}').attr('aria-expanded') === 'true'){ $('#collapse{{ $institucion->id }}').collapse('toggle');}">
                                <div class="box box-primary centered">
                                    <div class="box-header with-border bg-gray-active">
                                        <h3 class="box-title">
                                            <strong>{{ str_limit($institucion->nombre_corto, $limit=25, $end="...") }}</strong>
                                        </h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <h5><strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong></h5>
                                        <p class="text-muted">{{ str_limit(((isset($institucion->city->name) ? $institucion->city->name : "ND") .','.(isset($institucion->province->name) ? $institucion->province->name : "ND")),25) }}</p>

                                        <h5><strong><i class="fa fa-users margin-r-5"></i> Educación</strong></h5>

                                        <p class="text-muted">
                                            <i class="fa  fa-venus-mars margin-r-5"></i>
                                            @if($institucion->masculino)
                                                MASCULINO
                                            @elseif($institucion->femenino)
                                                FEMENINO
                                            @else
                                                MIXTO
                                            @endif
                                        </p>

                                        <h5><strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong>
                                        </h5>

                                        <p>
                                            @if($institucion->preescolar)
                                                INICIAL </span>
                                            @endif
                                            @if($institucion->escuela and $institucion->preescolar)
                                                , EGB</span>
                                            @endif
                                            @if($institucion->escuela and !$institucion->colegio)
                                                EGB</span>
                                            @endif
                                            @if($institucion->escuela and $institucion->colegio)
                                                EGB, </span>
                                            @endif
                                            @if($institucion->colegio)
                                                  BGU</span>
                                            @endif
                                        </p>

                                        <hr>

                                        <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapse{{ $institucion->id }}">
                                            Contactos...
                                        </a>
                                        <div id="collapse{{ $institucion->id }}" class="panel-collapse collapse">
                                            <div class="box-body">
                                                <i class="fa  fa-map margin-r-5"></i> {{ $institucion->direccion }}<br>
                                                <i class="fa fa-phone margin-r-5"></i> {{ $institucion->telefono }}
                                                / {{ $institucion->celular }} <br>
                                                <i class="fa fa-envelope margin-r-5"></i> {{ $institucion->email }}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <?php $countFree += 1; ?>
                            @endif
                            @endforeach
                        </div>
                        <div class="row">
                            {{ $instituciones->appends(Request::except('page'))->render() }}
                        </div>
                        <br>
        </div> <!--/ .container -->
    </section>

    <footer>
        @include('vendor.adminlte.layouts.partials.footerexpoeducar')
    </footer>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/app-landing.js') }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>

<!-- Ion Slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/js/ion.rangeSlider.js"></script>
<!-- Bootstrap slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.js"></script>
<script>
    $('#meInteresa').on('show.bs.modal', function(e) {
        var $modal = $(this);
        var email = $(e.relatedTarget).attr('data-email');
        //console.log(email);
        $modal.find("#email").val(email);
        $modal.find("#tipo").val("1");
    });

    $('.load-ajax-modal').click(function(e){
        var checked = [];
        $('input:checkbox:checked').each(function() {
            // For each checked checkbox, find comparison elements
            if($(this).attr("id").startsWith("compare-"))
                checked.push( $(this).attr("id").split("-")[1] );
        });
        if (typeof checked === 'undefined' || checked.length <= 1) {
            e.stopPropagation();
            alert('Por favor seleccione al menos dos instituciones para comparar.');
            return null;
        }
        $.ajax({
            type : 'GET',
            url : $(this).data('path')+'?params='+checked,

            success: function(result) {
                $('#compareTableModal div.modal-body').html(result);
            }
        });
    });

    $(function () {
        /* BOOTSTRAP SLIDER */
        $('.slider').slider();

        $('#advsearch_costo').on('slideStop', function(event) { alert('Al variar el rango se pueden excluir instituciones que no disponen este dato.'); });

        /* ION SLIDER */
        $("#range_1").ionRangeSlider({
            min: 0,
            max: 5000,
            from: 1000,
            to: 4000,
            type: 'double',
            step: 1,
            prefix: "$",
            prettify: false,
            hasGrid: true
        });
        $("#range_2").ionRangeSlider();

        $("#range_5").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " mm",
            prettify: false,
            hasGrid: true
        });
        $("#range_6").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            type: 'single',
            step: 1,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#range_4").ionRangeSlider({
            type: "single",
            step: 100,
            postfix: " light years",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });
        $("#range_3").ionRangeSlider({
            type: "double",
            postfix: " miles",
            step: 10000,
            from: 25000000,
            to: 35000000,
            onChange: function (obj) {
                var t = "";
                for (var prop in obj) {
                    t += prop + ": " + obj[prop] + "\r\n";
                }
                $("#result").html(t);
            },
            onLoad: function (obj) {
                //
            }
        });
    });

    $('#search_province').on('change', function (e) {
        var province_id = e.target.value;
        $('#search_city').empty();
        $('#search_sector').empty();
        $('#search_city').append('<option value="">Ciudad</option>');
        //ajax
        $.get('ajax-city?province_id='+province_id, function(data) {
            //success_data
            $.each(data, function(index, cityObj) {
                $('#search_city').append('<option value="'+cityObj.id+'">'+cityObj.name+'</option>');
            });
        });
    });

    $('#search_city').on('change', function (e) {
        var city_id = e.target.value;
        $('#search_sector').empty();
        $('#search_sector').append('<option value="">Sector</option>');
        //ajax
        $.get('ajax-sector?city_id='+city_id, function(data) {
            //success_data
            $.each(data, function(index, sectorObj) {
                $('#search_sector').append('<option value="'+sectorObj.id+'">'+sectorObj.nombre+'</option>');
            });
        });
    });
</script>
</body>
</html>
