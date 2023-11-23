<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Reservasi</title>

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
            <li><i class="fa fa-envelope"></i> info@comp any.com</li>
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
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
                      <li><a href="<?=base_url('/user')?>">Home</a></li>
                      <li><a href="<?=base_url('/reservasi')?>" class="active">Reservasi</a></li>
                      <li><a href="<?=base_url('/contact')?>">Contact Us</a></li>
                      <li><a href="<?=base_url('/transaction')?>"><i class="fa fa-calendar"></i> Transaction</a></li>
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
          <span class="breadcrumb"><a href="#">Home</a> / Reservasi</span>
          <h3>Reservasi</h3>
        </div>
      </div>
    </div>
  </div>

    <form class="container" method="post" action="<?=base_url('/user/'. $pemesanan['id'])?>" enctype="multipart/form-data" style="width: 70%;">
    <input type="hidden" name="_method" value="PUT">
    <?= csrf_field() ?>

        <div class="mb-3 gap-4 mt-5">
            <input type="text" class="form-control <?=(empty(validation_show_error('tanggal_pemesanan'))) ? '' : 'is-invalid' ?>" name="tanggal_pemesanan" value="<?= $pemesanan['tanggal_pemesanan'] ?>" placeholder="tanggal_pemesanan">
            <div class="invalid-feedback">
                <?= validation_show_error('tanggal_pemesanan') ?>
            </div>
        </div>
        <div class="mb-3 gap-4">
            <input type="text" class="form-control <?= (empty(validation_show_error('tanggal_masuk'))) ? '' : 'is-invalid' ?>" name="tanggal_masuk" value="<?= $pemesanan['tanggal_masuk'] ?>" placeholder="tanggal_masuk">
            <div class="invalid-feedback">
                <?= validation_show_error('tanggal_masuk') ?>
            </div>
        </div>
        <tr>
        <div class="mb-3 gap-4">
            <input type="text" class="form-control <?= (empty(validation_show_error('tanggal_keluar'))) ? '' : 'is-invalid' ?>" name="tanggal_keluar" value="<?= $pemesanan['tanggal_keluar'] ?>" placeholder="tanggal_keluar">
            <div class="invalid-feedback">
                <?= validation_show_error('tanggal_keluar') ?>
            </div>
        </div>
        <div class="mb-3 gap-4">
            <input type="text" class="form-control <?= (empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>" name="nama" value="<?= $pemesanan['nama'] ?>" placeholder="nama">
            <div class="invalid-feedback">
                <?= validation_show_error('nama') ?>
            </div>
        </div>
        <div class="mb-3 gap-4">
            <input type="text" class="form-control <?= (empty(validation_show_error('harga'))) ? '' : 'is-invalid' ?>" name="harga" value="<?= $pemesanan['harga'] ?>" placeholder="harga">
            <div class="invalid-feedback">
                <?= validation_show_error('harga') ?>
            </div>
        </div>
        <tr>
        <select class="form-select" aria-label="nomor_kamar" <?= (empty(validation_show_error('nomor_kamar'))) ? '' : 'is-invalid' ?> name="nomor_kamar" id="nomor_kamar">
            <option disabled selected>Pilih kamar Anda</option>
            <?php 
                foreach($kamar as $item):
            ?>
            <option value="<?=$item['id']?>" <?= ($item['id'] == old('nomor_kamar')) ? 'selected' : '' ?>>
                <?=$item['nama_kamar']?>
            </option>
            <?php endforeach;?>
        </select>
        <div class="invalid-feedback">
            <?= validation_show_error('nomor_kamar'); ?>
        </div>
        </tr>
                    
        <div class="d-grid gap-2 mx-auto mt-4" style="width: 50%;">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>

   <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
        
        Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution: <a href="https://themewagon.com">ThemeWagon</a></p>
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