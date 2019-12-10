@if(Session::has('success') && Session::get('success') != null)
<div class="container margin-top-30">
	<div class="row">
		<div class="col-md-12">
			<div class="notification success closeable margin-bottom-30">
				<p><strong>{{ Session::get('success') }}</strong></p>
				<a class="close" href="#"></a>
			</div>
		</div>
	</div>
</div>
@endif
@if(Session::has('error') && Session::get('error') != null)
<div class="container margin-top-30">
	<div class="row">
		<div class="col-md-12">
			<div class="notification error closeable margin-bottom-30">
				<p><strong>{{ Session::get('error') }}</strong></p>
				<a class="close" href="#"></a>
			</div>
		</div>
	</div>
</div>
@endif
@if ($errors->any())
	<div class="container margin-top-30">
		<div class="row">
			<div class="col-md-12">
				<div class="notification error closeable margin-bottom-30">
					 <ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
					<a class="close" href="#"></a>
				</div>
			</div>
		</div>
	</div>
@endif
