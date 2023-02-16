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
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>

      <?php include 'social-links.php';?>

    </div>

  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1>Yugandhar Kumar S</h1>
      <h2>I'm a professional Web Designer & Developer. </h2>
      <a href="about.php" class="btn-about">About Me</a>
    </div>
  </section>

  <?php include 'footer-links.php';?>

</body>

</html>