// Validate email
var email = document.getElementById("email");
var emailErr = document.getElementById("email-error");

// Add event listener upon entering email in the text box
// Validate input as user user is typing in real time
// The regex is still incorrect
email.addEventListener('input', function(e) {
  var emailregex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 
  var currentmail = e.target.value;
  var mailvalid = emailregex.test(currentmail);

  // display the error block if conditions are not met
  if (mailvalid) {
    emailErr.style.display = 'none'
  } else {
    emailErr.style.display = 'block'
  }
})

// Validate phone number
var phone = document.getElementById("phone");
var phoneErr = document.getElementById("phone-error");

phone.addEventListener('input', function(e) {
  var phoneregex = /^$/ //a phone regex validation
  var currentnum = e.target.value;
  var phonevalid = phoneregex.test(currentnum);

  if (phonevalid) {
    phoneErr.style.display = 'none'
  } else {
    phoneErr.style.display = 'block'
  }
})

// VALIDATE PASSWORD
var pass = document.getElementById("password");
var passErr = document.getElementById("pass-error");

pass.addEventListener('input', function(e) {
  var passregex = /^Caly$/ //a phone regex validation
  var currentpass = e.target.value;
  var passvalid = passregex.test(currentpass);

  if (passvalid) {
    passErr.style.display = 'none'
  } else {
    passErr.style.display = 'block'
  }
})

// RETYPE PASSWORD
var retype = document.getElementById("retype-password");
var retypeErr = document.getElementById("retype-error");

retype.addEventListener('input', function(e) {
  var current_retype = e.target.value;
  var currentpass = pass.value;

  if (currentpass == current_retype) {
    retypeErr.style.display= 'none'
  } else {
    retypeErr.style.display = 'block'
  }
})
