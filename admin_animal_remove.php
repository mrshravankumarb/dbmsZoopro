<?php
?>
<html>
<head>
<h1 align="center"></h1>
<style>
.previous {
    background-color: #f1f1f1;
    color: red;
}
</style>
</head>
<body background="/pro/green_snake_scales_texture-wallpaper-1920x1080.jpg" width="50%">

<form action="/pro/del_ani.php" method="post">

<fieldset>

<legend align ="center"><b><font color=green size="6">Animal Data Deletion:</font></b></legend>

<font color="blue" size="5">
<br>
Enter (unique) ID of the animal: <br>
    <input type="text" name="id" ><br> 
    <br>

  <br>
  <input type="submit" value="Submit">

</fieldset>
</font>
</form>

<a href="/pro/adminmenupage.php" class="previous">&laquo; Back</a>

</body>
</html>