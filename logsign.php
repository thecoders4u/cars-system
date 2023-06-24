<?php
session_start();
$now = time();

include_once 'database.php';

if($conn){
    //If the the user is not locked
    if(!isset($_SESSION['timelock'])){
        if(isset($_POST['loginbtn'])){
            $username =  mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $sql1 = "SELECT * FROM users WHERE username ='$username' AND password ='$password'";
            $result1 = mysqli_query($conn, $sql1);
            if(!$result1){
                echo "Error".mysqli_error($conn);
            }
            else {
                //If user is valid
                if (mysqli_num_rows($result1) > 0) {
                    if ($row = mysqli_fetch_assoc($result1)) {
                        $_SESSION['loggedin'] = "set";
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['username'] = $row['username'];
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
                } //if user is not valid
                elseif (mysqli_num_rows($result1) == 0) {
                    if (isset($_SESSION['attempts'])){
                        $_SESSION['attempts']--;
                        echo "You have " . $_SESSION['attempts'] . " attempts left, Incorrect Username or Password Entered";

                        if ($_SESSION['attempts'] == 0) {
                            $_SESSION['timelock'] = time() + (1 * 60 * 10);//Lock for 10 minutes
                            $_SESSION['difference'] = $_SESSION['timelock']-$now;

                        }
                    }
                    else {
                        //give the user the attempts
                        $_SESSION['attempts'] = 2;
                        echo "You have " . $_SESSION['attempts'] . " attempts left, Incorrect Username or Password Entered";
                    }
                }
            }
        }
        elseif(isset($_POST['signupbtn'])) {

            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $first = mysqli_real_escape_string($conn, $_POST['fname']);
            $last = mysqli_real_escape_string($conn, $_POST['lname']);
            $dob = mysqli_real_escape_string($conn, $_POST['dob']);
            $postcode = mysqli_real_escape_string($conn, $_POST['pcode']);
            $address = mysqli_real_escape_string($conn, $_POST['paddress']);
            $answer = mysqli_real_escape_string($conn, $_POST['answer']);

           //Check if user user exists
            $queryout = "SELECT * FROM users WHERE username = '$username'";
            $resultout = mysqli_query($conn, $queryout);

            $num = mysqli_num_rows($resultout);
            if ($num > 0) {
                echo "That username already exists, Choose another username";
                mysqli_close($conn);
            } else {
                //create an account
                $query = "INSERT INTO users(username, email, password, firstname, lastname, dob, postalcode, postaladdress, testanswer) values('$username', '$email', '$password', '$first', '$last',' $dob', '$postcode', '$address', '$answer')";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    echo "SUCCESS";
                    mysqli_close($conn);
                } else {
                    echo "Sorry, we couldn't register you" . mysqli_error($conn);
                }
            }
        }
        //Logout the user
        elseif(isset($_POST['logoutbtn'])){
            session_unset();
            session_destroy();
            header("Location: index.php?=Welcome");
        }
    }

    //if the user is locked
    if(isset($_SESSION['timelock'])){
        if($now>$_SESSION['timelock']){
            session_unset();
            session_destroy();
        }
        else{
            echo " Please wait for 10 minutes to Login Again or to Register";
        }
    }
}



