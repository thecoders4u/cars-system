<?php
session_start();
include_once 'database.php';
if (isset($_POST['forgotbtn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $answer = mysqli_real_escape_string($conn, $_POST['answer']);
    $query = "SELECT * FROM users WHERE email ='$email'";
    $result = $conn->query($query);
    if (!$result) {
        echo "Error Occurred";
        echo mysqli_error($conn);
        mysqli_close($conn);
    }
    elseif($result->num_rows > 0) {
          $secondquery = "SELECT * FROM users where email = '$email' AND testanswer = '$answer'";
          $newresult = mysqli_query($conn, $secondquery);
          if(!$newresult){
              echo "Error Occurred";
              echo mysqli_error($conn);
              mysqli_close($conn);
          }
          elseif($newresult->num_rows > 0){
              $finalquery = "UPDATE users SET password = '$password' WHERE email ='$email'";
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
              echo "Wrong Answer";
          }
        }
        else {
            echo "Your email is invalid or not registered here";
        }
        mysqli_close($conn);

}


