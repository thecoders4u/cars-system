<?php
$server = "localhost";
$user ="root";
$pass ="";

$conn = mysqli_connect($server, $user, $pass);
$primequery = "SHOW DATABASES LIKE '%driverless%'";
$primeresult = mysqli_query($conn, $primequery);
if(!$primeresult){
    echo "An error" . mysqli_error($conn) . "occured";
}
else{
    if(mysqli_num_rows($primeresult) > 0){
        echo "Database Already Exits";
    }
    else{
        $query1 = "CREATE DATABASE driverless";
        $result1 = mysqli_query($conn, $query1);
        if($result1){
            mysqli_select_db($conn, "driverless");
            $query = "CREATE TABLE users(username varchar(50) not null, email varchar(50) not null,
password varchar(50) not null, firstname varchar(50) not null, lastname varchar(50), dob date not null, postalcode varchar(100) not null,
postaladdress varchar(100) not null, testanswer varchar(100) not null, primary key(username))";
            $doquery = mysqli_query($conn, $query);
            if($doquery){
                $query = "CREATE TABLE questions(questionname varchar(100) not null, email varchar(50) not null, subject varchar(100) not null, primary key(questionname))";
                $doquery = mysqli_query($conn, $query);
                $query = "CREATE TABLE subscribed(email varchar(50) not null, primary key(email))";
                $doquery = mysqli_query($conn, $query);
                $query = "CREATE TABLE searchinfo(imageid int(2) not null AUTO_INCREMENT, imageinfo varchar(1000) not null, image varchar(100) not null, primary key(imageid))";
                $doquery = mysqli_query($conn, $query);

                $query = "INSERT INTO searchinfo(imageinfo, image) values('Tesla Model Truck is the new plan for the Electric and Self-Driving Vehicle Manufacturers', 'images/product12.jpg')";
                $doquery = mysqli_query($conn, $query);
                $query = "INSERT INTO searchinfo(imageinfo, image) values('Audis Grandsphere concept envisions autonomous vehicles to do more', 'images/product7.jpg')";
                $doquery = mysqli_query($conn, $query);
                $query = "INSERT INTO searchinfo(imageinfo, image) values('A newly launched self driving Roadster added to the market', 'images/product2.jpg')";
                $doquery = mysqli_query($conn, $query);
                $query = "INSERT INTO searchinfo(imageinfo, image) values('Hyundai Loniq 5 to be used for Motional autonomous ride-hailing in 2023 ', 'images/product1.jpg')";
                $doquery = mysqli_query($conn, $query);
                $query = "INSERT INTO searchinfo(imageinfo, image) values('Self-Driving vehicles trailed in the city to transform public transport', 'images/product4.jpg')";
                $doquery = mysqli_query($conn, $query);
                $query = "INSERT INTO searchinfo(imageinfo, image) values('Pinanfarina Teorema Concept is A Sleek Vision of an Autonomous Future', 'images/product5.jpg')";
                $doquery = mysqli_query($conn, $query);
                $query = "INSERT INTO searchinfo(imageinfo, image) values('The Upcoming Tesla Cyber Truck!', 'images/news3.jpg')";
                $doquery = mysqli_query($conn, $query);
                $query = "INSERT INTO searchinfo(imageinfo, image) values('How does the inside look like?', 'images/inner.jpg')";
                $doquery = mysqli_query($conn, $query);

                $query = "INSERT INTO questions(questionname, email, subject) values('Are these cars secure?', 'admin@gmail.com', 'Admin')";
                $doquery = mysqli_query($conn, $query);
                $query = "INSERT INTO questions(questionname, email, subject) values('Can these vehicles be completely trusted?', 'admin@gmail.com', 'Admin')";
                $doquery = mysqli_query($conn, $query);
                $query = "INSERT INTO questions(questionname, email, subject) values('What kind of accidents have occured?', 'admin@gmail.com', 'Admin')";
                $doquery = mysqli_query($conn, $query);
                $query = "INSERT INTO questions(questionname, email, subject) values('How much fuel do these vehicles consume?', 'admin@gmail.com', 'Admin')";
                $doquery = mysqli_query($conn, $query);
                $query = "INSERT INTO questions(questionname, email, subject) values('Are they expensive?', 'admin@gmail.com', 'Admin')";
                $doquery = mysqli_query($conn, $query);
                $query = "INSERT INTO questions(questionname, email, subject) values('What is the point of all this?', 'admin@gmail.com', 'Admin')";
                $doquery  = mysqli_multi_query($conn, $query);
                if($doquery){
                    echo "Database has been set up";
                }
                else{
                    echo mysqli_error($conn);
                }
            }
            else{
                echo "Error " . mysqli_error($conn);
            }
        }
        else{
            echo "Error " . mysqli_error($conn);
        }
    }
}


