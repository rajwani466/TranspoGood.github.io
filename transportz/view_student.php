<html>
<h2><center>USER</center><h2>
<body background="a.jpg">

</body>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM user;
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total != 0)
{
	?>
	
	<table border="2" align="center">
	<tr>
	<th>NAME</th>
	<th>surname NAME</th>
	<th>number</th>
	
	
	</tr>
	
	
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['name']."</td>
				<td>".$result['surname']."</td>
				<td>".$result['number']."</td>
				<!--<td>".$result['pickup']."</td>
				<td>".$result['drop']."</td>
				<td>".$result['amount']."</td>-->
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
	</html>