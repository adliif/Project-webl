<?php echo $this->extend('layout/template') ?>
<?php echo $this->section('content'); ?>

<div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">Lampung, <em>Indonesia</em></span>
          <h2>Hurry!<br>Get the Best Hotel for you</h2>
        </div>
      </div>
      <div class="item item-3">
        <div class="header-text">
          <h2>Act Now!<br>Get the highest level penthouse</h2>
        </div>
      </div>
    </div>
  </div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="card">
          <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
              <h1>GRAFIK TOTAL PEMESANAN KAMAR <?php echo date("Y") ?></h1>

              
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                   <div class="card card-primary">
                    <div class="card-header d-none">
                      <!-- <h3 class="card-title">Grafik Area Transaksi <?php echo date('Y') ?></h3> -->
                    </div>
                    <div class="card-body">
                      <div class="chart">
                        <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
              </div>
            </div>
          </div>
        </div>
              
            </div>
          </div>
      </div>
  </div>
</div>


<div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image">
            <img src="assets/images/featured.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>| Featured</h6>
            <h2>the best room of the year</h2>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Assessment based on what ?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  The assessment is based on surveys and input provided by customers who have used this room </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  What advantages are provided ?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  This suite type room has many plus points, including the room's furnishings being very simple and following the French housing style. Apart from that, this room has good lighting so you will feel comfortable and leave a good impression in this room.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="info-table">
            <ul>
              <li>
                <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                <h4>185 m2<br><span>Total Flat Space</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                <h4>Contract<br><span>Contract Ready</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                <h4>Payment<br><span>Payment Process</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                <h4>Safety<br><span>24/7 Under Control</span></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="contact section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Hotel</h6>
            <h2>Location</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22472.267626459976!2d105.23281594845217!3d-5.329022443496633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c5f60802221d%3A0xac5d5819e12c9bcf!2sUnila%20Inn!5e0!3m2!1sid!2sid!4v1699510601209!5m2!1sid!2sid" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>


<!-- ChartJS -->
<script src="<?php echo base_url()?>/chart.js/Chart.min.js"></script>




<!-- Page specific script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    // var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    <?php 
                $januari = '0';
                $febuari = '0';
                $maret = '0';
                $april = '0';
                $mei = '0';
                $juni = '0';
                $juli = '0';
                $agustus = '0';
                $september = '0';
                $oktober = '0';
                $november = '0';
                $desember = '0';

    foreach ($grafik_pemesanan as $value) {
                $januari = $value->jan;
                $febuari = $value->feb;
                $maret = $value->mar;
                $april = $value->apr;
                $mei = $value->mei;
                $juni = $value->juni;
                $juli = $value->juli;
                $agustus = $value->agt;
                $september = $value->sep;
                $oktober = $value->okt;
                $november = $value->nov;
                $desember = $value->des;
                
              }  ?>

    var areaChartData = {
      labels  : ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'June', 'July','Agt','Sep','Okt','Nov','Des'],
      datasets: [
        {
          label               : 'PEMESANAN',
          backgroundColor     : 'rgba(20, 205, 4)',
          borderColor         : 'rgba(24, 24, 24)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : ["<?php echo $januari ?>","<?php echo $febuari ?>","<?php echo $maret ?>","<?php echo $april ?>","<?php echo $mei ?>","<?php echo $juni ?>","<?php echo $juli ?>","<?php echo $agustus ?>","<?php echo $september ?>","<?php echo $oktober ?>","<?php echo $november ?>","<?php echo $desember ?>"]
        }

      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : true,
      responsive : true,
      legend: {
        display: true
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : true,
          }
        }],
        yAxes: [{
          gridLines : {
            display : true,
          }
        }]
      }
    }

 
    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    // var temp1 = areaChartData.datasets[1]
    // barChartData.datasets[0] = temp1
    barChartData.datasets[0] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })


// =================================================
  })
</script>






<?php echo $this->endSection(); ?>