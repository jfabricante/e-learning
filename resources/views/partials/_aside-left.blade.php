<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
	<i class="la la-close"></i>
</button>

<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
	<!-- BEGIN: Aside Menu -->
	<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
		<!-- Begin:: Menu definition -->
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
			<!-- section: aside left -->
			<?php $segment = explode('/', Request::url()); ?>

			@section('aside-left')
				<li class="m-menu__item {{ $segment[5] == 'users' ? 'm-menu__item--active' : '' }}" aria-haspopup="true" >
					<a href="{{ route('users.index') }}" class="m-menu__link ">
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

				<li class="m-menu__item {{ $segment[5] == 'categories' ? 'm-menu__item--active' : '' }}" aria-haspopup="true" >
					<a href="{{ route('categories.index')}}" class="m-menu__link ">
						<i class="m-menu__link-icon flaticon-tabs"></i>
						<span class="m-menu__link-title">
							<span class="m-menu__link-wrap">
								<span class="m-menu__link-text">
									Categories
								</span>
							</span>
						</span>
					</a>
				</li>

				<li class="m-menu__item {{ $segment[5] == 'subcategories' ? 'm-menu__item--active' : '' }}" aria-haspopup="true" >
					<a href="{{ route('subcategories.index')}}" class="m-menu__link ">
						<i class="m-menu__link-icon flaticon-tabs"></i>
						<span class="m-menu__link-title">
							<span class="m-menu__link-wrap">
								<span class="m-menu__link-text">
									Sub Categories
								</span>
							</span>
						</span>
					</a>
				</li>

				<li class="m-menu__item {{ $segment[5] == 'modules' ? 'm-menu__item--active' : '' }}" aria-haspopup="true" >
					<a href="{{ route('modules.index')}}" class="m-menu__link ">
						<i class="m-menu__link-icon flaticon-tabs"></i>
						<span class="m-menu__link-title">
							<span class="m-menu__link-wrap">
								<span class="m-menu__link-text">
									Modules
								</span>
							</span>
						</span>
					</a>
				</li>

				<li class="m-menu__item {{ $segment[5] == 'exams' ? 'm-menu__item--active' : '' }}" aria-haspopup="true" >
					<a href="{{ route('exams.index')}}" class="m-menu__link ">
						<i class="m-menu__link-icon flaticon-tabs"></i>
						<span class="m-menu__link-title">
							<span class="m-menu__link-wrap">
								<span class="m-menu__link-text">
									Exams
								</span>
							</span>
						</span>
					</a>
				</li>
				<!-- ./Menu items -->
			@show
			<!-- ./section aside-left -->
		</ul>
		<!-- end: Menu definition -->
	</div>
	<!-- END: Aside Menu -->
</div>