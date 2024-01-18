<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- <link rel="stylesheet" href="css/property.css"> -->
<link rel="stylesheet" href="css/allproperty.css">
<link rel="stylesheet" type="text/css" href="css/pageload.css">
<title>Leton Realty Homes</title>
</head>
<body >
<div id="preloader"></div>
       <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->

        <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Properties</h2>
                        </div>
                </div>
       
    <div class="bodyX">
    <div class="container">
       
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>Land </h2>
              <h3>Land </h3>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
              <a href="index.php?page=landproperty">View properties</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>House</h2>
              <h3>House </h3>

              <a href="index.php?page=houseproperty">view properties</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>Apart</h2>
              <h3>Apartments</h3>

              <a href="index.php?page=apartments">view properties</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    	<!-- Floating whatsapp -->
        <?php include("include/whatsapp.php");?>

        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top -->
        <!--	Js Link
============================================================--> 
<script src="js/pageload.js"></script>
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/YouTubePopUp.jquery.js"></script> 
<script src="js/validate.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>