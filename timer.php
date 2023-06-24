<?php
session_start();
//Actively check time lock value
if (isset($_SESSION['timelock'])) {
    if ($_SESSION['difference'] == 0) {
        session_unset();
        session_destroy();
        echo "TRUE";
    } else {
        echo "You have: " . $_SESSION['difference']-- . " seconds to wait";
    }
}
