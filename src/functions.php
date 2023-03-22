<?php

/**
 * テーマのセットアップ
 **/
function add_setup_theme()
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
add_action('after_setup_theme', 'add_setup_theme');

/**
 * ナビゲーションの設定
 */
register_nav_menus(
  array(
    'header' => 'ヘッダー',
    'footer' => 'フッターナビ',
  )
);

/**
 * CSSとJavaScriptの読み込み
 */
function add_script()
{
  wp_enqueue_style('scroll-hint', 'https://unpkg.com/scroll-hint@latest/css/scroll-hint.css', array(), '', 'all');
  wp_enqueue_style('my', get_template_directory_uri() . '/assets/css/style.min.css', array('scroll-hint'), filemtime(get_theme_file_path('/assets/css/style.min.css')), 'all');

  wp_enqueue_script('scroll-hint', 'https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js', array('jquery'), '', true);
  wp_enqueue_script('my', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery', 'scroll-hint'), filemtime(get_theme_file_path('/assets/js/script.min.js')), true);
}
add_action('wp_enqueue_scripts', 'add_script');


/**
 * 文字数をカット
 */
function cut_text($text, $length)
{
  if (mb_strlen($text) <= $length) {
    return $text;
  } else {
    return mb_substr($text, 0, $length) . '...';
  }
}

function cms_excerpt_more()
{
  return '…';
}
add_filter('excerpt_more', 'cms_excerpt_more');

function cms_excerpt_length()
{
  return 60;
}
add_filter('excerpt_length', 'cms_excerpt_length');

/**
 * 新規ページを検索して取得
 */
function get_new_pages($post_type = 'post', $number = -1)
{
  // 検索値をセット
  $args = array(
    'post_type' => $post_type,
    'posts_per_page' => $number,
    'post_status' => 'publish',
    'orderby' => 'post_date',
    'order' => 'DESC',
  );
  $child_pages = new WP_Query($args);
  return $child_pages;
}

/**
 * 関連ページを検索して取得
 */
function get_related_pages($post_id, $post_type = 'post', $number = -1)
{
  $cat = get_the_category($post_id);
  if ($cat) {
    $cat_id = $cat[0]->cat_ID;
  } else {
    return new WP_Query();
  }

  // 検索値をセット
  $args = array(
    'post_type' => $post_type,
    'posts_per_page' => $number,
    'post_status' => 'publish',
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post__not_in' => array($post_id),
    'cat' => $cat_id,
  );
  $child_pages = new WP_Query($args);
  return $child_pages;
}


/**
 * タグを検索して取得
 */
function get_tag_pages($post_id, $tag_id, $post_type = 'post', $number = -1)
{
  // 検索値をセット
  $args = array(
    'post_type' => $post_type,
    'posts_per_page' => $number,
    'post_status' => 'publish',
    'orderby' => 'post_date',
    'order' => 'rand',
    'post__not_in' => array($post_id),
    'tag' => $tag_id,
  );
  $child_pages = new WP_Query($args);
  return $child_pages;
}


function my_archive_title($title)
{
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  }
  $title = $title . '一覧';
  return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');
