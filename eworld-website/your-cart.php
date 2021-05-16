<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/your-cart.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Eworld - Your Cart</title>
</head>

<body>
    <!--Header section with navigation bar-->
    <header>
        <nav>
            <!--Logo of the website name-->
            <div id="logo"><a href="index.html"><img src="images/logo.png" alt="logo">Eworld</a></div>

            <!--When the website is used in small-screen devices, the navigation icon appears-->
            <label for="dropdown-main" class="toggle" id="main-toggle">
                <span class="navigation-icon"></span>
            </label>
            <input type="checkbox" id="dropdown-main">

            <!--Navigation-->
            <ul class="menu">
                <li><a href="index.html">HOME</a></li>
                <li><a href="about-us.html">ABOUT US</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for="dropdown-sub" class="toggle">PRODUCTS <span
                            class="material-icons">expand_more</span></label>
                    <a href="#">PRODUCTS <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-products-1.html">by CATEGORY</a></li>
                        <li><a href="browse-products-2.html">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.html">CONTACT</a></li>
                <li class="your-cart"><a class="active" href="your-cart.html">YOUR CART</a></li>
            </ul>
        </nav>
    </header>

    <!--Main content-->
    <main>

        <h1>YOUR SHOPPING CART</h1>

        <hr>

        <!--Order Placement Area -->
        <section id="order-plcmnt">
            <div class="small-container cart-page">

                <!--List of products add to cart-->
                <table id='order-table'>
                    <tr>
                        <th><strong>PRODUCT</strong></th>
                        <th><strong>QUANTITY</strong></th>
                        <th><strong>SUB-TOTAL</strong></th>
                    </tr>
                </table>

                <hr>

                <!--Total price-->
                <div class="total-price">

                    <table>
                        <tr>
                            <td><strong>SUB-TOTAL</strong></td>
                            <td id="items-sub-total">$0</td>
                        </tr>

                        <tr>
                            <td><strong>COUPON</strong></td>
                            <td><input type="text" id="coupon"></td>
                        </tr>
                        <tr>
                            <td><strong>TOTAL</strong></td>
                            <td><strong id="total">$0</strong></td>
                        </tr>
                    </table>

                </div>

            </div>
        </section>

        <section id="btn-area">
            <div class="button-container">

                <div class="button">
                    <a href="product-details.html">Continue Shopping</a>
                </div>

                <div class="button">
                    <a href="thankyou.html">ORDER</a>
                </div>

            </div>
        </section>

    </main>

    <!--Footer section with navigation bar-->
    <footer>
        <a href="copyright.html">Copyright</a>
        <a href="tos.html">Terms of Service</a>
        <a href="privacypolicy.html">Privacy Policy</a>
        <div id="brief-description">
            <em>
                <h3>by <strong>THE GANG</strong></h3>
                <p>Developed in 2021</p>
            </em>
        </div>
    </footer>

    <!--Cookie-->
    <div class="cookie-consent">
        <h3>I USE COOKIES</h3>
        <p>My website uses cookies necessarily for its basic functioning. By continuing browsing, you consent to my use of cookies and other technologies.</p>
        <button class="cookie-btn">I understand</button>
        <a href="#">Learn more</a>
    </div>

    <!--Link to external JavaScript file-->
    <script src="javascript/order-placement.js" async></script>
</body>

</html>