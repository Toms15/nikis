<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nikis_Resort_2.0
 */

$title_size = get_sub_field('dimensione_titolo');
$title = get_sub_field('titolo');
$text = get_sub_field('testo');
$images = get_sub_field('immagini');
?>

<div class="grid-container">
	<section class="section__container">
		<div class="grid-x">
			<div class="large-6 medium-6 small-12 column" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" style="z-index: 9;">
				<div class="swiper-container swiper-grid-container">
          <div class="swiper-wrapper">
						<?php if( $images ): ?>
							<?php foreach( $images as $image ): ?>
								<div class="swiper-slide" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;">
									<h6 class="is--right"><?php echo $image['alt']; ?></h6>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="swiper-button-prev is--right"></div>
  			<div class="swiper-button-next is--right"></div>
			</div>
			<div class="large-6 medium-6 small-12 column" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="section__container--text">
					<?php if($title): ?>
						<h2 class="title__section
						<?php if($title_size == 'big'): ?>title__section--big<?php endif; ?>
						<?php if($title_size == 'small'): ?>title__section--small<?php endif; ?>
						"><?php echo $title; ?></h2>
					<?php endif; ?>
					<?php if($text): ?>
						<?php echo $text; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
</div>