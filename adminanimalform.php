<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "zoom";
$ssn = $_POST["empssn"];
$aid = $_POST["a_id"];
$name = $_POST["speciesname"];
$sname = $_POST["sname"];
$cls = $_POST["animalclass"];
$wt = $_POST["wt"];
$age = $_POST["age"];
$adopted = $_POST["adoptedby"];
$dateofarrival = $_POST["date"];

$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "insert into animalz values('$ssn','$aid','$name','$sname','$cls','$wt','$age','$adopted','$dateofarrival')";
$result = mysqli_query($conn,$sql) or die( "could not execute");
$sql1="select * from animalz";
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
background-image: url("/pro/13.jpg");
background-repeat: no-repeat;
background-size: 100%;
}
        h2{
font-size: 50;}
    </style>
    </head>
    <body bgcolor=aqua>
        
        <h1><marquee>Record Added</marquee></h1>
		<br><br><br>
		
<a href="/pro/adminmenupage.php" class="previous">&laquo; Back to Menu</a>

        </body></head></html>
