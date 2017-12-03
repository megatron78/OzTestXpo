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
    <section id="eventos" name="eventos">
        <!-- Modal -->
        @include('vendor.adminlte.layouts.partials.modalmeinteresa')
        <div style="width: 100%;" class="container">
            <?php $countPagado = 0; ?>
            <?php $countFree = 0; ?>
            <br>
            @foreach($eventos as $evento)
                @if($evento->plan === "1G" || $evento->plan === "2P")
                    @if($countPagado === 0)
                        <div class="row centered">
                    @endif
                            <div class="col-md-4" onmouseleave="if($('#collapse{{ $evento->id }}').attr('aria-expanded') === 'true'){ $('#collapse{{ $evento->id }}').collapse('toggle');}">
                                <!-- Widget: user widget style 1 -->
                                <div class="box box-widget widget-user">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="widget-user-header bg-black"
                                        @if(!empty($evento->institution_bg_picture))
                                            style="background: url('{{ asset($evento->institution_bg_picture) }}') center center no-repeat;">
                                        @else
                                            style="background: url('{{ asset('/img/default_image.png') }}') center center no-repeat;">
                                        @endif
                                    </div>

                                    <div style="padding: 0px;height: 121px" class="box-footer">
                                        <ul class="event-list">
                                            <li>
                                                <time datetime={{ $evento->fecha_evento }}>
                                                    <span class="day">{{ $evento->dia_evento }}</span>
                                                    <span class="month">{{ $evento->mes_evento }}</span>
                                                    <span class="year">{{ $evento->year_evento }}</span>
                                                    <span class="time">{{ $evento->hora_evento }}</span>
                                                </time>
                                                <div class="info">
                                                    <h2 class="title">{{ str_limit($evento->nombre, 17) }}</h2>
                                                    <p style="font-size: 14px" class="desc">{{ str_limit($evento->informacion, 45) }}</p>
                                                    <ul>
                                                        <li style="width:32%;">
                                                            <a style="color: #0073B7;" href="{{ $evento->web }}" target="_blank"><span class="fa fa-info text-black"></span>
                                                                Ver más</a>
                                                        </li>
                                                        <li style="color: #0073B7; width:32%;"><span class="fa fa-money text-black"></span> {{ $evento->costo }}</li>
                                                        <li style="width:32%;">
                                                            <a style="color: #0073B7;" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $evento->id }}">
                                                                <span class="fa fa-globe text-black"></span>
                                                                Contactos...
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="social">
                                                    <ul>
                                                        <li class="facebook" style="width:33%;"><a href="{{ $evento->facebook }}" target="_blank"><span
                                                                        class="fa fa-facebook"></span></a></li>
                                                        <li class="twitter" style="width:34%;"><a href="{{ $evento->twitter }}" target="_blank"><span
                                                                        class="fa fa-twitter"></span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="collapse{{ $evento->id }}" class="panel-collapse collapse">
                                        <div class="box-body">
                                            <i class="fa  fa-map margin-r-5"></i> {{ $evento->direccion }}<br>
                                            <i class="fa fa-phone margin-r-5"></i> {{ $evento->telefono }} <br>
                                            <i class="fa fa-envelope margin-r-5"></i> {{ $evento->email }}
                                        </div>
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
                                <div class="col-md-4" onmouseleave="if($('#collapse{{ $evento->id }}').attr('aria-expanded') === 'true'){ $('#collapse{{ $evento->id }}').collapse('toggle');}">
                                    <!-- Widget: user widget style 1 -->
                                    <div class="box box-widget widget-user">
                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                        {{--<div class="widget-user-header bg-black"
                                             @if(!empty($evento->institution_bg_picture))
                                             style="background: url('{{ asset($evento->institution_bg_picture) }}') center center;">
                                            @else
                                                style="background: url('{{ asset('/img/ucla_campus_superior_destacado.jpg') }}') center center;">
                                            @endif
                                        </div>--}}
                                        <div style="padding: 0px;height: 121px" class="box-footer">
                                            <ul class="event-list">
                                                <li>
                                                    <time datetime="2014-07-20 0000">
                                                        <span class="day">{{ $evento->dia_evento }}</span>
                                                        <span class="month">{{ $evento->mes_evento }}</span>
                                                        <span class="year">{{ $evento->year_evento }}</span>
                                                        <span class="time">{{ $evento->hora_evento }}</span>
                                                    </time>
                                                    <div class="info">
                                                        <h2 class="title">{{ str_limit($evento->nombre, 17) }}</h2>
                                                        <p style="font-size: 14px" class="desc">{{ str_limit($evento->informacion, 45) }}</p>
                                                        <ul>
                                                            <li style="width:32%;">
                                                                {{--<a style="color: #0073B7;" href="{{ $evento->web }}" target="_blank"><span class="fa fa-info text-black"></span>
                                                                    Ver más</a>--}}
                                                            </li>
                                                            <li style="color: #0073B7; width:32%;"><span class="fa fa-money text-black"></span> {{ $evento->costo }}</li>
                                                            <li style="width:32%;">
                                                                <a style="color: #0073B7;" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $evento->id }}">
                                                                    <span class="fa fa-globe text-black"></span>
                                                                    Contactos...
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="social">
                                                        <ul>
                                                            <li class="facebook" style="width:33%;"><a href="{{ $evento->facebook }}" target="_blank"><span
                                                                            class="fa fa-facebook"></span></a></li>
                                                            <li class="twitter" style="width:34%;"><a href="{{ $evento->twitter }}" target="_blank"><span
                                                                            class="fa fa-twitter"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="collapse{{ $evento->id }}" class="panel-collapse collapse">
                                            <div class="box-body">
                                                <i class="fa  fa-map margin-r-5"></i> {{ $evento->direccion }}<br>
                                                <i class="fa fa-phone margin-r-5"></i> {{ $evento->telefono }} <br>
                                                <i class="fa fa-envelope margin-r-5"></i> {{ $evento->email }}
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.widget-user -->
                                </div>
                        <?php $countFree += 1; ?>
                @endif
            @endforeach
                    </div>
            <div class="row">
                {{ $eventos->render() }}
            </div>
            <br>
            <hr>
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
    $(function () {
        /* BOOTSTRAP SLIDER */
        $('.slider').slider();

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
</script>
</body>
</html>
