<style>
</style>
<!-- Headline -->
<div class="add-listing-headline">
	<h3><i class="sl sl-icon-picture"></i> {{ __('messages.features') }}</h3>
</div>
<div class="row with-forms margin-bottom-30">
	
	<h3 class=="margin-bottom-20">{{ __('messages.amenities') }}</h3>
	<div class="checkboxes in-row margin-bottom-20">
		<div class="col-md-4">
			<input id="a1" value="1" type="checkbox" name="meta[amenities]">
			<label for="a1">Air Condition</label>
		</div>
		<div class="col-md-4">
			<input id="a2" value="2" type="checkbox" name="meta[amenities]">
			<label for="a2">Breakfast Menu</label>
		</div>
		<div class="col-md-4">
			<input id="a3" value="3" type="checkbox" name="meta[amenities]">
			<label for="a3">Coffee Beer</label>
		</div>
	</div>
	
</div>

<div class="row with-forms margin-bottom-30">
	
	<h3 class=="margin-bottom-20">{{ __('messages.facilities') }}</h3>
	<div class="checkboxes in-row margin-bottom-20">
		<div class="col-md-4">
			<input id="f1" value="1" type="checkbox" name="meta[facilities]">
			<label for="f1">City Center</label>
		</div>
		<div class="col-md-4">
			<input id="f2" value="2" type="checkbox" name="meta[facilities]">
			<label for="f2">Free Parking</label>
		</div>
		<div class="col-md-4">
			<input id="f3" value="3" type="checkbox" name="meta[facilities]">
			<label for="f3">Natural Light</label>
		</div>
	</div>
	
</div>

<button onclick="save_draft();" type="button" class="button button-defualt">{{ __('messages.save_draft') }}</button>
<button type="button" onclick="Next_Tab(5);" class="button pull-right">{{ __('messages.next') }} <i class="fa fa-arrow-right"></i></button>
<button type="button" onclick="Previous_Tab(3);" class="button pull-right"><i class="fa fa-arrow-left"></i>{{ __('messages.previous') }}</button>
