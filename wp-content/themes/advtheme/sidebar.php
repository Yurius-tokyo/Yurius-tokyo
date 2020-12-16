<!-- sidebar -->
<aside id="sidebar" class="uk-width-1-3@m uk-width-1-1@s">
  <?php dynamic_sidebar( 'side-widget' ); ?>
  <?php
  $information= get_posts( array(
    ‘posts_per_page’ => 5
  ));
  if( $information):
  ?>
  <h5 class="sidebar-title">新着記事</h5>
  <ul class="new_list">
    <?php
    foreach( $information as $post ):
    setup_postdata( $post );
    ?>
    <li class="uk-margin-bottom uk-grid-collapse" uk-grid>
      <div class="uk-margin-right uk-width-1-3@m"><a href="<?php the_permalink(); ?>"><img src="<?php has_post_thumbnail()? the_post_thumbnail_url() : print('/wp-content/themes/advtheme/img/photo3.jpg'); ?>" width="150" height="100" alt="" class=""></a>	</div>
      <div class="uk-width-expand@m">
        <div class="category"><?php the_category(', '); ?> | <time class="" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></div>
        <h3><a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h3>
      </div>
    </li>
    <hr />

  <?php
  endforeach;
  wp_reset_postdata();
  ?>
  </ul>
  <?php else: ?>
  <p>表示できる情報はありません。</p>
  <?php endif; ?>
</aside>
