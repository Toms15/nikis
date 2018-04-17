<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nikis_Resort_2.0
 */

$service = get_field('servizi_aggiuntivi');
?>

<div class="grid-container">
	<section class="section__container section__container--auto section__container--gallery">
		<?php if( $service ): ?>
			<div class="grid-x">
				<?php foreach( $service as $s ): ?>
					<div class="large-4 medium-4 small-12 column">
						<div class="section__container--service">
							<div class="section__container--service-image section__container--service-image-<?php echo $s; ?>"></div>
							<h4>
								<?php if($s == 'swimming_pool'):
									echo 'Piscina';
								elseif($s == 'breakfast'):
									echo 'Colazione inclusa';
								elseif($s == 'wifi'):
									echo 'Wi-Fi gratuito';
								elseif($s == 'golf'):
									echo 'Putting Green';
								elseif($s == 'mini_bar'):
									echo 'Mini bar';
								elseif($s == 'park'):
									echo 'Parcheggio gratuito';
								elseif($s == 'pool'):
									echo 'Palestra';
								elseif($s == 'coffee'):
									echo 'Coffee & Tea';
								elseif($s == 'no_smoke'):
									echo 'No smoking';
								elseif($s == 'tv'):
									echo 'TV';
								elseif($s == 'flame'):
									echo 'Caminetto';
								elseif($s == 'temperature'):
									echo 'Riscaldamento';
								endif; ?>
							</h4>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</section>
</div>