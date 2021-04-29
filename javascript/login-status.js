// Assigment 2: JAVASCRIPT ASSIGNMENT - TASK #5: Login status

// Activate login status in "My Account" button
let loginStatus = document.getElementById("my-account");

/* If users access to "My Account" page again, the website will redirect them to "User Information" page
 based on their email addresss saved teporally on Web storage */
if (sessionStorage.getItem("User email")) {
    loginStatus.href = "user-info.html";
}