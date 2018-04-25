// page init
$(document).ready(function() {

	"use strict";
	

	initAddClass();
	// Add Class  init
	function initAddClass() {
		"use strict";
		
		jQuery('.nav-opener').on( "click", function(e){
			e.preventDefault();
			jQuery("body").toggleClass("nav-active");
		});
	}

	initSlickSlider();
	// Slick Slider init
	function initSlickSlider() {
		"use strict";

		jQuery('.speaker-slider').slick({
			dots: false,
			speed: 800,
			infinite: true,
			slidesToShow: 1,
			adaptiveHeight: true,
			autoplay: false,
			arrow: true,
			autoplaySpeed: 4000
		});
	}

	initbackTop();
	// backtop init
	function initbackTop() {
		"use strict";

	    var jQuerybackToTop = jQuery("#back-top");
	    jQuery(window).on('scroll', function() {
	        if (jQuery(this).scrollTop() > 100) {
	            jQuerybackToTop.addClass('active');
	        } else {
	            jQuerybackToTop.removeClass('active');
	        }
	    });
	    jQuerybackToTop.on('click', function(e) {
	        jQuery("html, body").animate({scrollTop: 0}, 900);
	    });
	}

	initLightbox();
	// modal popup init
	function initLightbox() {
		
		"use strict";

		jQuery('a.lightbox, a[rel*="lightbox"]').fancybox({
			padding: 0
		});
	}

	initTabs();
	// content tabs init
	function initTabs() {
		"use strict";
		
		jQuery('ul.tabset, ul.schedule-tab, ul.time-tab').tabset({
			tabLinks: 'a',
			defaultTab: false
		});
	}

	initStyleChanger();
	// style changer
	function initStyleChanger() {
		"use strict";
		
		var element = jQuery('#style-changer');

		if(element) {
			$.ajax({
				url: element.attr('data-src'),
				type: 'get',
				dataType: 'text',
				success: function(data) {
					var newContent = jQuery('<div>', {
						html: data
					});

					newContent.appendTo(element);
				}
			});
		}
	}

	initCountDown();
	// count down init
	function initCountDown() {
		var newDate = new Date(2017, 10, 10);
		
		jQuery("#defaultCountdown").countdown({until: newDate});
	}

	initCustomForms();
	// initialize custom form elements
	function initCustomForms() {
		jcf.replaceAll();
	}

	
	$.scrollIt({
		topOffset: -84,
		scrollTime: 1500,
		easing: 'easeInOutExpo'
	});

    initStickyHeader();
	// sticky header init
	function initStickyHeader() {

		"use strict";

		var win = jQuery(window),
			stickyClass = 'sticky';

		jQuery('#header').each(function() {
			var header = jQuery(this);
			var headerOffset = header.offset().top || 0;
			var flag = true;


			jQuery(this).css('height' , jQuery(this).innerHeight());

			function scrollHandler() {
				if (win.scrollTop() > headerOffset) {
					if (flag){
						flag = false;
						header.addClass(stickyClass);
					}
				} else {
					if (!flag) {
						flag = true;
						header.removeClass(stickyClass);
					}
				}
			}

			scrollHandler();
			win.on('scroll resize orientationchange', scrollHandler);
		});
	}
	
});


jQuery(window).on('load', function() {

	"use strict";

	initPreLoader()
	// PreLoader init
	function initPreLoader() {
	    "use strict";

	    jQuery('#loader').delay(1000).fadeOut();
	}

	initMasonry();
	// masonry init
	function initMasonry() {
		jQuery(window).on('load masonry/refresh', function() {
			jQuery('.js-masonry').masonry('layout');
		});
	}
});