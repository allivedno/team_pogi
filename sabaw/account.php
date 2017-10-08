<?php
require_once("support/config.php");
$error = '';

$user_info = getUserDetails($_SESSION[WEBAPP]['user']); 

 $input = $_POST;
if (isset($_POST['submit']))
{
        if($input['password'] == $input['password2']) {
       
            $name = $input['name'];
            $contact = $input['contact'];
            $password = decryptIt($input['password']);
            $con->myQuery("UPDATE user SET full_name='$name', contact_no='$contact', password='$password' WHERE id = ?",array($_SESSION[WEBAPP]['user']));
            
            echo "<script>alert('Successfully Changed');</script>";
        } else {
             echo "<script>alert('Password does not match');</script>";
        }
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

   
<?php require_once("header.php"); ?>
</head>

  <body>
<br><br>

     <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-12 text-center">
                     <h3><p class="h5 text-center mb-4">Account Setting</p></h3> 
    
                    
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-lg-6 offset-3">
                    <form action = 'account.php' method="post">
                        <div class="row">
                            <div class="col-md-12">
                               <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="email" class="form-control" value="<?php echo $user_info['email']; ?>" name="email" id="email" disabled>
                                    <label for="email">Your Email</label>
                                </div>
                                    
                               <div class="md-form">
                                <i class="fa fa-users prefix grey-text"></i>
                               
                                    <input type="text" class="form-control" value="<?php echo $user_info['full_name']; ?>" onkeyup="keytype()" name="name" id="name" >
                                    <label for="name">Your Name</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-phone prefix grey-text"></i>
                                    <input type="text" class="form-control" value="<?php echo $user_info['contact_no']; ?>" id="contact" name="contact" required data-validation-required-message="Please enter your contact number.">
                                   <label for="contact">Your Contact Number</label>
                                </div>
                               
                                <div class="md-form">
                                    <i class="fa fa-key prefix grey-text"></i>
                                   <input type="password" class="form-control" id="password" name="password" required data-validation-required-message="Please enter your password.">
                                   <label for="password">Your Password</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-key prefix grey-text"></i>
                                   <input type="password" class="form-control" id="password" name="password2" required data-validation-required-message="Please enter your password.">
                                   <label for="password">Confirm Password</label>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><br>
                                <button type="submit" class="btn btn-primary btn-md" name="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
    <br><br><br>
    </section>


<?php require_once("footer.html"); ?>
</body>

</html>