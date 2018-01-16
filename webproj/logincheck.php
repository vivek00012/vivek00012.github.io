<?php
include "dbconfig.php";
session_start();
$email=$_POST['email'];
$pass=$_POST['password'];

$sql="SELECT * FROM admin where email='$email' and password='$pass'";
$res=mysqli_query($conn,$sql);




if(mysqli_num_rows($res)>0){
   
	echo "success";
	$row=mysqli_fetch_object($res);
	$_SESSION['id']=$row->id;
	$_SESSION['name']=$row->name;
    $_SESSION['email']=$row->email;
    $_SESSION['pass']=$row->password;
    }else{

    echo "failed";
    }


?>