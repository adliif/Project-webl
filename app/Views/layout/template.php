<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title><?php echo $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/owl.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap-sweetalert/sweet-alert.css">
    

     <!-- DataTables -->
        <link href="<?php echo base_url('datatables/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('datatables/buttons.bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('datatables/fixedHeader.bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('datatables/responsive.bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('datatables/scroller.bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('datatables/dataTables.colVis.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('datatables/dataTables.bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('datatables/fixedColumns.dataTables.min.css') ?>" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    
    <!-- Add the Bootstrap CSS file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Add the DataTables CSS file -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

    <!-- Add the Bootstrap JS file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
<style type="text/css">
            .glass{
                    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
                    backdrop-filter: blur(10px);
                    -webkit-backdrop-filter: blur(10px);
                    border-radius: 20px;
                    border:1px solid rgba(255, 255, 255, 0.18);
                    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
                }
</style>
  </head>

<body>
<script src="<?php echo base_url('js/jquery.min.js') ?>"></script>

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
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- menu -->
  <?php echo $this->include('layout/menu'); ?>
  <!-- isi -->
  <?php echo $this->renderSection('content'); ?>


    <footer>
    <div class="container">
      <div class="col-lg-8">
        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
        
        Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution: <a href="https://themewagon.com">ThemeWagon</a></p>
      </div>
    </div>
  </footer>



<div class="modal" tabindex="-1" id="loading1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Loading Data</h5>
       
      </div>
      <div class="modal-body">
            <div class="spinner-grow text-primary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-success" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-danger" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-warning" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-info" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-light" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-dark" role="status">
              <span class="sr-only"></span>
            </div>
      </div>
     

    </div>
  </div>
</div>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url()?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/isotope.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/owl-carousel.js"></script>
  <script src="<?php echo base_url()?>/assets/js/counter.js"></script>
  <script src="<?php echo base_url()?>/assets/js/custom.js"></script>




<script src="<?php echo base_url('assets/bootstrap-sweetalert/sweet-alert.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery.sweet-alert.init.js')?>"></script>


<!-- datatables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.12.0/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/datatables.min.css"/> 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.12.0/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/datatables.min.js"></script>



  </body>
</html>
