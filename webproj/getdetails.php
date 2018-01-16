<?php 
include "dbconfig.php";
$id=$_REQUEST['id'];
$sql="select * from angulartest1 WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_object($result);
?>


<div class="row">
<div class="col-sm-12">
	<table class="table table-bordered table-hover">
		<caption class="text-center">Details of <?php echo $row->name ;  ?></caption>
  <tr class="success">
  	<th>Full Name</th>
  	<td><?php echo $row->name ;  ?></td>
  	<th>Mobile</th>
  	<td><?php echo $row->mobile ;  ?></td>
  </tr>

<tr class="info">
  <th>Age</th>
  	<td><?php echo $row->age;   ?></td>
  </tr>
<tr class="danger">
  	<th>Message</th>
  	<td><?php echo $row->message ;  ?></td>
</tr>

	</table>



</div>	



</div>
