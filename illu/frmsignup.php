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
                
        
             

                    //var_dump($supervisor);
                if (!empty($inputs['email']))  {
                        $header="Email Verification";
                        $message="Hi ".$inputs['name'].",\n this is to verify your email address.\nyour verification code is ".$email_code;
                        $message=email_template($header,$message);
                        //var_dump($email_settings);
                        //emailer($username,$password,$from,$to,$subject,$body,$host='tls://smtp.gmail.com',$port=465
                        PHPemailer('cjayconocono@gmail.com','cJay1996',"glypp@flowtork.com",$inputs['email'],"Verify your email address",$message,'tls://smtp.gmail.com',587);

                        redirect('frmemailverify.php?email='.$inputs['email']);

                } 
                
                
        }

        
    
}
 ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Illuminate|Signup</title>
<style type="text/css">
    
    iframe
    {
        background: transparent;
        border: transparent;

      
    }

    span,button,h2
    {
        text-shadow: 3px 3px 3px black;
    }
</style>




    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/trip.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
	<title></title>
</head>
<body>
<?php require_once("header.php"); ?>

     <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Register/Signup</h2>
                    <h3 class="section-subheading text-muted">Illuminate.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action = 'frmsignup.php' method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <span class="badge"><h2>Name</h2></span>
                                    <input type="text" class="form-control" placeholder="Your Name *" onkeyup="keytype()" name="name" id="name" required data-validation-required-message="Please enter your name.">
                                    <span><p class="help-block text-danger"></p></span>
                                </div>
                                <div class="form-group">
                                 <span class="badge"><h2>Email</h2></span>
                                    <input type="email" class="form-control" placeholder="Email *" name="email" id="email" required data-validation-required-message="Please enter your email.">
                                    <span><p class="help-block text-danger"></p></span>
                                </div>
                                <div class="form-group">
                                 <span class="badge"><h2>Password</h2></span>
                                    <span><input type="text" class="form-control" placeholder="Password *" onkeyup="keytype()" name="password" required data-validation-required-message="Please enter your password.">
                                   <p class="help-block text-danger"></p></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <span class="badge"><h2>Contact Number</h2></span>
                                    <span><input type="text" class="form-control" placeholder="Email *" onkeyup="keytype()" name="contact" required data-validation-required-message="Please enter your contact number.">
                                   <p class="help-block text-danger"></p></span>
                                </div>

                                 <div class="form-group">
                                  <span class="badge"><h2>Security Question</h2></span>
                                    <span>

                                    <select class="form-control" placeholder="Email *" onkeyup="keytype()" name='SQ1' required data-validation-required-message="Please enter your Security Question." style=" height:60px;">
                                      <option value=""><font size='150'>Security Question 1&nbsp</h1></option>
                                      <option value="What is your Dream job?">What is your Dream job?</option>
                                      <option value="Who was your first crush?">Who was your first crush?</option>
                                      <option value="What was the name of your first pet?">What was the name of your first pet?</option>
                                    </select>
                                   <p class="help-block text-danger"></p></span>
                                </div>
                                <div class="form-group">
                                 <span class="badge"><h2>Answer</h2></span>
                                    <span><input type="text" class="form-control" placeholder="Answer *" onkeyup="keytype()" name="Ans1" required data-validation-required-message="Please enter your Answer.">
                                   <p class="help-block text-danger"></p></span>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
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


</body>

  <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

  <footer>
        <div class="container">
            <div class="row">
             
                
                   
                    <center><span class="copyright">Copyright &copy; Your Website 2016</span>
                </center>
               
          
            </div>
        </div>
    </footer>
</html>