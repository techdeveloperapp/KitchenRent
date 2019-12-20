<style>
</style>
<!-- Headline -->
<div class="add-listing-headline">
	<h3><i class="sl sl-icon-picture"></i> {{ __('messages.services') }}</h3>
</div>
<div data-repeater-list="meta[gig_services]">
	 @if(isset($id) && !empty($gig_services))
	@foreach ($gig_services as $gig_services)
	<div data-repeater-item class="row with-forms margin-bottom-20" >
		<div class="col-md-6">
			<h5>Service name</h5>
			<input class="" type="text" name="service_name" placeholder="Ex. Projection Screen" value="{{$gig_services->service_name}}" />
		</div>
		<div class="col-md-6">
			<h5> Service Price </h5>
			<input class="" type="text" data-rule-number="true" name="service_price" placeholder="Enter the service price" value="{{$gig_services->service_price}}" />
		</div>
		<div class="col-md-12">
			<h5>Service description </h5>
			<textarea class="" rows="3" name="service_des" placeholder="Enter the service description" >{{$gig_services->service_des}}</textarea>
		</div>
		
		<div class="col-md-3">
			<button type="button" data-repeater-delete="" class="button"> <i class="fa fa-trash"></i> Remove this service</button>
		</div>
	</div>
	@endforeach
	@else
	<div data-repeater-item class="row with-forms margin-bottom-20" >
		<div class="col-md-6">
			<h5>Service name</h5>
			<input class="" type="text" name="service_name" placeholder="Ex. Projection Screen" value="" />
		</div>
		<div class="col-md-6">
			<h5> Service Price </h5>
			<input class="" type="text" data-rule-number="true" name="service_price" placeholder="Enter the service price" value="" />
		</div>
		<div class="col-md-12">
			<h5>Service description </h5>
			<textarea class="" rows="3" name="service_des" placeholder="Enter the service description" ></textarea>
		</div>
		
		<div class="col-md-3">
			<button type="button" data-repeater-delete="" class="button"> <i class="fa fa-trash"></i> Remove this service</button>
		</div>
	</div>
	@endif
</div>
<div class="row with-forms margin-bottom-50">
		<div class="col-md-12">
			<button type="button" data-repeater-create="" class="button pull-right"> <i class="fa fa-plus"></i> Add another service</button>
		</div>
</div>

@if(!isset($id) || (isset($status) && $status=='4'))
<button onclick="save_draft();" type="button" class="button button-defualt">{{ __('messages.save_draft') }}</button>
@endif
<button type="button" onclick="Next_Tab(8);" class="button pull-right">{{ __('messages.next') }} <i class="fa fa-arrow-right"></i></button>
<button type="button" onclick="Previous_Tab(6);" class="button pull-right"><i class="fa fa-arrow-left"></i>{{ __('messages.previous') }}</button>

<script>
$(document).ready(function(){
	jQuery("#services_block").repeater({
			initEmpty:false,
			show:function(){
				jQuery(this).slideDown();
			},
			hide:function(deleteElement){
				 if(confirm('Are you sure you want to delete this?')) {
						jQuery(this).slideUp(deleteElement);
				 }
			},
			isFirstItemUndeletable: false
	});
});
</script>
