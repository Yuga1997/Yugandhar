<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
	
	<?php include 'header-links.php';?>
  <style>
  
.circle-tile {
    margin-bottom: 15px;
    text-align: center;
}
.circle-tile-heading {
    border: 4px solid rgba(255, 255, 255, 0.3);
    border-radius: 100%;
    color: #FFFFFF;
    height: 77px;
    margin: 0 auto -40px;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    width: 228px;
}
.circle-tile-heading .fa {
    line-height: 80px;
}
.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-number {
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
    padding: 5px 0 15px;
}



.dark-blue {
    background-color: #1617199e;
	font-weight:700;
	font-size:17px;
}




  </style>
</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo"><a href="index.php">Yugandhar</a></h1>
    
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="index.php">Home</a></li>
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
     <?php include 'social-links.php';?>
    </div>

  </header>

  <main id="main">

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>My name is Yugandhar and I am having more than 3 years of product based and client based project experince in reputated organization from ground level to mid-level.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/photo1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Web Designer &amp; Developer</h3>
            <p class="font-italic">
              
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
				  <li><i class="fa fa-hand-o-right"></i> <strong>Phone:</strong> +1 647 807 6549</li>
                  <li><i class="fa fa-hand-o-right"></i> <strong>City:</strong> Toronto(Ontario,Canada)
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="fa fa-hand-o-right"></i> <strong>Age:</strong> 25</li>
                  <li><i class="fa fa-hand-o-right"></i> <strong>Degree:</strong> Bachelor of Technology</li>
                  <li><i class="fa fa-hand-o-right"></i> <strong>Email:</strong> yugandharchowdary46@gmail.com</li>
                  <li><i class="fa fa-hand-o-right"></i> <strong>Freelance:</strong> Available</li>
                </ul>
              </div>
            </div>
            <p>
              I have a diverse set of skills ranging from HTML, CSS, Bootstrap, PHP, MYSQL and also work experince using php frameworks like Codeigniter, Laravel in a broad way. 
            </p>
          </div>
        </div>

      </div>
    </section>
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Programming Skills</h2>        
        </div>

        <div class="row skills-content">
			<div class="col-sm-3">
		    <div class="progressbar">
            <div class="second circle" data-percent="100">
              <strong></strong>
              <span>HTML</span>
            </div>
            </div>
		</div>
		
		<div class="col-sm-3">
		    <div class="progressbar">
            <div class="second circle" data-percent="90">
              <strong></strong>
              <span>CSS</span>
            </div>
            </div>
		</div>
		<div class="col-sm-3">
		    <div class="progressbar">
            <div class="second circle" data-percent="100">
              <strong></strong>
              <span>Ajax</span>
            </div>
            </div>
		</div>
		<div class="col-sm-3">
		    <div class="progressbar">
            <div class="second circle" data-percent="90">
              <strong></strong>
              <span>Bootstrap</span>
            </div>
            </div>
		</div>
		<div class="col-sm-3">
		    <div class="progressbar">
            <div class="second circle" data-percent="80">
              <strong></strong>
              <span>PHP</span>
            </div>
            </div>
		</div>
		<div class="col-sm-3">
		    <div class="progressbar">
            <div class="second circle" data-percent="85">
              <strong></strong>
              <span>CodeIgniter</span>
            </div>
            </div>
		</div>
		<div class="col-sm-3">
		    <div class="progressbar">
            <div class="second circle" data-percent="60">
              <strong></strong>
              <span>Laravel</span>
            </div>
            </div>
		</div>
		<div class="col-sm-3">
		    <div class="progressbar">
            <div class="second circle" data-percent="90">
              <strong></strong>
              <span>jQuery</span>
            </div>
            </div>
		</div>
        </div>

      </div>
    </section>
	
	
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sucesfully Completed</h2>
          <p></p>
        </div>

  <div class="row">
    <div class="col-lg-6 col-sm-6">
      <div class="circle-tile ">
        <div class="circle-tile-heading dark-blue"> <span data-toggle="counter-up">3</span></div>
        <div class="circle-tile-content dark-blue">      
            <p>Clients</p>       
        </div>
      </div>
    </div> 
	<div class="col-lg-6 col-sm-6">
      <div class="circle-tile ">
        <div class="circle-tile-heading dark-blue"> <span data-toggle="counter-up">4</span></div>
        <div class="circle-tile-content dark-blue">      
            <p>Projects</p>       
        </div>
      </div>
    </div> 
  </div> 
 
      </div>
    </section>
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Satisfied Clients</p>
        </div>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/emoji.png" class="testimonial-img" alt="">
            <h3>Nagaraj Kankanala</h3>
            <h3>Workberg LLP</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             Quick Response and support for clients.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
		  <div class="testimonial-item">
            <img src="assets/img/emoji.png" class="testimonial-img" alt="">
            <h3>Anil Kumar</h3>
            <h3>AbroadStudyPlan</h3>
            <h4>Director</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             Quick Response and support for clients.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>

      </div>
    </section>

  </main>

<?php include 'footer-links.php';?>
</body>
<script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
<script>
$(document).ready(function ($) {
    function animateElements() {
        $('.progressbar').each(function () {
            var elementPos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            var percent = $(this).find('.circle').attr('data-percent');
            var animate = $(this).data('animate');
            if (elementPos < topOfWindow + $(window).height() - 20 && !animate) {
                $(this).data('animate', true);
                $(this).find('.circle').circleProgress({
                    // startAngle: -Math.PI / 2,
                    value: percent / 100,
                    size : 200,
                    thickness: 15,
                    fill: {
                        color: 'black'
                    }
                }).on('circle-animation-progress', function (event, progress, stepValue) {
                    $(this).find('strong').text((stepValue*100).toFixed(0) + "%");
                }).stop();
            }
        });
    }

    animateElements();
    $(window).scroll(animateElements);
});
</script>
</html>