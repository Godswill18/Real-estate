<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags --><!-- FOR MORE PROJECTS visit: codeastro.com -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Real Estate PHP">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/pageload.css">
<link rel="stylesheet" type="text/css" href="css/ani.css">

<!--	Title
	=========================================================-->
    <title>Leton Realty Homes</title>
</head>
<body>

<div id="preloader"></div>
<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property Detail</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="index.php?page=property">Properties</a></li>
                                <li class="breadcrumb-item active"><a href='index.php?page=landproperty'>Land Properties </a></li>
                                <li class="breadcrumb-item active"><a href='index.php?page=houseproperty'>House Properties </a></li>
                                <li class="breadcrumb-item active"><a href='index.php?page=appartment'>Apartment </a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->

		
        <div class="full-row">
            <div class="container">
                <div class="row"><!-- FOR MORE PROJECTS visit: codeastro.com -->
				
					<?php
					$id = $_REQUEST['pid'];
                    $query = mysqli_query($con, "SELECT property.*, user.* FROM property 
                                                LEFT JOIN user ON property.uid = user.uid 
                                                WHERE pid='$id'");
                    while ($row = mysqli_fetch_array($query)) {
					  ?>
				  
                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col-md-12">
                                <div id="single-property" style="width:1200px; height:1000px; margin:30px auto 50px;"> 
                                    <!-- Slide 1-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5;  kenburnsscale:1.2;"> <img width="1050" height="auto" src="admin/property/<?php echo $row['16'];?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 2-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5;  kenburnsscale:1.2;"> <img width="1050" height="auto" src="admin/property/<?php echo $row['17'];?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 3-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5;  kenburnsscale:1.2;"> <img width="1050" height="auto" src="admin/property/<?php echo $row['18'];?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 4-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5;  kenburnsscale:1.2;"> <img width="1050" height="auto" src="admin/property/<?php echo $row['19'];?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 5-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5;  kenburnsscale:1.2;"> <img width="1050" height="auto" src="admin/property/<?php echo $row['20'];?>" class="ls-bg" alt="" /> </div>
                                </div>
                            </div>
                        </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="bg-success d-table px-3 py-2 rounded text-white text-capitalize">For <?php echo $row['4'];?></div>
                                <h5 class="mt-2 text-secondary text-capitalize"><?php echo $row['1'];?></h5>
                                <span class="mb-sm-20 d-block text-capitalize"><i class="fas fa-map-marker-alt text-success font-12"></i> &nbsp;<?php echo $row['13'];?></span>
							</div>
                            <div class="col-md-6">
                                <div class="text-success text-left h5 my-2 text-md-right">₦<?php echo $row['12'];?></div>
                                <div class="text-left text-md-right">Price</div>
                            </div>
                        </div>
                        <div class="property-details">
                            <!-- <div class="bg-gray property-quantity px-4 pt-4 w-100">
                                <ul>
                                    <li><span class="text-secondary"><?php echo $row['6'];?></span> Square Meters</li>

                                </ul>
                            </div> -->
                            <h4 class="text-secondary my-4">Description</h4>
                            <p><?php echo $row['2'];?></p>

                            <h4 class="text-secondary my-4">Video</h4>
                            <p class="description"><?php echo $row['25'];?></p>
                            
                            <!-- <h5 class="mt-5 mb-4 text-secondary">Property Summary</h5>
                            <div  class="table-striped font-14 pb-2">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                        <td>Square Meters :</td>
                                            <td class="text-capitalize"><?php echo $row['6'];?></td>
                                        </tr>
                                        <tr>
                                            
                                            <td>Property Type :</td>
                                            <td class="text-capitalize"><?php echo $row['3'];?></td>
                                        </tr>
                                        <tr>
                                           
                                        <td>City :</td>
                                            <td class="text-capitalize"><?php echo $row['14'];?></td>
                                           
                                        </tr>
                                        <tr>
                                        <td>State :</td>
                                            <td class="text-capitalize"><?php echo $row['15'];?></td>
                                        </tr>
                                        <tr>
                                        <td>Landmark :</td>
                                            <td class="text-capitalize"><?php echo $row['5'];?></td>
                                        </tr>
                                        <tr>
                                        <td>Neighborhood :</td>
                                            <td class="text-capitalize"><?php echo $row['7'];?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div> -->
                             
							<!-- FOR MORE PROJECTS visit: codeastro.com -->
                            <!-- <h5 class="mt-5 mb-4 text-secondary">Floor Plans</h5>
                            <div class="accordion" id="accordionExample">
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Floor Plans </button>
                                <div id="collapseOne" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <img src="admin/property/<?php echo $row['25'];?>" alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Basement Floor</button>
                                <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <img src="admin/property/<?php echo $row['26'];?>" alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Ground Floor</button>
                                <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <img src="admin/property/<?php echo $row['27'];?>" alt="Not Available"> </div>
                            </div> -->

                            <h5 class="mt-5 mb-4 text-secondary double-down-line-left position-relative">Contact </h5>
                            <div class="agent-contact pt-60">
                                <div class="row">
                                    <!-- <div class="col-sm-4 col-lg-3"> <img src="admin/user/<?php echo $row['uimage']; ?>" alt="" height="200" width="170"> </div> -->
                                    <div class="col-sm-8 col-lg-9">
                                        <div class="agent-data text-ordinary mt-sm-20">
                                            <!-- <h6 class="text-success text-capitalize"><?php echo $row['uname'];?></h6> -->
                                            <ul class="mb-3">
                                                <li><?php echo $row['uphone'];?></li>
                                                <li><?php echo $row['uemail'];?></li>
                                            </ul>
                                            
                                            <div class="mt-3 text-secondary hover-text-success">
                                                <ul>
                                                    <li class="float-left mr-3"><a href="https://www.facebook.com/tonier.leton?mibextid=ZbWKwL" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="float-left mr-3"><a href="https://instagram.com/tonierleton?igshid=NzZlODBkYWE4Ng==" target="blank"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="https://www.linkedin.com/in/letonrealty?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="blank"><i class="fab fa-linkedin"></i></a></li>
                                                    <!-- <li class="float-left mr-3"><a href="https://wa.me/2348079843784" target="blank"><i class="fab fa-whatsapp" ></i></a></li> -->

                                         
                                                    <!-- <li class="float-left mr-3"><a href="#"><i class="fab fa-linkedin-in"></i></a></li> -->
                                                    <!-- <li class="float-left mr-3"><a href="#"><i class="fas fa-rss"></i></a></li> -->
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <br>
                                        
                                        <a href='tel:+2348079843784' target='blank'>

                                            <button class="call-agent" style='padding: 10px 20px; background-color: #9e9c9c; border: none; border-radius: 5px;' > <i class="fa fa-phone" aria-hidden="true"></i> Call  </button>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php } ?>

                    
					
                    <div class="col-lg-4 sec-x">
                        <!-- <div class="sidebar-widget">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Instalment Calculator</h4>
						<form class="d-inline-block w-100" action="calc.php" method="post">
                            <label class="sr-only">Property Amount</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">₦</div>
                                </div> FOR MORE PROJECTS visit: codeastro.com 
                                <input type="text" class="form-control" name="amount" placeholder="Property Price">
                            </div>
                            <label class="sr-only">Month</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                                <input type="text" class="form-control" name="month" placeholder="Duration Year">
                            </div>
                            <label class="sr-only">Interest Rate</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">%</div>
                                </div>
                                <input type="text" class="form-control" name="interest" placeholder="Interest Rate">
                            </div>
                            <button type="submit" value="submit" name="calc" class="btn btn-danger mt-4">Calculate Instalment</button>
                        </form>
                        </div> -->

                        <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-5 aniG">Featured Properties</h4>
                        <ul class="property_list_widget">
							
                            <?php 
                            $query=mysqli_query($con,"SELECT * FROM `property` WHERE isFeatured = 1 ORDER BY date DESC LIMIT 3");
                                    while($row=mysqli_fetch_array($query))
                                    {
                            ?>
                            <li class="aniG"> <img src="admin/property/<?php echo $row['16'];?>" alt="pimage" class="aniG">
                                <h6 class="text-secondary hover-text-success text-capitalize aniG"><a href="index.php?page=propertydetail&pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h6>
                                <span class="font-14 aniG"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?php echo $row['14'];?></span>
                                
                            </li>
                            <?php } ?>

                        </ul>
                        
                        <div class="sidebar-widget mt-5 sec-x">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 aniG">Recently Added Property</h4>
                            <ul class="property_list_widget">
							
								<?php 
								$query=mysqli_query($con,"SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
										while($row=mysqli_fetch_array($query))
										{
								?>
                                <li> <img src="admin/property/<?php echo $row['16'];?>" alt="pimage" class="aniG">
                                    <h6 class="text-secondary hover-text-success text-capitalize aniG"><a href="index.php?page=propertydetail&pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h6>
                                    <span class="font-14 aniG"><i class="fas fa-map-marker-alt icon-success icon-small "></i> <?php echo $row['14'];?></span>
                                    
                                </li>
                                <?php } ?>

                            </ul>
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
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/pageload.js"></script>
<script src="js/animate.js"></script>
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
<script src="js/custom.js"></script> 

</body>

</html>