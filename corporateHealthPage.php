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
       .Header-icons>a{
  justify-content: center;
  color:white !important;
    }
    .roundedd{
      border-radius: 30px !important;
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
    .owl-carousel{
      width:100%;
      height: 70vh;
    }
    .item{
      width:100%;
      height:70vh;
      background-size:cover;
    }
    .section1-image{
      width:70%;
    }
  .margins{
    padding-bottom:20%  !important;
    
  }
  .btn-corporate{
    background-color:#691C32;
    color:white;
  }
  .section1-image{
      width:100% !important;
      box-sizing:border-box;
      
    }
    .section1-image:hover{
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      transform: scale(1.1); 
      transition: transform .5s ease;
    }
    .dropdown{
      border-top:2px solid #691C32 !important;
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
     <div class="row ">
         
      <div class="col-md-6 ">
      <h5 class="text-dark font-weight-bold addColor ">Corporate Health Screening</h5>
    <p class="text-justify">Investing in your employees’ annual health screening proves that you care for their wellbeing.  Health screening amongst employees improves productivity, reduces absenteeism, builds trust and loyalty.  Our range of corporate health screening packages provide a unique opportunity to invest in the long-term health of your employees and lets you choose what works best for your company; be it an on-site workplace health screening or even a home-based health screening. </p>  
    </div>
      <div class="col-md-6 ">
       <img  width="100%" class="section1-image img-responsive" src="./images/hs2.jpeg" alt="image">
      </div>
    </div>
    <div class="row mt-4">
    <div class="col-md-4">
        <h3 class="text-dark font-weight-bold addColor">Enquire Now</h3>
        <p class="addColor font-weight-bold">Do you have an enquiry?</p>
        <p>Please complete the form and we will get back to you as soon as we can.</p>
    </div>
    <div class="col-md-8">
   <p class="text-dark">Fields marked with an <span class="text-danger">*</span> are required</p>
   <h4 class="sent-notification"></h4>
   <form  id="myForm" method="POST" action="corporateHealthPage.php">

      <div class="form-row mt-4">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Full Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="name" id="name" placeholder="" required="true" >
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email Address <span class="text-danger">*</span></label>
          <input type="email" class="form-control" name="email" id="email" placeholder="" required="true" >
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Contact Number <span class="text-danger">*</span></label>
          <input type="tel" class="form-control" id="phone" name="phone" placeholder="" required="true" >
        </div>
      
      <div class="form-group col-md-6">
        <label for="inputAddress">Company<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="company" id="company" placeholder=""  >
      </div>
      
      <div class="form-group col-md-6">
        <label for="exampleFormControlTextarea1">How can we help?<span class="text-danger">*</span></label>
        <textarea class="form-control" name="help" id="help" rows="3" required="true" ></textarea>
      </div>
      <div class="form-group col-md-6">
        <label for="">Complete Captcha</label>
      <div class="g-recaptcha" data-callback="captchaVerified" data-sitekey="<?php echo $siteKey ?>"></div>
      </div>
    </div>
      <button type="submit"  name="submit" id="submit" class="btn btn-corporate mb-5 float-right" disabled>submit</button> 
    </form>
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
  function captchaVerified(){
    var submitBtn=document.querySelector('#submit');
    submitBtn.removeAttribute('disabled');
  }
</script>


</body>

</html>