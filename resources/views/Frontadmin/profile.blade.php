@extends('layouts.frontadmin.app')
@section('title', __('messages.my_profile') )
@section('content')
<style>
input[disabled] {
    background: #d8d8d89e;
}
label.error {
    margin-top: 0;
    margin-bottom: 0;
}
#myprofileForm input,#myprofileForm textarea,#myprofileForm select{
	margin-bottom: 0;
}
</style>
<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2> {{ __('messages.my_profile') }}</h2>
					<!-- Breadcrumbs -->
				</div>
			</div>
		</div>
		<!-- Notice -->

		<div class="row">

			<!-- Profile -->
			<div class="col-lg-6 col-md-12">
				<form action="{{url('user/profile/update')}}" method="post" enctype="multipart/form-data" id="myprofileForm">
					@csrf
					<input type="hidden" name="id" value="{{$user_detail['id']}}" />
					<div class="dashboard-list-box margin-top-0">
						<h4 class="gray">{{ __('messages.profile_details') }}</h4>
						<div class="dashboard-list-box-static">
							
							<!-- Avatar -->
							<div class="edit-profile-photo">
								<img id="preview_img" src="{{isset($user_detail['view_profile_image']) ? $user_detail['view_profile_image'] : url('frontend/images/user-avatar.jpg')}}" alt="">
								<div class="change-photo-btn">
									<div class="photoUpload">
									    <span><i class="fa fa-upload"></i>{{ __('messages.upload_photo') }}</span>
									    <input type="file" name="user_image" id="user_image" class="upload" />
									</div>
								</div>
							</div>
		
							<!-- Details -->
							<div class="my-profile">

								<label>{{ __('messages.first_name') }}</label>
								<input value="{{isset($user_detail['first_name']) ? $user_detail['first_name'] : ''}}" name="first_name" type="text" required>

								<label>{{ __('messages.last_name') }}</label>
								<input value="{{isset($user_detail['last_name']) ? $user_detail['last_name'] : ''}}" name="last_name" type="text" required>

								<label>{{ __('messages.phone') }}</label>
								<input value="{{isset($user_detail['phone']) ? $user_detail['phone'] : ''}}" data-rule-digits="true" data-rule-minlength="10" type="text" name="meta[phone]">

								<label>{{ __('messages.email') }}</label>
								<input value="{{isset($user_detail['email']) ? $user_detail['email'] : ''}}" type="text" name="email" disabled>

								<label>{{ __('messages.bio') }}</label>
								<textarea name="meta[bio]" id="bio" cols="30" rows="10">{{isset($user_detail['bio']) ? $user_detail['bio'] : ''}}</textarea>

								<label>{{ __('messages.address') }}</label>
								<input class="form-control m-input" id="address" type="text" name="meta[address]" placeholder="{{ __('messages.address') }}" value="{{isset($user_detail['address']) ? $user_detail['address'] : ''}}">
								
								<label>{{ __('messages.apt_suite') }}</label>
								<input class="form-control m-input" id="apt_suite" type="text" name="meta[apt_suite]" placeholder="Ex: #123" value="{{isset($user_detail['apt_suite']) ? $user_detail['apt_suite'] : ''}}">
								
								<label>{{ __('messages.city') }}</label>
								<input class="form-control m-input" id="city" type="text" name="meta[city]" placeholder="{{ __('messages.city') }}" value="{{isset($user_detail['city']) ? $user_detail['city'] : ''}}">
								
								<label>{{ __('messages.state') }}</label>
								<input class="form-control m-input" id="state" type="text" name="meta[state]" placeholder="{{ __('messages.state') }}" value="{{isset($user_detail['state']) ? $user_detail['state'] : ''}}">
								
								<label>{{ __('messages.zip') }}</label>
								<input class="form-control m-input" id="zip" type="text" name="meta[zip]" placeholder="{{ __('messages.zip') }}" value="{{isset($user_detail['zip']) ? $user_detail['zip'] : ''}}">
								
								<label>{{ __('messages.neighborhood') }}</label>
								<input class="form-control m-input" id="neighborhood" type="text" name="meta[neighborhood]" placeholder="{{ __('messages.neighborhood') }}" value="{{isset($user_detail['neighborhood']) ? $user_detail['neighborhood'] : ''}}">
								
								<label>{{ __('messages.country') }}</label>
								<input class="form-control m-input" id="country" type="text" name="meta[country]" placeholder="{{ __('messages.country') }}" value="{{isset($user_detail['country']) ? $user_detail['country'] : ''}}">
								
								<label>{{ __('messages.contact_relationship') }}</label>
								<input class="form-control m-input" id="contact_relation" type="text" name="meta[contact_relation]" placeholder="{{ __('messages.contact_relationship') }}" value="{{isset($user_detail['contact_relation']) ? $user_detail['contact_relation'] : ''}}">
								
								<label>{{ __('messages.email') }}</label>
								<input class="form-control m-input" id="contact_email" type="text" name="meta[contact_email]" placeholder="{{ __('messages.email') }}" value="{{isset($user_detail['contact_email']) ? $user_detail['contact_email'] : ''}}">
								
								
								<label><i class="fa fa-twitter"></i> {{ __('messages.twitter_url') }}</label>
								<input placeholder="https://www.twitter.com/" value="{{isset($user_detail['twitter_url']) ? $user_detail['twitter_url'] : ''}}" type="text" name="meta[twitter_url]">

								<label><i class="fa fa-facebook-square"></i> {{ __('messages.facebook_url') }}</label>
								<input placeholder="https://www.facebook.com/" value="{{isset($user_detail['facebook_url']) ? $user_detail['facebook_url'] : ''}}" type="text" name="meta[facebook_url]">

								<label><i class="fa fa-google-plus"></i> {{ __('messages.youtube_url') }}</label>
								<input placeholder="https://www.google.com/" value="{{isset($user_detail['youtube_url']) ? $user_detail['youtube_url'] : ''}}" name="meta[youtube_url]" type="text">
								
								<label><i class="fa fa-instagram"></i> {{ __('messages.instagram_url') }}</label>
								<input placeholder="https://www.instagram.com/" value="{{isset($user_detail['instagram_url']) ? $user_detail['instagram_url'] : ''}}" name="meta[instagram_url]" type="text">
							</div>
		
							<button type="submit" class="button margin-top-15">{{ __('messages.save') }}</button>

						</div>
					</div>
				</form>
			</div>

			<!-- Change Password -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">{{ __('messages.change_password') }}</h4>
					<div class="dashboard-list-box-static">
						<form action="{{url('user/profile/update/password')}}" method="get" id="profilePasswordForm">
							<input type="hidden" name="id" value="{{$user_detail['id']}}" />
							<!-- Change Password -->
							<div class="my-profile">
								<label class="margin-top-0">{{ __('messages.current_password') }}</label>
								<input type="password" name="old"  />

								<label>{{ __('messages.new_password') }}</label>
								<input type="password" name="new1"  id="new1" />

								<label>{{ __('messages.confirm_password') }}</label>
								<input type="password" name="new2"  />

								<button type="submit" class="button margin-top-15">{{ __('messages.change_password') }}</button>
							</div>
						</form>

					</div>
				</div>
			</div>
			
	</div>	
<script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#preview_img').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}
jQuery(document).ready(function() {
	$('#myprofileForm').valid();
	$("#user_image").change(function() {
	  readURL(this);
	});
	$("#profilePasswordForm").validate({
            rules: {
                old:{
					required: !0,
				},new1:{
					required: !0,
					minlength: 8,
				},
				new2:{
					required: !0,
					equalTo: "#new1"
				},
				
            },
            invalidHandler: function(e, r) {
            },
            submitHandler: function(form) {
				form.submit();
			}
        });
});
</script>			
@endsection	