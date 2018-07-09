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
					<?php if (get_locale() == 'it_IT'):
						echo __('Per infomrazioni'); 
					endif;
					if (get_locale() == 'en_GB'):
						echo __('For more informations');
					endif; ?>
				</div>
			</div>
			<div class="large-6 medium-4 small-12 column" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="section__container--price section__container--price-small">
					<i class="fa fa-phone"></i>
					<h3>
						+39 347 0635766 (Matteo Caponetti) / +39 366 3081321 (Fabrizio Urbani) / +39 327 6141681 / +39 075 9274103
					</h3>
				</div>
			</div>
			<div class="large-2 medium-4 small-12 column" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="section__container--price section__container--price-small">
					<i class="fa fa-envelope"></i>
					<h3>
						info@nikisresort.com
					</h3>
				</div>
			</div>
		</div>
	</section>
</div>