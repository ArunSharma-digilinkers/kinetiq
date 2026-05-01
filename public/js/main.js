'use strict';


//////// Sticky Navbar
$(window).scroll(function() {
	if ($(document).scrollTop() > 200	) {
		$(".navbar").addClass("customNav");
	} else {
		$(".navbar").removeClass("customNav");
	}
});

// Add class active
$(document).ready(function() {
	var url = window.location.href;
	$('.myNav-nav a[href="url"]').parent().addClass('active');
	$('.myNav-nav a').filter(function() {
		return this.href == url;
	}).parent().addClass('active');
});

// for testimonials
$('.testimonials').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: true,

    autoplay: true,              // auto slide
    autoplayTimeout: 3000,       // 3 sec delay
    autoplayHoverPause: true,    // pause on mouse hover

    smartSpeed: 800,             // smooth speed
    navSpeed: 800,

    navText: [
        '<span class="arrow-left">&#8592;</span>',
        '<span class="arrow-right">&#8594;</span>'
    ],

    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});


// AOS Init
$(document).ready(function() {
	AOS.init({
		duration: 1000,
	  });
  });

