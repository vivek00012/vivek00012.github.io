<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
$_SESSION['MSG']="<p class='alert alert-success text-center'>Logout Successfully</p>";
header("location:index.php");    


?>