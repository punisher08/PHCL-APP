<?php
include ("./../database/connect.php");
 ini_set( 'display_errors', "1");
error_reporting(E_ALL);

		$email= mysqli_real_escape_string($conn, $_POST['email']);
		

				
							
								$sql="SELECT * from tbl_admin where username='BETA'";	
								$result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      $password = password_hash('CCS', PASSWORD_DEFAULT);
									   $query="UPDATE tbl_admin SET password='$password' where username='$email'";			
									   $query = mysqli_query($conn,$query);
										 header("Location: ./../../page-admin.php");
									   
                                    }
                                }
                   
		

?>