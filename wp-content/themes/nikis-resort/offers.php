<?php
/**
 * Template name: Offerte
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
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<div class="hero__page" style="background: url('<?php echo $thumb['0'];?>') no-repeat center center;"></div>

			<div class="content__container">

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
					$args = array(
						'post_type'  		 => 'offerte',
						'posts_per_page' => -1,
						'orderby'     	 => 'title',
						'order' 				 => 'ASC',
						'meta_query'  	 => array(
							'relation' 	 	 => 'AND',
							array(
								'key'     => 'tipologia_offerta',
								'value'   => 'speciale',
							),
						),
					); 
					$special_offers = new WP_Query($args);
					$current_post = 0;
					if ($special_offers->have_posts()): ?>
						<?php while ($special_offers->have_posts()): $special_offers->the_post(); $current_post++; ?>
							<?php if ($current_post % 2 == 1): ?>
								<?php get_template_part( 'section/offers/content', 'text-image' ); ?>
							<?php else: ?>
								<?php get_template_part( 'section/offers/content', 'image-text' ); ?>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				
			</div>

			<div class="grid-container">
				<section class="section__container section__container--auto section__container--only-text">
					<div class="grid-x">
						<?php 
						$args = array(
							'post_type'  		 => 'offerte',
							'posts_per_page' => -1,
							'orderby'     	 => 'title',
							'order' 				 => 'ASC',
							'meta_query'  	 => array(
								'relation' 	 	 => 'AND',
								array(
									'key'     => 'tipologia_offerta',
									'value'   => 'standard',
								),
							),
						); 
						$special_offers = new WP_Query($args);
						if ($special_offers->have_posts()): ?>
							<?php while ($special_offers->have_posts()): $special_offers->the_post();
								$title = get_the_title();
								$text = get_field('descrizione');
								$image = get_field('immagine');
								?>
								<div class="large-4 medium-4 small-12 column" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
									<div class="section__container--image" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;"></div>
									<div class="section__container--text">
										<?php if($title): ?>
											<h2 class="title__section title__section--small"><?php echo $title; ?></h2>
										<?php endif; ?>
										<?php if($text): ?>
											<?php echo $text; ?>
										<?php endif; ?>
										<a href="<?php echo get_the_permalink(); ?>" class="go__to-page">
											<?php if (get_locale() == 'it_IT'):
												echo __('Maggiori informazioni'); 
											endif;
											if (get_locale() == 'en_GB'):
												echo __('Read more');
											endif; ?>
										</a>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</section>
			</div>

			<div class="grid-container">
				<div style="height: 6rem;"></div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
