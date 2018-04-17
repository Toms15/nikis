<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nikis_Resort_2.0
 */

$title_size_one_column = get_sub_field('dimensione_titolo_colonna_uno');
$title_size_two_column = get_sub_field('dimensione_titolo_colonna_due');
$title_one_column = get_sub_field('titolo_colonna_uno');
$title_two_column = get_sub_field('titolo_colonna_due');
$text_one_column = get_sub_field('testo_colonna_uno');
$text_two_column = get_sub_field('testo_colonna_due');
?>

<div class="grid-container">
	<section class="section__container">
		<div class="grid-x">
			<div class="large-6 medium-6 small-12 column" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="section__container--text">
					<?php if($title_one_column): ?>
						<h2 class="title__section
						<?php if($title_size_one_column == 'big'): ?>title__section--big<?php endif; ?>
						<?php if($title_size_one_column == 'small'): ?>title__section--small<?php endif; ?>
						"><?php echo $title_one_column; ?></h2>
					<?php endif; ?>
					<?php if($text_one_column): ?>
						<?php echo $text_one_column; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="line line--v"></div>
			<div class="large-6 medium-6 small-12 column" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="section__container--text">
					<?php if($title_two_column): ?>
						<h2 class="title__section
						<?php if($title_size_two_column == 'big'): ?>title__section--big<?php endif; ?>
						<?php if($title_size_two_column == 'small'): ?>title__section--small<?php endif; ?>
						"><?php echo $title_two_column; ?></h2>
					<?php endif; ?>
					<?php if($text_two_column): ?>
						<?php echo $text_two_column; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
</div>