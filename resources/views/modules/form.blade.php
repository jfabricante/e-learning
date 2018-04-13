@extends('template')

@section('content')
	<div class="m-content module-form">
		<div class="row">
			<div class="col-md-5">
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
								<a href="{{ route('modules.index') }}" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle" title="Back">
									<i class="la la-arrow-left back-btn"></i>
								</a>
								
							</div>
						</div>
					</div>

					@if(isset($module))
						{!! Form::open(['route' => ['modules.update', 'id' => $module['id']], 'class' => 'm-form m-form--fit m-form--label-align-right', 'method' => 'patch', 'files' => true]) !!}
					@else
						{!! Form::open(['route' => 'modules.store', 'class' => 'm-form m-form--fit m-form--label-align-right', 'files' => true]) !!}
					@endif
						<div class="m-portlet__body">
							<div class="form-group m-form__group">
								<label for="module_name">
									Module Name
								</label>
								<input id="module_name" class="form-control m-input m-input--square" id="module_name" name="module_name" placeholder="Module Name" value="{{ isset($module['name']) ? $module['name'] : ''}}" required/>
							</div>

							<div class="form-group m-form__group">
								<label for="customFile">
									File Browser
								</label>
								<div></div>
								<div class="custom-file">
									<input type="file" class="custom-file-input m-input--square" id="customFile" name="attachment" {{ isset($module['filename']) ? '' : 'required' }} />
									<label class="custom-file-label" for="customFile">
										Choose file
									</label>
								</div>
							</div>

							<div class="form-group m-form__group">
								<label for="sub_category">
									Training
								</label>
								<select class="form-control m-input m-input--square" name="subcategory_id" id="subcategory_id" required>
									@foreach($subcategories as $subcategory)
										<option value="{{ $subcategory->id }}" {{ isset($module['subcategory_id']) ? $subcategory->id == $module['subcategory_id'] ? 'selected' : '' : '' }} >{{ $subcategory->name }}</option>
									@endforeach
								</select>
							</div>

							<div class="form-group m-form__group">
								<label for="plant_start">
									Plan Start
								</label>
								<div class="input-group" >
									<input type="text" class="form-control m-input m-input--square" name="plan_start" id="plan_start" value="{{ isset($module['plan_start']) ? date('m/d/Y', strtotime($module['plan_start'])) : '' }}" />
									<div class="input-group-append">
										<span class="input-group-text">
											<i class="la la-calendar"></i>
										</span>
									</div>
								</div>
							</div>

							<div class="form-group m-form__group">
								<label for="completion_date">
									Completion Date
								</label>
								<div class="input-group" >
									<input type="text" class="form-control m-input m-input--square" name="completion_date" id="completion_date" value="{{ isset($module['completion_date']) ? date('m/d/Y', strtotime($module['completion_date'])) : '' }}" />
									<div class="input-group-append">
										<span class="input-group-text">
											<i class="la la-calendar"></i>
										</span>
									</div>
								</div>
							</div>

							<div class="form-group m-form__group">
								<label for="course_period">
									Course Period
								</label>
								<input class="form-control m-input m-input--square" type="text" id="course_period" name="course_period" readonly  value="{{ isset($module['course_period']) ? $module['course_period'] : '' }}"/>
							</div>

						</div>

						<div class="m-portlet__foot m-portlet__foot--fit">
							<div class="m-form__actions">
								<button type="submit" class="btn btn-danger">
									Submit
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
		var SubCategoryForm = function() {

			var init = function() {
				const $subcategory_id  = $('#subcategory_id');
				const $plan_start      = $('#plan_start');
				const $completion_date = $('#completion_date');
				const $course_period   = $('#course_period');

				$subcategory_id.select2();

				$plan_start.datepicker({
					todayBtn: "linked",
					clearBtn: true,
					todayHighlight: true,
					templates: {
						leftArrow: '<i class="la la-angle-left"></i>',
						rightArrow: '<i class="la la-angle-right"></i>'
					}
				});

				$completion_date.datepicker({
					todayBtn: "linked",
					clearBtn: true,
					todayHighlight: true,
					templates: {
						leftArrow: '<i class="la la-angle-left"></i>',
						rightArrow: '<i class="la la-angle-right"></i>'
					}
				});

				
				$plan_start.on('change', function() {
					const days = calculateDateDifference($(this).val(), $completion_date.val());

					$course_period.val(days + ' day(s)');
				});

				$completion_date.on('change', function() {
					const days = calculateDateDifference($plan_start.val(), $(this).val());

					$course_period.val(days + ' day(s)');
				});
			}

			var calculateDateDifference = function(plan_start, completion_date) {
				let start;
				let end;
				let timeDiff;
				let diffDays = 0;

				if ((plan_start != '') && (plan_start != ''))
				{
					start    = new Date(plan_start);
					end      = new Date(completion_date);
					timeDiff = Math.abs(start.getTime() - end.getTime());

					diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
				}

				return diffDays;
			}

			// Public method
			return {
				initialize: function() {
					init();
				}
			}
		}();

		$(document).ready(function() {
			SubCategoryForm.initialize();
		});
	</script>
@endsection