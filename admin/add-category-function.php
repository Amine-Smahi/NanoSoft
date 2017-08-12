<?php
include "../functions/db.php";
 				
extract($_POST);
$sql = "INSERT INTO `category`(category) VALUES ('$category')";
$res = mysql_query($sql);

header("Location:category.php");


?>