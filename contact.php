<?php
session_start();
//Redirect user if not logged in
if(!isset($_SESSION['loggedin'])){
    header("Location: login.php?Login_first");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="css/drivercss.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
    <!--Script-->
    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<button id="topbutton" class="btn btn-primary"><img src="up.png"></button>
<div class="heading">
    <h1>Driverless</h1>
    <p>Into the Autonomous Age</p>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
            </li>
            <?php include_once 'secondcheck.php'?>
            <?php include_once 'thirdcheck.php'?>
            <?php include_once 'fourthcheck.php'?>
            <?php include_once 'firstcheck.php'?>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 text-center navpadding">
            <h1>This is the Contact Area</h1>
            <h3>Where you can reach out to us</h3>
        </div>
    </div>
    <div class="row" id="faq">
        <div class="col-sm-12 text-center temp navpadding">
            <div class="innertemp" id="logincon">
                <h3>Please ask any question which has not been answered already</h3>
                <form id="login" onsubmit="View(event)">
                    <h4>Email:</h4>
                    <p>
                        <input type="email" placeholder="Email" id="email" class="contact-form" required>
                    </p>
                    <h4>Subject:</h4>
                    <p>
                        <input type="text" placeholder="Subject" id="subject" class="question contact-form" required>
                    </p>
                    <h4>Question:</h4>
                    <p>
                        <input type="text" placeholder="Question" id="question" class="contact-form" required>
                    </p>
                    <p>
                        <input type="submit" name="loginbtn" class="btn btn-primary" name="viewfaq" required>
                    </p>
                </form>
            </div>
        </div>
    </div>
            <?php include_once 'lastcheck.php'?>
</div>
<script src="js/driverjava.js"></script>
</body>
</html>