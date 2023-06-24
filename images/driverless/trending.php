<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" ondblclick="Cancel()">
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
      <h1>Top Stories</h1>
      <h3>Brought to you by our sources</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4 text-center navpadding">
      <div class="news">
        <img src="product7.jpg" class="newsimage">
        <div class="newstext"><h4>Audi's Grandsphere concept envisions autonomous vehicle as living room</h4>
          <p>The spacious Gransphere interior replaces the traditional huge blackened touch screen prevaslent in most such luxury vehicles</p>
          <img src="media.png" class="newsbtn" title="Share"><img src="media2.png" class="newsbtn" title="Visit">
        </div>
      </div>
    </div>
    <div class="col-sm-4 text-center navpadding">
      <div class="news">
        <img src="product1.jpg" class="newsimage">
        <div class="newstext"><h4>Hyundai loniq 5 to be used for Motional autonomous ride-hailing in 2023Motional autonomous ride-hailing in 2023</h4>
          <p>The Hyundai loniq 5 will be used in a commercial robotaxi service beginning in 2023, announced in a press Release</p>
          <img src="media.png" class="newsbtn" title="Share"><img src="media2.png" class="newsbtn" title="Visit">
        </div>
      </div>
    </div>
    <div class="col-sm-4 text-center navpadding">
      <div class="news">
        <img src="product4.jpg" class="newsimage">
        <div class="newstext"><h4>Self-driving vehicles to be trailed in the city</h4>
          <p>It is hoped the vehicles, which carry up to 10 people, will transform public transport</p>
          <img src="media.png" class="newsbtn" title="Share"><img src="media2.png" class="newsbtn" title="Visit">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4 text-center navpadding">
      <div class="news">
        <img src="product5.jpg" class="newsimage">
        <div class="newstext"><h4>Pininfarina Teorema Concept Is a Sleek Vision of an Autonomous Future</h4>
          <p>The Italian Design house showed off a long, low concept that previews a world of autonomous driving and electric powerstrains</p>
          <img src="media.png" class="newsbtn" title="Share"><img src="media2.png" class="newsbtn" title="Visit">
        </div>
      </div>
    </div>
    <div class="col-sm-4 text-center navpadding">
      <div class="news">
        <img src="product14.jpg" class="newsimage">
        <div class="newstext"><h4>Toyota Restarts driverless vehicles after accident</h4>
          <p>A Visually impaired athlete from Japan's Judo team was hit by one of the e-Palette pods on Thursday</p>
          <img src="media.png" class="newsbtn" title="Share"><img src="media2.png" class="newsbtn" title="Visit">
        </div>
      </div>
    </div>
    <div class="col-sm-4 text-center navpadding">
      <div class="news">
        <img src="product13.jpg" class="newsimage">
        <div class="newstext"><h4>Waymo self-driving taxi confused by traffic cones</h4>
          <p>The vehicle became stuck multiple times and repeatedly drove away when roadside assistance approached</p>
          <img src="media.png" class="newsbtn" title="Share"><img src="media2.png" class="newsbtn" title="Visit">
        </div>
      </div>
    </div>
  </div>
    <div class="row">
        <div class="col-sm-4 text-center navpadding">
            <div class="news">
                <img src="news1.jpg" class="newsimage">
                <div class="newstext"><h4>Pininfarina Teorema Concept Is a Sleek Vision of an Autonomous Future</h4>
                    <p>The Italian Design house showed off a long, low concept that previews a world of autonomous driving and electric powerstrains</p>
                    <img src="media.png" class="newsbtn" title="Share"><img src="media2.png" class="newsbtn" title="Visit">
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center navpadding">
            <div class="news">
                <img src="news2.jpg" class="newsimage">
                <div class="newstext"><h4>Toyota Restarts driverless vehicles after accident</h4>
                    <p>A Visually impaired athlete from Japan's Judo team was hit by one of the e-Palette pods on Thursday</p>
                    <img src="media.png" class="newsbtn" title="Share"><img src="media2.png" class="newsbtn" title="Visit">
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center navpadding">
            <div class="news">
                <img src="news3.jpg" class="newsimage">
                <div class="newstext"><h4>Waymo self-driving taxi confused by traffic cones</h4>
                    <p>The vehicle became stuck multiple times and repeatedly drove away when roadside assistance approached</p>
                    <img src="media.png" class="newsbtn" title="Share"><img src="media2.png" class="newsbtn" title="Visit">
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'lastcheck.php'?>
</div>
<script src="js/driverjava.js"></script>
</body>
</html>