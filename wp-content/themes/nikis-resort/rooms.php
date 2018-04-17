<?php
/**
 * Template name: Camere
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
						'post_type'  		 => 'camere',
						'posts_per_page' => -1,
						'orderby'     	 => 'title',
						'order' 				 => 'ASC'
					); 
					$rooms = new WP_Query($args);
					$current_post = 0;
					if ($rooms->have_posts()): ?>
						<?php while ($rooms->have_posts()): $rooms->the_post(); $current_post++; ?>
							<?php if ($current_post % 2 == 1): ?>
								<?php get_template_part( 'section/room/content', 'text-image' ); ?>
							<?php else: ?>
								<?php get_template_part( 'section/room/content', 'image-text' ); ?>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>

				</div>
				
				
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
