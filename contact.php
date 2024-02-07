<?php 
require ('vendor/autoload.php');
require('./contactEmailSender.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Spinelle Healthcare</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
    
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="./scss/customcss.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
 <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script> 
<style>
  #img {
 width: 300px !important;
 height:200px; 
}

   
.Header-icons>a{
  justify-content: center;
  color:white !important;
    }

   .roundedd {
    border-radius: 30px !important;
    font-size:12px !important;
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
 .margin{
  margin-top:120px;
 }
 header{
    position: fixed !important;
    top: 0;
    box-shadow:1px 1px 2px lightgrey;
}
.btn-corporate{
    background-color:#691C32;
    color:white;
  }
  .Loc{
    font-size: 25px !important;
  }
  #grand,#clarke,#ibis{
    font-family: 'Montserrat' !important;
    color: #575756 !important;
    text-transform: capitalize !important;
  }
  .dropdown{
      border-top:2px solid #691C32 !important;
    }
    .site-footer {
    padding: 4% !important;
}
@media (max-width:599px) {
  .mbsc{
    margin-top:80px !important;

  }
 
  iframe{
    width:300px !important;
  }
  
}
@media (min-width:600px) {
  .mbsc{
    margin-top:130px !important;

  }
 
  iframe{
    width: 500px !important;
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

  <div class="container">
    
    <div class="row margin ">
     
     
    </div>
   
    <div class="col-md-5 ">
          
    </div>
    <?php
if(isset($_SESSION['status']))
{


    ?>
        <div class="alert alert-success alert-dismissible fade show"role="alert">
             <strong><strong><?php echo $_SESSION['status'];?>
             
        </div>

    <?php
    unset($_SESSION['status']);
}
?>
    <form method="POST" class="p-5">
      <div class="form-row mt-4">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Full Name<span class="text-danger" >*</span></label>
          <input type="text" name="name" class="form-control" id="" placeholder="" required="true">
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email Address <span class="text-danger" >*</span></label>
          <input type="email" name="email" class="form-control" id="" placeholder="" required="true">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Contact Number<span class="text-danger" >*</span></label>
          <input type="tel" name="phone" class="form-control" id="" placeholder="" required="true">
        </div>
      
      <div class="form-group col-md-6">
        <label for="inputAddress">Subject<span class="text-danger" >*</span></label>
        <input type="text" name="subject" class="form-control" id="" placeholder="" >
      </div>
      
      
        <!-- <div class="form-group col-md-6">
          <label for="inputState">Type of Enquiry  <span class="text-danger" >*</span></label>
          <select id="inputState" class="form-control" name="enquirytype">
            <option selected>Choose...</option>
            <option>General Enquiry/Feedback</option>
            <option>Covid-19 Testing</option>
            <option> Mobile Health Screening</option>
            <option> Corporate Health Screening</option>
            <option>Partnership Opportunities</option>
          </select>
        </div> -->
     
      <div class="form-group col-md-6">
        <label for="exampleFormControlTextarea1">How can we help?<span class="text-danger" >*</span></label>
        <textarea class="form-control" name="help" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
      </div>
      <div class="form-group col-md-6">

      </div>
    </div>
      <button type="submit" name="send" id="submit" class="btn btn-corporate mb-5"  >Send</button> 
    </form>
    <!-- <div class="container p-5">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
          <div class="col-md-3">
            
          </div>
          <div class="col-md-9">
          <p class="addColor font-weight-bold Loc" ><u>Our Locations</u></p>

            <div><button id="grand" class="btn  mb-2 ">Grand Mercure Roxy SG</button></div>
            <div><button id="clarke" class="btn  mb-2 ">Clarke Quay Central</button></div>
            <div><button id="ibis" class="btn  mb-2 ">Ibis Singapore on Bencoolen</button></div>
          </div>
          </div>
            
          
        </div>
        <div class="col-md-6 " >
        <iframe id="Grand" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.786280060049!2d103.90251271431605!3d1.3032230620875729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da18727dfbed85%3A0x6d766d19235d9606!2sGrand%20Mercure%20Singapore%20Roxy!5e0!3m2!1sen!2sin!4v1661492321645!5m2!1sen!2sin" width="530" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe id="Clarke" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8086351905235!2d103.84442111431612!3d1.2890305621279772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da190a9bbec0d7%3A0x4d829ccbc19a9496!2sClarke%20Quay%20Central!5e0!3m2!1sen!2sin!4v1661494056129!5m2!1sen!2sin" width="530" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe id="Ibis" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7894641242888!2d103.85033011431604!3d1.301211062093321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19bba6e345ad%3A0x5860d34bdd937440!2sibis%20Singapore%20on%20Bencoolen!5e0!3m2!1sen!2sin!4v1661494177771!5m2!1sen!2sin" width="530" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div> -->
   
  </div>
</div>
        </div>

  <?php
  require_once('footer.php');
 ?>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

 <!-- Google captcha -->
  <script type="text/javascript">
  //function captchaVerified(){
   // var submitBtn=document.querySelector('#submit');
  //  submitBtn.removeAttribute('disabled');
  //}
$(document).ready(function(){


  $('#Clarke').hide();
    $('#Ibis').hide();
    $('#grand').css("border","2px solid #691C32");

 $('#grand').on('click',function(){
  $('#grand').css("border","2px solid #691C32 ");
  $('#ibis').css("border","none");
  $('#clarke').css("border","none");
    $('#Grand').show();
    $('#Clarke').hide();
    $('#Ibis').hide();

  });
  $('#clarke').on('click',function(){
    $('#clarke').css("border","2px solid #691C32");
    $('#grand').css("border","none");
    $('#ibis').css("border","none");
    $('#Clarke').show();
    $('#Grand').hide();
    $('#Ibis').hide();

  });
  $('#ibis').on('click',function(){
    $('#ibis').css("border","2px solid #691C32");
    $('#grand').css("border","none");
    $('#clarke').css("border","none");

    $('#Clarke').hide();
    $('#Grand').hide();
    $('#Ibis').show();

  });
});

</script>


</body>
</html>