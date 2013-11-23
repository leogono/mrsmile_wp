<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Mr Smile Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class('custom'); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-wrap">
			<div class="site-branding">
				<h1 class="site-title"><a class="ir" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>

			<nav id="site-navigation" class="navigation-main" role="navigation">
				<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'mrsmile_wp' ); ?>"><?php _e( 'Skip to content', 'mrsmile_wp' ); ?></a></div>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
		
	</header><!-- #masthead -->

<div id="feat-img">
	<?php if (is_front_page()) {
		echo do_shortcode("[metaslider id=37]");
	} else {
			if ( has_post_thumbnail() ) { 
				the_post_thumbnail('full');
		} else {
			echo '<img src="' . get_template_directory_uri() . '/img/feat-img.jpg" alt="">';
		}
	} ?>
</div>
	<div id="main" class="site-main">
		<div class="wrap">
