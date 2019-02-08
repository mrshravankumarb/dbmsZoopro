<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "zoom";
$aid = $_POST["id"];

$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "delete from animalz where aniid='$aid'";

$result = mysqli_query($conn,$sql) or die( "Could not executed");
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}



mysqli_close($conn);

?>

<html>
    
<head>
    <style type="text/css">
html, 
body {
height: 100%;
}

        h2{
font-size: 50;}
    </style>
    </head>
    <body bgcolor=violet>
        
        <h1><marquee>Animal Record Deleted Successfully</marquee></h1>
		<a href="/pro/adminmenupage.php" class="previous">&laquo; Back to Main Menu</a>

        </body></head></html>


