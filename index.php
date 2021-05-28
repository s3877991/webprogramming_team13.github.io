<?php
session_start();

require 'mall_store_functions.php';
require 'mall_prod_functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/flexbox.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Shoppiverse - The Universe of Shopping Stores</title>
</head>

<body>
    <!--Header section with navigation bar-->
    <header>
        <nav>
            <!--Logo of the website name-->
            <div id="logo"><a href="index.php">SHOPPIVERSE</a></div>

            <!--When the website is used in small-screen devices, the navigation icon appears-->
            <label for="dropdown-main" class="toggle" id="main-toggle">
                <span class="navigation-icon"></span>
            </label>
            <input type="checkbox" id="dropdown-main">

            <!--Navigation-->
            <ul class="menu">
                <li><a class="active" href="index.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="fees.php">FEES</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for="dropdown-sub" class="toggle">STORES <span class="material-icons">expand_more</span></label>
                    <a href="#">STORES <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-store-1.php">by NAME</a></li>
                        <li><a href="browse-store-2.php">by CATEGORY</a></li>
                    </ul>
                </li>
                <li><a href="contactus.php">CONTACT US</a></li>
                <li><a href="faqs.php">FAQS</a></li>
                <li><a href="login.php" id="my-account">MY ACCOUNT</a></li>
            </ul>
        </nav>
    </header>

    <!--Main content-->
    <main>

        <!--Banner area-->
        <section id="intro">
            <div class="banner">
                <div class="container">
                    <h1>SHOPPIVERSE</h1>
                    <p>Say Hello to the World Best Shopping Mall</p>
                    <a class="btn" href="#sub-sect-1">LETS GO!</a>
                </div>
            </div>
        </section>

        <!--New Stores Area-->
        <section id="sub-sect-1">
            <h2 class="label">New Stores</h2>

            <div class="flex-container">

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/store.png" alt="a store">
                        </div>
                        <h3 class="name">Store Name</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/store.png" alt="a store">
                        </div>
                        <h3 class="name">Store Name</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/store.png" alt="a store">
                        </div>
                        <h3 class="name">Store Name</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/store.png" alt="a store">
                        </div>
                        <h3 class="name">Store Name</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/store.png" alt="a store">
                        </div>
                        <h3 class="name">Store Name</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/store.png" alt="a store">
                        </div>
                        <h3 class="name">Store Name</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/store.png" alt="a store">
                        </div>
                        <h3 class="name">Store Name</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/store.png" alt="a store">
                        </div>
                        <h3 class="name">Store Name</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/store.png" alt="a store">
                        </div>
                        <h3 class="name">Store Name</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/store.png" alt="a store">
                        </div>
                        <h3 class="name">Store Name</h3>
                    </a>
                </div>

            </div>
        </section>

        <hr>

        <!--New Products Area-->
        <section id="sub-sect-2">
            <h2 class="label">New Products</h2>

            <div class="flex-container">

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product Name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product Name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product Name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product Name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product Name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product Name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product Name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product Name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product Name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a shopping bag">
                        </div>
                        <h3 class="name">Product Name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

            </div>
        </section>

        <hr>

        <!--Featured Stores Area-->
        <section id="sub-sect-3">
            <h2 class="label">Featured Stores</h2>

            <div class="flex-container">
                <?php
                $stores = read_all_stores();
                $feature = get_featured_store(); 
                // display all featured stores in the csv file using foreach loop
                $count = 0;
                foreach ($feature as $f) {
                    $id = $f['id'];
                    $name = $f['name'];
                    echo "<div class=\"item\"><a href=\"store-pages/index.php?id=$id\"><div class=\"image\"><img src=\"images/store.png\" alt=\"a store\"></div><h3 class=\"name\">$name</h3></a></div>";
                    $count++;
                    if ($count == 10) {
                        break;
                    }
                }
                ?>
            </div>
        </section>

        <hr>

        <!--Featured Products Area-->
        <section id="sub-sect-4">
            <h2 class="label">Featured Products</h2>

            <div class="flex-container">
                <?php
                $products = read_all_products();
                $feature_prod = get_featured_product();
                $count = 0;
                foreach ($feature_prod as $fprod) {
                    $id = $fprod['id'];
                    $name = $fprod['name'];
                    $price = $fprod['price'];
                    echo "<div class=\"item\"><a href=\"store-pages/product-details.php?prod=$id\"><div class=\"image\"><img src=\"images/product.png\" alt=\"a shopping bag\"></div><h3 class=\"name\">$name</h3><p class=\"price\">$$price</p></a></div>";
                    $count++;
                    if ($count == 10) {
                        break;
                    }
                }
                ?>
            </div>
        </section>

    </main>

    <!--Footer section with navigation bar-->
    <footer>
        <a href="copyright.php">Copyright</a>
        <a href="tos.php">Terms of Service</a>
        <a href="privacy-policy.php">Privacy Policy</a>
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
    <script src="javascript/cookie.js"></script>
</body>

</html>