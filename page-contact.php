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
        <form action="" class="form contact__form">
          <p class="form__desc">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p><!-- /.form__desc -->
          <div class="form__items">
            <div class="form__item form-item">
              <div class="form-item__label-wrapper">
                  <label for="name" class="form-item__label">会社名</label><!-- /.form-item__label -->
              </div><!-- /.form-item__label-wrapper -->
              <div class="form-item__input-wrapper">
                  <input id="name" name="" type="text" class="form-item__input" placeholder="Engress">
              </div><!-- /.form-item__input-wrapper -->
          </div><!-- /.form__item form-item -->
          <div class="form__item form-item">
            <div class="form-item__label-wrapper">
                <label for="name" class="form-item__label">氏名</label><!-- /.form-item__label -->
            </div><!-- /.form-item__label-wrapper -->
            <div class="form-item__input-wrapper">
                <input id="name" name="" type="text" class="form-item__input" placeholder="田中　太郎">
            </div><!-- /.form-item__input-wrapper -->
          </div>
            <div class="form__item form-item">
              <div class="form-item__label-wrapper">
                  <label for="name" class="form-item__label">メールアドレス</label><!-- /.form-item__label -->
              </div><!-- /.form-item__label-wrapper -->
              <div class="form-item__input-wrapper">
                  <input id="name" name="" type="email" class="form-item__input" placeholder="example@example.com">
              </div><!-- /.form-item__input-wrapper -->
            </div><!-- /.form__item form-item -->
            <div class="form__item form-item">
              <div class="form-item__label-wrapper">
                  <label for="name" class="form-item__label">電話番号</label><!-- /.form-item__label -->
              </div><!-- /.form-item__label-wrapper -->
              <div class="form-item__input-wrapper">
                  <input id="name" name="" type="tel" class="form-item__input" placeholder="01-2345-6789">
              </div><!-- /.form-item__input-wrapper -->
            </div><!-- /.form__item form-item -->
            <div class="form__item form-item">
              <div class="form-item__label-wrapper">
                  <label for="request" class="form-item__label">お問い合わせの種類を選択してください<span class="form-item__label-caution">（資料請求の方は資料請求を選択ください）</span><!-- /.form-item__label-caution --></label><!-- /.form-item__label -->
              </div><!-- /.form-item__label-wrapper -->
              <div class="form-item__input-wrapper">
                <div class="form-item__radio-container">
                  <label class="form-item__radio-wrapper"><input name="content" type="radio" class="form-item__radio" value="男性" checked><span class="form-item__radio-label">商談のご相談</span><!-- /.form__radio-label --></label><!-- /.form__radio-wrapper -->
                </div><!-- /.form-item__radio-container -->
                <div class="form-item__radio-container">
                  <label class="form-item__radio-wrapper"><input name="content" type="radio" class="form-item__radio" value="男性" checked><span class="form-item__radio-label">サービスに関するお問い合わせ</span><!-- /.form__radio-label --></label><!-- /.form__radio-wrapper -->
                </div><!-- /.form-item__radio-container -->
                <div class="form-item__radio-container">
                  <label class="form-item__radio-wrapper"><input name="content" type="radio" class="form-item__radio" value="男性" checked><span class="form-item__radio-label">資料請求</span><!-- /.form__radio-label --></label><!-- /.form__radio-wrapper -->
                </div><!-- /.form-item__radio-container -->
                <div class="form-item__radio-container">
                  <label class="form-item__radio-wrapper"><input name="content" type="radio" class="form-item__radio" value="男性" checked><span class="form-item__radio-label">その他</span><!-- /.form__radio-label --></label><!-- /.form__radio-wrapper -->
                </div><!-- /.form-item__radio-container -->
              </div><!-- /.form-item__input-wrapper -->
            </div><!-- /.form__item form-item -->
            <div class="form__item form-item">
              <div class="form-item__label-wrapper">
                  <label for="name" class="form-item__label">お問い合わせ内容</label><!-- /.form-item__label -->
              </div><!-- /.form-item__label-wrapper -->
              <div class="form-item__input-wrapper">
                <textarea name="" id="message"  class="form-item__textarea" placeholder="入力してください"></textarea><!-- /#.form-item__textarea -->
              </div><!-- /.form-item__input-wrapper -->
            </div><!-- /.form__item form-item -->
            <div class="form__privacy-contents">
              <p class="form__privacy-text">
                <a href="#" class="form__privacy-link">プライバシーポリシー</a><!-- /.form__privacy-link -->
                に同意の上、送信ください。
              </p><!-- /.form__privacy-text -->
              <div class="form__agree-wrapper">
                <input id="agree" type="checkbox" class="form__agree-input" name="" value="プライバシーポリシーに同意する" >
                <label for="agree" class="form__agree-label"><span class="form__agree-caution">プライバシーポリシーに同意する</span></label><!-- /.form__agree-label -->
            </div><!-- /.form__agree-wrapper -->
            </div><!-- /.form_privacy-contents -->
            <div class="button-wrapper button-wrapper--center">
               <input type="submit" class="button form__submit-button button--color_primary button--shape_square" value="送信する">
             </div><!-- /.button-wrapper button-wrapper--center -->
          </div><!-- /.form__items -->
        </form><!-- /.form contact__form -->
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