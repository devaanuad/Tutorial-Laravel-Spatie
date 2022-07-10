<div class="sidebar-wrapper">
	<div>
		<div class="logo-wrapper">
			<a href="{{route('/')}}"><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt=""><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper"><a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>
					<li class="sidebar-main-title">
						<div>
							<h6 class="lan-1">{{ trans('lang.General') }} </h6>
							<p class="lan-2">{{ trans('lang.Dashboards,widgets & layout.') }}</p>
						</div>
					</li>
					<li class="sidebar-list">
						<label class="badge badge-success">2</label><a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/dashboard' ? 'active' : '' }}" href="#"><i data-feather="home"></i><span class="lan-3">{{ trans('lang.Dashboards') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/dashboard' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/dashboard' ? 'block;' : 'none;' }}">
							<li><a class="lan-4 {{ Route::currentRouteName()=='index' ? 'active' : '' }}" href="{{route('index')}}">{{ trans('lang.Default') }}</a></li>
							<li><a class="lan-5 {{ Route::currentRouteName()=='dashboard-02' ? 'active' : '' }}" href="{{route('dashboard-02')}}">{{ trans('lang.Ecommerce') }}</a></li>
						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/page-layouts' ? 'active' : '' }}" href="#"><i data-feather="layout"></i>
							<span class="lan-7">{{ trans('lang.Page layout') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{ request()->route()->getPrefix() == '/page-layouts' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/page-layouts' ? 'block;' : 'none;' }}">
							<li><a href="{{ route('box-layout') }}" class="{{ Route::currentRouteName() == 'box-layout' ? 'active' : '' }}">Boxed</a></li>
							<li><a href="{{ route('layout-rtl') }}" class="{{ Route::currentRouteName() == 'layout-rtl' ? 'active' : '' }}">RTL</a></li>
							<li><a href="{{ route('layout-dark') }}" class="{{ Route::currentRouteName() == 'layout-dark' ? 'active fw-bold' : '' }}">Dark Layout</a></li>
							<li><a href="{{ route('hide-on-scroll') }}" class="{{ Route::currentRouteName() == 'hide-on-scroll' ? 'active' : '' }}">Hide Nav Scroll</a></li>
							<li><a href="{{ route('footer-light') }}" class="{{ Route::currentRouteName() == 'footer-light' ? 'active' : '' }}">Footer Light</a></li>
							<li><a href="{{ route('footer-dark') }}" class="{{ Route::currentRouteName() == 'footer-dark' ? 'active' : '' }}">Footer Dark</a></li>
							<li><a href="{{ route('footer-fixed') }}" class="{{ Route::currentRouteName() == 'footer-fixed' ? 'active' : '' }}">Footer Fixed</a></li>

						</ul>
					</li>
					<li class="sidebar-main-title">
						<div>
							<h6>{{ trans('lang.Pages') }}</h6>
							<p>{{ trans('lang.All neccesory pages added') }}</p>
						</div>
					</li>
					<li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='sample-page' ? 'active' : '' }}" href="{{route('sample-page')}}"><i data-feather="file-text"> </i><span>{{ trans('lang.Sample page') }}</span></a></li>
					<li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='landing-page' ? 'active' : '' }}" href="{{route('landing-page')}}"><i data-feather="file-text"> </i><span>{{ trans('lang.Landing Page') }}</span></a></li>
				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>