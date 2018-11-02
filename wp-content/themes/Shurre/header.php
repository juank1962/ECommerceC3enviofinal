<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShUrRe
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- browser  website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?php bloginfo('name')?></title>
	<!--Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/materialize.min.css"  media="screen,projection"/>
	<!--.js-->
   <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery"></script>
   <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/materialize.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class='col s9'>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shurre' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description /*|| is_customize_preview()*/ ) : ?>
				<!--<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>--!>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation">
			<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'shurre' ); ?></button>-->
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'menu-shurre',
					'menu_class'		 => 'left hide-on-med-and-down',
					'container_class' => 'nav-wrapper'
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="row">
