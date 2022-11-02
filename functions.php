<?php

// ファイル読み込み
function my_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('script_js', get_template_directory_uri(). '/js/script.js', array() );
    wp_enqueue_style('my_styles', get_template_directory_uri(). '/css/style.css', array() );

}

add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// メニューの登録
register_nav_menus(
    array(
        'place_global' => 'グローバル'
    )
);

// ダッシュボードの「投稿」を非表示にする
function remove_menus() {
    remove_menu_page( 'edit.php' );
}

add_action ( 'admin_menu', 'remove_menus' );

// カスタム投稿の登録
function create_post_type() {
  $exampleSupports = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions'  // リビジョン
  ];

register_post_type( 'works',  // カスタム投稿ID
    array(
      'label' => 'Works',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか的な設定
    )
  );
}
add_action( 'init', 'create_post_type' ); // アクションに上記関数をフックする

add_theme_support('post-thumbnails');