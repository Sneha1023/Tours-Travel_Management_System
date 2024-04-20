<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Vehicle Booking</title>
  
    <style>
        * {
            margin: 0;
            padding: 0;
		box-sizing:border-box;
        }
          
        body {
            width: 100vw;
            height: 100vh;
        }
        .column {
		float:left;
		width:33.33%;
		padding:5px;
	}
	.row::after {
		content: "";
		clear: both;
		display:table;
		}
        .section {
            width: 100vw;
            height: 45vh;
            background-image:url("bikeblur.jpg");
		background-repeat: no-repeat;
		background-size: cover;
            margin: 15px 5px;
        }
        .one{
	  background-image:url("4wheeler.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		
}
        .three {
            background-image:url("bus.jpg");

		background-repeat: no-repeat;
		background-size: cover;
        }
          
        .nav {
            width: 100vw;
            height: 15vh;
	   
            background: linear-gradient(to right, #1B2845 0%, #4D4855 100%);
            font-size: x-large;
            color: white;
            text-align: center;
            margin: 15px 5px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            place-items: center;
        }
          
        .btn {
            color: black;
            background color:grey;
	    background-size: cover;
            height: 50px;
            width: 130px;
            padding: 2px;
            border: 2px solid black;
            text-decoration: none;
        }

	.text {
            font-size:20px;
            color: black;
            text-align: center;
}
    </style>
</head>
  
<body>
    <div class="nav">
        <a href="#section1" class="btn">car</a>
        <a href="#section2" class="btn">2-Wheeler</a>
        <a href="#section3" class="btn">mini-bus</a>
    </div>
	<div class="row">
		<div class="column">
			<img src="car1.jpg" alt="" style="width:100%">
		</div>
		<div class="column">
			<img src="bikesss.jpg" alt="" style="width:100%">
		</div>
		<div class="column">
			<img src="bus1.jpg" alt="" style="width:100%">
		</div>
	</div>
    <div class="section one" id="section1">
        <div class="text">
		<font size="+4" ><u><b>Car</b></u></font><br>
	5-seater car including driver. Petrol expenses included in package and and food and other expenses of your choice are on your own responsibility. Drivers are friendly and secured and if you have any emergency the contact number of travel agency will be provided to you for your security. Drivers will pick you up and drop you on your given location so you need not worry about the pickup and drop.<br><br>Mostly we are available with Mahindra XUV and Maruti Ertiga for 7 seater vehicle. You can either rent the car or hire a driver and the best part of this is you get everything at your doorstep for pickup at drop.<br> <b>5 Seater:</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>7 Seater:</b><br> Rate per kms:Rs 11 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rate Per Km:Rs 18<br>168kms: Rs 3000 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 168kms: Rs 3696<br> 264kms: Rs 4368 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 264kms: Rs 4368<br>Driver Charges:Rs 250/day &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Driver Charges: Rs 350/day<br> </div>
<center><a href="bookingpg.php"><button class="btn">Book Now</button></a></center>
    </div>
    <div class="section two" id="section2">
        <div class="text">
 <font size="+4"> <u><b>2-Wheeler</b></u> </font><br>
	You can rent a bike or scooty or can hire a driver for this too. Usage of the vehicle is at your own risk  and if any damage occurs extra cost may occur. The prices of bikes and scooties depends on the type of bike and scooty.<br> The vehicle is available for hourly, per day, weekly and monthly basis. Also a valid license is requires to rent a bike and all the precautions such as helmet are supposed to be there all the time, if in caseb any challan comes then you are reponsible to pay that.  
<br><b>Bike</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <b>Scooty</b><br>
Per hour:Rs 100 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Per hour:Rs 120<br>
Per Day:Rs 700 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Per Day:Rs 750<br>
Per week:Rs 2000 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Per week:Rs 2050<br>
Per month:Rs 3500 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Per month:Rs 3700<br></div>
<center><a href="bookingpg.php"><button class="btn">Book Now</button></a></center>
    </div>
    <div class="section three" id="section3">
         <div class="text"> <font size="+4"> <b><u>Mini Bus</u></b></font><br>
	Mini Buses are not for rent, it's only available on booking it with our drivers. The drivers are safe and trusted. You can hire this for 12 seater and 25 seater. These buses can be hired not only for tourism, but also for leisure activities like picnics, field trips, excursions, and formal requirements like corporate events, meetings,weddings and more.<br>
<br>
<b> 12 Seater AC:</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>25 Seater AC:</b><br>
Price per KM:Rs 16/km &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Price per KM:Rs 25/km<br>
Minimum KM: 250km &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Minimum KM: 300km<br>
Driver Charges: Rs 300/day &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Driver Charges: Rs 400/day<br>
<br></div>
<center><a href="bookingpg.php"><button class="btn">Book Now</button></a> </center>

</div>
</body>
  
</html>
