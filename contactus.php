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
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Shoppiverse - Contact Us</title>
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
                <li><a class="active" href="contactus.php">CONTACT US</a></li>
                <li><a href="faqs.php">FAQS</a></li>
                <li><a href="login.php" id="my-account">MY ACCOUNT</a></li>
            </ul>
        </nav>
    </header>

    <!--Main content-->
    <main>

        <!--Contact form-->
        <section id="contact-form">
            <form method="get" action="contactus.php" id="form-id" class="form">
                <div class="container">

                    <!--Title-->
                    <div class="title">
                        <h1>CONTACT US</h1>
                        <p>Feel free to contact us</p>
                    </div>

                    <hr>

                    <!--Input area-->
                    <div class="flex-container">
                        <div class="item flex">
                            <label class="label" for="purpose">Your purpose</label>
                            <br>
                            <select id="purpose" required>
                                <option value="" selected>Choose your purpose</option>
                                <option value="business">Business</option>
                                <option value="customer-care">Customer care</option>
                                <option value="user-account">User account</option>
                                <option value="feedback">Feedback</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div class="item flex">
                            <div class="form-control">
                                <label class="label" for="name">Your name</label>
                                <br>
                                <input type="text" name="name" id="name" placeholder="Enter your full name">
                                <small>Error message</small>
                            </div>
                        </div>
                    </div>

                    <div class="flex-container">
                        <div class="item flex">
                            <div class="form-control">
                                <label class="label" for="email">Your email</label>
                                <br>
                                <form action="#">
                                    <input type="email" name="email" id="email" placeholder="Enter your email address">
                                    <small>Error message</small>
                                </form>
                            </div>
                        </div>

                        <div class="item flex">
                            <div class="form-control">
                                <label class="label" for="phone">Your phone</label>
                                <br>
                                <input type="tel" name="phone" id="phone" placeholder="Enter your phone number">
                                <small>Error message</small>
                            </div>
                        </div>

                    </div>

                    <div class="flex-container">

                        <div class="item flex">
                            <label class="label" for="method">Preferred contact method</label>
                        </div>

                        <div class="item radio">

                            <input type="radio" name="method" value="email" required>
                            <label class="options" for="email">Email</label>

                            <input type="radio" name="method" value="phone" required>
                            <label class="options" for="phone">Phone</label>

                        </div>

                    </div>

                    <div class="item-container">
                        <label class="label" for="days">Preferred contact days</label>
                        <br>
                        <ul class="checkbox">

                            <li>
                                <input type="checkbox" id="mon" value="mon">
                                <label class="options" for="mon">Monday</label>
                            </li>

                            <li>
                                <input type="checkbox" id="tue" value="tue">
                                <label class="options" for="tue">Tuesday</label>
                            </li>

                            <li>
                                <input type="checkbox" id="wed" value="wed">
                                <label class="options" for="wed">Wednesday</label>
                            </li>

                            <li>
                                <input type="checkbox" id="thu" value="thu">
                                <label class="options" for="thu">Thursday</label>
                            </li>

                            <li>
                                <input type="checkbox" id="fri" value="fri">
                                <label class="options" for="fri">Friday</label>
                            </li>

                            <li>
                                <input type="checkbox" id="sat" value="sat">
                                <label class="options" for="sat">Saturday</label>
                            </li>

                            <li>
                                <input type="checkbox" id="sun" value="sun">
                                <label class="options" for="sun">Sunday</label>
                            </li>

                        </ul>

                    </div>

                    <div class="item-container">

                        <label class="label" for="text-message">Your message</label>
                        <br>
                        <textarea placeholder="Enter your message" id="text-message" required onkeyup="messageRestrictions()"></textarea>
                        <p id="warning-message"></p>
                    </div>

                    <div class="button-container">

                        <div class="button">
                            <input type="reset" id="clear" value="Clear">
                        </div>

                        <div class="button">
                            <input type="submit" id="send" value="Send" onclick="boxVal()">
                        </div>
                    </div>

                </div>
            </form>

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
    <script src="javascript/contactus.js"></script>

</body>

</html>