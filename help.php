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
        <div class="col-sm-12 text-center navpadding">
            <h1>Need Help?</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 text-center navpadding">
            <h3>Viewing Products:</h3>
            <p>Products can be viewed on the homepage, products can be viewed depending on category, full screen mode is triggered on clicking the eye icon, to exit press the esc or swipe back(mobile)</p>
        </div>
        <div class="col-sm-4 text-center navpadding">
            <h3>Login & Register:</h3>
            <p>If you want to register for an account, go to the register page and fill every field, your password will have to be strong and powerful, on Login a Maximum attempts permitted are 3, if incorrect credentials are submitted, you will wait for 10 minutes to try again</p>
        </div>
        <div class="col-sm-4 text-center navpadding">
            <h3>Searching & Newsfeed:</h3>
            <p>Searching is done on the Homepage and also only when you Login into the Website, Newsfeed will be visible if you login in and only if there's also Internet Connectivity</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 text-center navpadding">
            <h3>Subscribe:</h3>
            <p>To subscribe, simply in put your email in text box below, and you will recieve daily newsletter on your email. Notice, you cannot subscribe twice!</p>
        </div>
        <div class="col-sm-4 text-center navpadding">
            <h3>Account:</h3>
            <p>Your account details be dynamically updated by changing the primary detials such as name or age, in addition you change your account password as well, all this happens in the account section on login</p>
        </div>
        <div class="col-sm-4 text-center navpadding">
            <h3>Contact:</h3>
            <p>For any question that hasnt been asked Already, you may freely ask concerning our products and your question will be reviewed, A question that has been already asked will not be answered</p>
        </div>
    </div>
        <?php include_once 'lastcheck.php'?>
</div>
<script src="js/driverjava.js"></script>
</body>
</html>