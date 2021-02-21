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

<footer class="footer">
   <div class="inner inner--middle">
      <div class="footer__contents">
         <nav class="footer__nav nav">
            <ul class="menu">
               <li class="menu__item menu__item--separated"><a href="#" class="menu__link menu__link--footer menu__link--separated">ホーム</a><!-- /.menu__link menu__link--footer menu__link--separated -->
               </li><!-- /.menu__item menu__item--separated -->
               <li class="menu__item menu__item--separated"><a href="#" class="menu__link menu__link--footer menu__link--separated">お知らせ</a><!-- /.menu__link menu__link--footer menu__link--separated -->
               </li><!-- /.menu__item menu__item--separated -->
               <li class="menu__item menu__item--separated"><a href="#" class="menu__link menu__link--footer menu__link--separated">ブログ</a><!-- /.menu__link menu__link--footer menu__link--separated -->
               </li><!-- /.menu__item menu__item--separated -->
               <li class="menu__item menu__item--separated"><a href="#" class="menu__link menu__link--footer menu__link--separated">コース・料金</a><!-- /.menu__link menu__link--footer menu__link--separated -->
               </li><!-- /.menu__item menu__item--separated -->
            </ul><!-- /.menu -->
         </nav><!-- /.footer__nav nav -->
         <div class="footer__info-wrapper">
            <div class="footer__logo-wrapper">
               <img src="./images/front/logo2.png" alt="Engress" class="footer__logo">
            </div><!-- /.footer__logo-wrapper -->
            <p class="footer__tel tel tel--color_white tel--right"><img src="./images/front/tel-white.svg" alt="tel" class="tel__icon">0123-456-7890</p><!-- /.footer__tel tel tel--color_white -->
            <p class="footer__sale-time">平日08:00〜20:00</p><!-- /.footer__sale-time -->
         </div><!-- /.footer__info-wrapper -->
      </div><!-- /.footer__contents -->
   </div><!-- /.inner -->
</footer><!-- /.footer -->

<div class="copyright-wrapper">
   <div class="inner inner--middle">
      <p class="copyright">© 2020 Engress.</p><!-- /.copyright -->
   </div><!-- /.inner inner--middle -->
</div><!-- /.copyright-wrapper -->

<div class="fixed-buttons-container is-md">
   <div class="inner">
      <div class="fixed-buttons-container__contents">
         <div class="fixed-button-wrapper fixed-buttons-container__wrapper">
            <a href="#" class="button button--color_yellow button--shape_circle button--size_s button--footer-request">資料請求</a><!-- /.button button--color_yellow button--shape_square button--size_s -->
         </div><!-- /.fixed-button-wrapper fixed-buttons-container__wrapper -->
         <div class="fixed-button-wrapper fixed-buttons-container__wrapper">
            <a href="#" class="button button--color_primary button--shape_circle button--size_s button--footer-inquiry">お問い合わせ</a><!-- /.button button--color_yellow button--shape_square button--size_s -->
         </div><!-- /.fixed-button-wrapper fixed-buttons-container__wrapper -->
      </div><!-- /.fixed-buttons-container__contents -->
   </div><!-- /.inner -->
</div><!-- /.fixed-buttons-container -->


<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
<script src="./js/script.js"></script>


</body>

</html>