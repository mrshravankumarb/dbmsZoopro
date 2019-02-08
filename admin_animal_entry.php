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


<h1 align="center"><font color=Green size="8"><b>ANIMAL DATA ENTRY</b></font></h1>


<body background="/pro/aero_green_and_light_blue-wallpaper-2048x1152.jpg" width="200%">
<div align="center">
<form action="/pro/adminanimalform.php" method="post">
<div align="center">
<fieldset>
<legend><font color=red size="7" align="center">New Entry:</font></legend>
    <font color=black  size="5" ><b>

	
<br><br>
Enter the SSN of the Employee(Accessing the System):<br>
    <input type="text" name="empssn" ><br>
<br>
<br><br>

Enter (unique) ID of the animal: <br>
    <input type="text" name="a_id" ><br>
<br>

<br>

Enter the Name of the Animal:<br>
    <input type="text" name="speciesname" ><br>
<br>


Enter the Scientic name of the Animal:<br>
    <input type="text" name="sname" ><br>



Select the Class:
   <br> 
   <input type="radio" name="animalclass" value="Mammals" checked> Mammals<br>
  <input type="radio" name="animalclass" value="Birds">Birds<br>
  <input type="radio" name="animalclass" value="Fish">Fish<br>
  <input type="radio" name="animalclass" value="Reptiles">Reptiles<br>
  <input type="radio" name="animalclass" value="Amphibians">Amphibians<br>
  <input type="radio" name="animalclass" value="Arthropods">Arthropods<br>
<br>

Enter the weight of the Animal: <br>
    <input type="text" name="wt"><br>
<br>

Enter age of the Animal: <br>
    <input type="text" name="age"><br>
<br>
Adopted by: <br>
    <input type="text" name="adoptedby" ><br>


Enter the date of arrival: <br>
    <input type="text" name="date" ><br>
<br>	
	<br>
</b>
</font>
    <input type="submit" value="Add Record">
  </fieldset>
</div>
  </form>
</div>

<br><br>

<a href="/pro/adminmenupage.php" class="previous">&laquo; Back to Menu</a>

</body>
</html>