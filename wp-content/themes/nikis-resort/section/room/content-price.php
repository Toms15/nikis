<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nikis_Resort_2.0
 */

$top_price = get_field('alta_stagione');
$bottom_price = get_field('bassa_stagione');
?>

<div class="grid-container">
	<section class="section__container section__container--auto">
		<div class="grid-x">
			<div class="large-4 medium-4 small-12 column" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="section__container--price section__container--price-label">
					<?php echo __('Prezzo a notte'); ?>
				</div>
			</div>
			<div class="large-4 medium-4 small-12 column" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="section__container--price">
					<h3><span><?php echo __('Alta stagione'); ?></span>€ <?php echo $top_price; ?></h3>
				</div>
			</div>
			<div class="large-4 medium-4 small-12 column" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="section__container--price">
					<h3><span><?php echo __('Bassa stagione'); ?></span>€ <?php echo $bottom_price; ?></h3>
				</div>
			</div>
		</div>
		<div class="info__period">
			<a data-open="terms-and-conditions">
				<i class="fa fa-info-circle"></i>
				<?php echo __('Termini e condizioni'); ?>
			</a>
		</div>
	</section>
</div>