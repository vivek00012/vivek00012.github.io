<?php
session_start();
include "dbconfig.php";
$sql= "select * from angulartest1 where status='sortlisted' order by id desc";
$res=mysqli_query($conn,$sql);


?>

<div class="row" >
  <div class="col-sm-12">
  <div class="panel panel-default"> 
<div class="panel-heading">Sortlisted list</div>
<div class="panel-body">
<div class="row">
<?php 
    while ($row= mysqli_fetch_object($res)){

        echo "<div class='col-sm-4'>
               <div class='panel panel-info'>
               <div class='panel panel-heading'>$row->name<button class='btn' style='background:transparent!important;float:right;margin-top:-6px;color:red'  ng-click='removefromlist($row->id)'><i class='fa fa-trash fa-lg' aria-hidden='true' ></i>
</button></div>
               <div class='panel-body'>$row->message</div>
               <div class='panel-footer text-center'>  &nbsp;<button class='btn btn-sm' style='color:green;border:none;background:transparent!important' ng-click='viewdetails($row->id)'><i class='fa fa-eye fa-2x' aria-hidden='true'></i>
</button><br>
<button class='btn btn-sm btn-success btn-block'border:none;background:transparent!important' ng-click='selectthis($row->id)'><i class='fa fa-plus fa-2x' aria-hidden='true'></i>
</button>
</div>
               </div>
               </div>

        ";
        

    }






?>
</div>
</div><!--close-->
<div class="panel-footer">View all contacts</div>


</div><!--panelend-->
<div ng-bind-html="viewmore"></div>

  </div><!--col8-->




</div>