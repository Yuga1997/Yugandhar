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
          <li class="active"><a href="portfolio.php">Portfolio</a></li>
          <li ><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
      <?php include 'social-links.php';?>
    </div>
  </header>

  <main id="main">

    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Individual </li>
              <li data-filter=".filter-card">Group </li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/project2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Website Design</h4>
                <p>Static Website</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/project2.png" data-gall="portfolioGallery" class="venobox" title="Web 3"  target="_blank"><i class="bx bx-plus"></i></a>
                  <a href="http://abroadstudyplan.com/" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details" target="_blank"><i class="bx bx-link" ></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/project3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Website Design</h4>
                <p>Dynamic Website</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/project3.png" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="http://srkalumni.com/" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details" target="_blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
		<div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/project.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Website Design</h4>
                <p>Static Website</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/project1.png" data-gall="portfolioGallery" class="venobox" title="App 1"  target="_blank"><i class="bx bx-plus"></i></a>
                  <a href="http://www.workberg.in/" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details" target="_blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
		  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/project5.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Website Design</h4>
                <p>Static Website</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/project5.png" data-gall="portfolioGallery" class="venobox" title="App 1" target="_blank"><i class="bx bx-plus"></i></a>
                  <a href="http://www.propertyjager.in/" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details" target="_blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
		  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/project6.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Website Design</h4>
                <p>Static Website</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/project6.png" data-gall="portfolioGallery" class="venobox" title="App 1  target="_blank""><i class="bx bx-plus"></i></a>
                  <a href="http://pgjager.com/" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details" target="_blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
		  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/project4.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web Development </h4>
                <p>Frontend Development</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/project4.png" data-gall="portfolioGallery" class="venobox" title="App 1"  target="_blank"><i class="bx bx-plus"></i></a>
                  <a href="https://knowledgebase.proprofs.com/reports-2" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            
          </div>


        </div>

      </div>
    </section>

  </main>

  <!--<div id="preloader"></div>-->
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 
  <script src="assets/js/main.js"></script>

</body>

</html>