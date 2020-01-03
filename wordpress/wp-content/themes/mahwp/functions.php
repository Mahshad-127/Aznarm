<?php 
  register_sidebar(array(
    'name' => 'ابزارک عمومی',
    'id'   => 'websoft-widget',
    'description'   => 'شما می توانید در این قسمت ابزارک قرار دهید .',
    'before_widget' => '<aside class="widget2">',
    'after_widget'  => '</aside>',
    'before_title'  => '<div class="title_side"><h4>',
    'after_title'   => '</h4></div>'
  ));

    function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'منو اصلی' ),
      
     )
   );
 }
add_action( 'after_setup_theme', 'register_my_menus' );

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );}










