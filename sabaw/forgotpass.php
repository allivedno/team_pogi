<?php
require_once("support/config.php");


if (!empty($_GET['email']) && !empty($_GET['code'])) {

    redirect('frmchangepass.php?email='.$_GET['email'].'&code='.$_GET['code']);
} else {

    if (!empty($_POST["email"]))
        {
            $length = 20;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
        
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            $email=$con->myQuery("SELECT * FROM `user` WHERE email=? AND is_deleted=0 LIMIT 1",array($_POST['email']))->fetch(PDO::FETCH_ASSOC);
           
                        // $con->myQuery("UPDATE users SET is_login='$is_login' where username=?",array($_POST['username']));
            // if (!empty($user['email_code'])) {
            //     echo "<script>alert('You need to verify your email first'); window.location = 'sendemailcode.php?email=".$_POST["email"]."';</script>";
            // }

            // else
            if (!empty($email)) {

                // echo "login seccessful";
                $user_information=$con->myQuery("SELECT * FROM `user` WHERE email=? AND is_deleted=0 LIMIT 1",array($_POST['email']))->fetch(PDO::FETCH_ASSOC);

                // $id=$user['id'];
                $con->myQuery("UPDATE user SET forgot_password_code='$randomString' WHERE id=".$user_information['id']);
                    
                $header="Hi <b>".$user_information['full_name'] ."</b>,";
                $message="You can change your password in this link below:<br>".$actual_link."?email=".$user_information['email']."&code=".$randomString."." ;
                $message=email_template($header,$message);
             
                            //var_dump($email_settings);
                            //emailer($username,$password,$from,$to,$subject,$body,$host='tls://smtp.gmail.com',$port=465
                PHPemailer('glyphinfo17@gmail.com','glyph2017',"glypp@flowtork.com",$user_information['email'],"Forgot Password",$message,'tls://smtp.gmail.com',587);
                
                echo "<script>alert('a confirmation email has been sent to ".$user_information['email'].".'); window.location = 'index.php';</script>";


             
                
            }else {
                // echo encryptIt($_POST['password']);
                // echo "wrong username or password";

                echo "<script>alert('No email found'); window.location = 'frm_forgotpass.php';</script>";

                
            }

    } 
    else {
            redirect('index.php');
    }
}

?>