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
        <div style="width: 100%" class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Verificación</div>
                    <div class="panel-body">
                        Se ha registrado satisfactoriamente. Un correo ha sido enviado para verificación de la cuenta.
                    </div>
                </div>
            </div>
        </div> <!--/ .container -->
    </section>
    <footer>
        @include('vendor.adminlte.layouts.partials.footerexpoeducar')
    </footer>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--Google Maps API-->
<script src="{{ url (mix('/js/app-landing.js')) }}"></script>
</body>
<style>
    .next {
        float:right;
        text-align:right;
    }
</style>
</html>