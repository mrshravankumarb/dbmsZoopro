<?php

?>

<html>

<style>
.vertical-menu {
    width: 200px;
}

.vertical-menu a {
       color:Yellow;
    display: Block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #E74C3C  ;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}

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

<body background="/pro/blue_retro_pattern-wallpaper-2048x1152.jpg">
<font color="Violet">

<h1 style="text-align:center;"><font size=20>Welcome to Rajarajeshwari Zoo Management System</font></h1>
<br>
<center><h2>ADMIN MENU</h2></center>

<div align="center">
<div class="vertical-menu"  align="center">
<font size=5>
  
  <a href="/pro/admin_animal_entry.php">Animal Data Entry</a>
  <a href="/pro/admin_animal_remove.php">Animal Data Deletion</a>
  <a href="/pro/admin_animal_detailpage.php">Animal Details</a>
  <a href="/pro/admin_emp_entry.php">Employee Data Entry</a>
  <a href="/pro/admin_emp_remove.php">Employee Data Deletion</a>
  <a href="/pro/adm_empdets.php">Employee Details</a>
  
</font>
</div>
</div>





<br>
<div align="center">
<video style="video-align:center" width="400" height="240" controls >
  <source src="/pro/A SHORT VISIT TO MYSORE ZOO HD 23 Apr 14.mp4" type="video/mp4">
</video>
</div>

</font>

<a href="/pro/firstpage1.php" class="previous">&laquo; Logout</a>

</body>
</html>
