<?php
include_once 'database.php';

if(isset($_POST['newsbtn'])){
    $email = mysqli_real_escape_string($conn, $_POST['subscriber']);
    $sql = "SELECT * FROM subscribed WHERE email = '$email'";
    $query = mysqli_query($conn, $sql);
    if(!$query){
        echo "Ooops! An Error Occured";
        mysqli_close($conn);
    }
    else{
        if(mysqli_num_rows($query) == 0){
            $sql2 = "INSERT INTO subscribed (email) VALUES ('$email')";
            $query2 = mysqli_query($conn, $sql2);
            if($query2){
                echo "SUCCESS";
            }
            else{
                echo "Ooops! An error Occured";
            }
            mysqli_close($conn);
        }
        elseif (mysqli_num_rows($query) > 0){
            echo "You already subscribed!";
            mysqli_close($conn);
        }
        else{
            echo "Error encountered";
            mysqli_close($conn);
        }
    }
}