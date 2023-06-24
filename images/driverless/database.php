<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "driverless";
$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn){
    echo '<script>window.alert("Sorry,the Connection to the Database could not be established");</script>';
    echo '<script>window.alert("Make sure the Setup in the Navbar has been clicked");</script>';
    echo mysqli_error($conn);
}
