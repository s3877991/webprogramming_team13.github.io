var addToCartButtons = document.getElementsByClassName('add-to-cart');
var product = document.getElementsByClassName('product-info');
for (let i = 0; i < addToCartButtons.length; i++) {
    button = addToCartButtons[i];
    button.addEventListener('click', add_to_cart);
}

function add_to_cart(event) {
    var button = event.target;
    var title = document.querySelector('#title').innerText;
    var picture = document.getElementsByTagName('img')[0].src;
    var price = document.querySelector('.add-to-cart-item label').innerText;
    var color = document.querySelector('.choice-2 div.options-2 label').innerText;
    console.log(title, picture, price, color);
}