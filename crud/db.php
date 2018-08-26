<?php

$host = "localhost";
$username = "public_crud";
$password = "12345";
$dbname = "crud";

$con = mysqli_connect($host, $username, $password, $dbname);

if (!$con) {
	die("Connection failed" . mysqli_errno($con));
}

 ?>
