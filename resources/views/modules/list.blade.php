@extends('template')

@section('content')
	<div class="m-content modules">
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
									List of Modules
								</h3>
							</div>
						</div>

						<div class="m-portlet__head-tools">
							<ul class="m-portlet__nav">
								<li class="m-portlet__nav-item">
									<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
										<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
											<i class="la la-ellipsis-h m--font-brand"></i>
										</a>
										<div class="m-dropdown__wrapper">
											<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
											<div class="m-dropdown__inner">
												<div class="m-dropdown__body">
													<div class="m-dropdown__content">
														<ul class="m-nav">
															<li class="m-nav__section m-nav__section--first">
																<span class="m-nav__section-text">
																	Quick Actions
																</span>
															</li>
															<li class="m-nav__item">
																<a href="{{ route('modules.create') }}" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-share"></i>
																	<span class="m-nav__link-text">
																		Create New Module
																	</span>
																</a>
															</li>
															<li class="m-nav__item">
																<a href="#" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-chat-1"></i>
																	<span class="m-nav__link-text">
																		Send Messages
																	</span>
																</a>
															</li>
															<li class="m-nav__item">
																<a href="#" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-multimedia-2"></i>
																	<span class="m-nav__link-text">
																		Upload File
																	</span>
																</a>
															</li>
															<li class="m-nav__section">
																<span class="m-nav__section-text">
																	Useful Links
																</span>
															</li>
															<li class="m-nav__item">
																<a href="#" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-info"></i>
																	<span class="m-nav__link-text">
																		FAQ
																	</span>
																</a>
															</li>
															<li class="m-nav__item">
																<a href="#" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																	<span class="m-nav__link-text">
																		Support
																	</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="m-portlet__body">
						<!--begin: Search Form -->
						<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
							<div class="row align-items-center">
								<div class="col-xl-12 order-2 order-xl-1">
									<div class="form-group m-form__group row align-items-center">
										<div class="col-md-4">
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
									<th title="Field #2">Training</th>
									<th title="Field #4">Module Name</th>
									<th title="Field #4">Course Period</th>
									<th title="Field #5">Status</th>
									<th title="Field #6">Plan Start</th>
									<th title="Field #7">Completion Date</th>
									<th title="Field #8"></th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								@foreach($modules as $module)
									<tr>
										<td>{{ $i }}</td>
										<td>{{ $module->subcategory->name }}</td>
										<td>{{ $module->name }}</td>
										<td>{{ $module->course_period }}</td>
										<td>{{ count($module->states()->where('user_id', Auth::user()->id)->first()) ? $module->states()->where('user_id', Auth::user()->id)->first()->status : 'Not Yet Started' }}</td>
										<td>{{ $module->plan_start != '0000-00-00' ? date('m/d/Y', strtotime($module->plan_start)) : '' }}</td>
										<td>{{ $module->completion_date != '0000-00-00' ? date('m/d/Y', strtotime($module->completion_date)) : '' }}</td>
										<td>
											<span style="overflow: visible;">
												<div class="dropdown">
													<a href="" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">
														<i class="la la-ellipsis-h"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														@if (in_array(Auth::user()->user_type, array('Administrator')))
															<a class="dropdown-item" href="{{ route('modules.edit', $module->id) }}"><i class="la la-edit"></i> Update Status</a>
														@endif
														@if ($module->plan_start != '0000-00-00' && $module->completion_date != '0000-00-00')
															<?php 
																$current_date = strtotime(date('Y-m-d'));
																$start        = strtotime($module->plan_start);
																$end          = strtotime($module->completion_date);
															?>

															@if ($current_date >= $start && $current_date <= $end)
																<a class="dropdown-item" href="{{ route('modules.show', $module->id) }}"><i class="la la-eye"></i> View</a>
															@endif
														@endif
													</div>
												</div>
											</span>
										</td>
									</tr>
									<?php $i++; ?>
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
		var ModuleTable = function() {
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
							field: '',
							width: 40,
						},
						{
							field: 'Courser Period',
							width: 100,
						},
						{
							field: 'Status',
							width: 100,
						},
						{
							field: 'Plan Start',
							width: 122,
						},
						{
							field: 'Completion Date',
							width: 122,
						},
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
			ModuleTable.getInstance();
		});
	</script>
@endsection()