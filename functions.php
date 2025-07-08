<?php
//アイキャッチ設定
add_theme_support('post-thumbnails');

//カスタム投稿タイプを追加
add_action( 'init', 'create_post_type' );

//記事の自動整形を無効化
//remove_filter('the_content', 'wpautop');

//コンタクトフォーム7のPタグを無効化
add_filter('wpcf7_autop_or_not', 'disable_cf7_autop');
function disable_cf7_autop() {
  return false;
}

function create_post_type() {

  register_post_type(
    'column',
    array(
      'label' => 'コラム',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_taxonomy(
    'column-cat',
    'column',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

}
?>