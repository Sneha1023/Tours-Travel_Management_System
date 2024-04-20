	<!DOCTYPE html>
<html>

<head>

<title>Trav-U-ler</title>
<style>
h1{text-align:center;
}
h2{text-align:center;
}
h3{text-align:center;
}
s{
	background-image:url("explore.jpg");
	background-repeat:no-repeat;
	height: 100vh;
	background-size:cover;
	background-position: center center;
	position: relative;
}

body{background:  linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("pune1.jpg");
background-repeat:no-repeat;
height: 100vh;
	background-size:cover;
	background-position: center center;
	position: relative;
}
.logo{
position:absolute;left:2%;top:2%;
background-image:url("khadak.jpg");
background-size : cover;
color:#000;
border:1px solid black;
padding:5px;
}
.s {position:absolute;
top:8px;
right:16px;
font-size:18px;
float:right;}



.content-part-2-h3{text-align:center;}
fieldset{background-color:lavenderblush;}
*{
 margin: 0;
 padding: 0;
 font-family: 'Roboto',sans-serif;
}
.container{
width: 100%;
height: 100vh;
background-position:center;
background-size:cover;
}
.nav-area{
	float: right;
	list-style: none;
	margin-top: 30px;
}
.nav-area li{
	display: inline-block;
}
.nav-area li a{
	color: #fff;
	text-decoration: none;
	padding: 5px 20px;
	font-family:poppins;
	font-size: 16px;
}
.nav-area li a:hover{
	background: #fff;
	color: #333;
}
.logo{
  width:100px;
  cursor:pointer;
  
}
.menu-icon{
 width:30px;}
.card{width:250px;
	height:280px;
	display:inline-block;
        border-radius:10px;
	padding:15px 25px;
	box-sizing: border-box;
	/*cursor:pointer;*/
        margin:10px 15px;
	background-color:lavenderblush;
	background-position:center;
        background-size:cover;
	transition:transform 0.7;}
.card .button{
	cursor:pointer;
}



</style>
</head>

<body><center>

<!--short content-->
<div id="content">
<header>
<div class="logo">
<h1 style="color:BLACK;">Trav-U-ler </h1>
</div>

<div class="s">


<ul class="nav-area">
			<li><a href="homepage.php">Home</a></li>
			<li><a href="bookingpg.php">Book Now</a></li>
			<li><a href="explore.php">Explore</a></li>
			<li><a href="whyus.php">Why us?</a></li>
			<li><a href="log.php">Logout</a></li>
		</ul>

</div>
</header><br><br>
<br>
<br>
<div class="Tagline">
<div class="welcome-text">
		<center><h1 style="color:#ffffff">NEVER STOP EXPLORING</h1></center><br>
		<center><h2 style="color:#ffffff">Connect with other travellers and exploring</h2></center>
</div>
<br>
<br>
<br>
<br>
<br>

<div class="row">
<div class="card card1">
<h3>Forts</h3>
<p>Pune city that has a large number of forts around it. Many of these were built by Chhatrapati Shivaji Maharaj,the great Maratha Warriors King.</p>
<button type="button" class="button"><a href="pages/fort.php" class="text-uppercase">Explore</a></button>
</div>

<div class="card card2">
<h3>Dams</h3>
<p>Pune may not be near the sea,but its vicinity to rivers,dams,and backwaters makes up
				for that.Amidts the lush greenery of the Western Ghats and the Sahyadris,these dams and their backwaters
				make for an amazing setting,especially during the monsoon season.</p>
<button type="button" class="button"><a href="pages/dams.php" class="text-uppercase">Explore</a></button>
</div>

<div class="card card3">
<h3>Temples</h3>
<p>The Temples in Pune are among the most ancient temples you will find in the city as it was built under the Peshwa rule.It is a structure designed to bring human beings and goals together according to hindu faith.</p>
<button type="button" class="button"><a href="pages/temples.php" class="text-uppercase">Explore</a></button>
</div>

<div class="card card4">
<h3>Museum</h3>
<p>Here are some of the best museums of Pune, Where you can discover all the artistic, cultural, historical, traditional and objects of scientific interest.A great source of knowledge makes us familiar with our history, culture, civilization, religion, art, architecture of our country.</p>
<button type="button" class="button"><a href="pages/Museum.php" class="text-uppercase">Explore</a></button>
</div>

<div class="card card5">
<h3>Gardens</h3>
<p>The city receives a good deal of rainfall every monsoon, thereby creating favorable grounds for the 
			green patches to flourish.Almost every garden in the city is maintained and preserved by the local municipality.</p>
<button type="button" class="button"><a href="pages/gardens.php" class="text-uppercase">Explore</a></button>
</div>
			
</body>
</html>
<?php
include "Connection.php";

?>
