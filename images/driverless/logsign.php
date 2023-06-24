<?php
session_start();
$now = time();

include_once 'database.php';

if(!isset($_SESSION['timelock'])){
    if(isset($_POST['loginbtn'])){
        $email =  mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

            $sql1 = "SELECT * FROM users WHERE email ='$email' AND password ='$password'";
            $result1 = mysqli_query($conn, $sql1);
            if(!$result1){
                echo "Error".mysqli_error($conn);
            }
            else {
                if (mysqli_num_rows($result1) > 0) {
                    if ($row = mysqli_fetch_assoc($result1)) {
                            $_SESSION['loggedin'] = "set";
                            $_SESSION['email'] = $row['email'];
                            $_SESSION['password'] = $row['password'];
                            $_SESSION['fname'] = $row['firstname'];
                            $_SESSION['lname'] = $row['lastname'];
                            $_SESSION['dob'] = $row['dob'];
                            $_SESSION['pcode'] = $row['postalcode'];
                            $_SESSION['paddress'] = $row['postaladdress'];
                            $_SESSION['answer'] = $row['testanswer'];
                            mysqli_close($conn);
                           echo "TRUE";
                    }
                } elseif (mysqli_num_rows($result1) == 0) {
                    if (isset($_SESSION['attempts'])){
                        $_SESSION['attempts']--;
                        echo "You have " . $_SESSION['attempts'] . " attempts left, Incorrect Username or Password Entered";

                        if ($_SESSION['attempts'] == 0) {
                            $_SESSION['timelock'] = time() + (1 * 60 * 10);
                            $_SESSION['difference'] = $_SESSION['timelock']-$now;

                        }
                    }
                    else {
                        $_SESSION['attempts'] = 2;
                        echo "You have " . $_SESSION['attempts'] . " attempts left, Incorrect Username or Password Entered";
                    }
                }
            }
    }
    elseif(isset($_POST['signupbtn'])) {

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $first = mysqli_real_escape_string($conn, $_POST['fname']);
        $last = mysqli_real_escape_string($conn, $_POST['lname']);
        $dob = mysqli_real_escape_string($conn, $_POST['dob']);
        $postcode = mysqli_real_escape_string($conn, $_POST['pcode']);
        $address = mysqli_real_escape_string($conn, $_POST['paddress']);
        $answer = mysqli_real_escape_string($conn, $_POST['answer']);


            $queryout = "SELECT * FROM users WHERE email = '$email'";
            $resultout = mysqli_query($conn, $queryout);

            $num = mysqli_num_rows($resultout);
            if ($num > 0) {
                echo "That username already exists, Choose another username";
                mysqli_close($conn);
            } else {
                $query = "INSERT INTO users(email, password, firstname, lastname, dob, postalcode, postaladdress, testanswer) values('$email', '$password', '$first', '$last',' $dob', '$postcode', '$address', '$answer')";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    echo "SUCCESS";
                    mysqli_close($conn);
                } else {
                    echo "Sorry, we couldn't register you" . mysqli_error($conn);
                }
            }
    }
    elseif(isset($_POST['logoutbtn'])){
        session_unset();
        session_destroy();
        header("Location: index.php?=Welcome");
    }
}


if(isset($_SESSION['timelock'])){
    if($now>$_SESSION['timelock']){
        session_unset();
        session_destroy();
    }
    else{
        echo " Please wait for 15 minutes to Login Again or to Register";
    }
}


