// onboardingPop 的出現與消失
$(window).load(function () {

   // 出現 - onboardingPop 畫面載入
   $('#onboardingPop').show();

   // 消失 - 當滑鼠點擊
   $(document).click(function (e) {
      if (e.target.id == 'onboardingPop') {
         $('#onboardingPop').fadeOut();
      }
   })
   $('.onboardCloseBtn').click(function () {
      $('#onboardingPop').fadeOut();
   })
})

// popContainer 的出現與消失
$(window).load(function () {
   $('#popContainer').show();

   $('#popCloseBtn').click(function () {
      $('#popContainer').fadeOut();
   });
})

// noteContent 置頂訊息的出現與消失
$(document).ready(function () {
   $('#noteBtn').click(function () {
      $('#noteContent').fadeToggle();
   });
   $('#closeBtn').click(function () {
      $('#noteContent').fadeOut();
   });
});

// popContainer step slider 輪播
$(document).ready(function () {

   const sliderWidth = $('#page1').innerWidth(); //每個slide項目的寬度
   const sliderSlideBox = $('.step-slider .slides'); //slide項目的全部區塊

   $('#b_1').addClass('active'); //預設第一頁的bullet是active

   // 電腦版按鈕
   // 第一頁
   $('#page1_next').click(function () {
      sliderSlideBox.css('left', `-${sliderWidth}px`);
      $('#b_1').removeClass('active');
      $('#b_2').addClass('active');
   });

   // 第二頁
   $('#page2_prev').click(function () {
      sliderSlideBox.css('left', '0px');
      $('#b_1').addClass('active');
      $('#b_2').removeClass('active');
   });
   $('#page2_next').click(function () {
      sliderSlideBox.css('left', `-${sliderWidth * 2}px`);
      $('#b_1').removeClass('active');
      $('#b_2').removeClass('active');
      $('#b_3').addClass('active');
   });

   // 第三頁
   $('#page3_prev').click(function () {
      sliderSlideBox.css('left', `-${sliderWidth}px`);
      $('#b_2').addClass('active');
      $('#b_3').removeClass('active');
   });
   $('#page3_done').click(function () {
      $('#popContainer').fadeOut();
      $('#b_1').addClass('active');
      $('#b_3').removeClass('active');
   });

   // 手機版滑動
   // 第一頁
   $("#page1").touchwipe({
      wipeLeft: function () {
         sliderSlideBox.css('left', `-${sliderWidth}px`);
         $('#b_1').removeClass('active');
         $('#b_2').addClass('active');
      },
      wipeRight: function () {
         sliderSlideBox.css('left', '0px');
         $('#b_1').addClass('active');
      },
      min_move_x: 30,
      min_move_y: 30,
      preventDefaultEvents: true
   });

   // 第二頁
   $("#page2").touchwipe({
      wipeLeft: function () {
         sliderSlideBox.css('left', `-${sliderWidth * 2}px`);
         $('#b_2').removeClass('active');
         $('#b_3').addClass('active');
      },
      wipeRight: function () {
         sliderSlideBox.css('left', `0px`);
         $('#b_1').addClass('active');
         $('#b_2').removeClass('active');
      },
      min_move_x: 30,
      min_move_y: 30,
      preventDefaultEvents: true
   });

   // 第三頁
   $("#page3").touchwipe({
      wipeLeft: function () {
         sliderSlideBox.css('left', `-${sliderWidth * 2}px`);
      },
      wipeRight: function () {
         sliderSlideBox.css('left', `-${sliderWidth}px`);
         $('#b_3').removeClass('active');
         $('#b_2').addClass('active');
      },
      min_move_x: 30,
      min_move_y: 30,
      preventDefaultEvents: true
   });

});

// 加入好友按鈕 - 讓onboardingPop對準位置
window.onload = function () {

   const addFriendBtn = document.getElementById('addFriendBtn');
   const addFriend = document.getElementById('addFriendOnBoard');

   if (document.getElementById("addFriendOnBoard") !== null) {
      let ot = addFriendBtn.getBoundingClientRect().top + document.documentElement.scrollTop;
      let ol = addFriendBtn.getBoundingClientRect().left + document.documentElement.scrollLeft;
      let addFriendBtnWidth = addFriendBtn.offsetWidth;

      addFriend.style.top = (ot + 50) + 'px';
      addFriend.style.left = ol + 'px';
      addFriend.style.width = addFriendBtnWidth + 'px';

      let addFriendHeight = addFriend.clientHeight;

      // console.log(addFriendHeight);
      if (window.innerWidth <= 769) {
         var newOt = ot - addFriendHeight;
         addFriend.style.top = newOt + 'px';
      }
   }



};


