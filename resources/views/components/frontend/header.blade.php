<header id="site-header" class="header navbar navbar-expand-lg navbar-light fixed-top" v-bind:class="`${isSticky ? 'is-sticky' : ''}`">
 <nav class="container-xl" aria-label="Main navigation">
    <a class="navbar-brand" href="{{ route('home') }}">
	    <picture v-if="isSticky">
		    <source srcset="{{ url('brand/colored-logo@2x.png') }}" type="image/svg+xml">
			<img src="{{ url('brand/colored-logo.png') }}" class="img-fluid" alt="{{ config('app.name') }} Logo" width="125">
		</picture>
	    <picture v-else>
		    <source srcset="{{ url('brand/lighten-logo@2x.png') }}" type="image/svg+xml">
			<img src="{{ url('brand/lighten-logo.png') }}" class="img-fluid" alt="{{ config('app.name') }} Logo" width="125">
		</picture>
	</a>
	<ul class="navbar-toggle-nav list-unstyled list-inline d-block d-lg-none mb-0">
	    <li class="nav-item list-inline-item">
			<a href="#" class="nav-link nav-toggle-link-wishlist">
			    <span><i class="fa far fa-heart fs-4"></i></span>
				<span class="badge rounded-pill wishlist-toggle-notice">0</span>
			</a>
		</li>
		<li class="nav-item list-inline-item">
			<a href="#" class="nav-link nav-toggle-link-cart">
			    <span><i class="fas fa-store-alt fs-4"></i></span>
				<span class="badge rounded-pill cart-toggle-notice">0</span>
			</a>
		</li>
		<li class="nav-item list-inline-item">
			<a href="" class="nav-link"><span><i class="fa fas fa-user-circle fs-4"></i></span></a>
		</li>
		<li class="nav-item list-inline-item">
			<a href="#" class="nav-link"><span><i class="fas fa-language fs-4"></i></span></a>
		</li>
	</ul>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <hr class="d-block d-lg-none text-muted mt-2 mb-1">
		<ul class="navbar-nav navbar-nav-left-side ms-auto">
		    <li class="nav-item nav-menu-item">
			    <a href="{{ route('home') }}" class="nav-link {{ (request()->routeIs('home')) ? 'is-active' : '' }}">{{ __('home') }}</a>
			</li>
		    <li class="nav-item nav-menu-item">
			    <a href="{{ route('deals') }}" class="nav-link {{ (request()->routeIs('deals')) ? 'is-active' : '' }}">{{ __('deals') }}</a>
			</li>
		    <li class="nav-item nav-menu-item">
			    <a href="{{ route('locations') }}" class="nav-link {{ (request()->routeIs('locations')) ? 'is-active' : '' }}">{{ __('locations') }}</a>
			</li>
		    <li class="nav-item nav-menu-item dropdown">
			    <a href="#" id="navbarDropdown" class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ __('pages') }}</a>
			    <ul class="dropdown-menu submenu-dropdown-menu" aria-labelledby="navbarDropdown">
					<li class="nav-dropdown-item"><a class="dropdown-item {{ (request()->routeIs('faqs')) ? 'is-active' : '' }}" href="{{ route('faqs') }}">{{ __('faqs') }}</a></li>
				</ul>
			</li>
		    <li class="nav-item nav-menu-item">
			    <a href="{{ route('contact') }}" class="nav-link {{ (request()->routeIs('contact')) ? 'is-active' : '' }}">{{ __('contact') }}</a>
			</li>
		</ul>
		<ul class="navbar-nav navbar-nav-right-side ms-auto d-none d-lg-flex">
		    <li class="nav-item nav-menu-item dropdown">
		        <a href="#" id="navbarLanguageDropdown" class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span><i class="fas fa-language fs-4"></i></span></a>
			    <ul class="dropdown-menu submenu-dropdown-menu" aria-labelledby="navbarLanguageDropdown">
				    <li class="nav-dropdown-item"><a class="dropdown-item" href="#"><span class="flag-icon flag-icon-us me-2"></span> {{ __('english') }}</a></li>
					<li class="nav-dropdown-item"><a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr me-2"></span> {{ __('french') }}</a></li>
					<li class="nav-dropdown-item"><a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ma me-2"></span> {{ __('arabic') }}</a></li>
				</ul>
			</li>
			<li class="nav-item nav-menu-item">
			    <a href="#" class="nav-link nav-link-wishlist">
				    <span><i class="fa far fa-heart fs-4"></i></span>
					<span class="badge rounded-pill wishlist-notice">0</span>
				</a>
			</li>
		    <li class="nav-item nav-menu-item">
			    <a href="#cartModal" class="nav-link nav-link-cart" data-bs-toggle="modal" data-bs-target="#cartModal">
				    <span><i class="fas fa-store-alt fs-4"></i></span>
					<span class="badge rounded-pill cart-notice">0</span>
			    </a>
			</li>
		    <li class="nav-item nav-menu-item">
			    <a href="" class="nav-link"><span><i class="fa far fa-user-circle fs-4"></i></span></a>
			</li>
		</ul>
    </div>
</nav>
</header>