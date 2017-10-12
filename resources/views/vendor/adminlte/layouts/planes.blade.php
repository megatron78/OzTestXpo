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

    <div style="width: 95%" class="container content">
        <div style="padding-left: 10%" class="table-responsive">
            <div class="membership-pricing-table">
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
            <div class="membership-pricing-table">
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
