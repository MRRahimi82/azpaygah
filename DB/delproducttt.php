<?php
include "DB.php";
$dbc = new DB("localhost","root","","tamrin");
$sql = " UPDATE product SET status = 'delete' WHERE code_product = ? ";
$result = $dbc -> query($sql,$_GET['code_product']);
echo "hazf shod";
$dbc -> close();
include "delproduct.php";
?>