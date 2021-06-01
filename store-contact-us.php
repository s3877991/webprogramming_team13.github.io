<?php
// If file 'install.php' still exists, the current PHP script in this file will be terminated
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
    <link rel="stylesheet" href="css-store/contact-us.css">
    <link rel="stylesheet" href="css-store/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title><?php echo $name . " - "; ?>Contact Us</title>
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
                <li><a href=\"store-about-us.php?store=$id\">ABOUT US</a></li>
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
                <li><a class=\"active\" href=\"store-contact-us.php?store=$id\">CONTACT</a></li>
                <li class=\"your-cart\"><a href=\"your-cart.php?store=$id\">YOUR CART</a></li>
            </ul>";
            ?>
        </nav>
    </header>

    <!--Main content-->
    <main>

        <!--Contact form-->
        <?php
        echo "<form method=\"get\" action=\"store-home.php?store=$id\">";
        ?>
        <div class="container">

            <!--Title-->
            <div class="title">
                <h1>CONTACT US</h1>
                <p>Feel free to contact us</p>
            </div>

            <!--Purpose and full name area-->
            <div class="flex-container">

                <div class="item flex">
                    <label class="label" for="purpose">Your purpose</label>
                    <br>
                    <select id="purpose" required>
                        <option value="" selected>Choose your purpose</option>
                        <option id="shop-online">Shop online</option>
                        <option id="customer-care">Customer care</option>
                        <option id="feedback">Feedback</option>
                        <option id="others">Others</option>
                    </select>
                </div>

                <div class="item flex">
                    <label class="label" for="name">Your name</label>
                    <br>
                    <input type="text" name="name" maxlength="50" placeholder="Enter your full name" required>
                </div>

            </div>

            <div class="flex-container">

                <div class="item flex">
                    <label class="label" for="email">Your email</label>
                    <br>
                    <input type="email" name="email" placeholder="Enter your email address" required>
                </div>

                <div class="item flex">
                    <label class="label" for="phone">Your phone</label>
                    <br>
                    <input type="tel" name="phone" minlength=9 maxlength=13 placeholder="Enter your phone number" required>
                </div>

            </div>

            <div class="flex-container">

                <div class="item flex">
                    <label class="label" for="method">Preferred contact method</label>
                </div>

                <div class="item radio">

                    <input type="radio" name="method" value="email">
                    <label class="options" for="email">Email</label>

                    <input type="radio" name="method" value="phone">
                    <label class="options" for="phone">Phone</label>

                </div>

            </div>

            <div class="item-container">

                <label class="label" for="days">Preferred contact days</label>
                <br>
                <ul class="checkbox">

                    <li>
                        <input type="checkbox" name="mon" value="mon">
                        <label class="options" for="mon">Monday</label>
                    </li>

                    <li>
                        <input type="checkbox" name="tue" value="tue">
                        <label class="options" for="tue">Tuesday</label>
                    </li>

                    <li>
                        <input type="checkbox" name="wed" value="wed">
                        <label class="options" for="wed">Wednesday</label>
                    </li>

                    <li>
                        <input type="checkbox" name="thu" value="thu">
                        <label class="options" for="thu">Thursday</label>
                    </li>

                    <li>
                        <input type="checkbox" name="fri" value="fri">
                        <label class="options" for="fri">Friday</label>
                    </li>

                    <li>
                        <input type="checkbox" name="sat" value="sat">
                        <label class="options" for="sat">Saturday</label>
                    </li>

                    <li>
                        <input type="checkbox" name="sun" value="sun">
                        <label class="options" for="sun">Sunday</label>
                    </li>

                </ul>
            </div>

            <div class="item-container">

                <label class="label" for="message">Your message</label>
                <br>
                <textarea placeholder="Enter your message"></textarea>

            </div>

            <div class="button-container">

                <div class="button">
                    <input type="reset" id="clear" value="Clear">
                </div>

                <div class="button">
                    <input type="submit" id="send" value="Send">
                </div>

            </div>

        </div>
        </form>

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