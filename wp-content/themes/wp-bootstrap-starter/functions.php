<?php
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! function_exists( 'wp_bootstrap_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_bootstrap_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wp-bootstrap-starter', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'wp-bootstrap-starter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    function wp_boostrap_starter_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'wp_boostrap_starter_add_editor_styles' );

}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_starter_setup' );


/**
 * Add Welcome message to dashboard
 */
function wp_bootstrap_starter_reminder(){
        $theme_page_url = 'https://afterimagedesigns.com/wp-bootstrap-starter/?dashboard=1';

            if(!get_option( 'triggered_welcomet')){
                $message = sprintf(__( 'Welcome to WP Bootstrap Starter Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'wp-bootstrap-starter' ),
                    esc_url( $theme_page_url )
                );

                printf(
                    '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
                    $message
                );
                add_option( 'triggered_welcomet', '1', '', 'yes' );
            }

}
add_action( 'admin_notices', 'wp_bootstrap_starter_reminder' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_starter_content_width', 1170 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_starter_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-starter' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<div id="%1$s" class="col-lg-4 col-md-4 col-12 text-center mx-auto widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title text-center">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'wp-bootstrap-starter' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'wp-bootstrap-starter' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'wp-bootstrap-starter' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wp_bootstrap_starter_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts() {
	// load bootstrap css
	wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
    // fontawesome cdn
    wp_enqueue_style( 'wp-bootstrap-pro-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css' );
	// load bootstrap css
	// load AItheme styles
	// load WP Bootstrap Starter styles
	wp_enqueue_style( 'wp-bootstrap-starter-style', get_stylesheet_uri() );
    if(get_theme_mod( 'theme_option_setting' ) && get_theme_mod( 'theme_option_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'theme_option_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/'.get_theme_mod( 'theme_option_setting' ).'.css', false, '' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-lora') {
        wp_enqueue_style( 'wp-bootstrap-starter-poppins-lora-font', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-merriweather') {
        wp_enqueue_style( 'wp-bootstrap-starter-montserrat-merriweather-font', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900|Montserrat:300,400,400i,500,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-poppins') {
        wp_enqueue_style( 'wp-bootstrap-starter-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'roboto-roboto') {
        wp_enqueue_style( 'wp-bootstrap-starter-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'arbutusslab-opensans') {
        wp_enqueue_style( 'wp-bootstrap-starter-arbutusslab-opensans-font', 'https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'oswald-muli') {
        wp_enqueue_style( 'wp-bootstrap-starter-oswald-muli-font', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800|Oswald:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-opensans') {
        wp_enqueue_style( 'wp-bootstrap-starter-montserrat-opensans-font', 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'robotoslab-roboto') {
        wp_enqueue_style( 'wp-bootstrap-starter-robotoslab-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700|Roboto:300,300i,400,400i,500,700,700i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) && get_theme_mod( 'preset_style_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_style_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/typography/'.get_theme_mod( 'preset_style_setting' ).'.css', false, '' );
    }
    //Color Scheme
    /*if(get_theme_mod( 'preset_color_scheme_setting' ) && get_theme_mod( 'preset_color_scheme_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_color_scheme_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/'.get_theme_mod( 'preset_color_scheme_setting' ).'.css', false, '' );
    }else {
        wp_enqueue_style( 'wp-bootstrap-starter-default', get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/blue.css', false, '' );
    }*/

	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
    wp_enqueue_script('wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
	wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );
	wp_enqueue_script( 'wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_scripts' );


function wp_bootstrap_starter_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "wp-bootstrap-starter" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "wp-bootstrap-starter" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "wp-bootstrap-starter" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter( 'the_password_form', 'wp_bootstrap_starter_password_form' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}

//
//function tribe_custom_theme_text ( $translation, $text, $domain ) {
//
//    // Put your custom text here in a key => value pair
//    // Example: 'Text you want to change' => 'This is what it will be changed to'
//    // The text you want to change is the key, and it is case-sensitive
//    // The text you want to change it to is the value
//    // You can freely add or remove key => values, but make sure to separate them with a comma
//    // This example changes the label "Venue" to "Location", and "Related Events" to "Similar Events"
//    $custom_text = array(
//        'Events' => '',
//    );
//
//    // If this text domain starts with "tribe-", "the-events-", or "event-" and we have replacement text
//    if( (strpos($domain, 'tribe-') === 0 || strpos($domain, 'the-events-') === 0 || strpos($domain, 'event-') === 0) && array_key_exists($translation, $custom_text) ) {
//        $translation = $custom_text[$translation];
//    }
//
//    return $translation;
//}
//add_filter('gettext', 'tribe_custom_theme_text', 20, 3);


//add_filter( 'tribe_get_events_title', 'tribe_alter_event_archive_titles', 11, 2 );
//
//function tribe_alter_event_archive_titles ( $original_recipe_title, $depth ) {
//
//    // Modify the titles here
//    // Some of these include %1$s and %2$s, these will be replaced with relevant dates
//
//    $title_upcoming =   'Upcoming Events'; // List View: Upcoming events
//    $title_past =       'Past Events'; // List view: Past events
//    $title_range =      'Events for %1$s - %2$s'; // List view: range of dates being viewed
//    $title_month =      '%1$s'; // Month View, %1$s = the name of the month
//    $title_day =        'Events for %1$s'; // Day View, %1$s = the day
//    $title_all =        'All events for %s'; // showing all recurrences of an event, %s = event title
//    $title_week =       'Events for week of %s'; // Week view
//
//
//    // Don't modify anything below this unless you know what it does
//    global $wp_query;
//    $tribe_ecp = Tribe__Events__Main::instance();
//    $date_format = apply_filters( 'tribe_events_pro_page_title_date_format', tribe_get_date_format( true ) );
//    // Default Title
//    $title = $title_upcoming;
//    // If there's a date selected in the tribe bar, show the date range of the currently showing events
//    if ( isset( $_REQUEST['tribe-bar-date'] ) && $wp_query->have_posts() ) {
//        if ( $wp_query->get( 'paged' ) > 1 ) {
//            // if we're on page 1, show the selected tribe-bar-date as the first date in the range
//            $first_event_date = tribe_get_start_date( $wp_query->posts[0], false );
//        } else {
//            //otherwise show the start date of the first event in the results
//            $first_event_date = tribe_event_format_date( $_REQUEST['tribe-bar-date'], false );
//        }
//        $last_event_date = tribe_get_end_date( $wp_query->posts[ count( $wp_query->posts ) - 1 ], false );
//        $title = sprintf( $title_range, $first_event_date, $last_event_date );
//    } elseif ( tribe_is_past() ) {
//        $title = $title_past;
//    }
//    // Month view title
//    if ( tribe_is_month() ) {
//        $title = sprintf(
//            $title_month,
//            date_i18n( tribe_get_option( 'monthAndYearFormat', 'F Y' ), strtotime( tribe_get_month_view_date() ) )
//        );
//    }
//
//    return $title;
//}


/*
 * Alters event's archive titles
 */
function tribe_alter_event_archive_titles ( $original_recipe_title, $depth ) {
    // Modify the titles here
    // Some of these include %1$s and %2$s, these will be replaced with relevant dates
    $title_upcoming =   'Upcoming Events'; // List View: Upcoming events
    $title_past =       'Past Events'; // List view: Past events
    $title_range =      'Events for %1$s - %2$s'; // List view: range of dates being viewed
    $title_month =      '%1$s'; // Month View, %1$s = the name of the month
    $title_day =        '%1$s'; // Day View, %1$s = the day
    $title_all =        'All events for %s'; // showing all recurrences of an event, %s = event title
    $title_week =       'Events for week of %s'; // Week view
    // Don't modify anything below this unless you know what it does
    global $wp_query;
    $tribe_ecp = Tribe__Events__Main::instance();
    $date_format = apply_filters( 'tribe_events_pro_page_title_date_format', tribe_get_date_format( true ) );
    // Default Title
    $title = $title_upcoming;
    // If there's a date selected in the tribe bar, show the date range of the currently showing events
    if ( isset( $_REQUEST['tribe-bar-date'] ) && $wp_query->have_posts() ) {
        if ( $wp_query->get( 'paged' ) > 1 ) {
            // if we're on page 1, show the selected tribe-bar-date as the first date in the range
            $first_event_date = tribe_get_start_date( $wp_query->posts[0], false );
        } else {
            //otherwise show the start date of the first event in the results
            $first_event_date = tribe_event_format_date( $_REQUEST['tribe-bar-date'], false );
        }
        $last_event_date = tribe_get_end_date( $wp_query->posts[ count( $wp_query->posts ) - 1 ], false );
        $title = sprintf( $title_range, $first_event_date, $last_event_date );
    } elseif ( tribe_is_past() ) {
        $title = $title_past;
    }
    // Month view title
    if ( tribe_is_month() ) {
        $title = sprintf(
            $title_month,
            date_i18n( tribe_get_option( 'monthAndYearFormat', 'F Y' ), strtotime( tribe_get_month_view_date() ) )
        );
    }
    // Day view title
    if ( tribe_is_day() ) {
        $title = sprintf(
            $title_day,
            date_i18n( tribe_get_date_format( true ), strtotime( $wp_query->get( 'start_date' ) ) )
        );
    }
    // All recurrences of an event
    if ( function_exists('tribe_is_showing_all') && tribe_is_showing_all() ) {
        $title = sprintf( $title_all, get_the_title() );
    }
    // Week view title
    if ( function_exists('tribe_is_week') && tribe_is_week() ) {
        $title = sprintf(
            $title_week,
            date_i18n( $date_format, strtotime( tribe_get_first_week_day( $wp_query->get( 'start_date' ) ) ) )
        );
    }
    if ( is_tax( $tribe_ecp->get_event_taxonomy() ) && $depth ) {
        $cat = get_queried_object();
        $title = '<a href="' . esc_url( tribe_get_events_link() ) . '">' . $title . '</a>';
        $title .= ' &#8250; ' . $cat->name;
    }
    return $title;
}
add_filter( 'tribe_get_events_title', 'tribe_alter_event_archive_titles', 11, 2 );



function  tribe_alter_events_list_the_date_headers() {

    /* Month and year separators (on every month and year change) */

    $show_headers = apply_filters( 'tribe_events_list_show_date_headers', true );

    $html = '';

    if ( $show_headers ) {

        global $post, $wp_query;

        $event_year        = tribe_get_start_date( $post, false, 'Y' );
        $event_month       = tribe_get_start_date( $post, false, 'm' );
        $month_year_format = tribe_get_date_option( 'monthAndYearFormat', 'F Y' );

        if ( $wp_query->current_post > 0 ) {
            $prev_post = $wp_query->posts[ $wp_query->current_post - 1 ];
            $prev_event_year = tribe_get_start_date( $prev_post, false, 'Y' );
            $prev_event_month = tribe_get_start_date( $prev_post, false, 'm' );
        }


        /*
         * If the event month changed since the last event in the loop,
         * or is the same month but the year changed.
         *
         */
        if ( $wp_query->current_post === 0 || ( $prev_event_month != $event_month || ( $prev_event_month == $event_month && $prev_event_year != $event_year ) ) ) {
            $html .= sprintf( "<h2 class='tribe-events-list-separator-month chand'><span>%s</span></h2>", tribe_get_start_date( $post, false, $month_year_format ) );
        }

        echo apply_filters( 'tribe_alter_events_list_the_date_headers', $html, $event_month, $event_year );
    }
}

add_filter( 'tribe_events_list_the_date_headers', 'tribe_alter_events_list_the_date_headers', 11, 2 );



function tribe_alter_the_notices( $echo = true ) {
    $notices = Tribe__Notices::get();

    $html        = ! empty( $notices ) ? '<div class=""><ul class="alert bg-secondary text-white georgia"><li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  &nbsp;' . implode( '</li><li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  ', $notices ) . '</li></ul></div>' : '';

    /**
     * Deprecated the tribe_events_the_notices filter in 4.0 in favor of tribe_the_notices. Remove in 5.0
     */
    $the_notices = apply_filters( 'tribe_events_the_notices', $html, $notices );

    /**
     * filters the notices HTML
     */
    $the_notices = apply_filters( 'tribe_alter_the_notices', $html, $notices );
    if ( $echo ) {
        echo $the_notices;
    } else {
        return $the_notices;
    }
}


add_filter( 'tribe_the_notices', 'tribe_alter_the_notices', 11, 2 );



/**
 * Prevent calendar export links from showing anywhere on the front-end.
 *
 *
 */
class Tribe__Events__Remove__Export__Links {
    public function __construct() {
        add_action( 'init', array( $this, 'single_event_links' ) );
        add_action( 'init', array( $this, 'view_links' ) );
    }
    public function single_event_links() {
        remove_action(
            'tribe_events_single_event_after_the_content',
            array( $this->ical_provider(), 'single_event_links' )
        );
    }
    public function view_links() {
        remove_filter(
            'tribe_events_after_footer',
            array( $this->ical_provider(), 'maybe_add_link' )
        );
    }
    protected function ical_provider() {
        return function_exists( 'tribe' )
            ? tribe( 'tec.iCal' ) // Current
            : 'Tribe__Events__iCal'; // Legacy
    }
}
new Tribe__Events__Remove__Export__Links();


//add content before and after the_content depending on the type of page...
function wpdev_before_after($content) {

    if ( is_single() ) {
        $beforecontent = '<div class="single-post">';
        $aftercontent = '</div>';
    }

    else {

        $beforecontent = '<div class="index-post">';
        $aftercontent = '</div>';
    }

    $fullcontent = $beforecontent . $content . $aftercontent;
    return $fullcontent;

}
add_filter('the_content', 'wpdev_before_after');

add_filter('the_excerpt', 'wpdev_before_after');




function new_excerpt_more( $more ) {
    return '... <a class="read-more btn btn-md btn-dark mt-2" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );



//remove class from the_post_thumbnail
function the_post_thumbnail_remove_class($output) {
    $output = preg_replace('/class=".*?"/', 'class="img-fluid"', $output);
    return $output;
}
add_filter('post_thumbnail_html', 'the_post_thumbnail_remove_class');

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
    $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
    return $html;
}