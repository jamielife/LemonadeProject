	<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<!-- <div id="container" class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column"> Single page full width only homepage -->

			<header class="m-0 p-0">
		      
				<div class="container cover-container d-flex w-100 mx-auto flex-column position-relative">	
					
					<nav class="navbar navbar-expand-md navbar-light p-3 position-absolute w-100 clearfix" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						
						<a class="navbar-brand" href="/">
							<img src="/wp-content/themes/thelemonadeproject/library/images/login-logo.png" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
						</a>
	
						<?php wp_nav_menu( array(
							'theme_location'  => 'main-nav',
							'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => null,
							'menu_class'      => 'nav nav-pills ml-auto',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						) ); ?>
							
					</nav>
				
				</div>
				
				<?php get_template_part( 'library/modules/featured-image' ); ?>
			      
			</header>			
