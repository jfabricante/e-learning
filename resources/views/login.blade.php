<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 5.0.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Metronic | Login Page - 3
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="{{ asset('metronic_5.05/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic_5.05/assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="{{ asset('metronic_5.05/assets/demo/default/media/img/logo/favicon.ico') }}" />
	</head>
	<!-- end::Head -->

    <!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- begin::Grid -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url({{ asset('metronic_5.05/assets/app/media/img//bg/bg-3.jpg') }});">
				<!-- begin::Wrapper-->
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<!-- begin::Container -->
					<div class="m-login__container">
						<!-- begin::Logo -->
						<div class="m-login__logo">
							<a href="#">
								{{-- <img src="{{ asset('metronic_5.05/assets/app/media/img/logos/logo-1.png') }}"> --}}
								<img src="{{ asset('img/logo.svg') }}">
							</a>
						</div>
						<!-- end::Logo -->

						<!-- begin::Signin -->
						<div class="m-login__signin">
							<!-- begin::Header -->
							<div class="m-login__head">
								<h3 class="m-login__title">
									Sign In To Admin
								</h3>
							</div>
							<!-- end::Header -->

							<!-- begin::Form -->
							<form class="m-login__form m-form" action="">

								<div class="form-group m-form__group">
									<input class="form-control m-input"   type="text" placeholder="Email" name="email" autocomplete="off">
								</div>

								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
								</div>

								<div class="row m-login__form-sub">
									<div class="col m--align-left m-login__form-left">
										<label class="m-checkbox  m-checkbox--focus">
											<input type="checkbox" name="remember">
											Remember me
											<span></span>
										</label>
									</div>

									<div class="col m--align-right m-login__form-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">
											Forget Password ?
										</a>
									</div>
								</div>

								<div class="m-login__form-action">
									<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
										Sign In
									</button>
								</div>
							</form>
							<!-- end::Form -->
						</div>
						<!-- end::Signin -->

						<!-- begin:Signup -->
						<div class="m-login__signup">

							<div class="m-login__head">
								<h3 class="m-login__title">
									Sign Up
								</h3>

								<div class="m-login__desc">
									Enter your details to create your account:
								</div>
							</div>

							<!-- begin::Form -->
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Fullname" name="fullname" >
								</div>

								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
								</div>

								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Password" name="password">
								</div>

								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">
								</div>

								<div class="row form-group m-form__group m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--focus">
											<input type="checkbox" name="agree">
											I Agree the
											<a href="#" class="m-link m-link--focus">
												terms and conditions
											</a>
											.
											<span></span>
										</label>

										<span class="m-form__help"></span>
									</div>
								</div>

								<!-- begin::Buttons -->
								<div class="m-login__form-action">
									<!-- Signup button -->
									<button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">
										Sign Up
									</button>
									<!-- ./Signup button -->

									&nbsp;&nbsp;
									<button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">
										Cancel
									</button>
								</div>
								<!-- end::Buttons -->

							</form>
							<!-- end::Form -->

						</div>
						<!-- end::Signup -->

						<!-- begin::Forgot Password -->
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Forgotten Password ?
								</h3>

								<div class="m-login__desc">
									Enter your email to reset your password:
								</div>
							</div>

							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
								</div>

								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primaryr">
										Request
									</button>

									&nbsp;&nbsp;
									<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">
										Cancel
									</button>
								</div>
							</form>
						</div>
						<!-- end::Forgot Password -->

						<div class="m-login__account">
							<span class="m-login__account-msg">
								Don't have an account yet ?
							</span>

							&nbsp;&nbsp;

							<a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">
								Sign Up
							</a>
						</div>
					</div>
					<!-- end::Container -->

				</div>
				<!-- end::Wrapper -->

			</div>
			<!-- end::Grid -->

		</div>
		<!-- end:: Page -->
		<!--begin::Base Scripts -->
		<script src="{{ asset('metronic_5.05/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('metronic_5.05/assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
		<!--end::Base Scripts -->   
		<!--begin::Page Snippets -->
		<script src="{{ asset('metronic_5.05/assets/snippets/pages/user/login.js') }}" type="text/javascript"></script>
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
