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
  <title>Oncology Center</title>
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
    .pre-scrollable {
    max-height: 400px;
    overflow-y: scroll;
}
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
 

   <div class="container mb-5  ">
    <div class="margins"></div>
     <div class="row ">
         
      <div class="col-md-6 ">
      <h5 class="text-dark font-weight-bold addColor mbsc ">Oncology Drugs Warehouse and Manufacturing Facility </h5>
      <p class="text-justify">As part of our commitment to cancer care, the Integrated Healthcare Hub isfeatured an Oncology Drugs Warehouse and Manufacturing Facility. This facility is serving as a centralized hub for the storage, distribution, and compounding of oncology medications, ensuring timely access to essential drugs for cancer patients across the country. Additionally, our manufacturing facility is producing high-quality oncology medications, addressing supply chain challenges and promoting affordability and accessibility of cancer treatments. </p> 
    </div>
      <div class="col-md-6 ">
      <div class=" overflow-hidden" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">

       <img  width="100%" class="section1-image img-responsive" src="./images/oncolo.jpg" alt="image">
      </div>
      </div>

    </div>
    <h3 class="text-center text-dark m-2 mt-5">Our Oncology Product Range:</h3>
   <div class="row">
    <div class="col-md-12">
      <h4 class="text-center text-dark header-text m-2 mt-5">TABLET & CAPSULE</h4>
    <div class="container  pre-scrollable">
        <table class="table table-striped ">
            <thead class="">
                <tr>
                    <th scope="col">SNo.</th>
                    <th scope="col">GENERIC NAME</th>
                    <!-- <th scope="col">BRAND NAME</th> -->
                    <th scope="col">STRENGTH</th>
                    <th scope="col">PACK</th>
                    <!-- <th scope="col">CTD DOSSIER/ COPP/ FSC</th> -->
                </tr>
            </thead>
           
    <tbody>
       
        <tr>
            <td>1</td>
            <td>Abiraterone acetate Tab</td>
            <!-- <td>Zabiteron Tab</td> -->
            <td>250mg</td>
            <td>1x120</td> 
           
        </tr>
        <tr>
            <td>2</td>
            <td>Anastrozole Tab</td>
            <!-- <td>Anastroz Tab</td> -->
            <td>1mg</td>
            <td>1 x 10</td>
           
        </tr>
        <tr>
            <td>3</td>
            <td>Aprepitant Combi Pack Cap</td>
            <!-- <td>Aprepet-Z</td> -->
            <td>125/80mg</td>
            <td>1 x 3</td>
           
        </tr>
        <tr>
            <td>4</td>
            <td>Axitinib Tab</td>
            <!-- <td>Zixib Tab</td> -->
            <td>5mg</td>
            <td>1x14</td>
            
        </tr>
        <tr>
            <td>5</td>
            <td>Bicalutamide Tab</td>
            <!-- <td>Bicalutaz Tab</td> -->
            <td>50 150mg</td>
            <td>1 x 10</td>
            
        </tr>
        <tr>
            <td>6</td>
            <td>Capecetabine Tab</td>
            <!-- <td>Capetaz Tab</td> -->
            <td>500mg</td>
            <td>1 x 10</td>
           
        </tr>
        <tr>
            <td>7</td>
            <td>Chlorambucil Tabs Tab</td>
            <!-- <td>Zuberi Tab</td> -->
            <td>2/5mg</td>
            <td>1 x 30</td>
            
        </tr>
        <tr>
            <td>8</td>
            <td>Cyclophosphamide Tab</td>
            <!-- <td>Zuviphos Tab</td> -->
            <td>50mg</td>
            <td>1x10</td>
            
        </tr>
        <tr>
            <td>9</td>
            <td>Dasatinib Tab</td>
            <!-- <td>Pptinib Tab</td> -->
            <td>20/50/70mg</td>
            <td>1 x 60</td>
           
        </tr>
        <tr>
            <td>10</td>
            <td>Enzalutamide Cap</td>
            <!-- <td>Enzumide Cap</td> -->
            <td>40mg</td>
            <td>1 x 28</td>
           
        </tr>
        <tr>
            <td>11</td>
            <td>Erlotinib Tab</td>
            <!-- <td>Erlonon Tab</td> -->
            <td>100 / 150mg</td>
            <td>1 x 10</td>
            
        </tr>
        <tr>
            <td>12</td>
            <td>Etoposide Cap</td>
            <!-- <td>Zuvitop Cap</td> -->
            <td>50mg</td>
            <td>1 x 8</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Everolimus Tab</td>
            <!-- <td>Osirus Tab</td> -->
            <td>10mg</td>
            <td>1 x 10</td>
           
        </tr>
        <tr>
            <td>14</td>
            <td>Exemestane Tab</td>
            <!-- <td>Exemestaz Tab</td> -->
            <td>25mg</td>
            <td>1 x 30</td>
            
        </tr>
        <tr>
            <td>15</td>
            <td>Gefitinib Tab</td>
            <!-- <td>Zefinib Tab</td> -->
            <td>250mg</td>
            <td>1x10</td>
           
        </tr>
        <tr>
            <td>16</td>
            <td>Hydroxyurea Cap</td>
            <!-- <td>Zydrox Cap</td> -->
            <td>500mg</td>
            <td>1 x 10</td>
           
        </tr>
        <tr>
            <td>17</td>
            <td>Imatinib Cap</td>
            <!-- <td>Zimitib Cap</td> -->
            <td>100mg</td>
            <td>1 x 10</td>
           
        </tr>
        <tr>
            <td>18</td>
            <td>Imatinib Tab</td>
            <!-- <td>Zimitib Tab</td> -->
            <td>400mg</td>
            <td>1 x 10</td>
            
        </tr>
        <tr>
            <td>19</td>
            <td>Lapatinib Tab</td>
            <!-- <td>Lapiz Tab</td> -->
            <td>250mg</td>
            <td>1 x 10</td>
            
        </tr>
        <tr>
            <td>20</td>
            <td>Lenalidomide Cap</td>
            <!-- <td>Myeloma Cap</td> -->
            <td>10/25mg</td>
            <td>1 x 10</td>
            
        </tr>
        <tr>
            <td>21</td>
            <td>Lenvatinib Cap</td>
            <!-- <td>Lenvitib Cap</td> -->
            <td>/10mg</td>
            <td>1 x 10</td>
            
        </tr>
        <tr>
            <td>22</td>
            <td>Letrozole Tab</td>
            <!-- <td>Zuvitroz Tab</td> -->
            <td>2.5mg</td>
            <td>1x10</td>
            
        </tr>
        <tr>
            <td>23</td>
            <td>Leucovorin Calcium Tab</td>
            <!-- <td>Zovorin Tab</td> -->
            <td>15mg</td>
            <td>1 x 10</td>
            
        </tr>
        <tr>
            <td>24</td>
            <td>Megestrol Acctate Tab</td>
            <!-- <td>Ridoxia Tab</td> -->
            <td>160mg</td>
            <td>1x10</td>
            
        </tr>
        <tr>
            <td>25</td>
            <td>Melphalan Tab</td>
            <!-- <td>Melphalaz Tab</td> -->
            <td>/ 5mg</td>
            <td>1 x 25</td>
            
        </tr>
        <tr>
            <td>26</td>
            <td>Mercaptopurine Tab</td>
            <!-- <td>Mercaptaz Tab</td> -->
            <td>50mg</td>
            <td>1 x 10</td>
            
        </tr>
        <tr>
            <td>27</td>
            <td>Methotrexate Tab</td>
            <!-- <td>Zuvitrex Tab</td> -->
            <td>2.5 7.5mg</td>
            <td>1x10</td>
            
        </tr>
        <tr>
            <td>28</td>
            <td>Nilotinib Cap</td>
            <!-- <td>Nilotaz Cap</td> -->
            <td>150 / 200mg</td>
            <td>1 x 7</td>
            
        </tr>
        <tr>
            <td>29</td>
            <td>Pazopanib Tab</td>
            <!-- <td>Zupanib Tab</td> -->
            <td>200 / 400mg</td>
            <td>1 x 30</td>
            
        </tr>
        <tr>
            <td>30</td>
            <td>Sorafenib Tab</td>
            <!-- <td>Zuvisor Tab</td> -->
            <td>200mg</td>
            <td>1x30/1x120</td>
            
        </tr>
        <tr>
            <td>31</td>
            <td>Tamoxifen Tab</td>
            <!-- <td>Zutam Tab</td> -->
            <td>20mg</td>
            <td>1x10</td>
           
        </tr>
        <tr>
            <td>32</td>
            <td>Temozolamide Cap</td>
            <!-- <td>Temoloz Cap</td> -->
            <td>20/100/250mg</td>
            <td>1 x 5</td>
            
        </tr>
        <tr>
            <td>33</td>
            <td>Thalidomide Cap</td>
            <!-- <td>Zuvimide Cap</td> -->
            <td>50 100mg</td>
            <td>1x10</td>
            
        </tr>
    </tbody>

        </table>
    </div>
    </div>
    <div class="col-md-12">
      <h4 class="text-center text-dark header-text mt-2">INJECTIONS</h4>
      <div class="container  pre-scrollable">
    <table class="table table-striped">
    <thead>
    <tr>
        <th  scope="col">SNO</th>
        <th  scope="col">NAME</th>
        <th  scope="col">STRENGTH</th>
        <th  scope="col">PACK</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>Albumin bound Paclitaxel</td>
        <td>100mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Amifostine</td>
        <td>500mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Azacitidine</td>
        <td>100mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Bendamustin</td>
        <td>100mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Bleomycin Sulphate</td>
        <td>15 IU</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Bortezomib</td>
        <td>2/3.5mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Busulfan</td>
        <td>60 mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Cabazitaxel with Diluent</td>
        <td>60 mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>9</td>
        <td>Carboplatin</td>
        <td>450mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Carfilzomib</td>
        <td>60mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>11</td>
        <td>Carmustin</td>
        <td>100mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Cisplatin</td>
        <td>10/50mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>13</td>
        <td>Cladribine</td>
        <td>10mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>14</td>
        <td>Cytarabine</td>
        <td>100 / 500 / 1000mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>15</td>
        <td>Docarbazine</td>
        <td>200/500mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>16</td>
        <td>Dactinomycin</td>
        <td>0.5mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>17</td>
        <td>Daunorubcin</td>
        <td>20mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>18</td>
        <td>Decitabine</td>
        <td>50mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>19</td>
        <td>Degarelix</td>
        <td>80 /120 mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>20</td>
        <td>Docetaxel</td>
        <td>20/80/120mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>21</td>
        <td>Doxorubicin</td>
        <td>10/50mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>22</td>
        <td>Descrubion Hydrochloride Liposome</td>
        <td>10/20mg</td>
        <td>vial</td>
    </tr>
    <tr>
        <td>23</td>
        <td>Epirubicin</td>
        <td>10/50/100mg</td>
        <td>vial</td>
    </tr>
    <tr>
        <td>24</td>
        <td>Eribulin Mesylate</td>
        <td>0.88mg / 2ml</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>25</td>
        <td>Etoposide</td>
        <td>100mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>26</td>
        <td>Fludarabine Phosphate</td>
        <td>50mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>27</td>
        <td>Fosaprepitant</td>
        <td>150mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>28</td>
        <td>Fulvestrant</td>
        <td>250mg</td>
        <td>1 PFS</td>
    </tr>
    <tr>
        <td>29</td>
        <td>Gemcitabine</td>
        <td>200/1/1.4gm</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>30</td>
        <td>Gemcitabine RTU</td>
        <td>200/1/1.4gm</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>31</td>
        <td>Granisetron</td>
        <td>3mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>32</td>
        <td>Idarubicin Hydrochloride</td>
        <td>5/10 mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>33</td>
        <td>Irinotecan</td>
        <td>40/100mg</td>
        <td>vial</td>
    </tr>
    <tr>
        <td>34</td>
        <td>L- Asparaginose</td>
        <td>5000/10000 iu</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>36</td>
        <td>Leucovorin Calcium</td>
        <td>50mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>37</td>
        <td>Melphalan</td>
        <td>50mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>38</td>
        <td>Methotrexate</td>
        <td>50 / 500 / 1000mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>39</td>
        <td>Mitomycin</td>
        <td>2/ 10mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>40</td>
        <td>Mitoxantrone</td>
        <td>20 mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>41</td>
        <td>Oxaliplatin</td>
        <td>50 / 100 / 150mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>42</td>
        <td>Paclitaxel</td>
        <td>30/100/260/300mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>43</td>
        <td>Peg L. Asparaginase</td>
        <td>3750 IU</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>44</td>
        <td>Pemetrexed</td>
        <td>100 / 500mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>45</td>
        <td>Plerixafor</td>
        <td>24mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>46</td>
        <td>Topotecon Hydrochloride</td>
        <td>4mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>47</td>
        <td>Vinblastine</td>
        <td>10mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>48</td>
        <td>Vincristine</td>
        <td>1mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>49</td>
        <td>Vinorelbine</td>
        <td>10 / 50mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>50</td>
        <td>Zoledronic Acid</td>
        <td>4mg</td>
        <td>1 vial</td>
    </tr>
</tbody>
</table>
    </div>
    </div>
    <div class="col-md-12">
      <h4 class="text-center text-dark header-text m-2">PRODUCTS UNDER DEVELOPMENT</h4>
    <div class="container  pre-scrollable">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">SNo.</th>
                    <th scope="col">GENERIC NAME</th>
                    <th scope="col">STRENGTH</th>
                    <th scope="col">PACK</th>
                </tr>
            </thead>
           
    <tbody>
    <tr>
        <td>1</td>
        <td>Apolutamide Tab</td>
        <td>60mg</td>
        <td>30 Tab.</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Azathioprine Tab</td>
        <td>50/100mg</td>
        <td>10 10</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Binimetinib Tab.</td>
        <td>15mg</td>
        <td>30 Tab.</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Busulfan Inj.</td>
        <td>60mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Estramustine Phosphate Cop.</td>
        <td>140mg</td>
        <td>1 x 10</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Filgrastim Inj.</td>
        <td>300mcg</td>
        <td>PFS</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Fludarabine Phosphate Inj.</td>
        <td>10 50mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Flutamide Tab.</td>
        <td>250mg</td>
        <td>3x1 10</td>
    </tr>
    <tr>
        <td>9</td>
        <td>Goserelin Inj.</td>
        <td>3.6 6/10.8mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Ibrutinib Cap</td>
        <td>140mg</td>
        <td>30 Cap.</td>
    </tr>
    <tr>
        <td>11</td>
        <td>Idarubicin Inj.</td>
        <td>5/10/20mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Ifosfamide Inj.</td>
        <td>1 2gm</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>13</td>
        <td>Larotrectinib Cop.</td>
        <td>25 / 100mg</td>
        <td>30 Cop.</td>
    </tr>
    <tr>
        <td>14</td>
        <td>Leuprolide Acetate</td>
        <td>3.75/11.25/22.50mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>15</td>
        <td>Mitoxantrone Inj.</td>
        <td>20mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>16</td>
        <td>Niraparib Cap.</td>
        <td>100mg</td>
        <td>30 Cop.</td>
    </tr>
    <tr>
        <td>17</td>
        <td>Olaparib Cap.</td>
        <td>150mg</td>
        <td>112 / 120</td>
    </tr>
    <tr>
        <td>18</td>
        <td>Osimertinib Tab.</td>
        <td>80mg</td>
        <td>3 x 10</td>
    </tr>
    <tr>
        <td>19</td>
        <td>Ponatinib Tab.</td>
        <td>15 45mg</td>
        <td>30 Tab</td>
    </tr>
    <tr>
        <td>20</td>
        <td>Procarbazine Cap.</td>
        <td>50mg</td>
        <td>1x10</td>
    </tr>
    <tr>
        <td>21</td>
        <td>Rucaparib Tab</td>
        <td>200 / 300mg</td>
        <td>1x60</td>
    </tr>
    <tr>
        <td>22</td>
        <td>Topotecan Inj.</td>
        <td>2.5/4mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>23</td>
        <td>Tucatinib Tab.</td>
        <td>150mg</td>
        <td>30 Tab.</td>
    </tr>
       
        
       
    </tbody>

        </table>
    </div>
    </div>
    <div class="col-md-12">
      <h4 class="text-center text-dark header-text m-2">NEWLY LAUNCHED PRODUCTS</h4>
    <div class="container  pre-scrollable ">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">SNo.</th>
                    <th scope="col">GENERIC NAME</th>
                    <th scope="col">STRENGTH</th>
                    <th scope="col">PACK</th>
                </tr>
            </thead>
           
    <tbody>
    <tr>
        <td>1</td>
        <td>Afatinib Tab</td>
        <td>20 / 30 / 40mg</td>
        <td>1 x 28</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Azacitidine Tab</td>
        <td>200 / 300mg</td>
        <td>1x14</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Cabozantinib Tab</td>
        <td>20 / 40 / 60mg</td>
        <td>1 30</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Octreotide LAR Inj</td>
        <td>30mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Peg Filgrastim inj</td>
        <td>6mg</td>
        <td>1 vial</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Sunitinib Cap</td>
        <td>12.5 / 25/50mg</td>
        <td>1 x 28</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Palbociclib Cap.</td>
        <td>75 / 100 / 125mg</td>
        <td>1x21</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Pomalidomide Cap</td>
        <td>2mg</td>
        <td>1 x 21</td>
    </tr>
    <tr>
        <td>9</td>
        <td>Benzydamine Mouthwash</td>
        <td>0.15% w/v</td>
        <td>100ml</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Calcium Citrate Malate</td>
        <td>250mg</td>
        <td>1 x 30</td>
    </tr>
    <tr>
        <td>11</td>
        <td>Curcumin Tabs</td>
        <td>500mg</td>
        <td>1x10</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Dexamethasone Tabs</td>
        <td>4mg</td>
        <td>1x10</td>
    </tr>
    <tr>
        <td>13</td>
        <td>Glutamine Powder</td>
        <td>15/20gm</td>
        <td>1x10</td>
    </tr>
    <tr>
        <td>14</td>
        <td>L-Glutathiome Caps</td>
        <td>300mg</td>
        <td>1x10</td>
    </tr>
    <tr>
        <td>15</td>
        <td>Lidocain HCI</td>
        <td>21.30mg</td>
        <td>100 ml</td>
    </tr>
    <tr>
        <td>16</td>
        <td>Protein SupplementPowder 60%</td>
        <td>200gm / 1kg</td>
        <td>1 Pack</td>

    </tr>
    <tr>
        <td>17</td>
        <td>Protein SupplementPowder 40%</td>
        <td>200gm</td>
        <td>1 Pack</td>
    </tr>
    <tr>
    <td>18</td>
        <td>Protein SupplementPowder 80%</td>
        <td>200/450gm</td>
        <td>1 Pack</td>
    </tr>
   
    <tr>
        <td>19</td>
        <td>Protein Supplement (Diabetic)</td>
        <td>200gm</td>
        <td>1 Pack</td>
    </tr>
    <tr>
        <td>20</td>
        <td>Saliva Stimulating Tab</td>
        <td>200mg</td>
        <td>1x30/1x60</td>
    </tr>
    <tr>
        <td>21</td>
        <td>Vitamin C Chewable Tablet</td>
        <td>500mg</td>
        <td>1x30</td>
    </tr>
       
        
       
    </tbody>

        </table>
    </div>
    </div>
   </div>
  
    


    <div class="row mt-4">
    <div class="col-md-4">
        <h3 class="text-dark font-weight-bold addColor">Enquire Now</h3>
        <p class="addColor font-weight-bold">Do you have an enquiry?</p>
        <p>Please complete the form and we will get back to you as soon as we can.</p>
    </div>
    <div class="col-md-8">
   <p class="text-dark">Fields marked with  <span class="text-danger">*</span> are required</p>
   <h4 class="sent-notification"></h4>
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
   <form  id="myForm" method="POST" >

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
        <label for="inputAddress">Subject<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="subject" id="company" placeholder=""  >
      </div>
      
      <div class="form-group col-md-6">
        <label for="exampleFormControlTextarea1">How can we help?<span class="text-danger">*</span></label>
        <textarea class="form-control" name="help" id="help" rows="3" required="true" ></textarea>
      </div>
      <div class="form-group col-md-6">
        <!-- <label for="">Complete Captcha</label>
      <div class="g-recaptcha" data-callback="captchaVerified" data-sitekey="<?php echo $siteKey ?>"></div> -->
      </div>
    </div>
      <button type="submit"  name="send" id="send" class="btn btn-corporate mb-5 float-right" >Send</button> 
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
  // function captchaVerified(){
  //   var submitBtn=document.querySelector('#submit');
  //   submitBtn.removeAttribute('disabled');
  // }
</script>


</body>

</html>