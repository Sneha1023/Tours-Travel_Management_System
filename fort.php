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

input.read-more-state:checked ~ div.read-morefile:///exports-wrap p.read-more-target {
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
.footer{ opacity:0.9; width:100%; background:#000000; float:left; padding:20px 0px; margin-top:-50px;}
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
		<h1 class="h1 text-center" id="pageHeaderTitle">FORTS</h1>

		<article class="postcard dark blue">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="forts/rg.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="#"><b>Rajgad</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
			     <div class="postcard__preview-txt"><p>Rajgad (literal meaning Ruling Fort) is a Hill region fort situated in the Pune district of Maharashtra, India.Formerly known as Murumdev, the fort was the first capital of the Maratha Empire under the rule of Chhatrapati Shivaji for almost 26 years, after which the capital was moved to the Raigad Fort. Treasures discovered from an adjacent fort called Torna were used to completely build and fortify the Rajgad Fort.<span id="dots">...</span><span id="more"><br>◽Hours: 
Open 24 hours<br>
◽Phone: 022 6910 7600<br>
◽Height: 1,084 m (3,556 ft) ASL<br>
◽Built: 1713-1720 CE<br>
◽Condition: Ruins<br>
◽In use: 1713-1818<br>
◽Demolished: 1818<br>
◽Petrol pumps available within area of 20-40kms<br>
◽food availability<br></span></p>
</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>
<a href="../frontend/tagent/tagent.php"><input type="button" value="Book Vehicle"></a>
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


<ul class="postcard__tagbox">
	
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard dark red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="forts/shivneri.jpg " alt="Image Title" />	
			</a>+
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="#"><b>&nbspShivneri Fort</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p> Shivneri is a hill fort located to the northern side of Pune district with Junnar at its base and was the birth place of Chhatrapati Shivaji Maharaj.Even though the fort has succumbed to the ravages brought on by time and weather, its structural style is worth a study. The spot where Chhatrapati Shivaji Maharaj was born was reconstructed in 1925 and is known as the Shiv Mandir. In its vicinity is a huge circular water tank called Badami Talav. However, it does not hold water any longer. At the far side to the north is a precipitous cliff. This narrow channel is known as the Kadelot Point. It is believed that criminals awarded capital punishment were handcuffed and thrown down from here. It is from here that one can get a good view of the Manikdoh Dam as also the forts of Hadsar and Chavand. Climbing further you will be able to see the hill fort of Harishchandragad, far behind the mountains.<span id="dots2">...</span><span id="more2"> <br>◽Timings:-6:00 am – 5:00 pm<br>
◽Shivneri Fort Pune Address: Junnar, Pune, Maharashtra, 410502, India<br>
◽Shivneri Fort trek difficulty level: Easy<br>
◽Shivneri Fort trek distance: 2-3 km<br>
◽Shivneri Fort trek duration: 1 hour<br>
◽Entry to the fort is free for everyone.<br>
◽Things to keep in mind when visiting Shivneri Fort<br>
◽Avoid the trek if you have health problems.<br>
◽Keep a hat and sunglasses.<br>
◽Carry plenty of water during the trek.<br>
◽Pack some light food and snacks.<br>
◽Wear comfortable walking shoes.<br>
◽Take a guide for the best experience.<br>
◽Return to Junnar before sunset.<br></span></p>
</span></p>
<button onclick="myFunction2()" id="myBtn2">Read more</button>
<a href="../frontend/tagent/tagent.php"><input type="button" value="Book Vehicle"></a>
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
		<article class="postcard dark green">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="forts/vi1.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="#"><b>Visapur Fort</></a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>Visapur fort is a hill fort built by Balaji Vishwanath during 1713-1720 CE. Balaji Vishwanath was first Peshwa of Maratha empire. Though Visapur fort is built much later than Lohagad fort, the two forts are closely linked as Visapur fort is fortified for protecting Lohagad fort.  Both these forts are of Satwahan Era.<span id="dots3">...</span><span id="more3"> Too keep watch on Konkan and Bor Ghat, these both forts were of great importance during Shivaji's period.Located at an elevation of about 4000 ft above sea level, it needs some good trekking to reach Visapur fort. Standing tall for more than ten centuries, it is located at just 15 km from Lonavala, at Malavli, near Mumbai - Pune Highway. Surrounded by a huge tableland, it is situated at the east of the Lohagad Fort and Bhaja Caves.<br>
◽Address: Lohagad Trek Rd, Malavli, Maharashtra 410406<br>
◽Hours: 
◽Open 24 hours<br>
◽Phone: 022 6910 7600<br>
◽Height: 1,084 m (3,556 ft) ASL<br>
◽Built: 1713-1720 CE<br>
◽Condition: Ruins<br>
◽In use: 1713-1818<br>
◽Demolished: 1818<br>
◽Petrol pumps available within area of 20-40kms<br>
◽food availability<br>
</span></p>



</span></p>
<button onclick="myFunction3()" id="myBtn3">Read more</button>
<a href="../frontend/tagent/tagent.php"><input type="button" value="Book Vehicle"></a>
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
				<img class="postcard__img" src="forts/tor.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="#"><b>Torna</b></a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>Torna Fort is located 70 km southwest of Pune. Torna Fort’s name is written in the golden pages of the history of the Marathas, as it was the first fort captured by none other than the mighty Shivaji Maharaj in 1643.Torna is also famous for its location as it is the highest hill-fort in the Pune district of Maharashtra. Torna Fort is located at a height of 4603 ft. above sea level. It is also known as Prachandagad because of its enormous structure. In Marathi, “Prachand” means huge, and “gad” means fort.<span id="dots4">...</span><span id="more4"> 

◽Special food speciality and hotel<br>
◽Lip-smacking traditional Maharashtrian Cuisines at village Velhe.<br>
◽Accommodation facilities nearby & Hotel/ Hospital/Post Office/Police station<br>
◽Many local restaurants at Velhe.<br>
◽Many hotels at Velhe.<br>
◽Nearest Post office: Velhe Post Office.<br>
◽Nearest Hospital: Rural Hospital and Primary Health Center at Velhe.<br>
◽Nearest Police station: Velhe Police station.<br>
◽Visiting Rule and Time, Best month to visit<br>
◽The best months to visit Torna are the post-rain period as everything around is covered in lush green and winter as the blooming season of
◽flowers, that would be October - March.<br>
◽There are no hotels on the fort, however, in the temple of Mengai, 15-20 people can stay.<br>
◽Take with you drinking water, food as there are no restaurants on the fort but at the base village Velhe.<br></span></p>
</span></p>
<button onclick="myFunction4()" id="myBtn4">Read more</button>
<a href="../frontend/tagent/tagent.php"><input type="button" value="Book Vehicle"></a>
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
				<img class="postcard__img" src="forts/rai1.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text t-light">
				<h1 class="postcard__title blue"><a href="#"><b>Raigad</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>The aesthetically appealing Raigad Fort is a strategically constructed hill fort in the Raigad district of Maharastra, India. Built by the vibrant Maratha ruler, Chhatrapati Shivaji Maharaj, Raigad was the capital city of the illustrious Maratha Sovereign in the old times. The fort is located in the Sahyadri mountain range, and is only accessible by a pathway on one side, through several steps in a stiff climb, while the other sides are surrounded by deep valleys draped in green. Called the “Gibraltar of the East” by the Europeans, the Raigad Fort consists of several gateways, namely, the Nagarkhana Darwaja, the Mena Darwaja, and the Palkhi Darwaja, along with the Maha Darwaja which is the main entrance to the fort and has a majestic ambience.<span id="dots5">...◽Rajgad Fort Pune Address: Balekilla Road, Pune, Maharashtra, 412213, India<br>
◽Timing  
It takes about 3-4 hours to climb Rajgad Fort.<br>
◽12:00 am – 12:00 am<br>
◽No Entry Fee<br>
◽Petrol pumps available within area of 20-30kms<br>
◽Things to keep in mind when visiting Rajgad Fort<br>
◽Smoking and drinking are strictly prohibited.<br>
◽Littering or ruining the place in any way isn’t allowed.<br>
◽Playing loud music isn’t allowed.<br>
◽Keep your identity card with you.<br>
◽Wear sturdy trekking shoes.<br>
◽Keep trekking poles for assistance.<br>
◽Have a cap/scarf and sunglasses.<br>
◽Carry water and snacks.<br>
◽Pack a First Aid kit.<br>
◽Keep a torch (for night treks/stays).<br>
◽Carry a tent and sleeping bag if camping overnight.<br>
◽Pack a sweater or a light jacket (for night stays).<br>
◽Pack a poncho/raincoat (during monsoon).<br>
◽Wrap electronic devices in plastic (during monsoon).<br>
◽Have shawls or blankets (for night stays).<br></span><span id="more5"> </span></p>
</span></p>
<button onclick="myFunction5()" id="myBtn5">Read more</button>
<a href="../frontend/tagent/tagent.php"><input type="button" value="Book Vehicle"></a>
<a href=""><input type="button" value="Gallery"></a>

<script>
function myFunction5() {
var dots = document.getElementById("dots5");
var moreText = document.getElementById("more5");
var btnText = document.getElementById("myBtn5");

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


<?php
include "Connection.php";

?>
