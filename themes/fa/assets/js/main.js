
(function ($) {
	"use strict";
   $(document).ready(function($){

    // $('#datepicker').datePicker();

    // tooltip
    $('[data-toggle="tooltip"]').tooltip()

			 // Sticky Menu
			$('.js--sticky-menu').waypoint(function(direction){
			   if(direction == 'down'){
			         $('.header-area').addClass('sticky');
			      } else {
			         $('.header-area').removeClass('sticky');
			   }
            });
            // Active Menu Color
            $('.main-menu li').on('click', function(){
                $('.main-menu li').removeClass('active');
                $(this).addClass('active');
            });

            

            // Search Trigger
            $('.search-trigger').on('click', function(){
                $('#search-modal').addClass('show');
                $('.search-overlay').addClass('show');
            });
            $('.search-overlay').on('click', function(){
                $(this).removeClass('show');
                $('#search-modal').removeClass('show');
            });
            // Search Trigger

      // Start Slider Carousel
      $('.slider-carousel').owlCarousel({
         items: 1,
         loop: true,
         dots: false,
         thumbs: false,
         nav: true,
         navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
         autoplay: true,
				 autoplayTimeout:3000,
             autoplayHoverPause:true,
        
      });
      // End Slider Carousel

      // Start Project Carousel
      $('.project-carousel').owlCarousel({
         loop: true,
         dots: false,
         thumbs: false,
         nav: true,
         navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
         autoplay: false,
				 autoplayTimeout:1000,
    		 autoplayHoverPause:true,
         responsive: {
            0:{
                items:1
            },
            767:{
                items: 2
            },
            992:{
                items: 4
            },
        },
      });
      // End Project Carousel //
      // Start Carousel Area
      $('.blog-carousel, .testimonial-carousel').owlCarousel({
         items: 1,
         loop: true,
         dots: false,
         thumbs: false,
         nav: true,
         navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
         autoplay: true,
				 autoplayTimeout:3000,
    		 autoplayHoverPause:true,
      });
      // End Carousel Area //
      // Start Brand Carousel
      $('.brand-carousel').owlCarousel({
         loop: true,
         dots: false,
         thumbs: false,
         autoplay: true,
				 autoplayTimeout:4000,
    		 autoplayHoverPause:true,
         responsive: {
            0:{
                items:2
            },
            768:{
                items: 3
            },
            992:{
                items: 6
            },
        },
      });
      // End Brand Carousel

       // Start Slick Nav
   $('#mobile-menu').slicknav({
    prependTo: '.show-mobile-menu',
    allowParentLinks: true
 });
 // End Slick Nav

//  Scroll Up
$.scrollUp({
    scrollName: 'scrollUp', // Element ID
    topDistance: '300', // Distance from top before showing element (px)
    topSpeed: 300, // Speed back to top (ms)
    animation: 'fade', // Fade, slide, none
    animationInSpeed: 200, // Animation in speed (ms)
    animationOutSpeed: 200, // Animation out speed (ms)
    scrollText: '<i class="fa fa-angle-up"></i>', // Text for element
    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
  });
//   Scroll Up

//   Magnific Popup
$(".video-play").magnificPopup({
    type: 'iframe',
});
//   End  Magnific Popup

// Smooth Scroll for IE/ EDGE/ SAFARI
$('a').on('click', function(event){
    if (this.hash !==''){
        event.preventDefault();

        var hash = this.hash;

        $('html, body').animate({
            scrollTop: $(hash).offset().top
            }, 800, function(){
            window.location.hash = hash;
        });
    }
});
// End Smooth Scroll for IE/ EDGE/ SAFARI

});
})(jQuery);

AOS.init({
//     // Global settings:
//   disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
//   startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
//   initClassName: 'aos-init', // class applied after initialization
//   animatedClassName: 'aos-animate', // class applied on animation
//   useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
//   disableMutationObserver: false, // disables automatic mutations' detections (advanced)
//   debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
//   throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

//   // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
//   offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
//   duration: 2000, // values from 0 to 3000, with step 50ms
//   easing: 'ease', // default easing for AOS animations
//   once: false, // whether animation should happen only once - while scrolling down
  mirror: true, // whether elements should animate out while scrolling past them
//   anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
})
