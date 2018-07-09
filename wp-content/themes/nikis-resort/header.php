<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nikis_Resort_2.0
 */

$logo = get_field('logo', 'option');
$text = get_field('testo', 'option');
$top_text = get_field('alta_stagione', 'option');
$bottom_text = get_field('bassa_stagione', 'option');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href='<?php echo get_template_directory_uri() . '/css/vendor.css'?>' rel='stylesheet' type='text/css'>
	<link href='<?php echo get_template_directory_uri() . '/css/main.css'?>' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oranienbaum" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="reveal" id="terms-and-conditions" data-reveal>
  <h1><?php echo __('Termini e condizioni'); ?></h1>
  <div class="grid-x">
  	<div class="large-6 medium-6 small-12 column">
  		<h3><?php echo __('Alta stagione'); ?></h3>
  		<?php echo $top_text; ?>
  	</div>
  	<div class="large-6 medium-6 small-12 column">
  		<h3><?php echo __('Bassa stagione'); ?></h3>
  		<?php echo $bottom_text; ?>
  	</div>
  	<div class="large-12 medium-12 small-12 column">
  		<h3><?php echo __('Altre info'); ?></h3>
  		<?php echo $text; ?>
  	</div>
  </div>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div id="page" class="site">

	<?php
		get_template_part( 'section/content', 'top-bar' );
	?>

	<?php
		get_template_part( 'section/content', 'header-mobile' );
	?>

	<?php
	if ( is_home() || is_front_page() ):
		get_template_part( 'section/content', 'hero-slider' );	
	else: ?>
		<div class="clear__space"></div>
	<?php
	endif;
	?>

	<header id="masthead" class="site-header">
		<?php if( $logo ): ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a>
		<?php endif; ?>
		<nav id="site-navigation" class="main-navigation">
			<?php if (get_locale() == 'it_IT'): 
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			endif;
			?>
			<?php if (get_locale() == 'en_GB'): 
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'menu_principale_ENG',
				) );
			endif;
			?>
		</nav><!-- #site-navigation -->
		<div class="menu__mobile">
			<span class="line"></span>
			<span class="line"></span>
			<span class="line"></span>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
