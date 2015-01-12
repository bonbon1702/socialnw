@extends('layout.base')

@section('body')
<div ng-controller="homeController">
	{{--<input id="pac-input" class="controls" type="text" placeholder="Search Box" />--}}
    {{--<div style="width: 200px;height: 100px">--}}
        {{--<magicsearch ng-model="yourchoice" data="movies" on-type="updateMovies"></magicsearch>--}}
    {{--</div>--}}
    {{--<div style="width: 700px">--}}
            {{--<magiccard src="image" method="hover" data="points"></magiccard>--}}
    {{--</div>--}}
    {{--<div ng-click="clickToOpen()" eat-click>--}}
        {{--<a href="google">--}}
            {{--<img src="http://dwaynepreed.files.wordpress.com/2014/10/beautiful-girl-3.jpg" style="width: 600px">--}}
        {{--</a>--}}
    {{--</div>--}}
    <!-- Content START -->
    		<div id="content">
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
    		    </ul>
    		</div>
    	</div>
    	<div class="input-group hidden-xs pull-left">
    	  	<span class="input-group-addon"><i class="icon-search"></i></span>
    	  	<input type="text" class="form-control" placeholder="Search a friend"/>
    	</div>
    </div>

    	<div class="innerAll">
    		<div class="row" style="margin-left: 17px;margin-right: 23px;">
    			<div class="timeline-cover">
                    <div id="map" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 20%; z-index: 0; transform: translateZ(0px); background-color: rgb(229, 227, 223);"></div>
    				<div class="widget" style="margin: 470px 0px 40px;background: none;border: none;">
    					<div class="widget-body padding-none margin-none">
    						<div class="container-1">
            <h1 id="slogan"><b>
                 Khám phá xu hướng thời trang xung quanh ta</b>
            </h1>
            <section class="like-box">
                <a href="//www.facebook.com/Lozi.vn" go-direct="true" class="fanpage-logo"></a>
                <div class="fb-like fb_iframe_widget" data-href="https://www.facebook.com/Lozi.vn" data-layout="standard" data-action="like" data-show-faces="true" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=600859170003466&amp;href=https%3A%2F%2Fwww.facebook.com%2FLozi.vn&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true"><span style="vertical-align: bottom; width: 450px; height: 57px;"><iframe name="f18e1a7ff" width="1000px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like Facebook Social Plugin" src="http://www.facebook.com/v2.0/plugins/like.php?action=like&amp;app_id=600859170003466&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2F7r8gQb8MIqE.js%3Fversion%3D41%23cb%3Df10ee99eb8%26domain%3Dlozi.vn%26origin%3Dhttp%253A%252F%252Flozi.vn%252Ff2cd1837a%26relation%3Dparent.parent&amp;href=https%3A%2F%2Fwww.facebook.com%2FLozi.vn&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true" style="border: none; visibility: visible; width: 450px; height: 57px;" class=""></iframe></span></div>
            </section>
        </div>
    					</div>
    				</div>
    		</div>

    		<div class="col-lg-9 col-md-8">
    			<!-- <div data-toggle="gridalicious" data-gridalicious-width="380" data-gridalicious-gutter="0"> -->
    			<div class="blc-row" style="width: 282px;">
    						<!-- Main Sidebar Menu -->
    		<div id="menu" class="hidden-print hidden-xs sidebar-default sidebar-brand-primary" style="position: absolute;height: 380px;background: #F9F3F3;">
    			<div id="sidebar-social-wrapper">
    					<ul class="menu list-unstyled" style="background: #FDFAFA;">
    							<li class="hasSubmenu active">

    								<a href="#menu-4c92ef26818fe5b83682c306e8efc065">


    									<i class="icon-worldwide"></i>

    									<span>Đang Diễn Ra</span>


    								</a>

    							</li>
    							<li class="hasSubmenu">

    								<a href="#menu-ed789274112713f5e5f0b5773b88ac06">


    									<i class="icon-star"></i>

    									<span>Quan Tâm Của Bạn</span>


    								</a>


    							</li>
    							<li class="hasSubmenu">

    								<a href="#menu-45924cbfa0258264ff1cf22a3e571833">


    									<i class="icon-fire"></i>

    									<span>Xu Hướng</span>


    								</a>


    							</li>
    							<li class="hasSubmenu">

    								<a href="#menu-c46c57fea3f9344d1e2c167218808e69">


    									<i class="icon-location-1"></i>

    										<span>Xung Quanh Đây</span>


    								</a>


    							</li>
    							<li class="hasSubmenu">

    								<a href="#menu-cb0773c3faf550acd89398d93eb66b40">


    									<i class="icon-circle-chevron-down"></i>

    									<span>Quần Áo</span>


    								</a>


    							</li>
    							<li class="hasSubmenu">

    								<a href="messages.html?lang=en">


    									<i class="icon-circle-chevron-down"></i>

    									<span>Giày Dép</span>


    								</a>

    							</li>
    					</ul>
    				</div>
    			</div>
    		</div>

    				<div class="blc-row">
    					<div class="widget border-none bg-none widget-pinterest active">
    						<div class="widget-body bg-none padding-none">
    							<a href="https://scontent-a-sjc.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10710982_761458170594432_5559789937541518617_n.jpg?oh=12aae3acfa42afe5bfd5e5f7d1c49b83&oe=55023312" data-toggle="prettyPhoto" class="thumb">
    								<img src="https://scontent-a-sea.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10710982_761458170594432_5559789937541518617_n.jpg?oh=12aae3acfa42afe5bfd5e5f7d1c49b83&oe=55023312" alt="photo" />
    							</a>
    							<div class="description  meta">
    								<div class="hover-blue">
    									<div class="title" id="yui_3_11_0_3_1419092456557_1068">
    										<a data-track="photo-click" href="shop.html?lang=en" title="London 7 - Mirror (Explored at #6)" class="title">London 7 - Mirror (Explored at #6)</a>
    									</div>
    									<div class="attribution-block" style="height: 7px;margin-top: 6px;">
    										<span class="attribution"><span>bởi </span>
    										<a data-track="owner" href="/photos/94437781@N05" title="Wesley Nagelmaker" class="owner">Wesley Nagelmaker</a></span>
    									</div>
    								</div>
    								<span class="inline-icons" style="font-size: 11px;">
    									<img width="12" height="12" alt="[★]" src="https://s.yimg.com/pw/images/spaceball.gif" style="background: rgba(150, 25, 25, 0) url(https://s.yimg.com/pw/images/sprites/icons/fav.png) no-repeat scroll center;background-size: contain;margin-right: -3px;vertical-align: top;margin-top: -1;width: 15px;height: 15px;">
    									<a data-track="favorite" href="#" class="rapidnofollow fave-star-inline canfave" onMouseOver="this.style.color='white'"
    									onMouseOut="this.style.color='white'" title="Thêm ảnh này vào ảnh yêu thích của bạn?">
    										<span class="fave-count count" style="margin-right: 3px;">99+</span>
    									</a>
    									<i class="fa fa-smile-o" style="color: white;"></i>
    									<a title="Lời bình" href="#" class="rapidnofollow comments-icon comments-inline-btn" onMouseOver="this.style.color='white'"
    									onMouseOut="this.style.color='white'">
    										<span class="comment-count count">99+</span>
    									</a>
    								</span>
    							</div>
    						</div>
    					</div>
    							<div class="widget border-none bg-none widget-pinterest">
    						<div class="widget-body bg-none padding-none">
    							<a href="#popup-region" data-toggle="modal" class="thumb">
    								<img src="assets/img/images/KXnECf3C7iWSKpwDrCMQPOd4b2DWp5da-b-320.jpg" alt="photo" />
    							</a>
    							<div class="description">
    								<!-- <h5 class="text-uppercase">One More Beer!</h5>
    								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
    								<button class="btn btn-stroke btn-circle btn-danger"><i class="fa fa-trash-o"></i></button>			</div>
    						</div>
    					</div>
    							<div class="widget border-none bg-none widget-pinterest">
    						<div class="widget-body bg-none padding-none">
    							<a href="http://vimeo.com/54932277" data-toggle="prettyPhoto" class="thumb">
    								<img src="http://demo.mosaicpro.biz/assets/media/video/3.jpg" alt="photo" />
    							</a>
    							<div class="description  ">
    								<h5 class="text-uppercase">Spacebound: Models &amp; Props</h5>
    								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>			</div>
    						</div>
    					</div>
    							<div class="widget border-none bg-none widget-pinterest">
    						<div class="widget-body bg-none padding-none">
    							<a href="http://vimeo.com/4749536" data-toggle="prettyPhoto" class="thumb">
    								<img src="http://demo.mosaicpro.biz/assets/media/video/4.jpg" alt="photo" />
    							</a>
    							<div class="description  ">
    								<h5 class="text-uppercase">Alma</h5>
    								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>			</div>
    						</div>
    					</div>
    							<div class="widget border-none bg-none widget-pinterest active">
    						<div class="widget-body bg-none padding-none">
    							<a href="http://vimeo.com/33670490" data-toggle="prettyPhoto" class="thumb">
    								<img src="http://demo.mosaicpro.biz/assets/media/video/5.jpg" alt="photo" />
    							</a>
    							<div class="description  ">
    								<h5 class="text-uppercase">The Artists</h5>
    								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, consequuntur iure commodi omnis at pariatur quis hic mollitia impedit error.</p>			</div>
    						</div>
    					</div>
    							<div class="widget border-none bg-none widget-pinterest">
    						<div class="widget-body bg-none padding-none">
    							<a href="http://vimeo.com/8706167" data-toggle="prettyPhoto" class="thumb">
    								<img src="http://demo.mosaicpro.biz/assets/media/video/6.jpg" alt="photo" />
    							</a>
    							<div class="description  ">
    								<h5 class="text-uppercase">Les Dangereux</h5>
    								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, consequuntur iure commodi omnis at pariatur quis hic mollitia impedit error.</p>			</div>
    						</div>
    					</div>
    				</div>
    				<div class="blc-row">
    						<div class="widget border-none bg-none widget-pinterest">
    					<div class="widget-body bg-none padding-none">
    						<a href="http://vimeo.com/51478122" data-toggle="prettyPhoto" class="thumb">
    							<img src="http://demo.mosaicpro.biz/assets/media/video/7.jpg" alt="photo" />
    						</a>
    						<div class="description  meta">
    								<div class="hover-blue">
    									<div class="title" id="yui_3_11_0_3_1419092456557_1068">
    										<a data-track="photo-click" href="/photos/94437781@N05/15417955443/in/explore-2014-12-16" title="London 7 - Mirror (Explored at #6)" class="title">London 7 - Mirror (Explored at #6)</a>
    									</div>
    									<div class="attribution-block" style="height: 7px;margin-top: 6px;">
    										<span class="attribution"><span>bởi </span>
    										<a data-track="owner" href="/photos/94437781@N05" title="Wesley Nagelmaker" class="owner">Wesley Nagelmaker</a></span>
    									</div>
    								</div>
    								<span class="inline-icons" style="font-size: 11px;">
    									<img width="12" height="12" alt="[★]" src="https://s.yimg.com/pw/images/spaceball.gif" style="background: rgba(150, 25, 25, 0) url(https://s.yimg.com/pw/images/sprites/icons/fav.png) no-repeat scroll center;background-size: contain;margin-right: -3px;vertical-align: top;margin-top: -1;width: 15px;height: 15px;">
    									<a data-track="favorite" href="#" class="rapidnofollow fave-star-inline canfave" onMouseOver="this.style.color='white'"
    									onMouseOut="this.style.color='white'" title="Thêm ảnh này vào ảnh yêu thích của bạn?">
    										<span class="fave-count count" style="margin-right: 3px;">99+</span>
    									</a>
    									<i class="fa fa-smile-o" style="color: white;"></i>
    									<a title="Lời bình" href="#" class="rapidnofollow comments-icon comments-inline-btn" onMouseOver="this.style.color='white'"
    									onMouseOut="this.style.color='white'">
    										<span class="comment-count count">99+</span>
    									</a>
    								</span>
    							</div>
    					</div>
    				</div>
    						<div class="widget border-none bg-none widget-pinterest">
    					<div class="widget-body bg-none padding-none">
    						<a href="http://vimeo.com/29573040" data-toggle="prettyPhoto" class="thumb">
    							<img src="http://demo.mosaicpro.biz/assets/media/video/8.jpg" alt="photo" />
    						</a>
    						<div class="description  ">
    							<h5 class="text-uppercase">A Shadow of Blue</h5>
    							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>			</div>
    					</div>
    				</div>
    						<div class="widget border-none bg-none widget-pinterest">
    					<div class="widget-body bg-none padding-none">
    						<a href="http://vimeo.com/50540814" data-toggle="prettyPhoto" class="thumb">
    							<img src="http://demo.mosaicpro.biz/assets/media/video/9.jpg" alt="photo" />
    						</a>
    						<div class="description  ">
    							<h5 class="text-uppercase">50 Jahre Orion</h5>
    							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, consequuntur iure commodi omnis at pariatur quis hic mollitia impedit error.</p>			</div>
    					</div>
    				</div>
    						<div class="widget border-none bg-none widget-pinterest">
    					<div class="widget-body bg-none padding-none">
    						<a href="http://vimeo.com/14989162" data-toggle="prettyPhoto" class="thumb">
    							<img src="http://demo.mosaicpro.biz/assets/media/video/10.jpg" alt="photo" />
    						</a>
    						<div class="description  ">
    							<h5 class="text-uppercase">JOBS : THE BAKER / LES METIERS : LE BOULANGER</h5>
    							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, consequuntur iure commodi omnis at pariatur quis hic mollitia impedit error.</p>			</div>
    					</div>
    				</div>
    						<div class="widget border-none bg-none widget-pinterest">
    					<div class="widget-body bg-none padding-none">
    						<a href="http://vimeo.com/2480635" data-toggle="prettyPhoto" class="thumb">
    							<img src="http://demo.mosaicpro.biz/assets/media/video/11.jpg" alt="photo" />
    						</a>
    						<div class="description  ">
    							<h5 class="text-uppercase">Eatliz - Hey Animation Music Video</h5>
    							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>			</div>
    					</div>
    				</div>
    						<div class="widget border-none bg-none widget-pinterest">
    					<div class="widget-body bg-none padding-none">
    						<a href="http://vimeo.com/28355660" data-toggle="prettyPhoto" class="thumb">
    							<img src="http://demo.mosaicpro.biz/assets/media/video/12.jpg" alt="photo" />
    						</a>
    						<div class="description  ">
    							<h5 class="text-uppercase">Back to the Start</h5>
    							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, consequuntur iure commodi omnis at pariatur quis hic mollitia impedit error.</p>			</div>
    					</div>
    				</div>
    			</div>

    		</div>
    		<div class="col-md-4 col-lg-3">

    			<div class="widget">
    				<h5 class="innerAll margin-none bg-primary">Recent News</h5>
    				<div class="widget-body padding-none">
    							<div class="media border-bottom innerAll margin-none">
    						<img src="assets/img/images/people/35/22.jpg" class="pull-left media-object"/>
    						<div class="media-body">
    							<a href="" class="pull-right text-muted innerT half">
    								<i class="fa fa-comments"></i> 4
    							</a>
    							<h5 class="margin-none"><a href="" class="text-inverse">Trendy +</a></h5>
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
    	</div>
    </div>




    		</div>
    		<!-- // Content END -->

    		<div class="clearfix"></div>
    		<!-- // Sidebar menu & content wrapper END -->

    				<!-- Footer -->
    		<div id="footer">

    			<!--  Copyright Line -->
    			<div class="copy">&copy; 2012 - 2014 - <a href="http://www.mosaicpro.biz">MosaicPro</a> - All Rights Reserved. <a href="http://themeforest.net/?ref=mosaicpro" target="_blank">Purchase Social Admin Template</a> - Current version: v2.0.0-rc8 / <a target="_blank" href="../assets/../../CHANGELOG.txt?v=v2.0.0-rc8">changelog</a></div>
    			<!--  End Copyright Line -->

    		</div>
    		<!-- // Footer END -->



    





</div>
@stop

