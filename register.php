<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <form action="register.php" method="post" class="">
                <div class="modal-header">
                    <h5 class="modal-title">Create Admin</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="company" class=" form-control-label">First Name</label>
                            <input type="text" id="Firstname" name="Firstname" placeholder="First Name" class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="vat" class=" form-control-label">Last Name</label>
                            <input type="text" id="Lastname" name="Lastname" placeholder="Last Name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="address" class=" form-control-label">Address</label>
                            <input type="text" id="address" name="address" placeholder="Enter Address" class="form-control" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="password" class=" form-control-label">Birthday</label>
                            <input type="date" id="password" name="birthday" class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="password" class=" form-control-label"> Contact No.</label >
                            <input type="text" id="phone" name="phone" placeholder="+63" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="Username" class=" form-control-label">Username</label><input type="text" id="Username" name="Username" placeholder="Username" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="password" class=" form-control-label">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="password" class=" form-control-label"> Confirm Password</label>
                            <input type="password" id="password2" name="password2" placeholder="Confirm Password" class="form-control" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm float-right" data-dismiss="modal"><i class="fa fa-sign-out"></i> Close </button>
                    <button type="submit" name="register-admin"class="btn btn-primary btn-sm float-right"><i class="fa fa-dot-circle-o"></i> Save </button>
                </div>
        </form>
        </div>
    </div>
</div>

<?php
include 'page/database/connect.php';
if(isset($_POST['register-admin'])):
$name=$_POST["Firstname"];
$lastname=$_POST["Lastname"];
$address=$_POST["address"];
$birthday=$_POST["birthday"];
$contact=$_POST["phone"];
$username=$_POST["Username"];
$password=$_POST["password"];


$password = password_hash($password, PASSWORD_DEFAULT);

$query="INSERT INTO tbl_admin(firstname,lastname,address,contact,birthday,username,password) VALUES('{$name}','{$lastname}','{$address}','{$contact}','{$birthday}','{$username}','{$password}')";							
$query = mysqli_query($conn,$query);
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



header("Location: page-admin.php");
endif;
?>