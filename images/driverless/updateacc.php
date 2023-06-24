<?php
session_start();
include_once 'database.php';

$oldemail = $_SESSION['email'];
if(isset($_POST['mainupdate'])){

 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $dob = mysqli_real_escape_string($conn, $_POST['dob']);
 $fname = mysqli_real_escape_string($conn, $_POST['fname']);
 $lname = mysqli_real_escape_string($conn, $_POST['lname']);
 $pcode = mysqli_real_escape_string($conn, $_POST['pcode']);
 $paddress = mysqli_real_escape_string($conn, $_POST['paddress']);
 $answer = mysqli_real_escape_string($conn, $_POST['answer']);

 $sql1 = "UPDATE users SET email = '$email', dob = '$dob', firstname = '$fname', lastname = '$lname', postalcode = '$pcode', postaladdress = '$paddress', testanswer = '$answer' WHERE email = '$oldemail'";
 $query1 = mysqli_query($conn, $sql1);
 if(!$query1){
     echo "Sorry, we could't make an update: " . mysqli_error($conn);
 }
 else{
     $select = "SELECT * FROM users WHERE email = '$email'";
     $selectquery = mysqli_query($conn, $select);
     if(!$selectquery){
         echo "Sorry, we could't make an update: " . mysqli_error($conn);
     }
     else{
         if(mysqli_num_rows($selectquery) > 0){
             if($row = mysqli_fetch_assoc($selectquery)){

                 $_SESSION['email'] = $row['email'];
                 $_SESSION['fname'] = $row['firstname'];
                 $_SESSION['lname'] = $row['lastname'];
                 $_SESSION['dob'] = $row['dob'];
                 $_SESSION['pcode'] = $row['postalcode'];
                 $_SESSION['paddress'] = $row['postaladdress'];
                 $_SESSION['answer'] = $row['testanswer'];
                 mysqli_close($conn);

                 echo "SUCCESS";
             }

         }
         else{
             echo "Sorry, we could't make an update: " . mysqli_error($conn);
         }
     }
 }
}
if(isset($_POST['updatepass'])){
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
     $sq12 = "UPDATE users SET password = '$pass' WHERE email = '$oldemail'";
     $query2 = mysqli_query($conn, $sq12);
     if(!$query2){
         echo "Sorry, we could't make an update: " . mysqli_error($conn);
     }
     else{
         $select = "SELECT * FROM users WHERE email = '$oldemail'";
         $selectquery = mysqli_query($conn, $select);
         if(!$selectquery){
             echo "Sorry, we could't make an update: " . mysqli_error($conn);
         }
         else{
             if(mysqli_num_rows($selectquery) > 0){
                 if($row = mysqli_fetch_assoc($selectquery)){
                     $_SESSION['password'] = $row['password'];
                     mysqli_close($conn);
                     echo "SUCCESS";
                 }
             }
             else{
                 echo "Sorry, we could't make an update: " . mysqli_error($conn);
             }
         }
     }
}