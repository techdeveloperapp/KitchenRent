@if(Session::has('success') && Session::get('success') != null)
<div class="alert alert-success alert-dismissible fade show   m-alert m-alert--air" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
	{{ Session::get('success') }}
</div>
@endif
@if(Session::has('error') && Session::get('error') != null)
<div class="alert alert-danger alert-dismissible fade show   m-alert m-alert--air" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
	{{ Session::get('error') }}
</div>
@endif