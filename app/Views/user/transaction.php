<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title><?= $title ?></title>

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
                      <li><a href="<?=base_url('/reservasi')?>">Reservasi</a></li>
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
          <span class="breadcrumb"><a href="#">Home</a> / Transaction</span>
          <h3>Transaction</h3>
        </div>
      </div>
    </div>
  </div>

    <div class="container">
        <table class="table table-hover table-light table-bordered mt-5" style="margin:auto; text-align:center;">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Order Date</th>
                    <th>Check-in</th>
                    <th>Chect-out</th>
                    <th>Name</th>
                    <th>Room</th>
                    <th>Price</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($users as $pemesanan){
                ?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $pemesanan['tanggal_pemesanan'] ?></td>
                    <td><?= $pemesanan['tanggal_masuk'] ?></td>
                    <td><?= $pemesanan['tanggal_keluar'] ?></td>
                    <td><?= $pemesanan['nama'] ?></td>
                    <td><?= $pemesanan['nomor_kamar'] ?></td>
                    <td><?= $pemesanan['harga'] ?></td>
                    <td class="d-flex justify-content-center">
                        <a href="<?= base_url('user/'.$pemesanan['id'].'/edit') ?>" class="btn btn-warning" style="margin-right: 5px;">Reschedule</a>
                        <form id="delete-form-<?= $pemesanan['id'] ?>" action="<?= base_url('user/'.$pemesanan['id']) ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button type="button" class="btn btn-danger" onclick="confirmDelete(<?= $pemesanan['id'] ?>)">Refund</button>
                        </form>
                    </td>

                    <script>
                        function confirmDelete(userId) {
                            if (confirm("Are you sure you want to delete this item?")) {
                                document.getElementById("delete-form-" + userId).submit();
                            }
                        }
                    </script>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

  <footer>
    <div class="container" style="margin-top: 300px;">
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