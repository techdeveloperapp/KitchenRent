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
<?php 
$start_hour = strtotime('1:00');
$end_hour = strtotime('24:00');
if(!function_exists('gig_time_format')) {
    function gig_time_format($time_format=null) {
        //$time_format = homey_option('gig_time_format');
        if($time_format == 12) {
            $format = "g:i a";
        } elseif($time_format == 24) {
            $format = "H:i";
        } else {
            $format = "g:i a";
        }
        return $format;
    }
}
?>
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


<!-- Timeslot Section -->
<div class="add-listing-section margin-top-25">
	
	<!-- Headline -->
	<div class="add-listing-headline">
		<h3><i class="sl sl-icon-layers"></i> {{ __('messages.timeslots')}}</h3>
		<!-- Switcher -->
		<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
	</div>

	<!-- Switcher ON-OFF Content -->
	<div class="switcher-content">
		<!-- Availablity Slots -->
			<!-- Set data-clock-type="24hr" to enable 24 hours clock type -->
			<div class="availability-slots" data-clock-type="24hr">
				 <!-- Single Day Slots -->
					<div class="day-slots">
						<div class="day-slot-headline">
							{{ __('messages.timeslots')}}
						</div>
						
						<!-- Slot For Cloning / Do NOT Remove-->
						<div class="single-slot cloned">
							<div class="single-slot-left">
								<div class="single-slot-time"></div>
								<button class="remove-slot"><i class="fa fa-close"></i></button>
							</div>

							<div class="single-slot-right">
								<strong>Slots:</strong>
								<div class="plusminus horiz">
									<button></button>
									<input type="number" name="slot-qty" value="1" min="1" max="99">
									<button></button> 
								</div>
							</div>
						</div>		
						<!-- Slot For Cloning / Do NOT Remove-->


						<!-- No slots -->
						<div class="no-slots">No slots added</div>

						<!-- Slots Container -->
						<div class="slots-container">

							<!-- Single Slot -->
							<div class="single-slot">
								<div class="single-slot-left">
									<div class="single-slot-time">8:30 <i class="am-pm">am</i> - 9:00 <i class="am-pm">am</i></div>
									<button class="remove-slot"><i class="fa fa-close"></i></button>
								</div>

								<div class="single-slot-right">
									<strong>Slots:</strong>
									<div class="plusminus horiz">
										<button></button>
										<input type="number" name="slot-qty" value="1" min="1" max="99">
										<button></button> 
									</div>
								</div>
							</div>

							<!-- Single Slot -->
							<div class="single-slot">
								<div class="single-slot-left">
									<div class="single-slot-time">9:00 <i class="am-pm">am</i> - 9:30 <i class="am-pm">am</i></div>
									<button class="remove-slot"><i class="fa fa-close"></i></button>
								</div>

								<div class="single-slot-right">
									<strong>Slots:</strong>
									<div class="plusminus horiz">
										<button></button>
										<input type="number" name="slot-qty" value="1" min="1" max="99">
										<button></button> 
									</div>
								</div>
							</div>

							<!-- Single Slot -->
							<div class="single-slot">
								<div class="single-slot-left">
									<div class="single-slot-time">9:30 <i class="am-pm">am</i> - 10:00 <i class="am-pm">am</i></div>
									<button class="remove-slot"><i class="fa fa-close"></i></button>
								</div>

								<div class="single-slot-right">
									<strong>Slots:</strong>
									<div class="plusminus horiz">
										<button></button>
										<input type="number" name="slot-qty" value="1" min="1" max="99">
										<button></button> 
									</div>
								</div>
							</div>
							
						</div>
						<!-- Slots Container / End -->


						<!-- Add Slot -->
						<div class="add-slot">
							<div class="add-slot-inputs">
								<input type="time" class="time-slot-start" min="00:00" max="12:00"/>
								<select class="time-slot-start twelve-hr" id="">
									<option>am</option>
									<option>pm</option>
								</select>
								<span>-</span>

								<input type="time" class="time-slot-end" min="00:00" max="12:00"/>
								<select class="time-slot-end twelve-hr" id="">
									<option>am</option>
									<option>pm</option>
								</select>
							</div>
							<div class="add-slot-btn">
								<button>Add</button>
							</div>
						</div>

					</div>
					<!-- Single Day Slots / End -->
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
		<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
	</div>
	
	<!-- Switcher ON-OFF Content -->
	<div class="switcher-content">

		<!-- Day -->
		<div class="row opening-day">
			<div class="col-md-2"><h5>Monday - Friday</h5></div>
			<div class="col-md-5">
				<select class="chosen-select" data-placeholder="Opening Time">
					<option label="Opening Time"></option>
					<option>Closed</option>
					<?php 
					for ($halfhour = $start_hour;$halfhour <= $end_hour; $halfhour = $halfhour+30*60) {
						echo '<option value="'.date('H:i',$halfhour).'">'.date(gig_time_format(),$halfhour).'</option>';
					}
					?>
				</select>
			</div>
			<div class="col-md-5">
				<select class="chosen-select" data-placeholder="Closing Time">
					<option label="Closing Time"></option>
					<option>Closed</option>
					<?php 
					for ($halfhour = $start_hour;$halfhour <= $end_hour; $halfhour = $halfhour+30*60) {
						echo '<option value="'.date('H:i',$halfhour).'">'.date(gig_time_format(),$halfhour).'</option>';
					}
					?>
				</select>
			</div>
		</div>
		<!-- Day / End -->

		<!-- Day -->
		<div class="row opening-day js-demo-hours">
			<div class="col-md-2"><h5>Saturday</h5></div>
			<div class="col-md-5">
				<select class="chosen-select" data-placeholder="Opening Time">
					<!-- Hours added via JS (this is only for demo purpose) -->
					<option>Closed</option>
					<?php 
					for ($halfhour = $start_hour;$halfhour <= $end_hour; $halfhour = $halfhour+30*60) {
						echo '<option value="'.date('H:i',$halfhour).'">'.date(gig_time_format(),$halfhour).'</option>';
					}
					?>
				</select>
			</div>
			<div class="col-md-5">
				<select class="chosen-select" data-placeholder="Closing Time">
					<!-- Hours added via JS (this is only for demo purpose) -->
					<option>Closed</option>
					<?php 
					for ($halfhour = $start_hour;$halfhour <= $end_hour; $halfhour = $halfhour+30*60) {
						echo '<option value="'.date('H:i',$halfhour).'">'.date(gig_time_format(),$halfhour).'</option>';
					}
					?>
				</select>
			</div>
		</div>
		<!-- Day / End -->

		<!-- Day -->
		<div class="row opening-day js-demo-hours">
			<div class="col-md-2"><h5>Sunday</h5></div>
			<div class="col-md-5">
				<select class="chosen-select" data-placeholder="Opening Time">
					<!-- Hours added via JS (this is only for demo purpose) -->
					<option>Closed</option>
					<?php 
					for ($halfhour = $start_hour;$halfhour <= $end_hour; $halfhour = $halfhour+30*60) {
						echo '<option value="'.date('H:i',$halfhour).'">'.date(gig_time_format(),$halfhour).'</option>';
					}
					?>
				</select>
			</div>
			<div class="col-md-5">
				<select class="chosen-select" data-placeholder="Closing Time">
					<!-- Hours added via JS (this is only for demo purpose) -->
					<option>Closed</option>
					<?php 
					for ($halfhour = $start_hour;$halfhour <= $end_hour; $halfhour = $halfhour+30*60) {
						echo '<option value="'.date('H:i',$halfhour).'">'.date(gig_time_format(),$halfhour).'</option>';
					}
					?>
				</select>
			</div>
		</div>
		<!-- Day / End -->

	</div>
	<!-- Switcher ON-OFF Content / End -->

</div>
<button type="button"  class="button preview">{{ __('messages.save_draft') }} <i class="fa fa-arrow-circle-right"></i></button>

<button type="submit" class="button preview pull-right">{{ __('messages.save') }} <i class="fa fa-arrow-circle-right"></i></button>
<!-- Section / End -->

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