@extends('layout.base')

@section('body')
<div ng-controller="userController">
    <!-- Content START -->
    		<div id="content">

    <div class="navbar hidden-print navbar-default box main" role="navigation">
    	<div class=" pull-left">
    	  	<a class="glyphicon glyphicon-home" style="top: 18px;font-size: 1.5em;color: #ccc;margin-left: 30px;" href="home.html?lang=en"></a>
    	</div>
    	<ul class="notifications pull-left hidden-xs">
    		<li class="dropdown notif">
    			<a href="" class="dropdown-toggle"  data-toggle="dropdown"><i class="notif-block icon-envelope-1"></i><span class="fa fa-star"></span></a>
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

    	<div class="input-group hidden-xs pull-left">
    	  	<span class="input-group-addon"><i class="icon-search"></i></span>
    	  	<input type="text" class="form-control" placeholder="Search a friend"/>
    	</div>


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
    				<li><a href="user.html?lang=en">Profile</a></li>
    				<li><a href="login.html?lang=en">Logout</a></li>
    		    </ul>
    		</div>
    	</div>
    </div>



    			<!-- <div class="layout-app">  -->
    			<div class="innerAll">
    	<div class="row" style="margin-left: 17px;margin-right: 15px;">
    		<div class="col-lg-9 col-md-8">

    			<div class="timeline-cover">
    	<div class="widget border-bottom">

    		<div class="timeline-cover">
    			<div class="cover image">
    				<div class="top">
    					<img src="assets/img/images/photodune-2755655-party-time-s.jpg" class="img-responsive" />
    				</div>

    				<ul class="list-unstyled">
    					<li class="active"><a href="user.html?lang=en"><i class="fa fa-fw fa-clock-o"></i> <span>Timeline</span></a></li>
    					<li><a href="about.html?lang=en"><i class="fa fa-fw fa-user"></i> <span>About</span></a></li>
    				</ul>
    			</div>
    				<div class="widget cover image">
    			<div class="widget-body padding-none margin-none">
    					<div class="photo">
    						<img src="assets/img/images/people/100/22.jpg" class="img-circle"/>
    					</div>
    					<div class="innerAll border-right pull-left">
    						<h3 class="margin-none">Adrian Demian</h3>
    						<span>Works at MOSAICPRO</span>
    					</div>
    					<div class="innerAll pull-left">
    						<li class="ProfileNav-item ProfileNav-item--following">
    							<a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav u-textUserColor" data-nav="tweets" href="following.html?leng=en" data-original-title="">
    							<span class="ProfileNav-label">Following</span>
    							<span class="ProfileNav-value" data-is-compact="false">41</span>
    				          	</a>
          					</li>
          					<li class="ProfileNav-item ProfileNav-item--followers">
    					        <a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav u-textUserColor" data-nav="followers" href="follower.html?leng=en" data-original-title="2 Followers">
    					          <span class="ProfileNav-label">Followers</span>
    					          <span class="ProfileNav-value" data-is-compact="false">2</span>
    					        </a>
    				      	</li>

    					</div>
    				</div>
    				<div class="clearfix"></div>
    			</div>
    		</div>


    	</div>


    </div>


    			<div class="widget widget-gallery" data-toggle="collapse-widget">
    				<div class="widget-head"><h4 class="heading">Photo Gallery</h4></div>
    				<div class="widget-body">

    					<!-- Tabs -->
    					<div class="tabsbar">
    						<ul>
    							<li class="glyphicons camera active"><a href=""><i></i> View all photos <strong>(43)</strong></a></li>
    							<li class="glyphicons folder_open"><a href=""><i></i> Albums <strong>(3)</strong></a></li>
    							<li class="glyphicons circle_plus tab-stacked"><a href=""><i></i> <span>Add Photos</span></a></li>
    							<li class="glyphicons folder_plus tab-stacked"><a href=""><i></i> <span>Create Album</span></a></li>
    						</ul>
    					</div>
    					<!-- // Tabs END -->

    					<!-- Gallery -->
    					<div class="gallery">
    						<ul class="row">

    														<!-- Gallery item -->
    							<li class="col-md-2">
    								<a class="thumb no-ajaxify" href="assets/img/images/gallery-2/1.jpg" data-gallery="gallery-3">
    									<img src="assets/img/images/gallery-2/1.jpg" alt="photo" class="img-responsive" />
    								</a>
    							</li>
    							<!-- // Gallery item END -->
    														<!-- Gallery item -->
    							<li class="col-md-2">
    								<a class="thumb no-ajaxify" href="assets/img/images/gallery-2/2.jpg" data-gallery="gallery-3">
    									<img src="assets/img/images/gallery-2/2.jpg" alt="photo" class="img-responsive" />
    								</a>
    							</li>
    							<!-- // Gallery item END -->
    														<!-- Gallery item -->
    							<li class="col-md-2">
    								<a class="thumb no-ajaxify" href="assets/img/images/gallery-2/3.jpg" data-gallery="gallery-3">
    									<img src="assets/img/images/gallery-2/3.jpg" alt="photo" class="img-responsive" />
    								</a>
    							</li>
    							<!-- // Gallery item END -->
    														<!-- Gallery item -->
    							<li class="col-md-2">
    								<a class="thumb no-ajaxify" href="assets/img/images/gallery-2/4.jpg" data-gallery="gallery-3">
    									<img src="assets/img/images/gallery-2/4.jpg" alt="photo" class="img-responsive" />
    								</a>
    							</li>
    							<!-- // Gallery item END -->
    														<!-- Gallery item -->
    							<li class="col-md-2">
    								<a class="thumb no-ajaxify" href="assets/img/images/gallery-2/5.jpg" data-gallery="gallery-3">
    									<img src="assets/img/images/gallery-2/5.jpg" alt="photo" class="img-responsive" />
    								</a>
    							</li>
    							<!-- // Gallery item END -->
    														<!-- Gallery item -->
    							<li class="col-md-2">
    								<a class="thumb no-ajaxify" href="assets/img/images/gallery-2/6.jpg" data-gallery="gallery-3">
    									<img src="assets/img/images/gallery-2/6.jpg" alt="photo" class="img-responsive" />
    								</a>
    							</li>
    							<!-- // Gallery item END -->
    														<!-- Gallery item -->
    							<li class="col-md-2">
    								<a class="thumb no-ajaxify" href="assets/img/images/gallery-2/7.jpg" data-gallery="gallery-3">
    									<img src="assets/img/images/gallery-2/7.jpg" alt="photo" class="img-responsive" />
    								</a>
    							</li>
    							<!-- // Gallery item END -->
    														<!-- Gallery item -->
    							<li class="col-md-2">
    								<a class="thumb no-ajaxify" href="assets/img/images/gallery-2/8.jpg" data-gallery="gallery-3">
    									<img src="assets/img/images/gallery-2/8.jpg" alt="photo" class="img-responsive" />
    								</a>
    							</li>
    							<!-- // Gallery item END -->
    														<!-- Gallery item -->
    							<li class="col-md-2">
    								<a class="thumb no-ajaxify" href="assets/img/images/gallery-2/9.jpg" data-gallery="gallery-3">
    									<img src="assets/img/images/gallery-2/9.jpg" alt="photo" class="img-responsive" />
    								</a>
    							</li>
    							<!-- // Gallery item END -->
    														<!-- Gallery item -->
    							<li class="col-md-2">
    								<a class="thumb no-ajaxify" href="assets/img/images/gallery-2/10.jpg" data-gallery="gallery-3">
    									<img src="assets/img/images/gallery-2/10.jpg" alt="photo" class="img-responsive" />
    								</a>
    							</li>
    							<!-- // Gallery item END -->
    														<!-- Gallery item -->
    							<li class="col-md-2">
    								<a class="thumb no-ajaxify" href="assets/img/images/gallery-2/11.jpg" data-gallery="gallery-3">
    									<img src="assets/img/images/gallery-2/11.jpg" alt="photo" class="img-responsive" />
    								</a>
    							</li>
    							<!-- // Gallery item END -->
    														<!-- Gallery item -->
    							<li class="col-md-2">
    								<a class="thumb no-ajaxify" href="assets/img/images/gallery-2/12.jpg" data-gallery="gallery-3">
    									<img src="assets/img/images/gallery-2/12.jpg" alt="photo" class="img-responsive" />
    								</a>
    							</li>
    							<!-- // Gallery item END -->

    						</ul>
    					</div>
    					<!-- // Gallery END -->

    					<!-- Pagination -->
    					<div class="btn-group">
    						<a class="btn disabled btn-small btn-default glyphicons standard chevron-left"><i></i></a>
    						<a class="btn btn-small btn-default glyphicons standard chevron-right"><i></i></a>
    					</div>
    					<span class="innerLR">1-6 out of 43</span>
    					<!-- // Pagination END -->

    				</div>
    			</div>

    		</div>
    		<div class="col-md-4 col-lg-3">

    <div class="widget">
    	<h5 class="innerAll margin-none bg-primary">PEOPLE YOU MAY KNOW</h5>
    	<div class="widget-body padding-none">
    		<ul class="list-group list-group-1 borders-none margin-none">
    			<li class="list-group-item">
    				<div class="media border-bottom innerAll margin-none">
    					<img src="assets/img/images/people/35/22.jpg" class="pull-left media-object" style="height: 44px;"/>
    					<div class="media-body">
    					<h5 class="margin-none">
    						<a href="" class="text-inverse" style="margin-top: -10px;margin-left: -16px;">Social Admin Released</a>
    					</h5>
    					<div class="btn-group-vertical btn-group-sm" style="margin-top: 13px;">
    						<a href="" class="btn btn-primary" style="width: 71px;height: 28px;margin-top: -24px;">
    							<i  class="fa fa-user" style="font-size: 13px;width: 11px;"></i>
    							 Follow
    						</a>
    					</div>
    					</div>
    				</div>
    			</li>
    			<li class="list-group-item">
    				<div class="media border-bottom innerAll margin-none">
    					<img src="assets/img/images/people/35/22.jpg" class="pull-left media-object" style="height: 44px;"/>
    					<div class="media-body">
    					<h5 class="margin-none">
    						<a href="" class="text-inverse" style="margin-top: -10px;margin-left: -16px;">Social Admin Released</a>
    					</h5>
    					<div class="btn-group-vertical btn-group-sm" style="margin-top: 13px;">
    						<a href="" class="btn btn-primary" style="width: 71px;height: 28px;margin-top: -24px;">
    							<i  class="fa fa-user" style="font-size: 13px;width: 11px;"></i>
    							 Follow
    						</a>
    					</div>
    					</div>
    				</div>
    			</li>
    			<li class="list-group-item">
    				<div class="media border-bottom innerAll margin-none">
    					<img src="assets/img/images/people/35/22.jpg" class="pull-left media-object" style="height: 44px;"/>
    					<div class="media-body">
    					<h5 class="margin-none">
    						<a href="" class="text-inverse" style="margin-top: -10px;margin-left: -16px;">Social Admin Released</a>
    					</h5>
    					<div class="btn-group-vertical btn-group-sm" style="margin-top: 13px;">
    						<a href="" class="btn btn-primary" style="width: 71px;height: 28px;margin-top: -24px;">
    							<i  class="fa fa-user" style="font-size: 13px;width: 11px;"></i>
    							 Follow
    						</a>
    					</div>
    					</div>
    				</div>
    			</li>
    		</ul>
    	</div>
    </div>



    			<div class="widget">
    	<h5 class="innerAll margin-none bg-primary">Recent News</h5>
    	<div class="widget-body padding-none">
    				<div class="media border-bottom innerAll margin-none">
    			<img src="assets/img/images/people/35/22.jpg" class="pull-left media-object"/>
    			<div class="media-body">
    				<a href="" class="pull-right text-muted innerT half">
    					<i class="fa fa-comments"></i> 4
    				</a>
    				<h5 class="margin-none"><a href="" class="text-inverse">Social Admin Released</a></h5>
    				<small>on February 2nd, 2014 </small>
    			</div>
    		</div>
    				<div class="media border-bottom innerAll margin-none">
    			<img src="assets/img/images/people/35/22.jpg" class="pull-left media-object"/>
    			<div class="media-body">
    				<a href="" class="pull-right text-muted innerT half">
    					<i class="fa fa-comments"></i> 4
    				</a>
    				<h5 class="margin-none"><a href="" class="text-inverse">Timeline Cover Page</a></h5>
    				<small>on February 2nd, 2014 </small>
    			</div>
    		</div>
    				<div class="media border-bottom innerAll margin-none">
    			<img src="assets/img/images/people/35/22.jpg" class="pull-left media-object"/>
    			<div class="media-body">
    				<a href="" class="pull-right text-muted innerT half">
    					<i class="fa fa-comments"></i> 4
    				</a>
    				<h5 class="margin-none"><a href="" class="text-inverse">1000+ Sales</a></h5>
    				<small>on February 2nd, 2014 </small>
    			</div>
    		</div>
    				<div class="media border-bottom innerAll margin-none">
    			<img src="assets/img/images/people/35/22.jpg" class="pull-left media-object"/>
    			<div class="media-body">
    				<a href="" class="pull-right text-muted innerT half">
    					<i class="fa fa-comments"></i> 4
    				</a>
    				<h5 class="margin-none"><a href="" class="text-inverse">On-Page Optimization</a></h5>
    				<small>on February 2nd, 2014 </small>
    			</div>
    		</div>
    				<div class="media border-bottom innerAll margin-none">
    			<img src="assets/img/images/people/35/22.jpg" class="pull-left media-object"/>
    			<div class="media-body">
    				<a href="" class="pull-right text-muted innerT half">
    					<i class="fa fa-comments"></i> 4
    				</a>
    				<h5 class="margin-none"><a href="" class="text-inverse">14th Admin Template</a></h5>
    				<small>on February 2nd, 2014 </small>
    			</div>
    		</div>
    			</div>
    </div>



    		</div>
    	</div>
    </div>





    <!-- Blueimp Gallery -->
    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev no-ajaxify">‹</a>
        <a class="next no-ajaxify">›</a>
        <a class="close no-ajaxify">×</a>
        <a class="play-pause no-ajaxify"></a>
        <ol class="indicator"></ol>
    </div>
    <!-- // Blueimp Gallery END -->


    		</div>
    		<!-- // Content END -->

    		<div class="clearfix"></div>
    		<!-- // Sidebar menu & content wrapper END -->

    				<!-- Footer -->
    		<div id="footer" class="hidden-print">

    			<!--  Copyright Line -->
    			<div class="copy">&copy; 2012 - 2014 - <a href="http://www.mosaicpro.biz">MosaicPro</a> - All Rights Reserved. <a href="http://themeforest.net/?ref=mosaicpro" target="_blank">Purchase Social Admin Template</a> - Current version: v2.0.0-rc8 / <a target="_blank" href="../assets/../../CHANGELOG.txt?v=v2.0.0-rc8">changelog</a></div>
    			<!--  End Copyright Line -->

    		</div>
    		<!-- // Footer END -->


    	</div>
    	<!-- // Main Container Fluid END -->
</div>
@stop