<?php 

//insert into table users
include 'connection.php';

if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$insert="insert into users(username,password) values('$username',$password)";
	$result=mysqli_query($conn,$insert);
	header("location:display_student.php");
	$_COOKIE['username']=$username;
	$_COOKIE['password']=$password;

	setcookie("username",$username,time()+30);
	setcookie("password",$password,time()+30);
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
	<div style="">
 <center><form method="post" action="">

	<h1>STUDENT MANAGEMENT</h1>
	<table>
		<tr>
			<td>username</td>
			<td><input type="text" name="username"value="<?php 

			if(isset($_COOKIE['username'])){

				echo $_COOKIE['username'];
			}



			 ?>"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="password" value="<?php 

			if(isset($_COOKIE['password'])){

				echo $_COOKIE['password'];
			}



			 ?>"></td>
		</tr>
		<td><input type="submit" name="submit" style="margin-left: 200%;"></td>
	</table>
</form></center>
</div>
</body>
</html>
