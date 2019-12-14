<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-light ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="{{url('/admin/dashboard')}}" class="m-brand__logo-wrapper">
										<img alt="" src="{{url('assets/demo/demo6/media/img/logo/logo.png')}}"/>
									</a>
									<h3 class="m-header__title">
										Apps
									</h3>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
			<!-- BEGIN: Topbar Toggler -->
									
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							 
							<!-- BEGIN: Horizontal Menu -->
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
								<i class="la la-close"></i>
							</button>
							<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light m--margin-left-15">
								<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
									<li class="m-menu__item m-menu__item--active m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true">
										<a href="javascript:;" class="m-menu__link m-menu__toggle">
											<span class="m-menu__item-here"></span>
											<span class="m-menu__link-text">
												Langauage: @if(app()->getLocale() == 'en') English @else Dutch @endif
											</span>
											<i class="m-menu__hor-arrow la la-angle-down"></i>
											<i class="m-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
											<span class="m-menu__arrow m-menu__arrow--adjust" style="left: 64.5px;"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item  @if(app()->getLocale() == 'en')m-menu__item--active @endif  " aria-haspopup="true">
													<a href="{{url('locale/en')}}" class="m-menu__link ">
														<span class="m-menu__link-title">
															<span class="m-menu__link-wrap">
																<span class="m-menu__link-text">
																	English
																</span>
															</span>
														</span>
													</a>
												</li>
												<li class="m-menu__item @if(app()->getLocale() == 'nl')m-menu__item--active @endif " aria-haspopup="true">
													<a href="{{url('locale/nl')}}" class="m-menu__link ">
														<!--<i class="m-menu__link-icon flaticon-diagram"></i>-->
														<span class="m-menu__link-title">
															<span class="m-menu__link-wrap">
																<span class="m-menu__link-text">
																	Dutch
																</span>
															</span>
														</span>
													</a>
												</li>
												
											</ul>
										</div>
									</li>
									
								</ul>
							</div>
							<!-- END: Horizontal Menu -->				
				<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-light" id="m_quicksearch" m-quicksearch-mode="default">
									<!--BEGIN: Search Form -->
									
									<!--END: Search Form -->
	<!--BEGIN: Search Results -->
									<div class="m-dropdown__wrapper">
										<div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
										<div class="m-dropdown__inner">
											<div class="m-dropdown__body">
												<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true"  data-max-height="300" data-mobile-max-height="200">
													<div class="m-dropdown__content m-list-search m-list-search--skin-light"></div>
												</div>
											</div>
										</div>
									</div>
									<!--BEGIN: END Results -->
								</div>
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-topbar__notifications m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
											<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
												<span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
												<span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-music-2"></i>
													</span>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center">
														<span class="m-dropdown__header-title">
															0 {{ __('messages.new') }}
														</span>
														<span class="m-dropdown__header-subtitle">
															{{ __('messages.user_notifications') }}
														</span>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
																<li class="nav-item m-tabs__item">
																	<a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
																		Alerts
																	</a>
																</li>
																
															</ul>
															<div class="tab-content">
																<div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
																	<div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
																		<div class="m-list-timeline m-list-timeline--skin-light">
																			<div class="m-list-timeline__items">
																				<div class="m-list-timeline__item m--hide">
																					<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
																					<span class="m-list-timeline__text">
																						12 new users registered
																					</span>
																					<span class="m-list-timeline__time">
																						Just now
																					</span>
																				</div>
																				
																			</div>
																		</div>
																	</div>
																</div>
																
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										
										<li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic m--hide">
													<i class="flaticon-profile" style="font-size: 2.5rem;"></i>
												</span>
												<span class="m-nav__link-icon m-topbar__usericon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-user-ok"></i>
													</span>
												</span>
												<span class="m-topbar__username m--hide">
													Nick
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center">
														<div class="m-card-user m-card-user--skin-light">
															<div class="m-card-user__pic">
																<!--<img src="{{url('assets/app/media/img/users/user4.jpg')}}" class="m--img-rounded m--marginless" alt=""/>-->
																<i class="flaticon-profile" style="font-size: 2.5rem;"></i>
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	{{ Auth::user()->name }}
																</span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link">
																	{{ Auth::user()->email }}
																</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
																</li>
																
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																		{{ __('messages.logout') }}
																	</a>
																	<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										
									</ul>
								</div>
							</div>
							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>
			<!-- END: Header -->