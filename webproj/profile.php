<?php
session_start();

include "dbconfig.php";
$id=$_GET['id'];	
die();
$sql= "select * from angulartest1 where id='$id'";



$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_object($res);


?>

<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
	<div class="panel panel-primary">	
<div class="panel-heading">Profile of <?php echo ucwords($row->name) ; ?></div>
<div class="panel-body">
<div class="form-horizontal">
	<div class="form-group">
		<label class="col-sm-4">id:</label>
		<div class="col-sm-8">
	    <label><?php echo strtoupper($row->id) ;  ?></label>		

		</div>
</div><!--close form-group-->
	<div class="form-group">
		<label class="col-sm-4">Name:</label>
		<div class="col-sm-8">
	    <label><?php echo strtoupper($row->name) ;  ?></label>		

		</div>
</div><!--close form-group-->
<div class="form-group">
		<label class="col-sm-4">Email :</label>
		<div class="col-sm-8">
	<label><?php echo $_SESSION['email'] ;  ?></label>		

		</div>
</div><!--close form-group-->
<div class="form-group">
		<label class="col-sm-4">Mobile</label>
		<div class="col-sm-8">
	<label><?php echo $row->mobile ; ?></label>		

		</div>
</div><!--close form-group-->


<div class="form-group">
		<label class="col-sm-4">Age :</label>
		<div class="col-sm-8">
	<label><?php echo $row->age;   ?></label>		

		</div>
</div><!--close form-group-->

<div class="form-group">
		<label class="col-sm-4">Message :</label>
		<div class="col-sm-8">
	    <label><?php echo $row->message;   ?></label>		

		</div>
        </div><!--close form-group-->


	   </div><!--form-->


</div><!--close-->
<div class="panel-footer text-center"><h5>You are viewing details of user..!!</h5></div>


</div>

<div class="col-sm-2"></div>




</div>