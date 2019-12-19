<style>
</style>
<!-- Headline -->
<div class="add-listing-headline">
	<h3><i class="sl sl-icon-picture"></i> {{ __('messages.features') }}</h3>
</div>
<div class="row with-forms margin-bottom-30">
	
	<h3 class=="margin-bottom-20">{{ __('messages.amenities') }}</h3>
	<div class="checkboxes in-row margin-bottom-20">
		@foreach ($amenities_type_arr as $amenities_type_list)
		<div class="col-md-4">
			<input id="a{{ $amenities_type_list->id }}" value="{{ $amenities_type_list->id }}" type="checkbox" name="amenities[]" {{(isset($amenities) && in_array( $amenities_type_list->id , explode(',',$amenities))) ? 'checked':''}}>
			<label for="a{{ $amenities_type_list->id }}">{{ $amenities_type_list->name }}</label>
		</div>
		@endforeach
	</div>
	
</div>

<div class="row with-forms margin-bottom-30">
	
	<h3 class=="margin-bottom-20">{{ __('messages.facilities') }}</h3>
	<div class="checkboxes in-row margin-bottom-20">
		@foreach ($facilities_type_arr as $facilities_type_list)
		<div class="col-md-4">
			<input id="f{{ $facilities_type_list->id }}" value="{{ $facilities_type_list->id }}" type="checkbox" name="facilities[]" {{(isset($facilities) && in_array( $facilities_type_list->id , explode(',',$facilities))) ? 'checked':''}}>
			<label for="f{{ $facilities_type_list->id }}">{{ $facilities_type_list->name }}</label>
		</div>
		@endforeach
	</div>
	
</div>

@if(!isset($id) || (isset($status) && $status=='4'))
<button onclick="save_draft();" type="button" class="button button-defualt">{{ __('messages.save_draft') }}</button>
@endif
<button type="button" onclick="Next_Tab(5);" class="button pull-right">{{ __('messages.next') }} <i class="fa fa-arrow-right"></i></button>
<button type="button" onclick="Previous_Tab(3);" class="button pull-right"><i class="fa fa-arrow-left"></i>{{ __('messages.previous') }}</button>
