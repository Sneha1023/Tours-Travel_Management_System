<html>
<head>
<title>
</title>
<style>
.s {position:absolute;
top:8px;
right:16px;
font-size:18px;
float:right;}
/* headding */
.seven h1 {
text-align: center;
    font-size:30px; font-weight:300; color:#FFFFFF; letter-spacing:1px;
    text-transform: uppercase;

    display: grid;
    grid-template-columns: 1fr max-content 1fr;
    grid-template-rows: 27px 0;
    grid-gap: 20px;
    align-items: center;
}

.seven h1:after,.seven h1:before {
    content: " ";
    display: block;
    border-bottom: 1px solid #c50000;
    border-top: 1px solid #c50000;
    height: 5px;
  background-color:#f8f8f8;
}
.seven span {
  margin-top: 40px;
  text-transform: none;
  font-size:25px;
  font-weight: normal;
  font-style: ; font-family: "Playfair Display","Bookman",serif;
  color:#ffffff; letter-spacing:-0.005em; word-spacing:1px;
  letter-spacing:none;
}
/* Design */
*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  background-image: url("pune2.jpg"); 
  background-repeat:no-repeat;
  background-size:cover;TRAVEL AGENCY
}

body {
  color: #272727;
  font-family: 'Quicksand', serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;

}
.logo{
position:absolute;left:0;top:0;
color:#FFFFFF;
border:5px solid white;
border-radius:60%;
padding:5px;

}
.main{
 
  
}



img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

.btn {
  color: #000000;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 100%;
  cursor: pointer;
  border: 4px solid rgba(255, 255, 255, 0.2);
  background: transparent;
}

.btn:hover {
  background-color: rgba(255, 255, 255, 0.12);
}
.nav-area{
	float: right;
	list-style: none;
	margin-top: 4px;
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
.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: #d1aca5;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  background-color: #d1aca5;
  background-size:cover;
}

.card_title {
  color: #000000;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #000000;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
.made_by{
  font-weight: 400;
  font-size: 13px;
  margin-top: 35px;
  text-align: center;
}
/*********** Start Footer *********/
 .footer{ opacity:0.9; width:100%; background:#000000; float:left; padding:20px 0px; margin-top:50px;}
.footer-parts{ width:350px; float:left; padding:0px 25px;}
.footer-parts-h4{ color:#FFF; padding:10px 0px; font-size:18px;}
.footer-parts-p{ color:#FFF; font-size:14px; padding:5px 0px; line-height:26px; text-align:justify;}
.footer-parts ul{ list-style:none; padding:0px 0px 0px 100px;}
.footer-parts ul li{ padding:0px; text-transform:none; margin-top:-10px; margin-bottom:20px;}
.footer-parts ul li a{ color:#FFFFFF; padding:6px 0px; text-decoration:none;}
.footer-parts ul li a:hover{ color:#BBB;}
.form{ width:240px; border-radius:2px; padding:8px 10px; color:#000; font-size:16px; margin:10px auto; border:none; }
.subscribe{ padding:8px 15px; background:#ffd200; border-radius:2px; cursor:pointer; color:#000;
font-size:16px; margin-left:-6px; border:none;}
.subscribe:hover{background:#F0B604;}

.social-links{ list-style:none; margin:10px 0px;}
.social-links ul{ list-style:none; padding:0px 0px 0px 0px;}
.social-links ul li{ padding:40px 10px 10px; text-transform:none; float:left; margin-top:-10px; margin-bottom:20px;}
.social-links ul li a{ color:#FFF; padding:6px 15px 6px 0px; font-size:20px; text-decoration:none;}
.social-links ul li a:hover{ color:#BBB;}
/*********** End Footer *********/


</style>
</head>
<body>
<div class="logo">
<h1 style="color:white;">Trav-U-ler </h1>
</div>
<header>
	<div class="Wrapper">
		<ul class="nav-area">
			<li><a href="#">Home</a></li>
			<li><a href="bookingpg.php">Book Now</a></li>
			<li><a href="explore.php">Explore</a></li>
			<li><a href="whyus.php">Why us?</a></li>
			<li><a href="homepa">logout</a></li>
		</ul>
<div class="logo">
<h1>Trav-U-ler</h1>
</div>
	</div>
<div class="main">
  <div class="seven"><br><br><br>
  <h1>TRAVEL AGENCY</h1><br>
	<center><span><b>पुण्यात कुठे पण</b></span></center>
  </div><br><br><br>
  <ul class="cards">
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="mttpcrop.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">My Traveltrip Pune</h2>
          <p class="card_text">We provide best tour package from Pune.Services-Car Rentals(5 seater)
Hatchback Car rates starting 9 Rs/Km & Sedan cars starting from 9.50 Rs /Km, Innova 13 Rs/km, AC 12 seater 19Rs/Km, 17 Seater 20 Rs/KM, Non ac 12/17 rs starting from 17Rs /KM 300 Rs driver charges extra
My Traveltrip Pune offers reliable and affordable taxi services in Pune.Book now!Enjoy a comfortable ride with our courteous drives and top-notch vehicles with 24/7 service.</p><br>
           <a href="../frontend/gaadibook.php"><button class="btn card_btn">Book Vehicle</button><br></a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="sktcrop.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">SK Travels-Bus and Car rentals</h2>
          <p class="card_text">Mini bus service available with 17 seats,20 seats 32 seats,all types of seats available ,drop service available,outstation services avaialable.we provide day trips or night camping trip also,all types of safety measures will be taken.Sk Travels and tours  offers reliable and affordable taxi services in Pune.
Book now!Enjoy a comfortable ride with our courteous drives and top-notch vehicles with 24/7 service.</p><br>
          <a href="../frontend/gaadibook.php"><button class="btn card_btn">Book Vehicle</button></a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="shivnericrop.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Shivneri Tours & travels</h2><br>
          <p class="card_text">Shivneri Travels provide Pune/pimpri chinchwad drop from anywhere customer wants to.Also we provide cabs,mini buses rental services too.Shivneri Tours & travels offers reliable and affordable taxi services in Pune.Book now!Enjoy a comfortable ride with our courteous drives and top-notch vehicles with 24/7 service. For any contat details visit our website.</p><br><br>
          <a href="../frontend/gaadibook.php"><button class="btn card_btn"> Book Vehicle</button></a>
        </div>
      </div>
    </li>
  </ul>
</div>

<!------- Start Footer --------->
<div class="footer">
	<div class="footer-parts">
    	<div class="footer-parts-h4">Trav-U-Ler</div>
        <div class="footer-parts-p">Trav-U-Ler is mainly to provide you with the basic information of various destination you want to visit in Pune and even online transport booking services if required.  There is no lack of contact between you and the travel agent, you can directly contact them after the vehicle booking is done. All the information is provided with the petrol and food availability too. </div>

    </div>
    <div class="footer-parts">
    	<div style="padding-left:100px;">
        	<div class="footer-parts-h4"><u>Our Links</u></div>
        </div>
        <ul>
        	<li><a href="#!">About Us</a></li>
            <li><a href="#!">Contact Us</a></li>
            <li><a href="#!">Terms &amp; Conditions</a></li>
            <li><a href="#!">Privacy Policy</a></li>
        </ul>
    </div>
    <div class="footer-parts">
    	<div class="footer-parts-h4">Subscribe &amp; Social Links</div>
        <form action="" method="post">
        	<input type="text" class="form" placeholder="example@mail.com">
            <button type="submit" name="submit" class="subscribe">Subscribe</button>
        </form>
        
        <div class="social-links">
        	<ul>
            	<li><a href="#!"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#!"><i class="fa fa-instagram"></i></a></li>
               
                <li><a href="#!"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="footer-bottom">
	<div class="white">; <script language="javascript" type="text/javascript">document.write(new Date().getFullYear());</script>. </div>
</div>
<!------- End Footer --------->

<?php
include "Connection.php";

?>
