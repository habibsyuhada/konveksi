<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  
  <!--====== Title ======-->
  <title>Smash - Bootstrap Business Template</title>
  
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/landing_page/images/favicon.png" type="image/png">
    
  <!--====== Magnific Popup CSS ======-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/landing_page/css/magnific-popup.css">
    
  <!--====== Slick CSS ======-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/landing_page/css/slick.css">
    
  <!--====== Line Icons CSS ======-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/landing_page/css/LineIcons.css">
    
  <!--====== Bootstrap CSS ======-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/landing_page/css/bootstrap.min.css">
  
  <!--====== Default CSS ======-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/landing_page/css/default.css">
  
  <!--====== Style CSS ======-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/landing_page/css/style.css">
  <style>
    .carousel-item{
      background-color: #f53d2d;
    }
    .navbar-area .navbar .navbar-btn li a.solid{
      color: #f53d2d;
    }
    .main-btn{
      color: #f53d2d;
    }
    .rounded-buttons .rounded-two{
      background-color: #f53d2d;
    }
    .slider-content .slider-btn li a.rounded-two:hover{
      color: #f53d2d;
    }
    .navbar-area.sticky .navbar .navbar-btn li a.solid{
      background-color: #f53d2d;
      border-color: #f53d2d;
    }
    .back-to-top{
      background-color: #f53d2d;
    }
    .carousel-item::before{
      background-image: linear-gradient(rgba(245, 61, 45, 0.3) 0%, rgba(255, 242, 117, 0.3) 100%);
    }
    .single-portfolio .portfolio-image .portfolio-overlay .portfolio-content .portfolio-icon a{
      color: #f53d2d;
    }
    .portfolio-menu ul li::before{
      background-image: linear-gradient(to right, rgba(245, 61, 45, 1) 0%, rgba(255, 242, 117, 1) 100%);
    }

    .single-features .features-content .text{
      font-size: 16px;
    }
    .bg-orange{
      background-color: #f53d2d;
    }
  </style>
</head>

<body>
  <!--[if IE]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
  <!--====== PRELOADER PART START ======-->

  <div class="preloader">
    <div class="loader">
      <div class="ytp-spinner">
        <div class="ytp-spinner-container">
          <div class="ytp-spinner-rotator">
            <div class="ytp-spinner-left">
              <div class="ytp-spinner-circle"></div>
            </div>
            <div class="ytp-spinner-right">
              <div class="ytp-spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--====== PRELOADER PART ENDS ======-->
  
  <!--====== NAVBAR TWO PART START ======-->

  <section class="navbar-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
             
            <a class="navbar-brand" href="#">
              <img src="<?php echo base_url() ?>assets/landing_page/images/logo.svg" alt="Logo">
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
              <ul class="navbar-nav m-auto">
                <li class="nav-item"><a href="index.html">Beranda</a></li>
                <li class="nav-item active"><a href="detail.html">Nama Produk</a></li>
                <!-- <li class="nav-item"><a href="#team">Team</a></li> -->
                <!-- <li class="nav-item"><a href="#contact">Contact</a></li> -->
              </ul>
            </div>
            
            <div class="navbar-btn d-none d-sm-inline-block">
              <ul>
                <li><a class="solid" href="#">BELI SEKARANG</a></li>
              </ul>
            </div>
          </nav> <!-- navbar -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <!--====== NAVBAR TWO PART ENDS ======-->

  <section style="height: 84px; width: 100%; background: #f53d2d;">
    
  </section>
  
  <section id="about-us" class="features-area">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col">
          <img src="<?php echo base_url() ?>file/image/<?php echo $product['picture_thumb'] ?>" alt="Logo" width="100%" class="p-3">
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="single-features mt-40">
            <div class="features-title-icon d-flex justify-content-between">
              <h2 class="features-title"><?php echo $product['name'] ?></h2>
            </div>
            <div class="features-content">
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="features-title">Harga : Rp. <?php echo number_format($product['price'], 2,",",".") ?></h4>
                  <p class="text text-justify">
                    <?php echo $product['description'] ?> 
                  </p>
                </div>
              </div>
            </div>
          </div> <!-- single features -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <section id="product" class="portfolio-area portfolio-four pb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="section-title text-center pb-10">
            <h3 class="title">PILIHAN WARNA YANG TERSEDIA</h3>
          </div> <!-- section title -->
        </div>
      </div> <!-- row -->
      <div class="row">
        <div class="col-md-3">
          <img src="<?php echo base_url() ?>assets/landing_page/img/slider/jaket_biru.png" alt="Hero">
          <h5 class="text-center font-weight-bold">BIRU</h5>
        </div>
        <div class="col-md-3">
          <img src="<?php echo base_url() ?>assets/landing_page/img/slider/jaket_biru.png" alt="Hero">
          <h5 class="text-center font-weight-bold">BIRU</h5>
        </div>
        <div class="col-md-3">
          <img src="<?php echo base_url() ?>assets/landing_page/img/slider/jaket_biru.png" alt="Hero">
          <h5 class="text-center font-weight-bold">BIRU</h5>
        </div>
        <div class="col-md-3">
          <img src="<?php echo base_url() ?>assets/landing_page/img/slider/jaket_biru.png" alt="Hero">
          <h5 class="text-center font-weight-bold">BIRU</h5>
        </div>
        <div class="col-md-3">
          <img src="<?php echo base_url() ?>assets/landing_page/img/slider/jaket_biru.png" alt="Hero">
          <h5 class="text-center font-weight-bold">BIRU</h5>
        </div>
        <div class="col-md-3">
          <img src="<?php echo base_url() ?>assets/landing_page/img/slider/jaket_biru.png" alt="Hero">
          <h5 class="text-center font-weight-bold">BIRU</h5>
        </div>
        <div class="col-md-3">
          <img src="<?php echo base_url() ?>assets/landing_page/img/slider/jaket_biru.png" alt="Hero">
          <h5 class="text-center font-weight-bold">BIRU</h5>
        </div>
        <div class="col-md-3">
          <img src="<?php echo base_url() ?>assets/landing_page/img/slider/jaket_biru.png" alt="Hero">
          <h5 class="text-center font-weight-bold">BIRU</h5>
        </div>
        <div class="col-md-3">
          <img src="<?php echo base_url() ?>assets/landing_page/img/slider/jaket_biru.png" alt="Hero">
          <h5 class="text-center font-weight-bold">BIRU</h5>
        </div>
      </div>
    </div> <!-- container -->
  </section>

  <section id="product" class="features-area pb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="section-title text-center pb-10">
            <h3 class="title">DAFTAR UKURAN</h3>
            <br>
          </div> <!-- section title -->
        </div>
      </div> <!-- row -->
      <div class="row justify-content-center">
        <div class="col-md-12">
          <table class="table table-bordered table-hover text-center bg-white">
            <thead class="bg-orange text-white">
              <tr>
                <th></th>
                <th>Panjang Baju</th>
                <th>Lingkar Dada</th>
                <th>Panjang Lengan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="bg-orange text-white">S</th>
                <td>66</td>
                <td>46</td>
                <td>22</td>
              </tr>
              <tr>
                <th class="bg-orange text-white">M</th>
                <td>66</td>
                <td>46</td>
                <td>22</td>
              </tr>
              <tr>
                <th class="bg-orange text-white">L</th>
                <td>66</td>
                <td>46</td>
                <td>22</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div> <!-- container -->
  </section>

  <section id="contact" class="portfolio-area">
    <div class="container">
      <div class="contact-info pt-30">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <a href="https://wa.me/6281365538139?text=Halo, saya mau beli barang ini, masih ada?" class="btn bg-orange text-white font-weight-bold btn-lg btn-flat btn-block"><i class="lni lni-whatsapp"></i> PESAN BARANG DISINI</a>
          </div>
        </div> <!-- row -->
      </div> <!-- contact info -->
    </div> <!-- container -->
  </section>
  
  <!--====== FOOTER PART START ======-->

  <section class="footer-area footer-dark p-0">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="footer-support text-center p-3">
            <span class="m-0">KONVEKSI © 2021</span>
          </div>
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <!--====== FOOTER PART ENDS ======-->
  
  <!--====== BACK TOP TOP PART START ======-->

  <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

  <!--====== BACK TOP TOP PART ENDS ======-->  

  <!--====== PART START ======-->

<!--
  <section class="">
    <div class="container">
      <div class="row">
        <div class="col-lg-">
          
        </div>
      </div>
    </div>
  </section>
-->

  <!--====== PART ENDS ======-->




  <!--====== Jquery js ======-->
  <script src="<?php echo base_url() ?>assets/landing_page/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="<?php echo base_url() ?>assets/landing_page/js/vendor/modernizr-3.7.1.min.js"></script>
  
  <!--====== Bootstrap js ======-->
  <script src="<?php echo base_url() ?>assets/landing_page/js/popper.min.js"></script>
  <script src="<?php echo base_url() ?>assets/landing_page/js/bootstrap.min.js"></script>
  
  <!--====== Slick js ======-->
  <script src="<?php echo base_url() ?>assets/landing_page/js/slick.min.js"></script>
  
  <!--====== Magnific Popup js ======-->
  <script src="<?php echo base_url() ?>assets/landing_page/js/jquery.magnific-popup.min.js"></script>
  
  <!--====== Ajax Contact js ======-->
  <script src="<?php echo base_url() ?>assets/landing_page/js/ajax-contact.js"></script>
  
  <!--====== Isotope js ======-->
  <script src="<?php echo base_url() ?>assets/landing_page/js/imagesloaded.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>assets/landing_page/js/isotope.pkgd.min.js"></script>
  
  <!--====== Scrolling Nav js ======-->
  <script src="<?php echo base_url() ?>assets/landing_page/js/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ?>assets/landing_page/js/scrolling-nav.js"></script>
  
  <!--====== Main js ======-->
  <script src="<?php echo base_url() ?>assets/landing_page/js/main.js"></script>
  <script>
    //===== Sticky

    $(window).on('scroll', function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 20) {
            $(".navbar-area").removeClass("sticky");
            $(".navbar-area img").attr("src", "<?php echo base_url() ?>assets/landing_page/images/logo.svg");
        } else {
            $(".navbar-area").addClass("sticky");
            $(".navbar-area img").attr("src", "<?php echo base_url() ?>assets/landing_page/images/logo-2.svg");
        }
    });
  </script>
</body>

</html>
