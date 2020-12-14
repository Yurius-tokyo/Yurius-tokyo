<?php
	//Enable thumbnails
	add_theme_support('post-thumbnails');
	add_theme_support( 'title-tag' );
	add_image_size( 'yv-size', 500, 320,true);

	function custom_excerpt_length( $length ) {
     return 40;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	function create_post_type() {
	  $exampleSupports = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
	    'title',  // 記事タイトル
	    'editor',  // 記事本文
	    'thumbnail',  // アイキャッチ画像
	    'revisions'  // リビジョン
	  ];
	  register_post_type( 'news',  // カスタム投稿ID
	    array(
	      'label' => 'News',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
	      'public' => true,  // 投稿タイプをパブリックにするか否か
	      'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
	      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
	      'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか的な設定
	    )
	  );
	}
	add_action( 'init', 'create_post_type' ); // アクションに上記関数をフックします

	function widgetsidebar_init() {
		register_sidebar(array(
			'name'=>'サイドバー',
			'id' => 'side-widget',
			'before_widget'=>'
			<div id="%1$s" class="%2$s sidebar-wrapper">',
			'after_widget'=>'</div>',
			'before_title' => '<h5 class="sidebar-title">',
			'after_title' => '</h5>'
			));
		}
	add_action( 'widgets_init', 'widgetsidebar_init' );
?>
