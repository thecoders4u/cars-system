<?php
session_start();

$email = $_SESSION['email'];
$password = $_SESSION['password'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$dob = $_SESSION['dob'];
$pcode = $_SESSION['pcode'];
$paddress = $_SESSION['paddress'];
$answer = $_SESSION['answer'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Title</title>
  <link rel="stylesheet" href="css/drivercss.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
  <!--Script-->
  <script src="bootstrap/js/jquery-3.6.0.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="heading">
  <h1>Driverless</h1>
  <p>Into the Autonomous Age</p>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a>
      </li>
        <?php include_once 'secondcheck.php'?>
        <?php include_once 'thirdcheck.php'?>
        <?php include_once 'fourthcheck.php'?>
        <?php include_once 'firstcheck.php'?>
    </ul>
  </div>
</nav>
<div class="container-fluid">
  <div class="row" style="margin-bottom: 10%;">
    <div class="col-sm-3 text-center navpadding">
      <h1>Account Details</h1>
      <h3>View account details and make Updates to your account</h3>
        <div id="updateinfo"></div>
    </div>
    <div class="col-sm-9 text-center temp navpadding">
      <div class="innertemp" id="signupcon">
        <div class="parts">
          <h2>Change Your Password?</h2>
          <button class="btn btn-primary" onclick="secondAction()">View and Update Password</button>
        </div>
        <div class="parts">
          <h2>Update Further Details?</h2>
          <button class="btn btn-primary" onclick="firstAction()">View and Update Account Details</button>
        </div>
        <div class="hidden">
          <form class="updateforms" onsubmit="event.preventDefault();">
            <div class="parts">
              <h4>E-mail:</h4>
              <p>
                <input type="email" id="email" value="<?php echo $email;?>" required>
              </p>
              <h4>DOB:</h4>
              <p>
                <input type="date" id="dob" value="<?php echo $dob;?>" required>
              </p>
              <h4>Last Name:</h4>
              <p>
                <input type="text" id="lname" value="<?php echo $lname;?>" required>
              </p>
            </div>
            <div class="parts">
              <h4>First Name:</h4>
              <p>
                <input type="text" id="fname" value="<?php echo $fname;?>" required>
              </p>
              <h4>Postal Code:</h4>
              <p>
                <input type="text" id="pcode" value="<?php echo $pcode;?>" required>
              </p>
              <h4>Postal Address:</h4>
              <p>
                <input type="text" id="paddress" value="<?php echo $paddress;?>" required>
              </p>
            </div>
              <h4>Your Favorite Car (Test Question):</h4>
              <p>
                  <input type="text" id="answer" value="<?php echo $answer;?>" required>
              </p>
            <p>
              <input type="submit" name="mainupdate" class="btn btn-success changebutton" value="Update" onclick="updateAcc()">
              <input type="submit" name="signupbtn" class="btn btn-danger changebutton" value="Back" onclick="Back()">
            </p>
          </form>
        </div>
        <div class="hidden">
          <form class="updateforms" onsubmit="event.preventDefault();">
              <h4>Old Password:</h4>
              <p>
                  <input type="password" placeholder="Old Password" value="<?php echo $password;?>" required>
              </p>
            <h4>New Password:</h4>
            <p>
              <input type="password" placeholder="New Password" id="password1" required>
            </p>
            <h4>Verify Password:</h4>
            <p>
              <input type="password" placeholder="Verify Password" id="password2" required>
            </p>
            <p>
              <input type="submit" name="updatepass" class="btn btn-success changebutton" value="Change" onclick="updatePass()">
              <input type="submit" name="signupbtn" class="btn btn-danger changebutton" value="Back" onclick="Back()">
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
    <?php include_once 'lastcheck.php'?>
</div>
<script src="js/driverjava.js"></script>
</body>
</html>