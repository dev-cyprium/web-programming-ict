function Note(svgElement, maxLeft) {
  this.svgElement = svgElement;
  this.left = 0; // initial left
  this.maxLeft = maxLeft
}

Note.prototype.startMoving = function() {
  setInterval(this.move.bind(this), 10);
}

Note.prototype.move = function() {
  this.left += 2;

  if(this.left > this.maxLeft) this.left = 0;

  // Update the dom element
  this.svgElement.css({
    "left": this.left + "px"
  });
}


$(document).ready(function() {
  // init
  var note1 = new Note($(".violin-key").first(), 300);
  note1.startMoving();
});
