<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/flexbox.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <!--Header section with navigation bar-->
    <header>
        <nav>
            <!--Logo of the website name-->
            <div id="logo"><a href="index.php"><img src="images/logo.png" alt="logo">Eworld</a></div>

            <!--When the website is used in small-screen devices, the navigation icon appears-->
            <label for="dropdown-main" class="toggle" id="main-toggle">
                <span class="navigation-icon"></span>
            </label>
            <input type="checkbox" id="dropdown-main">

            <!--Navigation-->
            <ul class="menu">
                <li><a class="active" href="index.php">HOME</a></li>
                <li><a href="about-us.php">ABOUT US</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for="dropdown-sub" class="toggle">PRODUCTS <span class="material-icons">expand_more</span></label>
                    <a href="#">PRODUCTS <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-products-1.php">by CATEGORY</a></li>
                        <li><a href="browse-products-2.php">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.php">CONTACT</a></li>
                <li><a class="your-cart" href="your-cart.php">YOUR CART</a></li>
            </ul>
        </nav>
    </header>

    <!--Main content-->
    <main>

        <!--Banner area-->
        <section id="intro">
            <div class="banner">
                <div class="container">
                    <img src="images/logo.png" alt="logo">
                    <h1>The store</h1>
                    <p>Welcome to one of the best stores in Shoppiverse</p>
                    <a class="btn" href="#sub-sect-1">SHOP NOW!</a>
                </div>
            </div>
        </section>

        <section id="sub-sect-1">
            <?php
            session_start();
            require 'product_functions.php';
            $products = read_all_products();

            $count = 0;
            ?>
            <h2 class="label">New Products</h2>
            <div class="flex-container">
                <?php
                echo '</ul>';
                foreach ($products as $p) {
                    $id = $p['store_id'];
                    $name = $p['name'];
                    echo nl2br("<div class=\"item\"><a href=\"product_functions.php?id=$id\"><div class='image'><img src='images/product.png' alt='a box'></div><h3>Product Name</h3><p class='price'>\$xxxx.xx</p></a></div>");
                    $count++;
                    if ($count == 5) {
                        break;
                    }
                }
                if (isset($_SESSION['visited_products']) && is_array($_SESSION['visited_products'])) {
                    echo 'Visited products';
                    echo '<ul>';
                    foreach ($_SESSION['visited_products'] as $id) {
                        echo "<li>$id</li>";
                    }
                    echo '</ul>';
                }
                ?>
            </div>
        </section>

        <section id="sub-sect-2">

            <h2 class="label">Featured Products</h2>
            <div class="flex-container">
                <div class="item">
                    <a href="product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a box">
                        </div>
                        <h3 class="name">Product name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a box">
                        </div>
                        <h3 class="name">Product name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a box">
                        </div>
                        <h3 class="name">Product name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a box">
                        </div>
                        <h3 class="name">Product name</h3>
                        <p class="price">$xxxx.xx</p>
                    </a>
                </div>

                <div class="item">
                    <a href="product-details.php">
                        <div class="image">
                            <img src="images/product.png" alt="a box">
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
    <script src="javascript/navbar.js" async></script>
    <script src="../javascript/cookie.js"></script>
</body>

</html>