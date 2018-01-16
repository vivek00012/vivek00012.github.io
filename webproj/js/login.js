var obj=angular.module("userlogin",[]);
obj.controller("userauth",function($scope,$http){
$scope.login={};

$scope.usercheck=function(){
var check1=true;
if(($scope.login.email==undefined)||($scope.login.email=="")){
	$scope.emailerror="Incorrect Email !try again";
	check1=false;
}else{
	$scope.emailerror="";

}
if(($scope.login.password==undefined)||($scope.login.password=="")){
	$scope.passworderror="Incorrect password !try again";
	check1=false;
}else{
	$scope.passworderror="";

}

if(check1==true){


	//php call
$http({
method: "POST",
url:"logincheck.php",	
headers: {'Content-Type': 'application/x-www-form-urlencoded'},
data:$.param($scope.login)})
.then(function(response) {
if(response.data=="success")
{
	$scope.message=response.data;

	window.location.href="home.php";
}else{
	$scope.message=response.data;

}
})
.then(function(error) { 



});	  


}
}
   //php call end

});