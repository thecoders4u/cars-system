<?php
//Show contact us form if logged in
if (isset($_SESSION['loggedin'])) {
    echo ' <li class="nav-item">
                <a class="nav-link active" href="contact.php">Contact</a>
            </li>';
}
?>