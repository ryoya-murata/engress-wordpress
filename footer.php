<footer class="footer">
   <div class="inner inner--middle">
      <div class="footer__contents">
         <?php

         $menu_name = 'footer';
         $locations = get_nav_menu_locations();
         $menu = wp_get_nav_menu_object($locations[$menu_name]);
         $menu_items = wp_get_nav_menu_items($menu->term_id);

         ?>
         <nav class="footer__nav nav">
            <ul class="menu">
               <?php foreach ($menu_items as $item) : ?>
                  <li class="menu__item menu__item--separated">
                     <a href="<?php echo esc_url($item->url); ?>" class="menu__link menu__link--footer menu__link--separated"><?php echo esc_html($item->title); ?></a><!-- /.menu__link menu__link--footer menu__link--separated -->
                  </li><!-- /.menu__item menu__item--separated -->
               <?php endforeach; ?>
            </ul><!-- /.menu -->
         </nav><!-- /.footer__nav nav -->
         <div class="footer__info-wrapper">
            <div class="footer__logo-wrapper">
               <img src="<?php echo get_template_directory_uri(); ?>/images/front/logo2.png" alt="Engress" class="footer__logo">
            </div><!-- /.footer__logo-wrapper -->
            <p class="footer__tel tel tel--color_white tel--right"><img src="<?php echo get_template_directory_uri(); ?>/images/front/tel-white.svg" alt="tel" class="tel__icon">0123-456-7890</p><!-- /.footer__tel tel tel--color_white -->
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



<?php wp_footer(); ?>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

</body>

</html>