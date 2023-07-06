<!DOCTYPE html>
<html>
<head>
	<title>Bookyourtrek</title>

	<link rel="stylesheet" type="text/css" href="css/styleabc.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="jquery-3.6.4.min.js"></script>
</head>
<body>
	<header>
		<h1>BookYourTrek</h1>
		<div class="slide">
			<button id="slideToggle">...</button>
		</div>
		<div class="logo">
			<img src="logo1.jpg"><a href="index.html"></a>
		</div>
		<div class="main" id="main">
			<ul>
				
				<li><a href="index.html">Home</a></li>
				<li class="active"><a href="Packages.html">Packages</a></li>
				<li><a href="aboutUs.html">About Us</a></li>
				<li><a href="loginadmin.php">Login</a></li>
			</ul>
		</div>
		<script type="text/javascript">
				$(document).ready(function(){
		$('#slideToggle').click(function(){
			$('.main').slideToggle(function(){
			});
				});
	});
		</script>
	</header>
	<div class="regform">
		
		<div class="reg">
		<form action="insertabc.php" method="post">
			<label>Full Name:</label><br>
			<input type="text" name="fullname" placeholder="Full Name" required><br>
			<label>Address:</label><br>
			<input type="text" name="address" placeholder="Address" required><br>
			<label>Email:</label><br>
			<input type="email" name="email" placeholder="Email" required><br>
			<label>Number:</label><br>
			<input type="text" name="number" placeholder="Number" required><br>
			<button type="submit">Book</button>
		</form>
	</div>
	<div class="box">
		<h3>Annapurna Base Camp</h3>
		<ul>
			<a href="#about"><li><span>1</span> About</li></a>
			<a href="#accomodation"><li><span>2</span> Accomodation</li></a>
			<a href="#price"><li><span>3</span> Price include/exclude</li></a>
			<a href="#itenary"><li><span>4</span> Itinerary</li></a>
			<a href="#payment"><li><span>5</span> Payment Info</li></a>

		</ul>
	</div>
	<div class="notice">
		<h3>Important Notice</h3>
		<p>Please fill out Your form carefully<br>
		because you will not get chance to edit it.<br>
	And for further queries feel free to contact us.</p>

	</div>
	</div>
	<div id="about">
		<h2> About Annapurna Base Camp</h2>
		<p>Nestled in the majestic Annapurna Conservation Area of Nepal, the Annapurna Base Camp trek is a captivating journey that takes you to the heart of the Annapurna Himalayas. Situated at an elevation of 4,130 meters (13,550 feet), the Annapurna Base Camp offers awe-inspiring panoramic views, diverse landscapes, and a rich cultural experience. This trek is often regarded as one of the most rewarding and popular treks in Nepal.<br>

The trek begins from Nayapul, following a scenic trail that winds through terraced fields, rhododendron forests, and charming traditional villages. As you ascend higher, the landscape transforms, revealing breathtaking valleys, cascading waterfalls, and towering peaks. The trail is dotted with teahouses, providing comfortable accommodation and delicious meals, allowing trekkers to immerse themselves in the local culture and hospitality.<br>

Reaching Annapurna Base Camp is a truly magical experience. Surrounded by soaring Himalayan peaks, including Annapurna I (8,091 meters) and Machapuchare (6,993 meters), you are welcomed into a natural amphitheater of immense beauty. The sunrise and sunset views from the base camp are nothing short of spectacular, as the golden hues illuminate the snow-capped peaks, creating a breathtaking vista.<br>

Along the trek, you will encounter various ethnic communities, including Gurungs and Magars, known for their warm hospitality and unique traditions. The opportunity to interact with the locals and witness their daily lives adds an enriching cultural dimension to the journey. You may also visit traditional villages such as Ghandruk, where you can observe the traditional architecture and experience the local way of life.<br>

The trek back follows a different route, providing new perspectives and allowing you to fully appreciate the diverse landscapes of the Annapurna region. Descending through lush forests and terraced fields, you will continue to be mesmerized by the beauty of the surrounding peaks and the tranquility of the valleys.<br>

The Annapurna Base Camp trek offers a perfect blend of natural beauty, cultural exploration, and adventure. It is an opportunity to challenge yourself, immerse yourself in nature's grandeur, and create memories that will last a lifetime. Whether you are a seasoned trekker or a first-time adventurer, the Annapurna Base Camp trek promises an unforgettable experience that will leave you in awe of the magnificence of the Himalayas.<br>

</p>
	</div>
	<hr>
	<div id="accomodation">
		<h2>Accomodation:</h2>
		<p>During the Annapurna Base Camp trek, accommodation is primarily provided by teahouses or lodges that are scattered along the trail. These teahouses offer basic but comfortable facilities, allowing trekkers to rest and rejuvenate after a day of trekking in the mountains.</p>
		<ol>
			<li><p><h4>Tea Houses/Lodges:</h4>Tea houses and lodges along the Annapurna Base Camp trail provide comfortable accommodations. Options include private rooms or dormitory-style lodging, with cozy beds and scenic mountain views. The friendly staff ensures a welcoming environment for trekkers.</p></li>
			<li><p><h4>Meal Options:</h4>    An array of meal options awaits trekkers, ranging from traditional Nepali dishes like dal bhat and momo to international cuisine such as pasta and soups. Vegetarian and vegan choices are available, and fresh, locally sourced ingredients are used to prepare flavorful meals.</p></li>
			<li><p><h4>Homestays:</h4> For a cultural immersion, home stays offer the chance to stay with local families in traditional Nepali homes or guesthouses. Engage in cultural activities, participate in meal preparations, and experience warm hospitality while creating lasting memories.</p></li>
		</ol>
		<p>Each aspect of the accommodation options, including tea houses/lodges, meal choices, and home stays, contributes to a well-rounded trekking experience in the Annapurna region. Trekkers can find comfort and convenience in the tea houses and lodges, enjoy delicious meals that cater to various preferences, and delve into the local culture through home stays. These accommodations add depth and richness to the overall trekking adventure, creating an unforgettable journey amidst the stunning landscapes of the Annapurna Base Camp trail.
</p>
	</div>
	<hr>
	<div id="price">
		<h2>Price: NRs.30,000/Per person</h2>
	<ol>
			<h3>Price Includes:</h3>
			<li>Airport pick up and drop by car/van/ bus.</li><br>
			<li>2-night accommodation in Kathmandu with breakfast. </li><br>
			<li>All your trekking permits and entry fees are covered. All government and local taxes. </li><br>
			<li>Choice of three meals a day (Breakfast/Lunches/Dinners) </li><br>
			<li>Welcome drinks and farewell dinner. </li><br>

	</ol>
	<ol>
		<h3>Price Excludes:</h3>
		<li>    Lunch and dinner during your Kathmandu stay. </li><br>
		<li>Travel medical insurance and emergency evacuation costs.</li><br>
		<li>Nepal entry visa fee and International airfare.</li><br>
	</ol>

	</div>
	<hr>
	<div id="itenary">
		<h2>Here's a itinerary for the Annapurna Base Camp:</h2>
		<ol>
			<li><span>Day1:</span>  Arrival in Kathmandu</li>
			<li><span>Day2:</span> Kathmandu to Pokhara</li>
			<li><span>Day3:</span>  Pokhara to Nayapul to Tikhedhunga</li>
			<li><span>Day4:</span>  Tikhedhunga to Ghorepani</li>
			<li><span>Day5:</span> Ghorepani to Poon Hill to Tadapani</li>
			<li><span>Day6:</span>  Tadapani to Chhomrong</li>
			<li><span>Day7:</span> Chhomrong to Bamboo</li>
			<li><span>Day8:</span>  Bamboo to Deurali</li>
			<li><span>Day9:</span>  Deurali to Annapurna Base Camp (ABC)</li>
			<li><span>Day10:</span> Annapurna Base Camp to Bamboo</li>
			<li><span>Day11:</span> Bamboo to Jhinu Danda</li>
			<li><span>Day12:</span> Jhinu Danda to Nayapul to Pokhara</li>
			<li><span>Day13:</span> Pokhara to Kathmandu</li>
		</ol>
	</div>
	<hr>
	<div id="payment">
		<h2>Payment Information</h2>
		<p>Fill out the trek booking form with the required information, including your trekking dates, group size, and any specific preferences or requirements.
Submit the form, and our team will review your request and check for availability.
Once your trek is confirmed, we will contact you via the provided email or phone number to proceed with the payment process.
Our representative will arrange a meeting at a designated location in Kathmandu to collect the trek cost in cash (Nepalese Rupees) and provide you with an official receipt.
At the scheduled date, our experienced guide will meet you at the designated pickup location and commence the trek to Gosaikunda Lake, ensuring your safety and providing valuable insights along the way.<br>
We recommend booking in advance to secure your preferred trekking dates. If you have any questions or require further assistance, please feel free to reach out to us through the contact information provided on our website.

We look forward to providing you with an unforgettable trekking experience to Gosaikunda Lake.</p>
	</div>
	<footer>
<div class="footer-content">
	<h3>Contact Us</h3>
	<p> Contact no:01-4813218<br>
	Email:Bookyourtrek@gmail.com</p>
	<ul class="socials">
		<li><a href="#"><i class="fa fa-facebook"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i><</a></li>
		<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		<li><a href="#"><i class="fa fa-youtube"></i></a></li>
		<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
	</ul>
</div>
<div class="footer-bottom">
	<p>copyright &copy;2023Bookyourtrek. designed by <span>admin</span></p>
</div>
</footer>
	</body>
</html>