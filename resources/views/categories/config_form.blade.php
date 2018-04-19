@extends('template')

@section('content')
	<div class="m-content category-config">
		<div class="row">
			<div class="col-md-5">

				<div class="m-portlet m-portlet--tab">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<span class="m-portlet__head-icon m--hide">
									<i class="la la-gear"></i>
								</span>

								<h3 class="m-portlet__head-text">
									Add New Configuration
								</h3>
							</div>
						</div>

						<div class="m-portlet__head-tools">
							<div class="m-portlet__head-icon">
								<a href="{{ route('categories.show', $category->id) }}" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle" title="Back">
									<i class="la la-arrow-left back-btn"></i>
								</a>
								
							</div>
						</div>
					</div>

					<div class="m-portlet__body">
						<div class="form-group m-form__group">
							<label for="description">
								Description
							</label>
							<input class="form-control m-input m-input--square" id="description" name="description" aria-describedby="descriptionHelp" placeholder="Enter description" type="text" required>

							<input class="form-control m-input m-input--square m--hide" id="category_id" name="category_id" aria-describedby="descriptionHelp" value="{{ $category->id }}" type="text" required>
						</div>

						<div class="m-separator m-separator--dashed m-separator--md"></div>
						
						@foreach($category->subCategories as $subcategory)
							<div class="form-group m-form__group">
								<label for="{{ $subcategory->id }}">{{ $subcategory->name }}</label>

								<select class="form-control m-input m-input--square select-input" name="{{ $subcategory->id }}" required>
									@for($i = 1; $i <= count($subcategory->questions); $i++)
										<option value="{{ $i }}">{{ $i }}</option>
									@endfor
								</select>
							</div>
						@endforeach

						<div class="m-separator m-separator--dashed m-separator--md"></div>

						<div class="form-group m-form__group">
								
						</div>
					</div>

					<div class="m-portlet__foot">
						<div class="m-form__actions">
							<button type="submit" class="btn btn-danger">
								Submit
							</button>
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
		(function() {
			$(document).ready(function() {
				$('.select-input').select2({placeholder: 'Select Number of Items'});	
			});
		})();
	</script>
@endsection