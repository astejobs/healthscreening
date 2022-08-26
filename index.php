<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Health Screening</title>
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
  <link rel="stylesheet" href="./scss/customcss.css">
  <link rel="stylesheet" href="./scss/custom.css">



  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
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
      line-height:0.9px !important;
      text-decoration: underline;

    }
    .footer-heading>ul{
      line-height:0.9 !important;

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

    <div class="site-section ">
      <div class=" mt-5">
        <div class="owl-carousel owl-theme mt-5">
          <div class="item">
            <img src="./images/hs1.jpeg" alt="image">
          </div>
          <div class="item">
            <img src="./images/hs2.jpeg" alt="image">
          </div>

        </div>

      </div>
    </div>

    <div class="container mb-4 ">
      <p class="text-center addColor display-4 mb-5">Our Focus, Your Wellbeing</p>
      <div class="row">

        <div class="col-md-6">
          <div class="card shadow overflow-hidden">
          <img width="100%" class="section1-image img-responsive" src="./images/hs1.jpeg" alt="image">
        </div>
        </div>


        <div class="col-md-6 ">

          <div class="row">
            <div class="col-md-12">
              <div class="card shadow p-4 mb-3">
              <h5 class="text-dark text-center addColor font-weight-bold">About Us</h5>
              <p class="text-justify "> TheTestingPro™ was created to provide an extensive range of COVID-19 testing
                services to individuals and companies across Singapore since the pandemic started. Equipped with a
                wealth of testing operations experience and extensive knowledge of the requirements and systems, we
                simplify the processes, thus enabling us to conduct efficient testing and provide timely results.

                As we continue to grow, TheTestingPro™ expanded into providing health screening services with
                comprehensive packages that are tailored to corporate and individual needs whilst providing convenience
                and unparalleled flexibility.
              </p>
            </div>
</div>

          </div>

          <div class="row">

            <div class="col-md-12">
              <div class="card shadow p-4">
              <h5 class="text-dark fs-5 text-center addColor font-weight-bold">Fast and Without Fasting</h5>
              <p class="text-justify">We put an end to the dreaded overnight fast that is typically required with
                TheTestingPro™ Non-Fasting Mobile Health Screening. Removing the need for fasting will mitigate the
                discomfort and potential adverse effects, such as low blood sugar and dehydration. Several studies have
                shown fasting is unnecessary due to insignificant differences between fasting and non-fasting lipid
                levels. </p>
            </div>
</div>

          </div>
         

        </div>

        
      </div>
    </div>
<h2 class="text-center addColor fs-5 font-weight-bold">Our Services</h2>
<div class="accordion rounded">

  <div class="tab">
    <img src="./images/hs1.jpeg" alt="">
    <div class="caption">
      <h2>Mobile Health Screening</h2>
      <p class="text-justify">Our Non-Fasting Mobile Health Screening lets you take charge of your health anytime and anywhere,<br> providing flexibility and convenience in the comfort of your preferred location. Our various packages <br>offered are designed to offer comprehensive screening for individuals to take proactive care of their health.</p>
      <a class="text-white"href="./mobilehealthscreening.php">View More>></a>
    </div>
  </div>
  <div class="tab">
    <img src="./images/hs2.jpeg" alt="">
     <div class="caption">
      <h2>Corporate Health Screening</h2>
      <p class="text-justify">Investing in your employees’ annual health screening proves that you care for their wellbeing. <br> Health screening amongst employees improves productivity, reduces absenteeism, builds trust <br>and loyalty.  Our range of corporate health screening packages provide a unique opportunity to <br>invest in the long-term health of your employees and lets you choose what works best for your <br>company; be it an on-site workplace health screening or even a home-based health screening.</p>
      <a class="text-white"href="./corporateHealthPage.php">View More>></a>

    </div>
  </div>
  <div class="tab">
    <img src="./images/h3.jpeg" alt="">
     <div class="caption">
      <h2>COVID-19 Testing</h2>
    </div>
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

  <script>
    $('.owl-carousel').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autospeed: 1000,


    });
  </script>
</body>

</html>