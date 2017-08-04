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
    <section class="content" id="univ" name="univ">
        <!-- Modal -->
        @include('vendor.adminlte.layouts.partials.modalmeinteresa')

    <!-- Banner -->
        @include('vendor.adminlte.layouts.partials.bannercategory')

        <div style="width: 100%;" class="container">
            <div class="row">
                <br>
                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-black"
                             style="background: url('{{ asset('/img/ucla_campus_superior_destacado.jpg') }}') center center;">
                        </div>

                        <div class="box-footer">
                            <h3 style="color:black" class="widget-user-username">UCLA</h3>
                            <div class="row">
                                <div class="centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Carreras</h5>
                                        <span class="description-text">Biology, Science, Physics, Computing, Administration, Mechanics,
                                        Business, Arts, Communications, Networking</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-4 centered">
                                <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal" href="#meInteresa">
                                    Me interesa
                                </a>
                            </div>
                            <div class="col-sm-4 centered">
                                <a href="#" class="btn-sm bg-navy">
                                    Más información
                                </a>
                            </div>
                            <div class="centered">
                                <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Contactos...
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <br>
                                <div class="box-body">
                                    <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                    <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                    <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                </div>
                                <div class="text-center">
                                    <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                    <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                    <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                            <!-- /.row -->
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

                        <div class="box-footer">
                            <h3 style="color:black" class="widget-user-username">UCLA</h3>
                            <div class="row">
                                <div class="centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Carreras</h5>
                                        <span class="description-text">Biology, Science, Physics, Computing, Administration, Mechanics,
                                        Business, Arts, Communications, Networking</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-4 centered">
                                <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal" href="#meInteresa">
                                    Me interesa
                                </a>
                            </div>
                            <div class="col-sm-4 centered">
                                <a href="#" class="btn-sm bg-navy">
                                    Más información
                                </a>
                            </div>
                            <div class="centered">
                                <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Contactos...
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <br>
                                <div class="box-body">
                                    <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                    <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                    <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                </div>
                                <div class="text-center">
                                    <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                    <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                    <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                            <!-- /.row -->
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

                        <div class="box-footer">
                            <h3 style="color:black" class="widget-user-username">UCLA</h3>
                            <div class="row">
                                <div class="centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Carreras</h5>
                                        <span class="description-text">Biology, Science, Physics, Computing, Administration, Mechanics,
                                        Business, Arts, Communications, Networking</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-4 centered">
                                <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal" href="#meInteresa">
                                    Me interesa
                                </a>
                            </div>
                            <div class="col-sm-4 centered">
                                <a href="#" class="btn-sm bg-navy">
                                    Más información
                                </a>
                            </div>
                            <div class="centered">
                                <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Contactos...
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <br>
                                <div class="box-body">
                                    <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                    <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                    <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                </div>
                                <div class="text-center">
                                    <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                    <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                    <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>

                    </div>
                    <!-- /.widget-user -->
                </div>
            </div>
            <div class="row centered">
                <div class="col-md-3">
                    <div class="box box-primary">
                        <div class="box-header with-border bg-gray-active">
                            <h3 class="box-title"><strong>Universidad Free</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <h5><strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong></h5>

                            <p class="text-muted">Quito, Ecuador</p>

                            <hr>

                            <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion" href="#collapseEdu01">
                                Contactos...
                            </a>
                            <div id="collapseEdu01" class="panel-collapse collapse">
                                <div class="box-body">
                                    <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                    <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                    <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-md-3">
                    <div class="box box-primary">
                        <div class="box-header with-border bg-gray-active">
                            <h3 class="box-title"><strong>Universidad Free</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <h5><strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong></h5>

                            <p class="text-muted">Quito, Ecuador</p>

                            <hr>

                            <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion" href="#collapseEdu01">
                                Contactos...
                            </a>
                            <div id="collapseEdu01" class="panel-collapse collapse">
                                <div class="box-body">
                                    <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                    <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                    <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-md-3">
                    <div class="box box-primary">
                        <div class="box-header with-border bg-gray-active">
                            <h3 class="box-title"><strong>Universidad Free</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <h5><strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong></h5>

                            <p class="text-muted">Quito, Ecuador</p>

                            <hr>

                            <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion" href="#collapseEdu01">
                                Contactos...
                            </a>
                            <div id="collapseEdu01" class="panel-collapse collapse">
                                <div class="box-body">
                                    <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                    <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                    <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-md-3">
                    <div class="box box-primary">
                        <div class="box-header with-border bg-gray-active">
                            <h3 class="box-title"><strong>Universidad Free</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <h5><strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong></h5>

                            <p class="text-muted">Quito, Ecuador</p>

                            <hr>

                            <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion" href="#collapseEdu01">
                                Contactos...
                            </a>
                            <div id="collapseEdu01" class="panel-collapse collapse">
                                <div class="box-body">
                                    <i class="fa  fa-map margin-r-5"></i> Av. Eloy Alfaro y Amazonas<br>
                                    <i class="fa fa-phone margin-r-5"></i> 0998946503 <br>
                                    <i class="fa fa-envelope margin-r-5"></i> mauriciomolina@andinanet.net
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
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
