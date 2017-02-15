<?php
//register nav walker class
require_once('wp_bootstrap_navwalker.php');

//theme setup
function wpb_theme_setup(){

  add_theme_support('post-thumbnails');
  //nav menu
  register_nav_menus(array(
    'primary'=>__('Primary Menu')
  ));
}

add_action('after_setup_theme','wpb_theme_setup');

//excerpt length control
function set_excerpt_length(){
  return 40;
}

add_filter('excerpt_length', 'set_excerpt_length');
