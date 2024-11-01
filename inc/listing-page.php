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

    <body class="archive post-type-archive layout-right-sidebar group-blog hfeed" data-spy="scroll" data-target="#myScrollspy" data-offset="20">
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
            <div class="custom-header" style="background-image: url(<?php echo get_template_directory_uri();?>/images/banner2.png);    background-position: 50% 54%;background-size: cover;background-attachment: scroll;">
                <div class="container">
                    <div class="row">
                        <header class="entry-header">
                            <h1 class="entry-title">Trip Listing</h1>
                        </header>
                        <!-- .entry-header -->
                    </div>
                </div>
            </div>
            <div id="breadcrumb">
                <div class="container">

                    <!-- <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
                        <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <meta name="numberOfItems" content="2">
                            <meta name="itemListOrder" content="Ascending">
                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-begin"><a href="http://skynet.wensolutions.com/co-workers/sushil/travel-log" rel="home"><span itemprop="name">Home</span></a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end"><span itemprop="name">Features</span>
                                <meta itemprop="position" content="2">
                            </li>
                        </ul>
                    </div> -->
                    <!-- <nav role="breadcrumb" class="ws-theme-addons-breadcrumb">
                        <ol class="ws-theme-breadcrumb">
                            <li><a href="#0">Home</a></li>
                            <li><a href="#0">Gallery</a></li>
                            <li><a href="#0">Web</a></li>
                            <li class="current"><em>Project</em></li>
                        </ol>
                    </nav>
                    <nav role="breadcrumb" class="ws-theme-addons-breadcrumb">
                        <ol class="ws-theme-breadcrumb custom-separator">
                            <li><a href="#0">Home</a></li>
                            <li><a href="#0">Gallery</a></li>
                            <li><a href="#0">Web</a></li>
                            <li class="current"><em>Project</em></li>
                        </ol>
                    </nav> -->
                    <nav role="breadcrumb" class="ws-theme-addons-breadcrumb">
                        <ol class="ws-theme-breadcrumb custom-separator custom-icons">
                            <li><a href="#0"> <i class="wt-icon wt-icon-home" aria-hidden="true"></i> Home</a></li>
                            <li class="current"><i class="wt-icon wt-icon-th-large" aria-hidden="true"></i> <em> Trip Listing</em></li>
                            <!--< li><a href="#0">Web</a></li>
                            <li class="current"><em>Project</em></li> -->
                        </ol>
                    </nav>
                    <!-- <nav role="breadcrumb" class="ws-theme-addons-breadcrumb">
                        <ol class="ws-theme-breadcrumb triangle">
                            <li><a href="#0">Home</a></li>
                            <li><a href="#0">Gallery</a></li>
                            <li><a href="#0">Web</a></li>
                            <li class="current"><em>Project</em></li>
                        </ol>
                    </nav>
                    <nav role="breadcrumb" class="ws-theme-addons-breadcrumb">
                        <ol class="ws-theme-breadcrumb triangle custom-icons">
                            <li><a href="#0">Home</a></li>
                            <li><a href="#0">Gallery</a></li>
                            <li class="current"><em>Web</em></li>
                            <li><em>Project</em></li>
                        </ol>
                    </nav>
                    <nav role="breadcrumb" class="ws-theme-addons-breadcrumb">
                        <ol class="ws-theme-multi-steps text-center">
                            <li class="visited"><a href="#0">Cart</a></li>
                            <li class="visited" ><a href="#0">Billing</a></li>
                            <li class="current"><em>Delivery</em></li>
                            <li><em>Review</em></li>
                        </ol>
                    </nav>
                    <nav role="breadcrumb" class="ws-theme-addons-breadcrumb">
                        <ol class="ws-theme-multi-steps text-center custom-icons">
                            <li class="visited"><a href="#0">Cart</a></li>
                            <li class="visited" ><a href="#0">Billing</a></li>
                            <li class="current"><em>Delivery</em></li>
                            <li><em>Review</em></li>
                        </ol>
                    </nav>
                    <nav role="breadcrumb" class="ws-theme-addons-breadcrumb">
                        <ol class="ws-theme-multi-steps text-top">
                            <li class="visited"><a href="#0">Cart</a></li>
                            <li class="visited" ><a href="#0">Billing</a></li>
                            <li class="current"><em>Delivery</em></li>
                            <li><em>Review</em></li>
                        </ol>
                    </nav>
                    <nav role="breadcrumb" class="ws-theme-addons-breadcrumb">
                        <ol class="ws-theme-multi-steps text-bottom count">
                            <li class="visited"><a href="#0">Cart</a></li>
                            <li class="visited" ><a href="#0">Billing</a></li>
                            <li class="current"><em>Delivery</em></li>
                            <li><em>Review</em></li>
                        </ol>
                    </nav> -->
                </div>
            </div>


	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<div class="ws-theme-section-filter  clearfix">
                        	<div class="wp-travel-toolbar wp-toolbar-left">
                                <h4 class="font16" margin-0>Filter By</h4>
                                <div class="form-control wp-toolbar-filter-field wt-filter-by-price">
                                    <select name="price" class="wp_travel_input_filters price selectpicker show-tick" title="Price">
                                        <option value="low_high" data-type="meta">Price low to high</option>
                                        <option value="high_low" data-type="meta">Price high to low</option>
                                    </select>
                                </div>
                                <div class="form-control wp-toolbar-filter-field wt-filter-by-itinerary-types ">
                                    <select name="type" id="type" class="wp_travel_input_filters type selectpicker show-tick"  data-live-search="true" title="Trip Type" data-size="10">
                                        <option class="level-0" value="16">Casual Tours</option>
                                         <option class="level-0" value="16">Casual Tours</option>
                                          <option class="level-0" value="16">Casual Tours</option>
                                           <option class="level-0" value="16">Casual Tours</option>
                                            <option class="level-0" value="16">Casual Tours</option>
                                             <option class="level-0" value="16">Casual Tours</option>
                                    </select>
                                </div>
                                <div class="form-control wp-toolbar-filter-field wt-filter-by-travel-locations">
                                    <select name="location" id="location" class="wp_travel_input_filters location selectpicker show-tick"  data-live-search="true" title="Location" data-size="10">
                                        <option class="level-0" value="8">Bhutan</option>
                                        <option class="level-0" value="9">Nepal</option>
                                        <option class="level-0" value="15">Thailand</option>
                                        <option class="level-0" value="8">Bhutan</option>
                                        <option class="level-0" value="9">Nepal</option>
                                        <option class="level-0" value="15">Thailand</option>
                                        <option class="level-0" value="8">Bhutan</option>
                                        <option class="level-0" value="9">Nepal</option>
                                        <option class="level-0" value="15">Thailand</option>
                                        <option class="level-0" value="8">Bhutan</option>
                                        <option class="level-0" value="9">Nepal</option>
                                        <option class="level-0" value="15">Thailand</option>
                                    </select>
                                </div>
                                <div class="form-control wp-travel-filter-button">
                                    <button class="btn-wp-travel-filter">Show</button>
                                </div>
                                <div class="view-control">
									<a class="" href="//skynet.wensolutions.com/travel-log/itinerary/?view_mode=grid">
										<i class="wt-icon wt-icon-th-large" aria-hidden="true"></i>
									</a>
								</div>
								<div class="view-control">		
									<a class="active" href="//skynet.wensolutions.com/travel-log/itinerary/?view_mode=list">
										<i class="wt-icon wt-icon-bars" aria-hidden="true"></i>
									</a>
                                </div>
                            </div>
                        </div>
                        <!-- list view and grid view design 

                        add class in ws-listing-trips 
                        for grid view .listing-grid-view and for multiple column .one-column .two-column .three-column .four-column
                        for grid view content only of 10 words

                        for list view .listing-list-view 

                        for list view content of 24 words
                         -->
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
                                  <source media="(min-width: 1200px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg">
                                 <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-992.jpg">
                                  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-smallscreen.jpg" alt="">
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
                                    <div class="ws-rating-more font14">
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
                                  <source media="(min-width: 1200px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg">
                                 <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-992.jpg">
                                  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-smallscreen.jpg" alt="">
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
                                    <div class="ws-rating-more font14">
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
                                  <source media="(min-width: 1200px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg">
                                 <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-992.jpg">
                                  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-smallscreen.jpg" alt="">
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
                                    <div class="ws-rating-more font14">
                                    <div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i><span>2 Review</span></div>

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
                                <p class="time">7 Days 8 Nights</p>
                                <picture>
                                  <source media="(min-width: 1200px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg">
                                 <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-992.jpg">
                                  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-smallscreen.jpg" alt="">
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
                                    <div class="ws-rating-more font14">
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
                                  <source media="(min-width: 1200px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg">
                                 <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-992.jpg">
                                  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-smallscreen.jpg" alt="">
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
                                    <div class="ws-rating-more font14">
                                    <div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i><span>2 Review</span></div>

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
                                <p class="time">7 Days 8 Nights</p>
                                <picture>
                                  <source media="(min-width: 1200px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/slide-767.jpg">
                                 <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-992.jpg">
                                  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-smallscreen.jpg" alt="">
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
                                    <div class="ws-rating-more font14">
                                    <div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i><span>2 Review</span></div>

                                    <div class="dream-btn-wrap">
                                        <a href="#" class="btn btn-dream">More Info</a>
                                    </div>
                                    </div>
                                </aside>
                                
                            </div>


                        </div>
                        
						<div class="ws-listing-trips listing-list-view wow fadeInUp clearfix">
			                <div class="card clearfix">
			                    <div class="featured-image">
			                    <div class="wp-travel-offer">
									<span>Offer</span>
								</div>
			                    <a href="#">
			                    <div class="feature-image-thumb">
			                    <picture>
								  <source media="(min-width: 1200px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-default.jpg">
								 <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-992.jpg">
								  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-smallscreen.jpg" alt="">
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
			                    <picture>
                                  <source media="(min-width: 1200px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-default.jpg">
                                 <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-992.jpg">
                                  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-smallscreen.jpg" alt="">
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
									<div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i><span>2 Review</span></div>

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
                                  <source media="(min-width: 1200px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-default.jpg">
                                 <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-992.jpg">
                                  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-smallscreen.jpg" alt="">
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
									<div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i><span>2 Review</span></div>

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
                                  <source media="(min-width: 1200px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-default.jpg">
                                 <source media="(min-width: 992px)" srcset="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-992.jpg">
                                  <img src="http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/zermatt-smallscreen.jpg" alt="">
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
									<div class="rating"><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star"></i><i class="wt-icon wt-icon-star-half-alt"></i><span>2 Review</span></div>

									<div class="dream-btn-wrap">
										<a href="#" class="btn btn-dream">More Info</a>
									</div>
									</div>
								</aside>
			                    
			                </div>


               			</div>

                            <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination">
                                    <li class="button"><a class="disabled" href="#0">Prev</a></li>
                                    <li><a class="current" href="#0">1</a></li>
                                    <li><a href="#0">2</a></li>
                                    <li><a href="#0">3</a></li>
                                    <li><a href="#0">4</a></li>
                                    <li><span>...</span></li>
                                    <li><a href="#0">20</a></li>
                                    <li class="button"><a href="#0">Next</a></li>
                                </ul>
                            </nav> <!--default paginations -->
                            <!-- <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination no-space">
                                    <li class="button"><a href="#0">Prev</a></li>
                                    <li><a href="#0">1</a></li>
                                    <li><a href="#0">2</a></li>
                                    <li><a class="current" href="#0">3</a></li>
                                    <li><a href="#0">4</a></li>
                                    <li><span>...</span></li>
                                    <li><a href="#0">20</a></li>
                                    <li class="button"><a href="#0">Next</a></li>
                                </ul>
                            </nav> --> <!--.no-space-->
                            <!-- <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination move-buttons custom-icons">
                                    <li class="button"><a class="disabled" href="#0">Prev</a></li>
                                    <li><a class="current" href="#0">1</a></li>
                                    <li><a href="#0">2</a></li>
                                    <li><a href="#0">3</a></li>
                                    <li><a href="#0">4</a></li>
                                    <li><span>...</span></li>
                                    <li><a href="#0">20</a></li>
                                    <li class="button"><a href="#0">Next</a></li>
                                </ul>
                            </nav> --> <!--.move-buttons .custom-icons-->
                            <!-- <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination no-space move-buttons custom-icons">
                                    <li class="button"><a href="#0">Prev</a>
                                    <li><a href="#0">1</a>
                                    <li><a href="#0">2</a>
                                    <li><a class="current" href="#0">3</a>
                                    <li><a href="#0">4</a>
                                    <li><span>...</span>
                                    <li><a href="#0">20</a>
                                    <li class="button"><a href="#0">Next</a>
                                </ul>
                            </nav> --> <!--.no-space .move-buttons .custom-icons-->
                            <!-- <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination custom-buttons">
                                    <li class="button"><a href="#0">Prev</a></li>
                                    <li><a href="#0">1</a></li>
                                    <li><a href="#0">2</a></li>
                                    <li><a class="current" href="#0">3</a></li>
                                    <li><a href="#0">4</a></li>
                                    <li><span>...</span></li>
                                    <li><a href="#0">20</a></li>
                                    <li class="button"><a href="#0">Next</a></li>
                                </ul>
                            </nav> --> <!-- .custom-buttons -->
                            <!-- <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination no-space custom-buttons">
                                    <li class="button"><a href="#0">Prev</a></li>
                                    <li><a href="#0">1</a></li>
                                    <li><a href="#0">2</a></li>
                                    <li><a class="current" href="#0">3</a></li>
                                    <li><a href="#0">4</a></li>
                                    <li><span>...</span></li>
                                    <li><a href="#0">20</a></li>
                                    <li class="button"><a href="#0">Next</a></li>
                                </ul>
                            </nav> --> <!-- .no-space .custom-buttons -->
                            <!-- <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination">
                                    <li class="button"><a href="#0">Prev</a></li>
                                    <li class="button"><a href="#0">Next</a></li>
                                </ul>
                            </nav>  --><!-- without any numbers -->
                            <!-- <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination custom-buttons">
                                    <li class="button"><a href="#0">Prev</a></li>
                                    <li class="button"><a href="#0">Next</a></li>
                                </ul>
                            </nav> --> <!-- ws-theme-pagination-wrapper -->
                            <!-- <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination animated-buttons custom-icons">
                                    <li class="button"><a href="#0"><i>Prev</i></a></li>
                                    <li class="button"><a href="#0"><i>Next</i></a></li>
                                </ul>
                            </nav> --> <!-- .animated-buttons .custom-icons -->
                            <!-- <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination animated-buttons custom-icons">
                                    <li class="button"><a href="#0"><i>Prev</i></a></li>
                                    <li><a href="#0">1</a></li>
                                    <li><a href="#0">2</a></li>
                                    <li><a class="current" href="#0">3</a></li>
                                    <li><a href="#0">4</a></li>
                                    <li><span>...</span></li>
                                    <li><a href="#0">20</a></li>
                                    <li class="button"><a href="#0"><i>Next</i></a></li>
                                </ul>
                            </nav> --> <!-- .animated-buttons .custom-icons -->
                            <!-- <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination no-space animated-buttons custom-icons">
                                    <li class="button"><a href="#0"><i>Prev</i></a></li>
                                    <li><a href="#0">1</a></li>
                                    <li><a href="#0">2</a></li>
                                    <li><a class="current" href="#0">3</a></li>
                                    <li><a href="#0">4</a></li>
                                    <li><span>...</span></li>
                                    <li><a href="#0">20</a></li>
                                    <li class="button"><a href="#0"><i>Next</i></a></li>
                                </ul>
                            </nav> --> <!-- .no-space .animated-buttons .custom-icons -->


               		</main>
               	</div>
               	<aside id="secondary" class="widget-area" role="complementary">

                    <div class="sticky-sidebar">
                    <!-- dark and light layout for advance form .dark-layout and .light-layout-->
					<div class="ws-advance-form light-layout  wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="1s" id="ws-advance-form">
						 <form action="/action_page.php">
						     <h3 class="mt-0 font24 text-uppercase mb-15 font-weight-500 ">search tours</h3>
						     <div class="form-content-wrapper">
						        <div class="form-top-wrapper">
						           <div class="form-content">
						              <label class="d-block ml-5 mb-5 mt-0 font14" for="ws-keyword">Search Keyword</label>
						              <input type="text" id="ws-keyword" name="firstname" placeholder="Search by keyboard" />
						           </div>
						           <div class="form-content">
						              <label class="d-block ml-5 mb-5 mt-0 font14" for="ws-destination">Choose Destinations</label>
						              <select class="select form-control trip-destinations selectpicker show-menu-arrow show-tick" data-live-search="true" title="Select Destination" id="ws-destination" data-size="10">
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
						              <label class="d-block ml-5 mb-5 mt-0 font14" for="ws-trip-type">Choose Trip Type</label>
						              <select class="select form-control trip-type selectpicker show-menu-arrow show-tick" id="ws-trip-type" data-live-search="true" title="Select Trip Type" data-selected-text-format="count" multiple>

										    <option value="31">Rafting</option>
						                 	<option value="32">Paragliding</option>
						                 	<option value="33">Jungle Safari</option>
						                 	<option value="34">Trekk</option>
						                 	<option value="35">Boating</option>
						                 	<option value="36">Sight Seeing</option>
						                 
						              </select>
						           </div>
						           <div class="form-content">
						              <label class="d-block ml-5 mb-5 mt-0 font14" for="ws-trip-duration">Choose Trip duration</label>
						              <select class="select form-control trip-duration selectpicker show-menu-arrow show-tick" title="Select Duration" id="ws-trip-duration" data-live-search="true" data-size="10">
						                 <option value="41">2 days</option>
						                 <option value="42">4 days</option>
						                 <option value="43">1 week</option>
						              </select>
						           </div>
                                   <div class="form-content wp-travel-form-field wp-travel-trip-duration">
                                        <label class="d-block ml-5 mb-5 mt-0 font14">Trip Start End Range</label>
                                        <input type="text"
                                                data-range="true"
                                                data-multiple-dates-separator=" - "
                                                data-language="en" placeholder="Select a date range" 
                                                class="range-datepicker"/>
                                   </div>
						           <div class="prices price-min-max">
						              <label class="d-block ml-5 mb-5 mt-0 font14" for="ws-min-price">Price Range</label>
						              <input class="irs-hidden-input" type="number" name="" id="ws-min-price" />
						           </div>
                                   
						        </div>
						        
						        <input type="submit" value="Search" class="button"  />
						       </div>
						  </form>
					  </div>
                      <div class="ws-question dotted-overlay ws-side-wrap wow fadeInUp" style="background-image: url(http://skynet.wensolutions.com/ws-theme-addon/wp-content/plugins/ws-theme-addons/assets/public/images/got-question.jpg); visibility: visible; animation-name: fadeInUp;">
                        <div class="ws-question-wrap">
                            <h3>Get a Question ?</h3>
                            <p class="info">Do not hesitage to give us a call. We are an expert team and we are happy to talk to you.</p>
                            <p><a href="tel:(123)456-789">(123)456-789</a></p>
                            <p><a href="mailto:company@domain.com">company@domain.com</a></p>
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

<script type="text/javascript" scr="https://cdnjs.cloudflare.com/ajax/libs/stickyfill/2.0.3/stickyfill.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js"></script>
<script type='text/javascript' src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/WOW.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/jquery.smartmenus.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {

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


        $('.range-datepicker').datepicker({
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
    });
        </script>

    </body>

    </html>