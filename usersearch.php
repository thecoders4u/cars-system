<?php

session_start();
include_once 'database.php';
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    If(!empty($username)){
        //Actively check user if exits
        $find = "SELECT * FROM users WHERE username = '$username'";
        $findquery = mysqli_query($conn, $find);

        if (mysqli_num_rows($findquery) > 0) {
            echo "FALSE";
        }
        else {
            echo "Username has not been used";
        }
    }
mysqli_close($conn);