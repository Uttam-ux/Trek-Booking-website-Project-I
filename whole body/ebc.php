<!DOCTYPE html>
<html>
<head>
	<title>Bookyourtrek</title>

	<link rel="stylesheet" type="text/css" href="css/styleebc.css">
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
		<form action="insertebc.php" method="post">
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
		<h3>Everest Base Camp</h3>
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
		<h2> About Everest Base Camp</h2>
		<p>Everest Base Camp, located in the mesmerizing Khumbu region of Nepal, is a legendary destination that captivates the hearts and minds of adventurers from around the globe. Situated at an elevation of approximately 5,364 meters (17,598 feet), it serves as the starting point for those aiming to conquer the world's tallest peak, Mount Everest. The journey to Everest Base Camp offers an unparalleled opportunity to witness the awe-inspiring beauty of the Himalayas and immerse oneself in the rich Sherpa culture.<br>

The trek to Everest Base Camp begins with a thrilling flight from Kathmandu to Lukla, a small airstrip nestled amidst the mountains. From Lukla, trekkers embark on an epic journey, trekking through quaint Sherpa villages, lush valleys, and ancient monasteries. The trail meanders along the famous Dudh Koshi River, crossing suspension bridges adorned with prayer flags and passing through colorful rhododendron forests that come alive during the spring season.<br>

As trekkers ascend higher, the rugged terrain unveils panoramic vistas of snow-capped peaks, including Lhotse, Nuptse, and Ama Dablam, creating an otherworldly landscape that is both humbling and exhilarating. Along the way, trekkers have the opportunity to rest and acclimatize in charming tea houses, where they can savor warm meals, experience the Sherpa hospitality, and engage in fascinating cultural exchanges.<br>

Reaching Everest Base Camp is a truly monumental achievement, providing trekkers with an up-close view of the mighty Everest and the surrounding Khumbu Icefall. The sense of accomplishment and awe that fills the air at Base Camp is indescribable. It's a place where mountaineering history has been made and where dreams are nurtured.<br>

The journey back follows a slightly different route, allowing trekkers to soak in new perspectives and reflect on the extraordinary experience they have had. Each step taken on the trail to Everest Base Camp is a testament to personal strength, determination, and a deep respect for the mountains and the Sherpa people who call this region home.<br>

Embarking on the Everest Base Camp trek is an adventure of a lifetime, offering not only a physical challenge but also an opportunity to connect with nature, witness the grandeur of the Himalayas, and immerse oneself in a culture that reveres the mountains. It is an experience that leaves an indelible mark on the hearts and minds of those who undertake this extraordinary journey.<br>
</p>
	</div>
	<hr>
	<div id="accomodation">
		<h2>Accomodation:</h2>
		<p>Accommodation along the Everest Base Camp trek is provided by tea houses or lodges that are scattered along the trail. These establishments offer basic but comfortable facilities to cater to trekkers' needs during their journey to and from Everest Base Camp.
		Here are some key features of accommodation in the Everest Base Camp region:</p>
		<ol>
			<li><p><h4>Tea Houses/Lodges:</h4>    Family-run establishments offering a warm and hospitable atmosphere.
  			  Simple yet cozy rooms with twin beds, blankets, and pillows.
   			 Communal dining areas where trekkers 			can enjoy meals and socialize.
    		Cozy fireplaces for warmth, especially during colder months.</p></li>
			<li><p><h4>Meal Options:</h4>     A variety of dishes available, including local Nepali cuisine, Tibetan dishes, and international options.
    Traditional Sherpa dishes such as dal bhat (rice with lentil soup), momo (dumplings), and Sherpa stew.
    Most tea houses offer breakfast, lunch, and dinner options to cater to trekkers' dietary needs.</p></li>
			<li><p><h4>Homestays:</h4> In some villages along the trekking trail, you may find homestay options. These provide an opportunity to stay with local families, experience their hospitality, and get a glimpse into their daily lives and culture.</p></li>
		</ol>
		<p>The accommodation along the Everest Base Camp trek provides trekkers with a comfortable and authentic experience in the heart of the majestic Himalayas. It allows for a closer connection with the local culture and fellow trekkers, creating lasting memories of this incredible journey.
</p>
	</div>
	<hr>
	<div id="price">
		<h2>Price: NRs.50,000/Per person</h2>
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
		<h2>Here's a itinerary for the Everest Base Camp:</h2>
		<ol>
			<li><span>Day1:</span>  Arrival in Kathmandu</li>
			<li><span>Day2:</span> Kathmandu to Lukla (2,800 meters / 9,186 feet) and Phakding (2,652 meters / 8,700 feet)</li>
			<li><span>Day3:</span>  Phakding to Namche Bazaar (3,440 meters / 11,286 feet)</li>
			<li><span>Day4:</span>  Acclimatization Day in Namche Bazaar</li>
			<li><span>Day5:</span> Namche Bazaar to Tengboche (3,870 meters / 12,694 feet)</li>
			<li><span>Day6:</span>  Tengboche to Dingboche (4,360 meters / 14,300 feet)</li>
			<li><span>Day7:</span> Acclimatization Day in Dingboche</li>
			<li><span>Day8:</span>  Dingboche to Lobuche (4,940 meters / 16,207 feet)</li>
			<li><span>Day9:</span>  Lobuche to Gorak Shep (5,170 meters / 16,961 feet) and Everest Base Camp (5,364 meters / 17,598 feet)</li>
			<li><span>Day10:</span> Gorak Shep to Kala Patthar (5,545 meters / 18,192 feet) and Pheriche (4,280 meters / 14,042 feet)</li>
			<li><span>Day11:</span> Pheriche to Namche Bazaar</li>
			<li><span>Day12:</span> Namche Bazaar to Lukla</li>
			<li><span>Day13:</span> Lukla to Kathmandu</li>
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