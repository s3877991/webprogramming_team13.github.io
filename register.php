<?php
// If file 'install.php' still exists, the current PHP script in this file will be terminated
if (file_exists('admin/install.php')) {
    die("You have to delete <code>'install.php'</code> file manually to activate the System!");
}

// define variables and set to empty values
$fname = $lname = $email = $phone = $password = $retypepassword = $address = $zip = $country = $actype = $businessname = $storename = $storecategory = "";
$errors = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["first-name"])) {
        $errors++;
    } else {
        $fname = validate_input($_POST["first-name"]);
        if (!preg_match("/^[A-Za-z]{2,}$/", $fname)) {
            $errors++;
        }
    }

    if (empty($_POST["last-name"])) {
        $errors++;
    } else {
        $lname = validate_input($_POST["last-name"]);
        if (!preg_match("/^[A-Za-z]{2,}$/", $lname)) {
            $errors++;
        }
    }

    if (empty($_POST["email"])) {
        $errors++;
    } else {
        $email = validate_input($_POST["email"]);
        if (!preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email)) {
            $errors++;
            echo 'email';
        } else {
            if (file_exists("../users.csv")) {
                $file = file("../users.csv");
                foreach ($file as $row) {
                    $email_data = explode(',', $row)[0];
                    if ($email == $email_data) {
                        $errors++;
                        break;
                    }
                }
            }
        }
    }

    if (empty($_POST["phone"])) {
        $errors++;
    } else {
        $phone = validate_input($_POST["phone"]);
        if (!preg_match("/^([0-9][-. ]?){8,10}[0-9]$/", $phone)) {
            $errors++;
            echo 'phone';
        } else {
            if (file_exists("../users.csv")) {
                $file = file("../users.csv");
                foreach ($file as $row) {
                    $phone_data = explode(',', $row)[1];
                    if ($phone == $phone_data) {
                        $errors++;
                        break;
                    }
                }
            }
        }
    }

    if (empty($_POST["password"])) {
        $errors++;
    } else {
        $password = validate_input($_POST["password"]);
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,20}$/", $password)) {
            $errors++;
            echo 'pass';
        }
    }

    if (empty($_POST["retype-password"])) {
        $errors++;
    } else {
        $retypepassword = validate_input($_POST["retype-password"]);
        if ($password != $retypepassword) {
            $errors++;
            echo 'repass';
        }
    }

    if (empty($_POST["address"])) {
        $errors++;
    } else {
        $address = validate_input($_POST["address"]);
        if (!preg_match("/^([a-zA-Z0-9]{2,}[\/]*[a-zA-Z0-9]*[ ]?[a-zA-Z0-9 ]+[- ]*[a-zA-Z0-9 ]*)+$/", $address)) {
            $errors++;
            echo 'add';
        }
    }

    if (empty($_POST["city"])) {
        $errors++;
    } else {
        $city = validate_input($_POST["city"]);
        if (!preg_match("/^([a-zA-Z]{2,}[ ]*[a-zA-Z]+)+$/", $city)) {
            $errors++;
            echo 'city';
        }
    }

    if (empty($_POST["zip"])) {
        $errors++;
    } else {
        $zip = validate_input($_POST["zip"]);
        if (!preg_match("/^[0-9]{4,6}$/", $zip)) {
            $errors++;
            echo 'zip';
        }
    }

    if (empty($_POST["country"])) {
        $errors++;
        echo 'country1';
    } else {
        $country = validate_input($_POST["country"]);
        $country_list = ["Argentina", "Australia", "Austria", "Belarus", "Brazil", "Cambodia", "Canada", "Chile", "China", "Colombia", "Costa Rica", "Egypt", "Estonia", "Finland", "France", "Germany", "Holy See (Vantican City State)", "Hong Kong", "Indonesia", "Ireland", "IsraelL", "Jamaica", "Japan", "Jersey", "Kazakhstan", "Kuwait", "Latvia", "Liberia", "Luxembourg", "Macao", "Macedonia", "Malaysia", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Mozambique", "Myanmar", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Nigeria", "Norway", "Pakistan", "Panama", "Paraguay", "Peru", "The Philippines", "Portugal", "Qatar", "Russia", "Rwanda", "Saudi Arabia", "Senegal", "Serbia", "Singapore", "South Africa", "South Korea", "Spain", "Sri Lanka", "Sweden", "Switzerland", "Taiwan", "Thailand", "Turkey", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Venezuela", "Vietnam", "Zimbabwe"];
        if (!in_array($country, $country_list)) {
            $errors++;
            echo 'country';
        }
    }

    if (empty($_POST["acc-type"])) {
        $errors++;
        echo 'acc1';
    } else {
        $acctype = validate_input($_POST["acc-type"]);
        if ($acctype != 'shopper' && $acctype != 'store-owner') {
            $errors++;
            echo 'acc';
        }
    }

    if ($acctype == 'store-owner') {
        if (empty($_POST["business-name"])) {
            $errors++;
            echo 'buss1';
        } else {
            $businessname = validate_input($_POST["business-name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $businessname)) {
                $errors++;
                echo 'buss';
            }
        }


        if (empty($_POST["store-name"])) {
            $errors++;
            echo 'store1';
        } else {
            $storename = validate_input($_POST["store-name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $storename)) {
                $errors++;
                echo 'store';
            }
        }

        if (empty($_POST["store-category"])) {
            $errors++;
            echo 'cate1';
        } else {
            $storecategory = validate_input($_POST["store-category"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $storecategory)) {
                $errors++;
                echo 'cate';
            }
        }
    }

    $userInfo = $email . ',' . $phone . ',' . $fname . ',' . $lname . ',' . $address . ',' . $city . ',' . $zip . ',' . $country . ',' . $acctype . ',' . $businessname . ',' . $storename . ',' . $storecategory . ',' . password_hash($password, PASSWORD_DEFAULT);
    $list = array($email, $phone, $fname, $lname, $address, $city, $zip, $country, $acctype, $businessname, $storename, $storecategory, password_hash($password, PASSWORD_DEFAULT));
    $filename = '../users.csv';
    if ($errors == 0) {
        if (file_exists($filename)) {
            $fp = fopen($filename, "a");
            fputcsv($fp, $list);
            fclose($fp);
        } else {
            $fp = fopen($filename, "w");
            fputcsv($fp, $list);
            fclose($fp);
        }
        header('location: login.php');
    }
}

function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Create New Account</title>
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
                        <li><a href="browse-store-1.php">by NAME</a></li>
                        <li><a href="browse-store-2.php">by CATEGORY</a></li>
                    </ul>
                </li>
                <li><a href="contactus.php">CONTACT US</a></li>
                <li><a href="faqs.php">FAQS</a></li>
                <li><a class="active" href="login.php">MY ACCOUNT</a></li>
            </ul>
        </nav>
    </header>

    <!--Main content-->
    <main>

        <!--Registration Form-->
        <section>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="container">

                    <!--Title-->
                    <div class="title">
                        <h1>CREATE NEW ACCOUNT</h1>
                    </div>

                    <hr>

                    <!--Login information-->
                    <div class="login">

                        <!--Email and phone number-->
                        <div class="flex-container">

                            <div class="flex">
                                <label class="label" for="email">Your email</label>
                                <div>
                                    <input type="email" id="email" name="email" placeholder="Enter your email adress" required>
                                    <p class="error" id="email-error">Please enter a valid email</p>
                                </div>
                            </div>

                            <div class="flex">
                                <label class="label" for="phone">Your phone</label>
                                <div>
                                    <input type="tel" id="phone" name="phone" minlength=9 maxlength=13 placeholder="Enter your phone number" required>
                                    <p class="error" id="phone-error">Please enter a valid phone number</p>
                                </div>
                            </div>

                        </div>

                        <!--Password-->
                        <div class="flex-container">

                            <div class="flex">
                                <label class="label" for="password">Your password</label>
                                <div>
                                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                                    <p>
                                    <ul>
                                        <li>Contains 8-20 characters</li>
                                        <li>Contains at least ONE uppercase letter</li>
                                        <li>Contains at least ONE lowercase letter</li>
                                        <li>Contains at least ONE digit number</li>
                                        <li>Contains at least one special character !@#$%^&*</li>
                                    </ul>
                                    </p>
                                    <p class="error" id="pass-error">Please enter a valid password</p>
                                </div>
                            </div>

                            <div class="flex">
                                <label class="label" for="retype-password">Verify your password</label>
                                <div>
                                    <input type="password" id="retype-password" name="retype-password" placeholder="Renter your password" required>
                                    <p class="error" id="retype-error">Please enter the same password</p>
                                </div>
                            </div>

                        </div>

                    </div>


                    <!--Identity-->
                    <div class="name">

                        <!--Upload Avatar-->
                        <div class="single-container">
                            <div class="item">
                                <label for="profile-picture" class="label">Your Avatar</label>
                                <div>
                                    <input type="file" id="profile-picture" name="profile-picture" accept=".png, .jpg" name="profile-picture" required>
                                </div>
                            </div>
                        </div>

                        <!--Your Name-->
                        <div class="flex-container">

                            <div class="flex">
                                <label class="label" for="first-name">First name</label>
                                <div>
                                    <input type="text" id="first-name" name="first-name" placeholder="Enter your first name" maxlength="50" minlength="3" required>
                                    <p>
                                    <ul>
                                        <li>Contains at least 3 characters</li>
                                    </ul>
                                    </p>
                                    <p class="error" id="fname-error">Please enter a valid name</p>
                                </div>
                            </div>

                            <div class="flex">
                                <label class="label" for="last-name">Last name</label>
                                <div>
                                    <input type="text" id="last-name" name="last-name" placeholder="Enter your last name" maxlength="50" minlength="3" required>
                                    <p>
                                    <ul>
                                        <li>Contains at least 3 characters</li>
                                    </ul>
                                    </p>
                                    <p class="error" id="lname-error">Please enter a valid name</p>
                                </div>
                            </div>

                        </div>

                    </div>


                    <!--Location-->
                    <div class="location">
                        <!--Your current location part 1-->
                        <div class="flex-container" id="residence">

                            <div class="flex">
                                <label class="label" for="address">Address</label>
                                <div>
                                    <input type="text" id="address" name="address" placeholder="Enter your current address" maxlength="50" minlength="3" required>
                                    <p class="error" id="address-error">Please enter a valid address</p>
                                </div>
                            </div>

                            <div class="flex">
                                <label class="label" for="city">City</label>
                                <div>
                                    <input type="text" id="city" name="city" placeholder="Enter your current city" maxlength=30 minlength="3" required>
                                    <p class="error" id="city-error">Please enter a valid name</p>
                                </div>
                            </div>

                        </div>

                        <!--Your current location part 2-->
                        <div class="flex-container">

                            <div class="flex">
                                <label class="label" for="zip">Zipcode</label>
                                <div>
                                    <input type="text" id="zip" name="zip" placeholder="Enter your zipcode" minlength="4" maxlength="6" required>
                                    <p class="error" id="zip-error">Contains from 4 - 6 digits</p>
                                    <p class="error">Invalid zipcode</p>
                                </div>
                            </div>

                            <div class="flex">
                                <label class="label" for="country">Country</label>
                                <div>
                                    <select id="country" name="country" required>
                                        <option value="" selected>Choose your country</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Holy See (Vantican City State)">Holy See (Vantican City State)</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="IsraelL">Israel</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="The Philippines">The Philippines</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Your account types-->
                    <div class="radio-container">

                        <div class="flex">
                            <label class="label" for="acc-type">Your account type</label>
                            <br>
                        </div>

                        <div class="radio">

                            <div>
                                <input type="radio" name="acc-type" id="shopper" value="shopper" required checked>
                                <label class="options" for="shopper">Shopper</label>
                            </div>

                            <div>
                                <input type="radio" name="acc-type" id="store-owner" value="store-owner" required>
                                <label class="options" for="store-owner">Store owner</label>
                            </div>

                        </div>

                    </div>

                    <!--3 additional inputs for shop owner type-->
                    <div id="store-info">

                        <div class="flex-container">

                            <div class="flex">
                                <label class="label" for="business-name">Business name</label>
                                <br>
                                <input type="text" name="business-name" placeholder="Enter your business name" maxlength=50>
                            </div>

                            <div class="flex">
                                <label class="label" for="store-name">Store name</label>
                                <br>
                                <input type="text" name="store-name" placeholder="Enter your store name" maxlength=50>
                            </div>

                        </div>

                        <div class="single-container">
                            <label class="label" for="store-category">Store category</label>
                            <div>
                                <select id="store-category" name="store-category">
                                    <option value="" selected>Choose your category</option>
                                    <option value="department">Department stores</option>
                                    <option value="grocery">Grocery stores</option>
                                    <option value="restaurant">Restaurant</option>
                                    <option value="clothing">Clothing stores</option>
                                    <option value="accessory">Accessory stores</option>
                                    <option value="pharmacies">Pharmacies</option>
                                    <option value="technology">Technology stores</option>
                                    <option value="pet">Pet stores</option>
                                    <option value="toy">Toy stores</option>
                                    <option value="specialty">Specialty stores</option>
                                    <option value="thrift">Thrift stores</option>
                                    <option value="services">Services</option>
                                    <option value="kiosks">Kiosks</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <!--Button Area-->
                    <div class="button-container">

                        <div class="button">
                            <input type="reset" id="clear" name="clear" value="Clear">
                        </div>

                        <div class="button">
                            <input type="submit" id="send" name="send" value="Sign up">
                        </div>

                    </div>

                    <hr>

                    <!--Another Action-->
                    <div class="another-action">
                        <p>Do you already have your account?</p>
                        <a href="login.php">Log In</a>
                    </div>

                </div>
            </form>
        </section>

    </main>

    <!--Footer section with navigation bar-->
    <footer>
        <a href="copyright.html">Copyright</a>
        <a href="tos.html">Terms of Service</a>
        <a href="privacy-policy.html">Privacy Policy</a>
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
    <script src="javascript/register-validation.js"></script>
</body>

</html>