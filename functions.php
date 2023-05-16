<?php
// Set the navigation menu
register_nav_menus(
  array(
    'primary' => __('Primary Navigation', 'test-theme-child'),
  ));

// Create custom post type for Amenities 
function create_amenity_post_type()
{
  register_post_type(
    'amenity',
    array(
      'labels' => array(
        'name' => __('Amenities'),
        'singular_name' => __('Amenity')
      ),
      'public' => true,
      'supports' => array('title', 'editor', 'thumbnail')
    )
  );
}
add_action('init', 'create_amenity_post_type');

// Load CSS for the backend of ACF
function load_css_for_acf_backend() {
	wp_enqueue_style('acf-backend', get_stylesheet_directory_uri() . '/acf-backend.css');
}
add_action( 'admin_enqueue_scripts', 'load_css_for_acf_backend' );

// Set title for current page
function set_page_title( $title ) {
    if ( is_front_page() ) {
        $title = "Hotel RCL";
    }
    else {
        switch ( get_queried_object()->post_name ) {
            case 'about':
                $title = "About | Hotel RCL";
                break;
            case 'contact':
                $title = "Contact Us | Hotel RCL";
                break;
            case 'thank-you':
                $title = "Thank You | Hotel RCL";
                break;
            default:
                $title = get_bloginfo( 'name' ) . ' | ' . get_bloginfo( 'description' );
        }
    }
    return $title;
}
add_filter( 'wp_title', 'set_page_title' );
