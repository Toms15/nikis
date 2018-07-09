<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nikis_Resort_2.0
 */

$images = get_field('immagini', 'option');
?>

<div class="hero__page hero__page--full">
	<div class="swiper-container swiper-hero">
		<div class="swiper-wrapper">
			<?php if( $images ): ?>
				<?php foreach( $images as $image ): ?>
					<div class="swiper-slide" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;">
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="call__to-action">
		<?php echo do_shortcode('[widget id="wcp_weather_widget-3"]'); ?>
		<?php if(have_rows('call_to_action', 'option')): ?>
			<div class="swiper-container swiper-cta">
				<div class="swiper-wrapper">
					<?php if (get_locale() == 'it_IT'):
					while( have_rows('call_to_action', 'option') ): the_row(); 
						$text = get_sub_field('testo');
						$button = get_sub_field('bottone');
						$link = get_sub_field('link');
					?>
					<div class="swiper-slide">
						<div class="inner">
							<a href="<?php echo $link; ?>"><?php echo $text; ?></a>
							<a class="go__to-page--cta" href="<?php echo $link; ?>"><?php echo $button; ?></a>
						</div>
					</div>
					<?php endwhile; endif;
					if (get_locale() == 'en_GB'):
					while( have_rows('call_to_action_eng', 'option') ): the_row(); 
						$text = get_sub_field('testo');
						$button = get_sub_field('bottone');
						$link = get_sub_field('link');
					?>
					<div class="swiper-slide">
						<div class="inner">
							<a href="<?php echo $link; ?>"><?php echo $text; ?></a>
							<a class="go__to-page--cta" href="<?php echo $link; ?>"><?php echo $button; ?></a>
						</div>
					</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>