<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Client Registration - Manpower Management</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<style type="text/css">
	body
	{background-color: #2b4162;
background-image: linear-gradient(315deg, #2b4162 0%, #12100e 74%);
}
</style>
<body>
	<!-- Fixed navbar header-->
	<?php
	include("header.php");
	  ?>
	<!-- /.navbar end header-->
<br>
<br>
<br>
<br>
	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active"> Client Registration</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<center><h1 class="page-title"><p style="color:orange;" >New Client? </p>Register Now To Avail Our Services</h1></center>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<!-- <div class="panel panel-default"> -->
						<!-- <div class="panel-body"> -->
							<h3 class="thin text-center" style="color:orange;">Register a new account</h3>
							<p class="text-center text-muted" style="color:white;">Already have an account <a href="signin.php">Login</a>. </p>
							<hr>

							<form method="POST" action="saveclient.php">
								<div class="top-margin">
									<label style="color:orange;">Full Name <span class="text-danger">*</span></label>
									<input type="text" pattern="[A-Z a-z]+" title="Only Alphabets" name="cname" placeholder="Full Name" autofocus="" class="form-control" required>
								</div>
								<div class="top-margin">
									<label style="color:orange;">Company Name <span class="text-danger">*</span></label>
									<input type="text" name="ccompany" placeholder="Company Name" class="form-control" required>
								</div>
								<div class="top-margin">
									<label style="color:orange;">Contact <span class="text-danger">*</span></label>
									<input type="text" name="contact" maxlength="10" pattern="([0]|\+91)?[789]\d{9}$" title="Enter Valid Mobile Number starting from 7 or 8 or 9" placeholder="Contact Number" class="form-control" required>
								</div>
								<div class="top-margin">
									<label style="color:orange;">Email Address <span class="text-danger">*</span></label>
									<input type="email" name="email" placeholder="Email" class="form-control" required>
								</div>
								<div class="top-margin">
									<label style="color:orange;">Full Address <span class="text-danger">*</span></label>
									<textarea rows="3" type="text"  name="address" placeholder="Address" class="form-control" required> </textarea> 	
								</div>
								<div class="row top-margin">
									<div class="col-sm-6">
										<label style="color:orange;">Password <span class="text-danger">*</span></label>
										<input type="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password should contain more than 8 characters and Must contain Uppercase, Lowercase and Number"  name="password" placeholder="Password 1" class="form-control" required>
									</div>
									<div class="col-sm-6">
										<label style="color:orange;">Confirm Password <span class="text-danger">*</span></label>
										<input type="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password should contain more than 8 characters and Must contain Uppercase, Lowercase and Number"  name="password" placeholder="Password 2" class="form-control" required>
									</div>
								</div>

								<hr>

								<div class="row">                   
									</div>
									<div >
										<center><button class="btn btn-info	" type="submit">Register</button></center>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	


	<!--footer -->

	<?php 
	include ("footer.php");
	?>
	<!--footer end  -->
		
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>