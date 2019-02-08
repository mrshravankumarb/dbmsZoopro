<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "bank";

$ssn = $_POST["essn"];
$sno = $_POST["vno"];
$ticno = $_POST["tno"];
$name = $_POST["vname"];
$sex = $_POST["gender"];
$pmode = $_POST["paymentmode"];
$ttype = $_POST["travmode"];
$amount = $_POST["amt"];
$category = $_POST["cat"];


$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "insert into ticket values('$ssn','$sno','$ticno','$name','$sex','$pmode','$ttype','$amount','$category')";
$result = mysqli_query($conn,$sql) or die( "could not execute");
$sql1="select * from ticket";
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
    <body bgcolor=red>
        
        <h1><marquee>Booking is Complete. Ticketing Record is added. </marquee></h1>
		  
<font size=5><a href="/pro/emp_menu.php" class="previous">&laquo; Back to Menu</a></font>

        </body></head></html>
