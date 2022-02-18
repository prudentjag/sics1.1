
$(document).ready(function() {
	'use strict';

  /*-------------------------------------
  Sticky NabBar
  -------------------------------------*/
  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 1) {
      $('.ugf-nav-wrap').addClass('fixed');
    } else {
      $('.ugf-nav-wrap').removeClass('fixed');
    }
  });

  $('.sortclass').css('display', 'none')
  $(".viewsort").on('click', function () {
    $('.sortclass').css('display', 'block')
  })

})