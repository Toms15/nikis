<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nikis_Resort_2.0
 */

$gallery = get_sub_field('immagini');
?>

<div class="grid-container">
	<div class="section__container section__container--auto section__container--gallery">
		<div class="grid-x">
			<?php if( $gallery ): ?>
				<?php foreach( $gallery as $image ): ?>
					<div class="large-4 medium-4 small-12 column effect--hover">
						<a href="<?php echo $image['url']; ?>">
							<div class="gallery__item" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;">
								<div class="inner">
									<h6><?php echo $image['alt']; ?></h6>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>