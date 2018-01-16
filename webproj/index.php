<?php
session_start();
if(isset($_SESSION['MSG'])){

echo $_SESSION['MSG'];
     unset($_SESSION['MSG']);
}

?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.js"></script>
<script src="js/angular.js"></script>
<script src="login.js"></script>
<!-- //font-awesome icons -->
<style>
	i{color:#fff;}
</style>
</head>
<body ng-app="userlogin" >
<div class="log-w3">
<div class="w3layouts-main" ng-controller="userauth">

	<h2>Sign In Now</h2>

			<input type="email" class="ggg" name="email" placeholder="EMAIL" ng-model="login.email" >
			<i>{{emailerror}}</i>
			<input type="password" class="ggg" name="password" placeholder="PASSWORD"   ng-model="login.password">
			<i>{{passworderror}}</i><br>
			<h6><a href="#">Forgot Password?</a></h6>

				<div class="clearfix"></div>
				<button class="btn" ng-click="usercheck()">Login</button>
				<hr>
		<p>Don't Have an Account ?<a href="registration.html">Create an account</a></p>
		
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
