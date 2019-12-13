<!-- Headline -->
<div class="add-listing-headline">
	<h3><i class="fa fa-euro"></i> {{ __('messages.prices') }}</h3>
</div>
<div class="row with-forms">
	<div class="col-md-6">
		<h5>{{ __('messages.direct_booking') }} </h5>
		<div class="checkboxes">
			<input id="check-a" type="checkbox" name="direct_booking" value="yes">
			<label for="check-a">{{ __('messages.do_you_direct_booking_possible') }}</label>
		</div>
	</div>
	<div class="col-md-6">
		<h5>{{ __('messages.price_per_hour') }} </h5>
		<div class="fm-input pricing-price">
		<input class="" placeholder="{{ __('messages.enter_price_per_hour') }} " type="text" name="price_per_hour" value="" data-unit="EUR" />
		</div>
	</div>
</div>
<div class="row with-forms">
	<div class="col-md-6">
		<h5>{{ __('messages.weekends') }} </h5>
		<div class="fm-input pricing-price">
		<input class="" placeholder="{{ __('messages.enter_weekend_price') }} " type="text" name="weekends_price" value="" data-unit="EUR" />
		</div>
	</div>
	<div class="col-md-6">
		<h5>{{ __('messages.select_days_of_weekend') }} </h5>
		 <select class="chosen-select" name="weekends_days" data-placeholder="{{ __('messages.select_days_of_weekend') }}">
			<option selected="selected" value="sat_sun">Saturday and Sunday</option>
			<option value="fri_sat">Friday and Saturday</option>
			<option value="fri_sat_sun">Friday, Saturday and Sunday</option>
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
				<input id="yes_guest" name="allow_additional_guests" type="radio" value="yes">
				<label for="yes_guest">{{ __('messages.yes') }}</label>
			</div>
			 <div class="payment-tab-trigger">
				<input checked="" id="no_guest" name="allow_additional_guests" type="radio" value="no">
				<label for="no_guest">{{ __('messages.no') }} </label>
			</div>
		</div>
		<div class="col-md-4">
			<h5>{{ __('messages.extra_guest_price') }} </h5>
			 <input class="" placeholder="{{ __('messages.enter_extra_guest_price') }} " type="text" name="additional_guests_price" value="" data-unit="EUR" />
		</div>
		<div class="col-md-4">
			<h5>{{ __('messages.no_of_guests') }} </h5>
			 <input class="" placeholder="{{ __('messages.enter_no_of_guests') }} " type="text" name="num_additional_guests" value="" />
		</div>
	</div>
	
	<div class="row with-forms">
		<div class="col-md-7">
			<h5>{{ __('messages.cleaning_fees') }} </h5>
			<div class="fm-input pricing-price">
				<input class="" placeholder="{{ __('messages.enter_cleaning_fees_price') }} " type="text" name="cleaning_fee" value="" data-unit="EUR" />
			</div>
		</div>
		<div class="col-md-5">
			<h5>{{ __('messages.cleaning_fee_type') }}</h5>
			 <div class="payment-tab-trigger">
				<input id="daily" name="cleaning_fee_type" type="radio" value="daily">
				<label for="daily">{{ __('messages.daily') }}</label>
			</div>
			 <div class="payment-tab-trigger">
				<input checked="" id="per_stay" name="cleaning_fee_type" type="radio" value="per_stay">
				<label for="per_stay">{{ __('messages.per_stay') }} </label>
			</div>
		</div>
		
	</div>
	<div class="row with-forms">
		<div class="col-md-6">
			<h5>{{ __('messages.security_deposit') }} </h5>
			<div class="fm-input pricing-price">
			 <input class="" placeholder="{{ __('messages.enter_security_deposit') }} " type="text" name="security_deposit" value="" />
			</div>
		</div>
	</div>
	
</div>	