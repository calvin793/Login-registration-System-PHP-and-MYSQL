<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

$conn = mysqli_connect($name, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}