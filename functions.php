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
