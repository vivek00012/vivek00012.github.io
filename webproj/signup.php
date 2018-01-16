<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="jquery/jquery.js"></script>
	<script src="angular.js"></script>
	<script src="login"></script>

<style type="text/css">
body{height:100vh;width:100%;display: flex;align-items: center;background: url(lifestyle.jpg);background-size:cover;background-repeat: no-repeat;background-position:center center;}
a{color:#000!important;text-decoration:none!important;padding: 5px 10px;height:100px;width:150px;display: block;transition: all ease-in 0.3s;}	
a:hover{font-size: 20px!important;}
input,select,textarea{
   border:1px solid #000!important;
   background: rgba(254,254,254,0.5)!important;
   border-radius: 0!important;
   font-size: 18px;
   color:#000;

} 
input:focus,select:focus,textarea:focus{
background: #FFCE33!important;
color:#000!important;
}

.signupbg{
background: rgba(254,254,254,0.6)!important;

}
button{border-radius:0!important;}
button:hover{color:#000!important;}

</style>

</head>
<body>
<div class="container content">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 signupbg" style="padding:20px 10px">
			<div class="form-horizontal">
			<div class="page-header text-center" style="border-color:#000!important"><h3>Signup</h3></div>

           <div class="form-group">
					<label class="col-sm-4">Email :</label>
                    <div class="col-sm-8"><input type="email" name="email" class="form-control" ng-model="user.name"></div>


				</div><!--close for form-group-->


				<div class="form-group">
					<label class="col-sm-4">Email :</label>
                    <div class="col-sm-8"><input type="email" name="email" class="form-control"  ng-model="user.email"></div>


				</div><!--close for form-group-->


                <div class="form-group">
					<label class="col-sm-4">Password :</label>
                    <div class="col-sm-8"><input type="password" name="email" class="form-control"  ng-model="user.password"></div>


				</div><!--close for form-group-->
				<div class="form-group">
				<div class="col-sm-4"></div>
				<div class="col-sm-8">
					<button class="btn btn-success">Submit</button>
					<hr>
					<a href="index.php">Already Register?Login</a>


				</div>



			</div>





			</div>
			




		</div><!--close for col3-->
		<div class="col-sm-3"></div>





	</div><!--close-->



</div>

</body>
</html>