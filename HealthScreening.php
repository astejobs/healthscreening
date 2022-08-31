<?php 


//Load Composer's autoloader
require 'vendor/autoload.php';

include('config.php');
include('./corporateEmailSender.php');
    
?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Health Screening | TheTestingPro</title>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="./scss/customcss.css">

  <link rel="stylesheet" href="css/style.css">
  <!-- Google captcha -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style>
    .Header-icons>a {
      justify-content: center;
      color: white !important;
    }

    .roundedd {
    border-radius: 30px !important;
    font-weight:bold !important;
  }
  .roundedd:hover{
    background-color:#9C6167 !important;
  }

    .site-footer {
      background-color: #CCC3BC;
    }

    .Footer-links {
      color: #691C32;
      text-decoration: none;
      font-size: 13px;
    }

    .footer-heading {
      color: #691C32 !important;
      font-size: 16px !important;
      font-weight: bold !important;
      text-decoration: underline;

    }

    .owl-carousel {
      width: 100%;
      height: 70vh;
    }

    .item {
      width: 100%;
      height: 70vh;
      background-size: cover;
    }

    .section1-image {
      width: 70%;
    }

    .margins {
      padding-bottom: 20% !important;

    }

    .btn-corporate {
      background-color: #691C32;
      color: white;
    }

    .section1-image {
      width: 100% !important;
      box-sizing: border-box;

    }

    .section1-image:hover {
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      transform: scale(1.1);
      transition: transform .5s ease;
    }

    .dropdown {
      border-top: 2px solid #691C32 !important;
    }

    .site-footer {
      padding: 4% !important;
    }
    @media screen and (min-device-width:100px) and (max-device-width: 1080px) {   
      .mbsc{
    margin-top:100px;
  }

}
  </style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-bold" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> 

  <?php
  require_once('header.php');
 ?>


  <div class="container mb-5  ">
    <div class="margins"></div>
    <h3 class="text-center mb-4 addColor font-weight-bold mbsc">Health Screening</h3>
    <p class=" text-center"> Our extensive range of health screening packages offer incredible value, convenience and flexibility tailored to your needs.</p>
    <div class="row ">


      <div class="col-md-6 ">
        <div class="card shadow overflow-hidden" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">

          <img width="100%" class="section1-image img-responsive" src="./images/helimg.jpeg" alt="image">
          
        </div>
        <h4 class="addColor text-center mt-2"><u><a href="./mobilehealthscreening.php">Mobile Health Screening</u></h4>
      </div>
      <div class="col-md-6 ">
        <div class="card shadow overflow-hidden" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">

          <img width="100%" class="section1-image img-responsive" src="./images/corporate.jpeg" alt="image">
        </div>
        <h4 class="addColor text-center mt-2"><u> <a href="./corporateHealthPage.php">Corporate Health Screening</a></u></h4>
      </div>

    </div>

  </div>











  <?php
  require_once('footer.php');
 ?>


  </div>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>


  <script src="js/main.js"></script>
  <script type="text/javascript">
    function captchaVerified() {
      var submitBtn = document.querySelector('#submit');
      submitBtn.removeAttribute('disabled');
    }
  </script>


</body>

</html>