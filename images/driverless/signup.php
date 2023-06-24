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
            <h1>Please Register to Have an Account</h1>
            <h3>To Find and Know More about Us</h3>
            <p id="signupinfo"></p>
        </div>
        <div class="col-sm-9 text-center temp">
            <div class="innertemp" id="signupcon">
                <form id="signup" action="logsign.php" method="post" onsubmit="Register(event);">
                    <div class="parts">
                    <h4>E-mail:</h4>
                    <p>
                        <input type="email" placeholder="Email" id="email" name="email" required>
                    </p>
                    <h4>Password:</h4>
                    <p>
                        <input type="password" placeholder="Password" name="password" id="password1" required>
                    </p>
                        <h4>Verify Password:</h4>
                        <p>
                            <input type="password" placeholder="Verify Password" id="password2" required>
                        </p>
                        <h4>DOB:</h4>
                        <p>
                            <input type="date" placeholder="DOB" id="dob" required
                        </p>
                    </div>
                    <div class="parts">
                        <h4>First Name:</h4>
                        <p>
                            <input type="text" placeholder="First Name" id="fname" required>
                        </p>
                        <h4>Last Name:</h4>
                        <p>
                            <input type="text" placeholder="Last Name" id="lname" required>
                        </p>

                        <h4>Postal Code:</h4>
                        <p>
                            <input type="text" placeholder="Postal Code" id="pcode" required>
                        </p>
                        <h4>Postal Address:</h4>
                        <p>
                            <input type="text" placeholder="Postal Address" id="paddress" required>
                        </p>
                    </div>
                    <h4>Your Favorite Car (Security Question):</h4>
                    <p>
                        <input type="text" id="answer" required>
                    </p>
                    <p>
                        <input type="submit" name="signupbtn" class="btn btn-primary" value="Register">
                    </p>
                    <a href="login.php">Already Existing?</a>
                </form>
            </div>
        </div>
    </div>
    <?php include_once 'lastcheck.php'?>
</div>
<script src="js/driverjava.js"></script>
</body>
</html>