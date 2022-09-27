<?php

    session_start();
    include 'config.php';

    if (isset($_POST['add'])) {

        $url = $_POST['url'];
        $uid = $_SESSION['UID'];

        $insert = "INSERT INTO `user_data`(`u_id`, `link_url`) VALUES ('$uid','$url')";
        $res = mysqli_query($con, $insert);

        if ($res) {
            echo '<script>alert("Link uploaded successfully.");location.replace("profile.php");</script>';
        }
    }
