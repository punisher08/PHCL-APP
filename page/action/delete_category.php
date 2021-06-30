<?php
include ("./../database/connect.php");
		$id=$_GET['id'];
		$query="DELETE from tbl_category where category_id = '{$id}'";
		$query = mysqli_query($conn,$query);
		 header("Location: ./../../page-category.php");
?>