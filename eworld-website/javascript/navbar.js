// Assigment 2: JAVASCRIPT ASSIGNMENT - TASK #8: Order Placement.

// Activate the order placement button.
var orderPlacementPage = document.getElementsByClassName('your-cart');

// Activate the flash box.
var processDenied = document.querySelector('#process-denied');

// Activate the login status event:
/* If users first access to "Order Placement" button. The flash box appears and requires them to login or register to their account.
After users successfully log in and access to that button again, they'll be redirected to Order Placement page */
for (let i = 0; i < orderPlacementPage.length; i++) {
    button = orderPlacementPage[i];
    button.addEventListener('click', redirect);
}
function redirect(e) {
    e.preventDefault();
    if (sessionStorage.getItem('User email') == null) {
        processDenied.style.display = "block";
        return false;
    } 
    else {
    location.href = "your-cart.php";
    return true;
}
}

// Close the flashing message
processDenied.addEventListener('click', function(ev) {
    processDenied.style.display = "none";
})