// Assigment 3: FULLSTACK ASSIGNMENT - TASK #9: Implement the behavior in Product Details and Order Placement page

// Get product information
const addToCartButton = document.getElementById('add-to-cart');
const title = document.querySelector('#title').innerText;
const picture = document.getElementById('product-image').src;
const price = document.querySelector('#price').innerText;

addToCartButton.addEventListener('click', () => {
    alert('Product added to your cart.');
    add_items_to_cart();
});

// Original CSS code sourced and adapted for educational purposes: https://www.youtube.com/watch?v=PoTGs38DR9E&t=647s
function add_items_to_cart() {
    // Put product info into an object called "product"
    product = {
        "name": title,
        "image": picture,
        "price": price,
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