<?php
include ("./../database/connect.php");
$name=$_POST["name"];
$code=$_POST["code"];
$detail=$_POST["Detail"];
$query="INSERT INTO tbl_law(category_id,law_name,law_detail) VALUES('{$code}','{$name}','{$detail}')";							
	$query = mysqli_query($conn,$query);
	header("Location: ./../../page-law.php");

?>