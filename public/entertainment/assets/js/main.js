/************* Main Js File ************************
    Template Name: Filmoja
    Author: Themescare
    Version: 1.0
    Copyright 2019
*************************************************************/


/*------------------------------------------------------------------------------------
    
JS INDEX
=============

01 - Main Slider JS
02 - Top Movie Slider
03 - Coming Soon Slider
04 - About Slider
05 - Partner Slider
06 - Cast Slider
07 - Youtube Popup JS
08 - Datepicker JS
09 - Responsive Menu
10 - Btn To Top


-------------------------------------------------------------------------------------*/


(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {

		/* 
		=================================================================
		01 - Main Slider JS
		=================================================================	
		*/

		$(".filmoja-slide").owlCarousel({
			animateOut: 'fadeOutLeft',
			animateIn: 'fadeIn',
			items: 2,
			nav: true,
			dots: false,
			autoplayTimeout: 7000,
			autoplaySpeed: 2000,
			autoplay: true,
			loop: true,
			navText: ["<img src='assets/img/prev-1.png'>", "<img src='assets/img/next-1.png'>"],
			mouseDrag: true,
			touchDrag: true,
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
				750: {
					items: 1
				},
				1000: {
					items: 1
				},
				1200: {
					items: 1
				}
			}
		});

		$(".filmoja-slide").on("translate.owl.carousel", function () {
			$(".filmoja-main-slide h4").removeClass("animated fadeInDown").css("opacity", "0");
			$(".filmoja-main-slide h2, .filmoja-main-slide p").removeClass("animated fadeInLeft").css("opacity", "0");
			$(".filmoja-main-slide .slider-play").removeClass("animated fadeInUp").css("opacity", "0");
		});
		$(".filmoja-slide").on("translated.owl.carousel", function () {
			$(".filmoja-main-slide h4").addClass("animated fadeInDown").css("opacity", "1");
			$(".filmoja-main-slide h2, .filmoja-main-slide p").addClass("animated fadeInLeft").css("opacity", "1");
			$(".filmoja-main-slide .slider-play").addClass("animated fadeInUp").css("opacity", "1");
		});


		/* 
		=================================================================
		02 - Top Movie Slider
		=================================================================	
		*/
		$(".top-movie-slider").owlCarousel({
			autoplay: false,
			loop: true,
			margin: 20,
			touchDrag: true,
			mouseDrag: true,
			nav: true,
			navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
			dots: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1200,
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
				750: {
					items: 3
				},
				1000: {
					items: 4
				},
				1200: {
					items: 5
				}
			}
		});

		/* 
		=================================================================
		03 - Coming Soon Slider
		=================================================================	
		*/
		$(".coming-soon-slider").owlCarousel({
			animateOut: 'fadeOutLeft',
			animateIn: 'fadeIn',
			items: 1,
			nav: true,
			dots: false,
			autoplayTimeout: 7000,
			autoplaySpeed: 2000,
			autoplay: true,
			loop: true,
			navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
			mouseDrag: true,
			touchDrag: true
		});

		/* 
		=================================================================
		04 - About Slider
		=================================================================	
		*/
		$(".about-slider").owlCarousel({
			items: 1,
			nav: true,
			dots: false,
			margin: 20,
			autoplayTimeout: 7000,
			autoplaySpeed: 2000,
			autoplay: true,
			loop: true,
			navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
			mouseDrag: true,
			touchDrag: true
		});

		/* 
		=================================================================
		05 - Partner Slider
		=================================================================	
		*/
		$(".partners-slider").owlCarousel({
			autoplay: true,
			loop: true,
			margin: 20,
			touchDrag: true,
			mouseDrag: true,
			nav: false,
			dots: false,
			autoplayTimeout: 6000,
			autoplaySpeed: 1200,
			autoplayHoverPause: true,
			responsive: {
				0: {
					items: 2
				},
				480: {
					items: 2
				},
				600: {
					items: 4
				},
				1000: {
					items: 5
				},
				1200: {
					items: 5
				}
			}
		});

		/* 
		=================================================================
		06 - Cast Slider
		=================================================================	
		*/
		$(".cast-slider").owlCarousel({
			autoplay: false,
			loop: true,
			margin: 0,
			touchDrag: true,
			mouseDrag: true,
			nav: true,
			navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
			dots: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1200,
			autoplayHoverPause: true,
			responsive: {
				0: {
					items: 2
				},
				480: {
					items: 2
				},
				600: {
					items: 2
				},
				750: {
					items: 5
				},
				1000: {
					items: 5
				},
				1200: {
					items: 6
				}
			}
		});

		/* 
		=================================================================
		07 - Youtube Popup JS
		=================================================================	
		*/

		$('.popup-youtube, .play-video').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});

		/* 
		=================================================================
		08 - Datepicker JS
		=================================================================	
		*/

		$(function () {
			$("#releasedate").datepicker();
		});

		/* 
		=================================================================
		09 - Responsive Menu
		=================================================================	
		*/
		$("ul#responsive_navigation").slicknav({
			prependTo: ".filmoja-responsive-menu"
		});
	});

	   /* 
		=================================================================
		10 - Btn To Top
		=================================================================	
		*/
	if ($("body").length) {
		var btnUp = $('<div/>', {
			'class': 'btntoTop'
		});
		btnUp.appendTo('body');
		$(document).on('click', '.btntoTop', function () {
			$('html, body').animate({
				scrollTop: 0
			}, 700);
		});
		$(window).on('scroll', function () {
			if ($(this).scrollTop() > 200) $('.btntoTop').addClass('active');
			else $('.btntoTop').removeClass('active');
		});
	}
}(jQuery));

