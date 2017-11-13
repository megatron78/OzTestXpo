@extends('adminlte::layouts.app')

@section('contentheader_title')
	{{ trans('adminlte_lang::message.banners') }}
@endsection

@section('contentheader_description')
	{{ trans('adminlte_lang::message.banners_description') }}
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 col-md-offset-0">
				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Banners ExpoEducar</h3>
						<br>
						<br>
						<table class="table table-bordered">
							<thead>
							<tr>
								<th>Id</th>
								<th>Categoría</th>
							</tr>
							</thead>
							@foreach($banners as $banner)
								<tr>
									<td>{{ $banner->id }}</td>
									@if($banner->category_id == 1)
                                        <td>
										<a href="{{ route('banners.edit', [$banner->id]) }}" target="_blank" >
											Página Principal
										</a>
                                        </td>
									@endif
									@if($banner->category_id == 2)
                                        <td>
										<a href="{{ route('banners.edit', [$banner->id]) }}" target="_blank" >
											Preescolar
										</a>
                                        </td>
									@endif
									@if($banner->category_id == 3)
                                        <td>
										<a href="{{ route('banners.edit', [$banner->id]) }}" target="_blank" >
											Escuela/Colegio
										</a>
                                        </td>
									@endif
									@if($banner->category_id == 4)
                                        <td>
										<a href="{{ route('banners.edit', [$banner->id]) }}" target="_blank" >
											Educación Superior
										</a>
                                        </td>
									@endif
									@if($banner->category_id == 5)
										<td>
										<a href="{{ route('banners.edit', [$banner->id]) }}" target="_blank" >
											Posgrados
										</a>
                                        </td>
									@endif
									@if($banner->category_id == 6)
                                        <td>
										<a href="{{ route('banners.edit', [$banner->id]) }}" target="_blank" >
											Cursos y Seminarios
										</a>
                                        </td>
									@endif
									@if($banner->category_id == 7)
                                        <td>
										<a href="{{ route('banners.edit', [$banner->id]) }}" target="_blank" >
											Eventos
										</a>
                                        </td>
									@endif
								</tr>
							@endforeach
						</table>
						{{--<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>--}}
					</div>
					{{--<div class="box-body">
						{{ trans('adminlte_lang::message.logged') }}. ExpoEducar 2017.
					</div>--}}
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
