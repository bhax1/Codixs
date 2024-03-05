<?php
$host ='localhost';
$user ='root';
$password ='';
$database='codixs';
$port='3306';
$connection = mysqli_connect($host,$user,$password,$database,$port);

$query = "SELECT ID, Name, Password, Date FROM list";
$sqllist = mysqli_query($connection, $query);
?>