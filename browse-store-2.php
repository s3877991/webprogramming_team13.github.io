<?php
session_start();

// If file 'install.php' still exists, the current PHP script in this page will be terminated
if (file_exists('admin/install.php')) {
    die("You have to delete <code>'install.php'</code> file manually to activate the System!");
}

require 'backend/mall_store_functions.php';

//function to display chosen value in the select box field after clicking the dropdown options
function keepFieldSelected($str)
{
    if (isset($_GET['category']) && $_GET['category'] === $str) {
        echo "selected";
    } else {
        echo "";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/browse-filter.css">
    <link rel="stylesheet" href="css/flexbox.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Shoppiverse - Stores by Category</title>
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
                <li><a href="index.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="fees.php">FEES</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for="dropdown-sub" class="toggle">STORES <span class="material-icons">expand_more</span></label>
                    <a class="active" href="">STORES <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-store-1.php?letter-start=All&act=Browse">by NAME</a></li>
                        <li><a class="active" href="browse-store-2.php?category=All&act=Browse">by CATEGORY</a></li>
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

        <section id="select">
            <div class="select">
                <form method="get" action='browse-store-2.php'>
                    <label for="category">Your favourite category is</label>
                    <select id="category" name="category">
                        <option <?php keepFieldSelected("All") ?> value="All">All</option>
                        <option <?php keepFieldSelected("1") ?> value="1">Department stores</option>
                        <option <?php keepFieldSelected("2") ?> value="2">Grocery stores</option>
                        <option <?php keepFieldSelected("3") ?> value="3">Restaurants</option>
                        <option <?php keepFieldSelected("4") ?> value="4">Clothing stores</option>
                        <option <?php keepFieldSelected("5") ?> value="5">Accessory stores</option>
                        <option <?php keepFieldSelected("6") ?> value="6">Pharmacies</option>
                        <option <?php keepFieldSelected("7") ?> value="7">Technology stores</option>
                        <option <?php keepFieldSelected("8") ?> value="8">Pet stores</option>
                        <option <?php keepFieldSelected("9") ?> value="9">Toy stores</option>
                        <option <?php keepFieldSelected("10") ?> value="10">Specialty stores</option>
                        <option <?php keepFieldSelected("11") ?> value="11">Thrift stores</option>
                        <option <?php keepFieldSelected("12") ?> value="12">Services</option>
                        <option <?php keepFieldSelected("13") ?> value="13">Kiosks</option>
                    </select>
                    <button type="submit" name="act"><span class="material-icons">check</span></button>
                </form>
            </div>
        </section>

        <hr>

        <section id="list-of stores">
            <?php
            function alphabet_display()
            {
                //display stores in alphabetical order
                $stores = read_all_stores();
                $alphabet = $stores;
                array_multisort(array_column($alphabet, 'name'), SORT_ASC, $alphabet);
                return $alphabet;
            }
            //default display in alphabet order
            echo "<div class=\"flex-container\">";
            $alphabet = alphabet_display();
            foreach ($alphabet as $a) {
                if ($a['category_id'] === $_GET['category']) {
                    $id = $a['id'];
                    $name = $a['name'];
                    $category = $a['category_id'];
                    echo "<div class=\"item\"><a href=\"store-home.php?store=$id&category=$category\"><div class=\"image\"><img src=\"images/store.png\" alt=\"a store\"></div><h3 class=\"name\">$name</h3></a></div>";
                } elseif (empty($_GET['category']) || $_GET['category'] === 'All') {
                    $id = $a['id'];
                    $name = $a['name'];
                    $category = $a['category_id'];
                    echo "<div class=\"item\"><a href=\"store-home.php?store=$id&category=$category\"><div class=\"image\"><img src=\"images/store.png\" alt=\"a store\"></div><h3 class=\"name\">$name</h3></a></div>";
                }
            }
            echo "</div>";
            ?>
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