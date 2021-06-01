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
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Shoppiverse - About Us</title>
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
                <li><a class="active" href="aboutus.php">ABOUT US</a></li>
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
                <li><a href="login.php" id="my-account">MY ACCOUNT</a></li>
            </ul>
        </nav>
    </header>

    <!--Main content-->
    <main>

        <!--Title-->
        <section id="title">
            <h1>ABOUT US</h1>
        </section>

        <hr>

        <!--Group Overview-->
        <section id="overview">
            <div class="text">

                <h1>THE GANG</h1>
                <p>Hi, we are The Gang!</p>
                <p>
                    This is a four-member organization established on April 1<sup>st</sup>, 2021. We first started as a small group
                    of people who loves IT and shopping at the same time. After a few weeks, we have grown into a
                    powerful
                    organization and have our first project - SHOPPIVERSE shopping mall website. Our group consists of
                    the most passionate,
                    enthusiastic, hard-working, creative and extraordinary human beings on Earth.
                </p>
                <p>Let's have a quick look of our cute members!</p>

            </div>
        </section>

        <!--List of group members-->
        <section id="list-of-members">
            <!--Flex boxes-->
            <div class="flex-container">

                <!-- Trigger a modal box -->
                <div class="flex card">
                    <p class="mem-id">s3878609</p>
                    <div class="image">
                        <img src="admin/images/chi-avatar.png" alt="anonymous face inside a circle icon">
                    </div>
                    <h3 class="mem-name">Nguyen Linh Chi</h3>
                    <p class="mem-des">
                        Be careful, mate! She can kill you with the look in her eyes.
                    </p>
                </div>

                <!-- Trigger a modal box -->
                <div class="flex card">
                    <p class="mem-id">s3877991</p>
                    <div class="image">
                        <img src="admin/images/duy-avatar.png" alt="anonymous face inside a circle icon">
                    </div>
                    <h3 class="mem-name">Nguyen Quang Duy</h3>
                    <p class="mem-des">
                        He's quiet, but he's dangerous. You better watch out!
                    </p>
                </div>

                <!-- Trigger a modal box -->
                <div class="flex card">
                    <p class="mem-id">s3881557</p>
                    <div class="image">
                        <img src="admin/images/linh-avatar.png" alt="anonymous face inside a circle icon">
                    </div>
                    <h3 class="mem-name">Phan Do Ngoc Linh</h3>
                    <p class="mem-des">
                        She protects. She attacks. But most importantly, she's a hacker.
                    </p>
                </div>

                <!-- Trigger a modal box -->
                <div class="flex card">
                    <p class="mem-id">s3878058</p>
                    <div class="image">
                        <img src="admin/images/trang-avatar.png" alt="anonymous face inside a circle icon">
                    </div>
                    <h3 class="mem-name">Nguyen Hai Minh Trang</h3>
                    <p class="mem-des">
                        Roses are red, violets are blue. She is insane, and so are you.
                    </p>
                </div>

            </div>
        </section>
        <!-- All flex boxes will become buttons which trigger modal boxes -->

        <!-- Modal boxes -->
        <section id="member-modal">
            <!-- Linh Chi's modal -->
            <div class="modal-container bio">

                <!-- Linh Chi's modal info-->
                <div class="modal-content">
                    <div class="close-modal">
                        <span class="close">&times;</span>
                    </div>

                    <div class="modal-image">
                        <img src="admin/images/chi-avatar.png" alt="anonymous face inside a circle icon">
                    </div>

                    <div class="info">
                        <h2 class="modal-name">Nguyen Linh Chi</h2>
                        <h4 class="modal-id">s3878609</h4>
                    </div>

                    <hr>

                    <div class="description">
                        <h3>DATE OF BIRTH</h3>
                        <p class="birthday">December 4<sup>th</sup> 2002</p>

                        <h3>ABOUT ME</h3>
                        <p>
                            I’m a newbie who just started out in the IT field. Before entering college, I have had some
                            exposure to HTML and JavaScript but plateaued for a while. This semester is an opportunity
                            to
                            improve and apply my knowledge to real practice. My first priority when I chose Information
                            Technology was JavaScript. Building a dynamic web with my own UI design has been a project I
                            hold onto for so long. Although it takes me a lot of time, I’m gonna reach that goal one day.
                        </p>

                        <h3>SKILLS</h3>
                        <ul>
                            <li>Technical writing</li>
                            <li>Critical thinking</li>
                            <li>Flexibility and willingness in learning</li>
                            <li>Creativity</li>
                        </ul>

                        <h3>HOBBIES</h3>
                        <p>
                            My favorite hobbies are drawing, gaming, reading fictions and listening to academic podcasts.
                            And I spend 90% of my time doing those activities.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Quang Duy's modal -->
            <div class="modal-container bio">

                <!-- Quang Duy's modal info-->
                <div class="modal-content">
                    <div class="close-modal">
                        <span class="close">&times;</span>
                    </div>

                    <div class="modal-image">
                        <img src="admin/images/duy-avatar.png" alt="anonymous face inside a circle icon">
                    </div>

                    <div class="info">
                        <h2 class="modal-name">Nguyen Quang Duy</h2>
                        <h4 class="modal-id">s3877991</h4>
                    </div>

                    <hr>

                    <div class="description">
                        <h3>DATE OF BIRTH</h3>
                        <p class="birthday">December 28<sup>th</sup> 2002</p>

                        <h3>ABOUT ME</h3>
                        <p>
                            I was born in Russia, but my hometown is Hue City in Vietnam. I am an introverted person,
                            and I
                            may have some problem to express my feelings to my schoolmates and even the public. Talking
                            about IT, at first, it had been a
                            nightmare in highschool because programming had been extremely difficult at that time.
                            However,
                            not until I graduated highschool and I was enrolled in RMIT University did I realize that IT
                            is
                            a diversity of subjects such as programming, databases, AI, cloud computing and so on, even
                            I
                            was told by an advisor that there would be some programming languages easier, comprehensive
                            and
                            widely used in other universities. Those IT concepts surprised me very much. So, I gradually
                            got used to it instead of getting fed up with it, which allows me to find out "The New
                            World" further and further. And someday after graduation, I am going to be a website
                            developer as my major career.
                        </p>

                        <h3>SKILLS</h3>
                        <ul>
                            <li>Visual learner</li>
                            <li>Hard-working</li>
                            <li>Creativity</li>
                            <li>Being able to reimagine the previous lessons</li>
                            <li>Being flexibile in individual tasks</li>
                        </ul>

                        <h3>HOBBIES</h3>
                        <p>
                            As I am a YouTube content creator, I am very keen on making PowerPoint animation movies,
                            whose
                            topics are mostly about Angry Birds. When I have free time, I usually do that. Besides, I'm
                            also interested in swimming. I often go for a swim every Sunday in order to stay healthy
                            after
                            such a hard working week. Especially, these two pastimes are the ways that I am able to find
                            myself when I feel sad and depressed.
                        </p>
                    </div>
                </div>
            </div>

            </div>

            <!-- Ngoc Linh's modal -->
            <div class="modal-container bio">

                <!-- Ngoc Linh's modal info-->
                <div class="modal-content">
                    <div class="close-modal">
                        <span class="close">&times;</span>
                    </div>

                    <div class="modal-image">
                        <img src="admin/images/linh-avatar.png" alt="anonymous face inside a circle icon">
                    </div>

                    <div class="identity">
                        <h2 class="modal-name">Phan Do Ngoc Linh</h2>
                        <h4 class="modal-id">s3881557</h4>
                    </div>

                    <hr>

                    <div class="description">
                        <h3>DATE OF BIRTH</h3>
                        <p class="birthday">April 16<sup>th</sup> 2002</p>

                        <h3>ABOUT ME</h3>
                        <p>
                            I was born in a small city called Viet Tri, lying deep in the northern of Vietnam. Coming
                            from a
                            quiet, slow-paced lifestyle, I have to admit that it wasn’t an easy journey to adapt to the
                            fast-paced life in HCMC. Nevetherless, I fell in love with the people’s hospitality and the
                            constant movement of this beautiful city, and it became a motivation for me to keep striving
                            further in order to catch up with everyone.
                        </p>

                        <h3>SKILLS</h3>
                        <ul>
                            <li>Flexibility and good adaptation in teamwork</li>
                            <li>Good at writing essays</li>
                            <li>Fast-learner</li>
                        </ul>

                        <h3>HOBBIES</h3>
                        <p>
                            I love watching TV shows. Some of my favorites of all times are <em>Brooklyn 99</em>,
                            <em>Modern
                                Family</em> and <em>How to get away with murder</em>. I can binge watching these shows
                            over
                            and over again without getting bored.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Minh Trang's modal -->
            <div class="modal-container bio">

                <!-- Minh Trang's modal info-->
                <div class="modal-content">
                    <div class="close-modal">
                        <span class="close">&times;</span>
                    </div>

                    <div class="modal-image">
                        <img src="admin/images/trang-avatar.png" alt="anonymous face inside a circle icon">
                    </div>

                    <div class="identity">
                        <h2 class="modal-name">Nguyen Hai Minh Trang</h2>
                        <h4 class="modal-id">s3878058</h4>
                    </div>

                    <hr>

                    <div class="description">
                        <h3>DATE OF BIRTH</h3>
                        <p class="birthday">January 20<sup>th</sup> 2002</p>

                        <h3>ABOUT ME</h3>
                        <p>
                            Like most of the girls, I had never paid attention to the technology world, until I started
                            my
                            new journey at the RMIT University. The more I explore this field, the more I realize how
                            interested it is. I do not consider myself as an excellent student, however, I am still
                            working
                            on my best to become an IT expert. My future dream so far is to work as an AI developer. I
                            acknowledge that the path leading to my dream is not easy at all, but I believe that my love
                            for
                            AI and IT will motivate me to fulfill that dream.
                        </p>

                        <h3>SKILLS</h3>
                        <ul>
                            <li>Problem-solving skill</li>
                            <li>Good teamwork</li>
                            <li>Adaptability</li>
                            <li>Creativity</li>
                        </ul>

                        <h3>HOBBIES</h3>
                        <p>
                            I like cooking and baking in my leisure time. Besides, dancing is also my passion and I've
                            had a great interest in it since I was 13.
                        </p>
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
    <script src="javascript/modal-box.js"></script>
    <script src="javascript/cookie.js"></script>
</body>

</html>