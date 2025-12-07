<?php
$servername="localhost:3307";
$username="root";
$password="";
$database="hotel";

$connection=mysqli_connect($servername,$username,$password,$database);
if(!$connection)
{
	die("error");
}
echo "connection Established";
?>