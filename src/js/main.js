// Scroll Top
$(window).scroll(function() {
  if ($(this).scrollTop() > 100) {
    $(".scrolltop:hidden")
      .stop(true, true)
      .fadeIn();
  } else {
    $(".scrolltop")
      .stop(true, true)
      .fadeOut();
  }
});
$(function() {
  $(".scroll").click(function() {
    $("html,body").animate(
      { scrollTop: $(".breadcrumbs").offset().top },
      "3000"
    );
    return false;
  });
});

// Burger btn
$(".navbar-toggler").click(function() {
  $(this).toggleClass("open");
});
