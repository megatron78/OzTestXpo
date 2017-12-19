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

    <div style=" width: 95%" class="container content">
        <div style="padding-left: 10%" class="table-responsive">
            <div style="display: block; position: relative; top: 150px;" id="quienes_somos2"></div>
            <div id="quienes_somos2">
                <img src='{{ asset('/img/quienes_somos3.png') }}' alt="Quiénes somos" height="100%" width="91%">
            </div>
            <div style="display: block; position: relative; top: -80px;" id="beneficios_instituciones"></div>
            <div id="beneficios_instituciones2">
                <img src='{{ asset('/img/beneficios_instituciones4.png') }}' alt="Quiénes somos" height="100%" width="91%">
            </div>
            <div style="display: block; position: relative; top: -80px;" id="beneficios_estudiantes"></div>
            <div id="beneficios_estudiantes2">
                <img src='{{ asset('/img/beneficios_estudiantes4.png') }}' alt="Quiénes somos" height="100%" width="91%">
            </div>
            <div style="display: block; position: relative; top: -80px;" id="planes_instituciones"></div>
            <div id="planes_instituciones2" class="membership-pricing-table">
                <p class="centered"><h1 class="centered">Planes y Tarifas</h1></p>
                <table>
                    <tbody>
                    <tr>
                        <td colspan="4" class="centered bg-blue-active"><h2 class="centered bg-blue-active text-uppercase"><strong>{{ trans('adminlte_lang::message.planestarifasinst') }}</strong></h2></td>
                    </tr>
                    <tr>
                        <td style="border-left-color: transparent; border-top-color: transparent; background-color: transparent"></td>
                        <th class="plan-header plan-header-free">
                            <div class="pricing-plan-name">BÁSICO</div>
                            <div class="pricing-plan-price">
                                <sup style="font-size: 45%"></sup>Gratis<span></span>
                            </div>
                            <div class="pricing-plan-period"></div>
                        </th>
                        <th class="plan-header plan-header-blue">
                            <!--<span class="plan-head"> </span>-->
                            <div class="pricing-plan-name">PREMIUM</div>
                            <div class="pricing-plan-price">
                                <sup style="font-size: 45%">desde $</sup>100<span>.00</span>
                            </div>
                            <div class="pricing-plan-period"></div>
                        </th>
                        <th class="plan-header plan-header-standard">
                                <div class="pricing-plan-name">GOLD</div>
                                <div class="pricing-plan-price">
                                    <sup style="font-size: 45%">desde $</sup>160<span>.00</span>
                                </div>
                                <div class="pricing-plan-period"></div>
                        </th>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Publicación Web Básica:</td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Publicación Web Perfil:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Publicación Web Destacado *:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Interés de Usuarios:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Publicación Web Home:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Contratación:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td>3 MESES / 6 MESES / 12 MESES</td>
                        <td>3 MESES / 6 MESES / 12 MESES</td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Precios **:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td>$100 / $180 / $325</td>
                        <td>$160 / $290 / $520</td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Eventos Gratis ***:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td>2 Eventos/4 Eventos/8 Eventos</td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Cursos Gratis ***:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td>1 Curso / 2 Cursos / 2 Cursos</td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Posteos en FB y Twiter ****:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td>  1 /  2 /  4</td>
                        <td>  2 /  4 /  8</td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Email a Suscriptores:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td>X  /  1 /  2</td>
                        <td>1  /  2 /  4</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="action-header">
                            <div class="current-plan">
                                {{--<div class="with-date">Current Plan</div>
                                <div><em class="smaller block">renews Feb 19, 2015</em></div>--}}
                                <a style="font-size: 30px" class="btn btn-success">
                                    Registrarse
                                </a>
                            </div>
                        </td>
                        <td class="action-header">
                            <a style="font-size: 30px" class="btn btn-success">
                                Contratar
                            </a>
                        </td>
                        <td class="action-header">
                            <a style="font-size: 30px" class="btn btn-success">
                                Contratar
                            </a>
                        </td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
        <br>
        <br>
        <div style="padding-left: 10%" class="table-responsive">
            <div id="planes_posgrados" class="membership-pricing-table">
                <table>
                    <tbody>
                    <tr>
                        <td colspan="4" class="centered bg-blue-active"><h2 class="centered bg-blue-active text-uppercase"><strong>{{ trans('adminlte_lang::message.planestarifascur') }}</strong></h2></td>
                    </tr>
                    <tr>
                        <td style="border-left-color: transparent; border-top-color: transparent; background-color: transparent"></td>
                        <th class="plan-header plan-header-free">
                            <div class="pricing-plan-name">BÁSICO</div>
                            <div class="pricing-plan-price">
                                <sup style="font-size: 45%"></sup>Gratis<span></span>
                            </div>
                            <div class="pricing-plan-period"></div>
                        </th>
                        <th class="plan-header plan-header-blue">
                            <!--<span class="plan-head"> </span>-->
                            {{--<span class="recommended-plan-ribbon">Recomendado</span>--}}
                            <div class="pricing-plan-name">PREMIUM</div>
                            <div class="pricing-plan-price">
                                <sup style="font-size: 45%">desde $</sup>30<span>.00</span>
                            </div>
                            <div class="pricing-plan-period"></div>
                        </th>
                        <th class="plan-header plan-header-standard">
                            <div class="header-plan-inner">
                                <div class="pricing-plan-name">GOLD</div>
                                <div class="pricing-plan-price">
                                    <sup style="font-size: 45%">desde $</sup>50<span>.00</span>
                                </div>
                                <div class="pricing-plan-period"></div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Publicación Web Básica:</td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Publicación Web Perfil:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Publicación Web Destacado *:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Interés de Usuarios:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                        <td><span style="font-size: 30px" class="icon-yes icon ion-checkmark"></span></td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Publicación Web Home:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td><span style="font-size: 30px;" class="icon-yes icon ion-checkmark"></span></td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Contratación:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td>1 MES / 3 MESES / 6 MESES</td>
                        <td>1 MES / 3 MESES / 6 MESES</td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Precios **:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td>$30 / $80 / $145</td>
                        <td>$50 / $135 / $245</td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Posteos en FB y Twiter ****:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td>  1 /  2 /  4</td>
                        <td>  1 /  3 /  6</td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">Email a Suscriptores:</td>
                        <td><span style="font-size: 30px" class="icon-no icon ion-close"></span></td>
                        <td>X  /  1 /  2</td>
                        <td>1  /  2 /  4</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="action-header">
                            <div class="current-plan">
                                {{--<div class="with-date">Current Plan</div>
                                <div><em class="smaller block">renews Feb 19, 2015</em></div>--}}
                                <a style="font-size: 30px" class="btn btn-success">
                                    Registrarse
                                </a>
                            </div>
                        </td>
                        <td class="action-header">
                            <a style="font-size: 30px" class="btn btn-success">
                                Contratar
                            </a>
                        </td>
                        <td class="action-header">
                            <a style="font-size: 30px" class="btn btn-success">
                                Contratar
                            </a>
                        </td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
        <br>
        <div style="padding-left: 10%">
        <p style="font-size: 20px; width: 26%" class=" bg-blue-active text-uppercase">
            * En su categoría<br>
            ** Precios no incluyen IVA<br>
            *** Por 1 mes<br>
            **** Arte y Texto del Cliente<br>
        </p>
            {{--<div id="faq">
                <img src='{{ asset('/img/preguntas_frecuentes.png') }}' alt="Quiénes somos" height="100%" width="91%">
            </div>--}}
            <div id="contacto">
                <div style="width: 100%; padding-right: 9%" class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-gray-light">
                            <h4 class="modal-title" id="myModalLabel">
                                <img style="padding-left: 1%; height: 70px; width: auto;"
                                     src="{{ asset('/img/expoeducar_logo115x97.png') }}" alt="ExpoEducar">
                                <strong>Proporciona tus datos para contactarnos contigo</strong></h4>
                        </div>
                        <div class="modal-body">
                            <!-- form start -->
                            {!! Form::open(['method' => 'POST', 'route' => 'send.moreinfo', 'class' => 'form-horizontal']) !!}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="nombreApellido" class="col-sm-3 control-label">Nombre y Apellido *</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nombreApellido" name="nombreApellido"
                                               placeholder="Nombre y Apellido" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="telefono" class="col-sm-3 control-label">Teléfono *</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="whatsapp" class="col-sm-3 control-label">Whatsapp</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="whatsapp" name="telefono" placeholder="Whatsapp">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Correo *</label>

                                    <div class="col-sm-9">
                                        <input type="hidden" id="email" name="email" value="info@expoeducar.com.ec">
                                        <input type="hidden" id="tipo" name="tipo">
                                        <input type="email" class="form-control" id="inputEmail3" name="inputEmail3" placeholder="Correo electrónico" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="interes" class="col-sm-3 control-label">Interés</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="interes" name="interes" placeholder="Estoy interesado en...">
                                    </div>
                                </div>

                            </div>
                            <!-- /.box-body -->
                            <div class="modal-footer bg-gray-light">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
</body>
</html>
