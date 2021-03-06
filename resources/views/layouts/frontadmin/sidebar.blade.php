<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
				<li class="@if( Route::currentRouteName() == 'user.customer.userDashboard') active  @endif "><a href="{{url('user/dashboard')}}"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<li class="@if( Route::currentRouteName() == 'user.customer.userMessages' || Route::currentRouteName() == 'user.customer.userViewMessage') active  @endif "><a href="{{url('user/messages')}}"><i class="sl sl-icon-envelope-open"></i> Messages <span class="nav-tag messages">2</span></a>
				<!--<li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
				<li><a href="dashboard-wallet.html"><i class="sl sl-icon-wallet"></i> Wallet</a></li>-->
			</ul>
			
			<ul data-submenu-title="Listings">
			    <li class="@if( Route::currentRouteName() == 'user.customer.listingAll') active  @endif "><a href="{{url('user/listing')}}"><i class="sl sl-icon-layers"></i> {{ __('messages.my_listings') }}</a></li>
				<!--<li><a><i class="sl sl-icon-layers"></i> My Listings</a>
					<ul>
						<li><a href="dashboard-my-listings.html">Active <span class="nav-tag green">6</span></a></li>
						<li><a href="dashboard-my-listings.html">Pending <span class="nav-tag yellow">1</span></a></li>
						<li><a href="dashboard-my-listings.html">Expired <span class="nav-tag red">2</span></a></li>
					</ul>	
				</li>-->
				<!--<li><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> Reviews</a></li>
				<li><a href="dashboard-bookmarks.html"><i class="sl sl-icon-heart"></i> Bookmarks</a></li>-->
				<li class="@if( Route::currentRouteName() == 'user.customer.listingAdd') active  @endif "><a href="{{url('user/listing/add')}}"><i class="sl sl-icon-plus"></i> {{ __('messages.add_listing') }}</a></li>
			</ul>	

			<ul data-submenu-title="Account">
				<li  class="@if( Route::currentRouteName() == 'user.customer.userProfile') active  @endif "><a href="{{url('user/profile')}}"><i class="sl sl-icon-user"></i>  {{ __('messages.my_profile') }}</a></li>
				<li><a href="javascript:void(0)" class="f_logout" ><i class="sl sl-icon-power"></i> {{ __('messages.logout') }}</a></li>
			</ul>
			
		</div>
	</div>
	<!-- Navigation / End -->