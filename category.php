<?php get_header(); ?>



<div class="page-firstview">
   <div class="page-firstview__img-wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/images/page/blog2.png" alt="ブログ" class="page-firstview__img">
   </div><!-- /.page-firstview__img-wrapper -->
   <h2 class="page-firstview__title">ブログ</h2><!-- /.page-firstview__title -->
</div><!-- /.page-firstview -->

<?php get_template_part('./template-parts/breadcrumb'); ?>

<section class="section page-section blog-archive">
   <div class="inner inner--middle">
      <h2 class="page-section__title">カテゴリー一覧</h2><!-- /.page-section__title -->
      <div class="blog-archive__items-wrapper">
         <?php
         if (have_posts()) :
            while (have_posts()) : the_post();
         ?>
               <a href="<?php the_permalink(); ?>" class="blog-archive__item-link">
                  <div class="blog-archive__item-contents blog-archive-item">
                     <div class="blog-archive-item__img-wrapper">
                        <?php
                        if (has_post_thumbnail()) {
                           the_post_thumbnail('large');
                        } else {
                           echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/front/noimg.png" alt="">';
                        }
                        ?>
                        <?php $category_obj = get_the_category(); ?>
                        <div class="blog-archive-item__category"><?php echo $category_obj[0]->cat_name; ?></div><!-- /.blog-archive-item__category -->
                     </div><!-- /.blog-archive-item__img-wrapper -->
                     <div class="blog-archive-item__info-wrapper">
                        <time class="blog-archive-item__time" datatime="<?php the_time('c'); ?>"><?php the_time('Y-n-j') ?></time><!-- /.blog-archive-item__time -->
                        <h3 class="blog-archive-item__title"><?php title_character_count_limit(30); ?></h3><!-- /.blog-archive-item__title -->
                        <p class="blog-archive-item__excerpt"><?php the_excerpt(); ?></p><!-- /.blog-archive-item__excerpt -->
                     </div><!-- /.blog-archive-item__info-wrapper -->
                  </div><!-- /.blog-archive__item-contents -->
               </a><!-- /.blog-archive__item-link -->
            <?php endwhile; ?>
         <?php endif; ?>
      </div><!-- /.blog-archive__items-wrapper -->


     <?php get_template_part('./template-parts/pagenation'); ?>
</section><!-- /.page-section blog-archive -->




<?php get_template_part('./template-parts/inquiry'); ?>

<?php get_template_part('./template-parts/tel'); ?>


<?php get_footer(); ?>