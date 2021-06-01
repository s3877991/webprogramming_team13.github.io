<?php
session_start();

// If file 'install.php' still exists, the current PHP script in this page will be terminated
if (file_exists('admin/install.php')) {
die("You have to delete <code>'install.php'</code> file manually to activate the System!");
}

require 'backend/product_functions.php';
require 'backend/mall_store_functions.php';
function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (!isset($_GET['store'])) {
    header('location: index.php');
} else {
    $storeid = validate_input($_GET['store']);
    $stores = read_all_stores();
    foreach ($stores as $store) {
        if ($storeid == $store['id']) {
            $storeName = $store['name'];
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css-store/header-&-footer.css">
    <link rel="stylesheet" href="css-store/flexbox.css">
    <link rel="stylesheet" href="css-store/store-home.css">
    <link rel="stylesheet" href="css-store/cookie.css">
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
            <div id="logo"><a href="store-home.php?store=<?php echo $storeid; ?>"><?php echo $storeName; ?></a></div>

            <!--When the website is used in small-screen devices, the navigation icon appears-->
            <label for="dropdown-main" class="toggle" id="main-toggle">
                <span class="navigation-icon"></span>
            </label>
            <input type="checkbox" id="dropdown-main">

            <!--Navigation-->
            <?php
            echo
            "<ul class=\"menu\">
                <li><a class=\"active\" href=\"store-home.php?store=$storeid\">HOME</a></li>
                <li><a href=\"store-about-us.php?store=$storeid\">ABOUT US</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for=\"dropdown-sub\" class=\"toggle\">PRODUCTS <span class=\"material-icons\">expand_more</span></label>
                    <a href=\"#\">PRODUCTS <span class=\"material-icons\">expand_more</span></a>
                    <input type=\"checkbox\" id=\"dropdown-sub\">
                    <ul class=\"sub-menu\">
                        <li><a href=\"browse-products-1.php?store=$storeid\">by CATEGORY</a></li>
                        <li><a href=\"browse-products-2.php?store=$storeid&orderby=none\">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href=\"store-contact-us.php?store=$storeid\">CONTACT</a></li>
                <li class=\"your-cart\"><a href=\"your-cart.php?store=$storeid\">YOUR CART</a></li>
            </ul>";
            ?>
        </nav>
    </header>

    <!--Main content-->
    <main>

        <!--Banner area-->
        <section id="intro">
            <div class="banner">
                <div class="container">
                    <h1><?php echo $storeName; ?></h1>
                    <p>Welcome to one of the best stores in Shoppiverse Mall</p>
                    <button class="btn"><a href="#sub-sect-1">SHOP NOW!</a></button>
                </div>
            </div>
        </section>

        <section id="sub-sect-1">
            <h2 class="label">New Products</h2>
            <div class="flex-container">
                <?php
                $products = read_all_products();
                $products_sorted = $products;
                $dateTime = array_column($products_sorted, 'created_time');
                array_multisort($dateTime, SORT_DESC, $products_sorted);
                // printArray($products_sorted);
                $count = 0;
                foreach ($products_sorted as $p) {
                    $store = validate_input($_GET['store']);
                    if ($p['store_id'] == $store) {
                        $id = $p['id'];
                        $name = $p['name'];
                        $price = $p['price'];
                        echo ("<div class=\"item\"><a href=\"product-details.php?id=$id\"><div class='image'><img src='images/store-product.png' alt='a shopping bag'></div><h3>$name</h3><p class='price'>$$price</p></a></div>");
                        $count++;
                        if ($count == 5) {
                            break;
                        }
                    }
                }
                ?>
            </div>
        </section>

        <hr>

        <section id="sub-sect-2">

            <h2 class="label">Featured Products</h2>
            <div class="flex-container">
                <?php
                $count = 0;
                foreach ($products as $p) {
                    $store = validate_input($_GET['store']);
                    if ($p['store_id'] == $store) {
                        if ($p['featured_in_store'] == 'TRUE') {
                            $id = $p['id'];
                            $name = $p['name'];
                            $price = $p['price'];
                            echo ("<div class=\"item\"><a href=\"product-details.php?id=$id\"><div class='image'><img src='images/store-product.png' alt='a shopping bag'></div><h3>$name</h3><p class='price'>$$price</p></a></div>");
                            $count++;
                            if ($count == 5) {
                                break;
                            }
                        }
                    }
                }
                ?>
            </div>
        </section>

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
    <script src="javascript/cookie.js"></script>
</body>

</html>