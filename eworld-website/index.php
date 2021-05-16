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
            <div id="logo"><a href="index.html"><img src="images/logo.png" alt="logo">Eworld</a></div>

            <!--When the website is used in small-screen devices, the navigation icon appears-->
            <label for="dropdown-main" class="toggle" id="main-toggle">
                <span class="navigation-icon"></span>
            </label>
            <input type="checkbox" id="dropdown-main">

            <!--Navigation-->
            <ul class="menu">
                <li><a class="active" href="index.html">HOME</a></li>
                <li><a href="about-us.html">ABOUT US</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for="dropdown-sub" class="toggle">PRODUCTS <span
                            class="material-icons">expand_more</span></label>
                    <a href="#">PRODUCTS <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-products-1.html">by CATEGORY</a></li>
                        <li><a href="browse-products-2.html">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.html">CONTACT</a></li>
                <li><a class="your-cart" href="your-cart.html">YOUR CART</a></li>
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

        <!--New Products Area-->
        <section id="sub-sect-1">
            <h2 class="label">New Products</h2>

            <div class="flex-container">

                <div class="item">
                    <a href="product-details-2.html">
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
                    </a>
                </div>

                <div class="item">
                    <a href="product-details.html">
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
                    </a>
                </div>

                <div class="item">
                    <a href="product-details-2.html">
                        <div class="image">
                            <img src="images/dell-laptop.jpg" alt="a laptop">
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
                    </a>
                </div>

                <div class="item">
                    <a href="product-details.html">
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
                    </a>
                </div>

                <div class="item">
                    <a href="product-details-2.html">
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
                    </a>
                </div>

            </div>
        </section>

        <!--Featured Products Area-->
        <section id="sub-sect-2">
            <h2 class="label">Featured Products</h2>

            <div class="flex-container">

                <div class="item">
                    <a href="product-details.html">
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
                    </a>
                </div>

                <div class="item">
                    <a href="product-details-2.html">
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
                    </a>
                </div>

                <div class="item">
                    <a href="product-details.html">
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
                    </a>
                </div>

                <div class="item">
                    <a href="product-details-2.html">
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
                    </a>
                </div>

                <div class="item">
                    <a href="product-details.html">
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
                    </a>
                </div>

            </div>
        </section>

        <!--Flashing message-->
        <div class="flash-container" id="process-denied">
            <div class="flashing-message">
                <div class="icon">
                    <img src="images/account.jpg" alt="a default avatar">
                </div>
                <h1>Please <a href="../login.html">Login</a> or <a href="../register.html">Register</a> to continue this
                    process.</h1>
            </div>
        </div>

    </main>

    <!--Footer section with navigation bar-->
    <footer>
        <a href="copyright.html">Copyright</a>
        <a href="tos.html">Terms of Service</a>
        <a href="privacypolicy.html">Privacy Policy</a>
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