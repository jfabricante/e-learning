@extends('template')

@section('content')
<div class="m-content registration-form">
	<div class="row">
		<div class="col-md-9">
			<!--Begin::Main Portlet-->
			<div class="m-portlet">
				<!--begin: Portlet Head-->
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">
								User Registration
								<small>Please provide all the necessary details</small>
							</h3>
						</div>
					</div>

					<div class="m-portlet__head-tools">
						<ul class="m-portlet__nav">
							<li class="m-portlet__nav-item">
								<a href="#" data-toggle="m-tooltip" class="m-portlet__nav-link m-portlet__nav-link--icon" data-direction="left" data-width="auto" title="" data-original-title="Get help with filling up this form">
									<i class="flaticon-info m--icon-font-size-lg3"></i>
								</a>	
							</li>	
						</ul>
					</div>
				</div>
				<!--end: Portasdflet Head-->

				<!--begin: Form Wizard-->
				<div class="m-wizard m-wizard--1 m-wizard--success m-wizard--step-first" id="m_wizard">

					<!--begin: Message container -->
			        <div class="m-portlet__padding-x">
			            <!-- Here you can put a message or alert -->
			        </div>
			        <!--end: Message container -->

					<!--begin: Form Wizard Head -->
					<div class="m-wizard__head m-portlet__padding-x">	
						<!--begin: Form Wizard Progress -->		
						<div class="m-wizard__progress">	
							<div class="progress">		 
								<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: calc(25% + 28px);"></div>						 	
							</div>			 
						</div> 
						<!--end: Form Wizard Progress -->

						<!--begin: Form Wizard Nav -->
						<div class="m-wizard__nav">
							<div class="m-wizard__steps">
								<div class="m-wizard__step m-wizard__step--current" data-wizard-target="#m_wizard_form_step_1">
									<div class="m-wizard__step-info">
										<a href="#" class="m-wizard__step-number">							 
											<span><span>1</span></span>						 
										</a>
										<div class="m-wizard__step-line">
											<span></span>
										</div>
										<div class="m-wizard__step-label">
											Personal Information												 					 
										</div>
									</div>
								</div>

								<div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_2">
									<div class="m-wizard__step-info">
										<a href="#" class="m-wizard__step-number">							
											<span><span>2</span></span>
										</a>
										<div class="m-wizard__step-line">
											<span></span>
										</div>
										<div class="m-wizard__step-label">
											Records
										</div>
									</div>
								</div>

								<div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_3">
									<div class="m-wizard__step-info">
										<a href="#" class="m-wizard__step-number">
											<span><span>3</span></span>
										</a>
										<div class="m-wizard__step-line">
											<span></span>
										</div>
										<div class="m-wizard__step-label">
											Account Settings
										</div>
									</div>
								</div>

								<div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_4">
									<div class="m-wizard__step-info">
										<a href="#" class="m-wizard__step-number">
											<span><span>4</span></span>
										</a>
										<div class="m-wizard__step-line">
											<span></span>
										</div>
										<div class="m-wizard__step-label">
											Confirmation
										</div>
									</div>
								</div>					 
							</div>
						</div>
						<!--end: Form Wizard Nav -->
					</div>
					<!--end: Form Wizard Head -->

					<!--begin: Form Wizard Form-->
					<div class="m-wizard__form">
						<!--
							1) Use m-form--label-align-left class to alight the form input lables to the right
							2) Use m-form--state class to highlight input control borders on form validation
						-->
						<form class="m-form m-form--label-align-left- m-form--state-" id="m_form" novalidate="novalidate">
							<!--begin: Form Body -->
							<div class="m-portlet__body">

								<!--begin: Form Wizard Step 1-->
								<div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
									<div class="row">
										<div class="col-xl-8 offset-xl-2">
											<div class="m-form__section m-form__section--first personal-info">
												<div class="m-form__heading">
													<h3 class="m-form__heading-title">Personal Information</h3>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label">* First Name:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="firstname" id="firstname" class="form-control m-input m-input--square" placeholder="" value="" type="text">
														<span class="m-form__help">Please enter your first name</span>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label">* Middle Name:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="middlename" id="middlename" class="form-control m-input m-input--square" placeholder="" value="" type="text">
														<span class="m-form__help">Please enter your middle name</span>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label">* Last Name:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="lastname" id=lastname class="form-control m-input m-input--square" placeholder="" value="" type="text">
														<span class="m-form__help">Please enter your last name</span>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label">Nickname:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="nickname" id="nickname" class="form-control m-input m-input--square" placeholder="" value="" type="text">
														<span class="m-form__help">Please enter your nickname</span>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-lg-3 col-form-label">* Gender:</label>
													<div class="col-xl-9 col-lg-9">
														<div class="m-radio-inline">
															<label class="m-radio m-radio--solid m-radio--brand">
																<input name="gender" class="gender" value="Male" type="radio"> Male
																<span></span>
															</label>
															<label class="m-radio m-radio--solid m-radio--brand">
																<input name="gender" class="gender" value="Female" type="radio"> Female
																<span></span>
														    </label>
														</div>
														<div class="m-form__help">Please select gender</div>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">
														*Birthdate
													</label>

													<div class="col-lg-4">
														<input class="form-control m-input m-input--square" id="birthdate" name="birthdate" readonly="" placeholder="Select date" type="text">
													</div>

													<label class="col-lg-2 col-form-label">Age:</label>
													<div class="col-lg-4">
														<input name="age" id="age" class="form-control m-input m-input--square" placeholder="" readonly value="" type="text">
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">* Height</label>
													<div class="col-lg-4">
														<div class="input-group m-input-icon--right">
															<input type="text" name="height" id="height" class="form-control m-input m-input--square" placeholder="">
															<div class="input-group-append">
																<span class="input-group-text">
																	cm
																</span>
															</div>
														</div>
														<span class="m-form__help">
															Please enter your height
														</span>
													</div>

													<label class="col-lg-2 col-form-label">* Weight</label>
													<div class="col-lg-4">
														<div class="input-group m-input-icon--right">
															<input type="text" name="weight" id="weight" class="form-control m-input m-input--square" placeholder="">
															<div class="input-group-append">
																<span class="input-group-text">
																	kg
																</span>
															</div>
														</div>
														<span class="m-form__help">
															Please enter your weight
														</span>
													</div>

												</div>

												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">* Religion:</label>
													<div class="col-lg-4">
														<input name="religion" class="form-control m-input m-input--square" placeholder="" value="" type="text">
													</div>

													<label class="col-lg-2 col-form-label">Other Skill:</label>
													<div class="col-lg-4">
														<input name="skill" class="form-control m-input m-input--square" placeholder="" value="" type="text">
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-6 col-lg-6 col-form-label">Other organization membership:</label>
													<div class="col-xl-6 col-lg-6">
														<input name="membership" class="form-control m-input m-input--square" placeholder="" value="" type="text">
													</div>
												</div>

												<div class="m-separator m-separator--dashed m-separator--lg"></div>

									            <div class="m-form__section">
													<div class="m-form__heading">
														<h3 class="m-form__heading-title">
															Contacts & Address
															<i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="Some help text goes here"></i>
														</h3>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label">* Mobile</label>
													<div class="col-xl-9 col-lg-9">
														<div class="input-group">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-phone"></i>
																</span>
															</div>
															<input type="text" name="mobile" id="mobile" class="form-control m-input" placeholder="">
														</div>
														<span class="m-form__help">
															Enter your valid mobile number
														</span>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label"> *Email:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="email" id="email" class="form-control m-input m-input--square" placeholder="" value="" type="email">
														<span class="m-form__help">We'll never share your email with anyone else</span>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label"> *Present Address:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="present-address" id="present-address" class="form-control m-input m-input--square" placeholder="" value="" type="text">
													</div>
												</div>
											</div>
										</div>
									</div>			
								</div>
								<!--end: Form Wizard Step 1-->

								<!--begin: Form Wizard Step 2-->
								<div class="m-wizard__form-step" id="m_wizard_form_step_2">
									<div class="row">
										<div class="col-xl-12">
											<div class="m-form__section m-form__section--first education">
												<div class="m-form__heading">
													<h3 class="m-form__heading-title">Educational Attainment</h3>

													<button type="button" class="btn btn-primary pull-right" id="edu-add">Add row</button>
												</div>

												<table class="table" id="educational-attainment">
													<thead>
														<tr>
															<th>Level/Degree</th>
															<th>Name of Institution</th>
															<th>Degree Earned</th>
															<th>Year</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<select class="form-control m-select2 level" name="level[]">
																	<option></option>
																	<option>High School</option>
																	<option>College</option>
																	<option>Others</option>
																</select>
															</td>
															<td><input class="m-input m-input--square form-control" type="text" name="institution[]"></td>
															<td><input class="m-input m-input--square form-control" type="text" name="degree[]"></td>
															<td><input class="m-input m-input--square form-control school-year" type="text" name="school-year[]" placeholder="Select date"></td>
															<td><i class="la la-close"></i></td>
														</tr>
													</tbody>
												</table>

											</div>

											<div class="m-separator m-separator--dashed m-separator--lg"></div>

											<div class="m-form__section current-emp">
												<div class="m-form__heading">
													<h3 class="m-form__heading-title">Current Employment</h3>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-lg-1 col-form-label">Group:</label>
													<div class="col-lg-3">
														<select class="form-control m-select2" name="group" id="group">
															<option></option>
															@foreach ($dealer_groups as $row)
																<option value="{{ $row->dealer_group_id }}">{{ $row->dealer_group_name }}</option>
															@endforeach
														</select>
													</div>

													<label class="col-lg-1 col-form-label">Dealership:</label>
													<div class="col-lg-3">
														<select class="form-control m-select2" name="dealership" id="dealership">
															<option></option>
														</select>
													</div>

													<label class="col-lg-1 col-form-label">Position:</label>
													<div class="col-lg-3">
														{{-- <input name="position" id="position" class="form-control m-input m-input--square" placeholder="" value="" type="text"> --}}
														<select class="form-control m-select2" name="position" id="position">
															<option></option>
															@foreach ($positions as $row)
																<option value="{{ $row->job_id }}">{{ $row->job_description }}</option>
															@endforeach
														</select>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">Date Hired:</label>
													<div class="col-lg-3">
														<input name="date-hired" id="date-hired" class="form-control m-input m-input--square" id="date-hired" placeholder="" value="" type="text" readonly>
													</div>

													<label class="col-lg-3 col-form-label">Duties and Responsibilities:</label>
													<div class="col-lg-3">
														<input name="duties" id="duties" class="form-control m-input m-input--square" placeholder="" value="" type="text">
													</div>
												</div>

											</div>

											<div class="m-separator m-separator--dashed m-separator--lg"></div>

											<div class="m-form__section employment">
												<div class="m-form__heading">
													<h3 class="m-form__heading-title">Previous Employment</h3>

													<button type="button" class="btn btn-primary pull-right" id="emp-add">Add row</button>
												</div>

												<table class="table" id="previous-employment">
													<thead>
														<tr>
															<th>Company</th>
															<th>Address</th>
															<th>Position</th>
															<th>Inclusive Dates</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><input class="m-input m-input--square form-control prev-company" type="text" name="prev-company[]"></td>
															<td><input class="m-input m-input--square form-control prev-address" type="text" name="prev-address[]"></td>
															<td><input class="m-input m-input--square form-control prev-position" type="text" name="prev-position[]"></td>
															<td><input class="m-input m-input--square form-control prev-inclusive-date" name="prev-inc-date[]" type="text" placeholder="mm/dd/yyyy - mm/dd/yyyy"></td>
															<td><i class="la la-close"></i></td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="m-separator m-separator--dashed m-separator--lg"></div>

											<div class="m-form__section traning">
												<div class="m-form__heading">
													<h3 class="m-form__heading-title">Trainings Attended</h3>

													<button type="button" class="btn btn-primary pull-right" id="tra-add">Add row</button>
												</div>

												<table class="table" id="training-attended">
													<thead>
														<tr>
															<th>Title of Training</th>
															<th>Trainer</th>
															<th>Venue</th>
															<th>Date</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><input class="m-input m-input--square form-control training-title" type="text" name="training-title[]"></td>
															<td><input class="m-input m-input--square form-control training-trainer" type="text" name="training-trainer[]"></td>
															<td><input class="m-input m-input--square form-control training-venue" type="text" name="training-venue[]"></td>
															<td><input class="m-input m-input--square form-control training-date" type="text" placeholder="Select date" name="training-date[]"></td>
															<td><i class="la la-close"></i></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<!--end: Form Wizard Step 2-->

								<!--begin: Form Wizard Step 3-->
								<div class="m-wizard__form-step" id="m_wizard_form_step_3">
									<div class="row">
										<div class="col-xl-8 offset-xl-2">
											<div class="m-form__section m-form__section--first account">
												<div class="m-form__heading">
													<h3 class="m-form__heading-title">Account Settings</h3>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label">* Username:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="account_username" id="account_username" class="form-control m-input m-input--square" readonly placeholder="" value="" type="text">
														<span class="m-form__help">Your username to login to your dashboard</span>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label">* Password:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="account_password" id="account_password" class="form-control m-input m-input--square" placeholder="" value="" type="password">
														<span class="m-form__help">Please use letters and at least one number and symbol</span>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label">* User Type:</label>
													<div class="col-xl-9 col-lg-9">
														<select class="m-input m-input--square form-control" name="account_user_type" id="account_user_type">
															<option></option>
															<option value="Administrator">Administrator</option>
															<option value="DealerAdmin">Dealer Admin</option>
															<option value="Regular">Regular</option>
														</select>
													</div>
												</div>

											</div>

										</div>
									</div>
								</div>
								<!--end: Form Wizard Step 3-->

								<!--begin: Form Wizard Step 4-->
								<div class="m-wizard__form-step" id="m_wizard_form_step_4">
									<div class="row">
										<div class="col-xl-8 offset-xl-2">
											<!--begin::Section-->                                            
											<div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">
												<!--begin::Item-->              
												<div class="m-accordion__item active">
													<div class="m-accordion__item-head" role="tab" id="m_accordion_1_item_1_head" data-toggle="collapse" href="#m_accordion_1_item_1_body" aria-expanded="  false">
														<span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
														<span class="m-accordion__item-title">1. Personal Information</span>
														<span class="m-accordion__item-mode"></span>     
													</div>
													<div class="m-accordion__item-body collapse show" id="m_accordion_1_item_1_body" role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1">
														<!--begin::Content--> 	  
														<div class="tab-content  m--padding-30">
															<div class="m-form__section m-form__section--first">
																<div class="m-form__heading">
																	<h4 class="m-form__heading-title">Account Details</h4>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Firstname:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="firstname-txt"></span>
																	</div>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Middlename:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="middlename-txt"></span>
																	</div>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Lastname:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="lastname-txt"></span>
																	</div>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Gender:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="gender-txt"></span>
																	</div>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Birthdate:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="birthdate-txt"></span>
																	</div>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Mobile:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="mobile-txt"></span>
																	</div>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Email:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="email-txt"></span>
																	</div>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Present Address:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="present-address-txt"></span>
																	</div>
																</div>
															</div>
														</div>
														<!--end::Content--> 
													</div>
												</div>
												<!--end::Item--> 
												<!--begin::Item--> 
												<div class="m-accordion__item">
													<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_1_item_2_head" data-toggle="collapse" href="#m_accordion_1_item_2_body" aria-expanded="    false">
														<span class="m-accordion__item-icon"><i class="fa  flaticon-placeholder"></i></span>
														<span class="m-accordion__item-title">2. Current Employment</span>
														<span class="m-accordion__item-mode"></span>     
													</div>

													<div class="m-accordion__item-body collapse" id="m_accordion_1_item_2_body" role="tabpanel" aria-labelledby="m_accordion_1_item_2_head" data-parent="#m_accordion_1">
														<!--begin::Content--> 
														<div class="tab-content  m--padding-30">
															<div class="m-form__section m-form__section--first">
																<div class="m-form__heading">
																	<h4 class="m-form__heading-title">Employment Details</h4>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Dealer Group:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="group-txt"></span>
																	</div>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Dealership:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="dealership-txt"></span>
																	</div>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Position:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="position-txt"></span>
																	</div>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Date Hired:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="date-hired-txt"></span>
																	</div>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Responsibilities:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="duties-txt"></span>
																	</div>
																</div>
															</div>
														</div>
														<!--end::Content--> 
													</div>
												</div>
												<!--end::Item--> 
												<!--begin::Item--> 
												<div class="m-accordion__item">
													<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_1_item_3_head" data-toggle="collapse" href="#m_accordion_1_item_3_body" aria-expanded="    false">
														<span class="m-accordion__item-icon"><i class="fa  flaticon-alert-2"></i></span>
														<span class="m-accordion__item-title">3. Account Setup</span>
														<span class="m-accordion__item-mode"></span>     
													</div>
													<div class="m-accordion__item-body collapse" id="m_accordion_1_item_3_body" role="tabpanel" aria-labelledby="m_accordion_1_item_3_head" data-parent="#m_accordion_1">
														<div class="tab-content  m--padding-30">
															<div class="m-form__section m-form__section--first">
																<div class="m-form__heading">
																	<h4 class="m-form__heading-title">Account Credentials</h4>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Username/Email:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="username-txt"></span>
																	</div>
																</div>

																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Password:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static" id="password-txt"></span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Section-->
										</div>
									</div>
								</div>
								<!--end: Form Wizard Step 4-->

							</div>
							<!--end: Form Body -->

							<!--begin: Form Actions -->
							<div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
								<div class="m-form__actions m-form__actions">
									<div class="row">
										<div class="col-lg-2"></div>
										<div class="col-lg-4 m--align-left">
											<a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
												<span>
													<i class="la la-arrow-left"></i>&nbsp;&nbsp;
													<span>Back</span>
												</span>
											</a>
										</div>
										<div class="col-lg-4 m--align-right">
											<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
												<span>
													<i class="la la-check"></i>&nbsp;&nbsp;
													<span>Submit</span>
												</span>
											</a>
											<a href="#" class="btn btn-warning m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
												<span>
													<span>Save &amp; Continue</span>&nbsp;&nbsp;
													<i class="la la-arrow-right"></i>
												</span>
											</a>
										</div>
										<div class="col-lg-2"></div>
									</div>
								</div>
							</div>
							<!--end: Form Actions -->

							{!! csrf_field() !!}
						</form>
					</div>
					<!--end: Form Wizard Form-->
				</div>
				<!--end: Form Wizard-->
			</div>
			<!--End::Main Portlet-->
		</div>
	</div>
</div>
@endsection

@section('scripts')
	@parent
	<script src="{{ asset('metronic_v5.1.1/assets/demo/default/custom/components/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/formwizard.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/records.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/userform.js') }}" type="text/javascript"></script>
@endsection