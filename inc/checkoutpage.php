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
				                  <li><span><i class="wt-ico-regular wt-icon-clock" aria-hidden="true"></i>Mon – Sat 8.00 – 18.00. Sunday CLOSED</span></li>
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
                            <div class="col-sm-4 col-sm-push-8">
                                <div class="sticky-sidebar">
                                    <div class="checkout-block checkout-right">
                                        <div class="price-summary-wrapper">
                                           <h4 class="heading mt-0 text-primary uppercase">My Trip</h4>
                                           <ul class="price-summary-list">
                                              <li>
                                                 <h6 class="heading mt-0 mb-0">Annapurna base camp</h6>
                                                 <p>8 days 7 nights city tour</p>
                                              </li>
                                              <li>
                                                 <h6 class="heading mt-0 mb-0">Starts in Kathmandu, Nepal</h6>
                                                 <p>Monday, july 7, 2018</p>
                                              </li>
                                              <li>
                                                 <h6 class="heading mt-0 mb-0">Ends in Kathmandu, Nepal</h6>
                                                 <p>Thursday, july 10, 2018</p>
                                              </li>
                                              <li>
                                                 <h6 class="heading mt-0 mb-0">What's included</h6>
                                                 <p>Accommodation, Guide, Meals, Bus</p>
                                              </li>
                                              <li class="divider"></li>
                                              <li>
                                                 <h6 class="heading mt-20 mb-5 text-primary uppercase">Price per person</h6>
                                                 <div class="row gap-10 mt-10">
                                                    <div class="col-xs-7 col-sm-7">
                                                       Price
                                                    </div>
                                                    <div class="col-xs-5 col-sm-5 text-right">
                                                       $1458
                                                    </div>
                                                 </div>
                                                 <div class="row gap-10 mt-10">
                                                    <div class="col-xs-7 col-sm-7">
                                                       Tax 10%
                                                    </div>
                                                    <div class="col-xs-5 col-sm-5 text-right">
                                                       $145.8
                                                    </div>
                                                 </div>
                                              </li>
                                              <li class="divider"></li>
                                              <li class=" font600 font14 clearfix">
                                                <div class="row gap-10 mt-10">
                                                    <div class="col-xs-7 col-sm-7">
                                                       <strong >Total:</strong>
                                                    </div>
                                                    <div class="col-xs-5 col-sm-5 text-right">
                                                        <strong>$1623.5</strong>
                                                    </div>
                                                </div>    
                                              </li>
                                              <li class="divider"></li>
                                              <li>
                                                 <div class="row gap-10 font600 font14">
                                                    <div class="col-xs-9 col-sm-9">
                                                       Number of Travellers
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 text-right">
                                                       1
                                                    </div>
                                                 </div>
                                              </li>
                                              <li class="total-price">
                                                 <div class="row gap-10">
                                                    <div class="col-xs-6 col-sm-6">
                                                       <h5 class="heading mt-0 mb-0 text-white">Amount due</h5>
                                                       <p class="text-white">before departure</p>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 text-right">
                                                       <span class="block font20 font600 mb-5">$1458</span>
                                                       <span class="font10 line10 block">**Best Price Guarantee </span>
                                                    </div>
                                                 </div>
                                              </li>
                                           </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                 
                             </div>
                            <div class="col-sm-8 col-sm-pull-4">
                                <div class="checkout-block checkout-left">
                                    <div class="section-title text-left">
                                       <h3>Annapurna Base Camp<small> / 8 days 7 nights</small></h3>
                                    </div>
                                    
                                    <div class="panel-group number-accordion">
                                        <div class="panel ws-theme-timeline-block">
                                          <div class="panel-heading">
                                          <div class="ws-theme-timeline-img">
                                                1
                                            </div> 
                                            <h4 class="panel-title">Your selected departure date </h4>
                                          </div>
                                          <div id="number-accordion1" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                              <p>Your departure date: June 26, 2018 - June 29, 2016 <a href="#" class="btn btn-block simple">change</a></p>

                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel ws-theme-timeline-block">
                                          <div class="panel-heading">
                                          <div class="ws-theme-timeline-img">
                                                2
                                            </div> 
                                            <h4 class="panel-title">Traveller Details</h4>
                                          </div>
                                          <div id="number-accordion2" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="payment-content">
                                                    <div class="payment-traveller">
                                                        <div class="row gap-0">
                                                            <div class="col-md-offset-3 col-sm-offset-4 col-sm-8 col-md-9">
                                                                <h6 class="heading mt-0 mb-15">Traveller 1</h6>
                                                            </div>

                                                        </div>
                                                        <div class="form-horizontal">
                                                            <div class="form-group gap-20">
                                                                <label class="col-sm-4 col-md-3 control-label">First Name:</label>
                                                                <div class="col-sm-8 col-md-9">
                                                                    <input type="text" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-horizontal">
                                                            <div class="form-group gap-20">
                                                                <label class="col-sm-4 col-md-3 control-label">Last Name:</label>
                                                                <div class="col-sm-8 col-md-9">
                                                                    <input type="text" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-horizontal">
                                                            <div class="form-group gap-20 select2-input-hide">
                                                                <label class="col-sm-4 col-md-3 control-label">Gender:</label>
                                                                <div class="col-sm-4 col-md-3">
                                                                    <select class="select2-no-search form-control select2-hidden-accessible" data-placeholder="Gender" tabindex="-1" aria-hidden="true">
                                                                        <option value="">Gender</option>
                                                                        <option value="male">Male.</option>
                                                                        <option value="female">Female.</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-horizontal">
                                                            <div class="form-group gap-20 select2-input-hide">
                                                                <label class="col-sm-4 col-md-3 control-label">DOB:</label>
                                                                <div class="col-sm-8 col-md-6">
                                                                    <div class="row gap-15">
                                                                        <div class="col-xs-4 col-sm-4">
                                                                            <select class="select2-no-search form-control select2-hidden-accessible" data-placeholder="Date" tabindex="-1" aria-hidden="true">
                                                                                <option value="">Date</option>
                                                                                <option value="01">01</option>
                                                                                <option value="02">02</option>
                                                                                <option value="03">03</option>
                                                                                <option value="04">04</option>
                                                                                <option value="05">05</option>
                                                                                <option value="06">06</option>
                                                                                <option value="07">07</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-4">
                                                                            <select class="select2-no-search form-control select2-hidden-accessible" data-placeholder="Month" tabindex="-1" aria-hidden="true">
                                                                                <option value="">Month</option>
                                                                                <option value="jan">Jan</option>
                                                                                <option value="feb">Feb</option>
                                                                                <option value="mar">Mar</option>
                                                                                <option value="apr">Apr</option>
                                                                                <option value="may">May</option>
                                                                                <option value="jun">Jun</option>
                                                                                <option value="jul">Jul</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-4">
                                                                            <select class="select2-no-search form-control select2-hidden-accessible" data-placeholder="Year" tabindex="-1" aria-hidden="true">
                                                                                <option value="">Year</option>
                                                                                <option value="1985">1985</option>
                                                                                <option value="1986">1986</option>
                                                                                <option value="1987">1987</option>
                                                                                <option value="1988">1988</option>
                                                                                <option value="1900">1900</option>
                                                                                <option value="1901">1901</option>
                                                                                <option value="1902">1902</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-horizontal">
                                                            <div class="form-group gap-20">
                                                                <label class="col-sm-4 col-md-3 control-label">Email:</label>
                                                                <div class="col-sm-8 col-md-9">
                                                                    <input type="email" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-horizontal">
                                                            <div class="form-group gap-20">
                                                                <label class="col-sm-4 col-md-3 control-label">Phone Number:</label>
                                                                <div class="col-sm-8 col-md-9">
                                                                    <input type="email" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-horizontal">
                                                            <div class="form-group gap-20">
                                                                <label class="col-sm-4 col-md-3 control-label">Nationality:</label>
                                                                <div class="col-sm-8 col-md-9">
                                                                    <select class="select2-single form-control select2-hidden-accessible" data-placeholder="Nationality" tabindex="-1" aria-hidden="true">
                                                                        <option value="">Nationality</option>
                                                                        <option value="Thai">Thai</option>
                                                                        <option value="Malaysian">Malaysian</option>
                                                                        <option value="Indonesian">Indonesian</option>
                                                                        <option value="American">American</option>
                                                                        <option value="England">England</option>
                                                                        <option value="German">German</option>
                                                                        <option value="Polish">Polish</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="payment-traveller">
                                                        <a href="#" class="pull-right font12 traveller-remove"><i class="wt-icon wt-icon-times-circle"></i></a>
                                                        <div class="row gap-0 gap-15">
                                                            <div class="col-md-offset-3 col-sm-offset-4 col-sm-8 col-md-9">
                                                                <h6 class="heading mt-0 mb-15">Traveller 2</h6>
                                                            </div>
                                                        </div>
                                                        <div class="form-horizontal">
                                                            <div class="form-group gap-20">
                                                                <label class="col-sm-4 col-md-3 control-label">First Name:</label>
                                                                <div class="col-sm-8 col-md-9">
                                                                    <input type="text" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-horizontal">
                                                            <div class="form-group gap-20">
                                                                <label class="col-sm-4 col-md-3 control-label">Last Name:</label>
                                                                <div class="col-sm-8 col-md-9">
                                                                    <input type="text" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-horizontal">
                                                            <div class="form-group gap-20 select2-input-hide">
                                                                <label class="col-sm-4 col-md-3 control-label">Gender:</label>
                                                                <div class="col-sm-4 col-md-3">
                                                                    <select class="select2-no-search form-control select2-hidden-accessible" data-placeholder="Gender" tabindex="-1" aria-hidden="true">
                                                                        <option value="">Gender</option>
                                                                        <option value="male">Male.</option>
                                                                        <option value="female">Female.</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-horizontal">
                                                            <div class="form-group gap-20 select2-input-hide">
                                                                <label class="col-sm-4 col-md-3 control-label">DOB:</label>
                                                                <div class="col-sm-8 col-md-6">
                                                                    <div class="row gap-15">
                                                                        <div class="col-xs-4 col-sm-4">
                                                                            <select class="select2-no-search form-control select2-hidden-accessible" data-placeholder="Date" tabindex="-1" aria-hidden="true">
                                                                                <option value="">Date</option>
                                                                                <option value="01">01</option>
                                                                                <option value="02">02</option>
                                                                                <option value="03">03</option>
                                                                                <option value="04">04</option>
                                                                                <option value="05">05</option>
                                                                                <option value="06">06</option>
                                                                                <option value="07">07</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-4">
                                                                            <select class="select2-no-search form-control select2-hidden-accessible" data-placeholder="Month" tabindex="-1" aria-hidden="true">
                                                                                <option value="">Month</option>
                                                                                <option value="jan">Jan</option>
                                                                                <option value="feb">Feb</option>
                                                                                <option value="mar">Mar</option>
                                                                                <option value="apr">Apr</option>
                                                                                <option value="may">May</option>
                                                                                <option value="jun">Jun</option>
                                                                                <option value="jul">Jul</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-4">
                                                                            <select class="select2-no-search form-control select2-hidden-accessible" data-placeholder="Year" tabindex="-1" aria-hidden="true">
                                                                                <option value="">Year</option>
                                                                                <option value="1985">1985</option>
                                                                                <option value="1986">1986</option>
                                                                                <option value="1987">1987</option>
                                                                                <option value="1988">1988</option>
                                                                                <option value="1900">1900</option>
                                                                                <option value="1901">1901</option>
                                                                                <option value="1902">1902</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-horizontal">
                                                            <div class="form-group gap-20">
                                                                <label class="col-sm-4 col-md-3 control-label">Nationality:</label>
                                                                <div class="col-sm-8 col-md-9">
                                                                    <select class="select2-single form-control select2-hidden-accessible" data-placeholder="Nationality" tabindex="-1" aria-hidden="true">
                                                                        <option value="">Nationality</option>
                                                                        <option value="Thai">Thai</option>
                                                                        <option value="Malaysian">Malaysian</option>
                                                                        <option value="Indonesian">Indonesian</option>
                                                                        <option value="American">American</option>
                                                                        <option value="England">England</option>
                                                                        <option value="German">German</option>
                                                                        <option value="Polish">Polish</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <button class="btn btn-block simple center-div">Add another traveller</button>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel ws-theme-timeline-block">
                                          <div class="panel-heading">
                                          <div class="ws-theme-timeline-img">
                                                3
                                            </div> 
                                            <h4 class="panel-title">Billing Address</h4>
                                          </div>
                                          <div id="number-accordion3" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="payment-content">
                                                    <div class="form-horizontal">
                                                        <div class="form-group gap-20">
                                                            <label class="col-sm-4 col-md-3 control-label">Address:</label>
                                                            <div class="col-sm-8 col-md-9">
                                                                <input type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-horizontal">
                                                        <div class="form-group gap-20">
                                                            <label class="col-sm-4 col-md-3 control-label">City:</label>
                                                            <div class="col-sm-8 col-md-9">
                                                                <input type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-horizontal">
                                                        <div class="form-group gap-20">
                                                            <label class="col-sm-4 col-md-3 control-label">Postal:</label>
                                                            <div class="col-sm-8 col-md-9">
                                                                <input type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-horizontal">
                                                        <div class="form-group gap-20">
                                                            <label class="col-sm-4 col-md-3 control-label">Province:</label>
                                                            <div class="col-sm-8 col-md-9">
                                                                <input type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-horizontal">
                                                        <div class="form-group gap-20">
                                                            <label class="col-sm-4 col-md-3 control-label">Conntry:</label>
                                                            <div class="col-sm-8 col-md-9">
                                                                <select class="form-control " data-placeholder="Conntry" tabindex="-1" aria-hidden="true">
                                                                    <option value="">Conntry</option>   
                                                                    <option value="Thai">Thai</option>
                                                                    <option value="Malaysian">Malaysian</option>
                                                                    <option value="Indonesian">Indonesian</option>
                                                                    <option value="American">American</option>
                                                                    <option value="England">England</option>
                                                                    <option value="German">German</option>
                                                                    <option value="Polish">Polish</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel ws-theme-timeline-block">
                                          <div class="panel-heading">
                                          <div class="ws-theme-timeline-img">
                                                4
                                            </div> 
                                            <h4 class="panel-title">Finish Payment /  secure</h4>
                                          </div>
                                          <div id="number-accordion4" class="panel-collapse collapse in">
                                            <div class="panel-body">

                                                <div class="payment-content">
                                                    <div class="form-horizontal">
                                                        <div class="form-group gap-20">
                                                            <label class="col-sm-4 col-md-3 control-label">Booking Options:</label>
                                                            <div class="col-sm-8 col-md-9">
                                                                <select class="form-control " data-placeholder="Conntry" tabindex="-1" aria-hidden="true">
                                                                    <option value="">Booking with payment</option>
                                                                    <option value="">Booking only</option>
                                                                </select>
                                                            </div>    
                                                        </div>
                                                    </div>

                                                    <div class="form-horizontal">
                                                        <div class="form-group gap-20">
                                                            <label class="col-sm-4 col-md-3 control-label">Payment Gateway:</label>
                                                            <div class="col-sm-8 col-md-9">
                                                                <select class="form-control " data-placeholder="Conntry" tabindex="-1" aria-hidden="true">
                                                                    <option value="">Standard Paypal</option>
                                                                    <option value="">Paypal express checkout</option>
                                                                    <option value="">Stripe Checkout</option>
                                                                </select> 
                                                            </div>    
                                                        </div>
                                                    </div>

                                                    <div class="form-horizontal">
                                                        <div class="form-group gap-20">
                                                            <label class="col-sm-4 col-md-3 control-label">Payment Mode:</label>
                                                            <div class="col-sm-8 col-md-9">
                                                                <select class="form-control " data-placeholder="Conntry" tabindex="-1" aria-hidden="true">
                                                                    <option value="">Partial Payment</option>
                                                                    <option value="">Full Payment</option>
                                                                </select> 
                                                            </div>    
                                                        </div>
                                                    </div>

                                                   <div class="wp-travel-form-field full-width hide-in-admin wp-travel-text-info">
                                                        <label for="wp-travel-payment-trip-price-initial">
                                                            Trip Price <span class="required-label">*</span>
                                                        </label>
                                                        <div class="wp-travel-text-info"><span class="wp-travel-currency-symbol">$</span> <span class="wp-travel-info-content" id="wp-travel-payment-trip-price-initial">300.00</span></div>
                                                    </div>
                                                    <div class="wp-travel-form-field full-width hide-in-admin wp-travel-text-info">
                                                        <label for="wp-travel-payment-tax-percentage-info">
                                                            Tax <span class="required-label">*</span>
                                                        </label>
                                                        <div class="wp-travel-text-info"><span class="wp-travel-currency-symbol"></span> <span class="wp-travel-info-content" id="wp-travel-payment-tax-percentage-info">10.00 %</span></div>
                                                    </div>

                                                    <div class="wp-travel-form-field full-width hide-in-admin wp-travel-text-info">
                                                        <label for="wp-travel-payment-amount-info">
                                                            Payment Amount ( 50.00 %) <span class="required-label">*</span>
                                                        </label>
                                                        <div class="wp-travel-text-info"><span class="wp-travel-currency-symbol">$</span> <span class="wp-travel-info-content" id="wp-travel-payment-amount-info">165.00</span></div>
                                                    </div>
                                                    <div class="checkbox-block">
                                                        <input id="accept_booking" name="accept_booking" type="checkbox" class="checkbox" value="paymentsCreditCard">
                                                        <label class="" for="accept_booking">By submitting a booking request, you accept our <a href="#">terms and conditions</a> as well as the <a href="#">cancellation policy</a> and  <a href="#">House Rules</a> .</label>
                                                    </div>
                                                    <div class="wp-travel-form-field button-field">
                                                        <input type="submit" name="wp_travel_book_now" id="wp-travel-book-now" value="Book and Pay"> 
                                                    </div>




                                                </div>        
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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js"></script>
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


                $(document).ready(sidebarSticky);
                 $(window).resize(sidebarSticky);
                 function sidebarSticky(){
                   var interval = setInterval(function(){
                    if (Modernizr.mq('(min-width: 768px)')) {
                       $(".container .sticky-sidebar").stick_in_parent({
                        container: $(".container"),
                        parent: ".container",
                        offset_top:120
                      });
                    }
                       },1000)
    
                    }

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