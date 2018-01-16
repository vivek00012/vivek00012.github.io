<?php 
include "dbconfig.php";
$sql="select * from client order by clientname";
$res=mysqli_query($conn,$sql);
$myarray=array();
while($row=mysqli_fetch_object($res)){

	array_push($myarray,$row);
}
$json=json_encode($myarray);
echo $json;//sending as a response


 ?>