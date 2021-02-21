<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Engress</title>

   <?php wp_head(); ?>
</head>

<body>
   <header class="header">
      <div class="inner inner--wide header__inner">
         <div class="header__contents-wrapper">
            <div class="header__contents">
               <div class="header__logo-wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/front/logo2.png" alt="Engress" class="header__logo">
               </div><!-- /.header__logo-wrapper -->
               <?php

               $menu_name = 'header';
               $locations = get_nav_menu_locations();
               $menu = wp_get_nav_menu_object($locations[$menu_name]);
               $menu_items = wp_get_nav_menu_items($menu->term_id);

               ?>

               <nav class="header__nav nav is-lg">
                  <ul class="menu">
                     <?php foreach ($menu_items as $item) : ?>
                        <li class="menu__item">
                           <a href="<?php echo esc_url($item->url); ?>" class="menu__link"><?php echo esc_html($item->title); ?></a><!-- /.menu__link -->
                        </li><!-- /.menu__item -->
                     <?php endforeach; ?>
                  </ul><!-- /.menu -->
               </nav><!-- /.header__nav nav nav--blue -->
            </div><!-- /.header__contents -->
            <div class="hamberger is-md">
               <div class="hamberger__line-wrapper">
                  <span class="hamberger__line"></span>
                  <span class="hamberger__line"></span>
                  <span class="hamberger__line"></span>
               </div>
            </div>
            <?php

            $menu_name = 'header';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);

            ?>
            <nav class="hamberger-menu is-md">
               <h2 class="hamberger-menu__title">メニュー</h2><!-- /.hamberger-menu__title -->
               <ul class="menu">
                  <?php foreach ($menu_items as $item) : ?>
                     <li class="hamberger-menu__item">
                        <a href="<?php echo esc_url($item->url); ?>" class="hamberger-menu__link"><?php echo esc_html($item->title); ?></a><!-- /.-->
                     </li><!-- /.-->
                  <?php endforeach; ?>
               </ul><!-- /.menu -->
               <h2 class="hamberger-menu__title">電話番号</h2><!-- /.hamberger-menu__title -->
               <p class="hamberger__tel tel tel--color_primary"><img src="<?php echo get_template_directory_uri(); ?>/images/front/tel.svg" alt="tel" class="tel__icon">0123-456-7890</p><!-- /.header__tel tel tel--color_primary -->
               <p class="hamberger__sale-time">平日08:00〜20:00</p><!-- /.hamberger__sale-time -->
            </nav>
            <div class="header__info-wrapper is-lg">
               <div class="header__info">
                  <p class="header__sale-time">平日08:00〜20:00</p><!-- /.header__sale-time -->
                  <p class="header__tel tel tel--color_primary"><img src="<?php echo get_template_directory_uri(); ?>/images/front/tel.svg" alt="tel" class="tel__icon">0123-456-7890</p><!-- /.header__tel tel tel--color_primary -->
               </div><!-- /.header__info -->
               <div class="header__buttons-wrapper">
                  <div class="header__button-wrapper">
                     <a href="#" class="button button--color_yellow button--shape_square button--size_s button--request">資料請求</a><!-- /.button button--color_yellow button--shape_square button--size_s -->
                  </div><!-- /.header__button-wrapper -->
                  <div class="header__button-wrapper">
                     <a href="#" class="button button--color_primary button--shape_square button--size_s button--inquiry">お問い合わせ</a><!-- /.button button--color_yellow button--shape_square button--size_s -->
                  </div><!-- /.header__button-wrapper -->
               </div><!-- /.header__buttons-wrapper -->
            </div><!-- /.header__infomation-wrapper -->
         </div><!-- /.header__contents-wrapper -->
      </div><!-- /.inner inner--wide header__inner -->
                     

   </header><!-- /.header -->