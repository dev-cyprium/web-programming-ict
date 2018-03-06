(function($) {

  var dimensions;
  var currentImage;
  var $container;
  var opts;
  var dime

  var methods = {
    init: init,
    next: next
  }

  $.fn.slider = function(methodOptions) {
    if(methods[methodOptions]) {
      return methods[methodOptions].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if(typeof methodOptions === 'object' || !methodOptions) {
      return methods.init.apply(this, arguments);
    } else {
      $.error('Method ' + methodOptions + ' does not exist on jQuery.slider');
    }
  }

  function init() {
    opts = {
      speed: 2500
    }
    $container = $("<div>");
    $container.addClass('image-container').appendTo(this);
    this.find('img').appendTo($container);
    w = this.find('img').eq(0).width();
    h = this.find('img').eq(0).height();
    dimensions = {width: w, height: h};
    $container.css({
      width: 3*w + "px",
      height: h + "px",
      transition: "all 1s ease-out"
    });
    currentImage = this.find('img').eq(0);
    this.find('img').show();
    return this;
  }

  function next() {
    var nextImage = getNext();
    var slideTo   = nextImage.position().left;
    $container.css('transform', `translate3d(-${slideTo}px, 0, 0)`)
    setTimeout(function() { currentImage = nextImage }, 1000);
  }

  function getNext() {
    return currentImage.next().length ? currentImage.next() : currentImage.parent().children(':first-child');
  }
})(jQuery);


$(document).ready(function() {
  var slider = $(".my-slider").slider();
  $("#next").click(function() {
    slider.slider('next');
  })
});
