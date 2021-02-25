<?php

add_theme_support('title-tag');

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
  wp_enqueue_style('scrollhint_css', 'https://unpkg.com/scroll-hint@latest/css/scroll-hint.css', array(), '4.17.19', 'all');
  wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_script('scrollhint_js', 'https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js', array('jquery'), '4.17.19', true);
  wp_enqueue_script('my_js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


function my_menu_init()
{
  register_nav_menus(
    array(
      'header' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer' => 'フッターメニュー',
    )
  );
}
add_action('init', 'my_menu_init');


/**
 * パンくずタイトルの書き換え
 *
 * https://mtekk.us/code/breadcrumb-navxt/breadcrumb-navxt-doc/2/#bcn_breadcrumb_title
 * @param object $title タイトル.
 */
function my_bcn_breadcrumb_title($title, $this_type, $this_id)
{
  if (is_post_type_archive('news')) {
    $title = 'お知らせ';
  } elseif (is_page('price')) {
    $title = '料金体系';
  } elseif (is_page('contact')) {
    $title = 'お問い合わせ';
  } elseif (is_page('complete')) {
    $title = '送信完了';
  } elseif (is_home()) {
    $title = 'ブログ';
  }

  return $title;
};
add_filter('bcn_breadcrumb_title', 'my_bcn_breadcrumb_title', 10, 3);

function title_character_count_limit($count = 40)
{
  global $post;
  if (mb_strlen($post->post_title, 'UTF-8') > $count) {
    $title = mb_substr($post->post_title, 0, $count, 'UTF-8');
    echo $title . '···';
  } else {
    echo $post->post_title;
  }
}



function new_excerpt_mblength($length)
{
  if (is_home()) {
    return 35;
  } else {
    return 20;
  }
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

function new_excerpt_more($more)
{
  return '···';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
function my_widget_init()
{
  register_sidebar(
    array(
      'name' => 'サイドバー', //表示するエリア名
      'id' => 'sidebar', //id
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '<div class="blog-single-aside__title">',
      'after_title' => '</div>',
    )
  );
}
add_action('widgets_init', 'my_widget_init');
