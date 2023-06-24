<?php

if(isset($_SESSION['loggedin'])){
    echo ' <li class="nav-item">
                <a class="nav-link active" href="help.php">Help</a>
            </li>';
    echo' <li class="nav-item">
                <a class="nav-link active" href="#"><form action="logsign.php" method="post"><button name="logoutbtn" class="btn btn-primary">Logout</button></form></a>
            </li>';
}
else{
    echo' <li class="nav-item">
                <a class="nav-link active" href="login.php">Login</a>
            </li>';
    echo ' <li class="nav-item">
                <a class="nav-link active" href="help.php">Help</a>
            </li>';
    echo '<li class="nav-item">
                <a class="nav-link active" href="#"><form onsubmit="setupDB(event)"><button class="btn btn-primary">Setup</button></form></a>
            </li>';
}
?>
