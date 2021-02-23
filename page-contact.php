<?php get_header(); ?>

    <div class="page-firstview">
        <div class="page-firstview__img-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/images/page/cta2.png" alt="お問い合わせ・資料請求" class="page-firstview__img">
        </div><!-- /.page-firstview__img-wrapper -->
        <h2 class="page-firstview__title">お問い合わせ・資料請求</h2><!-- /.page-firstview__title -->
    </div><!-- /.page-firstview -->

    <?php get_template_part('./template-parts/breadcrumb'); ?>



    <section class="section page-section contact">
      <div class="inner inner--middle">
        <div class="contact__form">
        <?php the_content(); ?>
        </div><!-- /.contact__form -->
      </div><!-- /.inner inner--middle -->
    </section><!-- /.section page-section contact -->


    
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