/* Original Javascript code sourced and adapted for educational purposes: 
https://www.youtube.com/watch?v=rsd4FNGTRBw */

const form = document.getElementById('form-id');
const userName = document.getElementById('name');
const email = document.getElementById('email');
const phone = document.getElementById('phone');

form.addEventListener('submit', checkInputs);

// Define function
function checkInputs(e) {
	// Trim to remove the whitespaces
	const userNameValue = userName.value.trim();
	const emailValue = email.value.trim();
	const phoneValue = phone.value.trim();

	var isValidUserName = false;
	var isValidEmailValue = false;
	var isValidPhoneValue = false;
	var isCheked = boxVal();
	
	// Set out different cases for Name value
	if(userNameValue === '') {
		setErrorFor(userName, 'Name cannot be blank');
	} else if (!isName(userNameValue)) {
		setErrorFor(userName, 'Not a valid name');
	} else {
        setSuccessFor(userName);
		isValidUserName = true;
	}
	// Set out different cases for Email value
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
        setSuccessFor(email);
		isValidEmailValue = true;
	}
	
	// Set out different cases for Phone number value
	if(phoneValue === '') {
		setErrorFor(phone, 'Phone cannot be blank');
	} else if (!isPhone(phoneValue)) {
		setErrorFor(phone, 'Not a valid number');
	} else {
        setSuccessFor(phone);
		isValidPhoneValue = true;
	}

	// If all the rules above are satisfied then: 
	if (isValidEmailValue && isValidUserName && isValidPhoneValue && isCheked) {
		alert("Form submitted! Thank you.")
		return true;
	}
	e.preventDefault();
	return false;
}

// Define function when having error
function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

// Define function when there's no error
function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

// Define functions for testing name, email and phone's pattern.
function isName(userName) {
	return /[a-zA-Z]{3,}/.test(userName);
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
	
function isPhone(phone) {
	return /^([0-9][-. ]?){8,10}[0-9]$/.test(phone);
}


// Text message restrictions area

// Define functions
function messageRestrictions() {
	message = document.getElementById("text-message");
	// Activate the message value
	let textMessage = document.getElementById("text-message").value;

	// Remove all spaces between words
	let textMessageWithoutSpaces = textMessage.replace(/\s+/g, '');

	// Count the length of letters
	let lettersLength = textMessageWithoutSpaces.length;
	// Activate warning message
	let warning = document.getElementById('warning-message');
	if (lettersLength < 50) {
		warning.innerHTML = (50 - lettersLength) + " more letters are needed!";
		warning.style.color = "#f00";
		return false;
	}
	else if (lettersLength <= 500) {
		warning.innerHTML = "You can type " + (500 - lettersLength) + " more letters";
		warning.style.color = "#0c3";
		return true;
	}
	else {
		warning.innerHTML = "Deleting " + (lettersLength - 500) + " letters is needed!";
		warning.style.color = "#f00";
		return false;
	}
}

function boxVal(event) {
	if (document.getElementById('mon').checked == true ||
	document.getElementById('tue').checked == true ||
	document.getElementById('wed').checked == true ||
	document.getElementById('thu').checked == true ||
	document.getElementById('fri').checked == true ||
	document.getElementById('sat').checked == true ||
	document.getElementById('sun').checked == true) {
		return true;
	}
	else {
		alert("Please select at least one day!");
		return false;
	}
}