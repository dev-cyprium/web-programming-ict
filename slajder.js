(function($) {

  var sliderContainer;
  var currentImage;
  var opts;

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
    this.find("img").hide();
    currentImage = this.find("img").eq(0);
    var imgHeight = currentImage.height();
    this.css('height', imgHeight + "px");
    currentImage.show();
  }

  function next() {
    // currentImage.hide();
    var nextImage = getNext();
    nextImage.show();
    var width = nextImage.width();
    nextImage.css({
        left: width + "px"
    });


    
    nextImage.animate({
      left: 0
    }, opts.speed);
    currentImage.animate({
      left: -width + "px"
    }, opts.speed);

    setTimeout(function() {currentImage = nextImage;}, 1000);
  }

  function getNext() {
    return currentImage.next().length ? currentImage.next() : currentImage.parent().children(':first-child');
  }
})(jQuery);


$(document).ready(function() {
  $(".my-slider").slider();
});
