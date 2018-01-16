var app = angular.module("myapp", ["ngRoute","ngSanitize"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "dashboard.php",
        
    })
    .when("/profile", {
        templateUrl : "profile.php",


    })
    .when("/contact", {
        templateUrl : "contact.php",
        controller:"responselist"

       
    })
.when("/onboarded", {
        templateUrl : "onboardedlist.php",
        controller:"responselist"

       
    })
    .when("/profile/id",{
    	 templateUrl : "userprofile.php",



    })

    .when("/selectedresponse",{
    	 templateUrl : "selected.php",
    	 controller:"responselist"



    })
    .when("/deletedresponse",{
    	 templateUrl : "deleted.php",
    	 controller:"responselist"



    })
    .when("/sortresponse", {
        templateUrl : "sortlisted.php",
        controller:"responselist"


       
    })
});

app.controller("xml",function($scope,$http){
$http.get("xmltojson.php").then(function(response){
$scope.xmluser=response.data.user;
});
});




app.controller("responselist",function($scope,$http){
//loading client list
$http.get("jsonclientlist.php").then(function(response){
$scope.clientlist=response.data;


});





//loading client  list end



$scope.sortlist=function(response){

$http({
method: "GET",
url:"savesortlist.php?id="+response,	
headers: {'Content-Type': 'application/x-www-form-urlencoded'}})
.then(function(response) {
	alert("sortisted successfully");
	location.reload();
})
.then(function(error) { 
});	  

}

$scope.removefromlist=function(response){

$http({
method: "GET",
url:"removefromlist.php?id="+response,	
headers: {'Content-Type': 'application/x-www-form-urlencoded'}})
.then(function(response) {
	alert("removed successfully");
    location.reload();

})
.then(function(error) { 
});	  


}
$scope.viewdetails=function(response){

$http({
method: "GET",
url:"getdetails.php?id="+response,	
headers: {'Content-Type': 'application/x-www-form-urlencoded'}})
.then(function(response) {
	//alert(response.data);
$scope.viewmore=response.data;
})
.then(function(error) { 
});	  


}
$scope.selectthis=function(response){

$http({
method: "GET",
url:"updatestatus.php?id="+response,	
headers: {'Content-Type': 'application/x-www-form-urlencoded'}})
.then(function(response) {
	alert(response.data);
	location.reload();
})
.then(function(error) { 
});	  


}

$scope.onboarded=function(response){

$http({
method: "GET",
url:"updateonboard.php?id="+response,	
headers: {'Content-Type': 'application/x-www-form-urlencoded'}})
.then(function(response) {
	alert(response.data);
    location.reload();

})
.then(function(error) { 
});	  


}
});


//ng-sanitize will not proxess i/p
