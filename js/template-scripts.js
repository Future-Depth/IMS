jQuery(document).ready(function($) {  
  // Owl Carousel                     
  var owl = $('.carousel-default');
  owl.owlCarousel({
    nav: true,
    dots: true,
    items: 1,
    loop: true,
    navText: ["&#xe605","&#xe606"],
    autoplay: true,
    autoplayTimeout: 5000
  });

  // Owl Carousel - Content Blocks  
  var owl = $('.carousel-blocks');
  owl.owlCarousel({
    nav: false,
    dots: true,
    items: 6,
    responsive: {
      0: {
        items: 2
      },
      481: {
        items: 3
      },
      769: {
        items: 6
      }
    },
    loop: true,
    navText: ["&#xe605","&#xe606"],
    autoplay: true,
    autoplayTimeout: 5000
  });
  
  // Owl Carousel - Content 3 Blocks
  var owl = $('.carousel-3-blocks');
  owl.owlCarousel({
    nav: true,
    dots: true,
    items: 3,
    responsive: {
      0: {
        items: 1
      },
      481: {
        items: 2
      },
      769: {
        items: 3
      }
    },
    loop: true,
    navText: ["&#xe605","&#xe606"],
    autoplay: true,
    autoplayTimeout: 5000
  });  
  
  var owl = $('.carousel-fade-transition');
  owl.owlCarousel({
    nav: true,
    dots: true,
    items: 1,
    loop: true,
    navText: ["&#xe605","&#xe606"],
    autoplay: true, 
    animateOut: 'fadeOut',
    autoplayTimeout: 5000
  });
  
  // skillbar
  $('.skillbar').bind('inview', function (event, visible) {
    if (visible) {  
      $('.skillbar').each(function(){
  	    $(this).find('.skillbar-bar').animate({
  	   	  width:$(this).attr('data-percent')
  	    },3000);
      });
       
    } 
  });
  
  
  // Sticky Nav Bar
  $(window).scroll(function() {
    if ($(this).scrollTop() > 20){  
        $('.sticky').addClass("fixed");
    }
    else{
        $('.sticky').removeClass("fixed");
    }
  });
  
  
  // Custom scripts
  $('.carousel-center').owlCarousel({
    center: true,
    items:2,
    loop:true,
    nav: true,
    dots: false,
    margin:30,
    navText: ["&#xe605","&#xe606"],
    autoplay: true,
    autoplayTimeout: 5000,
    responsive: {
      0: {
        items: 1
      },
      481: {
        items: 2
      },
      769: {
        items: 2
      }
    },
  });
  
});