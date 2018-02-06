function Note(svgElement, maxLeft, maxHeight) {
  this.svgElement     = svgElement;
  this.left           = -30;
  this.maxLeft        = maxLeft + 10;
  this.moveSpeed      = 4;
  this.delay          = Math.floor(Math.random() * 30);
  this.top            = Math.floor(Math.random() * maxHeight);;
}

Note.prototype.startMoving = function() {
  this.delay -= 0.5;
  if(this.delay < 0) {
    window.requestAnimationFrame(this.move.bind(this));
  } else {
    window.requestAnimationFrame(this.startMoving.bind(this));
  }
}

Note.prototype.move = function() {
  this.left += this.moveSpeed;

  if(this.left > this.maxLeft) {
    this.left = -30;
  }
  // Update the dom element
  this.svgElement.css({
    "left": this.left + "px",
    "top": this.top + "px"
  });

  window.requestAnimationFrame(this.move.bind(this));
}


$(document).ready(function() {
  var notesContainer = $(".notes-container").first();
  // init
  $(".violin-key").each(function(index, elem) {
    var note = new Note($(elem), notesContainer.width(), notesContainer.height());
    note.startMoving();
  });
});
