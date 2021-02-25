jQuery(function () {
  // クリック時の動作
  jQuery('.hamberger__line-wrapper').on('click', function() {

      // メニューを閉じる
      if(jQuery(this).hasClass('open')) {
          jQuery(this).removeClass('open');
          jQuery('.hamberger-menu').removeClass('open');
         


      // メニューを開く
      } else {
          jQuery(this).addClass('open');
          jQuery('.hamberger-menu').addClass('open');
         
      }
  });
});

jQuery(function () {
  jQuery('.qanda-item__question-wrapper').on('click', function() {

    jQuery(this).next().slideToggle();
    $icon = jQuery(this).children('.qanda-item__question');
    $icon.toggleClass('open');

  });
});

new ScrollHint('.js-scrollable', {
  suggestiveShadow: true,
  i18n: {
    scrollable: 'スクロールできます'
  }
});


