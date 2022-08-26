
<?php 

require 'vendor/autoload.php';

require('config.php');
require('./contactEmailSender.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
   integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" 
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
 integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <!-- Google captcha -->
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

</style>



</head>
<body>
<?php
  require_once('header.php');
 ?>
  <div class="container">
    
    <div class="row margin ">
     
      <div class="col-md-7 ">
        <h2 class="mt-5 addColor" >Contact Us</h2>
        <p style="font-size:16px;" class="addColor "><b> Do you have an enquiry? </b><br>
        <b> Please complete the form and we will get back to you as soon as we can.</b>
        </p>
        <div class="">
          <h4 class="addColor ">Email</h2>
        <a href="mailto:concierge@thetestingpro.com" style="text-decoration:none ;">concierge@thetestingpro.com</a>
      </div>
    </div>
   
    <div class="col-md-5">
            <img src="./images/footerImage-removebg-preview.png" id="img" class="mt-4" alt="logo">
      </div>
    </div>
    <?php
if(isset($_SESSION['status']))
{


    ?>
        <div class="alert alert-success alert-dismissible fade show"role="alert">
             <strong>Hey!<strong><?php echo $_SESSION['status'];?>
             
        </div>

    <?php
    unset($_SESSION['status']);
}
?>
    <form method="POST">
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
        <label for="inputAddress">Company<span class="text-danger" >*</span></label>
        <input type="text" name="company" class="form-control" id="" placeholder="" >
      </div>
      
      
        <div class="form-group col-md-6">
          <label for="inputState">Type of Enquiry  <span class="text-danger" >*</span></label>
          <select id="inputState" class="form-control" name="enquirytype">
            <option selected>Choose...</option>
            <option>General Enquiry/Feedback</option>
            <option>Covid-19 Testing</option>
            <option> Mobile Health Screening</option>
            <option> Corporate Health Screening</option>
            <option>Partnership Opportunities</option>
          </select>
        </div>
     
      <div class="form-group col-md-6">
        <label for="exampleFormControlTextarea1">How can we help?<span class="text-danger" >*</span></label>
        <textarea class="form-control" name="help" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
      </div>
      <div class="form-group col-md-6">
      <div class="g-recaptcha" data-callback="captchaVerified" data-sitekey="<?php echo $siteKey ?>"></div>

      </div>
    </div>
      <button type="submit" name="submit" id="submit" class="btn btn-corporate mb-5" disabled >submit</button> 
    </form>
  </div>
  <?php
  require_once('footer.php');
 ?>

  <script type="text/javascript">
  function captchaVerified(){
    var submitBtn=document.querySelector('#submit');
    submitBtn.removeAttribute('disabled');
  }
</script>


</body>
</html>