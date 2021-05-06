// Assigment 2: JAVASCRIPT ASSIGNMENT - TASK #7: Order Placement


if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    // Loop through all the values, which are product information of a product, of the localStorage
    for (var i = 0; i < localStorage.length; i++) {
        var productlist = JSON.parse(localStorage.getItem(localStorage.key(i)))
        // Loop through all the detailed product info
        for (var item in productlist) {
            // Allocate different product info into their cateogories
            var title = productlist[item]['name']
            var image = productlist[item]['image']
            var price = productlist[item]['price'].split("\n")[1]
            var version = productlist[item]['price'].split("\n")[0]
            var color = productlist[item]['color']
            var inCart = productlist[item]['inCart']
            var subTotal = updateSubTotal(price, inCart)

            var cartTable = document.getElementById('order-table')
            var cartRow = document.createElement('tr')
            cartRow.classList.add('cart-items')
            var cartRowContents = `
                    <td>
                        <div class="cart-info">
                            <img src=${image} alt="a phone with a notch display">
                            <div>
                                <p class="name">${title}</p>
                                <p class="price">${price}</p>
                                <p class="version">${version}</p>
                                <p class="color">${color}</p>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input class="quantity_input" type="number" min="1" value="${inCart}"></td>
                    <td class="sub-total">${subTotal}</td>`
            cartRow.innerHTML = cartRowContents
            cartTable.append(cartRow)
        }

    }
    ready()
}

updateCartTotal()

function ready() {
    var quantityInputs = document.getElementsByClassName('quantity_input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }
}

function updateSubTotal(price, quantity) {
    var price = parseFloat((price).replace('$', ''))
    var quantity = parseFloat(quantity)
    var subTotal = (price * quantity)
    return '$' + subTotal
}

function updateCartSubTotal() {
    var priceElement = document.getElementsByClassName('price')
    var quantityElement = document.getElementsByClassName('quantity_input')

    for (var i = 0; i < priceElement.length; i++) {
        var price = parseFloat(priceElement[i].innerText.replace('$', ''))
        var quantity = quantityElement[i].value
        var subTotal = price * quantity
        subTotal = Math.round(subTotal * 100) / 100
        document.getElementsByClassName('sub-total')[i].innerText = '$' + subTotal
    }
}

function updateCartTotal() {
    var subTotal = 0
    var itemsSubTotal = document.getElementsByClassName('sub-total')
    for (var i = 0; i < itemsSubTotal.length; i++) {
        subTotal = subTotal + parseFloat(itemsSubTotal[i].innerText.replace('$', ''))
        console.log(itemsSubTotal[i].innerText)
        subTotal = Math.round(subTotal * 100) / 100
    }
    document.getElementById('items-sub-total').innerText = '$' + subTotal
    document.getElementById('total').innerText = '$' + subTotal
}

function quantityChanged(event) {
    updateCartSubTotal()
    updateCartTotal()
    addCoupon()
}

var applyCoupon = document.getElementById('coupon')
applyCoupon.addEventListener('change', addCoupon)

function addCoupon() {
    var coupon = document.getElementById('coupon')
    var total = document.getElementById('items-sub-total').innerText.replace('$', '')
    if (coupon.value == "COSC2430-HD") {
        total = total * 80 / 100;
        total = Math.round(total * 100) / 100
        document.getElementById('total').innerText = '$' + total
    }
    else if (coupon.value == "COSC2430-DI") {
        total = total * 90 / 100;
        total = Math.round(total * 100) / 100
        document.getElementById('total').innerText = '$' + total
    }
    else if (coupon.value == '') {
        document.getElementById('total').innerText = '$' + total
    }
    else { alert('The coupon is invalid') }
}