<?php
include("classes/db.php");
include("classes/user.php");
//include("config/db.php");


?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CMS</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/jquery.validate.js"></script>
    </head>
    <body>
        <div class='container'>
           <header><?php include("includes/header.php"); ?></header>
            
            <div class="row">
                <aside class='col-md-2'>left nav</aside>
                <section class='col-md-10'>
                    <?php
                    if (isset($_GET['action']) && !empty($_GET['action'])) {

                        $file = "files/" . $_GET['action'] . ".php";

                        if (file_exists($file)) {

                            include($file);
                        } else {

                            include("files/home.php");
                        }
                    } else {

                        include("files/home.php");
                    }
                    ?>
                </sectio>
            </div>

            <footer><?php include("includes/footer.php"); ?></footer>
        </div

    </body>
</html>
