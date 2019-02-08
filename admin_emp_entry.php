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

<h1><center><font color=violet><b>EMPLOYEE DATA ENTRY</b></font></center></h1>
<body background="/pro/x.jpg">
<div align="center">
<form action="/pro/adm_emp_form.php" method="post">
<font color=yellow size=5><br>
<br> Enter the SSN for the new Employee:<br>
  <input type="text" name="ssn" value=""><br>
 
Enter the name of the Employee:<br>
  <input type="text" name="name" >
  <br>
Enter the Designation:<br>
   <input type="radio" name="desg" value="Admin" checked>Admin<br>
  <input type="radio" name="desg" value="Staff">Staff<br>
  
Mobile No.:<br>
  <input type="text" name="mno" >
  <br>
Address:<br>
  <input type="text" name="add" >
  <br>
Salary :<br>
  <input type="text" name="sal" >
  <br>
Date of joining:<br>
  <input type="text" name="doj" >
  <br>
Username:<br>
  <input type="text" name="uname" >
  <br>
  Password:<br>
  <input type="text" name="psd" >
  <br>
    
  <br><br>
  <input type="submit" value="Submit">
</font>
</form> 
</div>

<a href="/pro/adminmenupage.php" class="previous">&laquo; Back </a>

</body>
</html>
