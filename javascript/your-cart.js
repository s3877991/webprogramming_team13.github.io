// Assigment 3: FULLSTACK ASSIGNMENT - TASK #9: Implement the behavior in Product Details and Order Placement page

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    // Loop through all the values, which are product information of a product, of the localStorage
    for (var i = 0; i < localStorage.length; i++) {
        var productlist = JSON.parse(localStorage.getItem(localStorage.key(i)));
        // Loop through all the detailed product info
        for (var item in productlist) {
            // Allocate different product info into their cateogories
            var title = productlist[item]['name'];
            var image = productlist[item]['image'];
            var price = productlist[item]['price'];
            var inCart = productlist[item]['inCart'];
            var subTotal = updateSubTotal(price, inCart);

            // Original CSS code sourced and adapted for educational purposes: https://www.youtube.com/watch?v=YeFzkC2awTM&t=1334s
            //Display information of an item when it is added to the cart
            var cart = document.getElementById('order-table');
            var cartItem = document.createElement('tr');
            cartItem.classList.add('cart-items');
            var cartItemInfo = `
                    <td>
                        <div class="cart-info">
                            <img src=${image} alt="a shopping bag">
                            <div>
                                <p class="name">${title}</p>
                                <p class="price">${price}</p>
                                <a href="#">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input class="quantity_input" type="number" min="0" value="${inCart}"></td>
                    <td class="sub-total">${subTotal}</td>`;
            cartItem.innerHTML = cartItemInfo;
            cart.append(cartItem);
        }
    }
    ready();
}

updateCartTotal()

var applyCoupon = document.getElementById('coupon');
applyCoupon.addEventListener('change', addCoupon);


// Original CSS code sourced and adapted for educational purposes: https://www.youtube.com/watch?v=YeFzkC2awTM&t=1334s 
function ready() {
    var quantityInputs = document.getElementsByClassName('quantity_input');
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener('change', quantityChanged);
    }
}

// Update subtotal when the items first added to cart
function updateSubTotal(price, quantity) {
    var price = parseFloat((price).replace('$', ''));
    var quantity = parseFloat(quantity);
    var subTotal = (price * quantity);
    return '$' + subTotal;
}


// Update subtotal payment of the cart without coupon
function updateCartSubTotal() {
    var priceElement = document.getElementsByClassName('price');
    var quantityElement = document.getElementsByClassName('quantity_input');

    for (var i = 0; i < priceElement.length; i++) {
        var price = parseFloat(priceElement[i].innerText.replace('$', ''));
        var quantity = quantityElement[i].value;
        var subTotal = price * quantity;
        subTotal = Math.round(subTotal * 100) / 100;
        document.getElementsByClassName('sub-total')[i].innerText = '$' + subTotal;
    }
}

// Update total payment of the cart with/without coupon
function updateCartTotal() {
    var subTotal = 0;
    var itemsSubTotal = document.getElementsByClassName('sub-total');
    for (var i = 0; i < itemsSubTotal.length; i++) {
        subTotal = subTotal + parseFloat(itemsSubTotal[i].innerText.replace('$', ''));
        subTotal = Math.round(subTotal * 100) / 100;
    }
    document.getElementById('items-sub-total').innerText = '$' + subTotal;
    document.getElementById('total').innerText = '$' + subTotal;
}

// When user change the quantity
function quantityChanged(event) {
    updateCartSubTotal();
    updateCartTotal();
    addCoupon();
}

// Add coupon
function addCoupon() {
    var coupon = document.getElementById('coupon');
    var total = document.getElementById('items-sub-total').innerText.replace('$', '');
    if (coupon.value == "COSC2430-HD") {
        total = total * 80 / 100;
        total = Math.round(total * 100) / 100;
        document.getElementById('total').innerText = '$' + total;
    }
    else if (coupon.value == "COSC2430-DI") {
        total = total * 90 / 100;
        total = Math.round(total * 100) / 100;
        document.getElementById('total').innerText = '$' + total;
    }
    else if (coupon.value == '') {
        document.getElementById('total').innerText = '$' + total;
    }
    else {
        document.getElementById('total').innerText = '$' + total;
        alert('The coupon is invalid');
    }
}