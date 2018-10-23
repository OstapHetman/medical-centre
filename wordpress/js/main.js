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

// Dynamic Carousel indicator
if (document.getElementById("headerCarousel")) {
  const carouselItems = document.querySelectorAll(
    "#headerCarousel .carousel-item"
  );
  const carouselIndicators = document.querySelector(
    "#headerCarousel .carousel-indicators"
  );
  carouselItems.forEach((el, index) => {
    const li = document.createElement("li");
    li.setAttribute("data-target", "#headerCarousel");
    li.setAttribute("data-slide-to", `${index}`);
    li.classList.add("mr-3");
    carouselIndicators.appendChild(li);
  });
}

if (document.getElementById("aboutCarousel")) {
  const carouselItems = document.querySelectorAll(
    "#aboutCarousel .carousel-item"
  );
  const carouselIndicators = document.querySelector(
    "#aboutCarousel .carousel-indicators"
  );
  carouselItems.forEach((el, index) => {
    const li = document.createElement("li");
    li.setAttribute("data-target", "#aboutCarousel");
    li.setAttribute("data-slide-to", `${index}`);
    li.classList.add("mr-3");
    carouselIndicators.appendChild(li);
  });
}

if (document.getElementById("servicesCarousel")) {
  const carouselItems = document.querySelectorAll(
    "#servicesCarousel .carousel-item"
  );
  const carouselIndicators = document.querySelector(
    "#servicesCarousel .carousel-indicators"
  );
  carouselItems.forEach((el, index) => {
    const li = document.createElement("li");
    li.setAttribute("data-target", "#servicesCarousel");
    li.setAttribute("data-slide-to", `${index}`);
    li.classList.add("mr-3");
    carouselIndicators.appendChild(li);
  });
}

// Add active class to carousel-item
if (document.getElementsByClassName("carousel-item")[0]) {
  document.getElementsByClassName("carousel-item")[0].classList.add("active");
}

if (
  document.getElementById("aboutCarousel") ||
  document.getElementById("servicesCarousel")
) {
  let carousel = document.getElementById("aboutCarousel");
  let servicesCarousel = document.getElementById("servicesCarousel");
  carousel.getElementsByClassName("carousel-item")[0].classList.add("active");
  servicesCarousel
    .getElementsByClassName("carousel-item")[0]
    .classList.add("active");
}
