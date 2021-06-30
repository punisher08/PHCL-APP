<div class="modal fade" id="delete<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="POST" action="./page/action/delete_student.php?id=<?php echo $id;?>">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Delete</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="edit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
        <form action="./page/action/update_student.php?id=<?php echo $id;?>" method="post" class="form-horizontal">
               <div class="modal-header">
        <h5 class="modal-title">Edit
         Student</h5>
               </div>
      <div class="modal-body">       
       <div class="form-group">
          <div class="col-sm-6">
            <label for="company" class=" form-control-label">First Name</label>
            <input type="text" id="Firstname" name="Firstname" placeholder="<?php echo $name;?>" class="form-control" required>
          </div>
          <div class="col-sm-6">
             <label for="vat" class=" form-control-label">Last Name</label>
              <input type="text" id="Lastname" name="Lastname" placeholder="<?php echo $lname;?>" class="form-control" required>
          </div>
        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                          <label for="address" class=" form-control-label">Address</label>
                          <input type="text" id="address" name="address" placeholder="<?php echo $address;?>" class="form-control" required>
                          </div>
                        </div>
                        
                      
              <div class="form-group">
              <div class="col-sm-6">
              <label for="password" class=" form-control-label">Birthday</label>
              <input type="date" id="password"  name="birthday" value ="<?php echo $Birthday;?>"class="form-control" required>
               </div>
               <div class="col-sm-6">
              <label for="password" class=" form-control-label"> Contact No.</label>
              <input type="text" id="phone"   name="phone" placeholder="<?php echo $contact;?>" class="form-control" required> 
              </div>
              </div>
              <div class="form-group">
                            <div class="col-sm-12">
                          <label for="address" class=" form-control-label">Email Address</label>
                          <input type="text" id="email" name="email" placeholder="<?php echo $email;?>" class="form-control" required>
                          </div>
                        </div>
              <div class="form-group">
              <div class="col-sm-6">
              <label for="password" class=" form-control-label">Password</label>
              <input type="password" id="password"  name="password" placeholder="Password" class="form-control" required>
               </div>
               <div class="col-sm-6">
              <label for="password" class=" form-control-label"> Confirm Password</label>
              <input type="password" id="password2"   name="password2" placeholder="Confirm Password" class="form-control" required>
              </div>
              </div>
                
     </div>  
     <div class="modal-footer">
   
                
                <button type="button" class="btn btn-danger btn-sm float-right" data-dismiss="modal"><i class="fa fa-sign-out"></i> Close </button>
                <button type="submit" class="btn btn-primary btn-sm float-right"><i class="fa fa-dot-circle-o"></i> Save </button>
        </div>
    </div>
  
  </form>
  </div>
</div>
</div>