<!DOCTYPE HTML>

 <?php 

require ('connection.php'); 

 //If no session value is present, redirect the user to the login page:

if (!(isset($_SESSION['usr_level'])) && $_SESSION['usr_level'] != 1)
	{
		header('location:login.php');
	}//end if statement

$sessionID=$_SESSION['usr_id'];	
$sessionLevel=$_SESSION['usr_level'];	

?>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MyKidney</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!--
		Oxygen by gettemplates.co
		Twitter: http://twitter.com/gettemplateco
		URL: http://gettemplates.co
	-->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-xs-2">
					<!-- <div id="gtco-logo"><a href="index.php">MyKidney</a></div> -->
                    <div id="gtco-logo"><a href="index.php"><img src="images/Logo.png" style="width:170px;"></a></div>
				</div>
				<div class="col-xs-8 text-center menu-1">
					<br>
                    <ul>
						<li class="active"><a href="AdminHome.php" Style="font-size:25px;">Admin Home Interface</a></li>
				        <!-- <li><a href="">Search</a></li>
                        <li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li> -->
					</ul>
				</div>
				<div class="col-xs-2 text-right hidden-xs menu-2">
					
                    <ul>

                        <br><li class="btn-cta2"><a href="logout.php"><span> <div align="center">Logout</div>   </span></a></li>
					</ul>
					<ul>
                      <!--  <li class="btn-cta"><a href="#Signup"><span>Sign Up</span></a></li> -->
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_bg_1.jpg); height:170px;">

	</header>
	
	<div id="gtco-features">
		<div class="gtco-container">
			<br><div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<a href="AddAccount.php" > <span class="icon">
							<i class="icon-user"></i>
						</span>
                            <h3>Add Account</h3> </a>
						<!-- <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						<p><a href="#" class="btn btn-primary">Learn More</a></p> -->
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
				<a href="DeleteAccount.php" ><div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-trash"></i>
						</span>
                    <h3>Delete Account</h3> </a>
						<!-- <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> 
						<p><a href="#" class="btn btn-primary">Learn More</a></p> -->
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<a href="EditAccount.php"><div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-edit"></i>
						</span>
                        <h3>Edit User's Information</h3> </a>
						<!-- <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						<p><a href="#" class="btn btn-primary">Learn More</a></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>


	
	<!------ Footer -------->		
<?php
include ('footer.html');
?>
