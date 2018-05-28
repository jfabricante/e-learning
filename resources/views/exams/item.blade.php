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
												<div class="input-group m-form__group col-md-6">
													<input type="text" class="form-control m-input m-input--square choice-input" required value="{{ $row->choice }}" name="choice[]" readonly>
													<div class="input-group-append">
														<span class="input-group-text">
															<label class="m-radio m-radio--single m-radio--state m-radio--state-primary">
																<input type="radio" name="answer" value="{{ $row->choice }}" {!! isset($entity->examAnswer) ? $entity->examAnswer->user_exam_answer == $row->choice ? 'checked' : '' : '' !!} class="answer" required {{ $config->status == '' ? '' : 'disabled' }}>
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
	<script src="{{ asset('js/countdown_timer.min.js') }}" type="text/javascript"></script>

	<script type="text/javascript">
		var ItemPage = function() {
			var init = function() {
				updateAnswer();
				removeRow();
				updateTimer()
			}

			var updateAnswer = function() {
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
			};

			var removeRow = function() {
				$('.btn-danger').on('click', function() {
					var self = $(this);
					mApp.progress(self);

					$.ajax({
						url: "{{ route('exams.store') }}",
						type: 'POST',
						data: {
							status: 'success',
							_token: '{!! csrf_token() !!}',
							config_id: {{ $config->id }}
						},
						success: function(data) {
							mApp.unprogress(self);
							swal({
								"title": "", 
								"text": "Your score is " + data['score'] + " out of " + data['items'] + " items!", 
								"type": "success",
								"confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
							});
						}
					});
				});
			};

			var updateTimer = function() {
				var date     = new Date();
					// nowTimes = date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds(),
				var	timeElem = document.getElementById('timer');
					// nowTimes = 0 + ':' + parseInt(timeElem.innerText) + ':' + 0;
				var	nowTimes = Math.floor(parseInt("{{ $config->remaining_time / 3600 }}")) + ':' + parseInt("{{ ($config->remaining_time / 60) % 60 }}") + ':' + parseInt("{{ $config->remaining_time % 60 }}");


				var config = {
					'id': '{{ $config->id }}',
					'user_id': '{{ $config->user_id }}',
					'config_id': '{{ $config->config_id }}',
					'remaining_time': nowTimes
				};


				if (localStorage.getItem('config') == null)
				{
					localStorage.setItem('config', JSON.stringify(config));
				}
				else if(JSON.parse(localStorage.getItem('config')).id != "{{ $config->id }}")
				{
					let settings = JSON.parse(localStorage.getItem('config'));

					let parts = settings.remaining_time.split(':');

					localStorage.setItem('config', JSON.stringify(config));

					$.ajax({
							url: "{{ route('exams.update_time') }}",
							type: 'POST',
							data: {
								id: settings.id,
								remaining_time: (parseInt(parts[0]) * 3600) + (parseInt(parts[1]) * 60) + parseInt(parts[2]), // Convert to second
								_token: '{!! csrf_token() !!}',
							},
							success: function(data) {
								console.log(data);
							}
						});
				}

				var time = new CountDownTimer(JSON.parse(localStorage.getItem('config')).remaining_time, function(times, prams) {
					timeElem.innerText = times;

					var config = {
						'id': '{{ $config->id }}',
						'user_id': '{{ $config->user_id }}',
						'config_id': '{{ $config->config_id }}',
						'remaining_time': times
					};

					localStorage.setItem('config', JSON.stringify(config));

					if(prams.isFinal()) {
						localStorage.removeItem('config');
						location.reload();
					}
				});
			};

			return {
				instance: function() {
					init();
				}
			}

		}();

		$(document).ready(function() {
			ItemPage.instance();
		});
	</script>
@endsection
