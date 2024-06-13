(function ($) {
  "use strict";
  $(".sidebar-toggle-button").on("click", function () {
    $(this).toggleClass("active");
    $(".dashboard-sidebar-wrapper").toggleClass("slide");
    $(".main-content").toggleClass("slide");
    $(".dashboard-footer").toggleClass("slide");
  });
  jQuery(window).on("load", function () {
    $(".egns-preloader").delay(1600).fadeOut("slow");
  });
  $(".preloader-close-btn").on("click", function () {
    $(".egns-preloader").addClass("close");
  });
  $(function () {
    $(".transport-type ul li").on("click", function () {
      $(".transport-type ul li").removeClass("active");
      if ($(this).hasClass("privet")) {
        $("#forPrivet").show();
        $("#forPublic").hide();
      } else if ($(this).hasClass("public")) {
        $("#forPublic").show();
        $("#forPrivet").hide();
      } else {
        $("#StripePayment").hide();
        $("#OfflinePayment").hide();
      }
    });
  });
  $("[data-countdown]").each(function () {
    var $deadline = new Date($(this).data("countdown")).getTime();
    var $dataDays = $(this).children("[data-days]");
    var $dataHours = $(this).children("[data-hours]");
    var $dataMinutes = $(this).children("[data-minutes]");
    var $dataSeconds = $(this).children("[data-seconds]");
    var x = setInterval(function () {
      var now = new Date().getTime();
      var t = $deadline - now;
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((t % (1000 * 60)) / 1000);
      $dataDays.html(`${days} <span>Days</span> <span>D</span>`);
      $dataHours.html(`${hours} <span>Hours</span> <span>H</span>`);
      $dataMinutes.html(`${minutes} <span>Minutes</span> <span>M</span>`);
      $dataSeconds.html(`${seconds} <span>Seconds</span> <span>S</span>`);
      if (t <= 0) {
        clearInterval(x);
        $dataDays.html("00 <span>Days</span> <span>D</span>");
        $dataHours.html("00 <span>Hours</span> <span>H</span>");
        $dataMinutes.html("00 <span>Minutes</span> <span>M</span>");
        $dataSeconds.html("00 <span>Seconds</span> <span>S</span>");
      }
    }, 1000);
  });
  $(".slider-and-tab-section .tab-sidebar ul li").on({
    click: function () {
      var index = $(this).index();
      $(".activities-slider-group li").removeClass("active");
      $(".activities-slider-group li:eq(" + index + ")").addClass("active");
    },
  });
  $(".star-icon").each(function () {
    let self = $(this);
    $(this).on("mouseenter", function () {
      $(this).prevAll().addBack().css("color", "#FBB03B");
    });
    $(this).on("mouseout", function () {
      if (!$(this).parent().attr("data-rating")) {
        $(this).prevAll().addBack().css("color", "#787878");
      } else {
        $(this)
          .siblings()
          .addBack()
          .each(function (index) {
            index + 1 <= $(this).parent().attr("data-rating")
              ? $(this).css("color", "#FBB03B")
              : $(this).css("color", "#787878");
          });
      }
    });
    $(this).on("click", function () {
      $(this)
        .parent()
        .attr("data-rating", $(this).prevAll().length + 1);
    });
  });
  $(function () {
    $('input[name="inOut"]').daterangepicker(
      {
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 2023,
        maxYear: 2025,
        locale: { format: "DD-MMM-YYYY" },
      },
      function (start, end, label) {
        var years = moment().diff(start, "years");
      }
    );
    $('input[name="daterange"]').daterangepicker(
      {
        opens: "left",
        minDate: moment(),
        startDate: moment(),
        maxYear: "2025",
        locale: { format: "DD-MMM" },
      },
      function (start, end, label) {
        console.log(
          "A new date selection was made: " +
            start.format("YYYY-MM-DD") +
            " to " +
            end.format("YYYY-MM-DD")
        );
      }
    );
  });
  $('[data-fancybox="popup-video"]').fancybox({
    buttons: ["close"],
    loop: false,
    protect: true,
  });
  $('[data-fancybox="gallery-01"]').fancybox({
    buttons: ["close"],
    loop: false,
    protect: true,
  });
  $(".video1").fancybox({ buttons: ["close"], loop: false, protect: true });
  $(".video2").fancybox({ buttons: ["close"], loop: false, protect: true });
  $(".video3").fancybox({ buttons: ["close"], loop: false, protect: true });
  $(".video4").fancybox({ buttons: ["close"], loop: false, protect: true });
  $(".video5").fancybox({ buttons: ["close"], loop: false, protect: true });
  $(".sidebar-btn2").on("click", function () {
    $(".header-sidebar").addClass("slide");
  });
  $(".close-btn").on("click", function () {
    $(".header-sidebar").removeClass("slide");
  });
  jQuery(".dropdown-icon").on("click", function () {
    jQuery(this).toggleClass("active").next("ul, .mega-menu").slideToggle();
    jQuery(this).parent().siblings().children("ul, .mega-menu").slideUp();
    jQuery(this).parent().siblings().children(".active").removeClass("active");
  });
  jQuery(".dropdown5").on("click", function () {
    jQuery(this)
      .toggleClass("active")
      .next(".checkbox-container ul")
      .slideToggle();
    jQuery(this)
      .parent()
      .siblings()
      .children(".checkbox-container ul")
      .slideUp();
    jQuery(this).parent().siblings().children(".active").removeClass("active");
  });
  window.addEventListener("scroll", function () {
    const header = document.querySelector(
      "header.header-area, .dashboard-sidebar-wrapper"
    );
    header.classList.toggle("sticky", window.scrollY > 0);
  });
  $(".counter").counterUp({ delay: 10, time: 1000 });
  var swiper = new Swiper(".home1-banner-slider", {
    slidesPerView: 1,
    speed: 2500,
    spaceBetween: 25,
    effect: "fade",
    fadeEffect: { crossFade: true },
    autoplay: { delay: 3000, disableOnInteraction: false },
    navigation: { nextEl: ".home1-banner-next", prevEl: ".home1-banner-prev" },
  });
  var swiper = new Swiper(".home3-banner-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    effect: "fade",
    loop: true,
    fadeEffect: { crossFade: true },
    autoplay: { delay: 2500, disableOnInteraction: false },
    pagination: { el: ".progress-pagination", type: "progressbar" },
    navigation: { nextEl: ".home3-banner-next", prevEl: ".home3-banner-prev" },
  });
  var swiper = new Swiper(".home4-banner-img-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    effect: "fade",
    loop: true,
    fadeEffect: { crossFade: true },
    autoplay: { delay: 2500, disableOnInteraction: false },
    navigation: { nextEl: ".home4-banner-next", prevEl: ".home4-banner-prev" },
  });
  var swiper = new Swiper(".franctional-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    loop: true,
    pagination: { el: ".franctional-slider-pagi1", type: "fraction" },
    navigation: {
      nextEl: ".franctional-slider-next-btn",
      prevEl: ".franctional-slider-prev-btn",
    },
  });
  var swiper = new Swiper(".package-card-tab-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    loop: true,
    autoplay: { delay: 2500, disableOnInteraction: false },
    navigation: {
      nextEl: ".package-card-tab-next",
      prevEl: ".package-card-tab-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 1, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 3, spaceBetween: 15 },
      1200: { slidesPerView: 3, spaceBetween: 15 },
      1400: { slidesPerView: 3 },
    },
  });
  var swiper = new Swiper(".testimonial-card-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    loop: true,
    autoplay: { delay: 2500, disableOnInteraction: false },
    navigation: {
      nextEl: ".testimonial-card-tab-next",
      prevEl: ".testimonial-card-tab-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 1, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 3, spaceBetween: 15 },
      1200: { slidesPerView: 3, spaceBetween: 15 },
      1400: { slidesPerView: 3 },
    },
  });
  var swiper = new Swiper(".package-card2-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    navigation: {
      nextEl: ".package-card2-next",
      prevEl: ".package-card2-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 1, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 3, spaceBetween: 15 },
      1200: { slidesPerView: 3, spaceBetween: 15 },
      1400: { slidesPerView: 3 },
    },
  });
  var swiper = new Swiper(".destination-card2-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    navigation: {
      nextEl: ".destination-card2-next",
      prevEl: ".destination-card2-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 2, spaceBetween: 15 },
      768: { slidesPerView: 3, spaceBetween: 15 },
      992: { slidesPerView: 4, spaceBetween: 15 },
      1200: { slidesPerView: 4, spaceBetween: 15 },
      1400: { slidesPerView: 4 },
    },
  });
  var swiper = new Swiper(".destination-sidebar-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    loop: true,
    autoplay: { delay: 2500, disableOnInteraction: false },
    navigation: {
      nextEl: ".destination-sidebar-next",
      prevEl: ".destination-sidebar-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 2, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 2, spaceBetween: 15 },
      1200: { slidesPerView: 2, spaceBetween: 15 },
      1400: { slidesPerView: 2 },
    },
  });
  var swiper = new Swiper(".package-card-slider", {
    slidesPerView: 1,
    speed: 2000,
    spaceBetween: 25,
    navigation: {
      nextEl: ".package-card-slider-next",
      prevEl: ".package-card-slider-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 1, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 3, spaceBetween: 15 },
      1200: { slidesPerView: 3, spaceBetween: 15 },
      1400: { slidesPerView: 3 },
    },
  });
  var swiper = new Swiper(".hotel-card-slider", {
    slidesPerView: 1,
    speed: 2000,
    spaceBetween: 25,
    navigation: {
      nextEl: ".package-card-slider-next",
      prevEl: ".package-card-slider-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 1, spaceBetween: 15 },
      768: { slidesPerView: 1, spaceBetween: 24 },
      992: { slidesPerView: 2, spaceBetween: 24 },
      1200: { slidesPerView: 2, spaceBetween: 24 },
      1400: { slidesPerView: 3 },
    },
  });
  var swiper = new Swiper(".activities-img-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    effect: "fade",
    loop: true,
    fadeEffect: { crossFade: true },
    autoplay: { delay: 2500, disableOnInteraction: false },
    pagination: { el: ".swiper-pagination5", clickable: true },
  });
  var swiper = new Swiper(".hotel-img-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    effect: "fade",
    loop: true,
    fadeEffect: { crossFade: true },
    autoplay: { delay: 2500, disableOnInteraction: false },
    pagination: { el: ".swiper-pagination5", clickable: true },
  });
  var swiper5 = new Swiper(".banner4-card-slide", {
    spaceBetween: 10,
    slidesPerView: 1,
    freeMode: true,
    watchSlidesProgress: true,
    speed: 1500,
    allowTouchMove: false,
    effect: "fade",
    fadeEffect: { crossFade: true },
    thumbs: { swiper: swiper6 },
  });
  var swiper6 = new Swiper(".package-card3-slide", {
    spaceBetween: 10,
    speed: 1500,
    draggable: false,
    navigation: {
      nextEl: ".banner4-slider-next",
      prevEl: ".banner4-slider-prev",
    },
    thumbs: { swiper: swiper5 },
  });
  var swiper = new Swiper(".home2-testimonial-card-slider", {
    slidesPerView: 1,
    speed: 2500,
    spaceBetween: 25,
    loop: true,
    navigation: {
      nextEl: ".testimonial-card-slider-next",
      prevEl: ".testimonial-card-slider-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 1, spaceBetween: 15 },
      768: { slidesPerView: 1, spaceBetween: 15 },
      992: { slidesPerView: 1, spaceBetween: 15 },
      1200: { slidesPerView: 1, spaceBetween: 15 },
      1400: { slidesPerView: 1 },
    },
  });
  var swiper = new Swiper(".teams-card-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    navigation: { nextEl: ".teams-card-next", prevEl: ".teams-card-prev" },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 2, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 3, spaceBetween: 15 },
      1200: { slidesPerView: 4, spaceBetween: 15 },
      1400: { slidesPerView: 4 },
    },
  });
  var swiper = new Swiper(".banner5-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    loop: true,
    navigation: {
      nextEl: ".banner5-slider-next",
      prevEl: ".banner5-slider-prev",
    },
  });
  var activities = new Swiper(".activities-tab-img-slider", {
    slidesPerView: 1,
    speed: 2000,
    spaceBetween: 0,
    autoplay: { delay: 2500, disableOnInteraction: false },
    navigation: {
      nextEl: ".activities-tab-img-next",
      prevEl: ".activities-tab-img-prev",
    },
  });
  var activities = new Swiper(".tour-tab-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 30,
    navigation: {
      nextEl: ".tour-tab-slider-next",
      prevEl: ".tour-tab-slider-prev",
    },
    breakpoints: {
      280: { slidesPerView: 2, spaceBetween: 15 },
      386: { slidesPerView: 2, spaceBetween: 15 },
      576: { slidesPerView: 2, spaceBetween: 15 },
      768: { slidesPerView: 3, spaceBetween: 15 },
      992: { slidesPerView: 4, spaceBetween: 15 },
      1200: { slidesPerView: 5, spaceBetween: 15 },
      1400: { slidesPerView: 5 },
    },
  });
  var swiper = new Swiper(".home3-testimonial-card-slider", {
    slidesPerView: 1,
    speed: 2500,
    spaceBetween: 25,
    autoplay: { delay: 2500, disableOnInteraction: false },
    pagination: { el: ".swiper-pagination5", clickable: true },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 1, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 2, spaceBetween: 15 },
      1200: { slidesPerView: 3, spaceBetween: 15 },
      1400: { slidesPerView: 3 },
    },
  });
  var swiper = new Swiper(".instagram-slider", {
    slidesPerView: 1,
    speed: 2500,
    spaceBetween: 2,
    autoplay: { delay: 2500, disableOnInteraction: false },
    pagination: { el: ".swiper-pagination5", clickable: true },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 2 },
      768: { slidesPerView: 3, spaceBetween: 15 },
      992: { slidesPerView: 4 },
      1200: { slidesPerView: 5 },
      1400: { slidesPerView: 5 },
    },
  });
  var swiper = new Swiper(".home4-destination-card-slider", {
    slidesPerView: 1,
    speed: 2000,
    spaceBetween: 25,
    navigation: {
      nextEl: ".home4-destination-card-next",
      prevEl: ".home4-destination-card-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 1, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 3, spaceBetween: 15 },
      1200: { slidesPerView: 3, spaceBetween: 15 },
      1400: { slidesPerView: 3 },
    },
  });
  var swiper = new Swiper(".home4-banner2-slider", {
    slidesPerView: 1,
    speed: 2000,
    spaceBetween: 25,
    effect: "fade",
    fadeEffect: { crossFade: true },
    autoplay: { delay: 2500, disableOnInteraction: false },
    navigation: {
      nextEl: ".home4-banner2-slider-next",
      prevEl: ".home4-banner2-slider-prev",
    },
  });
  var swiper = new Swiper(".home4-tab-with-img-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    effect: "fade",
    loop: true,
    fadeEffect: { crossFade: true },
    autoplay: { delay: 2000, disableOnInteraction: false },
    navigation: {
      nextEl: ".home4-tab-with-img-next",
      prevEl: ".home4-tab-with-img-prev",
    },
  });
  var swiper = new Swiper(".package-card-slider2", {
    slidesPerView: 1,
    speed: 2000,
    spaceBetween: 25,
    navigation: {
      nextEl: ".package-card-slider2-next",
      prevEl: ".package-card-slider2-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 1, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 3, spaceBetween: 15 },
      1200: { slidesPerView: 3, spaceBetween: 15 },
      1400: { slidesPerView: 3 },
    },
  });
  var swiper = new Swiper(".package-card4-slider", {
    slidesPerView: 1,
    speed: 2000,
    spaceBetween: 25,
    navigation: {
      nextEl: ".package-card4-slider-next",
      prevEl: ".package-card4-slider-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 1, spaceBetween: 15 },
      768: { slidesPerView: 1, spaceBetween: 15 },
      992: { slidesPerView: 2, spaceBetween: 15 },
      1200: { slidesPerView: 2, spaceBetween: 15 },
      1400: { slidesPerView: 2 },
    },
  });
  var swiper = new Swiper(".home4-testimonial-card-slider", {
    slidesPerView: 1,
    speed: 2500,
    spaceBetween: 25,
    navigation: {
      nextEl: ".home4-testimonial-card-slider-next",
      prevEl: ".home4-testimonial-card-slider-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 1, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 2, spaceBetween: 15 },
      1200: { slidesPerView: 3, spaceBetween: 15 },
      1400: { slidesPerView: 3 },
    },
  });
  var swiper = new Swiper(".home5-banner-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    effect: "fade",
    fadeEffect: { crossFade: true },
    autoplay: { delay: 2500, disableOnInteraction: false },
    navigation: { nextEl: ".home5-banner-next", prevEl: ".home5-banner-prev" },
  });
  var swiper = new Swiper(".activity-card-slider", {
    slidesPerView: 1,
    speed: 2000,
    spaceBetween: 25,
    navigation: {
      nextEl: ".activity-card-slider-next",
      prevEl: ".activity-card-slider-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 2, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 3, spaceBetween: 15 },
      1200: { slidesPerView: 4, spaceBetween: 15 },
      1400: { slidesPerView: 4 },
    },
  });
  var swiper = new Swiper(".destination-card3-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    navigation: {
      nextEl: ".destination-card3-slider-next",
      prevEl: ".destination-card3-slider-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 2, spaceBetween: 15 },
      768: { slidesPerView: 3, spaceBetween: 15 },
      992: { slidesPerView: 4, spaceBetween: 15 },
      1200: { slidesPerView: 4, spaceBetween: 15 },
      1400: { slidesPerView: 4 },
    },
  });
  var swiper = new Swiper(".home5-banner2-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    effect: "fade",
    fadeEffect: { crossFade: true },
    autoplay: { delay: 2500, disableOnInteraction: false },
    pagination: { el: ".swiper-pagination5", clickable: true },
  });
  var swiper = new Swiper(".home5-teams-card-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    pagination: { el: ".teams-pagination", clickable: true },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 2, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 3, spaceBetween: 15 },
      1200: { slidesPerView: 3, spaceBetween: 15 },
      1400: { slidesPerView: 3 },
    },
  });
  var swiper = new Swiper(".home5-testimonal-slider", {
    slidesPerView: 1,
    speed: 2500,
    spaceBetween: 25,
    effect: "fade",
    fadeEffect: { crossFade: true },
    autoplay: { delay: 2500, disableOnInteraction: false },
    navigation: {
      nextEl: ".home5-testimonal-slider-next",
      prevEl: ".home5-testimonal-slider-prev",
    },
  });
  var swiper = new Swiper(".home6-banner-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 30,
    navigation: {
      nextEl: ".home6-banner-slider-next",
      prevEl: ".home6-banner-slider-prev",
    },
    pagination: { el: ".franctional-slider-pagi1", type: "fraction" },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 2, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 3, spaceBetween: 15 },
      1200: { slidesPerView: 4, spaceBetween: 15 },
      1400: { slidesPerView: 4 },
    },
  });
  var swiper = new Swiper(".home6-destination-card-slider", {
    slidesPerView: 1,
    speed: 2000,
    spaceBetween: 15,
    navigation: {
      nextEl: ".activity-card-slider-next",
      prevEl: ".activity-card-slider-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 2, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 3, spaceBetween: 15 },
      1200: { slidesPerView: 4, spaceBetween: 15 },
      1400: { slidesPerView: 4 },
      1700: { slidesPerView: 5 },
    },
  });
  var swiper = new Swiper(".home6-package-card-slider", {
    slidesPerView: 1,
    speed: 2000,
    spaceBetween: 20,
    autoplay: { delay: 2500, disableOnInteraction: false },
    navigation: {
      nextEl: ".home6-package-card-next",
      prevEl: ".home6-package-card-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 1 },
      576: { slidesPerView: 1, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      992: { slidesPerView: 3, spaceBetween: 15 },
      1200: { slidesPerView: 4, spaceBetween: 15 },
      1400: { slidesPerView: 4 },
    },
  });
  var swiper = new Swiper(".home6-testimonial-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 25,
    effect: "fade",
    fadeEffect: { crossFade: true },
    autoplay: { delay: 2500, disableOnInteraction: false },
    navigation: {
      nextEl: ".home6-testimonial-next",
      prevEl: ".home6-testimonial-prev",
    },
  });
  var activities = new Swiper(".activities-nav-slider", {
    slidesPerView: 1,
    speed: 1500,
    spaceBetween: 0,
    navigation: {
      nextEl: ".home6-activities-nav-next",
      prevEl: ".home6-activities-nav-prev",
    },
    breakpoints: {
      280: { slidesPerView: 1 },
      386: { slidesPerView: 2, spaceBetween: 15 },
      576: { slidesPerView: 3, spaceBetween: 15 },
      768: { slidesPerView: 3, spaceBetween: 15 },
      992: { slidesPerView: 4, spaceBetween: 15 },
      1200: { slidesPerView: 5, spaceBetween: 15 },
      1400: { slidesPerView: 5 },
    },
  });
  const sliders = document.querySelectorAll(".product-img-slider");
  sliders.forEach((slider) => {
    const nextBtn = slider.parentElement.querySelector(".product-stand-next");
    const prevBtn = slider.parentElement.querySelector(".product-stand-prev");
    const swiper = new Swiper(slider, {
      slidesPerView: 1,
      speed: 1500,
      spaceBetween: 10,
      loop: true,
      autoplay: false,
      navigation: { nextEl: nextBtn, prevEl: prevBtn },
    });
    nextBtn.addEventListener("click", () => {
      swiper.slideNext();
    });
    prevBtn.addEventListener("click", () => {
      swiper.slidePrev();
    });
  });
  $(".country-area ul li:first-child").addClass("active");
  $(".country-area").on("mouseleave", function () {
    $(".country-area ul li:not(:first-child)").removeClass("active");
    $(".country-area ul li:first-child").addClass("active");
  });
  $(".country-area ul li").on({
    mouseenter: function () {
      $(this).addClass("active").siblings().removeClass("active");
    },
  });
  $(".quantity__minus").on("click", function (e) {
    e.preventDefault();
    var input = $(this).siblings(".quantity__input");
    var value = parseInt(input.val());
    if (value > 1) {
      value--;
    }
    input.val(value.toString().padStart(2, "0"));
  });
  $(".quantity__plus").on("click", function (e) {
    e.preventDefault();
    var input = $(this).siblings(".quantity__input");
    var value = parseInt(input.val());
    value++;
    input.val(value.toString().padStart(2, "0"));
  });
  $(".guest-quantity__minus").on("click", function (e) {
    let type = $(this).data("type");
    e.preventDefault();
    var input = $(this).siblings(".quantity__input");
    var value = parseInt(input.val());
    if (type == "adult") {
      if (value > 1) {
        value--;
        $("#adult-qty").text(value.toString());
      }
    } else if (type == "child") {
      if (value > 0) {
        value--;
        $("#child-qty").text(value.toString());
      }
    }
    input.val(value == 0 ? value : value.toString());
  });
  $(".guest-quantity__plus").on("click", function (e) {
    e.preventDefault();
    let type = $(this).data("type");
    var input = $(this).siblings(".quantity__input");
    var value = parseInt(input.val());
    value++;
    if (type == "adult") {
      $("#adult-qty").text(value.toString());
    } else if (type == "child") {
      $("#child-qty").text(value.toString());
    }
    input.val(value.toString());
  });
  $(document).ready(function () {
    $(".qty-btn").on("click", function (e) {
      e.stopPropagation();
      $(this).next(".quantity-area").toggleClass("active");
      $(".quantity-area")
        .not($(this).next(".quantity-area"))
        .removeClass("active");
    });
    $(document).on("click", function (e) {
      if (!$(e.target).closest(".quantity-area").length) {
        $(".quantity-area").removeClass("active");
      }
    });
  });
  document
    .querySelector(".sidebar-button")
    .addEventListener("click", () =>
      document.querySelector(".main-menu").classList.toggle("show-menu")
    );
  $(".menu-close-btn").on("click", function () {
    $(".main-menu").removeClass("show-menu");
  });
  $(".right-sidebar-button").on("click", function () {
    $(".right-sidebar-menu").addClass("show-right-menu");
  });
  $(".right-sidebar-close-btn").on("click", function () {
    $(".right-sidebar-menu").removeClass("show-right-menu");
  });
  $(".select-input").on("click", function () {
    $(".custom-select-wrap").toggleClass("active");
  });
  $(document).on("click", ".destination-dropdown-icon", function (e) {
    e.stopPropagation();
    $(this).next(".destination-wrap").toggleClass("active");
    $(this)
      .parents(".destination-column")
      .siblings()
      .children(".destination-dropdown-card")
      .children(".destination-wrap")
      .removeClass("active");
  });
  $(document).on("click", function (e) {
    if (!$(e.target).closest(".destination-wrap").length) {
      $(".destination-wrap").removeClass("active");
    }
  });
  $(".searchbox-input").each(function () {
    var $container = $(this);
    $container.find(".option-list li").on("click", function () {
      var destinationText = $(this).find(".destination h6, h6").text();
      $container.find(".select-input input").val(destinationText);
      $container.find(".custom-select-wrap").removeClass("active");
    });
    $(document).on("click", function (event) {
      if (!$(event.target).closest($container).length) {
        $container.find(".custom-select-wrap").removeClass("active");
      }
    });
    $container
      .find(".custom-select-search-area input")
      .on("input", function () {
        var searchText = $(this).val().toLowerCase();
        $container.find(".option-list li").each(function () {
          var destinationText = $(this)
            .find(".destination h6")
            .text()
            .toLowerCase();
          if (destinationText.includes(searchText)) {
            $(this).show();
          } else {
            $(this).hide();
          }
        });
      });
  });
  $(".deatination_drop").select2({ closeOnSelect: true, width: "resolve" });
  const element = document.querySelectorAll(".badge__char");
  const step = 360 / element.length;
  element.forEach((elem, i) => {
    elem.style.setProperty("--char-rotate", i * step + "deg");
  });
  const foo = 360 / 7;
  for (let i = 0; i <= 7; i++) {
    console.log(i * foo + "deg");
  }
  $(".location-area").each(function () {
    var dealName = $(this).children(".location-list");
    if (dealName.width() >= $(this).width()) {
      dealName.addClass("scrollTextAni");
    }
  });
  $(function () {
    $(".choose-payment-method ul li").on("click", function () {
      $(".choose-payment-method ul li").removeClass("active");
      if ($(this).hasClass("stripe")) {
        $("#StripePayment").show();
        $("#OfflinePayment").hide();
        $(this).addClass("active");
      } else if ($(this).hasClass("paypal")) {
        $("#OfflinePayment").hide();
        $("#StripePayment").hide();
        $(this).addClass("active");
      } else if ($(this).hasClass("offline")) {
        $("#OfflinePayment").show();
        $("#StripePayment").hide();
        $(this).addClass("active");
      } else {
        $("#StripePayment").hide();
        $("#OfflinePayment").hide();
      }
    });
  });
  $("select").niceSelect();
  jQuery(document).ready(function ($) {
    $(".lists").on("click", function (event) {
      event.preventDefault();
      $(".list-grid-product-wrap")
        .addClass("list-group-wrapper")
        .removeClass("grid-group-wrapper");
    });
    $(".grid").on("click", function (event) {
      event.preventDefault();
      $(".list-grid-product-wrap")
        .removeClass("list-group-wrapper")
        .addClass("grid-group-wrapper");
    });
  });
  $(".grid-view li").on("click", function () {
    $(this).addClass("active").siblings().removeClass("active");
  });
  var startedFromIndexPage = false;
  $(document).on("click", ".StartSlideShowFirstImage", function () {
    startedFromIndexPage = true;
    $('a[data-fancybox="images"]').first().trigger("click");
    $.fancybox.getInstance().SlideShow.toggle();
  });
  $('[data-fancybox="images"]').fancybox({
    fullScreen: { autoStart: true },
    buttons: ["slideShow", "share", "close"],
    onSlideShowChange: function (instance, current, active) {
      console.info("SlideShow active? " + active);
      if (active && !startedFromIndexPage) {
        instance.next();
      }
      startedFromIndexPage = false;
    },
  });
  const togglePassword4 = document.getElementById("togglePassword4");
  const password4 = document.querySelector("#password4");
  if (togglePassword4) {
    togglePassword4.addEventListener("click", function (e) {
      const type =
        password4.getAttribute("type") === "password" ? "text" : "password";
      password4.setAttribute("type", type);
      this.classList.toggle("bi-eye");
    });
  }
  const togglePassword5 = document.getElementById("togglePassword5");
  const password5 = document.querySelector("#password5");
  if (togglePassword5) {
    togglePassword5.addEventListener("click", function (e) {
      const type =
        password5.getAttribute("type") === "password" ? "text" : "password";
      password5.setAttribute("type", type);
      this.classList.toggle("bi-eye");
    });
  }
  const togglePassword6 = document.getElementById("togglePassword6");
  const password6 = document.querySelector("#password6");
  if (togglePassword6) {
    togglePassword6.addEventListener("click", function (e) {
      const type =
        password6.getAttribute("type") === "password" ? "text" : "password";
      password6.setAttribute("type", type);
      this.classList.toggle("bi-eye");
    });
  }
})(jQuery);

// GSAP JS ANIMATION ==========================
// gsap.registerPlugin(ScrollTrigger);
// gsap.from('.flight', {
//     x: 1400,
//   scrollTrigger: {
//     trigger: '.flight',
//     start: 'top center',
//     end: 'bottom top',
//     pin: true,
//     scrub: true,
//     markers: false,
//   }
// });

// login form
