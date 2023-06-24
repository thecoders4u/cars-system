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
<div class="fakeload" id="fake">
    <div class="spincontainer">
        <div class="spinner-grow"></div>
    </div>
</div>
<div class="heading">
    <h1>Driverless</h1>
    <p>Into the Autonomous Age</p>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">
        <form class="searchbox" id="searchform" onsubmit="megaSearch(event)"><input id="primeval" type="text" name="text" placeholder="Search..." required><button id="searchb" class="btn btn-primary"><img src="send.png"></button>
        </form>
        <div id="resultee" class="result" style="background-color: white; color: black;"></div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
            </li>
            <?php include_once 'secondcheck.php'?>
            <?php include_once 'thirdcheck.php'?>
            <?php include_once 'fourthcheck.php'?>
            <?php include_once 'firstcheck.php'?>
        </ul>
    </div>
</nav>
<div class="container-fluid" id="search-row" style="background-color: black">
<div class="row">
    <div class="col-sm-6 text-center">
        <div id="main">
            <div id="maintext">
        </div>
    </div>
    </div>
        <div class="col-sm-6">
            <div id="imagecon"></div>
        </div>
    </div>
</div>
<div class="slideshow">
    <div class="slide transition" id="first">
        <img class="showimg" src="official1.jpg" alt="no image">
        <div class="slidetext">
            <h1>This is all about Autonomous Vehicles</h1>
            <div class="slidenumber">1 / 3</div>
        </div>
    </div>
    <div class="slide transition">
        <img class="showimg" src="official2.jpg" alt="no image">
        <div class="slidetext">
            <h1>This is all about Autonomous Vehicles</h1>
            <div class="slidenumber">2 / 3</div>
        </div>
    </div>
    <div class="slide transition">
        <img class="showimg" src="official3.jpg" alt="no image">
        <div class="slidetext">
            <h1>This is all about Autonomous Vehicles</h1>
            <div class="slidenumber">3 / 3</div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 text-center navpadding">
         <h1>What are Autonomous Vehicles?</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 navpadding temp ">
        <img id="banner1" src="auto.gif" alt="noimage" class="innertemp2">
        </div>
        <div class="col-sm-6 text-center navpadding">
            <p>An autonomous car is a vehicle capable of sensing its environment and operating without human involvement.
                A human passenger is not required to take control of the vehicle at any time, nor is a human passenger required to be present in the vehicle at all.</p>
            <p>An autonomous car can go anywhere a traditional car goes and do everything that an experienced human driver does,
                these cars rely on sensors, actuators, complex algorithms, machine learning systems, and powerful processors to execute software.</p>
        </div>
        <div class="col-sm-3 navpadding temp">
        <img id="banner2" src="final.gif" alt="noimage" class="innertemp2">
        </div>
    </div>
    <div class="row">
    <div class="col-sm-12 text-center navpadding">
     <h1>They are powered By AI:</h1>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-4 text-paddding text-center">
        <p>Deep learning, which mimics neuron activity, supports functions like voice and speech recognition, voice search, image recognition and processing, motion detection, and data analysis</p>
    </div>
    <div class="col-sm-4 text-paddding text-center">
        <p>SurfelGAN makes use of what’s called a texture-enhanced surfel map representation, a compact, easy-to-construct scene representation that preserves sensor information while retaining reasonable computational efficiency</p>
    </div>
    <div class="col-sm-4 text-paddding text-center">
        <p>Sensors such as LIDAR and GPS have allowed manufacturers to enhance self-driving potential in cars to monitor the external environment. Machine Learning also allows the cars to navigate complex and delicate situations such as operating through construction zones, relenting for emergency vehicles, and offering room to cars for parallel parking.</p>
    </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center navpadding">
            <h1>Current Products: </h1><select class="form-control" id="sel1" name="users" onchange="productToggle(this.value)">
                <option value="Ready">Ready</option>
                <option value="Upcoming">Upcoming</option>
                <option value="Thinking">In Mind</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 navpadding">
            <div class="animatecon1">
        <img src="official2.jpg" class="products">
            <div class="animate">
                <img title="Full screen" src="icon1.png" class="animatebtn" onclick="openFullscreen(this.parentElement.previousElementSibling)">
                <img title="Share" src="icon2.png" class="animatebtn2">
            </div>
            </div>
            <div class="info1">
                <h3>Telsa</h3>
                <p>A Basic Autonomous that is ready for Cosumers to Use</p>
                <p id="promo"></p>
            </div>
            <div class="animatecon2">
                <img src="news3.jpg" class="products">
                <div class="animate">
                    <img title="Full screen" src="icon1.png" class="animatebtn" onclick="openFullscreen(this.parentElement.previousElementSibling)">
                    <img title="Share" src="icon2.png" class="animatebtn2">
                </div>
            </div>
            <div class="info2">
                <h3>Telsa</h3>
                <p>A Basic Autonomous that is ready for Cosumers to Use</p>
                <p>No promotion available</p>
            </div>
            <div class="animatecon3">
                <img src="product3.jpg" class="products">
                <div class="animate">
                    <img title="Full screen" src="icon1.png" class="animatebtn" onclick="openFullscreen(this.parentElement.previousElementSibling)">
                    <img title="Share" src="icon2.png" class="animatebtn2">
                </div>
            </div>
            <div class="info3">
                <h3>Telsa</h3>
                <p>A Basic Autonomous that is ready for Cosumers to Use</p>
                <p>No promotion available</p>
            </div>
        </div>
        <div class="col-sm-4 navpadding">
            <div class="animatecon1">
            <img src="product2.jpg" class="products">
            <div class="animate">
                <img title="Full screen" src="icon1.png" class="animatebtn" onclick="openFullscreen(this.parentElement.previousElementSibling)">
                <img title="Share" src="icon2.png" class="animatebtn2">
            </div>
            </div>
            <div class="info1">
                <h3>Telsa</h3>
                <p>A Basic Autonomous that is ready for Cosumers to Use</p>
                <p id="promo2"></p>
            </div>
            <div class="animatecon2">
                <img src="product5.jpg" class="products">
                <div class="animate">
                    <img title="Full screen" src="icon1.png" class="animatebtn" onclick="openFullscreen(this.parentElement.previousElementSibling)">
                    <img title="Share" src="icon2.png" class="animatebtn2">
                </div>
            </div>
            <div class="info2">
                <h3>Telsa</h3>
                <p>A Basic Autonomous that is ready for Cosumers to Use</p>
                <p>No promotion available</p>
            </div>
            <div class="animatecon3">
                <img src="product12.jpg" class="products">
                <div class="animate">
                    <img title="Full screen" src="icon1.png" class="animatebtn" onclick="openFullscreen(this.parentElement.previousElementSibling)">
                    <img title="Share" src="icon2.png" class="animatebtn2">
                </div>
            </div>
            <div class="info3">
                <h3>Telsa</h3>
                <p>A Basic Autonomous that is ready for Cosumers to Use</p>
                <p>No promotion available</p>
            </div>
        </div>
        <div class="col-sm-4 navpadding">
            <div class="animatecon1">
            <img src="product10.jpg" class="products">
            <div class="animate">
                <img title="Full screen" src="icon1.png" class="animatebtn" onclick="openFullscreen(this.parentElement.previousElementSibling)">
                <img title="Share" src="icon2.png" class="animatebtn2">
            </div>
        </div>
            <div class="info1">
                <h3>Waymo</h3>
                <p>A Basic Autonomous that is ready for Cosumers to Use</p>
                <p>No promotion yet</p>
            </div>
            <div class="animatecon2">
                <img src="product7.jpg" class="products">
                <div class="animate">
                    <img title="Full screen" src="icon1.png" class="animatebtn" onclick="openFullscreen(this.parentElement.previousElementSibling)">
                    <img title="Share" src="icon2.png" class="animatebtn2">
                </div>
            </div>
            <div class="info2">
                <h3>Telsa</h3>
                <p>A Basic Autonomous that is ready for Cosumers to Use</p>
                <p>No promotion available</p>
            </div>
            <div class="animatecon3">
                <img src="news1.jpg" class="products">
                <div class="animate">
                    <img title="Full screen" src="icon1.png" class="animatebtn" onclick="openFullscreen(this.parentElement.previousElementSibling)">
                    <img title="Share" src="icon2.png" class="animatebtn2">
                </div>
            </div>
            <div class="info3">
                <h3>Telsa</h3>
                <p>A Basic Autonomous that is ready for Cosumers to Use</p>
                <p>No promotion available</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center navpadding">
        <h1>Our Latest News</h1>
            <h3>Brought to you by our sources</h3>
        </div>
    </div>
<div class="row">
    <div class="col-sm-4 text-center navpadding">
     <div class="news">
         <img src="product7.jpg" class="newsimage">
         <div class="toggle2 newstext"><h4>Audi's Grandsphere concept envisions autonomous vehicle as living room</h4>
         <p>The spacious Gransphere interior replaces the traditional huge blackened touch screen prevaslent in most such luxury vehicles</p>
             <img src="media.png" class="newsbtn" title="Share"><img src="media2.png" class="newsbtn" title="Visit">
         </div>
     </div>
    </div>
    <div class="col-sm-4 text-center navpadding">
        <div class="news">
            <img src="product1.jpg" class="newsimage">
            <div class="toggle2 newstext"><h4>Hyundai loniq 5 to be used for Motional autonomous ride-hailing in 2023</h4>
                <p>The Hyundai loniq 5 will be used in a commercial robotaxi service beginning in 2023, announced in a press Release</p>
                <img src="media.png" class="newsbtn" title="Share"><img src="media2.png" class="newsbtn" title="Visit">
            </div>
        </div>
    </div>
    <div class="col-sm-4 text-center navpadding">
        <div class="news">
            <img src="product4.jpg" class="newsimage">
            <div class="toggle2 newstext"><h4>Self-driving vehicles to be trailed in the city</h4>
                <p>It is hoped the vehicles, which carry up to 10 people, will transform public transport</p>
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