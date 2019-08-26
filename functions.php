<?php
/**
 * rajimakers functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rajimakers
 */

if ( ! function_exists( 'rajimakers_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rajimakers_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on rajimakers, use a find and replace
		 * to change 'rajimakers' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'rajimakers', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'rajimakers' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'rajimakers_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 374,
			'width'       => 309,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'rajimakers_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rajimakers_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'rajimakers_content_width', 640 );
}
add_action( 'after_setup_theme', 'rajimakers_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rajimakers_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rajimakers' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'rajimakers' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'rajimakers' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'rajimakers' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'rajimakers' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'rajimakers' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'rajimakers_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rajimakers_scripts() {

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
	wp_enqueue_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css');
	wp_enqueue_style('rajimakers-google-fonts', get_template_directory_uri() . '/assets/fonts/helvetica.css');

	wp_enqueue_style( 'rajimakers-style', get_stylesheet_uri() );

	wp_enqueue_script( 'rajimakers-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'rajimakers-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '', true);
	wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), '', true);
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '', true);
	wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array( 'jquery' ), '', true);
	wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ), '', true);
	
	wp_enqueue_script( 'rajimakers-script', get_template_directory_uri() . '/assets/js/active.js', array(), $version, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rajimakers_scripts' );

/**
 * TGM Activation
 */
require dirname( __FILE__ ) . '/inc/tgm/tgm-init.php';

/**
 * Theme Option.
 */
require get_template_directory() . '/inc/options-init_php.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function rajimakers_custom_blog($atts)
{

// Attributes

$atts = shortcode_atts(array(
'posts_per_page' => 3,
'cat' => '',
'offset' => ''
), $atts);

$query = new WP_Query(array(
'posts_per_page' => $atts['posts_per_page'],
'offset' => $atts['offset'],
'cat' => $atts['cat']

));
ob_start();
if ($query->have_posts()) {
?>
<div class="rajimakers-blog-shortcode" > 
    <div class="container">
        <div class="row">
        	<?php echo '<div class="owl-carousel blog-slider owl-theme">'; ?>
            <?php while ($query->have_posts()): $query->the_post(); ?>
            <div class="col-md-4">
                <div class="single-blog">
                    <a href="<?php the_permalink()?>">
                        <?php 
                        if ( has_post_thumbnail() ) { 
                                the_post_thumbnail(); 
                            }
                        ?>  
                    </a>
                   	<div class="blog-content">
                   		 <div class="post-meta">
						<?php $user = wp_get_current_user(); if ( $user ) : ?>
							<img src="<?php echo esc_url( get_avatar_url( $user->ID, array('size'=>30) ) ); ?>" />
						<?php endif; ?><span><?php the_author(); ?>-</span>
						<span><?php echo get_the_date(); ?></span>
						</div>
	                    <p><?php the_excerpt(); ?></p>
                   	</div>
                    
                </div>
                <div class="row blog-social">
                	<div class="col-md-6">
                		<h4>Deel dit bericht:</h4>
                	</div>
                	<div class="col-md-6 text-right">
                		<ul>
                			<li><a href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>"><i class="fa fa-facebook"></i></a></li>
                			<li><a href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>"><i class="fa fa-twitter"></i></a></li>
                			<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                		</ul>
                	</div>
                </div>
            </div>
            <?php
            endwhile;
            ?>
            <?php echo '</div>'; ?>
        </div>  
    </div>
<?php wp_reset_query();?>
</div><?php
}
return ob_get_clean();
}
add_shortcode('rajimakers-blog', 'rajimakers_custom_blog');