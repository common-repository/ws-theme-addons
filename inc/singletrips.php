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
				            <a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/" class="navbar-brand" title="Mist - Best Multipurpose Responsive Theme" rel="home"> 
					            <img class="img-responsive ws-theme-standard-logo" src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/logo.png" alt="Mist" width="133" height="35">				
					            <img class="img-responsive ws-theme-sticky-logo" src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/logo-sticky.png" alt="Mist" width="133" height="35">							
				            </a>

			              <!--  <h1 class="site-title"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/" rel="home">Travel log</a></h1>
			               <p class="site-description">Just Another Travel Theme</p> -->
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
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-623"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/">Home</a></li>
					        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-621 ws-theme-mega-menu col-4-max"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/features/">Features</a>

					        <ul class="sub-menu mega-menu">
					        	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-624">
						           <a href="#">Pages</a>
						           <ul class="sub-menu">
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-620"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/about-us-2/">About Us</a></li>
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-636"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/services/">Services</a></li>
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-632"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/team/">Team</a></li>
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-631"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/testimonials/">Testimonials</a></li>
						           </ul>
						        </li>
						        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-624">
						           <a href="#">Pages</a>
						           <ul class="sub-menu">
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-620"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/about-us-2/">About Us</a></li>
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-636"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/services/">Services</a></li>
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-632"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/team/">Team</a></li>
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-631"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/testimonials/">Testimonials</a></li>
						           </ul>
						        </li>
						        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-624">
						           <a href="#">Pages</a>
						           <ul class="sub-menu">
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-620"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/about-us-2/">About Us</a></li>
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-636"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/services/">Services</a></li>
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-632"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/team/">Team</a></li>
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-631"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/testimonials/">Testimonials</a></li>
						           </ul>
						        </li>
						        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-624">
						           <a href="#">Pages</a>
						           <ul class="sub-menu">
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-620"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/about-us-2/">About Us</a></li>
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-636"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/services/">Services</a></li>
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-632"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/team/">Team</a></li>
						              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-631"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/testimonials/">Testimonials</a></li>
						           </ul>
						        </li>
					        </ul>



					        </li>
					        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-624">
					           <a href="#">Pages</a>
					           <ul class="sub-menu">
					              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-620"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/about-us-2/">About Us</a></li>
					              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-636"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/services/">Services</a></li>
					              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-632"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/team/">Team</a></li>
					              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-631"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/testimonials/">Testimonials</a></li>
					           </ul>
					        </li>
					        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-634"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/portfolio/">Portfolio</a></li>
					        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-633"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/blog-2/">Blog</a></li>
					        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-635"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/contact/">Contact</a></li>
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
			                        <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets\public/images/placeholder.png" alt="News image">
			                    </a>
			                    <h4 class="mt-0 mb-10 font16">
			                        <a class="cd-nowrap" href="#0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
			                    </h4>
			                    <time datetime="2016-01-12">Feb 03, 2016</time>
			                </li>
			                <li>
			                    <a class="image-wrapper" href="#0">
			                        <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets\public/images/placeholder.png" alt="News image">
			                    </a>
			                    <h4 class="mt-0 mb-10 font16">
			                        <a class="cd-nowrap" href="#0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
			                    </h4>
			                    <time datetime="2016-01-12">Feb 03, 2016</time>
			                </li>
			                <li>
			                    <a class="image-wrapper" href="#0">
			                        <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets\public/images/placeholder.png" alt="News image">
			                    </a>
			                    <h4 class="mt-0 mb-10 font16">
			                        <a class="cd-nowrap" href="#0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
			                    </h4>
			                    <time datetime="2016-01-12">Feb 03, 2016</time>
			                </li>
			                <li>
			                    <a class="image-wrapper" href="#0">
			                        <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets\public/images/placeholder.png" alt="News image">
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
                    <nav role="breadcrumb" class="ws-theme-addons-breadcrumb">
                        <ol class="ws-theme-breadcrumb custom-separator custom-icons">
                            <li><a href="http://skynet.wensolutions.com/ws-theme-addon/about-us/"><i class="wt-icon wt-icon-home" aria-hidden="true"></i> Home</a></li>
                            <li><a href="http://skynet.wensolutions.com/ws-theme-addon/listingpage/"><i class="wt-icon wt-icon-th-large" aria-hidden="true"></i> Trips</a></li>
                            <li class="current"><em><i class="wt-icon wt-icon-th-large" aria-hidden="true"></i> Single Trips</em></li>
                        </ol>
                    </nav>
                </div>
            </div>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">


						<div class="top_content_single">
                            <div class="title-single clearfix">
                                <div class="title">
                                    <h2 class="font26 ">Anchorage to Ushuaia</h2>
                                </div>
                                <div class="tour_code">
                                    <strong>Code: </strong><code>VBGRDS</code>  
                                </div>
                            </div>

                            <div id="social-share" class="single-post-social-share">
                                <ul class="ws-theme-social-icons soc-icon-circle dark-layout">
                                    <li class="facebook"><a target="_blank" href="#"><i class="wt-icon-brands wt-icon-facebook"></i></a></li>
                                    <li class="twitter"><a target="_blank" href="#"><i class="wt-icon-brands wt-icon-twitter"></i></a></li>
                                    <li class="linkedin"><a target="_blank" href="#"><i class="wt-icon-brands wt-icon-linkedin"></i></a></li>
                                    <li class="pinterest"><a target="_blank" href="#"><i class="wt-icon-brands wt-icon-pinterest"></i></a></li>
                                    <li class="google-plus"><a target="_blank" href="#"><i class="wt-icon-brands wt-icon-google-plus"></i></a></li>
                                    <li class="youtube"><a target="_blank" href="#"><i class="wt-icon-brands wt-icon-youtube"></i></a></li>
                                    <li class="rss"><a target="_blank" href="#"><i class="wt-icon-brands wt-icon-rss"></i></a></li>

                                </ul>
                            </div>

                            <div class="tour-info tour-has-image-itinerary">
                                <div class="tour-info-box clearfix">
                                    <div class="tour-info-column">
                                        <span class="tour-info-item tour-info-type">
                                            <i class="wt-icon wt-icon-flag" aria-hidden="true"></i>
                                            Special Tour                                                  
                                        </span>
                                        <span class="tour-info-item tour-info-address">
                                             <i class="wt-icon wt-icon-map-marker" aria-hidden="true"></i>
                                             Nha Trang, Vietnam                                                    
                                        </span>
                                        <span class="tour-info-item tour-info-duration">
                                             <i class="wt-icon-regular wt-icon-clock" aria-hidden="true"></i>
                                             4 day 3 night                                              
                                        </span>
                                        <span class="tour-info-item tour-info-destination">
                                             <i class="wt-icon wt-icon-globe" aria-hidden="true"></i>
                                             Asia                                                    
                                        </span>
                                        <span class="tour-info-item tour-info-land">
                                             <i class="flaticon-transport" aria-hidden="true"></i>
                                             Kathmandu
                                        </span>
                                        <span class="tour-info-item tour-info-takeoff">
                                             <i class="flaticon-transport-1" aria-hidden="true"></i>
                                             Kathmandu
                                        </span>
                                        <span class="tour-info-item tour-info-date">
                                             <i class="wt-icon wt-icon-calendar-alt" aria-hidden="true"></i>
                                             Availability: 2018-10-31
                                             <span class="tooltip-area" title="Click here to see othere's available dates.">
                                               <a href="#availabily-wrapper"> <i class="wt-icon wt-icon-info-circle" aria-hidden="true"></i></a>
                                            </span>
                                        </span>
                                        <span class="tour-info-item tour-info-guider">
                                             <i class="wt-icon wt-icon-user" aria-hidden="true"></i>
                                             <a href="#0">Tour Guide: Nick Anderson</a>
                                        </span>
                                        <span class="tour-info-item tour-info-age-limit">
                                            <i class="wt-icon wt-icon-user"></i>
                                            Min Age : 10+
                                        </span>
                                        <span class="tour-info-item tour-info-age-limit">
                                            <i class="wt-icon wt-icon-users"></i>
                                            Group Size : 1-20
                                        </span>
                                        <span class="tour-info-item tour-grade">
                                            <i class="wt-icon wt-icon-signal"></i>
                                            Grade: Moderate
                                        </span>
                                        <span class="tour-info-item tour-altitude">
                                            <i class="wt-icon wt-icon-area-chart"></i>
                                            Max Altitude: 1350m
                                        </span>
                                        <span class="tour-info-item tour-trek-duration">
                                            <i class="flaticon-sport"></i>
                                            Per Day Hiking: 5-6 Hour
                                        </span>
                                        <span class="tour-info-item tour-best-time">
                                            <i class="wt-icon wt-icon-cloud"></i>
                                            Best Season: Sept - Nov &amp; Mar - May
                                        </span>
                                        <span class="tour-info-item tour-accomodation">
                                            <i class="wt-icon wt-icon-bed"></i>
                                            Accomodation: Hotel
                                        </span>
                                        <span class="tour-info-item tour-transportation">
                                            <i class="wt-icon wt-icon-car"></i>
                                            Transportation: Vai car /Bus/fly
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="download-pdf clearfix">
                                <a href="#0" class="btn btn-block simple rounded-0" type="button" target="_blank">
                                    Download brochure (pdf)
                                </a>
                                <a href="#availabily-wrapper" class="btn btn-block simple rounded-0" type="button">
                                    See Dates and Book Now
                                </a>
                            </div>
                            <div class="ws-single-nav-slider">
                                <div class="slider slider-single">

                                    <div class="item-video">
                                        <div class="slick-video-wrapper" data-href="https://www.youtube.com/watch?v=LF0wJgg6WCk">
                                            <!-- <div class="slick-video-frame">
                                                load iframe here after clicking on image by a href link
                                            </div> -->
                                            <div class="slick-video-play-icon"></div>
                                            <div class="slick-video-tn">
                                                <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-image">
                                        <div class="slick-image-wrapper">
                                            <!-- data-effect="mfp-zoom-in"
                                            data-effect="mfp-newspaper"
                                            data-effect="mfp-move-horizontal"
                                            data-effect="mfp-move-from-top"
                                            data-effect="mfp-3d-unfold"
                                            data-effect="mfp-zoom-out"
                                            -->
                                            <a class="slick-image" data-effect="mfp-zoom-out" href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-2.jpg">
                                                <div class="slick-image-tn">
                                                    <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-2.jpg">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-image">
                                        <div class="slick-image-wrapper">
                                            <a class="slick-image" data-effect="mfp-zoom-out" href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-3.jpg">
                                                <div class="slick-image-tn">
                                                    <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-3.jpg">
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item-image">
                                        <div class="slick-image-wrapper">
                                            <a class="slick-image" data-effect="mfp-zoom-out" href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-4.jpg">
                                                <div class="slick-image-tn">
                                                    <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-4.jpg">
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item-image">
                                        <div class="slick-image-wrapper">
                                            <a class="slick-image" data-effect="mfp-zoom-out" href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-5.jpg">
                                                <div class="slick-image-tn">
                                                    <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-5.jpg">
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item-image">
                                        <div class="slick-image-wrapper">
                                            <a class="slick-image" data-effect="mfp-zoom-out" href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-6.jpg">
                                                <div class="slick-image-tn">
                                                    <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-6.jpg">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-image">
                                        <div class="slick-image-wrapper">
                                            <a class="slick-image" data-effect="mfp-zoom-out" href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-5.jpg">
                                                <div class="slick-image-tn">
                                                    <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-5.jpg">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-image">
                                        <div class="slick-image-wrapper">
                                            <a class="slick-image" data-effect="mfp-zoom-out" href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-6.jpg">
                                                <div class="slick-image-tn">
                                                    <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/single-6.jpg">
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="slider slider-nav">
                                    <div class="projectitem video-item">
                                        <article class="module-post">
                                            <figure>
                                               <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/slider-small-1.jpg">
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="projectitem">
                                        <article class="module-post video-thumb">
                                            <figure>
                                               <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/slider-small-2.jpg">
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="projectitem">
                                        <article class="module-post video-thumb">
                                            <figure>
                                               <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/slider-small-3.jpg">
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="projectitem">
                                        <article class="module-post image-thumb">
                                            <figure>
                                               <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/slider-small-4.jpg">
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="projectitem">
                                        <article class="module-post image-thumb">
                                            <figure>
                                               <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/slider-small-5.jpg">
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="projectitem">
                                        <article class="module-post image-thumb">
                                            <figure>
                                               <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/slider-small-6.jpg">
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="projectitem">
                                        <article class="module-post image-thumb">
                                            <figure>
                                               <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/slider-small-5.jpg">
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="projectitem">
                                        <article class="module-post image-thumb">
                                            <figure>
                                               <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/slider-small-6.jpg">
                                            </figure>
                                        </article>
                                    </div>
                                    
                                    
                                </div>
                            </div>







                            <div class="ws-theme-tabs clearfix">
                                <div id="someTab">
                                  <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div role="tabpanel">

                                          <!-- Nav tabs -->
                                            <nav class="for-equal-height">
                                                <ul id="myTab" class="nav nav-tabs ws-theme-tabs-navigation" role="tablist">

                                                    <li role="presentation" class="active">
                                                        <a href="#ws-theme-tab-description" aria-controls="ws-theme-tab-description" role="tab" data-toggle="tab">
                                                            <i class="wt-icon wt-icon-info-circle" aria-hidden="true"></i>
                                                            Description
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#ws-theme-tab-itinerary" aria-controls="ws-theme-tab-itinerary" role="tab" data-toggle="tab">
                                                            <i class="wt-icon-regular wt-icon-calendar-check" aria-hidden="true"></i>
                                                            Itinerary and Direction
                                                        </a>
                                                    </li>
                                                    <!-- <li role="presentation">
                                                        <a href="#ws-theme-tab-location" aria-controls="ws-theme-tab-location" role="tab" data-toggle="tab">
                                                             <i class="wt-icon wt-icon-location-arrow" aria-hidden="true"></i>
                                                            Location
                                                        </a>
                                                    </li> -->
                                                    <li role="presentation">
                                                        <a href="#ws-theme-tab-reviews" aria-controls="ws-theme-tab-reviews" role="tab" data-toggle="tab">
                                                            <i class="wt-icon wt-icon-star" aria-hidden="true"></i>
                                                            Reviews
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#trip-ws-theme-tab-faq" aria-controls="ws-theme-tab-trip-faq" role="tab" data-toggle="tab">
                                                             <i class="wt-icon wt-icon-question-circle" aria-hidden="true"></i>
                                                            Trip FAQ
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>  
                                          <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="ws-theme-tab-description">
                                                    <div class="ws-theme-description-overview">
                                                        <p>We have only one of the best <strong>Royal trek</strong> in Nepal near Pokhara north of the <strong>Annapurna region.</strong> This is one of the short trek follows a shrub like path along the foothills of valley. The Royal trek is named because Prince Charles and his 90 person entourage had explored this route in the early eighties. The royal treks provide the opportunities for meaningful cultural experience with the diverse miz of peoples and cultural that inhabit this region.</p>
                                                        
                                                        <p><strong>The Royal treks </strong>is star from attractive village from vijiayapur Gurung hamlet village .During the trek u can enjoy spectacular views of the powerfully build hillside rice terraces and the magnificent Annapurna Himalayan range with all snow cover mountain. This trip is end at the scenic began as Lake Which is 30 kilo meter from Pokhara down.</p>

                                                        <p><strong>The Royal treks </strong>trip is basically recommended for beginners who are restricted be time to trek longer.</p>

                                                        <p>Royal treks in front of a true picture of uniqueness and allowing us the chance to capture the traditional life styles of the tribes whose ancient religious practices and traditions have remained unchanged for thousands of year.</p>

                                                        <p>Compare to <strong>other trekking areas in Annapurna region</strong> of the Royal trekking route is less crowded, so you can get more close nature, cultural and life styles.</p>
                                                        
                                                    </div>
                                                    <div class="availabily-wrapper" id="availabily-wrapper">
                                                        <div class="section-title text-left">
                                                            <h4 class="mt-30">Availability</h4>
                                                        </div>
                                                        <ul class="availabily-list">
                                                            <li class="availabily-heading clearfix">
                                                                <div class="date-from">
                                                                    start
                                                                </div>
                                                                <div class="date-to">
                                                                    end
                                                                </div>
                                                                <div class="status">
                                                                    status
                                                                </div>
                                                                <div class="price">
                                                                    price
                                                                </div>
                                                                <div class="action">
                                                                    &nbsp;
                                                                </div>
                                                            </li>
                                                            <li class="availabily-content clearfix">
                                                                <div class="date-from">
                                                                    <span class="availabily-heading-label">start:</span> Monday
                                                                    <span>March 7, 2016</span>
                                                                </div>
                                                                <div class="date-to">
                                                                    <span class="availabily-heading-label">end:</span> Thursday
                                                                    <span>March 10, 2016</span>
                                                                </div>
                                                                <div class="status">
                                                                    <span class="availabily-heading-label">status:</span> seats left
                                                                    <span>15</span>
                                                                </div>
                                                                <div class="price">
                                                                    <span class="availabily-heading-label">price:</span>
                                                                    <del>
                                                                        <span> $ 400 </span>
                                                                    </del>
                                                                    <span class="person-count">
                                                                        <ins>
                                                                            <span>
                                                                                $ 300
                                                                            </span>
                                                                        </ins>/Person
                                                                    </span>
                                                                </div>
                                                                <div class="action">
                                                                    <a href="#" class="btn btn-outline-primary btn-sm rounded-0">Book now</a>
                                                                </div>
                                                            </li>
                                                            <li class="availabily-content clearfix">
                                                                <div class="date-from">
                                                                    <span class="availabily-heading-label">start:</span> Saturday
                                                                    <span>March 26, 2016</span>
                                                                </div>
                                                                <div class="date-to">
                                                                    <span class="availabily-heading-label">end:</span> Tuesday
                                                                    <span>March 29, 2016</span>
                                                                </div>
                                                                <div class="status">
                                                                    <span class="availabily-heading-label">status:</span> seats left
                                                                    <span>20</span>
                                                                </div>
                                                                <div class="price">
                                                                    <span class="availabily-heading-label">price:</span>
                                                                    <span>$1400</span>
                                                                </div>
                                                                <div class="action">
                                                                    <a href="#" class="btn btn-outline-primary btn-sm rounded-0">Book now</a>
                                                                </div>
                                                            </li>

                                                            <li class="availabily-content sold-out clearfix">
                                                                <div class="date-from">
                                                                    <span class="availabily-heading-label">start:</span> Sunday
                                                                    <span>April 10, 2016</span>
                                                                </div>
                                                                <div class="date-to">
                                                                    <span class="availabily-heading-label">end:</span> Wednesday
                                                                    <span>April 13, 2016</span>
                                                                </div>
                                                                <div class="status">
                                                                    <span class="availabily-heading-label">status:</span>
                                                                    <span class="text-danger">sold-out</span>
                                                                </div>
                                                                <div class="price">
                                                                    <span class="availabily-heading-label">price:</span>
                                                                    <span>$1300</span>
                                                                </div>
                                                                <div class="action">
                                                                    <a href="#" class="btn btn-outline-primary btn-sm rounded-0">Book now</a>
                                                                </div>
                                                            </li>
                                                            <li class="availabily-content clearfix">
                                                                <div class="date-from">
                                                                    <span class="availabily-heading-label">start:</span> Friday
                                                                    <span>April 18, 2016</span>
                                                                </div>
                                                                <div class="date-to">
                                                                    <span class="availabily-heading-label">end:</span> Monday
                                                                    <span>April 21, 2016</span>
                                                                </div>
                                                                <div class="status">
                                                                    <span class="availabily-heading-label">status:</span> seats left
                                                                    <span>4</span>
                                                                </div>
                                                                <div class="price">
                                                                    <span class="availabily-heading-label">price:</span>
                                                                    <span>$1458</span>
                                                                </div>
                                                                <div class="action">
                                                                    <a href="#" class="btn btn-outline-primary btn-sm rounded-0">Book now</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <table class="tours-tabs_table pt-15">
                                                       <tbody>
                                                          <tr>
                                                             <th><strong>DEPARTURE/RETURN LOCATION</strong></th>
                                                             <td>San Francisco International Airport</td>
                                                          </tr>
                                                          <tr>
                                                             <th><strong>DEPARTURE TIME</strong></th>
                                                             <td>Please arrive at least&nbsp;2 hours before the flight.</td>
                                                          </tr>
                                                          <tr>
                                                             <th><strong>INCLUDED</strong></th>
                                                             <td>
                                                                <table>
                                                                   <tbody>
                                                                      <tr>
                                                                         <td>
                                                                            <i class="wt-icon wt-icon-check icon-tick icon-tick--on"></i>
                                                                             Airport / Hotel / Airport pick up &nbsp; drop by private car or van. It is depend of the group.
                                                                         </td>
                                                                         <td>
                                                                            <i class="wt-icon wt-icon-check icon-tick icon-tick--on"></i>
                                                                            2 nights accommodation in 2/3 star category hotel in Kathmandu located tourist center, or up to you.
                                                                        </td>

                                                                         <td>
                                                                            <i class="wt-icon wt-icon-check icon-tick icon-tick--on"></i>
                                                                            Meals on full board (Breakfast, lunch and dinner) during the in trekking.
                                                                        </td>
                                                                         <td>
                                                                            <i class="wt-icon wt-icon-check icon-tick icon-tick--on"></i>
                                                                            Local fresh fruits like orange, apple, banana and grape etc.
                                                                        </td>

                                                                         <td>
                                                                            <i class="wt-icon wt-icon-check icon-tick icon-tick--on"></i>
                                                                            All accommodations during the trek
                                                                        </td>
                                                                         <td>
                                                                            <i class="wt-icon wt-icon-check icon-tick icon-tick--on"></i>Annapurna Trekking Map
                                                                        </td>

                                                                      </tr>

                                                                   </tbody>
                                                                </table>
                                                             </td>
                                                          </tr>
                                                          <tr>
                                                             <th><b>NOT INCLUDED</b></th>
                                                             <td>
                                                                <table>
                                                                   <tbody>
                                                                      <tr>
                                                                         <td>
                                                                            <i class="wt-icon wt-icon-times icon-tick icon-tick--off"></i>
                                                                            Entrance fees
                                                                        </td>
                                                                         <td>
                                                                            <i class="wt-icon wt-icon-times icon-tick icon-tick--off"></i>
                                                                            Guide&nbsp;gratuity
                                                                        </td>
                                                                        <td>
                                                                            <i class="wt-icon wt-icon-times icon-tick icon-tick--off"></i>
                                                                            Meals yourself Kathmandu (L+D).
                                                                        </td>
                                                                         <td>
                                                                            <i class="wt-icon wt-icon-times icon-tick icon-tick--off"></i>
                                                                            Your Travel insurance.
                                                                        </td>

                                                                         <td>
                                                                            <i class="wt-icon wt-icon-times icon-tick icon-tick--off"></i>
                                                                            International airfare.
                                                                        </td>
                                                                         <td>
                                                                            <i class="wt-icon wt-icon-times icon-tick icon-tick--off"></i>
                                                                            Nepal entry visa ( You can obtain a visa easily upon your arrival at Nepal’s Airport in Kathmandu).
                                                                        </td>
                                                                        <td>
                                                                            <i class="wt-icon wt-icon-times icon-tick icon-tick--off"></i>
                                                                            All kind drinks (Alcoholic, hot and cold drinks)
                                                                        </td>
                                                                         <td>
                                                                            <i class="wt-icon wt-icon-times icon-tick icon-tick--off"></i>
                                                                            Personal shopping and laundry etc.
                                                                        </td>
                                                                      </tr>
                                                                   </tbody>
                                                                </table>
                                                             </td>
                                                          </tr>
                                                       </tbody>
                                                    </table>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="ws-theme-tab-itinerary">
                                                    <div class="itinerary-item intro-item">
                                                        <h5>Introduction</h5>
                                                        <div class="intro-item-body">
                                                            <p>Elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Orci sagittis eu volutpat odio facilisis. Quis risus sed vulputate odio ut enim blandit. Nunc sed augue lacus viverra vitae. Odio facilisis mauris sit amet massa. Tincidunt lobortis feugiat vivamus at augue. Arcu bibendum at varius vel pharetra vel.</p>
                                                        </div>
                                                    </div>

                                                    <!-- google map api key: AIzaSyDdj6lQ4A1DdZCbTk4EDPtSE4PI5yadxZE -->
                                                    <iframe id="location-map" src="https://www.google.com/maps/d/embed?mid=1W6wzNwgZHkX_JsIxLT27lrP6pLqwzeRM" width="100%" height="480" style="min-width:320px;min-height:400px;"></iframe>

                                                    <div class="itinerary-day-label mt-40">
                                                        <span>Day</span>
                                                    </div>
                                                    <div id="ws-theme-timeline" class="ws-theme-container">
                                                        <div class="panel-group number-accordion">
                                                            <div class="panel ws-theme-timeline-block">
                                                              <div class="panel-heading" data-toggle="collapse" data-parent=".number-accordion" href="#number-accordion1">
                                                              <div class="ws-theme-timeline-img">
                                                                    1
                                                                </div> 
                                                                <h4 class="panel-title">Arrive in Kathmandu airport and transfer your Hotel (1350m) </h4>
                                                              </div>
                                                              <div id="number-accordion1" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                  <p>Meet the international Airport and We will transferred to our hotel after hotel we will invite to visit our office give the some briefing about the each day program with tomorrow departure time etc . Overnight in Kathmandu.</p>
                                                                  <span class="time">Jan 14</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="panel ws-theme-timeline-block">
                                                              <div class="panel-heading collapsed" data-toggle="collapse" data-parent=".number-accordion" href="#number-accordion2">
                                                              <div class="ws-theme-timeline-img">
                                                                    2
                                                                </div> 
                                                                <h4 class="panel-title">Fly from Kathmandu to Pokhara and drive to Nayapul 50km and Trek to hot sparing (1730m)</h4>
                                                              </div>
                                                              <div id="number-accordion2" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                  <p>After having breakfast early in the morning with  fly to Pokhara and drive to Nayapul and It is about 1 hour:20 minute to get there via car or van , it is depend of the our group. We start our trekking from Nayapul. During the hike we pass many local villages, tea houses, gentle green rolling hills, rivers and local people.</p>

                                                                    <p> After crossing the Modhi Khola and walk to Nepalese flat , after rich the saylu bazzar then trail begins to climb up quite steeply on a stone staircase that is more than 1600 steps then we can see Mt. Annapurna south (7219m.) and Hiunchuli (6441m.).Pokhara to Ghandurk Village(1960m, 4/5 hours walking)and then overnight at Lodge</p>
                                                                    <span class="time">Jan 14</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="panel ws-theme-timeline-block">
                                                              <div class="panel-heading collapsed" data-toggle="collapse" data-parent=".number-accordion" href="#number-accordion3">
                                                              <div class="ws-theme-timeline-img">
                                                                    3
                                                                </div> 
                                                                <h4 class="panel-title">Trek Ghadruk Village to Sinuwa(1900m)</h4>
                                                              </div>
                                                              <div id="number-accordion3" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                  <p>After morning breakfast in Ghandurk Village trail slightly goes uphill to Ghandurng Hill. 2010m last permanent arrangement in the valley and the trail descends down to stone steps to kimrung khlao than ascends to Chhumrung village . After a short stop, we trek to Chumrung by passing the Sinuwa dada. Overnight in lodge</p>
                                                                    <span class="time">Jan 14</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                        </div>


                                                        <div class="ws-theme-timeline-block">
                                                            <div class="ws-theme-timeline-img">
                                                                1
                                                            </div> 

                                                            <div class="ws-theme-timeline-content">
                                                                <h4>Arrive in Kathmandu airport and transfer your Hotel (1350m)</h4>
                                                                <p>Meet the international Airport and We will transferred to our hotel after hotel we will invite to visit our office give the some briefing about the each day program with tomorrow departure time etc . Overnight in Kathmandu.</p>
                                                                <span class="cd-date">Jan 14</span>
                                                            </div>
                                                        </div>

                                                        <div class="ws-theme-timeline-block">
                                                            <div class="ws-theme-timeline-img">
                                                                2
                                                            </div> 

                                                            <div class="ws-theme-timeline-content">
                                                                <h4>Fly from Kathmandu to Pokhara and drive to Nayapul 50km and Trek to hot sparing (1730m)</h4>
                                                                <p>After having breakfast early in the morning with  fly to Pokhara and drive to Nayapul and It is about 1 hour:20 minute to get there via car or van , it is depend of the our group. We start our trekking from Nayapul. During the hike we pass many local villages, tea houses, gentle green rolling hills, rivers and local people.</p>

                                                                <p> After crossing the Modhi Khola and walk to Nepalese flat , after rich the saylu bazzar then trail begins to climb up quite steeply on a stone staircase that is more than 1600 steps then we can see Mt. Annapurna south (7219m.) and Hiunchuli (6441m.).Pokhara to Ghandurk Village(1960m, 4/5 hours walking)and then overnight at Lodge</p>
                                                                <span class="cd-date">Jan 18</span>
                                                            </div>
                                                        </div>

                                                        <div class="ws-theme-timeline-block">
                                                            <div class="ws-theme-timeline-img">
                                                                3
                                                            </div> 

                                                            <div class="ws-theme-timeline-content">
                                                                <h4>Trek Ghadruk Village to Sinuwa(1900m)</h4>
                                                                <p>After morning breakfast in Ghandurk Village trail slightly goes uphill to Ghandurng Hill. 2010m last permanent arrangement in the valley and the trail descends down to stone steps to kimrung khlao than ascends to Chhumrung village . After a short stop, we trek to Chumrung by passing the Sinuwa dada. Overnight in lodge</p>
                                                                <span class="cd-date">Jan 24</span>
                                                            </div>
                                                        </div>

                                                        <div class="ws-theme-timeline-block">
                                                            <div class="ws-theme-timeline-img cd-location">
                                                                4
                                                            </div> 

                                                            <div class="ws-theme-timeline-content">
                                                                <h4>Trek  to Deurali dada (3300m)</h4>
                                                                <p>Leaving Sinuwa, The path from Sinuwa will be rather smooth. The track passes all through thick rhododendron unglues up to Khuldighar. Subsequently, we walk down a lengthy and vertical stone steps into bamboo and rhododendron jungles through which we clim up to Deurali.</p>
                                                                <span class="cd-date">Feb 14</span>
                                                            </div>
                                                        </div>
                                                        <div class="ws-theme-timeline-block">
                                                            <div class="ws-theme-timeline-img cd-movie">
                                                                5
                                                            </div> 

                                                            <div class="ws-theme-timeline-content">
                                                                <h4>Trek from Deruli  to  /Annapurna base camp (4130m) </h4>
                                                                <p>The trail leads you uphill to Annapurna base camp at 4130m and it will take 3/4 hours and better to do early in the day before clouds roll in. if there is snow trail is difficult to follow. There are amazing views of the south facade of Annapurna. Annapurna Base Camp grips a stunning view of peaks setting 360 degrees. We will get to view Annapurna I, Machhapuchhre, Annapurna south, Hiunchuli and a number of more peaks. Overnight we will stay at Annapurna Base Camp.</p>
                                                                <span class="cd-date">Feb 26</span>
                                                            </div>
                                                        </div>
                                                    </div> <!-- ws-theme-timeline -->
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="ws-theme-tab-reviews">
                                                    <div class="content reviews">
                                                       <div id="comments" class="comments-area">
                                                          <h2 class="comments-title">
                                                             5 Reviews        
                                                          </h2>
                                                            <div class="review-overall">
                                                                <h5>Excellent</h5>
                                                                <p class="review-overall-point"><span>4.6</span> / 5.0</p>
                                                                <p class="review-overall-recommend">90% recommend this package</p>
                                                            </div>
                                                          <ol class="comment-list">
                                                             <li class="comment byuser comment-author-tzwordpress bypostauthor even thread-even depth-1" id="li-comment-135">
                                                                <article id="comment-135" class="comments">
                                                                   <div class="comment-meta comment-author vcard">
                                                                      <img src="<?php echo get_template_directory_uri();?>/assets/img/desktop-1756727_640-150x150.jpg" alt="avatar">
                                                                   </div>
                                                                   <div class="comment-content">
                                                                      <h5 class="fn"><a href="https://www.templaza.com/" rel="external nofollow" class="url">John Doe</a></h5>
                                                                      <div class="content">
                                                                         <span class="time">4:22 am</span>
                                                                         <span class="sp"> -</span>
                                                                         <span class="date">Jul 4, 2017</span>
                                                                         <span class="sp"> /</span>
                                                                         <a rel="nofollow" class="comment-reply-link" href="" aria-label="Reply to John Doe">Reply</a>                        
                                                                      </div>
                                                                      <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                                      <div class="ws-theme-average-rating rating">
                                                                         <div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i></div>
                                                                      </div>
                                                                   </div>
                                                                   <!-- .comment-content -->
                                                                   <div class="clearfix"></div>
                                                                </article>
                                                                <!-- #comment-## -->
                                                             </li>
                                                             <!-- #comment-## -->
                                                             <li class="comment byuser comment-author-tzwordpress bypostauthor odd alt thread-odd thread-alt depth-1" id="li-comment-137">
                                                                <article id="comment-137" class="comments">
                                                                   <div class="comment-meta comment-author vcard">
                                                                      <img src="<?php echo get_template_directory_uri();?>/assets/img/desktop-1756727_640-150x150.jpg" alt="avatar">
                                                                   </div>
                                                                   <div class="comment-content">
                                                                      <h5 class="fn"><a href="https://www.templaza.com/" rel="external nofollow" class="url">John Doe</a></h5>
                                                                      <div class="content">
                                                                         <span class="time">4:24 am</span>
                                                                         <span class="sp"> -</span>
                                                                         <span class="date">Jul 4, 2017</span>
                                                                         <span class="sp"> /</span>
                                                                         <a rel="nofollow" class="comment-reply-link" href="" aria-label="Reply to John Doe">Reply</a>                        
                                                                      </div>
                                                                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                                      <div class="ws-theme-average-rating rating">
                                                                         <div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i></div>
                                                                      </div>
                                                                   </div>
                                                                   <!-- .comment-content -->
                                                                   <div class="clearfix"></div>
                                                                </article>
                                                                <!-- #comment-## -->
                                                             </li>
                                                             <!-- #comment-## -->
                                                             <li class="comment byuser comment-author-tzwordpress bypostauthor even thread-even depth-1" id="li-comment-138">
                                                                <article id="comment-138" class="comments">
                                                                   <div class="comment-meta comment-author vcard">
                                                                      <img src="<?php echo get_template_directory_uri();?>/assets/img/desktop-1756727_640-150x150.jpg" alt="avatar">
                                                                   </div>
                                                                   <div class="comment-content">
                                                                      <h5 class="fn"><a href="https://www.templaza.com/" rel="external nofollow" class="url">John Doe</a></h5>
                                                                      <div class="content">
                                                                         <span class="time">4:24 am</span>
                                                                         <span class="sp"> -</span>
                                                                         <span class="date">Jul 4, 2017</span>
                                                                         <span class="sp"> /</span>
                                                                         <a rel="nofollow" class="comment-reply-link" href="" aria-label="Reply to John Doe">Reply</a>                        
                                                                      </div>
                                                                      <p>Good Tour</p>
                                                                      <div class="ws-theme-average-rating rating">
                                                                         <div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i></div>
                                                                      </div>
                                                                   </div>
                                                                   <!-- .comment-content -->
                                                                   <div class="clearfix"></div>
                                                                </article>
                                                                <!-- #comment-## -->
                                                             </li>
                                                             <!-- #comment-## -->
                                                             <li class="comment byuser comment-author-tzwordpress bypostauthor odd alt thread-odd thread-alt depth-1" id="li-comment-139">
                                                                <article id="comment-139" class="comments">
                                                                   <div class="comment-meta comment-author vcard">
                                                                      <img src="<?php echo get_template_directory_uri();?>/assets/img/desktop-1756727_640-150x150.jpg" alt="avatar">
                                                                   </div>
                                                                   <div class="comment-content">
                                                                      <h5 class="fn"><a href="https://www.templaza.com/" rel="external nofollow" class="url">John Doe</a></h5>
                                                                      <div class="content">
                                                                         <span class="time">4:25 am</span>
                                                                         <span class="sp"> -</span>
                                                                         <span class="date">Jul 4, 2017</span>
                                                                         <span class="sp"> /</span>
                                                                         <a rel="nofollow" class="comment-reply-link" href="" aria-label="Reply to John Doe">Reply</a>                        
                                                                      </div>
                                                                      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                                      <div class="ws-theme-average-rating rating">
                                                                         <div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i></div>
                                                                      </div>
                                                                   </div>
                                                                   <!-- .comment-content -->
                                                                   <div class="clearfix"></div>
                                                                </article>
                                                                <!-- #comment-## -->
                                                             </li>
                                                             <!-- #comment-## -->
                                                             <li class="comment byuser comment-author-tzwordpress bypostauthor even thread-even depth-1" id="li-comment-140">
                                                                <article id="comment-140" class="comments">
                                                                   <div class="comment-meta comment-author vcard">
                                                                      <img src="<?php echo get_template_directory_uri();?>/assets/img/desktop-1756727_640-150x150.jpg" alt="avatar">
                                                                   </div>
                                                                   <div class="comment-content">
                                                                      <h5 class="fn"><a href="https://www.templaza.com/" rel="external nofollow" class="url">John Doe</a></h5>
                                                                      <div class="content">
                                                                         <span class="time">4:25 am</span>
                                                                         <span class="sp"> -</span>
                                                                         <span class="date">Jul 4, 2017</span>
                                                                         <span class="sp"> /</span>
                                                                         <a rel="nofollow" class="comment-reply-link" href="" aria-label="Reply to John Doe">Reply</a>                        
                                                                      </div>
                                                                      <p>Pellentesque pulvinar dolor eu erat aliquet iaculis. Ut lacus lectus, scelerisque at mi id, pharetra mollis elit. Fusce diam mi, laoreet non luctus et, iaculis a risus. Phasellus volutpat ipsum id facilisis sagittis. Integer eget laoreet nibh. Nullam fringilla sem rhoncus felis suscipit accumsan.</p>
                                                                      <div class="ws-theme-average-rating rating">
                                                                         <div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i></div>
                                                                      </div>
                                                                   </div>
                                                                   <!-- .comment-content -->
                                                                   <div class="clearfix"></div>
                                                                </article>
                                                                <!-- #comment-## -->
                                                             </li>
                                                             <!-- #comment-## -->
                                                          </ol>
                                                          <!-- .comment-list -->
                                                          <div class="ws-theme-CommentForm">
                                                             <div id="respond" class="comment-respond">
                                                                <h3 id="reply-title" class="comment-reply-title">
                                                                    Write a Review
                                                                    <small>
                                                                        <a rel="nofollow" id="cancel-comment-reply-link" href="" style="display:none;">
                                                                            Cancel reply
                                                                        </a>
                                                                    </small>
                                                                </h3>
                                                                <form action="" method="post" id="commentform" class="comment-form">
                                                                   <p class="comment-notes">
                                                                        <span id="email-notes">
                                                                            Your email address will not be published.
                                                                        </span>Required fields are marked 
                                                                        <span class="required">*</span>
                                                                    </p>
                                                                   <p class="comment-form-comment"> 
                                                                        <textarea id="comment" name="comment" cols="90" rows="7" required="required" placeholder="Leave your comment...">
                                                                            
                                                                        </textarea>
                                                                    </p>
                                                                   <div class="content-form">
                                                                        <p class="comment-form-author clearfix">
                                                                            <input id="author" name="author" type="text" value="" size="30" aria-required="true" placeholder="Your Name">
                                                                        </p>
                                                                        <p class="comment-form-email clearfix">
                                                                            <input id="email" name="email" type="text" value="" size="30" aria-describedby="email-notes" aria-required="true" placeholder="Your Email">
                                                                        </p>
                                                                        <p class="comment-form-url clearfix">
                                                                            <input id="url" name="url" type="text" value="" size="30" aria-required="true" placeholder="Website">
                                                                        </p>
                                                                   </div>
                                                                   <!-- review Fields: Start -->
                                                                   <p class="ws-theme-field" class="clearfix">
                                                                        <div id="wp-travel_rate">
                                                                            
                                                                        </div>
                                                                   <input type="hidden" name="ws-theme-rating" value="0">
                                                                   </p>
                                                                   <!-- review Fields: End -->

                                                                   <p class="form-submit">
                                                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit"> 
                                                                   </p>
                                                                </form>
                                                             </div>
                                                             <!-- #respond -->
                                                          </div>
                                                       </div>
                                                       <!-- .comments-area -->
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="trip-ws-theme-tab-faq">
                                                    
                                                  <div class="panel-group i-accordion">
                                                    <div class="panel panel-success">
                                                      <div class="panel-heading" data-toggle="collapse" data-parent=".i-accordion" href="#faq1">
                                                        <h4 class="panel-title">Do I need a visa to enter Nepal ? <i class="wt-icon wt-icon-question" aria-hidden="true"></i></h4>
                                                      </div>
                                                      <div id="faq1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                          <p>Sure, You could observe for a visa earlier than you travel or upon arrival on the airport. please notice, Nepal visa are valid from the date you arrive within the country. For extra information about visa, please go to visit https://skynet.wensolutions.com/ws-theme-addon</p>
                                                        </div>
                                                      </div>
                                                      </div>
                                                    <div class="panel panel-success">
                                                      <div class="panel-heading" data-toggle="collapse" data-parent=".i-accordion" href="#faq2">
                                                        <h4 class="panel-title">Can I get a VISA on arrival at Kathmandu airport ?<i class="wt-icon wt-icon-question-circle" aria-hidden="true"></i></h4>
                                                      </div>
                                                      <div id="faq2" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                          <p>Yes, you can get your entrance visa at Tribhuvan International Airport (TIA), Kathmandu upon your landing.</p>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-success">
                                                      <div class="panel-heading" data-toggle="collapse" data-parent=".i-accordion" href="#faq3">
                                                        <h4 class="panel-title">How can I get there?<i class="wt-icon wt-icon-question-circle" aria-hidden="true"></i></h4>
                                                      </div>
                                                      <div id="faq3" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                          <p>Nepal has precise flight connections from united kingdom. There are several direct flights to Nepal from the UK. Although, there aren’t any direct flights from the london to kathmandu, nepal, you could choose to fly both through new delhi, dubai, muscat, bahrain or bangkok. Flight times range among 12-14 hours depending on which airlines you are flying with.</p>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-success">
                                                      <div class="panel-heading" data-toggle="collapse" data-parent=".i-accordion" href="#faq4">
                                                        <h4 class="panel-title">When is the best time to go to Nepal?<i class="wt-icon wt-icon-question-circle" aria-hidden="true"></i></h4>
                                                      </div>
                                                      <div id="faq4" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                          <p>Usually, nepal’s weather is split into 3 seasons – summer season winter and the monsoon. Normally, winter season (october to february) is the desired and considered as quality time for lots travelers to go to travel. The Himalayas and Mountain stations are explored throughout the summer time (March to May additionally). The monsoon season (june to September) brings the heavy rain.</p>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-success">
                                                      <div class="panel-heading" data-toggle="collapse" data-parent=".i-accordion" href="#faq5">
                                                        <h4 class="panel-title">Do I want a travel insurance?<i class="wt-icon wt-icon-question-circle" aria-hidden="true"></i></h4>
                                                      </div>
                                                      <div id="faq5" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                          <p>Oh yes, a few kind of journey coverage is relatively endorsed. maximum tour insurance covers emergency flights, clinical prices, and theft or lack of possessions. If you plan to move rafting or hiking, make sure your insurance covers these “dangerous sports.” keep in mind to keep your receipts to make claims. With a view to make claims on misplaced or stolen gadgets, you’ll need a police file issued in Nepal.</p>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-success">
                                                      <div class="panel-heading" data-toggle="collapse" data-parent=".i-accordion" href="#faq6">
                                                        <h4 class="panel-title">What is the local currency and what currency should I take?<i class="wt-icon wt-icon-question-circle" aria-hidden="true"></i></h4>
                                                      </div>
                                                      <div id="faq6" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                          <p>The Nepalese rupee is the local money. It’s usually great to change your money once you arrive in Nepal. Euros, sterling and US dollars are all simple way to exchange for rupees at local banks and money exchange. The most of credit cards and debit cards are extensively commonplace at the ATMs shops, Hotels and eating places in tourist area.</p>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-success">
                                                      <div class="panel-heading" data-toggle="collapse" data-parent=".i-accordion" href="#faq7">
                                                        <h4 class="panel-title">What is there to see and do?<i class="wt-icon wt-icon-question-circle" aria-hidden="true"></i></h4>
                                                      </div>
                                                      <div id="faq7" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                          <p>The Himalayan country, Nepal has lots to special offer to travellers. Nepal’s attractions are numerous and diverse, from its popular monuments and ancient sites just like the Kathmandu durbar square, Pashupatinath temple and the wildlife reserves like chitwan national park in which you can spot and meet many natural wildlife. You  can looking to trekking within the Himalayas, exploring culture, historical past attractions or relax &npsb; unwind within the peace &nbsp; tranquility Nepal has them all.</p>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>      
                                </div> 

                                <div class="wp-travel-related-posts wp-travel-container-wrap clearfix">
                                     <h4 class="mb-15 text-dark">Related Trips</h4>
                                    <div class="wp-travel-itinerary-items"> 
                                        <div class="ws-listing-trips listing-grid-view three-column wow fadeInUp clearfix">
                                            <div class="card clearfix">
                                                <div class="featured-image">
                                                <div class="wp-travel-offer">
                                                    <span>Offer</span>
                                                </div>
                                                <a href="#">
                                                <div class="feature-image-thumb">
                                                <p class="time">7 Days 8 Nights</p>
                                                <picture>
                                                  <source media="(min-width: 1200px)" srcset="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/slide-767.jpg">
                                                 <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/zermatt-992.jpg">
                                                  <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/zermatt-smallscreen.jpg" alt="">
                                                </picture>
                                                </div>
                                                </a>
                                                </div>
                                              <div class="card-body">
                                                <h3 class="card-title"><a href="#">Switzerland</a></h3>
                                                
                                                <p class="avilable-date">Availability: Jan 18’ - Dec 16’</p>
                                                <p class="card-text">Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam[...]</p>
                                               </div> 
                                               <aside class="right-wrapper">
                                                    
                                                    <div class="prices clearfix">
                                                        <p class="from">from <del class="hidden-above-md">$4,300</del></p>
                                                        <p class="all-prices"><del class="visible-under-md">$4,300</del><b>$3500</b></p>

                                                    </div>
                                                    <div class="ws-rating-more">
                                                    <div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i><span>2 Review</span></div>

                                                    <div class="dream-btn-wrap">
                                                        <a href="#" class="btn btn-dream">More Info</a>
                                                    </div>
                                                    </div>
                                                </aside>
                                                
                                            </div>


                                            <div class="card clearfix">
                                                <div class="featured-image">
                                                <div class="wp-travel-offer">
                                                    <span>Offer</span>
                                                </div>
                                                <a href="#">
                                                <div class="feature-image-thumb">
                                                <p class="time">7 Days 8 Nights</p>
                                                <picture>
                                                  <source media="(min-width: 1200px)" srcset="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/slide-767.jpg">
                                                 <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/zermatt-992.jpg">
                                                  <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/zermatt-smallscreen.jpg" alt="">
                                                </picture>
                                                </div>
                                                </a>
                                                </div>
                                              <div class="card-body">
                                                <h3 class="card-title"><a href="#">Switzerland</a></h3>
                                                
                                                <p class="avilable-date">Availability: Jan 18’ - Dec 16’</p>
                                                <p class="card-text">Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam[...]</p>
                                               </div> 
                                               <aside class="right-wrapper">
                                                    
                                                    <div class="prices clearfix">
                                                        <p class="from">from <del class="hidden-above-md">$4,300</del></p>
                                                        <p class="all-prices"><del class="visible-under-md">$4,300</del><b>$3500</b></p>

                                                    </div>
                                                    <div class="ws-rating-more">
                                                    <div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i><span>2 Review</span></div>

                                                    <div class="dream-btn-wrap">
                                                        <a href="#" class="btn btn-dream">More Info</a>
                                                    </div>
                                                    </div>
                                                </aside>
                                                
                                            </div>
                            

                                           <div class="card clearfix">
                                                <div class="featured-image">
                                                <div class="wp-travel-offer">
                                                    <span>15% off</span>
                                                </div>
                                                <a href="#">
                                                <div class="feature-image-thumb">
                                                <p class="time">7 Days 8 Nights</p>
                                                <picture>
                                                  <source media="(min-width: 1200px)" srcset="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/slide-767.jpg">
                                                 <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/zermatt-992.jpg">
                                                  <img src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/img/zermatt-smallscreen.jpg" alt="">
                                                </picture>
                                                </div>
                                                </a>
                                                </div>
                                              <div class="card-body">
                                                <h3 class="card-title"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h3>
                                                
                                                <p class="avilable-date">Availability: Jan 18’ - Dec 16’</p>
                                                <p class="card-text">Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam[...]</p>
                                               </div>
                                               <aside class="right-wrapper">
                                                    
                                                    <div class="prices clearfix">
                                                        <p class="from">from <del class="hidden-above-md">$4,300</del></p>
                                                        <p class="all-prices"><del class="visible-under-md">$4,300</del><b>$3500</b></p>

                                                    </div>
                                                    <div class="ws-rating-more">
                                                    <div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i><span>2 Review</span></div>

                                                    <div class="dream-btn-wrap">
                                                        <a href="#" class="btn btn-dream">More Info</a>
                                                    </div>
                                                    </div>
                                                </aside> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- ws-theme-tabs -->
                            <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination animated-buttons custom-icons">
                                    <li class="button"><a href="#0"><i>Prev</i></a></li>
                                    <li class="button"><a href="#0"><i>Next</i></a></li>
                                </ul>
                            </nav> <!-- .animated-buttons .custom-icons -->
                        </div>
               		</main>
               	</div>
               	<aside id="secondary" class="widget-area" role="complementary">
                    <!-- dark and light layout for advance form .dark-layout and .light-layout-->
                    <div class="sticky-sidebar">

                    <div class="ws-advance-booking-form ">
                        <div class="ws-theme-booking-head">
                            <div class="ws-theme-tour-contact-number">
                                <i class="wt-icon wt-icon-headphones" aria-hidden="true"></i> 
                                Call Center: <span>+1-888-22-6666</span>
                            </div>
                            <!--Total Price -->
                            <div class="ws-theme-tour-price ">
                                <span class="ws-theme-tour-total-price">
                                    Total:
                                    <span class="total-price">
                                    <span class="total_all_price">
                                    $1,050.00</span>
                                    </span>
                                </span>
                            </div>
                            <!--End Total Price -->
                        </div>
                        <nav class="for-equal-height">
                            <ul id="booking-tab" class="nav nav-tabs ws-theme-tabs-navigation" role="tablist">

                                <li role="presentation" class="active">
                                    <a href="#ws-theme-tab-booking-form" aria-controls="ws-theme-tab-booking-form" role="tab" data-toggle="tab">
                                        Booking Form
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#ws-theme-tab-enquiry-form" aria-controls="ws-theme-tab-enquiry-form" role="tab" data-toggle="tab">
                                        Enquiry Form
                                    </a>
                                </li>
                            </ul>
                        </nav> 
                        <div class="tab-content ">
                            <div role="tabpanel" class="tab-pane active" id="ws-theme-tab-booking-form">
                                 <div class="form-content-wrapper">
                                    <div class="form-top-wrapper">
                                        <div class="form-content clearfix">
                                          <label for="ws-full-name">Full Name</label>
                                          <input type="text" id="ws-full-name" name="name" />
                                        </div>
                                        <div class="form-content clearfix">
                                          <label for="ws-email">Your Email</label>
                                          <input type="email" id="ws-email" name="email" />
                                        </div>
                                        <div class="form-content clearfix">
                                          <label for="ws-number">Contact Number</label>
                                          <input type="tel" id="ws-number" name="number" />
                                        </div>

                                        <div class="form-content clearfix">
                                          <label for="ws-date">Departure Date</label>
                                          <input type="text" id="ws-date" name="booking date" />
                                        </div>
                                        <div class="form-content clearfix">
                                            <div class="group-number-count">
                                                <label>Adults</label>                                                        
                                                <div class="ws-theme-group-booking">
                                                    <div class="input-number-ticket">
                                                        <input class="input-number" name="number_adults" type="number" value="3" data-min="1" data-max="5" min="1" max="50">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group-number-count">
                                                <div class="ws-theme-book_price">
                                                    <span class="adult_price">×&nbsp;$200</span>
                                                    <span class="total_price_adults">=&nbsp;$600.00</span>
                                                </div>
                                            </div>

                                            <div class="group-number-count">
                                                <label>Children</label>                                                        
                                                <div class="ws-theme-group-booking">
                                                    <div class="input-number-ticket">
                                                        <input class="input-number" name="number_adults" type="number" value="3" data-min="1" data-max="5" min="1" max="50">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group-number-count">
                                                <div class="ws-theme-book_price">
                                                    <span class="adult_price">×&nbsp;$150</span>
                                                    <span class="total_price_adults">=&nbsp;$450.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" value="Book Now" class="button"  />
                                    </div>
                                </div>        
                            </div>
                            <div role="tabpanel" class="tab-pane" id="ws-theme-tab-enquiry-form">
                                <div class="form-content-wrapper">
                                    <div class="form-top-wrapper">
                                        <div class="form-content clearfix">
                                          <label for="ws-full-name">Full Name</label>
                                          <input type="text" id="ws-full-name" name="name" />
                                        </div>
                                        <div class="form-content clearfix">
                                          <label for="ws-email">Your Email</label>
                                          <input type="email" id="ws-email" name="email" />
                                        </div>
                                        <div class="form-content clearfix">
                                          <label for="ws-email">Your Message</label>
                                          <textarea type="text" id="ws-message" name="message" cols="10" rows="8"></textarea>
                                        </div>
                                        <input type="submit" value="Send Enquiry" class="button"  />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                    </div>
					

               	</aside>	
                </div>
                <!--container -->
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

    <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyAyAd1GXBTrz8mNRZlNXKYDXA6S8QFWPl0"></script>

        <script type='text/javascript' src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/bootstrap-dropdown.min.js"></script>
        <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js'></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

        <link rel="stylesheet" type="text/css" href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/bootstrap-dropdown.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-core-css.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-clean/sm-clean.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-blue/sm-blue.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-mint/sm-mint.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-simple/sm-simple.min.css">

        <link rel="stylesheet" type="text/css" href="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/css/jquery.raty.css">
        
        <!-- air datepicker css -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.min.css">


        <!-- tooltip -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/tooltipster.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/themes/tooltipster-light.min.css">


        <!-- ion range slider -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/css/ion.rangeSlider.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/css/ion.rangeSlider.skinFlat.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/css/ion.rangeSlider.skinHTML5.min.css"> -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/css/ion.rangeSlider.skinModern.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/css/ion.rangeSlider.skinNice.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/css/ion.rangeSlider.skinSimple.min.css"> -->

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/js/ion.rangeSlider.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Readmore.js/2.2.0/readmore.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.min.js"></script>

        <script type='text/javascript' src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/WOW.js"></script>

        <script type="text/javascript" src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/js/ws-theme-addons-js.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/jquery.smartmenus.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raty/2.8.0/jquery.raty.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.25/gmaps.min.js"></script>

        <script type="text/javascript">
            jQuery(function($) {
               
               //load google map iframe 
                jQuery('ul#myTab li a[href*="#ws-theme-tab-itinerary"]').click(function() { 
                if( !jQuery( '#ws-theme-tab-itinerary' ).find('iframe').hasClass('clicked') ){
                        jQuery( '#ws-theme-tab-itinerary' ).find('iframe').attr( 'src', function ( i, val ) { return val; });
                        jQuery( '#ws-theme-tab-itinerary' ).find('iframe').addClass( 'clicked' ); // add any class to say its clicked
                    }
                });

               
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
                /**
                 * Raty - Rating Star
                 */
                    $.fn.raty.defaults.path = '../wp-content/plugins/ws-theme-addons/assets/public/images';
                    // Default size star 
                    $('#wp-travel_rate').raty({
                        round : { down: .2, full: .6, up: .8 },
                        half: true,
                        space: false,
                        score : 4.26,
                        score: function() {
                            return $(this).attr('data-rating-score');
                        }
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
                //accordion icon toggle
                $('.i-accordion').on('show.bs.collapse', function(n){
                  $(n.target).siblings('.panel-heading').find('.panel-title i').toggleClass('wt-icon-question-circle wt-icon-question');
                });
                $('.i-accordion').on('hide.bs.collapse', function(n){
                  $(n.target).siblings('.panel-heading').find('.panel-title i').toggleClass('wt-icon-question wt-icon-question-circle');
                });
                //tab
                $('#someTab').tab('show');
                $('#someTab').tabCollapse({
                    tabsClass: 'hidden-above-sm',
                    accordionClass: 'hidden-under-sm'
                });
                    //sidebar booking and wnquiry tab
                    $('.ws-advance-booking-form').tab('show');
                    //check the height of the sidetab and give same height to its pannel
                    var sideTabHeight = $('.for-equal-height').height();
                    $('.ws-theme-tabs .tab-content').css('min-height', sideTabHeight);

                $('.ws-theme-description-overview').readmore({
                    speed: 500,
                    lessLink: '<a href="#">Read less</a>',
                    afterToggle: function(trigger, element, expanded) {
                        if(! expanded) { // The "Close" link was clicked
                          $('html, body').animate( { scrollTop: element.offset().top }, {duration: 500 } );
                        }
                    }
                });

                $('.slick-image-wrapper').magnificPopup({
                  delegate: 'a', 
                  type: 'image',
                  removalDelay: 500,
                  mainClass: 'mfp-with-zoom mfp-fade',
                  zoom: {
                    enabled: true,

                    duration: 300, 
                    easing: 'ease-in-out', 
                    opener: function(openerElement) {
                      return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                  },
                  gallery:{
                    enabled: true,
                    navigateByImgClick: true,
                    arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
                    preload: [0,1], // Will preload 0 - before current, and 1 after the current image
                  },
                    image: {
                    markup: '<div class="mfp-figure">'+
                        '<div class="top-bar">'+
                        '<ul>'+
                        '<li><button class="img-close">x</button></li>'+
                        '</ul>'+
                        '</div>'+
                        '<div class="mfp-img"></div>'+
                        '<div class="mfp-bottom-bar">'+
                        '<div class="mfp-title"></div>'+
                        '</div>'+
                        '</div>'
                },
                  retina: {
                    ratio: 2, 
                    replaceSrc: function(item, ratio) {
                      return item.src.replace(/\.\w+$/, function(m) { return '@2x' + m; });
                    } 
                  }, 
                    callbacks: {
                        elementParse: function(){
                            var mfp = jQuery.magnificPopup.instance;
                            $('.img-close').off("click").on("click", function() {
                                mfp.close();
                                return false;
                            });
                        }, //elementParse
                    }, //callbacks
                      closeOnContentClick: true,
                      midClick: true 
                     // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
                });
                $('.range-datepicker').datepicker({
                    language: 'en',
                    range:true,
                    minDate: new Date() // Now can select only dates, which goes after today
                });

                $('#ws-date').datepicker({
                    language: 'en',
                    range:true,
                    minDate: new Date() // Now can select only dates, which goes after today
                });
                $("#ws-min-price").ionRangeSlider({
                    type: "double",
                    min: 500,
                    max: 20000,
                    grid: true,
                    force_edges: true
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
            wow = new WOW({
                animateClass: 'animated',
                offset: 0,
                callback: function(box) {
                    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
            });
            wow.init();
            $('.ws-travel-testimonial-slider').slick({
                dots: true,
                arrows: false,
                infinite: true,
                speed: 900,
                slidesToShow: 1,
                centerMode: true,
                variableWidth: true
            });
            $('.slider-single').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: false,
                adaptiveHeight: true,
                infinite: false,
                useTransform: true,
                speed: 400,
                asNavFor: '.slider-nav',
                autoplay: true,
                autoplaySpeed: 6000,
                infinite: true,
                cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
            });
            $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 3,
                dots: false,
                dragable: true,
                focusOnSelect: true,
                infinite: true,
                autoplay: true,
                speed: 400,
                autoplaySpeed:6000,
                asNavFor: '.slider-single',
                centerMode: true,
                responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                }, {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }]
            });
            
    });
        </script>

    </body>

    </html>