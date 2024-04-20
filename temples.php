<head>
<style>
/* Style the header with a grey background and some padding */
.header {
  overflow: hidden;
  background-color: #787276;
  padding: 20px 10px;
}
.logo{font-size:90%;height:10%;
position:absolute;left:10;top:9;
border:5px solid white;
	border-radius:50%;


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

<title>Temples</title>
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
<body>
<header>
	<div class="Wrapper">
<div class="logo">
<h1 style="color:white;">Trav-U-Ler</h1></div>

		<ul class="nav-area">
			<li><a href="#">Home</a></li>
			<li><a href="bookingpg.php">Book Now</a></li>
			<li><a href="explore.php">Explore</a></li>
			<li><a href="whyus.php">Why us?</a></li>
			<li><a href="homepage.php">logout</a></li>
		</ul>
	</div>
<section class="dark">
	<div class="container py-4">
		<h1 class="h1 text-center" id="pageHeaderTitle">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTemples</h1>

		<article class="postcard dark blue">
			<a class="postcard__img_link" href="#">
				<img class= "postcard__img" src="temples/dp.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="#">Dagdushet Halwai Ganpati</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Ganpati Bhavan,250,chhatrapati Shivaji Maharaj Rd, Mehunpura, Budhwar Peth, Pune-411002
					</time>
				</div>
				<div class="postcard__bar"></div>

				<div class="postcard__preview-txt"><p>The Dagadusheth Halwai Ganapati temple is a Hindu Temple located in Pune and is dedicated to the Hindu god Ganesh. The temple is visited by over hundred thousand pilgrims every year.Devotees of the temple include celebrities and chief ministers of Maharashtra who visit during the annual ten-day Ganeshotsav festival.The main Ganesh idol is insured for sum of ₹10 million (US$130,000). The Temple is 130 years old. It celebrated 125 years of its Ganapati in 2017.<br>
<span id="dots">...</span><span id="more">

◽Location : Pune City<br>

◽Distance(from Pune Railwaystation):<br>

◽TEMPLE SCHEDULE:<br>

➡Daily Temple Timing – 5:00 AM to 10:30 PM (Monday, Wednesday, Thursday, Friday, Saturday, and Sunday)<br>
➡Tuesday Timing – 5:00 AM to 11:00 PM<br>
➡Suprabhatam Aarti – 07:30 AM to 07:45 AM<br>
➡Naivedyam – 01:30 PM to 01:45 PM<br>
➡Madhyana Aarti – 03:00 PM to 03:15 PM<br>
➡Mahamangal Aarti – 08:00 PM to 09:00 PM<br>
➡Shejarti – 10:30 PM to 10:45 PM<br>

◽Food Availability : yes<br>
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
				<img class="iskcon" src="temples/ic.jpg" style="width:30%"/>	

			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="#"><b>Iskcon Temple</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Katraj-Kondhwa Rd, Tilekar Nagar, Kondhwa Budruk, Pune-411048
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>ISKCON New Vedic Cultural Center (NVCC), Sri Sri Radha Vrindavanchandra temple or ISKCON Pune is a Gaudiya Vaishnavism temple situated in Pune, India. The temple is dedicated to Hindu god Radha Krishna and was opened in 2013. It is the largest temple in the city of Pune.<br>The temple complex is built on 6 acres and it took seven years for construction. It took 40 Crore rupees to construct the temple funded by the Iskcon temple in Camp and devotees. The temple was inaugurated by President Pranab Mukherjee in 2013.<br>
<span id="dots1">...</span><span id="more1">
◽List of Iskcon Temples in Pune<br>
1. Camp Pune Iskon Temple<br>

Address – 4, Tarapore Road, Camp, Pune – 411001<br>

Contact –<br>
Phone: +91 8007500175<br>
Email: info@iskconpunecamp.com<br>

Time – 4:30am–1pm, 4:30–8pm, 9–9:10pm<br>

2. ISKCON NVCC Temple Pune Katraj<br>

Address – Survey No, 50, Katraj – Kondhwa Rd, Tilekar Nagar,
Kondhwa Budruk, Pune, Maharashtra 411 048<br>

Contact –<br>
Phone: 084118 45000<br>
Email: iskconnvccpune@gmail.com<br>

Time – 4:30am–1:30pm, 4:30–8:45pm<br>

3. ISKCON Vishal Nagar Pimpri-Chinchwad<br>

Address – Sr. No 189/3A, B, Sector No.29, Bhaktivedanta Swami Marg, Ganesh Nagar, Ravet, Pune, Maharashtra 412101<br>

Contact –<br>
Phone: 08975765947<br>

Time – 4:30 am–1pm, 4:30–9pm<br>

4. Iskcon Temple Uttamnagar, Pune<br>

Address – Near Mutha River, Uttamnagar, Pune 411 023<br>

Contact – Phone: 091195 02050<br>

◽Activities : Dance & Music(such as Bharata Natyam, Kathak, and Odissi),<br>
Fine Arts( decorating ISKCON temples, which helps to visually present the Krishna tradition),<br>
Drama(most of the festivals includes presentations on  Ramayana and Krishna Lila with larger than life puppets, martial arts.)<br>
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
				<img class="alandi" src="temples/alandi1.jpg" width="20%" />

			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="#"><b>Alandi</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>MVGW+QHV, Bhosale Nagar, Alandi Gaon, Maharashtra 412105
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>Alandi (Marathi pronunciation: [aːɭən̪d̪iː]) is a town and a municipal council in the Pune district in the state of Maharashtra, India. The town is popular as a place of pilgrimage and the resting place of the 8th century Marathi saint Sant Dnyaneshwar.<br>Alandi has a long history but gained prominence in the 13th century when Dnyaneshwar (1275–1296) decided to entomb, otherwise known as sanjeevan samadhi, himself in a samadhi, a form of shrine, under the then existing Siddheshwar temple complex in 1296. A temple was built over the Samadhi by Ambekar Deshpande in around 1580–1600. Further additions to the temple were made during the Maratha Empire era by Maratha nobles and the Peshwa.In 1778, Alandi was granted to Mahadji Shinde, the powerful Maratha statesman of the Maratha confederacy at that time, by the Peshwa. For two decades after that, the Shinde family were the main sponsors of various renovations of the temple.<br>

<span id="dots2">...</span><span id="more2">
◽Location : located on the bank of the Indrayani River,<br>
◽Distance : 18.8 km (11.7 mi) from Khed Taluka of Pune District,near the       northern edge of the city of Pune.<br>
◽Alandi has an average elevation of 577 meters (1,893 feet).<br>
◽Dnyaneshwar samadhi : Alandi is a well known place of pilgrimage for
   Hindu Marathi people because of the town's association with   
   Dnyaneshwar.<br>
◽The Ekadashi of the dark half of each month attracts 60–70 thousand 
   pilgrims to the town.<br>
◽Pandharpur vari : Every year, the Paduka (symbolic sandals) of 
  Dnyaneshwar go on a 21-day Palkhi from Alandi to reach Pandharpur on
  Ashadhi Ekadashi(June or July in the Gregorian calendar).<br>
  procession is joined by hundreds of thousand of Varkari devotees for the
  150 km journey. <br>
◽Kartik Festival : The biggest festival in Alandi is held every year on
  Kartika Vadya Ekadashi (the eleventh day of the dark fortnight of the         
  Hindu month of Kartik in the Shalivana Shaka calendar).<br>
◽The festival(yatra) falls close to the day Dnyaneshwar entered
  Samadhi.<br>
◽Indrayani river : Bathing in the Indrayani River has special significance
  for pilgrims to Alandi. <br>

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
				<img class="ramdara" src="temples/ramdara.jpg" width="20%"/>


			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="#"><b>Ramdara Temple</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>C2V8+FXW, Ramdara-Loni Kalbhor Rd, Pune, Maharashtra 412201
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>Ramdara is a temple built near Loni in the 1970s on the ruins of an ancient temple. The main shrine is that of Shiva, but the temple is renowned for the idols of Ram, Lakshman, and Sita. Next to the temple is also an ashram of Shri Devipuri Maharaj also known as Dhundi Baba. The temple also has an impressive Nandi. There is a small pond next to the temple. The temple complex is surrounded by thick vegetation and is home to many different types of birds.<br>
<span id="dots3">...</span><span id="more3">
◽Location : Ramdara-Loni Kalbhor Rd, Pune, Maharashtra, 412201, India<br>
◽Entry fee: Rs.10 per person for Indians,Rs.200 per person for
Foreigners<br>.
◽Suggested duration : 2-3 hours<br>
◽Time : 6:00 am-5:00pm<br>
◽Temple authorities are really strict about closing time.<br>
◽The temple is well-covered by the green hills and visible only when you reach its entrance arch.<br>
◽Temple is famous for the Rama, Laxman and Sita Idols and hence the name Ramdara.<br>
◽The temple is situated amidst a beautiful lake.<br>
◽There is a walkway around the lake to take a stroll or explore.<br>
◽You can bring your own picnic basket and enjoy lunch with family.<br>
◽On your return you can eat dinner at Grand 11 restaurant.<br>

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
				<img class="chaturshingi" src="temples/ct.jpg"width="20%" />

	</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="#"><b>Chaturshingi Temple</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>971, Senapati Bapat Rd,Sheti Mahamandal, Shivaji Co operative housing Society, Ramoshivadi,<br> Gokhalenagar, Pune, Maharashtra 411016
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>The Chattushringi Temple also spelt as Chattushrungi Temple is a Hindu temple in the city of Pune in Maharashtra state of India. The temple is located on the slope of a hill on Senapati Bapat Road. It is said to have been built during the reign of the Maratha kingShivaji. The temple is looked after by Chattushringi Devasthan (Temple) trustees.<br>
Chattushringi (Chattu means four) is a mountain with four peaks. The Chattushringi temple is 90 feet (27 m) high and 125 feet (38 m) wide and is a symbol of power and faith. One has to climb more than 170 steps to reach the shrine of Goddess Chattushringi. In the temple premises there are also temples of Goddess Durga and Lord Ganesh. This includes eight miniature idols of Ashtavinayaka. These small temples are located on the four separate hillocks.<br>
<span id="dots4">...</span><span id="more4">
◽Location : Senapati Bapat Road, Pune<br>
◽Distance : 5.3km from Pune city(15-20min)<br>
◽Festivals : Navratri<br>
◽Creator : Durlabhsheth Pitambardas Mahajan.<br>
◽Temple Schedule:<br>
➡Timing ( Daily )		Start			End<br>
➡ABHISHEK,POOJA,VASTRA	08:15 am		10:00 am<br>
➡MORNING AARTI		10:00 am		10:15 am<br>
➡NAIVAIDYAM			11:00 am		11:30 am<br>
➡EVENING AARTI		08:00 pm		08:10 pm<br>
◽Navratri festival is a festival of nine days & nine nights, & the 10th day is called Vijayadashmi (Dassara).<br>
◽Every year navratri festival held at Chatushrungi temple, which starts at      ashwin shudh pratipadha that is first day called as Ghatsthapana.<br>
◽Shree Chattushringi Devasthan Trust is working on renovating the Temple without compromising the heritage nature and feel of the existing temple.<br>

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
</body>
<?php
include "Connection.php";

?>
