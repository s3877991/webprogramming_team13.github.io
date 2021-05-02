for (var i = 0; i < localStorage.length; i++) {
    console.log(JSON.parse(localStorage.getItem(localStorage.key(i))))
    var productlist = JSON.parse(localStorage.getItem(localStorage.key(i)))
    for (var item in productlist) {
        var title = productlist[item]['name']
        var image = productlist[item]['image']
        var price = productlist[item]['price'].split("\n")[1]
        var version = productlist[item]['price'].split("\n")[0]
        var color = productlist[item]['color']
        var inCart = productlist[item]['inCart']

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
                <td><input class="quantity_input" type="number" min="1" value="1"></td>
                <td>$1264.78</td>`
        cartRow.innerHTML = cartRowContents
        cartTable.append(cartRow)
        // cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
        // cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
    }

}

