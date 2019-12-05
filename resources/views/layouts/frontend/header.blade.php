<header id="header-container">

    <!-- Header -->
    <div id="header">
        <div class="container">
            
            <!-- Left Side Content -->
            <div class="left-side">
                
                <!-- Logo -->
                <div id="logo">
                    <a href="#"><img src="{{url('frontend/')}}/images/logo.png" alt=""></a>
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
                @extends('layouts.frontend.navigation')
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->
                
            </div>
            <!-- Left Side Content / End -->


            <!-- Right Side Content / End -->
            <div class="right-side">
                <div class="header-widget">
                    <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> {{ __('messages.sign_in') }}</a>
					
                     <!-- Language Menu -->
					<div class="user-menu">
						<div class="user-name">@if(app()->getLocale() == 'en') English @else Dutch @endif</div>
						<ul>
							<li><a href="{{url('locale/en')}}"><i class="sl sl-icon-flag"></i> English</a></li>
							<li><a href="{{url('locale/nl')}}"><i class="sl sl-icon-flag"></i> Dutch</a></li>
						</ul>
					</div>
					
                </div>
            </div>
            <!-- Right Side Content / End -->

            <!-- Sign In Popup -->
            <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

                <div class="small-dialog-header">
                    <h3>{{ __('messages.sign_in') }}</h3>
                </div>

                <!--Tabs -->
                <div class="sign-in-form style-1">

                    <ul class="tabs-nav">
                        <li class=""><a href="#tab1">{{ __('messages.sign_in') }}</a></li>
                        <li><a href="#tab2">{{ __('messages.register') }}</a></li>
                    </ul>

                    <div class="tabs-container alt">

                        <!-- Login -->
                        <div class="tab-content" id="tab1" style="display: none;">
                            <form class="m-login__form m-form" method="POST" action="{{ route('login') }}" id="login-form">
                                @csrf
                                <p class="form-row form-row-wide">
                                    <label for="username">{{ __('messages.email') }}:
                                        <i class="im im-icon-Male"></i>
                                        <input class="form-control m-input" id="username" type="email" class="input-text form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="login_password">{{ __('messages.password') }}:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="form-control m-input m-login__form-input--last" id="login_password" type="password" class="input-text form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <span class="lost_password">
                                        <a href="#" >{{ __('messages.lost_your_password') }}</a>
                                    </span>
                                </p>

                                <div class="form-row">
                                    <button type="submit" class="button border margin-top-5" name="login" value="Login">
                                        {{ __('messages.sign_in') }}
                                    </button>
                                    <div class="checkboxes margin-top-10">
                                        <input id="remember-me" type="checkbox" name="check">
                                        <label for="remember-me">{{ __('messages.remember_me') }}</label>
                                    </div>
                                </div>
                                
                            </form>
                        </div>

                        <!-- Register -->
                        <div class="tab-content" id="tab2" style="display: none;">

                            <form method="POST" action="{{ route('register') }}" id="register-form">
                            @csrf
                            <p class="form-row form-row-wide">
                                <label for="first_name">{{ __('messages.first_name') }}:
                                    <i class="im im-icon-Male"></i>
                                    <input id="first_name" type="text" class="input-text form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autofocus>
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                            </p>
							<p class="form-row form-row-wide">
                                <label for="last_name">{{ __('messages.last_name') }}:
                                    <i class="im im-icon-Male"></i>
                                    <input id="last_name" type="text" class="input-text form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autofocus>
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                            </p>
                                
                            <p class="form-row form-row-wide">
                                <label for="email">{{ __('messages.email') }}:
                                    <i class="im im-icon-Mail"></i>
                                    <input id="email" type="email" class="input-text form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                            </p>

                            <p class="form-row form-row-wide">
                                <label for="password">{{ __('messages.password') }}:
                                    <i class="im im-icon-Lock-2"></i>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                            </p>

                            <p class="form-row form-row-wide">
                                <label for="password-confirm">{{ __('messages.confirm_password') }}:
                                    <i class="im im-icon-Lock-2"></i>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </label>
                            </p>

                            <button type="submit" class="button border fw margin-top-10">
                                {{ __('messages.register') }}
                            </button>
    
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Sign In Popup / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>