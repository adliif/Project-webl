<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Pemesanan - Owner</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@company.com</li>
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="<?php echo base_url('logout') ?>" style="color: #000;background-color:red" title="Logout"><i class="fab fa-solid fa-power-off" style="color: #fff"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>VARILITEL</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="<?= base_url('owner') ?>">Home</a></li>
                        <li><a href="<?= base_url('staf') ?>">Staf</a></li>
                        <li><a href="<?= base_url('kamar') ?>">Kamar</a></li>
                        <li><a href="<?= base_url('pemesanan') ?>"><i class="fa fa-calendar"></i> Pemesanan</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a>  /  Pemesanan</span>
          <h3>Pemesanan</h3>
        </div>
      </div>
    </div>
  </div>
</br>
  <div class="container">
  <p> Daftar Pemesanan Hotel </p>
  </br>
<table class="table" border="1" id="table" 
     data-toggle="table"
     data-search="true"
     data-filter-control="true" 
     data-show-export="true"
     data-click-to-select="true"
     data-toolbar="#toolbar">
	<thead>
		<tr>
			<th data-field="prenom" data-filter-control="input" data-sortable="true">Id Pemesanan</th>
      <th data-field="examen" data-filter-control="select" data-sortable="true">Nomor Kamar</th>
			<th data-field="date" data-filter-control="select" data-sortable="true">Tanggal Pemesanan</th>
			<th data-field="examen" data-filter-control="select" data-sortable="true">Tanggal Masuk</th>
			<th data-field="note" data-sortable="true">Tanggal Keluar</th>
      <th data-field="note" data-sortable="true">Harga</th>
		</tr>
	</thead>
	<tbody>
  <?php foreach ($reservations as $reservation) : ?>
            <tr>
                <td><?= $reservation['id']; ?></td>
                <td><?= $reservation['nomor_kamar']; ?></td>
                <td><?= $reservation['tanggal_pemesanan']; ?></td>
                <td><?= $reservation['tanggal_masuk']; ?></td>
                <td><?= $reservation['tanggal_keluar']; ?></td>
                <td><?= $reservation['harga']; ?></td>
            </tr>
        <?php endforeach; ?>
		
	</tbody>
</table>
</div><br><br>

  <footer class="footer-no-gap mt-5">
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2023 Varilitel Agency Co., Ltd. All rights reserved. 
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>