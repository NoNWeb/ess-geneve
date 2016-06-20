(function($) {
  "use strict";

  $(document).ready(function() {
    initFullScreen();
    initOverlayMenu();
    });

    //Set header to window height
    function initFullScreen() {
        var wHeight = $(window).height();
        var navHeight = $('.bottomMenu').height();
        if (wHeight > 600 && !$('.top').hasClass('no-window')) {
            $('header.top').height(wHeight - navHeight);
        }
    }

    // HAMBURGLERv2
    function initOverlayMenu() {
        $(".icon").click(function () {
            $("#overlay").fadeToggle(500);
            $(".top-menu").toggleClass("top-animate");
            $(".mid-menu").toggleClass("mid-animate");
            $(".bottom-menu").toggleClass("bottom-animate");
        });

        $("#overlay li a").click(function () {
            $(".#overlay").fadeToggle(500);
            $(".top-menu").toggleClass("top-animate");
            $(".mid-menu").toggleClass("mid-animate");
            $(".bottom-menu").toggleClass("bottom-animate");
        });
    }

    // SMOOTH SCROLL
    $(document).ready(function() {
        $('a').click(function () {
            $.scrollTo(
                $(this).attr("href"),
                {
                    duration: 1000,
                     offset: { 'left': 0, 'top': 0 }
                }
            );
        }); 
    });

})(jQuery);