@extends('layouts.frontadmin.app')
@section('title', isset($id) ? __('messages.edit_listing') : __('messages.add_listing') )
@section('content')
<style>

#services-tab textarea,#rules-tab textarea{
	min-height: 100px !important;
}
.add-listing-section input.error, .add-listing-section select.error {
    margin-bottom: 0px !important;
	border-color: #c31b1b;
	background-color: #f6c8c8;
}
</style>
<?php 
$start_hour = strtotime('1:00');
$end_hour = strtotime('24:00');
if(!function_exists('gig_time_format')) {
    function gig_time_format($time_format=null) {
        //$time_format = homey_option('gig_time_format');
        if($time_format == 12) {
            $format = "g:i a";
        } elseif($time_format == 24) {
            $format = "H:i";
        } else {
            $format = "g:i a";
        }
        return $format;
    }
}
?>
<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>
					{{isset($id) ? __('messages.edit_listing') : __('messages.add_listing')}}
					</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">
					<!--form -->
                    <form method="POST" action="{{url('user/listing/add')}}" id="listing_form">
					<!-- This button will show on edit mode only -->
					<div class="listing-submit-wrap clearfix" @if(!isset($id) || (isset($status) && $status=='4')) style="display:none" @endif >
						<a target="_blannk" href="{{url('listing/
								'. (isset($slug) ? $slug:''))}}" class="button col-md-5">{{ __('messages.view') }}</a>
						<button type="button" onclick="save_publish();" class="button col-md-5">{{ __('messages.update') }}</button>
                    </div>
					
                    	@csrf
                    	<input type="hidden" value="" name="save_as_draft" id="input_save_as_draft">
                    	<input type="hidden" value="{{isset($id) ? $id : ''}}" name="id" id="input_save_as_draft">
						<div class="style-1">
							<!-- Tabs Navigation -->
								<ul class="tabs-nav" id="listing_tabs" @if(!isset($id) || (isset($status) && $status=='4')) style="display:none" @endif >
									<li class="active"><a href="#information-tab">{{ __('messages.information') }}</a></li>
									<li><a href="#price-tab">{{ __('messages.prices') }}</a></li>
									<li><a href="#pictures-tab">{{ __('messages.pictures') }}</a></li>
									<li><a href="#features-tab">{{ __('messages.features') }}</a></li>
									<li><a href="#location-tab">{{ __('messages.location') }}</a></li>
									<!--<li><a href="#bedrooms-tab">{{ __('messages.bedrooms') }}</a></li>-->
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
										<div class="add-listing-section margin-bottom-30"> 
											@include('Frontadmin.listing.parts.price')
										</div>
									</div>
									
									<div class="tab-content" id="pictures-tab">
										<div class="add-listing-section margin-bottom-30"> 
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
									<!--<div class="tab-content" id="bedrooms-tab">
										<div class="add-listing-section margin-bottom-30" id="bedrooms_block"> -->
											{{--@include('Frontadmin.listing.parts.bedrooms')--}}
										<!--</div>
									</div>-->
									<div class="tab-content" id="services-tab">
										<div class="add-listing-section margin-bottom-30"  id="services_block"> 
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
var tabs = {'1':'Information','2':'Prices','3':'Picture','4':'Feature','5':'Location','6':'Bedrooms','7':'General Service','8':'Terma & Rules'};

$(document).ready(function(){
	<?php 
	if(isset($id)){
		?>
		$('select.dynamic-select').each(function(k,x){ 
			var sel = $(this).data('selected');// console.log(sel); 
			$(this).val(sel); 
			$(this).trigger("chosen:updated"); 
		});
		<?php
	}
	?>
    
    // For Default Check
    $('.checked-checking').each(function(){
	  var Check = false;
	  $(this).find('input[type="radio"]').each(function(){
	     if($(this).prop('checked')){
	        Check = true;
	     }
	  });
	  if(!Check){
	    $(this).find('input[type="radio"]:first').attr('checked',true);
	  }
	});

});

function generate_slug(title){
	console.log(title);
	if($("#slug").val() ==''){
		$.ajax({
			method: 'POST',
			url: "{{url('user/listing/generate_slug')}}",
			data: {'title':title,},
			headers: {
			  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success: function(data){
				//console.log(data);
				$(".slug-div").addClass('changed');
				$("#slug").val(data.slug);
			},
			error: function(data){
				swal('Error',data,'error');
			}
		});
	}
}

function Next_Tab(tabId=1){
	if($('#listing_form').valid()){
		console.log('valid');
		$('ul#listing_tabs li').removeClass('active');
		$('ul#listing_tabs li:nth-child('+tabId+')').click();
	}
	var i = $("#listing_tabs"); scrollTo(i, 200)
}

function Previous_Tab(tabId=1){
	if($('#listing_form').valid()){
		$('ul#listing_tabs li').removeClass('active');
		$('ul#listing_tabs li:nth-child('+tabId+')').click();
	}
	var i = $("#listing_tabs"); scrollTo(i, 200)
}

function save_draft(){
	if($('#listing_form').valid()){
		console.log('valid');
		get_timesloat();
		$('#input_save_as_draft').val('1');
		$('#listing_form').submit();
	}
}

function save_publish(){
	if($('#listing_form').valid()){
		console.log('valid');
		get_timesloat();
		$('#input_save_as_draft').val('2');
		$('#listing_form').submit();
	}
}

function get_timesloat(){
	var time = {'mon':[],'tue':[],'wed':[],'thu':[],'fri':[],'sat':[],'sun':[]};
	var array = ['mon','tue','wed','thu','fri','sat','sun'];
	for(let i=0;i<=6;i++){
		$('#timeslot_block .day-slots').eq(i).find('.slots-container').each(function(){
			$(this).find('.single-slot').each(function(){
			  let start = $(this).find('.start').text();
			  let end = $(this).find('.end').text();
			  let qty = $(this).find('.plusminus input').val();
			  let price = $(this).find('.price-input').val();
			  if(start && end && price){
			  	  let obj = {'start_time':start,'end_time':end,'qty':qty,'price':price}
				  time[array[i]].push(obj);
				  console.log(start,end,qty,price);
				  console.log(time);
			  }
			})
		});
	}
	for(let i=0;i<=6;i++){
       $('#time_'+array[i]+'_meta_slot').val(JSON.stringify(time[array[i]]));
	}
}
</script>			
@endsection	

