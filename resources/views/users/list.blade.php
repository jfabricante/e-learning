@extends('template')

@section('content')
	<div class="m-content users">
		<div class="row">
			<div class="col-md-12">
				<div class="m-portlet m-portlet--mobile">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<span class="m-portlet__head-icon">
									<i class="flaticon-users"></i>
								</span>

								<h3 class="m-portlet__head-text">
									List of Users
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
																<a href="{{ route('users.create') }}" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-share"></i>
																	<span class="m-nav__link-text">
																		Create New User
																	</span>
																</a>
															</li>
															<li class="m-nav__item">
																<a href="" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-chat-1"></i>
																	<span class="m-nav__link-text">
																		Send Messages
																	</span>
																</a>
															</li>
															<li class="m-nav__item">
																<a href="" class="m-nav__link">
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
																<a href="" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-info"></i>
																	<span class="m-nav__link-text">
																		FAQ
																	</span>
																</a>
															</li>
															<li class="m-nav__item">
																<a href="" class="m-nav__link">
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
								<div class="col-xl-8 order-2 order-xl-1">
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
						<table class="m-datatable" id="html_table">
							<thead>
								<tr>
									<th title="RecordID">#</th>
									<th title="Email">Email</th>
									<th title="Name">Name</th>
									<th title="Dealer">Dealer</th>
									<th title="JobPosition">Job Position</th>
									<th title="Status">Status</th>
									<th title="Actions">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1 ?>
								@foreach($trainees as $trainee)
									<tr>
										<td>{{ $i }}</td>
										<td>{{ $trainee->email }}</td>
										<td>{{ $trainee->getFullname() }}</td>
										<td>{{ $trainee->dealer->dealer_name }}</td>
										<td>{{ $trainee->position->job_description }}</td>
										<td>
											<span class="m--font-bold m--font-success">
												{{ $trainee->status->description }}
											</span>
										</td>
										<td>
											<span style="overflow: visible;">
												<div class="dropdown">
													<a href="" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">
														<i class="la la-ellipsis-h"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
														<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
														<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
													</div>
												</div>
											</span>
										</td>
									</tr>
									<?php $i = $i + 1 ?>
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
							field: 'Email',
							width: 300,
						}
					],
				});
			};
			
			return {
				getInstance: function() {
					init();
				},
			};
		}();

		$(document).ready(function() {
			DatatableData.getInstance();
		});
	</script>
@endsection
