<?php
session_start();

// If file 'install.php' still exists, the current PHP script in this file will be terminated
if (file_exists('admin/install.php')) {
    die("You have to delete <code>'install.php'</code> file manually to activate the System!");
}

$fname = $lname = $email = $phone = $address = $city = $zip = $country = $acctype = "";
if (isset($_SESSION["email"])) {
    if (file_exists("../users.csv")) {
        $file = file("../users.csv");
        foreach ($file as $row) {
            $email = explode(',', $row)[0];
            if ($email == $_SESSION['email']) {
                $userInfo = explode(',', $row);
                $phone = $userInfo[1];
                $fname = $userInfo[2];
                $lname = $userInfo[3];
                $address = $userInfo[4];
                $city = $userInfo[5];
                $zip = $userInfo[6];
                $country = $userInfo[7];
                $acctype = $userInfo[8];
                break;
            }
        }
    }
} else {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/user-info.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>My Account</title>
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
                    <a href="">STORES <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-store-1.php?letter-start=All&act=Browse">by NAME</a></li>
                        <li><a href="browse-store-2.php?category=All&act=Browse">by CATEGORY</a></li>
                    </ul>
                </li>
                <li><a href="contactus.php">CONTACT US</a></li>
                <li><a href="faqs.php">FAQS</a></li>
                <li><a class="active" href="user-info.php" id="my-account">MY ACCOUNT</a></li>
            </ul>
        </nav>
    </header>

    <!--Main content-->
    <main>
        <section id="user-info">

            <!--Title-->
            <div class="title">
                <h1>MY ACCOUNT</h1>
                <button><a href="backend/logout.php">Log Out</a></button>
            </div>

            <hr>

            <!--Avatar Area-->
            <div class="avatar">
                <img src="images/default-avatar.png" alt="an anonymous face">
            </div>

            <hr>

            <!--Identity Area (Desktop Mode)-->
            <div class="table" id="desktop">
                <table>

                    <tr>
                        <td class="property">First Name</td>
                        <td class="value"><?php echo $fname; ?></td>
                    </tr>

                    <tr>
                        <td class="property">Last Name</td>
                        <td class="value"><?php echo $lname; ?></td>
                    </tr>

                    <tr>
                        <td class="property">Email Address</td>
                        <td class="value"><a href="mailto:<?php echo $email; ?>" class="user-email"><?php echo $email; ?></a></td>
                    </tr>

                    <tr>
                        <td class="property">Phone Number</td>
                        <td class="value"><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></td>
                    </tr>

                    <tr>
                        <td class="property">Permanent Address</td>
                        <td class="value"><?php echo $address; ?></td>
                    </tr>

                    <tr>
                        <td class="property">City</td>
                        <td class="value"><?php echo $city; ?></td>
                    </tr>

                    <tr>
                        <td class="property">Zipcode</td>
                        <td class="value"><?php echo $zip; ?></td>
                    </tr>

                    <tr>
                        <td class="property">Country</td>
                        <td class="value"><?php echo $country; ?></td>
                    </tr>

                    <tr>
                        <td class="property">Account Type</td>
                        <td class="value"><?php echo $acctype; ?></td>
                    </tr>

                </table>
            </div>

            <!--Identity Area (Mobile Mode)-->
            <div class="list" id="mobile">

                <div class="item">
                    <p class="property">First Name</p>
                    <p class="value"><?php echo $fname; ?></p>
                </div>

                <div class="item">
                    <p class="property">Last Name</p>
                    <p class="value"><?php echo $lname; ?></p>
                </div>

                <div class="item">
                    <p class="property">Email Address</p>
                    <p class="value"><a href="mailto:<?php echo $email; ?>" class="user-email"><?php echo $email; ?></p>
                </div>

                <div class="item">
                    <p class="property">Phone Number</p>
                    <p class="value"><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
                </div>

                <div class="item">
                    <p class="property">Permanent Address</p>
                    <p class="value"><?php echo $address; ?></p>
                </div>

                <div class="item">
                    <p class="property">City</p>
                    <p class="value"><?php echo $city; ?></p>
                </div>

                <div class="item">
                    <p class="property">Zipcode</p>
                    <p class="value"><?php echo $zip; ?></p>
                </div>

                <div class="item">
                    <p class="property">Country</p>
                    <p class="value"><?php echo $country; ?></p>
                </div>

                <div class="item">
                    <p class="property">Account Type</p>
                    <p class="value"><?php echo $acctype; ?></p>
                </div>

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