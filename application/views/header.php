<!DOCTYPE html>
<html>
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the description -->
	<meta name="description" content="STUDYLMS HTML Template">
	<!-- set the Keyword -->
	<meta name="keywords" content="">
	<meta name="author" content="STUDYLMS HTML Template">
	<!-- set the page title -->
	<title>5thDMLMS</title>
	<!-- include google roboto font cdn link -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="<?php echo  base_url(); ?>assets/css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?php echo  base_url(); ?>assets/css/plugins.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?php echo  base_url(); ?>assets/css/colors.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?php echo  base_url(); ?>assets/style.css">
	<!-- include the site responsive stylesheet -->
	<link rel="stylesheet" href="<?php echo  base_url(); ?>assets/css/responsive.css"> 
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- header of the page -->
		<header id="page-header" class="v3">
			<!-- top bar -->
			<div class="top-bar bg-light hidden-xs">
				<div class="container">
					<div class="row top-bar-holder align-center">
						<div class="col-xs-9 col">
							<!-- <p>You can add your headline here</p> -->
						</div>
						<div class="col-xs-3 col justify-end">
							<ul class="socail-networks list-unstyled">
								<li><a href="#"><span class="fab fa-facebook"></span></a></li>
								<li><a href="#"><span class="fab fa-twitter"></span></a></li>
								<li><a href="#"><span class="fab fa-instagram"></span></a></li>
								<li><a href="#"><span class="fab fa-linkedin"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- header holder -->
			<div class="header-holder container align-center">
				<div class="row">
					<div class="col-xs-12 col-sm-3">
						<!-- logo -->
						<div class="logo">
							<a href="<?php echo  base_url(); ?>welcome">
								<img src="<?php echo  base_url(); ?>assets/images/logo_3.png" alt="YOUR LOGO">

							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-9 hidden-xs">
						<!-- h address -->
						<address class="h-address">
							<div class="ad-col">
								<i class="fas fa-headphones icn text-nowrap"></i>
								<div class="descr-wrap">
									<span class="element-block text-gray text-capitalize font-roboto title">Call Us:</span>
									<span class="element-block"><a href="tel:+611234567890">(+00)123456790</a></span>
								</div>
							</div>
							<div class="ad-col">
								<i class="far fa-envelope icn text-nowrap"></i>
								<div class="descr-wrap">
									<span class="element-block text-gray text-capitalize font-roboto title">Email Us:</span>
									<span class="element-block"><a href="">&#069;&#120;&#097;&#109;&#112;&#108;&#101;&#064;&#100;&#111;&#109;&#097;&#105;&#110;&#046;&#099;&#111;&#109;</a></span>
								</div>
							</div>
							<div class="ad-col">
								<i class="fas fa-map-marker-alt icn text-nowrap"></i>
								<div class="descr-wrap">
									<span class="element-block text-gray text-capitalize font-roboto title">Location</span>
									<span class="element-block"><a href="#">Your Address </a></span>
								</div>
							</div>
						</address>
					</div>
				</div>
			</div>
			<!-- nav holder -->
			<div class="nav-holder bg-theme text-white">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-9 static-block">
							<!-- nav -->
							<nav id="nav" class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- navbar collapse -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<!-- main navigation -->
									<ul class="nav navbar-nav main-navigation text-uppercase font-lato">
										<li class="dropdown">
											<!-- <a href="home3.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">home</a> -->
											<a href="<?php echo  base_url(); ?>welcome">Home</a>
										</li>

										<li class="dropdown">
											<a href="<?php echo  base_url(); ?>about">About us</a>
											
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo  base_url(); ?>e_resource">E-Resources</a></li>
												<li><a href="<?php echo  base_url(); ?>course">Courses</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Online Classes</a>
											
										</li>

										
										<li class="dropdown">
											<a href="blog.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
											 <!--<ul class="dropdown-menu">
												<li><a href="blog.html">Blog List</a></li>
												<li><a href="blog-single.html">Blog Single</a></li>
											</ul>-->
										</li>
										
										<li><a href="<?php echo  base_url(); ?>contact">coNTACT</a></li>
									</ul>
								</div>
								<!-- navbar form -->
								<form action="#" class="navbar-form navbar-search-form">
									<a class="fas fa-search search-opener" role="button" data-toggle="collapse" href="#searchCollapse" aria-expanded="false" aria-controls="searchCollapse"><span class="sr-only">search opener</span></a>
									<!-- search collapse -->
									<div class="collapse search-collapse" id="searchCollapse">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search &hellip;">
											<button type="button" class="fas fa-search btn"><span class="sr-only">search</span></button>
										</div>
									</div>
								</form>
							</nav>
						</div>
						<div class="col-xs-6 col-sm-3">
							<!-- user links -->
							<ul class="list-unstyled user-links pull-right fw-bold font-lato">
								<li><a href="#popup1" class="lightbox">Login</a> <span class="sep">|</span> <a href="#popup2" class="lightbox">Register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>