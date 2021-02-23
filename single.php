<?php get_header(); ?>


<?php get_template_part('./template-parts/breadcrumb'); ?>


<section class="section page-section blog-single-contents">
  <div class="inner inner--middle">
    <div class="blog-single-contents__inner">
      <main class="blog-single-contents__item-wrapper">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>

            <div class="blog-single-item blog-single-contents__item-wrapper">
              <?php $category_obj = get_the_category(); ?>
              <div class="blog-single-item__category"><?php echo $category_obj[0]->cat_name; ?></div><!-- /.blog-single-item__category -->
              <h2 class="blog-single-item__title"><?php the_title(); ?></h2><!-- /.blog-single-item__title -->
              <div class="blog-single-item__info-wrapper">
                <div class="blog-single-item__sns-wrapper">
                  <a href="#" class="blog-single-item__like-button  blog-single-item__sns-button button"><i class="fas fa-thumbs-up blog-single-item__sns-icon"></i>Like！ 0</a><!-- /.like-button button -->
                  <a href="#" class="blog-single-item__share-button blog-single-item__sns-button button">Share</a><!-- /.share-button button -->
                  <a href="#" class="blog-single-item__tweet-button blog-single-item__sns-button button"><i class="fab fa-twitter blog-single-item__sns-icon"></i>ツイート</a><!-- /.tweet-button button -->
                </div><!-- /.blog-single-item__sns-wrapper -->
                <time class="blog-single-item__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y-n-j'); ?></time><!-- /.blog-single-item__time -->
              </div><!-- /.blog-single-item__info-wrapper -->
              <div class="blog-single-item__img-wrapper">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('large');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/front/noimg.png" alt="">';
                }
                ?>
              </div><!-- /.blog-single-item__img-wrapper -->
              <div class="blog-single-item__contents-wrapper">
                <?php the_content(); ?>
              </div><!-- /.blog-single-item__contents-wrapper -->
            </div><!-- /.blog-single-item -->
          <?php endwhile; ?>
        <?php endif; ?>

        <?php $args = array(
          'post_type' => 'post',
          'tag' => 'pickup',
          'posts_per_page' => 3,
          'orderby' => 'DESC',
        );
        $pickup_query = new WP_Query($args); ?>
        <div class="blog-pickup">
          <h3 class="blog-pickup__title">おすすめの記事</h3><!-- /.blog-pickup-items__title -->
          <div class="blog-pickup__items">
            <?php if ($pickup_query->have_posts()) : ?>
              <?php while ($pickup_query->have_posts()) : $pickup_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="blog-pickup__items-link">
                  <div class="blog-pickup__item blog-pickup-item">
                    <div class="blog-pickup-item__img-wrapper">
                      <?php
                      if (has_post_thumbnail()) {
                        the_post_thumbnail('large');
                      } else {
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/front/noimg.png" alt="">';
                      }
                      ?>
                      <?php $category_obj = get_the_category(); ?>
                      <div class="blog-pickup-item__category"><?php echo $category_obj[0]->cat_name; ?></div><!-- /.blog-pickup-item__category -->
                    </div><!-- /.blog-pickup-item__img-wrapper -->
                    <div class="blog-pickup-item__info-wrapper">
                      <time class="blog-pickup-item__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y-n-j'); ?></time><!-- /.blog-pickup-item__time -->
                      <h3 class="blog-pickup-item__title"><?php the_title(); ?></h3><!-- /.blog-pickup-item__title -->
                    </div><!-- /.blog-pickup-item__info-wrapper -->
                  </div><!-- /.blog-pickup__item blog-pickup-item -->
                </a><!-- /.blog-pickup__items-link -->
            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
          </div><!-- /.blog-pickup__items -->
        </div><!-- /.blog-pickup -->
      </main><!-- /.blog-single-contents__item-wrapper -->

      <?php get_sidebar();  ?>
    </div><!-- /.blog-single-contents__inner -->
  </div><!-- /.inner inner--middle -->
</section><!-- /.section page-section blog-single-contents -->



<?php get_template_part('./template-parts/inquiry'); ?>


<?php get_template_part('./template-parts/tel'); ?>

<?php get_footer(); ?>