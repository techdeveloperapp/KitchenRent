<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.html"><img src="{{url('frontend/')}}/images/logo.png" alt=""></a>
					<a href="index.html" class="dashboard-logo"><img src="{{url('frontend/')}}/images/logo2.png" alt=""></a>
				</div>
				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				@include('layouts.common.top-navigation')
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
                <div class="header-widget">
                    @if(Auth::user())
						@include('layouts.common.myaccount-menu')	
                    @else
                    <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> {{ __('messages.sign_in') }}</a>
					@endif
                     <!-- Language Menu -->
					@include('layouts.common.language-menu')
					
                </div>
            </div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>