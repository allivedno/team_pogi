<?php
require_once("support/config.php");

echo "Loading ...";
if (!empty($_GET['email']))  {
	$user_information=$con->myQuery("SELECT * FROM `user` WHERE email=? AND is_deleted=0 LIMIT 1",array($_GET['email']))->fetch(PDO::FETCH_ASSOC);

                        $header="Email Verification";
                        $message="Hi ".$user_information['name'].",\n this is to verify your email address.\nyour verification code is ".$user_information['email_code'];
                        $message=email_template($header,$message);
                        //var_dump($email_settings);
                        //emailer($username,$password,$from,$to,$subject,$body,$host='tls://smtp.gmail.com',$port=465
                        PHPemailer('cjayconocono@gmail.com','cJay1996',"glypp@flowtork.com",$user_information['email'],"Verify your email address",$message,'tls://smtp.gmail.com',587);

                        redirect('frmemailverify.php?email='.$user_information['email']);

} else {
	die;
}

?>