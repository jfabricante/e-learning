@extends('template')

@section('content')
	<div class="m-content category-form">
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
									Category Form
								</h3>
							</div>
						</div>

						<div class="m-portlet__head-tools">
							<div class="m-portlet__head-icon">
								<a href="{{ route('categories.index') }}" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle" title="Back">
									<i class="la la-arrow-left back-btn"></i>
								</a>
								
							</div>
						</div>
					</div>
					@if(isset($category))
						{!! Form::open(['route' => ['categories.update', 'id' => $category['id']], 'class' => 'm-form m-form--fit m-form--label-align-right', 'method' => 'patch']) !!}
					@else
						{!! Form::open(['route' => 'categories.store', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
					@endif
						<div class="m-portlet__body">
							<div class="form-group m-form__group">
								<label for="category">
									Category
								</label>
								<input class="form-control m-input m-input--square" id="category" name="category" value="{{ isset($category['name']) ? $category['name'] : '' }}" aria-describedby="categoryHelp" placeholder="Enter category" type="text" required>
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