<?php 
include 's connectivity.php';
if(isset($_POST['submit']))
{
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phone_no=$_POST['Phone_no'];
$sql="insert into wedding(Name,Email,Phone_no)
		values('$Name','$Email' ,'$Phone_no')";
		if(mysqli_query($connection,$sql))
		{
			echo"<script>alert('new record inserted');</script>";
			echo"<script>window.open('wedding.html','_self')</script>";
		}
		else
		{
			echo"error";
		}
		mysqli_close($connection);

}
?>