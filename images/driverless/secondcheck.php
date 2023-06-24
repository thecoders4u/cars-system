<?php

if(isset($_SESSION['loggedin'])){
    echo"<li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"account.php\">Account</a>
            </li>";
}
else{
    echo"<li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"signup.php\">Register</a>
            </li>";
}
?>