@extends('template')

@section('title')
	Test
@endsection

@section('aside-left')
	@parent
	<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
		<a  href="#" class="m-menu__link m-menu__toggle">
			<i class="m-menu__link-icon flaticon-share"></i>
			<span class="m-menu__link-text">
				Icons
			</span>
			<i class="m-menu__ver-arrow la la-angle-right"></i>
		</a>
		<div class="m-menu__submenu">
			<span class="m-menu__arrow"></span>
			<ul class="m-menu__subnav">
				<li class="m-menu__item " aria-haspopup="true" >
					<a  href="components/icons/flaticon.html" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							Flaticon
						</span>
					</a>
				</li>
				<li class="m-menu__item " aria-haspopup="true" >
					<a  href="components/icons/fontawesome.html" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							Fontawesome
						</span>
					</a>
				</li>
				<li class="m-menu__item " aria-haspopup="true" >
					<a  href="components/icons/lineawesome.html" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							Lineawesome
						</span>
					</a>
				</li>
				<li class="m-menu__item " aria-haspopup="true" >
					<a  href="components/icons/socicons.html" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							Socicons
						</span>
					</a>
				</li>
			</ul>
		</div>
	</li>
@endsection

@section('subheader-title')
	Test
@endsection

@section('content')
	<div class="m-content test">
		<div class="row">
			<div class="col-md-4">
				<!--begin:: Widgets/Top Products-->
				<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<h3 class="m-portlet__head-text">
									Trends
								</h3>
							</div>
						</div>
						<div class="m-portlet__head-tools">
							<ul class="m-portlet__nav">
								<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
									<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
										All
									</a>
									<div class="m-dropdown__wrapper">
										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
										<div class="m-dropdown__inner">
											<div class="m-dropdown__body">
												<div class="m-dropdown__content">
													<ul class="m-nav">
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-share"></i>
																<span class="m-nav__link-text">
																	Activity
																</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-chat-1"></i>
																<span class="m-nav__link-text">
																	Messages
																</span>
															</a>
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
								</li>
							</ul>
						</div>
					</div>
					<div class="m-portlet__body">
						<!--begin::Widget5-->
						<div class="m-widget4">
							<div class="m-widget4__chart m-portlet-fit--sides m--margin-top-10 m--margin-top-20" style="height:260px;">
								<canvas id="m_chart_trends_stats"></canvas>
							</div>
							<div class="m-widget4__item">
								<div class="m-widget4__img m-widget4__img--logo">
									<img src="{{ asset('metronic_5.05/assets/app/media/img/client-logos/logo3.png') }}" alt="">
								</div>
								<div class="m-widget4__info">
									<span class="m-widget4__title">
										Phyton
									</span>
									<br>
									<span class="m-widget4__sub">
										A Programming Language
									</span>
								</div>
								<span class="m-widget4__ext">
									<span class="m-widget4__number m--font-danger">
										+$17
									</span>
								</span>
							</div>
							<div class="m-widget4__item">
								<div class="m-widget4__img m-widget4__img--logo">
									<img src="{{ asset('metronic_5.05/assets/app/media/img/client-logos/logo1.png') }}" alt="">
								</div>
								<div class="m-widget4__info">
									<span class="m-widget4__title">
										FlyThemes
									</span>
									<br>
									<span class="m-widget4__sub">
										A Let's Fly Fast Again Language
									</span>
								</div>
								<span class="m-widget4__ext">
									<span class="m-widget4__number m--font-danger">
										+$300
									</span>
								</span>
							</div>
							<div class="m-widget4__item">
								<div class="m-widget4__img m-widget4__img--logo">
									<img src="{{ asset('metronic_5.05/assets/app/media/img/client-logos/logo2.png') }}" alt="">
								</div>
								<div class="m-widget4__info">
									<span class="m-widget4__title">
										AirApp
									</span>
									<br>
									<span class="m-widget4__sub">
										Awesome App For Project Management
									</span>
								</div>
								<span class="m-widget4__ext">
									<span class="m-widget4__number m--font-danger">
										+$6700
									</span>
								</span>
							</div>
						</div>
						<!--end::Widget 5-->
					</div>
				</div>
				<!--end:: Widgets/Top Products-->
			</div>
		</div>
	</div>
@endsection