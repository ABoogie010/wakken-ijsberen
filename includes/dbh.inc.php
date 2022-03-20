<?php 

$serverName = "localhost"; // xampp
$dBUsername = "root";
$dBPassword = "";
$dBName = "ijsberen"; // phpmyadmin name

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); // connection to the database

if(!$conn) { // if the connection fails
    die("Connection failed: " . mysqli_connect_error());
}