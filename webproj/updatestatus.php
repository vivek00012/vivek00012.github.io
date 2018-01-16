<?php 
include "dbconfig.php";
$id=$_REQUEST['id'];
$sql="UPDATE angulartest1 set status='selected' where id='$id'";
$result=mysqli_query($conn,$sql);
echo "Selected successfully";





?>
