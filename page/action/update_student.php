<?php
include ("./../database/connect.php");
$id=$_GET['id'];
$name=$_POST["Firstname"];
$lastname=$_POST["Lastname"];
$address=$_POST["address"];
$birthday=$_POST["birthday"];
$contact=$_POST["phone"];
$email=$_POST["email"];
$password=$_POST["password"];
$password = password_hash($password, PASSWORD_DEFAULT);
$query="UPDATE tbl_register SET name ='$name' , lastname ='$lastname',address='$address',contact='$contact',birthday='$birthday',password='$password',email='$email' where id='$id'";			
$query = mysqli_query($conn,$query);
header("Location: ./../../page-student.php");
?>