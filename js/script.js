function carousel() {
  $('.carousel').carousel({
    interval: 2000
  })
}

const nameRegexp = /^(([A-Za-z]+[\-\']?)*([A-Za-z]+)?\s)+([A-Za-z]+[\-\']?)*([A-Za-z]+)?$/;

function checkFirstName() {
  let firstName = document.getElementById("firstName");
  if (firstName.value.match(nameRegexp)) {
    firstName.className = "form-control bg-dark error"
  } else {
    firstName.className = "form-control bg-dark approve"
  }

  submitable()
}

function checkLastName() {
  let lastName = document.getElementById("lastName");
  if (lastName.value.match(nameRegexp)) {
    lastName.className = "form-control bg-dark error"
  } else {
    lastName.className = "form-control bg-dark approve"
  }

  submitable()
}

function checkEmail() {
  const emailRegexp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  let email = document.getElementById("email");
  if (!(email.value.match(emailRegexp))) {
    email.className = "form-control bg-dark error"
  } else {
    email.className = "form-control bg-dark approve"
  }

  submitable()
}

function checkPhone() {
  const phoneRegex = /((?:\+?3|0)6)(?:-|\()?(\d{1,2})(?:-|\))?(\d{3})-?(\d{3,4})/g;
  let phone = document.getElementById("phone");
  if (phone.value.length < 11 || !phone.value.match(phoneRegex)) {
    phone.className = "form-control bg-dark error"
  } else {
    phone.className = "form-control bg-dark approve"
  }

  submitable()
}

function checkMessage() {
  let message = document.getElementById("message");
  if (message.value.length < 11) {
    message.className = "form-control bg-dark error"
  } else {
    message.className = "form-control bg-dark approve"
  }

  submitable()
}

function submitable(){
  const d = document.getElementsByClassName("error")
  if(d.length>0){
    document.getElementById('submit').disabled = true
  }
  else{
    document.getElementById('submit').disabled = false
  }
}