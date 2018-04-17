<?php
/**
 * Template name: Contatti
 *
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nikis_Resort_2.0
 */

get_header();
$maps = get_field('mappa');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="hero__page">
				<div id="map-nikis" style="margin-top: 0;"></div>
			</div>

			<div class="content__container content__container--page">

				<div class="grid-container">
					<div class="entry__breadcrumbs">
						<div class="entry__breadcrumbs--item">
							<a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
							<i class="fa fa-angle-right"></i>
							<span class="entry__breadcrumbs--item-current"><?php echo the_title(); ?></span>
						</div>
					</div>
				</div>
				
				<?php
				if(have_rows('sezioni')):
					while (have_rows('sezioni')) : the_row(); 
						if(get_row_layout() == 'informazioni'):
							get_template_part( 'section/content', 'text-info' );
							wp_reset_postdata();
						elseif(get_row_layout() == 'come_raggiungerci'):
							get_template_part( 'section/content', 'move' );
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
