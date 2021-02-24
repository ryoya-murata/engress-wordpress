<aside class="blog-single-contents__aside-wrapper blog-single-aside">
  <div class="blog-related blog-single-aside__related">
    <h2 class="blog-single-aside__title">関連記事</h2><!-- /.blog-single-aside__title -->
    <div class="blog-related-items">
      <?php
      $categories = get_the_category($post->ID);
      $category_ID = [];
      foreach ($categories as $category) {
        array_push($category_ID, $category->cat_ID);
      }
      $args = [
        'post__not_in' => array($post->ID),
        'posts_per_page' => 3,
        'category__in' => $category_ID,
        'orderby' => 'rand',
      ];
      $related_query = new WP_Query($args);
      ?>
      <?php if ($related_query->have_posts()) : ?>
        <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="blog-related-items__link">
            <div class="blog-related-item blog-related-items__item">
              <div class="blog-related-item__img-wrapper">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('large');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/front/noimg.png" alt="">';
                }
                ?>
              </div><!-- /.blog-related-item__img-wrapper -->
              <div class="blog-related-item__title-wrapper">
                <h3 class="blog-related-item__title"><?php title_character_count_limit(30); ?></h3><!-- /.blog-related-item__title -->
              </div><!-- /.blog-related-item__title-wrapper -->
            </div><!-- /.blog-related-item blog-related-items__item -->
          </a><!-- /.blog-related-items__link -->
      <?php endwhile;
      endif;
      wp_reset_postdata(); ?>
    </div><!-- /.blog-related-items -->
  </div><!-- /.blog-related -->

  <div class="blog-category">
    <?php if (is_active_sidebar('sidebar')) : ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div><!-- /.blog-category -->
</aside><!-- /.blog-single-contents__aside-wrapper blog-single-aside -->