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
?>

<div class="grid-container">
	<section class="section__container section__container--auto section__container--only-text">
		<div class="grid-x">
			<?php if(have_rows('info')): ?>
				<?php while( have_rows('info') ): the_row(); 
				$text = get_sub_field('testo');
				$title = get_sub_field('titolo');
				$image = get_sub_field('immagine');
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
					</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>
</div>