<html>
<head>
<a href="index.html">HOME</a>
</head>
<h1><center> TRANSPORT MANAGEMENT SYSTEM</center></h1>
<style type="text/css">
  body{
    background-image:url("view.jpg")
  }
  a{
		text-decoration:none;
		font-weight:bold;
	}
  center {
    background-color: none;
    margin-top: -53px;
    color: #27007e;
}
h1{
    color:blue;
	background:lightblue;
	font-size:50;
   }
   center {
    margin-top: -53px;
}
a{
  text-decoration:none;
}
body{
        background-image:view.jpg;
      }
	  .topnav {
  overflow: hidden;
  background-color: #333;
}

.navbar {
    overflow: hidden;
    background-color: #000000;
}

.navbar a {
  float: left;
  font-size: 20px;
  color: white;
  text-align: center;
  padding: 20px 25px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 22px;  
  border: none;
  outline: none;
  color: white;
  padding: 20px 25px;;
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
   background-color: black;
   text-align: center;
   }
   .slide{
          position:fixed;
		  color:white;
		  
   }
</style>
<div class="navbar">
 <!-- <a href="index.php">HOME</a>
  <a href="about_us.php">ABOUT US</a>
	  <a href="contact_us.php">CONTACT</a>-->
	  <a href="regis1.html"></a>
	    <a href="registration2.php">OWNER REGISTRATION</a>
      <a href="registration.php">USER REGISTRATION</a>
  <div class="dropdown">
    <button class="dropbtn">LOGIN 
      <i class="fa fa-caret-down"></i>
    </button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <div class="dropdown-content">
		<!-- <a href="login1.php">ADMIN</a>-->
      <a href="login1.php">OWNER</a>
      <a href="login.php">USER</a>
    </div>
	<!--<button class="dropbtn">Registration 
      <i class="fa fa-caret-down"></i>
    </button>
	<div class="dropdown-content">
		
    </div>-->
	
	</div>
	<!--<a href="#help"></a>-->
	<br>
	<br>
	<br>
	
	
	
<!-- <body background="view.jpg"> -->


</body><p></p><br>-->

<div></div>
<!--<div class="slide">
  <!-- <img class="mySlides" src="s1.jpg" style="width:700; height:450;"> -->
  <img class="mySlides" src="view.jpg" style="width:1500; height:550;margin-top:-66px;">
      <img class="mySlides" src="view.jpg" style="width:1500; height:550;margin-top:-66px;">
  
</div>-->
<!--fetch("http://localhost:8082/Transportz/transportz", {
    method: 'POST',
    body: myStringData,
}).then(response => {
    console.log(response);
})-->

 <script>   
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<div class="footer">
  <p> Copyright@ ANJUMAN College TRANSPORT MANAGEMENT SYSTEM.</p>
</div>
	</html>
	