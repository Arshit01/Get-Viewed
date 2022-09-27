<?php
    session_start();
    if (!isset($_SESSION['UID'])) {
            header('location: index.php');
            die();
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css" type="text/css" />

    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <?php
        include 'dheader.php';
        include 'config.php';
     ?>
    <div class="bs-example">
                    <div class="page-header">
                        <h2 class="pull-left">Global Videos Url</h2>
                    </div>
                    <?php
                        $result = mysqli_query($con,"SELECT link_url FROM user_data WHERE u_id NOT IN(" . $_SESSION['UID'] . ") AND link_id NOT IN(SELECT link_id FROM viewed WHERE u_id = " . $_SESSION['UID'] . ")");

                        if (mysqli_num_rows($result) > 0) {
                    ?>
                    <table class='table'>
                        <thead>
                            <tr>
                                <td>Url</td>
                            </tr>
                        </thead>
                        <?php
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td> <a href="<?php echo $row["link_url"]; ?>" target="_blank"><?php echo $row["link_url"]; ?></a></td>
                        </tr>
                        <?php
                                $i++;
                            }
                        ?>
                    </table>
                    <?php
                        }
                        else {
                            echo "No result found";
                        }
                    ?>
                </div>
</body>

</html>
