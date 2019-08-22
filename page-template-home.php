<?php
/**
 * Template Name: Home
 *
 * @package Sandhas
 */

get_header();
?>
	
	<div class="slider-area">
		<?php 
			echo do_shortcode('[smartslider3 slider=1]');
		?>
	</div>

	<div class="recent-post-slider section-padding">
			<?php 
				echo do_shortcode('[rajimakers-blog]');
			?>
	</div>

	<div class="thuistar-nl-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2>Wat kan ik doen?</h2>
					<h4>Zoekt u specifieke informatie over gezondheid en ziekten?</h4>
					<p>Voor medische informatie verwijzen wij u graag door naar de website Thuisarts.nl.Thuisarts.nl geeft betrouwbare en onafhankelijke informatie over gezondheid en ziekten. <span>Geef in onderstaand zoekveld aan waar u naar op zoek bent.</span></p>
				</div>
				<div class="col-md-4 text-right">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/thuistar.nl.png" alt="" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="website-search">
						<input type="text" placeholder="Type hier uw zoekvraag" name="search">
      					<button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mijngezondheid-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Het gemak van MijnGezondheid.net</h2>
					<h4>Regel uw zorg wanneer het u uitkomt!</h4>
					<p>Met MijnGezondheid.net kunt u 24 uur per dag, 7 dagen in de week online zorgtaken regelen bij uw huisarts of apotheek. <span>Klik hieronder voor uitleg over de verschillende functionaliteiten van MijnGezondheid.net.</span></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="website-go">
						<a href="#">Ga naar MijnGezondheid.net</a>
					</div>
				</div>
				<div class="col-md-6 text-right">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mingonjended.png" alt="" />
				</div>
			</div>
		</div>
	</div>

	<div class="thuistar-nl-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2>Welke medicijnen heb ik nodig?</h2>
					<h4>Zoekt u specifieke informatie over medicijnen?</h4>
					<p>Voor medische informatie verwijzen wij u graag door naar de website Thuisarts.nl.Thuisarts.nl geeft betrouwbare en onafhankelijke informatie over gezondheid en ziekten. <span>Geef in onderstaand zoekveld aan waar u naar op zoek bent.</span></p>
				</div>
				<div class="col-md-4 text-right">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/apotheek.png" alt="" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="website-search">
						<input type="text" placeholder="Type hier uw zoekvraag" name="search">
      					<button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>

	

<?php
get_footer();
