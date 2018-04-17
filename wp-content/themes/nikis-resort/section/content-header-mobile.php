<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nikis_Resort_2.0
 */

?>

<div class="header__menu_mobile">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'menu-2',
		'menu_id'        => 'mobile-menu',
	) );
	?>
</div>