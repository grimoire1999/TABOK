<?php 
session_start();
if (isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TABOK | Travelling Residents and Non-Residents Automated Documentation System Using QRcode</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="NewEntryDrop" role="button" data-toggle="dropdown">New Entry</a>
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="NewEntryDrop">
                                <a class="dropdown-item" href="#">Resident</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Non-Resident</a>
                            </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>

<?php
 
}else{
	header("Location: index.php");
	exit();
}

?>