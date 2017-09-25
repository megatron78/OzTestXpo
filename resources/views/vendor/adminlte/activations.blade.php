@extends('adminlte::layouts.app')

@section('contentheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_description')
	{{ trans('adminlte_lang::message.home_description') }}
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 col-md-offset-0">
				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Activación Instituciones</h3>
						<br>
						<br>
						{{--<div class="btn-group">
							<button type="button" class="btn btn-warning btn-flat">Nuevo</button>
							<button type="button" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('preescolar.create') }}" target="_blank">Preescolar</a></li>
								<li><a href="{{ route('escuelacolegio.create') }}" target="_blank">Escuela/Colegio</a></li>
								<li><a href="{{ route('superior.create') }}" target="_blank">Edu. Superior</a></li>
								<li><a href="{{ route('posgrados.create') }}" target="_blank">Posgrados</a></li>
								<li><a href="{{ route('cursoseminario.create') }}" target="_blank">Cursos y Seminarios</a></li>
								<li><a href="{{ route('eventos.create') }}" target="_blank">Eventos</a></li>
							</ul>
						</div>--}}
						<table id="activacionesTable" class="table table-hover table-responsive">
							<thead>
							<tr>
								<th>Id</th>
								<th>Slug</th>
								<th>Nombre</th>
								<th>Categoría</th>
								<th>Estado</th>
								<th>Plan</th>
								<th>Plan desde</th>
								<th>Plan hasta</th>
							</tr>
							</thead>
						</table>
						{{--<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>--}}
					</div>
					<div class="box-body">
						{{ trans('adminlte_lang::message.logged') }}. ExpoEducar 2017.
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
