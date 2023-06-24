<?php

session_start();
include_once 'database.php';
//Search user value (in text form)
if (isset($_SESSION['loggedin'])) {
    $value = mysqli_real_escape_string($conn, $_GET['text']);
    $query = "SELECT * FROM searchinfo WHERE imageinfo LIKE '%$value%'";
    $result = $conn->query($query);
    if (!$result) {
        echo "Error Occurred";
        echo mysqli_error($conn);
        mysqli_close($conn);
    } else {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p>". $row['imageinfo'] ."</p>";
                echo "<h1 onclick='clearSearch()'><a href='#' style='color: white;'>Clear Search</a></h1>";
            }
        } else {
            echo "FALSE";
        }
        mysqli_close($conn);
    }
}
else{
    echo "FALSE";
}


