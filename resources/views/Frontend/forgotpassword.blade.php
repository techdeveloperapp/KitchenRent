@extends('layouts.frontend.app')
@section('title', 'Homepage')
@section('content')

<!-- Content
================================================== -->
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <form class="forgot_password_form" id="forgot_password_form">
                @csrf
                <p class="form-row form-row-wide">
                    <label for="username">{{ __('messages.email') }}:
                        <i class="im im-icon-Male"></i>
                        <input class="form-control m-input" id="user_email" type="email" class="input-text form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                        <input type="hidden" name="forgot_token" id="forgot_token" value="{{$token}}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </p>

                <p class="form-row form-row-wide">
                    <label for="login_password">{{ __('messages.new_password') }}:
                        <i class="im im-icon-Lock-2"></i>
                        <input class="form-control m-input m-login__form-input--last" id="reset_password" type="password" class="input-text form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </p>

                <div class="form-row">
                    <button class="button border margin-top-5" name="reset_btn" id="reset_password_btn">
                        {{ __('messages.reset_password_btn') }}
                    </button>
                    
                </div>
                
            </form>
        </div>

    </div>
</div>

<style type="text/css">
    .forgot_password_form
    {
        padding: 60px !important;
    }
    #reset_password_btn
    {
        padding: 10px 75px;
        margin-bottom: 10px;
    }
</style>

@endsection