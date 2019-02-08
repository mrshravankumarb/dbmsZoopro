
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "bank";

$ac = $_POST["acn"];
$sac = $_POST["sacn"];
$amt = $_POST["cash"];


$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE account SET amount=amount-'$amt' WHERE accno='$ac'";
$result = mysqli_query($conn,$sql) or die( "could not execute");
$sql1="select * from account";
if($result1 = mysqli_query($conn,$sql1))
{
$rowcount=mysqli_num_rows($result1);
}
?>



<html>

<head>
	<title>RRCE E-BANKING</title>
<link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="bootstrap.css">
 
 <style>
 .circleBase {
    border-radius: 50%;
  }

.type1 {
    width: 300px;
    height: 300px;
    background: yellow;
   }

.Row
{
    display: table;
    width: 100%; /*Optional*/
    table-layout: fixed; /*Optional*/
    border-spacing: 10px; /*Optional*/
}
.Column
{
    display: table-cell;
	text-align:center;
    /*background-color: red; Optional*/
}
 </style>
 
 	</head>

<body bgcolor="6B0BFF">
<div class="header">
  <ul>
  <li><a href="#login">Logout</a></li>
  <li><a class="active" href="#home">Home</a></li>
<img src="1.png" style=" width: 10px height: 10px" />
</ul>
</div>
<center>
        
        <h1><marquee>Tranfer is Completed. Transaction is successful. </marquee></h1>
		  
<font size=5><a href="customerhome.html" class="previous">&laquo; Back to Menu</a></font>

        </body></head></html>
