<?php
/*
Template Name: NEWS(news-page.php)
*/
get_header(); ?>
<main>
<section id="desc_section">
<div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
<h2 class="sectionTitle"><span>お知らせ一覧</span>NEWS</h2>
<div class="business-container">
  <ul class="post_item_container">
    <?php
      // パラメータの設定
      $paged = get_query_var('paged')? get_query_var('paged') : 1;
      $args = array(
        // 'posts_per_page' => 10,
        'post_status' => 'publish',
        'post_type' => 'post',
        'orderby' => 'date',
        'paged' => $paged,
      );
      // WP_Queryインスタンスの生成
      $my_query = new WP_Query($args);
      if($my_query->have_posts()):
        while($my_query->have_posts()):
        $my_query->the_post();
    ?>
    <!-- ↓↓↓↓↓↓↓↓↓↓　ループ内容　↓↓↓↓↓↓↓↓↓↓ -->
    <li class="post_item">
      <a href="<?php the_permalink(); ?>"><span><?php the_date(); ?></span>　<?php the_title(); ?></a>
    </li>
    <?php
      endwhile;
      endif;
      //wp_pagenaviの記述
      if(function_exists('wp_pagenavi')):
        wp_pagenavi(array('query'=>$my_query));   ////wp_pagenavi()の呼び出し(ただし、引数の指定が必要！)
      endif;
      wp_reset_postdata();
    ?>
  </ul>
</div>
</div>
</main>
<?php get_footer(); ?>