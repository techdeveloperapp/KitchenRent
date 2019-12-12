<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<style>
.payment-tab-trigger {
    float: left;
    padding-left: 0px;
}

.ck.ck-reset.ck-editor.ck-rounded-corners {
    width: 98%;
}
</style>
<!-- Headline -->
<div class="add-listing-headline">
	<h3><i class="sl sl-icon-doc"></i> {{ __('messages.information') }}</h3>
</div>
<div class="row with-forms">
	<div class="col-md-12">
		<h5>{{ __('messages.kitchen_title') }} </h5>
		<input class="" type="text" name="title" value="" />
	</div>
</div>
<div class="row with-forms">
	<div class="col-md-12">
		<h5>{{ __('messages.description') }} </h5>
		<div id="description"></div>
	</div>
</div>
<div class="row with-forms">
	<div class="col-md-6">
		<h5>{{ __('messages.category') }}</h5>
		<select class="chosen-select-no-single" name="category">
			<option label="blank">{{ __('messages.select_category') }}</option>	
			<option>Productiekeuken</option>
			<option>Professionele Keuken</option>
			<option>Restaurant</option>
		</select>
	</div>
	<div class="col-md-6">
		<h5>{{ __('messages.keywords') }} <i class="tip" data-tip-content="Maximum of 15 keywords related with your business"></i></h5>
		<input type="text" name="keywords" placeholder="Keywords should be separated by commas">
	</div>
</div>

<div class="row with-forms">
	<div class="col-md-6">
		<h5>{{ __('messages.choose_timings') }}</h5>
		<div class="payment-tab-trigger">
			<input type="radio" id="business" class="" name="booking_hours_type" value="business"> 
			 <label for="business">{{ __('messages.business_hours')}}</label>
		</div>
		<div class="payment-tab-trigger">
			<input type="radio" id="timeslots" class="" name="booking_hours_type" value="timeslots"> 
			 <label for="timeslots">{{ __('messages.timeslots')}}</label>
		</div>
			
		</select>
	</div>
</div>

<script>
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