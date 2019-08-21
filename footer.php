<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rajimakers
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="footer-widget-inner">
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 text-right">
						<div class="footer-widget-inner">
							<?php dynamic_sidebar( 'footer-2' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
