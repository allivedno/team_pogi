<?php
require_once("support/config.php");
$error = '';

if (isset($_POST['submit']))
{
   
        

        $email_check=$con->myQuery("SELECT * FROM `user` WHERE email=? AND is_deleted=0 LIMIT 1",array($_POST['email']))->fetch(PDO::FETCH_ASSOC);
                   
                    // $con->myQuery("UPDATE users SET is_login='$is_login' where username=?",array($_POST['username']));
        if (!empty($email_check)) {
            echo "You have a following error.";
        }
        
        if (!empty($email_check)) {

            echo $error = "<li>Email is not available</li>";
        }
        if (empty($error)) {
            
            $con->beginTransaction();   
            $date = new DateTime();
                
                $inputs = $_POST;
                // var_dump($inputs);
                // die;
                $date_applied=date_format($date, 'Y-m-d');
                unset($inputs['password1']);
                unset($inputs['submit']);
                $email_code=rand(1000,9999);
                $params=array(
                    'full_name'=>$inputs['name'],
                    
                    'password'=>decryptIt($inputs['password']),
                    'contact'=>$inputs['contact'],
                    'email'=>$inputs['email'],
                    'sq'=>$inputs['SQ1'],
                    'ans'=>$inputs['Ans1'],
                    'email_code'=>$email_code
                    
                    

                );

                $con->myQuery("INSERT INTO user (full_name,password,email,contact_no,password_question,password_answer,email_code) VALUES 
                    (:full_name,:password,:email,:contact,:sq,:ans,:email_code)",$params);
                $last_id = $con->lastInsertId();
                

                $con->commit(); 

                insertAuditLog($_SESSION[WEBAPP]['user'],"{$inputs['name']} Created a account.");
        
                redirect('sendemailcode.php?email='.$inputs['email']);

                    //var_dump($supervisor);
                
                
                
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
                     <h3><p class="h5 text-center mb-4">Register/Signup</p></h3> 
    
                    
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-lg-12">
                    <form action = 'frmsignup.php' method="post">
                        <div class="row">
                            <div class="col-md-6">
                               
                                    
                               <div class="md-form">
                                <i class="fa fa-users prefix grey-text"></i>
                               
                                    <input type="text" class="form-control" onkeyup="keytype()" name="name" id="name" >
                                    <label for="name">Your Name</label>
                                </div><br>
                               <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email.">
                                    <label for="email">Your Email</label>
                                </div><br>
                                <div class="md-form">
                                    <i class="fa fa-key prefix grey-text"></i>
                                   <input type="password" class="form-control" id="password" name="password" required data-validation-required-message="Please enter your password.">
                                   <label for="password">Your Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form">
                                    <i class="fa fa-phone prefix grey-text"></i>
                                    <input type="text" class="form-control" id="contact" name="contact" required data-validation-required-message="Please enter your contact number.">
                                   <label for="contact">Your Contact Number</label>
                                </div><br>
                                    <div class="md-form">
                                    <i class="fa fa-shield prefix grey-text"></i>
                                   
                                    <div class="offset-1">
                                        <select class="form-control"  id='sq' name='SQ1' required data-validation-required-message="Please enter your Security Question." style=" height:52px;">
                                          <option value=""><font size='150'>Security Question 1&nbsp</h1></option>
                                          <option value="What is your Dream job?">What is your Dream job?</option>
                                          <option value="Who was your first crush?">Who was your first crush?</option>
                                          <option value="What was the name of your first pet?">What was the name of your first pet?</option>
                                        </select>
                                    </div>
                                 
                                </div><br>
                               <div class="md-form">
                                    <i class="fa fa-shield prefix grey-text"></i>
                                   
                                    <input type="text" class="form-control" id="ans" name="Ans1" required data-validation-required-message="Please enter your Answer.">
                                   <label for="ans">Your Answer</label>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><br>
                                <button type="submit" class="btn btn-primary btn-md" name="submit">Register</button>
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