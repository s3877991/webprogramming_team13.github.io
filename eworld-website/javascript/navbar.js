var orderPlacementPage = document.getElementsByClassName('your-cart');
var processDenied = document.querySelector('#process-denied');
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
    orderPlacementPage.href = "your-cart.html";
    return true;
}

// Close the flashing message
processDenied.addEventListener('click', function(ev) {
    processDenied.style.display = "none";
})