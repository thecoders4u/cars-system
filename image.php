<?php
session_start();
include_once 'database.php';
//First check if user is logged in
if (isset($_SESSION['loggedin'])) {
    //Search user value and return image
    $value = mysqli_real_escape_string($conn, $_GET['text']);
    $query = "SELECT * FROM searchinfo WHERE imageinfo LIKE '%$value%'";
    $result = $conn->query($query);
    $counter = 0;
    if (!$result) {
        echo "Error Occurred";
        echo mysqli_error($conn);
        mysqli_close($conn);
    } else {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo $row['image'];
            }
        }
        else{
            echo "FALSE";
        }
        mysqli_close($conn);
    }
}


