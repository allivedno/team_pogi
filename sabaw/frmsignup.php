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


     <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Register/Signup</h2>
                    <h3 class="section-subheading text-muted"><a class="plain" href="index.php">www.flowtork.com</a></h3>
                </div>
            </div><br><br><br><br>
            <div class="row">
                <div class="col-lg-12">
                    <form action = 'frmsignup.php' method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                               
                                <span class="default"><h4>Name</h4></span>
                                    <input type="text" class="form-control" placeholder="Your Name *" onkeyup="keytype()" name="name" id="name" required data-validation-required-message="Please enter your name.">
                                    <span><p class="help-block text-danger"></p></span>
                                </div><br>
                                <div class="form-group">
                                 <span class="default"><h4>Email</h4></span>
                                    <input type="email" class="form-control" placeholder="Email *" name="email" id="email" required data-validation-required-message="Please enter your email.">
                                    <span><p class="help-block text-danger"></p></span>
                                </div><br>
                                <div class="form-group">
                                 <span class="default"><h4>Password</h4></span>
                                    <span><input type="password" class="form-control" placeholder="Password *" onkeyup="keytype()" name="password" required data-validation-required-message="Please enter your password.">
                                   <p class="help-block text-danger"></p></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <span class="default"><h4>Contact Number</h4></span>
                                    <span><input type="text" class="form-control" placeholder="Contact Number *" onkeyup="keytype()" name="contact" required data-validation-required-message="Please enter your contact number.">
                                   <p class="help-block text-danger"></p></span>
                                </div><br>

                                 <div class="form-group">
                                  <span class="default"><h4>Security Question</h4></span>
                                    <span>

                                    <select class="form-control" placeholder="Email *" onkeyup="keytype()" name='SQ1' required data-validation-required-message="Please enter your Security Question." style=" height:40px;">
                                      <option value=""><font size='150'>Security Question 1&nbsp</h1></option>
                                      <option value="What is your Dream job?">What is your Dream job?</option>
                                      <option value="Who was your first crush?">Who was your first crush?</option>
                                      <option value="What was the name of your first pet?">What was the name of your first pet?</option>
                                    </select>
                                   <p class="help-block text-danger"></p></span>
                                </div><br>
                                <div class="form-group">
                                 <span class="default"><h4>Answer</h4></span>
                                    <span><input type="text" class="form-control" placeholder="Answer *" onkeyup="keytype()" name="Ans1" required data-validation-required-message="Please enter your Answer.">
                                   <p class="help-block text-danger"></p></span>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><br><br>
                                <button type="submit" class="btn btn-xl" name="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
        <center>
    <div class="form-group">

    </iframe>
    </div>
    </center>
    </section>


<?php require_once("footer.html"); ?>
</body>

</html>