<?php
session_start();
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
        <div class="col-sm-3 text-center navpadding">
            <h1>Please Login</h1>
            <h3>In Order to View and Access More</h3>
            <p id="logininfo"></p>
            <p id="timer"></p>
        </div>
        <div class="col-sm-9 text-center temp">
            <div class="innertemp" id="logincon">
                <form id="login" action="logsign.php" method="post" onsubmit="Login(event)">
                    <h4>Username:</h4>
                    <p>
                <input type="text" placeholder="Username" name="username" id="username" required>
                    </p>
                    <h4>Password:</h4>
                    <p>
                 <input type="password" placeholder="Password" name="password" id="password" required>
                    </p>
                    <p>
                    <input type="submit" name="loginbtn" class="btn btn-primary">
                    </p>
                    <a href="signup.php">New User?</a> OR
                    <a href="#" onclick="showForgot()">Forgot Password?</a>
                </form>
            </div>
        </div>
    </div>
        <?php include_once 'lastcheck.php'?>
</div>
<script src="js/driverjava.js"></script>
</body>
</html>