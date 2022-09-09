
(function ($) {
	"use strict";

	// preloader
	$(window).on("load", function () {
		$(".preloader").delay(350).fadeOut('slow');
	});

	// toggle search bar
	$('.header-search-wrapper .search-main > i').click(function () {
		$(".header-search-wrapper .search-main > i").hide();
		$(".header-search-wrapper .search-main span").show();
		$('.search-form-main').addClass('active-search');
		$('.search-form-main .search-field').focus();
	});
	$('.header-search-wrapper .search-main span').click(function () {
		$(".header-search-wrapper .search-main > i").show();
		$(".header-search-wrapper .search-main span").hide();
		$('.search-form-main').removeClass('active-search');
		$('.search-form-main .search-field').focus();
	});

	// sticky
	var wind = $(window);
	var sticky = $('#sticky-header');
	wind.on('scroll', function () {
		var scroll = wind.scrollTop();
		if (scroll < 100) {
			sticky.removeClass('sticky');
		} else {
			sticky.addClass('sticky');
		}
	});

	// mobile menu
	$('#mobile-menu-active').metisMenu();

	$('#mobile-menu-active .dropdown > a').on('click', function (e) {
		e.preventDefault();
	});

	$(".hamburger-menu > a").on("click", function (e) {
		e.preventDefault();
		$(".slide-bar").toggleClass("show");
		$("body").addClass("on-side");
		$('.body-overlay').addClass('active');
		$(this).addClass('active');
	});

	$(".close-mobile-menu > a").on("click", function (e) {
		e.preventDefault();
		$(".slide-bar").removeClass("show");
		$("body").removeClass("on-side");
		$('.body-overlay').removeClass('active');
		$('.hamburger-menu > a').removeClass('active');
	});

	$('.body-overlay').on('click', function () {
		$(this).removeClass('active');
		$(".slide-bar").removeClass("show");
		$("body").removeClass("on-side");
		$('.hamburger-menu > a').removeClass('active');
	});

	//data background
	$("[data-background]").each(function () {
		$(this).css("background-image", "url(" + $(this).attr("data-background") + ") ")
	})

	// brand active
	$('.brand-active').owlCarousel({
		loop: true,
		margin: 0,
		items: 1,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 2
			},
			500: {
				items: 2
			},
			767: {
				items: 3
			},
			992: {
				items: 4
			},
			1200: {
				items: 5
			}
		}
	})

	// brand-active-2
	$('.brand-active-2').owlCarousel({
		loop: true,
		margin: 0,
		items: 1,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: false,
		responsive: {
			0: {
				items: 2
			},
			767: {
				items: 3
			},
			992: {
				items: 4
			},
			1200: {
				items: 4
			}
		}
	})

	// testimonial active
	$('.testimonial-active').owlCarousel({
		loop: true,
		margin: 30,
		items: 1,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayTimeout: 2000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			767: {
				items: 2
			},
			992: {
				items: 2
			},
			1200: {
				items: 3
			}
		}
	});

	// testimonial active 2
	$('.testimonial-active-2').owlCarousel({
		loop: true,
		margin: 30,
		items: 1,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			767: {
				items: 1
			},
			992: {
				items: 2
			},
			1200: {
				items: 2
			}
		}
	});

	// portfolio-active
	$('.portfolio-active').owlCarousel({
		loop: true,
		margin: 30,
		items: 1,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		navText: ['<i class="ti-arrow-left"></i>', '<i class="ti-arrow-right"></i>'],
		nav: true,
		dots: false,
		responsive: {
			0: {
				items: 1
			},
			767: {
				items: 2
			},
			992: {
				items: 2
			},
			1200: {
				items: 2
			}
		}
	});

	// showcase-active
	$('.showcase-active').owlCarousel({
		loop: true,
		margin: 0,
		items: 1,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		center: true,
		stagePadding: 200,
		dots: false,
		responsive: {
			0: {
				items: 1,
				stagePadding: 0,
			},
			767: {
				items: 2,
				stagePadding: 0,
			},
			992: {
				items: 2,
				stagePadding: 0,
			},
			1200: {
				items: 2,
				stagePadding: 0,
			},
			1500: {
				items: 2,
			}
		}
	});

	// gallery-active
	$('.gallery-active').owlCarousel({
		loop: true,
		autoplay: true,
		smartSpeed: 1500,
		autoplayHoverPause: true,
		margin: 30,
		autoplayTimeout: 6000,
		nav: false,
		dots: false,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 2
			},
			1000: {
				items: 2
			}
		}
	});

	// blog-post-active
	$('.gallery-post-active').owlCarousel({
		loop: true,
		margin: 0,
		items: 1,
		navText: ['<i class="ti-arrow-left"></i>', '<i class="ti-arrow-right"></i>'],
		nav: true,
		dots: false,
		responsive: {
			0: {
				items: 1
			}
		}
	})

	// Accordion Box
	if ($(".accordion-box").length) {
		$(".accordion-box").on("click", ".acc-btn", function () {
			var outerBox = $(this).parents(".accordion-box");
			var target = $(this).parents(".accordion");

			if ($(this).next(".acc-content").is(":visible")) {
				$(this).removeClass("active");
				$(this).next(".acc-content").slideUp(300);
				$(outerBox).children(".accordion").removeClass("active-block");
			} else {
				$(outerBox).find(".accordion .acc-btn").removeClass("active");
				$(this).addClass("active");
				$(outerBox).children(".accordion").removeClass("active-block");
				$(outerBox).find(".accordion").children(".acc-content").slideUp(300);
				target.addClass("active-block");
				$(this).next(".acc-content").slideDown(300);
			}
		});
	}

	/* magnificPopup img view */
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	/* magnificPopup video view */
	$('.popup-video').magnificPopup({
		type: 'iframe'
	});

	// isotop
	$('.grid').imagesLoaded(function () {
		// init Isotope
		var $grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: '.grid-item',
			}
		});

		// filter items on button click
		$('.portfolio-menu').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});
	});

	//for menu active class
	$('.portfolio-menu button').on('click', function (event) {
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		event.preventDefault();
	});

	// niceSelect
	$('select').niceSelect();

	// skill bar
	if ($("#bar1").length) {
		$('#bar1').barfiller();
	}
	if ($("#bar2").length) {
		$('#bar2').barfiller();
	}
	if ($("#bar3").length) {
		$('#bar3').barfiller();
	}

	// scrollToTop
	$.scrollUp({
		scrollName: 'scrollUp', // Element ID
		topDistance: '300', // Distance from top before showing element (px)
		topSpeed: 300, // Speed back to top (ms)
		animation: 'slide', // Fade, slide, none
		animationInSpeed: 200, // Animation in speed (ms)
		animationOutSpeed: 200, // Animation out speed (ms)
		scrollText: '<i class="ti-arrow-up"></i>', // Text for element
		activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	});


})(jQuery);

function ClosePopUp() {
	$('#pop-up').fadeOut();
}

$(document).keyup(function(e) {
	if (e.key === "Escape") { // escape key maps to keycode `27`
	   ClosePopUp()
   }
});