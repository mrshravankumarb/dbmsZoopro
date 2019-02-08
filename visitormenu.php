<?php
?>
<html>
<head>
<style>
#mySidenav a {
    position: absolute;
    left: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 16px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    left: 0;
}

#about {
    top: 20px;
    background-color: #4CAF50;
}

#tariff {
    top: 80px;
    background-color: #2196F3;
}



#gallery {
    top: 140px;
    background-color: #555
}

#map {
    top: 200px;
    background-color: #554
}

#contact {
    top: 260px;
    background-color: #554
}

* {
    box-sizing: border-box;
}

body {
    background-color: #474e5d;
    font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    background-color: white;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
}

/* Container around content */
.container {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
}

/* The circles on the timeline */
.container::after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -17px;
    background-color: white;
    border: 4px solid #FF9F55;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
}

/* Place the container to the left */
.left {
    left: 0;
}

/* Place the container to the right */
.right {
    left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    right: 30px;
    border: medium solid white;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 30px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
    left: -16px;
}

/* The actual content */
.content {
    padding: 20px 30px;
    background-color: white;
    position: relative;
    border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media all and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
    left: 31px;
  }
  
  /* Full-width containers */
  .container {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
    left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
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
<font color=YELLOW size=7><center><BR><BR>WELCOME TO RAJARAJESHWARI ZOO AND WILDLIFE SANTUARY</center></font><br><br><br> 

<body background="C:\Users\User\Desktop\Front end\textures\wallpaper-gauze-green-texture-background-wallpapers-textures.jpg">
<font face=Goudy Stout size=7 color=blue><center>TIMELINE</center></font>
<div class="timeline">
  <div class="container left">
    <div class="content">
      <h2>1926</h2>
      <p>Spencer Penrose recieves a bear as a gift, sparking his passion for collecting animals.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>1937</h2>
      <p>Penrose begins relocating animals from his ranch and the Broadmoor Hotel to present site of RR Zoo.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>1942</h2>
      <p>Penrose purchases a carousel for the Zoo at Chicago World's Fair, which is still in operation today.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>1956</h2>
      <p>Monkey and feline houses were contructed. Giraffe building is complete.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>1970</h2>
      <p>Birds and reptile house is built. Aquatics building is also completed.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>1997</h2>
      <p>A major flood causes primate damages. Zoo was closed for first time in its history.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2004</h2>
      <p>Primates World, housing the great apes, opens. Birds of Prey is constructed.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2007</h2>
      <p>Master plan is developed for growth and modernization of the Zoo.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2017</h2>
      <p>Into Guinness World Record for having most valuable and highest endangered species.</p>
    </div>
  </div>

</div>

<div id="mySidenav" class="sidenav">
  <a href="/pro/about.php" id="about">About</a>
  <a href="/pro/tarif.php" id="tariff">Tariff</a>
<a href="#" id="gallery">Gallery</a>
  <a href="#" id="map">Map</a>	
   <a href="#" id="contact">Contact</a>
</div>


<div align="center">
<video style="video-align:center" width="400" height="240" controls >
  <source src="/pro/A SHORT VISIT TO MYSORE ZOO HD 23 Apr 14.mp4" type="video/mp4">
</video>
</div> 




<a href="/pro/firstpage.php" class="previous">&laquo; Back</a>
   
</body>
</html> 
