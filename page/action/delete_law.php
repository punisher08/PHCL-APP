<?php
include ("./../database/connect.php");
		$id=$_GET['id'];
		$query="DELETE from tbl_law where id = '{$id}'";
		$query = mysqli_query($conn,$query);

		 header("Location: ./../../page-law.php");
?>



