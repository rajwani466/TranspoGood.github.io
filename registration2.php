<html>
<head>
<title>REGISTRATION FORM</title>
<center><body background="a.jpg">
<table border="2" align="center">
<form method="POST" action="">
<!-- we will create registration.php after registration.html -->
<center><h3>OWNER REGISTRATION</h3></center>
<tr>
<th>NAME:</th>
<td><input type="text" name="name" value=""></br></td>
</tr>

<tr>
<th>SURNAMANE NAME:</th>
<td><input type="text" name="surname" value=""></br></td>
</tr>
<tr>
<th>Vehical:</th>
<td><input type="text" name="vehicle" value=""></br></td>
</tr>
<tr>
<th>Number</th>
<td><input type="text" name="number" value=""></br></td>
</tr>
<!--<tr>
<th>DROP</th>
<td><input type="text" name="drop1" value=""></br></td>
</tr>-->
<tr>
<th>PASSWORD</th>
<td><input type="text" name="password" value=""></br></td>
</tr>
<tr>
<th>RE-PASSWORD</th>
<td><input type="text" name="rpassword" value=""></br></td>
</tr>

<!--<tr>
<th>CHOOSE</th>
<td><select name="choose">
<option>OWNER</option>
<option>USER</option>
</select></td>-->
</tr>

<tr>
<th><input type="submit" name="submit" value="submit"></th>
<td><a href="login1.php">click here for login</a></td>
</tr>
</form>

</table>
</body>
</center>
</head>
</html>
<?php
include("connection.php");
error_reporting(0);
?>

<?php
if($_POST['submit'])
{
	$fn = $_POST['name'];
	$fnm = $_POST['surname'];
	$db = $_POST['vehicle'];
	$pkup = $_POST['number'];
	$pass = $_POST['password'];
	$rpass = $_POST['rpassword'];
	$query=mysqli_query($conn,"insert into owner(name,surname,vehicle,number,password,rpassword) values('$fn','$fnm','$db','$pkup','$pass','$rpass')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	
}
}
?>



