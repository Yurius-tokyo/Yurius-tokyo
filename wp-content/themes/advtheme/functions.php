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

	function add_custom_taxonomy_event() {
    register_taxonomy(
        'news-cat', /* カテゴリーの識別スラッグ */
        'news', /* 対象の投稿タイプのスラッグ */
        array(
            'hierarchical' => true,
            'update_count_callback' => '_update_post_term_count',
            'label' => 'カテゴリー',
            'public' => true,
            'show_ui' => true,
        )
    );
	}
	add_action( 'init', 'add_custom_taxonomy_event', 0 );

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

	function get_meta_description_from($type){
		switch ($type) {
			case 'category':
				$desc = trim( strip_tags( category_description() ) );
				if ( $desc ) {//カテゴリ設定に説明がある場合はそれを返す
					return $desc;
				}
				$desc = '「' . single_cat_title('', false) . '」の記事一覧です。' . get_bloginfo('description');
				return $desc;
				break;

			case 'tag':
				$desc = trim( strip_tags( tag_description() ) );
				if ( $desc ) {
					return $desc;
				}
				$desc = '「' . single_cat_title('', false) . '」の記事一覧です。' . get_bloginfo('description');
				return $desc;
				break;

			case 'post':
				$desc = get_the_excerpt();
				if ( $desc ) {
					return $desc;
				}
				$desc = '「' . single_cat_title('', false) . '」の記事です。' . get_bloginfo('description');
				return $desc;
				break;
			case 'search':
				$desc = '「' . get_search_query() . '」の記事一覧です。' . get_bloginfo('description');
				return $desc;
				break;

			default:
				// code...
				break;
		}

	}
?>
