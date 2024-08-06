
  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title></title>
  </head>
  <body style="background-color: green;">

<center>
	<h1>STUDENT MANAGEMENT</h1>
  <table border="1">
  	<tr>
  	<th>Id</th>
  	<th>First_name</th>
  	<th>Last_name</th>
  	<th>Email</th>
  	<th>Date_of_birth</th>
    <th colspan="2">Action</th>
  	   
        <a href="students.php"> <input type="submit" name="submit" value="ADD STUDENT"> </a>
        <a href="sses.php"> <input type="submit" name="submit" value="LOGOUT"> </a>
    <?php
include('connection.php');
$select="select*from students";
$result =mysqli_query($conn,$select);
 while ($row=mysqli_fetch_assoc($result)) {
	echo "<tr>";
  echo"<td>".$row['id'];
  echo"<td>".$row['first_name'];
  echo"<td>".$row['last_name'];
  echo"<td>".$row['email'];
  echo"<td>".$row['date_of_birth'];
  echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td>";
  echo "<td><a href='update.php?id=".$row['id']."'>Update</a></td>";
  
echo"<tr>";
}

    ?>
  </table>
  </center>
  </body>
  </html>