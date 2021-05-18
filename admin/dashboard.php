<!-- Assignment 3: FULLSTACK ASSIGNMENT - Task #3: Create and develop an admin dashboard page -->

<!-- PHP code area -->
<?php
// Prevent unknown users as well as hackers from logging in to dashboard
/* session_start();

if (!isset($_SESSION['username'])) {
    // check cookie
    if (isset($_COOKIE['loggedin_name'])) {
        $name = $_COOKIE['loggedin_name'];
        // check if the cookie is valid one
        if (file_exists("../$name")) {
            $val = file_get_contents("../$name");
            if ($_COOKIE['uniqid'] == $val) {
                $_SESSION['username'] = $_COOKIE['loggedin_name'];
            }
        }
    }
}

if (!isset($_SESSION['username'])) {
    header('location: login.php');
} */
?>

<!-- HTML code area -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" href="css/header&footer.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Dashboard - Shoppiverse Admin</title>
</head>

<body>

    <!-- Header section -->
    <header>
        <h2>SHOPPIVERSE <span>Admin</span></h2>
    </header>

    <!-- Main section -->
    <main>
        <h1 id="title">DASHBOARD</h1>
        <h3 id="subtitle">Welcome to the Content Management System, admin!</h3>

        <hr>

        <div class="content-form">
            <form method="post" action="dashboard.php">

                <!-- PAGE CONTENT EDITOR SECTION -->
                <h2 class="section-name">PAGE CONTENT</h2>
                <p class="description">You can edit content of a webpage.</p>

                <div class="long-text">
                    <label for="cpr">Copyright</label>
                    <br>
                    <textarea name="cpr"></textarea>
                </div>

                <div class="long-text">
                    <label for="tos">Terms of Service</label>
                    <br>
                    <textarea name="tos"></textarea>
                </div>

                <div class="long-text">
                    <label for="pp">Privacy Policy</label>
                    <br>
                    <textarea name="pp"></textarea>
                </div>

                <!-- AVATAR SECTION -->
                <h2 class="section-name">AVATARS</h2>
                <p class="description">You can see your group members' avatars in "About Us" page.</p>

                <div class="flexbox">

                    <div class="item">
                        <div class="avatar-preview">
                            <img src="images/default-avatar.png" alt="anonymous face inside a circle icon">
                        </div>
                        <div class="avatar-change">
                            <input type="file" name="avatar">
                        </div>
                        <p class="member-name">Nguyen Linh Chi</p>
                        <p class="member-id">s3878609</p>
                    </div>

                    <div class="item">
                        <div class="avatar-preview">
                            <img src="images/default-avatar.png" alt="anonymous face inside a circle icon">
                        </div>
                        <div class="avatar-change">
                            <input type="file" name="avatar">
                        </div>
                        <p class="member-name">Nguyen Quang Duy</p>
                        <p class="member-id">s3877991</p>
                    </div>

                    <div class="item">
                        <div class="avatar-preview">
                            <img src="images/default-avatar.png" alt="anonymous face inside a circle icon">
                        </div>
                        <div class="avatar-change">
                            <input type="file" name="avatar">
                        </div>
                        <p class="member-name">Phan Do Ngoc Linh</p>
                        <p class="member-id">s3881557</p>
                    </div>

                    <div class="item">
                        <div class="avatar-preview">
                            <img src="images/default-avatar.png" alt="anonymous face inside a circle icon">
                        </div>
                        <div class="avatar-change">
                            <input type="file" name="avatar">
                        </div>
                        <p class="member-name">Nguyen Hai Minh Trang</p>
                        <p class="member-id">s38786058</p>
                    </div>

                </div>

                <!-- BUTTONS -->
                <div class="actions">
                    <input type="button" name="act" value="Discard">
                    <input type="submit" name="act" value="Save">
                </div>

            </form>
        </div>
    </main>

    <!-- Footer section -->
    <footer>
        <h2>by <span>THE GANG<span></h2>
        <h3>Developed in 2021</h3>
    </footer>

</body>

</html>