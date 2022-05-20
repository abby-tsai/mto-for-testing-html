$(document).ready(function () {
  
  // 看報告範例 - 開啟和關閉
  // 開啟
  $('.exampleOpenBtn').click(function () {
    $('.popBlock.see-example').fadeIn();
  });
  // 關閉
  $('.popCloseBtn').click(function () {
    $('.popBlock').fadeOut();
  });
  $(document).click(function (e) {
    if (e.target.className.includes('popBlock')) {
      $('.popBlock').fadeOut();
    }
  })

  // 尚未解鎖視窗 - 開啟和關閉
  // 開啟
  $('.notApplyBtn').click(function () {
    $('.popBlock.not-apply').fadeIn();
  });
  // 關閉
  $('.popCloseBtn').click(function () {
    $('.popBlock').fadeOut();
  });
  $(document).click(function (e) {
    if (e.target.className.includes('popBlock')) {
      $('.popBlock').fadeOut();
    }
  })

  // 選單下拉
  // 電腦版
  $('.icon_nav').click(function () {
    $(this).parent().toggleClass('active');
    $(this).next().toggle();
  });

  // 手機版
  $('#mobile_navBar').click(function(){
    $('.headerConts').toggleClass('active');
    // 當選單打開的狀態，不能滑動
    if($('.headerConts').hasClass('active')){
      $('body').css('overflow', 'hidden');
    } else {
      $('body').css('overflow', 'auto');
    }
  })

});