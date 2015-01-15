<header>
	{{--<nav class="navbar navbar-default">--}}
		{{--<div class="container">--}}
			{{--<div class="navbar-header">--}}
				{{--<a class="navbar-brand" href="#">Social Network</a>--}}
			{{--</div>--}}
			{{--<ul class="nav navbar-nav navbar-right">--}}
				{{--<li>--}}
					{{--{{ Form::open(array('url' => '/uploadImage', 'files' => true)) }}--}}
						{{--<input type="file" name="image" onchange="this.form.submit()" style="padding-top: 12px"/>--}}
					{{--{{ Form::close() }}--}}
				{{--</li>--}}
			    {{--<li><a href="#"><i class="glyphicon glyphicon-lock"></i> Home</a></li>--}}
			    {{--@if ($user)--}}
			        {{--<li><img src="{{ $user->picture_profile }}"></li>--}}
                     {{--<li><a href="#"><p>{{ $user->first_name }}</p></a></li>--}}
                {{--@else--}}
			        {{--<li><a href="{{  URL::to('connect/facebook') }}"><p>Sign in with Facebook</p></a></li>--}}
			        {{--<li><a href="{{  URL::to('connect/google') }}"><p>Sign in with Google</p></a></li>--}}
			        {{--<li><a href="{{  URL::to('connect/twitter') }}"><p>Sign in with Twitter</p></a></li>--}}
			    {{--@endif--}}
			{{--</ul>--}}
		{{--</div>--}}
	{{--</nav>--}}

	    <div class="navbar hidden-print navbar-default box main" role="navigation">
        	<div class=" pull-left">
                <a class="btn bt-sm glyphicon glyphicon-home" style="top: 9px;font-size: 1.5em;color: #ccc;" href="home.html?lang=en">
                    <i class"glyphicon glyphicon-home"></i>
                </a>
        	</div>
        	<ul class="notifications pull-left hidden-xs">
        		<li class="dropdown notif">
        			<a href="" class="dropdown-toggle dropdown-hover"  data-toggle="dropdown"><i class="notif-block icon-envelope-1"></i><span class="fa fa-star"></span></a>
        			<ul class="dropdown-menu chat media-list">
        				<li class="media">
        			        <a class="pull-left" href="#"><img class="media-object thumb" src="assets/img/images/people/100/15.jpg" alt="50x50" width="50"/></a>
        					<div class="media-body">
        			        	<span class="label label-default pull-right">5 min</span>
        			            <h5 class="media-heading">Adrian D.</h5>
        			            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        			        </div>
        				</li>
        		      	<li class="media">
        		          	<a class="pull-left" href="#"><img class="media-object thumb" src="assets/img/images/people/100/16.jpg" alt="50x50" width="50"/></a>
        					<div class="media-body">
        			          	<span class="label label-default pull-right">2 days</span>
        			            <h5 class="media-heading">Jane B.</h5>
        			            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        			        </div>
        		        </li>
        			    <li class="media">
        		          	<a class="pull-left" href="#"><img class="media-object thumb" src="assets/img/images/people/100/17.jpg" alt="50x50" width="50"/></a>
        			      	<div class="media-body">
        						<span class="label label-default pull-right">3 days</span>
        			            <h5 class="media-heading">Andrew M.</h5>
        			            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        			        </div>
        		        </li>
        	      	</ul>
        		</li>
        	</ul>

        	<div class="user-action pull-right menu-right-hidden-xs menu-left-hidden-xs border-left">
        		<div class="dropdown username pull-left">
        			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
        				<span class="media margin-none">
        					<span class="pull-left"><img src="assets/img/images/people/35/16.jpg" alt="user" class="img-circle"></span>
        					<span class="media-body">Bill <span class="caret"></span></span>
        				</span>
        			</a>
        			<ul class="dropdown-menu">
        				<li><a href="about.html?lang=en" >About</a></li>
        				<li><a href="user.html">Profile</a></li>
        				<li><a href="login.html?lang=en">Logout</a></li>
						<li><a href="{{  URL::to('connect/facebook') }}"><p>Sign in with Facebook</p></a></li>
						<li><a href="{{  URL::to('connect/google') }}"><p>Sign in with Google</p></a></li>
						<li><a href="{{  URL::to('connect/twitter') }}"><p>Sign in with Twitter</p></a></li>
        		    </ul>
        		</div>
        	</div>
        	<div class="input-group hidden-xs pull-left">
        	  	<span class="input-group-addon"><i class="icon-search"></i></span>
        	  	<input type="text" class="form-control" placeholder="Search a friend"/>
        	</div>
			{{ Form::open(array('url' => '/editor', 'files' => true)) }}
			<input type="file" name="image" onchange="this.form.submit()" style="padding-top: 12px"/>
			{{ Form::close() }}
        </div>
</header>