<?php
require_once("support/config.php");
$error = '';

$admin_info = getAdminDetails($_SESSION[WEBAPP]['user']); 

 $input = $_POST;
if (isset($_POST['submit']))
{
        if($input['password'] == $input['password2']) {
       
           
            $password = $input['password'];
            $con->myQuery("UPDATE admin_account SET password='$password' WHERE id = ?",array($_SESSION[WEBAPP]['user']));
            
            echo "<script>alert('Successfully Changed'); window.location = 'admin.php?form=changepass';</script>";
        } else {
             echo "<script>alert('Password does not match');</script>";
        }
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>


</head>

  <body>
<br><br><br><br>

     <!-- Contact Section -->
 
    <section id="contact">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-12 text-center">
                     <h3><p class="h4 text-center mb-4">Profile</p></h3> 
    
                    
                </div>
            </div><br><br>
                      <form  role="form" action="saveadminprofile.php" method="post" enctype="multipart/form-data" >
                              <input type="hidden" class="form-control" value="<?php echo $admin_info['id']; ?>" name="id">
                                   
                              
                              <div class="col-lg-6 col-sm-offset-3">
                                <div class="col-lg-12 col-sm-offset-0 text-center">
                                  <img src="<?php echo $admin_info['picture']; ?>" class="img-circle" height="140px" alt="User Image">
                                   
          
                               
                          

                                    <input type="file" name="userPic" accept="image/*" class="form-control"><br><br><br>
                               
                                </div>

                                <div class="md-form">
                                    <label>Username</label>
                                   <input type="text" class="form-control" value="<?php echo $admin_info['email']; ?>" name="username" required>
                                   
                                </div>

                                <div class="md-form">
                                    <label>Name</label>
                                   <input type="text" class="form-control" value="<?php echo $admin_info['full_name']; ?>" name="name" required>
                                   
                                </div>
                                <div class="md-form">
                                    <label>Contact No.</label>
                                   <input type="text" class="form-control" value="<?php echo $admin_info['contact_no']; ?>" name="contact" required>
                                   
                                </div><br><br>
                                <div class="md-form">
                                     <button type="submit" class="btn btn-primary btn-block" name="submit">Save</button>
                                </div>
                            </div>
                            
                            
                    
                        </div>
                    </form>
                </div>
            </div>
        </div>
     
    <br><br><br>
    </section>



</body>

</html>