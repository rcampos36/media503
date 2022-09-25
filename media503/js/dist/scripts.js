// Can also be used with $(document).ready()
jQuery(document).ready(function(){
  $('.flexslider').flexslider({
    animation: "slide"
  });

  $('.flexslider').flexslider({
    animation: "testimonial_slides"
  });

  // Dropdown Menu Fade    
    $(".menu-right-menu-container .menu .menu-item").on('click', function(e) {
      e.preventDefault();
      $(".right-menu-dropdown").toggleClass("open", 1000)
    })


  //responsive menu
  var menuTrigger = $('.dc-menu-trigger');

	var isToggled = false;

	menuTrigger.on('click', function(e){
	  e.preventDefault();  
	  $('header').toggleClass( "dc-menu-open" );
	  if(!isToggled){
	   $(this).find('.fa').addClass('rotate-clockwise').removeClass('rotate-counter');
	    isToggled = true;
	    $('#responsive-menu').slideToggle();
	  }else{
	    $(this).find('.fa').addClass('rotate-counter').removeClass('rotate-clockwise');
	    $('#responsive-menu').slideToggle();
	    isToggled = false;
	  }
	  
	}); 

  // CTA popups
  $(function() {
    $('.popup').on('click', function(e) {
      e.preventDefault();
      var popupId = $(this).attr('data-panelid');
      $('#'+popupId).addClass('active');
      $('body').css('overflow', 'hidden');
    });

    $('.modal-close').on('click', function() {
      $(this).parent().removeClass('active');
      $('body').css('overflow', 'auto');
    });
  });

	// // Hope popup

	// $('.cta-hope--link').click(function(e) {
	// 	e.preventDefault();
 //      $('.hope--popup').addClass('active');
 //      $('body').css('overflow', 'hidden');
 //   });
 //  $('.modal-close').click(function() {
 //      $(this).parent().removeClass('active');
 //      $('body').css('overflow', 'auto');
 //   });

   // partners
  $('.partners-wrapper--logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });

  //people bios
  //leadeship

  $(function () {
    $('.showSingleLeader').on('click', function (e) {
      e.preventDefault();
      $(".leadership-overlay").addClass("active");
        var index = $('.showSingleLeader').index(this),
            newTarget = $('.targetDivLeader').eq(index).slideDown();
        $(".close").show("fast");
        $('.targetDivLeader').not(newTarget).slideUp();
        $('body').css('overflow', 'hidden');
    });

    $(".close").on('click', function(e){
      e.preventDefault();
        $(".leadership-overlay").removeClass("active");
        $('body').css('overflow', 'auto');
    });
  });
  
  //board
  $(function () {
    $('.showSingleBoard').on('click', function (e) {
      e.preventDefault();
      $(".board-overlay").addClass("active");
        var index = $('.showSingleBoard').index(this),
            newTarget = $('.targetDivBoard').eq(index).slideDown();
        $(".close").show("fast");
        $('.targetDivBoard').not(newTarget).slideUp();
        $('body').css('overflow', 'hidden');
    });

    $(".close").on('click', function(e){
      e.preventDefault();
        $(".board-overlay").removeClass("active");
        $('body').css('overflow', 'auto');
    });
  });

  //staff
  $(function () {
    $('.showSingleStaff').on('click', function (e) {
      e.preventDefault();
      $(".staff-overlay").addClass("active");
       var index = $('.showSingleStaff').index(this),
            newTarget = $('.targetDivStaff').eq(index).slideDown();
        $(".close").show("fast");
        $('.targetDivStaff').not(newTarget).slideUp();
        $('body').css('overflow', 'hidden');
    });

    $(".close").on('click', function(e){
      e.preventDefault();
        $(".staff-overlay").removeClass("active");
        $('body').css('overflow', 'auto');
    });
  });


 // ================= how we lift accordion ======================
  // $('.how-we-lift--card-toggle').click(function(e) {
  //   e.preventDefault();
  
  //   var $this = $(this);
  
  //   if ($this.next().hasClass('show')) {
  //       $this.next().removeClass('show');
  //       $this.next().slideUp(350);
  //   } else {
  //       $this.parent().parent().find('li .how-we-lift--card--info-inner').removeClass('show');
  //       $this.parent().parent().find('li .how-we-lift--card--info-inner').slideUp(350);
  //       $this.next().toggleClass('show');
  //       $this.next().slideToggle(350);
  //   }
  // });

  // $(function(){
  //   $('ul.accordion li a').eq(0).trigger('click');
  // });


  $(function(){
   AOS.init({
      useClassNames: true,
      initClassName: 'aos-init',
      animatedClassName: 'aos-animate',
      offset: 300,
      once: true
    });
  });

  // =================== Staff filter ============================ //

  /**
   * Fancy Isotope transitions for filtering people
   */

  // var $leader = $('.leadership-wrapper').isotope({
  //   // options
  //   itemSelector: '.leadership-wrapper--card',
  //   masonry: {
  //     columnWidth: 256,
  //     isFitWidth: true
  //   }
  // });

  // // filter items on button click
  // $('.leadersip-filter-button-group').on( 'click', 'button', function() {
  //   $(this).addClass("location-active").siblings().removeClass("location-active");
  //   var filterValue = $(this).attr('data-filter');
  //   $leader.isotope({ filter: filterValue });
  // });

  // $(function(){
  //   $('.leadership-button-group .leader').eq(0).trigger('click');
  // });

  // $leader.imagesLoaded().progress( function() {
  //   $leader.isotope('layout');
  // });

  var $board = $('.board-wrapper--content').isotope({
    // options
    itemSelector: '.board-wrapper--content-card',
    layoutMode: 'fitRows'
  });

  // filter items on button click
  $('.board-filter-button-group').on( 'click', 'button', function() {
    $(this).addClass("location-active").siblings().removeClass("location-active");
    var filterValue = $(this).attr('data-filter');
    $board.isotope({ filter: filterValue });
  });

  $(function(){
    $('.board-filter-button-group .board').eq(0).trigger('click');
  });

  $board.imagesLoaded().progress( function() {
    $board.isotope('layout');
  });

  var $staff = $('.staff-wrapper').isotope({
    // options
    itemSelector: '.staff-wrapper--card',
    layoutMode: 'fitRows',
    masonry: {
      columnWidth: 225,
      isFitWidth: true
    }
  });

  $(function(){
    $('.staff-filter-button-group .staff').eq(0).trigger('click');
  });

  // filter items on button click
  $('.staff-filter-button-group').on( 'click', 'button', function() {
    $(this).addClass("location-active").siblings().removeClass("location-active");
    var filterValue = $(this).attr('data-filter');
    $staff.isotope({ filter: filterValue });
  });

  // layout Isotope after each image loads
  $staff.imagesLoaded().progress( function() {
    $staff.isotope('layout');
  });

  // ======================= dont display fields if empty ========================== //

  $('.menu-right-menu-container .menu-item a:empty').hide();

  $('.popup-wrapper p:empty').hide();

  skrollr.init({          
      mobileCheck: function() {
          //hack - forces mobile version to be off
          return false;
      }
  });

  // ======================== Impact opage accordion ======================== //
  $('.black-heading-with-text--title').click(function(e) {
    e.preventDefault();
  
    var $this = $(this);
  
    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
    } else {
        $this.parent().parent().find('.paragraph').removeClass('show');
        $this.parent().parent().find('.paragraph').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
    }
  });

  /* Modals */
  // open
  $(".signup-link a").addClass("signup-link modal-open");
  $(".signup-link a").attr('data-modal-target','#signup-modal');
  $('.modal-open').click(function(e){
    e.preventDefault();
    var selector = $(this).data('modal-target');
    var $target = $(selector);
    $(selector + '.modal.overlay').removeClass('hidden');
    $('body').addClass('has-modal');
    $(document).on('keyup click', maybeHideOverlay);
  });
  // close
  function maybeHideOverlay(e) {
    // overlay or x click
    if (e.type == 'click' && $(e.target).is('.modal.overlay, .close')) {
      hideOverlay();
    }
    // esc key press
    else if (e.type == 'keyup' && e.keyCode == 27) {
      hideOverlay();
    }
  }
  function hideOverlay() {
    $('.modal.overlay').addClass('hidden');
    $('body').removeClass('has-modal');
    $(document).off('keyup click', maybeHideOverlay);
  }

})

 // ======================== About page mobile team accordion ======================== //

 $(window).on("resize", function () {
    checkScreenSize();
});

checkScreenSize();

function checkScreenSize(){
    var newWindowWidth = $(window).width();
    if (newWindowWidth < 500) {
      $('.staff--title').click(function(e) {
        e.preventDefault();

      $(function(){
        $('.staff-filter-button-group .staff').eq(0).trigger('click');
      });
      
        var $this = $(this);
      
        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.next().slideUp(1250);
        } else {
            $this.parent().parent().find('.mobile-staff-wrapper').removeClass('show');
            $this.parent().parent().find('.mobile-staff-wrapper').slideUp(1150);
            $this.next().toggleClass('show');
            $this.next().slideToggle(1150);
        }
      });  

      $('.board-wrapper--title').click(function(e) {

        $(function(){
          $('.board-filter-button-group .board').eq(0).trigger('click');
        });
      
        var $this = $(this);
      
        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.next().slideUp(850);
        } else {
            $this.parent().parent().find('.mobile-board-wrapper').removeClass('show');
            $this.parent().parent().find('.mobile-board-wrapper').slideUp(850);
            $this.next().toggleClass('show');
            $this.next().slideToggle(850);
        }
      });  
    }
}

