
<?php


    require_once("support/config.php");

    if (isset($_POST["email"]) && isset($_POST["password"]))
    {
        $user=$con->myQuery("SELECT * FROM `admin_account` WHERE email=? AND password=? AND is_deleted=0 LIMIT 1",array($_POST['email'],decryptIt($_POST['password'])))->fetch(PDO::FETCH_ASSOC);
                    $is_login=1;
                    // $con->myQuery("UPDATE users SET is_login='$is_login' where username=?",array($_POST['username']));
        if (!empty($user)) {

            echo "login seccessful";
            $_SESSION[WEBAPP]['user'] = $user['email'];

            insertAuditLog($_SESSION[WEBAPP]['user'],"{$user['full_name']} Logged in.");
            //redirect('index.php');
        }else {
            
            echo "wrong username or password";
            die;
        }
        die;
    }


?>
<html>
<head>
 <title>Flowtork</title>
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <!-- <link href="css/mdb.min.css" rel="stylesheet"> -->
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">




<link href="css/login.css" rel="stylesheet">

</head>
<body>
<br><br>
<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-4 text-center">
    
                    <div class="login-box" >
                            <div class="login-box-body" style="border-radius: 10px;border: #A5A0A4 1px solid;">
                                
                                    <div class="login-logo">
                                        <a href="index.php"><img src="img/ftclogo.png" class='img-responsive center-block' ></a>
                                    </div><!-- /.login-logo -->
                               
                                <h3><p class="login-box-msg ">Login to your Account</p></h3> 
                            <!--  <h4 class="form-signin-heading">Login to your Account</h4>-->
                                <form action="admin_login.php" method="post">
                                  <div class="form-group has-feedback">
                                    <i class="glyphicon glyphicon-user form-control-feedback"></i>
                                    <input type="text" class="form-control" placeholder="Email" name='email'>
                                    <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
                                  </div>
                                  <div class="form-group has-feedback">
                                    <input type="password" class="form-control" placeholder="Password" name='password'>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12 col-xs-offset-1">
                                      <!--<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>-->
                                      <button type="submit" class="btn btn-primary btn-block">Login</button>
                                      <br/>
                                      <center><a class='' href='forgot_password.php' >Forgot Password</a></center>
                                    </div><!-- /.col -->
                                  </div>
                                </form>
                            </div><!-- /.login-box-body -->
                    </div><!-- /.login-box -->
                </div>
               
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
    <?php   require_once("footer.html"); ?>
</section>
</body>
</html>
