// Assigment 2: JAVASCRIPT ASSIGNMENT - TASK #5: Login status

// DECLARE VARIABLES AND EVENTS
let loginForm = document.getElementById("login-form");
loginForm.onsubmit = loginValidation;


// DEFINE FUNCTIONS 
function loginValidation() {

    // Get the email input value
    let email = document.getElementById("email").value;

    // Get the password input value
    let password = document.getElementById("password").value;

    /* If users enter wrong pasword, the error message appears and the invalid input field is highlighted.
    Otherwise, users are moved to user information page, which means users log in SUCCESSFULLY. */

    if (password !== "password") {
        // With CSS and JavaScript, the Log-in page will make users notice the invalid input field and label
        const invalidFieldLabel = document.getElementsByClassName("label");
        const invalidField = document.getElementById("password");

        // Activate the error message
        const errorMessage = document.getElementById("error-message");

        // Display invalid input field and its label
        errorMessage.style.display = "block";

        return false;
    }

    else {
        /* The website will save the email temporally until users close the tab because in user information page, 
        there is no "Log out" or "Change Account" button, which means, when users access to "My Account" page 
        in a new tab, they have to log in to their accounts once again. */
        sessionStorage.setItem("User email", email);

        return true;
    }

}