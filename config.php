<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "responsi";

$connect = mysqli_connect($hostname, $username, $password, $database);

// if(mysqli_connect_errno()){ /*errno is for checking the db is running or not/if theres a prob*/
//     die("Database Error : ".mysqli_connect_error());
// } else {
//     echo "Database is now connected";
// }

?>