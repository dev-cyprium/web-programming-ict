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

  var tip = getParameterByName("tip") || "svi";
  initLinks();
  fetchProduct(tip);
});

function initLinks() {
  $("#navBar a").click(function(e) {
    e.preventDefault();
    var target = $(this).data('target');
    fetchProduct(target);
  });
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function fetchProduct(tip) {
  if(tip == "svi") {
    dohvatiSve([], function(sve) {
      var data = sve.reduce((acc, current) => { return acc.concat(current); }, [])
      prikazi(data);
      bind_search(data);
    });
  } else {
    $.ajax({
      method: 'get',
      url: '/podaci/' + tip + '.json',
      success: function(data) {
        prikazi(data);
        bind_search(data);
      }
    });
  }
}

function bind_search(data) {
  $("#search-form").off();
  $("#search-form").submit(function(e) {
    e.preventDefault();
    var searchVal = $("#search-form input").val();
    var regex     = new RegExp(searchVal, "gi");
    var toPrikaz = data.filter(function(item) {
      if(searchVal == "") return true;
      return regex.test(item.name);
    });
    prikazi(toPrikaz);
  })
}

function prikazi(data) {
  $("#produkti").html("");
  data.forEach(function(pr) {
    var t = $(proizvodTemplate(pr));
    $("#produkti").append(t);
  });
}

function dohvatiSve(niz, gotovo) {
  var proizvodi = [
    "bass_gitare",
    "bubnjevi",
    "gitare",
    "oprema",
    "ploce"
  ]

  var count = 0;
  var zavrsio = function(data) {
    count++;
    niz.push(data);
    if(count == proizvodi.length - 1) {
      gotovo(niz);
    }
  }

  $.each(proizvodi, function(index, elem) {
    $.ajax({
      method: 'get',
      url: '/podaci/' + elem + '.json',
      success: function(data) {
        zavrsio(data);
      }
    })
  });
}

function proizvodTemplate(data) {
  var html = `<div class="col-lg-4">
    <div class="card h-100">
      <a href="${data.src}" data-lightbox="instruments" data-title="${data.name}">
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
