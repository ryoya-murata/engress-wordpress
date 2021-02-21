$(function () {
  // クリック時の動作
  $('.hamberger__line-wrapper').on('click', function() {

      // メニューを閉じる
      if($(this).hasClass('open')) {
          $(this).removeClass('open');
          $('.hamberger-menu').removeClass('open');
         


      // メニューを開く
      } else {
          $(this).addClass('open');
          $('.hamberger-menu').addClass('open');
         
      }
  });
});

$(function () {
  $('.qanda-item__question-wrapper').on('click', function() {

    $(this).next().slideToggle();
    $icon = $(this).children('.qanda-item__question');
    $icon.toggleClass('open');

  });
});

new ScrollHint('.js-scrollable', {
  suggestiveShadow: true,
  i18n: {
    scrollable: 'スクロールできます'
  }
});


