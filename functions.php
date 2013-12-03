<?php
/**
 * Mr Smile Theme functions and definitions
 *
 * @package Mr Smile Theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'mrsmile_wp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function mrsmile_wp_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Mr Smile Theme, use a find and replace
	 * to change 'mrsmile_wp' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'mrsmile_wp', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('home-box', 295, 250, true );
	add_image_size('home-box2', 617, 249, true );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'mrsmile_wp' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	//add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	// add_theme_support( 'custom-background', apply_filters( 'mrsmile_wp_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif; // mrsmile_wp_setup
add_action( 'after_setup_theme', 'mrsmile_wp_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function mrsmile_wp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'mrsmile_wp' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'mrsmile_wp' ),
		'id'            => 'footer-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'mrsmile_wp' ),
		'id'            => 'footer-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'mrsmile_wp_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function mrsmile_wp_scripts() {
	wp_enqueue_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' );
	wp_enqueue_style( 'mrsmile_wp-style', get_stylesheet_uri() );

	wp_enqueue_style( 'mrsmile-custom', get_template_directory_uri() . '/inc/custom.css', array(), '20130702', $media = 'all' );

	wp_enqueue_script( 'mrsmile_wp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'mrsmile_wp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'mrsmile_wp-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
	wp_enqueue_script( 'selectivizr', get_template_directory_uri() . '/js/selectivizr-min.js', array('jquery'), '1.0.2', true );
}
add_action( 'wp_enqueue_scripts', 'mrsmile_wp_scripts' );

// Google Webfonts

function wpmeds_do_google_webfonts() {
	?>
	<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Lato:300,400,900,400italic:latin', 'Lily+Script+One::latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
  <?php
}
add_action('wp_head', 'wpmeds_do_google_webfonts');
/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Load ACF

require get_template_directory() . '/inc/acf-activate.php';

//add WooCommerce Support
add_theme_support( 'woocommerce' );

// Add custom css to editor
function my_theme_add_editor_styles() {
    add_editor_style( 'editor-styles.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );
