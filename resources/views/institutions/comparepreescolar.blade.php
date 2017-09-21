<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="es">
@include('vendor.adminlte.layouts.partials.headexpoeducar');
    <body data-spy="scroll" data-target="#navigation" data-offset="50">
        <div id="app" v-cloak>
            <section class="content" id="ini" name="ini">
                <div style="width: 100%" class="container">
                        <div class="col-md-12 col-md-offset-0">
                            <!-- Default box -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h1 class="box-title">Comparación Preescolar</h1>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-bordered">
                                        <?php $countTR = 0; ?>
                                        @foreach($transposedpre as $row)
                                            <?php $countTD = 0; ?>
                                            <tr>
                                                @foreach($row as $cell)
                                                    @if($countTR === 0)
                                                        <th>{{ $cell }}</th>
                                                    @else
                                                        @if($countTD === 0)
                                                            <td class="text-bold">{{ $cell }}</td>
                                                        @else
                                                            <td>{{ $cell }}</td>
                                                        @endif
                                                    @endif
                                                    <?php $countTD += 1; ?>
                                                @endforeach
                                            </tr>
                                            <?php $countTR += 1; ?>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="box-body">
                                    {{--{{ trans('adminlte_lang::message.logged') }}. ExpoEducar 2017.--}}
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                </div>
            </section>
        </div>
    </body>
</html>
