AOS.init({
	duration: 800,
	easing: 'slide'
});

(function($) {

   "use strict";

   $(window).stellar({
   responsive: true,
   parallaxBackgrounds: true,
   parallaxElements: true,
   horizontalScrolling: false,
   hideDistantElements: false,
   scrollProperty: 'scroll',
   horizontalOffset: 0,
	 verticalOffset: 0
 });

 // Scrollax
 $.Scrollax();


   var fullHeight = function() {

	   $('.js-fullheight').css('height', $(window).height());
	   $(window).resize(function(){
		   $('.js-fullheight').css('height', $(window).height());
	   });

   };
   fullHeight();

   // loader
   var loader = function() {
	   setTimeout(function() { 
		   if($('#ftco-loader').length > 0) {
			   $('#ftco-loader').removeClass('show');
		   }
	   }, 1);
   };
   loader();

   // Scrollax
  $.Scrollax();

	var carousel = function() {
		$('.home-slider').owlCarousel({
		loop:true,
		autoplay:true,
		autoplayTimeout:5000,
		margin:0,
		nav:false,
		autoplayHoverPause: false,
		items: 1,
		navText : ["<span class='ion-md-arrow-back'></span>","<span class='ion-chevron-right'></span>"],
		responsive:{
			0:{
			items:1,
			nav:false
			},
			600:{
			items:1,
			nav:false
			},
			1000:{
			items:1,
			nav:false
			}
		}
	});
	   $('.carousel-work').owlCarousel({
		   autoplay: true,
		   center: true,
		   loop: true,
		   items:1,
		   margin: 30,
		   stagePadding:0,
		   nav: true,
		   navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
		   responsive:{
			   0:{
				   items: 1,
				   stagePadding: 0
			   },
			   600:{
				   items: 2,
				   stagePadding: 50
			   },
			   1000:{
				   items: 3,
				   stagePadding: 100
			   }
		   }
	   });

   };
   carousel();
   
   if (window.matchMedia('(min-width: 767px)').matches) {
	$('nav .dropdown').hover(function(){
		var $this = $(this);
		// 	 timer;
		// clearTimeout(timer);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		// $this.find('.dropdown-menu-baru').addClass('animated-fast fadeInUp show');
		$this.find('.dropdown-menu-baru').addClass('show');
	}, function(){
		var $this = $(this);
			// timer;
		// timer = setTimeout(function(){
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			// $this.find('.dropdown-menu-baru').removeClass('animated-fast fadeInUp show');
			$this.find('.dropdown-menu-baru').removeClass('show');
		// }, 100);
	});

	$('nav, .dropdown').hover(
		function () {
			$('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
			$(this).addClass('open');
		},
		function () {
			$('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
			$(this).removeClass('open');
		}
	);
   }


   $('#dropdown04').on('show.bs.dropdown', function () {
	 console.log('show');
   });

   // scroll
   var scrollWindow = function() {
	   $(window).scroll(function(){
		   var $w = $(this),
				   st = $w.scrollTop(),
				   navbar = $('.ftco_navbar'),
				   sd = $('.js-scroll-wrap');

		   if (st > 150) {
			   if ( !navbar.hasClass('scrolled') ) {
				   navbar.addClass('scrolled');	
			   }
		   } 
		   if (st < 150) {
			   if ( navbar.hasClass('scrolled') ) {
				   navbar.removeClass('scrolled sleep');
			   }
		   } 
		   if ( st > 350 ) {
			   if ( !navbar.hasClass('awake') ) {
				   navbar.addClass('awake');	
			   }
			   
			   if(sd.length > 0) {
				   sd.addClass('sleep');
			   }
		   }
		   if ( st < 350 ) {
			   if ( navbar.hasClass('awake') ) {
				   navbar.removeClass('awake');
				   navbar.addClass('sleep');
			   }
			   if(sd.length > 0) {
				   sd.removeClass('sleep');
			   }
		   }

		   var wScroll = $(this).scrollTop();
		   if(wScroll > 100){
			   $('.scrolltop').addClass('show');
		   }else{
			   $('.scrolltop').removeClass('show');
		   }

		   // $('.test img').css({
		   // 	'transform' : 'translate(0px, '+ wScroll/5.6 +'%)'
		   // });

	   });
   };
   scrollWindow();

   $(document).ready(function() {
	   $(".megamenu").on("click", function(e) {
		   e.stopPropagation();
	   });
   });
   

   
   var counter = function() {
	   
	   $('#section-counter').waypoint( function( direction ) {

		   if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

			   var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
			   $('.number').each(function(){
				   var $this = $(this),
					   num = $this.data('number');
					   console.log(num);
				   $this.animateNumber(
					 {
					   number: num,
					   numberStep: comma_separator_number_step
					 }, 7000
				   );
			   });
			   
		   }

	   } , { offset: '95%' } );

   }
   counter();

   var contentWayPoint = function() {
	   var i = 0;
	   $('.ftco-animate').waypoint( function( direction ) {

		   if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
			   
			   i++;

			   $(this.element).addClass('item-animate');
			   setTimeout(function(){

				   $('body .ftco-animate.item-animate').each(function(k){
					   var el = $(this);
					   setTimeout( function () {
						   var effect = el.data('animate-effect');
						   if ( effect === 'fadeIn') {
							   el.addClass('fadeIn ftco-animated');
						   } else if ( effect === 'fadeInLeft') {
							   el.addClass('fadeInLeft ftco-animated');
						   } else if ( effect === 'fadeInRight') {
							   el.addClass('fadeInRight ftco-animated');
						   } else {
							   el.addClass('fadeInUp ftco-animated');
						   }
						   el.removeClass('item-animate');
					   },  k * 50, 'easeInOutExpo' );
				   });
				   
			   }, 100);
			   
		   }

	   } , { offset: '95%' } );
   };
   contentWayPoint();


   // navigation
   var OnePageNav = function() {
	   $(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on('click', function(e) {
			e.preventDefault();

			var hash = this.hash,
					navToggler = $('.navbar-toggler');
			$('html, body').animate({
		   scrollTop: $(hash).offset().top
		 }, 700, 'easeInOutExpo', function(){
		   window.location.hash = hash;
		 });


		 if ( navToggler.is(':visible') ) {
			 navToggler.click();
		 }
	   });
	   $('body').on('activate.bs.scrollspy', function () {
		 console.log('nice');
	   })
   };
   OnePageNav();


   // magnific popup
   $('.image-popup').magnificPopup({
   type: 'image',
   closeOnContentClick: true,
   closeBtnInside: true,
   fixedContentPos: true,
   mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
	gallery: {
	 enabled: true,
	 navigateByImgClick: true,
	 preload: [0,1] // Will preload 0 - before current, and 1 after the current image
   },
   image: {
	 verticalFit: true
   },
   zoom: {
	 enabled: true,
	 duration: 300 // don't foget to change the duration also in CSS
   }
 });

 $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
   disableOn: 700,
   type: 'iframe',
   mainClass: 'mfp-fade',
   removalDelay: 160,
   preloader: false,

   fixedContentPos: false
 });


 $('.appointment_date').datepicker({
	 'format': 'm/d/yyyy',
	 'autoclose': true
   });

   $('.appointment_time').timepicker();



   $('.page-scroll').on('click', function(e){

	   var tujuan = $(this).attr('href');
	   var elemenTujuan = $(tujuan);
   
	   $('html, body').animate({
		   scrollTop: elemenTujuan.offset().top - 116
	   }, 1250, 'easeInOutExpo');
   
	   e.preventDefault();
   
   });

   $('.scrolltop').on('click', function(e){
   
	   $('html, body').animate({
		   scrollTop: 0
	   }, 1250, 'easeInOutExpo');	
   
	   e.preventDefault();
   
   });

   $('.back').on('click', function(e){

	   window.location = base_url;
   
	   e.preventDefault();
   
   });

   //JS BARU
   $('.btn-search').on('click', function(e){
   
	   $('.app-search').addClass('app-search-show');
	   $('#top').addClass('no-overflow');
   
	   e.preventDefault();

   });

   $('.btn-close-search').on('click', function(e){
   
	   $('.app-search').removeClass('app-search-show');
	   $('#top').removeClass('no-overflow');

	   e.preventDefault();
   
   });

   $('.btn-shop').on('click', function(){
   
	   $('.app-cart').removeClass('closed');

   });
   $('.btn-shop').hover(
	   function () {
		   $('.app-cart').addClass('go');
	   }
   );
   $('.close').on('click', function(){
	   
	   $('.app-cart').addClass('closed');
	   $('.app-cart').removeClass('go');

   });

   $(document).on('keydown', function(event) {
	   if (event.key == "Escape") {
		   $('.app-search').removeClass('app-search-show');
		   $('#top').removeClass('no-overflow');
	   }
   });

   // on hover change color -third-tiles-
   // $('.refine-grid a.third-tiles').hover(
   // 	function () {
   // 		$('.refine-grid a.third-tiles svg g#Group-1').css({
   // 			'fill' : '#f38d83',
   // 			'stroke' : '#f38d83',
   // 		});
   // 	},
   // 	function () {
   // 		$('.refine-grid a.third-tiles svg g#Group-1').css({
   // 			'fill' : 'transparent',
   // 			'stroke' : '#444'
   // 		});
   // 	}
   // );


   // on click change column -third-tiles-
   $('.refine-grid a.third-tiles, .refine-grid a.third-tiles.active').on('click', function(e){
   
	   $('.col-product').addClass('col-md-4');
	   $('.col-product').removeClass('col-md-6');

	   $('.refine-grid a.third-tiles').addClass('active');
	   $('.refine-grid a.half-tiles').removeClass('active');
   
	   e.preventDefault();

   });

   // on click change color -half-tiles-
   // $('.refine-grid a.half-tiles').hover(
   // 	function () {
   // 		$('.refine-grid a.half-tiles svg g#Group-2').css({
   // 			'fill' : '#f38d83',
   // 			'stroke' : '#f38d83'
   // 		});
   // 	},
   // 	function () {
   // 		$('.refine-grid a.half-tiles svg g#Group-2').css({
   // 			'fill' : 'transparent',
   // 			'stroke' : '#444'
   // 		});
   // 	}
   // );

   // on click change column -half-tiles-
	$('.refine-grid a.half-tiles, .refine-grid a.half-tiles.active').on('click', function(e){
   
	   $('.col-product').addClass('col-md-6');
	   $('.col-product').removeClass('col-md-4');
	   
	   $('.refine-grid a.half-tiles').addClass('active');
	   $('.refine-grid a.third-tiles').removeClass('active');
   
	   e.preventDefault();

   });

	$('#val-min').on('click', function(e){
	
		var quantity = parseInt($('.qty-input').val()) - 1;
		if(quantity > 0){
			$('.qty-input').val(quantity);
		}

		e.preventDefault();

	});
	$('#val-plus').on('click', function(e){
   
		var quantity = parseInt($('.qty-input').val()) + 1;
		if(quantity > 0){
			$('.qty-input').val(quantity);
		}

		e.preventDefault();

	});

   $(document).on('click', ".slick-current.slick-active .image-loaded", function(e) {
	
		$('.product-full-size-image').css({
			'background-image' : 'url('+$('.slick-current.slick-active .image-loaded').attr('src') +')'
		});
		$('.product-full-size-image').addClass('show');
	
		e.preventDefault();

	});
	$(document).on('click', ".close-full-size-image", function(e) {
	
		$('.product-full-size-image').removeClass('show');
	
		e.preventDefault();

	});

	$(document).on('click', ".product-options .product-options-container .product-price.mobile p", function(e) {

		$('.product-options .product-options-container .product-price.mobile p').addClass("show");
		$('.product-description').css({
			'max-height' : $('.product-description-content').height()*1.2 + 'px'
		});
	
		e.preventDefault();

	});

	$(document).on('click', ".product-options .product-options-container .product-price.mobile p.show", function(e) {
	
		$('.product-options .product-options-container .product-price.mobile p').removeClass("show");
		$('.product-description').css({
			'max-height' : ''
		});
	
		e.preventDefault();

	});

	$(document).on('click', ".product-options .product-options-collaspe", function() {
	
		$('.product-options').addClass('product-options-close');
		$('.product-options .product-options-collaspe .product-options-toggle').css({
			'background-image' : 'url('+ base_url +'assets/images/chevron_up.svg)'
		});
		$('.product-options .product-options-collaspe .product-options-toggle p').text('SHOW');

	});
	$(document).on('click', ".product-options-close .product-options-collaspe", function() {

		$('.product-options').removeClass('product-options-close');
		$('.product-options .product-options-collaspe .product-options-toggle').css({
			'background-image' : 'url('+ base_url +'assets/images/chevron_down.svg)'
		});
		$('.product-options .product-options-collaspe .product-options-toggle p').text('HIDE');

	});
	
	$(document).on('click', ".product-details .product-details-container .product-details-material", function(e) {
	
		$('.product-details .product-details-container .product-details-material').addClass('opened');

		e.preventDefault();
	});
	$(document).on('click', ".product-details .product-details-container .product-details-material.opened", function(e) {
	
		$('.product-details .product-details-container .product-details-material').removeClass('opened');

		e.preventDefault();
	});
	$(document).on('click', ".product-details .product-details-container .product-details-origin", function(e) {
	
		$('.product-details .product-details-container .product-details-origin').addClass('opened');

		e.preventDefault();
	});
	$(document).on('click', ".product-details .product-details-container .product-details-origin.opened", function(e) {
	
		$('.product-details .product-details-container .product-details-origin').removeClass('opened');

		e.preventDefault();
	});

	$(document).on('click', ".d_02", function() {
	
		$('.d_02').addClass('open');
	});
	$(document).on('click', ".d_02.open", function() {
	
		$('.d_02.open').removeClass('open');
	});

	//BATAS

	$(document).on('click', ".d_03", function() {
	
		$('.d_03').addClass('open');
	});
	$(document).on('click', ".d_03.open", function() {
	
		$('.d_03.open').removeClass('open');
	});

	// BATAS

	$(document).on('click', ".d_04", function() {
	
		$('.d_04').addClass('open');
	});
	$(document).on('click', ".d_04.open", function() {
	
		$('.d_04.open').removeClass('open');
	});

	// BATAS

	$('.slick-for-main').slick({
		slidesToShow: 1,
		fade: true,
		dots: false,
		infinite: true,
		asNavFor: '.slick-nav-main',
		autoplay: false,
		draggable: false,
		swipe: false,
		swipeToSlide: false,
		touchMove: false,
		draggable: false,
		accessibility: false,
		arrows: false,
		responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				draggable: true,
				dots: true,
				swipe: true,
				swipeToSlide: true,
				touchMove: true,
				draggable: true,
				accessibility: true,
				arrows: true
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
				draggable: true,
				dots: true,
				swipe: true,
				swipeToSlide: true,
				touchMove: true,
				draggable: true,
				accessibility: true,
				arrows: true
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				draggable: true,
				swipe: true,
				dots: true,
				swipeToSlide: true,
				touchMove: true,
				draggable: true,
				accessibility: true,
				arrows: true
			  }
			}
		  ]
	  });
	  $('.slick-nav-main').slick({
		slidesToShow: 3,
		infinite: false,
		asNavFor: '.slick-for-main',
		dots: false,
		focusOnSelect: true
	  });
	  $('.material-track').slick({
		fade: true,
		prevArrow: $('.swatch-prev'),
		nextArrow: $('.swatch-next')
	  });

	

})(jQuery);

