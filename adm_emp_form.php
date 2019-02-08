<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "zoom";

$ssn = $_POST["ssn"];
$name = $_POST["name"];
$desg = $_POST["desg"];
$add = $_POST["add"];
$mob = $_POST["mno"];
$sal = $_POST["sal"];
$doj = $_POST["doj"];
$un=$_POST["uname"];
$pwd=$_POST["psd"];

$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "insert into employee values('$ssn','$name','$sal','$desg','$mob','$add','$doj','$un','$pwd')";
$result = mysqli_query($conn,$sql) or die( "could not execute");
$sql1="select * from employee";
if($result1 = mysqli_query($conn,$sql1))
{
$rowcount=mysqli_num_rows($result1);
}
?>
<html>
    
<head>
    <style type="text/css">
html, 
body {
height: 100%;
}

body {
background-image: url(background-2462431__340.jpg);
background-repeat: no-repeat;
background-size: 100%;
}
        h2{
font-size: 50;}
    </style>
    </head>
    <body bgcolor=violet>
        
        <h1><marquee>Record Added Successfulyy</marquee></h1>
		
<a href="/pro/adminmenupage.php" class="previous">&laquo; Back to Menu</a>

        </body></head></html>
