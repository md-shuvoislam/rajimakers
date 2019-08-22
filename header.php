<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rajimakers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="page-banner-hero hasbg">
		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="site-branding">
							<?php the_custom_logo(); ?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-md-5">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" data-toggle="collapse" data-target="#primary-menu" aria-expanded="false" ><?php esc_html_e( 'Primary Menu', 'sandhas' ); ?></button>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );
							?>
						</nav><!-- #site-navigation -->
					</div>
					<div class="col-md-3 text-right">
						<div class="search-container">
						      <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
							     <input type="search" class="search-field" placeholder="Type hier uw zoeackvraag" value="" name="s" title="Search for:" />
							    <button type="submit"><i class="fa fa-search"></i></button>
							</form>
						  </div>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->
			
	</div>

	<div class="header-category">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-2">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-1.png" alt="" />
						<p>Inschrijven</p>
					</a>
				</div>
				<div class="col-md-2">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-2.png" alt="" />
						<p>Moet ik naar de dokter?</p>
					</a>
				</div>
				<div class="col-md-2">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-3.png" alt="" />
						<p>Afspraak maken (zonder inloggen)</p>
					</a>
				</div>
				<div class="col-md-2">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-4.png" alt="" />
						<p>Wat kan ik doen? (Thuisarts.nl)</p>
					</a>
				</div>
				<div class="col-md-2">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-5.png" alt="" />
						<p>Herhaal recept</p>
					</a>
				</div>
				<div class="col-md-2">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-6.png" alt="" />
						<p>Spoed telefoon</p>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div id="content" class="site-content">
