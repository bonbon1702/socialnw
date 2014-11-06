<header>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Social Network</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
			    <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Home</a></li>
			    @if ($user)
                     <li><a href="#"><p>Hello, {{ $user->first_name }}</p></a></li>
                @else
			        <li><a href="{{ route('fbSignIn') }}">Sign in with Facebook</a></li>
			    @endif
			</ul>
		</div>
	</nav>
</header>