<html>
<head>
</head>
<h1><center> TRANSPORT MANAGEMENT SYSTEM</center></h1>
<style type="text/css">
h1{
    color:blue;
	background:lightblue;
	font-size:50;
   }
   body{
        background-image:a.jpg;
      }
	  .topnav {
  overflow: hidden;
  background-color: #333;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: blue;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.footer {
   position: fixed;
   color: white;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: blue;
   text-align: center;
   }
   .slide{
          position:fixed;
		  color:white;
		  
   }
   button {
    border-radius: 8px;
    border: 2px solid black;
    background: black;
    color: white;
}
   select.vehicle {
    border-radius: 8px;
    border: 2px solid black;
    background: black;
    color: white;
}
</style>
<div class="navbar">
  <a href="index.html">HOME</a>
  <a href="about.html">ABOUT US</a>
	  <a href="contact.html">CONTACT</a>
	  <a href="regis1.html"></a>
	    
  <div class="dropdown">
    <button class="dropbtn">LOGIN 
      <i class="fa fa-caret-down"></i>
    </button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <div class="dropdown-content">
      <a href="login1.php">ADMIN</a>
      <a href="login.php">USER</a>
    </div>
	</div>
	<a href="logout.php">LOGOUT</a>
	<br>
	<br>
	<br>
	</div>
	
<body background="a.jpg">

</body>
<div class="footer">
<p> Copyright@ TRANSPORT MANAGEMENT SYSTEM.</p>
</div>
	</html>


<?php
session_start();
include("connection.php");
$userprofile = $_SESSION['user_name'];
if($userprofile==true)
{
}
else{
	header('location:login.php');
}

$query = "SELECT * FROM user WHERE name='$userprofile'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
echo "welcome"  .$result['name'];
?>
<table border="2" align="center">
<tr>
	<th>NAME</th>
	<th>SURNAME</th>
	<th>NUMBER</th>
	<!--<th>PICKUP</th>
	<th>DROP</th>
	<th>CATEGORY</th>
	<th>AMOUNT</th>-->
	
	</tr>
<?php
echo "<tr>
				<td>".$result['name']."</td></br>
				<td>".$result['surname']."</td></br>
				<td>".$result['number']."</td>
								
			</tr><br><br><br><br><br><br><br>";

?>
<html>

</table><br><br><br>
<center><h2>BOOKING</h2>
<table border="2" align="center">
<tr>
<th>Pickup location:</th>
<td><input type="text" name="name" value=""placeholder="Pickup location"></br></td>
</tr>

<tr>
<th>Drop Location:</th>
<td><input type="text" name="surname" value=""placeholder="Drop Location"></br></td>
</tr>
<th>Date:</th>
<td><input type="date" name="surname" value=""placeholder="date"></br></td>
</tr>
<th>time:</th>
<td><input type="time" name="surname" value=""placeholder="time"></br></td>
</tr>

<center><SELECT class="vehicle">>


<OPTION>Tata Ace 

<OPTION>Trollery 

<OPTION>Truck  

</SELECT><br><br><br>
</div>
<!--<center><input type="submit" name="submit" value="PAY" >-->

<body background="a.jpg">
<table align="center" border="1">
<center><h3>PAYMENT METHOD</h3></center>
<form action="" method="post">
<tr>
<th>DEBIT CARD</th>
<td><input type="radio" name="name"></td>
</tr>
<tr>
<th>VISA</th>
<td><input type="radio" name="visa" ></td>
</tr>
<tr>
<th>BHIM</th>
<td><input type="radio" name="bhim"></td>
</tr>
<tr>
<th>CASH</th>
<td><input type="radio" name="cash"></td>
</tr>
</form>


</table>
<button  ondblclick="myalert()">
      Pay Now
    </button>
  
    <script>
        function myalert() {
            alert( "Payment done \n " +
                "Booking the Confrimed" + 
                         "Thank you!");
        }
    </script>
<li
<!--<br><br><input type="submit" name="submit" value=""></BR></BR>-->
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