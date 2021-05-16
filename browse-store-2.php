<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/browse-store-2.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Shoppiverse - Stores</title>
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
                    <label for="dropdown-sub" class="toggle">STORES <span
                            class="material-icons">expand_more</span></label>
                    <a href="">STORES <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-store-1.php">by NAME</a></li>
                        <li><a class="active" href="browse-store-2.php">by CATEGORY</a></li>
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
                    <label for="category">Your favourite category is</label>
                    <select id="category">
                        <option id="all">All</option>
                        <option id="books">Books</option>
                        <option id="cosmetics">Cosmetics</option>
                        <option id="technology">Technology</option>
                        <option id="stationery">Stationery</option>
                    </select>
                </div>
        </section>

        <hr>

        <section id="list-of stores">
            <div class="flex-container">

                <div class="item">
                    <a href="eworld-website/index.php">
                        <div class="image">
                            <img src="images/eworld.png" alt="a letter e logo">
                        </div>
                        <h3 class="name">Eworld</h3>
                        <p class="des">Media Technology Store</p>
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
                    <a href="eworld-website/index.php">
                        <div class="image">
                            <img src="images/millennium.png" alt="a letter M logo">
                        </div>
                        <h3 class="name">Millennium</h3>
                        <p class="des">Novel Bookstore</p>
                        <p class="rank">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star_border</span>
                        </p>
                    </a>
                </div>

                <div class="item">
                    <a href="eworld-website/index.php">
                        <div class="image">
                            <img src="images/mac.png" alt="M . A . C">
                        </div>
                        <h3 class="name">Make-up Art Cosmetics</h3>
                        <p class="des">Cosmetics Store</p>
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
                    <a href="eworld-website/index.php">
                        <div class="image">
                            <img src="images/mojito.png" alt="a glass of drink with stars an dots">
                        </div>
                        <h3 class="name">Mojito</h3>
                        <p class="des">Art Stationery Store</p>
                        <p class="rank">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star_border</span>
                        </p>
                    </a>
                </div>

                <div class="item">
                    <a href="eworld-website/index.php">
                        <div class="image">
                            <img src="images/nike.png" alt="a word 'NIKE' and a slash below it">
                        </div>
                        <h3 class="name">NIKE</h3>
                        <p class="des">Sports Store</p>
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
                    <a href="eworld-website/index.php">
                        <div class="image">
                            <img src="images/gucci.png" alt="a symbol and a name above">
                        </div>
                        <h3 class="name">Gucci</h3>
                        <p class="des">Premium Fashion Store</p>
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
                    <a href="eworld-website/index.php">
                        <div class="image">
                            <img src="images/tocotoco.jpg" alt="a black circle with many stars">
                        </div>
                        <h3 class="name">ToCoToCo</h3>
                        <p class="des">Milk Tea Store</p>
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
                    <a href="eworld-website/index.php">
                        <div class="image">
                            <img src="images/don-chicken.png" alt="a man sit on a big chicken">
                        </div>
                        <h3 class="name">Don Chicken</h3>
                        <p class="des">Korean Chicken Restaurant</p>
                        <p class="rank">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                        </p>
                    </a>
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
    <script src="javascript/login-status.js"></script>
    <script src="javascript/cookie.js"></script>
</body>

</html>