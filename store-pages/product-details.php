<!-- Assignment 3: FULLSTACK ASSIGNMENT - Task #9: Implement the behavior in Product Details and Order Placement page -->

<!-- PHP code area -->
<?php 
// Start the session
session_start();

// Use a function from another PHP file
require '../mall_prod_functions.php';

// Get the product id
$id = $_GET['id'];

// Use array to extract product information 
$product = get_product($id);
?>

<!-- HTML Code Area -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/product-details.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title><?php $product['name']?></title>
</head>

<body>
    <!--Header section with navigation bar-->
    <header>
        <nav>
            <!--Logo of the website name-->
            <div id="logo"><a href="index.php">The Store</a></div>

            <!--When the website is used in small-screen devices, the navigation icon appears-->
            <label for="dropdown-main" class="toggle" id="main-toggle">
                <span class="navigation-icon"></span>
            </label>
            <input type="checkbox" id="dropdown-main">

            <!--Navigation-->
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="about-us.php">ABOUT US</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for="dropdown-sub" class="toggle">PRODUCTS <span class="material-icons">expand_more</span></label>
                    <a class="active" href="#">PRODUCTS <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-products-1.php">by CATEGORY</a></li>
                        <li><a href="browse-products-2.php">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.php">CONTACT</a></li>
                <li class="your-cart"><a href="your-cart.php">YOUR CART</a></li>
            </ul>
        </nav>
    </header>

    <!--Main Content-->
    <main class="product-info">

        <!--Customer choice area-->
        <section id="customers-choice">
            <div class="flex-container-1">

                <div class="avatar">
                    <img id="product-image" src="images/product.png" alt="a shopping bag">
                </div>

                <div class="options">

                    <h1 class="title">Product Name</h1>
                    <h3 class="price">$xxxx.xx</h3>

                    <div class="button-container">
                        <div class="buttons">
                            <button type="button" id="add-to-cart">Add to cart</button>
                        </div>
                        <div class="buttons">
                            <button type="button" id="buy-now">BUY NOW!</button>
                        </div>
                    </div>

                </div>
            </div>

            </div>
        </section>

        <hr>

        <!--Description area-->
        <section class="text">
            <h2 class="label">Description</h2>

            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates magnam deleniti dolores sint molestiae aperiam est aliquid numquam quia dolorum quaerat, at labore. Libero fuga assumenda dolorum similique, possimus in!
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti in veritatis cupiditate rerum et temporibus porro, delectus quasi atque dolore, dolorum sed nisi, iusto eveniet voluptate quod accusamus officia fugiat?
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt beatae temporibus eaque ipsa dignissimos, a, laborum minus praesentium ex odio at ullam cupiditate fugit commodi? Similique numquam eveniet ex dolores!
            </p>
        </section>

        <hr>

        <!--Visited products area-->
        <section id="visited-products">
            <h2 class="label">Visited Products</h2>
            <div class="flex-container">
                <div class="item">
                    <a href="product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

            </div>
        </section>

    </main>

    <!--Footer section with navigation bar-->
    <footer>
        <a href="copyright.php">Copyright</a>
        <a href="tos.php">Terms of Service</a>
        <a href="privacypolicy.php">Privacy Policy</a>
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