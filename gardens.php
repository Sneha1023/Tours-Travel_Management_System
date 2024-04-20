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
		<h1 class="h1 text-center" id="pageHeaderTitle"><b>GARDENS</b></h1>

		<article class="postcard dark blue">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="gardens/osho1.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="#">Osho Garden</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 6.00 am-9.00 am,3.00 pm-6.00 pm">
						
					</time>
				</div>
				<div class="postcard__bar"></div>
			    	<div class="postcard__preview-txt"><p>Osho Garden, also known as Osho Teerth Garden, is located in Pune. It is a tranquil park with ponds, paved ways and small streams that are carved inside the garden. It was established in the year 1994.Osho Garden carries the reminiscence of the beautiful zen gardens of Japan. That's why it is also called the Zen Garden of Pune. There is a Buddha statue installed inside the garden. In their search for spirituality and serenity, many people make their way to Osho Garden. It is located just beside the famous Osho Ashram and Osho International Commune. Many people can be found having early morning walks here. It is a great spot for meditation. Away from the hustle and bustle, Osho Garden is a romantic place for couples too.<br>
<span id="dots">...</span><span id="more">
◽Osho Teerth Park Location : D. H. Dhunjibhoy Road, Between Lane Number 2 and 3, Koregaon Park Road, Pune, Maharashtra, 411001, India<br>
◽Entry Fee : No entry fee<br>
◽Timings : Morning :- 6:00 am – 9:00 am, Evening :- 3:00 pm – 6:00 pm<br>
◽The Osho Teerth Park of Pune is spread over 12 acres behind the Osho ashram. <br>
◽It is a one-of-kind Japanese Zen garden with a unique layout, cosily tucked in the quiet bylanes of Koregaon Park.<br>
◽You can see some beautifully manicured marble slabs placed beneath the huge trees to meditate in the fresh air. <br>
◽Several cute Buddha statues are practising meditation at several places to boost you.<br>
◽The park is divided into two parts, and each has an endearing charm. It is one of the most attractive tourist spots in Pune.<br>
◽July to March is the best time to visit Pune. Soothing winters coupled with the freshness all around make your visit worthwhile.<br>
</p></span>
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
			</li>
				</ul>				
			</div>
		</article>

			<article class="postcard dark red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="gardens/okayama3.jpg" alt="Image Title" />	
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="#"><b>Okayama-Garden</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						
					</time>
				</div>
				<div class="postcard__bar"></div>
				
				
				<div class="postcard__preview-txt"><p>The garden was inspired by the 300-year-old Kōraku-en Garden in Okayama, so it is also called the Pune-Okayama Friendship Garden. The garden has naturally flowing water from a canal, and this flow has been spread across the garden.The garden is well maintained, and walking on the lawn is not allowed. The garden is built on 10 acres. The style is devised in such a way that people can take a walk through a garden enjoying the landscape, which changes along the garden paths. Visitors can see colourful fish from on top of a small bridge in the center of garden. This Japanese garden has been named after Pu La Deshpande, a well known Marathi writer from Maharashtra, India.<br>
<span id="dots1">...</span><span id="more1">
◽Pune-Okayama Friendship Garden Location: Sinhgad Rd, Pune Okayama Friendship Garden, Dattawadi, Pune, Maharashtra, 411030, India<br>
◽Entry Fee : 5Rs per person<br>
◽Timing : Morning : 6:00 am – 10:30 am, Evening : 4:00 pm – 8:00 pm.<br>
◽Pune Okayama Friendship Garden is a symbol of Indo-Japanese friendship between partner cities of Pune and Okayama and the garden is truly the pride of       Pune.<br>
◽The park was built in 1700, across 12 hectares, by the Ikeda royal family.<br>
◽The Okayama Friendship Garden is also known as the Pu. La. Deshpande Udayan.<br>
◽It was named after well known Marathi writer and humorist Purushottam Laxman Deshpande. He won the Padma Bhushan in 1990. <br>
◽After his death, the Pune Municipal Corporation named the garden after him.<br>
◽There are wooden pergolas to sit and rest. There are bright red orange fish in the ponds.<br>

</span></p>
<button onclick="myFunction1()" id="myBtn1">Read more</button>
<a href="../frontend/tagent/tagent.php"><input type="button" value="Book Vehicle"></a>
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
					<img class="postcard__img" src="gardens/saras.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="#"><b>Sarasbaugh-Garden</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><p>Saras Baug is a popular attraction in Pune which was initially a lake at the foothills of Parvati. As the water of the lake dried up, the exposed land was developed into a park and was named Saras Baug.The attraction expands over an area 25 acres and also has a temple in the centre. The shrine is dedicated to Lord Ganesh and because it was built in the middle of a lake, it is also called Talyatla Ganpati. The baug and the temple also have some historical significance as they were built during the time of the Peshwa. The temple, in particular, has been an important venue for several historical events too.<br>
<span id="dots2">...</span><span id="more2">
◽Saras Baug Locatin: Saras Baug, Saras Baug Rd, Municipal Colony, Pune, Maharashtra, 411038, India.<br>
◽Entry Fee : No Entry Fee.<br>
◽Timings : 6:00 am – 9:00 pm<br>
◽Spread over an area of 25 acres (10 hectares), Saras Baug is adorned with greenery.<br>
◽The prominence of ‘sarus’ cranes in the garden is the primary reason why the place is called today.<br>
◽This place is a must visit for the Diwali Pahat also known as(पुण्यातली दिवाळी पहाट) function during Diwali where they light more than hundred lamps at  dawn.<br>
◽Saras Baug has a long history and was built by the great Peshwa leader, Nana Saheb Peshwa. <br>
◽The garden is full of lovely spots ideal for picnics with families and loved ones.<br>
◽You can enjoy the leisurely walks on the green-carpeted grass and through the paved pathways created all around the park.<br>
◽You may need an hour or two to go around Saras Baug and explore it completely.<br>
◽Saras Baug used to have a zoo also called the Peshwe Park which has been relocated now.<br>
◽If you like street food, you can spot a few local vendors outside the park selling hot delicacies such as vada pav, bhel puri, paani puri, kacchi dabeli, and much more.<br>
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
		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img"src="gardens/empress.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="#"><b>Empress-Botanical Garden</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						
					</time>
				</div>
				<div class="postcard__bar"></div>
				
				<div class="postcard__preview-txt"><p>Empress Botanical Garden, a green paradise in the heart of Pune is a 39 acre bio-diverse expanse situated near Pune racecourse.Empress Botanical Garden, a green paradise in the heart of Pune is a 39 acre bio-diverse expanse situated near Pune racecourse.Since 1830! Sir John Malcolm, then Governor of Bombay established a trust called Agri-Horticultural Society of Western India in the year 1830. In 1853, Botanical Garden in Kirkee was established.<br>
<span id="dots3">...</span><span id="more3">
◽Empress Botanical Garden Location : Near Race Course, Empress Garden, Kavade Mala, Camp, Pune, Maharashtra, 411001, India.<br>
◽The garden is just about 3 kms from the Pune railway station.<br>
◽Timings : 9:30 am – 6:30 pm<br>
◽Entry Fee : 20rs per person (above 3 yrs)<br>
 		➡10rs for Two Wheeler Parking<br>
 		➡20rs for Car Parking<br>
 		➡50rs for Bus Parking<br>
◽The Empress Botanical Garden is spread over an area of 39 acres. It is named after Queen Victoria who visited the garden when she held the royal mace.<br>
◽The Empress Botanical Garden is also called the Soldiers Garden as the British officials loved it. They used to spend their leisure time here often.<br>
◽The Garden has a wide variety of breathtaking flowers and trees.Some rare species present here are around 100 years old. Now isn't that fabulous! <br>
◽An evening stroll around this garden to explore the shrubs, trees, flora, and most importantly, admire the beauty of the place is a must.<br>
The Palm section of the garden has about 150 species of trees and flowers, out of which 125 are rare and local.<br>
◽There is a section for tropical trees in the Empress Botanical Garden and a small zoo to entertain kids.<br>
◽The garden is equipped with a section for indoor games for kids and a play area to keep them entertained. You can enjoy the fresh air while the children have a gala time.<br>
◽You can enjoy a grand display of flowers and saplings, and it is a must-visit for everyone.<br>

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
</div>
		<article class="postcard dark red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="gardens/yr2.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text t-light">
				<h1 class="postcard__title blue"><a href="#"><b>Yahwantrao Chavan Garden</b></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						
					</time>
				</div>
				<div class="postcard__bar"></div>
				
				<div class="postcard__preview-txt"><p>The Yashwantrao Chavan Garden in Pune has a long history. The jaw-droppingly beautiful garden has a green carpeted area embedded with colourful flowers that bloom throughout the year.The Yashwantrao Chavan Garden is a themed garden with replicas of the 7 wonders of the world. These replicas have contributed to its common name as the "7 Wonders Garden". The nearby locals also know this place as "Aba Bagul Udyan".The 7 wonders are approximately 20 feet to 60 feet long.<br>
<span id="dots4">...</span><span id="more4">
 ◽Location : Shiv Darshan Rd, Anurag Society, Sivadarshan Poorgrasta<br>Vasahat, Parvati Paytha, Pune, Maharashtra, 411009, India<br>
 ◽Timing : 6 am to 10 am and 4 pm to 8 pm.<br>
 ◽Entry fee : ₹20/- per person, which includes the 4D show too!<br>
 ◽Note: The garden is free of cost for exercise and jogging in the
   morning. You can also enjoy working out at their open gym.<br>
 ◽A popular tourist spot in Pune, the Yashwantrao Chavan Garden is   accessible from all over Pune.<br>
 ◽Yashwantrao Chavan Garden in Pune is one such place that will make your trip to Pune memorable<br>
 ◽It also give you the pleasure of visiting the Seven Wonders of the World in one area.<br>
 ◽There is so much to do at the Yashwantrao Chavan Garden in Pune, such as-<br>
 ➡Visit the miniatures- At a very reasonable price, you can visit the world's seven wonders. (Now, isn't that exciting!)<br>
 ➡Take photographs- With picturesque surroundings all around you, how can you miss clicking some Instagram worthy photographs or capturing a few moments of happiness with your family. Every backdrop is worthy of a pic, and nothing can get better for kids posing in front of their favourite superheroes such as Moghli, Superman, and others.<br>
 ➡Watch the 4D show- You must spare some extra time and watch the 4D show at the Yashwantrao Chavan Garden, especially with your kids. There are 3 kinds of shows- Aladdin, Adventure of Ali Baba, and Count Dracula. The show has some 4D elements- spraying of water, floating real bubbles and a moving platform that will give you a realistic feel of the show.<br>
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

<div class="footer-bottom">
	<div class="white">; <script language="javascript" type="text/javascript">document.write(new Date().getFullYear());</script>. </div>
</div>
<!------- End Footer --------->

<?php
include "Connection.php";

?>
