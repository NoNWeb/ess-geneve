(function($) {
  "use strict";

  $(document).foundation({
    offcanvas : {
      close_on_click : true
    }
  }).on('opened.fndtn.reveal', '[data-reveal]', function () {
    $(window).trigger('resize');
  });

  //Run When Document Ready
  $(document).ready(function() {
    initPageFx();
    initCharts();
    initWow();
    initMailChimp();
    initFlexSlider();
    initSharingButtons();
    initProgressBars();
    initCounters();
  });

  // Animsition - Page Effects
  // ===================================

  function initPageFx() {
    $('.animsition').animsition({
      inClass: 'fade-in-up-sm',
      outClass: 'fade-out-down-sm',
      inDuration: 800,
      outDuration: 800,
      linkElement: '',
      loading: true,
      loadingParentElement: 'body', //animsition wrapper element
      loadingClass: 'loadSpinner',
      unSupportCss: [
                      'animation-duration',
                      '-webkit-animation-duration',
                      '-o-animation-duration'
                    ],
      overlay : false,
      overlayClass : 'animsition-overlay-slide',
      overlayParentElement : 'body'
    });
  }

  //  EasyPieChart
  //  ===============================================================================
  function initCharts() {
    $('.chart').appear(function () {
        $(this).easyPieChart({
            easing: 'easeInOutBack',
            barColor: '#1bbc9b',
            trackColor: '',
            scaleColor: false,
            lineWidth: '6',
            lineCap: 'round',
            size: '160',
            onStep: function (from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            }
        });
    });
  }

  //  WOW Animation
  //  ===============================================================================
  function initWow() {
    new WOW().init();
  }

  //  MailChimp
  //  ===============================================================================
  function initMailChimp() {
    $('#mc_form').ajaxChimp({
        language: 'pix',
        // Replace url with your unique list
        url: 'http://pixelosaur.us3.list-manage.com/subscribe/post?u=1056582cdc91fdd7076a2fe2d&id=2ca5725d55'
    });

    // Mailchimp translation
      //
      // Defaults:
      //'submit': 'Submitting...',
      //  0: 'We have sent you a confirmation email',
      //  1: 'Please enter a value',
      //  2: 'An email address must contain a single @',
      //  3: 'The domain portion of the email address is invalid (the portion after the @: )',
      //  4: 'The username portion of the email address is invalid (the portion before the @: )',
      //  5: 'This email address looks fake or invalid. Please enter a real email address'

    $.ajaxChimp.translations.pix = {
        'submit': 'Submitting...',
        0: '<i class="icon-check"></i> Thank you! We have sent you a confirmation email!',
        1: '<i class="icon-cross"></i> You must enter a valid e-mail address.',
        2: '<i class="icon-cross"></i> E-mail address is not valid.',
        3: '<i class="icon-cross"></i> E-mail address is not valid.',
        4: '<i class="icon-cross"></i> E-mail address is not valid.',
        5: '<i class="icon-cross"></i> E-mail address is not valid.'
    };
  }

  //  Flexslider
  //  ===============================================================================
  function initFlexSlider() {
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: false,
        slideshowSpeed: 3000,
        prevText: '<span class="icon-chevron-left"></span>',
        nextText: '<span class="icon-chevron-right"></span>'
    });
  }


  //  Pretty Social (Sharing Buttons)
  //  ===============================================================================
  function initSharingButtons() {
    $('.prettySocial').prettySocial();
  }

  //  Back To Top
  //  ===============================================================================
  // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function () {
        ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('cd-fade-out');
        }
    });

    //smooth scroll to top
    $back_to_top.on('click', function (event) {
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0
        }, scroll_top_duration
            );
    });

  //  Progress Bars
  //  ===============================================================================
  function initProgressBars() {
    $('.pro-bar').each(function(i, elem) {
      var $elem = $(this),
        percent = $elem.attr('data-pro-bar-percent'),
        delay = $elem.attr('data-pro-bar-delay');

      if (!$elem.hasClass('animated'))
        $elem.css({ 'width' : '0%' });

      $(elem).appear(function () {
        setTimeout(function() {
          $elem.animate({ 'width' : percent + '%' }, 2000, 'easeInOutExpo').addClass('animated');
        }, delay);
      });
    });
  }

  // Count To
  // ===============================================================================
  function initCounters() {
    $('.meter').appear(function () {
      $(this).countTo();
    }); 
  }

})(jQuery);
