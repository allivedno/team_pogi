<?php
require_once("support/config.php");
$error = '';

$email_check=$con->myQuery("SELECT * FROM `user` WHERE email=? AND is_deleted=0 LIMIT 1",array($_GET['email']))->fetch(PDO::FETCH_ASSOC);


if (empty($email_check['email_code'])) {
    redirect('frmsignup.php');

}
if (empty($_GET['email'])) {
    redirect('frmsignup.php');
}


if (isset($_POST['submit']))
{


     $code=$con->myQuery("SELECT * FROM `user` WHERE email=? AND email_code=? AND is_deleted=0 LIMIT 1",array($_GET['email'],$_POST['code']))->fetch(PDO::FETCH_ASSOC);
     $error = '';
     if (!empty($code)) {
        $con->myQuery("UPDATE user SET email_code='' WHERE email=? AND is_deleted=0",array($_GET['email']));

        echo "<script>alert('You have successfully registered!'); window.location = index.php';</script>";
        
        //redirect('');
     } else {
        echo "wrong";
     }
}


?>
<script type="text/javascript">
$(function(){
     $(".tin").inputmask("999-999-999-999", {"placeholder": "###-###-###-###"});
 }
</script>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Illuminate|Support</title>
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
                    <h2 class="section-heading">Verify Email</h2>
                    <h3 class="section-subheading text-muted">Illuminate.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action = 'frmemailverify.php?email=<?php echo $_GET['email'];
?>' method="post">
                        <div class="row">
                            <div class="col-md-16">
                                <div class="form-group">
                                <span class="badge"><h2>Enter Code here ...</h2></span><br><br><br>
                                    <input type="text" class="form-control .tin" placeholder="Code *" onkeyup="keytype()" name="code" required data-validation-required-message="Please enter code." style="text-align:center; font-size: 20px;">
                                    <span><p class="help-block text-danger"></p></span>
                                </div>
                                
                                
                            </div>
                            
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><br><br>
                                <button type="submit" class="btn btn-xl" name="submit">Continue</button>
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