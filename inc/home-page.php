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

?><!DOCTYPE html>
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

<body <?php body_class(); ?> data-spy="scroll" data-target="#myScrollspy" data-offset="20">

<div id="onload" class="loader-active">

 <div id="stage" class="loader-spinner"></div>
<!-- <div class="loader-propeller"></div>
<div class="loader-line"></div>
<div class="loader-wheel"></div>
<div class="loader-bounce-ball"></div>
<div class="loader-bounce"></div> 
<div class="loader-text"></div>
<div class="loader-hourglass"></div>
<div class="loader-pinwheel"></div>
<div class="loader-beer"></div>
<div class="loader-clock"></div>
<div class="loader-line-ball"></div> -->

</div>

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





<div id="primary" class="content-area">
		
		<main id="main" class="site-main" role="main">
			
							
				<div class="front-page-home-sections ws-theme-addons-front-page">

			
<style type="text/css">
html {
    margin-top: 0 !important;
}
	.custom-header{
		display:none;
	}
	#breadcrumb{
		display: none;
	}
	#content{
		padding: 0;
	}
</style>


















<div id="travel-log-front-page-slider-wrap" class="ws-theme-addons-show-partial-edit-shortcut">
	<div id="featured-slider" class="featured-slider clearfix">
		<div class="ws-travel-banner slider wow fadeInUp">
			<div class="ws-theme-addons-banner-slider" style="background-image: url(http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/beach1.jpg);">
				<div class="ws-slider-image-wrapper">
					<div class="container">
						<div class="ws-featured-slider-contents">
							<h2 class="banner-title mb-30 text-white font28">The World’s Best Beach Resorts</h2>
							<p class="caption font18 text-white mb-20 line30">Brazil Beaches Tours. Rio de Janeiro &amp; Costa Verde Tour. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium…</p>
							<em>from</em>
							<div class="wp-detail-review-wrap">
				    			<div class="wp-travel-trip-detail">
									<div class="trip-price">
										<span class="person-count">
											<ins>
												<span>$ 1000</span>
											</ins>/Person
										</span>
									</div>
								</div>
							</div>
							<div class="ws-slider-buttons">
								<a href="#" class="slider-info">Read More</a>
								<a href="#" class="slider-book-now">Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ws-theme-addons-banner-slider" style="background-image: url(http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/venice.jpg);">
				<div class="ws-slider-image-wrapper">
					<div class="container">
						<div class="ws-featured-slider-contents">
							<h2 class="banner-title mb-30 text-white font28">Venice, Italy Tourism</h2>
							<p class="caption font18 text-white mb-20 line30">Discover the greatest treasures of ‘minor Venice’ on this 2-hour combined walking tour and gondola ride. Start things off on a dreamy note,…</p>
							<em>from</em>
							<div class="wp-detail-review-wrap">
				    			<div class="wp-travel-trip-detail">
									<div class="trip-price">
										<span class="person-count">
											<ins>
												<span>$ 1000</span>
											</ins>/Person
										</span>
									</div>
								</div>
							</div>
							<div class="ws-slider-buttons">
								<a href="#" class="slider-info">Read More</a>
								<a href="#" class="slider-book-now">Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ws-theme-addons-banner-slider" style="background-image: url(http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-03.jpg);">
				<div class="ws-slider-image-wrapper">
					<div class="container">
						<div class="ws-featured-slider-contents">
							<h2 class="banner-title mb-30 text-white font28">Experience The Best Trip Ever</h2>
							<p class="caption font18 text-white mb-20 line30">We are committed to offering travel services of the highest quality,
							combining our energy and enthusiasm, with our years of experience.
							Donec sollicitudin molestie malesuada.</p>
							<em>from</em>
							<div class="wp-detail-review-wrap">
				    			<div class="wp-travel-trip-detail">
									<div class="trip-price">
										<span class="person-count">
											<ins>
												<span>$ 1000</span>
											</ins>/Person
										</span>
									</div>
								</div>
							</div>
							<div class="ws-slider-buttons">
								<a href="#" class="slider-info">Read More</a>
								<a href="#" class="slider-book-now">Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ws-theme-addons-banner-slider" style="background-image: url(http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-02.jpeg);"> 
				<div class="ws-slider-image-wrapper">
					<div class="container">
						<div class="ws-featured-slider-contents">
							<h2 class="banner-title mb-30 text-white font28">Experience The Best Trip Ever</h2>
							<p class="caption font18 text-white mb-20 line30">We are committed to offering travel services of the highest quality,
							combining our energy and enthusiasm, with our years of experience.
							Donec sollicitudin molestie malesuada.</p>
							<div class="ws-slider-buttons">
								<a href="#" class="slider-info">Read More</a>
								<a href="#" class="slider-book-now">Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ws-theme-addons-banner-slider" style="background-image: url(http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/test.jpg);">
				<div class="ws-slider-image-wrapper">
					<div class="container">
						<div class="ws-featured-slider-contents">
							<h2 class="banner-title mb-30 text-white font28">Full Day Tour to The Rainbow Mountain</h2>
							<p class="caption font18 text-white mb-20 line30">Rainbow Mountain full day hike – Imperial Service. The Rainbow Mountain of Peru, also known as Winicunca, is stunning and can be seen…</p>
							<em>from</em>
							<div class="wp-detail-review-wrap">
				    			<div class="wp-travel-trip-detail">
									<div class="trip-price">
										<span class="person-count">
											<ins>
												<span>$ 1000</span>
											</ins>/Person
										</span>
									</div>
								</div>
							</div>
							<div class="ws-slider-buttons">
								<a href="#" class="slider-info">Read More</a>
								<a href="#" class="slider-book-now">Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ws-theme-addons-banner-slider" style="background-image: url(http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slider.jpeg); ">
				<div class="ws-slider-image-wrapper">
					<div class="container">
						<div class="ws-featured-slider-contents">
							<h2 class="banner-title mb-30 text-white font28">Experience The Best Trip Ever</h2>
							<p class="caption font18 text-white mb-20 line30">We are committed to offering travel services of the highest quality,
							combining our energy and enthusiasm, with our years of experience.
							Donec sollicitudin molestie malesuada.</p>
							<em>from</em>
							<div class="wp-detail-review-wrap">
				    			<div class="wp-travel-trip-detail">
									<div class="trip-price">
										<del>
											<span> $ 900 </span>
										</del>
										<span class="person-count">
											<ins>
												<span>$ 1000</span>
											</ins>/Person
										</span>
									</div>
								</div>
							</div>
							<div class="ws-slider-buttons">
								<a href="#" class="slider-info">Read More</a>
								<a href="#" class="slider-book-now">Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ws-slider-form dark-layout"><!-- dark and light layout for advance form .dark-layout and .light-layout-->
			<div class="container">
				<div class="row">
					 <!-- dark and light layout for advance form .dark-layout and .light-layout-->
					<div class="ws-advance-form dark-layout wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="1s" id="ws-advance-form">
						 <form action="/action_page.php">
						     <h3 class="text-white mt-0 font24 text-uppercase mb-15 font-weight-500 ">search tours</h3>
						     <div class="form-content-wrapper">
						        <div class="form-top-wrapper">
						           <div class="form-content">
						              <label  class="d-block ml-5 mb-5 mt-0 text-white" for="ws-keyword">Search Keyword</label>
						              <input type="text" id="ws-keyword" name="firstname" placeholder="Search by keyboard" />
						           </div>
						           <div class="form-content">
						              <label  class="d-block ml-5 mb-5 mt-0 text-white" for="ws-destination">Choose Destinations</label>
						              <select class="select form-control trip-destinations selectpicker show-menu-arrow show-tick" data-live-search="true" data-placeholder="Select Destination" id="ws-destination" data-size="10">
										  <optgroup label="Asia">
										    <option value="1" >Nepal</option>
										    <option value="2" >Bhutan</option>
										    <option value="3" >India</option>
										    <option value="4" >Thailand</option>
										  </optgroup>
										  <optgroup label="Europe" >
										    <option value="11" >Germany</option>
										    <option value="12" >England</option>
										    <option value="13" >Span</option>
										    <option value="14" >France</option>
										    <option value="15" >Austria</option>
										    <option value="16" >Turkey</option>
										    <option value="17" >Russia</option>
										    <option value="18" >Portugal</option>
										  </optgroup>
										  <optgroup label="North America" >
										    <option value="21" >USA</option>
										    <option value="22" >Canada</option>
										    <option value="23" >Cuba</option>
										    <option value="24" >Mexico</option>
										  </optgroup>
										  <optgroup label="South America" >
										    <option value="31" >Brazil</option>
										    <option value="32" >Argentina</option>
										    <option value="33" >Cuba</option>
										  </optgroup>
						              </select>
						           </div>
						           <div class="form-content">
						              <label  class="d-block ml-5 mb-5 mt-0 text-white" for="ws-trip-type">Choose Trip Type</label>
						              <select class="select form-control trip-type selectpicker show-menu-arrow show-tick" id="ws-trip-type" data-live-search="true" data-placeholder="Select Trip Type" data-selected-text-format="count" multiple>

										    <option value="31">Rafting</option>
						                 	<option value="32">Paragliding</option>
						                 	<option value="33">Jungle Safari</option>
						                 	<option value="34">Trekk</option>
						                 	<option value="35">Boating</option>
						                 	<option value="36">Sight Seeing</option>
						                 
						              </select>
						           </div>
						           <div class="form-content">
						              <label  class="d-block ml-5 mb-5 mt-0 text-white" for="ws-trip-duration">Choose Trip duration</label>
						              <select class="select form-control trip-duration selectpicker show-menu-arrow show-tick" data-placeholder="Select Duration" id="ws-trip-duration" data-live-search="true" data-size="10">
						                 <option value="41">2 days</option>
						                 <option value="42">4 days</option>
						                 <option value="43">1 week</option>
						              </select>
						           </div>
						           <div class="form-content wp-travel-form-field wp-travel-trip-duration">
                                        <label class="d-block ml-5 mb-5 mt-0 text-white" >Trip Start End Range</label>
                                        <input type="text"
                                                data-range="true"
                                                data-multiple-dates-separator=" - "
                                                data-language="en" placeholder="Select a date range" 
                                                class="range-datepicker"/>
                                   </div>
						           <div class="prices price-min-max">
						              <label  class="d-block ml-5 mb-5 mt-0 text-white" for="ws-min-price">Price Range</label>
						              <input class="irs-hidden-input" type="number" name="" id="ws-min-price" />
						           </div>
						        </div>
						        
						        <input type="submit" value="Search" class="button"  />
						       </div>
						  </form>
					  </div>
		      	<!-- .form -->
		      	</div>
		   </div>
		</div>
	</div>
</div>




<div class="featured-tour">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 ">
            	<div class="ws-theme-section-title wow fadeInUp">
                	<h2 class="mb-30 font26 font-weight-500 text-dark text-uppercase mt-0 mb-15-xss">top vacation tours <span><a href="#">view all</a></span></h2>
            	</div>
                <div class="multiple-items wow fadeInUp">
                <div class="card">
                    <div class="featured-image">
                    <a href="#">
                    <div class="feature-image-thumb">
                    <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">

					  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-991.jpg">
					 <source media="(min-width: 576px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg" alt="">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title font16"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h5>
                    <p class="time">7 Days</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><span>(2 Review)</span></p>
                   </div> 
                    <div class="prices">
                        <p class="from">from</p>
                        <p class="all-prices"><del>$4,300</del><b>$3500</b></p>
                    </div>
                </div>
            

               <div class="card">
                    <div class="featured-image">
                        <a href="#">
                        <div class="feature-image-thumb">
                        <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">

					  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-991.jpg">
					 <source media="(min-width: 576px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg" alt="">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title font16"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h5>
                    <p class="time">7 Days</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><span>(2 Review)</span></p>
                   </div> 
                    <div class="prices">
                        <p class="from">from</p>
                        <p class="all-prices"><del>$4,300</del><b>$3500</b></p>
                    </div>
                </div>

                <div class="card">
                    <div class="featured-image">
                        <a href="#">
                        <div class="feature-image-thumb">
                        <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">

					  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-991.jpg">
					 <source media="(min-width: 576px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg" alt="">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title font16"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h5>
                    <p class="time">7 Days</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><span>(2 Review)</span></p>
                   </div> 
                    <div class="prices">
                        <p class="from">from</p>
                        <p class="all-prices"><del>$4,300</del><b>$3500</b></p>
                    </div>
                </div>

                <div class="card">
                    <div class="featured-image">
                        <a href="#">
                        <div class="feature-image-thumb">
                        <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">

					  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-991.jpg">
					 <source media="(min-width: 576px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg" alt="">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title font16"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h5>
                    <p class="time">7 Days</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><span>(2 Review)</span></p>
                   </div> 
                    <div class="prices">
                        <p class="from">from</p>
                        <p class="all-prices"><del>$4,300</del><b>$3500</b></p>
                    </div>
                </div>

                <div class="card">
                    <div class="featured-image">
                        <a href="#">
                        <div class="feature-image-thumb">
                        <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">

					  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-991.jpg">
					 <source media="(min-width: 576px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg" alt="">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title font16"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h5>
                    <p class="time">7 Days</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><span>(2 Review)</span></p>
                   </div> 
                    <div class="prices">
                        <p class="from">from</p>
                        <p class="all-prices"><del>$4,300</del><b>$3500</b></p>
                    </div>
                </div>

                <div class="card">
                    <div class="featured-image">
                        <a href="#">
                        <div class="feature-image-thumb">
                        <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">

					  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-991.jpg">
					 <source media="(min-width: 576px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg" alt="">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title font16"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h5>
                    <p class="time">7 Days</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><span>(2 Review)</span></p>
                   </div> 
                    <div class="prices">
                        <p class="from">from</p>
                        <p class="all-prices"><del>$4,300</del><b>$3500</b></p>
                    </div>
                </div>

                <div class="card">
                    <div class="featured-image">
                        <a href="#">
                        <div class="feature-image-thumb">
                        <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">

					  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-991.jpg">
					 <source media="(min-width: 576px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg" alt="">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title font16"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h5>
                    <p class="time">7 Days</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><span>(2 Review)</span></p>
                   </div> 
                    <div class="prices">
                        <p class="from">from</p>
                        <p class="all-prices"><del>$4,300</del><b>$3500</b></p>
                    </div>
                </div>


                </div>

            </div><!-- .col-8 -->

            <div class="col-sm-4">
            	<div class="sticky-sidebar">
	            	<div class="ws-latest-travel-tour ws-side-wrap">
		                <h3 class="aside-title wow fadeInUp font20">latest travel tours</h3>
		                <div class="ws-aside-listing wow fadeInUp">
		                <div class="ws-aside-listing-wrap">
		                    <div class="featured-image">
		                    <a href="#">
		                    <a href="#">
		                    <div class="feature-image-thumb">
		                    <picture>
							  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg">
							 
							  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg" width="70px" height="70px"  >
							</picture>
							</div>
							</a>
							</a>
		                  
		                  </div>
		                  <div class="ws-card-body">
		                    <h4><a href="#">America - Grand canyon, Golden Gate</a></h4>
		                    <span class="price">15% off</span><span class="tour-prices">From <del>$2400</del> <b>$2800</b></span>
		                  </div>
		                </div>
						<div class="ws-aside-listing-wrap">
		                    <div class="featured-image">
		                    <a href="#">
		                    <a href="#">
		                    <div class="feature-image-thumb">
		                    <picture>
							  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg">
							 
							  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg" width="70px" height="70px"  >
							</picture>
							</div>
							</a>
							</a>
		                  
		                  </div>
		                  <div class="ws-card-body">
		                    <h4><a href="#">America - Grand canyon, Golden Gate</a></h4>
		                    <span class="price">15% off</span><span class="tour-prices">From <del>$2400</del> <b>$2800</b></span>
		                  </div>
		                </div>

		                <div class="ws-aside-listing-wrap">
		                    <div class="featured-image">
		                    <a href="#">
		                    <a href="#">
		                    <div class="feature-image-thumb">
		                    <picture>
							  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg">
							 
							  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg" width="70px" height="70px"  >
							</picture>
							</div>
							</a>
							</a>
		                  
		                  </div>
		                  <div class="ws-card-body">
		                    <h4><a href="#">America - Grand canyon, Golden Gate</a></h4>
		                    <span class="price">15% off</span><span class="tour-prices">From <del>$2400</del> <b>$2800</b></span>
		                  </div>
		                </div>
		                <div class="ws-aside-listing-wrap">
		                    <div class="featured-image">
		                    <a href="#">
		                    <a href="#">
		                    <div class="feature-image-thumb">
		                    <picture>
							  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg">
							 
							  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg" width="70px" height="70px"  >
							</picture>
							</div>
							</a>
							</a>
		                  
		                  </div>
		                  <div class="ws-card-body">
		                    <h4><a href="#">America - Grand canyon, Golden Gate</a></h4>
		                    <span class="price">15% off</span><span class="tour-prices">From <del>$2400</del> <b>$2800</b></span>
		                  </div>
		                </div>
		                <div class="ws-aside-listing-wrap">
		                    <div class="featured-image">
		                    <a href="#">
		                    <a href="#">
		                    <div class="feature-image-thumb">
		                    <picture>
							  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg">
							 
							  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg" width="70px" height="70px"  >
							</picture>
							</div>
							</a>
							</a>
		                  
		                  </div>
		                  <div class="ws-card-body">
		                    <h4><a href="#">America - Grand canyon, Golden Gate</a></h4>
		                    <span class="price">15% off</span><span class="tour-prices">From <del>$2400</del> <b>$2800</b></span>
		                  </div>
		                </div>
					


		                </div>
					</div>
				</div>
            </div>
        </div>
        </div>
    </div>
<div class="ws-whybook-us dotted-overlay" style="background-image: url(http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/why-book-us.jpg);">
	<div class="container">
		<div class="row">
			<div class="ws-section-title wow fadeInUp"> <h2 class="text-white text-uppercase font26">Why to book with us?</h2></div>
			<div class="col-md-3 col-sm-6">
				<div class="ws-why-bookus-wrap wow fadeInUp">
					<div class="ws-icon-why-bookus">
						<img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/whybookus-1.png">
					</div>
					<div class="ws-title-why-bookus">
						<h3 class="text-white text-uppercase font22 mv-20">One stop Book</h3>
					</div>
					<div class="ws-content-why-bookus">
						<p class="text-white">Widest range of 2,700 tours and activities from all around the world to give you the best.</p>
					</div>

				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="ws-why-bookus-wrap wow fadeInUp">
					<div class="ws-icon-why-bookus">
						<img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/whybookus-2.png">
					</div>
					<div class="ws-title-why-bookus">
						<h3 class="text-uppercase text-white font22 mv-20">Refer to verified</h3>
					</div>
					<div class="ws-content-why-bookus">
						<p class="text-white">We verify all reviews to give you the best advices from trusted others travelers.</p>
					</div>

				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="ws-why-bookus-wrap wow fadeInUp">
					<div class="ws-icon-why-bookus">
						<img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/whybookus-3.png">
					</div>
					<div class="ws-title-why-bookus">
						<h3 class="text-uppercase text-white font22 mv-20">Secret travel tips</h3>
					</div>
					<div class="ws-content-why-bookus">
						<p class="text-white">Join 50,000 other subscribers and get weekly travel tips from other travelers and local.	</p>
					</div>

				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="ws-why-bookus-wrap wow fadeInUp">
					<div class="ws-icon-why-bookus">
						<img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/whybookus-4.png">
					</div>
					<div class="ws-title-why-bookus">
						<h3 class="text-uppercase text-white font22 mv-20">Best price guarantee</h3>
					</div>
					<div class="ws-content-why-bookus">
						<p class="text-white">Our pricing is updated constantly to ensure you get the best price available online or at your destination</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>




<div class="popular-tour grey-background">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 ">
            	<div class="ws-theme-section-title wow fadeInUp">
                	<h2 class="mb-30 font26 font-weight-500 text-dark text-uppercase mt-0 mb-15-xss">Popular Deals <span><a href="#">view all</a></span></h2>
            	</div>
                <div class="multiple-items wow fadeInUp">
                <div class="card">
                    <div class="featured-image">
                    <a href="#">
                    <div class="feature-image-thumb">
                    <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">

					  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-991.jpg">
					 <source media="(min-width: 576px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg" alt="">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title font16"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h5>
                    <p class="time">7 Days</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><span>(2 Review)</span></p>
                   </div> 
                    <div class="prices">
                        <p class="from">from</p>
                        <p class="all-prices"><del>$4,300</del><b>$3500</b></p>
                    </div>
                </div>
            

               <div class="card">
                    <div class="featured-image">
                        <a href="#">
                        <div class="feature-image-thumb">
                        <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">

					  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-991.jpg">
					 <source media="(min-width: 576px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg" alt="">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title font16"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h5>
                    <p class="time">7 Days</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><span>(2 Review)</span></p>
                   </div> 
                    <div class="prices">
                        <p class="from">from</p>
                        <p class="all-prices"><del>$4,300</del><b>$3500</b></p>
                    </div>
                </div>

                <div class="card">
                    <div class="featured-image">
                        <a href="#">
                        <div class="feature-image-thumb">
                        <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">

					  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-991.jpg">
					 <source media="(min-width: 576px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg" alt="">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title font16"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h5>
                    <p class="time">7 Days</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><span>(2 Review)</span></p>
                   </div> 
                    <div class="prices">
                        <p class="from">from</p>
                        <p class="all-prices"><del>$4,300</del><b>$3500</b></p>
                    </div>
                </div>

                <div class="card">
                    <div class="featured-image">
                        <a href="#">
                        <div class="feature-image-thumb">
                        <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">

					  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-991.jpg">
					 <source media="(min-width: 576px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg" alt="">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title font16"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h5>
                    <p class="time">7 Days</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><span>(2 Review)</span></p>
                   </div> 
                    <div class="prices">
                        <p class="from">from</p>
                        <p class="all-prices"><del>$4,300</del><b>$3500</b></p>
                    </div>
                </div>

                <div class="card">
                    <div class="featured-image">
                        <a href="#">
                        <div class="feature-image-thumb">
                        <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">

					  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-991.jpg">
					 <source media="(min-width: 576px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg" alt="">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title font16"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h5>
                    <p class="time">7 Days</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><span>(2 Review)</span></p>
                   </div> 
                    <div class="prices">
                        <p class="from">from</p>
                        <p class="all-prices"><del>$4,300</del><b>$3500</b></p>
                    </div>
                </div>

                <div class="card">
                    <div class="featured-image">
                        <a href="#">
                        <div class="feature-image-thumb">
                        <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">

					  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-991.jpg">
					 <source media="(min-width: 576px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg" alt="">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title font16"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h5>
                    <p class="time">7 Days</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><span>(2 Review)</span></p>
                   </div> 
                    <div class="prices">
                        <p class="from">from</p>
                        <p class="all-prices"><del>$4,300</del><b>$3500</b></p>
                    </div>
                </div>

                <div class="card">
                    <div class="featured-image">
                        <a href="#">
                        <div class="feature-image-thumb">
                        <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">

					  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-991.jpg">
					 <source media="(min-width: 576px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-default.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg" alt="">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title font16"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h5>
                    <p class="time">7 Days</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><span>(2 Review)</span></p>
                   </div> 
                    <div class="prices">
                        <p class="from">from</p>
                        <p class="all-prices"><del>$4,300</del><b>$3500</b></p>
                    </div>
                </div>


                </div>

            </div><!-- .col-8 -->

            <div class="col-sm-4">
            	<div class="sticky-sidebar">
	            	<div class="ws-feature-destination ws-side-wrap">
		                <h3 class="aside-title wow fadeInUp">Featured Destinations</h3>
		                <div class="ws-aside-listing wow fadeInUp">
		                <div class="ws-aside-listing-wrap">
		                    <div class="destination-image">
			                    <a href="#">
			                    <div class="feature-image-thumb">
			                    <picture>
								  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/nepal.jpg">
								 
								  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/nepal-767.jpg"  >
								</picture>
								</div>
								</a>
			                  		<a href="#" class="destination-image-caption">Nepal</a>
			                  </div>
			                  <div class="destination-image">
			                    <a href="#">
			                    <div class="feature-image-thumb">
			                    <picture>
								  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/nepal.jpg">
								 
								  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/nepal-767.jpg"  >
								</picture>
								</div>
								</a>
			                  		<a href="#" class="destination-image-caption">Nepal</a>
			                  </div>
		                  
		                </div>
		                <div class="ws-aside-listing-wrap">
		                    <div class="destination-image">
			                    <a href="#">
			                    <div class="feature-image-thumb">
			                    <picture>
								  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/nepal.jpg">
								 
								  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/nepal-767.jpg"  >
								</picture>
								</div>
								</a>
			                  		<a href="#" class="destination-image-caption">Nepal</a>
			                  </div>
			                  <div class="destination-image">
			                    <a href="#">
			                    <div class="feature-image-thumb">
			                    <picture>
								  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/nepal.jpg">
								 
								  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/nepal-767.jpg"  >
								</picture>
								</div>
								</a>
			                  		<a href="#" class="destination-image-caption">Nepal</a>
			                  </div>
		                  
		                </div>
		                <div class="ws-aside-listing-wrap">
		                    <div class="destination-image">
			                    <a href="#">
			                    <div class="feature-image-thumb">
			                    <picture>
								  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/nepal.jpg">
								 
								  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/nepal-767.jpg">
								</picture>
								</div>
								</a>
			                  		<a href="#" class="destination-image-caption">Nepal</a>
			                  </div>
			                  <div class="destination-image">
			                    <a href="#">
			                    <div class="feature-image-thumb">
			                    <picture>
								  <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/nepal.jpg">
								 
								  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/nepal-767.jpg"  >
								</picture>
								</div>
								</a>
			                  		<a href="#" class="destination-image-caption">Nepal</a>
			                  </div>
		                  
		                </div>
						



		                </div>
	                </div>
				</div>
            </div>
        </div>
        </div>
    </div>

<div class="ws-travel-moment dotted-overlay" style="background-image: url(http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/travel-moment.jpg);">
	
	<div class="container">
		<div class="row">
			<div class="ws-section-title wow fadeInUp"> 
				<h2 class="text-white mt-0 text-uppercase font26" >Find Your Travel Moment</h2>
				<p class="text-white font18 font-weight-500">We enables you to travel your dream vacation In Just 3 Steps</p>

			</div>
			<div class="col-sm-4">
				<div class="ws-travel-moment-wrap wow fadeInUp pt-50 pb-30">
					<div class="ws-icon-travel-moment">
						<img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/dream.png">
					</div>
					<div class="ws-title-travel-moment">
						<h3 class="text-uppercase text-white font22 mv-20">Dream</h3>
					</div>
					<div class="ws-content-travel-moment">
						<p class="text-white">Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorpe</p>
					</div>

				</div>
			</div>
			<div class="col-sm-4">
				<div class="ws-travel-moment-wrap wow fadeInUp pt-50 pb-30">
					<div class="ws-icon-travel-moment">
						<img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/plan.png">
					</div>
					<div class="ws-title-travel-moment">
						<h3 class="text-uppercase text-white font22 mv-20">Plan</h3>
					</div>
					<div class="ws-content-travel-moment">
						<p class="text-white">Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorpe</p>
					</div>

				</div>
			</div>
			<div class="col-sm-4">
				<div class="ws-travel-moment-wrap wow fadeInUp pt-50 pb-30">
					<div class="ws-icon-travel-moment">
						<img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/discover.png">
					</div>
					<div class="ws-title-travel-moment">
						<h3 class="text-uppercase text-white font22 mv-20">Discover</h3>
					</div>
					<div class="ws-content-travel-moment">
						<p class="text-white">Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorpe</p>
					</div>

				</div>
			</div>
			<div class="col-sm-12">
				<div class="dream-btn-wrap wow bounceInUp">
					<a href="#" class="btn btn-dream">Discover Dream Vacation </a>
				</div>
			</div>
		</div>
	</div>

</div>






<div class="recomended-tour">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 ">
            	<div class="ws-theme-section-title wow fadeInUp">
                	<h2 class="mb-30 font26 font-weight-500 text-dark text-uppercase mt-0 mb-15-xss">Recommended Trips <span><a href="#">view all</a></span></h2>
            	</div>
                <div class="ws-listing-trips listing-list-view wow fadeInUp">
                <div class="card clearfix">
                    <div class="featured-image">
                    <div class="wp-travel-offer">
						<span>Offer</span>
					</div>
                    <a href="#">
                    <div class="feature-image-thumb">
                    <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-default.jpg">
					 <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-small.jpg">
					 <source media="(min-width: 320px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-small.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-small.jpg" alt="" style="width:auto;">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h3 class="card-title"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h3>
                    <p class="time">7 Days 8 Nights</p>
                    <p class="avilable-date">Availability: Jan 18’ - Dec 16’</p>
                    <p class="card-text">Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet [...]</p>
                   </div> 
                   <aside class="right-wrapper">
						
						<div class="prices clearfix">
	                        <p class="from">from <del class="hidden-above-md">$4,300</del></p>
	                        <p class="all-prices"><del class="visible-under-md">$4,300</del><b>$3500</b></p>

	                    </div>
	                    <div class="ws-rating-more font14">
						<div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i><span>(2 Review)</span></div>

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
                    <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-default.jpg">
					 <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-small.jpg">
					 <source media="(min-width: 320px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-small.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-small.jpg" alt="" style="width:auto;">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h3 class="card-title"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h3>
                    <p class="time">7 Days 8 Nights</p>
                    <p class="avilable-date">Availability: Jan 18’ - Dec 16’</p>
                    <p class="card-text">Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet [...]</p>
                   </div>
                   <aside class="right-wrapper">
						
						<div class="prices clearfix">
	                        <p class="from">from <del class="hidden-above-md">$4,300</del></p>
	                        <p class="all-prices"><del class="visible-under-md">$4,300</del><b>$3500</b></p>

	                    </div>
						<div class="ws-rating-more font14">
						<div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i><span>(2 Review)</span></div>

						<div class="dream-btn-wrap">
							<a href="#" class="btn btn-dream">More Info</a>
						</div>
						</div>
					</aside> 
                    
                </div>

                <div class="card clearfix">
                    <div class="featured-image">
                    <a href="#">
                    <div class="feature-image-thumb">
                    <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-default.jpg">
					 <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-small.jpg">
					 <source media="(min-width: 320px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-small.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-small.jpg" alt="" style="width:auto;">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h3 class="card-title"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h3>
                    <p class="time">7 Days 8 Nights</p>
                    <p class="avilable-date">Availability: Jan 18’ - Dec 16’</p>
                    <p class="card-text">Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet [...]</p>
                   </div> 
                   	<aside class="right-wrapper">
						
						<div class="prices clearfix">
	                        <p class="from">from <del class="hidden-above-md">$4,300</del></p>
	                        <p class="all-prices"><del class="visible-under-md">$4,300</del><b>$3500</b></p>

	                    </div>
						<div class="ws-rating-more font14">
						<div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i><span>(2 Review)</span></div>

						<div class="dream-btn-wrap">
							<a href="#" class="btn btn-dream">More Info</a>
						</div>
						</div>
					</aside>
                    
                </div>
                <div class="card clearfix">
                    <div class="featured-image">
                    <a href="#">
                    <div class="feature-image-thumb">
                    <picture>
					  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-default.jpg">
					 <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-small.jpg">
					 <source media="(min-width: 320px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-small.jpg">
					  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-small.jpg" alt="" style="width:auto;">
					</picture>
					</div>
					</a>
                    </div>
                  <div class="card-body">
                    <h3 class="card-title"><a href="#">Switzerland - 7 days in zurich, zermatt</a></h3>
                    <p class="time">7 Days 8 Nights</p>
                    <p class="avilable-date">Availability: Jan 18’ - Dec 16’</p>
                    <p class="card-text">Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet [...]</p>
                   </div> 
                   	<aside class="right-wrapper">
						
						<div class="prices clearfix">
	                        <p class="from">from <del class="hidden-above-md">$4,300</del></p>
	                        <p class="all-prices"><del class="visible-under-md">$4,300</del><b>$3500</b></p>

	                    </div>
						<div class="ws-rating-more font14">
						<div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i><span>(2 Review)</span></div>

						<div class="dream-btn-wrap">
							<a href="#" class="btn btn-dream">More Info</a>
						</div>
						</div>
					</aside>
                    
                </div>


                </div>

            </div><!-- .col-8 -->

            <div class="col-sm-4">
            	<div class="sticky-sidebar">
	            	<div class="ws-latest-travel-tips ws-side-wrap">
		                <h3 class="aside-title wow fadeInUp">Travel Tips</h3>
		                <div class="ws-aside-listing wow fadeInUp">
		                <div class="ws-aside-listing-wrap">
		                    <div class="featured-image">
		                    <a href="#">
		                    <a href="#">
		                    <div class="feature-image-thumb">
		                    <picture>
							  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg">
							 
							  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg" width="70px" height="70px"  >
							</picture>
							</div>
							</a>
							</a>
		                  
		                  </div>
		                  <div class="ws-card-body">
		                    <p><a href="#">How to travel using mobile map</a></p>
		                    <span class="date"><a href="#"><i class="wt-icon-regular wt-icon-clock"></i> Jan 06, 2018</a></span>
		                  </div>
		                </div>
						<div class="ws-aside-listing-wrap">
		                    <div class="featured-image">
		                    <a href="#">
		                    <a href="#">
		                    <div class="feature-image-thumb">
		                    <picture>
							  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg">
							 
							  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg" width="70px" height="70px"  >
							</picture>
							</div>
							</a>
							</a>
		                  
		                  </div>
		                  <div class="ws-card-body">
		                    <p><a href="#">How to travel using mobile map</a></p>
		                    <span class="date"><a href="#"><i class="wt-icon-regular wt-icon-clock"></i> Jan 06, 2018</a></span>
		                  </div>
		                </div>

		                <div class="ws-aside-listing-wrap">
		                    <div class="featured-image">
		                    <a href="#">
		                    <a href="#">
		                    <div class="feature-image-thumb">
		                    <picture>
							  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg">
							 
							  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg" width="70px" height="70px"  >
							</picture>
							</div>
							</a>
							</a>
		                  
		                  </div>
		                  <div class="ws-card-body">
		                    <p><a href="#">How to travel using mobile map</a></p>
		                    <span class="date"><a href="#"><i class="wt-icon-regular wt-icon-clock"></i> Jan 06, 2018</a></span>
		                  </div>
		                </div>
		                <div class="ws-aside-listing-wrap">
		                    <div class="featured-image">
		                    <a href="#">
		                    <a href="#">
		                    <div class="feature-image-thumb">
		                    <picture>
							  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg">
							 
							  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg" width="70px" height="70px"  >
							</picture>
							</div>
							</a>
							</a>
		                  
		                  </div>
		                  <div class="ws-card-body">
		                    <p><a href="#">How to travel using mobile map</a></p>
		                    <span class="date"><a href="#"><i class="wt-icon-regular wt-icon-clock"></i> Jan 06, 2018</a></span>
		                  </div>
		                </div>
		                <div class="ws-aside-listing-wrap">
		                    <div class="featured-image">
		                    <a href="#">
		                    <a href="#">
		                    <div class="feature-image-thumb">
		                    <picture>
							  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg">
							 
							  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg" width="70px" height="70px"  >
							</picture>
							</div>
							</a>
							</a>
		                  
		                  </div>
		                  <div class="ws-card-body">
		                    <p><a href="#">How to travel using mobile map</a></p>
		                    <span class="date"><a href="#"><i class="wt-icon-regular wt-icon-clock"></i> Jan 06, 2018</a></span>
		                  </div>
		                </div>
		                <div class="ws-aside-listing-wrap">
		                    <div class="featured-image">
		                    <a href="#">
		                    <a href="#">
		                    <div class="feature-image-thumb">
		                    <picture>
							  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg">
							 
							  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg" width="70px" height="70px"  >
							</picture>
							</div>
							</a>
							</a>
		                  
		                  </div>
		                  <div class="ws-card-body">
		                    <p><a href="#">How to travel using mobile map</a></p>
		                    <span class="date"><a href="#"><i class="wt-icon-regular wt-icon-clock"></i> Jan 06, 2018</a></span>
		                  </div>
		                </div>
		                <div class="ws-aside-listing-wrap">
		                    <div class="featured-image">
		                    <a href="#">
		                    <a href="#">
		                    <div class="feature-image-thumb">
		                    <picture>
							  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg">
							 
							  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/aside-thumb.jpg" width="70px" height="70px"  >
							</picture>
							</div>
							</a>
							</a>
		                  
		                  </div>
		                  <div class="ws-card-body">
		                    <p><a href="#">How to travel using mobile map</a></p>
		                    <span class="date"><a href="#"><i class="wt-icon-regular wt-icon-clock"></i> Jan 06, 2018</a></span>
		                  </div>
		                </div>
		                </div>
					</div>

					<div class="ws-question dotted-overlay ws-side-wrap wow fadeInUp" style="background-image: url(http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/got-question.jpg);">
						<div class="ws-question-wrap">
							<h3>Get a Question ?</h3>
							<p class="info">Do not hesitage to give us a call. We are an expert team and we are happy to talk to you.</p>
							<p><a href="tel:(123)456-789">(123)456-789</a></p>
							<p><a href="mailto:company@domain.com">company@domain.com</a></p>
						</div>
					</div>

					<div class="ws-subscribe wow fadeInUp">
						<h3 class="aside-title wow fadeInUp">Newsletter</h3>

						<form class="ws-subscribe-form">
							<input type="email" name="" placeholder="Your Email Address" />
							<input type="submit" name="" value="Subscribe">
						</form>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

<div class="ws-travel-testimonial dotted-overlay" style="background-image: url(http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/tes.jpg);">
	

			<div class="ws-section-title text-center wow fadeInUp"> 
				<h2 class="text-white text-uppercase font26 mt-0">Latest CUSTOMERS Review</h2>
				<p class="text-white font18 font-weight-500">What our customers saying about us</p>

			</div>
				<div class="ws-travel-testimonial-slider wow fadeInUp">
					<div class="ws-travel-moment-wrap bg-white p-20 m-20">
						<div class="ws-travel-moment-wrap-child">
							<div class="ws-icon-travel-moment">
								<img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/test-img.png">
								<div class="visible-under-xs">
									<div class="ws-title-travel-moment">
										<h3 class="mv-5 font18 font-weight-600 text-dark">Grish R.</h3>
									</div>
									<p class="time"><i>15th September</i></p>
									<div class="ws-travel-momnet-info">
										<span class="trip-ratting rating">Trip Rating: 5<i class="wt-icon wt-icon-star"></i></span>
									</div>
								</div>
							</div>
						<div class="ws-travel-moment-wrap-inside">
							<div class="hidden-above-xs">
								<div class="ws-title-travel-moment">
									<h3 class="mv-5 font18 font-weight-600 text-dark">Grish R.</h3>
								</div>
								<p class="time"><i>15th September</i></p>
								<div class="ws-travel-momnet-info">
									<span class="trip-ratting rating">Trip Rating: 5<i class="wt-icon wt-icon-star"></i></span>
								</div>
							</div>
							<div class="ws-trips-review border-bottom">
								<p><i>Trips Reviewed : <a href="#">Trekk to Tilicho</a></i></p>
							</div>
							<div class="ws-content-travel-moment">
								<p>“ Excellent – a great package the company offered, left me wanting to see more. Our tour guide, was the ultimate professional, able to meet the many different needs of all the travelers. The food and hotels were outstanding value. Looking ”</p>
							</div>
							
						</div>
					</div>
						
					</div>

					<div class="ws-travel-moment-wrap bg-white p-20 m-20">
						<div class="ws-travel-moment-wrap-child">
							<div class="ws-icon-travel-moment">
								<img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/test-img.png">
								<div class="visible-under-xs">
									<div class="ws-title-travel-moment">
										<h3 class="mv-5 font18 font-weight-600 text-dark">Grish R.</h3>
									</div>
									<p class="time"><i>15th September</i></p>
									<div class="ws-travel-momnet-info">
										<span class="trip-ratting rating">Trip Rating: 5<i class="wt-icon wt-icon-star"></i></span>
									</div>
								</div>
							</div>
						<div class="ws-travel-moment-wrap-inside">
							<div class="hidden-above-xs">
								<div class="ws-title-travel-moment">
									<h3 class="mv-5 font18 font-weight-600 text-dark">Grish R.</h3>
								</div>
								<p class="time"><i>15th September</i></p>
								<div class="ws-travel-momnet-info">
									<span class="trip-ratting rating">Trip Rating: 5<i class="wt-icon wt-icon-star"></i></span>
								</div>
							</div>
							<div class="ws-trips-review border-bottom">
								<p><i>Trips Reviewed : <a href="#">Trekk to Tilicho</a></i></p>
							</div>
							<div class="ws-content-travel-moment">
								<p>“ Excellent – a great package the company offered, left me wanting to see more. Our tour guide, was the ultimate professional, able to meet the many different needs of all the travelers. The food and hotels were outstanding value. Looking ”</p>
							</div>
							
						</div>
					</div>
						
					</div>
					<div class="ws-travel-moment-wrap bg-white p-20 m-20">
						<div class="ws-travel-moment-wrap-child">
							<div class="ws-icon-travel-moment">
								<img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/test-img.png">
								<div class="visible-under-xs">
									<div class="ws-title-travel-moment">
										<h3 class="mv-5 font18 font-weight-600 text-dark">Grish R.</h3>
									</div>
									<p class="time"><i>15th September</i></p>
									<div class="ws-travel-momnet-info">
										<span class="trip-ratting rating">Trip Rating: 5<i class="wt-icon wt-icon-star"></i></span>
									</div>
								</div>
							</div>
						<div class="ws-travel-moment-wrap-inside">
							<div class="hidden-above-xs">
								<div class="ws-title-travel-moment">
									<h3 class="mv-5 font18 font-weight-600 text-dark">Grish R.</h3>
								</div>
								<p class="time"><i>15th September</i></p>
								<div class="ws-travel-momnet-info">
									<span class="trip-ratting rating">Trip Rating: 5<i class="wt-icon wt-icon-star"></i></span>
								</div>
							</div>
							<div class="ws-trips-review border-bottom">
								<p><i>Trips Reviewed : <a href="#">Trekk to Tilicho</a></i></p>
							</div>
							<div class="ws-content-travel-moment">
								<p>“ Excellent – a great package the company offered, left me wanting to see more. Our tour guide, was the ultimate professional, able to meet the many different needs of all the travelers. The food and hotels were outstanding value. Looking ”</p>
							</div>
							
						</div>
					</div>
						
					</div>
					<div class="ws-travel-moment-wrap bg-white p-20 m-20">
						<div class="ws-travel-moment-wrap-child">
							<div class="ws-icon-travel-moment">
								<img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/test-img.png">
								<div class="visible-under-xs">
									<div class="ws-title-travel-moment">
										<h3 class="mv-5 font18 font-weight-600 text-dark">Grish R.</h3>
									</div>
									<p class="time"><i>15th September</i></p>
									<div class="ws-travel-momnet-info">
										<span class="trip-ratting rating">Trip Rating: 5<i class="wt-icon wt-icon-star"></i></span>
									</div>
								</div>
							</div>
						<div class="ws-travel-moment-wrap-inside">
							<div class="hidden-above-xs">
								<div class="ws-title-travel-moment">
									<h3 class="mv-5 font18 font-weight-600 text-dark">Grish R.</h3>
								</div>
								<p class="time"><i>15th September</i></p>
								<div class="ws-travel-momnet-info">
									<span class="trip-ratting rating">Trip Rating: 5<i class="wt-icon wt-icon-star"></i></span>
								</div>
							</div>
							<div class="ws-trips-review border-bottom">
								<p><i>Trips Reviewed : <a href="#">Trekk to Tilicho</a></i></p>
							</div>
							<div class="ws-content-travel-moment">
								<p>“ Excellent – a great package the company offered, left me wanting to see more. Our tour guide, was the ultimate professional, able to meet the many different needs of all the travelers. The food and hotels were outstanding value. Looking ”</p>
							</div>
							
						</div>
					</div>
						
					</div>

					
				</div>
			

</div>


<div class="section-half-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="blog-listing">
					<div class="ws-theme-section-title wow fadeInUp">
	                	<h2 class="mb-30 font26 font-weight-500 text-dark text-uppercase mt-0 mb-15-xss">Blog <span><a href="#">view all</a></span></h2>
	            	</div>

	            	<div class="blog-listing-wrap wow fadeInUp">
						<div class="single-blog-listing">
							<div class="featured-image">
			                    <a href="#">
			                    <div class="feature-image-thumb">
			                    <picture>
								  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/blog-listing.jpg">
								 <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/blog-991.jpg">
								  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/blog-767.jpg" alt="">
								</picture>
								</div>
								</a>
			                </div>

			                <div class="card-body">
			                    <h3 class="card-title"><a href="#">America - Grand canyon, Golden Gate</a></h3>
			                    <p class="time">Jan 06, 2018</p>
			                    <p class="card-text">Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet. Etiam portsit amet non magna. Vivamus sagittis lacus vel augue laoreet [...]</p>
			                </div>
						</div>

						<div class="single-blog-listing">
							<div class="featured-image">
			                    <a href="#">
			                    <div class="feature-image-thumb">
			                    <picture>
								  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/blog-listing.jpg">
								 <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/blog-991.jpg">
								  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/blog-767.jpg" alt="">
								</picture>
								</div>
								</a>
			                </div>

			                <div class="card-body">
			                    <h3 class="card-title"><a href="#">America - Grand canyon, Golden Gate</a></h3>
			                    <p class="time">Jan 06, 2018</p>
			                    <p class="card-text">Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet. Etiam portsit amet non magna. Vivamus sagittis lacus vel augue laoreet [...]</p>
			                </div>
						</div>

						<div class="single-blog-listing">
							<div class="featured-image">
			                    <a href="#">
			                    <div class="feature-image-thumb">
			                    <picture>
								  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/blog-listing.jpg">
								 <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/blog-991.jpg">
								  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/blog-767.jpg" alt="">
								</picture>
								</div>
								</a>
			                </div>

			                <div class="card-body">
			                    <h3 class="card-title"><a href="#">America - Grand canyon, Golden Gate</a></h3>
			                    <p class="time">Jan 06, 2018</p>
			                    <p class="card-text">Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet. Etiam portsit amet non magna. Vivamus sagittis lacus vel augue laoreet [...]</p>
			                </div>
						</div>
						<div class="single-blog-listing">
							<div class="featured-image">
			                    <a href="#">
			                    <div class="feature-image-thumb">
			                    <picture>
								  <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/blog-listing.jpg">
								 <source media="(min-width: 768px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/blog-991.jpg">
								  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/blog-767.jpg" alt="">
								</picture>
								</div>
								</a>
			                </div>

			                <div class="card-body">
			                    <h3 class="card-title"><a href="#">America - Grand canyon, Golden Gate</a></h3>
			                    <p class="time">Jan 06, 2018</p>
			                    <p class="card-text">Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet. Etiam portsit amet non magna. Vivamus sagittis lacus vel augue laoreet [...]</p>
			                </div>
						</div>
	            	</div>
				</div>
			</div>	
			<div class="col-md-6">
				<div class="ws-feature-video">
					<div class="ws-theme-section-title wow fadeInUp">
	                	<h2 class="mb-30 font26 font-weight-500 text-dark text-uppercase mt-0 mb-15-xss">Featured Video <span><a href="#">view all</a></span></h2>
	            	</div>
				</div>
				<div class="ws-single-nav-slider ws-theme-feature-video-slider bg-white-slider wow fadeInUp">
					<div class="slider slider-single">
						<div class="item-video">
                            <div class="slick-video-wrapper">
	                            <a class="slick-video" href="https://www.youtube.com/watch?v=LF0wJgg6WCk"></a>
	                            <div class="slick-video-frame">
	                            	<!-- load iframe here after clicking on image by a href link -->
	                            </div>
	                            <div class="slick-video-play-icon"></div>
	                            <div class="slick-video-tn">
	                            	<img src="https://img.youtube.com/vi/LF0wJgg6WCk/sddefault.jpg">
	                            </div>
                            </div>
                        </div>
						<div class="item-video">
                            <div class="slick-video-wrapper">
	                            <a class="slick-video" href="https://www.youtube.com/watch?v=LF0wJgg6WCk"></a>
	                            <div class="slick-video-frame">
	                            	<!-- load iframe here after clicking on image by a href link -->
	                            </div>
	                            <div class="slick-video-play-icon"></div>
	                            <div class="slick-video-tn">
	                            	<img src="https://img.youtube.com/vi/LF0wJgg6WCk/sddefault.jpg">
	                            </div>
                            </div>
                        </div>

                        <div class="item-video">
                            <div class="slick-video-wrapper">
	                            <a class="slick-video" href="https://www.youtube.com/watch?v=LF0wJgg6WCk"></a>
	                            <div class="slick-video-frame">
	                            	<!-- load iframe here after clicking on image by a href link -->
	                            </div>
	                            <div class="slick-video-play-icon"></div>
	                            <div class="slick-video-tn">
	                            	<img src="https://img.youtube.com/vi/LF0wJgg6WCk/sddefault.jpg">
	                            </div>
                            </div>
                        </div>

                        <div class="item-video">
                            <div class="slick-video-wrapper">
	                            <a class="slick-video" href="https://www.youtube.com/watch?v=LF0wJgg6WCk"></a>
	                            <div class="slick-video-frame">
	                            	<!-- load iframe here after clicking on image by a href link -->
	                            </div>
	                            <div class="slick-video-play-icon"></div>
	                            <div class="slick-video-tn">
	                            	<img src="https://img.youtube.com/vi/LF0wJgg6WCk/sddefault.jpg">
	                            </div>
                            </div>
                        </div>

                        <div class="item-video">
                            <div class="slick-video-wrapper">
	                            <a class="slick-video" href="https://www.youtube.com/watch?v=LF0wJgg6WCk"></a>
	                            <div class="slick-video-frame">
	                            	<!-- load iframe here after clicking on image by a href link -->
	                            </div>
	                            <div class="slick-video-play-icon"></div>
	                            <div class="slick-video-tn">
	                            	<img src="https://img.youtube.com/vi/LF0wJgg6WCk/sddefault.jpg">
	                            </div>
                            </div>
                        </div>

                        <div class="item-video">
                            <div class="slick-video-wrapper">
	                            <a class="slick-video" href="https://www.youtube.com/watch?v=LF0wJgg6WCk"></a>
	                            <div class="slick-video-frame">
	                            	<!-- load iframe here after clicking on image by a href link -->
	                            </div>
	                            <div class="slick-video-play-icon"></div>
	                            <div class="slick-video-tn">
	                            	<img src="https://img.youtube.com/vi/LF0wJgg6WCk/sddefault.jpg">
	                            </div>
                            </div>
                        </div>

                        <div class="item-video">
                            <div class="slick-video-wrapper">
	                            <a class="slick-video" href="https://www.youtube.com/watch?v=LF0wJgg6WCk"></a>
	                            <div class="slick-video-frame">
	                            	<!-- load iframe here after clicking on image by a href link -->
	                            </div>
	                            <div class="slick-video-play-icon"></div>
	                            <div class="slick-video-tn">
	                            	<img src="https://img.youtube.com/vi/LF0wJgg6WCk/sddefault.jpg">
	                            </div>
                            </div>
                        </div>

                        <div class="item-video">
                            <div class="slick-video-wrapper">
	                            <a class="slick-video" href="https://www.youtube.com/watch?v=LF0wJgg6WCk"></a>
	                            <div class="slick-video-frame">
	                            	<!-- load iframe here after clicking on image by a href link -->
	                            </div>
	                            <div class="slick-video-play-icon"></div>
	                            <div class="slick-video-tn">
	                            	<img src="https://img.youtube.com/vi/LF0wJgg6WCk/sddefault.jpg">
	                            </div>
                            </div>
                        </div>


					</div>
					<div class="slider slider-nav">
						<div class="projectitem video-item">
	                        <article class="module-post">
	                            <figure>
	                               <a href="#"><img src="https://i1.ytimg.com/vi/LF0wJgg6WCk/sddefault.jpg"></a>
	                            </figure>
	                            <header class="entry-header">
	                                <h3 class="entry-title">
	                                    <a href="#">Travel Diary: Top 25 Places to Visit in Nepal.</a>
	                                </h3> 
	                            </header>
	                        </article>
	                    </div>
	                    <div class="projectitem video-item">
	                        <article class="module-post">
	                            <figure>
	                               <a href="#"><img src="https://i1.ytimg.com/vi/LF0wJgg6WCk/sddefault.jpg"></a>
	                            </figure>
	                            <header class="entry-header">
	                                <h3 class="entry-title">
	                                    <a href="#">Travel Diary: Top 25 Places to Visit in Nepal.</a>
	                                </h3> 
	                            </header>
	                        </article>
	                    </div>
	                    <div class="projectitem video-item">
	                        <article class="module-post">
	                            <figure>
	                               <a href="#"><img src="https://i1.ytimg.com/vi/LF0wJgg6WCk/sddefault.jpg"></a>
	                            </figure>
	                            <header class="entry-header">
	                                <h3 class="entry-title">
	                                    <a href="#">Travel Diary: Top 25 Places to Visit in Nepal.</a>
	                                </h3> 
	                            </header>
	                        </article>
	                    </div>
	                    <div class="projectitem video-item">
	                        <article class="module-post">
	                            <figure>
	                               <a href="#"><img src="https://i1.ytimg.com/vi/LF0wJgg6WCk/sddefault.jpg"></a>
	                            </figure>
	                            <header class="entry-header">
	                                <h3 class="entry-title">
	                                    <a href="#">Travel Diary: Top 25 Places to Visit in Nepal.</a>
	                                </h3> 
	                            </header>
	                        </article>
	                    </div>
	                    <div class="projectitem video-item">
	                        <article class="module-post">
	                            <figure>
	                               <a href="#"><img src="https://i1.ytimg.com/vi/LF0wJgg6WCk/sddefault.jpg"></a>
	                            </figure>
	                            <header class="entry-header">
	                                <h3 class="entry-title">
	                                    <a href="#">Travel Diary: Top 25 Places to Visit in Nepal.</a>
	                                </h3> 
	                            </header>
	                        </article>
	                    </div>
	                    <div class="projectitem video-item">
	                        <article class="module-post">
	                            <figure>
	                               <a href="#"><img src="https://i1.ytimg.com/vi/LF0wJgg6WCk/sddefault.jpg"></a>
	                            </figure>
	                            <header class="entry-header">
	                                <h3 class="entry-title">
	                                    <a href="#">Travel Diary: Top 25 Places to Visit in Nepal.</a>
	                                </h3> 
	                            </header>
	                        </article>
	                    </div>
	                    <div class="projectitem video-item">
	                        <article class="module-post">
	                            <figure>
	                               <a href="#"><img src="https://i1.ytimg.com/vi/LF0wJgg6WCk/sddefault.jpg"></a>
	                            </figure>
	                            <header class="entry-header">
	                                <h3 class="entry-title">
	                                    <a href="#">Travel Diary: Top 25 Places to Visit in Nepal.</a>
	                                </h3> 
	                            </header>
	                        </article>
	                    </div>
	                    <div class="projectitem video-item">
	                        <article class="module-post">
	                            <figure>
	                               <a href="#"><img src="https://i1.ytimg.com/vi/LF0wJgg6WCk/sddefault.jpg"></a>
	                            </figure>
	                            <header class="entry-header">
	                                <h3 class="entry-title">
	                                    <a href="#">Travel Diary: Top 25 Places to Visit in Nepal.</a>
	                                </h3> 
	                            </header>
	                        </article>
	                    </div>
						
					</div>
				</div>
				</div>
			</div>	
		</div>
	</div>
</div>

</div> <!-- #primary -->
</div> <!-- #main -->
</div> <!-- .front-page-home-sections -->



</div><!-- #page -->
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
	</footer><!-- #colophon -->
	<a href="#page" id="return-to-top"> <i class="wt-icon wt-icon-angle-up"></i></a>


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
        
        <!-- air datepicker css -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.min.css">


        <!-- ion range slider -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/css/ion.rangeSlider.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/css/ion.rangeSlider.skinFlat.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/css/ion.rangeSlider.skinHTML5.min.css"> -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/css/ion.rangeSlider.skinModern.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/css/ion.rangeSlider.skinNice.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/css/ion.rangeSlider.skinSimple.min.css"> -->

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/js/ion.rangeSlider.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.min.js"></script>

        <script type='text/javascript' src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/WOW.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/jquery.smartmenus.min.js"></script>
        <script type="text/javascript">
            


         jQuery(function($) {

	            


    $('.range-datepicker').datepicker({
        language: 'en',
        range:true,
        minDate: new Date() // Now can select only dates, which goes after today
    });
     //header cart 
      //  $("#header-cart").on("mouseenter", function() {
      //   $(".woo-cart").addClass('active');
      // });
      //  $("#header-cart").mouseleave(function() {
      //   $(".woo-cart").removeClass('active');
      // });

        //search form header
        $('.dispaly-search-form').click(function(){
            $('#search-form').addClass('is-visible');
        });
         $('.close-action').click(function(){
            $('#search-form').removeClass('is-visible');
        });

	$("#ws-min-price").ionRangeSlider({
	    type: "double",
	    min: 500,
	    max: 20000,
	    grid: true,
	    force_edges: true
	});

	// SmartMenus init
	$(function() {
	$('#main-menu').smartmenus({
		subMenusSubOffsetX: 1,
		subMenusSubOffsetY: -8
	});
	});
	// SmartMenus mobile menu toggle button
	$(function() {
	var $mainMenuState = $('#main-menu-state');
	if ($mainMenuState.length) {
		// animate mobile menu
		$mainMenuState.change(function(e) {
		var $menu = $('#main-menu');
		if (this.checked) {
			$menu.hide().slideDown(250, function() { $menu.css('display', ''); });
		} else {
			$menu.show().slideUp(250, function() { $menu.css('display', ''); });
		}
		});
		// hide mobile menu beforeunload
		$(window).bind('beforeunload unload', function() {
		if ($mainMenuState[0].checked) {
			$mainMenuState[0].click();
		}
		});
	}
	});
  //end

  $('#top-mobile-menu').click(function(){
  	$('.ws-theme-topnavbar-collapse').toggle('slide');
  	$(this).toggleClass('open');
  });


	$(document).ready(function() {
			// grab the initial top offset of the navigation
		   	var stickyNavTop = $('#header').offset().top + 40;
		   	
		   	// our function that decides weather the navigation bar should have "fixed" css position or not.
		   	var stickyNav = function(){
			    var scrollTop = $(window).scrollTop(); // our current vertical position from the top
			         
			    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
			    // otherwise change it back to relative
			    if (scrollTop > stickyNavTop) { 
			        $('#header').addClass('sticky');
			    } else {
			        $('#header').removeClass('sticky'); 
			    }
			};

			stickyNav();
			// and run it again every time you scroll
			$(window).scroll(function() {
				stickyNav();
			});


		});

	//  $(document).ready(function(){
		$('.ws-travel-banner').slick({
				dots: true,
				autoplay: true,
				arrows: false,
				infinite: true,
				autoplaySpeed:14000,
				speed: 1000,
				slidesToShow: 1,
				adaptiveHeight: true,
				fade: true,
				draggable: true,
				slidesToScroll: 1,
      			touchThreshold: 1000,
				cssEase: 'ease'
		});

		$('.ws-travel-banner').on('swipe', function(event, slick, currentSlide){
			$('.ws-featured-slider-contents').removeClass('animated fadeInUp');
			$('.slick-active .ws-featured-slider-contents').addClass('animated fadeInUp');
		});

		$('.ws-travel-banner').on('beforeChange ', function(event,slick, currentSlide) {
            $('.ws-featured-slider-contents').addClass('hidden');
			// $('.slick-active .ws-featured-slider-contents').addClass('animated fadeInUp');
        });
		$('.ws-travel-banner').on('afterChange ', function(event,slick, currentSlide) {
            $('.ws-featured-slider-contents').removeClass('hidden animated fadeInUp');
			$('.slick-active .ws-featured-slider-contents').addClass('animated fadeInUp');
        });


	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();

      $('.multiple-items').slick({
		  infinite: true,
		  speed: 300,
		  arrows: true,
		  slidesToShow: 2,
		  slidesToScroll:2,
		  draggable: false,
		autoplay: true,
			autoplaySpeed: 6000,
		  responsive: [
		    {
		      breakpoint: 991.99,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: true,
		        dots:true,
		        arrows:false,
		        draggable: true
		      }
		    },
		    {
		      breakpoint: 767.99,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: true,
		        dots:true,
		        draggable: true,
		        arrows:false
		      }
		    },
		    {
		      breakpoint: 575.99,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: true,
		        dots:true,
		        arrows:false,
		        draggable: true
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});

$('.ws-travel-testimonial-slider').slick({
	dots: true,
	arrows:false,
	infinite: true,
	speed: 900,
	slidesToShow: 1,
	centerMode: true,
	autoplay: true,
	autoplaySpeed: 6000,
	variableWidth: true
});
 $('.slider-single').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	autoplay: true,
	autoplaySpeed: 6000,
	fade: false,
	adaptiveHeight: true,
	infinite: false,
	useTransform: true,
	speed: 400,
	cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
 });

 $('.slider-nav')
 	.on('init', function(event, slick) {
 		$('.slider-nav .slick-slide.slick-current').addClass('is-active');
 	})
 	.slick({
 		slidesToShow: 3,
 		slidesToScroll: 3,
 		dots: false,
 		focusOnSelect: false,
 		infinite: true,
 		draggable: true,
 		centerMode:true,
 		responsive: [
 		{
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
 		},
 		{
 			breakpoint: 575,
 			settings: {
 				slidesToShow: 1,
 				slidesToScroll: 1,
			}
 		}]
 	});

 $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
 	$('.slider-nav').slick('slickGoTo', currentSlide);
 	var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
 	$('.slider-nav .slick-slide.is-active').removeClass('is-active');
 	$(currrentNavSlideElem).addClass('is-active');
 });

 $('.slider-nav').on('click', '.slick-slide', function(event) {
 	event.preventDefault();
 	var goToSingleSlide = $(this).data('slick-index');

 	$('.slider-single').slick('slickGoTo', goToSingleSlide);
 });

$(document).ready(larg);

 $(window).resize(larg);

 function larg(){
   var interval = setInterval(function(){
	   if(jQuery('.btn-group.bootstrap-select').length > 0){
			if (Modernizr.mq('(min-width: 992px)')) {
				var bannerHeight = $('#ws-advance-form').outerHeight();
				$('.ws-theme-addons-banner-slider,.ws-travel-banner .slick-list').height(bannerHeight + 120);
			} else{
				var windowHeight = $(window).height();
				$('.ws-theme-addons-banner-slider,.ws-travel-banner .slick-list').height(500);
			}
			clearInterval(interval);
	   }
   },1000)
	
 }	


 $('#onload').hide();
		    
});

</script>


</body>
</html>
