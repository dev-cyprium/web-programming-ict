document.addEventListener('DOMContentLoaded', function() {
  var form = document.getElementsByTagName('form')[0];
  form.addEventListener('submit', function(e) {
    if(validate()) {
      e.preventDefault();
      return false;
    }
  });
});

function q(selector) {
  var r = document.querySelectorAll(selector);
  if(r.length == 1) return r[0];
  return r;
}

function validate() {
  var greske = [];
  var ok = [];

  validateName(greske, ok);
  validateEmail(greske, ok);
  validateNumber(greske, ok);
  validateMessage(greske, ok);

  greske.forEach(function(greska) {
    var out = q(greska.error);
    out.innerHTML = greska.message;
  });
  ok.forEach(function(elem) {
    var out = q(elem);
    out.innerHTML = "";
  })
  return greske.length > 0;
}

function validateName(greske, ok) {
  var reName = /^[A-Z][a-z]{1,30}$/;
  var first  = q("#first-name").value;
  var last   = q("#last-name").value;

  if(!reName.test(first) || !reName.test(last)) {
    greske.push({
      error: "#name-error",
      message: "name Error"
    });
  }
  else {
    ok.push("#name-error");
  }
}

function validateEmail(greske, ok) {
  var reEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var email   = q("#email").value;
  if(!reEmail.test(email)) {
    greske.push({
      error: "#email-error",
      message: "invalid email"
    })
  } else {
    ok.push("#email-error");
  }
}

function validateNumber(greske, ok) {
  var rePhone = /^\+\d+$/;
  var phone   = q("#phone").value;
  if(!rePhone.test(phone)) {
    greske.push({
      error: "#phone-error",
      message: "invalid phone"
    });
  } else {
    ok.push("#phone-error");
  }
}

function validateMessage(greske, ok) {
  var message = q("#message").value;
  if(message.length < 10) {
    greske.push({
      error: "#message-error",
      message: "Must be altest 10 letters"
    });
  } else {
    ok.push("#message-error");
  }
}
