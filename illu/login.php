
<?php


    require_once("support/config.php");

    if (isset($_POST["username"]) && isset($_POST["password"]))
    {
        $user=$con->myQuery("SELECT * FROM `user` WHERE username=? AND password=? AND is_deleted=0 LIMIT 1",array($_POST['username'],decryptIt($_POST['password'])))->fetch(PDO::FETCH_ASSOC);
                    $is_login=1;
                    // $con->myQuery("UPDATE users SET is_login='$is_login' where username=?",array($_POST['username']));
        
        if (!empty($user)) {

            echo "login seccessful";
        }else {
            echo encryptIt($_POST['password']);
            echo "wrong username or password";
            die;
        }

    }


?>

    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login to flowtork</title>
    <link href="css/login.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script>
        $(function(){
          var $form_inputs =   $('form input');
          var $rainbow_and_border = $('.rain, .border');
          /* Used to provide loping animations in fallback mode */
          $form_inputs.bind('focus', function(){
            $rainbow_and_border.addClass('end').removeClass('unfocus start');
          });
          $form_inputs.bind('blur', function(){
            $rainbow_and_border.addClass('unfocus start').removeClass('end');
          });
          $form_inputs.first().delay(800).queue(function() {
            $(this).focus();
          });
        });
    </script>
        
    </head>
    <body id="home">
        <div class="rain">
            <div class="border start">
                <form>
                    <br><br>
                    <label for="email">Email</label><br>
                    <input name="username" type="text" placeholder="Username"/>
                    <label for="pass">Password</label>
                    <input name="password" type="password" placeholder="Password"/>
                    <input type="submit" value="LOG IN"/>
                    <br><br><br>
                    <h5><center><a href='forgot.php' STYLE="text-decoration: none"><font color = 'red'>Forgot Password?</font></a></h5>
                <h4><center><font color = 'white'>Don't have an account yet? </font><a href='signup.php' STYLE="text-decoration: none"><font color = 'red'>Register now</h4>
                </form>
                <br><br>
                

            </div>
        </div>
    </body>
</html>

</body>
</html>