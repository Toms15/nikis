<?php
/**
 * Template name: Pagina testo
 *
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nikis_Resort_2.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="content__container content__container--page">
				
				<div class="grid-container">
					<section class="section__container section__container--auto section__container--only-text section__container--only-text--page">
						<div class="grid-x">
							<div class="large-12 medium-12 small-12 column">
								<div class="section__container--text">
									<h2 class="title__section title__section--big">
										<?php echo the_title(); ?>
									</h2>
									<?php wp_reset_postdata(); echo the_content(); ?>
								</div>
							</div>
						</div>
					</section>
				</div>
				
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
