<?php
include ('connection.php');

$id=$_GET['id'];
$del=mysqli_query($conn,"DELETE FROM students WHERE id='$id'");
   if($del){
   	header("location:display_student.php");

}
?>

 