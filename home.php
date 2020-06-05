<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "knctuserdata";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	
		
		
	<title>HOME</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="home.css">
    
	</head>
	<body>
    <!--navigation bar-->
    <section id="nav-bar">
     <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"><img src="7.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PRICE PLANS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.html">SIGNIN/SIGNUP</a>
      </li>
      </ul>
  </div>
</nav>
    </section>
    
    <!--slider-->
    <div id="slider">
    <div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="2.jfif" class="d-block w-100" alt="First slide">
      <div class ="carousel-caption">
      <h5>WELCOME to MAILACON "YOUR BUSINESS CONNECTIONS" </h5>
      <p>Many businesses are trying  harder to remain connected with their customers. Start with a India's first free custom domain for up to 3 years, then build a free website to get your business online .</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="3.jfif" class="d-block img-fluid" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="4.jpg" class="d-block img-fluid" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
    <!--About-->
    <section id="about">
    <div class="container">
    <div class="row">
<div class="col-md-6">
<h2>About Us</h2>
<div class="about-content">
Our pre-built, customizable email automations make it easy to connect with the right person at the right moment—without doing the work every time. Delight your customers and keep your brand top of mind with welcome automations, happy birthday messages, and order notifications.

<em><strong>“Some small businesses would rather go out of business doing the right thing than stay in business doing the wrong thing.”</strong></em>
</div>
<button type="button" class="btn btn-primary">Read more>>
</button>
</div>
<div class="col-md-6 skills-bar">
<p>Connections</p>
<div class="progress">
<div class="progress-bar" style="width:80%">80%</div>
</div>
<p>Marketing Glossary</p>
<div class="progress">
<div class="progress-bar" style="width:80%">90%</div>
</div>
<p>Events</p>
<div class="progress">
<div class="progress-bar" style="width:80%">70%</div>
</div>
<p>Security</p>
<div class="progress">
<div class="progress-bar" style="width:80%">95%</div>
</div>
</div>
</div>
</div>
    </section>
    <!--promo-->
    <section id="promo">
    <div class="container" class="d-block img-fluid">
    <img src="5.png">
    <h2> Get Free Domain Name and Web Hosting
   </h2>
    <a href="#" class="btn btn-primary">Contact Us</a>
    </div>
    </section>
<!--price plans-->
<section id="price">
<div class="container">
<h1><em>PrIce Plans</em></h1>
<div class="row">
<div class="col-md-3">
<div class="single-price">
<div class="price-head">
<h2>Free</h2>
<p>$0/<span>month</span></p>
</div>
<div class="price-content">
<ul>
<li><i class="fa fa-check-circle"></i>5GB space</li>
<li><i class="fa fa-check-circle"></i>10 GB bandwidth</li>
<li><i class="fa fa-times-circle"></i>200 Email account</li>
<li><i class="fa fa-times-circle"></i>Unlimited Domain</li>
<li><i class="fa fa-times-circle"></i>Unlimited Support</li>

</ul>

</div>
<div class="price-button">
<a class="buy-btn" href="rf.html"> Join free</a>
</div>
</div>
</div>
<div class="col-md-3">
<div class="single-price">
<div class="price-head">
<h2>Startup</h2>
<p>$10/<span>month</span></p>
</div>
<div class="price-content">
<ul>
<li><i class="fa fa-check-circle"></i>100GB space</li>
<li><i class="fa fa-check-circle"></i>20 GB bandwidth</li>
<li><i class="fa fa-check-circle"></i>1000 Email account</li>
<li><i class="fa fa-times-circle"></i>Unlimited Domain</li>
<li><i class="fa fa-times-circle"></i>Unlimited Support</li>

</ul>

</div>
<div class="price-button">
<a class="buy-btn" href="#"> Join Now</a>
</div>
</div>
</div>
<div class="col-md-3">
<div class="single-price">
<div class="price-head">
<h2>Business</h2>
<p>$50/<span>month</span></p>
</div>
<div class="price-content">
<ul>
<li><i class="fa fa-check-circle"></i>400GB space</li>
<li><i class="fa fa-check-circle"></i>50 GB bandwidth</li>
<li><i class="fa fa-check-circle"></i>20000 Email account</li>
<li><i class="fa fa-check-circle"></i>Unlimited Domain</li>
<li><i class="fa fa-times-circle"></i>Unlimited Support</li>

</ul>

</div>
<div class="price-button">
<a class="buy-btn" href="#"> Join Now</a>
</div>
</div>
</div>
<div class="col-md-3">
<div class="single-price">
<div class="price-head">
<h2>Advanced</h2>
<p>$100/<span>month</span></p>
</div>
<div class="price-content">
<ul>
<li><i class="fa fa-check-circle"></i>1000GB space</li>
<li><i class="fa fa-check-circle"></i>Unlimited bandwidth</li>
<li><i class="fa fa-check-circle"></i>Unlimited Email account</li>
<li><i class="fa fa-check-circle"></i>Unlimited Domain</li>
<li><i class="fa fa-check-circle"></i>Unlimited Support</li>

</ul>

</div>
<div class="price-button">
<a class="buy-btn" href="#"> Join Now</a>
</div>
</div>
</div
</div>
</section>
<!--get in touch-->
<section id="contact">
<div class="container">
<h1>Get IN Touch</h1>
<div class="row">
<div class="col-md-6">
<form  action="userinfo.php" method="post" class="contact-form">
<div class="form-group">
<label>UserName</label>
<input type=" text" name="user_name" class="form-control" id="name"  required="required" placeholder="Your-Name">
</div>
<div class="form-group">
<label>Phone</label>
<input type=" number" name="user_phone" class="form-control" id="phone" required="required" placeholder="Phone no.">
</div>
<div class="form-group">
<label>Email</label>
<input type="Email" name="user_email" class="form-control" id="email" required="required" placeholder="Email Id">
</div>
<div class="form-group">
<label>Message</label>
<textarea class="form-control" name="user_message" id="message" required="required" placeholder="Message"></textarea>
</div>
<button type="submit" class="btn btn-primary">SEND MESSAGE</button>
</form>
</div>
<div class="col-md-6 contact-info">
<div class="follow"><b>Address:</b><i class="fa fa-map-marker" ></i>XYZ road, Banglore,IN</div>
<div class="follow"><b>Phone:</b><i class="fa fa-phone" ></i>123-456-789</div>
<div class="follow"><b>Email:</b><i class="fa fa-envelope-o" ></i>Mailacon@website.com</div>
<div class="follow"><label><b>Get Social:</b></label>
<a href="#"><i class="fa fa-facebook" ></i></a>
<a href="#"><i class="fa fa-instagram" ></i></a>
<a href="#"><i class="fa fa-twitter" ></i></a>
<a href=""><i class="fa fa-google-plus" ></i></a>
</div>
</div>
</div>
</div>
</section>
<!--footer-->
<section id="footer">
<div class="container text-center">
<p>Made with <i class="fa fa-heart-o" ></i> by MAILACON</p>
</div>
</section>
    </body>
    </html>
