<?php
include ("./../database/connect.php");
		$id=$_GET['id'];
		$query="DELETE from tbl_register where id = '{$id}'";
		$query = mysqli_query($conn,$query);

		 header("Location: ./../../page-student.php");
?>



