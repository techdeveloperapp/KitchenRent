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
				<input id="mon_closed_slot" value="1" type="checkbox" name="meta[mon_closed_slot]" {{(isset($mon_closed_slot) && $mon_closed_slot == '1') ? 'checked' : ''}}>
				<label for="mon_closed_slot" class='slot_label'>Closed</label>
				<input id="time_mon_meta_slot" value="" type="hidden" name="meta[time_mon_meta_slot]">
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

			@if(isset($time_mon_meta_slot) && $time_mon_meta_slot != "[]")
			<?php
			$time_mon_meta_slot = json_decode($time_mon_meta_slot,true);
			foreach($time_mon_meta_slot as $time_slot_val){
			?>
			<!-- Single Slot -->
			<div class="single-slot">
				<div class="single-slot-left">
					<div class="single-slot-time"><span class="start">{{$time_slot_val['start_time']}}</span> <i class="am-pm">am</i> - <span class="end">{{$time_slot_val['end_time']}}</span> <i class="am-pm">am</i></div>
					<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
				</div>

				<div class="single-slot-right">
					<strong>Slots:</strong>
					<div class="plusminus horiz">
						<button type="button" ></button>
						<input type="number" name="slot-qty" value="{{$time_slot_val['qty']}}" min="1" max="99">
						<button type="button" ></button> 
					</div>
					
				</div>
				<div class="single-slot-left">
					<strong>{{ __('messages.price') }}:</strong>
					<input type="text" value="{{$time_slot_val['price']}}" class="price-input" placeholder="{{ __('messages.price') }}">
				</div>
				
			</div>
			<!-- Single Slot -->
			<?php
			}
			?>
			@else
			<!-- Single Slot -->
			<!-- <div class="single-slot">
				<div class="single-slot-left">
					<div class="single-slot-time"><span class="start">8:30</span> <i class="am-pm">am</i> - <span class="end">9:00</span> <i class="am-pm">am</i></div>
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
				
			</div> -->
			<!-- Single Slot -->
			@endif
			
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
				<input id="tue_closed_slot" value="1" type="checkbox" name="meta[tue_closed_slot]" {{(isset($tue_closed_slot) && $tue_closed_slot == '1') ? 'checked' : ''}}>
				<label for="tue_closed_slot" class='slot_label'>Closed</label>
				<input id="time_tue_meta_slot" value="" type="hidden" name="meta[time_tue_meta_slot]">
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

			@if(isset($time_tue_meta_slot) && $time_tue_meta_slot != "[]")
			<?php
			$time_tue_meta_slot = json_decode($time_tue_meta_slot,true);
			foreach($time_tue_meta_slot as $time_slot_val){
			?>
			<!-- Single Slot -->
			<div class="single-slot">
				<div class="single-slot-left">
					<div class="single-slot-time"><span class="start">{{$time_slot_val['start_time']}}</span> <i class="am-pm">am</i> - <span class="end">{{$time_slot_val['end_time']}}</span> <i class="am-pm">am</i></div>
					<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
				</div>

				<div class="single-slot-right">
					<strong>Slots:</strong>
					<div class="plusminus horiz">
						<button type="button" ></button>
						<input type="number" name="slot-qty" value="{{$time_slot_val['qty']}}" min="1" max="99">
						<button type="button" ></button> 
					</div>
					
				</div>
				<div class="single-slot-left">
					<strong>{{ __('messages.price') }}:</strong>
					<input type="text" value="{{$time_slot_val['price']}}" class="price-input" placeholder="{{ __('messages.price') }}">
				</div>
				
			</div>
			<!-- Single Slot -->
			<?php
			}
			?>
			@else
			<!-- Single Slot -->
			<!-- <div class="single-slot">
				<div class="single-slot-left">
					<div class="single-slot-time"><span class="start">8:30</span> <i class="am-pm">am</i> - <span class="end">9:00</span> <i class="am-pm">am</i></div>
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
				
			</div> -->
			<!-- Single Slot -->
			@endif
			
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
				<input id="wed_closed_slot" value="1" type="checkbox" name="meta[wed_closed_slot]" {{(isset($wed_closed_slot) && $wed_closed_slot == '1') ? 'checked' : ''}}>
				<label for="wed_closed_slot" class='slot_label'>Closed</label>
				<input id="time_wed_meta_slot" value="" type="hidden" name="meta[time_wed_meta_slot]">
			</div>
		</div>
		
		<!-- Slots Container -->
		<div class="slots-container">

			@if(isset($time_wed_meta_slot) && $time_wed_meta_slot != "[]")
			<?php
			$time_wed_meta_slot = json_decode($time_wed_meta_slot,true);
			foreach($time_wed_meta_slot as $time_slot_val){
			?>
			<!-- Single Slot -->
			<div class="single-slot">
				<div class="single-slot-left">
					<div class="single-slot-time"><span class="start">{{$time_slot_val['start_time']}}</span> <i class="am-pm">am</i> - <span class="end">{{$time_slot_val['end_time']}}</span> <i class="am-pm">am</i></div>
					<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
				</div>

				<div class="single-slot-right">
					<strong>Slots:</strong>
					<div class="plusminus horiz">
						<button type="button" ></button>
						<input type="number" name="slot-qty" value="{{$time_slot_val['qty']}}" min="1" max="99">
						<button type="button" ></button> 
					</div>
					
				</div>
				<div class="single-slot-left">
					<strong>{{ __('messages.price') }}:</strong>
					<input type="text" value="{{$time_slot_val['price']}}" class="price-input" placeholder="{{ __('messages.price') }}">
				</div>
				
			</div>
			<!-- Single Slot -->
			<?php
			}
			?>
			@else
			<!-- Single Slot -->
			<!-- <div class="single-slot">
				<div class="single-slot-left">
					<div class="single-slot-time"><span class="start">8:30</span> <i class="am-pm">am</i> - <span class="end">9:00</span> <i class="am-pm">am</i></div>
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
				
			</div> -->
			<!-- Single Slot -->
			@endif
			
		</div>
		<!-- Slots Container / End -->

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
				<input id="thu_closed_slot" value="1" type="checkbox" name="meta[thu_closed_slot]" {{(isset($thu_closed_slot) && $thu_closed_slot == '1') ? 'checked' : ''}}>
				<label for="thu_closed_slot" class='slot_label'>Closed</label>
				<input id="time_thu_meta_slot" value="" type="hidden" name="meta[time_thu_meta_slot]">
			</div>
		</div>
		
		<!-- Slots Container -->
		<div class="slots-container">

			@if(isset($time_thu_meta_slot) && $time_thu_meta_slot != "[]")
			<?php
			$time_thu_meta_slot = json_decode($time_thu_meta_slot,true);
			foreach($time_thu_meta_slot as $time_slot_val){
			?>
			<!-- Single Slot -->
			<div class="single-slot">
				<div class="single-slot-left">
					<div class="single-slot-time"><span class="start">{{$time_slot_val['start_time']}}</span> <i class="am-pm">am</i> - <span class="end">{{$time_slot_val['end_time']}}</span> <i class="am-pm">am</i></div>
					<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
				</div>

				<div class="single-slot-right">
					<strong>Slots:</strong>
					<div class="plusminus horiz">
						<button type="button" ></button>
						<input type="number" name="slot-qty" value="{{$time_slot_val['qty']}}" min="1" max="99">
						<button type="button" ></button> 
					</div>
					
				</div>
				<div class="single-slot-left">
					<strong>{{ __('messages.price') }}:</strong>
					<input type="text" value="{{$time_slot_val['price']}}" class="price-input" placeholder="{{ __('messages.price') }}">
				</div>
				
			</div>
			<!-- Single Slot -->
			<?php
			}
			?>
			@else
			<!-- Single Slot -->
			<!-- <div class="single-slot">
				<div class="single-slot-left">
					<div class="single-slot-time"><span class="start">8:30</span> <i class="am-pm">am</i> - <span class="end">9:00</span> <i class="am-pm">am</i></div>
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
				
			</div> -->
			<!-- Single Slot -->
			@endif
			
		</div>
		<!-- Slots Container / End -->

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
				<input id="fri_closed_slot" value="1" type="checkbox" name="meta[fri_closed_slot]" {{(isset($fri_closed_slot) && $fri_closed_slot == '1') ? 'checked' : ''}}>
				<label for="fri_closed_slot" class='slot_label'>Closed</label>
				<input id="time_fri_meta_slot" value="" type="hidden" name="meta[time_fri_meta_slot]">
			</div>
		</div>
		
		<!-- Slots Container -->
		<div class="slots-container">

			@if(isset($time_fri_meta_slot) && $time_fri_meta_slot != "[]")
			<?php
			$time_fri_meta_slot = json_decode($time_fri_meta_slot,true);
			foreach($time_fri_meta_slot as $time_slot_val){
			?>
			<!-- Single Slot -->
			<div class="single-slot">
				<div class="single-slot-left">
					<div class="single-slot-time"><span class="start">{{$time_slot_val['start_time']}}</span> <i class="am-pm">am</i> - <span class="end">{{$time_slot_val['end_time']}}</span> <i class="am-pm">am</i></div>
					<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
				</div>

				<div class="single-slot-right">
					<strong>Slots:</strong>
					<div class="plusminus horiz">
						<button type="button" ></button>
						<input type="number" name="slot-qty" value="{{$time_slot_val['qty']}}" min="1" max="99">
						<button type="button" ></button> 
					</div>
					
				</div>
				<div class="single-slot-left">
					<strong>{{ __('messages.price') }}:</strong>
					<input type="text" value="{{$time_slot_val['price']}}" class="price-input" placeholder="{{ __('messages.price') }}">
				</div>
				
			</div>
			<!-- Single Slot -->
			<?php
			}
			?>
			@else
			<!-- Single Slot -->
			<!-- <div class="single-slot">
				<div class="single-slot-left">
					<div class="single-slot-time"><span class="start">8:30</span> <i class="am-pm">am</i> - <span class="end">9:00</span> <i class="am-pm">am</i></div>
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
				
			</div> -->
			<!-- Single Slot -->
			@endif
			
		</div>
		<!-- Slots Container / End -->

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
				<input id="sat_closed_slot" value="1" type="checkbox" name="meta[sat_closed_slot]" {{(isset($sat_closed_slot) && $sat_closed_slot == '1') ? 'checked' : ''}}>
				<label for="sat_closed_slot" class='slot_label'>Closed</label>
				<input id="time_sat_meta_slot" value="" type="hidden" name="meta[time_sat_meta_slot]">
			</div>
		</div>
		
		<!-- Slots Container -->
		<div class="slots-container">

			@if(isset($time_sat_meta_slot) && $time_sat_meta_slot != "[]")
			<?php
			$time_sat_meta_slot = json_decode($time_sat_meta_slot,true);
			foreach($time_sat_meta_slot as $time_slot_val){
			?>
			<!-- Single Slot -->
			<div class="single-slot">
				<div class="single-slot-left">
					<div class="single-slot-time"><span class="start">{{$time_slot_val['start_time']}}</span> <i class="am-pm">am</i> - <span class="end">{{$time_slot_val['end_time']}}</span> <i class="am-pm">am</i></div>
					<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
				</div>

				<div class="single-slot-right">
					<strong>Slots:</strong>
					<div class="plusminus horiz">
						<button type="button" ></button>
						<input type="number" name="slot-qty" value="{{$time_slot_val['qty']}}" min="1" max="99">
						<button type="button" ></button> 
					</div>
					
				</div>
				<div class="single-slot-left">
					<strong>{{ __('messages.price') }}:</strong>
					<input type="text" value="{{$time_slot_val['price']}}" class="price-input" placeholder="{{ __('messages.price') }}">
				</div>
				
			</div>
			<!-- Single Slot -->
			<?php
			}
			?>
			@else
			<!-- Single Slot -->
			<!-- <div class="single-slot">
				<div class="single-slot-left">
					<div class="single-slot-time"><span class="start">8:30</span> <i class="am-pm">am</i> - <span class="end">9:00</span> <i class="am-pm">am</i></div>
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
				
			</div> -->
			<!-- Single Slot -->
			@endif
			
		</div>
		<!-- Slots Container / End -->

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
				<input id="sun_closed_slot" value="1" type="checkbox" name="meta[sun_closed_slot]" {{(isset($sun_closed_slot) && $sun_closed_slot == '1') ? 'checked' : ''}}>
				<label for="sun_closed_slot" class='slot_label'>Closed</label>
				<input id="time_sun_meta_slot" value="" type="hidden" name="meta[time_sun_meta_slot]">
			</div>
		</div>
		
		<!-- Slots Container -->
		<div class="slots-container">

			@if(isset($time_sun_meta_slot) && $time_sun_meta_slot != "[]")
			<?php
			$time_sun_meta_slot = json_decode($time_sun_meta_slot,true);
			foreach($time_sun_meta_slot as $time_slot_val){
			?>
			<!-- Single Slot -->
			<div class="single-slot">
				<div class="single-slot-left">
					<div class="single-slot-time"><span class="start">{{$time_slot_val['start_time']}}</span> <i class="am-pm">am</i> - <span class="end">{{$time_slot_val['end_time']}}</span> <i class="am-pm">am</i></div>
					<button type="button"  class="remove-slot"><i class="fa fa-close"></i></button>
				</div>

				<div class="single-slot-right">
					<strong>Slots:</strong>
					<div class="plusminus horiz">
						<button type="button" ></button>
						<input type="number" name="slot-qty" value="{{$time_slot_val['qty']}}" min="1" max="99">
						<button type="button" ></button> 
					</div>
					
				</div>
				<div class="single-slot-left">
					<strong>{{ __('messages.price') }}:</strong>
					<input type="text" value="{{$time_slot_val['price']}}" class="price-input" placeholder="{{ __('messages.price') }}">
				</div>
				
			</div>
			<!-- Single Slot -->
			<?php
			}
			?>
			@else
			<!-- Single Slot -->
			<!-- <div class="single-slot">
				<div class="single-slot-left">
					<div class="single-slot-time"><span class="start">8:30</span> <i class="am-pm">am</i> - <span class="end">9:00</span> <i class="am-pm">am</i></div>
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
				
			</div> -->
			<!-- Single Slot -->
			@endif
			
		</div>
		<!-- Slots Container / End -->

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