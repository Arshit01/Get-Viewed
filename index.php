<?php
    session_start();
    if (isset($_SESSION['UID'])) {
            header('location: dashboard.php');
            die();
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Get-Viewed</title>

    <link rel="icon" type="image/png" href="img/favicon.ico" />

    <!-- JavaScript -->

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />

</head>

<body>
    <?php
		include 'header.php';
	 ?>
    <div class="banner">
        <h1>A Unique YouTube Traffic Solution</h1>
        <p>Increasing traffic for your YouTube videos has never been so simple.</p>
        <p>Along with many unique features will surely satisfy you.</p>
        <a class="floating" href="signup.php"><i class="gv-signup"></i>Sign Up</a>
    </div>
    <div id="about">
        <h1 class="heading">About Us</h1>
        <p>
            Get-Viewed is an user based traffic exchange. Joining our system, you can receive tens of thousands of viewes per day from thousands of members around the world. We offer many options that you can flexibly configure your videos and fully
            control the traffic in your way.
        </p>
        <p>
            With the enthusiasm of the development team and the unique features that cannot be found in other systems, the number of members is continuously increasing day by day. Get-Viewed would like to bring you the best YouTube traffic solution!
        </p>
        <p>
            Sign up for a free account today!
        </p>
    </div>
    <div id="hiw">
        <h1 class="heading">How it works ?</h1>
        <div class="how">
            <div class="step">
                <h1 class="num">1</h1>
                <h2>Sign Up For Free</h2>
                <p>Only with a valid email, an easy-to-remember and strong password, you can create an account at Get-Viewed easily, quickly and thoroughly free. Just start to fill your information <a href="signup.php">here.</a></p>
            </div>
            <div class="step">
                <h1 class="num">2</h1>
                <h2>Upload Links</h2>
                <p>After signing up, log in to Get-Viewed, then add and configure your YouTube links, you can add one or more links, and there are a lot of exciting options that are waiting for you to explore.</p>
            </div>
            <div class="step">
                <h1 class="num">3</h1>
                <h2>Earning GVC</h2>
                <p>Viewe other users uploads. By viewing the globally uploaded links, with each of your views, you will earn some GVC into your account.</p>
            </div>
            <div class="step">
                <h1 class="num">4</h1>
                <h2>Receive Viewes</h2>
                <p>Get-Viewed will automatically use your GVC to deliver viewes to your videos that you have added. You can relax now and leave Get-Viewed will do your work, as well as you can change your links any time.</p>
            </div>
        </div>
    </div>
    <div id="pricing">
        <h1 class="heading">Pricing</h1>
        <div id="container">
            <div class="pricetab">
                <h1>FREE</h1>
                <div class="price">
                    <h2>Free</h2>
                </div>
                <div class="infos">
                    <h3>24/7 Online Support</h3>
                    <h3>No Premium Profile Listing</h3>
                    <h3>100 Uploads</h3>
                    <h3>Free 100 GVC</h3>
                    <h3>0 Bonus GVC every month</h3>
                    <h3>Non Customizable Profile Page</h3>
                    <h3>1 month support</h3>
                </div>
                <div class="pricefooter">
                    <div class="button">
                        <a href="#">Get started</a>
                    </div>
                </div>
            </div>
            <div class="pricetab">
                <h1>STARTER</h1>
                <div class="price">
                    <h2>10$</h2>
                </div>
                <div class="infos">
                    <h3>24Hr Support</h3>
                    <h3>Premium Profile Listing</h3>
                    <h3>15,000 Uploads</h3>
                    <h3>10,000 GVC</h3>
                    <h3>15 Bonus GVC every month</h3>
                    <h3>Customizable Profile Page</h3>
                    <h3>3 months support</h3>
                </div>
                <div class="pricefooter">
                    <div class="button">
                        <a href="#">Get started</a>
                    </div>
                </div>
            </div>
            <div class="pricetab">
                <h1>BASIC</h1>
                <div class="price">
                    <h2>25$</h2>
                </div>
                <div class="infos">
                    <h3>24Hr Support</h3>
                    <h3>Premium Profile Listing</h3>
                    <h3>50,000 Uploads</h3>
                    <h3>80,000 GVC</h3>
                    <h3>30 Bonus GVC every month</h3>
                    <h3>Customizable Profile Page</h3>
                    <h3>8 months support</h3>
                </div>
                <div class="pricefooter">
                    <div class="button">
                        <a href="#">Get started</a>
                    </div>
                </div>
            </div>
            <div class="pricetabpre pricetab">
                <h1>PREMIUM</h1>
                <div class="pricepre price">
                    <h2>55$</h2>
                </div>
                <div class="infos">
                    <h3>24Hr Support</h3>
                    <h3>Premium Profile Listing</h3>
                    <h3>Unlimited Uploads</h3>
                    <h3>1,00,000 GVC</h3>
                    <h3>60 Bonus GVC every month</h3>
                    <h3>Customizable Profile Page</h3>
                    <h3>1 year support</h3>
                </div>
                <div class="pricefooterpre">
                    <div class="buttonpre button">
                        <a href="#">Get started</a>
                    </div>
                </div>
            </div>
            <div class="pricetab">
                <h1>VIP</h1>
                <div class="price">
                    <h2>100$</h2>
                </div>
                <div class="infos">
                    <h3>24Hr Support</h3>
                    <h3>Premium Profile Listing</h3>
                    <h3>Unlimited Uploads</h3>
                    <h3>5,00,000 GVC</h3>
                    <h3>120 Bonus GVC every month</h3>
                    <h3>Customizable Profile Page</h3>
                    <h3>5 year support</h3>
                </div>
                <div class="pricefooter">
                    <div class="button">
                        <a href="#">Get started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="team">
        <h1 class="heading">Our Team</h1>
        <div class="wrap">
            <div class="item">
                <img src="img/Vivek.jpg" alt="team">
                <div class="overlay">
                    <h4>Vivek Dholakiya</h4>
                </div>
            </div>
            <div class="item">
                <img src="img/Arshit.jpg" alt="team">
                <div class="overlay">
                    <h4>Vora Arshit</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'footer.php';
     ?>
</body>

</html>
