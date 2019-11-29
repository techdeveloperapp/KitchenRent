<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
	<i class="la la-close"></i>
</button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
	<!-- BEGIN: Aside Menu -->
	<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " data-menu-vertical="true" m-menu-scrollable="1" m-menu-dropdown-timeout="500">
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
		
			<li class="m-menu__item  m-menu__item--submenu m-menu__item--active" aria-haspopup="true"  m-menu-submenu-toggle="hover">
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
			<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
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
			
		</ul>
	</div>
	<!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->