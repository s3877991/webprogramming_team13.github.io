var addToCartButtons = document.getElementsByClassName('add-to-cart')
var title = document.querySelector('#title').innerText
var picture = document.getElementById('item-image').src
var price = document.querySelector('.add-to-cart-item label').innerText
var color = document.querySelector('.choice-2 div.options-2 label').innerText

for (let i = 0; i < addToCartButtons.length; i++) {
    button = addToCartButtons[i]
    button.addEventListener('click', () => {
        add_items_to_cart()
    }
)}

function add_items_to_cart() {
    product = {
        "name": title,
        "image": picture,
        "price": price,
        "color": color,
        "inCart": 0,
    };

    let productlist = localStorage.getItem('product');
    productlist = JSON.parse(productlist);

    if (productlist != null) {
        if (productlist[product.name] == undefined) {
            productlist = {
                ...productlist,
                [product.name] : product,
            }
        }
        productlist[product.name].inCart += 1;
    }
    else {
        product.inCart = 1;
        productlist = {[product.name] : product};
    };
    localStorage.setItem('product', JSON.stringify(productlist))
}