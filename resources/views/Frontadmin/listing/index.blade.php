@extends('layouts.frontadmin.app')
@section('title', __('messages.my_listings') )
@section('content')
<style>
</style>
<!-- Titlebar -->
<div id="titlebar">
	<div class="row">
		<div class="col-md-12">
			<h2>{{ __('messages.my_listings') }}</h2>
		</div>
	</div>
</div>
<div class="row">
		<!-- Listings -->
		<div class="col-lg-12 col-md-12">
			<div class="dashboard-list-box margin-top-0 margin-bottom-50">
				<div class="pull-right margin-top-10">
					<input type='text' class="" placeholder="Search">
				</div>
				<table class="basic-table">
					<thead>
						<tr>
							<th>ID</th>
							<th>{{ __('messages.thumbnail') }}</th>
							<th>{{ __('messages.address') }}</th>
							<th>{{ __('messages.type') }}</th>
							<th>{{ __('messages.price') }}</th>
							<th>{{ __('messages.status') }}</th>
							<th>{{ __('messages.actions') }}</th>
						<tr>
					</thead>
					<tbody>
						@if(!empty($getAllList) && $getAllList->count())
						@foreach ($getAllList as $lists)
						<tr>
							<td>{{$lists->listing_id}}</td>
							<td>
								<img src="{{ (isset($lists->listing_image_ids))?$lists->listing_image_ids:'http://placehold.it/90x60?text=NA'}}" class="listing-thumb-img img-responsive" alt="">
							</td>
							<td>
								<a href="#">
									<strong>{{$lists->title}}</strong>
								</a>
								<address>@if(isset($lists['listing_address'])) {{$lists['listing_address']}} @endif</address>
							</td>
							<td>@if($lists->listing_type!='-1') {{$lists->category_name}} @endif</td>
							<td><strong>@if($lists->price!='') €{{$lists->price}}/day @endif</strong></td>
							<td><span class="label label-@if($lists->status=='1')success @elseif($lists->status=='2')warning @elseif($lists->status=='3')danger @elseif($lists->status=='4')default @endif">{{Config::get('constants.listing_status')[$lists->status]}}</span></td>
							<td>
								<a href="{{url('user/listing/edit/
								'. $lists->listing_id)}}" class="button gray tooltip" title="{{ __('messages.edit') }}"><i class="sl sl-icon-note"></i> </a>
								<a href="javascript:void(0)" onclick="delete_listing({{$lists->listing_id}});" class="button gray tooltip" title="{{ __('messages.delete') }}"><i class="sl sl-icon-close"></i> </a>
								<a href="#" class="button gray tooltip" title="{{ __('messages.view') }}"><i class="sl sl-icon-arrow-right-circle"></i> </a>
							</td>
						</tr>
						@endforeach
						 @else
				            <tr>
				                <td colspan="7" align="center">{{ __('messages.no_records') }}</td>
				            </tr>
				        @endif
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-lg-12 col-md-12">
		{{ $getAllList->links() }}
	</div>
</div>		
<script>
function delete_listing(id){
	swal({
	  title: "{{ __('messages.are_you_sure_delete') }}",
	  text: "",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	  confirmButtonText: "{{ __('messages.yes_proceed') }}",
	  cancelButtonText: "{{ __('messages.cancel') }}",
	    closeOnConfirm: false
	  }).then(result => {
	  	console.log(result);
	  	if(result){
	  		 $.ajax({
				method: 'POST',
				url: "{{url('user/listing/deleteListing')}}",
				data: {'listing_id':id,},
				headers: {
				  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				success: function(data){
					//console.log(data);
					swal(data.message,'','success');
					location.reload();
				},
				error: function(data){
					swal('Error',data,'error');
				}
			});
	  	}
	  });
}
</script>	
@endsection	

