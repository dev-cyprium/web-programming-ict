(function($) {
  /*
    @author Kupresak Stefan
    @version 1.0.0
    @name MySlider
  */
  var dimensions;
  var currentImage;
  var $container, labels, opts;
  var mouseInside;
  var $leftArrow;

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
    var duration = config.autoSlide.duration || 1000;
    var autoSlide = config.autoSlide.enabled || false;

    $container = $("<div>");
    $container.addClass('image-container').appendTo(this);
    this.find('img').appendTo($container);
    var w = this.find('img').eq(0).width();
    var h = this.find('img').eq(0).height();
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

    $leftArrow = $(`
      <div class='left-arrow'>
        <span class='fas fa-chevron-left'></span>
      </div>
    `);

    $rightArrow = $(`
      <div class='right-arrow'>
        <span class='fas fa-chevron-right'></span>
      </div>
    `);

    this.append($leftArrow);
    this.append($rightArrow);

    this.hover(() => { mouseInside = true; }, () => { mouseInside = false; });

    $rightArrow.click(next);
    $leftArrow.click(prev);

    if(autoSlide) {
      setInterval(autoNext, duration);
    }

    return this;
  }

  function autoNext() {
    if(mouseInside) return true;
    next();
  }

  function prev() {
    var prevImage = getPrev();
    performSlide(prevImage);
  }

  function next() {
    var nextImage = getNext();
    performSlide(nextImage);
  }

  function performSlide(nextImage) {
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

  function getPrev() {
    return currentImage.prev().length ? currentImage.prev() : currentImage.parent().children(':last-child');
  }
})(jQuery);


$(document).ready(function() {
  var slider = $(".my-slider").slider({
    labels: [
      {text: "Professional pianos"},
      {text: "Awesome guitars"},
      {text: "Top quality drums"}
    ],
    autoSlide: {
      enabled: true,
      duration: 3200
    }
  });
});
