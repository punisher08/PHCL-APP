<?php
include ("./../database/connect.php");
if (isset($_POST['submit'])){
	
	$username = $_POST["Username"];
	$password = $_POST["password"];
	
	
	$username=mysqli_real_escape_string($conn,$username);
	$password=mysqli_real_escape_string($conn,$password);
	
				

			
			
			$query="SELECT * FROM tbl_admin  WHERE username='{$username}'";
			$query= mysqli_query($conn,$query);
			

			while($row=mysqli_fetch_array($query)){
				
				 if (mysqli_num_rows($query)== 1){
					
					// if(password_verify($password, $row['password'])){
					if($password == $row['password']){
						session_start();
						$_SESSION['id']=$row['id'];
						$_SESSION['name']=$row['firstname'];
						$_SESSION['lastname']=$row['lastname'];
						$_SESSION['username']=$row['username'];
						header("Location: ./../../index.php");
					}
					else{
						echo '<pre>';
						print_r('error');
						echo '</pre>';
						die();
					header("Location: ./../../page-login.php");
					
					}
				}
				else{
				
					header("Location: ./../../page-login.php");
					}	
			}
			header("Location: ./../../page-login.php");
		}
		


?>