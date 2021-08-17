<?php
// Try and connect to the MySQL database
$con = mysqli_connect('localhost','root','','glasses');

// If connection was not successful, handle the error
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    // Handle error - log to a file, show an error screen
}
