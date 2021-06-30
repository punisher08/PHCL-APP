<?php

include ("./../database/connect.php");

$name=$_POST["Firstname"];
$lastname=$_POST["Lastname"];
$address=$_POST["address"];
$birthday=$_POST["birthday"];
$contact=$_POST["phone"];
$username=$_POST["Username"];
$password=$_POST["password"];


$password = password_hash($password, PASSWORD_DEFAULT);

$query="INSERT INTO tbl_admin(firstname,lastname,address,contact,birthday,username,password) VALUES('{$name}','{$lastname}','{$address}','{$contact}','{$birthday}','{$username}','{$password}')";							
// $query = mysqli_query($conn,$query);
if($conn->query($query)){
echo '<pre>';
print_r('success');
echo '</pre>';
}
else{
	echo '<pre>';
	print_r($conn->query($query));
	echo '</pre>';
}



header("Location: ./../../page-admin.php");
?>