<?php
$dbhost = 'localhost'; 
$dbuser = 'root';
$password = '';
$dbname = 'arkademy';

$dbconnect = new mysqli($dbhost, $dbuser, $password, $dbname);

if ($dbconnect->connect_error) {
    die('Server Error');
}
?>