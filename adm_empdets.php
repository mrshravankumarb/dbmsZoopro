<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "zoom";

$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select ssn,name,salary,designation,phone,address,username,password from employee";
$result = mysqli_query($conn,$sql) or die( "could not execute");

if($result1 = mysqli_query($conn,$sql))
{
    if(mysqli_num_rows($result1)>0)
    {
        
            ?>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid black;
    font-family: monospace;
    font-size: 16;
}
    img{
        width: 100%;
        height: 240px;
        margin: 0px;
        padding: 0px;
    }

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}
    a{
        float: right;
        color: black; 
        font-family: monospace;

    }
    h2{
        margin-top: 0px;
        font-family: monospace;
        font-size: 26;
    }
</style>
</head>
<body bgcolor=lightgrey>
    <header>
    <img src="/pro/pic1.jpg"></header>
    
<h2>Employee Details</h2>
<?php
while($row = mysqli_fetch_assoc($result1))
        { ?>
<table>
 
  <tr>
    <td><b>SSN</b></td>
    <td><?php echo $row['ssn']?></td>
    
  </tr>
  <tr>
    <td><b>Name of the Employee</b></td>
    <td><?php echo $row['name']?></td>
  
  </tr>
  <tr>
    <td><b>Salary</b></td>
    <td><?php echo $row['salary']?></td>

  </tr>
  
  <tr>
    <td><b>Designation</b></td>
    <td><?php echo $row['designation']?></td>

  </tr>
  <tr>
    <td><b>Phone Number</b></td>
    <td><?php echo $row['phone']?></td>

  </tr>
  <tr>
    <td><b>Address</b></td>
    <td><?php echo $row['address']?></td>

  </tr>
  
  <tr>
    <td><b>Username</b></td>
    <td><?php echo $row['username']?></td>

  </tr>
  <tr>
    <td><b>Password</b></td>
    <td><?php echo $row['password']?></td>

  </tr>
  
</table>
<br><br>
<?php
}
?>
<font size=5><a href="/pro/adminmenupage.php">Back to Main Menu</a></font>

</body>
</html>
<?php
}}
?>