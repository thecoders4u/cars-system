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
            <h1>Just Fill the Form</h1>
            <h3>In Order To Reset Your Account's Password</h3>
            <p id="forgot-info"></p>
        </div>
        <div class="col-sm-9 text-center temp">
            <div class="innertemp" id="logincon">
                <form id="login" action="logsign.php" class="updateforms" method="post" onsubmit="event.preventDefault()">
                    <h4>Your Email:</h4>
                    <p>
                        <input type="email" placeholder="Username" name="email" id="forgot-email" required>
                    </p>
                    <h4>New Password:</h4>
                    <p>
                        <input type="password" placeholder="Password" name="password" id="forgot-password1" required>
                    </p>
                    <h4>Verify Password:</h4>
                    <p>
                        <input type="password" placeholder="Password" name="password" id="forgot-password2" required>
                    </p>
                    <h4>What is your favorite Car?:</h4>
                    <p>
                        <input type="password" placeholder="Password" name="password" id="answer" required>
                    </p>
                    <p>
                        <input type="submit" class="btn btn-success" style="width: 47%; display: inline-block;" value="Reset" onclick="resetPass()">
                        <input type="submit" class="btn btn-secondary" style="width: 47%; display: inline-block;" value="Back" onclick="goBack()">
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
