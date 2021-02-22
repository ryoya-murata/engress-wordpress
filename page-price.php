<?php get_header(); ?>

<div class="page-firstview">
  <div class="page-firstview__img-wrapper">
    <img src="./images/page/plan2.png" alt="コース・料金" class="page-firstview__img">
  </div><!-- /.page-firstview__img-wrapper -->
  <h2 class="page-firstview__title">コース・料金</h2><!-- /.page-firstview__title -->
</div><!-- /.page-firstview -->

<div class="breadcrumb-wrapper">
  <div class="inner inner--middle">
    <div class="breadcrumb">

    </div><!-- /.breadcrumb -->
  </div><!-- /.inner inner--middle -->
</div><!-- /.breadcrumb-wrapper -->

<section class="section page-section price-system">
  <div class="inner inner--middle">
    <h2 class="page-section__title">料金体系</h2><!-- /.section__title -->
    <div class="price-system__contents">
      <div class="price-system__contents-item">入会金 39,800円</div><!-- /.price-system__contents-item -->
      <div class="price-system__contents-icon-wrapper">
        <span class="price-system__contents-icon"></span><!-- /.price-system__contents-icon -->
      </div><!-- /.price-system__contents-icon-wrapper -->
      <div class="price-system__contents-item">月額費用</div><!-- /.price-system__contents-item -->
    </div><!-- /.price-system__contents -->
    <p class="price-system__desc">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p><!-- /.price-system__desc -->
  </div><!-- /.inner inner--middle -->
</section><!-- /.section price-system -->

<section class="section page-section price-table">
  <h2 class="page-section__title">料金表</h2><!-- /.section__title -->
  <div class="inner inner--middle price-table__inner">
    <div class="price-table-contents js-scrollable">
      <div class="price-table-item price-table-contents__item">
        <div class="price-table-item__title-wrapper">
          <h3 class="price-table-item__title">基礎プラン</h3><!-- /.price-table-item__title -->
        </div><!-- /.price-table-item__title-wrapper -->
        <div class="price-table-item__body">
          <?php if (get_field('price-basic')) : ?>
            <p class="price-table-item__price">
              <?php the_field('price-basic'); ?>円~</p><!-- /.price-table-item__price -->
            <p class="price-table-item__price-desc">*月額（税抜価格）</p><!-- /.price-table-item__price-desc -->
          <?php endif; ?>
          <div class="price-table-item__contents-wrapper">
            <p class="price-table-item__contents-item">カリキュラム作成</p><!-- /.price-table-item__contents-item -->
            <p class="price-table-item__contents-item">TOEFL学習サポート</p><!-- /.price-table-item__contents-item -->
            <p class="price-table-item__contents-item">週一回のビデオMTG</p><!-- /.price-table-item__contents-item -->
          </div><!-- /.price-table-item__contents-wrapper -->
        </div><!-- /.price-table-item__body -->
      </div><!-- /.price-table-item price-table-contents__item -->
      <div class="price-table-item price-table-contents__item">
        <div class="price-table-item__title-wrapper">
          <h3 class="price-table-item__title">演習プラン</h3><!-- /.price-table-item__title -->
        </div><!-- /.price-table-item__title-wrapper -->
        <div class="price-table-item__body">
          <?php if (get_field('price-exercises')) : ?>
            <p class="price-table-item__price">
              <?php the_field('price-exercises'); ?>円~</p><!-- /.price-table-item__price -->
            <p class="price-table-item__price-desc">*月額（税抜価格）</p><!-- /.price-table-item__price-desc -->
          <?php endif; ?>
          <div class="price-table-item__contents-wrapper">
            <p class="price-table-item__contents-item">カリキュラム作成</p><!-- /.price-table-item__contents-item -->
            <p class="price-table-item__contents-item">TOEFL学習サポート</p><!-- /.price-table-item__contents-item -->
            <p class="price-table-item__contents-item">週一回のビデオMTG</p><!-- /.price-table-item__contents-item -->
            <p class="price-table-item__contents-item">月二回の模試（解説 付き）</p><!-- /.price-table-item__contents-item -->
          </div><!-- /.price-table-item__contents-wrapper -->
        </div><!-- /.price-table-item__body -->
      </div><!-- /.price-table-item price-table-contents__item -->
      <div class="price-table-item price-table-contents__item">
        <div class="price-table-item__title-wrapper price-table-item__title-wrapper--pickup">
          <h3 class="price-table-item__title">おすすめ<br>志望校対策プラン</h3><!-- /.price-table-item__title -->
        </div><!-- /.price-table-item__title-wrapper -->
        <div class="price-table-item__body">
        <?php if (get_field('price-prepare')) : ?>
            <p class="price-table-item__price">
              <?php the_field('price-prepare'); ?>円~</p><!-- /.price-table-item__price -->
            <p class="price-table-item__price-desc">*月額（税抜価格）</p><!-- /.price-table-item__price-desc -->
          <?php endif; ?>
          <div class="price-table-item__contents-wrapper">
            <p class="price-table-item__contents-item">カリキュラム作成</p><!-- /.price-table-item__contents-item -->
            <p class="price-table-item__contents-item">TOEFL学習サポート</p><!-- /.price-table-item__contents-item -->
            <p class="price-table-item__contents-item">週一回のビデオMTG</p><!-- /.price-table-item__contents-item -->
            <p class="price-table-item__contents-item">月二回の模試（解説 付き）</p><!-- /.price-table-item__contents-item -->
            <p class="price-table-item__contents-item">週一の英語面接対策</p><!-- /.price-table-item__contents-item -->
          </div><!-- /.price-table-item__contents-wrapper -->
        </div><!-- /.price-table-item__body -->
      </div><!-- /.price-table-item price-table-contents__item -->
      <div class="price-table-item price-table-contents__item">
        <div class="price-table-item__title-wrapper">
          <h3 class="price-table-item__title">フレックスプラン</h3><!-- /.price-table-item__title -->
        </div><!-- /.price-table-item__title-wrapper -->
        <div class="price-table-item__body">
        <?php if (get_field('price-flex')) : ?>
            <p class="price-table-item__price">
              <?php the_field('price-flex'); ?>円~</p><!-- /.price-table-item__price -->
            <p class="price-table-item__price-desc">*月額（税抜価格）</p><!-- /.price-table-item__price-desc -->
          <?php endif; ?>
          <div class="price-table-item__contents-wrapper">
            <p class="price-table-item__contents-desc">＊別途ご相談ください</p><!-- /.price-table-item__contents-item -->
          </div><!-- /.price-table-item__contents-wrapper -->
        </div><!-- /.price-table-item__body -->
      </div><!-- /.price-table-item price-table-contents__item -->
    </div><!-- /.price-table-contents -->
  </div><!-- /.inner inner--middle -->
</section><!-- /.section page-section price-table -->



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