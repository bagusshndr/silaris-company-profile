<?php
// $con = mysqli_connect('localhost', 'root', '', 'dbs_backend');
$servername = "localhost";
$username = "root";
$password = "";
$db = "dbs_backend";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

    // // Check connection
    // if (!$conn) {
    // die("Connection failed: " . mysqli_connect_error());
    // }
    // echo "Connected successfully";
