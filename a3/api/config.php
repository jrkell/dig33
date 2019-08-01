<?php

/* CONFIG
*  This file contains MySQL connection info and various configuration settings.
*/

// Error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//MySQL Database Settings
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "D3sperad0s";
$dbname = "desperados";

//MySql Connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//Test for MySQL connection errors
if(mysqli_connect_errno()) {
    
    die("Database connection failed: " . mysqli_connect_error() . " (" .
        mysqli_connect_errno() . ")");
        
}

?>
