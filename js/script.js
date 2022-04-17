function carousel() {
  $('.carousel').carousel({
    interval: 2000
  })
}

const nameRegexp = /^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i;

function checkFirstName() {
  let firstName = document.getElementById("firstName");
  if (firstName.value.match(nameRegexp)) {
    firstName.className = "form-control bg-dark approve"
    document.getElementById("firstnamespan").innerHTML="";
  } else {
    firstName.className = "form-control bg-dark error"
    document.getElementById("firstnamespan").innerHTML="Names can only contain letters!";
  }

  authorizeForm()
}

function checkLastName() {
  let lastName = document.getElementById("lastName");
  if (lastName.value.match(nameRegexp)) {
    lastName.className = "form-control bg-dark approve"
    document.getElementById("lastnamespan").innerText="";
  } else {
    lastName.className = "form-control bg-dark error"
    document.getElementById("lastnamespan").innerText="Names can only contain letters!";
  }

  authorizeForm()
}

function checkEmail() {
  const emailRegexp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  let email = document.getElementById("email");
  if (!(email.value.match(emailRegexp))) {
    email.className = "form-control bg-dark error"
    document.getElementById("emailspan").innerHTML="Email addresss must contain a '@' sign and a '.(domain)' e.g.: .com at the end!"
  } else {
    email.className = "form-control bg-dark approve"
    document.getElementById("emailspan").innerHTML=""
  }

  authorizeForm()
}

function checkPhone() {
  const phoneRegex = /((?:\+?3|0)6)(?:-|\()?(\d{1,2})(?:-|\))?(\d{3})-?(\d{3,4})/g;
  let phone = document.getElementById("phone");
  if (phone.value.length < 11 || !phone.value.match(phoneRegex)) {
    phone.className = "form-control bg-dark error"
    document.getElementById("phonespan").innerHTML="Phone numbers must be 11 digit long and be in any format that a phone number usually in!"
  } else {
    phone.className = "form-control bg-dark approve"
    document.getElementById("phonespan").innerHTML=""
  }

  authorizeForm()
}

function checkMessage() {
  let message = document.getElementById("message");
  if (message.value.length < 11) {
    message.className = "form-control bg-dark error"
    document.getElementById("messagespan").innerHTML="The message must be at least 11 characters long!"
  } else {
    message.className = "form-control bg-dark approve"
    document.getElementById("messagespan").innerHTML=""
  }

  authorizeForm()
}

function authorizeForm(){
  const d = document.getElementsByClassName("error")
  if(d.length>0){
    document.getElementById('submit').style.border="2px solid red";
  }
  else{
    document.getElementById('submit').style.border="";
  }
}