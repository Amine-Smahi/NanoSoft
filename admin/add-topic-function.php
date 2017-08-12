<?php
include "../functions/db.php";
 					date_default_timezone_set("Asia/Taipei");
                        $datetime=date("Y-m-d h:i:sa");
extract($_POST);
$user_Id = 009;
$sql = "INSERT INTO tblpost(title, content, cat_id, datetime , user_Id) VALUES ('$title','$content','$category','$datetime','$user_Id')";
$res = mysql_query($sql);

header("Location:post.php");


?>