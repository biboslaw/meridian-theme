jQuery(document).ready(function(){

  if( jQuery( '#teacher-slider' ) ) {
    if( jQuery( window ).width() >= 1024 ) {
      jQuery( '#teacher-slider' ).slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: jQuery('.teacher-arrow-left'),
        nextArrow: jQuery('.teacher-arrow-right'),
      })
    } else if ( jQuery( window ).width() < 1024 && jQuery( window ).width() >= 768 ) {
      jQuery( '#teacher-slider' ).slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: jQuery('.teacher-arrow-left'),
        nextArrow: jQuery('.teacher-arrow-right'),
      })
    } else if ( jQuery( window ).width() < 768 ) {
      jQuery( '#teacher-slider' ).slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: jQuery('.teacher-arrow-left'),
        nextArrow: jQuery('.teacher-arrow-right'),
        arrows: false,
        dots: true    
      })
    }
  }

  if( jQuery( '#acreditation-slider' ) ) {
    jQuery( '#acreditation-slider' ).slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false, 
      dots: true, 
    });
  }

  if( jQuery( '#press-slider' ) ) {
    jQuery( '#press-slider' ).slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false, 
      dots: true, 
    });
  }

  if( jQuery( '#reviews-slider' ) ) {
    jQuery( '#reviews-slider' ).slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 2,
      arrows: true,
      prevArrow: jQuery('.review-arrow-left'),
      nextArrow: jQuery('.review-arrow-right'),  
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,   
            arrows: false,
            dots: true         
          }

        }
      ]
    }).on('setPosition', function (event, slick) {
      console.log(slick.$slideTrack.hasClass('sizes-set-up'))
      if( !slick.$slideTrack.hasClass('sizes-set-up') ) {
        const sliderHeight = slick.$slideTrack.height();

        const slides = slick.$slideTrack.find('.slick-slide');
        slides.each(function(){

            jQuery(this).find('.single-review').parent().height( sliderHeight );
            jQuery(this).find('.single-review').height( sliderHeight );

        })
        slick.$slideTrack.addClass('sizes-set-up');        
      }


  });
  }

  const teachersButton = jQuery( '.teacher-button' );
  const teachersBioClose = jQuery( '.teacher-bio-close' );

  if( teachersButton ) {
    teachersButton.each( function(index,element) {
      jQuery(this).on('click', (ev) => {
        ev.stopPropagation();
        jQuery(this).parent().parent().find('.teacher-bio').addClass('teacher-bio-active').css("display", "flex").hide().fadeIn("fast");
      })  

    } );
    
  }

  jQuery('body').on('click', (e) => {
    if( jQuery('.teacher-bio-active') ) {
      jQuery('.teacher-bio-active').fadeOut('fast');
      jQuery(this).unbind('click')          
    }

  })

});