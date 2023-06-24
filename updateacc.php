<?php
session_start();
include_once 'database.php';
//Temporarily store the current user
$olduser = $_SESSION['username'];
if(isset($_POST['mainupdate'])){

 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $username = mysqli_real_escape_string($conn, $_POST['username']);
 $dob = mysqli_real_escape_string($conn, $_POST['dob']);
 $fname = mysqli_real_escape_string($conn, $_POST['fname']);
 $lname = mysqli_real_escape_string($conn, $_POST['lname']);
 $pcode = mysqli_real_escape_string($conn, $_POST['pcode']);
 $paddress = mysqli_real_escape_string($conn, $_POST['paddress']);
 $answer = mysqli_real_escape_string($conn, $_POST['answer']);
 //Check if username is taken
 $select = "SELECT * FROM users WHERE username ='$username'";
 $selectquery = mysqli_query($conn, $select);
 if(!$selectquery){
     echo "Sorry, we could't make an update: " . mysqli_error($conn);
 }
 else{
     if(mysqli_num_rows($selectquery) > 0){
         if($username === $olduser){
             //Username can be overridden if its the same user and update can be performed
             $sql1 = "UPDATE users SET username = '$username', email = '$email', dob = '$dob', firstname = '$fname', lastname = '$lname', postalcode = '$pcode', postaladdress = '$paddress', testanswer = '$answer' WHERE username = '$olduser'";
             $query1 = mysqli_query($conn, $sql1);
             if(!$query1){
                 echo "Sorry, we could't make an update: " . mysqli_error($conn);
             }
             else{
                 $select = "SELECT * FROM users WHERE username ='$username'";
                 $selectquery = mysqli_query($conn, $select);
                 if(!$selectquery){
                     echo "Sorry, we could't make an update: " . mysqli_error($conn);
                 }
                 else{
                     if($row = mysqli_fetch_assoc($selectquery)){

                         $_SESSION['email'] = $row['email'];
                         $_SESSION['username'] = $row['username'];
                         $_SESSION['fname'] = $row['firstname'];
                         $_SESSION['lname'] = $row['lastname'];
                         $_SESSION['dob'] = $row['dob'];
                         $_SESSION['pcode'] = $row['postalcode'];
                         $_SESSION['paddress'] = $row['postaladdress'];
                         $_SESSION['answer'] = $row['testanswer'];

                         echo "SUCCESS";
                     }
                 }
             }
         }
         else{
             //Username has been taken by someone
             echo "Username has been taken";
         }
     }
     else{
         //Perform update
         $sql1 = "UPDATE users SET username = '$username', email = '$email', dob = '$dob', firstname = '$fname', lastname = '$lname', postalcode = '$pcode', postaladdress = '$paddress', testanswer = '$answer' WHERE username = '$olduser'";
         $query1 = mysqli_query($conn, $sql1);
         if(!$query1){
             echo "Sorry, we could't make an update: " . mysqli_error($conn);
         }
         else{
             $select = "SELECT * FROM users WHERE username ='$username'";
             $selectquery = mysqli_query($conn, $select);
             if(!$selectquery){
                 echo "Sorry, we could't make an update: " . mysqli_error($conn);
             }
             else{
                     if($row = mysqli_fetch_assoc($selectquery)){
                        //Update Sessions to be used globally
                         $_SESSION['email'] = $row['email'];
                         $_SESSION['username'] = $row['username'];
                         $_SESSION['fname'] = $row['firstname'];
                         $_SESSION['lname'] = $row['lastname'];
                         $_SESSION['dob'] = $row['dob'];
                         $_SESSION['pcode'] = $row['postalcode'];
                         $_SESSION['paddress'] = $row['postaladdress'];
                         $_SESSION['answer'] = $row['testanswer'];
                         echo "SUCCESS";
                     }
             }
         }
     }
 }
 mysqli_close($conn);
}
if(isset($_POST['updatepass'])){
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
     $sq12 = "UPDATE users SET password = '$pass' WHERE username = '$olduser'";
     $query2 = mysqli_query($conn, $sq12);
     if(!$query2){
         echo "Sorry, we could't make an update: " . mysqli_error($conn);
     }
     else{
         $select = "SELECT * FROM users WHERE username = '$olduser'";
         $selectquery = mysqli_query($conn, $select);
         if(!$selectquery){
             echo "Sorry, we could't make an update: " . mysqli_error($conn);
         }
         else{
             if(mysqli_num_rows($selectquery) > 0){
                 if($row = mysqli_fetch_assoc($selectquery)){
                     //Update Session to be used globally
                     $_SESSION['password'] = $row['password'];
                     echo "SUCCESS";
                 }
             }
             else{
                 echo "Sorry, we could't make an update: " . mysqli_error($conn);
             }
         }
     }
     mysqli_close($conn);
}