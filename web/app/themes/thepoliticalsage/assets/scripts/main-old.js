const skel = require('./skel');

(function($) {

  skel.breakpoints({
    xlarge: '(max-width: 1680px)',
    large: '(max-width: 1280px)',
    medium: '(max-width: 980px)',
    small: '(max-width: 736px)',
    xsmall: '(max-width: 480px)',
    xxsmall: '(max-width: 360px)'
  });

  /**
   * Applies parallax scrolling to an element's background image.
   * @return {jQuery} jQuery object.
   */
  $.fn._parallax = (skel.vars.browser == 'ie' || skel.vars.browser == 'edge' || skel.vars.mobile) 
    ? function() { return $(this); } 
    : function(intensity) {

      var	$window = $(window),
        $this = $(this);

      if (this.length == 0 || intensity === 0) {
        return $this;
      }

      if (this.length > 1) {

        for (var i=0; i < this.length; i++) {
          $(this[i])._parallax(intensity);
        }

        return $this;

      }

      if (!intensity) {
        intensity = 0.25;
      }

      $this.each(function() {

        var $t = $(this),
          on, off;

        on = function() {

          $t.css('background-position', 'center 0px');

          $window
            .on('scroll._parallax', function() {

              var pos = parseInt($window.scrollTop()) - parseInt($t.position().top);

              $t.css('background-position', 'center ' + (pos * (-1 * intensity)) + 'px');

            });

        };

        off = function() {

          $t
            .css('background-position', '');

          $window
            .off('scroll._parallax');

        };

        skel.on('change', function() {

          if (skel.breakpoint('medium').active) {
            (off)();
          } else {
            (on)();
          }
        });

      });

      $window
        .off('load._parallax resize._parallax')
        .on('load._parallax resize._parallax', function() {
          $window.trigger('scroll');
        });

      return $(this);

  };

  $(function() {

    var	$window = $(window),
      $body = $('body'),
      $wrapper = $('#wrapper'),
      $header = $('#header'),
      $banner = $('#banner');

    // DISABLED so content shows up faster on slow connections
    // Disable animations/transitions until the page has loaded.
      // $body.addClass('is-loading');

      $window.on('load pageshow', function() {
        window.setTimeout(function() {
          $body.removeClass('is-loading');
        }, 100);
      });

    // Clear transitioning state on unload/hide.
      $window.on('unload pagehide', function() {
        window.setTimeout(function() {
          $('.is-transitioning').removeClass('is-transitioning');
        }, 250);
      });

    // Fix: Enable IE-only tweaks.
      if (skel.vars.browser == 'ie' || skel.vars.browser == 'edge') {
        $body.addClass('is-ie');
      }

    // Banner.
    $banner.each(function() {

      var $this = $(this),
        $image = $this.find('.image'), $img = $image.find('img');

      // Parallax.
      $this._parallax(0.275);

      // Image.
      if ($image.length > 0) {
        // Set image.
        $this.css('background-image', 'url(' + $img.attr('src') + ')');
        // Hide original.
        $image.hide();
      }
    });
  });

})($);
