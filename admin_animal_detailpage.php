<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "zoom";

$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select aniid, aniname, sciname, aniclass, weight, age,adopted_by, date_of_arrival from animalz";
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
    <img src="/pro/lol.jpg"></header>
    <br>
<h2>Animal Details</h2><br>
<?php
while($row = mysqli_fetch_assoc($result1))
        { ?>
<table>
 
  <tr>
    <td><b>Animal ID</td>
    <td><?php echo $row['aniid']?></td>
    
  </tr>
  <tr>
    <td><b>Name of the Animal</td>
    <td><?php echo $row['aniname']?></td>
  
  </tr>
  <tr>
    <td><b>Scientific Name</b></td>
    <td><?php echo $row['sciname']?></td>

  </tr>
  
  <tr>
    <td><b>Animal Class</b></td>
    <td><?php echo $row['aniclass']?></td>

  </tr>
  <tr>
    <td><b>Weight of the Animal</b></td>
    <td><?php echo $row['weight']?></td>

  </tr>
  <tr>
    <td><b>Age of the Animal</b></td>
    <td><?php echo $row['age']?></td>

  </tr>
  
  <tr>
    <td><b>Adopted by</b></td>
    <td><?php echo $row['adopted_by']?></td>

  </tr>
  <tr>
    <td><b>Date of Arrival</b></td>
    <td><?php echo $row['date_of_arrival']?></td>

  </tr>
  
</table>
<br><br>
<?php
}
?>
<font size=5><a href="/pro/adminmenupage.php" class="previous">&laquo; Back</a></font>

</body>
</html>
<?php
}}
?>