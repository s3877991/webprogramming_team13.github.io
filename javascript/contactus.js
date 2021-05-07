const form = document.getElementById('form-id');
const userName = document.getElementById('name');
const email = document.getElementById('email');
const phone = document.getElementById('phone');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	const userNameValue = userName.value.trim();
	const emailValue = email.value.trim();
	const phoneValue = phone.value.trim();
	
	if(userNameValue === '') {
		setErrorFor(userName, 'Name cannot be blank');
	} else if (!isName(userNameValue)) {
		setErrorFor(userName, 'Not a valid name');
	} else {
		setSuccessFor(userName);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(phoneValue === '') {
		setErrorFor(phone, 'Phone cannot be blank');
	} else if (!isPhone(phoneValue)) {
		setErrorFor(phone, 'Not a valid number');
	} else {
		setSuccessFor(phone);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isName(userName) {
	return /[a-zA-Z]{3,}/.test(userName);
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
	
function isPhone(phone) {
	return /^([0-9]([-. ]?)){9,11}[^-. ]$/.test(phone);
}

// Text message restrictions area
message = document.getElementById("text-message");
message.addEventListener("keyup", messageRestrictions);

// Define functions
function messageRestrictions() {
  // Activate the message value
  let textMessage = document.getElementById("text-message").value;

  // Count the length of letters
  let lettersLength = textMessageWithoutSpaces.length;

  // Activate warning message
  let warning = document.getElementById('warning-message');
  if (lettersLength < 50) {
    warning.innerHTML = (50 - lettersLength) + " more letters are needed!";
    warning.style.color = "#f00";
  }
  else if (lettersLength <= 500) {
    warning.innerHTML = "You can type " + (500 - lettersLength) + " more letters";
    warning.style.color = "#0c3";
  }
  else {
    warning.innerHTML = "Deleting " + (lettersLength - 500) + " letters is needed!";
   	warning.style.color = "#f00";
  }
}