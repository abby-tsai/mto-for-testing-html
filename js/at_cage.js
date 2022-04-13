// JavaScript Document
//--------------------------------------------------------------------------------
// Andy
//--------------------------------------------------------------------------------
"use strict";
var clickEventListners = [];
var unclickEventListeners = [];

/**
 * For complex click behavior, register click handler
 *
 * Don't use this
 *
 * @param string  selector
 * @param functor handler
 */
function registerClickEvent(selector, handler) {
	clickEventListners.push({selector:selector, handler:handler});
}

/**
 * For complex click behavior, register unclick handler
 *
 * Unclick handler will be called when the no click target and its parents match the selector
 *
 * @param string  selector
 * @param functor handler
 */
function registerUnclickEvent(selector, handler) {
    unclickEventListeners.push({selector:selector, handler:handler});
}

/**
 * Global click event handler for complex behavior
 */
$(document).ready(function() {
    $(document).click(function(event) {
    	var target = $(event.target);
        var candidates = target.parents();
        candidates.push(target[0]);
  	    for (var i = 0; i < unclickEventListeners.length; ++i) {
            if (candidates.filter(unclickEventListeners[i].selector).length === 0)
                unclickEventListeners[i].handler(target);
        }
    });
});


/**
 * Quiz size adjustment
 */
function scaleQuiz() {
	// SPA pages does not need these workaround stuff
	if (typeof app === 'undefined' || app.$store.state.container.isSpa)
		return;

	var Gww = $(window).width(), Gwh = $(window).height();
	var contentPad_H = Gwh;
	    if ($('#header').length)
			contentPad_H -= $('#header').height()
		if ($('#categoryMenu').length)
			contentPad_H -= $('#categoryMenu').height() - 1; // workaround floating point
    if (Gww <= 768) {
        $('.height_R').css({'min-height': Gwh});
        $('.height_R2').css({'min-height': contentPad_H});
    } else {
        $('.height_R').css({'min-height': '1px'});
        $('.height_R2').css({'min-height': '1px'});
	}
};


//--------------------------------------------------------------------------------
// CaGe Wei
//--------------------------------------------------------------------------------
$(window).on('load', function() {
	var Gw = $(window), Gww = Gw.width(), Gwh = Gw.height(), Gd = $(document), Gdw = Gd.width(), Gdh = Gd.height();
});

$(document).ready(function(){
    //--------------------------------------------------------------
    // Main/sub menus toolbars
    //--------------------------------------------------------------
	var Gw = $(window), Gww = Gw.width(), Gwh = Gw.height(), Gd = $(document), Gdw = Gd.width(), Gdh = Gd.height(),
		mainH = $('#main').height(), contentPad_H = Gwh - $('#header').height(), documentAll_H = contentPad_H - $('#footer').height(),
		navMenuHeight = contentPad_H/* - 45*/;

	if (Gww <= 768) {
        $('.height_FR2').css({'min-height':contentPad_H});  // signup.php
	}
	if (Gww > 768) {
		// 聊天 notifications
		$('#menu_chat').click(function(){
            $('#chatlistPad').fadeToggle();
		});
		registerUnclickEvent('#menu_chat', function() { if ($('#chatlistPad').is(":visible")) $('#chatlistPad').fadeOut(); });

		// 訊息 notifications
		$('#menu_mesg').click(function(){
            $('#noticelistPad').fadeToggle();
		});
        registerUnclickEvent('#menu_mesg', function() { if ($('#noticelistPad').is(":visible")) $('#noticelistPad').fadeOut(); });
	}


    //---------------------------------------------------------------------------------------
    // Non-layout related
    //---------------------------------------------------------------------------------------

    //--------------------------------------------------------------
    // Chat
    //--------------------------------------------------------------
	function chatClose() {
		if($('.chatClose').hasClass('action')){

		}else{
			$('.chatClose').addClass('action');
		}
	}

	$('.chatClose').click(function(){
		$('.chatPlusPad').fadeOut();
		$(this).removeClass('action');
	});

	var $autoNextInput = $('.ansType_inputNumber').find('input');
	$autoNextInput.keyup(function(){
		var _nowLength = $(this).val().length.toString();
		if(_nowLength === $(this).attr('maxlength')){
			$(this).next('input').focus();
		}
	});

	// ======= AT CaGe Wei Basic ====== //
	// back Top
	$('.backTop').click(function(){$('html,body').animate({scrollTop:$('body').offset().top});});

	// LightBox
	$('#popContainer').hide();
	$('.btn_openPop').click(function(){
		$('#popContainer').fadeIn();
	});
	$('.btn_closePop').click(function(){$('#popContainer').fadeOut();});
	$('#popContainer').prepend('<div class="before"></div>');
	$('#popContainer > .before').click(function(){$('#popContainer').fadeOut();});

	// SPA pages does not need these workaround stuff
	if (typeof app === 'undefined' || app.$store.state.container.isSpa)
		return;

	scaleQuiz();

    //--------------------------------------------------------------
	// Surveys
	//
	// Only register quiz page need this
	//--------------------------------------------------------------
	if ($('body').hasClass('testing_pairs')) {
		var $nextTest = $('.ctrlPad').find('.next');
		var $prevTest = $('.ctrlPad').find('.prev');
		$nextTest.click(function(){
			var $Gfath = $(this).parents('.pageGroup'),
				$ind = $(this).parents('.page').index(),
				$uncle = $Gfath.find('.page');
			$uncle.eq($ind).fadeOut(300, function() {$uncle.eq($ind+1).fadeIn(0);});
		});
		$prevTest.click(function(){
			var $Gfath = $(this).parents('.pageGroup'),
				$ind = $(this).parents('.page').index(),
				$uncle = $Gfath.find('.page');
			$uncle.eq($ind).fadeOut(300, function() {$uncle.eq($ind-1).fadeIn(0);});
		});
	}
});


//backTop button
$(window).scroll(function(){
	var Gw = $(window), Gwh = Gw.height(),
		Gd = $(document), Gdh =Gd.height(),
		_nowHeight = $(window).scrollTop();

	if (_nowHeight >= Gwh / 2) {$('.backTop').stop().animate({opacity:1});}else{$('.backTop').stop().animate({opacity:0});}
	//
	if (_nowHeight < Gdh / 4) {$('.p').stop().animate({backgroundColor:'#000000'});
	}else if (_nowHeight >= Gdh / 4 && _nowHeight < Gdh / 3 ) {$('.p').stop().animate({backgroundColor:'#f18c8c'});
	}else if(_nowHeight >= Gdh / 3 && _nowHeight < Gdh / 2) {$('.p').stop().animate({backgroundColor:'rgb(156,230,50)'});
	}else if(_nowHeight >= Gdh / 2 && _nowHeight < Gdh) {$('.p').stop().animate({backgroundColor:'#58f4e7'});
	}
});

$(window).resize(function(){
    scaleQuiz();
});
