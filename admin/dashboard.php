<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <!-- <title>Ventura - Dashboard</title> -->
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<title>Leton Realty Homes Admin</title>
    </head>
    <body>
	
		<!-- Main Wrapper -->

		
			<!-- Header -->
				<?php include("header.php"); ?>
			<!-- /Header -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper" >
			
                <div class="content container-fluid" >
					
					<!-- Page Header -->
					<div class="page-header" style='margin-top: 50px;'>
						<div class="row">
							<div class="col-sm-12">
								
								<h3 class="page-title">Welcome Admin!</h3>
								<p></p>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
						<a href="userlist.php">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-primary">
											<i class="fe fe-users"></i>
										</span>
										
									</div>

									
										
										<div class="dash-widget-info">
											
											<h3><?php $sql = "SELECT * FROM user WHERE utype = 'user'";
											$query = $con->query($sql);
											echo "$query->num_rows";?></h3>
											
											<h6 class="text-muted">Registered Users</h6>
											<div class="progress progress-sm">
												<div class="progress-bar bg-primary w-50"></div>
											</div>
										</div>
									
								</div>
							</div>
						</a>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<a href="adminlist.php">

								<div class="card">
									<div class="card-body">
										<div class="dash-widget-header">
											<span class="dash-widget-icon bg-success">
												<i class="fe fe-user"></i>
											</span>
											
										</div>
										<div class="dash-widget-info">
											
										<h3><?php $sql = "SELECT COUNT(*) as auser FROM admin";
											$query = $con->query($sql);
											echo "$query->num_rows";?></h3>
											
											<h6 class="text-muted">Admin</h6>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success w-50"></div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<a href="propertyaddland.php">

								<div class="card">
									<div class="card-body">
										<div class="dash-widget-header">
											<span class="dash-widget-icon bg-dark">
											<i class="fe fe-map"></i> 
											</span>
											
										</div>
										<div class="dash-widget-info">
									
											<h6 class="text-muted">Add Land Property</h6>
											
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<a href="propertyaddhouse.php">

								<div class="card">
									<div class="card-body">
										<div class="dash-widget-header">
											<span class="dash-widget-icon bg-danger">
											<i class="fe fe-home"></i>
											</span>
											
										</div>
										<div class="dash-widget-info">
									
											<h6 class="text-muted">Add House Property</h6>
											
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<a href="propertyview.php">

								<div class="card">
									<div class="card-body">
										<div class="dash-widget-header">
											<span class="dash-widget-icon bg-warning">
											P
											</span>
											
										</div>
										<div class="dash-widget-info">
											
										<h3><?php $sql = "SELECT * FROM property";
											$query = $con->query($sql);
											echo "$query->num_rows";?></h3>
											
											<h6 class="text-muted">Properties</h6>
											<div class="progress progress-sm">
												<div class="progress-bar bg-info w-50"></div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<a href="stateadd.php">

								<div class="card">
									<div class="card-body">
										<div class="dash-widget-header">
											<span class="dash-widget-icon bg-info">
											AS
											</span>
											
										</div>
										<div class="dash-widget-info">
											
											<h6 class="text-muted">Add State</h6>
											
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<a href="cityadd.php">

								<div class="card">
									<div class="card-body">
										<div class="dash-widget-header">
											<span class="dash-widget-icon bg-primary">
										AC
											</span>
											
										</div>
										<div class="dash-widget-info">
											
											<h6 class="text-muted">Add City</h6>
											
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<a href="contactview.php">

								<div class="card">
									<div class="card-body">
										<div class="dash-widget-header">
											<span class="dash-widget-icon bg-dark">
											<i class="fe fe-comment"></i>
											</span>
											
										</div>
										<div class="dash-widget-info">
											
											<h6 class="text-muted">User Contact and comment</h6>
											
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<a href="feedbackview.php">

								<div class="card">
									<div class="card-body">
										<div class="dash-widget-header">
											<span class="dash-widget-icon bg-success">
												FB
											</span>
											
										</div>
										<div class="dash-widget-info">
											
											<h6 class="text-muted">Feedbacks</h6>
											
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<a href="aboutadd.php">

								<div class="card">
									<div class="card-body">
										<div class="dash-widget-header">
											<span class="dash-widget-icon bg-info">
												ABC
											</span>
											
										</div>
										<div class="dash-widget-info">
											
											<h6 class="text-muted">Add About Content</h6>
											
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<a href="aboutview.php">

								<div class="card">
									<div class="card-body">
										<div class="dash-widget-header">
											<span class="dash-widget-icon bg-info">
												VA
											</span>
											
										</div>
										<div class="dash-widget-info">
											
											<h6 class="text-muted">View About</h6>
											
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
						<br><br>

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-warning">
											<i class="fe fe-table"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?php $sql = "SELECT * FROM property where type = 'apartment'";
										$query = $con->query($sql);
                						echo "$query->num_rows";?></h3>
										
										<h6 class="text-muted">No. of Apartments</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-info">
											<i class="fe fe-home"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?php $sql = "SELECT * FROM property where type = 'house'";
										$query = $con->query($sql);
                						echo "$query->num_rows";?></h3>
										
										<h6 class="text-muted">No. of Houses</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-secondary">
											<i class="fe fe-building"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?php $sql = "SELECT * FROM property where type = 'building'";
										$query = $con->query($sql);
                						echo "$query->num_rows";?></h3>
										
										<h6 class="text-muted">No. of Buildings</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-primary">
											<i class="fe fe-tablet"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?php $sql = "SELECT * FROM property where type = 'flat'";
										$query = $con->query($sql);
                						echo "$query->num_rows";?></h3>
										
										<h6 class="text-muted">No. of Flat</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-success">
											<i class="fe fe-quote-left"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?php $sql = "SELECT * FROM property where stype = 'sale'";
										$query = $con->query($sql);
                						echo "$query->num_rows";?></h3>
										
										<h6 class="text-muted">On Sale</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-info">
											<i class="fe fe-quote-right"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?php $sql = "SELECT * FROM property where stype = 'rent'";
										$query = $con->query($sql);
                						echo "$query->num_rows";?></h3>
										
										<h6 class="text-muted">Rentals</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- <div class="row">
						<div class="col-md-12 col-lg-6">
						
							
							<div class="card card-chart">
								<div class="card-header">
									<h4 class="card-title">Sales Overview</h4>
								</div>
								<div class="card-body">
									<div id="morrisArea"></div>
								</div>
							</div>
							
							
						</div>
						<div class="col-md-12 col-lg-6">
						
							
							<div class="card card-chart">
								<div class="card-header">
									<h4 class="card-title">Order Status</h4>
								</div>
								<div class="card-body">
									<div id="morrisLine"></div>
								</div>
							</div>
							
							
						</div>	
					</div> -->
				</div>			
			</div>
			<!-- /Page Wrapper -->
		

		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<script src="assets/plugins/raphael/raphael.min.js"></script>    
		<script src="assets/plugins/morris/morris.min.js"></script>  
		<script src="assets/js/chart.morris.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>
