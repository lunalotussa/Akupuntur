"use strict"; // start of use strict


$(document).ready(function () {
    $(window).trigger("resize");
    backgroundImg_init();
    top_panel_search_init();
    sticky_set();
    init_classic_menu();
    heightFull_init();
    accordion_init();
    toggle_init();
    loginshow();
    checkout_open_field();
    counter_init();
    filter_init();
    lightbox_init();
    masonry_init();
    scroll_top_init();
    twitter_init();
    pageSliders_init();
    infobox_init();
    googleMap_init();
    gridList_init();
    shop_price_slider();
    calendar_init();
    widgetMenu_init();
    revolution_slider();
    YTVideo_init();
    contact_form_init();
    cws_touch_events_fix ();
});
 

$(window).load(function(){
    init_classic_menu_resize();
    progress_bar_loader();
    pageSliders_init();
});


$(window).resize(function(){
    init_classic_menu_resize();
    heightFull_init();
    pageSliders_init();
    masonry_init();
    sticky_set();
});


$(window).scroll(function(){
	progress_bar_loader ();
});


$(window).on('load', function() {
	$("body").imagesLoaded(function(){
		$(".preloader-wave").fadeOut();
		$("#preloader").delay(200).fadeOut("slow").remove();
	});
});


function cws_touch_events_fix (){
    if ( is_mobile_device() ){
        jQuery( ".container" ).on( "mouseenter", ".hover-effect, .product .pic", function (e){
            e.preventDefault();
            jQuery( this ).trigger( "hover" );
        });
        jQuery( ".main-nav" ).on( "hover", ".mobile_nav .button_open, .mobile_nav li > a", function ( e ){
            e.preventDefault();
            jQuery( this ).trigger( "click" );
        });
    }
}


// Background image
function backgroundImg_init(){
    var pageSection = $(".home-section, .page-section, .small-section, .blog-section, .small-section-2, .breadcrumb-section");
    pageSection.each(function(indx){
        if ($(this).attr("data-background")){
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });
}


// Function for block height 100%
function height_line(height_object, height_donor){
    height_object.height(height_donor.height());
    height_object.css({
        "line-height": height_donor.height() + "px"
    });
}


// Top panel search
function top_panel_search_init(){ 
	$(".main-nav .search-menu").on('click', function(){ 
		$(this).parents('.main-nav').find('.search-menu-cont').fadeToggle(200); 
		$(this).parents('.main-nav').addClass('search-on'); 
		$(this).parents('.main-nav').find('.search-menu-cont .search-field').focus(); 
	}) 
	$('.main-nav .search-menu-cont .search-back-button').on('click', function(){ 
		$(this).parents('.main-nav').find('.search-menu-cont').fadeToggle(200); 
		$(this).parents('.main-nav').removeClass('search-on'); 
	}) 
}

// Classic menu resize
var mobile_nav = $(".mobile-nav");
var desktop_nav = $(".desktop-nav");
function init_classic_menu_resize(){
    $(".mobile-on .desktop-nav > ul").css("max-height", $(window).height() - $(".main-nav").height() - 20 + "px");
    if ($(window).width() <= 1024) {
        $(".main-nav").addClass("mobile-on");
    } else 
        if ($(window).width() > 1024) {
            $(".main-nav").removeClass("mobile-on");
            desktop_nav.show();
        }
}
 

// Sticky function
function sticky_set () {
    if(is_mobile_device ()) {
        $(".js-stick").unstick();
        $(".main-nav").removeClass('small-height');
    } else if (!($('.sticky-wrapper').length)) {
        $(".js-stick").sticky({
            topSpacing: 0
        });
    }
}


// Classic menu
function init_classic_menu(){

    // Navbar sticky 
    height_line($(".inner-nav > ul > li > a"), $(".main-nav"));
    height_line(mobile_nav, $(".main-nav"));   
    mobile_nav.css({
        "width": $(".main-nav").height() + "px"
    });

    // Transpaner menu
    if ($(".main-nav").hasClass("transparent")){
       $(".main-nav").addClass("js-transparent"); 
    }       
    $(window).scroll(function(){        
        if ($('.sticky-header').hasClass('top-fixed')) {
            if ($(window).scrollTop() > 10) {
                $(".js-transparent").removeClass("transparent");
                $(".main-nav, .nav-logo-wrap .logo, .mobile-nav, .search-back-button").addClass("small-height");
            }
            else {
                $(".js-transparent").addClass("transparent");
                $(".main-nav, .nav-logo-wrap .logo, .mobile-nav, .search-back-button").removeClass("small-height");
            }
        };
    });

    // Mobile menu toggle
    mobile_nav.on('click', function(){
        if (desktop_nav.hasClass("js-opened")) {
            desktop_nav.slideUp("slow", "easeOutExpo").removeClass("js-opened");
            $(this).removeClass("active");
        } else {
            desktop_nav.slideDown("slow", "easeOutQuart").addClass("js-opened");
            $(this).addClass("active");  
        }
    });
    desktop_nav.find("a:not(.nav-submenu)").on('click', function(){
        if (mobile_nav.hasClass("active")) {
            desktop_nav.slideUp("slow", "easeOutExpo").removeClass("js-opened");
            mobile_nav.removeClass("active");
        }
    });
    var navSubmenu = $(".nav-submenu");
    var navThisLi;
    navSubmenu.on('click', function(){
        if ($(".main-nav").hasClass("mobile-on")) {
            navThisLi = $(this).parent("li:first");
            if (navThisLi.hasClass("js-opened")) {
                navThisLi.find(".submenu:first").slideUp(function(){
                    navThisLi.removeClass("js-opened");
                });
            } else {
                navThisLi.addClass("js-opened");
                navThisLi.find(".submenu:first").slideDown();
            }
            return false;
        }
    });
    navThisLi = navSubmenu.parent("li");
    navThisLi.hover(function(){
        if (!($(".main-nav").hasClass("mobile-on"))) {
        
            $(this).find(".submenu:first").stop(true, true).fadeIn("fast");
        }
    }, function(){
        if (!($(".main-nav").hasClass("mobile-on"))) {
            $(this).find(".submenu:first").stop(true, true).delay(100).fadeOut("fast");
        }
    });
}



// Mobile device detect 
function is_mobile_device () {
  if ( ( $(window).width()<767) || (navigator.userAgent.match(/(Android|iPhone|iPod|iPad)/) ) ) {
    return true;
  } else {
    return false;
  }
}


// Height full
function heightFull_init(){
    $(".height-full").height($(window).height());
}


// Accordion
function accordion_init(){
    if ($(".accordion > dt > a").hasClass("active")) {
        $(this).parent().next().css({display: "block"}).slideDown("easeOutExpo");
    };
	$(".accordion > dt > a").on('click', function(){
	    var current = $(this).parent().next("dd");
	    $(this).parents(".accordion").find("dt > a").removeClass("active");
        $(this).addClass("active");
        $(this).parents(".accordion").find("dd").slideUp("easeInExpo");
        $(this).parent().next().slideDown("easeOutExpo");
	    return false;
	});
};


// Toggle
function toggle_init(){
    if ($(".toggle > dt > a").hasClass("active")) {
        $(this).parent().next().css({display: "block"}).slideDown("easeOutExpo");
    };
    $(".toggle > dt > a").on('click', function(){
        if ($(this).hasClass("active")) {
            $(this).parent().next().slideUp("easeOutExpo");
            $(this).removeClass("active");
        }
        else {
            var current = $(this).parent().next("dd");
            $(this).addClass("active");
            $(this).parent().next().slideDown("easeOutExpo");
        }
        return false;
    });
};


// Login show
function loginshow (){
    $(".showlogin").on('click', function(){
        $("form.login").slideToggle("easeOutExpo");
    })
    $(".showcode").on('click', function(){
        $("form.code").slideToggle("easeOutExpo");
    })
}


// Checkout open field
function checkout_open_field() {
    $(".payment_method_cheque input, .payment_method_paypal input, .payment_method_bank input").on("click", function(){
        var x = $(this).parent().children(".payment_box");
        if ( $(x).hasClass("active") ) {
            return false;
        } else {
            $('.payment_method_cheque .payment_box, .payment_method_paypal .payment_box, .payment_method_bank .payment_box').removeClass("active").slideUp();
            $(x).addClass("active").slideDown(300);
        }
    })
}


// Counter
function counter_init(){
    $(".count-number").appear(function(){
        var count = $(this);
        count.countTo({
            from: 0,
            to: count.html(),
            speed: 1300,
            refreshInterval: 60,
        });
    });
}


// Filter
function filter_init(){
    var fselector = 0;
    var filter_mode;
    if ($("#filter-grid").hasClass("masonry")){
        filter_mode = "masonry";
    } else{
        filter_mode = "fitRows"
    }
    $("#filter-grid").imagesLoaded(function(){
        $("#filter-grid").isotope({
            itemSelector: '.all',
            layoutMode: filter_mode,
            filter: fselector
        });
    });
    $(".filter").on('click', function(){
        $(".filter").removeClass("active");
        $(this).addClass("active");
        fselector = $(this).attr('data-filter');
         
        $("#filter-grid").isotope({
            itemSelector: '.all',
            layoutMode: filter_mode,
            filter: fselector
        });
        return false;
    });   
}


// Lightbox
function lightbox_init(){
    $(".lightbox").magnificPopup({
        gallery: {
            enabled: true
        }
    });
    $(".lightbox-single").magnificPopup({
        type: 'image'
    });
}


// Masonry
function masonry_init(){
    $(".masonry").imagesLoaded(function(){
        $(".masonry").masonry();
    });
}


// Progress bar
function progress_bar_loader(){
	$('.skill-bar-progress').each(function(){
		var el = this;
		if (is_visible(el)){
			if ($(el).attr("processed")!="true"){
				$(el).css("width","0%");
				$(el).attr("processed","true");
				var val = parseInt($(el).attr("data-value"), 10);
				var fill = 0;
				var speed = val/100; 
				var timer = setInterval(function (){
					if (fill<val){
						fill += 1;
						$(el).css("width",String(fill)+"%");
						var ind = $(el).parent().parent().find(".skill-bar-perc");
						$(ind).text(fill+"%");
					}
				},(10/speed));      
			}
		}
	});
}


// Visible function
function is_visible (el){
	var w_h = $(window).height();
	var dif = $(el).offset().top - $(window).scrollTop();
	if ((dif > 0) && (dif<w_h)){
		return true;
	} else {
		return false;
	}
}


// Scroll top function
function scroll_top_init(){
    $('#scroll-top').on( 'click', function() {
        $('html, body').animate({scrollTop: 0});
        return false;
    });
    if( $(window).scrollTop() > 500 ) {
        $('#scroll-top').fadeIn();
    } else {
        $('#scroll-top').fadeOut();
    } 
    $(window).scroll(function(){
        if( $(window).scrollTop() > 500 ) {
            $('#scroll-top').fadeIn();
        } else {
            $('#scroll-top').fadeOut();
        } 
    })
}


// Wrap this
$.fn.WrapThis = function(arg1, arg2) { /*=Takes 2 arguments, arg1 is how many elements to wrap together, arg2 is the element to wrap*/

  var wrapClass = "column"; //=Set class name for wrapping element

  var itemLength = $(this).find(arg2).length; //=Get the total length of elements
  var remainder = itemLength%arg1; //=Calculate the remainder for the last array
  var lastArray = itemLength - remainder; //=Calculate where the last array should begin

  var arr = [];

  if($.isNumeric(arg1)) {
    $(this).find(arg2).each(function(idx, item) {
      var newNum = idx + 1;

      if(newNum%arg1 !== 0 && newNum <= lastArray){
          arr.push(item);
      }
      else if(newNum%arg1 == 0 && newNum <= lastArray) {
          arr.push(item);
          var column = $(this).pushStack(arr);
          column.wrapAll('<div class="' + wrapClass + '"/>'); //=If the array reaches arg1 setting then wrap the array in a column
          arr = [];
      }
      else if(newNum > lastArray && newNum !== itemLength){ //=If newNum is greater than the lastArray setting then start new array of elements
          arr.push(item);
      }
      else { //=If newNum is greater than the length of all the elements then wrap the remainder of elements in a column
          arr.push(item);
          var column = $(this).pushStack(arr);
          column.wrapAll('<div class="' + wrapClass + '"/>');
          arr = []
      }
    });
  }
}


// Twitter carousel
function twitter_init(){
    $('.twitter-carousel').tweet({
        username: 'Creative_WS',
        count: 8,
        loading_text: 'loading twitter feed...',
        template: "<i class='fa fa-twitter twitt'></i><p><a class='link-color' href='{user_url}'>@{screen_name}</a>{join}{text}<br>{time}</p>"
    });
    $('.twitter-carousel .tweet_list').WrapThis(2, 'li');
    $('.twitter-carousel .tweet_list').addClass("widget-slider-twitt").addClass("nav-alt-1").addClass("owl-carousel");

    $('.twitter-footer').tweet({
        username: 'Creative_WS',
        count: 2,
        loading_text: 'loading twitter feed...',
        template: "<i class='fa fa-twitter twitt'></i><p><a class='link-color' href='{user_url}'>@{screen_name}</a>{join}{text}<br>{time}</p>"
    });
    $('.twitter-carousel .tweet_list').WrapThis(2, 'li');
}


// Page sliders
function pageSliders_init(){
    $(".slider-1").owlCarousel({
        items: 3,
        itemsDesktop: [1199, 2],
        itemsTablet: [998, 2],
        itemsTabletSmall: [768, 1],
        itemsMobile: [480, 1],
        stopOnHover: true,
        navigation: false,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
    }); 

    $(".slider-2").owlCarousel({
        singleItem: true,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
    });

    $(".slider-3").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 3],
        itemsTabletSmall: [768, 2],
        itemsMobile: [480, 1],
        navigation: false,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
    });

    $(".slider-4").owlCarousel({
        items: 5,
        itemsDesktop: [1700, 5],
        itemsDesktopSmall: [1199, 3],
        itemsTabletSmall: [768, 2],
        itemsMobile: [480, 1],
        navigation: false,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
    });

    $(".widget-slider-1").owlCarousel({
        items: 3,
        itemsDesktop: [1199, 3],
        itemsTabletSmall: [768, 3],
        itemsMobile: [480, 1],
        navigation: true,
        navigationText: ["<i class='flaticon-arrows-1'></i>", "<i class='flaticon-arrows-2'></i>"]
    });

    $(".widget-slider-2").owlCarousel({
        singleItem: true,
        navigation: true,
        navigationText: ["<i class='flaticon-arrows-1'></i>", "<i class='flaticon-arrows-2'></i>"]
    });
    $(".widget-slider-twitt").owlCarousel({
        singleItem: true,
        navigation: true,
        navigationText: ["<i class='flaticon-arrows-1'></i>", "<i class='flaticon-arrows-2'></i>"]
    });    
}


// Inobox function
function infobox_init(){
    $(".info-boxes .close-button").on( 'click', function() {
        $(this).parent().animate({'opacity' : '0'}, 300).slideUp(300);
    });
}


// Google map function
function googleMap_init(){
    var gmMapDiv = $("#map-canvas");
    
    if (gmMapDiv.length) {
    
        var gmCenterAddress = gmMapDiv.attr("data-address");
        var gmMarkerAddress = gmMapDiv.attr("data-address");
        
        
        gmMapDiv.gmap3({
            action: "init",
            marker: {
                address: gmMarkerAddress,
                options: {
                    icon: "images/map-marker.png"
                }
            },
            map: {
                options: {
                    zoom: 6,
                    zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.SMALL,
                        position: google.maps.ControlPosition.LEFT_TOP
                    },
                    mapTypeControl: false,
                    scaleControl: false,
                    scrollwheel: false,
                    streetViewControl: false,
                    draggable: true,
                    styles: [{
                        "featureType":"water",
                        "elementType":"geometry.fill",
                        "stylers":[{"color":"#d9d7cc"}]},

                        {"featureType":"transit",
                        "stylers":[{"color":"#575341"},
                        {"visibility":"off"}]},

                        {"featureType":"road.highway",
                        "elementType":"geometry.stroke",
                        "stylers":[{"visibility":"on"},
                        {"color":"#e6e5de"}]},

                        {"featureType":"road.highway",
                        "elementType":"geometry.fill",
                        "stylers":[{"color":"#cbc8b9"}]},

                        {"featureType":"road.local",
                        "elementType":"geometry.fill",
                        "stylers":[{"visibility":"on"},
                        {"color":"#cbc8b9"},{"weight":1.8}]},

                        {"featureType":"road.local",
                        "elementType":"geometry.stroke",
                        "stylers":[{"color":"#c0ccda"}]},

                        {"featureType":"poi",
                        "elementType":"geometry.fill",
                        "stylers":[{"visibility":"on"},
                        {"color":"#b0bfd1"}]},

                        {"featureType":"administrative",
                        "elementType":"geometry",
                        "stylers":[{"color":"#e6e5de"}]},
                        
                        {"featureType":"road.arterial",
                        "elementType":"geometry.fill",
                        "stylers":[{"color":"#cbc8b9"}]},
                        
                        {"featureType":"road.arterial",
                        "elementType":"geometry.fill",
                        "stylers":[{"color":"#cbc8b9"}]},
                        
                        {"featureType":"landscape",
                        "elementType":"geometry.fill",
                        "stylers":[{"visibility":"on"},
                        {"color":"#f8f8f6"}]},
                        
                        {"featureType":"road",
                        "elementType":"labels.text.fill",
                        "stylers":[{"color":"#575341"}]},
                        
                        {"featureType":"administrative",
                        "elementType":"labels.text.fill",
                        "stylers":[{"visibility":"on"},
                        {"color":"#575341"}]},
                        
                        {"featureType":"poi",
                        "elementType":"labels.icon",
                        "stylers":[{"visibility":"off"}]},
                        
                        {"featureType":"poi",
                        "elementType":"labels",
                        "stylers":[{"visibility":"off"}]},
                        
                        {"featureType":"road.arterial",
                        "elementType":"geometry.stroke",
                        "stylers":[{"color":"#f8f8f6"}]},
                        
                        {"featureType":"road",
                        "elementType":"labels.icon",
                        "stylers":[{"visibility":"off"}]},
                        
                        {"featureType":"poi",
                        "elementType":"geometry.fill",
                        "stylers":[{"color":"#d9d7cc"}]
                    }]
                }
            }
        });
    }
}


// Grid or List function
function gridList_init(){
    $(".woocommerce .products").addClass("grid-view");
    $("#list-grid>div").on("click", function () {
        $(this).addClass("active").siblings().removeClass("active");
        if ($(this).hasClass("grid-view")) {
            if ($(".woocommerce .products").hasClass("grid-view")) {
                return false;
            } else {
                $(".woocommerce .products").fadeOut(300,function() {
                    $(".woocommerce .products").addClass("grid-view").removeClass("list-view").fadeIn(300);
                });
            }   
        }
        if ($(this).hasClass("list-view")){
            if ($(".woocommerce .products").hasClass("list-view")) {
                return false;
            } else {
                $(".woocommerce .products").fadeOut(300,function(){
                    $(".woocommerce .products").addClass("list-view").removeClass("grid-view").fadeIn(300);
                });
            }
        }
    });    
}


// Price slider function
function shop_price_slider(){
    var current_min_price
    var current_max_price
    window.shop_price_slider_params = {
        'currency_symbol' : '£',
        'currency_pos' : 'left',
    }
    // shop_price_slider_params is required to continue, ensure the object exists
    if ( typeof shop_price_slider_params === 'undefined' ) {
        return false;
    }
    // Get markup ready for slider
    $( 'input#min_price, input#max_price' ).hide();
    $( '.price_slider, .price_label' ).show();

    // Price slider uses jquery ui
    var min_price = $( '.price_slider_amount #min_price' ).data( 'min' ),
        max_price = $( '.price_slider_amount #max_price' ).data( 'max' );

    current_min_price = parseInt( min_price, 10 );
    current_max_price = parseInt( max_price, 10 );


    if ( shop_price_slider_params.min_price ) current_min_price = parseInt( shop_price_slider_params.min_price, 10 );
    if ( shop_price_slider_params.max_price ) current_max_price = parseInt( shop_price_slider_params.max_price, 10 );
    $( 'body' ).bind( 'price_slider_create price_slider_slide', function( event, min, max ) {
        if ( shop_price_slider_params.currency_pos === 'left' ) {

            $( '.price_slider_amount span.from' ).html( shop_price_slider_params.currency_symbol + min );
            $( '.price_slider_amount span.to' ).html( shop_price_slider_params.currency_symbol + max );

        } else if ( shop_price_slider_params.currency_pos === 'left_space' ) {

            $( '.price_slider_amount span.from' ).html( shop_price_slider_params.currency_symbol + " " + min );
            $( '.price_slider_amount span.to' ).html( shop_price_slider_params.currency_symbol + " " + max );

        } else if ( shop_price_slider_params.currency_pos === 'right' ) {

            $( '.price_slider_amount span.from' ).html( min + shop_price_slider_params.currency_symbol );
            $( '.price_slider_amount span.to' ).html( max + shop_price_slider_params.currency_symbol );

        } else if ( shop_price_slider_params.currency_pos === 'right_space' ) {

            $( '.price_slider_amount span.from' ).html( min + " " + shop_price_slider_params.currency_symbol );
            $( '.price_slider_amount span.to' ).html( max + " " + shop_price_slider_params.currency_symbol );

        }

        $( 'body' ).trigger( 'price_slider_updated', min, max );
    });

    $( '.price_slider' ).slider({
        range: true,
        animate: true,
        min: min_price,
        max: max_price,
        values: [ current_min_price, current_max_price ],
        create : function( event, ui ) {

            $( '.price_slider_amount #min_price' ).val( current_min_price );
            $( '.price_slider_amount #max_price' ).val( current_max_price );

            $( 'body' ).trigger( 'price_slider_create', [ current_min_price, current_max_price ] );
        },
        slide: function( event, ui ) {

            $( 'input#min_price' ).val( ui.values[0] );
            $( 'input#max_price' ).val( ui.values[1] );

            $( 'body' ).trigger( 'price_slider_slide', [ ui.values[0], ui.values[1] ] );
        },
        change: function( event, ui ) {

            $( 'body' ).trigger( 'price_slider_change', [ ui.values[0], ui.values[1] ] );

        },
    });
};


// Calendar widget
function calendar_init(){
    if ($("#calendar").length) {
        $('#calendar').datepicker({
            prevText: '<i class="fa fa-angle-left"></i>',
            nextText: '<i class="fa fa-angle-right"></i>',
            firstDay: 1,
            dayNamesMin: [ "S", "M", "T", "W", "T", "F", "S" ]
        });
    }
}


// Menu widget
function widgetMenu_init(){
    $('.widget-navigation li>ul').parent().addClass('has-child');
    $('.widget-navigation li>a').on( 'click', function(e) {
        e.stopPropagation();
    })
    $('.widget-navigation li>a').on( 'click', function(e) {
        e.stopPropagation();
        if( $(this).parent().children('ul').length ) {
            $(this).parent().children('ul').slideToggle(500);   
            $(this).parent().toggleClass('active');
            $(this).parent().children('ul').toggleClass('active');
        } 
    });
}


// Revolution slider
function revolution_slider () {
  $('.tp-banner-slider').on("revolution.slide.onloaded",function (e) {
    $('.tp-banner-slider').css("opacity","1");
  });
  if ( jQuery('.tp-banner-slider').length ) {
    jQuery('.tp-banner-slider').revolution({
      responsiveLevels:[4096,992,768,480],
      dottedOverlay:"custom",
      delay:9000,
      startwidth:1170,
      startheight:800,
      hideThumbs:10,
      navigation: {
          arrows:{enable:true}        
      },
      fullWidth:"on",
      fullScreen:"off",
      forceFullWidth:"on",
      hideThumbsOnMobile:"off",
      hideNavDelayOnMobile:1500,            
      hideBulletsOnMobile:"off",
      hideArrowsOnMobile:"off",
      hideThumbsUnderResolution:0,
      navigationType:"none"
    });
  }
}


// Youtube video player
function YTVideo_init(){
    $(".blog-media.video, .widget-media-post").fitVids();
}


// Contact form function
function contact_form_init(){
    if ($(".contact-form").length) {
      /**/
      /* contact form */
      /**/

      /* validate the contact form fields */      
      $(".contact-form").each(function(){

        $(this).validate(  /*feedback-form*/{
            onkeyup: false,
            onfocusout: false,
            errorElement: 'p',
            errorLabelContainer: $(this).parent().children(".alert-boxes.error-alert").children(".message"),
            rules:
            {
              name:
              {
                required: true
              },
              email:
              {
                required: true,
                email: true
              },
              message:
              {
                required: true
              }
            },
            messages:
            {
              name:
              {
                required: 'Please enter your name',
              },
              email:
              {
                required: 'Please enter your email address',
                email: 'Please enter a VALID email address'
              },
              message:
              {
                required: 'Please enter your message'
              }
            },
            invalidHandler: function()
            {
              $(this).parent().children(".alert-boxes.error-alert").slideDown('fast');
              $("#feedback-form-success").slideUp('fast');

            },
            submitHandler: function(form)
            {   
              $(form).parent().children(".alert-boxes.error-alert").slideUp('fast');  
              var $form = $(form).ajaxSubmit();
              submit_handler($form, $(form).parent().children(".email_server_responce") );
            }
          });
        })

      /* Ajax, Server response */ 
      var submit_handler =  function (form, wrapper){

        var $wrapper = $(wrapper); //this class should be set in HTML code
        
        $wrapper.css("display","block");
        var data = {
          action: "email_server_responce",
          values: $(form).serialize()
        };
        //send data to server
        $.post("php/contacts-process.php", data, function(s_response) {
          s_response = $.parseJSON(s_response);
          if(s_response.info == 'success'){
            $wrapper.addClass("message message-success").append("<div class='info-boxes confirmation-message' id='feedback-form-success'><strong>Success!</strong><br><p>Your message was successfully delivered.</p></div>");
            $wrapper.delay(5000).hide(500, function(){
              $(this).removeClass("message message-success").text("").fadeIn(500);
              $wrapper.css("display","none");
            });
            $(form)[0].reset(); 
          } else { 
            $wrapper.addClass("message message-error").append("<div class='message_box error-box'><div class='message_box_header'>Error Box</div><p>Server fail! Please try again later!</p></div>");
            $wrapper.delay(5000).hide(500, function(){
              $(this).removeClass("message message-success").text("").fadeIn(500);
              $wrapper.css("display","none");
            });
          }
        });
      return false;
      }
    }
}










