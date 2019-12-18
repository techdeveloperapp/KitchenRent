<style>
</style>
<!-- Headline -->
<div class="add-listing-headline">
	<h3><i class="sl sl-icon-picture"></i> {{ __('messages.features') }}</h3>
</div>
<div class="row with-forms margin-bottom-30">
	
	<h3 class=="margin-bottom-20">{{ __('messages.amenities') }}</h3>
	<div class="checkboxes in-row margin-bottom-20">
		@foreach ($amenities_type as $amenities_type)
		<div class="col-md-4">
			<input id="a{{ $amenities_type->id }}" value="{{ $amenities_type->id }}" type="checkbox" name="meta[amenities]">
			<label for="a{{ $amenities_type->id }}">{{ $amenities_type->name }}</label>
		</div>
		@endforeach
	</div>
	
</div>

<div class="row with-forms margin-bottom-30">
	
	<h3 class=="margin-bottom-20">{{ __('messages.facilities') }}</h3>
	<div class="checkboxes in-row margin-bottom-20">
		@foreach ($facilities_type as $facilities_type)
		<div class="col-md-4">
			<input id="f{{ $facilities_type->id }}" value="{{ $facilities_type->id }}" type="checkbox" name="meta[facilities]">
			<label for="f{{ $facilities_type->id }}">{{ $facilities_type->name }}</label>
		</div>
		@endforeach
	</div>
	
</div>

<button onclick="save_draft();" type="button" class="button button-defualt">{{ __('messages.save_draft') }}</button>
<button type="button" onclick="Next_Tab(5);" class="button pull-right">{{ __('messages.next') }} <i class="fa fa-arrow-right"></i></button>
<button type="button" onclick="Previous_Tab(3);" class="button pull-right"><i class="fa fa-arrow-left"></i>{{ __('messages.previous') }}</button>
