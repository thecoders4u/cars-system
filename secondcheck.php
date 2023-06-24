<?php
//Toggle between showing register or profile
if(isset($_SESSION['loggedin'])){
    echo"<li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"account.php\">Profile</a>
            </li>";
}
else{
    echo"<li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"signup.php\">Register</a>
            </li>";
}
?>