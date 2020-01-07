@extends('layouts.frontadmin.app')
@section('title', __('messages.messages') )
@section('content')

<!-- Titlebar -->
<div id="titlebar">
	<div class="row">
		<div class="col-md-12">
			<h2>{{__('messages.messages')}}</h2>
		</div>
	</div>
</div>
<div class="row">
	<!-- Listings -->
	<div class="col-lg-12 col-md-12">

		<div class="messages-container margin-top-0">
			<div class="messages-headline">
				<h4>{{__('messages.inbox')}}</h4>
			</div>
			
			<div class="messages-inbox">

				<ul>
					<li class="unread">
						<a href="{{url('user/message/kathy')}}">
							<div class="message-avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>

							<div class="message-by">
								<div class="message-by-headline">
									<h5>Kathy Brown <i>Unread</i></h5>
									<span>2 hours ago</span>
								</div>
								<p>Hello, I want to talk about your great listing! Morbi velit eros, sagittis in facilisis non, rhoncus posuere ultricies...</p>
							</div>
						</a>
					</li>

					<li class="unread">
						<a href="{{url('user/message/john')}}">
							<div class="message-avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>

							<div class="message-by">
								<div class="message-by-headline">
									<h5>John Doe <i>Unread</i></h5>
									<span>4 hours ago</span>
								</div>
								<p>Hello, I want to talk about your great listing! Morbi velit eros, sagittis in facilisis non, rhoncus posuere ultricies...</p>
							</div>
						</a>
					</li>
					
					<li>
						<a href="{{url('user/message/smith')}}">
							<div class="message-avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>

							<div class="message-by">
								<div class="message-by-headline">
									<h5>Thomas Smith</h5>
									<span>Yesterday</span>
								</div>
								<p>Hello, I want to talk about your great listing! Morbi velit eros, sagittis in facilisis non, rhoncus posuere ultricies...</p>
							</div>
						</a>
					</li>

					<li>
						<a href="{{url('user/message/mike')}}">
							<div class="message-avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>

							<div class="message-by">
								<div class="message-by-headline">
									<h5>Mike Behringer</h5>
									<span>28.06.2017</span>
								</div>
								<p>Hello, I want to talk about your great listing! Morbi velit eros, sagittis in facilisis non, rhoncus posuere ultricies...</p>
							</div>
						</a>
					</li>

					<li>
						<a href="{{url('user/message/robert')}}">
							<div class="message-avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>

							<div class="message-by">
								<div class="message-by-headline">
									<h5>Robert Baker</h5>
									<span>22.06.2017</span>
								</div>
								<p>Hello, I want to talk about your great listing! Morbi velit eros, sagittis in facilisis non, rhoncus posuere ultricies...</p>
							</div>
						</a>
					</li>
				</ul>
				
			</div>
		</div>

		<!-- Pagination -->
		<div class="clearfix"></div>
		<div class="pagination-container margin-top-30 margin-bottom-0">
			<nav class="pagination">
				<ul>
					<li><a href="#" class="current-page">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
				</ul>
			</nav>
		</div>
		<!-- Pagination / End -->

	</div>

</div>

@endsection