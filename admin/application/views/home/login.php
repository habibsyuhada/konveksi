<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | XPDC - Admin Dashboard</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php echo base_url() ?>assets/favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/theme.min.css">
    <script src="<?php echo base_url() ?>assets/src/js/vendor/modernizr-2.8.3.min.js"></script>
  </head>

  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="auth-wrapper">
      <div class="container-fluid h-100">
        <div class="row flex-row h-100 bg-white">
          <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
            <div class="lavalite-bg" style="background-image: url('<?php echo base_url() ?>assets/img/auth/login-bg.jpg')">
              <div class="lavalite-overlay"></div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
            <div class="authentication-form mx-auto">
              <div class="logo-centered text-center" style="width: auto;">
                <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/logo-fix.png" alt="" width="100%"></a>
              </div>
              <h3>Sign In to XPDC</h3>
              <p>Happy to see you again!</p>
              <form action="<?php echo base_url() ?>home/login_process" method="POST">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Email" required>
                  <i class="ik ik-user"></i>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                  <i class="ik ik-lock"></i>
                </div>
                <!-- <div class="row">
                  <div class="col text-left">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                      <span class="custom-control-label">&nbsp;Remember Me</span>
                    </label>
                  </div>
                  <div class="col text-right">
                    <a href="forgot-password.html">Forgot Password ?</a>
                  </div>
                </div> -->
                <div class="sign-btn text-center">
                  <button class="btn btn-theme">Sign In</button>
                </div>
              </form>
              <!-- <div class="register">
                <p>Don't have an account? <a href="register.html">Create an account</a></p>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="<?php echo base_url() ?>assets/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ?>assets/plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/screenfull/dist/screenfull.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/theme.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <!-- <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script> -->
    <script>
      $(document).ready(function() {
        <?php if($this->session->flashdata('error') == TRUE): ?>
        alert('<?php echo $this->session->flashdata('error'); ?>');
        <?php endif; ?>
      })
    </script>
  </body>
</html>
