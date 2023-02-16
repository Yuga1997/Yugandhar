<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php include 'header-links.php';?>

</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <h1 class="logo"><a href="index.php">Yugandhar</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="index.php">Home</a></li>
          <li ><a href="about.php">About</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
     
	 <?php include 'social-links.php';?>

    </div>
  </header>

  <main id="main">

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p></p>
        </div>
        <div class="row mt-5">

          <div class="col-lg-12 mt-5 mt-lg-0">
	<div style="background-color: #00000008; padding-bottom: 50px; padding-top: 50px;">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-4 col-md-6">
	                <div class="ff_contact_box">
	                     <i class="icofont-phone" style="font-size:24px;color:white"></i>
	                    <h4>Call</h4>
	                    <p style="margin:0px;">+1 (647)-(807 6549)</p>
	                </div>
	            </div>
	            <div class="col-lg-4 col-md-6">
	                <div class="ff_contact_box">
					 <i class="icofont-envelope" style="font-size:24px;color:white"></i>
	                   
	                    <h4>Email</h4>
	                    <p style="margin:0px;">yugandharchowdary46@gmail.com</p>
						 <p style="margin:0px;">yugandhar@workberg.in</p>
	                </div>
	            </div>
	            <div class="col-lg-4 col-md-6">
	                <div class="ff_contact_box">					
						<i class="icofont-google-map" style="font-size:24px;color:white"></i>                         	                    
	                    <h4>Location</h4>
	                    <p style="margin:0px;">Toronto, Ontario, Canada</p>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

          </div>

        </div>

      </div>
    </section>

  </main>

<?php include 'footer-links.php';?>

</body>

</html>