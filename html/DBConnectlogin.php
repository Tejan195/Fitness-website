<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'fitregdb';
$connect = mysqli_connect($server, $username, $password, $db);
if(!$connect){
    die("Connection failed:" . mysqli_connect_error());
}
?>