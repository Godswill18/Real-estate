<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}

//// code insert
//// add code
$error="";
$msg="";
if(isset($_POST['add']))
{
	$pid=$_REQUEST['id'];
	
	$title=$_POST['title'];
	$content=$_POST['content'];
	$ptype=$_POST['ptype'];
	// $bhk=$_POST['bhk'];
	// $bed=$_POST['bed'];
	// $balc=$_POST['balc'];
	// $hall=$_POST['hall'];
	$stype=$_POST['stype'];
	// $landmark=$_POST['landmark'];
	// $sqmeters=$_POST['sqmeters'];
	// $nghood=$_POST['nghood'];
	// $bath=$_POST['bath'];
	// $kitc=$_POST['kitc'];
	// $floor=$_POST['floor'];
	$price=$_POST['price'];
	$city=$_POST['city'];
	// $asize=$_POST['asize'];
	$loc=$_POST['loc'];
	$state=$_POST['state'];
	$status=$_POST['status'];
	$uid=$_POST['uid'];
	// $feature=$_POST['feature'];
	
	// $totalfloor=$_POST['totalfl'];

	$isFeatured=$_POST['isFeatured'];
	$video=$_POST['video'];
	
	$aimage=$_FILES['aimage']['name'];
	$aimage1=$_FILES['aimage1']['name'];
	$aimage2=$_FILES['aimage2']['name'];
	$aimage3=$_FILES['aimage3']['name'];
	$aimage4=$_FILES['aimage4']['name'];
	
	$fimage=$_FILES['fimage']['name'];
	$fimage1=$_FILES['fimage1']['name'];
	$fimage2=$_FILES['fimage2']['name'];
	
	$temp_name  =$_FILES['aimage']['tmp_name'];
	$temp_name1 =$_FILES['aimage1']['tmp_name'];
	$temp_name2 =$_FILES['aimage2']['tmp_name'];
	$temp_name3 =$_FILES['aimage3']['tmp_name'];
	$temp_name4 =$_FILES['aimage4']['tmp_name'];
	
	$temp_name5 =$_FILES['fimage']['tmp_name'];
	$temp_name6 =$_FILES['fimage1']['tmp_name'];
	$temp_name7 =$_FILES['fimage2']['tmp_name'];
	
	move_uploaded_file($temp_name,"property/$aimage");
	move_uploaded_file($temp_name1,"property/$aimage1");
	move_uploaded_file($temp_name2,"property/$aimage2");
	move_uploaded_file($temp_name3,"property/$aimage3");
	move_uploaded_file($temp_name4,"property/$aimage4");
	
	move_uploaded_file($temp_name5,"property/$fimage");
	move_uploaded_file($temp_name6,"property/$fimage1");
	move_uploaded_file($temp_name7,"property/$fimage2");

	$aimage = mysqli_real_escape_string($con, $aimage);
	$title = mysqli_real_escape_string($con, $title);
	$content = mysqli_real_escape_string($con, $content);
	$ptype = mysqli_real_escape_string($con, $ptype);
	// $bhk = mysqli_real_escape_string($con, $bhk);
	$stype = mysqli_real_escape_string($con, $stype);
	// $landmark = mysqli_real_escape_string($con, $landmark);
	// $sqmeters = mysqli_real_escape_string($con, $sqmeters);
	// $nghood = mysqli_real_escape_string($con, $nghood);
	// $bed = mysqli_real_escape_string($con, $bed);
	// $bath = mysqli_real_escape_string($con, $bath);
	// $balc = mysqli_real_escape_string($con, $balc);
	// $kitc = mysqli_real_escape_string($con, $kitc);
	// $hall = mysqli_real_escape_string($con, $hall);
	// $floor = mysqli_real_escape_string($con, $floor);
	// $asize = mysqli_real_escape_string($con, $asize);
	$price = mysqli_real_escape_string($con, $price);
	$loc = mysqli_real_escape_string($con, $loc);
	$city = mysqli_real_escape_string($con, $city);
	$state = mysqli_real_escape_string($con, $state);
	// $feature = mysqli_real_escape_string($con, $feature);
	$aimage1 = mysqli_real_escape_string($con, $aimage1);
	$aimage2 = mysqli_real_escape_string($con, $aimage2);
	$aimage3 = mysqli_real_escape_string($con, $aimage3);
	$aimage4 = mysqli_real_escape_string($con, $aimage4);
	$status = mysqli_real_escape_string($con, $status);
	$fimage = mysqli_real_escape_string($con, $fimage);
	$fimage1 = mysqli_real_escape_string($con, $fimage1);
	$fimage2 = mysqli_real_escape_string($con, $fimage2);
	// $totalfloor = mysqli_real_escape_string($con, $totalfloor);
	$isFeatured = mysqli_real_escape_string($con, $isFeatured);
	$video = mysqli_real_escape_string($con, $video);
	
	
	$sql = "UPDATE property SET title = '{$title}', pcontent = '{$content}', type = '{$ptype}', stype = '{$stype}',
	price = '{$price}', location = '{$loc}', city = '{$city}', state = '{$state}',
	pimage = '{$aimage}', pimage1 = '{$aimage1}', pimage2 = '{$aimage2}', pimage3 = '{$aimage3}', pimage4 = '{$aimage4}',
	uid = '{$uid}', status = '{$status}', isFeatured = '{$isFeatured}', video = '{$video}' WHERE pid = {$pid}";



if (empty($stype) || empty($city) || empty($status) || empty($isFeatured) || empty($video)) {

	// Set empty values to 0
	
		// $bed = $bed ?: 0;
		$stype = $stype ?: 0;
		$city = $city ?: 0;
		// $landmark = $landmark ?: 0;
		// $sqmeters = $sqmeters ?: 0;
		// $nghood = $nghood ?: 0;
		// $bath = $bath ?: 0;
		// $kitc = $kitc ?: 0;
		// $asize = $asize ?: 0;
		$status = $status ?: 0;
		$isFeatured = $isFeatured ?: 0;
		$video = $video ?: 0;


	$error = "<p class='alert alert-danger'>All fields are required</p>";
	
}

// Execute the SQL update query
$result = mysqli_query($con, $sql);

if ($result == true) {
	$msg = "<p class='alert alert-success'>Property Updated</p>";
	header("Location: propertyview.php?msg=$msg");
} else {
	$msg = "<p class='alert alert-warning'>Property Not Updated</p>";
	header("Location: propertyview.php?msg=$msg");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <!-- <title>LM HOMES | Property</title> -->
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<title>Leton Realty Homes Admin</title>
    </head>
    <body>

		
			<!-- Header -->
			<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid" style='margin-top: 50px;'>
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Property</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Property</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Update Property Details</h4>
									<?php echo $error; ?>
									<?php echo $msg; ?>
								</div>
								<form method="post" enctype="multipart/form-data">
								
								<?php
									
									$pid=$_REQUEST['id'];
									$query=mysqli_query($con,"select * from property where pid='$pid'");
									while($row=mysqli_fetch_row($query))
									{
								?>
												
								<div class="card-body">
									<h5 class="card-title">Property Detail</h5>
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required value="<?php echo $row['1']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Content</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="content" rows="10" cols="30"><?php echo $row['2']; ?></textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="ptype">
													
															<option value="">Select Type</option>
															<option value="land">Land</option>
															<!-- <option value="short let">Short Let</option> -->
															<option value="apartment">Apartment</option>
															<!-- <option value="flat">Flat</option>
															<option value="building">Building</option> -->
															<option value="house">House</option>
															<!-- <option value="villa">Villa</option>
															<option value="office">Office</option> -->
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Selling Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="stype">
															<option value="">Select Status</option>
															<!-- <option value="rent">Rent</option> -->
															<option value="sale">Sale</option>
														</select>
													</div>
												</div>
											
												
											</div>   
											<div class="col-xl-6">
											
												
												
											</div>
										</div>
										<h4 class="card-title">Price & Location</h4>
										<div class="row">
											<div class="col-xl-6">
												<!-- <div class="form-group row">
													<label class="col-lg-3 col-form-label">Floor</label>
													<div class="col-lg-9">
														<select class="form-control"  name="floor">
															<option value="">Select Floor</option>
															<option value="land">Land</option>
															<option value="1st Floor">1st Floor</option>
															<option value="2nd Floor">2nd Floor</option>
															<option value="3rd Floor">3rd Floor</option>
															<option value="4th Floor">4th Floor</option>
															<option value="5th Floor">5th Floor</option>
														</select>
													</div>
												</div> -->
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Price</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="price" required value="<?php echo $row['12']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="city" required value="<?php echo $row['14']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">State</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="state" required value="<?php echo $row['15']; ?>">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
											
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Location</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="loc" required value="<?php echo $row['13']; ?>">
													</div>
												</div>
												
											</div>
										</div>
										
												
										<h4 class="card-title">Image & Status</h4>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage" type="file" required>
														<img src="property/<?php echo $row['16'];?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 1</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage1" type="file" >
														<img src="property/<?php echo $row['17'];?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage2" type="file" required>
														<img src="property/<?php echo $row['18'];?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage3" type="file" required>
														<img src="property/<?php echo $row['19'];?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage4" type="file" required>
														<img src="property/<?php echo $row['20'];?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Video</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="video" rows="5" cols="5"><?php echo $row['25']; ?></textarea>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"  required name="status">
															<option value="">Select Status</option>
															<option value="available">Available</option>
															<option value="sold out">Sold Out</option>
														</select>
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Uid</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="uid" required value="<?php echo $row['21']; ?>" disabled>
													</div>
												</div>
											
											</div>
										</div>

										<hr>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><b>Is Featured?</b></label>
													<div class="col-lg-9">
														<select class="form-control"  required name="isFeatured">
															<option value="">Select...</option>
															<option value="0">No</option>
															<option value="1">Yes</option>
														</select>
													</div>
												</div>
											</div>
										</div>

										
											<input type="submit" value="Submit" class="btn btn-primary"name="add" style="margin-left:200px;">
										
									</div>
								</form>
								
								<?php
									} 
								?>
												
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		<script src="assets/plugins/tinymce/tinymce.min.js"></script>
		<script src="assets/plugins/tinymce/init-tinymce.min.js"></script>
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>