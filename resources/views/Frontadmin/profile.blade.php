@extends('layouts.frontadmin.app')
@section('title', __('messages.my_profile') )
@section('content')
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
				<form action="{{url('user/profile/update')}}" method="post" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="id" value="{{$user_detail['id']}}" />
					<div class="dashboard-list-box margin-top-0">
						<h4 class="gray">Profile Details</h4>
						<div class="dashboard-list-box-static">
							
							<!-- Avatar -->
							<div class="edit-profile-photo">
								<img src="{{isset($user_detail['view_profile_image']) ? $user_detail['view_profile_image'] : url('frontend/images/user-avatar.jpg')}}" alt="">
								<div class="change-photo-btn">
									<div class="photoUpload">
									    <span><i class="fa fa-upload"></i> Upload Photo</span>
									    <input type="file" name="user_image" class="upload" />
									</div>
								</div>
							</div>
		
							<!-- Details -->
							<div class="my-profile">

								<label>First Name</label>
								<input value="{{isset($user_detail['first_name']) ? $user_detail['first_name'] : ''}}" name="first_name" type="text">

								<label>Last Name</label>
								<input value="{{isset($user_detail['last_name']) ? $user_detail['last_name'] : ''}}" name="last_name" type="text">

								<label>Phone</label>
								<input value="{{isset($user_detail['phone']) ? $user_detail['phone'] : ''}}" type="text" name="meta[phone]">

								<label>Email</label>
								<input value="{{isset($user_detail['email']) ? $user_detail['email'] : ''}}" type="text" name="email">

								<label>Bio</label>
								<textarea name="meta[bio]" id="notes" cols="30" rows="10">{{isset($user_detail['bio']) ? $user_detail['bio'] : ''}}</textarea>

								<label><i class="fa fa-twitter"></i> Twitter</label>
								<input placeholder="https://www.twitter.com/" value="{{isset($user_detail['twitter_url']) ? $user_detail['twitter_url'] : ''}}" type="text" name="meta[twitter_url]">

								<label><i class="fa fa-facebook-square"></i> Facebook</label>
								<input placeholder="https://www.facebook.com/" value="{{isset($user_detail['facebook_url']) ? $user_detail['facebook_url'] : ''}}" type="text" name="meta[facebook_url]">

								<label><i class="fa fa-google-plus"></i> Google+</label>
								<input placeholder="https://www.google.com/" value="{{isset($user_detail['instagram_url']) ? $user_detail['instagram_url'] : ''}}" name="meta[instagram_url]" type="text">
							</div>
		
							<button type="submit" class="button margin-top-15">Save Changes</button>

						</div>
					</div>
				</form>
			</div>

			<!-- Change Password -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Change Password</h4>
					<div class="dashboard-list-box-static">
						<form action="{{url('user/profile/update/password')}}" method="GET">
							<input type="hidden" name="id" value="{{$user_detail['id']}}" />
							<!-- Change Password -->
							<div class="my-profile">
								<label class="margin-top-0">Current Password</label>
								<input type="password" name="old">

								<label>New Password</label>
								<input type="password" name="new1">

								<label>Confirm New Password</label>
								<input type="password" name="new2">

								<button type="submit" class="button margin-top-15">Change Password</button>
							</div>
						</form>

					</div>
				</div>
			</div>
			
	</div>	
@endsection		