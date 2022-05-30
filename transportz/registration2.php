<html>
<head>
<link href="css/style.css" rel="stylesheet" />


<title>REGISTRATION FORM</title>
<a href="index.html"> HOME</a>
<center><body class="bgregistration" background="road5.jpeg">
	<style>
    body {
    font-family: "Roboto", sans-serif;
    background-color: #fff;
    overflow-x: hidden;
    background-repeat: no-repeat;
    background-size: 1520px;
    /* width: 92px; */
}
		a{
		text-decoration:none;
		font-weight:bold;
	}
		.registration21 {
    border: 2px solid black;
    margin: 13px 594px;
    /* margin-block: 22; */
	background-color: #15172b;
  border-radius: 20px;
  box-sizing: border-box;
  height: 522px;
  padding: 20px;
  width: 320px;
}
.title {
  color: #eee;
  font-family: sans-serif;
  font-size: 20px;
  font-weight: 600;
  margin-top: 10px;
}
.input {
  /* background-color: #303245;
  border-radius: 12px;
  border: 0; */
  margin-top: -23px;
  /* box-sizing: border-box;
  color: #eee;
  font-size: 18px;
  height: 100%;
  outline: 0;
  padding: 4px 20px 0;
  width: 100%; */
}
input.input\.form {
    border-radius: 12px;
    background-color: 303245;
	padding: 2px 18px;
	font-size:16px;
}
.submit {
  background-color: #08d;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  cursor: pointer;
  font-size: 18px;
  height: 50px;
  margin-top: 38px;
  // outline: 0;
  text-align: center;
  width: 100%;
}

.submit:active {
  background-color: #06b;
}
.submit\.form {
    margin-top: -75px;
    width: 139px;
    height: -4px;
}

img.image {
    margin-top: -38px;
    width: 130px;
}

	</style>

<form method="POST" action="">
<!-- we will create registration.php after registration.html --><br><P></P>
<img class="image" src = "a11.png " alt =" image not found">
<div class="registration21">
	<div class="title">
<center><h3>OWNER REGISTRATION</h3></center>
</div>

<br>

<tr>
	<div class="input">


<input class="input.form"type="text" name="name" value=""placeholder="USERNAME"></br>

</tr>
<br>
<tr>

<input class="input.form" type="text" name="surname" value=""placeholder="FULL NAME"></br>
</tr>
<br>
<tr>

<input class="input.form" type="text" name="vehicle" value=""placeholder="VEHICLE"></br>
</tr>
<br>
<tr>

<input class="input.form" type="text" name="number" value=""placeholder="VEHICLE NUMBER"></br>
</tr>
<br>
<tr>

<input class="input.form" type="text" name="drop1" value=""placeholder="CONTACT NO"></br>
</tr>
<br>
<tr>

<input class="input.form" type="password" name="password" value=""placeholder="PASSWORD"></br>
</tr>
<br>
<tr>

<input class="input.form" type="password" name="rpassword" value=""placeholder="RE-PASSWORD"></br>
</tr>
<br>
</div>


<!--<tr>
<th>CHOOSE</th>
<td><select name="choose">
<option>OWNER</option>
<option>USER</option>
</select></td>-->
</tr>
<br>



<div class="submit.form">
<h2><input class="submit" type="submit" name="submit" value="submit"style="border-radius: 8px;
    background-color:#08d;
    color: white;"></h2>	
<a href="login1.php">click here for login </a>
</div>
</div>

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



