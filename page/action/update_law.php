<?php
include ("./../database/connect.php");
$id=$_GET['id'];
$name=$_POST["name"];
$code=$_POST["code"];
$detail=$_POST["detail"];
$query="UPDATE tbl_law SET category_id ='$code'  ,law_name ='$name', law_detail='$detail' where id='$id'";			
$query = mysqli_query($conn,$query);
header("Location: ./../../page-law.php");
?>