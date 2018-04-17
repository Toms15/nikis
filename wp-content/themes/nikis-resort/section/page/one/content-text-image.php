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
$image = get_sub_field('immagine');
?>

<div class="grid-container">
	<section class="section__container section__container--auto">
		<div class="grid-x">
			<div class="large-12 medium-12 small-12 column no--scale">
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
				<?php if($image): ?>
					<div class="section__container--image" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;"
					data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"></div>
				<?php endif; ?>
			</div>
		</div>
	</section>
</div>