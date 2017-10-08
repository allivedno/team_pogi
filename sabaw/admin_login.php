
<?php

    
    require_once("support/config.php");

    if (isset($_POST["email"]) && isset($_POST["password"]))
    {
        $user=$con->myQuery("SELECT * FROM `admin_account` WHERE email=? AND password=? AND is_deleted=0 LIMIT 1",array($_POST['email'],$_POST['password']))->fetch(PDO::FETCH_ASSOC);
                    $is_login=1;
                    // $con->myQuery("UPDATE users SET is_login='$is_login' where username=?",array($_POST['username']));
        if (!empty($user)) {

           
            $_SESSION[WEBAPP]['user'] = $user['id'];

            insertAuditLog($_SESSION[WEBAPP]['user'],"{$user['full_name']} Logged in.");
            echo "<script>alert('login seccessful'); window.location = 'admin.php';</script>";
            //redirect('index.php');
        }else {
            
           echo "<script>alert('wrong username or password'); window.location = 'admin_login.php';</script>";
        }
        die;
    }


?>
<html>
<head>

<?php require_once("header.php"); ?>
</head>
<body>
<br><br>
<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-4">
    
                    <div class="login-box" >
                            <div class="login-box-body" >
                                
                                   <!--  <div class="login-logo text-center">
                                        <a href="index.php"><img src="img/ftclogo.png" class='img-responsive center-block' ></a><br><br>
                                    </div> -->
                                    <!-- /.login-logo -->
                              <br>
                                <h3><p class="h5 text-center mb-4">Admin Login</p></h3> 
                                               
                                         <!-- <div class="col-md-12 text-center">         -->

                                                 <form class="form" role="form" method="post" action="admin_login.php" accept-charset="UTF-8" id="login-nav">
                                                        <div class="md-form">
                                                        
                                                                    <i class="fa fa-envelope prefix grey-text"></i>
                                                                    <input name="email" type="text" class="form-control" id="defaultForm-email" required>
                                                                       <label for="defaultForm-email">Your email</label>
                                                        </div>

                                                        <div class="form-group">
                                                             
                                                             
                                                             <div class="md-form">
                                                                    <i class="fa fa-lock prefix grey-text"></i>
                                                                    <input name="password" type="password" class="form-control" id="defaultForm-pass" required>
                                                                      <label for="defaultForm-pass">Your password</label>
                                                            </div>
                                                             <div class="help-block text-right"><a href="frm_forgotpass.php">Forget the password ?</a></div>
                                                        </div>
                                                        <div class="form-group">
                                                             <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                        </div>
                                                        <div class="checkbox">
                                                             
                                                        </div>
                                                 </form>
                                                   
                                         </div>
                            </div>
                                           
                    </div>
                 </div>
            </div>

        </div>
</section>
<?php   require_once("footer.html"); ?> 
</body>
</html>
