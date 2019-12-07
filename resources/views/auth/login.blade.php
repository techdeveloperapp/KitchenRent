<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            {{ __('messages.sign_in') }}
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
        <link href="{{url('loginassets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('loginassets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="{{url('loginassets/demo/default/media/img/logo/favicon.ico')}}" />
		<link href="{{url('loginassets/login.css')}}" rel="stylesheet" type="text/css" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url({{url('loginassets/app/media/img//bg/bg-1.jpg')}});">
                <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
                    <div class="m-login__container">
                        <div class="m-login__logo">
                            <a href="#">
                                <img src="{{url('loginassets/app/media/img//logos/logo-1.png')}}">
                            </a>
                        </div>
                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <h3 class="m-login__title">
                                    {{ __('messages.sign_to_admin') }}
                                </h3>
                            </div>
                            @if (Session::has('login_error'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                  <strong>Warning!</strong> {{ Session::get('login_error') }}
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                            @endif
                            <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('messages.email') }}" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('messages.password') }}" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>


                                <div class="row m-login__form-sub m--hide">
                                    <div class="col m--align-left m-login__form-left">
                                        <label class="m-checkbox  m-checkbox--light">
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
                                    <button type="submit" id="m_login_signin_submit1" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">
                                        {{ __('messages.sign_in') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="m-login__signup">
                            <div class="m-login__head">
                                <h3 class="m-login__title">
                                    Sign Up
                                </h3>
                                <div class="m-login__desc">
                                    Enter your details to create your account:
                                </div>
                            </div>
                            <form method="POST" class="m-login__form m-form" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group m-form__group">
                                    <input id="name" type="text" class="form-control m-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group m-form__group">
                                    <input id="email" type="email" class="form-control m-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group m-form__group">
                                    <input id="password" type="password" class="form-control m-input @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group m-form__group">
                                    <input id="password-confirm" type="password" class="form-control m-input m-login__form-input--last" name="password_confirmation" placeholder="Re-Password" required autocomplete="new-password">
                                </div>
                                <!-- <div class="row form-group m-form__group m-login__form-sub">
                                    <div class="col m--align-left">
                                        <label class="m-checkbox m-checkbox--light">
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
                                </div> -->
                                <div class="m-login__form-action">
                                    <button type="submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
                                        Sign Up
                                    </button>
                                    &nbsp;&nbsp;
                                    <button id="m_login_signup_cancel" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="m-login__forget-password">
                            <div class="m-login__head">
                                <h3 class="m-login__title">
                                    Forgotten Password ?
                                </h3>
                                <div class="m-login__desc">
                                    Enter your email to reset your password:
                                </div>
                            </div>
                            <form class="m-login__form m-form" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group m-form__group">
                                    <input id="m_email" type="email" class="form-control m-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autocomplete="off" placeholder="Email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="m-login__form-action">
                                    <button type="submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
                                        Request
                                    </button>
                                    &nbsp;&nbsp;
                                    <button id="m_login_forget_password_cancel" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="m-login__account m--hide">
                            <span class="m-login__account-msg">
                                Don't have an account yet ?
                            </span>
                            &nbsp;&nbsp;
                            <a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">
                                Sign Up
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        <!--begin::Base Scripts -->
        <script src="{{url('loginassets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
        <script src="{{url('loginassets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
        <!--end::Base Scripts -->   
        <!--begin::Page Snippets -->
        <script src="{{url('loginassets/snippets/custom/pages/user/login.js')}}" type="text/javascript"></script>
        <!--end::Page Snippets -->
    </body>
    <!-- end::Body -->
</html>
