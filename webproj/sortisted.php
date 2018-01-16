<?php
session_start();
include "dbconfig.php";
$sql= "select * from angulartest1 where id in(select userid from sortlisted) order by id   desc limit 6";
$res=mysqli_query($conn,$sql);


?>

<div class="row" ng-controller="responselist">
  <div class="col-sm-12">
  <div class="panel panel-default"> 
<div class="panel-heading">All Contact list</div>
<div class="panel-body">
<div class="row">
<?php 
    while ($row= mysqli_fetch_object($res)){

        echo "<div class='col-sm-4'>
               <div class='panel panel-info'>
               <div class='panel panel-heading'>$row->name</div>
               <div class='panel-body'>$row->message</div>
               <div class='panel-footer'>$row->mobile  &nbsp;<a href='#!profile?id=$row->id' style='color:green'>View</a>&nbsp;<button class='btn btn-sm' ng-click='sortlist($row->id)' style='color:red'>Shortlist</button></div>
               </div>
               </div>

        ";
        

    }






?>
</div>
</div><!--close-->
<div class="panel-footer">View all contacts</div>


</div>


  </div><!--col8-->




</div>