<?php

//params to connect db
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="phptutorial";

//connection to database
$conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if (!$conn) {
    die("Database connection failed");
}

    
?>