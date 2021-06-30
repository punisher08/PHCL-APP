<?php
include ("./../database/connect.php");
$id=$_GET['id'];
$name=$_POST["name"];
$code=$_POST["code"];

$query="INSERT INTO tbl_category(category_code,category_name) VALUES('{$code}','{$name}')";							
	$query = mysqli_query($conn,$query);
header("Location: ./../../page-category.php");
?>