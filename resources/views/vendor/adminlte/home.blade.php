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
						<h3 class="box-title">Instituciones</h3>
						<br>
						<br>
						<table id="institucionesTable" class="table table-hover table-responsive">
							<thead>
							<tr>
								<th>Id</th>
								<th>Slug</th>
								<th>Nombre</th>
								<th>Categoría</th>
								<th>Estado</th>
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
