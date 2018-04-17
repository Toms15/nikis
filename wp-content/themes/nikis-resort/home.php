<?php
/**
 * Template name: Homepage
 *
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nikis_Resort_2.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<div class="content__container">
			<?php
			if(have_rows('sezioni')):
				while (have_rows('sezioni')) : the_row(); 
					if(get_row_layout() == 'contenuto'):
						get_template_part( 'section/content', 'text' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'mappa'):
						get_template_part( 'section/content', 'maps' );
						wp_reset_postdata();
					endif;
				endwhile;
			else :
			endif;
			?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
