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
    <section class="content" id="posgrado" name="posgrado">
        <!-- Modal -->
        @include('vendor.adminlte.layouts.partials.modalmeinteresa')

        <div class="row centered">
            <div class="col-lg-12 col-lg-offset-0">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img style="width: 100%;" src="{{ asset('/img/posgrado01.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img style="width: 100%;" src="{{ asset('/img/posgrado02.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img style="width: 100%;" src="{{ asset('/img/posgrado03.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 100%" class="container">
            <br>
            <div class="row centered">
                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div style="padding: 1px" class="widget-user-header bg-blue-active">
                            <!-- /.widget-user-image -->
                            <h2 style="color: white">Posgrado en Ingeniería en Computación</h2>
                            <h4 style="color: white;margin-left: 0px" class="widget-user-desc">Universidad Nacional Autónoma de México</h4>
                        </div>
                        <div class="box-footer no-padding">
                            <div style="font-size: 16px" class="description-block">
                                El objetivo del Posgrado en Ciencia e Ingeniería de la Computación es formar estudiantes
                                que posean bases sólidas de computación y de su campo de conocimiento.
                                <br>
                                <br>
                                <br>
                            </div>
                            <hr class="bg-blue-active">
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-clock text-blue"></i> 4 Semestres</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <span style="font-size: 18px;" class="description-text"><i style="font-size: 40px" class="ion ion-android-calendar text-blue"></i> 2017-08-11</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-social-usd text-blue"></i> 16.000</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-ios-people-outline text-blue"></i> Presencial</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>

                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div style="padding: 1px" class="widget-user-header bg-blue-active">
                            <!-- /.widget-user-image -->
                            <h2 style="color: white">Posgrado en Ingeniería en Computación</h2>
                            <h4 style="color: white;margin-left: 0px" class="widget-user-desc">Universidad Nacional Autónoma de México</h4>
                        </div>
                        <div class="box-footer no-padding">
                            <div style="font-size: 16px" class="description-block">
                                El objetivo del Posgrado en Ciencia e Ingeniería de la Computación es formar estudiantes
                                que posean bases sólidas de computación y de su campo de conocimiento.
                                <br>
                                <br>
                                <br>
                            </div>
                            <hr class="bg-blue-active">
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-clock text-blue"></i> 4 Semestres</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <span style="font-size: 18px;" class="description-text"><i style="font-size: 40px" class="ion ion-android-calendar text-blue"></i> 2017-08-11</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-social-usd text-blue"></i> 16.000</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-ios-people-outline text-blue"></i> Presencial</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>

                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div style="padding: 1px;" class="widget-user-header bg-blue-active">
                            <!-- /.widget-user-image -->
                            <h2 style="color: white">Posgrado en Ingeniería en Computación</h2>
                            <h4 style="color: white;margin-left: 0px" class="widget-user-desc">Universidad Nacional Autónoma de México</h4>
                        </div>
                        <div class="box-footer no-padding">
                            <div style="font-size: 16px" class="description-block">
                                El objetivo del Posgrado en Ciencia e Ingeniería de la Computación es formar estudiantes
                                que posean bases sólidas de computación y de su campo de conocimiento.
                                <br>
                                <br>
                                <br>
                            </div>
                            <hr class="bg-blue-active">
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-clock text-blue"></i> 4 Semestres</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <span style="font-size: 18px;" class="description-text"><i style="font-size: 40px" class="ion ion-android-calendar text-blue"></i> 2017-08-11</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-social-usd text-blue"></i> 16.000</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="description-block pull-left">
                                    <span style="font-size: 18px" class="description-text"><i style="font-size: 40px" class="ion ion-ios-people-outline text-blue"></i> Presencial</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
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
<script src="{{ url (mix('/js/app-landing.js')) }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
