<?php
session_start();
require 'product_functions.php';
/**
* For printing array data
*
* @param string $arr array
* @param string $returnAsString if true, return the string
* @return string
*/
function printArray($arr, $returnAsString=false ) {
    $ret  = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
        return $ret;
    else
        echo $ret;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/process-denied.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Eworld - Store of Media Technology</title>
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
                    <h1>Eworld</h1>
                    <p>Welcome to one of the best Media Electronic Devices Stores in the World</p>
                    <a class="btn" href="#sub-sect-1">SHOP NOW!</a>
                </div>
            </div>
        </section>

        <h2 class="label">New Products</h2>
        <div class="product-detail-cart">
            <?php
            $products = read_all_products();
            $products_sorted = $products; 
            $dateTime = array_column($products_sorted, 'created_time');
            array_multisort($dateTime, SORT_DESC, $products_sorted);
            // printArray($products_sorted);
            $count = 0;
            echo '</ul>';
            foreach ($products_sorted as $p) {
                $id = $p['id'];
                $name = $p['name']; 
                $price = $p['price'];
                echo nl2br("<div class='product-details'><img src='images/galaxy-s21-ultra.jpeg' alt='a phone with quad camera' width=100px> \n\n <a href=\"product.php?id=$id\">$name</a> \n <p class='price'>$price$</p><p class='rank material-icons'> star star star star star</p></div>");
                $count++;
                if ($count == 5) {
                    break;
                }
            }
            ?>
        </div>

        <h2 class="label">Featured Products</h2>
        <div class="product-detail-cart">
            <?php
                $count = 0;
                echo '</ul>';
                foreach ($products as $p) {
                    if ($p['featured_in_store'] == 'TRUE') {
                        $id = $p['id'];
                        $name = $p['name']; 
                        $price = $p['price'];
                        echo nl2br("<div class='product-details'><img src='images/galaxy-s21-ultra.jpeg' alt='a phone with quad camera' width=100px> \n\n <a href=\"product.php?id=$id\">$name</a> \n <p class='price'>$price$</p><p class='rank material-icons'> star star star star star</p></div>");
                        $count++;
                        if ($count == 5) {
                            break;
                        }
                    }
                }
            ?>
        </div>
            
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