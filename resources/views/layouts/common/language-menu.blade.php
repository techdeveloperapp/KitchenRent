<div class="user-menu">
	<div class="user-name">@if(app()->getLocale() == 'en') English @else Dutch @endif</div>
	<ul>
		<li><a href="{{url('locale/en')}}"><i class="sl sl-icon-flag"></i> English</a></li>
		<li><a href="{{url('locale/nl')}}"><i class="sl sl-icon-flag"></i> Dutch</a></li>
	</ul>
</div>