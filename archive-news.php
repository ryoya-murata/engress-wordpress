<?php get_header(); ?>

<div class="page-firstview">
  <div class="page-firstview__img-wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/images/page/news.png" alt="お知らせ" class="page-firstview__img">
  </div><!-- /.page-firstview__img-wrapper -->
  <h2 class="page-firstview__title">お知らせ</h2><!-- /.page-firstview__title -->
</div><!-- /.page-firstview -->

<?php get_template_part('./template-parts/breadcrumb'); ?>


<section class="section page-section news-archive">
  <div class="inner inner--middle">
    <h2 class="page-section__title">お知らせ一覧</h2><!-- /.page-section__title -->
    <div class="news-archive__contents">
      <div class="news-archive__items news-archive-items">
        <?php if (have_posts()) :
          while (have_posts()) :
            the_post();
        ?>
            <a href="<?php the_permalink(); ?>" class="news-archive-item news-archive-items__item">
              <div class="news-archive-item__contents">
                <div class="news-archive-item__time-wrapper">
                  <time class="news-archive-item__time" datetime="<?php the_time('Y-n-j'); ?>"><?php the_time('Y-n-j'); ?></time><!-- /.news-archive-item__time -->
                </div><!-- /.news-archive-item__time-wrapper -->
                <div class="news-archive-item__title-wrapper">
                  <h3 class="news-archive-item__title"><?php title_character_count_limit(45); ?></h3><!-- /.news-archive-item__title -->
                </div><!-- /.news-archive-item__title-wrapper -->
              </div><!-- /.news-archive-item_contents -->
            </a><!-- /.news-archive-item news-archive-items__item -->
        <?php
          endwhile;
        endif;
        ?>
      </div><!-- /.news-archive__items news-archive-items -->

    </div><!-- /.news-archive__contents -->
    <?php get_template_part('./template-parts/pagenation'); ?>
  </div><!-- /.inner inner--middle -->
</section><!-- /.section page-section news-archive -->


<?php get_template_part('./template-parts/inquiry'); ?>

<?php get_template_part('./template-parts/tel'); ?>


<?php get_footer(); ?>