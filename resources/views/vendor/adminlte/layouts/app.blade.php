<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini">
<div id="app" v-cloak>
    <div class="wrapper">

    @include('adminlte::layouts.partials.mainheader')

    @include('adminlte::layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('adminlte::layouts.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    {{--@include('adminlte::layouts.partials.controlsidebar')--}}

    {{--@include('adminlte::layouts.partials.footer')--}}

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('adminlte::layouts.partials.scripts')
@show
<script type="text/javascript">
    $(document).ready(function() {
        oTable = $('#institucionesTable').DataTable({
            "processing": true,
            "serverSide": false,
            "ajax": "{{ route('institutions.all') }}",
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'slug', name: 'slug'},
                {data: 'nombre', name: 'nombre'},
                {data: 'tipo', name: 'tipo'},
                {data: 'activo', name: 'activo'},
                {data: 'plan', name: 'plan'},
                {data: 'plan_desde', name: 'plan_desde'},
                {data: 'plan_hasta', name: 'plan_hasta'},
            ],
            "columnDefs" : [
                {
                    "targets": [0,1],
                    "visible": false,
                    "searchable": false
                },
                {
                    "targets": [2],
                    render: function ( data, type, row, meta ) {
                        if(type === 'display'){
                            var url;
                            if(row['tipo'] == 1) {
                                if(row['preescolar'] == 1 && row['escuela'] == 0 && row['colegio'] == 0)
                                    url = '{{route('preescolar.edit', [":id"])}}';
                                else
                                    url = '{{route('escuelacolegio.edit', [":id"])}}';
                            }
                            if(row['tipo'] == 2)
                                url = '{{route('superior.edit', [":id", ":slug"])}}';
                            if(row['tipo'] == 3)
                                if(row['categoria'] == 'Posgrado')
                                    url = '{{route('posgrado.show', [":id", ":slug"])}}';
                                else
                                    url = '{{route('cursoseminario.show', [":id", ":slug"])}}';
                            if(row['tipo'] == 4)
                                url=row['web'];

                            url = url.replace(':id', row['id']);
                            url = url.replace(':slug', row['slug']);
                            data = '<a href="'+url+'">'+ data + '</a>';
                        }

                        return data;
                    }
                },
                {
                    "targets": [3],
                    render: function ( data, type, row, meta ) {
                        if(type === 'display'){
                            if(row['tipo'] == 1) {
                                if (row['preescolar'] == 1 && row['escuela'] == 0 && row['colegio'] == 0)
                                    data = 'Preescolar';
                                else
                                    data = 'Escuela/Colegio';
                            }
                            else if(row['tipo'] == 2)
                                data = 'Superior';
                            else if(row['tipo'] == 3) {
                                if(row['categoria'] == 'Posgrado')
                                    data = 'Posgrado';
                                else
                                    data = 'Curso/Seminario';
                            }
                            else if(row['tipo'] == 4)
                                data = 'Evento';
                            else
                                data = 'ND';
                        }
                        return data;
                    }
                },
                {
                    "targets": [4],
                    render: function (data, type, row, meta) {
                        if (type === 'display') {
                            if(row['activo'] == 1)
                                data = 'Activo';
                            else
                                data = 'Inactivo';
                        }
                        return data;
                    }
                },
                {
                    "targets": [5],
                    render: function (data, type, row, meta) {
                        if (type === 'display') {
                            if(row['plan'] == '3B')
                                data = 'Básico';
                            else if(row['plan'] == '2P')
                                data = 'Platinum';
                            else if(row['plan'] == '1G')
                                data = 'Gold';
                            else
                                data = 'ND';
                        }
                        return data;
                    }
                },
            ]
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#province_id').on('change', function (e) {
            var province_id = e.target.value;
            $('#city_id').empty();
            $('#sector_id').empty();
            $('#canton_id').empty();
            $('#parish_id').empty();
            $('#city_id').append('<option value="">...</option>');
            $('#canton_id').append('<option value="">...</option>');
            //ajax
            $.get('/ajax-city?province_id=' + province_id, function (data) {
                //success_data
                $.each(data, function (index, cityObj) {
                    $('#city_id').append('<option value="' + cityObj.id + '">' + cityObj.name + '</option>');
                });
            });
            $.get('/ajax-canton?province_id=' + province_id, function (data) {
                //success_data
                $.each(data, function (index, cantonObj) {
                    $('#canton_id').append('<option value="' + cantonObj.id + '">' + cantonObj.name + '</option>');
                });
            });
        });

        $('#canton_id').on('change', function (e) {
            var canton_id = e.target.value;
            $('#parish_id').empty();
            //ajax
            $.get('/ajax-parish?canton_id=' + canton_id, function (data) {
                //success_data
                $.each(data, function (index, parishObj) {
                    $('#parish_id').append('<option value="' + parishObj.id + '">' + parishObj.name + '</option>');
                });
            });
        });

        $('#city_id').on('change', function (e) {
            var city_id = e.target.value;
            $('#sector_id').empty();
            $('#sector_id').append('<option value="">...</option>');
            //ajax
            $.get('/ajax-sector?city_id=' + city_id, function (data) {
                //success_data
                $.each(data, function (index, sectorObj) {
                    $('#sector_id').append('<option value="' + sectorObj.id + '">' + sectorObj.nombre + '</option>');
                });
            });
        });
    });
</script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('carreras');
        //bootstrap WYSIHTML5 - text editor
        //$(".textarea").wysihtml5();
    });
</script>
</body>
</html>
