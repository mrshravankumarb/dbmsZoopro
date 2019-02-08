<?php
?>
<html>
<head>
<style>

body {
    background-image: "C:\Users\User\Desktop\Front end\elephants-in-black-and-white-johan-elzenga.jpg";
    background-repeat: repeat;
    background-position: top down;
    margin-right: 200px;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: plum; 
    color: black; 
    border: 2px solid #008CBA;
}

.button1:hover {
    background-color: #008CBA;
    color: white;
}

.button2 {
    background-color: plum; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

.button3 {
    background-color: plum; 
    color: black; 
    border: 2px solid #008CBA;
}

.button3:hover {
    background-color: #008CBA;
    color: white;
}

.button4 {
    background-color: plum; 
    color: black; 
    border: 2px solid #008CBA;
}

.button4:hover {
    background-color: #008CBA;
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
</head>

<body background="C:\Users\User\Desktop\Front end\elephants-in-black-and-white-johan-elzenga.jpg" align="center">
<legend align ="center"><b><font color=#9D43F1 size="7">Employee Information:</font></b></legend><br><br>

<a href="/pro/emp_list_emp.php"><button class="button button1"><b>List of employees</b></button></a><br>
<a href="/pro/emp_remun_emp.php"><button class="button button2"><b>Remuneration Details of employees</b></button></a><br>
<a href="/pro/emp_staff_det.php"><button class="button button3"><b>Staff details</b></button></a><br>
<br><br><br>


<a href="#" class="previous">&laquo; Back to Menu</a>

</body>

</html>