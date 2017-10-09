
<?php


    require_once("support/config.php");
// die;
//     if(!isLoggedIn()) {
//         redirect('index.php');
//     }
    

    if (isset($_POST["email"]) && isset($_POST["password"]))
    {
        $user=$con->myQuery("SELECT * FROM `user` WHERE email=? AND password=? AND is_deleted=0  LIMIT 1",array($_POST['email'],decryptIt($_POST['password'])))->fetch(PDO::FETCH_ASSOC);
                    $is_login=1;
                    // $con->myQuery("UPDATE users SET is_login='$is_login' where username=?",array($_POST['username']));
        if (!empty($user['email_code'])) {
            echo "<script>alert('You need to verify your email first'); window.location = 'sendemailcode.php?email=".$_POST["email"]."';</script>";
        }

        else if (!empty($user)) {

            // echo "login seccessful";
            if ($user['is_deactivate'] == '1') { 
                echo "<script>alert('Your account has been deactivated'); window.location = 'frmlogin.php';</script>";
            }
            else {
                $_SESSION[WEBAPP]['user'] = $user['id'];

                echo "<script>alert('login seccessful'); window.location = 'index.php';</script>";
            }
            
        }else {
            // echo encryptIt($_POST['password']);
            // echo "wrong username or password";

            echo "<script>alert('wrong username or password'); window.location = 'frmlogin.php';</script>";

            
        }

    } else {
        redirect('index.php');
    }


?>

    
