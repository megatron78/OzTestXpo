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
                                    url = '{{route('preescolar.show', [":id", ":slug"])}}';
                                else
                                    url = '{{route('escuelacolegio.show', [":id", ":slug"])}}';
                            }
                            if(row['tipo'] == 2)
                                url = '{{route('superior.show', [":id", ":slug"])}}';
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
            ]
        });
    });
</script>
</body>
</html>
