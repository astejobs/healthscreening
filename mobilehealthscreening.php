<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mobile Health Screening</title>
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


  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
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
    .section1-image{
      width:100% !important;
      box-sizing:border-box;
      
    }
    .section1-image:hover{
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      transform: scale(1.1); 
      transition: transform .5s ease;
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
    #img {
    /* width: 600px !important; */
     height:280px; 
      }
      .margins{
    padding-bottom:20%  !important;
    
  }
  .fas-times{
    color:691c32 !important;
  }


  .faq-section {
    background: #fdfdfd;
    min-height: 100vh;
    padding: 10vh 0 0;
    width:100%;
}
.faq-title h2 {
  position: relative;
  margin-bottom: 45px;
  display: inline-block;
  font-weight: 600;
  line-height: 1;
}
.faq-title h2::before {
    content: "";
    position: absolute;
    left: 50%;
    width: 60px;
    height: 2px;
    background: #E91E63;
    bottom: -25px;
    margin-left: -30px;
}
 .faq-title p {
  padding: 0 190px;
  margin-bottom: 10px;
} 

.faq {
  background: #FFFFFF;
  box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.06);
  border-radius: 4px;
}

.faq .card {
  border: none;
  background: none;
  border-bottom: 1px dashed #CEE1F8;
}

.faq .card .card-header {
  padding: 0px;
  border: none;
  background: none;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.faq .card .card-header:hover {
    background: rgba(233, 30, 99, 0.1);
    /* padding-left: 10px; */
}
.faq .card .card-header .faq-title {
  width: 100%;
  text-align: left;
  padding: 0px;
   padding-left: 30px; 
  padding-right: 30px;
  font-weight: 400;
  font-size: 15px;
  letter-spacing: 1px;
  color: #3B566E;
  text-decoration: none !important;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  cursor: pointer;
  padding-top: 20px;
  padding-bottom: 20px;
}

.faq .card .card-header .faq-title .badge {
  display: inline-block;
   width: 20px;
  height: 20px; 
  line-height: 14px;
   float: left; 
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
  text-align: center;
  background: #E91E63;
  color: #fff;
  font-size: 12px;
  margin-right: 20px;
  text-align: justify !important;
}

.faq .card .card-body {
  padding: 30px;
   padding-left: 35px; 
  padding-bottom: 16px;
  font-weight: 400;
  font-size: 16px;
  color: #575756;
  line-height: 28px;
  letter-spacing: 1px;
  border-top: 1px solid #F3F8FF;
}

.faq .card .card-body p {
  margin-bottom: 14px;
}

 @media (max-width: 991px) {
  .faq {
    margin-bottom: 30px;
  }
  .faq .card .card-header .faq-title {
    line-height: 26px;
    margin-top: 10px;
  }
} 
p{
    text-align: justify !important;  
}
  

  </style>

</head>

 <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-bold" role="status" >
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
        <div class="col-md-6 mt-5 ">
               <h3 class="text-dark addColor ">Mobile Health Screening</h3>
               <p class="" style="text-align: justify;">Our Non-Fasting Mobile Health Screening lets you take charge of your health anytime and anywhere,
                 providing flexibility and convenience in the comfort of your preferred location. Our various packages
                  offered are designed to offer comprehensive screening for individuals to take proactive care of their health.</p>
            </div>          

         <div class="col-md-6">
            <div class="card shadow overflow-hidden">
                <img class="section1-image img-responsive" src="images/h3.jpeg" id="img"  alt="logo">
            </div>
            </div>
          </div>
         </div>
        </div>
<br>
       <div class="container-fluid">
       <div class="main"><br>
    <table class="price-table">
        <tbody>
           
            <tr class="price-table-head">
                
                <td style="color:#691C32"><br>
                Mobile Health Screening Package
                    
                    <br><br>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                </td>
                <td style="color:#691C32">
                Focus Mobile 1
                    <br><small style="font-size: 12px; font-weight: 400;">Urine
                Diabetes
                Cholesterol
                Blood Test</small>
                <br><span style="color:691C32;"><a></a>See more..</span>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                </td>
                <td class="green-width" style="color:#691C32">
                Focus Mobile 2
                    <br><small style="font-size: 12px; font-weight: 400;">Everything
                in Focus
                Mobile 1,
                plus;</small>
                <br><br>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                </td>
                <td class="green-width" style="color:#691C32">
                Focus Mobile 3
                    <br><small style="font-size: 12px; font-weight: 400;">Everything
                in Focus
                Mobile 2,
                plus;</small>
                <br><br>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                </td>
                <td class="green-width" style="color:#691C32">
                Focus Mobile 4
                    <br><small style="font-size: 12px; font-weight: 400;">Everything
                in Focus
                Mobile 3,
                plus;</small>
                <br><br>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                </td>
                <td class="green-width" style="color:#691C32">
                Focus Mobile 5
                    <br><small style="font-size: 12px; font-weight: 400;">Everything
                in Focus
                Mobile 4,
                plus;</small>
                <br><br>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                </td>
            </tr>
            <tr>
            <td class="price price1">
            Pricing
            </td>
                                <td class="price text-center">
                                   $148 <sup>*</sup> 
                                </td>
                                <td class="price text-center">
                                $228 <sup>*</sup> 
                                </td>
                                <td class="price text-center">
                                $268 <sup>*</sup> 
                                </td>
                                <td class="price text-center">
                                $368 <sup>*</sup> 
                                </td>
                                <td class="price text-center">
                                $468 <sup>*</sup> 
                                </td>
            </tr>
            <tr>
                <td class="price1"> <b>Biometric Parameters</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr>
                <td class="price1"> Coronory Heart Risk Assessment</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1"> Height &  Weight(BMI)</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1"> Blood Pressure</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
           
            <tr>
                <td class="price1"> <b>Urine & Stool  Analysis</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="price1"> Urine FEME</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>

            <tr>
                <td class="price1"> Urine Microalbumin</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1"> Urine Creatinine</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1"> Urine Microalbumin to<br> Creatinine Ratio</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
           
            <tr>
                <td class="price1"> <b>Blood Analysis</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="price1">  Blood Glucose</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">  Blood Cholesterol</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">  Full Blood Count</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">  Kidney Function</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">  Liver Function</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">  VDRL</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">  Bone Disease</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1"> Gout</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1"> Hepatitis A</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1"> Hepatitis B</td>
                <td><i class="fas fa-check text-center"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1"> Hepatitis C</td>
                <td > <i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td> <i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1"> Helicobacter Pylori</td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1"> Thyroid Function(FT4,TSH)</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1"> Rheumatoid Factor</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1"> <b>Tumour</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td class="price1">AFP (Liver)</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">CEA (Colon)</td>
                <td> <i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">PSA(Prostate)/CA125 (Ovaries)</td>
                <td> <i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">CA19.9(Pancreas)</td>
                <td> <i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">EBV EA IgA(Nose)</td>
                <td> <i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1"> <b>Heart Screen</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="price1">Apolipoprotein A</td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td> <i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td> <i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">Apolipoprotein B</td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">Apo B/A1 Ratio</td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">HsCRP</td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1"> <b>Deficiency Screen</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td class="price1">Vitamin D</td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">Vitamin B12</td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">Folate</td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td class="price1">Iron</td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-times " style="font-size:17px; color:gray;"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>



            <tr>
                <td class="price1"> <b>Medical Report & Review</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="price1">Report review with Doctor (Teleconsult)</td>
                <td><i class="fas fa-check " style="text-align: center;"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            
            <tr class="">
              <div class="mb-4">
              <td></td>
                <td class="price text-center">
                <a href="https://clinic.platomedical.com/book/dGhldGVzdGluZ3Bybw==/3a15474421d84593b830f623ecee4538/LRacOHE">BOOK NOW</a>
                </td>
                <td class="price text-center">
                    <a href="https://clinic.platomedical.com/book/dGhldGVzdGluZ3Bybw==/3a15474421d84593b830f623ecee4538/LRacOHE">BOOK NOW</a>
                </td>
                <td class="price text-center">
                    <a href="https://clinic.platomedical.com/book/dGhldGVzdGluZ3Bybw==/3a15474421d84593b830f623ecee4538/LRacOHE">BOOK NOW</a>
                </td>
                <td class="price text-center">
                    <a href="https://clinic.platomedical.com/book/dGhldGVzdGluZ3Bybw==/3a15474421d84593b830f623ecee4538/LRacOHE">BOOK NOW</a>
                </td>
                <td class="price text-center">
                    <a href="https://clinic.platomedical.com/book/dGhldGVzdGluZ3Bybw==/3a15474421d84593b830f623ecee4538/LRacOHE">BOOK NOW</a>
                </td>
</div>
            </tr>
            
        </tbody>
    </table>
</div>

<br><br>

                     <div class="">
                      <h5 class="text-center">Please click <a href="./beforebooking.php" class="addColor font-weight-bold" style="text-decoration:none ;"> here</a> for important information to take note of before booking appointment.</h5>
                      <h5 class="text-center">Focus Lite is also available. Please click <a href="./focustable.php" style="text-decoration:none ;" class="addColor font-weight-bold"> here</a> to know more.</h5>
                        <h5 class="text-center mb-5"> Please<a href="contact.php" style="text-decoration:none ;" class="addColor font-weight-bold"> Contact Us</a> if you require fasting options.</h5>
                    
                    </div>  
                    </div>  
                    <br>
                    <section class="faq-section">
<div class="container">
  <div class="row">
  
                    <!-- ***** FAQ Start ***** -->
                    <div class="col-md-6 offset-md-3">

                        <div class="faq-title text-center pb-3">
                            <h3>FAQ</h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-center ml-5"><h4>GENERAL</h4></div>
                    <div class="col-md-6 offset-md-3">
                        <div class="faq" id="accordion">
                            <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                            <span class="badge">+</span><b>Am I able to conduct the Mobile Health Screening anywhere?</b>
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We conduct Health Screening at the comfort of your preferred location. However, please note that we are only able to conduct<b> only within </b> the compounds of private residences, offices with rooms or private areas and hotel rooms or function rooms. We <b>do not</b> conduct at public areas such as void decks, carparks, public walkways, etc. 
 </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-2">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                            <span class="badge">+</span><b> Is there any age limit for Mobile Health Screening?</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We are able to conduct Mobile Health Screening for individuals aged 18 years and above. 
</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            <span class="badge">+</span> <b>Am I required to book an appointment for Mobile Health Screening?</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Booking an appointment would allow us to prepare in advance for tests. This allows you to have a smooth and seamless experience. 
</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-4">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                            <span class="badge">+</span> <b>Can I make multiple appointment bookings for my family members?</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Please email us at<b> mts@thetestingpro.com </b>if you are booking for more than 4 persons</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-5">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                            <span class="badge">+</span><b> Will there be additional charges imposed for last minute booking appointment?</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> There will be a <b>surcharge</b> of <b>$48</b> for appointment booking made <b>less than one (1) working day.</b></p>
</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-6">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                            <span class="badge">+</span><b> Will there be additional charges imposed for long-haul locations?</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>There will be a<b> surcharge</b> of<b> $48</b> for long-haul locations such as Changi Airfreight Centre, Changi Airport, Jurong Island, Sentosa and Tuas.  

</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7" >
                                            <span class="badge">+</span> <b>For appointment booking after operation hours, i.e., after 9.30pm, will there be additional charges imposed?</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>There will be a <b>surcharge</b> of<b> $88</b> for appointment booking after operation hours, i.e., after 9.30pm.
                                         Please note that our<b> operation hours</b> to conduct Mobile Health Screening Service are from <b>Monday to Sunday, 9.30am to 9.30pm.</b>      </p>
                                    </div>
                                </div>
                            </div>





                            <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                            <span class="badge">+</span><b> How do I reschedule my confirmed booking appointment after payment has been successfully completed?</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Rescheduling of your confirmed booking appointment is allowed <b>only </b>if requested <b>more than one (1) working day </b>before confirmed booking appointment.
                                         Please note that the rescheduled appointment slot is subject to availability. 
                                         There will be a surcharge of<b> $48 </b>(per booking) for all rescheduling. For example, if your confirmed booking appointment is on 31 August, you<b> must</b>
                                          email us latest by 29 August<b> before 6pm</b> to reschedule your appointment. 

</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                            <span class="badge">+</span> <b>What are the documents required for verification before my health screening is conducted?</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We require your NRIC / Work Permit / Passport / Driving Licence for verification.
</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                            <span class="badge">+</span><b> What are the payment modes accepted?</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We only accept credit card for pre-payment. Details of pre-payment will be sent to you after you have booked your appointment. 
</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                            <span class="badge">+</span> <a href=""><b>Can I request for a Time Chit or Medical Certificate for Health Screening?</a></b>
</a>
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>As Health Screening is arranged at your preferred timing and location and when you are well, we are unable to provide any medical certificate or time chit.
</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                            <span class="badge">+</span> <b>When will I receive my Health Screening Report?<b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Your Health Screening Report will be available within three (3) working days. You will receive a notification via email once your report is ready. 
                              </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                            <span class="badge">+</span><b> How can I schedule for a Doctor’s Post Medical Review/Consultation after receiving my Health Screening Report?</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Please email us at<b> mts@thetestingpro.com </b>for arrangements. Please note that the Doctor’s Post Medical Review/Consultation will be via tele-consultation. </p>
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>
                
                  </div>
                </div>
                 </section>   
        
                 <section class="faq-section">
<div class="container">
  <div class="row">
  
                    <!-- ***** FAQ Start ***** -->
                    <div class="col-md-6 offset-md-3">
                    </div>
                    <div class="col-md-6 text-center ml-5"><h4 >HEALTH CONDITIONS</h4></div>
                    <div class="col-md-6 offset-md-3">
                        <div class="faq" id="accordion">
                            <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                            <span class="badge">+</span><b>Can I proceed with Mobile Health Screening if I am feeling unwell?</b>
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>If you are feeling unwell, we advise that you postpone your health screening as it is an elective procedure. 
                                            You may email us at concierge@thetestingpro.com to reschedule your appointment.
 
 </p>
                                    </div>
                                </div>
                            </div>
                             <div class="card">
                                <div class="card-header" id="faqHeading-2">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                            <span class="badge">+</span><b> Can I proceed with Mobile Health Screening if I have recently recovered from COVID-19?
</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We advise that you wait for a month after recovery. 

 
</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            <span class="badge">+</span> <b>Can I proceed with Health Screening after Vaccination?
</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We advise that you conduct your health screening two (2) weeks after any vaccination. 

</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-4">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                            <span class="badge">+</span> <b>Can I proceed with Mobile Health Screening when I am pregnant or breastfeeding?
</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Generally, you will have regular follow-up and antenatal care with your obstetrician for regular antenatal care and follow-up. It is thus recommended that you check with your obstetrician before booking an appointment.  

</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-5">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                            <span class="badge">+</span><b>Can I proceed with Mobile Health Screening when I am having my menses?
</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> You may proceed for Mobile Health Screening when you are having your menses since it only involves blood tests.  However, if you are selecting the package that includes the Ovarian Tumour Market (CA 125), It is advisable to conduct Mobile Health Screening a week before or after your menses. 

</p>
</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                  </div>
                </div>
                 </section> 
        
                 <section class="faq-section">
<div class="container">
  <div class="row">
  
                    <!-- ***** FAQ Start ***** -->
                    <div class="col-md-6 offset-md-3">
                    </div>
                    <div class="col-md-6 text-center ml-5"><h4 >Non-Fasting</h4></div>
                    <div class="col-md-6 offset-md-3">
                        <div class="faq" id="accordion">
                            <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                            <span class="badge">+</span><b>What are the benefits of Non-Fasting Health Screening? </b>
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>You need not restrict yourself to health screening to be conducted in the morning after a night of fasting. You have the flexibility to arrange for your health screening at any time of the day. This will benefit those with diabetes as it reduces the risk of hypoglycaemia. 
 
 </p>
                                    </div>
                                </div>
                            </div>
                             <div class="card">
                                <div class="card-header" id="faqHeading-2">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                            <span class="badge">+</span><b> Will Non-Fasting Health Screening affect my cholesterol test?

</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Local studies have shown that there are no significant differences for cholesterol levels between fasted and non-fasted blood samples. If your result is abnormal, you should seek advice whether you should do a fasted cholesterol test during your Post Medical Review which can be arranged via tele-consultation. 

 
</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            <span class="badge">+</span> <b>Will Non-Fasting Health Screening affect my glucose test?

</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Screening for diabetes is to ascertain your blood glucose control over the last three (3) months by measuring your sugar molecules attached to your red blood cells. If your random blood glucose result is abnormal, you should seek advice whether you should do a fasted blood glucose test to confirm your diagnosis of diabetes or prediabetes during your Post Medical Review which is arranged via tele-consultation.


</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-4">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                            <span class="badge">+</span> <b>Is there anything that I should avoid before my Non-Fasting Health Screening?
</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We will advise that you avoid alcohol or a heavy meal.
</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-5">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                            <span class="badge">+</span><b>Who is suitable for Non-Fasting Health Screening? 
</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> Non-fasting Health Screening is suitable for the majority.

</p>
</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-6">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                            <span class="badge">+</span><b>Who is unsuitable for Non-Fasting Health Screening? 
 
</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>It is advisable that if you are anaemic, you are unsuitable for the blood glucose test due to its measurement of the degree of sugar bonding with red blood cells.


</p>
</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                            <span class="badge">+</span><b>What if I require Fasting Health Screening?

</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>You may email us at <b>concierge@thetestingpro.com </b>for arrangements.

</p>
</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                            <span class="badge">+</span><b>If I require Fasting Health Screening, how many hours of fasting should I observe before my confirmed booking appointment?


</b>

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Generally, fasting for at least eight (8) hours is necessary for tests involving cholesterol and blood glucose. You may continue to consume your regular medication for chronic disease (for example, hypertension, cholesterol). You are to omit your diabetic medication until you have taken your breakfast.  If you are taking thyroid medications that have recommended timings, it is advisable that you check with your doctor who prescribed you with the medication.  Drinking plain water is encouraged.


</p>
</p>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                
                  </div>
                </div>
                 </section> <br>   



    

   

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