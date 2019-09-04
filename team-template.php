<?php
/**
 * Template Name: team
 *
 * @package Sandhas
 */

get_header();
?>
	
	<div class="contact-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cotact-content">
						<h2>Welkom binnen <strong>onze praktijk.</strong></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt molm id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
					</div>
					<?php echo do_shortcode('[media_boxes id="1"]'); ?>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="theme-sidebar">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
				</div>

		</div>
	</div>
<?php
get_footer();
