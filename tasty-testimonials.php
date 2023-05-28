<?php
/*
Plugin Name: Tasty Testimonials
Plugin URI: https://example.com
Description: Simple testimonials plugin
Version: 1.0
Author: Redspiders.in
Author URI: https://example.com
License: GPL2
*/

// Enqueue CSS and JS files
function my_custom_plugin_enqueue_scripts() {
  wp_enqueue_style('slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
  wp_enqueue_script('jquery');
  wp_enqueue_script('slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
    wp_enqueue_style( 'my-custom-plugin-style', plugin_dir_url( __FILE__ ) . 'style.css' );
    wp_enqueue_script( 'my-custom-plugin-script', plugin_dir_url( __FILE__ ) . 'main.js', array('jquery'), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'my_custom_plugin_enqueue_scripts' );

// Include index file
include_once( plugin_dir_path( __FILE__ ) . 'index.php' );
