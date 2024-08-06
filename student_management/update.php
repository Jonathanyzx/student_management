UPDATE                                             <?php
// session_start();
// error_reporting();
// if (!isset($_SESSION['username'])) {
// 	header("location:users.php");
// }
// else{
// ?>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
	  $id=$_POST['id'];
	  $fn = $_POST['first_name'];
      $ln = $_POST['last_name'];
      $age = $_POST['email'];
      $gender = $_POST['date_of_birth'];
      
$edit=mysqli_query($conn,"UPDATE students SET first_name='$fn',last_name='$ln',email='$age',date_of_birth='$gender' WHERE id='$id'");
    if($edit){
    	header("location:display_student.php");
    }
    else{
    	echo"<script>window.alert('Please try again')</script>";
    }
}
?>
<?php
include 'connection.php';
$id=$_GET['id'];
$sel=mysqli_query($conn,"SELECT *FROM students WHERE id='$id'");
while($data=mysqli_fetch_array($sel)){
	?>    <style>
	.hd {
		background: black;
		text-align: center;
		font-size: 26px;
		color: #fff;
		padding: 20px;
	}
	.nav {
		overflow: hidden;
		padding: 10px;
		text-align: center;
		background: green;
		margin-top: -25px;

	}
	.nav a {
		float: left;
		color: #fff;
		text-align: center;
		text-decoration: none;
		font-style: italic;
		font-weight: bold;
		font-size: 20px;
		padding: 18px;
		margin-left: 44px;
	}
	.nav a:hover {
		color: deepskyblue;
	}
</style>
<body>

	<center>
		<div class='hd'>
	<h1><i>UPDATE USER!!!</i></h2></div>
	<fieldset style="width: 500px;background: green;border: 2px solid black;border-radius: 5px;margin-right: 300px;">
		<form action="update.php" method="POST">
              
    <p>id</p>
    <input type="number" name="id" value="<?php echo $data['id'];?>" readonly>
    
    <p>first_name</p>
    <input type="text" name="first_name" value="<?php echo $data['first_name'];?>" placeholder="Enter First Name" required>
    
    <p>last_name</p>
    <input type="text" name="last_name" value="<?php echo $data['last_name'];?>" placeholder="Enter Last Name" required>

    <p>email</p>
    <input type="email" name="email" value="<?php echo $data['email'];?>" placeholder="Enter email" required>

    <p>date_of_birth</p>
    <input type="date" name="date_of_birth" value="<?php echo $data['date_of_birth'];?>" placeholder="Enter date" required>
    <p>
        <input type="submit" name="submit" value="Update ">
        <input type="reset" name="reset" value="Cancel">
    </p>
</form>
        </fieldset>
		
    </center>
	<?php
}
?>
