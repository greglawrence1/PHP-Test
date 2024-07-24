<?php 
$hostname = 'localhost'; 
$username = 'root';
$password = '';  
$databaseName = 'phptest'; 
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");

if ($connection){
    echo "Successful Connection";
}
?>
