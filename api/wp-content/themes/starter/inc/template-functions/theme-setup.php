<?php
/*--------------------------------------------------------------
*  Theme Setup
--------------------------------------------------------------*/
if ( ! function_exists( 'rwp_theme_setup' ) ) :

function rwp_theme_setup(){

  // Register Menus
  if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus( array(
      'main-nav' => __( 'Main Menu', 'ar' ),
      'footer-nav' => __( 'Footer Menu', 'ar' ),
	    'mobile-nav' => __( 'Mobile Menu', 'ar' )
    ) );
  }

  // Add support for auto-generated title tag
  add_theme_support( 'title-tag' );
  // Add support for custom logo
  add_theme_support( 'custom-logo' );
  // Add support for featured images
  add_theme_support( 'post-thumbnails' );

  // Add custom image sizes
  add_image_size( 'model-thumb', 480, 360, true );

  // Set the default attachments 'link to' option to 'None'
  update_option('image_default_link_type', 'none' );

  if ( ! isset( $content_width ) ) {
    $content_width = 1000;
  }

}

endif;
add_action('after_setup_theme', 'rwp_theme_setup');

/*--------------------------------------------------------------
 *  Make WordPress a little more secure and a lot
 *  cleaner by removing a few links in the <head>
 --------------------------------------------------------------*/
 function rwp_head_cleanup() {

  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
     
}
add_action('init', 'rwp_head_cleanup');

function rwp_remove_version() {
  return '';
}
add_filter('the_generator', 'rwp_remove_version');

/*--------------------------------------------------------------
* Custom login
--------------------------------------------------------------*/
include('_custom-login.php');

/*--------------------------------------------------------------
* Get menu items
--------------------------------------------------------------*/
function get_menu_items($menu_slug = 'main-nav') {
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object( $locations[ $menu_slug ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );

  $menu_object = [];

  foreach($menuitems as $menu_item) {
    if( $menu_item->object_id ) {
      $slug = get_post_field( 'post_name', $menu_item->object_id );
      $menu_item->slug = $slug;
    }
    $menu_object[] = $menu_item;
  }

  return $menu_object;
}

/*--------------------------------------------------------------
* Get custom logo URL
--------------------------------------------------------------*/
function rwp_custom_logo_url(){
  if ( function_exists( 'the_custom_logo' ) ) {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    if( $image[0] != '' ){
      $img_url = $image[0];
    }
    else{
      $img_url = WP_REACT_URL.'/logo512.png';
    }
  }
  else{
    $img_url = WP_REACT_URL.'/logo512.png';
  }

  return $img_url;
}
