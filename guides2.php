<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/flexslider/flexslider.css">
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
<link rel="shortcut icon" href="./images/headlogo.png">
</head>

<style>
    
p.free1 {
  margin-top:150px;
}

</style>
<body>

<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="categories.html">Store</a></li>
			<li><a href="guides.html">Guides</a></li>
			<li><a href="company.html">Company</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+63 1231231234</div>
		</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="#">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/logo_1.png" alt="" width="200px"></div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="index.html">Home</a></li>
					<li><a href="categories.html">Store</a></li>
					<li><a href="guides.html">Guides</a></li>
					<li><a href="company.html">Company</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Search Item" required="required">
						<button class="header_search_button"><img src="images/search.png" alt=""></button>
					</form>
				</div>
				<!-- User
				<div class="user"><a href="#"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div> -->
				<!-- Cart -->
				<div class="cart"><a href="cart.html"><div><img src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
					<div>+63 1231231234</div>
				</div>
			</div>
		</div>
	</header>

    <p class="free1">

    </p>
    
    <div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>Sonar Guides</h2>
      <!-- <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p> -->
      <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                    <a class="nav-link" href="Guides.html">Step 1: What You Will Need</a>
                  </li>
          
                  <li class="nav-item">
                    <a class="nav-link active" href="Guides2.html">Step 2: Setup</a>
                  </li>
          
                  <li class="nav-item">
                    <a class="nav-link" href="Guides3.html">Step 3: Assembling the Breadboard</a>
                  </li>
          
                  <li class="nav-item">
                    <a class="nav-link" href="Guides4.html">Step 4: Assembling the Ultrasonic Sensor</a>
                  </li>
          
                  <li class="nav-item">
                      <a class="nav-link" href="Guides5.html">Step 5:  Assembling the LEDs</a>
                  </li>
                  
                  <li class="nav-item">
                      <a class="nav-link" href="Guides6.html">Step 6: Assembling the Buzzer</a>
                  </li>
                  
                  <li class="nav-item">
                      <a class="nav-link" href="Guides7.html">Step 7: Coding</a>
                  </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Step 2: Setup</h2>
      <h5>The photo below shows the setup of the project:</h5>
      <br>
        <img src="arduinoproductspics/Setup.jpg" height="600" width="730"> 
        <!-- height="400" width="600" --> 
        <br>
        <br>
        <p style="text-align:justify">
            The jumper wires should be connected as follows:<br>
                <br>
                ??? Connect a jumper wire from the 5 volt pin on the Arduino to the bottom channel of the Breadboard
                <br>
                <br>
                ??? Connect another jumper wire from a ground pin on the arduino to the upper channel of the breadboard
        </p>
            <br>
            <br>
            <pre>
                Buzzer -> pin 3<br>
                <br>
                (On Ultrasonic Sensor)<br>
                Echo -> pin 6<br>
                Trig -> pin 7<br>
                <br>
                (In Order from Right to Left)<br>
                LED1 -> pin 8<br>
                LED2 -> pin 9<br>
                LED3 -> pin 10<br>
                LED4 -> pin 11<br>
                LED5 -> pin 12<br>
                LED6 -> pin 13<br>
            </pre>
        <p>
                The jumper wires connected to the LEDs should be connected to the lead on the right, while the left lead of the LED should connected to the ground channel via a 330 ohm resistor.<br>
        </p>
        <b>&copy; flynn_munroe, Instructables </b>
        <br>
        <br>
        <br>
        <br>
    </div>
  </div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
<script src="js/product.js"></script>
</body>
</html>