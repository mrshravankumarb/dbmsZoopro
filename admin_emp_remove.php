<?php
?>
<html>
<head>
<style>


a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
}

a:hover {
    background-color: green;
    color: black;
}

.previous {
    background-color: #f1f1f1;
    color: red;
}



</style>
</head>
<h1><center><font color=Yellow><b>DELETION OF EMPLOYEE RECORD</b></font></center></h1>
<body background="/pro/fomef_woodmix_colorful_5k-wallpaper-1920x1080.jpg">
<div align="center">

<form action="/pro/adm_emp_rem.php" method="post">

<font color=red size=5><br><br> Enter the SSN of the Employee whose data is to be removed from the Database:<br>
  <input type="text" name="ssn" ><br>
  <br><br>
  <input type="submit" value="Remove">
</font>
</form> 
</div>
<br>
<a href="/pro/adminmenupage.php" class="previous">&laquo; Back to Menu</a>

</body>
</html>
