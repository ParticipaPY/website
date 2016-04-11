<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drento
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
	$hideSearch = get_theme_mod('drento_theme_options_hidesearch', '1');
	$showSocial = get_theme_mod('drento_theme_options_showsocial', '1');
	$facebookURL = get_theme_mod('drento_theme_options_facebookurl', '#');
	$twitterURL = get_theme_mod('drento_theme_options_twitterurl', '#');
	$googleplusURL = get_theme_mod('drento_theme_options_googleplusurl', '#');
	$linkedinURL = get_theme_mod('drento_theme_options_linkedinurl', '#');
	$instagramURL = get_theme_mod('drento__theme_options_instagramurl', '#');
	$youtubeURL = get_theme_mod('drento_theme_options_youtubeurl', '#');
	$pinterestURL = get_theme_mod('drento_theme_options_pinteresturl', '#');
	$tumblrURL = get_theme_mod('drento_theme_options_tumblrurl', '#');
	$vkURL = get_theme_mod('drento_theme_options_vkurl', '#');
?>
<div class="border-fixed border-top"></div>
<div class="border-fixed border-bottom"></div>
<div class="border-fixed border-left"></div>
<div class="border-fixed border-right"></div>
<div id="page" class="hfeed site">
	<?php if ($hideSearch == 1 ) : ?>
		<!-- Start: Search Form -->
		<div id="search-full" class="drentoSearchFull">
			<div class="search-container">
				<?php get_search_form(); ?>
			</div>
		</div>
		<!-- End: Search Form -->
	<?php endif; ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'drento' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<?php
		if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div class="main-sidebar-box"><span></span></div>
			<div class="opacityBox"></div>
		<?php endif; ?>
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;
			$description = get_bloginfo( 'description', 'display' ); 
			if ( $description || is_customize_preview() ) : ?>
			<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
		<?php if ($showSocial == 1 ) : ?>
		<div class="socialLine">
			<div class="drentoSocial"><i class="fa fa-share-alt fa-2x"></i></div>
			<?php if (!empty($facebookURL)) : ?>
				<a href="<?php echo esc_url($facebookURL); ?>" title="<?php esc_attr_e( 'Facebook', 'drento' ); ?>"><i class="fa fa-facebook spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Facebook', 'drento' ); ?></span></i></a>
			<?php endif; ?>
			<?php if (!empty($twitterURL)) : ?>
				<a href="<?php echo esc_url($twitterURL); ?>" title="<?php esc_attr_e( 'Twitter', 'drento' ); ?>"><i class="fa fa-twitter spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Twitter', 'drento' ); ?></span></i></a>
			<?php endif; ?>
			<?php if (!empty($googleplusURL)) : ?>
				<a href="<?php echo esc_url($googleplusURL); ?>" title="<?php esc_attr_e( 'Google Plus', 'drento' ); ?>"><i class="fa fa-google-plus spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Google Plus', 'drento' ); ?></span></i></a>
			<?php endif; ?>
			<?php if (!empty($linkedinURL)) : ?>
				<a href="<?php echo esc_url($linkedinURL); ?>" title="<?php esc_attr_e( 'Linkedin', 'drento' ); ?>"><i class="fa fa-linkedin spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Linkedin', 'drento' ); ?></span></i></a>
			<?php endif; ?>
			<?php if (!empty($instagramURL)) : ?>
				<a href="<?php echo esc_url($instagramURL); ?>" title="<?php esc_attr_e( 'Instagram', 'drento' ); ?>"><i class="fa fa-instagram spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Instagram', 'drento' ); ?></span></i></a>
			<?php endif; ?>
			<?php if (!empty($youtubeURL)) : ?>
				<a href="<?php echo esc_url($youtubeURL); ?>" title="<?php esc_attr_e( 'YouTube', 'drento' ); ?>"><i class="fa fa-youtube spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'YouTube', 'drento' ); ?></span></i></a>
			<?php endif; ?>
			<?php if (!empty($pinterestURL)) : ?>
				<a href="<?php echo esc_url($pinterestURL); ?>" title="<?php esc_attr_e( 'Pinterest', 'drento' ); ?>"><i class="fa fa-pinterest spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Pinterest', 'drento' ); ?></span></i></a>
			<?php endif; ?>
			<?php if (!empty($tumblrURL)) : ?>
				<a href="<?php echo esc_url($tumblrURL); ?>" title="<?php esc_attr_e( 'Tumblr', 'drento' ); ?>"><i class="fa fa-tumblr spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Tumblr', 'drento' ); ?></span></i></a>
			<?php endif; ?>
			<?php if (!empty($vkURL)) : ?>
				<a href="<?php echo esc_url($vkURL); ?>" title="<?php esc_attr_e( 'VK', 'drento' ); ?>"><i class="fa fa-vk spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'VK', 'drento' ); ?></span></i></a>
			<?php endif; ?>
		</div>
		<?php endif; ?>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-lg fa-bars"></i><?php esc_html_e( 'Main Menu', 'drento' ); ?></button>
			<?php if ($hideSearch == 1 ) : ?>
				<div class="drentoSearch"><i class="fa fa-search fa-2x"></i></div>
			<?php endif; ?>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
