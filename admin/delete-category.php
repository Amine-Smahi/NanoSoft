<?php
include "../functions/db.php";
  if(isset($_GET['cat_id'])){
		$id = $_GET['cat_id'];
	}
	if(empty($id)){
		header("location:index.php");
	}

	$run = mysql_query("DELETE FROM category WHERE cat_id = '$id'")
	or die(mysql_error());  	

	header("Location:category.php");
	
?>