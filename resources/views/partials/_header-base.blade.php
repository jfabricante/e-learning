<!-- BEGIN: Header -->
<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
	<!-- begin:: container -->
	<div class="m-container m-container--fluid m-container--full-height">
		<!-- begin:: Stack -->
		<div class="m-stack m-stack--ver m-stack--desktop">
			<!-- begin:: Brand -->
			@include('partials/_header-brand')
			<!-- end:: Brand -->

			<!-- header component -->
			<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
				
				<!-- begin:: Horizontal -->
				{{-- @include('partials/_header-hor') --}}
				<!-- end:: Horizontal -->	

				<!-- BEGIN: Topbar -->
				@include('partials/_header-topbar')
				<!-- END: Topbar -->
			</div>
			<!-- ./header component -->

		</div>
		<!-- end:: Stack -->
	</div>
	<!-- end:: Container -->
</header>
<!-- END: Header -->