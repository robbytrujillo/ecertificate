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

  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/" />

<!-- Bootstrap core CSS -->
<link href="/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="/assets/libs/fontawesome/css/all.min.css" />

<!-- Custom styles for this template -->
<link rel="stylesheet" href="/assets/css/app.css" />

  <style>
      /* Tambahkan style ini untuk memperbesar ukuran font pada form Certificate */
      .form-certificate label,
      .form-certificate input[type="text"],
      .form-certificate input[type="submit"] {
        font-size: 18px;
      }
    </style>

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
        <li><a href="#"><span>Home</span> <i class="nav-link scrollto"></i></a></li>
        <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle d-none"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<section id="hero-animated" class="hero-animated d-flex align-items-center">
  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
    <h2>Welcome to <span>ECertificate IHBS</span></h2>
  </div>
</section>

<main role="main" class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
			<form action="index.php" method="post">
              <div class="form-group">
                <label for="keyword"><strong>Masukan Nama</strong></label>
                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Isi Nama Depan Atau Belakang Anda" />
              </div>
              <input type="submit" class="btn btn-success" value="Check" name="sertifikat" /><br /><br /><br />
            </form>
            <?php
            $hasil = "";
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $keyword = $_POST["keyword"];

              $sql = "SELECT * FROM peserta WHERE nama LIKE '%" . $keyword . "%'";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  $hasil = $row['nama'];
                  echo '<i>**Nama anda terdaftar sebagai peserta!</i><br>';
                }
              } else {
                echo '<i>**Data Tidak Ada!</i>';
              }
            }
            $conn->close();
            ?>
            <form action="sertifikat.php" method="post">
              <div class="form-group">
                <label for="namadisable"><strong>Nama yang terdaftar</strong></label>
                <input type="text" class="form-control" name="namadisable" disabled="yes" value="<?php echo (isset($keyword)) ? $hasil : 'your name will shown automatic'; ?>" />
                <input type="hidden" name="namacetak" value="<?php echo (isset($keyword)) ? $hasil : 'your name will shown automatic'; ?>" />
              </div>
              <input id="get" type="submit" class="btn btn-success" value="Buat Sertifikat" name="sertifikat" />
            </div>
          </div>
        </div>
      </div>
    </main>


</div>
</section><!-- End About Section -->

<br />
<br />
<br />
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-header">
      <h2>Contact Us</h2>
    </div>

  </div>

  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15861.304766150468!2d106.896897!3d-6.3517991!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ecc44a6e9259%3A0x3e4e6f976ed54731!2sIbnu%20Hajar%20Boarding%20School!5e0!3m2!1sen!2sid!4v1689133699529!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div><!-- End Google Maps -->

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
          <div class="text-center"><button type="submit">Send Message</button></div>
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
        Designed by <a href="https://bootstrapmade.com/">IHBS IT-Dev</a>
      </div>
    </div>

    <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
      <a href="#" class="twitter"><i class="bi bi-twitter"></
	  </div>
  </div>
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

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script src="/assets/libs/jquery/jquery-3.7.0.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>');
    </script>
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

