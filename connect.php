<?php
// MySQLi object-oriented
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mystuff";

$connection = mysqli_connect($servername, $username, $password);
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, $dbname);
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
