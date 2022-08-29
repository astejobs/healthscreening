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
  <title>Corporate Health Screening</title>
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
      padding-bottom: 15% !important;

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
  </style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-bold" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <!-- <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> -->

  <?php
  require_once('header.php');
 ?>


  <div class="container mb-5  ">
    <div class="margins"></div>
    <!-- <div class="row "> -->
    <div>
        <h3 style=" color:#691C32;font-family: 'Montserrat';" claass="addColor">Mobile Health Screening Important information</h3>
        <ol>
            <li> Please note that <b>appointment booking  </b>must be made at least <b> one (1) working day in advance. </b></li> 
             <li>Please note that our <b> operation hours </b>to conduct Mobile Health Screening  Serviceare from <b>Monday to Sunday, 9.30am to 9.30pm.</b> </li> 
                 <li> We are able to conduct Mobile Health Screening <b>only within</b> the compounds of private residences, offices with rooms or private areas and hotel rooms or function rooms.
                     We<b> do not</b> conduct any Mobile Health Screening at public areas such as void decks, carparks, hotel lobbies, public walkways, etc.</li> 
                     <li> Rescheduling of your confirmed booking appointment is allowed <b>only</b> if You notify us at least 2 working days in advance before your confirmed booking appointment. For example, 
                        if your confirmed booking appointment is 31 August (Wednesday), the latest you need to contact us will be on 29 August (Monday) before 6pm should you need to reschedule.
                         Please note that the rescheduled appointment is subjected to availability. There will be a <b>Surcharge</b>of<b> $48 </b>(per booking) for rescheduling.</li>  
                         <li>There will be a<b> surcharge </b> of <b> $48</b> for the following:</li>
                         <ul>
                            <li>Long-haul locations such as Changi Airfreight Centre, Changi Airport, Jurong Island, Sentosa and Tuas .</li>
                            <li>Appointment booking made is less than one (1) working day in advance..</li>
                         </ul>
                         <li>There will be a <b> surcharge </b> of <b>$48 </b>for Mobile Health Screening to be conducted after 9.30pm onwards.
                         </li>
                         
                         <li>
                            For example, if your Health Screening appointment booking is made less than   one (1) working day in advance 
                            and the location for the Health Screening to be conducted is at Sentosa at 10pm, then the total surcharges imposed will be as follows: -

                         </li>
                         <ul>
                            <li>$48 [long-haul location] + $48 [appointment booking made is less than one (1) working day in advance] + $88 [after 9.30pm onwards] = $184
                                .</li>
                         </ul>
                         <li>We highly discourage cancellation. Cancellation fees  will be imposed as follows:</li>
                         <ul>
                            <li>20% of total booking fees paid for cancellation more than 24 hours;</li>
                            <li>50% of total booking fees paid for cancellation between 12 to 24 hours; and</li>
                            <li>100% of total booking fees paid for cancellation less than 12 hours and for no-show and cancellation on-site.</li>
                         </ul>
                         <li> For any enquiries, please email us at <a href="mailto:concierge@thetestingpro.com" style="text-decoration:none ;">concierge@thetestingpro.com </span></a> </li>
        </ol>
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