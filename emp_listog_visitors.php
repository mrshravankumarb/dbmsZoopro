<html>
    
    <header>
    <img src="/pro/pic1.jpg"></header>
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
<h3>VISITORS LIST</h3>

  <tr>
    <th>NAME OF THE VISITOR</th>
    <th>TICKET NUMBER</th> 
    <th>MODE OF PAYMENT</th>
  </tr>";
$sql = "select name,tno,modepayement from ticket";
if($result1 = mysqli_query($conn,$sql))
{
    if(mysqli_num_rows($result1)>0)
    {
         
        while($row = mysqli_fetch_assoc($result1))
        {	
    
        
  
 echo "<tr>";
 echo "<td>".$row['name']."</td>";
    echo"<td>".$row['tno']."</td>"; 
  echo"<td>".$row['modepayement']."</td>";

	echo"</tr>";

        }
    }
}
    echo"</table>";
                           
    ?>
	</center>
	
	
<button><a href="/pro/emp_ticket_info.php" class="previous">&laquo; Back to Menu</a></button>

    </body>
</html>

   