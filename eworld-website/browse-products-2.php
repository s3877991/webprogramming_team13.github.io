<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/browse-products-2.css">
    <link rel="stylesheet" href="css/process-denied.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Eworld - Browse Products</title>
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
                <li><a href="index.php">HOME</a></li>
                <li><a href="about-us.php">ABOUT US</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for="dropdown-sub" class="toggle">PRODUCTS <span
                            class="material-icons">expand_more</span></label>
                    <a class="active" href="#">PRODUCTS <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-products-1.php">by CATEGORY</a></li>
                        <li><a class="active" href="browse-products-2.php">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.php">CONTACT</a></li>
                <li class="your-cart"><a href="your-cart.php">YOUR CART</a></li>
            </ul>
        </nav>
    </header>

    <!--Main Content-->
    <main>

        <!--Select Area-->
        <div class="select">

            <div class="select-container">
                <label for="created-date">Created time: </label>
                <select id="created-date">
                    <option id="newest">Newest first</option>
                    <option id="oldest">Oldest first</option>
                </select>
            </div>

        </div>

        <!--Products section-->
        <div class="flex-container">

            <div class="item smartphone">
                <a href="product-details-2.php">
                    <div class="image">
                        <img src="images/galaxy-s21-ultra.jpeg" alt="a phone with quad camera">
                    </div>
                    <h3 class="name">Samsung Galaxy S21 Ultra</h3>
                    <p class="price">$1058.69</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_half</span>
                    </p>
                    <p class="created-date">Apr 3 2021</p>
                </a>
            </div>

            <div class="item tablet">
                <a href="product-details.php">
                    <div class="image">
                        <img src="images/galaxy-tab-s7.jpg" alt="a tablet with its pen">
                    </div>
                    <h3 class="name">Samsung Galaxy Tab S7</h3>
                    <p class="price">$738.69</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_half</span>
                    </p>
                    <p class="created-date">Apr 3 2021</p>
                </a>
            </div>

            <div class="item laptop">
                <a href="product-details-2.php">
                    <div class="image">
                        <img src="images/dell-laptop.jpg" alt="a laptop creadted by Dell">
                    </div>
                    <h3 class="name">Dell Inspiron 5593</h3>
                    <p class="price">$730.00</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_half</span>
                    </p>
                    <p class="created-date">Apr 4 2021</p>
                </a>
            </div>

            <div class="item digital-camera">
                <a href="product-details.php">
                    <div class="image">
                        <img src="images/fujifilm-camera.jpg" alt="a camera">
                    </div>
                    <h3 class="name">Fujifilm X-T4</h3>
                    <p class="price">$2619.13</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </p>
                    <p class="created-date">Apr 4 2021</p>
                </a>
            </div>

            <div class="item bluetooth-device">
                <a href="product-details-2.php">
                    <div class="image">
                        <img src="images/galaxy-buds-pro.png" alt="bluetooth ear phones">
                    </div>
                    <h3 class="name">Samsung Galaxy Buds Pro</h3>
                    <p class="price">$164.78</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_border</span>
                    </p>
                    <p class="created-date">Apr 4 2021</p>
                </a>
            </div>

            <div class="item smartphone">
                <a href="product-details.php">
                    <img src="images/iphone-12-pro-max.jpg" alt="a phone with a notch display">
                    <h3 class="name">Apple iPhone 12 Pro Max</h3>
                    <p class="price">$1264.78</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </p>
                    <p class="created-date">Apr 5 2021</p>
                </a>
            </div>

            <div class="item tablet">
                <a href="product-details-2.php">
                    <img src="images/ipad-air-4.jpg" alt="a tablet with full screen display">
                    <h3 class="name">Apple iPad Air 2020</h3>
                    <p class="price">$651.74</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_half</span>
                    </p>
                    <p class="created-date">Apr 5 2021</p>
                </a>
            </div>

            <div class="item laptop">
                <a href="product-details.php">
                    <img src="images/macbook-pro-13.jpg" alt="a laptop made by Apple">
                    <h3 class="name">Apple MacBook Pro 13" 2019</h3>
                    <p class="price">$1304.35</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </p>
                    <p class="created-date">Apr 5 2021</p>
                </a>
            </div>

            <div class="item digital-camera">
                <a href="product-details-2.php">
                    <img src="images/canon-camera.jpg" alt="a camera made by Canon">
                    <h3 class="name">Canon EOS 6D Mark II</h3>
                    <p class="price">$1195.22</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </p>
                    <p class="created-date">Apr 6 2021</p>
                </a>
            </div>

            <div class="item bluetooth-device">
                <a href="product-details.php">
                    <img src="images/airpods-2.jpg" alt="bluetooth ear phones made by Apple">
                    <h3 class="name">Apple AirPods 2</h3>
                    <p class="price">$143.04</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_half</span>
                    </p>
                    <p class="created-date">Apr 6 2021</p>
                </a>
            </div>

            <div class="item smartphone">
                <a href="product-details-2.php">
                    <div class="image">
                        <img src="images/oppo-find-x3-pro.png" alt="a phone whose camera is almost the same as iPhone 12 pro series">
                    </div>
                    <h3 class="name">Oppo Find X3 Pro</h3>
                    <p class="price">$1249.97</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_half</span>
                    </p>
                    <p class="created-date">Apr 7 2021</p>
                </a>
            </div>

            <div class="item tablet">
                <a href="product-details.php">
                    <div class="image">
                        <img src="images/galaxy-tab-s6-lite.jpg" alt="a tablet with single camera">
                    </div>
                    <h3 class="name">Samsung Galaxy Tab S6 Lite</h3>
                    <p class="price">$395.22</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_border</span>
                    </p>
                    <p class="created-date">Apr 7 2021</p>
                </a>
            </div>

            <div class="item laptop">
                <a href="product-details-2.php">
                    <div class="image">
                        <img src="images/asus-laptop.jpg" alt="a laptop created by Asus">
                    </div>
                    <h3 class="name">Asus Vivobook 15</h3>
                    <p class="price">$664.78</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_half</span>
                    </p>
                    <p class="created-date">Apr 7 2021</p>
                </a>
            </div>

            <div class="item digital-camera">
                <a href="product-details.php">
                    <div class="image">
                        <img src="images/sony-camera.png" alt="a camera made by Sony">
                    </div>
                    <h3 class="name">Sony Alpha SLT-A58</h3>
                    <p class="price">$463.04</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_half</span>
                    </p>
                    <p class="created-date">Apr 8 2021</p>
                </a>
            </div>

            <div class="item bluetooth-device">
                <a href="product-details-2.php">
                    <div class="image">
                        <img src="images/baseus-encok-w04.jpg" alt="bluetooth ear phones look nearly he same as ipods">
                    </div>
                    <h3 class="name">Baseus Encok W04</h3>
                    <p class="price">$26.04</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_border</span>
                    </p>
                    <p class="created-date">Apr 8 2021</p>
                </a>
            </div>

            <div class="item smartphone">
                <a href="product-details.php">
                    <img src="images/asus-rog-phone-3.jpg" alt="a gaming phone">
                    <h3 class="name">Asus ROG Phone 3</h3>
                    <p class="price">$847.39</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </p>
                    <p class="created-date">Apr 8 2021</p>
                </a>
            </div>

            <div class="item tablet">
                <a href="product-details-2.php">
                    <img src="images/ipad-gen-8.png" alt="an old-fashioned iPad">
                    <h3 class="name">Apple iPad Gen 8 10.2"</h3>
                    <p class="price">$369.56</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_border</span>
                    </p>
                    <p class="created-date">Apr 9 2021</p>
                </a>
            </div>

            <div class="item laptop">
                <a href="product-details.php">
                    <img src="images/lenovo-laptop.jpg" alt="a laptop made by Lenovo">
                    <h3 class="name">Lenovo ThinkPad X1 Carbon Gen 8</h3>
                    <p class="price">$1304.35</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </p>
                    <p class="created-date">Apr 9 2021</p>
                </a>
            </div>

            <div class="item digital-camera">
                <a href="product-details-2.php">
                    <img src="images/canon-camera-2.jpg" alt="another camera made by Canon">
                    <h3 class="name">Canon EOS M10</h3>
                    <p class="price">$486.52</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_half</span>
                    </p>
                    <p class="created-date">Apr 9 2021</p>
                </a>
            </div>

            <div class="item bluetooth-device">
                <a href="product-details.php">
                    <img src="images/beats-solo-3.jpg" alt="a bluetooth headphone">
                    <h3 class="name">Apple Beats Solo 3</h3>
                    <p class="price">$199.57</p>
                    <p class="rank">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </p>
                    <p class="created-date">Apr 9 2021</p>
                </a>
            </div>

        </div>

        <!--Flashing message-->
        <div class="flash-container" id="process-denied">
            <div class="flashing-message">
                <div class="icon">
                    <img src="images/account.jpg" alt="a default avatar">
                </div>
                <h1>Please <a href="../login.php">Login</a> or <a href="../register.php">Register</a> to continue this
                    process.</h1>
            </div>
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