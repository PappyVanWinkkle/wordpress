<?php 
/*
   =========================
   include the scripts 
   =========================

*/

  function newtheme_enqueue() {
      wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/twentynew.css', array(), '1.0.0', 'all');
      wp_enqueue_script('customscript', get_template_directory_uri() . '/js/twentynew.js', array(), '1.0.0', true);
      wp_enqueue_script('jquery');
  }

  add_action('wp_enqueue_scripts', 'newtheme_enqueue');
  
  function newtheme_setup(){
      add_theme_support('menus');
      register_nav_menu('primary', 'Primary Header Navigation');
      register_nav_menu('secondary', 'Footer Navigation');
  }
  
   add_action('init', 'newtheme_setup');
  /*
  making the user change the background image of the page without touching the css */
   add_theme_support('custom-background');
   add_theme_support('custom-header');
   add_theme_support('post-thumbnail');
   
   add_theme_support('post-formats', array('aside', 'image', 'video'));
   
   
?>