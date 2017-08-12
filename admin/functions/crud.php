<?php
include "functions.php";

$action = $_POST['action'];

switch($action){
	case "deleteuser":
	$user_Id= $_POST['user_Id'];
	deleteuser($user_Id);
	break;
}




?>