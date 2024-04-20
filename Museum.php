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
Label.read-more-trigger {
    cursor: pointer;
    display: inline-block;
}
}
/*********** Start Footer *********/
.footer{ opacity:0.9; width:100%; background:#000000; float:left; padding:20px 0px; margin-top:-40px;}
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





\*-----cards-----*\
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
			<li><a href="homepage.php">logout</a></li>
		</ul>
	</div>


<section class="dark">
  	<div class="container py-4">
		<h1 class="h1 text-center" id="pageHeaderTitle">MUSEUM</h1>

		<article class="postcard dark blue">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="museums/agakhan.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="#"><b>Aga Khan Palace</b></a></h1>
				
				<div class="postcard__subtitle small">
					<i class="fas fa-calendar-alt mr-2"></i>Pune, Maharashtra, India
				</div>
				<div class="postcard__bar"></div>
			 

				<div class="postcard__preview-txt"><p>At the Aga khan palace in Pune, we can see different objects and documents providing information about life of Mahatma Gandhi
Historically, the palace holds great significance. Mahatma Gandhi, his wife Kasturba Gandhi and his secretary Mahadev Desai were interned in the palace from 9 August 1942 to 6 May 1944, following the launch of Quit India Movement. Kasturba Gandhi and Mahadev Desai died during their captivity period in the palace and have their Samadhis located over there. Mahatma Gandhi and Kasturba Gandhi have their memorials located in the same complex, near Mula river.Legend goes that the Sultan built the palace to provide employment to the famine struck villagers of the surrounding region; so he employed 1000 people, and the palace was constructed in five years. It was built in Rs 12 lakhs. The total area is 13 acres and built up palace covers seven acres, and the rest is a well maintained garden.<br><span id="dots">...</span><span id="more"> 

◽Coordinates	18.5523°N 73.9015°ECoordinates: 18.5523°N 73.9015°E <br>
◽Area	19 acres (77,000 m2)<br>
◽Built	1892<br>
◽Governing body	Gandhi National Memorial Society<br>
◽Aga Khan Palace is located in MaharashtraAga Khan Palace<br>
◽Location of Aga Khan Palace in Maharashtra<br>
◽Timings : 9:00 AM - 5:30 PM<br>
◽Time Required : 3-4 hours<br>
◽Entry Fee : Indians: INR 5,<br>
◽Foreigners: INR 100<br>
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
				<img class="postcard__img" src="museums/lt3.jpg " alt="Image Title" />	
			</a>+
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="#"><b>Lokmanya Tilak Museum</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Geetganga Apartment,Shaniwar Peth,Pune,Maharashtra 4110
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"> The Lokmanya Tilak Museum, located in Kesari Wada, Narayan Peth, was inaugurated in January 1999 by Mrs Sonia Gandhi.
Bal Gangadhar Tilak is often called the Father of the Indian Unrest, given the active role he played in the Indian freedom struggle as a teacher, lawyer, and activist. He took forward the concept of Swarajya, or 'self-rule'. The title 'Lokmanya' was conferred upon him later, and it means 'accepted by the people'. He is often credited for popularising of the Ganesh Chaturthi festival in Maharashtra. In 1881, Tilak founded Kesari, a Marathi newspaper, which became the voice for the freedom struggle. He also ran Maharatta, an English newspaper, and both papers are alive today.
<span id="dots2">...</span><span id="more2">
The Lokmanya Tilak Museum, located in Kesari Wada, Narayan Peth, was inaugurated in January 1999 by Mrs Sonia Gandhi. The Wada earlier belonged to Sayajirao Gaikwad, and hence it was known as Gaikwad Wada. When Tilak purchased it to begin work on Kesari, his first newspaper, it began to be known as Kesari Wada. The museum was conceived, and is managed, jointly by The Kesari Maharatta Trust and the Tilak Family. It shares space with the Kesari-Maratha Library, The Lokmanya Sabhagriha (Auditorium), and a couple of offices managed by the Trust.<br>
<span id="dots1">...</span><span id="more1">
◽Visiting Hours:
Open on all days of the week, the timings are 10 AM to 1 PM and 3PM to 6PM.<br>

◽Closed on:
Public Holidays<br>

◽Entry Fees:
Free<br>

◽How To Reach:
Kesari Wada, the famous historical monument houses the Tilak Museum on the second floor. Kesari Wada, also known as Gaikwad Wada stands in the Narayan Peth area of Pune. The site is just a couple of km away from the Deccan Bus Stop and 5 km from the Swargate Station. The nearby landmarks are the Omkareshwar Temple and the Modi Ganesh Temple.<br>
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
				<img class="postcard__img" src="museums/punet.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="#"><b>Pune Tribal Museum</b></a></h1>
				<div class="postcard__subtitle small">
					<i class="fas fa-calendar-alt mr-2"></i> Tribal Cultural Museum,

            Tribal research & Training Institute,

            28, Queens Garden, Pune 411001
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>Located on the Queens road, near the pune railway station, Tribal Museum is a place you must visit, to get an idea of the tribal life of Maharashtra. Dedicated to the various tribal communities, depicting their culture and belief systems through their lifestyle, Tribal Museum presents a great opportunity to every visitor. It gives tourists a chance to have a deeper understanding of the world alien to us. The museum offers a detailed glimpse, especially into the lives of those communities, residing in the Sahyadri and Gondhavana regions of Maharashtra.<br>
Here at the museum, you will find an excellent and detailed collection of photographs and various artifacts, depicting the culture, traditions and the lifestyle of indigenous tribal community residing in this state. The excellent compilation at the Tribal Museum is a result of the ardent work of museum authorities. Through the documentation done here, you can see various items, which have been part of tribal living. It also offers with a detailed insight into the intricacies of their lives. That is the reason, why this museum is often frequented by many researchers and analyst, looking for a better understanding of tribal community of the state.<br>
<span id="dots3">...</span><span id="more3">
◽MUSEUM ENTRY FEE :
Rs. 5/- per child<br>
◽Rs. 10.- per Adult<br>
◽Rs. 50/- Foreign Students<br>
◽Rs. 100/- Foreign child<br>
◽Rs. 200/- Foreigner Adult<br>
◽Airport : Nearest airport is Lohgaon Airport, Pune. 5 kms. away from the museum.<br>
◽Railway Station : Pune Railway Station is 1 km away from the museum.<br>
◽T. Bus Station : Pune Bus Station is 1 km away from the museum.<br>
◽Nearest Landmark : Old Circuit House, 28 Queens Garden, Pune – 411 001<br>
◽Timing of Museum :
          10:30am to 5.30pm (Open on all days, except Government holidays)<br>
◽Hours: 
Closed ⋅ Opens 10 am Mon<br>
◽Phone: 020 2633 2380<br>
◽Tickets: ₹5–200 · maharashtra.gov.in<br>
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
		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="museums/mp3.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="#"><b>Mahatma Phule Museum</b></a></h1>
				<div class="postcard__subtitle small">
					<i class="fas fa-calendar-alt mr-2"></i>1204/10,Ghole Rd, Shivajinagar,Pune,Maharashtra 411004
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>Founded in the year 1890, Mahatma Phule Museum is one of the must-visit Pune tourist attractions for history buffs. Earlier established as Lord Ray Museum, the museum was renamed as Mahatma Phule Museum in the year 1968. The museum makes for an interesting trip as one can see various collections of industrial products, agricultural items and handicraft pieces in this museum.<br>

Although the place has been about 118 years old now, it presents the old-world charm in the most amazing way to the tourists. If you wish to know more about the unique culture and rich heritage of India, Mahatma Phule Museum is a very educational experience for the tourists. Other notable and interesting collections which one can see here include brassware, stone carvings, marble statues, oil painting, textiles, body samples of animals from seals to elephants and so on.<br>
<span id="dots4">...</span><span id="more4">

◽Location: 1204/10, Ghole Road, Shivajinagar, Pune, Maharashtra<br>

◽Best Time to visit: The museum can be visited by the tourists throughout the year.<br>

◽Entry fee: There is no entry fee to visit the museum<br>

◽Timings: The timings are from 10:30 am to 5:30 pm. The museum remains closed on Wednesdays.
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

		<article class="postcard dark red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="museums/rjd2.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text t-light">
				<h1 class="postcard__title blue"><a href="#"><b>Raja Dinkar Kelkar Museum	</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
					<i class="fas fa-calendar-alt mr-2"></i>No. 1377/78, Kamal Kunj, Bajirao Rd, Natu Baag, Shukrawar Peth, Pune, Maharashtra 411002
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>The museum is situated at Bajirao Road and consists of art and crafts collected by late Shri Dinkar Kelkar. The museum has 42 sections and displays 12.5% of everyday art and craft in 6 galleries. Among a few sections the Ivory, Wooden Objects, Lamps, Objects of Beauty Culture, Arms & Armours, Tambol, Mastani Mahal, Terracotta, Toys, Musical Instruments, Leather Puppets, Paintings, Sculptures, Coins, Earthenware, Writing Implements, Bronzes, Textile, Kitchen Utensils, etc are a few.
When entering the museum everyone is welcomed by the ornate wooden arch depicting Agni and Indra and the spectacular lamps.The main attraction of the museum is the Mastani Mahal which also depicts a few of the special exhibitions.

There are 21000 antiques to be displayed amongst which 2500 is on public display since many of them have been spoiled. A project called Museum 2000 has been started to make Dr.Kelkars dream of a educational, recreational and cultural museum come true and is in progress. This project has been conceived by the Board of Management of the museum and is headed by the Chief Secretary to the State of Maharashtra as well as other Govt.officials.<br>
<span id="dots2">...</span><span id="more2">
◽When visiting Pune this museum is a must watch for all travellers as well as history seekers.<br>

◽Open: Everyday<br>

◽Visiting Timings: 1000 HRS to 1730 HRS<br>

◽Visit Duration: 1 to 2 Hours<br>

◽Visiting charges: 5 INR for Per Person (Children) 20 INR Per Person ( Adults) 50 INR Per Person ( Foreign Children) 200 INR Per Person ( Foreign Adults)<br>
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

<div class="footer-bottom">
	<div class="white">&copy; <script language="javascript" type="text/javascript">document.write(new Date().getFullYear());</script>. </div>
</div>
<!------- End Footer --------->
<?php
include "Connection.php";

?>
