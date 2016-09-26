<?php 

  function newtheme_enqueue() {
      wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/twentynew.css', array(), '1.0.0', 'all');
      wp_enqueue_script('customscript', get_template_directory_uri() . '/js/twentynew.js', array(), '1.0.0', true);
  }

  add_action('wp_enqueue_scripts', 'newtheme_enqueue');
  
  function newtheme_setup(){
      add_theme_support('menus');
      register_nav_menu('primary', 'Primary Header Navigation');
      register_nav_menu('secondary', 'Footer Navigation');
  }
  
  add_action('init', 'newtheme_setup');
?>