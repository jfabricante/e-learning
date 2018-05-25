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
			cursor: pointer;
		}

		.pagination > li:hover {
			text-decoration: none;
			background: #34bfa3;
			border-color: #34bfa3;
			color: #fff;
		}

		.pagination > li > a {
			color: #575962;
			text-decoration: none;
		}

		.pagination > li > a:hover {
			color: #fff;
		}

		.pagination > .active {
			background: #34bfa3;
			border-color: #34bfa3;
			color: #fff;
		}

		.pagination > li:first-child,
		.pagination > li:last-child {
			display: none !important;
		}

		.questions {
			min-height: 350px !important;
		}
	</style>
@endsection

@section('content')
	<div class="m-content question-form">
		<div class="row">
			<div class="col-md-12">
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

						<div class="m-portlet__head-tools">
							<h4 id="timer"></h4>
						</div>
					</div>

					@foreach ($entities as $entity)
						<div class="m-portlet__body questions">
							<div class="form-group m-form__group question__item">
								<label for="question">
									<span style="margin-right: 15px">{{ $entities->currentPage() . '. '}}</span> {{ $entity->question }}
								</label>

								<input type="hidden" name="question_id" class="question_id" value="{{ $entity->id }}" >
								<input type="hidden" name="correct_answer" class="correct_answer" value="{{ $entity->questionBank->answer }}" >

								<ul type="a" class="choices" id="choices">
									@if (isset($entity->examChoices) && count($entity->examChoices))

										@foreach($entity->examChoices as $row)
											<li class="choice-item">
												<div class="input-group m-form__group col-md-7">
													<input type="text" class="form-control m-input m-input--square choice-input" required value="{{ $row->choice }}" name="choice[]" readonly>
													<div class="input-group-append">
														<span class="input-group-text">
															<label class="m-radio m-radio--single m-radio--state m-radio--state-primary">
																<input type="radio" name="answer" value="{{ $row->choice }}" {!! isset($entity->examAnswer) ? $entity->examAnswer->user_exam_answer == $row->choice ? 'checked' : '' : '' !!} class="answer" required>
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
							<div class="col-md-3">
								@if ($entities->currentPage() > 1)
									<a href="{{ $entities->previousPageUrl() }}">
										<button type="button" class="btn btn-success"><i class="la la-angle-double-left"></i> Back</button>
									</a>
								@endif
							</div>

							<div class="col-md-6 text-center">
								{!! $entities->render() !!}
							</div>

							<div class="col-md-3 text-right">
								@if ($entities->currentPage() == $entities->total())
									<button type="submit" class="btn btn-danger">
										Submit <i class="flaticon flaticon-paper-plane"></i>
									</button>
								@else
									<a href="{{ $entities->nextPageUrl() }}">
										<button type="button" class="btn btn-success">Next <i class="la la-angle-double-right"></i></button>
									</a>
								@endif
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
		$(document).ready(function() {
			$('.answer').on('click', function() {
				var self = $(this);

				$.ajax({
					url: appUrl + '/exams/update_answer',
					type: 'POST',
					data: {
						answer: self.val(),
						question_id: $('.question_id').val(),
						correct_answer: $('.correct_answer').val(),
						_token: '{!! csrf_token() !!}'
					},
					success: function(data) {
						console.log(data)
					}
				});
			});


			$('.btn-danger').on('click', function() {
				var self = $(this);
				mApp.progress(self);

				$.ajax({
					url: "{{ route('exams.store') }}",
					type: 'POST',
					data: {
						status: 'success',
						_token: '{!! csrf_token() !!}',
						config_id: $('#user_config_id').val()
					},
					success: function(data) {
						mApp.unprogress(self);
						swal({
							"title": "", 
							"text": "Your score is " + data['score'] + " out of " + data['items'] + " items!", 
							"type": "success",
							"confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
						});
						console.log(data);
					}
				});
			});

		});
	</script>
@endsection
