<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordcrews
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wordcrews' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding container">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$wordcrews_description = get_bloginfo( 'description', 'display' );
			if ( $wordcrews_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $wordcrews_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

<!-- navbar -->
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		    <span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			 </button>
		</div>

		<?php wp_nav_menu ( array
		( 'menu'  => 'primary',
			'theme_location'  => 'primary',
			'menu_id' => 'primary-menu', 'menu_class' => 'nav navbar-nav',
			'depth'  => 2,
			'container'  => 'div',
			'container_class'  => 'collapse navbar-collapse',
			'container_id'  => 'bs-example-navbar-collapse-1',
			'menu_class'  => 'nav navbar-nav',
			'fallback_cb'  => 'wp_bootstrap_navwalker::fallback',
			'walker'  => new wp_bootstrap_navwalker())

		);
		?>

	</div>
</nav>

	</header><!-- #masthead -->
	<div id="content" class="site-content row">
