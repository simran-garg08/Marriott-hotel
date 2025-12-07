<html>
	<head>
		<title>Reservation validate</title>
		<style>
			.v1{
				
				padding-left:570px;
				padding-top:90px;
				border-radius:30px;
				background-color:black;
				height:100%;
				background-image:url(r2_img.webp);
			}
		</style>
	</head>
	<body>
		<div class="v1" >
		<div   style="height: 400px; background-color:lightyellow; width:350px; text-align:center; border:none;outline:none;border-radius:30px; ">
		<h1 style="padding-top: 30px;">Verify Reservation</h1>
		<form method="post" action="reserv_process.php" style="border:none;outline:none; background-color:lightyellow;border-radius:50px;">
			 <label for="name">Name:</label><br>
			 <input type="text" id="name" name="Name" required  style="border:none;outline:none;background-color:lightyellow;border-bottom: 1px solid black; "><br><br>
			 <label for="email">Email:</label><br><br>
       			 <input type="email" id="email" name="email" required  style="border:none;outline:none;background-color:lightyellow;border-bottom: 1px solid black;"><br><br>
			 <label>Password</label><br><br>
			 <input type="password"  name="password" required  style="border:none;outline:none;background-color:lightyellow;border-bottom: 1px solid black;">  <br><br><br><br>
			<input type="submit" name="submit">
		</form></div>
		</div>
	</body>
</html>