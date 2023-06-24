<?php

if (isset($_SESSION['loggedin'])) {
    echo ' <li class="nav-item">
                <a class="nav-link active" href="contact.php">Contact</a>
            </li>';
}
?>