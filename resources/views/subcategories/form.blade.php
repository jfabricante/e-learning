@extends('template')

@section('content')
	<div class="m-content subcategories-form">
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
									Sub Category Form
								</h3>
							</div>
						</div>

						<div class="m-portlet__head-tools">
							<div class="m-portlet__head-icon">
								<a href="{{ route('subcategories.index') }}" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle" title="Back">
									<i class="la la-arrow-left back-btn"></i>
								</a>
								
							</div>
						</div>
					</div>

					@if(isset($subcategory))
						{!! Form::open(['route' => ['subcategories.update', 'id' => $subcategory['id']], 'class' => 'm-form m-form--fit m-form--label-align-right', 'method' => 'patch']) !!}
					@else
						{!! Form::open(['route' => 'subcategories.store', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
					@endif
						<div class="m-portlet__body">
							<div class="form-group m-form__group">
								<label for="sub_category">
									Sub Category
								</label>
								<input class="form-control m-input m-input--square" id="sub_category" name="sub_category" aria-describedby="categoryHelp" placeholder="Enter Sub Category" type="text" value="{{ isset($subcategory['name']) ? $subcategory['name'] : '' }}" required>
							</div>

							<div class="form-group m-form__group">
								<label for="category_id">
									Parent Category
								</label>
								<select class="form-control m-input m-input--square" name="category_id" id="category_id" required>
									@foreach($categories as $category)
										<option value="{{ $category->id }}" {{ isset($subcategory['category_id']) ? $category->id == $subcategory['category_id'] ? 'selected' : '' : '' }} >{{ $category->name }}</option>
									@endforeach
								</select>
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
				const $category_id = $('#category_id');
				$category_id.select2({placeholder: "Select Category"});
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