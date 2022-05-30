<?php
session_start();
include("connection.php");
?>


<html>
<head>

<title>
LOGIN PAGE
</title>
<a href="index.html">HOME</a>
</head>
<style type="text/css">
  body {
    background-image: url(road7.webp);
    max-width: 100%;
    background-repeat: no-repeat;
    /* height: 229px; */
    background-size: 1525px;
    opacity: 39.5;
}
      a{
              text-decoration:none;
      }
      input[type="text"] {
        border-radius: 8px;
    background: none;
    border: 2px solid black;
}
input[type="password"] {
    border-radius: 8px;
    background: none;
    border: 2px solid black;
}

   button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
   }
.cancel{
        background-color:red;
        width:10%;
        }
        input[type="submit"] {
    border-radius: 8px;
    background: black;
    color: white;
}
img {
    margin-top: -59px;
}


</style>
<!-- <body class="bg.login"background="view.jpg"> -->
<form action="" method="POST">
<a href="registration.php">click here for registration</a>
<marquee>WELCOME TO LOGIN PAGE</marquee><center>
<br/>
<br/>
<br/><br/>
<img src="a11.png" alt="image not found"> 
<p><b>OWNERNAME</b></p><br/>
<input type="text" type="text" name="name" value=""><br/><br/>
<p><b>PASSWORD<b></p>
<input type="password" name="password" value=""><br/><br/>
<input type="submit" name="submit" value="LOGIN"><br/>
<input type="checkbox">Remember me 
<br/><br/>
<button type="submit" class="cancel">cancel</button><break>
&nbsp&nbsp&nbspforgot<a href="a.html">   password?</a>
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$user= $_POST['name'];
	$pwd= $_POST['password'];
	$query="SELECT * FROM owner WHERE name='$user' && password='$pwd'";
	
	$data = mysqli_query($conn , $query);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['user_name']=$user;
		header('location:sdashboard2.php');
	}
	else
	{
		echo "<script type='text/javascript'>alert('incorrect password')</script>";
	}
}
?>