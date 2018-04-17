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
$image = get_field('immagine_di_presentazione');
?>

<div class="grid-container">
	<section class="section__container">
		<div class="grid-x">
			<div class="large-6 medium-6 small-12 column only__mobile effect--hover">
				<div class="section__container--image" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;">
					<div class="inner">
						<h6><?php echo __('Prenota ora'); ?></h6>
					</div>
				</div>
			</div>
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
					<a href="<?php echo get_the_permalink(); ?>" class="go__to-page"><?php echo __('Maggiori informazioni'); ?></a>
				</div>
			</div>
			<div class="large-6 medium-6 small-12 column hide__mobile effect--hover" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="section__container--image" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;">
					<div class="inner">
						<h6><?php echo __('Prenota ora'); ?></h6>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>