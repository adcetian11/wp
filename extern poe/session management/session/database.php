<?php
session_start();
$servername='localhost';
$username='root';
$password='';
$dbname = "ss";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>