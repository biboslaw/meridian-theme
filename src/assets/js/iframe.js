document.addEventListener('DOMContentLoaded', function() {
    var params = window.location.search;

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

    //if (typeof event.data === ( 'number' || 'array' ) && event.data.indexOf("https://portal.meridianenglish.com:8447") !== -1) {
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
}, true)