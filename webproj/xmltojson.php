<?php
$userarray=simplexml_load_file("user.xml");
$json=json_encode($userarray);
echo $json;




?>