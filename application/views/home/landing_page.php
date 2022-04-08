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
    
  <!--====== Line Icons CSS ======-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/landing_page/css/fontawasome.min.css">
    
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

    /*Hover Effect*/
    .hover-effect-1{
      transition: all .1s linear;
      cursor: pointer;
    }
    .to-yellow.hover-effect-1:hover, .to-yellow.hover-effect-1:focus{
      animation: pulse-effect-yellow 0.2s;
      box-shadow: 0 0 0 1rem rgba(0, 0, 0,0),
      inset 0 0 0 10rem #ffffff;
      color: #f53d2d !important;
      /* background: #ffffff !important; */
    }
    @keyframes pulse-effect-yellow {
      0% { 
        box-shadow: 0 0 0 0 #ffffff; 
      }
    }
    .border-2px{
      border-width: 3px !important;
    }
    .text-uncolor{
      color: unset;
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
                <li class="nav-item active"><a class="page-scroll" href="#home">Beranda</a></li>
                <li class="nav-item"><a class="page-scroll" href="#about-us">Tentang Kami</a></li>
                <li class="nav-item"><a class="page-scroll" href="#product">Produk</a></li>
                <li class="nav-item"><a class="page-scroll" href="#review">Review</a></li>
                <li class="nav-item"><a class="page-scroll" href="#contact">KONTAK</a></li>
                <!-- <li class="nav-item"><a class="page-scroll" href="#team">Team</a></li> -->
                <!-- <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li> -->
              </ul>
            </div>
            
            <div class="navbar-btn d-none d-sm-inline-block">
              <ul>
                <li><a class="solid" href="https://wa.me/6281365538139?text=Halo, saya mau beli barang ini, masih ada?">BELI SEKARANG</a></li>
              </ul>
            </div>
          </nav> <!-- navbar -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <!--====== NAVBAR TWO PART ENDS ======-->
  
  <!--====== SLIDER PART START ======-->

  <section id="home" class="slider_area">
    <div id="carouselThree" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
        <li data-target="#carouselThree" data-slide-to="1"></li>
        <li data-target="#carouselThree" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="slider-content">
                  <h1 class="title" style="font-size: 250%">Selamat Datang<br>di Haladistro.</h1>
                  <p class="text">Sweater Hoodie. Celana Legging, Celana Training, celana jogger, kaos oblong, Singlet cewek/Cowok dll.</p>
                  <ul class="slider-btn rounded-buttons">
                    <!-- <li><a class="main-btn rounded-one" href="#">GET STARTED</a></li> -->
                    <!-- <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li> -->
                  </ul>
                </div>
              </div>
            </div> <!-- row -->
          </div> <!-- container -->
          <div class="slider-image-box d-none d-lg-flex align-items-end">
            <div class="slider-image">
              <img src="<?php echo base_url() ?>assets/landing_page/img/slider/jaket_abuabu.png" alt="Hero">
            </div> <!-- slider-imgae -->
          </div> <!-- slider-imgae box -->
        </div> <!-- carousel-item -->

        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="slider-content">
                  <h1 class="title" style="font-size: 250%">Selamat Datang<br>di Haladistro.</h1>
                  <p class="text">Sweater Hoodie. Celana Legging, Celana Training, celana jogger, kaos oblong, Singlet cewek/Cowok dll.</p>
                  <ul class="slider-btn rounded-buttons">
                    <!-- <li><a class="main-btn rounded-one" href="#">GET STARTED</a></li> -->
                    <!-- <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li> -->
                  </ul>
                </div> <!-- slider-content -->
              </div>
            </div> <!-- row -->
          </div> <!-- container -->
          <div class="slider-image-box d-none d-lg-flex align-items-end">
            <div class="slider-image">
              <img src="<?php echo base_url() ?>assets/landing_page/img/slider/jaket_biru.png" alt="Hero">
            </div> <!-- slider-imgae -->
          </div> <!-- slider-imgae box -->
        </div> <!-- carousel-item -->

        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="slider-content">
                 <h1 class="title" style="font-size: 250%">Selamat Datang<br>di Haladistro.</h1>
                  <p class="text">Sweater Hoodie. Celana Legging, Celana Training, celana jogger, kaos oblong, Singlet cewek/Cowok dll.</p>
                  <ul class="slider-btn rounded-buttons">
                    <!-- <li><a class="main-btn rounded-one" href="#">GET STARTED</a></li> -->
                    <!-- <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li> -->
                  </ul>
                </div> <!-- slider-content -->
              </div>
            </div> <!-- row -->
          </div> <!-- container -->
          <div class="slider-image-box d-none d-lg-flex align-items-end">
            <div class="slider-image">
              <img src="<?php echo base_url() ?>assets/landing_page/img/slider/jaket_merah.png" alt="Hero">
            </div> <!-- slider-imgae -->
          </div> <!-- slider-imgae box -->
        </div> <!-- carousel-item -->
      </div>

      <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
        <i class="lni lni-arrow-left"></i>
      </a>
      <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
        <i class="lni lni-arrow-right"></i>
      </a>
    </div>
  </section>

  <!--====== SLIDER PART ENDS ======-->
  
  <section id="about-us" class="features-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12">
          <div class="single-features mt-40">
            <div class="features-title-icon d-flex justify-content-between">
              <h2 class="features-title">KONVEKSI HALADISTRO</h2>
            </div>
            <div class="features-content">
              <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 col-sm-12">
                  <p class="text text-justify">
                    Kami adalah Sebuah konveksi rumahan yang berlokasi di Batam, Kepri. Dengan dukungan teknologi dan tenaga kerja yang berpengalaman di garment Batam maka Haladistro konveksi dapat menghasilkan produk berkualitas  dan tentunya dengan harga yang terjangkau. Adapun jenis produk yang kami kerjakan seperti sweater Hoodie, kaos oblong/polo, seragam olahraga, singlet, legging, celana jogger dll.
                  </p>
                </div>
                <div class="col">
                  <img src="<?php echo base_url() ?>assets/landing_page/images/logo-2.svg" alt="Logo" width="100%" class="p-3">
                </div>
              </div>
            </div>
          </div> <!-- single features -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <section class="features-area bg-orange">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12">
          <div class="section-title text-center pb-10">
            <h3 class="title text-white">Kenapa harus memilih Haladistro ?</h3>
          </div>
        </div>
      </div> <!-- row -->
      <br>
      <div class="row justify-content-center">
        <a href="#service2" onclick="$('#headingOne a').trigger('click');" data-wow-delay="0.6s" class="page-scroll wow bounceIn m-1 col-md-5 col-sm-9 px-0">
          <div class="py-4 px-3 text-center border-2px border rounded border-white bg-yellow text-white hover-effect-1 to-yellow h-100">
            <div class="py-4">
              <h1 class="text-uncolor"><i class="fas fa-heart"></i></h1>
              <h4 class="text-uncolor">Pelayanan yang Baik dan Ramah</h4>
              <span class="text-justify mt-3">Anda dapat berkonsultasi dengan admin kami perihal pesanan anda sehingga menghasilkan produk yang sesuai dengan keinginan anda.</span>
            </div>
          </div>
        </a>
        <a href="#service2" onclick="$('#headingTwo a').trigger('click');" data-wow-delay="0.6s" class="page-scroll wow bounceIn m-1 col-md-5 col-sm-9 px-0">
          <div class="py-4 px-3 text-center border-2px border rounded border-white bg-yellow text-white hover-effect-1 to-yellow h-100">
            <div class="py-4">
              <h1 class="text-uncolor"><i class="fas fa-clock"></i></h1>
              <h4 class="text-uncolor">Tepat Waktu</h4>
              <span class="text-justify mt-3">Haladistro selalu berkomitmen untuk menyelesaikan pengerjaan pesanan tepat waktu sesuai dengan kesepakatan.</span>
            </div>
          </div>
        </a>
        <a href="#service2" onclick="$('#headingThree a').trigger('click');" data-wow-delay="0.6s" class="page-scroll wow bounceIn m-1 col-md-5 col-sm-9 px-0">
          <div class="py-4 px-3 text-center border-2px border rounded border-white bg-yellow text-white hover-effect-1 to-yellow h-100">
            <div class="py-4">
              <h1 class="text-uncolor"><i class="fas fa-thumbs-up"></i></h1>
              <h4 class="text-uncolor">Berkualitas</h4>
              <span class="text-justify mt-3">Berbekal pengalaman di garment bertahun-tahun serta dukungan mesin yang cukup lengkap serta tenagakerja yang pengalaman, Haladistro selalu berusaha menghasilkan product yang berkualitas.</span>
            </div>
          </div>
        </a>
        <a href="#service2" onclick="$('#headingFore a').trigger('click');" data-wow-delay="0.6s" class="page-scroll wow bounceIn m-1 col-md-5 col-sm-9 px-0">
          <div class="py-4 px-3 text-center border-2px border rounded border-white bg-yellow text-white hover-effect-1 to-yellow h-100">
            <div class="py-4">
              <h1 class="text-uncolor"><i class="fas fa-money-bill-alt"></i></h1>
              <h4 class="text-uncolor">Harga Bersaing</h4>
              <span class="text-justify mt-3">Tentunya anda menginginkan produk yang relatif murah namun berkualitas, Haladistro siap mengakomodasi keinginan anda sesuai dengan budged yang anda miliki.</span>
            </div>
          </div>
        </a>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <section id="product" class="portfolio-area portfolio-four pb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="section-title text-center pb-10">
            <h3 class="title">Product</h3>
          </div> <!-- section title -->
        </div>
      </div> <!-- row -->
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="portfolio-menu text-center mt-50">
            <ul>
              <li data-filter="*" class="active">ALL PRODUCT</li>
              <?php foreach($category_list as $key => $value): ?>
              <li data-filter=".<?php echo $value['category'] ?>-4"><?php echo $value['category'] ?></li>
              <?php endforeach; ?>
            </ul>
          </div> <!-- portfolio menu -->
        </div>
        <div class="col-lg-9 col-md-9">
          <div class="row no-gutters grid mt-50">
            <?php foreach ($products as $key => $value): ?>
            <div class="col-lg-4 col-sm-6 <?php echo $value['category'] ?>-4">
              <a href="<?php echo base_url() ?>product_detail/<?php echo $value['link'] ?>">
                <div class="single-portfolio" style="background-color: #ff9ff3;">
                  <div class="portfolio-image">
                    <img src="<?php echo base_url() ?>file/image/<?php echo $value['picture_thumb'] ?>" alt="">
                    <a href="<?php echo base_url() ?>product_detail/<?php echo $value['link'] ?>">
                      <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                        <div class="portfolio-content">
                          <div class="portfolio-icon">
                            SEE MORE DETAIL
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div> <!-- single portfolio -->
              </a>
            </div>
            <?php endforeach; ?>
          </div> <!-- row -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <section class="contact-area" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url(<?php echo base_url() ?>assets/landing_page/images/global-sea-freight-e1570781123661.jpg);background-attachment: fixed;background-position: center;background-size: cover;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center wow fadeIn" data-wow-duration="1.5s">
					<h3 class="text-center text-white">BERAPA HARGANYA?<br>
            HANYA Rp 75.000/PCS GRATIS ONGKIR SEBATAM<br>
            BELI 3 PCS HANYA <span style="text-decoration:line-through">Rp 225.000</span> Rp 200.000 BOLEH CAMPUR WARNA DAN UKURAN.</h3>
				</div>
			</div>
		</div>
  </section>
  <?php
    $dont_show = 1;
    if($dont_show == 0):
  ?>
  <section id="review" class="testimonial-area" style="background-color: unset;">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-xl-5 col-lg-6">
          <div class="testimonial-left-content mt-45">
            <h6 class="sub-title">Testimonials</h6>
            <h4 class="title">What Clients Says <br> About Us</h4>
            <ul class="testimonial-line">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <p class="text">Duis et metus et massa tempus lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ultricies, orci molestie blandit interdum. <br> <br> ipsum ante pellentesque nisl, eget mollis turpis quam nec eros. ultricies, orci molestie blandit interdum.</p>
          </div> <!-- testimonial left content -->
        </div>
        <div class="col-lg-6">
          <div class="testimonial-right-content mt-50">
            <div class="quota">
              <i class="lni lni-quotation"></i>
            </div>
            <div class="testimonial-content-wrapper testimonial-active">
              <div class="single-testimonial">
                <div class="testimonial-text">
                  <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                </div>
                <div class="testimonial-author d-sm-flex justify-content-between">
                  <div class="author-info d-flex align-items-center">
                    <div class="author-image">
                      <img src="<?php echo base_url() ?>assets/landing_page/images/author-1.jpg" alt="author">
                    </div>
                    <div class="author-name media-body">
                      <h5 class="name">Mr. Jems Bond</h5>
                      <span class="sub-title">CEO Mbuild Firm</span>
                    </div>
                  </div>
                  <div class="author-review">
                    <ul class="star">
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                    </ul>
                    <span class="review">( 7 Reviews )</span>
                  </div>
                </div>
              </div> <!-- single testimonial -->
              <div class="single-testimonial">
                <div class="testimonial-text">
                  <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                </div>
                <div class="testimonial-author d-sm-flex justify-content-between">
                  <div class="author-info d-flex align-items-center">
                    <div class="author-image">
                        <img src="<?php echo base_url() ?>assets/landing_page/images/author-2.jpg" alt="author">
                    </div>
                    <div class="author-name media-body">
                      <h5 class="name">Mr. Jems Bond</h5>
                      <span class="sub-title">CEO Mbuild Firm</span>
                    </div>
                  </div>
                  <div class="author-review">
                    <ul class="star">
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                    </ul>
                    <span class="review">( 7 Reviews )</span>
                  </div>
                </div>
              </div> <!-- single testimonial -->
              <div class="single-testimonial">
                <div class="testimonial-text">
                  <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                </div>
                <div class="testimonial-author d-sm-flex justify-content-between">
                  <div class="author-info d-flex align-items-center">
                    <div class="author-image">
                        <img src="<?php echo base_url() ?>assets/landing_page/images/author-3.jpg" alt="author">
                    </div>
                    <div class="author-name media-body">
                      <h5 class="name">Mr. Jems Bond</h5>
                      <span class="sub-title">CEO Mbuild Firm</span>
                    </div>
                  </div>
                  <div class="author-review">
                    <ul class="star">
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                    </ul>
                    <span class="review">( 7 Reviews )</span>
                  </div>
                </div>
              </div> <!-- single testimonial -->
            </div> <!-- testimonial content wrapper -->
          </div> <!-- testimonial right content -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>
  <?php endif; ?>

  <!--====== TEAM  ENDS ======-->
  
  <!--====== CONTACT PART START ======-->

  <section id="contact" class="contact-area">
    <div class="container my-4 py-4">
      <div class="row justify-content-center my-4">
        <div class="col-lg-8 col-md-10">
          <div class="section-title text-center pb-30">
            <h3 class="title">Contact</h3>
            <p class="text">Komitmen Kami Untuk pelayanan yang lebih baik. Ramah terhadap pelanggan, Responsif terhadap interaksi, Profesional dalam pelayanan.</p>
            <br>
            <br>
            <a href="https://wa.me/6281365538139?text=Halo, saya mau beli barang ini, masih ada?" class="btn btn-success btn-lg btn-flat btn-block">HUBUNGI KAMI</a>
          </div> <!-- section title -->
        </div>
      </div> <!-- row -->
      <!-- <div class="row">
        <div class="col-lg-12">
          <div class="contact-map mt-30">
            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          </div>
        </div>
      </div>  -->
    </div> <!-- container -->
  </section>

  <!--====== CONTACT PART ENDS ======-->
  
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
