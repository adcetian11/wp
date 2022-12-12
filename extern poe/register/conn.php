<?php
$host="localhost";
$user="root";
$password="";
$dbname="registration";
$con=mysqli_connect("localhost","root","","registration");
if(!$con)
{
	die("Connection failed".mysqli_connect_error);
}
?>
