<div class="m-subheader ">
	@include('layouts.admin.notification')
	<div class="d-flex align-items-center">
		<div class="mr-auto">
			<h3 class="m-subheader__title m-subheader__title--separator">
				Dashboard
			</h3>
			<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
				<li class="m-nav__item m-nav__item--home">
					<a href="#" class="m-nav__link m-nav__link--icon">
						<i class="m-nav__link-icon la la-home"></i>
					</a>
				</li>
				<li class="m-nav__separator">
					-
				</li>
				<li class="m-nav__item">
					<a href="" class="m-nav__link">
						<span class="m-nav__link-text">
							Dashboard
						</span>
					</a>
				</li>
				@if(Request::segment(2))
				<li class="m-nav__separator">
					-
				</li>
				<li class="m-nav__item">
					<a href="" class="m-nav__link">
						<span class="m-nav__link-text">
							{{ucfirst(Request::segment(2))}}
						</span>
					</a>
				</li>
				@endif
				@if(Request::segment(3))
				<li class="m-nav__separator">
					-
				</li>
				<li class="m-nav__item">
					<a href="" class="m-nav__link">
						<span class="m-nav__link-text">
							{{ucfirst(Request::segment(3))}}
						</span>
					</a>
				</li>
				@endif
			</ul>
		</div>
		 
	</div>
</div>
