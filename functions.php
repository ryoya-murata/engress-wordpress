<?php

function my_setup()
{
  add_theme_support('post-thumbnails'); 
  add_theme_support('automatic-feed-links'); 
  add_theme_support('title-tag'); 
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');

function my_script_init()
{
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1', 'all');
wp_enqueue_style('destyle', get_template_directory_uri() . '/css/destyle.css', array(), '2.0.2', 'all');
wp_enqueue_style('scrollhint','https://unpkg.com/scroll-hint@latest/css/scroll-hint.css', array(), '4.17.19', 'all');
wp_enqueue_style('mycss', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
wp_enqueue_script('myjs', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
wp_enqueue_script('scrollhint', 'https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js', array( 'jquery' ), '4.17.19', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');
