<?php get_header(); ?>


<?php get_template_part('./template-parts/breadcrumb'); ?>


<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
?>
      <section class="section page-section news-single">
         <div class="inner inner--middle">
            <h2 class="news-single__title"><?php the_title(); ?></h2><!-- /.news-single__title -->
            <div class="news-single__time-wrapper">
               <time class="news-single__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y-m-j'); ?></time><!-- /.news-single__time -->
            </div><!-- /.news-single__time-wrapper -->
            <div class="news-single__contents-wrapper">
            <?php the_content(); ?>
            </div><!-- /.news-single__contents-wrapper -->
         </div><!-- /.inner inner-middle -->
      </section><!-- /.section page-section news-single -->
<?php
   endwhile;
endif;
?>



<?php get_template_part('./template-parts/inquiry'); ?>


<?php get_template_part('./template-parts/tel'); ?>


<?php get_footer(); ?>