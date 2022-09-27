<?php
    session_start();
    if (isset($_SESSION['UID'])) {
            header('location: dashboard.php');
            die();
    }
include 'config.php';

if (isset($_POST['login'])) {

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
?>
