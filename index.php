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
    <!-- <script src="js\bootstrap.min.js" type="text/javascript"></script> -->

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
</body>

</html>
