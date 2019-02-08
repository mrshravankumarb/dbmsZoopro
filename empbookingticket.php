<?php
?>

<html>
<h1 align="center"><font color=orange><b>BOOKING TICKET</b></font></h1>

<style>
body {
    background-image: /pro/colorful_world_hd_-wallpaper-1920x1080.jpg;
    background-repeat: no-repeat;
    background-position: left bottom;
    margin-right: 200px;
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

<body background="/pro/colorful_world_hd_-wallpaper-1920x1080.jpg">

<fieldset>
<legend><font color=red size="7">ENTRANCE TICKETING</font></legend>
    <font color=#E8DAEF   size="5">
<form action="/pro/emp_book_form.php" method="post">

    
<br>
Enter Staff SSN:<br>
    <input type="text" name="essn" ><br>
<br>

<br>
Enter the Visitor no:<br>
    <input type="text" name="vno" ><br>
<br>

<br>
Enter the ticket no:<br>
    <input type="text" name="tno" ><br>
<br>
Enter name of the visitor:<br>
    <input type="text" name="vname" ><br>
<br>
 Gender:
   <br> 
   <input type="radio" name="gender" value="Male" checked> Male
  <input type="radio" name="gender" value="Female">Female
   <br><br>
 Mode of Payment:
   <br> 
   <input type="radio" name="paymentmode" value="Debit Card" checked> Debit Card
   <input type="radio" name="paymentmode" value="Credit Card" > Credit Card
   <input type="radio" name="paymentmode" value="PayTm" >Paytm
   <input type="radio" name="paymentmode" value="Cash"> Cash
   <input type="radio" name="paymentmode" value="Others"> Others<br>
<br>

Ticket Type:
   <br> 
   <input type="radio" name="travmode" value="Walk" checked> Walk
   <input type="radio" name="travmode" value="Safari" > Safari
   <input type="radio" name="travmode" value="Grand Safari" > Grand Safari
   <input type="radio" name="travmode" value="Caddy Service" > Caddy Service
<br><br>


Category:
   <br> 
   <input type="radio" name="cat" value="Child" checked> Child
   <input type="radio" name="cat" value="Adult" > Adult
<br><br>


Enter the amount:<br>
    <input type="text" name="amt" ><br><br>

</font>
    <input type="submit" value="Submit">
  </fieldset>
  </form>

  
  
<font size=5><a href="/pro/emp_menu.php" class="previous">&laquo; Back to Menu</a></font>

</body>
</html>