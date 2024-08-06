<?php 

include ('connection.php');

if (isset($_POST['submit'])) {
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$date_of_birth=$_POST['date_of_birth'];
	$insert="insert into students(first_name,last_name,email,date_of_birth) values ('$first_name','$last_name','$email','$date_of_birth')";
	$result=mysqli_query($conn,$insert);
	header('location:display_student.php');
	
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style="background-color: green;">
<div>
	<center>
	<h1>STUDENT FORM</h1>
	<form method="post">
		<table>
			<tr>
				<td>First_name</td>
				<td><input type="text" name="first_name"></td>
			</tr>
			<tr>
				<td>Last_name</td>
				<td><input type="text" name="last_name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Date_of_birth</td>
				<td><input type="date" name="date_of_birth"></td>
			</tr>
		
			
			<tr>
				<td>
					<input type="submit" name="submit" value="ADD STUDENT" style="margin-left: 120%;" >
				</td>
			</tr>
				
			
		

		</table>
	</form>
	</center>
</div>
</body>
</html>