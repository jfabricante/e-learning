@extends('template')

@section('styles')
	@parent
	<style type="text/css">
		.choices li {
			margin: 10px 0;
		}

		.choices .la-remove {
			padding: 10px;
			cursor: pointer;
		}

		.pagination > li {
			padding: 5px 11px;
			margin: 0 2px;
		}

		.pagination > .active {
			background: #2c2e3e;
			color: #fff;
		}
	</style>
@endsection

@section('content')
	<div class="m-content question-form">
		<div class="row">
			<div class="col-md-9">
				@if (Session::has('msg'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
						{{ session('msg') }}
					</div>
				@endif

				<div class="m-portlet m-portlet--tab">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<span class="m-portlet__head-icon m--hide">
									<i class="la la-gear"></i>
								</span>
								<h3 class="m-portlet__head-text">
									{{ $title }}
								</h3>
							</div>
						</div>
					</div>

					{!! Form::open(['route' => ['exams.store']]) !!}
					@foreach ($entities as $entity)
						<div class="m-portlet__body questions">
							<div class="form-group m-form__group question__item">
								<label for="question">
									{{ $entities->currentPage() . '. ' . $entity->question }}
								</label>

								<input type="hidden" name="question_id" class="question_id" value="{{ $entity->question_id }}" >

								<ul type="a" class="choices" id="choices">
									@if (isset($entity->examChoices) && count($entity->examChoices))

										@foreach($entity->examChoices as $row)
											<li class="choice-item">
												<div class="input-group m-form__group col-md-7">
													<input type="text" class="form-control m-input m-input--square choice-input" required value="{{ $row->choice }}" name="choice[]" readonly>
													<div class="input-group-append">
														<span class="input-group-text">
															<label class="m-radio m-radio--single m-radio--state m-radio--state-primary">
																<input type="radio" name="answer" value="{{ $row->choice }}" class="answer" required>
																<span></span>
															</label>
														</span>
													</div>
												</div>
											</li>
										@endforeach
									@endif
								</ul>
							</div>
						</div>
					@endforeach

					<div class="m-portlet__foot">
						<div class="row">
							<div class="col-md-9">
								{!! $entities->render() !!}
							</div>

							<div class="col-md-3 text-right">
								@if ($entities->currentPage() == $entities->total())
									<button type="submit" class="btn btn-danger">
										Submit
									</button>
								@endif
							</div>
						</div>
					</div>
					{!! Form::close() !!}

				</div>

			</div>
		</div>
	</div>
@endsection

@section('scripts')
	@parent

	<script type="text/javascript">
		$(document).ready(function() {
			$('.answer').on('click', function() {
				console.log($(this).val());
				console.log($('.question_id').val());
			});
		});
	</script>
@endsection
