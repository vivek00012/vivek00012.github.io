<?php
session_start();
if(empty($_SESSION['id'])){

$_SESSION['MSG']="<p class='alert alert-danger text-center'>Please Login !!</p>";
     header("location:index.php");
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


<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
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

<link rel="stylesheet" type="text/css" href="jquery-ui.css">
<!-- //font-awesome icons -->
<script src="js/jquery.js"></script>
<script src="jquery-ui.js"></script>
<script src="js/angular.js"></script>
<script src="js/angular-route.js"></script>
<script src="js/angular-sanitize.js"></script>
<script src="myapplication.js"></script>

</head>
<body ng-app="myapp">
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        VISITORS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success"><?php

include "dbconfig.php";
$sql= "select * from angulartest1 where status='sortlisted' order by id desc";
$res=mysqli_query($conn,$sql);
$num_rows1=mysqli_num_rows($res);
echo $num_rows1;
                   ?></span>
            </a>
            <ul class="dropdown-menu extended extended1 tasks-bar">
                <li>
                    <p class="taskheader1">You have<span id="taskno1"> <?php echo $num_rows1;   ?></span> pending tasks</p>
                </li>
                <p id="sortlistedcontent"></p>
                   

                <li class="external text-center" >
                    <a href="sortresponse" class="pending1">View All sortlisted Response</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">
                    
<?php
include "dbconfig.php";
$sql= "select * from angulartest1 where status not in ('deleted','selected','sortlisted','onboarded') order by id desc";
$res=mysqli_query($conn,$sql);
$num_rows2=mysqli_num_rows($res);
echo $num_rows2;
?>



                </span>
            </a>
            <ul class="dropdown-menu extended extended2 inbox" >
                <li>
                    <p class="red taskheader2">You have <span id="taskno2"> <?php echo $num_rows2;   ?> </span> Mails</p>
                </li>
                <p id="mailcontent"></p>
                
                <li class="text-center">
                    <a href="#!contact" class="pending2">View all mails</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">
                   <?php

include "dbconfig.php";
$sql= "select * from angulartest1 where status in ('deleted','onboarded') order by id desc";
$res=mysqli_query($conn,$sql);
$num_rows3=mysqli_num_rows($res);
echo $num_rows3;



                   ?>

                </span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#">cxc</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#">zxz </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> </a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/self.jpg" class="img-circle" width="10px" height="10px">
                <span class="username"><?php echo ucwords($_SESSION['name']);   ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="#/!">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-book"></i>
                        <span>Manage Response</span>
                    </a>
                    <ul class="sub">
						<li><a href="#!contact">New Response</a></li>
            <li><a href="#!sortresponse">All sortlisted</a></li>
            <li class="#!divider"></li>
          <li><a href="#!selectedresponse">All Selected</a></li>
          <li><a href="#!deletedresponse">Deleted</a></li>
          <li><a href="#!onboarded">Onboarded</a></li>
                    </ul>
                </li>
                
               
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<section id="main-content">
    <section class="wrapper">

