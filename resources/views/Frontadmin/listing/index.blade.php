@extends('layouts.frontadmin.app')
@section('title', __('messages.my_listings') )
@section('content')
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<style>
img.listing-thumb-img{
	width: 90px;
    height: 60px;
	border-radius: 4px;
}
.pagination span{
			background-color: #5cb85c !important;
			color: white !important;
			border-color: #5cb85c !important;
		}
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
			<div class="dashboard-list-box margin-top-0">
				<div class="pull-right margin-top-10">
					<input type='text' class="" placeholder="Search">
				</div>
				<table class="table table-bordered table-dark">
					<thead>
						<tr>
							<th>ID</th>
							<th>Thumbnail</th>
							<th>Address</th>
							<th>Type</th>
							<th>Price</th>
							<th>Status</th>
							<th>Actions</th>
						<tr>
					</thead>
					<tbody>
						@if(!empty($getAllList) && $getAllList->count())
						@foreach ($getAllList as $lists)
						<tr>
							<td>{{$lists->listing_id}}</td>
							<td>
								<img src="{{$lists->listing_image_ids}}" class="listing-thumb-img img-responsive" alt="">
							</td>
							<td>
								<a href="#">
									<strong>{{$lists->title}}</strong>
								</a>
								<address>@if(isset($lists['listing_address'])) {{$lists['listing_address']}} @endif</address>
							</td>
							<td>@if($lists->listing_type!='-1') {{$lists->category_name}} @endif</td>
							<td><strong>@if($lists->price!='') €{{$lists->price}}/day @endif</strong></td>
							<td><span class="label label-success">{{Config::get('constants.listing_status')[$lists->status]}}</span></td>
							<td>
								<a href="{{url('user/listing/edit/
								'. $lists->listing_id)}}" class="button gray tooltip" title="Edit"><i class="sl sl-icon-note"></i> </a>
								<!-- <a href="#" class="button gray tooltip" title="Delete"><i class="sl sl-icon-close"></i> </a>
								<a href="#" class="button gray tooltip" title="View"><i class="sl sl-icon-arrow-right-circle"></i> </a> -->
							</td>
						</tr>
						@endforeach
						 @else
				            <tr>
				                <td colspan="10">There are no data.</td>
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
</script>	
@endsection	

