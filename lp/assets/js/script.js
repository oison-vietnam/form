
$(document).ready(function () {


  $(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
      $("body").addClass("fixed");
    } else {
      $("body").removeClass("fixed");
    }
    if ($(window).scrollTop() > 500) {
      $("#back_to_top").fadeIn();
    } else {
      $("#back_to_top").fadeOut();
    }
  });
  $("#back_to_top").click(function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 600);
  });
  $(".anchor-link").click(function (e) {
    e.preventDefault()
    var tab = $(this).attr("href");
    var scrollTo = $(tab).offset().top - 60;
    $("html, body").animate({
      scrollTop: scrollTo
    }, 400);
    var w_width = $(window).width();
    if (w_width < 786) {
      $("#nav-menu .menu-content").hide();
    }
    $("#btn-menu").prop("checked", false);
  })
  $("#toggleMenuSP").click(function () {
    $("#nav-menu .menu-content").slideToggle();
  })
  $(window).resize(function () {
    var w_width = $(window).width();
    if (w_width > 786) {
      $("#nav-menu .menu-content").show();
    } else {
      $("#nav-menu .menu-content").hide();
    }
  });

  /* 
    $('#applyForm').validator({
      custom: {
        min: function ($el) {
          const min = $el.data("min") // foo
          if ($el.val() && $el.val() < min) {
            return $el.data("min-error");
          }
        }
      }
    }).on('submit', function (e) {
      if (!e.isDefaultPrevented()) {
        $("#form-sending").show();
        $("#applyForm button.apply_link").html('<img src="./assets/images/loading.gif" /> 送信中')
        $("#applyForm button.apply_link").attr("disabled", "disabled");
      }
    }) */
})