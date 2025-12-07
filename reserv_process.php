<?php 
include 's connectivity.php';
if(isset($_POST['submit']))
{
$Name=$_POST['Name'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from reservation where Name='$Name' and password='$password'";
$que=mysqli_query($connection,$sql);
		if(mysqli_num_rows($que)>0) 
		{
			echo"<script>alert('Reservation successful');</script>";
			echo"<script>window.open('Bombay barrie.html','_self')</script>";
		}
		else
		{
			echo"<script>alert('wrong data');</script>";
		}
		mysqli_close($connection);

}
?>