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

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css"> 
  <style>
   
    /* .Header-icons>a{
    justify-content: center;
    color:white !important;
 
    }
    .roundedd{
      border-radius: 30px !important;
    } */
    td:hover::after,
th:hover::after {
   /* background: #eff1f5; */
    box-shadow: none !important;
}
    .site-footer{
      background-color: #CCC3BC;
    }
    .Footer-links{
      color :#691C32;
      text-decoration: none;
      font-size: 13px;
    }
    .footer-heading{
      color :#691C32 !important;
      font-size: 16px !important;
      font-weight: bold !important;
      text-decoration: underline;
      
    }
    /* .owl-carousel{
      width:100%;
      height: 70vh;
    }
    .item{
      width:100%;
      height:70vh;
      background-size:cover;
    } */
    .section1-image{
      width:70%;
    }
    /* body{
        font-family: 'Montserrat';
        color: #575756;
        font-size:24px;
    } */
    .tb1 th,td{
        font-family: 'Montserrat';
        color: #575756;
        font-size:20px;
    }
     .margins{
    padding-bottom:15%  !important;
    
  }
  .roundedd {
    border-radius: 30px !important;
    font-weight:bold !important;
  }
  .roundedd:hover{
    background-color:#9C6167 !important;
  }/*
  .dropdown{
      border-top:2px solid #691C32 !important;
    }
    .site-footer {
    padding: 4% !important;
} */
@media (max-width:499px) {
  .mg{
    margin-top:100px !important;
  }
  
}
  
  </style>

</head>

 <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
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
    
  
    <div class="container">
        <div class="margins"></div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-4 text-dark font-weight-bold mg">Focus Lite</h2>
                <p style="font-size:16px;"> With just less than $50, a basic one-health screening package to check your diabetes
                     and cholesterol level lets you detect your risk for cardiovascular diseases such as heart disease and stroke 
                     at the comfort of your preferred location. 
                </p>
            </div>

         <div class="col-md-12">
            <table class="table table-bordered tbl">
                <thead>
                  <tr>
                    <th class="text-center" style="vertical-align : middle;text-align:center;background-color: grey;"><b>Pricing </b></th>
                    <th class="text-center" style="vertical-align : middle;text-align:center;background-color: grey;"> <b>$48</b></th>
                  </tr>
                </thead>
                <tr>
                <td style="background-color: orange;"><b>Physical Examination</b></td>
                <td style="background-color:orange"> </td>
                </tr>
                <tr>
                <td> Height & Weight Measurement</td>
                <td class="text-center"><b>✓ </b> </td>
                  </tr>
                  <tr>
                    <td>Body Mass Index(BMI) </td>
                    <td class="text-center"><b>✓ </b> </td>
                      </tr>
                      <tr>
                        <td> Waist Measurement</td>
                        <td class="text-center"><b>✓ </b> </td>
                          </tr>
                          <tr>
                            <td>Blood pressure </td>
                            <td class="text-center"><b>✓ </b> </td>
                              </tr>
                              <tr>
                                <td style="background-color:orange"><b>Blood Tests </b></td>
                                <td style="background-color:orange"> </td>
                                  </tr>
                                  <tr>
                                    <td>Fasting Blood Sugar</td>
                                    <td class="text-center"><b>✓ </b> </td>
                                  </tr>
                                  <tr>
                                    <td>Total Cholesterol</td>
                                    <td class="text-center"><b>✓ </b> </td>
                                  </tr>
                                  <tr>
                                    <td>HDL Cholesterol </td>
                                    <td class="text-center"><b>✓ </b> </td>
                                  </tr>
                                  <tr>
                                    <td> LDL Cholesterol </td>
                                    <td class="text-center"><b>✓ </b> </td>
                                  </tr>
                                  <tr>
                                    <td> Cholesterol/HDL Ratio</td>
                                    <td class="text-center"><b>✓ </b> </td>
                                  </tr>
                                  <tr>
                                    <td>Triglycerides</td>
                                    <td class="text-center"><b>✓ </b> </td>
                                  </tr>

                

                <tbody>
                </tbody>
                </table>
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
    items:1,
    loop:true,
    autoplay:true,
    autospeed:1000,
   
    
});
</script>
</body>

</html>