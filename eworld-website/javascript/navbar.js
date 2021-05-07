var orderPlacementPage = document.getElementsByClassName('your-cart')
for (let i = 0; i < orderPlacementPage.length; i++) {
    button = orderPlacementPage[i]
    button.addEventListener('click', redirect)
}
function redirect(e) {
    e.preventDefault();
    if (localStorage.getItem('User name') == null) {
        window.location.href = 'https://shynkwanchi.github.io/webprogramming_team13.github.io/login.html';
        return false
    }
    return true
}