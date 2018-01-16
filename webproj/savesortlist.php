<?php 
include "dbconfig.php";
$id=$_REQUEST['id'];
$sql="UPDATE angulartest1 set status='sortlisted' where id='$id'";
$result=mysqli_query($conn,$sql);
echo "sortlisted successfully";





?>
