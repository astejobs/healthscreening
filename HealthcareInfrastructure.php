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
  <title>Healthcare Center</title>
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
            <div class="card-header header-text text-white">
                <h3 class="mb-0 text-dark">Healthcare Infrastructure:</h3>
            </div>
            
       
            <div class="card-body">
                <h5 class="card-title"></h5>
                
                <p>A Vital Backbone
Healthcare infrastructure encompasses the essential components necessary for delivering world-class healthcare services. These components include:</p>
<ul>
    <li><strong>Physical Facilities:</strong>Hospitals, clinics, and medical centers form the backbone of healthcare infrastructure. These facilities provide a space for medical professionals to diagnose, treat, and care for patients.
Infrastructure also includes specialized units such as emergency rooms, operating theaters, and intensive care units.
</li>
    <li><strong>Healthcare Personnel:
</strong>Doctors, nurses, and various paramedical professionals are integral to healthcare delivery. Their expertise ensures patients receive appropriate medical attention.
Well-trained and skilled healthcare staff are essential for maintaining high-quality services.
</li>
    <li><strong>Medical Equipment and Technology:
</strong>Modern healthcare relies on advanced equipment, including diagnostic tools (like MRI machines and X-ray scanners), surgical instruments, and monitoring devices.
Infrastructure also encompasses telemedicine technology, which enables remote consultations and healthcare delivery.
</li>  
    <li><strong>Beds and Wards:
</strong>Hospital beds, both general and specialized (such as ICU beds), are crucial for patient care.
Adequate ward facilities accommodate patients during their treatment and recovery.
</li>
    <li><strong>Laboratories and Research Centers:
</strong>Diagnostic laboratories play a pivotal role in disease detection, blood tests, and other investigations.
Research centers contribute to medical advancements, drug development, and understanding health trends.
</li>
    <li><strong>Supply Chain and Logistics:
</strong>Reliable supplies of pharmaceuticals, medical consumables, and equipment are essential.
Efficient logistics ensure timely delivery of medical resources.
</li>
    <li><strong>Emergency Services:
</strong>Ambulance services, emergency response teams, and trauma centers are part of healthcare infrastructure.
Quick access to emergency care can save lives.
Challenges and Current Status
</li>
    <li><strong>Inadequate Faculty and Attendance:
</strong>An evaluation of medical colleges revealed inadequate faculty and attendance rates. Many colleges failed to meet the required standards.
Some institutions had “ghost faculty,” and emergency medicine departments existed only on paper.</li>
    <li><strong>Disparities and Gaps:
</strong>

Disparities exist between urban and rural areas, affecting healthcare access.
The COVID-19 pandemic highlighted gaps and limitations in the system.</li>
    <li><strong>Role of Private Healthcare Providers:
</strong>
Private providers play a significant role but often at a higher cost.
Discussions continue about balancing private and public healthcare.</li>
    <li><strong>Routine Services and Public Health:
</strong>
Routine healthcare services, including immunization and disease treatment, face strain.
The pandemic disrupted non-COVID-19 disease management.</li>
    <li><strong>Importance of Public Health System:
</strong>
The crisis emphasized the need for a robust public health system.
Strengthening public health infrastructure is crucial for preparedness.</li>
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