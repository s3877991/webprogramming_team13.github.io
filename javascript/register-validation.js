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
  var passregex = /^Steve$/ //pass regex validation, steve is just a pseudo
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

  /* display error message when current_retype 
  does not have the same value as currentpass */
  if (currentpass == current_retype) {
    retypeErr.style.display = 'none'
  } else {
    retypeErr.style.display = 'block'
  }
})

// VALIDATE FIRST NAME
var fname = document.getElementById("first-name");
var fnameErr = document.getElementById("fname-error");

fname.addEventListener('input', function(e) {
  var fnameregex = /^[A-Za-z]{3,}$/; //at least 3 characters
  var current_fname = e.target.value;
  var fnamevalid = fnameregex.test(current_fname);

  if (fnamevalid) {
    fnameErr.style.display = 'none'
  } else {
    fnameErr.style.display = 'block'
  }
})

//VALIDATE LAST NAME
var lname = document.getElementById("last-name");
var lnameErr = document.getElementById("lname-error");

lname.addEventListener('input', function(e) {
  var lnameregex = /^[A-Za-z]{3,}$/; //at least 3 characters
  var current_lname = e.target.value;
  var lnamevalid = lnameregex.test(current_lname);

  if (lnamevalid) {
    lnameErr.style.display = 'none'
  } else {
    lnameErr.style.display = 'block'
  }
})

//VALIDATE ADDRESS
var address = document.getElementById("address");
var addressErr = document.getElementById("address-error");

address.addEventListener('input', function(e) {
  var addressregex = /^[A-Za-z]{3,}$/; //at least 3 characters
  var current_address = e.target.value;
  var addressvalid = addressregex.test(current_address);

  if (addressvalid) {
    addressErr.style.display = 'none'
  } else {
    addressErr.style.display = 'block'
  }
})

//VALIDATE CITY NAME
var city = document.getElementById("city");
var cityErr = document.getElementById("city-error");

city.addEventListener('input', function(e) {
  var cityregex = /^[A-Za-z]{3,}$/; //at least 3 characters
  var current_city = e.target.value;
  var cityvalid = cityregex.test(current_city);

  if (cityvalid) {
    cityErr.style.display = 'none'
  } else {
    cityErr.style.display = 'block'
  }
})

//VALIDATE ZIP CODE
var zip = document.getElementById("zip");
var zipErr = document.getElementById("zip-error");

zip.addEventListener('input', function(e) {
  var zipregex = /^[0-9]{4,6}$/; //regular expression for 4-6 digits
  var currentzip = e.target.value;
  var zipvalid = zipregex.test(currentzip);

  if (zipvalid) {
    zipErr.style.display = 'none'
  } else {
    zipErr.style.display = 'block'
  }
})

//DISPLAY SEPEREATE SECTION FOR STORE OWNER
var store = document.getElementById("store-owner");
store.addEventListener('click', display);

function display() {
  var storeinfo = document.getElementById("store-info");

  if (storeinfo.style.display === 'none') {
    storeinfo.style.display = 'block';
  } else {
    storeinfo.style.display = 'block'
  }
}

//HIDE SECTION ON CLICKING SHOPPERS OPTION
var shopper = document.getElementById("shopper");
shopper.addEventListener('click', hide);

function hide() {
  var storeinfo = document.getElementById("store-info");
  
  if (storeinfo.style.display === 'none') {
    storeinfo.style.display = 'none';
  } else {
    storeinfo.style.display = 'none'
  }
}