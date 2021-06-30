<?php
include ("./../database/connect.php");
$id=$_GET['id'];
$name=$_POST["name"];
$code=$_POST["code"];
$query="UPDATE tbl_category SET category_code ='$code' , category_name ='$name' where category_id='$id'";			
$query = mysqli_query($conn,$query);
header("Location: ./../../page-category.php");
?>