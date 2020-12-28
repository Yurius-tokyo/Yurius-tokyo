<?php
	get_header();
?>
  <?php  get_template_part('subnav'); ?>

  <section id="tips_list" class="uk-section uk-section-default">
    <div class="uk-container">
      <div class="" uk-grid>
        <div class="uk-width-expand@m uk-width-1-1@s">
        <?php if ( have_posts() ) : ?>

          <h1><?php printf( __( '検索結果: %s', 'altitude' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
          <?php while ( have_posts() ) : the_post();
            $cat = get_the_category();
            $cat_name = $cat[0]->cat_name;
           ?>
           <div class="uk-card uk-grid-collapse uk-margin uk-box-shadow-medium post_thumb" uk-grid>
             <div class="uk-width-2-5@m uk-width-1-1@s uk-card-media-left uk-cover-container post_media">
                 <a href="<?php the_permalink(); ?>"><img src="<?php has_post_thumbnail()? the_post_thumbnail_url() : print('/wp-content/themes/advtheme/img/photo1.png'); ?>" alt="" uk-cover></a>
                 <canvas width="395" height="275"></canvas>
             </div>
             <div class="uk-width-3-5@m uk-width-1-1@s">
               <a href="<?php the_permalink(); ?>">
                 <div class="uk-card-body">

                       <span class="uk-label label_cat uk-margin-right"><?php echo($cat_name); ?></span><time class="uk-label" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                       <h3 class="uk-card-title"><?php the_title(); ?></h3>
                       <?php the_excerpt(); ?>

                 </div>
               </a>
             </div>
           </div>
          <?php endwhile; ?>

          <?php else : ?>
          <p>
            該当結果がありません
          </p>
        <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>

  </section>
	<?php
	get_footer(); ?>
