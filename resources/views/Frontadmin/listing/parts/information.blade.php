<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<style>
.payment-tab-trigger {
    float: left;
    padding-left: 0px;
}
.ck.ck-reset.ck-editor.ck-rounded-corners {
    width: 98%;
}
.day-slots {
    flex: auto;
}
</style>

<!-- Headline -->
<div class="add-listing-headline">
	<h3><i class="sl sl-icon-doc"></i> {{ __('messages.information') }}</h3>
</div>
<div class="row with-forms checked-checking">
	<div class="col-md-12">
		<h5>{{ __('messages.room_type') }} </h5>
		@foreach ($room_type_arr as $room_type_list)
		<div class="payment-tab-trigger">
			<input id="room{{ $room_type_list->id }}" {{(isset($room_type) && ($room_type_list->id == $room_type)) ? 'checked' : ''}} value="{{ $room_type_list->id }}" type="radio" name="place_type">
			<label for="room{{ $room_type_list->id }}">{{ $room_type_list->name }}</label>
		</div>
		@endforeach
	</div>
</div>
<div class="row with-forms">
	<div class="col-md-6">
		<h5>{{ __('messages.title') }} </h5>
		<input class="" type="text" name="title" id="listing_title" placeholder="{{ __('messages.enter_listing_title') }}" onblur="generate_slug(this.value);" value="{{isset($title) ? $title : ''}}" required />
	</div>
	<div class="col-md-6 slug-div">
		<h5>{{ __('messages.slug') }} <i class="tip" data-tip-content="Slug will be generated automatically based on title"></i></h5>
		<input class="" type="text" name="slug" id="slug" placeholder="{{ __('messages.enter_listing_slug') }}" value="{{isset($slug) ? $slug : ''}}" required />
	</div>
</div>
<div class="row with-forms">
	<div class="col-md-12">
		<h5>{{ __('messages.description') }} </h5>
		<!-- <div id="description"></div> -->
		<textarea id="description" name="description">{{isset($description) ? $description : ''}}</textarea>
	</div>
</div>
<div class="row with-forms">
	<div class="col-md-6">
		<h5>{{ __('messages.listing_type') }}</h5>
		<select class="chosen-select-no-single" name="listing_type" >
			<option value="-1" "{{(isset($listing_type) ? ($listing_type == '-1' ? 'selected' : '') : '')}}">None</option>	
	        @foreach ($list_type_arr as $list_type_list)
			<option value="{{ $list_type_list->id }}" {{(isset($listing_type) ? ($listing_type == $list_type_list->id ? 'selected' : '') : '')}} >{{ $list_type_list->name }}</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-6">
		<h5>Number of individual tables </h5>
		<input type="text" data-rule-digits="true" name="meta[listing_bedrooms]" placeholder="Enter number of bedrooms" value="{{isset($listing_bedrooms) ? $listing_bedrooms : ''}}">
	</div>
</div>
<div class="row with-forms">
	<div class="col-md-6">
		<h5>Number of persons </h5>
		<input type="text"  data-rule-digits="true" name="meta[guests]" placeholder="Enter number of persons" value="{{isset($guests) ? $guests : ''}}">
	</div>
	<div class="col-md-6">
		<h5>  Number of Room  </h5>
		<input type="text" data-rule-digits="true" name="meta[listing_rooms]" placeholder="Enter number of rooms" value="{{isset($listing_rooms) ? $listing_rooms : ''}}">
	</div>
</div>
<div class="row with-forms">
	<div class="col-md-6">
		<h5> Size </h5>
		<input type="text" data-rule-digits="true"  name="meta[listing_size]" placeholder="Enter the size" value="{{isset($listing_size) ? $listing_size : ''}}">
	</div>
	<div class="col-md-6">
		<h5>  Unit of measure  </h5>
		<input type="text" name="meta[listing_size_unit]" placeholder="Enter the unit of measure. Ex. SqFt" value="{{isset($listing_size_unit) ? $listing_size_unit : ''}}">
	</div>
</div>


<!-- Timeslot Section -->
<div class="add-listing-section margin-top-25">
	
	<!-- Headline -->
	<div class="add-listing-headline">
		<h3><i class="sl sl-icon-layers"></i> {{ __('messages.timeslots')}}</h3>
		<!-- Switcher -->
		<label class="switch"><input value="1" name="meta[timeslot_enable]" type="checkbox"  id="timeslot_switch" {{(isset($timeslot_enable) && $timeslot_enable == 1) ? 'checked' : ''}}><span class="slider round"></span></label>
	</div>

	<!-- Switcher ON-OFF Content -->
	<div class="switcher-content">
		<!-- Availablity Slots -->
			<!-- Set data-clock-type="24hr" to enable 24 hours clock type -->
			<div class="availability-slots" data-clock-type="24hr" id="timeslot_block">
				@include('Frontadmin.listing.parts.timeslots')	
			</div>

	</div>
	<!-- Switcher ON-OFF Content / End -->

</div>
<!-- Section / End -->

<!--Opening Section -->
<div class="add-listing-section margin-top-25 margin-bottom-50">
	
	<!-- Headline -->
	<div class="add-listing-headline">
		<h3><i class="sl sl-icon-clock"></i> Opening Hours</h3>
		<!-- Switcher -->
	</div>
	
	<!-- Switcher ON-OFF Content -->
	<div class="switcher-content1">

		<!-- Day -->
		<div class="row opening-day">
			<div class="col-md-2"><h5>Monday - Friday</h5></div>
			<div class="col-md-3">
				<select class="chosen-select" data-placeholder="Opening Time" name="meta[mon_fri_open_time]">
					<option label="Opening Time"></option>
					<?php 
					for ($halfhour = $start_hour;$halfhour <= $end_hour; $halfhour = $halfhour+30*60) {
						echo '<option value="'.date('H:i',$halfhour).'" '.(isset($mon_fri_open_time) && $mon_fri_open_time == date('H:i',$halfhour) ? "selected" : "").'>'.date(gig_time_format(),$halfhour).'</option>';
					}
					?>
				</select>
			</div>
			<div class="col-md-3">
				<select class="chosen-select" data-placeholder="Closing Time" name='meta[mon_fri_close_time]'>
					<option label="Closing Time"></option>
					<?php 
					for ($halfhour = $start_hour;$halfhour <= $end_hour; $halfhour = $halfhour+30*60) {
						echo '<option value="'.date('H:i',$halfhour).'" '.(isset($mon_fri_close_time) && $mon_fri_close_time == date('H:i',$halfhour) ? "selected" : "").'>'.date(gig_time_format(),$halfhour).'</option>';
					}
					?>
				</select>
			</div>
			<div class="col-md-4 checkboxes ">
				<input id="mon_fri_closed" value="1" type="checkbox" name="meta[mon_fri_closed]" {{(isset($mon_fri_closed) && $mon_fri_closed == 1) ? 'checked' : ''}}>
				<label for="mon_fri_closed">Closed</label>
			</div>
		</div>
		<!-- Day / End -->

		<!-- Day -->
		<div class="row opening-day js-demo-hours">
			<div class="col-md-2"><h5>Saturday</h5></div>
			<div class="col-md-3">
				<select class="chosen-select" data-placeholder="Opening Time"  name="meta[sat_open_time]">
					<option label="Opening Time"></option>
					<!-- Hours added via JS (this is only for demo purpose) -->
					<?php 
					for ($halfhour = $start_hour;$halfhour <= $end_hour; $halfhour = $halfhour+30*60) {
						echo '<option value="'.date('H:i',$halfhour).'" '.(isset($sat_open_time) && $sat_open_time == date('H:i',$halfhour) ? "selected" : "").'>'.date(gig_time_format(),$halfhour).'</option>';
					}
					?>
				</select>
			</div>
			<div class="col-md-3">
				<select class="chosen-select" data-placeholder="Closing Time"  name="meta[sat_close_time]">
				<option label="Closing Time"></option>
					<!-- Hours added via JS (this is only for demo purpose) -->
					<?php 
					for ($halfhour = $start_hour;$halfhour <= $end_hour; $halfhour = $halfhour+30*60) {
						echo '<option value="'.date('H:i',$halfhour).'" '.(isset($sat_close_time) && $sat_close_time == date('H:i',$halfhour) ? "selected" : "").'>'.date(gig_time_format(),$halfhour).'</option>';
					}
					?>
				</select>
			</div>
			<div class="col-md-4 checkboxes ">
				<input id="sat_closed" value="1" type="checkbox" name="meta[sat_closed]" {{(isset($sat_closed) && $sat_closed == 1) ? 'checked' : ''}}>
				<label for="sat_closed">Closed</label>
			</div>
		</div>
		<!-- Day / End -->

		<!-- Day -->
		<div class="row opening-day js-demo-hours">
			<div class="col-md-2"><h5>Sunday</h5></div>
			<div class="col-md-3">
				<select class="chosen-select" data-placeholder="Opening Time"  name="meta[sun_open_time]">
				<option label="Opening Time"></option>
					<!-- Hours added via JS (this is only for demo purpose) -->
					<?php 
					for ($halfhour = $start_hour;$halfhour <= $end_hour; $halfhour = $halfhour+30*60) {
						echo '<option value="'.date('H:i',$halfhour).'" '.(isset($sun_open_time) && $sun_open_time == date('H:i',$halfhour) ? "selected" : "").'>'.date(gig_time_format(),$halfhour).'</option>';
					}
					?>
				</select>
			</div>
			<div class="col-md-3">
				<select class="chosen-select" data-placeholder="Closing Time"  name="meta[sun_close_time]">
				<option label="Closing Time"></option>
					<!-- Hours added via JS (this is only for demo purpose) -->
					<?php 
					for ($halfhour = $start_hour;$halfhour <= $end_hour; $halfhour = $halfhour+30*60) {
						echo '<option value="'.date('H:i',$halfhour).'" '.(isset($sun_close_time) && $sun_close_time == date('H:i',$halfhour) ? "selected" : "").'>'.date(gig_time_format(),$halfhour).'</option>';
					}
					?>
				</select>
			</div>
			<div class="col-md-4 checkboxes ">
				<input id="sun_closed" value="1" type="checkbox" name="meta[sun_closed]" {{(isset($sun_closed) && $sun_closed == 1) ? 'checked' : ''}}>
				<label for="sun_closed">Closed</label>
			</div>
		</div>
		<!-- Day / End -->

	</div>
	<!-- Switcher ON-OFF Content / End -->

</div>
@if(!isset($id) || (isset($status) && $status=='4'))
<button type="button" onclick="save_draft();" class="button button-defualt">{{ __('messages.save_draft') }}</button>
@endif

<button type="button" onclick="Next_Tab(2);" class="button pull-right">{{ __('messages.next') }} <i class="fa fa-arrow-right"></i></button>
<!-- Section / End -->
<script src="{{url('frontend/')}}/scripts/jquery.repeater.min.js"></script>
<script>
$(document).ready(function(){
});
ClassicEditor
		.create( document.querySelector( '#description' ),{
			//toolbar: [ 'bold', 'italic' ],
			config: {
					ui: {
						width: '100%',
						height: '300px'
					}
				}
		} )
		.then( editor => {
				console.log( editor );
		} )
		.catch( error => {
				console.error( error );
		} );
</script>