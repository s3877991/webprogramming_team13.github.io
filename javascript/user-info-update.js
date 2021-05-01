// Assigment 2: JAVASCRIPT ASSIGNMENT - TASK #5: Login status

// Get the user email address
let userEmail = document.getElementsByClassName("user-email");

// Get the inputted email address
let loginEmail = sessionStorage.getItem("User email");

// Get the link to that inputted email adress
// Convert the value of the 2nd variable to a string in order to avoid unexpexted errors.
let loginEmailAnchor = 'mailto:' + String(loginEmail);

/* When users successfully log in to their account, their inputted email addresses will be saved temporally
in the Web storage. In "User Information" page, the website will display those addresses with their link */
if (loginEmail) {
    // In desktop devices
    userEmail[0].innerHTML = loginEmail;
    userEmail[0].href = loginEmailAnchor;

    // In mobile devices
    userEmail[1].innerHTML = loginEmail;
    userEmail[1].href = loginEmailAnchor;
}