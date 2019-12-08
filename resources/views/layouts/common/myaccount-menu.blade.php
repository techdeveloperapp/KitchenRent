<div class="user-menu">
	<div class="user-name"><span><img src="{{url('assets/avatar.png')}}" alt=""></span>{{ Auth::user()->first_name }}</div>
	<ul>
		<li><a href="{{url('user/dashboard')}}"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
		<li><a href="{{url('user/profile')}}"><i class="sl sl-icon-user"></i> {{ __('messages.my_profile') }}</a></li>
		<li><a href="javascript:void(0)" id="f_logout" class="sign-in"><i class="sl sl-icon-power"></i> {{ __('messages.logout') }}</a></li>
	</ul>
</div>