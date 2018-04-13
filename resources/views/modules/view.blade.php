@extends('template')

@section('styles')
	@parent
	<style type="text/css">
		.back-link:hover,
		.back-link:focus{
			text-decoration: none;
		}
	</style>
@endsection

@section('content')
	<div class="m-content modules-view">
		<div class="row">
			<div class="col-md-12">
				<div class="m-portlet m-portlet--mobile">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<span class="m-portlet__head-icon">
									<i class="flaticon-layers"></i>
								</span>

								<h3 class="m-portlet__head-text">
									{{ $module->name }}
								</h3>
							</div>
						</div>

						<div class="m-portlet__head-tools">
							<div class="m-portlet__head-icon">
								<a href="{{ route('modules.index') }}" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle" title="Back">
									<i class="la la-arrow-left back-btn"></i>
								</a>
								
							</div>
						</div>
					</div>

					<div class="m-portlet__body">
						@if ($module->mime_type == 'application/pdf')
							<iframe src="{{ asset('../ViewerJS/#../public/upload/' . $module->filename) }}" width="100%" height="600px" allowfullscreen  webkitallowfullscreen class="iframe"></iframe>
						@else
							<video width="100%" height="600px" controls>
								<source src="{{ asset('upload/' . $module->filename) }}" type="{{ $module->mime_type }}">
							</video>
						@endif
					</div>

					<div class="m-portlet__foot">
						<div class="row align-items-center">
							<div class="col-lg-6">
								
							</div>
							<div class="col-lg-6 m--align-right">
								<a href="{{ route('modules.index') }}" class="back-link">
									<button type="button" class="btn btn-default">
										<i class="la la-arrow-left"></i>
										Back
									</button>
								</a>
								
								<a href="{{ route('modules.completed', $module->id) }}">
									<button type="button" class="btn btn-success">
										Done
										<i class="la la-check"></i>
									</button>
								</a>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	@parent
	<script type="text/javascript">
		$('.iframe').ready(function() {
		   setTimeout(function() {
				$('.iframe').contents().find('.download').remove();
				$('.iframe').contents().find('.about').remove();
		   }, 100);
		});
	</script>
@endsection