<?php
/*Template Name: Home page*/

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> div and everything up until <div id="content">
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
                /*margin-top: 0px !important;*/
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

                            <a href="#0" class="btn rounded-0 btn-primary">Primary</a>
                            <a href="#0" class="btn rounded-0 btn-default">Default</a>
                            <a href="#0" class="btn rounded-0 btn-secondary">Secondary</a>
                            <a href="#0" class="btn rounded-0 btn-success">Success</a>
                            <a href="#0" class="btn rounded-0 btn-info">Info</a>
                            <a href="#0" class="btn rounded-0 btn-warning">Warning</a>
                            <a href="#0" class="btn rounded-0 btn-danger">Danger</a>
                            <a href="#0" class="btn rounded-0 btn-black">Black</a>
            
                             <br /><br />

                             <a href="#0" class="btn rounded-0 btn-outline-primary">Primary</a>
                            <a href="#0" class="btn rounded-0 btn-outline-default">Default</a>
                            <a href="#0" class="btn rounded-0 btn-outline-secondary">Secondary</a>
                            <a href="#0" class="btn rounded-0 btn-outline-success">Success</a>
                            <a href="#0" class="btn rounded-0 btn-outline-info">Info</a>
                            <a href="#0" class="btn rounded-0 btn-outline-warning">Warning</a>
                            <a href="#0" class="btn rounded-0 btn-outline-danger">Danger</a>
                            <a href="#0" class="btn rounded-0 btn-outline-black">Black</a>

                         </div><br /><br />

                         <div class="row">
                            <div class="col-sm-6">
                                <p class="text-primary">.text-primary</p>
                                <p class="text-default">.text-default</p>
                                <p class="text-secondary">.text-secondary</p>
                                <p class="text-success">.text-success</p>
                                <p class="text-info">.text-info</p>
                                <p class="text-warning">.text-warning</p>
                                <p class="text-danger">.text-danger</p>
                                <p class="text-light bg-dark">.text-light</p>
                                <p class="text-dark">.text-dark</p>
                                <p class="text-muted">.text-muted</p>
                                <p class="text-white bg-dark">.text-white</p>
                            </div>
                            <div class="col-sm-6">
                                <p><a href="#" class="text-primary">Primary link</a></p>
                                <p><a href="#" class="text-default">Default link</a></p>
                                <p><a href="#" class="text-secondary">Secondary link</a></p>
                                <p><a href="#" class="text-success">Success link</a></p>
                                <p><a href="#" class="text-info">Info link</a></p>
                                <p><a href="#" class="text-warning">Warning link</a></p>
                                <p><a href="#" class="text-danger">Danger link</a></p>
                                <p><a href="#" class="text-light bg-dark">Light link</a></p>
                                <p><a href="#" class="text-dark">Dark link</a></p>
                                <p><a href="#" class="text-muted">Muted link</a></p>
                                <p><a href="#" class="text-white bg-dark">White link</a></p>
                            </div>

                            <div class="col-sm-6">
                                <div><a href="0#" class="d-block p-3 mb-2 bg-primary text-white">.bg-primary</a></div>
                                <div><a href="0#" class="d-block p-3 mb-2 bg-secondary text-white">.bg-secondary</a></div>
                                <div><a href="0#" class="d-block p-3 mb-2 bg-success text-white">.bg-success</a></div>
                                <div><a href="0#" class="d-block p-3 mb-2 bg-danger text-white">.bg-danger</a></div>
                                <div><a href="0#" class="d-block p-3 mb-2 bg-warning text-white">.bg-warning</a></div>
                                <div><a href="0#" class="d-block p-3 mb-2 bg-info text-white">.bg-info</a></div>
                                <div><a href="0#" class="d-block p-3 mb-2 bg-light text-dark">.bg-light</a></div>
                                <div><a href="0#" class="d-block p-3 mb-2 bg-dark text-white">.bg-dark</a></div>
                                <div><a href="0#" class="d-block p-3 mb-2 bg-white text-dark">.bg-white</a></div>
                                <br /><br /><br />
                                <h1>Example heading <span class="badge badge-secondary">New</span></h1>
                                <h2>Example heading <span class="badge badge-secondary">New</span></h2>
                                <h3>Example heading <span class="badge badge-secondary">New</span></h3>
                                <h4>Example heading <span class="badge badge-secondary">New</span></h4>
                                <h5>Example heading <span class="badge badge-secondary">New</span></h5>
                                <h6>Example heading <span class="badge badge-secondary">New</span></h6>

                                <br /><br />
                                <button type="button" class="btn btn-primary">
                                    Notifications <span class="badge badge-light">4</span>
                                </button>
                                <br /><br />
                                <button type="button" class="btn btn-primary">
                                    Profile <span class="badge badge-light">9</span>
                                    <span class="sr-only">unread messages</span>
                                </button>
                                <br /><br />
                                <h2>Contextual variations</h2>
                                <span class="badge badge-primary">Primary</span>
                                <span class="badge badge-secondary">Secondary</span>
                                <span class="badge badge-success">Success</span>
                                <span class="badge badge-danger">Danger</span>
                                <span class="badge badge-warning">Warning</span>
                                <span class="badge badge-info">Info</span>
                                <span class="badge badge-light">Light</span>
                                <span class="badge badge-dark">Dark</span>
                                <br />
                                <br />
                                <h2>Pill badges</h2>
                                <span class="badge badge-pill badge-primary">Primary</span>
                                <span class="badge badge-pill badge-secondary">Secondary</span>
                                <span class="badge badge-pill badge-success">Success</span>
                                <span class="badge badge-pill badge-danger">Danger</span>
                                <span class="badge badge-pill badge-warning">Warning</span>
                                <span class="badge badge-pill badge-info">Info</span>
                                <span class="badge badge-pill badge-light">Light</span>
                                <span class="badge badge-pill badge-dark">Dark</span>
                                <br /><br />
                                <h2>Links</h2>
                                <a href="#" class="badge badge-primary">Primary</a>
                                <a href="#" class="badge badge-secondary">Secondary</a>
                                <a href="#" class="badge badge-success">Success</a>
                                <a href="#" class="badge badge-danger">Danger</a>
                                <a href="#" class="badge badge-warning">Warning</a>
                                <a href="#" class="badge badge-info">Info</a>
                                <a href="#" class="badge badge-light">Light</a>
                                <a href="#" class="badge badge-dark">Dark</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="alert alert-primary" role="alert">
                                This is a primary alert—check it out!
                                    <hr>
                                    <a href="0#" class="alert-link">click here</a>
                                </div>
                                <div class="alert alert-secondary" role="alert">
                                    This is a secondary alert—check it out!
                                    <hr>
                                    <a  href="0#" class="alert-link">click here</a>
                                </div>
                                <div class="alert alert-success" role="alert">
                                    This is a success alert—check it out!
                                    <hr>
                                    <a href="0#" class="alert-link">click here</a>
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    This is a danger alert—check it out!
                                    <hr>
                                    <a href="0#" class="alert-link">click here</a>
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    This is a warning alert—check it out!
                                    <hr>
                                    <a href="0#" class="alert-link">click here</a>
                                </div>
                                <div class="alert alert-info" role="alert">
                                    This is a info alert—check it out!
                                    <hr>
                                    <a href="0#" class="alert-link">click here</a>
                                </div>
                                <div class="alert alert-light" role="alert">
                                    This is a light alert—check it out!
                                    <hr>
                                    <a href="0#" class="alert-link">click here</a>
                                </div>
                                <div class="alert alert-dark" role="alert">
                                    This is a dark alert—check it out!
                                    <hr>
                                    <a href="0#" class="alert-link">click here</a>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <br /><br /><br /><br />
                                <h2>Breadcrumbs</h2>
                                <nav role="breadcrumb" class="ws-theme-addons-breadcrumb">
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
                                </nav>
                                <nav role="breadcrumb" class="ws-theme-addons-breadcrumb">
                                    <ol class="ws-theme-breadcrumb custom-separator custom-icons">
                                        <li><a href="#0"> <i class="wt-icon wt-icon-home" aria-hidden="true"></i> Home</a></li>
                                        <li class="current"><i class="wt-icon wt-icon-th-large" aria-hidden="true"></i> <em> Trip Listing</em></li>
                                        <li><a href="#0">Web</a></li>
                                        <li class="current"><em>Project</em></li>
                                    </ol>
                                </nav>
                                <nav role="breadcrumb" class="ws-theme-addons-breadcrumb">
                                    <ol class="ws-theme-breadcrumb triangle">
                                        <li><a href="#0">Home</a></li>
                                        <li><a href="#0">Gallery</a></li>
                                        <li><a href="#0">Web</a></li>
                                        <li class="current"><em>Project</em></li>
                                    </ol>
                                </nav>
                                <nav role="breadcrumb" class="ws-theme-addons-breadcrumb">
                                    <ol class="ws-theme-breadcrumb triangle custom-icons">
                                        <li><a href="#0"><i class="wt-icon wt-icon-th-large" aria-hidden="true"></i> Home</a></li>
                                        <li><a href="#0"><i class="wt-icon wt-icon-th-large" aria-hidden="true"></i> Gallery</a></li>
                                        <li class="current"><em><i class="wt-icon wt-icon-th-large" aria-hidden="true"></i>  Web</em></li>
                                        <li><em><i class="wt-icon wt-icon-th-large" aria-hidden="true"></i> Project</em></li>
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
                                        <li class="visited"><a href="#0"><i class="wt-icon wt-icon-th-large" aria-hidden="true"></i>  Cart</a></li>
                                        <li class="visited" ><a href="#0"><i class="wt-icon wt-icon-th-large" aria-hidden="true"></i>  Billing</a></li>
                                        <li class="current"><em><i class="wt-icon wt-icon-th-large" aria-hidden="true"></i>  Delivery</em></li>
                                        <li><em><i class="wt-icon wt-icon-th-large" aria-hidden="true"></i>  Review</em></li>
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
                                </nav>

                            </div>

                            <div class="col-sm-12">
                                <br /><br />
                                <table>
                                    <thead>
                                        <tr>
                                        <th>Heading</th>
                                        <th>Example</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>
                                            <p><code class="highlighter-rouge">&lt;h1&gt;&lt;/h1&gt;</code></p>

                                        </td>
                                        <td><span class="h1">h1. Bootstrap heading</span></td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <p><code class="highlighter-rouge">&lt;h2&gt;&lt;/h2&gt;</code></p>

                                        </td>
                                        <td><span class="h2">h2. Bootstrap heading</span></td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <p><code class="highlighter-rouge">&lt;h3&gt;&lt;/h3&gt;</code></p>

                                        </td>
                                        <td><span class="h3">h3. Bootstrap heading</span></td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <p><code class="highlighter-rouge">&lt;h4&gt;&lt;/h4&gt;</code></p>

                                        </td>
                                        <td><span class="h4">h4. Bootstrap heading</span></td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <p><code class="highlighter-rouge">&lt;h5&gt;&lt;/h5&gt;</code></p>

                                        </td>
                                        <td><span class="h5">h5. Bootstrap heading</span></td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <p><code class="highlighter-rouge">&lt;h6&gt;&lt;/h6&gt;</code></p>

                                        </td>
                                        <td><span class="h6">h6. Bootstrap heading</span></td>
                                        </tr>
                                    </tbody>
                                    </table>

                                        <p class="description">Make a paragraph stand out by adding <code>.lead</code></p>

                                    <p class="lead">
                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
                                    </p>
                                    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                    <p><del>This line of text is meant to be treated as deleted text.</del></p>
                                    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                                    <p><u>This line of text will render as underlined</u></p>
                                    <p><small>This line of text is meant to be treated as fine print.</small></p>
                                    <p><strong>This line rendered as bold text.</strong></p>
                                    <p><em>This line rendered as italicized text.</em></p>


                                    <p><abbr title="attribute">attr</abbr></p>
                                    <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>


                                    <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    </blockquote>
                                    <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                    <blockquote class="blockquote text-center">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                    <blockquote class="blockquote text-right">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>


                                    <blockquote class="blockquote bq-primary">
                                        <p class="bq-title">Primary notification</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo! Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque! Sit, rem, in?</p>
                                    </blockquote>
                                    <blockquote class="blockquote bq-default">
                                        <p class="bq-title">Default notification</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo! Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque! Sit, rem, in?</p>
                                    </blockquote>
                                    <blockquote class="blockquote bq-secondary">
                                        <p class="bq-title">Secondary notification</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo! Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque! Sit, rem, in?</p>
                                    </blockquote>
                                    
                                    <blockquote class="blockquote bq-info">
                                        <p class="bq-title">Info notification</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo! Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque! Sit, rem, in?</p>
                                    </blockquote>

                                    <blockquote class="blockquote bq-warning">
                                        <p class="bq-title">Warning notification</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo! Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque! Sit, rem, in?</p>
                                    </blockquote>

                                    <blockquote class="blockquote bq-success">
                                        <p class="bq-title">Success notification</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo! Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque! Sit, rem, in?</p>
                                    </blockquote>

                                    <blockquote class="blockquote bq-danger">
                                        <p class="bq-title">Danger notification</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo! Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque! Sit, rem, in?</p>
                                    </blockquote>

                                    <ul class="list-unstyled">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit
                                        <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                        </ul>
                                    </li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                    <li>Aenean sit amet erat nunc</li>
                                    <li>Eget porttitor lorem</li>
                                    </ul>
                                    <ul class="list-inline">
                                    <li class="list-inline-item">Lorem ipsum</li>
                                    <li class="list-inline-item">Phasellus iaculis</li>
                                    <li class="list-inline-item">Nulla volutpat</li>
                                    </ul>
                                    <dl class="row">
                                    <dt class="col-sm-3">Description lists</dt>
                                    <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                                    <dt class="col-sm-3">Euismod</dt>
                                    <dd class="col-sm-9">
                                        <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                                        <p>Donec id elit non mi porta gravida at eget metus.</p>
                                    </dd>

                                    <dt class="col-sm-3">Malesuada porta</dt>
                                    <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                                    <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                    <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                                    <dt class="col-sm-3">Nesting</dt>
                                    <dd class="col-sm-9">
                                        <dl class="row">
                                        <dt class="col-sm-4">Nested definition list</dt>
                                        <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                        </dl>
                                    </dd>
                                    </dl>
                            </div>



                            <div class="documentation">
                                <style>
                                    .bd-example {
                                        position: relative;
                                        padding: 1rem;
                                        margin: 1rem -1rem;
                                        border: solid #f7f7f9;
                                    }
                                </style>
                                

                                <!--div: Intro-->
                                <div id="introduction">

                                    <!--Title-->
                                    <h1 class="main-title">Code</h1>

                                    <!--Description-->
                                    <p class="description">Documentation and examples for displaying inline and multiline blocks of code with Bootstrap.</p>

                                </div>
                                <!--/div: Intro-->

                                <hr class="my-5">

                                <!--div: -->
                                <div id="inline-code">

                                    <!--Title-->
                                    <h2 class="title"><strong>Inline code</strong></h2>

                                    <!--Description-->
                                    <p class="description">Wrap inline snippets of code with <code>&lt;code&gt;</code>. Be sure to escape HTML angle brackets.</p>

                                    <!--div: Live preview-->
                                    <div class="bd-example">

                                        For example, <code>&lt;div&gt;</code> should be wrapped as inline.

                                    </div>
                                    <!--div: Live preview-->

                                    <!--div: Code-->
                                    <div>
                                        <pre class="code-toolbar language-markup"><code class=" language-markup">For example, <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>code</span><span class="token punctuation">&gt;</span></span><span class="token entity" title="<">&amp;lt;</span>div<span class="token entity" title=">">&amp;gt;</span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>code</span><span class="token punctuation">&gt;</span></span> should be wrapped as inline.</code><div class="toolbar"><a>Copy</a></div></pre>
                                    </div>
                                    <!--div: Code-->

                                </div>
                                <!--/div: -->

                                <hr class="my-5">

                                <!--div: -->
                                <div id="code-blocks">

                                    <!--Title-->
                                    <h2 class="title"><strong>Code blocks</strong></h2>

                                    <!--Description-->
                                    <p class="description">Use <code>&lt;pre&gt;</code>s for multiple lines of code. Once again, be sure to escape any angle brackets in the code for proper rendering. You may optionally add the <code>.pre-scrollable</code> class, which will set a max-height of 350px and
                                        provide a y-axis scrollbar.</p>

                                    <!--div: Live preview-->
                                    <div class="bd-example">

                                        <pre><code>&lt;p&gt;Sample text here...&lt;/p&gt;
                                                            &lt;p&gt;And another line of sample text here...&lt;/p&gt;</code></pre>

                                    </div>
                                    <!--div: Live preview-->

                                    <!--div: Code-->
                                    <div>
                                        <pre class="code-toolbar language-markup"><code class=" language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>pre</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>code</span><span class="token punctuation">&gt;</span></span><span class="token entity" title="<">&amp;lt;</span>p<span class="token entity" title=">">&amp;gt;</span>Sample text here...<span class="token entity" title="<">&amp;lt;</span>/p<span class="token entity" title=">">&amp;gt;</span>
                            <span class="token entity" title="<">&amp;lt;</span>p<span class="token entity" title=">">&amp;gt;</span>And another line of sample text here...<span class="token entity" title="<">&amp;lt;</span>/p<span class="token entity" title=">">&amp;gt;</span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>code</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>pre</span><span class="token punctuation">&gt;</span></span></code> <div class="toolbar"><a>Copy</a></div></pre>
                                    </div>
                                    <!--div: Code-->

                                </div>
                                <!--/div: -->

                                <hr class="my-5">

                                <!--div: -->
                                <div id="variables">

                                    <!--Title-->
                                    <h2 class="title"><strong>Variables</strong></h2>

                                    <!--Description-->
                                    <p class="description">For indicating variables use the <code>&lt;var&gt;</code> tag.</p>

                                    <!--div: Live preview-->
                                    <div class="bd-example">

                                        <var>y</var> = <var>m</var><var>x</var> + <var>b</var>

                                    </div>
                                    <!--div: Live preview-->

                                    <!--div: Code-->
                                    <div>
                                        <pre class="code-toolbar language-markup"><code class=" language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>var</span><span class="token punctuation">&gt;</span></span>y<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>var</span><span class="token punctuation">&gt;</span></span> = <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>var</span><span class="token punctuation">&gt;</span></span>m<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>var</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>var</span><span class="token punctuation">&gt;</span></span>x<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>var</span><span class="token punctuation">&gt;</span></span> + <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>var</span><span class="token punctuation">&gt;</span></span>b<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>var</span><span class="token punctuation">&gt;</span></span></code><div class="toolbar"><a>Copy</a></div></pre>
                                    </div>
                                    <!--div: Code-->

                                </div>
                                <!--/div: -->

                                <hr class="my-5">

                                <!--div: -->
                                <div id="user-input">

                                    <!--Title-->
                                    <h2 class="title"><strong>User input</strong></h2>

                                    <!--Description-->
                                    <p class="description">Use the <code>&lt;kbd&gt;</code> to indicate input that is typically entered via keyboard.</p>

                                    <!--div: Live preview-->
                                    <div class="bd-example">

                                        <p>To switch directories, type <kbd>cd</kbd> followed by the name of the directory.</p>

                                        <p>To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd></p>

                                    </div>
                                    <!--div: Live preview-->

                                    <!--div: Code-->
                                    <div><pre class="code-toolbar language-markup"><code class=" language-markup">To switch directories, type <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>kbd</span><span class="token punctuation">&gt;</span></span>cd<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>kbd</span><span class="token punctuation">&gt;</span></span> followed by the name of the directory.<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>br</span><span class="token punctuation">&gt;</span></span>
                            To edit settings, press <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>kbd</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>kbd</span><span class="token punctuation">&gt;</span></span>ctrl<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>kbd</span><span class="token punctuation">&gt;</span></span> + <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>kbd</span><span class="token punctuation">&gt;</span></span>,<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>kbd</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>kbd</span><span class="token punctuation">&gt;</span></span></code><div class="toolbar"><a>Copy</a></div></pre>
                                    </div>
                                    <!--div: Code-->

                                </div>
                                <!--/div: -->

                                <hr class="my-5">

                                <!--div: -->
                                <div id="sample-output">

                                    <!--Title-->
                                    <h2 class="title"><strong>Sample output</strong></h2>

                                    <!--Description-->
                                    <p class="description">For indicating sample output from a program use the <code>&lt;samp&gt;</code> tag.</p>

                                    <!--div: Live preview-->
                                    <div class="bd-example">

                                        <samp>This text is meant to be treated as sample output from a computer program.</samp>

                                    </div>
                                    <!--div: Live preview-->

                                    <!--div: Code-->
                                    <div>
                                        <pre class="code-toolbar language-markup"><code class=" language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>samp</span><span class="token punctuation">&gt;</span></span>This text is meant to be treated as sample output from a computer program.<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>samp</span><span class="token punctuation">&gt;</span></span></code><div class="toolbar"><a>Copy</a></div></pre>
                                    </div>
                                    <!--div: Code-->

                                </div>
                                <!--/div: -->


                                <h2 class="mb-20"> Style your tooltips theme side and animation</h2>

                                <button type="button" class="btn btn-outline-warning rounded-0  tooltip-top" title="Tooltip on top">
                                    Tooltip on top
                                </button>
                                <button type="button" class="btn btn-outline-danger rounded-0  tooltip-right" title="Tooltip on right">
                                    Tooltip on right
                                </button>
                                <button type="button" class="btn btn-outline-info rounded-0  tooltip-bottom" title="Tooltip on bottom">
                                    Tooltip on bottom
                                </button>
                                <button type="button" class="btn btn-outline-primary rounded-0  tooltip-left" title="Tooltip on left">
                                    Tooltip on left
                                </button>
                                <button type="button" class="btn btn-outline-secondary rounded-0  tooltip-multiple">
                                    Tooltip on multiple side
                                </button>

                                <pre class="code-toolbar language-js" >
                                    <code class=" language-markup">
                                        $('.tooltip-side').tooltipster({
                                            side: 'right',
                                            animation: 'fall',
                                            delay: 200,
                                            theme: 'tooltipster-noir'
                                        });
                                    </code>
                                </pre>
                            </div>
                            <h2 class="title mt-50 mb-30">
                                <strong>Basic examples of alert</strong>
                            </h2>
                            <!--Info message-->
                            <a class="btn btn-outline-info rounded-0"  onclick="toastr.info('Hi! I am info message.');">Info message</a>
                            <!--Warning message-->
                            <a class="btn btn-outline-warning rounded-0"  onclick="toastr.warning('Hi! I am warning message.');">Warning message</a>
                            <!--Success message-->
                            <a class="btn btn-outline-success rounded-0"  onclick="toastr.success('Hi! I am success message.');">Success message</a>
                            <!--Error message-->
                            <a class="btn btn-outline-danger rounded-0"  onclick="toastr.error('Hi! I am error message.');">Error message</a>

                            <pre class="code-toolbar language-markup">                
                                <code class=" language-markup">
                                    <span class="token comment" spellcheck="true">&lt;!--Info message--&gt;</span>
                                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-info<span class="token punctuation">"</span></span> <span class="token attr-name">onclick</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>toastr.info(<span class="token punctuation">'</span>Hi! I am info message.<span class="token punctuation">'</span>);<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Info message<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span>
                                    <span class="token comment" spellcheck="true">&lt;!--Warning message--&gt;</span>
                                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-warning<span class="token punctuation">"</span></span> <span class="token attr-name">onclick</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>toastr.warning(<span class="token punctuation">'</span>Hi! I am warning message.<span class="token punctuation">'</span>);<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Warning message<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span>
                                    <span class="token comment" spellcheck="true">&lt;!--Success message--&gt;</span>
                                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-success<span class="token punctuation">"</span></span> <span class="token attr-name">onclick</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>toastr.success(<span class="token punctuation">'</span>Hi! I am success message.<span class="token punctuation">'</span>);<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Success message<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span>
                                    <span class="token comment" spellcheck="true">&lt;!--Error message--&gt;</span>
                                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-danger<span class="token punctuation">"</span></span> <span class="token attr-name">onclick</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>toastr.error(<span class="token punctuation">'</span>Hi! I am error message.<span class="token punctuation">'</span>);<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Error message<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span>
                                </code>
                                <div class="toolbar"><a>Copy</a></div>
                            </pre>
                            

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
                            <nav role="navigation" class="pagination">
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
                            </nav> <!--.no-space-->
                            <nav role="navigation" class="pagination">
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
                            </nav> <!--.move-buttons .custom-icons-->
                            <nav role="navigation" class="pagination">
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
                            </nav> <!--.no-space .move-buttons .custom-icons-->
                            <nav role="navigation" class="pagination">
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
                            </nav> <!-- .custom-buttons -->
                            <nav role="navigation" class="pagination">
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
                            </nav> <!-- .no-space .custom-buttons -->
                            <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination">
                                    <li class="button"><a href="#0">Prev</a></li>
                                    <li class="button"><a href="#0">Next</a></li>
                                </ul>
                            </nav> <!-- without any numbers -->
                            <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination custom-buttons">
                                    <li class="button"><a href="#0">Prev</a></li>
                                    <li class="button"><a href="#0">Next</a></li>
                                </ul>
                            </nav> <!-- ws-theme-pagination-wrapper -->
                            <nav role="navigation" class="pagination">
                                <ul class="ws-theme-pagination animated-buttons custom-icons">
                                    <li class="button"><a href="#0"><i>Prev</i></a></li>
                                    <li class="button"><a href="#0"><i>Next</i></a></li>
                                </ul>
                            </nav> <!-- .animated-buttons .custom-icons -->
                            <nav role="navigation" class="pagination">
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
                            </nav> <!-- .animated-buttons .custom-icons -->
                            <nav role="navigation" class="pagination">
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
                            </nav> <!-- .no-space .animated-buttons .custom-icons -->
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
        <link rel="stylesheet" type="text/css" href="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/bootstrap-dropdown.min.css">
       <script type='text/javascript' src="http://skynet.wensolutions.com/co-workers/sushil/travel-log/wp-content/themes/travel-log/assets/bootstrap-dropdown.min.js"></script>

        <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-core-css.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-clean/sm-clean.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-blue/sm-blue.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-mint/sm-mint.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/css/sm-simple/sm-simple.min.css">
        <!-- air datepicker css -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.min.css">
        <!-- tooltip -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/tooltipster@4.2.6/dist/css/tooltipster.bundle.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/jquery.smartmenus.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/tooltipster@4.2.6/dist/js/tooltipster.bundle.min.js"></script>
        <!-- toastr alert js and style -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" >
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
        <script type="text/javascript" src="https://cdn.bootcss.com/node-waves/0.7.2/waves.min.js"> </script>


        <script type="text/javascript">
            jQuery(function($) {
                // SmartMenus init
                $(function() {
                $('#main-menu').smartmenus({
                    mainMenuSubOffsetX: -1,
                    mainMenuSubOffsetY: 4,
                    subMenusSubOffsetX: 6,
                    subMenusSubOffsetY: -6
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
                $(document).ready(mobileToDesktop);
                 $(window).resize(mobileToDesktop);
                 function mobileToDesktop(){
                    $('#top-mobile-menu').click(function() {
                        $('.ws-theme-topnavbar-collapse').toggle('slide');
                        $(this).toggleClass('open');
                    });
                 }

                //wave effect 
                $(function() {
                    Waves.attach('.btn', 'input');
                    Waves.init();
                });

                //tooltip
                $('.tooltip-right').tooltipster({
                    side: 'right',
                    animation: 'fall',
                    delay: 200,
                    theme: 'tooltipster-noir'
                });
                $('.tooltip-top').tooltipster({
                    side: 'top',
                    animation: 'swing',
                    delay: 200,
                    theme: 'tooltipster-borderless'
                });
                $('.tooltip-bottom').tooltipster({
                    side: 'bottom',
                    animation: 'grow',
                    delay: 200,
                    theme: 'tooltipster-shadow'
                });
                $('.tooltip-left').tooltipster({
                    side: 'left',
                    animation: 'slide',
                    delay: 200,
                    theme: 'tooltipster-punk'
                });
                $('.tooltip-multiple').tooltipster({
                    animation: 'swing',
                    content: 'North',
                    side: 'top',
                    theme: 'tooltipster-borderless'
                });
                $('.tooltip-multiple').tooltipster({
                    content: 'East',
                    multiple: true,
                    side: 'right',
                    theme: 'tooltipster-punk'
                });	
                $('.tooltip-multiple').tooltipster({
                    animation: 'grow',
                    content: 'South',
                    multiple: true,
                    side: 'bottom',
                    theme: 'tooltipster-light'
                });	
                $('.tooltip-multiple').tooltipster({
                    animation: 'fall',
                    content: 'West',
                    multiple: true,
                    side: 'left',
                    theme: 'tooltipster-shadow'
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


                 //search form header
                $('.dispaly-search-form').click(function(){
                    $('#search-form').addClass('is-visible');
                });
                 $('.close-action').click(function(){
                    $('#search-form').removeClass('is-visible');
                });

                 //header cart 
                   $("#header-cart").on("click", function() {
                    $(".woo-cart").toggleClass('active');
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