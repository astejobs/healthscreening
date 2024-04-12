<?php 


//Load Composer's autoloader
require 'vendor/autoload.php';

include('./contactEmailSender.php');
    
?>
<!doctype html>
<html lang="en">
   
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Healthcare Center</title>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="icon" href="./images/logo.jpg" />

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
    .roundedd {
    border-radius: 30px !important;
    font-weight:bold !important;
  }
  .roundedd:hover{
    background-color:#9C6167 !important;
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
    padding-bottom:14%  !important;
    
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
   
@media (max-width:599px) {
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
 

   <div class="container   ">
    <div class="margins"></div>
    <div class="container ">
            
            
    
        <div class="card">
            <div class="card-header header-text ">
                <h3 class="mb-0 text-dark">Healthcare Infrastructure Consultancy: Enhancing Healthcare Delivery</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">Transforming Healthcare with Insights and Actions</h5>
                <p class="card-text">
                    The healthcare industry has witnessed remarkable growth, both in terms of revenue and employment, healthcare consulting service, plays a pivotal role in shaping this landscape. Here are some key aspects:
                </p>
                <ul>
                    <li> <strong>Digital Healthcare:</strong> In this fast-paced era, digital healthcare is revolutionizing patient access, management, and service delivery. Technologies like telemedicine, health apps, wearables, and the Internet of Things (IoT) empower patients with personalized care and real-time monitoring. Healthcare providers can enhance patient experience, operational efficiency, and compliance through digital solutions.</li>
                    <li> <strong>AI and Access:</strong> Artificial Intelligence (AI) holds immense potential in addressing critical challenges of access and affordability. It can transform diagnostics, treatment planning, and patient outcomes.</li>
                    <li> <strong>Post-Pandemic Trends:</strong> The pandemic has accelerated shifts in healthcare. Key trends include:</li>
                        <ul>
                            <li>Virtual First Health: Telehealth and remote consultations are becoming mainstream.</li>
                            <li>Live Insight/Command Centers: Real-time data analytics for better decision-making.</li>
                            <li>Platform Care: Integrated platforms for seamless patient management.</li>
                            <li>Ambient Voice: Voice-enabled healthcare services.</li>
                            <li>Boundaryless: Breaking silos for holistic care.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header header-text ">
                <h5 class="mb-0">Core Values</h5>
            </div>
            <div class="card-body">
                <ul>
<li><strong>Integrity: </strong>We must do the right things, do them right and for the right purpose</li>
<li><strong>Professionalism:</strong> Entrusted with a critical public mission, we will strive to excel and ensure the highest standards of performance
<li><strong>Teamwork:</strong> We are a star team comprising talented people who respect and inspire each other to excel for the organisation
<li><strong>Guts: </strong>The “can do” spirit that spurs us to defy the odds and rise up to take on challenges no matter what
<li><strong>Agility:</strong> We are always ready to respond, be flexible and adapt rapidly to evolving situations in order to achieve our mission
<li><strong>Passion: </strong>Nothing motivates us more than our shared vision and passion to make a difference in the future of the nation’s healthcare
<li><strong>Fun:</strong> We work hard together and have fun. While we face challenges, we come together as a team and finish the job with a smile 
            </ul>
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
  <script type="text/javascript">
  // function captchaVerified(){
  //   var submitBtn=document.querySelector('#submit');
  //   submitBtn.removeAttribute('disabled');
  // }
</script>


</body>

</html>