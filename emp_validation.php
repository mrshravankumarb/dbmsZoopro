
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "zoom";

$uname1 = $_POST["uname"];
$pwd1 = $_POST["pwd"];
$desg1 = "staff";
$conn = new mysqli($servername, $username, $password,$db);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
echo "Connection Successful";

$sql = "SELECT * from login where username='$uname1' and password='$pwd1' and designation='$desg1' ";
$result = mysqli_query($conn,$sql) or die( "could not execute");
$num_rows = mysqli_num_rows($result);
if ( $num_rows > 0)
{
    header( "Location:/pro/emp_menu.php");
    
}
else
{
    header("Location: /pro/emplogin.php");
}
?>
