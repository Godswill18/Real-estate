<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
            <div class="top-header bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="top-contact list-text-white  d-table">
                                <li><a href='tel:+2348079843784' target='blank'><i class="fas fa-phone-alt text-success mr-1"></i> +234 807-984-3784</a></li>
                                <!-- <li><a href='tel:+2348079843784' target='blank'><i class="fas fa-phone-alt text-success mr-1"></i> +234 806-361-4533</a></li> -->
                                
                                <li><a href="mailto:tnwobum@yahoo.com"><i class="fas fa-envelope text-success mr-1"></i>tnwobum@yahoo.com</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="top-contact float-right">
                                <ul class="list-text-white d-table">
								<!-- <li><i class="fas fa-user text-success mr-1"></i> -->
								<?php  if(isset($_SESSION['uemail']))
								{ ?>
								<a href="index.php?page=logout">
                                    <!-- Logout -->

                                </a>&nbsp;&nbsp;<?php } else { ?>
								<a href="index.php?page=login">
                                    <!-- Login -->
                                </a>&nbsp;&nbsp;
								
								| </li>
								<!-- <li><i class="fas fa-user-plus text-success mr-1"></i><a href="index.php?page=register"> Register</li><?php } ?> -->
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav secondary-nav hover-success-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php?page=home"><img class="nav-logo" src="images/logo/letonlogo4.png" alt="" style="width:110px;"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown"> <a class="nav-link" href="index.php?page=home" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>
										
										<li class="nav-item dropdown"> <a class="nav-link" href="index.php?page=about">About</a> </li>
										
                                        <li class="nav-item dropdown"> <a class="nav-link" href="index.php?page=contact">Contact us</a> </li>										
										
                                        <li class="nav-item dropdown"> <a class="nav-link" href="index.php?page=property">Properties</a> </li>
                                        
                                        <li class="nav-item"> <a class="nav-link" href="index.php?page=tour">Schedule a tour</a> </li>

										
										<?php  if(isset($_SESSION['uemail']))
										{ ?>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
											<ul class="dropdown-menu">
												<li class="nav-item"> <a class="nav-link" href="index.php?page=profile">Profile</a> </li>
												<!-- <li class="nav-item"> <a class="nav-link" href="request.php">Property Request</a> </li> -->
												<!-- <li class="nav-item"> <a class="nav-link" href="feature.php">Your Property</a> </li> -->
												<li class="nav-item"> <a class="nav-link" href="index.php?page=logout">Logout</a> </li>	
											</ul>
                                        </li>
										<?php } else { ?>
										
										<?php } ?>
										
                                    </ul>
                                    
									
									<!-- <a class="btn btn-success d-none d-xl-block" style="border-radius:30px;" href="">Media</a>  -->
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        