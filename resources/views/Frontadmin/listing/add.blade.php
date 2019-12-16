@extends('layouts.frontadmin.app')
@section('title', __('messages.add_listing') )
@section('content')
<style>
.error {
  color: #c31b1b;
  margin-left: 5px;
}
input.error_element {
    margin-bottom: 0 !important;
    border-color: #c31b1b;
    background-color: #f6c8c8;
}
label.error {
  display: inline;
}
</style>
<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>{{ __('messages.add_listing') }}</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">
					<!-- This button will show on edit mode only -->
					<div class="listing-submit-wrap clearfix" style="display:none">
						<a href="#" class="button col-md-5">View</a>
						<button class="button col-md-5">Update</button>
                    </div>
					
					<!--form -->
                    <form method="POST" action="{{url('user/listing/add')}}" id="listing_form">
                    	@csrf
                    	<input type="hidden" value="" name="save_as_draft" id="input_save_as_draft">
						<div class="style-1">
							<!-- Tabs Navigation -->
								<ul class="tabs-nav" id="listing_tabs" style="display:none">
									<li class="active"><a href="#information-tab">{{ __('messages.information') }}</a></li>
									<li><a href="#price-tab">{{ __('messages.prices') }}</a></li>
									<li><a href="#pictures-tab">{{ __('messages.pictures') }}</a></li>
									<li><a href="#features-tab">{{ __('messages.features') }}</a></li>
									<li><a href="#location-tab">{{ __('messages.location') }}</a></li>
									<li><a href="#services-tab">{{ __('messages.services') }}</a></li>
									<li><a href="#rules-tab">{{ __('messages.terms_rules') }}</a></li>
								</ul>
								<!-- Tabs Content -->
								<div class="tabs-container">
									<div class="tab-content " id="information-tab">
									   <div class="add-listing-section margin-bottom-80"> 
											@include('Frontadmin.listing.parts.information')
										</div>
									</div>
									<div class="tab-content" id="price-tab">
										<div class="add-listing-section margin-bottom-20"> 
											@include('Frontadmin.listing.parts.price')
										</div>
									</div>
									
									<div class="tab-content" id="pictures-tab">
										<div class="add-listing-section margin-bottom-20"> 
											@include('Frontadmin.listing.parts.pictures')
										</div>
									</div>
									<div class="tab-content" id="features-tab">
										<div class="add-listing-section margin-bottom-30"> 
											@include('Frontadmin.listing.parts.features')
										</div>
									</div>
									<div class="tab-content" id="location-tab">
										<div class="add-listing-section margin-bottom-30"> 
											@include('Frontadmin.listing.parts.location')
										</div>
									</div>
									<div class="tab-content" id="services-tab">
										<div class="add-listing-section margin-bottom-30"> 
											@include('Frontadmin.listing.parts.services')
										</div>
									</div>
									
									<div class="tab-content" id="rules-tab">
										<div class="add-listing-section margin-bottom-30"> 
											@include('Frontadmin.listing.parts.rules')
										</div>
									</div>
								</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	
<script>
var tabs = {'1':'Information','2':'Prices','3':'Picture','4':'Feature','5':'Location','6':'General Service','7':'Terma & Rules'};

function Next_Tab(tabId=1){
	$('.error').remove();
	$('.error_element').removeClass('error_element');
	if(tabId==2){
		if(!TabOneValidation()){
			return false;
		}
	}
	if(tabId==3){
		if(!TabTwoValidation()){
			return false;
		}
	}
	$('ul#listing_tabs li').removeClass('active');
	$('ul#listing_tabs li:nth-child('+tabId+')').click();
}

function Previous_Tab(tabId=1){
	$('ul#listing_tabs li').removeClass('active');
	$('ul#listing_tabs li:nth-child('+tabId+')').click();
}

function TabOneValidation(){
	var listing_title = $.trim($('#listing_title').val());
	if (listing_title.length < 1) {
      $('#listing_title').after('<span class="error">This field is required</span>');
      $('#listing_title').focus();
      $('#listing_title').addClass('error_element');
    }
    if($('.error').length){
    	return false;
    }
    return true;
}

function TabTwoValidation(){
    var listing_price = $('#listing_price').val();
	if (listing_price.length < 1) {
      $('#listing_price').after('<span class="error">This field is required</span>');
      $('#listing_price').focus();
      $('#listing_price').addClass('error_element');
    }
    if($('.error').length){
    	return false;
    }
    return true;
}

function save_draft(){
	$('.error').remove();
	$('.error_element').removeClass('error_element');
	var check = TabOneValidation();
	console.log(check);
	if(check){
		$('#input_save_as_draft').val('1');
		$('#listing_form').submit();
	}
}

</script>			
@endsection	

