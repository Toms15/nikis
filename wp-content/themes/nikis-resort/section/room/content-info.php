<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nikis_Resort_2.0
 */

$type = get_field('tipologia_camera');
$title = get_the_title();
$text = get_field('descrizione');
$images = get_field('gallery');
?>

<div class="grid-container">
	<section class="section__container">
		<div class="grid-x">
			<div class="large-6 medium-6 small-12 column" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="section__container--text">
					<?php if($title): ?>
						<?php if($type == 'suite'): ?>
							<h6><?php echo $type; ?></h6>
						<?php endif; ?>
						<h2 class="title__section title__section--big"><?php echo $title; ?></h2>
					<?php endif; ?>
					<?php if($text): ?>
						<?php echo $text; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="large-6 medium-6 small-12 column" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="swiper-container swiper-grid-container">
          <div class="swiper-wrapper">
						<?php if( $images ): ?>
							<?php foreach( $images as $image ): ?>
								<div class="swiper-slide" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;">
									<h6><?php echo $image['alt']; ?></h6>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="swiper-button-prev"></div>
  			<div class="swiper-button-next"></div>
			</div>
		</div>
	</section>
</div>