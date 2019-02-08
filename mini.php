<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "bank";
$ano=$_POST["ac"];

$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select accno,amount from bank where accno='$ano'";
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
<h2>MINI STATEMENT</h2><br>
<?php
while($row = mysqli_fetch_assoc($result1))
        { ?>
<table>
 
  <tr>
    <td><b>Account Number</td>
    <td><?php echo $row['accno']?></td>
    
  </tr>
  <tr>
    <td><b>Balance</td>
    <td><?php echo $row['amount']?></td>
  
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