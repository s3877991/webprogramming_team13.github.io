<?php
// If file 'install.php' still exists, the current PHP script in this page will be terminated
if (file_exists('admin/install.php')) {
    die("You have to delete <code>'install.php'</code> file manually to activate the System!");
}

// Use a function from another PHP file
require 'backend/mall_store_functions.php';

// When users click a link in navigation bar store pages, they will be directed to page with that link.
// If that link is unavailable, he dead message will appear and the script in this page will be terminated.
if (isset($_GET['store'])) {
    $store_id = $_GET['store'];
} else {
    die('Page not found!');
}

// Get a store array
$store = get_store($store_id);

// echo "<pre>";
// print_r($store);
// echo "</pre>";

// Get a store name and its id
$name = $store['name'];
$id = $store['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css-store/header-&-footer.css">
    <link rel="stylesheet" href="css-store/generic-text.css">
    <link rel="stylesheet" href="css-store/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title><?php echo $name . " - "; ?> About Us</title>
</head>

<body>
    <!--Header section with navigation bar-->
    <header>
        <nav>
            <!--Logo of the website name-->
            <div id="logo">
                <?php
                echo "<a href=\"store-home.php?store=$id\">$name</a>";
                ?>
            </div>

            <!--When the website is used in small-screen devices, the navigation icon appears-->
            <label for="dropdown-main" class="toggle" id="main-toggle">
                <span class="navigation-icon"></span>
            </label>
            <input type="checkbox" id="dropdown-main">

            <!--Navigation-->
            <?php
            echo
            "<ul class=\"menu\">
                <li><a href=\"store-home.php?store=$id\">HOME</a></li>
                <li><a class=\"active\" href=\"store-about-us.php?store=$id\">ABOUT US</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for=\"dropdown-sub\" class=\"toggle\">PRODUCTS <span class=\"material-icons\">expand_more</span></label>
                    <a href=\"#\">PRODUCTS <span class=\"material-icons\">expand_more</span></a>
                    <input type=\"checkbox\" id=\"dropdown-sub\">
                    <ul class=\"sub-menu\">
                        <li><a href=\"browse-products-1.php?store=$id\">by CATEGORY</a></li>
                        <li><a href=\"browse-products-2.php?store=$id&orderby=none\">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href=\"store-contact-us.php?store=$id\">CONTACT</a></li>
                <li class=\"your-cart\"><a href=\"your-cart.php?store=$id\">YOUR CART</a></li>
            </ul>";
            ?>
        </nav>
    </header>

    <!--Main Content-->
    <main>

        <div class="image">
            <img src="images/store-icon.png" alt="a store">
        </div>

        <div class="text">
            <h1>ABOUT US</h1>

            <hr>

            <h2>What is <?php echo $name . "?"; ?></h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta aut illum, vitae distinctio id quo, possimus eveniet ea quia, ratione repellat? Voluptatem, quia. Iste illo, libero maiores velit corrupti repellendus!
            </p>

            <h2>Our activity principles</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga tempora, accusamus iusto aut expedita ex? Qui autem, nesciunt accusantium excepturi pariatur deserunt in quas quidem et maiores ipsum facere adipisci.
            </p>

            <h2>Our visions</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam eum doloribus, dolorum repudiandae nisi unde dolore numquam culpa beatae officia molestiae rem eius? Cum tenetur libero nihil voluptas consequatur reprehenderit!
            </p>

        </div>

    </main>

    <!--Footer section with navigation bar-->
    <footer>
        <?php
        echo
        "<a href=\"store-copyright.php?store=$id\">Copyright</a>
        <a href=\"store-tos.php?store=$id\">Terms of Service</a>
        <a href=\"store-privacypolicy.php?store=$id\">Privacy Policy</a>";
        ?>
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