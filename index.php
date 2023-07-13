<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require 'db.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>E-Sertifikat IHBS</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">
 
  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- script typewritter -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
</head>


	</head>

<body>

	 <!-- ======= Header ======= -->
	 <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>ECertificate<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li><a href="#"><span>Home</span> <i class="nav-link scrollto"></i></a>
          </li>
          <li><a class="nav-link scrollto" href="index.html#certificate">Certificate</a></li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <!-- <a class="btn-getstarted scrollto" href="index.html#certificate">Get Started</a> -->

    </div>
  </header><!-- End Header -->

  

 
    <section id="hero-animated" class="hero-animated d-flex align-items-center" style="margin-top: 10px; margin-bottom: 10px;">
  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">  
    <h2 class="welcome-title">Welcome to <span style="color: #218838">ECertificate Ihbs</span></b><br>
    
    </div>
    

  </section>

  <main id="main">

  <!-- <img class="center" height="50" width="50" src="ihbs-logo.png"> -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">

        <div class="form-container">
        <form action="index.php" method="post">
    
          <div class="form-group">
            <h3>Masukan Nama</h3>
            <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Isi Nama Depan Atau Belakang Anda"><br>
            <input type="submit" class="btn btn-success" value="Check" name="sertifikat"></input><br>
          </div>
          </form>
          <?php
								 $hasil = "";
									
                  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
									  $keyword = $_POST["keyword"];
                    if (empty($keyword)){
                      echo '<center><h3><i>**Data tidak boleh kosong!</i></h3></center>';
                    } else {
										$sql = "SELECT * FROM peserta WHERE nama LIKE '%".$keyword."%'";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
											while ($row = $result->fetch_assoc()){
												$hasil = $row['nama'];
												echo '<center><h3><i>**Nama anda terdaftar sebagai peserta!</i></h3></center><br>';

											}
										} else 
                    {
											echo '<center><h3><i>**Data Tidak Ada!</i></h3></center>';
										}
                  }
									}
									$conn->close();
								?>

            <form action="sertifikat.php" method="post">    
              <div class="form-group">
                <h3>Nama Di Serifikat</h3>
                <input type="text" class="form-control" name="namadisable" disabled="yes" value="<?php echo (isset($keyword))?$hasil:'your name will shown automatic';?>" >
                <input type="hidden" name="namacetak" value="<?php echo (isset($keyword))?$hasil:'your name will shown automatic';?>"><br>
                <input id="get" type="submit" class="btn btn-success" value="Buat Sertifikat" name="sertifikat"></input>
          </div>
          <center><h3>Lihat <a href="list-peserta.html"> Daftar Peserta</a></h3></center>
        </form>
      </div>
    </div>
  </div>
  </div>

			
         
      </div>
    </section><!-- End About Section -->

    
      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
             </div>

      </div>

      <div class="map">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15861.304766150468!2d106.896897!3d-6.3517991!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ecc44a6e9259%3A0x3e4e6f976ed54731!2sIbnu%20Hajar%20Boarding%20School!5e0!3m2!1sen!2sid!4v1689133699529!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div><!-- End Google Maps -->

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Jl. Mushola Fathul Ulum No.11, RT.9/RW.1, Munjul, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13850</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Website:</h4>
                  <p>https://ihbs.sch.id/</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>(021)-84312279</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><input id="get" type="submit" class="btn btn-success" value="send-message" name="send-message"></input>
          </div></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>ECertificate</h3>
              <p>
			  Munjul Cipayung Jakarta Timur<br>
                DKI Jakarta 13850, Indonesia<br><br>
                <strong>Phone:</strong>(021)-84312279<br>
                <strong>Website:</strong>https://ihbs.sch.id/<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Certificate</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Education</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Tahfidz</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Adab</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Akhlak</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>ECertificate</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">IHBS IT-Dev</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="wordtyp.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>