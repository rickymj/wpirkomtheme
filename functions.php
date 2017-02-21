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
  return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');

//widgets location
function wpb_init_widgets($id){
  register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'before_widget' => '<div id="%1$s" class="panel panel-primary">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="panel-heading">',
    'after_title'   => '</div>'
  ));
}

add_action('widgets_init', 'wpb_init_widgets');

function bs_categories_list_group_filter ($variable) {
   $variable = str_replace('<li class="cat-item cat-item-', '<li class="list-group-item cat-item cat-item-', $variable);
   $variable = str_replace('(', '<span class="badge cat-item-count"> ', $variable);
   $variable = str_replace(')', ' </span>', $variable);
   return $variable;
}
add_filter('wp_list_categories','bs_categories_list_group_filter');
