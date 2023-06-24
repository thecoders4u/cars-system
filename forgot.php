<?php
session_start();
include_once 'database.php';
if (isset($_POST['forgotbtn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $answer = mysqli_real_escape_string($conn, $_POST['answer']);
    //Check if email was used in registration of a user
    $query = "SELECT * FROM users WHERE email ='$email'";
    $result = $conn->query($query);
    if (!$result) {
        echo "Error Occurred";
        echo mysqli_error($conn);
        mysqli_close($conn);
    }
    elseif($result->num_rows > 0) {
        //Test the user if their username and test-answer are correct
          $secondquery = "SELECT * FROM users where email = '$email' AND (testanswer = '$answer' AND username = '$username')";
          $newresult = mysqli_query($conn, $secondquery);
          if(!$newresult){
              echo "Error Occurred";
              echo mysqli_error($conn);
              mysqli_close($conn);
          }
          elseif($newresult->num_rows > 0){
              $finalquery = "UPDATE users SET password = '$password' WHERE username ='$username'";
              $lastresult = mysqli_query($conn, $finalquery);
              if($lastresult){
                  echo "TRUE";
              }
              else{
                  echo "Error Occurred";
                  echo mysqli_error($conn);
                  mysqli_close($conn);
              }
          }
          else{
              echo "Wrong Answer or Wrong Username";
          }
        }
        else {
            echo "Your email is invalid or not registered here";
        }
        mysqli_close($conn);

}


