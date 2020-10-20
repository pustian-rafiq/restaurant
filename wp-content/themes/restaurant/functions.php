<?php

function restaurant_setup(){
    add_theme_support('post-thumbnails');

    add_image_size('boxes',437,291,true);
    add_image_size('specialties',768,515,true);
}

add_action('after_setup_theme','restaurant_setup');


function restaurant_styles(){

    wp_register_style('normalize', get_template_directory_uri(). '/css/normalize.css', array(),'6.0.0');
    wp_register_style('fontawesome', get_template_directory_uri(). '/css/font-awesome.css', array(),'4.7.0');
    wp_register_style('style', get_template_directory_uri(). '/style.css', array('normalize'),'1.0');

    wp_enqueue_style('normalize');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('style');




    wp_register_script('script', get_template_directory_uri(). '/js/scripts.js',array('jquery'),'1.0.0',true);
    /** Added Jquery Style**/
    wp_enqueue_script('jquery');
    wp_enqueue_script('script');
}

add_action('wp_enqueue_scripts', 'restaurant_styles');

//add menu
function restaurant_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'restuarant'),
        'social-menu' => __('Social Menu', 'restuarant')

    ));
}

add_action('init','restaurant_menus');

function restaurant_specialties(){
     $labels = array(
         'name'              => _x('pizza','lapizzeria'),
         'singular_name'     => _x('specialties','post type singular name','restaurant'),
         'menu_name'         => _x('pizzas','admin menu','lapizzeria'),
         'name_admin_bar'    => _x('pizzas','add new on admin bar','restaurant'),
         'add_new'           => _x('Add New','book','restaurant'),
         'add_new_item'      => __('Add New Pizza','restaurant'),
         'new_item'          => __('New Pizzas','restaurant'),
         'edit_item'         => __('Edit Pizzas','restaurant'),
         'view_item'         => __('View Pizzas','restaurant'),
         'all_items'         => __('All Pizzas','restaurant'),
         'search_items'      => __('Search Pizzas','restaurant'),
         'parent_item_colon' => __('Parent Pizzas','retaurant'),
         'not_fount'         => __('No Pizzas found','restaurant'),
         'not_found_in_trush'=> __('No pizzas found in Trush','restaurant')
  
     );

     $args = array(
         'labels'            => $labels,
         'description'       => __('Description.','restaurant'),
         'public'            => true,
         'public_queryable'  => true,
         'show_ui'           => true,
         'show_in_menu'      => true,
         'query_var'         => true,
         'rewrite'           => array('slug' => 'specialties'),
         'capability_type'   => 'post',
         'has_archive'       => true,
         'hierarchical'      => false,
         'menu_position'     => 6,
         'supports'          => array('title','editor','thumbnail'),
         'taxonomies'        => array('category'),


     );
     register_post_type('specialties',$args);

}
add_action('init','restaurant_specialties');

?>

