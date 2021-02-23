<?php get_header(); ?>
    

<?php get_template_part('./template-parts/breadcrumb'); ?>


    <section class="section page-section blog-single-contents">
      <div class="inner inner--middle">
        <div class="blog-single-contents__inner">
            <main class="blog-single-contents__item-wrapper">
              <div class="blog-single-item blog-single-contents__item-wrapper">
                <div class="blog-single-item__category">カテゴリ1</div><!-- /.blog-single-item__category -->
                <h2 class="blog-single-item__title">ブログタイトルテキストテキストテキストテキスト</h2><!-- /.blog-single-item__title -->
                <div class="blog-single-item__info-wrapper">
                  <div class="blog-single-item__sns-wrapper">
                    <a href="#" class="blog-single-item__like-button  blog-single-item__sns-button button"><i class="fas fa-thumbs-up blog-single-item__sns-icon"></i>Like！ 0</a><!-- /.like-button button -->
                    <a href="#" class="blog-single-item__share-button blog-single-item__sns-button button">Share</a><!-- /.share-button button -->
                    <a href="#" class="blog-single-item__tweet-button blog-single-item__sns-button button"><i class="fab fa-twitter blog-single-item__sns-icon"></i>ツイート</a><!-- /.tweet-button button -->
                  </div><!-- /.blog-single-item__sns-wrapper -->
                  <time class="blog-single-item__time" datetime="2020-01-01">2020-01-01</time><!-- /.blog-single-item__time -->
                </div><!-- /.blog-single-item__info-wrapper -->
                <div class="blog-single-item__img-wrapper">
                  <img src="./images/front/sample01.png" alt="" class="blog-single-item__img">
                </div><!-- /.blog-single-item__img-wrapper -->
                <div class="blog-single-item__contents-wrapper">

                </div><!-- /.blog-single-item__contents-wrapper -->
              </div><!-- /.blog-single-item -->
              <div class="blog-pickup">
                <h3 class="blog-pickup__title">おすすめの記事</h3><!-- /.blog-pickup-items__title -->
                <div class="blog-pickup__items">
                  <a href="#" class="blog-pickup__items-link">
                    <div class="blog-pickup__item blog-pickup-item">
                      <div class="blog-pickup-item__img-wrapper">
                        <img src="./images/front/sample02.png" alt="" class="blog-pickup-item__img">
                        <div class="blog-pickup-item__category">カテゴリ1</div><!-- /.blog-pickup-item__category -->
                      </div><!-- /.blog-pickup-item__img-wrapper -->
                      <div class="blog-pickup-item__info-wrapper">
                        <time class="blog-pickup-item__time" datetime="0000–00-00">0000–00-00</time><!-- /.blog-pickup-item__time -->
                        <h3 class="blog-pickup-item__title">ブログタイトルテキストテキストテキストテキスト</h3><!-- /.blog-pickup-item__title -->
                      </div><!-- /.blog-pickup-item__info-wrapper -->
                    </div><!-- /.blog-pickup__item blog-pickup-item -->
                  </a><!-- /.blog-pickup__items-link -->
                  <a href="#" class="blog-pickup__items-link">
                    <div class="blog-pickup__item blog-pickup-item">
                      <div class="blog-pickup-item__img-wrapper">
                        <img src="./images/front/sample02.png" alt="" class="blog-pickup-item__img">
                        <div class="blog-pickup-item__category">カテゴリ1</div><!-- /.blog-pickup-item__category -->
                      </div><!-- /.blog-pickup-item__img-wrapper -->
                      <div class="blog-pickup-item__info-wrapper">
                        <time class="blog-pickup-item__time" datetime="0000–00-00">0000–00-00</time><!-- /.blog-pickup-item__time -->
                        <h3 class="blog-pickup-item__title">ブログタイトルテキストテキストテキストテキストテキストテキストテキスト</h3><!-- /.blog-pickup-item__title -->
                      </div><!-- /.blog-pickup-item__info-wrapper -->
                    </div><!-- /.blog-pickup__item blog-pickup-item -->
                  </a><!-- /.blog-pickup__items-link -->
                  <a href="#" class="blog-pickup__items-link">
                    <div class="blog-pickup__item blog-pickup-item">
                      <div class="blog-pickup-item__img-wrapper">
                        <img src="./images/front/sample02.png" alt="" class="blog-pickup-item__img">
                        <div class="blog-pickup-item__category">カテゴリ1</div><!-- /.blog-pickup-item__category -->
                      </div><!-- /.blog-pickup-item__img-wrapper -->
                      <div class="blog-pickup-item__info-wrapper">
                        <time class="blog-pickup-item__time" datetime="0000–00-00">0000–00-00</time><!-- /.blog-pickup-item__time -->
                        <h3 class="blog-pickup-item__title">ブログタイトルテキストテキストテキストテキスト</h3><!-- /.blog-pickup-item__title -->
                      </div><!-- /.blog-pickup-item__info-wrapper -->
                    </div><!-- /.blog-pickup__item blog-pickup-item -->
                  </a><!-- /.blog-pickup__items-link -->
                </div><!-- /.blog-pickup__items -->
              </div><!-- /.blog-pickup -->
            </main><!-- /.blog-single-contents__item-wrapper -->

            <?php get_sidebar();  ?>
        </div><!-- /.blog-single-contents__inner -->
      </div><!-- /.inner inner--middle -->
    </section><!-- /.section page-section blog-single-contents -->


    
    <?php get_template_directory_uri('./template-parts/inquiry'); ?>


    <?php get_template_directory_uri('./template-parts/tel.php'); ?>

<?php get_footer(); ?>