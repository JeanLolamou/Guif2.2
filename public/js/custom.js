/*global jQuery */
/* Contents
// ------------------------------------------------>
1.  WHOLE SCRIPT STRICT MODE SYNTAX
2.  SMARTMENU
3.  SMART MENU MOBILE MENU TOGGLE BUTTON
4.  TESTIMONIALS SLIDER
5.  PATNERS SLIDER
6.  BLOG SLIDER
7.  OUR TEAM SLIDER
8.  SCROLL TO TOP BUTTON
9. HEADER STICKY
10. GOOGLE MAP 
11. MENU SMOTH SCROLL DWON PAGE
12. LOADING SCREEEN
13. CONTER WIDGETS
14. SERACH TOGGLE BUTTON
15. ANIMATION FOR WEBSITE
*/
(function ($) {
  /*----------------- WHOLE SCRIPT STRICT MODE SYNTAX -----------------*/
  "use strict";
  /*----------------- SMARTMENU -----------------*/
  $('#main-menu').smartmenus({
    mainMenuSubOffsetX: -1,
    mainMenuSubOffsetY: 4,
    subMenusSubOffsetX: 6,
    subMenusSubOffsetY: -6
  });
  /*---------------- SMART MENU MOBILE MENU TOGGLE BUTTON ------------------*/
  var $mainMenuState = $('#main-menu-state');
  if ($mainMenuState.length) {
    // animate mobile menu
    $mainMenuState.on('click', function() {
      var $menu = $('#main-menu');
      if (this.checked) {
        $menu.hide().slideDown(250, function() { $menu.css('display', ''); });
      } else {
        $menu.show().slideUp(250, function() { $menu.css('display', ''); });
      }
    });
    // hide mobile menu beforeunload
    $(window).on('bind','beforeunload unload', function() {
      if ($mainMenuState[0].checked) {
        $mainMenuState[0].click();
      }
    });
  }
  /* ------------------ TESTIMONIALS SLIDER -----------------*/
  var our_clients_slider = $(".our_clients_slider");
  owc_slider(our_clients_slider, 1 , 1 , 1, 20, true,true);
  /* ------------------ PATNERS SLIDER -----------------*/
  var partners_slider = $(".partners_slider");
  owc_slider(partners_slider, 5 , 3 , 1, 0, false,true);
  /* ------------------ BLOG SLIDER -----------------*/
  var latests_news_slider = $(".latests_news_slider");
  owc_slider(latests_news_slider, 1 , 1 , 1, 20, false,false);

  

  /* ------------------ SLIDER FUNCTION -----------------*/

  function owc_slider(slider_object,desktop,tablate,mobile,margin,dots,play){
    slider_object.owlCarousel({
      loop: true,
      margin: margin,
      autoplay: play,
      smartSpeed: 450,
      dots: dots,
      nav: false,
      navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
      responsive: {
        0: {
          items: mobile
        },
        600: {
          items: tablate
        },
        1000: {
          items: desktop
        }
      }
    })
  }


  /* ------------------ OUR TEAM SLIDER -----------------*/
  var our_team_slider = $(".our_team_slider");
  team_slider(our_team_slider, 4 , 3 , 1, 0, true,true);
  function team_slider(slider_object,desktop,tablate,mobile,margin,dots,play){
    slider_object.owlCarousel({
      loop: true,
      margin: margin,
      autoplay: play,
      smartSpeed: 450,
      dots: dots,
      nav: true,
      navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
      responsive: {
        0: {
          items: mobile
        },
        600: {
          items: tablate
        },
        1000: {
          items: desktop
        }
      }
    })
  }
  /* ------------------ SCROLL TO TOP BUTTON -----------------*/
  var scrollToTop = document.querySelector(".scrollToTop");
  scrollToTop.addEventListener('click', function(e) {
    $("html, body").animate({
      scrollTop: 0
    }, 800);
    return false;
  });

  var last_known_scroll_position = 0;
  var scrollToTop = document.querySelector(".scrollToTop");
  window.addEventListener('scroll', function(e) {
    last_known_scroll_position = window.scrollY;
    if(last_known_scroll_position > 100)
    {
      scrollToTop.classList.add("fadeInScroll");
      scrollToTop.classList.remove("fadeOutScroll");
    }
    else
    {
      scrollToTop.classList.remove("fadeInScroll");
      scrollToTop.classList.add("fadeOutScroll");
    }
  });
  /* ------------------ HEADER STICKY -----------------*/  
  var last_known_scroll_position = 0;
  var navigation = document.querySelector("header");
  window.addEventListener('scroll', function(e) {
    last_known_scroll_position = window.scrollY;
    if(last_known_scroll_position > 50)
    {
      navigation.classList.add("sticky");
    }
    else
    {
      navigation.classList.remove("sticky");
    }
  });
  /* ------------------ GOOGLE MAP  -----------------*/
  // if HTML DOM Element that contains the map is found...
  if (document.getElementById('map-canvas')){
    var latLng = new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
    markerIcon = {
      url: 'http://image.flaticon.com/icons/svg/252/252025.svg',
      scaledSize: new google.maps.Size(60, 60),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(20,40)
    };
    var mapOptions = {
      zoom: 16,
      center: latLng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    var marker = new google.maps.Marker({
      map: map,
      animation: google.maps.Animation.DROP,
      position: latLng,
      icon: markerIcon
    });
  }
  /* ------------------ LOADING SCREEEN -----------------*/
  setTimeout(function(){
    $('body').addClass('loaded');
    // sponsor_slide_move
    $("#sponsor_slide_mover").toggleClass('sponsor_slide fadeInUp');
    // tesx_slide_move
    $("#text_slider").toggleClass('text_slide text_slide_move');
    // slider_btn
    $("#slider_btn").toggleClass('slider_btn slider_btn_move');
    // patrnerslide
    $("#patrnerslide").toggleClass('patrnerslide patrnerslide_move');
  }, 0);
  /* ------------------ COUNTER WIDGETS -----------------*/

  var $myDiv = $('#counter');
  if ( $myDiv.length){
    $(window).on('scroll', function() {
      var a = 0;
      var oTop = $('#counter').offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
      $('.counter-value').each(function() {
        var $this = $(this),
        countTo = $this.attr('data-count');
          $({countNum: $this.text() }).animate({ countNum: countTo },{ duration: 2000,easing: 'swing', step: function() {
              $this.text(Math.floor(this.countNum));
            },complete: function() {
              $this.text(this.countNum);
            }
          });
        });
        a = 1;
      }
    });
  }

 

  

  /* ------------------ SERACH TOGGLE BUTTON -----------------*/
  $('.search-option').hide();
  $(".main-search").on('click', function() {
    $('.search-option').animate({
      height:'toggle',
    });
  });
  

    $(window).on('resize',function(){
    if ($(window).width() > 991) {
      location.reload();
    }
  });
}(jQuery));

  /* ------------------ ACCORDION -----------------*/

var action = 'click';
var speed = "500";

$(document).ready(function() {
  // Question handler
  $('li.q').on(action,function () {
    // Get next element
      $(this).next()
        .slideToggle(speed)
        .siblings('li.a')
        .slideUp();
    // Get arrow for active question
    var arrow = $(this).children('.fa');
    // Remove the 'rotate' class for all images except the active.
    $('.fa').not(arrow).removeClass('rotate');
    // Toggle rotate class
    arrow.toggleClass('rotate');
  });
});


// decompte
  $(document).ready(function () {
    var menu = $('#decompte');
    var portfolio_position = $('#servicesa').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
            menu.removeClass('decompte').addClass('decompte_move');
        }
    });
});
  
  // test

  // programme
  $(document).ready(function () {
    var menu = $('#programme');
    var portfolio_position = $('#activite').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
            menu.removeClass('col-md-3 programme').addClass('col-md-3 programme_move');
        }
    });
});
  
  // test

  // transaction
  $(document).ready(function () {
    var menu = $('#transaction');
    var portfolio_position = $('#activite').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
            menu.removeClass('col-md-3 transaction').addClass('col-md-3 transaction_move');
        }
    });
});
  
  // test

   // transaction
  $(document).ready(function () {
    var menu = $('#excursion');
    var portfolio_position = $('#activite').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
            menu.removeClass('col-md-3 excursion').addClass('col-md-3 excursion_move');
        }
    });
});
  
  // test

  // rouge
  $(document).ready(function () {
    var menu = $('#rouge');
    var portfolio_position = $('#servicesa').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
            menu.removeClass('col-md-4 col-xl-4 col-sm-4 rouge').addClass('col-md-4 col-xl-4 col-sm-4 rouge_move');
        }
    });
});
  
  // test

   // vert
  $(document).ready(function () {
    var menu = $('#vert');
    var portfolio_position = $('#servicesa').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
            menu.removeClass('col-md-4 col-xl-4 col-sm-4 vert').addClass('col-md-4 col-xl-4 col-sm-4 vert_move');
        }
    });
});
  
  // test

    // intervenant
  $(document).ready(function () {
    var menu = $('#intervenant');
    var portfolio_position = $('#team').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
            menu.removeClass('row clearfix').addClass('row clearfix fadeInRight');
        }
    });
});
  
  // test

    // video
  $(document).ready(function () {
    var menu = $('#video');
    var portfolio_position = $('#video').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
            menu.addClass('fadeInUp');
        }
    });
});

   // Photo presi
  $(document).ready(function () {
    var menu = $('#photoprac');
    var portfolio_position = $('#photoprac').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
            menu.removeClass('col-md-12').addClass('col-md-12 flipInX');
        }
    });
});


  // sponsor
  $(document).ready(function () {
    var menu = $('#sponsor');
    var portfolio_position = $('#sponsor').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
            menu.removeClass('col-lg-12').addClass('col-lg-12 fadeInUp');
        }
    });
});
  
  // test

    // partenaire
  $(document).ready(function () {
    var menu = $('#partenaire');
    var portfolio_position = $('#partenaire').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
          menu.removeClass('services').addClass('services flipInX');
            
        }
    });
});
  
  // test

      // FOOTER
  $(document).ready(function () {
    var menu = $('#footer');
    var portfolio_position = $('#footer').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
          menu.addClass('fadeIn');
            
        }
    });
});
  
  // test

      // lieu forum
  $(document).ready(function () {
    var menu = $('#lieu');
    var menu2 = $('#lieu_slide');
    var portfolio_position = $('#lieu').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
          menu.removeClass('col-md-4').addClass('col-md-4 slideInLeft');
          menu2.removeClass('col-md-8').addClass('col-md-8 slideInRight');
            
        }
    });
});



      //map lieu forum
  $(document).ready(function () {
    var menu = $('#map');
    var menu2 = $('#map');
    var portfolio_position = $('#map').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
          menu.removeClass('map_con').addClass('map_con slideInUp');
            
        }
    });
});


    // beneficie
  $(document).ready(function () {
    var menu = $('#proposition');
    var portfolio_position = $('#proposition').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
          menu.removeClass('row').addClass('row slideInUp');
            
        }
    });
});



    // hotel
  $(document).ready(function () {
    var menu = $('#hotelimage');
    var menu2 = $('#hoteltext');
    var portfolio_position = $('#hotel').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
          menu.removeClass('col-lg-6').addClass('col-lg-6 slideInUp');
          menu2.removeClass('col-lg-6').addClass('col-lg-6 slideInUp2');
            
        }
    });
});


   // transport
  $(document).ready(function () {
    var menu = $('#transporttext');
    var menu2 = $('#transportimage');
    var portfolio_position = $('#transport').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
          menu.removeClass('col-lg-6').addClass('col-lg-6 slideInUp');
          menu2.removeClass('col-lg-6').addClass('col-lg-6 slideInUp2');
            
        }
    });
});


   // hebergement
  $(document).ready(function () {
    var menu2 = $('#hebergementtext');
    var menu = $('#hebergementimage');
    var portfolio_position = $('#hebergement').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
          menu.removeClass('col-lg-6').addClass('col-lg-6 slideInUp');
          menu2.removeClass('col-lg-6').addClass('col-lg-6 slideInUp2');
            
        }
    });
});

  // visa
  $(document).ready(function () {
    var menu2 = $('#visatext');
    var menu = $('#visaimage');
    var portfolio_position = $('#visa').offset().top - window.innerHeight;

    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= portfolio_position) {
          menu.removeClass('col-lg-6').addClass('col-lg-6 slideInUp');
          menu2.removeClass('col-lg-6').addClass('col-lg-6 slideInUp2');
            
        }
    });
});