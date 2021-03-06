<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
	<i class="la la-close"></i>
</button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
	<!-- BEGIN: Aside Menu -->
	<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " data-menu-vertical="true" m-menu-scrollable="1" m-menu-dropdown-timeout="500">
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
		
			@if(Route::currentRouteName() === "admin.dashboard")
				<li class="m-menu__item  m-menu__item--submenu m-menu__item--active" aria-haspopup="true" m-menu-submenu-toggle="hover">
			@else
				<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			@endif
				<a  href="javascript:;" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon flaticon-line-graph"></i>
					<span class="m-menu__link-text">
						{{ __('messages.dashboard') }}
					</span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="{{url('admin/dashboard')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									{{ __('messages.dashboard') }}
								</span>
							</a>
						</li>
					</ul>
				</div>		
			</li>	
			@if(\Route::currentRouteName() === "admin.vendor.vendorList" || \Route::currentRouteName() === "admin.vendor.add")
				<li class="m-menu__item  m-menu__item--submenu m-menu__item--active" aria-haspopup="true" m-menu-submenu-toggle="hover">
			@else
				<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			@endif
				<a  href="javascript:;" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon flaticon-layers"></i>
					<span class="m-menu__link-text">
						{{ __('messages.vendor') }}
					</span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
							<span class="m-menu__link">
								<span class="m-menu__link-text">
									{{ __('messages.vendor') }}
								</span>
							</span>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="{{url('admin/vendor/list')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									{{ __('messages.list') }}
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="{{url('admin/vendor/add')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									{{ __('messages.add') }}
								</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			
			@if(\Route::currentRouteName() === "admin.customer.customerList" || \Route::currentRouteName() === "admin.customer.add")
				<li class="m-menu__item  m-menu__item--submenu m-menu__item--active" aria-haspopup="true" m-menu-submenu-toggle="hover">
			@else
				<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			@endif
				<a  href="javascript:;" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon flaticon-users"></i>
					<span class="m-menu__link-text">
						{{ __('messages.customer') }}
					</span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
							<span class="m-menu__link">
								<span class="m-menu__link-text">
									{{ __('messages.customer') }}
								</span>
							</span>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="{{url('admin/customer/list')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									{{ __('messages.list') }}
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="{{url('admin/customer/add')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									{{ __('messages.add') }}
								</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			
			@if(\Route::currentRouteName() === "admin.listing.allListingType" || \Route::currentRouteName() === "admin.listing.allRoomListingType" || \Route::currentRouteName() === "admin.listing.amenities" ||  \Route::currentRouteName() === "admin.listing.facilities")
				<li class="m-menu__item  m-menu__item--submenu m-menu__item--active" aria-haspopup="true" m-menu-submenu-toggle="hover">
			@else
				<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			@endif
				<a  href="javascript:;" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon flaticon-interface-8"></i>
					<span class="m-menu__link-text">
						{{ __('messages.listing') }}
					</span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
							<span class="m-menu__link">
								<span class="m-menu__link-text">
									{{ __('messages.listing') }}
								</span>
							</span>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="{{url('admin/listing/type')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									{{ __('messages.listing_type') }}
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a href="{{url('admin/listing/room_type')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									{{ __('messages.room_type_listing') }}
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a href="{{url('admin/listing/amenities')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									{{ __('messages.amenities') }}
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a href="{{url('admin/listing/facilities')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									{{ __('messages.facilities') }}
								</span>
							</a>
						</li>
						
					</ul>
				</div>
			</li>
			
			@if(\Route::currentRouteName() === "admin.userMessages" || \Route::currentRouteName() === "admin.userViewMessage")
				<li class="m-menu__item  m-menu__item--submenu m-menu__item--active" aria-haspopup="true" m-menu-submenu-toggle="hover">
			@else
				<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			@endif
				<a  href="javascript:;" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon flaticon-multimedia-3"></i>
					<span class="m-menu__link-text">
						{{ __('messages.messages') }}
					</span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
							<span class="m-menu__link">
								<span class="m-menu__link-text">
									{{ __('messages.messages') }}
								</span>
							</span>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="{{url('admin/messages')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									{{ __('messages.inbox') }}
								</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			
		</ul>
	</div>
	<!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->