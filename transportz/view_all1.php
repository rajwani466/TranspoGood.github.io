<html>
<h2><center><u>ALL</u></center><h2>
<body background="a.jpg">

</body>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM owner ";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total != 0)
{
	?>
	
	<table border="2" align="center">
	<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>SURNAME NAME</th>
	<th>VEHICLE</th>
	<th>NUMBER</th>
		<th colspan="2">OPERATION</th>
	
	</tr>
	
	
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['name']."</td>
				<td>".$result['surname']."</td>
				<td>".$result['vehicle']."</td>
				<td>".$result['number']."</td>
				<td><a href='update.php?id=$result[id]&nm=$result[name]&fnm=$result[surname]&db=$result[vehicle]&pup=$result[number]'>Edit</a></td>
				<td><a href='delete.php?id=$result[id]'>Delete</a></td>
			</tr>";
	}
}
	else
	{
		echo "";
	}
	?>
	</table>
	<a href="dashboard.php">BACK</a>
	<html>



