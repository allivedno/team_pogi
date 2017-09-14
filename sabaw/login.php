
<?php


    require_once("support/config.php");

    if (isset($_POST["email"]) && isset($_POST["password"]))
    {
        $user=$con->myQuery("SELECT * FROM `user` WHERE email=? AND password=? AND is_deleted=0 LIMIT 1",array($_POST['email'],decryptIt($_POST['password'])))->fetch(PDO::FETCH_ASSOC);
                    $is_login=1;
                    // $con->myQuery("UPDATE users SET is_login='$is_login' where username=?",array($_POST['username']));
        if (!empty($user['email_code'])) {
            echo "<script>alert('You need to verify your email first'); window.location = 'sendemailcode.php?email=".$_POST["email"]."';</script>";
        }

        else if (!empty($user)) {

            echo "login seccessful";
            $_SESSION[WEBAPP]['user'] = $user['email'];
            redirect('index.php');
        }else {
            echo encryptIt($_POST['password']);
            echo "wrong username or password";
            die;
        }

    }


?>

    
