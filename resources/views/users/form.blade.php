@extends('template')

@section('aside-left')
	<li class="m-menu__item m-menu__item--active" aria-haspopup="true" >
		<a href="index.html" class="m-menu__link ">
			<i class="m-menu__link-icon flaticon-users"></i>
			<span class="m-menu__link-title">
				<span class="m-menu__link-wrap">
					<span class="m-menu__link-text">
						Users
					</span>
				</span>
			</span>
		</a>
	</li>
@endsection

@section('content')
<div class="m-content">
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
				<!--end: Portlet Head-->

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
											<div class="m-form__section m-form__section--first">
												<div class="m-form__heading">
													<h3 class="m-form__heading-title">Personal Information</h3>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label">* First Name:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="name" class="form-control m-input m-input--square" placeholder="" value="" type="text">
														<span class="m-form__help">Please enter your first name</span>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label">* Middle Name:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="name" class="form-control m-input m-input--square" placeholder="" value="" type="text">
														<span class="m-form__help">Please enter your middle name</span>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label">* Last Name:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="name" class="form-control m-input m-input--square" placeholder="" value="" type="text">
														<span class="m-form__help">Please enter your last name</span>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label">* Nickname:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="name" class="form-control m-input m-input--square" placeholder="" value="" type="text">
														<span class="m-form__help">Please enter your nickname</span>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-lg-3 col-form-label">* Gender:</label>
													<div class="col-xl-9 col-lg-9">
														<div class="m-radio-inline">
															<label class="m-radio m-radio--solid m-radio--brand">
																<input name="gender" checked="" value="2" type="radio"> Male
																<span></span>
															</label>
															<label class="m-radio m-radio--solid m-radio--brand">
																<input name="gender" value="2" type="radio"> Female
																<span></span>
														    </label>
														</div>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">
														*Birthdate
													</label>
													<div class="col-lg-4">
														<input class="form-control m-input m-input--square" id="m_datepicker_1" readonly="" placeholder="Select date" type="text">
													</div>

													<label class="col-lg-2 col-form-label">Age:</label>
													<div class="col-lg-4">
														<input name="age" class="form-control m-input m-input--square" placeholder="" readonly value="" type="text">
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">Height:</label>
													<div class="col-lg-4">
														<input name="height" class="form-control m-input m-input--square" placeholder="" value="" type="text">
													</div>

													<label class="col-lg-2 col-form-label">Weight:</label>
													<div class="col-lg-4">
														<input name="weight" class="form-control m-input m-input--square" placeholder="" value="" type="text">
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">Religion:</label>
													<div class="col-lg-4">
														<input name="height" class="form-control m-input m-input--square" placeholder="" value="" type="text">
													</div>

													<label class="col-lg-2 col-form-label">Other Skill:</label>
													<div class="col-lg-4">
														<input name="weight" class="form-control m-input m-input--square" placeholder="" value="" type="text">
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-6 col-lg-6 col-form-label">Other organization membership:</label>
													<div class="col-xl-6 col-lg-6">
														<input name="name" class="form-control m-input m-input--square" placeholder="" value="" type="text">
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
													<label class="col-xl-3 col-lg-3 col-form-label"> *Mobile Number:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="age" class="form-control m-input m-input--square" placeholder="" value="" type="text">
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label"> *Email:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="email" class="form-control m-input m-input--square" placeholder="" value="" type="email">
														<span class="m-form__help">We'll never share your email with anyone else</span>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label"> *Present Address:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="name" class="form-control m-input m-input--square" placeholder="" value="" type="text">
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
											<div class="m-form__section m-form__section--first">
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
															<th>Years</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<select class="m-input m-input--square form-control">
																	<option></option>
																	<option>High School</option>
																	<option>College</option>
																	<option>Others</option>
																</select>
															</td>
															<td><input class="m-input m-input--square form-control" type="text"></td>
															<td><input class="m-input m-input--square form-control" type="text"></td>
															<td><input class="m-input m-input--square form-control datepicker" type="text" placeholder="Select date"></td>
															<td><i class="la la-close"></i></td>
														</tr>
													</tbody>
												</table>

											</div>

											<div class="m-separator m-separator--dashed m-separator--lg"></div>

											<div class="m-form__section">
												<div class="m-form__heading">
													<h3 class="m-form__heading-title">Employment History</h3>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-xl-3 col-lg-3 col-form-label"> Others:</label>
													<div class="col-xl-9 col-lg-9">
														<input name="name" class="form-control m-input" placeholder="" value="" type="text">
													</div>
												</div>

												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">Degree:</label>
													<div class="col-lg-4">
														<input name="height" class="form-control m-input" placeholder="" value="" type="text">
													</div>

													<label class="col-lg-2 col-form-label">Year:</label>
													<div class="col-lg-4">
														<input name="weight" class="form-control m-input" placeholder="" value="" type="text">
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
								<!--end: Form Wizard Step 2-->

								<!--begin: Form Wizard Step 3-->
								<div class="m-wizard__form-step" id="m_wizard_form_step_3">
									<div class="row">
										<div class="col-xl-8 offset-xl-2">
											<div class="m-form__section m-form__section--first">
												<div class="m-form__heading">
													<h3 class="m-form__heading-title">Account Settings</h3>
												</div>
												
												<div class="form-group m-form__group row">
													<div class="col-lg-6 m-form__group-sub">
														<label class="form-control-label">* Username:</label>
														<input name="account_username" class="form-control m-input" placeholder="" value="nick.stone" type="text">
														<span class="m-form__help">Your username to login to your dashboard</span>
													</div>
													<div class="col-lg-6 m-form__group-sub">
														<label class="form-control-label">* Password:</label>
														<input name="account_password" class="form-control m-input" placeholder="" value="qwerty" type="password">
														<span class="m-form__help">Please use letters and at least one number and symbol</span>
													</div>
												</div>

												<div class="form-group m-form__group row">
													<div class="col-lg-4 m-form__group-sub">
														<label class="form-control-label">* Exp Month:</label>
														<select class="form-control m-input" name="billing_card_exp_month">
															<option value="">Select</option>
															<option value="01">01</option>
															<option value="02">02</option>
															<option value="03">03</option>
															<option value="04" selected="">04</option>
															<option value="05">05</option>
															<option value="06">06</option>
															<option value="07">07</option>
															<option value="08">08</option>
															<option value="09">09</option>
															<option value="10">10</option>
															<option value="11">11</option>
															<option value="12">12</option>
														</select>
													</div>
													<div class="col-lg-4 m-form__group-sub">
														<label class="form-control-label">* Exp Year:</label>
														<select class="form-control m-input" name="billing_card_exp_year">
															<option value="">Select</option>
															<option value="2018">2018</option>
															<option value="2019">2019</option>
															<option value="2020">2020</option>
															<option value="2021" selected="">2021</option>
															<option value="2022">2022</option>
															<option value="2023">2023</option>
															<option value="2024">2024</option>
														</select>
													</div>
													<div class="col-lg-4 m-form__group-sub">
														<label class="form-control-label">* CVV:</label>
														<input class="form-control m-input" name="billing_card_cvv" placeholder="" value="450" type="number">
													</div>
												</div>
								            </div>

								            <div class="m-separator m-separator--dashed m-separator--lg"></div>

								            <div class="m-form__section">
												<div class="m-form__heading">
													<h3 class="m-form__heading-title">Billing Address <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="If different than the corresponding address"></i></h3>
												</div>

												<div class="form-group m-form__group row">
													<div class="col-lg-12">
														<label class="form-control-label">* Address 1:</label>
														<input name="billing_address_1" class="form-control m-input" placeholder="" value="Headquarters 1120 N Street Sacramento 916-654-5266" type="text">
													</div>
												</div>

												<div class="form-group m-form__group row">
													<div class="col-lg-12">
														<label class="form-control-label">Address 2:</label>
														<input name="billing_address_2" class="form-control m-input" placeholder="" value="P.O. Box 942873 Sacramento, CA 94273-0001" type="text">
													</div>
												</div>
													
												<div class="form-group m-form__group row">
													<div class="col-lg-5 m-form__group-sub">
														<label class="form-control-label">* City:</label>
														<input class="form-control m-input" name="billing_city" placeholder="" value="Polo Alto" type="text">
													</div>
													<div class="col-lg-5 m-form__group-sub">
														<label class="form-control-label">* State:</label>
														<input class="form-control m-input" name="billing_state" placeholder="" value="California" type="text">
													</div>
													<div class="col-lg-2 m-form__group-sub">
														<label class="form-control-label">* ZIP:</label>
														<input class="form-control m-input" name="billing_zip" placeholder="" value="34890" type="text">
													</div>
												</div>
								            </div>

								            <div class="m-separator m-separator--dashed m-separator--lg"></div>

								            <div class="m-form__section">
									            <div class="m-form__heading">
													<h3 class="m-form__heading-title">Delivery Type</h3>
												</div>	
												<div class="form-group m-form__group">
													<div class="row">
														<div class="col-lg-6">
															<label class="m-option">
															<span class="m-option__control">
															<span class="m-radio m-radio--state-brand">
															<input name="billing_delivery" value="" type="radio">
															<span></span>
															</span>
															</span>
															<span class="m-option__label">
															<span class="m-option__head">												 
															<span class="m-option__title">
															Standart Delevery  				
															</span>
															<span class="m-option__focus">
															Free					
															</span>												 
															</span>
															<span class="m-option__body">
															Estimated 14-20 Day Shipping 
															(&nbsp;Duties end taxes may be due 
															upon delivery&nbsp;)
															</span>
															</span>		
															</label> 
														</div>
														<div class="col-lg-6">
															<label class="m-option">
															<span class="m-option__control">
															<span class="m-radio m-radio--state-brand">
															<input name="billing_delivery" value="" type="radio">
															<span></span>
															</span>
															</span>
															<span class="m-option__label">
															<span class="m-option__head">												 
															<span class="m-option__title">
															Fast Delevery 				
															</span>
															<span class="m-option__focus">
															$&nbsp;8.00					
															</span>												 
															</span>
															<span class="m-option__body">
															Estimated 2-5 Day Shipping
															(&nbsp;Duties end taxes may be due
															upon delivery&nbsp;)
															</span>
															</span>		
															</label> 
														</div>
													</div>
													<div class="m-form__help"><!--must use this helper element to display error message for the options--></div>
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
														<span class="m-accordion__item-title">1. Client Information</span>
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
																	<label class="col-xl-4 col-lg-4 col-form-label">URL:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">sinortech.vertoffice.com</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Username:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">sinortech.admin</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Password:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">*********</span>
																	</div>
																</div>
															</div>
															<div class="m-separator m-separator--dashed m-separator--lg"></div>
															<div class="m-form__section">
																<div class="m-form__heading">
																	<h4 class="m-form__heading-title">Client Settings</h4>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">User Group:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">Customer</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Communications:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">Phone, Email</span>
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
														<span class="m-accordion__item-title">2. Account Setup</span>
														<span class="m-accordion__item-mode"></span>     
													</div>
													<div class="m-accordion__item-body collapse" id="m_accordion_1_item_2_body" role="tabpanel" aria-labelledby="m_accordion_1_item_2_head" data-parent="#m_accordion_1">
														<!--begin::Content--> 
														<div class="tab-content  m--padding-30">
															<div class="m-form__section m-form__section--first">
																<div class="m-form__heading">
																	<h4 class="m-form__heading-title">Account Details</h4>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">URL:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">sinortech.vertoffice.com</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Username:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">sinortech.admin</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Password:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">*********</span>
																	</div>
																</div>
															</div>
															<div class="m-separator m-separator--dashed m-separator--lg"></div>
															<div class="m-form__section">
																<div class="m-form__heading">
																	<h4 class="m-form__heading-title">Client Settings</h4>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">User Group:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">Customer</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Communications:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">Phone, Email</span>
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
														<span class="m-accordion__item-title">3. Billing Setup</span>
														<span class="m-accordion__item-mode"></span>     
													</div>
													<div class="m-accordion__item-body collapse" id="m_accordion_1_item_3_body" role="tabpanel" aria-labelledby="m_accordion_1_item_3_head" data-parent="#m_accordion_1">
														<div class="tab-content  m--padding-30">
															<div class="m-form__section m-form__section--first">
																<div class="m-form__heading">
																	<h4 class="m-form__heading-title">Billing Information</h4>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Cardholder Name:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">Nick Stone</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Card Number:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">*************4589</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Exp Month:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">10</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Exp Year:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">2018</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">CVV:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">***</span>
																	</div>
																</div>
															</div>
															<div class="m-separator m-separator--dashed m-separator--lg"></div>
															<div class="m-form__section">
																<div class="m-form__heading">
																	<h4 class="m-form__heading-title">Billing Address</h4>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Address Line 1:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">Headquarters 1120 N Street Sacramento 916-654-5266</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Address Line 2:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">P.O. Box 942873 Sacramento, CA 94273-0001</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">City:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">Polo Alto</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">State:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">California</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">ZIP:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">37505</span>
																	</div>
																</div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<label class="col-xl-4 col-lg-4 col-form-label">Country:</label>
																	<div class="col-xl-8 col-lg-8">
																		<span class="m-form__control-static">USA</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Section-->	                
											<div class="m-separator m-separator--dashed m-separator--lg"></div>
											<div class="form-group m-form__group m-form__group--sm row">
												<div class="col-xl-12">
													<div class="m-checkbox-inline">
														<label class="m-checkbox m-checkbox--solid m-checkbox--brand">
														<input name="accept" value="1" type="checkbox"> 
														Click here to indicate that you have read and agree to the terms presented in the Terms and Conditions agreement 
														<span></span>
														</label>
													</div>
												</div>
											</div>
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
	<script src="{{ asset('metronic_v5.1.1/assets/demo/default/custom/components/forms/wizard/wizard.js') }}" type="text/javascript"></script>
	<script src="{{ asset('metronic_v5.1.1/assets/demo/default/custom/components/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			const $ed_table = $('#educational-attainment tbody');
			const $edu_add  = $('#edu-add');

			$edu_add.on('click', function() {
				let markup = '<tr>';
						markup += '<td>';
							markup += '<select class="m-input m-input--square form-control">';
								markup += '<option></option>';
								markup += '<option>High School</option>';
								markup += '<option>College</option>';
								markup += '<option>Others</option>';
							markup += '</select>';
						markup += '</td>';

						markup += '<td>';
							markup += '<input class="m-input m-input--square form-control" type="text">';
						markup += '</td>';

						markup += '<td>';
							markup += '<input class="m-input m-input--square form-control" type="text">';
						markup += '</td>';

						markup += '<td>';
							markup += '<input class="m-input m-input--square form-control datepicker" type="text" placeholder="Select date">';
						markup += '</td>';

						markup += '<td><i class="la la-close"></i></td>';

					markup += '</tr>';

				$ed_table.append(markup);

				$('.datepicker').datepicker({
					todayHighlight: true,
					orientation: "bottom left",
					templates: {
						leftArrow: '<i class="la la-angle-left"></i>',
						rightArrow: '<i class="la la-angle-right"></i>'
					}
				});
			});

			$('.datepicker').datepicker({
				todayHighlight: true,
				orientation: "bottom left",
				templates: {
					leftArrow: '<i class="la la-angle-left"></i>',
					rightArrow: '<i class="la la-angle-right"></i>'
				}
			});

			$(document).on('click', '.la-close', function() {
				let self = $(this);

				// Remove the closest table row
				self.closest('tr').remove();
			});
		})
	</script>
@endsection