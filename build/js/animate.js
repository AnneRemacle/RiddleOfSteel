(function($) {

  /**
   * Copyright 2012, Digital Fusion
   * Licensed under the MIT license.
   * http://teamdf.com/jquery-plugins/license/
   *
   * @author Sam Sehnert
   * @desc A small plugin that checks whether elements are within
   *     the user visible viewport of a web browser.
   *     only accounts for vertical position, not horizontal.
   */

  $.fn.visible = function(partial) {

      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop()+200,
          viewBottom    = viewTop + $w.height(),
          box_size      = $t.height(),
          _top          = $t.offset().top + box_size,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;

    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };

})(jQuery);

var win = $(window);
var left = $(".left");
var right = $(".right");
var clubs = $(".club-item");
var socials = $(".socials-single");


left.each(function(i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("already-visible");
  }
});

win.scroll(function(event) {
  left.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
        el.removeClass("invisible");
      el.addClass("fade-in-left");
    }
  });
});

right.each(function(i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("already-visible");
  }
});

win.scroll(function(event) {
  right.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
        el.removeClass("invisible");
      el.addClass("fade-in-right");
    }
  });
});

clubs.each(function(i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("already-visible");
  }
});

win.scroll(function(event) {
  clubs.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
        el.removeClass("invisible");
      el.addClass("scale-in-center");
    }
  });
});


socials.each(function(i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("already-visible");
  }
});

win.scroll(function(event) {
  socials.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
        el.removeClass("invisible");
      el.addClass("scale-in-center");
    }
  });
});
