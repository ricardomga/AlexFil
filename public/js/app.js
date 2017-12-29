/****************************************************************************************************************
   1. revolutionSliderActiver
   2. accrodion
   3. GalleryFancyboxActivator
   4. selectMenu
   5. serviceCarousel
   6. teamCarousel
   7. clientCarousel
   8. CounterNumberChanger
   9. gMap
   11. stickyHeader
   12. fleetGallery
   13. typed
   14. mobileNavToggler
   15. testimonialCarousel
   16. testimonialsCarosuleTwo
   17. specialCheckbox
   18. datePicker
   19. thmSpinner
 ****************************************************************************************************************/

"use strict"; // Start of use strict

// 1. revolutionSliderActiver
function revolutionSliderActiver() {
    if ($('.rev_slider_wrapper #slider1').length) {
        jQuery("#slider1").revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            delay: 5000,
            navigation: {
	              arrows: { enable: true }
            },
            gridwidth: 1170,
            gridheight: 700
        });
    };
}

// 2. accrodion
function accrodion() {
    if ($('.accrodion-grp').length) {

        $('.accrodion-grp').each(function () {
            var accrodionName = $(this).data('grp-name');
            var Self = $(this);
            Self.addClass(accrodionName);
            Self.find('.accrodion .accrodion-content').hide();
            Self.find('.accrodion.active').find('.accrodion-content').show();
            Self.find('.accrodion').each(function () {
	              $(this).find('.accrodion-title').on('click', function () {
	                  if ($(this).parent().hasClass('active') === false) {
	                      $('.accrodion-grp.' + accrodionName).find('.accrodion').removeClass('active');
	                      $('.accrodion-grp.' + accrodionName).find('.accrodion').find('.accrodion-content').slideUp();
	                      $(this).parent().addClass('active');
	                      $(this).parent().find('.accrodion-content').slideDown();
	                  };
	              });
            });
        });
    };
}

// 3. GalleryFancyboxActivator
function GalleryFancyboxActivator() {
    var galleryFcb = $('.fancybox');
    if (galleryFcb.length) {
        galleryFcb.fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic',
            helpers: {
	              media: {}
            }
        });
    }
}

// 4. selectMenu
function selectMenu() {
    if ($('.select-menu').length) {
        $('.select-menu').selectmenu();
    };
}

// 5. serviceCarousel
function serviceCarousel() {
    if ($('.services-section.with-carousel').length) {
        $('.services-section.with-carousel .owl-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoWidth: true,
            autoplay: true,
            
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>'],
            responsive: {
	              0: {
	                  items: 1,
	                  autoWidth: false
	              },
	              480: {
	                  items: 1,
	                  autoWidth: false
	              },
	              600: {
	                  items: 2,
	                  autoWidth: false
	              },
	              1000: {
	                  items: 3,
	                  autoWidth: false
	              }
            }
        });
    };
}

// 6. teamCarousel
function teamCarousel() {
    if ($('.team-section.with-carousel').length) {
        $('.team-section.with-carousel .owl-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoWidth: true,
            autoplay: true,
            
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>'],
            responsive: {
	              0: {
	                  items: 1,
	                  autoWidth: false
	              },
	              480: {
	                  items: 1,
	                  autoWidth: false
	              },
	              600: {
	                  items: 3,
	                  autoWidth: false
	              },
	              1000: {
	                  items: 4,
	                  autoWidth: false
	              }
            }
        });
    };
}

// 7. clientCarousel
function clientCarousel() {
    if ($('.client-carousel').length) {
        $('.client-carousel .owl-carousel').owlCarousel({
            loop: true,
            margin: 27,
            nav: false,
            dots: false,
            autoWidth: true,
            autoplay: true,
            
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
	              0: {
	                  items: 1,
	                  autoWidth: false
	              },
	              480: {
	                  items: 2,
	                  autoWidth: false
	              },
	              600: {
	                  items: 3,
	                  autoWidth: false
	              },
	              1000: {
	                  items: 6,
	                  autoWidth: false
	              }
            }
        });
  };
}

// 8. CounterNumberChanger
function CounterNumberChanger() {
    var timer = $('.timer');
    if (timer.length) {
        timer.appear(function () {
            timer.countTo();
        });
    }
}

function getVehicleMakes() {
    $.ajax({
	      url: "https://vpic.nhtsa.dot.gov/api/vehicles/GetModelsForMakeId/440?format=json",
	      type: "GET",
	      dataType: "json",
	      success: function(result)
	      {
		        console.log(result);
	      },
	      error: function(xhr, ajaxOptions, thrownError)
	      {
		        console.log(xhr.status);
		        console.log(thrownError);
	      }
    });
}


// 11. stickyHeader
function stickyHeader() {
    if ($('.stricky').length) {
        var strickyScrollPos = $('#header').height();
        if ($(window).scrollTop() > strickyScrollPos) {
            $('.stricky').removeClass('fadeIn animated');
            $('.stricky').addClass('stricky-fixed fadeInDown animated');
        } else if ($(this).scrollTop() <= strickyScrollPos) {
            $('.stricky').removeClass('stricky-fixed fadeInDown animated');
            $('.stricky').addClass('slideIn animated');
        }
    };
}

// 12. fleetGallery
function fleetGallery() {
    if ($('.fleet-gallery').length) {
        $('.fleet-gallery').mixItUp();
    };
}

// 13. typed
function typed() {
    if ($(".typed").length) {
        $(".typed").typed({
            stringsElement: $('.typed-strings'),
            typeSpeed: 200,
            backDelay: 1500,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function callback() {
	              null;
            },
            resetCallback: function resetCallback() {
	              newTyped();
            }
        });
    };
}

// 14. mobileNavToggler
function mobileNavToggler() {
    if ($('.nav-holder').length) {
        $('.nav-holder .nav-header .menu-expander button').on('click', function () {
            $('.nav-holder .nav-footer').slideToggle();
            return false;
        });
        $('.nav-holder li.has-submenu').children('a').append(function () {
            return '<button class="dropdown-expander"><i class="fa fa-bars"></i></button>';
        });
        $('.nav-holder .nav-footer .dropdown-expander').on('click', function () {
            $(this).parent().parent().children('.submenu').slideToggle();
            return false;
        });
    }
}

// 15. testimonialCarousel
function testimonialCarousel() {
    if ($('.testimonial-content-box').length && $('.testimonail-thumbnail-box').length) {

        var $sync1 = $(".testimonial-content-box"),
	          $sync2 = $(".testimonail-thumbnail-box"),
	          flag = false,
	          duration = 1000;

        $sync1.owlCarousel({
            items: 1,
            margin: 0,
            nav: false,
            dots: false
        }).on('changed.owl.carousel', function (e) {
            if (!flag) {
	              flag = true;
	              $sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
	              flag = false;
            }
        });

        $sync2.owlCarousel({
            margin: 60,
            items: 3,
            nav: false,
            dots: false,
            center: true,
            responsive: {
	              0: {
	                  items: 1,
	                  autoWidth: false
	              },
	              480: {
	                  items: 2,
	                  center: false,
	                  autoWidth: false
	              },
	              600: {
	                  items: 3,
	                  autoWidth: false
	              },
	              1000: {
	                  items: 3,
	                  autoWidth: false
	              }
            }
        }).on('click', '.owl-item', function () {
            $sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
        }).on('changed.owl.carousel', function (e) {
            if (!flag) {
	              flag = true;
	              $sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
	              flag = false;
            }
        });
    };
}

// 16. testimonialsCarosuleTwo
function testimonialsCarosuleTwo() {
    if ($('.testimonials-carousel .owl-carousel').length) {
        $('.testimonials-carousel .owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            autoplay: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            autoplayHoverPause: true,
            responsive: {
	              0: {
	                  items: 1
	              },
	              480: {
	                  items: 1
	              },
	              600: {
	                  items: 1
	              },
	              1000: {
	                  items: 1
	              }
            }
        });
    }
}

// 17. specialCheckbox
function specialCheckbox() {
    if ($('ul.special-checkbox').length) {
        $('ul.special-checkbox').find('li').on('click', function () {
            $(this).toggleClass('active');
            $(this).find('input[type=checkbox]').prop('checked', function () {
	              return !this.checked;
            });
        });
        // $('ul.special-checkbox').find('li .input-checker input[type="checkbox"]').prop('checked', true);
        // $('ul.special-checkbox').find('.active .input-checker input[type="checkbox"]').prop('checked', true);
    };
}

// 18. datePicker
function datePicker() {
    if ($('.date-picker').length) {
        $('.date-picker').datepicker({ dateFormat: 'dd/mm/yy' });
    };
}

// 19. thmSpinner
function thmSpinner() {
    if ($('.thm-spinner').length) {
        var spinnerMin = $('.thm-spinner').data('min-value');
        var spinnerMax = $('.thm-spinner').data('max-value');
        var spinnerDefault = $('.thm-spinner').data('default-value');
        $('.thm-spinner').slider({
            range: 'min',
            min: spinnerMin,
            max: spinnerMax,
            value: spinnerDefault,
            slide: function slide(event, ui) {
	              $('.vehicle-year-input').val(ui.value);
            }
        });
        $('.vehicle-year-input').val($('.thm-spinner').slider('value'));
    };
}

// instance of fuction while Document ready event
jQuery(document).on('ready', function () {
    (function ($) {
        revolutionSliderActiver();
        accrodion();
        selectMenu();
        clientCarousel();
        CounterNumberChanger();
        fleetGallery();
        GalleryFancyboxActivator();
        typed();
        mobileNavToggler();
        serviceCarousel();
        testimonialCarousel();
        testimonialsCarosuleTwo();
        specialCheckbox();
        datePicker();
        thmSpinner();
        teamCarousel();
    })(jQuery);
});

// instance of fuction while Window Load event
jQuery(window).on('load', function () {
    (function ($) {})(jQuery);
});

// instance of fuction while Window Scroll event
jQuery(window).on('scroll', function () {
    (function ($) {
        stickyHeader();
    })(jQuery);
});

// instance of fuction while Window Resize event
jQuery(window).on('resize', function () {
    (function ($) {
        stickyHeader();
    })(jQuery);
});

