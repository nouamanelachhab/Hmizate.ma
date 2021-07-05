window.$ = window.jQuery = require('jquery');
require('../bootstrap');
require('owl.carousel/dist/assets/owl.carousel.css');
require('bootstrap-slider/dist/css/bootstrap-slider.min.css');
let bootstrap = require('bootstrap/dist/js/bootstrap.bundle');
require('flatpickr/dist/flatpickr.min.css');
let flatpickr = require("flatpickr");
let Slider = require('bootstrap-slider');
let owl_carousel = require('owl.carousel');
window.fn = owl_carousel;
import Vue from 'vue';

const siteHeader = new Vue({
    el: '#site-header',
	data() {
		return {
			isSticky: false,
		}
	},
	mounted() {
		window.addEventListener('scroll', this.handleScroll);
	},
	methods: {
		handleScroll() {
			if (window.scrollY > 80) {
				this.isSticky = true
			} else if (window.scrollY < 80) {
				this.isSticky = false
			}
		}
	}
});

const siteFooter = new Vue({
    el: '#site-footer',
	data() {
		return {
			scrollUpButton: false,
		}
	},
	mounted() {
		window.addEventListener('scroll', this.handleScroll);
	},
	methods: {
		handleScroll() {
			if (window.scrollY > 300) {
				this.scrollUpButton = true
			} else if (window.scrollY < 300) {
				this.scrollUpButton = false
			}
		},
		scrollTop() {
			window.scrollTo(0, 0);
		}
	}
});

jQuery(document).ready(function($) {
	"use strict";
	
	$(window).on('load', function () {
		$('.owl-carousel').trigger('refresh.owl.carousel');
	});
	
    // --------------------------------------------------------------
    //  Home Slider Carousel
    // --------------------------------------------------------------
	
	if ($('.home-slider-carousel').length) {
		var homeSliderOwlCarousel = $('.home-slider-carousel');
		homeSliderOwlCarousel.owlCarousel({
			center: true,
			loop: true,
			rewind: true,
			margin: 0,
			nav: false,
			dots: true,
			mouseDrag: false,
			// smartSpeed: 900,
            // autoHeight: true,
			// autoplay: true,
            // autoplayTimeout: 8000,
            // autoplayHoverPause: true,
			responsiveClass: true,
			responsive:{
				0: {
					items: 1
				},
				400: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 1
				},
				992: {
					items: 1
				},
				1200: {
					items: 1
				},
				1400: {
					items: 1
				}
			}
		});
	}
	
    // --------------------------------------------------------------
    //  QuickFilter - Tabs
    // --------------------------------------------------------------
	
	call_to_show();
	
	var triggerTabList = [].slice.call(document.querySelectorAll('#quickfilter-nav-tabs a'))
	triggerTabList.forEach(function (triggerEl) {
		var tabTrigger = new bootstrap.Tab(triggerEl);
		triggerEl.addEventListener('shown.bs.tab', function (event) {
			call_to_show();
		});
	});
	
	function call_to_show() {
		var tabPanePreloader = document.querySelector('#quickfilter-wrapper .tab-pane.active .preloader');
		tabPanePreloader.style.display = "block";
		setTimeout(function() {
			tabPanePreloader.style.display = "none";
		}, 1000); 
	}
	
    // --------------------------------------------------------------
    //  QuickFilter - DateTimepicker
    // --------------------------------------------------------------
	
	$('#check-in-date').flatpickr();
	
	$('#check-out-date').flatpickr();
	
    // --------------------------------------------------------------
    //  QuickFilter - Budget Range Slider
    // --------------------------------------------------------------
	
	var setLabel = (lbl, val) => {
		var label = $(`#budget-slider-${lbl}-label`);
		label.text(val);
		var slider = $(`#budget-range-slider-field .${lbl}-slider-handle`);
	}
	
	var setLabels = (values) => {
		setLabel("min", values[0]);
		setLabel("bet", values[1]);
	}
	
	$('#budget-filter').slider().on('slide', function(ev) {
		setLabels(ev.value);
	});
	
	setLabels($('#budget-filter').attr("data-value").split(","));
	
    // --------------------------------------------------------------
    //  Home Promotions Carousel
    // --------------------------------------------------------------
	
	if ($('.home-promotions-carousel').length) {
		var homePromotionsOwlCarousel = $('.home-promotions-carousel');
		homePromotionsOwlCarousel.owlCarousel({
            center: true,
			loop: true,
			rewind: true,
			margin: 15,
			nav: false,
			dots: true,
			smartSpeed: 900,
            autoHeight: true,
			autoplay: true,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
			responsiveClass: true,
			responsive:{
				0: {
					items: 1
				},
				400: {
					items: 2
				},
				576: {
					items: 3
				},
				768: {
					items: 3
				},
				992: {
					items: 1
				},
				1200: {
					items: 3
				},
				1400: {
					items: 3
				}
			}
		});
	}
	
    // --------------------------------------------------------------
    //  Home Recommended Promotions Carousel
    // --------------------------------------------------------------
	
	if ($('.home-recommended-promotions-carousel').length) {
		var homeRecommendedPromotionsOwlCarousel = $('.home-recommended-promotions-carousel');
		homeRecommendedPromotionsOwlCarousel.owlCarousel({
            center: true,
			loop: true,
			rewind: true,
			margin: 15,
			nav: false,
			dots: true,
			smartSpeed: 900,
            autoHeight: true,
			autoplay: true,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
			responsiveClass: true,
			responsive:{
				0: {
					items: 1
				},
				400: {
					items: 2
				},
				576: {
					items: 3
				},
				768: {
					items: 3
				},
				992: {
					items: 1
				},
				1200: {
					items: 3
				},
				1400: {
					items: 3
				}
			}
		});
	}
});