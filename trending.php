<?php
session_start();
//Redirect to Login page if not logged in
if(!isset($_SESSION['loggedin'])){
    header("Location: login.php?Login_first");
}
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
<div class="heading" id="head">
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
<div class="container-fluid text-center">
    <div class="row">
        <div id="news-heading" class="col-sm-12">
            <div class="spinner-grow spinner-grow"></div>
        </div>
        </div>
    <div class="row" id="news-content"></div>
    <?php include_once 'lastcheck.php'?>
</div>
<script src="js/driverjava.js"></script>
<script>
    //When page loads, get news using Media Stack API
    window.onload = function loadFeed(){
        var heading = document.getElementById("news-heading");
        var content = document.getElementById("news-content");
        //Create a script Object to Make Requests and Get Responses on Autonomous Vehicles
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'http://api.mediastack.com/v1/news?access_key=71e5429f41dbbc38a0ab2922999f4177&keywords=self-driving&limit=12&countries=us,gb', true);

        xhr.onload = function () {
            if(this.status == 200){
                //Handles response after successfully making a request
                heading.innerHTML = "<h1>More Stories</h1>";
                heading.style.padding = "2.5%";
                //Parsing Response to JSON Format
                var news = JSON.parse(this.responseText);
                var output = '';
                //Loop through response and display images and headings to user
                for(var i in news.data){
                    if(news.data[i].image !==""){
                        output +=
                            '<div class="col-sm-4 text-center navpadding">'+
                            '<div class="news">'+
                            '<img src="'+news.data[i].image+'" class="newsimage">'+
                            '<div class="newstext">'+
                            '<p><h2>'+news.data[i].title+'</h2></p>'+
                            '<p>'+news.data[i].description+'</p>'+
                            '<p><a href="'+news.data[i].url+'">Visit Source</a></p>'+
                            '</div>'+
                            '</div>'+
                            '</div>';
                    }
                }
                //Output results from Loop
                console.log(output);
                content.innerHTML = output;
            }
            else{
                //If request fails notify the user
                heading.innerHTML = "<h1>Failed to Access the NewsContent for Some reason, PLease Come back later</h1>";
                heading.style.padding = "7.5%";
                console.log("error2");
            }
        }
        //Initiate Request
        xhr.send();
    }
</script>
</body>
</html>