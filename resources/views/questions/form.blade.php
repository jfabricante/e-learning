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

						<div class="m-portlet__head-tools">
							<div class="m-portlet__head-icon">
								<a href="{{ route('subcategories.show', $id) }}" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle" title="Back">
									<i class="la la-arrow-left back-btn"></i>
								</a>
								
							</div>
						</div>
					</div>
					@if(isset($question) && count($question))
						{!! Form::open(['route' => ['questions.update', 'id' => $question->id], 'class' => 'm-form m-form--fit m-form--label-align-right', 'method' => 'patch']) !!}
					@else
						{!! Form::open(['route' => 'questions.store', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
					@endif
						<div class="m-portlet__body questions">
							<div class="form-group m-form__group question__item">
								<label for="question">
									Question
								</label>

								<textarea class="form-control m-input m-input--square" id="question" name="question" rows="3" required>{{ (isset($question) && count($question)) ? $question->question : '' }}</textarea>

								<input type="text" class="form-control m-input m-input--square m--hide sub_category_id" name="sub_category_id" value="{{ $id }}">

								<label>Choices</label>
								<ul type="a" class="choices" id="choices">
									@if (isset($question) && count($question))
										@foreach($question->choices as $row)
											<li class="choice-item">
												<div class="input-group m-form__group col-md-7">
													<input type="text" class="form-control m-input m-input--square choice-input" required value="{{ $row->choice }}" name="choice[]">
													<div class="input-group-append">
														<span class="input-group-text">
															<label class="m-radio m-radio--single m-radio--state m-radio--state-primary">
																<input type="radio" name="answer" value="{{ $row->choice }}" {{ $question->answer == $row->choice ? 'checked' : '' }} class="answer" required>
																<span></span>
															</label>
														</span>
													</div>

													<i class="la la-remove"></i>
												</div>
											</li>
										@endforeach
									@else
										<li class="choice-item">
											<div class="input-group m-form__group col-md-7">
												<input type="text" class="form-control m-input m-input--square choice-input" required name="choice[]">
												<div class="input-group-append">
													<span class="input-group-text">
														<label class="m-radio m-radio--single m-radio--state m-radio--state-primary">
															<input type="radio" name="answer" value="" class="answer" required>
															<span></span>
														</label>
													</span>
												</div>

												<i class="la la-remove"></i>
											</div>
										</li>

										<li class="choice-item">
											<div class="input-group m-form__group col-md-7">
												<input type="text" class="form-control m-input m-input--square choice-input" required name="choice[]">
												<div class="input-group-append">
													<span class="input-group-text">
														<label class="m-radio m-radio--single m-radio--state m-radio--state-primary">
															<input type="radio" name="answer" class="answer" required>
															<span></span>
														</label>
													</span>
												</div>

												<i class="la la-remove"></i>
											</div>
										</li>

										<li class="choice-item">
											<div class="input-group m-form__group col-md-7">
												<input type="text" class="form-control m-input m-input--square choice-input" required name="choice[]">
												<div class="input-group-append">
													<span class="input-group-text">
														<label class="m-radio m-radio--single m-radio--state m-radio--state-primary">
															<input type="radio" name="answer" class="answer" required>
															<span></span>
														</label>
													</span>
												</div>

												<i class="la la-remove"></i>
											</div>
										</li>

										<li class="choice-item">
											<div class="input-group m-form__group col-md-7">
												<input type="text" class="form-control m-input m-input--square choice-input" required name="choice[]">
												<div class="input-group-append">
													<span class="input-group-text">
														<label class="m-radio m-radio--single m-radio--state m-radio--state-primary">
															<input type="radio" name="answer" class="answer" required>
															<span></span>
														</label>
													</span>
												</div>

												<i class="la la-remove"></i>
											</div>
										</li>
									@endif
								</ul>
 
							</div>
						</div>

						<div class="m-portlet__foot m-portlet__foot--fit">
							<div class="m-form__actions">
								<button type="submit" class="btn btn-danger">
									Submit
								</button>

								<button type="button" class="btn btn-success" id="add_question">
									Add Choices
								</button>
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
		(function() {
			var $add_choices = $('#add_question');
			var $choice_item = $('.choice-item');
			var $answer      = $('.answer');

			$add_choices.on('click', function() {

				var	$markup = '<li class="choice-item">';
						$markup += '<div class="input-group m-form__group col-md-7">';
							$markup += '<input type="text" class="form-control m-input m-input--square choice-input" name="choice[]">';
							$markup += '<div class="input-group-append">';
								$markup += '<span class="input-group-text">';
									$markup += '<label class="m-radio m-radio--single m-radio--state m-radio--state-primary">';
										$markup += '<input type="radio" name="answer" class="answer">';
										$markup +=	'<span></span>';
									$markup += '</label>';
								$markup += '</span>';
							$markup += '</div>';
							$markup += '<i class="la la-remove"></i>';
							$markup += '</div>';
					$markup += '</li>';

				$('#choices').append($markup);
			});

			$(document).on('click', 'input.answer', function() {

				const $self   = $(this);
				const $answer = $self.parent().parent().parent().siblings('input.choice-input').val();

				$self.val($answer);
				console.log($self.val());
			});

			$(document).on('click', '.choices .la-remove', function() {
				$(this).closest('li').remove();
			});

		})();
	</script>
@endsection