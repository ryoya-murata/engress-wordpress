<?php get_header(); ?>

    

<?php get_template_part('./template-parts/breadcrumb'); ?>


    <div class="complete-contents">
      <div class="inner inner--middle">
        <?php the_content(); ?>
        <p class="complete-contents__message">お問い合わせいただきありがとうございます<br class="isnot-ss">内容を確認した後、担当者よりご連絡いたします</p><!-- /.complete-contents__message -->
      <div class="button-wrapper button-wrapper--center complete-contents__button-wrapper">
        <a href="<?php echo esc_url(home_url()); ?>" class="button complete-contents__button">ホームへ戻る</a><!-- /.button complete-contents__button -->
      </div><!-- /.button-wrapper button-wrapper--center complete-contents__button-wrapper -->
      </div><!-- /.inner inner--middle -->
    </div><!-- /.complete-contents -->

    <?php get_footer(); ?>