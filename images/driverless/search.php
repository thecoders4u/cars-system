<?php
session_start();
include_once 'database.php';
if(isset($_SESSION['loggedin'])){
    $value = mysqli_real_escape_string($conn, $_POST['searchdata']);
    $query ="SELECT * FROM news WHERE newsinfo LIKE '%$value%'";
    $result = $conn->query($query);
    $counter = 0;
    if(!$result){
        echo"Error Occurred";
        echo mysqli_error($conn);
        mysqli_close($conn);
    }
    else{
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo '<p onclick="Change(this.innerText)">' . $row['newsinfo'] . '</p>';
            }
        }
        else{
            echo "No information";
        }
        mysqli_close($conn);
    }
}



