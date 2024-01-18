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

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <link rel="stylesheet" type="text/css" href="css/ani.css">
    <link rel="stylesheet" type="text/css" href="css/pageload.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">



<!-- Floating WhatsApp -->
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="floating-wpp.css">
    <script type="text/javascript" src="floating-wpp.js"></script>
<!--	Title
	=========================================================-->
<title>Leton Realty Homes</title>
</head>
<body>




<!--	Page Loader  -->
<div id="preloader"></div>
<!-- <div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>  -->
<!--	Page Loader  -->

<div id="page-wrapper " >
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->

        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/sp5KV0Arz3I?si=1LATDx6Cg089FfC-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/sp5KV0Arz3I?si=1LATDx6Cg089FfC-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/sp5KV0Arz3I?si=1LATDx6Cg089FfC-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/sp5KV0Arz3I?si=1LATDx6Cg089FfC-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		 -->
        <!--	Banner Start   -->
        <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('images/banner/img.jpeg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <div class="text-white sec-4 show-animate">
                            <h1 class="mb-4 aniG "><span class="text-success ">Let's Help You make safe and profitable</span><br>
                            real estate investment. </h1>

                            <form method="post" action="index.php?page=propertygrid">
                                <div class="row">
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="type">
                                                <option value="">Select Type</option>
												<option value="apartment">Land</option>
												<option value="flat">Appartments</option>
												<!-- <option value="building">Building</option> -->
												<option value="house">House</option>
												<!-- <option value="villa">Villa</option> -->
												<!-- <option value="office">Office</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="stype">
                                                <option value="">Select Status</option>
												<!-- <option value="rent">Rent</option> -->
												<option value="sale">Sale</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="city" placeholder="Prefered Location" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-group">
                                            <button type="submit" name="filter" class="btn btn-success w-100">Search Property</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	Banner End  -->
        
        <!--	Text Block One
		======================================================-->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 "> 
                        <h2 class="text-secondary double-down-line text-center mb-5 ">Our Service</h2></div>
                </div>
                <div class="text-box-one ">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 sec-3">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s aniG"> 
								<i class="flaticon-rent text-success flat-medium " aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0 "><a href="#">Selling Service</a></h5>
                                <p>We sell LANDS and HOUSES in preferred location</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 sec-3">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s aniG"> 
								<i class="flaticon-for-rent text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Service</a></h5>
                                <p>We help generate income for investors and through real estate Cashback / land banking </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 sec-3">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s aniG"> 
								<i class="flaticon-list text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Property Listing</a></h5>
                                <p>We give the best real estate deals considering investors budgets....</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 sec-3">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s aniG"> 
								<i class="flaticon-diagram text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Land Investment</a></h5>
                                <p>We give the best price for a long term land investment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-----  Our Services  ---->
		
        <!--	Recent Properties  -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-md-12">
                        <h2 class="text-secondary double-down-line text-center mb-4">Recent Properties</h2>
                    </div> -->
                    <!--- <div class="col-md-6">
                        <ul class="nav property-btn float-right" id="pills-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link py-3 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Featured</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Top Sale</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab3" data-toggle="pill" href="#pills-resturant" role="tab" aria-controls="pills-contact" aria-selected="false">Best Sale</a> </li>
                        </ul>
                    </div> 
                    <div class="col-md-12">
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								
									<?php $query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 9");
										while($row=mysqli_fetch_array($query))
										{
									?>
								
                                <div class="col-md-6 col-lg-4">
                                <div class="featured-thumb hover-zoomer mb-4">
                                            <a href="propertydetail.php?pid=<?php echo $row['0'];?>">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="admin/property/<?php echo $row['16'];?>" alt="pimage">
                                                <div class="featured bg-success text-white">New</div>
                                                <div class="sale bg-success text-white text-capitalize">For <?php echo $row['4'];?></div>
                                                <div class="price text-primary"><b>₦<?php echo $row['12'];?> </b><span class="text-white"><?php echo $row['11'];?> Sqft</span></div>
                                            </div>
                                        </a>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-3">
                                                    <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><?php echo $row['1'];?></h5>
                                                    <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-success"></i> <?php echo $row['13'];?></span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span><?php echo $row['11'];?></span> Sqft</li>
                                                        <li><span><?php echo $row['8'];?></span> Beds</li>
                                                        <li><span><?php echo $row['9'];?></span> Baths</li>
                                                        <li><span><?php echo $row['11'];?></span> Kitchen</li>
                                                      
                                                        
                                                    </ul>
                                                </div>
                                                <div class="p-4 d-inline-block w-100">
                                                <div class="float-left text-capitalize"><i class="fa-solid fa-sign-hanging text-success"></i> Property Type : <?php echo $row['3'];?></div>
                                                    <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"></i> <?php echo date('d-m-Y', strtotime($row['date']));?></div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<?php } ?>


                                </div>
                            </div> -->
                            
                            <?php include("include/media.php");?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div> 

  
        
        <!--	Why Choose Us -->
        <div class="full-row living bg-one overlay-secondary-half " style="background-image: url('images/03.jpeg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="living-list pr-4 aniG">
                            <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                         
                            <ul>
                                
                                <li class="mb-4 text-white d-flex "> 
									<i class="flaticon-reward flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2 ">
										<h5 class="mb-3">Property Documentation </h5>
                                        <p>

                                            We don't stop at selling properties, we also make sure you get all the necessary documents.
                                            We go through a detailed process of verifying all properties with proper due diligence before we list them in the open market. 
                                        </p>
									
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex "> 
									<i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Legal Assistance</h5>
                                        <p>
                                        We collaborate with legal professionals to ensure all transactions comply with relevant laws and regulations
                                        </p>
										
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex "> 
									<i class="flaticon-seller flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Customer service</h5>
                                        <p>We provide you with ongoing  communication support through out the buying process and after sales service.</p>
									</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--	why choose us -->
		
		<!--	How it work -->
        <div class="full-row">
            <div class="container">
                
                </div>
            </div>
        </div>
        
        <!--	How It Work -->
        
        <!--	Achievement
        ============================================================-->
        <!-- <div class="full-row overlay-secondary" style="background-image: url('images/breadcromb.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="fact-counter">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Property Available</div>
                            </div>
                        </div>
						<div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='sale'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Sale Property Available</div>
                            </div>
                        </div>
						<div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='rent'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Rent Property Available</div>
                            </div>
                        </div>
                         <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                <?php
										$query=mysqli_query($con,"SELECT count(uid) FROM user");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Registered Users</div>
                            </div>
                        </div> 

                    </div>
                </div>
            </div>
        </div> -->
        
        <!--	Popular Place -->
        <div class="full-row bg-gray   ">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 sec-location">
                        <h2 class="text-secondary double-down-line text-center">Locations</h2>
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="row ">
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9 "> <img  src="images/thumbnail4/la.jpeg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100  ">
									<?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where city='Victoria island' OR city='Lekki' OR city='Epe' OR city='Somolu' OR city='Alimosho' OR city='Lagos Island' OR city='Ikoyi' OR city='Ikeja' OR city='Surulere' OR city='Festac Town' OR city='Apapa' OR city='Agege' OR city='Ajao Estate' OR city='Yaba' OR city='Maryland' OR city='Mushin' OR city='Oshodi' OR city='Ketu' OR city='Bariga' OR city='Ikorodu' OR city='Badagry' OR city='Eleko' OR city='Ikate-Lekki'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-success text-capitalize"><a href="index.php?page=stateproperty&id=<?php echo $row['16']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/im.jpeg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
									<?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where city='Owerri' OR city='Aba Branch' OR city='Okigwe' OR city='Orlu' OR city='Mbaise' OR city='Ngor Okpala' OR city='Ihitte' OR city='Uboma' OR city='Obowo' OR city='Ikrduru' OR city='Nkwerre'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-success text-capitalize"><a href="index.php?page=stateproperty&id=<?php echo $row['16']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/ab.jpeg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where city='Central Area' OR city='Wuse' OR city='Garki' OR city='Maitama' OR city='Asokoro' OR city='Gwarinpa' OR city='Jabi' OR city='Utako' OR city='Apo' OR city='Wuye' OR city='Kubwa' OR city='Nyanya' OR city='Karu' OR city='Lugbe' OR city='Mpape' OR city='gwagalada'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-success text-capitalize"><a href="index.php?page=stateproperty&id=<?php echo $row['16']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/as.jpeg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where city='asaba' OR city='Summit Road' OR city='Nnebisi Road' OR city='GRA' OR city='Okpanam Road' OR city='Koka Junction' OR city='Abraka' OR city='Abraka Road' OR city ='Cable Point' OR city='Anwai'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-success text-capitalize"><a href="index.php?page=stateproperty&id=<?php echo $row['16']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	Popular Places -->
		
		<!--	Testonomial -->
		<div class="full-row">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
						<div class="content-sidebar p-4">
							<div class="mb-3 col-lg-12">
								<h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Testimonial</h4>
									<div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-success">
									
										<?php
													
												$query=mysqli_query($con,"select feedback.*, user.* from feedback,user where feedback.uid=user.uid and feedback.status='1'");
												while($row=mysqli_fetch_array($query))
													{
										?>
										<div class="item">
											<div class="p-4 bg-success down-angle-white position-relative">
												<p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i><?php echo $row['2']; ?>. <i class="fas fa-quote-right mr-2 text-white"></i></p>
											</div>
											<div class="p-2 mt-4">
												<span class="text-success d-table text-capitalize"><?php echo $row['uname']; ?></span> <span class="text-capitalize"><?php echo $row['utype']; ?></span>
											</div>
										</div>
										<?php }  ?>
										
									</div>
							</div>
						 </div>
					</div>
				</div>
			</div>
		</div>
		<!--	Testonomial -->
		
		<!-- Floating whatsapp -->
        <?php include("include/whatsapp.php");?>

       
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top -->
        
        <!-- floating whatsapp -->
    
    </div>
     <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
</div>
<!-- Wrapper End --> 
<div id="myDiv"></div>
<!--	Js Link
============================================================--> 
<script src="js/pageload.js"></script>
<script src="js/media.js"></script>
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
<script src="js/YouTubePopUp.jquery.js"></script> 
<script src="js/validate.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>



</body>

</html>