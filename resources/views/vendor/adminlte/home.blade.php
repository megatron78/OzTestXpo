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
			<div class="col-md-10 col-md-offset-1">
				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Instituciones</h3>

						{{--<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>--}}
					</div>
					<div class="box-body">
						{{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application!
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
