<?php
session_start();
include_once 'database.php';
if (isset($_SESSION['loggedin'])) {
    //Perform a hidden search if there is an image for the user's search text
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
                echo "<p onclick='clickSearch(this.innerText)'>" . $row['imageinfo'] . "</p>";
            }
        } else {
            echo "FALSE";
        }
        mysqli_close($conn);
    }
} else {
    echo "FALSE";
}


