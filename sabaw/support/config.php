<?php
	session_start();
	date_default_timezone_set("Asia/Manila");
	define("WEBAPP", 'Flowtork');
	//$_SESSION[WEBAPP]=array();
	// function __autoload($class)
	// {
	// 	require_once 'class.'.$class.'.php';
	// }
	function redirect($url)
	{
		header("location:".$url);
	}
	function getFileExtension($filename){
		return substr($filename, strrpos($filename,"."));
	}
// ENCRYPTOR
	function encryptIt( $q ) {
	    $cryptKey  = 'JPB0rGtIn5UB1xG03efyCp';
	    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
	    return( $qEncoded );
	}
	function decryptIt( $q ) {
	    $cryptKey  = 'JPB0rGtIn5UB1xG03efyCp';
	    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
	    return( $qDecoded );
	}
//End Encryptor
/* User FUNCTIONS */
	function isLoggedIn()
	{
		if(empty($_SESSION[WEBAPP]['user']))
		{
			return false;
		}
		else
		{
			return true; }
	}
	function toLogin($url=NULL)
	{
		if(empty($url))
		{
			Alert('Please Log in to Continue');
			header("location: login.php");
		}
		else{
			header("location: ".$url);
		}
	}
	function Login($user)
	{
		$_SESSION[WEBAPP]['user']=$user;
	}
/* End User FUnctions */
//HTML Helpers
	

/* End BOOTSTRAP Helpers */

/* SPECIFIC TO WEBAPP */

function AllowUser($user_type_id){
	if(array_search($_SESSION[WEBAPP]['user']['user_type'], $user_type_id)!==FALSE){
		return true;
	}
	return false;
}

function insertAuditLog($user, $action)
{
    #user,action,date
    if (file_exists("./audit_log.txt")) {
        $user=htmlspecialchars($user);
        $action=htmlspecialchars($action);
        $new_input=json_encode(array($user,$action,date('Y-m-d H:i:s')), JSON_PRETTY_PRINT);
        $file = fopen("./audit_log.txt", "r+");
        fseek($file, -4, SEEK_END);
        fwrite($file, ",".$new_input."\n\t]\n}");
        fclose($file);
    } else {
        $file = fopen("./audit_log.txt", "w+");

        $data=json_encode(array("data"=>array(array("NONE","INITIAL START UP",date('Y-m-d H:i:s')))), JSON_PRETTY_PRINT);
        fwrite($file, $data);
        fclose($file);
    }
}


function PHPemailer($username, $password, $from, $to, $subject, $body, $host='tls://smtp.gmail.com', $port=587) {
    require_once("support/PHPMailer/PHPMailerAutoload.php");
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'tls://smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'glyphinfo17@gmail.com';
    $mail->Password = 'glyph2017';
    $mail->SMTPSecure = 'tls';
    $mail->Port = '587';

    $mail->setFrom($from);
    
   
    $mail->AddBCC($to);
    

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body    = $body;
    // var_dump($mail->ErrorInfo);
    return $mail->send();
}

function getEmpDetails($emp_id){
	global $con;
	return $con->myQuery("SELECT * FROM employees WHERE id=? LIMIT 1",array($emp_id))->fetch(PDO::FETCH_ASSOC);
}


function email_template($header, $message)
{
    return <<<html
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
    <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Spark Global Tech Systems Inc. HRIS</title>


        <style type="text/css">
            img {
                max-width: 100%;
            }
            body {
                -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;
            }
            body {
                background-color: #f6f6f6;
            }
            @media only screen and (max-width: 640px) {
              body {
                padding: 0 !important;
            }
            h1 {
                font-weight: 800 !important; margin: 20px 0 5px !important;
            }
            h2 {
                font-weight: 800 !important; margin: 20px 0 5px !important;
            }
            h3 {
                font-weight: 800 !important; margin: 20px 0 5px !important;
            }
            h4 {
                font-weight: 800 !important; margin: 20px 0 5px !important;
            }
            h1 {
                font-size: 22px !important;
            }
            h2 {
                font-size: 18px !important;
            }
            h3 {
                font-size: 16px !important;
            }
            .container {
                padding: 0 !important; width: 100% !important;
            }
            .content {
                padding: 0 !important;
            }
            .content-wrap {
                padding: 10px !important;
            }
            .invoice {
                width: 100% !important;
            }
        }
    </style>
</head>

<body itemscope itemtype="http://schema.org/EmailMessage" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6">

    <table class="body-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6"><tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
        <td class="container" width="600" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;" valign="top">
            <div class="content" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                     <div class="login-logo">
                                        <center><img src="http://flowtork.com/images/flowtorklogo.png" class='img-responsive center-block' ></center>
                                    </div>
                <table class="main" width="100%" cellpadding="0" cellspacing="0" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: white; margin: 0; border: 1px solid #e9e9e9;" bgcolor="white"><tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="alert alert-warning" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 16px; vertical-align: top; color: black; font-weight: 500; text-align: left; border-radius: 3px 3px 0 0; background-color: #fff; margin: 0; padding: 20px;" bgcolor="#348EDA" valign="top">
                    {$header}
                </td>
            </tr><tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
            <table width="100%" cellpadding="0" cellspacing="0" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                    <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; text-align: center; margin: 0; padding: 0 0 20px;" valign="top">
                        {$message}
                    </td>
                </tr><tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">

            </td>
        </tr>
        <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
        Thanks,<br>
            www.flowtork.com.
        </td>
    </tr>
</table>
</td>
</tr></table><div class="footer" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;">
</td>
<td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
</tr></table></body>
</html>
html;
}


/* END SPECIFIC TO WEBAPP */
	require_once('class.myPDO.php');
	$con=new myPDO('flowtork','root','');

?>