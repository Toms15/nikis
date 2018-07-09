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
					<div class="social">
						<a href="https://www.facebook.com/<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
						<a href="https://www.instagram.com/<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div class="widget__websites">
		<div class="grid-x">
			<div class="large-12 medium-12 small-12 column">
				<div class="widget__websites--small">
					<a href="https://www.booking.com/hotel/it/nikis-resort.it.html" target="_blank">
						<img src="/wp-content/themes/nikis-resort/images/Loghi/booking.jpg" alt="">
					</a>
					<a href="https://www.expedia.it/_dms/header/logo.svg?locale=it_IT&siteid=8" target="_blank">
						<img src="/wp-content/themes/nikis-resort/images/Loghi/expedia.jpg" alt="">
					</a>
					<a href="https://www.tripadvisor.it/Hotel_Review-g187906-d3254182-Reviews-Nikis_Resort-Gubbio_Province_of_Perugia_Umbria.html" target="_blank">
						<img src="/wp-content/themes/nikis-resort/images/Loghi/tripadvisor.jpg" alt="">
					</a>
					<a href="https://it.hotels.com/ho398518/nikis-resort-gubbio-italia/" target="_blank">
						<img src="/wp-content/themes/nikis-resort/images/Loghi/hotels.jpg" alt="">
					</a>
				</div>
				<div class="widget__websites--small">
					<a href="https://www.matrimonio.com/hotel-ricevimenti/nikis-resort--e120924" target="_blank">
						<img src="/wp-content/themes/nikis-resort/images/Loghi/matrimonio.jpg" alt="">
					</a>
					<a href="http://www.sawdays.co.uk/italy/umbria/perugia/nikis-resort?utm_source=member_website&utm_medium=2014_badge&utm_campaign=badge_link" target="_blank">
						<img src="/wp-content/themes/nikis-resort/images/Loghi/sawdays.jpg" alt="">
					</a>
					<a href="https://www.eccellenzeitaliane.com/aziende/nikis-resort-country-house/10064514" target="_blank">
						<img src="/wp-content/themes/nikis-resort/images/Loghi/eccellenze.jpg" alt="">
					</a>
					<a href="https://www.residenzedepoca.it/vacanze_weekend/s/dimora/nikis_resort/" target="_blank">
						<img src="/wp-content/themes/nikis-resort/images/Loghi/residenze.jpg" alt="">
					</a>
				</div>
			</div>
			<!-- <div class="large-12 medium-12 small-12 column">
				<div class="widget__websites--large">
					<script>
						(function() {
							var randomId = Math.floor(Math.random() * 100000);
							var targetElemId = 'bcom_rwidget_' + randomId;
							document.write('<div id="' + targetElemId + '"></div>');
							var script   = document.createElement('script');
							script.type  = 'text/javascript';
							script.async = true;
							script.src   = 'http://www.booking.com/review_widget/it/nikis-resort.en.html?tmpl=review_widget/review_widget&wid=' + targetElemId + '&wtype=box_big_feat&hotel_id=579315&widget_language=en';
							var node     = document.getElementsByTagName('script')[0];
							node.parentNode.insertBefore(script, node);
						}());
					</script>
					<script type="text/javascript" src="https://cdn1.matrimonio.com/_js/wp-rated.js?v=4"></script>
					<div id="wp-rated" style="text-align: center;">
						<a href="https://www.matrimonio.com/hotel-ricevimenti/nikis-resort--e120924" title="Consigliato in www.matrimonio.com"><img alt="Consigliato da Matrimonio.com" id="wp-rated-img" src="https://cdn1.matrimonio.com/img/badges/2016/badge-simple_it_IT.jpg"/></a>
					</div>
					<script>wpShowRatedv2('120924');</script>
					<script src="https://partners.hotels.com:443/guestratingwidgets/1/398518/HCOM_IT-it_IT/2/9206/result.js"></script>
					<a id="hcom-w9206" target="_blank" class="hcom-w-badge-2" href="http://it.hotels.com/ho398518/nikis-resort-gubbio-italia/?wapb1=guestratingwidgets-2">
						<div id="hcom-w9206-inner" class="hcom-w-inner">
							<div id="hcom-w9206-top" class="hcom-w-top">
								<div id="hcom-w9206-text" class="hcom-w-text">Valutato da <span>5</span> ospiti</div>
								<div id="hcom-w9206-score" class="hcom-w-score"><span>4.6</span> / 5</div>
								<div id="hcom-w9206-sbubble" class="hcom-w-sbubble"></div>
							</div>
							<div id="hcom-w9206-bottom" class="hcom-w-bottom">
							</div>
						</div>
					</a>
				</div>
			</div> -->
		</div>
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
					- <a data-open="terms-and-conditions">Termini e Condizioni</a>
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

		gtag('config', '<?php echo $analytics; ?>', { 'anonymize_ip': true });
	</script>
<?php endif; ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3UaVdW8UpKAqULko4-UrPBYwQkC0VW8Y"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.sticky.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
<?php wp_footer(); ?>

</body>
</html>
