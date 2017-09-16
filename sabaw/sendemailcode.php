<?php
require_once("support/config.php");

echo "Loading ...";
if (!empty($_GET['email']))  {
	$user_information=$con->myQuery("SELECT * FROM `user` WHERE email=? AND is_deleted=0 LIMIT 1",array($_GET['email']))->fetch(PDO::FETCH_ASSOC);

                        $header="Hi <b>".$user_information['full_name'] ."</b>,";
                        $message="Your validation code:<br> <h1>".$user_information['email_code']."</h1><br>Please use this validation code to verify your email." ;
                        $message=email_template($header,$message);
                        //var_dump($email_settings);
                        //emailer($username,$password,$from,$to,$subject,$body,$host='tls://smtp.gmail.com',$port=465
                        PHPemailer('glyphinfo17@gmail.com','glyph2017',"glypp@flowtork.com",$user_information['email'],"Verify your email address",$message,'tls://smtp.gmail.com',587);
                        
                        echo "<script>alert('a confirmation email has been sent to ".$user_information['email'].".'); window.location = 'frmemailverify.php?email=".$user_information['email']."';</script>";
                        // redirect('frmemailverify.php?email='.);

} else {
	die;
}

?>