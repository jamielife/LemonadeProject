	<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		
		<?php //Default to logo defined on home page
		$icon = get_field( "icons", 'option' ); ?>	

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(' | '); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="apple-touch-icon" href="<?php echo $icon["touch_icon"]; ?>">
		<link rel="icon" href="<?php echo $icon["favicon"]; ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		
		<?php //Default to logo defined on home page
		$logo = get_field( "logo", 'option' ); ?>

			<header class="m-0 p-0">
		      
				<div class="container<?php if($logo['full_width']) echo '-fluid'; ?> cover-container d-flex w-100 mx-auto flex-column position-relative">	
					
					<nav class="navbar navbar-expand-md navbar-light p-3 position-absolute w-100 clearfix <?php if($logo['centered']) echo 'flex-column'; ?> " 
						 role="navigation" itemscope 
						 itemtype="http://schema.org/SiteNavigationElement">
							 
						<?php //Display logo
						if(pathinfo($logo['logo_image'], PATHINFO_EXTENSION) === 'svg') $logo_image = file_get_contents($logo['logo_image']); ?>
						
						<a id="logo" class="navbar-brand" rel="home" 
							href="<?php echo esc_url( home_url( '/' ) ); ?>" 
							style="width: <?php echo $logo['logo_width']; ?>px;"><?php echo $logo_image; ?></a>
							
						<?php
							if($logo['centered']): 
								$centered = 'm-auto';
							else: 
								$centered = 'ml-auto';
							endif; 
						?>							
	
						<?php wp_nav_menu( array(
							'theme_location'  => 'main-nav',
							'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => null,
							'menu_class'      => 'nav nav-pills ' . $centered,
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						) ); ?>
						
						
					    <div id="anchorSearch">
					        <form role="search" class="navbar-form" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
					            <div class="form-group">
					                <input type="text" class="form-control" placeholder="Press enter to search" value="" name="s" id="s">
					            </div>
					
					        </form>
					        <button class="btn" id="searchToggle"><i class="fas fa-search"></i></button>
					    </div>
												
					</nav>
				
				</div>
				
				<?php get_template_part( 'library/modules/featured-image' ); ?>
			      
			</header>			
