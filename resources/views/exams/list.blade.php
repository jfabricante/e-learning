@extends('template')

@section('content')
	<div class="m-content config">
		<div class="row">
			<div class="col-md-12">
				@if (Session::has('msg'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
						{{ session('msg') }}
					</div>
				@endif

				<div class="m-portlet m-portlet--mobile">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<span class="m-portlet__head-icon">
									<i class="flaticon-layers"></i>
								</span>

								<h3 class="m-portlet__head-text">
									List of Exams
								</h3>
							</div>
						</div>
					</div>

					<div class="m-portlet__body">
						<!--begin: Search Form -->
						<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
							<div class="row align-items-center">
								<div class="col-xl-12 order-2 order-xl-1">
									<div class="form-group m-form__group row align-items-center">
										<div class="col-md-3">
											<div class="m-input-icon m-input-icon--left">
												<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
												<span class="m-input-icon__icon m-input-icon__icon--left">
													<span>
														<i class="la la-search"></i>
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end: Search Form -->

						<!--begin: Datatable -->
						<table class="m-datatable" id="html_table" width="100%">
							<thead>
								<tr>
									<th title="Field #1">#</th>
									<th title="Field #2">Description</th>
									<th title="Field #3">Items</th>
									<th title="Field #4">Time Limit</th>
									<th title="Field #5">Date Start</th>
									<th title="Field #6">Date End</th>
									<th title="Field #7">Score</th>
									<th title="Field #8"></th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1 ?>
								@foreach($exams as $row)
									<tr>
										<td>{{ $i }}</td>
										<td>{{ $row->description }}</td>
										<td>{{ array_sum(array_column($row->subCategoryItems->toArray(), 'items')) }}</td>
										<td>{{ $row->time_limit }}</td>
										<td>{{ date('m/d/Y', strtotime($row->date_start)) }}</td>
										<td>{{ date('m/d/Y', strtotime($row->date_end)) }}</td>
										<td>{{ $row->userExamConfig()->where('user_id', Auth::user()->id)->first() ? $row->userExamConfig()->where('user_id', Auth::user()->id)->first()->examQuestions->map(function($item) {return count($item->examAnswer) ? $item->examAnswer : 0 ; })->sum('is_correct') : 0 }}
										</td>
										<td>
											<span style="overflow: visible;">
												<div class="dropdown">
													<a href="" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">
														<i class="la la-ellipsis-h"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="{{ route('exams.show', $row->id) }}"><i class="la la-edit"></i> Take Exam</a>
														<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
														<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
													</div>
												</div>
											</span>
										</td>
									</tr>
									<?php $i++ ?>
								@endforeach
							</tbody>
						</table>
						<!--end: Datatable -->
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	@parent
	<script type="text/javascript">
		var DatatableData = function() {
			var init = function() {
				var datatable = $('.m-datatable').mDatatable({
					data: {
						saveState: {cookie: false},
					},
					search: {
						input: $('#generalSearch'),
					},
					columns: [
						{
							field: '#',
							width: 40,
							textAlign: 'center',
						},
						{
							field: 'Description',
							width: 200,
						},
						{
							field: '',
							width: 40,
						}
					],
				});
			};

			return {
				getInstance: function() {
					init();
				}
			}
		}();

		$(document).ready(function() {
			DatatableData.getInstance();
		})
	</script>
@endsection