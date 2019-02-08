<html>
    
    <header>
    <img src="/pro/lol.jpg"></header>
    <style>
        body{
            background-image: url(/pro/fomef_woodmix_colorful_5k-wallpaper-1920x1080.jpg);
        }
        img{
            width: 100%;
            height: 250px;
        }
         table, th, td {
    border: 0.5px solid white;
             text-align: center;
             color: azure;
             font-family: monospace;
             font-size: 18;
            
             }
        h3{
            color: azure;
            font-size: 40;
            font-family: monospace;
        }
        .right{
            background-color: white;
            opacity: 0.7;
            width: 20%;
            height: 60%;
            color: black;
            font-family: monospace;
           float: right;
            font-size: 30;
            margin-top: -400px;
            margin-right: 50px;
            border-radius: 10px;
        }
        
    </style>
   
    <body>  
<center>	
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "zoom";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    echo "<table border='1'>
<h3>EMPLOYEE LIST</h3>
 
 <tr>
    <th>Number of Employees</th>
</tr>
	<tr>
	<th>Number of Staffs</th>
  </tr>";
  
$sql = "select count(*) as noemp from employee";
if($result1 = mysqli_query($conn,$sql))
{
    if(mysqli_num_rows($result1)>0)
    {
         
        while($row = mysqli_fetch_assoc($result1))
        {	
    
        
  
 echo "<tr>";
 echo "<td>".$row['noemp']."</td>";

	echo"</tr>";

	}
	}
	    echo "<table border='2'>
 
 <tr>
    <th>Number of Employees</th>
</tr>
	<tr>
	<th>Number of Staffs</th>
  </tr>";

$sql = "select count(*) as nostaff from employee where designation='Staff'";
if($result1 = mysqli_query($conn,$sql))
{
    if(mysqli_num_rows($result1)>0)
    {
         
        while($row = mysqli_fetch_assoc($result1))
        {	
    
        
  
 echo "<tr>";
 echo "<td>".$row['nostaff']."</td>";

	echo"</tr>";

}}
    echo "<table border='3'>
 
 <tr>
    <th>Number of Employees</th>
</tr>
	<tr>
	<th>Number of Staffs</th>
  </tr>";
  
$sql = "select count(*) as noad from employee where designation='Admin'";
if($result1 = mysqli_query($conn,$sql))
{
    if(mysqli_num_rows($result1)>0)
    {
         
        while($row = mysqli_fetch_assoc($result1))
        {	
    
        
  
 echo "<tr>";
  echo"<td>".$row['noad']."</td>";

	echo"</tr>";

  
        }
    }
}
    echo"</table>";
                           
    ?>
	</center>
    </body>
</html> 