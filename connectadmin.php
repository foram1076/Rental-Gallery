<?php
// db_connection.php

$conn = mysqli_connect('localhost', 'root', '', 'adminlogin');

// Check connection
if (mysqli_connect_errno()) {
    echo "Connection Failed: " . mysqli_connect_error();
} else {
    echo "Connection Successful";
}
?>
