<style>
</style>
<!-- Headline -->
<div class="add-listing-headline">
	<h3><i class="sl sl-icon-picture"></i> {{ __('messages.bedrooms') }}</h3>
</div>
<div data-repeater-list="meta[gig_accomodation]">
   @if(isset($id) && !empty($gig_accomodation))
	@foreach ($gig_accomodation as $gig_accomodation)
	<div data-repeater-item class="row with-forms margin-bottom-20" >
		<div class="col-md-6">
			<h5>Bedroom name</h5>
			<input class="" type="text" name="acc_bedroom_name" placeholder="Ex. Master Room or Room 1" value="{{$gig_accomodation->acc_bedroom_name}}" />
		</div>
		<div class="col-md-6">
			<h5>Number of persons</h5>
			<input class="" type="text" name="acc_guests" placeholder="Enter the number of persons for this room" value="{{$gig_accomodation->acc_guests}}" />
		</div>
		<div class="col-md-6">
			<h5>Number of beds</h5>
			<input class="" type="text" name="acc_no_of_beds" placeholder="Enter the number of beds" value="{{$gig_accomodation->acc_no_of_beds}}" />
		</div>
		<div class="col-md-6">
			<h5>Bed Type</h5>
			<input class="" type="text" name="acc_bedroom_type" placeholder="Enter the bed type" value="{{$gig_accomodation->acc_bedroom_type}}" />
		</div>
		<div class="col-md-3">
			<button type="button" data-repeater-delete="" class="button"> <i class="fa fa-trash"></i> Remove this room</button>
		</div>
	</div>
	@endforeach
	@else
	<div data-repeater-item class="row with-forms margin-bottom-20" >
		<div class="col-md-6">
			<h5>Bedroom name</h5>
			<input class="" type="text" name="acc_bedroom_name" placeholder="Ex. Master Room or Room 1" value="" />
		</div>
		<div class="col-md-6">
			<h5>Number of persons</h5>
			<input class="" type="text" name="acc_guests" placeholder="Enter the number of persons for this room" value="" />
		</div>
		<div class="col-md-6">
			<h5>Number of beds</h5>
			<input class="" type="text" name="acc_no_of_beds" placeholder="Enter the number of beds" value="" />
		</div>
		<div class="col-md-6">
			<h5>Bed Type</h5>
			<input class="" type="text" name="acc_bedroom_type" placeholder="Enter the bed type" value="" />
		</div>
		<div class="col-md-3">
			<button type="button" data-repeater-delete="" class="button"> <i class="fa fa-trash"></i> Remove this room</button>
		</div>
	</div>
	@endif
	
	
</div>
<div class="row with-forms margin-bottom-50">
		<div class="col-md-12">
			<button type="button" data-repeater-create="" class="button pull-right"> <i class="fa fa-plus"></i> Add another room</button>
		</div>
</div>

@if(!isset($id) || (isset($status) && $status=='4'))
<button onclick="save_draft();" type="button" class="button button-defualt">{{ __('messages.save_draft') }}</button>
@endif
<button type="button" onclick="Next_Tab(7);" class="button pull-right">{{ __('messages.next') }} <i class="fa fa-arrow-right"></i></button>
<button type="button" onclick="Previous_Tab(5);" class="button pull-right"><i class="fa fa-arrow-left"></i>{{ __('messages.previous') }}</button>

<script>
$(document).ready(function(){
	jQuery("#bedrooms_block").repeater({
			initEmpty:false,
			show:function(){
				jQuery(this).slideDown();
			},
			hide:function(deleteElement){
				 if(confirm('Are you sure you want to delete this?')) {
						jQuery(this).slideUp(deleteElement);
				 }
			},
			isFirstItemUndeletable: true
	});
});
</script>
