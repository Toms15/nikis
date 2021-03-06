<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nikis_Resort_2.0
 */

$reserve = get_field('prenota', 'option');
$where = get_field('dove_siamo', 'option');
$phone = get_field('telefono', 'option');
$language = get_field('multilingua', 'option');
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
?>

<div class="top__bar">
	<div class="grid-x">
		<div class="large-4 medium-9 small-12 column">
			<?php if($reserve): ?>
				<?php if (get_locale() == 'it_IT'): ?>
				<div class="top__bar--reserve">
					<i class="fa fa-calendar-o"></i>
					<?php echo __('Prenota ora') ?>
				</div>
				<?php endif; ?>
				<?php if (get_locale() == 'en_GB'): ?>
				<div class="top__bar--reserve">
					<i class="fa fa-calendar-o"></i>
					<?php echo __('Book now') ?>
				</div>
				<?php endif; ?>
			<?php endif; ?>
			<div class="top__bar--reserve-form">
				<?php if (get_locale() == 'it_IT'): ?>
					<h2><?php echo __('Richiedi una prenotazione, ti risponderemo il prima possibile'); ?></h2>
					<?php echo do_shortcode('[contact-form-7 id="72" title="Prenota ora"]'); ?>
				<?php endif; ?>
				<?php if (get_locale() == 'en_GB'): ?>
					<h2><?php echo __('Request a reservation, we will reply as soon as possible'); ?></h2>
					<?php echo do_shortcode('[contact-form-7 id="518" title="Book now"]'); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="large-7 medium-1 small-12 column">
			<?php if($where || $phone || $facebook || $instagram): ?>
				<div class="top__bar--info">
					<?php if($where): ?>
						<h6>
							<i class="fa fa-map-marker"></i>
							<?php echo $where; ?>
						</h6>
						<div class="line line--v"></div>
					<?php endif; ?>
					<?php if($phone): ?>
						<h6>
							<i class="fa fa-phone"></i>
							<?php echo $phone; ?>
						</h6>
					<?php endif; ?>
					<?php if($facebook || $instagram): ?>
						<div class="icon__social">
							<?php if($facebook): ?>
								<a href="https://www.facebook.com/<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
							<?php endif; ?>
							<?php if($instagram): ?>
								<a href="https://www.instagram.com/<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="large-1 medium-2 small-12 column">
			<?php if($language): ?>
				<?php if (get_locale() == 'it_IT'): ?>
				<div class="top__bar--lang">
					<i class="fa fa-flag-o"></i>
					<?php echo __('Ita'); ?>
					<i class="fa fa-angle-down"></i>
				</div>
				<?php endif;
				if (get_locale() == 'en_GB'): ?>
				<div class="top__bar--lang">
					<i class="fa fa-flag-o"></i>
					<?php echo __('Eng'); ?>
					<i class="fa fa-angle-down"></i>
				</div>
				<?php endif;
			endif; ?>
			<div class="top__bar--lang-change">
				<ul>
					<li>
						<a href="/">
							<?php echo __('Ita'); ?>
						</a>
					</li>
					<li>
						<a href="/en/">
							<?php echo __('Eng'); ?>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>