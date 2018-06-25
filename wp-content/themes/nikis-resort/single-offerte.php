<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nikis_Resort_2.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<div class="hero__page" style="background: url('<?php echo $thumb['0'];?>') no-repeat center center;"></div>

			<div class="content__container content__container--page">
				
				<div class="grid-container">
					<div class="entry__breadcrumbs">
						<div class="entry__breadcrumbs--item">
							<a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
							<i class="fa fa-angle-right"></i>
							<a href="<?php echo esc_url(home_url('/offerte')); ?>">Le offerte</a>
							<i class="fa fa-angle-right"></i>
							<span class="entry__breadcrumbs--item-current"><?php echo the_title(); ?></span>
						</div>
					</div>
				</div>

				<?php
					get_template_part( 'section/offers/content', 'info' );
					get_template_part( 'section/offers/content', 'more-information' );
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
