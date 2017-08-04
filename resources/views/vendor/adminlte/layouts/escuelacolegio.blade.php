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
    <section class="content" id="egb" name="egb">
        <!-- Modal -->
        @include('vendor.adminlte.layouts.partials.modalmeinteresa')

        <!-- INTRO WRAP -->
        <!-- Banner -->
        @include('vendor.adminlte.layouts.partials.bannercategory')

        <div style="width: 100%" class="container">
            <br>
            <div class="row">
                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-black"
                             style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                            <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                        </div>

                        <div class="box-footer">
                            <h3 style="color:black" class="widget-user-username">Saint Charles High School</h3>
                            <div class="row">
                                <div class="col-sm-4 border-right centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Educación</h5>
                                        <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Niveles</h5>
                                        <span class="description-text">Inicial, EGB, BGU</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Ubicación</h5>
                                        <span class="description-text">Quito, Ecuador</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="col-sm-4 centered">
                                <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal"
                                   href="#meInteresa">
                                    Me interesa
                                </a>
                            </div>
                            <div class="col-sm-4 centered">
                                <a href="#" class="btn-sm bg-navy">
                                    Más información
                                </a>
                            </div>
                            <div class="centered">
                                <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne">
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
                             style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                            <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                        </div>

                        <div class="box-footer">
                            <h3 style="color:black" class="widget-user-username">Saint Charles High School</h3>
                            <div class="row">
                                <div class="col-sm-4 border-right centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Educación</h5>
                                        <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Niveles</h5>
                                        <span class="description-text">Inicial, EGB, BGU</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Ubicación</h5>
                                        <span class="description-text">Quito, Ecuador</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="col-sm-4 centered">
                                <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal"
                                   href="#meInteresa">
                                    Me interesa
                                </a>
                            </div>
                            <div class="col-sm-4 centered">
                                <a href="#" class="btn-sm bg-navy">
                                    Más información
                                </a>
                            </div>
                            <div class="centered">
                                <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne">
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
                             style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                            <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                        </div>

                        <div class="box-footer">
                            <h3 style="color:black" class="widget-user-username">Saint Charles High School</h3>
                            <div class="row">
                                <div class="col-sm-4 border-right centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Educación</h5>
                                        <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Niveles</h5>
                                        <span class="description-text">Inicial, EGB, BGU</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Ubicación</h5>
                                        <span class="description-text">Quito, Ecuador</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="col-sm-4 centered">
                                <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal"
                                   href="#meInteresa">
                                    Me interesa
                                </a>
                            </div>
                            <div class="col-sm-4 centered">
                                <a href="#" class="btn-sm bg-navy">
                                    Más información
                                </a>
                            </div>
                            <div class="centered">
                                <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne">
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
                             style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                            <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                        </div>

                        <div class="box-footer">
                            <h3 style="color:black" class="widget-user-username">Saint Charles High School</h3>
                            <div class="row">
                                <div class="col-sm-4 border-right centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Educación</h5>
                                        <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Niveles</h5>
                                        <span class="description-text">Inicial, EGB, BGU</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Ubicación</h5>
                                        <span class="description-text">Quito, Ecuador</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="col-sm-4 centered">
                                <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal"
                                   href="#meInteresa">
                                    Me interesa
                                </a>
                            </div>
                            <div class="col-sm-4 centered">
                                <a href="#" class="btn-sm bg-navy">
                                    Más información
                                </a>
                            </div>
                            <div class="centered">
                                <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne">
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
                             style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                            <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                        </div>

                        <div class="box-footer">
                            <h3 style="color:black" class="widget-user-username">Saint Charles High School</h3>
                            <div class="row">
                                <div class="col-sm-4 border-right centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Educación</h5>
                                        <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Niveles</h5>
                                        <span class="description-text">Inicial, EGB, BGU</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Ubicación</h5>
                                        <span class="description-text">Quito, Ecuador</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="col-sm-4 centered">
                                <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal"
                                   href="#meInteresa">
                                    Me interesa
                                </a>
                            </div>
                            <div class="col-sm-4 centered">
                                <a href="#" class="btn-sm bg-navy">
                                    Más información
                                </a>
                            </div>
                            <div class="centered">
                                <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne">
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
                             style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
                            <h3 style="color:white" class="widget-user-username">Saint Charles High School</h3>
                        </div>

                        <div class="box-footer">
                            <h3 style="color:black" class="widget-user-username">Saint Charles High School</h3>
                            <div class="row">
                                <div class="col-sm-4 border-right centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Educación</h5>
                                        <span class="description-text"><i class="fa  fa-venus-mars margin-r-5"></i> MIXTO</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Niveles</h5>
                                        <span class="description-text">Inicial, EGB, BGU</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 centered">
                                    <div class="description-block">
                                        <h5 class="description-header">Ubicación</h5>
                                        <span class="description-text">Quito, Ecuador</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="col-sm-4 centered">
                                <a class="btn-sm bg-green" data-target="#meInteresa" data-toggle="modal"
                                   href="#meInteresa">
                                    Me interesa
                                </a>
                            </div>
                            <div class="col-sm-4 centered">
                                <a href="#" class="btn-sm bg-navy">
                                    Más información
                                </a>
                            </div>
                            <div class="centered">
                                <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne">
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
                            <h3 class="box-title"><strong>Unidad Educativa 1</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <h5><strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong></h5>

                            <p class="text-muted">Quito, Ecuador</p>

                            <h5><strong><i class="fa fa-users margin-r-5"></i> Educación</strong></h5>

                            <p class="text-muted">
                                <i class="fa  fa-venus-mars margin-r-5"></i> MIXTO
                            </p>

                            <h5><strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong></h5>

                            <p>
                                Inicial, EGB, BGU
                            </p>

                            <hr>

                            <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseEdu01">
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
                            <h3 class="box-title"><strong>Unidad Educativa 1</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <h5><strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong></h5>

                            <p class="text-muted">Quito, Ecuador</p>

                            <h5><strong><i class="fa fa-users margin-r-5"></i> Educación</strong></h5>

                            <p class="text-muted">
                                <i class="fa  fa-venus-mars margin-r-5"></i> MIXTO
                            </p>

                            <h5><strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong></h5>

                            <p>
                                Inicial, EGB, BGU
                            </p>

                            <hr>

                            <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseEdu01">
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
                            <h3 class="box-title"><strong>Unidad Educativa 1</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <h5><strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong></h5>

                            <p class="text-muted">Quito, Ecuador</p>

                            <h5><strong><i class="fa fa-users margin-r-5"></i> Educación</strong></h5>

                            <p class="text-muted">
                                <i class="fa  fa-venus-mars margin-r-5"></i> MIXTO
                            </p>

                            <h5><strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong></h5>

                            <p>
                                Inicial, EGB, BGU
                            </p>

                            <hr>

                            <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseEdu01">
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
                            <h3 class="box-title"><strong>Unidad Educativa 1</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <h5><strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong></h5>

                            <p class="text-muted">Quito, Ecuador</p>

                            <h5><strong><i class="fa fa-users margin-r-5"></i> Educación</strong></h5>

                            <p class="text-muted">
                                <i class="fa  fa-venus-mars margin-r-5"></i> MIXTO
                            </p>

                            <h5><strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong></h5>

                            <p>
                                Inicial, EGB, BGU
                            </p>

                            <hr>

                            <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseEdu01">
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
                            <h3 class="box-title"><strong>Unidad Educativa 1</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <h5><strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong></h5>

                            <p class="text-muted">Quito, Ecuador</p>

                            <h5><strong><i class="fa fa-users margin-r-5"></i> Educación</strong></h5>

                            <p class="text-muted">
                                <i class="fa  fa-venus-mars margin-r-5"></i> MIXTO
                            </p>

                            <h5><strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong></h5>

                            <p>
                                Inicial, EGB, BGU
                            </p>

                            <hr>

                            <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseEdu01">
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
                            <h3 class="box-title"><strong>Unidad Educativa 1</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <h5><strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong></h5>

                            <p class="text-muted">Quito, Ecuador</p>

                            <h5><strong><i class="fa fa-users margin-r-5"></i> Educación</strong></h5>

                            <p class="text-muted">
                                <i class="fa  fa-venus-mars margin-r-5"></i> MIXTO
                            </p>

                            <h5><strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong></h5>

                            <p>
                                Inicial, EGB, BGU
                            </p>

                            <hr>

                            <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseEdu01">
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
                            <h3 class="box-title"><strong>Unidad Educativa 1</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <h5><strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong></h5>

                            <p class="text-muted">Quito, Ecuador</p>

                            <h5><strong><i class="fa fa-users margin-r-5"></i> Educación</strong></h5>

                            <p class="text-muted">
                                <i class="fa  fa-venus-mars margin-r-5"></i> MIXTO
                            </p>

                            <h5><strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong></h5>

                            <p>
                                Inicial, EGB, BGU
                            </p>

                            <hr>

                            <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseEdu01">
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
                            <h3 class="box-title"><strong>Unidad Educativa 1</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <h5><strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong></h5>

                            <p class="text-muted">Quito, Ecuador</p>

                            <h5><strong><i class="fa fa-users margin-r-5"></i> Educación</strong></h5>

                            <p class="text-muted">
                                <i class="fa  fa-venus-mars margin-r-5"></i> MIXTO
                            </p>

                            <h5><strong><i class="fa fa-book margin-r-5"></i> Niveles de educación</strong></h5>

                            <p>
                                Inicial, EGB, BGU
                            </p>

                            <hr>

                            <a class="btn-sm bg-green" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseEdu01">
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
