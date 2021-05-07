// Assigment 2: JAVASCRIPT ASSIGNMENT - TASK #7: Add Items To Cart

// Get product information
var addToCartButtons = document.getElementsByClassName('add-to-cart')
var title = document.querySelector('#title').innerText
var picture = document.getElementById('item-image').src
var price = document.querySelector('.add-to-cart-item label').innerText
var color = document.querySelector('.choice-2 div.options-2 label').innerText
var flashingMessage = document.querySelector('.modal-container')

console.log(flashingMessage)

for (let i = 0; i < addToCartButtons.length; i++) {
    button = addToCartButtons[i]
    button.addEventListener('click', () => {
        if (sessionStorage.getItem('User email') == null) {
            location.href = 'https://shynkwanchi.github.io/webprogramming_team13.github.io/login.html'
        }
        else {
            flashingMessage.style.display = "block";
            add_items_to_cart()
        }
    }
    )
}

flashingMessage.addEventListener('click', function(ev) {
    flashingMessage.style.display = "none"
})

function add_items_to_cart() {
    // Put product info into an object called "product"
    product = {
        "name": title,
        "image": picture,
        "price": price,
        "color": color,
        "inCart": 0,
    };

    let productlist = localStorage.getItem('product');
    productlist = JSON.parse(productlist);

    // If there is no "product" in productlist
    if (productlist != null) {
        // If a "product" that hasn't added to the productlist
        if (productlist[product.name] == undefined) {
            // Update productlist
            productlist = {
                ...productlist,
                [product.name]: product,
            }
        }
        // Update the number of "add to cart" clicks of the product
        productlist[product.name].inCart += 1;
    }
    else {
        // Update the number of "add to cart" clicks of the product
        product.inCart = 1;
        // Add the product to the productlist, the key is the name of the product and the value is the product information
        productlist = { [product.name]: product };
    };
    localStorage.setItem('product', JSON.stringify(productlist))
}