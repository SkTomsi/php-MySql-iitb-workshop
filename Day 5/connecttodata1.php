<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password) or die (mysqli_connect_error());

mysqli_select_db($conn , "data1") or die (mysqli_error($conn));



?>