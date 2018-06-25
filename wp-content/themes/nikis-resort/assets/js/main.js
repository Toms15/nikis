jQuery(document).foundation();
jQuery(document).ready(function() {

  // ----------------------------------------
  // Cookie Bar
  // ----------------------------------------
  jQuery.cookieBar({
   message: "Cliccando su OK, l’utente accetta l’utilizzo dei cookie di terze parti. Per maggiori informazioni, anche in ordine alla disattivazione, è possibile consultare l'<a class='cookie-link-2' href='https://nikis.app/cookie/'>informativa cookie completa</a>.",
   acceptText: 'Ok',
   fixed: true,
   bottom: true
  });

  // ----------------------------------------
  // Sticky Header
  // ----------------------------------------
  jQuery("header").sticky({topSpacing:30});

  // ----------------------------------------
  // Header Mobile
  // ----------------------------------------
  jQuery('.menu__mobile').on('click', function() {
    jQuery('.header__menu_mobile').toggleClass('show');
    jQuery('.menu__mobile').toggleClass('shrink');
  });

  // ----------------------------------------
  // AOS
  // ----------------------------------------
  AOS.init({
    disable: 'mobile'
  });

  // ----------------------------------------
  // Reserve Form
  // ----------------------------------------
  var widthReserve = jQuery('.top__bar--reserve').width();
  jQuery('.top__bar--reserve-form').css('width', widthReserve);
  
  jQuery('.top__bar--reserve').on('click', function() {
    jQuery('.top__bar--reserve-form').toggleClass('show');
  });

  jQuery('.wpcf7-select').select2({
    minimumResultsForSearch: Infinity
  }); 

  jQuery('.wpcf7-submit').addClass('is--disabled');

  jQuery('.checkbox__material label span').on('click', function() {
    jQuery('.checkbox__material').toggleClass('check');
    jQuery('.wpcf7-submit').toggleClass('is--disabled');
  });

  // ----------------------------------------
  // Multilanguage
  // ----------------------------------------
  var widthLanguage = jQuery('.top__bar--lang').width();
  jQuery('.top__bar--lang-change').css('width', widthLanguage);

  jQuery('.top__bar--lang').on('click', function() {
    jQuery('.top__bar--lang-change').toggleClass('show');
    jQuery('.top__bar--lang i.fa-angle-down').toggleClass('is--rotate');
  });

  // ----------------------------------------
  // Magnific Pop up
  // ----------------------------------------
  jQuery('.section__container--gallery').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    gallery: {
      enabled:true,

      preload: [1,3],

      navigateByImgClick: true,

      arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',

      tPrev: 'Previous (Left arrow key)',
      tNext: 'Next (Right arrow key)',
      tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
    }
  });
  
  // ----------------------------------------
  // Slider
  // ----------------------------------------
  $('.swiper-grid-container').each(function (index) {

    $(this).attr('id', 'slider-' + index);
    

    $(this).siblings('.swiper-button-next').attr('id', 'swiper-button-next-slider-' + index);
    $(this).siblings('.swiper-button-prev').attr('id', 'swiper-button-prev-slider-' + index);



    var mySwiper = new Swiper ($('#slider-' + index), {
      // Optional parameters
      direction: 'horizontal',
      loop: true,

      autoplay: {
        delay: 5000,
      },

      navigation: {
        nextEl: '#swiper-button-next-slider-' + index,
        prevEl: '#swiper-button-prev-slider-' + index,
      },
    });
  });

  // ----------------------------------------
  // Hero Slider
  // ----------------------------------------
  var mySwiper = new Swiper ('.swiper-hero', {
    // Optional parameters
    direction: 'vertical',
    effect: 'fade',
    loop: true,

    autoplay: {
      delay: 5000,
    },
  })

  // ----------------------------------------
  // CTA Slider
  // ----------------------------------------
  var mySwiper = new Swiper ('.swiper-cta', {
    // Optional parameters
    direction: 'vertical',
    loop: true,

    autoplay: {
      delay: 4000,
    },
  })

  // ----------------------------------------
  // Pop up share
  // ----------------------------------------
  jQuery('.pop').click(function(event){
    event.preventDefault();
    // console.log('clicked');

    newwindow=window.open(jQuery(this).attr('href'),'name','height=450,width=550');
    if (window.focus) {newwindow.focus()}
      return false;
  });

  // ----------------------------------------
  // Google Maps
  // ----------------------------------------
  jQuery(function() {
    function initialize() {       
      var mapOptions = {
        center: new google.maps.LatLng(43.3132208,12.404928),
        zoom: 14,
        scrollwheel: false,
        styles: [
        {
          "featureType": "administrative",
          "elementType": "labels.text.fill",
          "stylers": [
          {
            "color": "#6195a0"
          }
          ]
        },
        {
          "featureType": "administrative.province",
          "elementType": "geometry.stroke",
          "stylers": [
          {
            "visibility": "off"
          }
          ]
        },
        {
          "featureType": "landscape",
          "elementType": "geometry",
          "stylers": [
          {
            "lightness": "0"
          },
          {
            "saturation": "0"
          },
          {
            "color": "#f5f5f2"
          },
          {
            "gamma": "1"
          }
          ]
        },
        {
          "featureType": "landscape.man_made",
          "elementType": "all",
          "stylers": [
          {
            "lightness": "-3"
          },
          {
            "gamma": "1.00"
          }
          ]
        },
        {
          "featureType": "landscape.natural.terrain",
          "elementType": "all",
          "stylers": [
          {
            "visibility": "off"
          }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "all",
          "stylers": [
          {
            "visibility": "off"
          }
          ]
        },
        {
          "featureType": "poi.park",
          "elementType": "geometry.fill",
          "stylers": [
          {
            "color": "#bae5ce"
          },
          {
            "visibility": "on"
          }
          ]
        },
        {
          "featureType": "road",
          "elementType": "all",
          "stylers": [
          {
            "saturation": -100
          },
          {
            "lightness": 45
          },
          {
            "visibility": "simplified"
          }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "all",
          "stylers": [
          {
            "visibility": "simplified"
          }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry.fill",
          "stylers": [
          {
            "color": "#fac9a9"
          },
          {
            "visibility": "simplified"
          }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "labels.text",
          "stylers": [
          {
            "color": "#4e4e4e"
          }
          ]
        },
        {
          "featureType": "road.arterial",
          "elementType": "labels.text.fill",
          "stylers": [
          {
            "color": "#787878"
          }
          ]
        },
        {
          "featureType": "road.arterial",
          "elementType": "labels.icon",
          "stylers": [
          {
            "visibility": "off"
          }
          ]
        },
        {
          "featureType": "transit",
          "elementType": "all",
          "stylers": [
          {
            "visibility": "simplified"
          }
          ]
        },
        {
          "featureType": "transit.station.airport",
          "elementType": "labels.icon",
          "stylers": [
          {
            "hue": "#0a00ff"
          },
          {
            "saturation": "-77"
          },
          {
            "gamma": "0.57"
          },
          {
            "lightness": "0"
          }
          ]
        },
        {
          "featureType": "transit.station.rail",
          "elementType": "labels.text.fill",
          "stylers": [
          {
            "color": "#43321e"
          }
          ]
        },
        {
          "featureType": "transit.station.rail",
          "elementType": "labels.icon",
          "stylers": [
          {
            "hue": "#ff6c00"
          },
          {
            "lightness": "4"
          },
          {
            "gamma": "0.75"
          },
          {
            "saturation": "-68"
          }
          ]
        },
        {
          "featureType": "water",
          "elementType": "all",
          "stylers": [
          {
            "color": "#eaf6f8"
          },
          {
            "visibility": "on"
          }
          ]
        },
        {
          "featureType": "water",
          "elementType": "geometry.fill",
          "stylers": [
          {
            "color": "#c7eced"
          }
          ]
        },
        {
          "featureType": "water",
          "elementType": "labels.text.fill",
          "stylers": [
          {
            "lightness": "-49"
          },
          {
            "saturation": "-53"
          },
          {
            "gamma": "0.79"
          }
          ]
        }
        ]  
      };
      var map = new google.maps.Map(document.getElementById("map-nikis"),
        mapOptions);

      // var icon = {
      //   url: 'images/marker.png',
      // }

      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(43.3132208,12.404928),
        map: map,
        // icon: icon
      });
    }

    if($('#cookie-bar').length) {
      $('.cb-enable').on('click', initialize);
    } else {
      initialize();
    }

  });

	// ----------------------------------------
  // Fix Footer on bottom page
  // ----------------------------------------
  function fixfooter()
  { 
   if(jQuery('footer').length > 0){
     var docHeight = jQuery(window).height();
     var footerHeight = jQuery('footer').height();
     var footerTop = jQuery('footer').position().top + footerHeight;
     if (footerTop < docHeight) {
      	jQuery('footer').css('margin-top', (docHeight - footerTop - 1) + 'px');
    	}
  	}
  };
  if (jQuery(window).width() > 767) {
    fixfooter();  
  };
  jQuery(window).resize(function() {
    fixfooter();  
  });

});