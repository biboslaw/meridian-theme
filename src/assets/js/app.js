var _isMobile = null;

var country_code = null;
var lc = null;
var params = window.location.search;
console.log(params); // var cc = ["gr", "pt", "it", "fr" "es", "hu" "cn"];
   
  
var myUrl = new URL(document.URL);	

window.onload = function(){		


    jQuery(function($) { // DOM is now ready and jQuery's $ alias sandboxed

   
        $('.sun_btn').click(function() {
            $('.home_summer').show();
		
            $('home_summer').addClass('popupSummer'); 
        });
	  
        $('.close').click(function() {
   	        $('.home_summer').hide();
        });

        

	});
}; 

var _isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (_isMobile.Android() || _isMobile.BlackBerry() || _isMobile.iOS() || _isMobile.Opera() || _isMobile.Windows());
    }
};

window.addEventListener('message', function (event) {

    if( event !== undefined && event.data !== undefined && event.data.indexOf("https://calculator.tellus.co.uk:8447") !== -1 ) {

        var data = JSON.parse(event.data);

        var iframe = null;

        iframe = document.getElementById('iFrameCalculator');

        if (iframe === null) {
            var iframes = jQuery("[id^=booking]");

            if (iframes.length > 0) {
                iframe = iframes[0];
            }
        }

        if (_isMobile != null && _isMobile.any()) {

            var heightContent = parseFloat(data.height);
            var height = heightContent + 10;

            iframe.height = height.toString() + "px";
        }
        else {
            iframe.height = (parseFloat(data.height) + 10).toString() + "px";
        }

        if (data.scrollTop === true) {

            var offset = 0;

            if (jQuery("#iFrameCalculator").length > 0) {
                offset = jQuery("#iFrameCalculator").offset().top - offset;
            }
            else {
                offset = jQuery("#booking").offset().top - offset;
            }

            jQuery("html, body").animate({ scrollTop: offset - 120 }, "slow");
        }

    }



}, false);

if (jQuery("[id^=booking]").length > 0) {
    var urlFull = jQuery("[id^=booking]").attr('src');
    var urlSplit = urlFull.split("?");



    //metemos el codigo del pais para las paginas egipcias.
    if (_languageWeb === "ar-eg") {
        if (params === "") {
            params = params + "?country=Egypt";
        }
        else {
            params = params + "&country=Egypt";
        }

    }

    if (params !== "") {
        var url = urlSplit[0] + params;

        jQuery("[id^=booking]").attr('src', url);
    }
    else {

    }
}

var screenWidth = jQuery(window).width();
setTimeout(function () {
    jQuery('#narrative-line').fadeIn(200);
}, 200);

jQuery(window).scroll(function (e) {
    var myHeight = jQuery(this).height();
    var myScrollTop = jQuery(this).scrollTop(); // var narrativeLineHeight = myHeight+myScrollTop-(myHeight/5);

    var narrativeLineHeight = myHeight + myScrollTop;
    jQuery('#narrative-line').height(narrativeLineHeight);
	var narrativeLineHeight1 = myHeight + myScrollTop - (myHeight);
	
    jQuery('#narrative-line').height(narrativeLineHeight1);
});


function ShowBanner()
{
	jQuery('.home_summer').show();		
	jQuery('home_summer').addClass('popupSummer'); 
	jQuery('.sun_btn').attr('style','display:none !important');
}

function CloseBanner()
{
	jQuery('.home_summer').hide();	
	jQuery('.sun_btn').show();
}


//#region ABOUT

//function showPopupPeri() {
//    jQuery(".popupPeri").addClass('open');
//}
//function hidePopupPeri() {
//    jQuery(".popupPeri").removeClass('open');
//}

//function showPopupKatie() {
//    jQuery(".popupKatie").addClass('open');
//}
//function hidePopupKatie() {
//    jQuery(".popupKatie").removeClass('open');
//}

//function showPopupRebecca() {
//    jQuery(".popupRebecca").addClass('open');
//}
//function hidePopupRebecca() {
//    jQuery(".popupRebecca").removeClass('open');
//}

function showPopupTeacher1() {
    jQuery(".popupTeacher1").addClass('open');
}
function hidePopupTeacher1() {
    jQuery(".popupTeacher1").removeClass('open');
}

function showPopupTeacher2() {
    jQuery(".popupTeacher2").addClass('open');
}
function hidePopupTeacher2() {
    jQuery(".popupTeacher2").removeClass('open');
}

function showPopupTeacher3() {
    jQuery(".popupTeacher3").addClass('open');
}
function hidePopupTeacher3() {
    jQuery(".popupTeacher3").removeClass('open');
}

function showPopupTeacher4() {
    jQuery(".popupTeacher4").addClass('open');
}
function hidePopupTeacher4() {
    jQuery(".popupTeacher4").removeClass('open');
}

function showPopupTeacher5() {
    jQuery(".popupTeacher5").addClass('open');
}
function hidePopupTeacher5() {
    jQuery(".popupTeacher5").removeClass('open');
}

function showPopupTeacher6() {
    jQuery(".popupTeacher6").addClass('open');
}
function hidePopupTeacher6() {
    jQuery(".popupTeacher6").removeClass('open');
}

function showPopupTeacher7() {
    jQuery(".popupTeacher7").addClass('open');
}
function hidePopupTeacher7() {
    jQuery(".popupTeacher7").removeClass('open');
}

function showPopupTeacher8() {
    jQuery(".popupTeacher8").addClass('open');
}
function hidePopupTeacher8() {
    jQuery(".popupTeacher8").removeClass('open');
}

function showPopupTeacher9() {
    jQuery(".popupTeacher9").addClass('open');
}
function hidePopupTeacher9() {
    jQuery(".popupTeacher9").removeClass('open');
}


//#endregion


function WacthVideo() {
    jQuery("#modalVideo").modal('show');

    jQuery("#videoModalYouTube").attr('src', 'https://www.youtube.com/embed/O77vg8W49iA?autoplay=1');
}

function CloseWacthVideo() {
    jQuery("#modalVideo").modal("hide");

    jQuery("#videoModalYouTube").attr("src", "");
}

function WacthVideoOnImage() {
    jQuery("#divWacthVideoOnImage").removeClass("opacityOne");
    jQuery("#divWacthVideoOnImage").addClass("opacityZero");

    jQuery("#divWacthVideoOnImageIframe").removeClass("opacityZero");
    jQuery("#divWacthVideoOnImageIframe").addClass("opacityOne");

    jQuery("#divWacthVideoOnImageIframe").width(jQuery("#imgVideoModalYouTubeOnImage").width());
    jQuery("#divWacthVideoOnImageIframe").height(jQuery("#imgVideoModalYouTubeOnImage").height());

    jQuery(window).on('resize', function() {
        jQuery("#divWacthVideoOnImageIframe").width(jQuery("#imgVideoModalYouTubeOnImage").width());
        jQuery("#divWacthVideoOnImageIframe").height(jQuery("#imgVideoModalYouTubeOnImage").height());
    });


    jQuery("#videoModalYouTubeOnImage").attr("src", "https://www.youtube.com/embed/O77vg8W49iA?autoplay=1");
}

function WacthVideoOnImageMobile() {
    jQuery("#divWacthVideoOnImageMobile").removeClass("opacityOne");
    jQuery("#divWacthVideoOnImageMobile").addClass("opacityZero");

    jQuery("#divWacthVideoOnImageIframeMobile").removeClass("opacityZero");
    jQuery("#divWacthVideoOnImageIframeMobile").addClass("opacityOne");

    jQuery("#divWacthVideoOnImageIframeMobile").width(jQuery("#imgVideoModalYouTubeOnImageMobile").width());
    jQuery("#divWacthVideoOnImageIframeMobile").height(jQuery("#imgVideoModalYouTubeOnImageMobile").height());

    jQuery(window).on('resize', function () {
        jQuery("#divWacthVideoOnImageIframeMobile").width(jQuery("#imgVideoModalYouTubeOnImageMobile").width());
        jQuery("#divWacthVideoOnImageIframeMobile").height(jQuery("#imgVideoModalYouTubeOnImageMobile").height());
    });


    jQuery("#videoModalYouTubeOnImageMobile").attr("src", "https://www.youtube.com/embed/O77vg8W49iA?autoplay=1");
}


function LazyLoadImg(loadIframe) {

    if ("loading" in HTMLImageElement.prototype) {
        //console.log("Browser support loading lazy");

        //cargamos las propiedades de los iframes
        if (loadIframe === true) {

            //cargamos las propiedades de las imagenes
            const iframes = document.querySelectorAll('iframe[loading="lazy"]');
            iframes.forEach((iframe) => {
                jQuery(iframe).attr('data-src', iframe.src);
                jQuery(iframe).addClass("lazyload");
            });

            //cargamos el js
            let script = document.createElement("script");
            //script.async = true;
            script.src = "/wp-content/themes/meridian/js/lazyload/lazysizes-5.2.2.min.js";
            document.body.appendChild(script);
        }

    } else {
        //console.log("Not supported loading lazy");

        //cargamos las propiedades de las imagenes
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach((img) => {
            jQuery(img).attr('data-src', img.src);
            jQuery(img).addClass("lazyload");
        });

        //cargamos las propiedades de los iframes
        if (loadIframe === true) {
            const iframes = document.querySelectorAll('iframe[loading="lazy"]');
            iframes.forEach((iframe) => {
                jQuery(iframe).attr('data-src', iframe.src);
                jQuery(iframe).addClass("lazyload");
            });
        }

        //cargamos el js
        let script = document.createElement("script");
        //script.async = true;
        script.src = "/wp-content/themes/meridian/js/lazyload/lazysizes-5.2.2.min.js";
        document.body.appendChild(script);
    }

}

function CarouselReviewIndex() {
    /*Carousel*/
    jQuery('#carouselReviewIndex').on('slide.bs.carousel', function (e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 3;
        var totalItems = jQuery('#carouselReviewIndex .carousel-item').length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
                // append slides to end
                if (e.direction == "left") {
                    jQuery('#carouselReviewIndex .carousel-item').eq(i).appendTo('#carouselReviewIndex .carousel-inner');
                }
                else {
                    jQuery('#carouselReviewIndex .carousel-item').eq(0).appendTo('#carouselReviewIndex .carousel-inner');
                }
            }
        }
    });
}
document.addEventListener("DOMContentLoaded", (evnt) => {
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the <span> element that closes the modal
    var span = document.querySelector(".wow-close");

    if( span ) {
        // When the user clicks on <span> (x), close the modal
        span.addEventListener( 'click', function() {
        modal.style.display = "none";
        }, true)        
    }


    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener( 'click', function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }, true)
} )

// jQuery(document).on("mouseleave", function(e) {
//     if (e.pageY - jQuery(window).scrollTop() <= 1) {    
//         jQuery('#myModalLeave').css('display', 'flex');
//     }
// });

document.addEventListener('mouseleave', e=>{

    if( document.querySelector('#myModalLeave') ) {
        document.querySelector('#myModalLeave').style.display = 'flex';

        modal = document.querySelector('#myModalLeave')

        window.addEventListener( 'click', function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }, true)
        var span = document.querySelector(".wow-close");

        if( span ) {
            // When the user clicks on <span> (x), close the modal
            span.addEventListener( 'click', function() {
            modal.style.display = "none";
            }, true)        
        }        
    }
        
})

jQuery( document ).ready(function() {

    jQuery( '.wow-dropdown-toggle' ).on( 'click', function( ev ) {
        console.log( jQuery( '#sharedSocialMediaMenuPlugin1' ))
        jQuery( '#wowSharedSocialMediaMenuPlugin1' ).toggleClass( 'wow-hide' );
    } )

});