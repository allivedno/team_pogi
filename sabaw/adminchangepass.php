<?php
require_once("support/config.php");
$error = '';

$user_info = getUserDetails($_SESSION[WEBAPP]['user']); 

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
                     <h3><p class="h1 text-center mb-4">Account Setting</p></h3> 
    
                    
                </div>
            </div><br><br>
                      <form action="adminchangepass.php" method="POST"> 
                              <div class="col-lg-6 col-sm-offset-3">
                                <div class="md-form">
                                    <label for="password">Your Password</label>
                                   <input type="password" class="form-control" id="password" name="password" required data-validation-required-message="Please enter your password.">
                                   
                                </div>

                                <div class="md-form">
                                    <label for="password">Confirm Password</label>
                                   <input type="password" class="form-control" id="password" name="password2" required data-validation-required-message="Please enter your password.">
                                   
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