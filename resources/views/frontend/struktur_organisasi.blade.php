<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PUTR | Bina Kontruksi & Bina Marga</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/icon.png" rel="icon">
  <link href="img/icon(2).png" rel="icon(2)">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/">PUTR</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Beranda</a></li>
          <li><a class="nav-link scrollto" href="/#visimisi">Visi & Misi</a></li>
          <li><a class="nav-link scrollto" href="/#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="/#contact">Kontak</a></li>
          <li><a class="nav-link scrollto active" href="struktur_organisasi">Struktur Organisasi</a></li>
          @auth
            <li><a class="getstarted scrollto" href="dashboard">Back to Dashboard</a></li>
          @else
            <li><a class="getstarted scrollto" href="login.login">Masuk</a></li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!-- ======= Struktur Organisasi Section ======= -->
    <section id="struktur" class="struktur">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Struktur Organisasi</h2>
                <p>
                    Dinas Pekerjaan Umum dan Tata Ruang Provinsi Sulawesi Selatan
                </p>
                <center>
                    <img src="assets/img/Struktur_Organisasi.jpg" alt="struktur organisasi">
                </center>
            </div>
        </div>
    </section><!-- End Struktur Organisasi Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-md-2 footer-contact">
            <h3>PUTR</h3>
            <p>
              Jl. A. P. Pettarani No.90, Masale, <br>
              Panakkukang, Kota Makassar, <br>
              Sulawesi Selatan 90222 <br><br>
              <strong>Website Resmi:</strong> <a href="http://putr.sulselprov.go.id/">putr.sulselprov.go.id</a> <br>
              <strong>Kontak:</strong> 0811-4444-335 <br>
            </p>
          </div>

          <div class="col-lg-4 col-md-2 footer-links">
            <h4>Link Terkait</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/#hero">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#visimisi">Visi & Misi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#about">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#contact">Kontak</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/struktur_organisasi">Struktur Organisasi</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Dinas Pekerjaan Umum Dan Tata Ruang Provinsi Sulawesi Selatan</span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/PUTRSULSELPROV/with_replies" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.instagram.com/putrsulsel/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://web.facebook.com/profile.php?id=100066766088832" class="facebook"><i class="bx bxl-facebook"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>