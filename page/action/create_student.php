<?php

include ("./../database/connect.php");
$id=$_POST["studid"];
$name=$_POST["Firstname"];
$lastname=$_POST["Lastname"];
$address=$_POST["address"];
$birthday=$_POST["birthday"];
$contact=$_POST["phone"];
$email=$_POST["email"];
$password=$_POST["password"];
$datecreated=date("Y-m-d H:i");
$password = password_hash($password, PASSWORD_DEFAULT);
$sql = "SELECT * FROM tbl_masterlist where id= '{$id}'";
         $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
              			$sql = "SELECT * FROM tbl_register where id ='{$id}'";
									$result1 = $conn->query($sql);
				       					if ($result1->num_rows == 0) {
				              					$query ="INSERT INTO tbl_register(id,name,lastname,address,email,contact,birthday,password,datecreated) "; 
												$query .="VALUE('{$id}','{$name}','{$lastname}','{$address}','{$email}','{$contact}','{$birthday}','{$password}','{$datecreated}')";
												mysqli_query($conn,$query);
				              				}

                   }

}

 header("Location: ./../../page-student.php");
?>