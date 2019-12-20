<style>
.price-input{
	height: 30px !important;
    width: 80px !important;
}
.plusminus.horiz{
margin-bottom: 10px;
}
.slot_label{
	margin-left:10px;
}
</style>
	<!-- Single Day Slots -->
	<div class="day-slots">
		<div class="day-slot-headline">
			<div class="checkboxes ">
				Monday
				<input id="mon_closed_slot" value="1" type="checkbox" name="meta[mon_closed_slot]">
				<label for="mon_closed_slot" class='slot_label'>Closed</label>
			</div>
		</div>
		
		<!-- Slot For Cloning / Do NOT Remove-->
		<div class="single-slot cloned">
			<div class="single-slot-left">
				<div class="single-slot-time"></div>
				<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
			</div>

			<div class="single-slot-right">
				<strong>Slots:</strong>
				<div class="plusminus horiz">
					<button type="button" ></button>
					<input type="number" name="slot-qty" value="1" min="1" max="99">
					<button type="button" ></button> 
				</div>
			</div>
			<div class="single-slot-left">
				<strong>{{ __('messages.price') }}:</strong>
				<input type="text" value="" class="price-input" placeholder="{{ __('messages.price') }}">
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
					<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
				</div>

				<div class="single-slot-right">
					<strong>Slots:</strong>
					<div class="plusminus horiz">
						<button type="button" ></button>
						<input type="number" name="slot-qty" value="1" min="1" max="99">
						<button type="button" ></button> 
					</div>
					
				</div>
				<div class="single-slot-left">
					<strong>{{ __('messages.price') }}:</strong>
					<input type="text" value="" class="price-input" placeholder="{{ __('messages.price') }}">
				</div>
				
			</div>
			<!-- Single Slot -->
			
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
				<button type="button" >Add</button>
			</div>
		</div>

	</div>
	<!-- Single Day Slots / End -->

	<!-- Single Day Slots -->
	<div class="day-slots">
		<div class="day-slot-headline">
			<div class="checkboxes ">
				Tuesday
				<input id="tue_closed_slot" value="1" type="checkbox" name="meta[tue_closed_slot]">
				<label for="tue_closed_slot" class='slot_label'>Closed</label>
			</div>
		</div>
		
		<!-- Slot For Cloning / Do NOT Remove-->
		<div class="single-slot cloned">
			<div class="single-slot-left">
				<div class="single-slot-time"></div>
				<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
			</div>

			<div class="single-slot-right">
				<strong>Slots:</strong>
				<div class="plusminus horiz">
					<button type="button" ></button>
					<input type="number" name="slot-qty" value="1" min="1" max="99">
					<button type="button" ></button> 
				</div>
			</div>
			<div class="single-slot-left">
				<strong>{{ __('messages.price') }}:</strong>
				<input type="text" value="" class="price-input" placeholder="{{ __('messages.price') }}">
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
					<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
				</div>

				<div class="single-slot-right">
					<strong>Slots:</strong>
					<div class="plusminus horiz">
						<button type="button" ></button>
						<input type="number" name="slot-qty" value="1" min="1" max="99">
						<button type="button" ></button> 
					</div>
				</div>
				
				<div class="single-slot-left">
					<strong>{{ __('messages.price') }}:</strong>
					<input type="text" value="" class="price-input" placeholder="{{ __('messages.price') }}">
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
				<button type="button" >Add</button>
			</div>
		</div>

	</div>
	<!-- Single Day Slots / End -->

	<!-- Single Day Slots -->
	<div class="day-slots">
		<div class="day-slot-headline">
			<div class="checkboxes ">
				Wednesday
				<input id="wed_closed_slot" value="1" type="checkbox" name="meta[wed_closed_slot]">
				<label for="wed_closed_slot" class='slot_label'>Closed</label>
			</div>
		</div>
		
		<!-- Slot For Cloning / Do NOT Remove-->
		<div class="single-slot cloned">
			<div class="single-slot-left">
				<div class="single-slot-time"></div>
				<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
			</div>

			<div class="single-slot-right">
				<strong>Slots:</strong>
				<div class="plusminus horiz">
					<button type="button" ></button>
					<input type="number" name="slot-qty" value="1" min="1" max="99">
					<button type="button" ></button> 
				</div>
			</div>
			<div class="single-slot-left">
				<strong>{{ __('messages.price') }}:</strong>
				<input type="text" value="" class="price-input" placeholder="{{ __('messages.price') }}">
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
					<div class="single-slot-time">9:30 <i class="am-pm">am</i> - 10:00 <i class="am-pm">am</i></div>
					<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
				</div>

				<div class="single-slot-right">
					<strong>Slots:</strong>
					<div class="plusminus horiz">
						<button type="button" ></button>
						<input type="number" name="slot-qty" value="1" min="1" max="99">
						<button type="button" ></button> 
					</div>
				</div>
				<div class="single-slot-left">
					<strong>{{ __('messages.price') }}:</strong>
					<input type="text" value="" class="price-input" placeholder="{{ __('messages.price') }}">
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
				<button type="button" >Add</button>
			</div>
		</div>

	</div>
	<!-- Single Day Slots / End -->

	<!-- Single Day Slots -->
	<div class="day-slots">
		<div class="day-slot-headline">
			<div class="checkboxes ">
				Thursday
				<input id="thu_closed_slot" value="1" type="checkbox" name="meta[thu_closed_slot]">
				<label for="thu_closed_slot" class='slot_label'>Closed</label>
			</div>
		</div>
		
		<!-- Slot For Cloning / Do NOT Remove-->
		<div class="single-slot cloned">
			<div class="single-slot-left">
				<div class="single-slot-time"></div>
				<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
			</div>

			<div class="single-slot-right">
				<strong>Slots:</strong>
				<div class="plusminus horiz">
					<button type="button" ></button>
					<input type="number" name="slot-qty" value="1" min="1" max="99">
					<button type="button" ></button> 
				</div>
			</div>
			<div class="single-slot-left">
				<strong>{{ __('messages.price') }}:</strong>
				<input type="text" value="" class="price-input" placeholder="{{ __('messages.price') }}">
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
					<div class="single-slot-time">9:30 <i class="am-pm">am</i> - 10:00 <i class="am-pm">am</i></div>
					<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
				</div>

				<div class="single-slot-right">
					<strong>Slots:</strong>
					<div class="plusminus horiz">
						<button type="button" ></button>
						<input type="number" name="slot-qty" value="1" min="1" max="99">
						<button type="button" ></button> 
					</div>
				</div>
				<div class="single-slot-left">
					<strong>{{ __('messages.price') }}:</strong>
					<input type="text" value="" class="price-input" placeholder="{{ __('messages.price') }}">
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
				<button type="button" >Add</button>
			</div>
		</div>

	</div>
	<!-- Single Day Slots / End -->

	<!-- Single Day Slots -->
	<div class="day-slots">
		<div class="day-slot-headline">
			<div class="checkboxes ">
				Friday
				<input id="fri_closed_slot" value="1" type="checkbox" name="meta[fri_closed_slot]">
				<label for="fri_closed_slot" class='slot_label'>Closed</label>
			</div>
		</div>
		
		<!-- Slot For Cloning / Do NOT Remove-->
		<div class="single-slot cloned">
			<div class="single-slot-left">
				<div class="single-slot-time"></div>
				<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
			</div>

			<div class="single-slot-right">
				<strong>Slots:</strong>
				<div class="plusminus horiz">
					<button type="button" ></button>
					<input type="number" name="slot-qty" value="1" min="1" max="99">
					<button type="button" ></button> 
				</div>
			</div>
			<div class="single-slot-left">
				<strong>{{ __('messages.price') }}:</strong>
				<input type="text" value="" class="price-input" placeholder="{{ __('messages.price') }}">
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
					<div class="single-slot-time">9:30 <i class="am-pm">am</i> - 10:00 <i class="am-pm">am</i></div>
					<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
				</div>

				<div class="single-slot-right">
					<strong>Slots:</strong>
					<div class="plusminus horiz">
						<button type="button" ></button>
						<input type="number" name="slot-qty" value="1" min="1" max="99">
						<button type="button" ></button> 
					</div>
				</div>
				<div class="single-slot-left">
					<strong>{{ __('messages.price') }}:</strong>
					<input type="text" value="" class="price-input" placeholder="{{ __('messages.price') }}">
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
				<button type="button" >Add</button>
			</div>
		</div>

	</div>
	<!-- Single Day Slots / End -->

	<!-- Single Day Slots -->
	<div class="day-slots">
		<div class="day-slot-headline">
			<div class="checkboxes ">
				Saturday
				<input id="sat_closed_slot" value="1" type="checkbox" name="meta[sat_closed_slot]">
				<label for="sat_closed_slot" class='slot_label'>Closed</label>
			</div>
		</div>
		
		<!-- Slot For Cloning / Do NOT Remove-->
		<div class="single-slot cloned">
			<div class="single-slot-left">
				<div class="single-slot-time"></div>
				<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
			</div>

			<div class="single-slot-right">
				<strong>Slots:</strong>
				<div class="plusminus horiz">
					<button type="button" ></button>
					<input type="number" name="slot-qty" value="1" min="1" max="99">
					<button type="button" ></button> 
				</div>
			</div>
			<div class="single-slot-left">
				<strong>{{ __('messages.price') }}:</strong>
				<input type="text" value="" class="price-input" placeholder="{{ __('messages.price') }}">
			</div>
		</div>		
		<!-- Slot For Cloning / Do NOT Remove-->


		<!-- No slots -->
		<div class="no-slots">No slots added</div>

		<!-- Slots Container -->
		<div class="slots-container">
			
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
				<button type="button" >Add</button>
			</div>
		</div>

	</div>
	<!-- Single Day Slots / End -->

	<!-- Single Day Slots -->
	<div class="day-slots">
		<div class="day-slot-headline">
			<div class="checkboxes ">
				Sunday
				<input id="sun_closed_slot" value="1" type="checkbox" name="meta[sun_closed_slot]">
				<label for="sun_closed_slot" class='slot_label'>Closed</label>
			</div>
		</div>
		
		<!-- Slot For Cloning / Do NOT Remove-->
		<div class="single-slot cloned">
			<div class="single-slot-left">
				<div class="single-slot-time"></div>
				<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
			</div>

			<div class="single-slot-right">
				<strong>Slots:</strong>
				<div class="plusminus horiz">
					<button type="button" ></button>
					<input type="number" name="slot-qty" value="1" min="1" max="99">
					<button type="button" ></button> 
				</div>
			</div>
			<div class="single-slot-left">
				<strong>{{ __('messages.price') }}:</strong>
				<input type="text" value="" class="price-input" placeholder="{{ __('messages.price') }}">
			</div>
		</div>		
		<!-- Slot For Cloning / Do NOT Remove-->


		<!-- No slots -->
		<div class="no-slots">No slots added</div>

		<!-- Slots Container -->
		<div class="slots-container">
			
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
				<button type="button" >Add</button>
			</div>
		</div>

	</div>
	<!-- Single Day Slots / End -->