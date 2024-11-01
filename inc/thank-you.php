<?php
/*Template Name: Home page*/

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel_Log
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <!-- Instruct Internet Explorer to use its latest rendering engine -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0">
        <meta name="description" content="travel-site">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
            <?php endif; ?>
                <?php wp_head(); ?>
    </head>
    <body class="layout-right-sidebar group-blog hfeed" data-spy="scroll" data-target="#myScrollspy" data-offset="20">
        <style type="text/css">
            html {
                margin-top: 0px !important;
            }
        </style>
        <div id="page" class="site animate-bottom">
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
            <div id="header" class="header-section type-header-1 header-skin-dark header-no-transparent">
			<div class="header-wrapper-for-sticky">
			<div class="ws-theme-top-header bg-black">
				<div class="container">
				   
				   <div class="visible-under-xs">
				    	<span class="top-header-mobile-title">
							Welcome To Travel Log	
						</span>		
				    	<span id="top-mobile-menu" class="travel-mobile-menu"><i class="wt-icon wt-icon-bars"></i></span>
				    </div>
				   <div class="navbar-collapse ws-theme-topnavbar-collapse" aria-expanded="false">
				      <ul class="nav navbar-nav ws-theme-top-left">
				         <li>
				            <div id="header-contact-info" class="top-contact-info font12">
				               <ul class="header-contact-details">
				                  <li><span><i class="wt-icon wt-icon-flip-horizontal wt-icon-phone" aria-hidden="true"></i>+12 123 456 789</span></li>
				                  <li><span><i class="wt-icon-regular wt-icon-clock" aria-hidden="true"></i>Mon – Sat 8.00 – 18.00. Sunday CLOSED</span></li>
				               </ul>
				            </div>
				         </li>
				      </ul>
				      <ul class="nav navbar-nav navbar-right ws-theme-top-right">
				      	
		         		<li class="extra-nav header-top-cart">
							<a class="cart-empty cart-icon" href="#">
								<i class="wt-icon wt-icon-shopping-cart" aria-hidden="true"></i>
							</a>
		                </li>
		                <li class="extra-nav header-top-search">
		                    <a href="#search-form" class="hidden-above-xs">
						        <i class="wt-icon wt-icon-search"></i>
						    </a>
						    <form method="get" action="" class="search-form visible-under-xs">
					        	<div class="input-group"> 
					        		<input type="text" value="" name="s" class="form-control" placeholder="Search"> 
				        			<span class="input-group-btn"> 
				        				<button class="btn btn-search" type="submit">Go</button> 
				        			</span>
				        		</div>
					        </form>
		                </li>
				         <li>
				            <div id="header-sidebar-social" class="sidebar-social">
				               <ul class="ws-theme-social-icons soc-icon-rounded ">
				               <!-- for circle .soc-icon-circle// 
									for transparent background .soc-icon-transparent// 
									for flat .soc-icon-flat//
									fot rounded icon .soc-icon-rounded 
				                 -->

				                  <li class="facebook"><a target="_blank" href="#"><i class="wt-icon-brands wt-icon-facebook"></i></a></li>
				                  <li class="twitter"><a target="_blank" href="#"><i class="wt-icon-brands wt-icon-twitter"></i></a></li>
				                  <li class="linkedin"><a target="_blank" href="#"><i class="wt-icon-brands wt-icon-linkedin"></i></a></li>
				                  <li class="pinterest"><a target="_blank" href="#"><i class="wt-icon-brands wt-icon-pinterest"></i></a></li>
				                  <li class="google-plus"><a target="_blank" href="#"><i class="wt-icon-brands wt-icon-google-plus"></i></a></li>
				                  <li class="youtube"><a target="_blank" href="#"><i class="wt-icon-brands wt-icon-youtube"></i></a></li>
				                  <li class="rss"><a target="_blank" href="#"><i class="wt-icon-brands wt-icon-rss"></i></a></li>

				               </ul>
				            </div>
				         </li>
				         
				      </ul>
				   </div>
				</div>
			</div>
			<header id="masthead" class="site-header " role="banner" style="">
				<div class="ws-theme-addon-main-header">
			   <div class="container">
			     
			      <div class="header-main-menu">
			         <div class="site-branding">
			            <div id="site-identity">
				            <a href="http://skynet.wensolutions.com/ws-theme-addon/" class="navbar-brand" title="Mist - Best Multipurpose Responsive Theme" rel="home"> 
					            <img class="img-responsive ws-theme-standard-logo" src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/logo.png" alt="Mist" width="133" height="35">				
					            <img class="img-responsive ws-theme-sticky-logo" src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/logo-sticky.png" alt="Mist" width="133" height="35">							
				            </a>

			              <!--<div class="site-branding-text>"  
							  <h1 class="site-title"><a href="" rel="home">Travel log</a></h1>
						   <p class="site-description">Just Another Travel Theme</p>
							</div> -->
			            </div>
			         </div>
			         <!-- .site-branding -->
			         <nav id="main-nav">

					<!-- mobile toogle area -->

				         <input id="main-menu-state" type="checkbox" />
						<label class="main-menu-btn" for="main-menu-state">
						  <span class="main-menu-btn-icon"></span> Toggle main menu visibility
						</label>
						
					<!-- end -->

						<ul id="main-menu" class="sm sm-clean">
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-623"><a href="#">Home</a></li>
					        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-621 ws-theme-mega-menu mega-menu-col-4"><a href="#">Mega Menu 4</a>

					        <ul class="mega-menu">
								<li>
								<div class="mega-menu-column">
									<h5>Heading 1</h5>
									<ul>
										<li><a href="#">Regular link</a></li>
										<li><a href="#">Regular link</a></li>
										<li><a href="#">Regular link</a></li>
										<li><a href="#">Regular link</a></li>
									</ul>
								</div>
								<div class="mega-menu-column">
									<h5>Heading 2</h5>
									<ul>
										<li><a href="#">Regular link</a></li>
										<li><a href="#">Regular link</a></li>
										<li><a href="#">Regular link</a></li>
									</ul>
									
								</div>
								<div class="mega-menu-column">
									<h5>Heading 3</h5>
										<ul>
										<li><a href="#">Regular link</a></li>
										<li><a href="#">Regular link</a></li>
									</ul>
								</div>
								<div class="mega-menu-column">
									<h5>Heading 4</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elit velit, ultricies eget porta ac.</p>
									<ul>
										<li><a href="#">Regular link</a></li>
										<li><a href="#">Regular link</a></li>
									</ul>
								</div>
								</li>
							</ul>



					        </li>
					        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-624">
					           <a href="#">Pages</a>
					           <ul class="sub-menu">
					              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-620"><a href="#">About Us</a></li>
					              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-636"><a href="#">Services</a></li>
					              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-632"><a href="#">Team</a></li>
					              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-631"><a href="#">Testimonials</a></li>
					           </ul>
					        </li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
								<a href="#">Regular sub</a>
								<ul>
									<li><a href="#">Dummy item</a></li>
									<li><a href="#">Dummy item</a></li>
									<li><a href="#" class="disabled">Disabled menu item</a></li>
									<li><a href="#">Dummy item</a></li>
									<li><a href="#">more...</a>
									<ul>
										<li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the sub menus</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">more...</a>
										<ul>
											<li><a href="#">Dummy item</a></li>
											<li><a href="#" class="current">A 'current' class item</a></li>
											<li><a href="#">Dummy item</a></li>
											<li><a href="#">more...</a>
											<ul>
												<li><a href="#">subMenusMinWidth</a></li>
												<li><a href="#">10em</a></li>
												<li><a href="#">forced.</a></li>
											</ul>
											</li>
											<li><a href="#">Dummy item</a></li>
											<li><a href="#">Dummy item</a></li>
										</ul>
										</li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the sub menus</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the sub menus</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the sub menus</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the sub menus</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the sub menus</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
										<li><a href="#">Dummy item</a></li>
									</ul>
									</li>
								</ul>
								</li>
					        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-633"><a href="#">Blog</a></li>
					        <li class="menu-item menu-item-type-post_type menu-item-has-children menu-item-object-page menu-item-634 ws-theme-mega-menu mega-menu-col-1"><a href="#">Mega menu</a>
                                <ul class="mega-menu">
									<li>
										<div class="mega-menu-wrap">
											<p>This is a mega drop down test. Just set the "mega-menu" class to the parent UL element to inform the SmartMenus script. It can contain <strong>any HTML</strong>.</p>
											<p>This is a mega drop down test. Just set the "mega-menu" class to the parent UL element to inform the SmartMenus script. It can contain <strong>any HTML</strong>.</p>
										</div>
									</li>
								</ul>
                            </li>
							<li class="extra-nav header-top-cart" id="header-cart">
								<a class="cart-empty cart-icon" href="#">
									<i class="wt-icon wt-icon-shopping-cart" aria-hidden="true"></i>
									<span class="badge rounded-circle bg-primary text-white font10">2</span>
								</a>
								<div class="woo-cart">
			                        <div class="shopping-cart">
			                            <div class="shopping-cart-header">
			                              <i class="wt-icon wt-icon-shopping-cart cart-icon"></i>
			                              <span class="badge rounded-circle bg-primary text-white font10">2</span>
			                              <div class="shopping-cart-total">
			                                <span class="lighter-text">Total:</span>
			                                <span class="main-color-text">$2,229.97</span>
			                              </div>

			                            </div> 
			                            <ul class="shopping-cart-items">
									      <li class="clearfix">
									        <a href="#0" class="item-name font14">ABC Trekking</a>
									        <span class="item-price font12">$100</span>
									        <span class="item-quantity font12">Person: 01</span>
									        <span class="remove btn btn-outline-primary">x</span>
									      </li>

									      <li class="clearfix">
									        <a href="#0" class="item-name font14">Thailand Tour</a>
									        <span class="item-price font12">$200</span>
									        <span class="item-quantity font12">Person: 01</span>
									        <span class="remove btn btn-outline-primary">x</span>
									      </li>

									      
									    </ul>
			                            <a href="#" class="btn btn-outline-primary waves-effect font14 line14">Checkout</a>
			                          </div> 
			                    </div>
			                     </li>

			                     <li class="extra-nav header-top-search ">
			                     	<a href="#search-form" class="dispaly-search-form hidden-above-xs">
			                            <i class="wt-icon wt-icon-search"></i>
			                        </a>
							        <form method="get" action="" class="search-form visible-under-xs">
							        	<div class="input-group"> 
							        		<input type="text" value="" name="s" class="form-control" placeholder="Search"> 
						        			<span class="input-group-btn"> 
						        				<button class="btn btn-search" type="submit">Go</button> 
						        			</span>
						        		</div>
							        </form>
			                     </li>
						</ul>
					</nav>
			      </div>
			   </div>



				</div>


			</header>

			<div id="search-form" class="hidden-search-form">
			    <div class="container">
			        <form>
			            <input type="search" placeholder="Search...">
			            <button class="search-header-input"><i class="wt-icon wt-icon-search"></i></button>
			            <div class="ws-theme-select">
			                <span>in</span>
			                <div class="form-control wp-toolbar-filter-field pl-20">
			                    <select name="type" class="selectpicker"  title="Select Categories" data-size="10">
			                        <option value="all-categories">all Categories</option>
			                        <option value="category1">Trekk</option>
			                        <option value="category2">Tour</option>
			                        <option value="category3">Short Vacation</option>
			                    </select>
			                </div>
			            </div>
			        </form>
			        <div class="search-live-result padding-15 bg-light">
			            <ul class="p-15 margin-0 no-list-style">
			                <li>
			                    <a class="image-wrapper" href="#0">
			                        <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/placeholder.png" alt="News image">
			                    </a>
			                    <h4 class="mt-0 mb-10 font16">
			                        <a class="cd-nowrap" href="#0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
			                    </h4>
			                    <time datetime="2016-01-12">Feb 03, 2016</time>
			                </li>
			                <li>
			                    <a class="image-wrapper" href="#0">
			                        <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/placeholder.png" alt="News image">
			                    </a>
			                    <h4 class="mt-0 mb-10 font16">
			                        <a class="cd-nowrap" href="#0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
			                    </h4>
			                    <time datetime="2016-01-12">Feb 03, 2016</time>
			                </li>
			                <li>
			                    <a class="image-wrapper" href="#0">
			                        <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/placeholder.png" alt="News image">
			                    </a>
			                    <h4 class="mt-0 mb-10 font16">
			                        <a class="cd-nowrap" href="#0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
			                    </h4>
			                    <time datetime="2016-01-12">Feb 03, 2016</time>
			                </li>
			                <li>
			                    <a class="image-wrapper" href="#0">
			                        <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/placeholder.png" alt="News image">
			                    </a>
			                    <h4 class="mt-0 mb-10 font16">
			                        <a class="cd-nowrap" href="#0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
			                    </h4>
			                    <time datetime="2016-01-12">Feb 03, 2016</time>
			                </li>
			            </ul>
			        </div>
			        <a href="#0" class="close-action"></a>
			    </div>
			</div>
		</div>
	</div>	
            <div class="custom-header">
                <div class="container">
                    <div class="row">
                        <header class="entry-header">
                            <h1 class="entry-title">Single Trip</h1>
                        </header>
                        <!-- .entry-header -->
                    </div>
                </div>
            </div>
            <div id="breadcrumb">
                <div class="container">
                    <nav role="breadcrumb" class="ws-theme-addons-breadcrumb text-center">
                        <ol class="ws-theme-multi-steps text-bottom count">
                            <li class="visited"><a href="#0">Cart</a></li>
                            <li class="current"><em>Billing</em></li>
                            <li><em>Conformation</em></li>
                            
                        </ol>
                    </nav>
                </div>
            </div>
            <div id="content" class="site-content">
                <div class="checkout-page-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkout-block checkout-left">
                                    <div class="payment-success">

                                        <div class="icon">
                                            <i class="pe-7s-check text-success"></i>
                                        </div>

                                        <div class="content">

                                            <h2 class="heading uppercase mt-0 text-success">Thank you, your booking is complete!</h2>
                                            <p>Your confirmation number is <span class="text-primary font700">9977234</span></p>

                                        </div>

                                    </div>
                                    
                                    <div class="panel-group number-accordion">
                                        <div class="panel ws-theme-timeline-block">
                                          <div class="panel-heading">
                                          <div class="ws-theme-timeline-img">
                                                1
                                            </div> 
                                            <h4 class="panel-title">Order Information</h4>
                                          </div>
                                          <div id="number-accordion1" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                              <div class="confirmation-content">
                                                  <ul class="book-sum-list no-margin no-padding no-list-style">
                                                    <li><span class="font600">Booking Number: </span>9977234</li>
                                                    <li><span class="font600">Traveller Name: </span>Sushil Dhakal</li>
                                                    <li><span class="font600">Package Name: </span>Langtang Base Camp (8 days 7 nights)</li>
                                                    <li><span class="font600">Starting: </span> March 26, 2019 from Kathmandu</li>
                                                    <li><span class="font600">End: </span>March 29, 2019 in Kathmandu</li>
                                                    <li><span class="font600">Included: </span>Guide, Meals, Transport, 5 Experiences</li>
                                                    <li><span class="font600">Billing Email: </span>myemail@gmail.com</li>
                                                    <li><span class="font600">Billing Address: </span>sundhara, patan, Nepal </li>
                                                    <li><span class="font600">Phone Number: </span>+977 9849875329 </li>
                                                    <li><span class="font600">Number of Travelers: </span><span>5</span></li>
                                                    <li><span class="font600">Adult: </span><span>3 x $50 = 150</span></li>
                                                    <li><span class="font600">Children: </span><span>2 x 40 = 80</span></li>
                                                    <li><span class="font600">Subtotal: </span><span>$536.80</span></li>
                                                    <li><span class="font600">Payment method: </span><span>Cash on Delivery</span></li>
                                                    <li><span class="font600">Total:</span><span> $536.80</span></li>
                                                  </ul>
                                                  
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel ws-theme-timeline-block">
                                          <div class="panel-heading">
                                          <div class="ws-theme-timeline-img">
                                                2
                                            </div> 
                                            <h4 class="panel-title">Payment</h4>
                                          </div>
                                          <div id="number-accordion2" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="confirmation-content">
                                                  <p>Lectus proin nibh nisl condimentum id venenatis a. Cras adipiscing enim eu turpis egestas pretium aenean pharetra. Eu lobortis elementum nibh tellus molestie nunc non blandit massa. Eget magna fermentum iaculis eu. Faucibus in ornare quam viverra orci sagittis eu volutpat. Sapien nec sagittis aliquam malesuada bibendum arcu. Et netus et malesuada fames. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Diam phasellus vestibulum lorem sed risus ultricies tristique. At tempor commodo ullamcorper a. Nunc sed blandit libero volutpat sed cras ornare. Blandit libero volutpat sed cras ornare. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Elit pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
                                                    
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel ws-theme-timeline-block">
                                          <div class="panel-heading">
                                          <div class="ws-theme-timeline-img">
                                                3
                                            </div> 
                                            <h4 class="panel-title">ADDITIONAL INFORMATION</h4>
                                          </div>
                                          <div id="number-accordion3" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget. Et ligula ullamcorper malesuada proin libero nunc consequat interdum. Arcu ac tortor dignissim convallis aenean et tortor at risus. Morbi tincidunt ornare massa eget egestas. Sollicitudin ac orci phasellus egestas tellus rutrum. Faucibus purus in massa tempor nec feugiat nisl. Et malesuada fames ac turpis egestas sed. Orci nulla pellentesque dignissim enim sit amet venenatis. Nulla facilisi cras fermentum odio eu feugiat pretium nibh. Nisi lacus sed viverra tellus in hac habitasse platea. Eget lorem dolor sed viverra ipsum. Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin.</p>
                                            </div>
                                          </div>
                                        </div>


                                        
                                    </div>
                                      <div class="mt-30 ml-15">
                                        <button class="btn btn-block simple"><i class="wt-icon wt-icon-print"></i> Print</button>
                                        <button class="btn btn-block simple ml-15"><i class="wt-icon-regular wt-icon-envelope"></i> Sent to</button>
                                      </div>
                                </div>   
                             </div> 
                            <div class="col-sm-4">
                                <div class="sticky-sidebar">
                                    <div class="checkout-block checkout-right">
                                        <div class="sidebar-inner">

                                          <div class="sidebar-module">
                                              <h4 class="heading mt-0 mb-20">Need Booking Help?</h4>
                                              <div class="sidebar-module-inner">
                                                  <p class="mb-15">Lorem ipsum dolor sit 24 / 7, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                  <ul class="help-list no-margin no-padding no-list-style">
                                                      <li><span class="font600">Hotline</span>: +1234 56 78 910</li>
                                                      <li><span class="font600">Email</span>: support@info.com</li>
                                                      <li><span class="font600">Livechat</span>: supportinfo (Skype)</li>
                                                  </ul>
                                              </div>
                                          </div>

                                          <div class="sidebar-module">
                                              <h4 class="heading mt-20">Why booking with us?</h4>
                                              <div class="sidebar-module-inner">
                                                  <ul class="featured-list-sm no-margin no-padding no-list-style">
                                                      <li>
                                                          <span class="icon"><i class="flaticon-stop-book"> </i></span>
                                                          <h6 class="heading mt-0 mb-15">ONE STOP BOOK</h6> Widest range of 2,700 tours and activities from all around the world to give you the best.
                                                      </li>
                                                      <li>
                                                          <span class="icon"><i class="flaticon-verified"> </i></span>
                                                          <h6 class="heading mt-0 mb-15">REFER TO VERIFIED</h6> We verify all reviews to give you the best advices from trusted others travelers.
                                                      </li>
                                                      <li>
                                                          <span class="icon"><i class="flaticon-tips"> </i></span>
                                                          <h6 class="heading mt-0 mb-15">SECRET TRAVEL TIPS</h6> Join 50,000 other subscribers and get weekly travel tips from other travelers and local.
                                                      </li>
                                                      <li>
                                                          <span class="icon"><i class="flaticon-guarantee"> </i></span>
                                                          <h6 class="heading mt-0 mb-15">BEST PRICE GUARANTEE</h6> Our pricing is updated constantly to ensure you get the best price available online or at your destination
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>

                                      </div>
                                    </div>
                                </div>
                                
                                 
                             </div>
                            
                             
                         </div>
                    </div><!--container -->
                </div>
            </div>
        </div>
        <!-- #page -->
        <footer id="footer" class="footer-widget-area travel-site-footer clearfix" role="contentinfo">
            <div class="travel-site-bottom-footer clearfix">
                <?php
            /**
             * Hook travel_log_before_footer_copyright.
             *
             * @hooked travel_log_footer_widgets - 10
             * @hooked travel_log_footer_menu - 15
             */
            do_action( 'travel_log_before_footer_copyright' );
            ?>
                    <div class="container-fluid">
                        <div class="row">

                            <div class="copy-right-footer">
                                <div class="container">
                                    <div class="row">

                                        <?php
                                    /**
                                     * Hook travel_log_footer_copyright.
                                     *
                                     * @hooked travel_log_footer_copyright_content - 10
                                     */
                                    do_action( 'travel_log_footer_copyright' );
                                    ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php
        /**
         * Hook travel_log_after_footer_copyright.
         */
        do_action( 'travel_log_after_footer_copyright' );
        ?>
            </div>
        </footer>
        <!-- #colophon -->
        <a href="#page" id="return-to-top"> <i class="wt-icon wt-icon-angle-up"></i></a>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-core-css.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-clean/sm-clean.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-blue/sm-blue.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-mint/sm-mint.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-simple/sm-simple.min.css">
        <!-- air datepicker css -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.min.css">
        <!-- tooltip -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/tooltipster.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/themes/tooltipster-light.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/jquery.smartmenus.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script>
        <script type="text/javascript">
            jQuery(function($) {
                //tooltip
                $('.tooltip-area').tooltipster({
                     animation: 'slide',
                       delay: 200
                });
                //smoth scroll
                $(function () {
                  // Smooth Scroll
                  $('a[href*=#]').bind('click', function(e){
                    var anchor = $(this);
                    $('html, body').stop().animate({
                      scrollTop: $(anchor.attr('href')).offset().top
                    }, 1000);
                    e.preventDefault();
                  });
                });

                //toggle number
                $('.ws-theme-timeline-block .panel-title').click(function(){
                  $(this).parent('.panel-heading').siblings('.panel-collapse').toggleClass('in');
                  $(this).parent('.panel-heading').toggleClass('collapsed');
                })

                //accordion icon toggle
                $('.i-accordion').on('show.bs.collapse', function(n){
                  $(n.target).siblings('.panel-heading').find('.panel-title i').toggleClass('wt-icon-question-circle wt-icon-question');
                });
                $('.i-accordion').on('hide.bs.collapse', function(n){
                  $(n.target).siblings('.panel-heading').find('.panel-title i').toggleClass('wt-icon-question wt-icon-question-circle');
                });
                
                $('#main-menu').smartmenus({
                    mainMenuSubOffsetX: -1,
                    mainMenuSubOffsetY: 4,
                    subMenusSubOffsetX: 6,
                    subMenusSubOffsetY: -6
                });
                //mobile toggle option
                var $mainMenuState = $('#main-menu-state');
                if ($mainMenuState.length) {
                    // animate mobile menu
                    $mainMenuState.change(function(e) {
                        var $menu = $('#main-menu');
                        if (this.checked) {
                            $menu.hide().slideDown(250, function() {
                                $menu.css('display', '');
                            });
                        } else {
                            $menu.show().slideUp(250, function() {
                                $menu.css('display', '');
                            });
                        }
                    });
                    // hide mobile menu beforeunload
                    $(window).on('beforeunload unload', function() {
                        if ($mainMenuState[0].checked) {
                            $mainMenuState[0].click();
                        }
                    });
                }
                //end
                $('#top-mobile-menu').click(function() {
                    $('.ws-theme-topnavbar-collapse').toggle('slide');
                    $(this).toggleClass('open');
                });
            $(document).ready(function() {
                // grab the initial top offset of the navigation
                var stickyNavTop = $('.site-header').offset().top -1;
                // our function that decides weather the navigation bar should have "fixed" css position or not.
                var stickyNav = function(){
                    var scrollTop = $(window).scrollTop(); // our current vertical position from the top
                         
                    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
                    // otherwise change it back to relative
                    if (scrollTop > stickyNavTop) { 
                        $('.site-header').addClass('sticky');
                    } else {
                        $('.site-header').removeClass('sticky'); 
                    }
                };
                stickyNav();
                // and run it again every time you scroll
                $(window).scroll(function() {
                    stickyNav();
                });
            });
           
    });
        </script>

    </body>

    </html>