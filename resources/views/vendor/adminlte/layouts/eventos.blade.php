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

<!-- style="padding-top: 0px" -->
    <section id="eventos" name="eventos">
        <!-- Modal -->
        @include('vendor.adminlte.layouts.partials.modalmeinteresa')

    <!-- Banner -->
        @include('vendor.adminlte.layouts.partials.bannercategory')

        <div style="width: 100%;" class="container">
            <div class="row centered">
                <br>
                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-black"
                             style="background: url('{{ asset('/img/ucla_campus_superior_destacado.jpg') }}') center center;">
                        </div>

                        <div style="padding: 0px;height: 121px" class="box-footer">
                            <ul class="event-list">
                                <li>
                                    <time datetime="2014-07-20 0000">
                                        <span class="day">26</span>
                                        <span class="month">Jun</span>
                                        <span class="year">2014</span>
                                        <span class="time">12:00 AM</span>
                                    </time>
                                    <div class="info">
                                        <h2 class="title">Megatron's birthday</h2>
                                        <p style="font-size: 14px" class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        <ul>
                                            <li style="width:32%;">
                                                <a style="color: #0073B7;" href="#website"><span class="fa fa-info text-black"></span>
                                                    Ver más</a>
                                            </li>
                                            <li style="color: #0073B7; width:32%;"><span class="fa fa-money text-black"></span> $19.99</li>
                                            <li style="width:32%;">
                                                <a style="color: #0073B7;" data-toggle="collapse" data-parent="#accordion" href="#collapseD1">
                                                    <span class="fa fa-globe text-black"></span>
                                                    Contactos...
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook" style="width:33%;"><a href="#facebook"><span
                                                            class="fa fa-facebook"></span></a></li>
                                            <li class="twitter" style="width:34%;"><a href="#twitter"><span
                                                            class="fa fa-twitter"></span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="collapseD1" class="panel-collapse collapse">
                            <div class="box-body">
                                <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                            </div>
                        </div>

                    </div>
                    <!-- /.widget-user -->
                </div>

                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-black"
                             style="background: url('{{ asset('/img/ucla_campus_superior_destacado.jpg') }}') center center;">
                        </div>

                        <div style="padding: 0px;height: 121px" class="box-footer">
                            <ul class="event-list">
                                <li>
                                    <time datetime="2014-07-20 0000">
                                        <span class="day">26</span>
                                        <span class="month">Jun</span>
                                        <span class="year">2014</span>
                                        <span class="time">12:00 AM</span>
                                    </time>
                                    <div class="info">
                                        <h2 class="title">Megatron's birthday</h2>
                                        <p style="font-size: 14px" class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        <ul>
                                            <li style="color: #0073B7; width:32%;"><span class="fa fa-money text-black"></span> $19.99</li>
                                            <li style="width:32%;">
                                                <a style="color: #0073B7;" data-toggle="collapse" data-parent="#accordion" href="#collapseG1">
                                                    <span class="fa fa-globe text-black"></span>
                                                    Contactos...
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            {{--
                                            <li class="facebook" style="width:33%;"><a href="#facebook"><span
                                                            class="fa fa-facebook"></span></a></li>
                                            <li class="twitter" style="width:34%;"><a href="#twitter"><span
                                                            class="fa fa-twitter"></span></a></li>
                                            <li class="google-plus" style="width:33%;"><a href="#google-plus"><span
                                                            class="fa fa-google-plus"></span></a></li>--}}
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="collapseG1" class="panel-collapse collapse">
                            <div class="box-body">
                                <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                            </div>
                        </div>

                    </div>
                    <!-- /.widget-user -->
                </div>
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
<script src="{{ url (mix('/js/app-landing.js')) }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
