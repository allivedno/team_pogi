<?php
require_once("support/config.php");
$error = '';

$user_info = getUserDetails($_SESSION[WEBAPP]['user']); 

 $input = $_POST;
if (isset($_POST['submit']))
{
        $pass = $input['password'];
       $con->myQuery("UPDATE defaultpass SET `password`='$pass'");

        redirect('admin.php?form=defaultpass');
}
 // $user=$con->myQuery("SELECT * FROM `user` WHERE email=? AND password=? AND is_deleted=0 LIMIT 1",array($_POST['email'],decryptIt($_POST['password'])))->fetch(PDO::FETCH_ASSOC);
// $con->myQuery("SELECT * FROM user WHERE id=? LIMIT 1",array($emp_id))->fetch(PDO::FETCH_ASSOC);
$password = $con->myQuery("SELECT * FROM `defaultpass` LIMIT 1")->fetch(PDO::FETCH_ASSOC);

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
                     <h3><p class="h1 text-center mb-4">Default Password</p></h3> 
    
                    
                </div>
            </div><br><br>
                      <form action="defaultpass.php" method="POST"> 
                              <div class="col-lg-6 col-sm-offset-3">
                                <div class="md-form">
                                    <label for="password">Default Password</label>
                                   <input type="text" class="form-control" id="password" name="password" value="<?php echo $password['password']; ?>" required data-validation-required-message="Please enter your password.">
                                   
                                </div>

                               <br><br>
                               
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