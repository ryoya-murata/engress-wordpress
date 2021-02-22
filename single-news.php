<?php get_header(); ?>


<div class="breadcrumb-wrapper breadcrumb-wrapper--mt">
   <div class="inner inner--middle">
      <div class="breadcrumb">

      </div><!-- /.breadcrumb -->
   </div><!-- /.inner inner--middle -->
</div><!-- /.breadcrumb-wrapper -->

<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
?>
      <section class="section page-section news-single">
         <div class="inner inner--middle">
            <h2 class="news-single__title"><?php the_title(); ?></h2><!-- /.news-single__title -->
            <div class="news-single__time-wrapper">
               <time class="news-single__time" datetime="<?php the_time('Y-n-j'); ?>"><?php the_time('Y-n-j'); ?></time><!-- /.news-single__time -->
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



<div class="inquiry">
   <div class="inner inner--narrow">
      <h3 class="inquiry__title">まずは無料で資料請求から</h3><!-- /.inquiry__title -->
      <div class="button-wrapper button-wrapper--center inquiry__button-wrapper">
         <a href="#" class="button button--size_l button--color_yellow button--shape_circle">資料請求</a><!-- /.button button--size_l button--color_yellow button--circle -->
      </div><!-- /.button-wrapper button-wrapper--center inquiry__button-wrapper -->
      <div class="inquiry__link-wrapper">
         <a href="#" class="inquiry__link">お問い合わせ</a><!-- /.inquiry__link -->
      </div><!-- /.inquiry__link-wrapper -->
   </div><!-- /.inner inner--narrow -->
</div><!-- /.inquiry -->

<div class="tel-section">
   <div class="inner inner--narrow">
      <div class="tel__contents">
         <p class="tel__desc is-md">お電話でのお問い合わせはこちら</p><!-- /.tel__desc -->
         <p class="tel__number">0123-456-7890</p><!-- /.tel__number -->
         <p class="tel__sales-time is-md">平日 08:00~20:00</p><!-- /.tel__sales-time -->
      </div><!-- /.tel__contents -->
   </div><!-- /.inner inner--narrow -->
</div><!-- /.tel -->

<?php get_footer(); ?>