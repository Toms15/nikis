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
	<?php if (get_locale() == 'it_IT'): 
		wp_nav_menu( array(
			'theme_location' => 'menu-2',
			'menu_id'        => 'mobile-menu',
		) );
	endif;
	?>
	<?php if (get_locale() == 'en_GB'): 
		wp_nav_menu( array(
			'theme_location' => 'menu-2',
			'menu_id'        => 'menu_principale_ENG',
		) );
	endif;
	?>
</div>