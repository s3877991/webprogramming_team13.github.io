<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/flexbox.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Shoppiverse - The Universe of Shopping Stores</title>
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
                <li><a class="active" href="index.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="fees.php">FEES</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for="dropdown-sub" class="toggle">STORES <span class="material-icons">expand_more</span></label>
                    <a href="#">STORES <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-store-1.php">by NAME</a></li>
                        <li><a href="browse-store-2.php">by CATEGORY</a></li>
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

        <!--Banner area-->
        <section id="intro">
            <div class="banner">
                <div class="container">
                    <h1>SHOPPIVERSE</h1>
                    <p>Say Hello to the World Best Shopping Mall</p>
                    <a class="btn" href="#sub-sect-1">LETS GO!</a>
                </div>
            </div>
        </section>

        <!--New Stores Area-->
        <section id="sub-sect-1">
            <h2 class="label">New Stores</h2>

            <div class="flex-container">

                <div class="item">
                    <a href="eworld-website/index.php">
                        <div class="image">
                            <img src="images/eworld.png" alt="a letter e logo">
                        </div>
                        <h3 class="name">Eworld</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/millennium.png" alt="a letter M logo">
                        </div>
                        <h3 class="name">Millennium</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/mac.png" alt="M . A . C">
                        </div>
                        <h3 class="name">Make-up Art Cosmetics</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/mojito.png" alt="a glass of drink with stars an dots">
                        </div>
                        <h3 class="name">Mojito</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/nike.png" alt="a word 'NIKE' and a slash below it">
                        </div>
                        <h3 class="name">NIKE</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/gucci.png" alt="a symbol and a name above">
                        </div>
                        <h3 class="name">Gucci</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/tocotoco.jpg" alt="a black circle with many stars">
                        </div>
                        <h3 class="name">ToCoToCo</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/don-chicken.png" alt="a man sit on a big chicken">
                        </div>
                        <h3 class="name">Don Chicken</h3>
                    </a>
                </div>

            </div>
        </section>

        <hr>

        <!--New Products Area-->
        <section id="sub-sect-3">
            <h2 class="label">New Products</h2>

            <div class="flex-container">

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <div class="image">
                            <img src="store-pages/images/galaxy-s21-ultra.jpeg" alt="a phone with quad camera">
                        </div>
                        <h3 class="name">Samsung Galaxy S21 Ultra</h3>
                        <p class="price">$1058.69</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details-2.php">
                        <div class="image">
                            <img src="images/book-2-responsive.png" alt="a cover page with some letters and a fingerprint">
                        </div>
                        <h3 class="name">Sapiens: A Brief History of Humankind - Yuval Noah Harari</h3>
                        <p class="price">$10.99</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <img src="images/matte-lipstick.png" alt="a lipstick">
                        <h3 class="name">Mattle Lipstick</h3>
                        <p class="price">$19.99</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details-2.php">
                        <div class="image">
                            <img src="images/faber-watercolor-pencil.jpg" alt="a box of colored pencils">
                        </div>
                        <h3 class="name">72 Faber Castell watercolor pencils set</h3>
                        <p class="price">$24.99</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <div class="image">
                            <img src="images/nike-sneaker.jpg" alt="a sneaker">
                        </div>
                        <h3 class="name">Air Jordan 1 Mid</h3>
                        <p class="price">$140.83</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details-2.php">
                        <div class="image">
                            <img src="images/gucci-bag.jpg" alt="a handbag">
                        </div>
                        <h3 class="name">Marmont mini top handle bag</h3>
                        <p class="price">$2190</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <div class="image">
                            <img src="images/matcha-milk-tea.jpg" alt="a cup of green milk tea">
                        </div>
                        <h3 class="name">Matcha milk tea</h3>
                        <p class="price">$1.07</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details-2.php">
                        <div class="image">
                            <img src="images/spicy-cheese-chicken.jpg" alt="a chicken dish">
                        </div>
                        <h3 class="name">Spicy cheese chicken</h3>
                        <p class="price">$13.04</p>
                    </a>
                </div>

            </div>
        </section>

        <hr>

        <!--Featured Stores Area-->
        <section id="sub-sect-2">
            <h2 class="label">Featured Stores</h2>

            <div class="flex-container">

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/nike.png" alt="a word 'NIKE' and a slash below it">
                        </div>
                        <h3 class="name">NIKE</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <img src="images/eworld.png" alt="a letter e logo">
                        <h3 class="name">Eworld</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/don-chicken.png" alt="a man sit on a big chicken">
                        </div>
                        <h3 class="name">Don Chicken</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/index.php">
                        <div class="image">
                            <img src="images/tocotoco.jpg" alt="a black circle with many stars">
                        </div>
                        <h3 class="name">ToCoToCo</h3>
                    </a>
                </div>

            </div>
        </section>

        <hr>

        <!--Featured Products Area-->
        <section id="sub-sect-4">
            <h2 class="label">Featured Products</h2>

            <div class="flex-container">

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <img src="store-pages/images/iphone-12-pro-max.jpg" alt="a phone with a notch display">
                        <h3 class="name">Apple iPhone 12 Pro Max</h3>
                        <p class="price">$1264.78</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details-2.php">
                        <img src="images/nike-sneaker-2.jpg" alt="another sneaker">
                        <h3 class="name">Air Force 1 </h3>
                        <p class="price">$166.48</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details.php">
                        <img src="images/black-diamond-milk-tea.jpg" alt="a cup of brown milk tea with topping">
                        <h3 class="name">Okinawan Black Diamond milk tea</h3>
                        <p class="price">$1.07</p>
                    </a>
                </div>

                <div class="item">
                    <a href="store-pages/product-details-2.php">
                        <img src="images/brush.png" alt="10 make-up brushes varied in sizes">
                        <h3 class="name">M.A.C Student Pro Brush</h3>
                        <p class="price">$20</p>
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
    <script src="javascript/cookie.js"></script>
</body>

</html>