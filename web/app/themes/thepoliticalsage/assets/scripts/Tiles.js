// Tiles.
module.exports = function($) {
  var $tiles = $('.tiles > article');
  var $wrapper = $('#wrapper');

  $tiles.each(function() {

    var $this = $(this),
      $image = $this.find('.image'), $img = $image.find('img'),
      $link = $this.find('.link'),
      x;

    // Image.

    // Set image.
    $this.css('background-image', 'url(' + $img.attr('src') + ')');

    // Set position.
    if (x = $img.data('position')) {
      $image.css('background-position', x);
    }
    // Hide original.
    $image.hide();

    // Link.
    if ($link.length > 0) {

      $x = $link.clone()
        .text('')
        .addClass('primary')
        .appendTo($this);

      $link = $link.add($x);

      $link.on('click', function(event) {

        var href = $link.attr('href');

        // Prevent default.
        event.stopPropagation();
        event.preventDefault();

        // Start transitioning.
        $this.addClass('is-transitioning');
        $wrapper.addClass('is-transitioning');

        // Redirect.
        window.setTimeout(function() {

          if ($link.attr('target') == '_blank') {
            window.open(href);
          } else {
            location.href = href;
          }
        }, 500);

      });
    }
  });
};
