@extends('layouts.frontadmin.app')
@section('title', __('messages.my_listings') )
@section('content')

<style>
img.listing-thumb-img{
	width: 90px;
    height: 60px;
	border-radius: 4px;
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
						<tr>
							<td>45</td>
							<td>
								<a href="#"><img src="https://www.gigworks.me/wp-content/uploads/2019/12/single-listing-05c-450x300.jpg" class="listing-thumb-img img-responsive" alt=""></a>
							</td>
							<td>
								<a href="#">
									<strong>My Reserved Listing</strong>
								</a>
								<address>Lucknow, Uttar Pradesh, India</address>
							</td>
							<td>Coffee Shop</td>
							<td><strong>€10/day</strong></td>
							<td><span class="label label-success">Published</span></td>
							<td>
								<a href="#" class="button gray tooltip" title="Edit"><i class="sl sl-icon-note"></i> </a>
								<a href="#" class="button gray tooltip" title="Delete"><i class="sl sl-icon-close"></i> </a>
								<a href="#" class="button gray tooltip" title="View"><i class="sl sl-icon-arrow-right-circle"></i> </a>
							</td>
						</tr>
						<tr>
							<td>45</td>
							<td>
								<a href="#"><img src="https://www.gigworks.me/wp-content/uploads/2019/12/single-listing-05c-450x300.jpg" class="listing-thumb-img img-responsive" alt=""></a>
							</td>
							<td>
								<a href="#">
									<strong>My Reserved Listing</strong>
								</a>
								<address>Lucknow, Uttar Pradesh, India</address>
							</td>
							<td>Coffee Shop</td>
							<td><strong>€10/day</strong></td>
							<td><span class="label label-warning">Waiting for approval</span></td>
							<td>
								<a href="#" class="button gray tooltip" title="Edit"><i class="sl sl-icon-note"></i> </a>
								<a href="#" class="button gray tooltip" title="Delete"><i class="sl sl-icon-close"></i> </a>
								<a href="#" class="button gray tooltip" title="View"><i class="sl sl-icon-arrow-right-circle"></i> </a>
							</td>
						</tr>
						<tr>
							<td>45</td>
							<td>
								<a href="#"><img src="https://www.gigworks.me/wp-content/uploads/2019/12/single-listing-05c-450x300.jpg" class="listing-thumb-img img-responsive" alt=""></a>
							</td>
							<td>
								<a href="#">
									<strong>My Reserved Listing</strong>
								</a>
								<address>Lucknow, Uttar Pradesh, India</address>
							</td>
							<td>Coffee Shop</td>
							<td><strong>€10/day</strong></td>
							<td><span class="label label-default">Draft</span></td>
							<td>
								<a href="#" class="button gray tooltip" title="Edit"><i class="sl sl-icon-note"></i> </a>
								<a href="#" class="button gray tooltip" title="Delete"><i class="sl sl-icon-close"></i> </a>
								<a href="#" class="button gray tooltip" title="View"><i class="sl sl-icon-arrow-right-circle"></i> </a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
</div>		
<script>
</script>	
@endsection	
