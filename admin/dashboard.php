<!-- Assignment 3: FULLSTACK ASSIGNMENT - Task #3: Create and develop an admin dashboard page -->

<!-- PHP code area -->
<?php
// Start the session
session_start();

// If file 'install.php' still exists, the current PHP script in this file will be terminated
if (file_exists('install.php')) {
    die("You have to delete <code>'install.php'</code> file manually to activate the System");
}

// Check if admin has logged in or not
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}

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
        <h3 id="subtitle">Welcome to the Content Management System, <span id="username"><?= ($_SESSION['username']) ?></span>!</h3>

        <hr>

        <div class="page-content-form">
            <form enctype="multipart/form-data" method="post" action="dashboard.php">

                <!-- PAGE CONTENT SECTION -->
                <h2 class="section-name">PAGE CONTENT</h2>
                <p class="description">You can edit content of a web page.</p>

                <?php
                // DISPLAY CURRENT CONTENT IN TEXT AREA INPUT
                $pages = array('copyright', 'terms_of_service', 'privacy_policy');
                foreach ($pages as $page) {
                    if (isset($_POST['save'])) {
                        $page_file = '../admin/' . $page . '.txt';
                        $open_file = fopen($page_file, "w+");
                        fwrite($open_file, $_POST[$page]);
                        fclose($open_file);
                    }
                }
                ?>

                <!-- COPYRIGHT SECTION -->
                <div class="long-text">
                    <label for="cpr">Copyright</label>
                    <br>
                    <textarea name="copyright">

                    <?php
                    // Save the content data in an external file when clicking "Save" button
                    $content_data = file("../admin/copyright.txt");
                    // Overwriting the previous content when updating content in text area input
                    foreach ($content_data as $update) {
                        echo $update;
                    }
                    ?>

                    </textarea>
                </div>

                <!-- TERMS OF SERVICE SECTION -->
                <div class="long-text">
                    <label for="tos">Terms of Service</label>
                    <br>
                    <textarea name="terms_of_service">

                    <?php
                    // Save the content data in an external file when clicking "Save" button
                    $content_data = file("../admin/terms_of_service.txt");
                    // Avoid overwriting the previous content when updating content in text area input
                    foreach ($content_data as $update) {
                        echo $update;
                    }
                    ?>

                    </textarea>
                </div>


                <!-- PRIVACY POLICY SECTION -->
                <div class="long-text">
                    <label for="pp">Privacy Policy</label>
                    <br>
                    <textarea name="privacy_policy">

                    <?php
                    // Save the content data in an external file when clicking "Save" button
                    $content_data = file("../admin/privacy_policy.txt");
                    // Avoid overwriting the previous content when updating content in text area input
                    foreach ($content_data as $update) {
                        echo $update;
                    }
                    ?>

                    </textarea>
                </div>

                <hr>

                <!-- AVATAR SECTION -->
                <h2 class="section-name">AVATARS</h2>
                <p class="description">You can see your group members' avatars in <strong><em>About Us</em></strong> web page.</p>

                <!--Preview-->
                <div class="flexbox">

                    <div class="item">
                        <div class="avatar-preview">
                            <img src="images/chi-avatar.png" alt="anonymous face inside a circle icon" name>
                        </div>
                        <div class="avatar-change">
                            <input type="file" name="chi_avatar" accept=".png, .jpg">
                        </div>
                        <p class="member-name">Nguyen Linh Chi</p>
                        <p class="member-id">s3878609</p>
                    </div>

                    <div class="item">
                        <div class="avatar-preview">
                            <img src="images/duy-avatar.png" alt="anonymous face inside a circle icon">
                        </div>
                        <div class="avatar-change">
                            <input type="file" name="duy_avatar" accept=".png, .jpg">
                        </div>
                        <p class="member-name">Nguyen Quang Duy</p>
                        <p class="member-id">s3877991</p>
                    </div>

                    <div class="item">
                        <div class="avatar-preview">
                            <img src="images/linh-avatar.png" alt="anonymous face inside a circle icon">
                        </div>
                        <div class="avatar-change">
                            <input type="file" name="linh_avatar" accept=".png, .jpg">
                        </div>
                        <p class="member-name">Phan Do Ngoc Linh</p>
                        <p class="member-id">s3881557</p>
                    </div>

                    <div class="item">
                        <div class="avatar-preview">
                            <img src="images/trang-avatar.png" alt="anonymous face inside a circle icon">
                        </div>
                        <div class="avatar-change">
                            <input type="file" name="trang_avatar" accept=".png, .jpg">
                        </div>
                        <p class="member-name">Nguyen Hai Minh Trang</p>
                        <p class="member-id">s3878058</p>
                    </div>

                </div>

                <?php
                // Upload and Update Avatar Script
                if (isset($_POST['save'])) {
                    // Set an array of member name
                    $member = array('chi', 'duy', 'linh', 'trang');
                    // Create a loop based on the array above
                    foreach ($member as $name) {
                        // Set the name of HTML image input element
                        $mem_ava = $name . "_avatar";
                        if ($_FILES[$mem_ava]["error"] == UPLOAD_ERR_OK) {
                            // Store new image as name-avatar.png (overwrite the current file) by using string concatenation operator
                            $new_location = './images/' . $name . '-avatar.png';
                            move_uploaded_file($_FILES[$mem_ava]['tmp_name'], $new_location);
                        }
                    }
                }
                ?>

                <!-- Save button -->
                <div id="submit">
                    <button type="submit" name="save">Save</button>
                </div>

                <hr>

                <div id="logout">
                    <h2>Want to change Admin account?</h2>
                    <button><a href="logout.php">Log Out</a></button>
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