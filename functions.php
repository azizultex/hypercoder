<?php
/**
 * hypercoder functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hypercoder
 */

if ( ! function_exists( 'hypercoder_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hypercoder_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on hypercoder, use a find and replace
	 * to change 'hypercoder' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'hypercoder', get_template_directory() . '/languages' );

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

	/* custom image sizes */
	add_image_size('', 50, 50, true);
	add_image_size('', 360, 225, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'hypercoder' ),
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
	/*add_theme_support( 'custom-background', apply_filters( 'hypercoder_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );*/
}
endif;
add_action( 'after_setup_theme', 'hypercoder_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hypercoder_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hypercoder_content_width', 640 );
}
add_action( 'after_setup_theme', 'hypercoder_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hypercoder_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'footer', 'hypercoder' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'hypercoder' ),
		'before_widget' => '<div class="widgets col-md-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget_title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'hypercoder_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hypercoder_scripts() {
	/* CSS */
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'rangeslider_css', get_template_directory_uri() . '/css/rangeslider.css' );
	wp_enqueue_style( 'reset_css', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'hypercoder-style', get_stylesheet_uri() );
	wp_enqueue_style('font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
	wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,700,700italic,600,400italic,300,300italic,200');

	/* Scripts */
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'rangeslider', get_template_directory_uri() . '/js/rangeslider.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );

	wp_enqueue_script( 'hypercoder-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'hypercoder-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hypercoder_scripts' );



/* Required Files */
require get_template_directory() . '/inc/required_plugins.php';
require get_template_directory() . '/inc/shortcodes.php';


/** * Implement the Custom Header feature.*/
require get_template_directory() . '/inc/custom-header.php';
/*** Custom template tags for this theme.*/
require get_template_directory() . '/inc/template-tags.php';
/*** Custom functions that act independently of the theme templates.*/
require get_template_directory() . '/inc/extras.php';
/*** Customizer additions.*/
require get_template_directory() . '/inc/customizer.php';
/*** Load Jetpack compatibility file.*/
require get_template_directory() . '/inc/jetpack.php';

/* remove piklist admin menu */
function remove_piklist_menu($pages) {
	foreach($pages as $page => $value) {
		if ($value['menu_slug'] == 'piklist') {
			unset($pages[$page]); // Remove it from the $pages array
		}
	}
	return $pages;
}
add_filter('piklist_admin_pages', 'remove_piklist_menu');


/* setting page */
function piklist_theme_setting_pages($pages) {
	$pages[] = array(
		'page_title' => __('Hypercoder Setting', 'hypercoder') ,
		'menu_title' => __('Hypercoder Setting', 'hypercoder') ,
		'capability' => 'manage_options',
		'menu_slug' => 'hypercoder_setting',
		'setting' => 'hypercoder_setting',
		'menu_icon' => get_template_directory_uri() . '/piklist/img/icon.png',
		'page_icon' => get_template_directory_uri(). '/piklist/img/icon.png',
		'single_line' => true,
		'default_tab' => 'General',
		'save_text' => __('Save Settings', 'hypercoder')
	);
	return $pages;
}
add_filter('piklist_admin_pages', 'piklist_theme_setting_pages');

/* Social Media */
function hypercoder_social_media() {         
  $settings = get_option('hypercoder_setting');
  $social_media_links = $settings['social_media'];
  $icons = wp_list_pluck($social_media_links, 'icon_class');
  $link = wp_list_pluck($social_media_links, 'link');

  $output = '<ul class="social_media list-inline">';
  if(!empty($icons)) {
      $collected = array_combine($icons, $link);

      foreach($collected as $k => $v) {
        $icon_class = ($k == 'googleplus') ? 'google-plus' : $k;
        $icon_class = ($k == 'vimeo') ? 'vimeo-square' : $k;
        
        $output.= '<li>
          <a href="'.$v.'"><i class="fa fa-'.$icon_class.'"></i></a></li>';
      }
   
  }
  	$output.='</ul>'; 
    return $output;
}
