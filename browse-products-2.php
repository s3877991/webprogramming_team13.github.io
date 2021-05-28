<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css-store/header-&-footer.css">
    <link rel="stylesheet" href="css-store/flexbox.css">
    <link rel="stylesheet" href="css-store/filter.css">
    <link rel="stylesheet" href="css-store/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Browse Products</title>
</head>

<body>
    <!--Header section with navigation bar-->
    <header>
        <nav>
            <!--Logo of the website name-->
            <div id="logo"><a href="store-home.php">The Store</a></div>

            <!--When the website is used in small-screen devices, the navigation icon appears-->
            <label for="dropdown-main" class="toggle" id="main-toggle">
                <span class="navigation-icon"></span>
            </label>
            <input type="checkbox" id="dropdown-main">

            <!--Navigation-->
            <ul class="menu">
                <li><a href="store-home.php">HOME</a></li>
                <li><a href="store-about-us.php">ABOUT US</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for="dropdown-sub" class="toggle">PRODUCTS <span class="material-icons">expand_more</span></label>
                    <a class="active" href="#">PRODUCTS <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-products-1.php">by CATEGORY</a></li>
                        <li><a class="active" href="browse-products-2.php">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href="store-contact-us.php">CONTACT</a></li>
                <li class="your-cart"><a href="your-cart.php">YOUR CART</a></li>
            </ul>
        </nav>
    </header>

    <!--Main Content-->
    <main>

        <!--Select Area-->
        <div class="select">

            <div class="select-container">
                <label for="created-date">Created time: </label>
                <select id="created-date">
                    <option id="newest">Newest first</option>
                    <option id="oldest">Oldest first</option>
                </select>
            </div>

        </div>

        <!--Products section-->
        <div class="flex-container">

            <div class="item">
                <a href="product-details.php">
                    <div class="image">
                        <img src="images/store-product.png" alt="a shopping bag">
                    </div>
                    <h3 class="name">Product name</h3>
                    <p class="price">$xxxx.xx</p>
                </a>
            </div>

            <div class="item">
                <a href="product-details.php">
                    <div class="image">
                        <img src="images/store-product.png" alt="a shopping bag">
                    </div>
                    <h3 class="name">Product name</h3>
                    <p class="price">$xxxx.xx</p>
                </a>
            </div>

            <div class="item">
                <a href="product-details.php">
                    <div class="image">
                        <img src="images/store-product.png" alt="a shopping bag">
                    </div>
                    <h3 class="name">Product name</h3>
                    <p class="price">$xxxx.xx</p>
                </a>
            </div>

            <div class="item">
                <a href="product-details.php">
                    <div class="image">
                        <img src="images/store-product.png" alt="a shopping bag">
                    </div>
                    <h3 class="name">Product name</h3>
                    <p class="price">$xxxx.xx</p>
                </a>
            </div>

            <div class="item">
                <a href="product-details.php">
                    <div class="image">
                        <img src="images/store-product.png" alt="a shopping bag">
                    </div>
                    <h3 class="name">Product name</h3>
                    <p class="price">$xxxx.xx</p>
                </a>
            </div>

            <div class="item">
                <a href="product-details.php">
                    <div class="image">
                        <img src="images/store-product.png" alt="a shopping bag">
                    </div>
                    <h3 class="name">Product name</h3>
                    <p class="price">$xxxx.xx</p>
                </a>
            </div>

            <div class="item">
                <a href="product-details.php">
                    <div class="image">
                        <img src="images/store-product.png" alt="a shopping bag">
                    </div>
                    <h3 class="name">Product name</h3>
                    <p class="price">$xxxx.xx</p>
                </a>
            </div>

            <div class="item">
                <a href="product-details.php">
                    <div class="image">
                        <img src="images/store-product.png" alt="a shopping bag">
                    </div>
                    <h3 class="name">Product name</h3>
                    <p class="price">$xxxx.xx</p>
                </a>
            </div>

            <div class="item">
                <a href="product-details.php">
                    <div class="image">
                        <img src="images/store-product.png" alt="a shopping bag">
                    </div>
                    <h3 class="name">Product name</h3>
                    <p class="price">$xxxx.xx</p>
                </a>
            </div>

            <div class="item">
                <a href="product-details.php">
                    <div class="image">
                        <img src="images/store-product.png" alt="a shopping bag">
                    </div>
                    <h3 class="name">Product name</h3>
                    <p class="price">$xxxx.xx</p>
                </a>
            </div>

        </div>

    </main>

    <!--Footer section with navigation bar-->
    <footer>
        <a href="store-copyright.php">Copyright</a>
        <a href="store-tos.php">Terms of Service</a>
        <a href="store-privacypolicy.php">Privacy Policy</a>
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
    <script src="../javascript/cookie.js"></script>
</body>

</html>