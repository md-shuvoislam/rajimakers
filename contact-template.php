<?php
/**
 * Template Name: contact
 *
 * @package Sandhas
 */

get_header();
?>
	
	<div class="contact-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="cotact-content">
						<h2><strong>Contact.</strong> Welkom binnen onze praktijk.</h2>
						<p>VLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt <strong>0416-123456</strong> of <strong>06-12345678.</strong> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit <strong>0416-456789.</strong> anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
						<strong>Telefonisch spreekuur:</strong>
						<p>Indien u zich wil aanmelden of u iets niet spoedeisends wil vragen kunt u ons bellen tijdens het telefonisch spreekuur op maandag, dinsdag, woensdag of donderdag. Maandag, woensdag en donderdag kunt u ons hiervoor bereiken tussen 13.30 uur en 14.30 uur. Op dinsdag tussen 9.00 uur en 12.00 uur. Het telefoonnummer waar u ons dan op kunt bereiken is: <strong>0416-456789</strong></p>
					</div>
					<div class="row mapsection">
						<div class="col-md-4">
							<h3>Locatie Waalwijk</h3>
							<p>Gezondheisdcentrum Koetshuis</p>
							<p>Straatnaam 123</p>
							<p>4567 AB Waalwijk</p>
						</div>
						<div class="col-md-4">
							<h4>Contact</h4>
							<p>Tel. 0416-123456</p>
							<p>Spoed: 0416-456789</p>
							<p>Email: info@huisartsraaijmakers.nl</p>
						</div>
						<div class="col-md-4">
							<h4>Openingstijden</h4>
							<p>Ma  t/m Don 9:00 - 17:00 uur</p>
							<p>Vrijdag 9:00 - 15:00 uur</p>
							<p>Zat t/m Zon Zijn we gesloten</p>
						</div>
						<?php echo do_shortcode('[put_wpgm id=1]'); ?>
					</div>
					<div class="row mapsection">
						<div class="col-md-4">
							<h3>Locatie Spang-Capelle</h3>
							<p>Gezondheisdcentrum Koetshuis</p>
							<p>Straatnaam 123</p>
							<p>4567 AB Waalwijk</p>
						</div>
						<div class="col-md-4">
							<h4>Contact</h4>
							<p>Tel. 0416-123456</p>
							<p>Spoed: 0416-456789</p>
							<p>Email: info@huisartsraaijmakers.nl</p>
						</div>
						<div class="col-md-4">
							<h4>Openingstijden</h4>
							<p>Ma  t/m Don 9:00 - 17:00 uur</p>
							<p>Vrijdag 9:00 - 15:00 uur</p>
							<p>Zat t/m Zon Zijn we gesloten</p>
						</div>
						<?php echo do_shortcode('[put_wpgm id=2]'); ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="theme-sidebar">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
				</div>
			</div>

		</div>
	</div>
<?php
get_footer();
