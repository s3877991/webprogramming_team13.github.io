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
    <title>Shoppiverse - Stores by Name</title>
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
                        <li><a class="active" href="browse-store-1.php">by NAME</a></li>
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

        <section id="select">
            <div class="select">
                <label for="letter-start">Store names start with letter </label>
                <select id="letter-start">
                    <option id="all">All</option>
                    <option id="#">#</option>
                    <option id="a">A</option>
                    <option id="b">B</option>
                    <option id="c">C</option>
                    <option id="d">D</option>
                    <option id="e">E</option>
                    <option id="f">F</option>
                    <option id="g">G</option>
                    <option id="h">H</option>
                    <option id="i">I</option>
                    <option id="j">J</option>
                    <option id="k">K</option>
                    <option id="l">L</option>
                    <option id="m">M</option>
                    <option id="n">N</option>
                    <option id="o">O</option>
                    <option id="p">P</option>
                    <option id="q">Q</option>
                    <option id="r">R</option>
                    <option id="s">S</option>
                    <option id="t">T</option>
                    <option id="u">U</option>
                    <option id="v">V</option>
                    <option id="w">W</option>
                    <option id="x">X</option>
                    <option id="y">Y</option>
                    <option id="z">Z</option>
                </select>
            </div>
        </section>

        <hr>

        <section id="list-of stores">

                <div class="flex-container">

                    <div class="item">
                        <a href="store-home.php">
                            <div class="image">
                                <img src="images/store.png" alt="a store">
                            </div>
                            <h3 class="name">Store Name</h3>
                        </a>
                    </div>

                    <div class="item">
                        <a href="store-home.php">
                            <div class="image">
                                <img src="images/store.png" alt="a store">
                            </div>
                            <h3 class="name">Store Name</h3>
                        </a>
                    </div>

                    <div class="item">
                        <a href="store-home.php">
                            <div class="image">
                                <img src="images/store.png" alt="a store">
                            </div>
                            <h3 class="name">Store Name</h3>
                        </a>
                    </div>

                    <div class="item">
                        <a href="store-home.php">
                            <div class="image">
                                <img src="images/store.png" alt="a store">
                            </div>
                            <h3 class="name">Store Name</h3>
                        </a>
                    </div>

                    <div class="item">
                        <a href="store-home.php">
                            <div class="image">
                                <img src="images/store.png" alt="a store">
                            </div>
                            <h3 class="name">Store Name</h3>
                        </a>
                    </div>

                    <div class="item">
                        <a href="store-home.php">
                            <div class="image">
                                <img src="images/store.png" alt="a store">
                            </div>
                            <h3 class="name">Store Name</h3>
                        </a>
                    </div>

                    <div class="item">
                        <a href="store-home.php">
                            <div class="image">
                                <img src="images/store.png" alt="a store">
                            </div>
                            <h3 class="name">Store Name</h3>
                        </a>
                    </div>

                    <div class="item">
                        <a href="store-home.php">
                            <div class="image">
                                <img src="images/store.png" alt="a store">
                            </div>
                            <h3 class="name">Store Name</h3>
                        </a>
                    </div>

                    <div class="item">
                        <a href="store-home.php">
                            <div class="image">
                                <img src="images/store.png" alt="a store">
                            </div>
                            <h3 class="name">Store Name</h3>
                        </a>
                    </div>

                    <div class="item">
                        <a href="store-home.php">
                            <div class="image">
                                <img src="images/store.png" alt="a store">
                            </div>
                            <h3 class="name">Store Name</h3>
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