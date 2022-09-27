<!DOCTYPE html>
<html lang="en">

<head>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="js/main.js" type="text/javascript"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/header.css" type="text/css" />
    <link rel="stylesheet" href="css/dheader.css" type="text/css" />
    <link rel="stylesheet" href="css/gv.css" type="text/css" />
</head>

<body>
    <!-- header -->
    <header>
        <nav>
            <!-- logo -->
            <div class="logo">
                <a href="index.php">
                    <img src="img/logo.png" alt="Logo" />
                    <p>Get-Viewed</p>
                </a>
            </div>
            <!-- //logo -->
            <!-- Account -->
            <div class="user" onclick="toggleMenu()">
                <?php echo $_SESSION['UNAME']; ?>
            </div>

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <a href="profile.php" class="sub-menu-link">
                        <i class="gv-edit-profile"></i>
                        <p>Edit Profile</p>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <i class="gv-settings"></i>
                        <p>Settings</p>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <i class="gv-help"></i>
                        <p>Help & Support</p>
                    </a>
                    <a href="logout.php" class="sub-menu-link">
                        <i class="gv-logout"></i>
                        <p>Logout</p>
                    </a>
                </div>
            </div>
            <!-- //Account -->
        </nav>
    </header>
    <!-- //header -->
    <script type="text/javascript">
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>

</html>
