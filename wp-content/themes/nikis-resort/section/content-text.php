<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nikis_Resort_2.0
 */

$title = get_sub_field('titolo');
$format = get_sub_field('formato');
$column = get_sub_field('numero_colonne');
$structure = get_sub_field('struttura');
$text = get_sub_field('testo');
$text_button = get_sub_field('testo_bottone');
$link_button = get_sub_field('link_bottone', false, false);
$image = get_sub_field('immagine');
$text_image = get_sub_field('testo_immagine');
?>

<?php if($format == 'boxed'): ?>
	<div class="grid-container">
		<section class="section__container">
			<div class="grid-x">
				<?php if($column == 'two'): ?>
					<?php if($structure == 'text_image'): ?>
						<div class="large-6 medium-6 small-12 column only__mobile effect--hover">
							<div class="section__container--image" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;">
								<div class="inner">
									<?php if($text_image): ?>
										<h6><?php echo $text_image; ?></h6>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="large-6 medium-6 small-12 column" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
							<div class="section__container--content">
								<?php if($title): ?>
									<h2 class="title__section title__section--big"><?php echo $title; ?></h2>
								<?php endif; ?>
								<?php if($text): ?>
									<?php echo $text; ?>
								<?php endif; ?>
								<?php if($link_button): ?>
									<a class="go__to-page" href="<?php echo get_the_permalink($link_button); ?>"><?php echo $text_button; ?></a>
								<?php endif; ?>
							</div>
						</div>
						<div class="large-6 medium-6 small-12 column hide__mobile effect--hover" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
							<div class="section__container--image" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;">
								<div class="inner">
									<?php if($text_image): ?>
										<h6><?php echo $text_image; ?></h6>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php else: ?>
						<div class="large-6 medium-6 small-12 column effect--hover" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
							<div class="section__container--image" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;">
								<div class="inner">
									<?php if($text_image): ?>
										<h6><?php echo $text_image; ?></h6>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="large-6 medium-6 small-12 column" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
							<div class="section__container--content">
								<?php if($title): ?>
									<h2 class="title__section title__section--big"><?php echo $title; ?></h2>
								<?php endif; ?>
								<?php if($text): ?>
									<?php echo $text; ?>
								<?php endif; ?>
								<?php if($link_button): ?>
									<a class="go__to-page" href="<?php echo get_the_permalink($link_button); ?>"><?php echo $text_button; ?></a>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
				<?php else: ?>
					<div class="large-12 medium-12 small-12 column" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
						<div class="section__container--image" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;">
							<div class="section__container--content">
								<?php if($title): ?>
									<h2 class="title__section title__section--big"><?php echo $title; ?></h2>
								<?php endif; ?>
								<?php if($text): ?>
									<?php echo $text; ?>
								<?php endif; ?>
								<?php if($link_button): ?>
									<a class="go__to-page" href="<?php echo get_the_permalink($link_button); ?>"><?php echo $text_button; ?></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</section>
	</div>
<?php else: ?>
	<section class="section__container section__container--full-width" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;">
		<div class="grid-x">
			<div class="large-5 medium-7 small-12 column">
				<div class="section__container--content">
					<?php if($title): ?>
						<h2 class="title__section title__section--big"><?php echo $title; ?></h2>
					<?php endif; ?>
					<?php if($text): ?>
						<?php echo $text; ?>
					<?php endif; ?>
					<?php if($link_button): ?>
						<a class="go__to-page" href="<?php echo get_the_permalink($link_button); ?>"><?php echo $text_button; ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>