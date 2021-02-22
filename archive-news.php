<?php get_header(); ?>

<div class="page-firstview">
  <div class="page-firstview__img-wrapper">
    <img src="./images/page/plan2.png" alt="コース・料金" class="page-firstview__img">
  </div><!-- /.page-firstview__img-wrapper -->
  <h2 class="page-firstview__title">お知らせ</h2><!-- /.page-firstview__title -->
</div><!-- /.page-firstview -->

<div class="breadcrumb-wrapper">
  <div class="inner inner--middle">
    <div class="breadcrumb">

    </div><!-- /.breadcrumb -->
  </div><!-- /.inner inner--middle -->
</div><!-- /.breadcrumb-wrapper -->

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
                  <h3 class="news-archive-item__title"><?php the_title(); ?></h3><!-- /.news-archive-item__title -->
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