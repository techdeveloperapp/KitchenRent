@extends('layouts.admin.app')
@section('title', __('messages.messages') )
@section('content')
<style>
.m-widget3__item a {
    text-decoration: none !important;
}
.m-widget3__item:hover {
    background: #dbd5d536;
}
</style>
<div class="m-content">
 <div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						{{ __('messages.messages') }}
					</h3>
				</div>
			</div>
	</div>		
<div class="m-portlet__body">
	<div class="m-widget3">
		<div class="m-widget3__item">
		  <a href="{{url('user/message/robert')}}">
			<div class="m-widget3__header">
				<div class="m-widget3__user-img">
					<img class="m-widget3__img" src="{{url('assets/app/media/img/users/user1.jpg')}}" alt="">
				</div>
				<div class="m-widget3__info">
					<span class="m-widget3__username">
						Melania Trump
					</span>
					<br>
					<span class="m-widget3__time">
						2 hours ago
					</span>
				</div>
				<span class="m-widget3__status m--font-info">
					Unread
				</span>
			</div>
			<div class="m-widget3__body">
				<p class="m-widget3__text">
					Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
				</p>
			</div>
		  </a>
		</div>
		<div class="m-widget3__item">
		  <a href="{{url('user/message/robert')}}">
			<div class="m-widget3__header">
				<div class="m-widget3__user-img">
					<img class="m-widget3__img" src="{{url('assets/app/media/img/users/user4.jpg')}}" alt="">
				</div>
				<div class="m-widget3__info">
					<span class="m-widget3__username">
						Lebron King James
					</span>
					<br>
					<span class="m-widget3__time">
						Yesterday
					</span>
				</div>
				<span class="m-widget3__status m--font-brand">
					Unread
				</span>
			</div>
			<div class="m-widget3__body">
				<p class="m-widget3__text">
					Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.
				</p>
			</div>
			</a>
		</div>
		<div class="m-widget3__item">
		  <a href="{{url('user/message/robert')}}">
			<div class="m-widget3__header">
				<div class="m-widget3__user-img">
					<img class="m-widget3__img" src="{{url('assets/app/media/img/users/user5.jpg')}}" alt="">
				</div>
				<div class="m-widget3__info">
					<span class="m-widget3__username">
						Deb Gibson
					</span>
					<br>
					<span class="m-widget3__time">
						22.06.2017
					</span>
				</div>
				<span class="m-widget3__status m--font-success">
					Unread
				</span>
			</div>
			<div class="m-widget3__body">
				<p class="m-widget3__text">
					Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
				</p>
			</div>
			</a>
		</div>
	</div>

</div>


	</div>
</div>
@endsection