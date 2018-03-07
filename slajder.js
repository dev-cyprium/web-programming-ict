(function($) {
  /*
    @author Kupresak Stefan
    @version 1.0.0
    @name MySlider
  */
  var dimensions;
  var currentImage;
  var $container, labels, opts;

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

  function init(config) {
    opts = {
      speed: 2500
    }
    labels = config.labels || [];

    $container = $("<div>");
    $container.addClass('image-container').appendTo(this);
    this.find('img').appendTo($container);
    w = this.find('img').eq(0).width();
    h = this.find('img').eq(0).height();
    dimensions = {width: w, height: h};
    $container.css({
      width: 3*w + "px",
      height: h + "px",
      transition: "all 0.5s linear"
    });
    currentImage = this.find('img').eq(0);
    this.find('img').show();

    var heading = labels[0].text;
    $label = $(`<h1>${heading}</h1>`);

    this.append($label);
    $label.animate({
      bottom: 0
    }, 1000);

    return this;
  }

  function next() {
    var nextImage = getNext();
    var slideTo   = nextImage.position().left;
    var height    = $label.height();
    $container.css('transform', `translate3d(-${slideTo}px, 0, 0)`)
    $label.css("bottom", `-${2*height+5}px`);
    $label.text( labels[nextImage.index()].text );
    setTimeout(function() {
      $label.animate({
        bottom: 0
      }, 1000);
      currentImage = nextImage
    }, 500);
  }

  function getNext() {
    return currentImage.next().length ? currentImage.next() : currentImage.parent().children(':first-child');
  }
})(jQuery);


$(document).ready(function() {
  var slider = $(".my-slider").slider({
    labels: [
      {text: "Professional pianos"},
      {text: "Awesome guitars"},
      {text: "Top quality drums"}
    ]
  });
  $("#next").click(function() {
    slider.slider('next');
  })
});
