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

  fetchProduct();
});


function fetchProduct() {
  $.ajax({
    method: 'get',
    url: '/podaci/gitare.json',
    success: function(data) {
      data.forEach(function(pr) {
        var t = $(proizvodTemplate(pr));
        $("#produkti").append(t);
      });
    }
  });
}

function proizvodTemplate(data) {
  var html = `<div class="col-lg-4">
    <div class="card h-100">
      <a href="#">
        <img class="card-img-top" src="${data.src}" />
      </a>
      <div class="card-body">
        <h4 class="class-title">${data.name}</h4>
        <h5>${data.price}</h5>
        <p class="card-text">${data.opis}</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">${zvezdice(data.ocena)}</small>
      </div>
    </div>
  </div>`;
  return html;
}

function zvezdice(broj) {
  var str = "";
  for(var i=0; i < 5; i++) {
    if(i < broj) str += "★" ;
    else str += "☆";
  }
  return str;
}
