
<?php

session_start();
include_once 'includes/classes/news.php';
include_once 'includes/classes/db.php';
include_once 'includes/classes/user.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sports News</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    body,td,th {
	color: #000;
}
    body {
	background-color: #FFF;
}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     
   <?php
		if(($_GET['action'] != 'login'))
		
		{
          
		  include "includes/header.php"; 
    
        
       include "includes/sidebar.php";
	   } ?>
/*<?php
//include "includes/header.php"; 
//  include "includes/sidebar.php";
 ?>*/
        
          <!-- /.navbar-collapse -->
      </nav>

        <div id="page-wrapper">

           
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

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
