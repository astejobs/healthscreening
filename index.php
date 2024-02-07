<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="" content="0; url=index.php">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spinelle Healthcare</title>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Monoton&family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="icon" href="./images/logo.jpg" />
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
    .fontIntro{
      font-family: 'Roboto', sans-serif;
      font-size:1.4rem;
    }
    .divofcards{
      display: flex;
      flex-wrap:wrap;
      align-items:center;
      justify-content: space-around;
    }
    .card{
      width:30%;
      height:20vh;
      align-items:center;
      justify-content: center;
      padding: 10px;
      background-color:#691C32;
      color:white !important;
      
    }
    
    .card:hover{
      background-color:white;
      color:#691C32 !important;
      cursor: pointer;
      transition: all .9s ease;

      

    }

   

    .roundedd {
      border-radius: 30px !important;
      font-weight: bold !important;
    }

    .roundedd:hover {
      background-color: #9C6167 !important;
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
      line-height: 0.9px !important;
      text-decoration: underline;

    }

    .footer-heading>ul {
      line-height: 0.9 !important;

    }

    .owl-carousel {
      width: 100%;
      height: 100vh;
    }

    .item {
      width: 100%;
      height: 100vh;
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

    .owl-text-overlay {
      position: absolute;
      text-align: center;
      width: 100%;
      top: 50%;
      transform: translateY(-50%);
      left: 0;
      right: 0;
      margin-left: auto;
      margin-right: auto;
      color: #fff;
      /* background-color: rgba(0, 0, 0, 0.4); */
      /* background: rgba(0, 0, 0, 0.4); */
      /* padding-bottom: 20px; */
      font-family: "Open Sans", sans-serif;
      /* border-radius: 15px 50px 30px 5px; */
    }

    h2.owl-title {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 20px;

    }

    @media screen and (min-device-width:100px) and (max-device-width: 480px) {

      .owl-text-overlay {
        position: absolute;
        text-align: center;
        width: 100%;
        top: 20% !important;
        transform: translateY(-50%);
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        color: #fff;
        /* background-color: rgba(0, 0, 0, 0.4); */
        /* background: rgba(0, 0, 0, 0.4); */
        /* padding-bottom: 20px; */
        font-family: "Open Sans", sans-serif;
        /* border-radius: 15px 50px 30px 5px; */
      }

      h2.owl-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 0px;

      }
      .divofcards{
      display: block;
      flex-direction:column;
      align-items:center;
      justify-content: space-around;
    }
    .card{
      width:100%;
      height:40vh;
      align-items:center;
      justify-content: center;
      padding: 10px;
      background-color:#691C32;
      color:white !important;
      
    }
    
    .card:hover{
      background-color:white;
      color:#691C32 !important;
      cursor: pointer;
      transition: all .9s ease;

      

    }
    }

    @media screen and (min-device-width:481px) and (max-device-width: 768px) {

      .owl-text-overlay {
        position: absolute;
        text-align: center;
        width: 100%;
        top: 30% !important;
        transform: translateY(-50%);
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        color: #fff;
        /* background-color: rgba(0, 0, 0, 0.4); */
        /* background: rgba(0, 0, 0, 0.4); */
        /* padding-bottom: 20px; */
        font-family: "Open Sans", sans-serif;
        /* border-radius: 15px 50px 30px 5px; */
      }

      h2.owl-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 5px;

      }
      .divofcards{
      display: block;
      flex-direction:column;
      align-items:center;
      justify-content: space-around;
    }
    .card{
      width:100%;
      height:40vh;
      align-items:center;
      justify-content: center;
      padding: 10px;
      background-color:#691C32;
      color:white !important;
      
    }
    
    .card:hover{
      background-color:white;
      color:#691C32 !important;
      cursor: pointer;
      transition: all .9s ease;

      

    }
  
    }

    @media screen and (min-device-width: 769px) and (max-device-width: 1024px) {
      .owl-text-overlay {
        position: absolute;
        text-align: center;
        width: 100%;
        top: 30% !important;
        transform: translateY(-50%);
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        color: #fff;
        /* background-color: rgba(0, 0, 0, 0.4); */
        /* background: rgba(0, 0, 0, 0.4); */
        /* padding-bottom: 20px; */
        font-family: "Open Sans", sans-serif;
        /* border-radius: 15px 50px 30px 5px; */
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

    <div class="site-section ">
      <div class=" mt-2">
        <div class="owl-carousel owl-theme  mt-2">
          <div class="item">
            <img src="./images/hospitalfuture.jpg" class="imgbg"  alt="image">
          </div>
          <!-- <div class="item">
            <div class="owl-text-overlay ">
              <h2 class="owl-title addColor">We Personalised Health Screening </h2>
              <p class="text-center text-dark">Take proactive care of your health with our various health screening
                packages that are designed to offer comprehensive screening for you.</p>
            </div>
            <img src="./images/carouselimage2.jpg" alt="image">
          </div> -->
          <!-- <div class="item">
            <div class="owl-text-overlay ">
              <h2 class="owl-title addColor">Fast and Without Fasting </h2>
              <p class="text-center text-dark">We put an end to the dreaded overnight fast and reduce hunger pangs with
                our Non-Fasting Mobile Health Screening.</p>
            </div>
            <img src="./images/hs1.jpeg" alt="image">
          </div> -->
          <!-- <div class="item">
            <div class="owl-text-overlay ">
              <h2 class="owl-title addColor">Flexibility Through Mobility</h2>
              <p class="text-center text-dark">We conduct health screening in the comfort of your preferred location,
                providing you convenience and flexibility without the need to make a trip.</p>
            </div>
            <img src="./images/hs2.jpeg" alt="image">
          </div> -->

        </div>

      </div>
    </div>

    <div class="container mb-4  cont2">
      <p class="text-center addColor display-4 mb-5">Our Focus, Your Wellbeing</p>
      <div class="row">

        <!-- <div class="col-md-4">
          <div class=" overflow-hidden" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
            <img width="100%" class="section1-image img-responsive rounded-circle" src="./images/hs1.jpeg" alt="image">
          </div>
        </div> -->


        <div class="col-md-12">

          <div class="row">
            <div class="col-md-12">
              <div class="p-4 mb-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                <!-- <h5 class="text-dark text-center addColor font-weight-bold">INTRODUCTION</h5> -->
                <p class="text-justify fontIntro"> In our endeavor to enhance healthcare services and address the
                  diverse medical
                  needs , we propose the creation of an Integrated Healthcare Hub.
                  This comprehensive facility will serve as a beacon of excellence, offering specialized diagnostic,
                  treatment, and training services across various medical disciplinesIn response to the growing need for
                  advanced cancer care facilities, we propose the establishment of an Advanced Medical Oncology Center
                  .
                  This state-of-the-art facility will offer comprehensive diagnostic, treatment, and training services
                  to address the rising incidence of Cardiolgy Diagnostic and cancer in the region.
                </p>
              </div>
            </div>

          </div>

          <!-- <div class="row">

            <div class="col-md-12">
              <div class="card shadow p-4" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                data-aos-duration="3000">
                <h5 class="text-dark fs-5 text-center addColor font-weight-bold">Fast and Without Fasting</h5>
                <p class="text-justify">We put an end to the dreaded overnight fast that is typically required with
                  TheTestingPro™ Non-Fasting Mobile Health Screening. Removing the need for fasting will mitigate the
                  discomfort and potential adverse effects, such as low blood sugar and dehydration. Several studies
                  have
                  shown fasting is unnecessary due to insignificant differences between fasting and non-fasting lipid
                  levels. </p>
              </div>
            </div>

          </div> -->


        </div>


      </div>
    </div>
    <h2 class="text-center addColor fs-5 font-weight-bold" id="cards">Our Services</h2>
    <div class="divofcards">
     <a class="card m-1" href="./cardiologyDiagnosticCenter.php"><div class="">Comprehensive Cardiology Diagnostic Center</div></a>
     <a class="card m-1" href="./E-ICUCenter.php"><div class="">E-ICU Center</div></a>
     <a class="card m-1" href="./oncology.php"> <div class="  ">Oncology Drugs Warehouse and Manufacturing Facility</div></a>
      <a class="card m-1" href="./urology.php"><div class="  ">Urology Center</div></a>
      <a class="card m-1" href="./LaparoscopicTrainingCenter.php"><div class="  ">Laparoscopic Training Center</div></a>
      <a class="card m-1" href="./cancerDiagnosticCenter.php"><div class="   ">Comprehensive Cancer Diagnostic Services</div></a>
      <a class="card m-1" href="./gastroCancerDiagnosticCenter.php"><div class="   mb-3">Advanced Gastro Cancer Diagnostic Center</div></a>
      <a class="card m-1" href="./treatmentCenter.php"><div class="   mb-3">Treatment Center</div></a>
      <a class="card m-1" href="./TrainingandExchangePrograms.php"><div class="   mb-3">Training and Exchange Programs</div></a>
      

    </div>
    <!-- <div class="accordion rounded" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">

      <div class="tab">
        <img src="./images/mobilehealth.jpg" alt="">
        <div class="caption">
          <h2>Mobile Health Screening</h2>
          <p class="text-justify">Our Non-Fasting Mobile Health Screening lets you take charge of your health anytime
            and anywhere,<br> providing flexibility and convenience in the comfort of your preferred location. Our
            various packages <br>offered are designed to offer comprehensive screening for individuals to take proactive
            care of their health.</p>
          <a class="text-white" href="./mobilehealthscreening.php">View More>></a>
        </div>
      </div>
      <div class="tab">
        <img src="./images/hs2.jpeg" alt="">
        <div class="caption">
          <h2>Corporate Health Screening</h2>
          <p class="text-justify">Investing in your employees’ annual health screening proves that you care for their
            wellbeing. <br> Health screening amongst employees improves productivity, reduces absenteeism, builds trust
            <br>and loyalty. Our range of corporate health screening packages provide a unique opportunity to <br>invest
            in the long-term health of your employees and lets you choose what works best for your <br>company; be it an
            on-site workplace health screening or even a home-based health screening.
          </p>
          <a class="text-white" href="./corporateHealthPage.php">View More>></a>

        </div>
      </div>
      <div class="tab">
        <img src="./images/h3.jpeg" alt="">
        <div class="caption">
          <h2>COVID-19 Testing</h2>
        </div>
      </div>

    </div> -->
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