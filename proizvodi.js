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
