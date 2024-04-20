<head>
<style>
/* Style the header with a grey background and some padding */
.header {
  overflow: hidden;
  background-color: #787276;
  padding: 20px 10px;
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
/*.header a.logo {
  font-size: 25px;
  font-weight: bold;
}*/
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
.logo img{
	width: 50px;
	float: left;
	height: auto;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
@import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");
/* This pen */
body {
  font-family: "sans-serif";
  font-size: 16px;
  color: #ffffff;
  text-rendering: optimizeLegibility;
  font-weight: initial;
}

.dark {
  background: #110f16;
}

.light {
  background: #f3f5f7;
}

a, a:hover {
  text-decoration: none;
  transition: color 0.3s ease-in-out;
}

#pageHeaderTitle {
  margin: 2rem 0;
  text-transform: uppercase;
  text-align: center;
  font-size: 2.5rem;
}

/* Cards */
.postcard {
  flex-wrap: wrap;
  display: flex;
  box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
  border-radius: 10px;
  margin: 0 0 2rem 0;
  overflow: hidden;
  position: relative;
  color: #ffffff;
}
.postcard.dark {
  background-color: #18151f;
}
.postcard.light {
  background-color: #e1e5ea;
}
.postcard .t-dark {
  color: #18151f;
}
.postcard a {
  color: inherit;
}
.postcard h1, .postcard .h1 {
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
}
.postcard .small {
  font-size: 80%;
}
.postcard .postcard__title {
  font-size: 1.75rem;
}
.postcard .postcard__img {
  max-height: 180px;
  width: 100%;
  object-fit: cover;
  position: relative;
}
.postcard .postcard__img_link {
  display: contents;
}
.postcard .postcard__bar {
  width: 50px;
  height: 10px;
  margin: 10px 0;
  border-radius: 5px;
  background-color: #424242;
  transition: width 0.2s ease;
}
.postcard .postcard__text {
  padding: 1.5rem;
  position: relative;
  display: flex;
  flex-direction: column;
}
.postcard .postcard__preview-txt {
  overflow: hidden;
  text-overflow: ellipsis;
  text-align: justify;
  height: 100%;
}
.postcard .postcard__tagbox {
  display: flex;
  flex-flow: row wrap;
  font-size: 14px;
  margin: 20px 0 0 0;
  padding: 0;
  justify-content: center;
}
.postcard .postcard__tagbox .tag__item {
  display: inline-block;
  background: rgba(83, 83, 83, 0.4);
  border-radius: 3px;
  padding: 2.5px 10px;
  margin: 0 5px 5px 0;
  cursor: default;
  user-select: none;
  transition: background-color 0.3s;
}
.postcard .postcard__tagbox .tag__item:hover {
  background: rgba(83, 83, 83, 0.8);
}
.postcard:before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-image: linear-gradient(-70deg, #424242, transparent 50%);
  opacity: 1;
  border-radius: 10px;
}
.postcard:hover .postcard__bar {
  width: 100px;
}

@media screen and (min-width: 769px) {
  .postcard {
    flex-wrap: inherit;
  }
  .postcard .postcard__title {
    font-size: 2rem;
  }
  .postcard .postcard__tagbox {
    justify-content: start;
  }
  .postcard .postcard__img {
    max-width: 300px;
    max-height: 100%;
    transition: transform 0.3s ease;
  }
  .postcard .postcard__text {
    padding: 3rem;
    width: 100%;
  }
  .postcard .media.postcard__text:before {
    content: "";
    position: absolute;
    display: block;
    background: #18151f;
    top: -20%;
    height: 130%;
    width: 55px;
  }
  .postcard:hover .postcard__img {
    transform: scale(1.1);
  }
  .postcard:nth-child(2n+1) {
    flex-direction: row;
  }
  .postcard:nth-child(2n+0) {
    flex-direction: row-reverse;
  }
  .postcard:nth-child(2n+1) .postcard__text::before {
    left: -12px !important;
    transform: rotate(4deg);
  }
  .postcard:nth-child(2n+0) .postcard__text::before {
    right: -12px !important;
    transform: rotate(-4deg);
  }
}
@media screen and (min-width: 1024px) {
  .postcard__text {
    padding: 2rem 3.5rem;
  }

  .postcard__text:before {
    content: "";
    position: absolute;
    display: block;
    top: -20%;
    height: 130%;
    width: 55px;
  }

  .postcard.dark .postcard__text:before {
    background: #18151f;
  }

  .postcard.light .postcard__text:before {
    background: #e1e5ea;
  }
}
/* COLORS */
.postcard .postcard__tagbox .green.play:hover {
  background: #79dd09;
  color: black;
}

.green .postcard__title:hover {
  color: #79dd09;
}

.green .postcard__bar {
  background-color: #79dd09;
}

.green::before {
  background-image: linear-gradient(-30deg, rgba(121, 221, 9, 0.1), transparent 50%);
}

.green:nth-child(2n)::before {
  background-image: linear-gradient(30deg, rgba(121, 221, 9, 0.1), transparent 50%);
}

.postcard .postcard__tagbox .blue.play:hover {
  background: #0076bd;
}

.blue .postcard__title:hover {
  color: #0076bd;
}

.blue .postcard__bar {
  background-color: #0076bd;
}

.blue::before {
  background-image: linear-gradient(-30deg, rgba(0, 118, 189, 0.1), transparent 50%);
}

.blue:nth-child(2n)::before {
  background-image: linear-gradient(30deg, rgba(0, 118, 189, 0.1), transparent 50%);
}

.postcard .postcard__tagbox .red.play:hover {
  background: #bd150b;
}

.red .postcard__title:hover {
  color: #bd150b;
}

.red .postcard__bar {
  background-color: #bd150b;
}

.red::before {
  background-image: linear-gradient(-30deg, rgba(189, 21, 11, 0.1), transparent 50%);
}

.red:nth-child(2n)::before {
  background-image: linear-gradient(30deg, rgba(189, 21, 11, 0.1), transparent 50%);
}

.postcard .postcard__tagbox .yellow.play:hover {
  background: #bdbb49;
  color: black;
}

.yellow .postcard__title:hover {
  color: #bdbb49;
}

.yellow .postcard__bar {
  background-color: #bdbb49;
}

.yellow::before {
  background-image: linear-gradient(-30deg, rgba(189, 187, 73, 0.1), transparent 50%);
}

.yellow:nth-child(2n)::before {
  background-image: linear-gradient(30deg, rgba(189, 187, 73, 0.1), transparent 50%);
}

@media screen and (min-width: 769px) {
  .green::before {
    background-image: linear-gradient(-80deg, rgba(121, 221, 9, 0.1), transparent 50%);
  }

  .green:nth-child(2n)::before {
    background-image: linear-gradient(80deg, rgba(121, 221, 9, 0.1), transparent 50%);
  }

  .blue::before {
    background-image: linear-gradient(-80deg, rgba(0, 118, 189, 0.1), transparent 50%);
  }

  .blue:nth-child(2n)::before {
    background-image: linear-gradient(80deg, rgba(0, 118, 189, 0.1), transparent 50%);
  }

  .red::before {
    background-image: linear-gradient(-80deg, rgba(189, 21, 11, 0.1), transparent 50%);
  }

  .red:nth-child(2n)::before {
    background-image: linear-gradient(80deg, rgba(189, 21, 11, 0.1), transparent 50%);
  }

  .yellow::before {
    background-image: linear-gradient(-80deg, rgba(189, 187, 73, 0.1), transparent 50%);
  }

  .yellow:nth-child(2n)::before {
    background-image: linear-gradient(80deg, rgba(189, 187, 73, 0.1), transparent 50%);
  }
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
<title>DAMS</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
input.read-more-state {
    display: none;
}

p.read-more-target {
    font-size: 0;
    max-height: 0;
    opacity: 0;
    transition: .25s ease;
}

input.read-more-state:checked ~ div.read-more-wrap p.read-more-target {
    font-size: inherit;
    max-height: 999em;
    opacity: 1;
}

input.read-more-state ~ label.read-more-trigger:before {
    content: 'Read more';
}

input.read-more-state:checked ~ label.read-more-trigger:before {
    content: 'Read less';
}

label.read-more-trigger {
    cursor: pointer;
    display: inline-block;
}

</style>
</head>
/*---------------------------css khtm-------------------------------*/
<body>
	<header>
	<div class="Wrapper">
<div class="logo">
<img src="logo.jpg" alt="">
		</div>
		<ul class="nav-area">
			<li><a href="#">Home</a></li>
			<li><a href="bookingpg.php">Book Now</a></li>
			<li><a href="explore.php">Explore</a></li>
			<li><a href="whyus.php">Why us?</a></li>
			<li><a href="frontend/log.php">logout</a></li>
		</ul>
	</div>
<section class="dark">
	<div class="container py-4">
		<h1 class="h1 text-center" id="pageHeaderTitle">Dams </h1>

		<article class="postcard dark blue">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="dams/khadak.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="#"><b>Khadakwasla Dam</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Khadakwasla Bridge, Kudje Khadakwasla Link Rd, Khadakwasla,Maharashtra 411024
					</time>
				</div>
				<div class="postcard__bar"></div>

				<div class="postcard__preview-txt"><p>Khadakwasla Dam is a dam on the Mutha River 21 km (13 mi) from the centre of the city of Pune in Maharashtra, India.The dam created a reservoir known as Khadakwasla Lake which is the main source of water for Pune and its suburbs.
In the vicinity of Khadakwasla Dam is the National Defence Academy (NDA), the Defence Institute of Advanced Technology (DIAT), the College of Military Engineering, Pune (CME, Dapodi) and Central Water and Power Research Station (CWPRS). A few kilometres to the south lies Sinhagad Fort; the twin dams of Panshet and Varasgaon, which mainly supply water for irrigation but also feed into Khadakwasla Lake, lie just 8 km (5.0 mi) due west of the backwaters of Khadakwasla Lake.<br>
<span id="dots">...</span><span id="more">

◽Location: Near Sinhagad Fort, Pune India<br>

◽Coordinates 18°26′30″N 73°46′5″E<br>

◽Entry Fee : No entry fee<br>

◽Timings : Sunrise-Sunset(6am-6pm)<br>

◽Time Required : 1-2 hour<br>

◽If one desires to spend a couple more days close to nature, they can opt to stay at one of the resorts or hotels near Khadakwasla Dam.<br>

◽Things to do at Khadakwasla Dam-( Having a picnic with family,Watching the sunrise/sunset,Enjoying local snacks, Exploring the landscape)<br>

</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>
<a href="TRAVELAGENCY.php"><input type="button" value="Book Vehicle"></a>
<a href=""><input type="button" value="Gallery"></a>
<script>
function myFunction() {
var dots = document.getElementById("dots");
var moreText = document.getElementById("more");
var btnText = document.getElementById("myBtn");

if (dots.style.display === "none") {
 dots.style.display = "inline";
btnText.innerHTML = "Read more";
moreText.style.display = "none";
} else {
 dots.style.display = "none";
btnText.innerHTML = "Read less";
moreText.style.display = "inline";
 }
}
</script>				


					</li>
				</ul>
			</div>
		</article>
		<article class="postcard dark red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="dams/mulshi1.jpg" alt="Image Title" />	
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="#"><b>Mulshi Dam</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>GGP8+R9M,Valane, Maharashtra 412108
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>Mulshi is the name of a major dam on the Mula river in India. It is located in the Mulshi taluka administrative division of the Pune district of Maharashtra state.Water from the dam is used for irrigation as well as for producing electricity at the Bhira hydroelectric power plant, operated by Tata Power. The station operates six 25MW Pelton turbines established in 1927 and one 150MW Pumped Storage Unit. Water from this reservoir located in Krishna river basin is diverted to the Bhira power house for generating Hydro electricity.
In 1920–21, during the construction of the dam and power station, Pandurang Mahadev Bapat led Mulshi Satyagrah, a movement to represent farmers whose land had been taken to build the project. He was dubbed Senapati (commander) in recognition of his leadership.<br>
<span id="dots1">...</span><span id="more1">

◽Location : Mulshi Dam in Maharashtra<br>

◽Coordinates : 18.5440654°N •73.4649509°E<br>

◽Entry type : Free<br>

◽distance : 73.2 km from Pune.<br>
 
◽Timings : 09:00 am to 06:00 pm.<br>

◽Plan Your Family One Day Outing.<br>

◽Places to Eat near Mulshi Dam : Available<br>

◽For emergency help, you may approach the locals in the nearby villages.<br>
 
◽The area is perfect for hikers,trekkers,photographers, nature lovers, and tranquillity seekers.<br>

</span></p>
<button onclick="myFunction1()" id="myBtn1">Read more</button>
<a href="TRAVELAGENCY.php"><input type="button" value="Book Vehicle"></a>
<a href=""><input type="button" value="Gallery"></a>
<script>
function myFunction1() {
var dots = document.getElementById("dots1");
var moreText = document.getElementById("more1");
var btnText = document.getElementById("myBtn1");

if (dots.style.display === "none") {
 dots.style.display = "inline";
btnText.innerHTML = "Read more";
moreText.style.display = "none";
} else {
 dots.style.display = "none";
btnText.innerHTML = "Read less";
moreText.style.display = "inline";
 }
}
</script>				


			</li>
				</ul>
			</div>
		</article>
		<article class="postcard dark green">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="dams/panshet.jpg" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="#"><b>Panshet Dam</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i> CJ4V+J8X, Kondhur,Maharashtra 412107
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>Panshet Dam, also called Tanajisagar Dam, is a dam on the Ambi river, a tributary of the Mutha River, about 50 km (31 mi) southwest of the city of Pune in western India.The dam was constructed in late 1950s for irrigation and, along with three other dams nearby, Varasgaon, Temghar and Khadakwasla, it supplies drinking water to Pune.<br>
<span id="dots2">...</span><span id="more2">

◽Location : Velhe Pune District, Maharashtra, India.<br>

◽Coordinates : 18°23′15″N 73°36′46″E.<br>

◽Distance : 50 km from Pune.<br>

◽Entry type:Paid<br>

◽Entry Details :<br>
➡Weekdays–Kids – 170 INR per head & Adults – 250 INR per head.<br> 

➡Weekends – Kids – 230 INR per head & Adults – 300 INR per head.<br>

◽Timings : 10am-6pm<br>

◽Best Time To Visit Panshet Dam : Either during monsoons or early winters.<br> 

◽Places to Eat near Panshet Dam : Available<br>

◽Places to Stay near Panshet : Available<br>

◽Spend a day by the lake on a picnic with the family.<br>

◽Enjoy a bonfire by the lake with a barbecue to go.<br>

</span></p>
<button onclick="myFunction2()" id="myBtn2">Read more</button>
<a href="TRAVELAGENCY.php"><input type="button" value="Book Vehicle"></a>
<a href=""><input type="button" value="Gallery"></a>
<script>
function myFunction2() {
var dots = document.getElementById("dots2");
var moreText = document.getElementById("more2");
var btnText = document.getElementById("myBtn2");

if (dots.style.display === "none") {
 dots.style.display = "inline";
btnText.innerHTML = "Read more";
moreText.style.display = "none";
} else {
 dots.style.display = "none";
btnText.innerHTML = "Read less";
moreText.style.display = "inline";
 }
}
</script>
	
				</li>
				</ul>
			</div>
		</article>
		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="dams/kasarsai1.jpg" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="#"><b>Kasarsai Dam</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>JMF6+FW6, Kusgaon P.m., Maharashtra 410506
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>Kasarsai is in Mulshi taluka of Pune District in the state of Maharashtra, India.Talukas surrounding Kasarsai are Karjat taluka, Talegaon Dabhade Taluka, Mawal taluka and by Khalapur taluka. Districts closest to the kasarsai are Raigad district, Thane district, Mumbai City district and Mumbai Suburban district. Nearest railway stations around kasarsai are Vadgaon railway station, Begdewadi railway station, Lonavala railway station, Talegaon railway station and Kamshet railway station<br>
<span id="dots3">...</span><span id="more3">
 
◽Located : 28 km away from Pune,<br>

◽very close to the Hinjewadi IT Park.<br>

◽Timings : 10am-6pm<br>

◽Other Activities :Boating options are good here,Speed boat and Paddle boat is available here.<br>

◽Boating charges : 70rs per head.<br>

◽Visit during evenings to witness a magnificent sunset.<br>

</span></p>
<button onclick="myFunction3()" id="myBtn3">Read more</button>
<a href="TRAVELAGENCY.php"><input type="button" value="Book Vehicle"></a>
<a href=""><input type="button" value="Gallery"></a>
<script>
function myFunction3() {
var dots = document.getElementById("dots3");
var moreText = document.getElementById("more3");
var btnText = document.getElementById("myBtn3");

if (dots.style.display === "none") {
 dots.style.display = "inline";
btnText.innerHTML = "Read more";
moreText.style.display = "none";
} else {
 dots.style.display = "none";
btnText.innerHTML = "Read less";
moreText.style.display = "inline";
 }
}
</script>
	
					</li>
				</ul>
			</div>
		</article>
	</div>
		<article class="postcard dark red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="dams/pavana1.jpg" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="#"><b>Pavana Dam</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Thakursai, Shevati, Maharashtra 410406
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>Pavana Lake, also known as Pavana Dam Reservoir and Pawna Lake, is a reservoir turned artificial lake in the Indian state of Maharashtra, formed by the Pavana Dam across the Pavana River in Pune district. The reservoir is 25 km from Lonavala and is increasingly getting popular as picnic and camping site for visitors from Pune and Mumbai.<br>
<span id="dots4">...</span><span id="more4">

◽Location : Maval taluka, Pune district, Maharashtra, India<br>

◽Coordinates : 18°40′30″N 73°29′10″E<br>

◽Timings : 10:00 to 11:00pm.<br>

◽10 Restaurants within 10 km.<br>

◽12 Attractions within 10 km.<br>

◽Tent Stay, Snacks,BBQ,Dinner,Breakfast.<br>

◽Games, Music, Campfire<br>

◽Provies best Service<br>

◽Budget : 800-900/-<br>

◽This side of the lake is perfect for scenic views of mountains and sunsets.<br> 

◽Capture the best sunset.<br>



</span></p>
<button onclick="myFunction4()" id="myBtn4">Read more</button>
<a href="TRAVELAGENCY.php"><input type="button" value="Book Vehicle"></a>
<a href=""><input type="button" value="Gallery"></a>
<script>
function myFunction4() {
var dots = document.getElementById("dots4");
var moreText = document.getElementById("more4");
var btnText = document.getElementById("myBtn4");

if (dots.style.display === "none") {
 dots.style.display = "inline";
btnText.innerHTML = "Read more";
moreText.style.display = "none";
} else {
 dots.style.display = "none";
btnText.innerHTML = "Read less";
moreText.style.display = "inline";
 }
}
</script>
		
					</li>
				</ul>
			</div>
		</article>

	</div>
</section>
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

<!------- End Footer --------->
<div class="clearfix"></div>
</div>
<?php
include "Connection.php";

?>
