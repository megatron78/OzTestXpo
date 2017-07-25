<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="es">
@include('vendor.adminlte.layouts.partials.headexpoeducar');
<!-- bootstrap slider -->

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app" v-cloak>
    <!-- Fixed navbar -->
@include('vendor.adminlte.layouts.partials.navbarexpoeducar')

<!-- style="padding-top: 0px" -->
    <section class="content" id="ini" name="ini">
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
                            <img style="width: 100%;" src="{{ asset('/img/inicialCarousel01.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img style="width: 100%;" src="{{ asset('/img/inicialCarousel02.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img style="width: 100%;" src="{{ asset('/img/inicialCarousel03.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 100%" class="container">
            <div class="row">
                <div class="box box-info">
                    <form style="background-color: #2C2D2D;" class="form-inline">
                        <div class="box-body">
                            {{--<span style="font-size: 18px;color: ghostwhite;" class="glyphicon glyphicon glyphicon-search"></span>
                            &nbsp;&nbsp;&nbsp;--}}
                            <div class="form-group">
                                <label style="font-size: 14px; color: ghostwhite;" for="search_province">Provincia: &nbsp;</label>
                                <select id="search_province" class="form-control">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                            <div class="form-group">
                                &nbsp;&nbsp;
                                <label style="font-size: 14px; color: ghostwhite;" for="search_canton">Cantón: &nbsp;</label>
                                <select id="search_canton" class="form-control">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                            <div class="form-group">
                                &nbsp;&nbsp;
                                <label style="font-size: 14px; color: ghostwhite;" for="search_parish">Parroquia: &nbsp;</label>
                                <select id="search_parish" class="form-control">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                            <div class="form-group">
                                &nbsp;&nbsp;
                                <label style="font-size: 14px; color: ghostwhite;" for="search_city">Ciudad: &nbsp;</label>
                                <select id="search_city" class="form-control">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                            <div class="form-group">
                                &nbsp;&nbsp;
                                <label style="font-size: 14px; color: ghostwhite;" for="search_institution" class="control-label">Nombre: &nbsp;</label>
                                <input type="text" id="search_institution" class="form-control mx-sm-3"
                                       placeholder="Institución...">
                            </div>
                            <button type="submit" style="width: 120px;" class="btn btn-warning">BUSCAR</button>
                            <a style="font-size: 14px" data-toggle="collapse" data-parent="#accordion"
                               href="#advancedSearch">&nbsp;&nbsp;
                                <strong> Avanzada <i class="fa fa-search-plus margin-r-5"></i></strong>
                            </a>
                        </div>
                        <div id="advancedSearch" class="box-body panel-collapse collapse">
                            <div class="form-group">
                                &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="advsearch_chkFiscal"
                                           value="public">
                                    Fiscal
                                </label>
                            </div>&nbsp;&nbsp;
                            <div class="form-group">
                                &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="advsearch_chkFiscomisional"
                                           value="public_private">
                                    Fiscomisional
                                </label>
                            </div>&nbsp;&nbsp;
                            <div class="form-group">
                                &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="advsearch_chkParticular"
                                           value="private">
                                    Particular
                                </label>
                            </div>&nbsp;&nbsp;
                            <div style="border-left:1px solid whitesmoke;" class="form-group">
                                &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="advsearch_chkLaico"
                                           value="laic">
                                    Laico
                                </label>
                            </div>&nbsp;&nbsp;
                            <div class="form-group">
                                &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="advsearch_chkReligious"
                                           value="religious">
                                    Religioso
                                </label>
                            </div>&nbsp;&nbsp;
                            <div style="border-left:1px solid whitesmoke;" class="form-group">
                                &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="advsearch_chkFemale"
                                           value="all_female">
                                    Mujeres
                                </label>
                            </div>&nbsp;&nbsp;
                            <div class="form-group">
                                &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="advsearch_chkMaleFemale"
                                           value="male_female">
                                    Mixto
                                </label>
                            </div>&nbsp;&nbsp;
                            <div class="form-group">
                                &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="advsearch_chkMale"
                                           value="all_male">
                                    Hombres
                                </label>
                            </div>&nbsp;&nbsp;
                            <div style="border-left:1px solid whitesmoke;" class="form-group">
                                &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="advsearch_chkExtended"
                                           value="extended_schedule">
                                    Horario Extendido
                                </label>
                            </div>&nbsp;&nbsp;
                            <div style="border-left:1px solid whitesmoke;" class="form-group">
                                &nbsp;&nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;"  for="advsearch_costo">Costo: <b>$ 0</b></label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" value="" class="slider form-control"
                                       data-slider-min="0" data-slider-max="500" data-slider-step="50"
                                       data-slider-value="[0,150]" data-slider-orientation="horizontal"
                                       data-slider-selection="before" data-slider-tooltip="show"
                                       data-slider-id="blue_price_slider"/>&nbsp;<b style="font-size: 14px; color: ghostwhite;" >$ 500+</b>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-black"
                             style="background: url('{{ asset('/img/st_charles_hs.jpg') }}') center center;">
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
