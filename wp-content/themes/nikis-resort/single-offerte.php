<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nikis_Resort_2.0
 */

get_header();
$more_text = get_field('ulteriore_testo');
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
							<?php if (get_locale() == 'it_IT'): ?>
								<a href="<?php echo esc_url(home_url('/offerte')); ?>">Le Offerte</a>
							<?php endif;
							if (get_locale() == 'en_GB'): ?>
								<a href="<?php echo esc_url(home_url('/offers')); ?>">Offers</a>
							<?php endif; ?>
							<i class="fa fa-angle-right"></i>
							<span class="entry__breadcrumbs--item-current"><?php echo the_title(); ?></span>
						</div>
					</div>
				</div>

				<?php
					get_template_part( 'section/offers/content', 'info' ); ?>
				
					<?php if($more_text): ?>
						<div class="grid-container">
							<section class="section__container section__container--auto section__container--only-text">
								<div class="grid-x">
									<div class="large-12 medium-12 small-12 column">
										<div class="section__container--text">
											<?php if($more_text): ?>
												<?php echo $more_text; ?>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</section>
						</div>
					<?php endif; ?>

				<?php
					get_template_part( 'section/offers/content', 'more-information' );
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
