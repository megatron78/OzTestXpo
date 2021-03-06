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
    <section class="content" id="cursoseminario" name="cursoseminario">
        <!-- Modal -->
        @include('vendor.adminlte.layouts.partials.modalmeinteresa')
        <div style="width: 100%" class="container">
            <!-- Search panel -->
            @include('vendor.adminlte.layouts.partials.searchcursoseminario')

            @if(Session::has('flash_message'))
                <div class="alert alert-warning">
                    {{ Session::get('flash_message') }}
                </div>
            @endif

            <?php $countPagado = 0; ?>
            <?php $countFree = 0; ?>
            @foreach($cursoseminarios as $cursoseminario)
                @if($cursoseminario->plan === "1G" || $cursoseminario->plan === "2P")
                    @if($countPagado === 0)
                        <div class="row">
                            @endif
                            {{-- Gold y Premium --}}
                            <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div style="padding: 1px" class="widget-user-header bg-blue-active">
                            <!-- /.widget-user-image -->
                            {{--<p style="line-height: 1.5em; height: 3em; overflow: hidden; text-overflow: ellipsis; width: 100%;
                                    display: block; display: -webkit-box; font-size: 1.5em; margin-top: 0.83em;
                                    margin-bottom: 0.83em; margin-left: 0; margin-right: 0;">
                                {{ $cursoseminario->nombre }}
                                --}}{{--<h2 style="color: white">{{ str_limit($cursoseminario->nombre, $limit=200, $end="...") }}</h2>--}}{{--
                            </p>--}}
                            <a style="color: white" href="{{ $cursoseminario->url }}" target="_blank">
                                <p style="overflow: hidden; height: 2.3em; margin-left: 0px" class="widget-user-username">
                                    {{ $cursoseminario->nombre }}
                                </p>
                            </a>
                            {{--<h4 style="color: white;margin-left: 0px" class="widget-user-desc">{{ $cursoseminario->institucion }}</h4>--}}
                            <p style="line-height: 1.1; font-size: 18px; font-weight: 300; overflow:hidden; white-space: nowrap;
                            font-family: Source Sans Pro,sans-serif;">{{ $cursoseminario->institucion }}</p>
                        </div>
                        <div class="box-footer no-padding">
                            {{--<div style="min-height: 25px; max-height: 25px; font-size: 16px" class="description-block">
                                {{ str_limit($cursoseminario->objetivo, $limit=50, $end="...") }}
                            </div>--}}
                            <div class="col-sm-12 centered" style="min-height: 4.5em;">
                                <h5>{{ isset($cursoseminario->city->name) ? $cursoseminario->city->name : "ND" }} /
                                    {{ isset($cursoseminario->telefono) ? $cursoseminario->telefono : "ND" }} /
                                    {{ isset($cursoseminario->email) ? $cursoseminario->email : "ND" }}</h5>
                            </div>
                            <div style="padding: 5px;" class="col-sm-6 centered">
                                <a href="{{ $cursoseminario->url }}" target="_blank" class="btn-sm bg-navy">
                                    Más información
                                </a>
                            </div>
                            <div style="padding: 5px;" class="col-sm-6 centered">
                                <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal"
                                   data-email="{{ $cursoseminario->email }}"
                                   href="#meInteresa">
                                    Me interesa
                                </a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <hr class="bg-blue-active">
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <i style="vertical-align: middle; font-size: 30px" class="ion ion-clock text-blue"></i>&nbsp;<span style="font-size: 15px" class="description-text"> &nbsp;{{ $cursoseminario->duracion }}</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <i style="vertical-align: middle; font-size: 30px" class="ion ion-android-calendar text-blue"></i>&nbsp;<span style="font-size: 15px;" class="description-text"> &nbsp;{{ $cursoseminario->fecha_inicio }}</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <i style="vertical-align: middle; font-size: 30px" class="ion ion-social-usd text-blue"></i>&nbsp;<span style="font-size: 15px" class="description-text"> &nbsp;{{ $cursoseminario->costo }}</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <i style="vertical-align: middle; font-size: 30px" class="ion ion-ios-people-outline text-blue"></i>&nbsp;<span style="font-size: 15px" class="description-text">
                                        @if($cursoseminario->presencial)
                                            &nbsp;Presencial</span>
                                        @elseif($cursoseminario->semipresencial)
                                            &nbsp;Semipresencial</span>
                                        @elseif($cursoseminario->distancia)
                                            &nbsp;On line</span>
                                        @endif
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
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
                            <div class="row">
                        @endif
                            <div class="col-md-4">
                                <!-- Widget: user widget style 1 -->
                                <div class="box box-widget widget-user-2">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div style="padding: 1px" class="widget-user-header bg-blue-active">
                                        <!-- /.widget-user-image -->
                                        <h2 style="color: white">{{ str_limit($cursoseminario->nombre, $limit=23, $end="...") }}</h2>
                                        <h4 style="color: white;margin-left: 0px" class="widget-user-desc">{{ $cursoseminario->institucion }}</h4>
                                    </div>
                                    <div class="box-footer no-padding">
                                        {{--<div style="min-height: 25px; max-height: 25px; font-size: 16px" class="description-block">
                                            {{ str_limit($cursoseminario->objetivo, $limit=50, $end="...") }}
                                        </div>--}}
                                        <div class="col-sm-12 centered">
                                            <h5>{{ isset($cursoseminario->city->name) ? $cursoseminario->city->name : "ND" }} /
                                                {{ isset($cursoseminario->telefono) ? $cursoseminario->telefono : "ND" }} /
                                                {{ isset($cursoseminario->email) ? $cursoseminario->email : "ND" }}</h5>
                                        </div>
                                        <br>
                                        <br>
                                        <hr class="bg-blue-active">
                                        <div class="col-sm-6">
                                            <div class="description-block pull-left">
                                                <i style="vertical-align: middle; font-size: 40px" class="ion ion-clock text-blue"></i>&nbsp;<span style="font-size: 18px" class="description-text">&nbsp; {{ $cursoseminario->duracion }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="description-block pull-left">
                                                <i style="vertical-align: middle; font-size: 40px" class="ion ion-android-calendar text-blue"></i>&nbsp;<span style="font-size: 18px;" class="description-text">&nbsp; {{ $cursoseminario->fecha_inicio }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="description-block pull-left">
                                                <i style="vertical-align: middle; font-size: 40px" class="ion ion-social-usd text-blue"></i>&nbsp;<span style="font-size: 18px" class="description-text">&nbsp; {{ $cursoseminario->costo }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="description-block pull-left">
                                                <i style="vertical-align: middle; font-size: 40px" class="ion ion-ios-people-outline text-blue"></i>&nbsp;<span style="font-size: 18px" class="description-text">
                                        @if($cursoseminario->presencial)
                                                    &nbsp;Presencial</span>
                                                @elseif($cursoseminario->semipresencial)
                                                    &nbsp;Semipresencial</span>
                                                @elseif($cursoseminario->distancia)
                                                    &nbsp;On line</span>
                                                @endif
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </div>
                                <!-- /.widget-user -->
                            </div>
                        <?php $countFree += 1; ?>
                @endif
            @endforeach
                        </div>
            <div class="row">
                {{ $cursoseminarios->appends(Request::except('page'))->render() }}
            </div>
            <br>
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
        $modal.find("#email").val(email);
        $modal.find("#tipo").val("1");
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
</script>
</body>
</html>
