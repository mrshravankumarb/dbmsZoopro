<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "zoom";
$id = $_POST["ssn"];

$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "delete from employee where ssn='$id'";

$result = mysqli_query($conn,$sql) or die( "Could not executed");
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
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
 
 <body bgcolor=yellow>
        
        <h1><marquee>Employee Record Deleted Successfully</marquee></h1>
<br><br><br> <a href="/pro/adminmenupage.php" class="previous">&laquo; Back to Menu </a>

 </body>
 
 </html>


