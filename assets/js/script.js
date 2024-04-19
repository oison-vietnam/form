
$(document).ready(function () {

  $(".inview").on('inview', function () {
    $(this).addClass('is-inview');
  });

  $(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
      $("body").addClass("fixed");
    } else {
      $("body").removeClass("fixed");
    }
    if ($(window).scrollTop() > 500) {
      $("#back_to_top, #button_fixed").fadeIn();
    } else {
      $("#back_to_top, #button_fixed").fadeOut();
    }
  });
  $(".menu_toggle").click(function (event) {
    event.preventDefault();
    $(".menu_toggle, #menu").toggleClass('open');
  })
  $("#back_to_top").click(function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 600);
  });
})