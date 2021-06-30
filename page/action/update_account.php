<?php
include ("./../database/connect.php");
$id=$_GET['id'];
$name=$_POST["Firstname"];
$lastname=$_POST["Lastname"];
$address=$_POST["address"];
$birthday=$_POST["birthday"];
$contact=$_POST["phone"];
$password=$_POST["password"];
$password = password_hash($password, PASSWORD_DEFAULT);
$query="UPDATE tbl_admin SET name ='$name' , lastname ='$lastname',address='$address',contact='$contact',birthday='$birthday',password='$password' where id='$id'";			
$query = mysqli_query($conn,$query);
header("Location: ./../../page-admin.php");
?>