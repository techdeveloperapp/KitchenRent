<style>
</style>
<!-- Headline -->
<div class="add-listing-headline">
	<h3><i class="sl sl-icon-picture"></i> {{ __('messages.terms_rules') }}</h3>
</div>
<div class="row with-forms margin-bottom-30">
	<div class="col-md-12">
		<h5>Cancellation Policy</h5>
		<input class="" type="text" name="meta[cancellation_policy]" placeholder="Enter your Cancellation Policy" value="{{(isset($cancellation_policy) ? $cancellation_policy : '')}}" />
	</div>
	<div class="col-md-6">
		<h5>Minimum days of a booking</h5>
		<input class="" type="number" name="meta[min_book_days]" placeholder="Enter the minimum days of a booking (Only number)" value="{{(isset($min_book_days) ? $min_book_days : '')}}" />
	</div>
	<div class="col-md-6">
		<h5>Maximum days of a booking</h5>
		<input class="" type="number" name="meta[max_book_days]" placeholder="Enter the maximum days of a booking (Only number)" value="{{(isset($max_book_days) ? $max_book_days : '')}}" />
	</div>
	<div class="col-md-6">
		<h5>Check-in After</h5>
		<select name="meta[checkin_before]" class="chosen-select dynamic-select" id="checkin_before" data-selected="{{(isset($checkin_before) ? $checkin_before : '')}}">
			<?php 
			for ($halfhour = $start_hour;$halfhour <= $end_hour; $halfhour = $halfhour+30*60) {
				echo '<option value="'.date('H:i',$halfhour).'">'.date(gig_time_format(),$halfhour).'</option>';
			}
			?>
	    </select>
	</div>
	<div class="col-md-6">
		<h5>Check-out After</h5>
		<select name="meta[checkout_before]" class="chosen-select dynamic-select" id="checkout_before" data-selected="{{(isset($checkout_before) ? $checkout_before : '')}}">
			<?php 
			for ($halfhour = $start_hour;$halfhour <= $end_hour; $halfhour = $halfhour+30*60) {
				echo '<option value="'.date('H:i',$halfhour).'">'.date(gig_time_format(),$halfhour).'</option>';
			}
			?>
	    </select>
	</div>
	
	<div class="col-md-6">
		<h5>Smoking allowed?</h5>
	</div>
	<div class="col-md-6">
		<div class="payment-tab-trigger">
			<input id="yes_smoke" name="meta[smoke]" type="radio" value="yes" {{(isset($smoke) && $smoke == 'yes') ? 'checked' : ''}}>
			<label for="yes_smoke">{{ __('messages.yes') }}</label>
		</div>
		 <div class="payment-tab-trigger">
			<input id="no_smoke" name="meta[smoke]" type="radio" value="no" {{(isset($smoke) && $smoke == 'no') ? 'checked' : ''}}>
			<label for="no_smoke">{{ __('messages.no') }} </label>
		</div>
	</div>
	
	<div class="col-md-6">
		<h5>Pets allowed?</h5>
	</div>
	<div class="col-md-6">
		<div class="payment-tab-trigger">
			<input id="pet_yes" name="meta[pets]" type="radio" value="yes" {{(isset($pets) && $pets == 'yes') ? 'checked' : ''}}>
			<label for="pet_yes">{{ __('messages.yes') }}</label>
		</div>
		 <div class="payment-tab-trigger">
			<input  id="pet_no" name="meta[pets]" type="radio" value="no" {{(isset($pets) && $pets == 'no') ? 'checked' : ''}}>
			<label for="pet_no">{{ __('messages.no') }} </label>
		</div>
	</div>
	
	<div class="col-md-6">
		<h5>Party allowed?</h5>
	</div>
	<div class="col-md-6">
		<div class="payment-tab-trigger">
			<input id="party_yes" name="meta[party]" type="radio" value="yes" {{(isset($party) && $party == 'yes') ? 'checked' : ''}}>
			<label for="party_yes">{{ __('messages.yes') }}</label>
		</div>
		 <div class="payment-tab-trigger">
			<input  id="party_no" name="meta[party]" type="radio" value="no" {{(isset($party) && $party == 'no') ? 'checked' : ''}}>
			<label for="party_no">{{ __('messages.no') }} </label>
		</div>
	</div>
	
	<div class="col-md-6">
		<h5>Children allowed?</h5>
	</div>
	<div class="col-md-6">
		<div class="payment-tab-trigger">
			<input id="children_yes" name="meta[children]" type="radio" value="yes" {{(isset($children) && $children == 'yes') ? 'checked' : ''}}>
			<label for="children_yes">{{ __('messages.yes') }}</label>
		</div>
		 <div class="payment-tab-trigger">
			<input  id="children_no" name="meta[children]" type="radio" value="no" {{(isset($children) && $children == 'no') ? 'checked' : ''}}>
			<label for="children_no">{{ __('messages.no') }} </label>
		</div>
	</div>
	
	<div class="col-md-12">
			<h5>Additional rules information </h5>
			<textarea class="" rows="3" name="meta[additional_rules]" placeholder="" >{{(isset($additional_rules) ? $additional_rules : '')}}</textarea>
	</div>
</div>

@if(!isset($id) || (isset($status) && $status=='4'))
<button onclick="save_draft();" type="button" class="button button-defualt">{{ __('messages.save_draft') }}</button>
@endif
<button onclick="save_publish();" type="button"  class="button pull-right">{{ __('messages.submit') }} <i class="fa fa-save"></i></button>
<button type="button" onclick="Previous_Tab(7);" class="button pull-right"><i class="fa fa-arrow-left"></i>{{ __('messages.previous') }}</button>
