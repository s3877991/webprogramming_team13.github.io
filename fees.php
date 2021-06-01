<?php
// If file 'install.php' still exists, the current PHP script in this file will be terminated
if (file_exists('admin/install.php')) {
    die("You have to delete <code>'install.php'</code> file manually to activate the System!");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/fees.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Shoppiverse - Fees</title>
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
                <li><a class="active" href="fees.php">FEES</a></li>
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
                <li><a href="login.php" id="my-account">MY ACCOUNT</a></li>
            </ul>
        </nav>
    </header>

    <!--Main content-->
    <main>

        <!--Title Area-->
        <section id="title">
            <h1>PRICING AND FEES</h1>
        </section>

        <hr>

        <!--Shopper's fees area-->
        <section id="shoppers">
            <h2>For Shoppers</h2>

            <div class="flex-container">

                <div class="item">

                    <div class="banner">
                        <h3 class="level">FREE</h3>
                        <p class="fees">$0</p>
                        <p class="period">per month</p>
                    </div>

                    <div class="content">
                        <ul class="features">
                            <li>User account</li>
                            <li>User's cart</li>
                            <li>Purchase products</li>
                        </ul>

                        <div class="button">
                            <a href="">GET STARTED</a>
                        </div>

                        <p class="trial">Unlimited Access</p>
                    </div>

                </div>

                <div class="item most-popular">

                    <div class="banner">
                        <h3 class="level">ADVANCED</h3>
                        <p class="fees">$25</p>
                        <p class="period">per month</p>
                    </div>

                    <div class="content">
                        <ul class="features">
                            <li>User account</li>
                            <li>User's cart</li>
                            <li>Purchase products</li>
                            <li>25% discount</li>
                            <li>50% ship</li>
                        </ul>

                        <div class="button">
                            <a href="">GET STARTED</a>
                        </div>

                        <p class="trial">7-day free trial</p>
                    </div>

                </div>

                <div class="item">

                    <div class="banner">
                        <h3 class="level">PREMIUM</h3>
                        <p class="fees">$50</p>
                        <p class="period">per month</p>
                    </div>

                    <div class="content">
                        <ul class="features">
                            <li>User account</li>
                            <li>User's cart</li>
                            <li>Purchase products</li>
                            <li>50% discount</li>
                            <li>Free ship</li>
                            <li>Exclusive gifts</li>
                        </ul>

                        <div class="button">
                            <a href="">GET STARTED</a>
                        </div>

                        <p class="trial">14-day free trial</p>
                    </div>

                </div>

            </div>

        </section>

        <hr>

        <!--Store Owner's fees area-->
        <section id="store-owners">

            <h2>For Store Owners</h2>

            <div class="flex-container">

                <div class="item">

                    <div class="banner">
                        <h3 class="level">STARTER</h3>
                        <p class="fees">$10</p>
                        <p class="period">per month</p>
                    </div>

                    <div class="content">
                        <ul class="features">
                            <li>Add and remove products</li>
                            <li>Free service</li>
                            <li>10% renting and comission</li>
                        </ul>

                        <div class="button">
                            <a href="">GET STARTED</a>
                        </div>

                        <p class="trial">Refund allowed in 7 days</p>
                    </div>

                </div>

                <div class="item most-popular">

                    <div class="banner">
                        <h3 class="level">BASIC</h3>
                        <p class="fees">$30</p>
                        <p class="period">per month</p>
                    </div>

                    <div class="content">
                        <ul class="features">
                            <li>Add and remove products</li>
                            <li>Free service</li>
                            <li>Host products</li>
                            <li>8% renting and comission</li>
                        </ul>

                        <div class="button">
                            <a href="">GET STARTED</a>
                        </div>

                        <p class="trial">Refund allowed in 7 days</p>
                    </div>

                </div>

                <div class="item">

                    <div class="banner">
                        <h3 class="level">PREMIUM</h3>
                        <p class="fees">$70</p>
                        <p class="period">per month</p>
                    </div>

                    <div class="content">
                        <ul class="features">
                            <li>Add and remove products</li>
                            <li>Free service</li>
                            <li>Host products</li>
                            <li>6% renting and comission</li>
                            <li>Sponsored advertising</li>
                        </ul>

                        <div class="button">
                            <a href="">GET STARTED</a>
                        </div>

                        <p class="trial">Refund allowed in 7 days</p>
                    </div>

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