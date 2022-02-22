

$(document).ready(function ($) {

  'use strict';

 
    // Products Slick
    $('.products-slick').each(function () {
    var $this = $(this),
      $nav = $this.attr('data-nav');

    $this.slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      infinite: true,
      speed: 300,
      dots: false,
      arrows: true,
      appendArrows: $nav ? $nav : false,
      responsive: [{
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      ]
    });
  });



  /////////////////////////////////////////

  // Product Main img Slick
  $('#product-main-img').slick({
    infinite: true,
    speed: 300,
    dots: false,
    arrows: true,
    fade: true,
    asNavFor: '#product-imgs',
  });

  // Product imgs Slick
  $('#product-imgs').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    centerMode: true,
    focusOnSelect: true,
    centerPadding: 0,
    vertical: true,
    asNavFor: '#product-main-img',
    responsive: [{
      breakpoint: 991,
      settings: {
        vertical: false,
        arrows: false,
        dots: true,
      }
    },
    ]
  });

  // Product img zoom
  var zoomMainProduct = document.getElementById('product-main-img');
  if (zoomMainProduct) {
    $('#product-main-img .product-preview').zoom();
  }


  // Header carousel
  $(".header-carousel").owlCarousel({
    autoplay: true,
    autoplaySpeed: 4000,
    items: 1,
    dots: true,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>'
    ]
  });



  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    margin: 25,
    dots: false,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>'
    ],
    responsive: {
      0: {
        items: 1
      },
      992: {
        items: 2
      }
    }
  });

  // i. client (carousel)

  // $('#client').owlCarousel({
  //   items: 8,
  //   loop: true,
  //   smartSpeed: 1000,
  //   autoplay: true,
  //   dots: false,
  //   autoplayHoverPause: true,
  //   responsive: {
  //     0: {
  //       items: 3
  //     },
  //     600: {
  //       items: 6

  //     },
  //     1200: {
  //       items: 8
  //     }
  //   }
  // });


  $('.play').on('click', function () {
    owl.trigger('play.owl.autoplay', [1000])
  })
  $('.stop').on('click', function () {
    owl.trigger('stop.owl.autoplay')
  })

  $(document).ready(function () {

    if ($('.brands_slider').length) {
      var brandsSlider = $('.brands_slider');

      brandsSlider.owlCarousel(
        {
          loop: true,
          autoplay: true,
          autoplayTimeout: 5000,
          nav: false,
          dots: false,
          autoWidth: true,
          items: 8,
          margin: 42
        });

      if ($('.brands_prev').length) {
        var prev = $('.brands_prev');
        prev.on('click', function () {
          brandsSlider.trigger('prev.owl.carousel');
        });
      }

      if ($('.brands_next').length) {
        var next = $('.brands_next');
        next.on('click', function () {
          brandsSlider.trigger('next.owl.carousel');
        });
      }
    }


  });
  //=================================== Twitter Feed  ===============================//
  $("#twitter").tweet({
    modpath: 'js/twitter/index.php',
    username: "envato", // Change for Your Username
    count: 5,
    loading_text: "Loading tweets..."
  });

  //=================================== Flikr Feed  ========================================//
  $('#flickr').jflickrfeed({
    limit: 8, //Number of images to be displayed
    qstrings: {
      id: '36587311@N08'//Change this to any Flickr Set ID as you prefer in http://idgettr.com/
    },
    itemTemplate: '<li><a href="{{image_b}}" class="fancybox"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
  });

  //=================================== Sticky nav ===================================//

  $("#header").sticky({ topSpacing: 0 });

  //=================================== datepicker ===================================//
  $(".date-input").datepicker();

  //=================================== Loader =====================================//
  jQuery(window).load(function () {
    jQuery(".status").fadeOut();
    jQuery(".preloader").delay(1000).fadeOut("slow");
  })

  //=================================== Carousel Services  ==============================//
  $("#single-carousel, #single-carousel-sidebar").owlCarousel({
    items: 1,
    autoPlay: false,
    navigation: true,
    autoHeight: true,
    slideSpeed: 400,
    singleItem: true,
    pagination: false
  });

  //=================================== Carousel features  ==================================//
  $("#slide-features").owlCarousel({
    autoPlay: false,
    items: 1,
    navigation: true,
    autoHeight: true,
    slideSpeed: 400,
    singleItem: true,
    pagination: true
  });

  //=================================== Carousel Boxes  ==================================//
  $("#boxes-carousel").owlCarousel({
    autoPlay: false,
    items: 5,
    navigation: true,
    itemsDesktopSmall: [1024, 4],
    itemsTablet: [768, 3],
    itemsMobile: [500, 2],
    pagination: false
  });

  //=================================== Carousel teams  ==================================//
  $("#team-carousel").owlCarousel({
    autoPlay: false,
    items: 3,
    navigation: true,
    itemsDesktopSmall: [1024, 3],
    itemsTablet: [768, 2],
    itemsMobile: [500, 1],
    pagination: false
  });

  $("#team-carousel-02, #carousel-boxes-2").owlCarousel({
    autoPlay: false,
    items: 2,
    navigation: false,
    itemsDesktopSmall: [1024, 3],
    itemsTablet: [768, 2],
    itemsMobile: [500, 1],
    pagination: false
  });

  //=================================== Carousel Sponsor  ==================================//
  $("#sponsors").owlCarousel({
    autoPlay: false,
    items: 8,
    navigation: false,
    itemsDesktop: [1199, 8],
    itemsDesktopSmall: [1024, 7],
    itemsTablet: [768, 4],
    itemsMobile: [500, 3],
    pagination: true
  });

  //=================================== Carousel testimonials  ===============================//
  $("#testimonials").owlCarousel({
    items: 1,
    autoPlay: false,
    navigation: false,
    autoHeight: true,
    slideSpeed: 400,
    singleItem: true,
    pagination: true
  });

  //=================================== Carousel Twitter  ===============================//
  $(".tweet_list").owlCarousel({
    items: 1,
    autoPlay: false,
    navigation: false,
    autoHeight: true,
    slideSpeed: 400,
    singleItem: true,
    pagination: true
  });

  //=================================== Subtmit Form  ===================================//
  $('#form-contact').submit(function (event) {
    event.preventDefault();
    var url = $(this).attr('action');
    var datos = $(this).serialize();
    $.get(url, datos, function (resultado) {
      $('#result').html(resultado);
    });
  });

  //=================================== Form Newslleter  =================================//
  $('#newsletterForm').submit(function (event) {
    event.preventDefault();
    var url = $(this).attr('action');
    var datos = $(this).serialize();
    $.get(url, datos, function (resultado) {
      $('#result-newsletter').html(resultado);
    });
  });

  //=================================== Ligbox  ===========================================//
  $(".fancybox").fancybox({
    openEffect: 'elastic',
    closeEffect: 'elastic',

    helpers: {
      title: {
        type: 'inside'
      }
    }
  });

  //=============================  tooltip demo ===========================================//
  $('.tooltip-hover').tooltip({
    selector: "[data-toggle=tooltip]",
    container: "body"
  });

  // slider-range
  $("#slider-range").slider({});

  //=================================== Totop  ============================================//
  $().UItoTop({
    scrollSpeed: 500,
    easingType: 'linear'
  });

  //=================================== Portfolio Filters  ==============================//
  $(window).load(function () {
    var $container = $('.portfolioContainer');
    $container.isotope({
      filter: '*',
      animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false
      }
    });
    $('.portfolioFilter a').click(function () {
      $('.portfolioFilter .current').removeClass('current');
      $(this).addClass('current');
      var selector = $(this).attr('data-filter');
      $container.isotope({
        filter: selector,
        animationOptions: {
          duration: 750,
          easing: 'linear',
          queue: false
        }
      });
      return false;
    });
  });
});

$(document).ready(function(){
  $('.customer-logos').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    
    responsive: [{
      breakpoint: 1000,
      settings: {
        slidesToShow: 5
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  });
});



