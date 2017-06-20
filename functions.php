<?php require_once(get_template_directory() . "/inc/site.above.brand.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.brand.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.header.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.header.right-section.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.top.menu.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.content.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.body.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.page.body.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.subfooter.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.footer.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.after.footer.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.utils-functions.php"); ?>
<?php require_once(get_template_directory() . "/inc/news.widget.php"); ?>
<?php

remove_action('wp_head', 'wp_generator');
if ( ! function_exists('custom_post_announcement') ) {

// Register Custom Post Type
function custom_post_announcement() {

	$labels = array(
		'name'                => _x( 'Announcements', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Announcement', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Announcement', 'text_domain' ),
		'name_admin_bar'      => __( 'Announcements', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Announcement:', 'text_domain' ),
		'all_items'           => __( 'All Announcements', 'text_domain' ),
		'add_new_item'        => __( 'Add New Announcements', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Announcement', 'text_domain' ),
		'edit_item'           => __( 'Edit Announcement', 'text_domain' ),
		'update_item'         => __( 'Update Announcement', 'text_domain' ),
		'view_item'           => __( 'View Announcement', 'text_domain' ),
		'search_items'        => __( 'Search Announcements', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'announcement_post_type', 'text_domain' ),
		'description'         => __( 'Announcement Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'announcement_post_type', $args );
	
	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status', 'audio', 'video' ) );

        // allow thumbails for posts        
        add_theme_support( 'post-thumbnails' );
	

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_announcement');

}

add_action('widgets_init', 'register_NewsWidget');

function register_NewsWidget(){
    
    register_widget('NewsWidget');
    
}

if ( ! function_exists('custom_post_announcement') ) {

// Register Custom Post Type
function custom_post_announcement() {

	$labels = array(
		'name'                => _x( 'Announcements', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Announcement', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Announcement', 'text_domain' ),
		'name_admin_bar'      => __( 'Announcements', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Announcement:', 'text_domain' ),
		'all_items'           => __( 'All Announcements', 'text_domain' ),
		'add_new_item'        => __( 'Add New Announcements', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Announcement', 'text_domain' ),
		'edit_item'           => __( 'Edit Announcement', 'text_domain' ),
		'update_item'         => __( 'Update Announcement', 'text_domain' ),
		'view_item'           => __( 'View Announcement', 'text_domain' ),
		'search_items'        => __( 'Search Announcements', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'announcement_post_type', 'text_domain' ),
		'description'         => __( 'Announcement Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'announcement_post_type', $args );
	
	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status', 'audio', 'video' ) );

        // allow thumbails for posts        
        add_theme_support( 'post-thumbnails' );
	

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_announcement', 0 );

}

add_action('wp_enqueue_scripts', 'load_independence_day_css_js');

function load_independence_day_css_js(){

	// remove jQuery
	
	//	wp_deregister_script( 'jquery' );
	
	// load default style sheets

	wp_enqueue_style('normalize-style', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('foundation-style', get_template_directory_uri() . '/css/foundation.min.css');
	wp_enqueue_style('site-font-style', get_template_directory_uri() . '/css/fonts.css');
	wp_enqueue_style('site-style', get_stylesheet_uri());
	wp_enqueue_style('static-overrides-style', get_template_directory_uri() . '/css/app.css');
	
	// load default js
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('vendor-modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js');
	wp_enqueue_script('foundation-jQuery', get_template_directory_uri() . '/js/foundation.min.js');
	
}

function independence_day_widgets_init(){
    
	register_sidebar( array(
		'name'          => __( 'Above Branding Bar', 'independence-day' ),
		'id'            => 'above-brand-bar',
		'description'   => __( 'This widget houses the content above the branding bar', 'independence-day' ),
		'before_widget' => '<div id="%1$s" class="title-area-widget %2$s row">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Top Right Title Area', 'independence-day' ),
		'id'            => 'righttitlearea',
		'description'   => __( 'This widget houses the content in the top right of the site title bar', 'independence-day' ),
		'before_widget' => '<div id="%1$s" class="title-area-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
	register_sidebar( array(
		'name'          => __( 'Front Page Banner Area', 'independence-day' ),
		'id'            => 'bannerarea',
		'description'   => __( 'This widget houses the content in the Banner Area', 'independence-day' ),
		'before_widget' => '<div id="%1$s" class="banner-area-widget %2$s long-row">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Front Page Area', 'independence-day' ),
		'id'            => 'frontpage-area',
		'description'   => __( 'This widget houses the content above the footer bar', 'independence-day' ),
		'before_widget' => '<div id="frontpage-area-%1$s" class="frontpage-area-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class = "rss-widget-bar"><p><span>',
		'after_title'   => '</p></span></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Subfooter Area', 'independence-day' ),
		'id'            => 'sub-footerarea',
		'description'   => __( 'This widget houses the content above the footer bar', 'independence-day' ),
		'before_widget' => '<div id="sub-footerarea-%1$s" class="sub-footerarea-area-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Area', 'independence-day' ),
		'id'            => 'footerarea',
		'description'   => __( 'This widget houses the content in the footer bar', 'independence-day' ),
		'before_widget' => '<div id="footerarea-%1$s" class="footerarea-area-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
	register_sidebar( array(
		'name'          => __( 'Below Footer Area', 'independence-day' ),
		'id'            => 'below-footerarea',
		'description'   => __( 'This widget houses the content below the footer bar', 'independence-day' ),
		'before_widget' => '<div id="below-footerarea-%1$s" class="below-footerarea-area-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}

add_action('widgets_init', 'independence_day_widgets_init');

function independence_day_theme_setup(){

    // for thumbnails/featured image

	add_theme_support( 'post-thumbnails' );
    
    // post content types
    
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
    
	// This theme uses wp_nav_menu() in two locations.

	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'independence-day' ),
		'social'  => __( 'Social Links Menu', 'independence-day' ),
        'topmenu' => __( 'Top Menu', 'independence-day'),
        'mainmenu' => __( 'Main Menu', 'independence-day'),
        'leftmenu'=> __('Left Menu', 'independence-day'),
        'rightmenu'=> __('Right Menu', 'independence-day'),
        'subfootermenu'=> __('Sub Bottom Menu', 'independence-day'),
        'footermenu'=> __('Bottom Menu', 'independence-day'),
	) );
   
}

add_action( 'after_setup_theme', 'independence_day_theme_setup' );

// nav walker class for Foundation 5 menus

/**
 * Top Bar Walker
 *
 * @since 1.0.0
 */
class Top_Bar_Walker extends Walker_Nav_Menu {
  /**
    * @see Walker_Nav_Menu::start_lvl()
   * @since 1.0.0
   *
   * @param string $output Passed by reference. Used to append additional content.
   * @param int $depth Depth of page. Used for padding.
  */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "\n<ul class=\"sub-menu dropdown\">\n";
    }

    /**
     * @see Walker_Nav_Menu::start_el()
     * @since 1.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Menu item data object.
     * @param int $depth Depth of menu item. Used for padding.
     * @param object $args
     */

    function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
        $item_html = '';
        parent::start_el( $item_html, $object, $depth, $args );  

        $output .= ( $depth == 0 ) ? '<li class="divider"></li>' : '';

        $classes = empty( $object->classes ) ? array() : ( array ) $object->classes;  

        if ( in_array('label', $classes) ) {
            $item_html = preg_replace( '/<a[^>]*>( .* )<\/a>/iU', '<label>$1</label>', $item_html );
        }

    if ( in_array('divider', $classes) ) {
      $item_html = preg_replace( '/<a[^>]*>( .* )<\/a>/iU', '', $item_html );
    }

        $output .= $item_html;
    }

  /**
     * @see Walker::display_element()
     * @since 1.0.0
   * 
   * @param object $element Data object
   * @param array $children_elements List of elements to continue traversing.
   * @param int $max_depth Max depth to traverse.
   * @param int $depth Depth of current element.
   * @param array $args
   * @param string $output Passed by reference. Used to append additional content.
   * @return null Null on failure with no changes to parameters.
   */
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
        $element->has_children = !empty( $children_elements[$element->ID] );
        $element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';
        $element->classes[] = ( $element->has_children ) ? 'has-dropdown' : '';

        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

}

