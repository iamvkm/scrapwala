<?php

  if (!empty($_POST['submit'])) 
  {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $location = $_POST['upi'];
    $type = $_POST['address'];

    // Account details
    $apiKey = urlencode('RJYClXWjNjs-5f6V7R6yAWZGcGVMzWbWdwdFEd5IjZ');

    // Message details
    $numbers = array(919112244355);
    $sender = urlencode('TXTLCL');
    $message = rawurlencode($name." ".$phone." ".$upi." ".$address);
   
    $numbers = implode(',', $numbers);
   
    // Prepare data for POST request
    $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
   
    // Send the POST request with cURL
    $ch = curl_init('https://api.textlocal.in/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    //echo $response;
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
  <meta name="viewport" content="width=device-width, initial-scale=1, 
  user-scalable=no, maximum-scale=1, minimum-scale=1">

  <!-- Basic Meta-Tags -->
  <meta name="description" content="Get the waste in your home or workplace exchanged with money. Earn money and also help everyone make the world and our places cleaner. Check our website to know more." />
  <meta name="keywords" content="Repair, Puncture, Bike, Car, Pune" />
  <meta name="classification" content="Business" />

  <meta name="distribution" content="global" />
  <meta name="author" content="Sumedh Meshram">

  <meta name="theme-color" content="#28B463" />
  <meta property="og:image" itemprop="image" content="assets/img/favicon.png">
  <title>Home | ScrapWala | Sell Scrap Online</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1><a href="index.php">ScrapWala</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li class="drop-down"><a href="">Learn More</a>
            <ul>
              <li><a href="#about">About Us</a></li>
              <li><a href="#team">How we work</a></li>
              <li><a href="#team">FAQs</a></li>
            </ul>
          </li>
          <li><a href="#services">Tie Up</a></li>
          <li><a href="#portfolio">Rate Card</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#contact">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
        <div class="row mt-1 justify-content-center">
            <div class="col-lg-8">
                <form action="book.php" method="POST" role="form">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                    </div>
                    <div class="form-group">
                      <input type="tel" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="upi" placeholder="Enter UPI ID" name="upi">
                      </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" id="address" placeholder="Enter Address (within Pune)" name="address"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default btn-block" style="background-color: #28b463; text-align: center;">Submit</button>
                  </form>
            </div>
  
          </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ScrapWala</h3>
            <p>
              Opp. Hotel Royal, Porwal Road <br>
              Lohegaon, Pune 411047<br>
              Maharashtra, India <br><br>
              <strong>Phone:</strong> +91 91122 44355<br>
              <strong>Email:</strong> scrapwala@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tie up</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Rate Card</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Testinomials</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Scrap Collection</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Scrap Rate Dashboard</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dealer Tie Ups</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>You can subscribe to our newsletter to get latest updates and exciting offers.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>ScrapWala</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
          Designed by <a href="https://bootstrapmade.com/">Vivek Mishra</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-google"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>