<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "doctor_master";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>