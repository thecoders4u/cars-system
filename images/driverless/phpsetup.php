<?php
$server = "localhost";
$user ="root";
$pass ="";

$conn = mysqli_connect($server, $user, $pass);
$primequery = "DROP DATABASE IF EXISTS driverless2";
$primeresult = mysqli_query($conn, $primequery);
$query1 = "CREATE DATABASE driverless2";
$result1 = mysqli_query($conn, $query1);
if($result1){
    mysqli_select_db($conn, "driverless2");
    $query = "CREATE TABLE users(email varchar(50) not null,
password varchar(50) not null, firstname varchar(50) not null, lastname varchar(50), dob date not null, postalcode varchar(100) not null,
postaladdress varchar(100) not null, testanswer varchar(100) not null, primary key(email))";
    $doquery = mysqli_query($conn, $query);
    if($doquery){
        $query = "CREATE TABLE questions(email varchar(50) not null, subject varchar(50) not null, questionname varchar(100) not null, primary key(questionname))";
        $doquery = mysqli_query($conn, $query);
        $query = "CREATE TABLE subscribed(email varchar(50) not null, primary key(email))";
        $doquery = mysqli_query($conn, $query);
        $query = "CREATE TABLE searchinfo(imageid int(2) not null AUTO_INCREMENT, imageinfo varchar(1000) not null, image varchar(100) not null, primary key(imageid))";
        $doquery = mysqli_query($conn, $query);
        $query = "INSERT INTO searchinfo(imageinfo, image) values('Tesla Model Truck is the new plan for the Electric and Self-Driving Vehicle Manufacturers', 'images/product12.jpg');";
        $query.= "INSERT INTO searchinfo(imageinfo, image) values('Audis Grandsphere concept envisions autonomous vehicles to do more', 'images/product7.jpg');";
        $query.= "INSERT INTO searchinfo(imageinfo, image) values('A newly launched self driving Roadster added to the market', 'images/product2.jpg');";
        $query.= "INSERT INTO searchinfo(imageinfo, image) values('Hyundai Loniq 5 to be used for Motional autonomous ride-hailing in 2023 ', 'images/product1.jpg');";
        $query.= "INSERT INTO searchinfo(imageinfo, image) values('Self-Driving vehicles trailed in the city to transform public transport', 'images/product4.jpg');";
        $query.= "INSERT INTO searchinfo(imageinfo, image) values('Pinanfarina Teorema Concept is A Sleek Vision of an Autonomous Future', 'images/product5.jpg');";
        $query.= "INSERT INTO searchinfo(imageinfo, image) values('The Upcoming Tesla Cyber Truck!', 'images/news3.jpg');";
        $query.= "INSERT INTO searchinfo(imageinfo, image) values('How does the inside look like?', 'images/inner.jpg')";
        $doquery = mysqli_multi_query($conn, $query);
        echo "SUCCESS";
        echo'<script>setTimeout(function(){
    window.location.assign("index.php");
}, 1000);</script>';
    }
    else{
        echo "Error " . mysqli_error($conn);
        echo'<script>setTimeout(function(){
    window.location.assign("index.php");
}, 1000);</script>';
    }
}
else{
    echo "Error " . mysqli_error($conn);
    echo'<script>setTimeout(function(){
    window.location.assign("index.php");
}, 1000);</script>';
}

