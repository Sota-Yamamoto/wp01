<?php get_header(); ?>
<!-- コンテンツエリア -->
<section id="contents">
  <!--パンくずリスト-->
  <div class="breadcrumbs">
    <?php if (function_exists('bcn_display')) {bcn_display(); } ?>
  </div>
  <!--記事のループ-->
  <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <!--記事-->
    <article>
      <!--ページのタイトル-->
      <h2><?php the_title(); ?></h2>
      <div class="inner">
        <!--メタ情報-->
        <div class="entry-meta">
          <span class="date"><?php the_time("Y/m/d"); ?></span>
          <span class="cate"><?php the_category(', '); ?></span>
        </div>
        <!--ページの本文-->
        <div class="entry-content">
          <?php the_post_thumbnail(); ?>
          <?php the_excerpt(); ?>
        </div>
        <?php edit_post_link(); ?>
      </div>
    </article>
    <!--//記事-->
  <?php endwhile; endif; ?>
  <!--//記事のループ-->
  <!-- ページ送り->
  <?php if (function_exists('wp_pagenavi')) {wp_pagenavi(); } ?>

</section>
<?php get_footer(); ?>
