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
  owc_slider(our_clients_slider, 1 , 1 , 1, 20, true);
  /* ------------------ PATNERS SLIDER -----------------*/
  var partners_slider = $(".partners_slider");
  owc_slider(partners_slider, 5 , 3 , 1, 0, false);
  /* ------------------ BLOG SLIDER -----------------*/
  var latests_news_slider = $(".latests_news_slider");
  owc_slider(latests_news_slider, 2 , 1 , 1, 20, false);
  /* ------------------ OUR TEAM SLIDER -----------------*/
  var our_team_slider = $(".our_team_slider");
  owc_slider(our_team_slider, 4 , 3 , 1, 0, false);
  /* ------------------ SLIDER FUNCTION -----------------*/

  function owc_slider(slider_object,desktop,tablate,mobile,margin,dots){
    slider_object.owlCarousel({
      loop: true,
      margin: margin,
      autoplayTimeout: 5000,
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