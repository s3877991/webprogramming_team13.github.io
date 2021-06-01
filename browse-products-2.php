<?php
// If file 'install.php' still exists, the current PHP script in this page will be terminated
if (file_exists('admin/install.php')) {
    die("You have to delete <code>'install.php'</code> file manually to activate the System!");
}

function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function keepFieldSelected($str)
{
    if (isset($_GET['orderby']) && $_GET['orderby'] === $str) {
        echo "selected";
    } else {
        echo "";
    }
}
require 'backend/product_functions.php';
require 'backend/mall_store_functions.php';
$storeName = $storeid = "";


if (!isset($_GET['store'])) {
    header('location: store-home.php');
} else {
    $storeid = validate_input($_GET['store']);
    $stores = read_all_stores();
    $storeid_valid = true;
    $count = 0;
    foreach ($stores as $store) {
        if ($storeid == $store['id']) {
            $count++;
        }
    }
    if ($count == 0) {
        $storeid_valid = false;
    }
    if ($storeid == "" || !$storeid_valid) {
        header('location: store-home.php');
    } else {
        $stores = read_all_stores();
        foreach ($stores as $store) {
            if ($storeid == $store['id']) {
                $storeName = $store['name'];
                break;
            }
        }
    }
}

$pageNext = $pagePrev = $totalPageNum = 0;
$products = read_store_products($storeid);
$dateTime = array_column($products, 'created_time');
$orderby = 'none';
if (isset($_GET['orderby'])) {
    $orderby = validate_input($_GET['orderby']);
}

if (isset($_GET['page'])) {
    $page = validate_input($_GET['page']);
    if ($page <= 0 || $page > ceil(sizeof($products) / 2)) {
        if (isset($_GET['orderby'])) {
            header('location: browse-products-2.php?store=' . $storeid . '&orderby=' . $orderby . '&page=1');
        } else {
            header('location: browse-products-2.php?store=' . $storeid . '&orderby=none&page=1');
        }
    } else if (is_int($page + 0)) {
        $pageNext = ++$page;
        $pagePrev = $page - 2;
        $totalPageNum == ceil(sizeof($products) / 2);
    }
} else {
    if (isset($_GET['orderby'])) {
        header('location: browse-products-2.php?store=' . $storeid . '&orderby=' . $orderby . '&page=1');
    } else {
        header('location: browse-products-2.php?store=' . $storeid . '&orderby=none&page=1');
    }
}

if (isset($_GET['orderby']) && $_GET['orderby'] === 'newest') {
    array_multisort($dateTime, SORT_DESC, $products);
} else if (isset($_GET['orderby']) && $_GET['orderby'] === 'oldest') {
    array_multisort($dateTime, SORT_ASC, $products);
}
?>

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
    <title>Products by Created Time</title>
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
                <li><a href=\"store-home.php?store=$storeid\">HOME</a></li>
                <li><a href=\"store-about-us.php?store=$storeid\">ABOUT US</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for=\"dropdown-sub\" class=\"toggle\">PRODUCTS <span class=\"material-icons\">expand_more</span></label>
                    <a class=\"active\" href=\"#\">PRODUCTS <span class=\"material-icons\">expand_more</span></a>
                    <input type=\"checkbox\" id=\"dropdown-sub\">
                    <ul class=\"sub-menu\">
                        <li><a href=\"browse-products-1.php?store=$storeid\">by CATEGORY</a></li>
                        <li><a class=\"active\" href=\"browse-products-2.php?store=$storeid&orderby=none\">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href=\"store-contact-us.php?store=$storeid\">CONTACT</a></li>
                <li class=\"your-cart\"><a href=\"your-cart.php?store=$storeid\">YOUR CART</a></li>
            </ul>";
            ?>
        </nav>
    </header>

    <!--Main Content-->
    <main>
        <!--Select Area-->
        <div class="select">
            <div class="select-container">
                <!-- <label for="created-date">Created time: </label> -->
                <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?store=' . $storeid . '&orderby=' . $orderby . '&page=1'; ?>">
                    <select name="orderby" id="created-date">
                        <option <?php keepFieldSelected('none') ?> value="none" selected="selected">
                            Create time:
                        </option>
                        <option <?php keepFieldSelected("newest") ?> id="newest" value="newest" name="newest">
                            Newest first
                        </option>
                        <option <?php keepFieldSelected("oldest") ?> id="oldest" value="oldest" name="oldest">Oldest first</option>
                        <input type="hidden" name="store" value="<?php echo $storeid; ?>">
                        <input type="hidden" name="page" value="1">
                        <button type="submit" id="order-by-button"><span class="material-icons">check</span></button>
                    </select>
                </form>
            </div>
        </div>

        <!--Products section-->
        <div class="flex-container">
            <?php
            $page = validate_input($_GET['page']);
            $i1 = $page * 2 - 2;
            $i2 = $i1 + 1;
            if ($i2 > sizeof($products) - 1) {
                $i2 = $i1;
            }
            for ($i = $i1; $i <= $i2; $i++) {
                $id = $products[$i]['id'];
                $name = $products[$i]['name'];
                $price = $products[$i]['price'];
                echo "<div class=\"item\">\n";
                echo "  <a href=\"product-details.php?id=$id\">\n";
                echo "      <div class=\"image\">\n";
                echo "          <img src=\"images/store-product.png\" alt=\"a shopping bag\">\n";
                echo "      </div>\n";
                echo "      <h3 class=\"name\">$name</h3>\n";
                echo "      <p class=\"price\">$$price</p>\n";
                echo "  </a>\n";
                echo "</div>";
            }
            ?>
        </div>
        <?php
        if ($page <= 1) {
            echo "  <form method=\"get\" action=\"" . htmlspecialchars($_SERVER["PHP_SELF"]) . "\" id=\"created-time-buttons\">\n";
            echo "      <input type=\"hidden\" name=\"store\" value=\"$storeid\">\n";
            echo "      <input type=\"hidden\" name=\"orderby\" value=\"$orderby\">";
            echo "      <button type=\"submit\" name=\"page\" value=\"$pageNext\"><span class=\"material-icons\">arrow_forward_ios</span></button>\n";
            echo "  </form>";
        } else if ($page == ceil(sizeof($products) / 2)) {
            echo "  <form method=\"get\" action=\"" . htmlspecialchars($_SERVER["PHP_SELF"]) . "\" id=\"created-time-buttons\">\n";
            echo "      <input type=\"hidden\" name=\"store\" value=\"$storeid\">\n";
            echo "      <input type=\"hidden\" name=\"orderby\" value=\"$orderby\">";
            echo "      <button type=\"submit\" name=\"page\" value=\"$pagePrev\"><span class=\"material-icons\">arrow_back_ios</span></button>\n";
            echo "  </form>";
        } else {
            echo "  <form method=\"get\" action=\"" . htmlspecialchars($_SERVER["PHP_SELF"]) . "\" id=\"created-time-buttons\">\n";
            echo "      <input type=\"hidden\" name=\"store\" value=\"$storeid\">\n";
            echo "      <input type=\"hidden\" name=\"orderby\" value=\"$orderby\">";
            echo "      <button type=\"submit\" name=\"page\" value=\"$pagePrev\"><span class=\"material-icons\">arrow_back_ios</span></button>\n";
            echo "      <button type=\"submit\" name=\"page\" value=\"$pageNext\"><span class=\"material-icons\">arrow_forward_ios</span></button>\n";
            echo "  </form>";
        }
        ?>
    </main>



    <!--Footer section with navigation bar-->
    <footer>
        <?php
        echo
        "<a href=\"store-copyright.php?store=$storeid\">Copyright</a>
        <a href=\"store-tos.php?store=$storeid\">Terms of Service</a>
        <a href=\"store-privacypolicy.php?store=$storeid\">Privacy Policy</a>";
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