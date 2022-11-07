<?php 

function SignUp() {
include 'config.php';

    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $select = "SELECT * FROM `users` WHERE `email` = '$email'";
    $res = mysqli_query($con,$select);

    $count = mysqli_num_rows($res);

    $regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
    $flag = preg_match($regex, $password);

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && $count == 0) {
        if ($flag) {
            if($password == $cpassword) {

                $hash = password_hash($password, PASSWORD_DEFAULT);

                $insert = "INSERT INTO `users`(`user_name`, `email`, `password`,`GVC`) VALUES ('$uname','$email','$hash',100)";

                $result = mysqli_query($con, $insert);

                if ($result) {
                    ?>
                    <script type="text/javascript">
                    if (confirm("Your account has been successfully created.\nLogin to confirm registration.")) {
                        var element = document.querySelector(".container");
                        element.classList.add("active");
                    }
                    </script>
                    <?php
                }
            }
            else {
                echo '<script>alert("Passwords do not match!");location.replace("signup.php");</script>';
            }
        }
        else {
            echo '<script>alert("Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.");location.replace("signup.php");</script>';
        }
    }
    else {
        echo '<script>alert("Email is incorrect!");location.replace("signup.php");</script>';
    }
    
}


if (isset($_POST['signup'])) {
    SignUp();
}

function Login() {
    session_start();
    if (isset($_SESSION['UID'])) {
            header('location: dashboard.php');
            die();
    }
    include 'config.php';

    $email = $_POST['lemail'];
    $password = $_POST['lpassword'];


    $select = "SELECT * FROM `users` WHERE `email` = '$email'";
    $res = mysqli_query($con,$select);


    $count = mysqli_num_rows($res);

    if ($count > 0) {
        $row = mysqli_fetch_assoc($res);

        $u_id = $row['u_id'];
        $user_name = $row['user_name'];
        $email = $row['email'];
        $hash = $row['password'];

        $pass = password_verify($password, $hash);

        if (filter_var($email, FILTER_VALIDATE_EMAIL) && $pass) {
            session_start();

            $_SESSION['UID'] = $u_id;
            $_SESSION['UNAME'] = $user_name;
            header('location: dashboard.php');
            die();
        }
        else {
            echo '<script>alert("Email or Password is Invalid");location.replace("signup.php");</script>';
        }
    }
}

if (isset($_POST['login'])) {
    Login();
}

function add() {
    session_start();
    if (!isset($_SESSION['UID'])) {
        header('location: index.php');
        die();
    }
    include 'config.php';

    $url = $_POST['url'];
    $uid = $_SESSION['UID'];

    $insert = "INSERT INTO `user_data`(`u_id`, `link_url`) VALUES ('$uid','$url')";
    $res = mysqli_query($con, $insert);

    if ($res) {
        echo '<script>alert("Link uploaded successfully.");location.replace("profile.php");</script>';
    }
}

if (isset($_POST['add'])) {
    add();
}

function viewed() {
    session_start();
    include 'config.php';

    $lid = $_POST['getLID'];
    $uid = $_SESSION['UID'];

    $insert = "INSERT INTO `viewed`(`link_id`, `u_id`) VALUES ($lid, $uid)";
    $res = mysqli_query($con, $insert);
}

viewed();