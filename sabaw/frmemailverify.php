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

        $_SESSION[WEBAPP]['user'] = $_GET['email'];

        echo "<script>alert('You have successfully registered!'); window.location = 'index.php';</script>";
        //die;
        //redirect('index.php');
     } else {
        echo "wrong";
     }
}


?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php require_once("header.php"); ?>

     <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section-heading">Verify Email</h2>
                    <h3 class="section-subheading text-muted"><a class="plain" href="index.php">www.flowtork.com</a></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form action = 'frmemailverify.php?email=<?php echo $_GET['email'];
?>' method="post">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group"><br><br>
                                    <span class="default"><h5>Enter Code here ...</h5></span><br>
                                    <input type="text" class="form-control" placeholder="Code *" onkeyup="keytype()" name="code" required data-validation-required-message="Please enter code." style="text-align:center; font-size: 20px;">
                                    <span><p class="help-block text-danger"></p></span>

                                </div>
                                
                                
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                     Resend code?
                                    <button type="button" id="myBtn" class="btnDisable" disabled onclick="window.location = 'sendemailcode.php?email=<?php echo $_GET['email']; ?>'"><div id="myTimer"></div></button>
                                       
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
<script type="text/javascript">
var sec = 15;
var myTimer = document.getElementById('myTimer');
var myBtn = document.getElementById('myBtn');   
window.onload = countDown;

function countDown() {
  if (sec < 10) {
    myTimer.innerHTML = "0" + sec;
  } else {
    myTimer.innerHTML = sec;
  }
  if (sec <= 0) {
    $("#myBtn").removeAttr("disabled");
    $("#myBtn").removeClass().addClass("btnEnable");
    $("#myTimer").fadeTo(2500, 0);
    myBtn.innerHTML = "Resend code!";
    return;
  }
  sec -= 1;
  window.setTimeout(countDown, 1000);
}
</script>


  <footer>
       <?php require_once("footer.html"); ?>
    </footer>
</html>