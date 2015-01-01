<header>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Social Network</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
			    <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Home</a></li>
			    @if ($user)
			        <li><img src="{{ $user->picture_profile }}"></li>
                     <li><a href="#"><p>{{ $user->first_name }}</p></a></li>
                @else
			        <li><a href="{{  URL::to('connect/facebook') }}"><p>Sign in with Facebook</p></a></li>
			        <li><a href="{{  URL::to('connect/google') }}"><p>Sign in with Google</p></a></li>
			        <li><a href="{{  URL::to('connect/twitter') }}"><p>Sign in with Twitter</p></a></li>
			    @endif
			</ul>
		</div>
	</nav>
</header>