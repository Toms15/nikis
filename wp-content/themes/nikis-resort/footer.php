<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nikis_Resort_2.0
 */
$analytics = get_field('google_analytics', 'option');
$copyright = get_field('copyright', 'option');
$credits = get_field('credits', 'option');
$privacy = get_field('privacy', 'option');
$cookie = get_field('cookie', 'option');
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
?>

	</div><!-- #content -->

	<footer id="contatti" class="site-footer">
	<?php 
	if ( is_active_sidebar( 'first-footer-widget-area'  )
		|| is_active_sidebar( 'second-footer-widget-area' )
		|| is_active_sidebar( 'third-footer-widget-area'  )
		|| is_active_sidebar( 'fourth-footer-widget-area' )
		) : ?>
		<div class="widget__container">
			<div class="grid-x">
				<div class="large-2 medium-12 small-12 column">
					<div class="contact__box">
						<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
					</div>
				</div>
				<div class="large-3 medium-12 small-12 column">
					<div class="contact__box">
						<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
					</div>
				</div>
				<div class="large-4 medium-12 small-12 column">
					<div class="contact__box">
						<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
					</div>
				</div>
				<div class="large-3 medium-12 small-12 column">
					<div class="contact__box">
						<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
		<div class="social">
			<a href="https://www.facebook.com/<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
			<a href="https://www.instagram.com/<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
		</div>
		<div class="copyright">
			<div class="grid-x">
				<div class="large-12 medium-12 small-12 column">
					<h6>
						© <?php echo date('Y'); ?> - <?php echo $copyright; ?>
						<?php if($privacy): ?>
							- <a href="<?php echo esc_url( '/privacy' ); ?>">Privacy</a>
						<?php endif; ?>
						<?php if($cookie): ?>
							- <a href="<?php echo esc_url( '/cookie' ); ?>">Cookie</a>
						<?php endif; ?>
						- <?php echo $credits; ?>
					</h6>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php if($analytics): ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $analytics; ?>"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', '<?php echo $analytics; ?>');
	</script>
<?php endif; ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3UaVdW8UpKAqULko4-UrPBYwQkC0VW8Y"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.sticky.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
<?php wp_footer(); ?>

</body>
</html>
