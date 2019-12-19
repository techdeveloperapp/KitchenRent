<!-- Headline -->
<div class="add-listing-headline">
	<h3><i class="fa fa-euro"></i> {{ __('messages.prices') }}</h3>
</div>
<div class="row with-forms">
	<div class="col-md-6">
		<h5>{{ __('messages.direct_booking') }} </h5>
		<div class="checkboxes">
			<input id="check-a" type="checkbox" name="instant_booking" value="1" {{(isset($instant_booking) && $instant_booking == 1) ? 'checked' : ''}}>
			<label for="check-a">{{ __('messages.do_you_direct_booking_possible') }}</label>
		</div>
	</div>
	<div class="col-md-6">
		<h5>{{ __('messages.price_per_hour') }} </h5>
		<div class="fm-input pricing-price">
		<input class="" placeholder="{{ __('messages.enter_price_per_hour') }} " type="number" name="price" id="listing_price" value="{{(isset($price) ? $price : '')}}" data-unit="EUR" />
		</div>
	</div>
</div>
<div class="row with-forms">
	<div class="col-md-6">
		<h5>{{ __('messages.weekends') }} </h5>
		<div class="fm-input pricing-price">
		<input class="" placeholder="{{ __('messages.enter_weekend_price') }} " type="text" name="meta[weekends_price]" value="{{(isset($weekends_price) ? $weekends_price : '')}}" data-unit="EUR" />
		</div>
	</div>
	<div class="col-md-6">
		<h5>{{ __('messages.select_days_of_weekend') }} </h5>
		 <select class="chosen-select" name="meta[weekends_days]" data-placeholder="{{ __('messages.select_days_of_weekend') }}">
			<option selected="selected" value="sat_sun" {{(isset($weekends_days) ? ($weekends_days == 'sat_sun' ? 'selected' : '') : '')}}>Saturday and Sunday</option>
			<option value="fri_sat" {{(isset($weekends_days) ? ($weekends_days == 'fri_sat' ? 'selected' : '') : '')}}>Friday and Saturday</option>
			<option value="fri_sat_sun" {{(isset($weekends_days) ? ($weekends_days == 'fri_sat_sun' ? 'selected' : '') : '')}}>Friday, Saturday and Sunday</option>
		 </select>
	</div>
</div>

<div class="add-listing-section margin-top-25 margin-bottom-50">
	
	<!-- Headline -->
	<div class="add-listing-headline">
		<h3><i class="sl sl-icon-layers"></i> {{ __('messages.extra_costs') }}</h3>
	</div>
	
	<div class="row with-forms">
		<div class="col-md-4">
			<h5>{{ __('messages.allow_extra_guests') }} </h5>
			<div class="payment-tab-trigger">
				<input id="yes_guest" name="meta[allow_additional_guests]" type="radio" value="yes" {{(isset($allow_additional_guests) && $allow_additional_guests == 'yes') ? 'checked' : ''}}>
				<label for="yes_guest">{{ __('messages.yes') }}</label>
			</div>
			 <div class="payment-tab-trigger">
				<input id="no_guest" name="meta[allow_additional_guests]" type="radio" value="no" {{(isset($allow_additional_guests) && $allow_additional_guests == 'no') ? 'checked' : ''}}>
				<label for="no_guest">{{ __('messages.no') }} </label>
			</div>
		</div>
		<div class="col-md-4">
			<h5>{{ __('messages.extra_guest_price') }} </h5>
			 <input class="" placeholder="{{ __('messages.enter_extra_guest_price') }} " type="text" name="meta[additional_guests_price]" value="{{(isset($additional_guests_price) ? $additional_guests_price : '')}}" data-unit="EUR" />
		</div>
		<div class="col-md-4">
			<h5>{{ __('messages.no_of_guests') }} </h5>
			 <input class="" placeholder="{{ __('messages.enter_no_of_guests') }} " type="text" name="meta[num_additional_guests]" value="{{(isset($num_additional_guests) ? $num_additional_guests : '')}}" />
		</div>
	</div>
	
	<div class="row with-forms">
		<div class="col-md-7">
			<h5>{{ __('messages.cleaning_fees') }} </h5>
			<div class="fm-input pricing-price">
				<input class="" placeholder="{{ __('messages.enter_cleaning_fees_price') }} " type="text" name="meta[cleaning_fee]" value="{{(isset($cleaning_fee) ? $cleaning_fee : '')}}" data-unit="EUR" />
			</div>
		</div>
		<div class="col-md-5">
			<h5>{{ __('messages.cleaning_fee_type') }}</h5>
			 <div class="payment-tab-trigger">
				<input id="daily" name="meta[cleaning_fee_type]" type="radio" value="daily" {{(isset($cleaning_fee_type) ? ($cleaning_fee_type == 'daily' ? 'checked' : '') : '')}}>
				<label for="daily">{{ __('messages.daily') }}</label>
			</div>
			 <div class="payment-tab-trigger">
				<input id="per_stay" name="meta[cleaning_fee_type]" type="radio" value="per_stay" {{(isset($cleaning_fee_type) ? ($cleaning_fee_type == 'per_stay' ? 'checked' : '') : '')}}>
				<label for="per_stay">{{ __('messages.per_stay') }} </label>
			</div>
		</div>
	</div>
	
	<div class="row with-forms">
		<div class="col-md-6">
			<h5>{{ __('messages.security_deposit') }} </h5>
			<div class="fm-input pricing-price">
			 <input class="" placeholder="{{ __('messages.enter_security_deposit') }} " type="text" name="meta[security_deposit]" value="{{(isset($security_deposit) ? $security_deposit : '')}}" />
			</div>
		</div>
	</div>
	
	@if(!isset($id) || (isset($status) && $status=='4'))
	<button onclick="save_draft();" type="button" class="button button-defualt">{{ __('messages.save_draft') }}</button>
	@endif
	<button type="button" onclick="Next_Tab(3);" class="button pull-right">{{ __('messages.next') }} <i class="fa fa-arrow-right"></i></button>
	<button type="button" onclick="Previous_Tab(1);" class="button pull-right"><i class="fa fa-arrow-left"></i>{{ __('messages.previous') }}</button>
</div>	