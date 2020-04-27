<?php
// =======================================
//	ページのスラッグを出力する
// =======================================
function the_slug() {
	$slug = '';
	//カテゴリーアーカイブページが表示されている場合
	if(is_category()){
		$category = get_the_category();           //カテゴリーの情報を取得
		$slug = $category[0]->category_nicename;  //カテゴリーのスラッグを取得
	}
	//それ以外のページが表示されている場合
	else {
		$id = get_the_ID();                       //ページのIDを取得
		$page = get_post($id);                    //IDに該当するページの情報を取得
		$slug = $page->post_name;                 //ページのスラッグを取得
	}
	//スラッグを出力する
	echo $slug;
}
// =======================================
//	アイキャッチ画像を設定できるようにする
// =======================================
add_theme_support('post-thumbnails');

/* 【管理画面】カスタム投稿タイプの追加 */
add_action( 'init', 'create_post_type' );

function create_post_type() {
  register_post_type( 'product',
    array(
      'labels' => array(
      'name' => __( 'Product' ),
      'singular_name' => __( 'Product' )
    ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes')
    )
  );
}

function my_excerpt_more( $more ) {
	$url = get_permalink();
	$html = '<a href="'. $url . '" class="readmore"> 続きへ</a>';
	return $html;
}
add_filter('excerpt_more', 'my_excerpt_more');

$param = array(
  'global_nav' => 'グローバルナビゲーション',
  'footer_nav' => 'フッターナビゲーション'
);
register_nav_menus($param);
?>
