<?php 
include 's connectivity.php';
if(isset($_POST['submit']))
{
$Name=$_POST['Name'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="insert into reservation(Name,email,password)
		values('$Name','$email' ,'$password')";
		if(mysqli_query($connection,$sql))
		{
			echo"<script>alert('new record inserted');</script>";
			echo"<script>window.open('reserv_validate.php','_self')</script>";
		}
		else
		{
			echo"error";
		}
		mysqli_close($connection);

}