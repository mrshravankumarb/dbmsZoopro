<?php 
?>
<html>

<head>
<title> ZIMS </title>
<style>
body { 
    background-image: /pro/wall.jpg;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
}

.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 50%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
white-space: nowrap; 
    color: white;
  font-size: 35px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

a {
    text-decoration: none;
    display: inline-block;
    padding: 15px 16px;
}

a:hover {
    background-color: green;
    color: black;
}

.previous {
    background-color: #f1f1f1;
    color: red;
}
</style>
</head>

</head>
<body background="/pro/wall.jpg" width="100%">
<center>
<font color="Blue"><h1>
Zoo Information Management System
</h1>
<h2>Database Management project</h2>
<h3>By Shravan Kumar B</h3>
<font size="4">
  <div class="container" align="center">
  <img src="/pro/loginicon.png" alt="LOGIN" class="image">
 	 <div class="overlay" >
   		<div class="text"><b><br><center><h4>EMPLOYEE AUTHENTICATION</h4></center><b></div>
 	 </div>
  </div>
</font>
<form action = "/pro/emp_validation.php" method="post">
<br>

	<label><b>Username</b></label>
	<input type="text" placeholder="Enter Username" name="uname" required>

	 <label><b>Password</b></label>
 	<input type="password" placeholder="Enter Password" name= "pwd" required><br>

<button type>Login</button>


</form>
</font>




<a href="#" class="previous">&laquo; Back to Menu</a>

</body>
</html>