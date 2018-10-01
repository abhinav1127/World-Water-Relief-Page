<?php

/**

 * FLATON functions and definitions

 *

 * @package FLATON

  */


    // add name field to MailChimp bar
    add_action( 'mctb_before_email_field', function() {
        echo '<input type="text" name="First Name" placeholder="First Name" />';
    });

    add_filter( 'mctb_data', function( $vars ) {
        $vars['First Name'] = ( isset( $_POST['NAME'] ) ) ? sanitize_text_field( $_POST['First Name'] ) : '';
        return $vars;
    });

    add_action( 'mctb_before_email_field', function() {
        echo '<input type="text" name="Last Name" placeholder="Last Name" />';
    });

    add_filter( 'mctb_data', function( $vars ) {
        $vars['Last Name'] = ( isset( $_POST['NAME'] ) ) ? sanitize_text_field( $_POST['Last Name'] ) : '';
        return $vars;
    });




/**

 * Set the content width based on the theme's design and stylesheet.

 */

if ( ! isset( $content_width ) ) {

	$content_width = 870; /* pixels */

}



if ( ! function_exists( 'flaton_setup' ) ) :

/**

 * Sets up theme defaults and registers support for various WordPress features.

 *

 * Note that this function is hooked into the after_setup_theme hook, which

 * runs before the init hook. The init hook is too late for some features, such

 * as indicating support for post thumbnails.

 */

function flaton_setup() {



	// Makes theme translation ready

	load_theme_textdomain( 'flaton', FLATON_LANGUAGES_DIR );

	

	// Add default posts and comments RSS feed links to head.

	add_theme_support( 'automatic-feed-links' );



	/*

	 * Enable support for Post Thumbnails on posts and pages.

	 *

	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails

	 */

	add_theme_support( 'post-thumbnails' );

	set_post_thumbnail_size( 250, 250, true );



	// This theme uses wp_nav_menu() in one location.

	register_nav_menus( array(

		'primary' => __( 'Primary Menu', 'flaton' ),

	) );



	/*

	 * Switch default core markup for search form, comment form, and comments

	 * to output valid HTML5.

	 */

	add_theme_support( 'html5', array(

		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',

	) );



	/*

	 * Enable support for Post Formats.

	 * See http://codex.wordpress.org/Post_Formats

	 */

	add_theme_support( 'post-formats', array(

		'aside', 'image', 'video', 'quote', 'link',

	) );



	// Setup the WordPress core custom background feature.

	add_theme_support( 'custom-background', apply_filters( 'flaton_custom_background_args', array(

		'default-color' => 'ffffff',

		'default-image' => '',

	) ) );

}

endif; // flaton_setup

add_action( 'after_setup_theme', 'flaton_setup' );



/**

 * Register widget area.

 *

 * @link http://codex.wordpress.org/Function_Reference/register_sidebar

 */

function flaton_widgets_init() {

	register_sidebar( array(

		'name'          => __( 'Sidebar', 'flaton' ),

		'id'            => 'sidebar-1',

		'description'   => '',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widget-title">',

		'after_title'   => '</h3>',

	) );

	register_sidebar( array(

		'name'          => __( 'Footer 1', 'flaton' ),

		'id'            => 'footer-1',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widget-title">',

		'after_title'   => '</h3>',

	) );



	register_sidebar( array(

		'name'          => __( 'Footer 2', 'flaton' ),

		'id'            => 'footer-2',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widget-title">',

		'after_title'   => '</h3>',

	) );



	register_sidebar( array(

		'name'          => __( 'Footer 3', 'flaton' ),

		'id'            => 'footer-3',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widget-title">',

		'after_title'   => '</h3>',

	) );



	register_sidebar( array(

		'name'          => __( 'Footer 4', 'flaton' ),

		'id'            => 'footer-4',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widget-title">',

		'after_title'   => '</h3>',

	) );

}

add_action( 'widgets_init', 'flaton_widgets_init' );



/**

 * Defining constants to use through out theme code

 */

	require_once get_template_directory() . '/includes/constants.php';

/**

 * Enqueue scripts and styles.

 */

require FLATON_INCLUDES_DIR . '/enqueue.php';



/**

 * Implement the Custom Header feature.

 */

require FLATON_INCLUDES_DIR . '/custom-header.php';



/**

 * Custom functions for this theme.

 */

require FLATON_INCLUDES_DIR . '/theme-functions.php';



/**

 * Custom template tags for this theme.

 */

require FLATON_INCLUDES_DIR . '/template-tags.php';



/**

 * Custom functions that act independently of the theme templates.

 */

require FLATON_INCLUDES_DIR . '/extras.php';



/**

 * Customizer additions.

 */

require FLATON_INCLUDES_DIR . '/customizer.php';



/**

 * Load Jetpack compatibility file.

 */

require FLATON_INCLUDES_DIR . '/jetpack.php';



/**

 * Load Theme Options Page

 * This uses Redux Framework Plugin

 */

require_once( FLATON_INCLUDES_DIR . '/load-plugins.php' );



require_once( FLATON_INCLUDES_DIR . '/home-info.php' );



if( class_exists('ReduxFrameworkPlugin')) {

	require_once( FLATON_INCLUDES_DIR . '/theme-options-config.php' );

}





/**

 * FLATON functions and definitions

 *

 * @package FLATON

  */



/**

 * Set the content width based on the theme's design and stylesheet.

 */

if ( ! isset( $content_width ) ) {

	$content_width = 870; /* pixels */

}



if ( ! function_exists( 'flaton_setup' ) ) :

/**

 * Sets up theme defaults and registers support for various WordPress features.

 *

 * Note that this function is hooked into the after_setup_theme hook, which

 * runs before the init hook. The init hook is too late for some features, such

 * as indicating support for post thumbnails.

 */

function flaton_setup() {



	// Makes theme translation ready

	load_theme_textdomain( 'flaton', FLATON_LANGUAGES_DIR );

	

	// Add default posts and comments RSS feed links to head.

	add_theme_support( 'automatic-feed-links' );



	/*

	 * Enable support for Post Thumbnails on posts and pages.

	 *

	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails

	 */

	add_theme_support( 'post-thumbnails' );

	set_post_thumbnail_size( 250, 250, true );



	// This theme uses wp_nav_menu() in one location.

	register_nav_menus( array(

		'primary' => __( 'Primary Menu', 'flaton' ),

	) );



	/*

	 * Switch default core markup for search form, comment form, and comments

	 * to output valid HTML5.

	 */

	add_theme_support( 'html5', array(

		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',

	) );



	/*

	 * Enable support for Post Formats.

	 * See http://codex.wordpress.org/Post_Formats

	 */

	add_theme_support( 'post-formats', array(

		'aside', 'image', 'video', 'quote', 'link',

	) );



	// Setup the WordPress core custom background feature.

	add_theme_support( 'custom-background', apply_filters( 'flaton_custom_background_args', array(

		'default-color' => 'ffffff',

		'default-image' => '',

	) ) );

}

endif; // flaton_setup

add_action( 'after_setup_theme', 'flaton_setup' );



/**

 * Register widget area.

 *

 * @link http://codex.wordpress.org/Function_Reference/register_sidebar

 */
/*
function flaton_widgets_init() {

	register_sidebar( array(

		'name'          => __( 'Sidebar', 'flaton' ),

		'id'            => 'sidebar-1',

		'description'   => '',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widget-title">',

		'after_title'   => '</h3>',

	) );

	register_sidebar( array(

		'name'          => __( 'Footer 1', 'flaton' ),

		'id'            => 'footer-1',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widget-title">',

		'after_title'   => '</h3>',

	) );



	register_sidebar( array(

		'name'          => __( 'Footer 2', 'flaton' ),

		'id'            => 'footer-2',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widget-title">',

		'after_title'   => '</h3>',

	) );



	register_sidebar( array(

		'name'          => __( 'Footer 3', 'flaton' ),

		'id'            => 'footer-3',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widget-title">',

		'after_title'   => '</h3>',

	) );



	register_sidebar( array(

		'name'          => __( 'Footer 4', 'flaton' ),

		'id'            => 'footer-4',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widget-title">',

		'after_title'   => '</h3>',

	) );

}

add_action( 'widgets_init', 'flaton_widgets_init' );
*/


/**

 * Defining constants to use through out theme code

 */

	require_once get_template_directory() . '/includes/constants.php';

/**

 * Enqueue scripts and styles.

 */

require FLATON_INCLUDES_DIR . '/enqueue.php';



/**

 * Implement the Custom Header feature.

 */

require FLATON_INCLUDES_DIR . '/custom-header.php';



/**

 * Custom functions for this theme.

 */

require FLATON_INCLUDES_DIR . '/theme-functions.php';



/**

 * Custom template tags for this theme.

 */

require FLATON_INCLUDES_DIR . '/template-tags.php';



/**

 * Custom functions that act independently of the theme templates.

 */

require FLATON_INCLUDES_DIR . '/extras.php';



/**

 * Customizer additions.

 */

require FLATON_INCLUDES_DIR . '/customizer.php';



/**

 * Load Jetpack compatibility file.

 */

require FLATON_INCLUDES_DIR . '/jetpack.php';



/**

 * Load Theme Options Page

 * This uses Redux Framework Plugin

 */

require_once( FLATON_INCLUDES_DIR . '/load-plugins.php' );



require_once( FLATON_INCLUDES_DIR . '/home-info.php' );



if( class_exists('ReduxFrameworkPlugin')) {

	require_once( FLATON_INCLUDES_DIR . '/theme-options-config.php' );

}







function the_breadcrumb() {

	if (!is_home()) {

		echo '<li> <a href="';

		echo get_option('home');

		echo '">';

		echo "home";

		echo "</a> </li> ";

     echo " <li> /  ";

		if (is_category() || is_single()) {

			the_category('title_li=');

			if (is_single()) {

				echo "  ";

				the_title();

			}

		} elseif (is_page()) {

			echo the_title();

		}

     echo "</li>";

	}

}


