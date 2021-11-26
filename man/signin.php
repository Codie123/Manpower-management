<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Client Login - Manpower Management</title>

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

		

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Client - Login</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<!-- <div class="panel panel-default"> -->
						<div class="panel-body">
							<h3 class="thin text-center" style="color:orange;">Login to your account</h3>
							<p class="text-center text-muted" style="color:white;">Dont have an account?. <a href="clientreg.php">Register</a>. </p>
							<hr>
							
							<form method="POST" action="clientauthentication.php">
								<div class="top-margin">
									<label style="color:orange;">Email </label>
									<input type="email" name="email" placeholder="Email" class="form-control" required>
								</div>
								<div class="top-margin">
									<label style="color:orange;">Password </label>
									<input type="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password should contain more than 8 characters and Must contain Uppercase, Lowercase and Number" name="password" placeholder="Password" class="form-control" required>
								</div>

								<hr>

									<div class="row">
										<center><button style="color:white;" class="btn btn-info" type="submit">Login</button></center>
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