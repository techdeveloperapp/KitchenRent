@extends('layouts.frontadmin.app')
@section('title', __('messages.add_kitchen') )
@section('content')
<style>
</style>
<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>{{ __('messages.add_kitchen') }}</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">
					
					<div class="style-1">
						<!-- Tabs Navigation -->
							<ul class="tabs-nav">
								<li class="active"><a href="#information-tab">{{ __('messages.information') }}</a></li>
								<li><a href="#price-tab">{{ __('messages.prices') }}</a></li>
								<li><a href="#services-tab">{{ __('messages.services') }}</a></li>
								<li><a href="#pictures-tab">{{ __('messages.pictures') }}</a></li>
								<li><a href="#features-tab">{{ __('messages.features') }}</a></li>
								<li><a href="#location-tab">{{ __('messages.location') }}</a></li>
								<li><a href="#rules-tab">{{ __('messages.terms_rules') }}</a></li>
							</ul>
							<!-- Tabs Content -->
							<div class="tabs-container">
								<div class="tab-content " id="information-tab">
								   <div class="add-listing-section"> 
										@include('Frontadmin.listing.parts.information')
									</div>
								</div>
								<div class="tab-content" id="price-tab">
									
								</div>
								<div class="tab-content" id="services-tab">
									
								</div>
								<div class="tab-content" id="pictures-tab">
									
								</div>
								<div class="tab-content" id="features-tab">
									
								</div>
								<div class="tab-content" id="location-tab">
									
								</div>
								<div class="tab-content" id="rules-tab">
									
								</div>

							</div>
					</div>
					

					<a href="#" class="button preview">{{ __('messages.save') }} <i class="fa fa-arrow-circle-right"></i></a>

				</div>
			</div>

		</div>
	
<script>

</script>			
@endsection	